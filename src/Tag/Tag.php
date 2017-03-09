<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 08/03/17
 * Time: 03:30
 */

namespace Solid\Html\Tag;

use Solid\Html\Attributes;

abstract class Tag implements TagsContract
{
    protected $attrs;
    protected $optional_attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validate();
    }

    public function attributes(Attributes $attribute)
    {
        $this->optional_attrs = $attribute;
    }
}