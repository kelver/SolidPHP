<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 05:05
 */

namespace Solid\Html\Tag;

use Solid\Html\Attributes;

class ATests extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A(new Attributes, 'http://www.example.com.br', "Meu Site");

        $this->assertEquals('<a href="http://www.example.com.br">Meu Site</a>', $a);
    }

    public function testCriarTagAComHrefEAncoraEAtributosHtmlAdicionais()
    {
        $optional_attrs = [
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ];

        $a = new A(new Attributes, '#', "login");
        $a->attributes($optional_attrs);

        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">login</a>', $a);
    }
}