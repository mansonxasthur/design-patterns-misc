<?php

namespace Aws\Services\ElasticBeans;
use Aws\Services\Contracts\AwsPriceInterface;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class ElasticBeansPricing implements AwsPriceInterface
{
    public function calculatePrice(): float
    {
        return 23.0;
    }
}