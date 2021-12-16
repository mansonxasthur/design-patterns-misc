<?php

namespace Aws\Services\S3;
use Aws\Services\Contracts\AwsPriceInterface;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class S3Pricing implements AwsPriceInterface
{
    public function calculatePrice(): float
    {
        return 18.0;
    }
}