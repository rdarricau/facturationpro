<?php
namespace FacturationPro;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:43 AM
 */
class Parser
{
    public function do($response,$destination)
    {
        $destination = $destination;
        if(is_array($response))
        {
            foreach($response as &$item)
                $item = self::object($item,$destination);
        }
        else
            $response = self::object($response,$destination);
        return $response;
    }

    public function object($sourceObject, $destination) {
        $destination = new $destination();
        $sourceReflection = new \ReflectionObject($sourceObject);
        $destinationReflection = new \ReflectionObject($destination);
        $sourceProperties = $sourceReflection->getProperties();
        foreach ($sourceProperties as $sourceProperty) {
            $sourceProperty->setAccessible(true);
            $name = $sourceProperty->getName();
            $value = $sourceProperty->getValue($sourceObject);

            if ($destinationReflection->hasProperty($name)) {
                $propDest = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                if(is_array($value)){
                    if (preg_match('/@var\s+([\w^\s]+)/', $propDest->getDocComment(), $matches)) {
                        list(, $type) = $matches;
                    }
                    foreach($value as &$item)
                        $item = self::object($item,"\\FacturationPro\\Entity\\".$type);
                }
                $propDest->setValue($destination,$value);
            } else {
                $destination->$name = $value;
            }
        }
        return $destination;
    }
}