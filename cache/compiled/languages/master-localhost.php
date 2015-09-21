<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'a14a86580a05998eaba3332ebd7f041c:16ffb2ef7fe7a77e1006f8d110afc659',
    'files' => [
        'system/languages' => [
            'en' => [
                'file' => 'system/languages/en.yaml',
                'modified' => 1442859860
            ]
        ]
    ],
    'data' => [
        'en' => [
            'PLUGIN_REL_PAGES' => [
                'PLUGIN_STATUS' => 'Plugin status',
                'BASICS' => 'Basic Settings',
                'LIMIT' => 'Limit',
                'LIMIT_HELP' => 'The number of related pages to display',
                'ORDER' => 'Order',
                'ORDER_BY' => 'Ordery by',
                'SHOW_SCORE' => 'Show score',
                'SHOW_SCORE_HELP' => 'Toggle to determine if scores should be displayed in output',
                'ITEMS' => 'Items',
                'ITEMS_HELP' => 'Supports `@self`, `@page`, and `@taxonomy` based collections',
                'PAGE_IN_FILTER' => 'Page \'in\' filter',
                'PAGE_IN_FILTER_HELP' => 'Enabled if the current page must be in the filtered collection',
                'EXPLICIT_PROCESS' => 'Process explicit pages',
                'EXPLICIT_PROCESS_HELP' => 'Enable this explicit page matching',
                'EXPLICIT_SCORE' => 'Explicit page score',
                'EXPLICIT_SCORE_HELP' => 'A score ranging from (0 - 100) to give explicit pages a weight',
                'TAXONOMY_MATCH' => 'Taxonomy Type Matching',
                'TAXONOMY' => 'Taxonomy',
                'TAXONOMY_HELP' => 'Which taxonomy type to use for page matching',
                'TAXONOMY_TAXONOMY_PROCESS' => 'Taxonomy-taxonomy',
                'TAXONOMY_TAXONOMY_PROCESS_HELP' => 'Enable taxonomy to taxonomy matching',
                'TAXONOMY_CONTENT_PROCESS' => 'Taxonomy-content',
                'TAXONOMY_CONTENT_PROCESS_HELP' => 'Enable taxonomy to Content matching',
                'CONTENT_MATCH' => 'Content Type Matching',
                'CONTENT_PROCESS' => 'Content-content',
                'CONTENT_PROCESS_HELP' => 'Enable content to content matching (NOTE: Disable if you have lots of content)',
                'ADVANCED' => 'Advanced',
                'TAXONOMY_SCORE_SCALE' => 'Taxonomy-taxonomy score scale',
                'CONTENT_SCORE_SCALE' => 'Taxonomy-content score scale'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ]
        ]
    ]
];
