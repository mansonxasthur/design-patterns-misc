<?php

namespace Aws\Services\Contracts;
/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
interface AwsServiceFactoryInterface
{
    public function createPricing(): AwsPriceInterface;
    public function createFeatures(): AwsFeaturesInterface;
}