<?php

$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->in('tests')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    '@PHP81Migration' => true,
    '@PHP80Migration:risky' => true,
    'strict_param' => true,
    'array_syntax' => ['syntax' => 'short'],
])->setRiskyAllowed(true)
    ->setFinder($finder)
    ;
