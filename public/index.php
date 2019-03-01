<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../lib/functions.php';

$viewName = 'landing.view';
$bindings = [
    'title' => 'Hello ElasticBeanstalk',
    'subtitle' => 'PHP ❤️ You',
    // EB 스케일링 데모를 위해 강제로 CPU에 부하를 가합니다.
    'fibonacci' => number_format(fibonacci(35)),
    // EB 환경변수 데모
    'env' => getenv('APP_ENV'),
];

echo getView($viewName, $bindings);
