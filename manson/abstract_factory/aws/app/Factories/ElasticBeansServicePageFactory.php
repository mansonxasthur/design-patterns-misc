<?php

namespace Aws\Factories;

use Aws\Services\Contracts\AwsServiceFactoryInterface;
use Aws\Services\Contracts\AwsPriceInterface;
use Aws\Services\Contracts\AwsFeaturesInterface;
use Aws\Services\ElasticBeans\ElasticBeansFeatures;
use Aws\Services\ElasticBeans\ElasticBeansPricing;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class ElasticBeansServicePageFactory implements AwsServiceFactoryInterface
{

    public function createPricing(): AwsPriceInterface
    {
        return new ElasticBeansPricing();
    }

    public function createFeatures(): AwsFeaturesInterface
    {
        return new ElasticBeansFeatures();
    }
}