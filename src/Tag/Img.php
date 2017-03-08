<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 08/03/17
 * Time: 03:40
 */

namespace Solid\Html\Tag;


class Img extends Tag
{
    public function validate()
    {
        if(!isset($this->attrs[0])){
            throw new \Exception("Attribute src not found!");
        }
        if(!is_string($this->attrs[0])){
            throw new \Exception("Attribute src must be string!");
        }
    }
    public function __toString() :string
    {
        return '<img src="' . $this->attrs[0] .'">';
    }

}