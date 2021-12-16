<?php

namespace Aws;
use Aws\Services\Contracts\AwsServiceFactoryInterface;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class WebPage
{
    public function __construct(protected AwsServiceFactoryInterface $factory)
    {}

    public function __toString()
    {
        $pricing = $this->factory->createPricing();
        $features = $this->factory->createFeatures();
        return sprintf("<h1>AWS service</h1><h3>Pricing: %f</h3><h4>Features: %s</h4>", $pricing->calculatePrice(), implode(', ', $features->list()));
    }
}