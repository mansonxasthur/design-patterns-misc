<?php
/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */

namespace Aws\Services\EC2;

class EC2Pricing implements \Aws\Services\Contracts\AwsPriceInterface
{
    public function calculatePrice(): float
    {
        return 0.67;
    }
}