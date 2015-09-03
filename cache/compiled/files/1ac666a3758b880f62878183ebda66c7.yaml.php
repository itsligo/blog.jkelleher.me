<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1439488969,
    'data' => [
        'title' => 'John Kelleher',
        'description' => 'Lecturer & Developer',
        'taxonomies' => [
            0 => 'tag',
            1 => 'featured'
        ],
        'metadata' => [
            'description' => 'John Kelleher - Lecturer and Coder'
        ],
        'logo' => '/user/images/logo.png',
        'date_long' => 'd F Y',
        'date_short' => 'd M Y',
        'author' => [
            'name' => 'John Kelleher',
            'email' => 'john@jkelleher.me',
            'image' => '/user/images/avatar.jpg',
            'bio' => 'I\'m a developer and lecture at IT Sligo'
        ],
        'social' => [
            0 => [
                'icon' => 'twitter',
                'url' => 'https://twitter.com/johnkelleher',
                'desc' => 'Follow me on twitter',
                'share_url' => 'http://twitter.com/share',
                'share_title' => '?text=',
                'share_link' => '&amp;url='
            ],
            1 => [
                'icon' => 'facebook',
                'url' => 'https://facebook.com/jkelleher42',
                'desc' => 'Connect with me facebook',
                'share_url' => '//www.facebook.com/sharer.php',
                'share_title' => '?t=',
                'share_link' => '&amp;u='
            ],
            2 => [
                'icon' => 'github',
                'url' => 'https://github.com/jkelleher',
                'desc' => 'Fork me on github',
                'share_url' => NULL,
                'share_title' => NULL,
                'share_link' => NULL
            ],
            3 => [
                'icon' => 'google-plus',
                'url' => 'https://google.com/+JohnKelleher',
                'desc' => 'Add me on google+',
                'share_url' => NULL,
                'share_title' => NULL,
                'share_link' => NULL
            ]
        ]
    ]
];
