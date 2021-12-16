<?php
/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */

namespace Aws\Factories;

use Aws\Services\Contracts\AwsFeaturesInterface;
use Aws\Services\Contracts\AwsPriceInterface;
use Aws\Services\EC2\EC2Features;
use Aws\Services\EC2\EC2Pricing;

class EC2ServicePageFactory implements \Aws\Services\Contracts\AwsServiceFactoryInterface
{

    public function createPricing(): AwsPriceInterface
    {
        return new EC2Pricing();
    }

    public function createFeatures(): AwsFeaturesInterface
    {
        return new EC2Features();
    }
}