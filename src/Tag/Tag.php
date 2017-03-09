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

        foreach ($this->attrs as &$value){
            if(is_a($value, '\Solid\Html\Tag\TagsContract')){
                $value = (String)$value;
            }
        }

        $this->validate();
    }

    public function attributes($attributes)
    {
        if(is_array($attributes)){
            $attributes = new Attributes($attributes);
        }
        if(!is_a($attributes, 'Solid\Html\Attributes')){
            throw new \Exception('$attributes must be a Solid\Html\Attributes instance;');
        }

        $this->optional_attrs = $attributes;
    }
}