<?php

namespace Aws\Services\S3;

use Aws\Services\Contracts\AwsFeaturesInterface;

/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class S3Features implements AwsFeaturesInterface
{
    public function list(): array
    {
        return [
            'Has storage',
            'Scalable storage',
        ];
    }
}