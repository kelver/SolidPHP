<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 05:03
 */

namespace Solid\Html;


class Tags
{
    public function img(string $src)
    {
        return '<img src="' . $src .'">';
    }

    public function a(string $href, string $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}