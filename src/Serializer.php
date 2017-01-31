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
    public function serialize($object,$route)
    {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if(!in_array($property->getName(),$route->getReadable()) && !is_array($property->getValue($object)) && $property->getValue($object))
                $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;
    }
}