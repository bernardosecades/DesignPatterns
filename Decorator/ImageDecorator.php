<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 * Date: 3/26/13
 * Time: 5:09 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Decorator;

abstract class ImageDecorator implements ImageInterface
{
    protected $image;

    public function __construct(ImageInterface $image)
    {
        $this->image = $image;
    }
}