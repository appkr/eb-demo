<?php

function getView(string $viewName, array $bindings = []) {
    $path = __DIR__.'/../views/'.$viewName;
    if (file_exists($path) === false) {
        throw new Exception("File not found: {$path}");
    }

    $rawContent = file_get_contents($path);
    if (empty($bindings)) {
        return $rawContent;
    }

    $keys = array_map(function ($key) {
        return '{{'.$key.'}}';
    }, array_keys($bindings));
    $values = array_values($bindings);

    return str_replace($keys, $values, $rawContent);
}

function fibonacci(int $n) {
    // @see https://gist.github.com/appkr/ced41a97796116bead6802d42002d3a0
    if ($n <= 1) {
        return 0;
    }
    if ($n === 2) {
        return 1;
    }

    return fibonacci($n - 2) + fibonacci($n - 1);
}
