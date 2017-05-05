<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/25/17
 * Time: 3:11 PM
 */

namespace FacturationPro;


class Serializer
{
    public function serialize($element, $route)
    {
        $depth = 0;
        if(is_array($element))
        {
            foreach($element as &$item)
                $element = self::object($item,$depth, $route);
        }
        else
            $element = self::object($element,$depth, $route);
        return $element;
    }

    public function object($object,$depth, $route) {
        if($depth > 2) return;
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($object);
            if(is_array($value))
            {
                foreach ($value as &$element) {
                    if(is_object($element) && strpos(get_class($element),"FacturationPro") !== false)
                        $element = self::object($element,$depth + 1, $route);
                }
            }
            elseif(is_object($value) && strpos(get_class($value),"FacturationPro") !== false)
                $value = self::object($value,$depth + 1, $route);
            if(method_exists($object,"set".str_replace("_","",ucwords($property->getName(),"_"))) && !is_null($value))
                $array[$property->getName()] = $value;
        }
        return $array;
    }
}