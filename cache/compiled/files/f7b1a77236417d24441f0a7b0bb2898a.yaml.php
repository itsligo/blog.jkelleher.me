<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/mediaembed/blueprints.yaml',
    'modified' => 1439547853,
    'data' => [
        'name' => 'MediaEmbed',
        'version' => '1.2.0',
        'description' => 'This plugin embeds several media sites (e.g. YouTube, Vimeo, Soundcloud) by only providing the URL to the medium.',
        'icon' => 'spinner',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-mediaembed',
        'keywords' => [
            0 => 'video',
            1 => 'embed',
            2 => 'oembed',
            3 => 'media',
            4 => 'youtube',
            5 => 'vimeo',
            6 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-mediaembed/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-mediaembed/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'Global plugin configurations',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'Plugin Status',
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
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'Use built in CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_js' => [
                            'type' => 'toggle',
                            'label' => 'Use built in JS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'Default values for MediaEmbed configuration',
                    'underline' => 1,
                    'fields' => [
                        'media' => [
                            'type' => 'section',
                            'title' => 'Media',
                            'fields' => [
                                'media.width' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Default media width',
                                    'default' => 640,
                                    'placeholder' => 640,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0
                                    ]
                                ],
                                'media.height' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Default media height including controls',
                                    'default' => 390,
                                    'placeholder' => 390,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0
                                    ]
                                ],
                                'media.adjust' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'Adjust media size',
                                    'help' => 'Adjust media or keep default dimensions?',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'True - Adjust media size',
                                        0 => 'False - Keep default dimensions'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'media.preview' => [
                                    'type' => 'toggle',
                                    'label' => 'Show preview',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'media.protocol' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Protocol',
                                    'help' => 'Default protocol for remote media resources',
                                    'default' => 'http://',
                                    'placeholder' => 'http://'
                                ]
                            ]
                        ],
                        'services' => [
                            'type' => 'section',
                            'title' => 'Services',
                            'fields' => [
                                'services.SoundCloud' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed SoundCloud',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Spotify' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Spotify',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Flickr' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Flickr',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Imgur' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Imgur',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Instagram' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Instagram',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Dailymotion' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Dailymotion',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.YouTube' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed YouTube',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Vimeo' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Vimeo',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.GitHub' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed GitHub',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'services.Slides' => [
                                    'type' => 'toggle',
                                    'label' => 'Embed Slides',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
