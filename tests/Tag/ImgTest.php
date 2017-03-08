<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 06/03/17
 * Time: 05:05
 */

namespace Solid\Html\Tag;


class ImgTests extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.png');
        $this->assertEquals('<img src="img/photo.png">', $img);
    }
}