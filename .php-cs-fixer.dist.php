<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(
        [
            'assets',
            'bin',
            'node_modules',
            'public',
            'templates',
            'var',
        ]
    )
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony'                                 => true,
        '@Symfony:risky'                           => true,
        '@PSR12'                                   => true,
        '@PSR12:risky'                             => true,
        'align_multiline_comment'                  => ['comment_type'=>'all_multiline'],
        'assign_null_coalescing_to_coalesce_equal' => true,
        'binary_operator_spaces'                   => ['operators'=>['=>'=>'align']],
        'date_time_immutable'                      => true,
        'declare_strict_types'                     => true,
        'fopen_flags'                              => ['b_mode'=>true],
        'heredoc_to_nowdoc'                        => true,
        'method_chaining_indentation'              => true,
        'modernize_strpos'                         => true,
        'multiline_comment_opening_closing'        => true,
        'multiline_whitespace_before_semicolons'   => ['strategy'=>'new_line_for_chained_calls'],
        'no_null_property_initialization'          => true,
        'no_superfluous_elseif'                    => true,
        'no_unset_on_property'                     => true,
        'no_useless_else'                          => true,
        'no_useless_return'                        => true,
        'octal_notation'                           => true,
        'operator_linebreak'                       => true,
        'ordered_imports'                          => ['sort_algorithm'=>'alpha'],
        'ordered_interfaces'                       => true,
        'php_unit_internal_class'                  => true,
        'php_unit_strict'                          => true,
        'phpdoc_align'                             => true,
        'phpdoc_tag_casing'                        => true,
        'phpdoc_to_comment'                        => false,
        'self_static_accessor'                     => true,
        'single_line_throw'                        => false,
        'static_lambda'                            => true,
        'strict_comparison'                        => true,
        'strict_param'                             => true,
        'ternary_to_null_coalescing'               => true,
        'use_arrow_functions'                      => true,
        'void_return'                              => true,
    ])->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;
