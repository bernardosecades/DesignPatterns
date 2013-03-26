<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 *
 * Execute test: phpunit Decorator/Test/ImageDecoratorTest.php
 */

namespace Decorator\Test;

require_once __DIR__ . '/../../autoload.php';

use Decorator\ImageRotate;
use Decorator\ImageBorder;
use Decorator\Image;

class ImageDecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testOnlyImage()
    {
        $image = new Image();
        $this->assertInstanceOf('Decorator\\ImageInterface', $image);

        $image->getImage();
    }

    public function testImageAndDecorators()
    {
        $image = new Image();
        $this->assertInstanceOf('Decorator\\ImageInterface', $image);

        // Add decorators
        $image = new ImageBorder($image);
        $this->assertInstanceOf('Decorator\\ImageInterface', $image);

        $image = new ImageRotate($image);
        $this->assertInstanceOf('Decorator\\ImageInterface', $image);

        $image->getImage();
    }
}