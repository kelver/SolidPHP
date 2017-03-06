<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 04:53
 */

namespace Solid\Html;


class Attributes
{
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function __toString() : string
    {
        $result = [];
        foreach ($this->attributes as $key=>$value){
            $result[] = $key . '="' . $value . '"';
        }

        return ' '.implode(' ', $result);
    }
}