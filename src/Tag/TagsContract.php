<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 08/03/17
 * Time: 03:32
 */

namespace Solid\Html\Tag;


interface TagsContract
{
    public function validate();
    public function __toString() :string;
}