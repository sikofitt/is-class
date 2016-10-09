<?php


$finder = Symfony\CS\Finder\DefaultFinder::create()
  ->exclude('vendor')
  ->exclude('tests')
  ->exclude('var')
  ->exclude('node_modules')
  ->ignoreDotFiles(true)
  ->ignoreVCS(true)
  ->name('*.php')
  ->in(__DIR__)
  ;

return Symfony\CS\Config\Config::create()
  ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
  ->fixers(
    [
      'symfony',
      'header_comment',
      'ordered_use',
      'php_unit_construct',
      'php_unit_strict',
      'strict',
      'strict_param',
      'symfony',
      'newline_after_open_tag',
      'phpdoc_order',
      'short_array_syntax',
      'short_echo_tag',
      '-multiple_use'
    ]
  )
  ->finder($finder)
  ;
