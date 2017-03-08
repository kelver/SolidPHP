<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 08/03/17
 * Time: 03:30
 */

namespace Solid\Html\Tag;

abstract class Tag implements TagsContract
{
    protected $attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validate();
    }
}