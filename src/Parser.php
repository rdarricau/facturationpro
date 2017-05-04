<?php
namespace FacturationPro;

use FacturationPro\Entity\Account;
use FacturationPro\Entity\Asset;
use FacturationPro\Entity\Category;
use FacturationPro\Entity\CategoryStatus;
use FacturationPro\Entity\Civility;
use FacturationPro\Entity\Country;
use FacturationPro\Entity\Currency;
use FacturationPro\Entity\Customer;
use FacturationPro\Entity\Firm;
use FacturationPro\Entity\Followup;
use FacturationPro\Entity\FollowupStatus;
use FacturationPro\Entity\Invoice;
use FacturationPro\Entity\Item;
use FacturationPro\Entity\Language;
use FacturationPro\Entity\Nature;
use FacturationPro\Entity\Order;
use FacturationPro\Entity\PayBefore;
use FacturationPro\Entity\PaymentMode;
use FacturationPro\Entity\Product;
use FacturationPro\Entity\Purchase;
use FacturationPro\Entity\Quote;
use FacturationPro\Entity\QuoteStatus;
use FacturationPro\Entity\Supplier;
use FacturationPro\Entity\VatExemptionReason;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:43 AM
 */
class Parser
{
    protected $classConstantes = array(
        "\\FacturationPro\\Entity\\CategoryStatus",
        "\\FacturationPro\\Entity\\Civility",
        "\\FacturationPro\\Entity\\Country",
        "\\FacturationPro\\Entity\\Currency",
        "\\FacturationPro\\Entity\\FollowupStatus",
        "\\FacturationPro\\Entity\\Language",
        "\\FacturationPro\\Entity\\Nature",
        "\\FacturationPro\\Entity\\PayBefore",
        "\\FacturationPro\\Entity\\PaymentMode",
        "\\FacturationPro\\Entity\\QuoteStatus",
        "\\FacturationPro\\Entity\\VatExemptionReason"
    );

    public function parse($master,$response,$destination)
    {
        if(is_array($response))
        {
            foreach($response as &$item)
                $item = self::object($master,$item,$destination);
        }
        else
            $response = self::object($master,$response,$destination);
        return $response;
    }

    public function object($master, $sourceObject, $destination) {
        if(is_object($sourceObject)) {
            $destination = new $destination();
            $sourceReflection = new \ReflectionObject($sourceObject);
            $destinationReflection = new \ReflectionObject($destination);

            // For lazyload
            $propDest = $destinationReflection->getProperty("master");
            $propDest->setAccessible(true);
            $propDest->setValue($destination, $master);

            $sourceProperties = $sourceReflection->getProperties();
            foreach ($sourceProperties as $sourceProperty) {
                $sourceProperty->setAccessible(true);
                $name = $sourceProperty->getName();
                $value = $sourceProperty->getValue($sourceObject);

                if ($destinationReflection->hasProperty($name)) {
                    $propDest = $destinationReflection->getProperty($name);
                    $propDest->setAccessible(true);
                    if (is_array($value)) {
                        if (preg_match('/@var\s+([\w^\s]+)/', $propDest->getDocComment(), $matches)) {
                            list(, $type) = $matches;
                        }
                        foreach ($value as &$item)
                            $item = self::object($master, $item, "\\FacturationPro\\Entity\\" . $type);
                    }
                    else
                    {
                        $type = false;
                        if (preg_match('/@var\s+([\w^\s]+)/', $propDest->getDocComment(), $matches)) {
                            list(, $type) = $matches;
                        }
                        if($type)
                            $value = self::object($master, $value, "\\FacturationPro\\Entity\\" . $type);
                    }
                    $propDest->setValue($destination, $value);
                } else {
                    $destination->$name = $value;
                }
            }
        }
        // Cas des constantes
        elseif(in_array($destination,$this->classConstantes) && isset($sourceObject))
            return new $destination((string)$sourceObject);
        // cas généraux
        else
            $destination = $sourceObject;
        return $destination;
    }
}