<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules([
        // Your PHP-CS-Fixer rules go here
        'psr_autoloading' => true,
        'no_unused_imports' => true,
        'single_quote' => true,
        // ...
    ])
    ->setFinder($finder);

