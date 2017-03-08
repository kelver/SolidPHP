<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 05:05
 */

namespace Solid\Html\Tag;


class ATests extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A('http://www.example.com.br', "Meu Site");

        $this->assertEquals('<a href="http://www.example.com.br">Meu Site</a>', $a);
    }
}