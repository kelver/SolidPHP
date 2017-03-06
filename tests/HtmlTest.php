<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 03:26
 */

namespace Solid\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');
        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.example.com.br', $img);

        $this->assertEquals('<a href="http://www.example.com.br"><img src="img/photo.png"></a>', $a);
    }

    public function testCriarTagAComClassEId()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.example.com.br', 'Meu Site');
        $a->attribute([
            'class'=>'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">Meu Site</a>', $a);
    }
}