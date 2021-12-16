<?php

namespace Aws\Services\Contracts;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
interface AwsFeaturesInterface
{
    public function list(): array;
}