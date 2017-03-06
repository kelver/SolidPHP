<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 04:56
 */

namespace Solid\Html;


class AttributesTests extends \PHPUnit_Framework_TestCase
{
    public function testCriarAtributosHtmlParaTags()
    {
        $attributes = new Attributes([
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ]);

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', $attributes);
    }
}