<?php

use Aws\WebPage;

require_once __DIR__ . '/../vendor/autoload.php';

$page = new WebPage(new \Aws\Factories\S3ServicePageFactory());

echo $page;