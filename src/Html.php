<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 03:36
 */

namespace Solid\Html;

class Html
{
    public function img(string $src)
    {
        return '<img src="' . $src .'">';
    }

    public function a(string $href, string $anchor)
    {
        $tag = $this->attributes();

        $tag->href = $href;
        $tag->anchor = $anchor;

        return $tag;
    }

    public function attributes()
    {
        $tag = new class {
            private $attributes;

            public function attribute(array $attributes){
                $result = [];
                foreach ($attributes as $key=>$value){
                    $result[] = $key . '="' . $value . '"';
                }

                $this->attributes = ' '.implode(' ', $result);
            }

            public function __toString()
            {
                return '<a href="' . $this->href . '"' . $this->attributes . '>' . $this->anchor . '</a>';
            }
        };

        return $tag;
    }
}