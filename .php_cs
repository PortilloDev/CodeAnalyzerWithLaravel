<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->name('*.php')
    ->notName('*.blade.php');

return Symfony\CS\Config\Config::create()
    ->setRules([
        // Aquí puedes especificar las reglas y configuraciones de estilo
        '@PSR2' => true,
    ])
    ->setFinder($finder);
