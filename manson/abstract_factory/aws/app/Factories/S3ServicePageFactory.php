<?php

namespace Aws\Factories;


use Aws\Services\Contracts\AwsServiceFactoryInterface;
use Aws\Services\Contracts\AwsPriceInterface;
use Aws\Services\Contracts\AwsFeaturesInterface;
use Aws\Services\S3\S3Features;
use Aws\Services\S3\S3Pricing;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class S3ServicePageFactory implements AwsServiceFactoryInterface
{

    public function createPricing(): AwsPriceInterface
    {
        return new S3Pricing();
    }

    public function createFeatures(): AwsFeaturesInterface
    {
        return new S3Features();
    }
}