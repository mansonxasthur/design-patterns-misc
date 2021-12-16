<?php
/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */

namespace Aws\Services\ElasticBeans;

use Aws\Services\Contracts\AwsFeaturesInterface;

class ElasticBeansFeatures implements AwsFeaturesInterface
{
    public function list(): array
    {
        return [
            'Something like kubernetes',
        ];
    }
}