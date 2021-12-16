<?php

namespace Aws\Services\EC2;
/**
 * @author  manson
 * @date    12/8/21
 *
 * @package aws
 */
class EC2Features implements \Aws\Services\Contracts\AwsFeaturesInterface
{

    public function list(): array
    {
        return [
            'Lowest price you can get',
            'Scalable virtual host',
        ];
    }
}