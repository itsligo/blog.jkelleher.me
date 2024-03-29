<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/highlight/blueprints.yaml',
    'modified' => 1438266281,
    'data' => [
        'name' => 'Highlight',
        'version' => '1.2.0',
        'description' => 'This plugin provides code highlighting functionality via the [Highlight.js](https://highlightjs.org/) jQuery plugin.',
        'icon' => 'code',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-highlight',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'highlight, plugin, code',
        'bugs' => 'https://github.com/getgrav/grav-plugin-highlight/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme' => [
                    'type' => 'select',
                    'label' => 'CSS Theme',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'monokai' => 'Monakai',
                        'learn' => 'Grav Learn',
                        'railscasts' => 'Railscasts',
                        'arta' => 'Arta',
                        'ascetic' => 'Ascetic',
                        'atelier-dune.dark' => 'Atelier Dune Dark',
                        'atelier-dune.light' => 'Atelier Dune Light',
                        'atelier-forest.dark' => 'Atelier Forest Dark',
                        'atelier-forest.light' => 'Atelier Forest Light',
                        'atelier-heath.dark' => 'Atelier Heath Dark',
                        'atelier-heath.light' => 'Atelier Heath Light',
                        'atelier-lakeside.dark' => 'Atelier Lakeside Dark',
                        'atelier-lakeside.light' => 'Atelier Lakeside Light',
                        'atelier-seaside.dark' => 'Atelier Seaside Dark',
                        'atelier-seaside.light' => 'Atelier Seaside Light',
                        'brown_paper' => 'Brown Paper',
                        'codepen-embed' => 'Codepen Embed',
                        'color-brewer' => 'Color Brewer',
                        'dark' => 'Dark',
                        'docco' => 'Docco',
                        'far' => 'Far',
                        'foundation' => 'Foundation',
                        'github' => 'Github',
                        'googlecode' => 'GoogleCode',
                        'hybrid' => 'Hybrid',
                        'idea' => 'Idea',
                        'ir_black' => 'IRBlack',
                        'kimbie.dark' => 'Kimbie Dark',
                        'kimbie.light' => 'Kimbie Light',
                        'magula' => 'Magula',
                        'mono-blue' => 'Mono Blue',
                        'monokai_sublime' => 'Monokai Sublime',
                        'obsidian' => 'Obsidian',
                        'paraiso.dark' => 'Paraiso Dark',
                        'paraiso.light' => 'Paraiso Light',
                        'pojoaque' => 'Pojoaque',
                        'rainbow' => 'Rainbow',
                        'school_book' => 'School Book',
                        'solarized_dark' => 'Solarized Dark',
                        'solarized_light' => 'Solarized Light',
                        'sunburst' => 'Sunburst',
                        'tomorrow-night-blue' => 'Tomorrow Night Blue',
                        'tomorrow-night-bright' => 'Tomorrow Night Bright',
                        'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
                        'tomorrow-night' => 'Tomorrow Night',
                        'tomorrow' => 'Tomorrow',
                        'vs' => 'VS',
                        'xcode' => 'XCode',
                        'zenburn' => 'Zenburn'
                    ]
                ]
            ]
        ]
    ]
];
