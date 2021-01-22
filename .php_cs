<?php

$header = '';

if(file_exists(__DIR__.'/header.txt')) {
    $header = file_get_contents('header.txt');
}

return PhpCsFixer\Config::create()
  ->setRiskyAllowed(true)
  ->setRules(
    [
      '@PSR2' => true,
      '@PHP70Migration' => true,
      '@PHP70Migration:risky' => true,
      '@PHP71Migration' => true,
      '@PHP71Migration:risky' => true,
      '@PHP73Migration' => true,
      '@PHP74Migration' => true,
      '@PHP74Migration:risky' => true,
      '@PHP80Migration' => true,
      '@PHP80Migration:risky' => true,
      'header_comment' => ['header' => $header],
      'ordered_class_elements' => true,
      'ordered_imports' => true,
      'no_mixed_echo_print' => ['use' => 'print'],
      'strict_param' => true,
      'strict_comparison' => true,
      'single_import_per_statement' => false,
      'phpdoc_order' => true,
      'array_syntax' => ['syntax' => 'short'],
      'phpdoc_add_missing_param_annotation' => true,
      'psr4' => true,
      'phpdoc_var_without_name' => false,
 	'no_unused_imports' => true,
	'no_useless_else' => true,
	'no_useless_return' => true,
       'no_extra_consecutive_blank_lines' => [
        'break',
        'continue',
        'extra',
        'return',
        'throw',
        'parenthesis_brace_block',
        'square_brace_block',
        'curly_brace_block',
      ],
    ]
  )->setFinder(
    PhpCsFixer\Finder::create()
      ->ignoreDotFiles(true)
      ->ignoreVCS(true)
      
      ->name('*.php')
      ->in([
        __DIR__,
        'src',
	'tests',
      ])
  );