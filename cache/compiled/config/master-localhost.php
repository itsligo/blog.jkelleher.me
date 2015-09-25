<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1442861909,
    'checksum' => 'ba2d583ddff42638c5f9c08512c5ea4b',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'languages' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://languages',
                            1 => 'system/languages'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'backup' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'backup'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'cachebuster' => [
                'enabled' => true,
                'route' => '/cbuster'
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'default'
            ],
            'mediaembed' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'media' => [
                    'width' => 800,
                    'height' => 500,
                    'adjust' => true,
                    'preview' => true,
                    'responsive' => true,
                    'protocol' => 'http://'
                ],
                'services' => [
                    'SoundCloud' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'example' => 'https://soundcloud.com/semiseria/verruckert-ausschnitt',
                        'url' => 'w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/{:id}',
                        'canonical' => 'http://soundcloud.com/{:id}',
                        'endpoint' => 'http://soundcloud.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'soundcloud.com/*',
                            1 => 'soundcloud.com/*/*',
                            2 => 'soundcloud.com/*/sets/*',
                            3 => 'soundcloud.com/groups/*',
                            4 => 'snd.sc/*'
                        ],
                        'params' => [
                            'auto_play' => false,
                            'buying' => true,
                            'download' => true,
                            'hide_related' => false,
                            'liking' => true,
                            'sharing' => true,
                            'show_artwork' => true,
                            'show_comments' => true,
                            'show_playcount' => true,
                            'show_user' => true,
                            'visual' => false
                        ]
                    ],
                    'Spotify' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://open.spotify.com/track/{:id}',
                        'endpoint' => 'https://embed.spotify.com/oembed/?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'open.spotify.com/track/*',
                            1 => 'spoti.fi/*'
                        ]
                    ],
                    'Flickr' => [
                        'enabled' => true,
                        'type' => 'photo',
                        'canonical' => 'http://www.flickr.com/photos/{:id}',
                        'endpoint' => 'http://flickr.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'flickr.com/photos/*',
                            1 => 'flic.kr/*'
                        ]
                    ],
                    'Imgur' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://imgur.com/gallery/{:id}',
                        'endpoint' => 'http://api.imgur.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'imgur.com/gallery/*',
                            1 => 'imgur.com/a/*',
                            2 => 'imgur.com/*'
                        ]
                    ],
                    'Instagram' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://instagram.com/p/{:id}',
                        'endpoint' => 'http://api.instagram.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'instagr.am/p/*',
                            1 => 'instagram.com/p/*'
                        ]
                    ],
                    'Dailymotion' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.dailymotion.com/embed/video/{:id}',
                        'canonical' => 'http://dailymotion.com/video/{:id}',
                        'endpoint' => 'http://www.dailymotion.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'dailymotion.com/video/*',
                            1 => 'dailymotion.com/*/video/*',
                            2 => 'dai\\.ly/*'
                        ],
                        'params' => [
                            'quality' => 1080
                        ]
                    ],
                    'YouTube' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.youtube.com/embed/{:id}',
                        'canonical' => 'http://www.youtube.com/watch?v={:id}',
                        'endpoint' => 'http://www.youtube.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'youtube.com/watch?*v=*',
                            1 => 'youtube.com/embed/*',
                            2 => 'youtube.com/v/*',
                            3 => 'youtube.com/?*v=*',
                            4 => 'youtu.be/*'
                        ],
                        'params' => [
                            'autoplay' => 0,
                            'modestbranding' => 1,
                            'theme' => 'light'
                        ]
                    ],
                    'Vimeo' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'player.vimeo.com/video/{:id}',
                        'canonical' => 'https://vimeo.com/{:id}',
                        'endpoint' => 'http://vimeo.com/api/oembed.json?url={:canonical}',
                        'schemes' => [
                            0 => 'vimeo.com/*',
                            1 => 'vimeo.com/channels/*/*',
                            2 => 'vimeo.com/groups/*/videos/*'
                        ],
                        'params' => [
                            'autoplay' => 0
                        ]
                    ],
                    'GitHub' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://www.gist.github.com/{:id}',
                        'endpoint' => 'http://gist.github.com/{:id}.json',
                        'schemes' => [
                            0 => 'gist.github.com/*',
                            1 => 'gist.github.com/*/*',
                            2 => 'gist.github.com/*?*'
                        ]
                    ],
                    'Slides' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://slides.com/{:id}',
                        'endpoint' => 'http://slides.com/{:id}',
                        'schemes' => [
                            0 => 'slides.com/*',
                            1 => 'slid.es/*'
                        ],
                        'params' => [
                            'style' => 'light',
                            'width' => 1920,
                            'height' => 1400
                        ]
                    ]
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0,
                'path' => '/blog'
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'random' => [
                'enabled' => true,
                'route' => '/random',
                'redirect' => true,
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => false,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'John Kelleher',
            'author' => [
                'name' => 'John Kelleher',
                'email' => 'john@jkelleher.me',
                'image' => '/user/images/avatar.jpg',
                'bio' => 'I\'m a developer and lecture at IT Sligo'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'featured'
            ],
            'metadata' => [
                'description' => 'John Kelleher - Lecturer and Coder'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/redirect-test' => '/',
                '/old/(.*)' => '/new/$1'
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/new/(.*)' => '/blog/$1'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'description' => 'Lecturer & Developer',
            'logo' => '/user/images/logo.png',
            'date_long' => 'd F Y',
            'date_short' => 'd M Y',
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
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'languages' => [
                'supported' => [
                    
                ],
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'home_redirect' => [
                    'include_lang' => true,
                    'include_route' => false
                ],
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/blog'
            ],
            'pages' => [
                'theme' => 'jktheme',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'json',
                    4 => 'rss',
                    5 => 'atom'
                ],
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'markdown_extra' => true
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => true
            ],
            'twig' => [
                'cache' => true,
                'debug' => false,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.4.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site'
            ],
            'security' => [
                'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
            ]
        ]
    ]
];
