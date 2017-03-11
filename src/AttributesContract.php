<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 04:53
 */

namespace Solid\Html;


interface AttributesContract
{
    public function __toString() : string;
    public function setAttributes(array $attributes);
}