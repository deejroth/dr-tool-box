<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor/')
    ->exclude('docs/')
    ->exclude('logs/')
    ->exclude('nbproject/')
    ->in(__DIR__ . '/app/')
    ->in(__DIR__ . '/tests/app/')
;

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;

