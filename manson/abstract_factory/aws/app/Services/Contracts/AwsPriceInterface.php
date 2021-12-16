<?php

namespace Aws\Services\Contracts;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
interface AwsPriceInterface
{
    public function calculatePrice(): float;
}