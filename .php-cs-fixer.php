<?php

$rules = [
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'array_syntax' => ['syntax' => 'short'],
    'braces' => [
        'allow_single_line_closure' => true,
        'position_after_functions_and_oop_constructs' => 'same'
    ],
    'class_attributes_separation' => true,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'compact_nullable_typehint' => true,
    'concat_space' => ['spacing' => 'one'],
    'constant_case' => ['case' => 'lower'],
    'clean_namespace' => true,
    'declare_strict_types' => false,
    'heredoc_to_nowdoc' => false,
    'list_syntax' => ['syntax' => 'short'],
    'native_function_invocation' => ['exclude' => []],
    'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
    'no_unreachable_default_argument_value' => true,
    'no_unused_imports' => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'ordered_class_elements' => true,
    'ordered_interfaces' => ['order' => 'alpha', 'direction' => 'ascend'],
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'phpdoc_no_package' => true,
    'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
    'phpdoc_annotation_without_dot' => false,
    'single_line_after_imports' => true,
    'single_line_comment_style' => true,
    'simple_to_complex_string_variable' => true,
    'strict_comparison' => true,
    'ternary_to_null_coalescing' => true,
];

$extensions = [
    '*.php',
    '*.module',
    '*.inc',
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/app')
    ->in(__DIR__ . '/routes')
    ->name($extensions)
;

return (new PhpCsFixer\Config())
    ->setUsingCache(false)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setIndent(str_pad('', 2))
    ->setLineEnding("\n")
    ->setFinder($finder);
