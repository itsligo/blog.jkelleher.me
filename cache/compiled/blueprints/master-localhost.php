<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '0037e3063969e46f8cdf1b84e99c82c2:41040c1625082c79d749fabd0ff5c584',
    'files' => [
        'user/plugins' => [
            'plugins/cachebuster' => [
                'file' => 'user/plugins/cachebuster/blueprints.yaml',
                'modified' => 1439721565
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1437742390
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1437742390
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/blueprints.yaml',
                'modified' => 1438266281
            ],
            'plugins/mediaembed' => [
                'file' => 'user/plugins/mediaembed/blueprints.yaml',
                'modified' => 1439547853
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1437742390
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1437742390
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1439547779
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1439547779
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1439547779
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1439547779
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.cachebuster.enabled' => [
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
                ],
                'name' => 'plugins.cachebuster.enabled'
            ],
            'plugins.cachebuster.route' => [
                'type' => 'text',
                'label' => 'Route',
                'placeholder' => '/cachebuster',
                'name' => 'plugins.cachebuster.route'
            ],
            'plugins.error.enabled' => [
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
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.feed.enabled' => [
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
                ],
                'name' => 'plugins.feed.enabled'
            ],
            'plugins.feed.count' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.count'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'placeholder' => 'en-us',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}-a-zA-Z]{2,3}'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'int',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.highlight.enabled' => [
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
                ],
                'name' => 'plugins.highlight.enabled'
            ],
            'plugins.highlight.theme' => [
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
                ],
                'name' => 'plugins.highlight.theme'
            ],
            'plugins.mediaembed.enabled' => [
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
                ],
                'name' => 'plugins.mediaembed.enabled'
            ],
            'plugins.mediaembed.built_in_css' => [
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
                ],
                'name' => 'plugins.mediaembed.built_in_css'
            ],
            'plugins.mediaembed.built_in_js' => [
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
                ],
                'name' => 'plugins.mediaembed.built_in_js'
            ],
            'plugins.mediaembed.media.width' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default media width',
                'default' => 640,
                'placeholder' => 640,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.mediaembed.media.width'
            ],
            'plugins.mediaembed.media.height' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default media height including controls',
                'default' => 390,
                'placeholder' => 390,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'plugins.mediaembed.media.height'
            ],
            'plugins.mediaembed.media.adjust' => [
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
                ],
                'name' => 'plugins.mediaembed.media.adjust'
            ],
            'plugins.mediaembed.media.preview' => [
                'type' => 'toggle',
                'label' => 'Show preview',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.media.preview'
            ],
            'plugins.mediaembed.media.protocol' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Protocol',
                'help' => 'Default protocol for remote media resources',
                'default' => 'http://',
                'placeholder' => 'http://',
                'name' => 'plugins.mediaembed.media.protocol'
            ],
            'plugins.mediaembed.services.SoundCloud' => [
                'type' => 'toggle',
                'label' => 'Embed SoundCloud',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.SoundCloud'
            ],
            'plugins.mediaembed.services.Spotify' => [
                'type' => 'toggle',
                'label' => 'Embed Spotify',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Spotify'
            ],
            'plugins.mediaembed.services.Flickr' => [
                'type' => 'toggle',
                'label' => 'Embed Flickr',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Flickr'
            ],
            'plugins.mediaembed.services.Imgur' => [
                'type' => 'toggle',
                'label' => 'Embed Imgur',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Imgur'
            ],
            'plugins.mediaembed.services.Instagram' => [
                'type' => 'toggle',
                'label' => 'Embed Instagram',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Instagram'
            ],
            'plugins.mediaembed.services.Dailymotion' => [
                'type' => 'toggle',
                'label' => 'Embed Dailymotion',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Dailymotion'
            ],
            'plugins.mediaembed.services.YouTube' => [
                'type' => 'toggle',
                'label' => 'Embed YouTube',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.YouTube'
            ],
            'plugins.mediaembed.services.Vimeo' => [
                'type' => 'toggle',
                'label' => 'Embed Vimeo',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Vimeo'
            ],
            'plugins.mediaembed.services.GitHub' => [
                'type' => 'toggle',
                'label' => 'Embed GitHub',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.GitHub'
            ],
            'plugins.mediaembed.services.Slides' => [
                'type' => 'toggle',
                'label' => 'Embed Slides',
                'default' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.mediaembed.services.Slides'
            ],
            'plugins.pagination.enabled' => [
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
                ],
                'name' => 'plugins.pagination.enabled'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css'
            ],
            'plugins.problems.enabled' => [
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
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site, often used in themes',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'help' => 'A default author name, often used in themes or page content',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'help' => 'A default email to reference in themes or pages',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'help' => 'Taxonomy types must be defined here if you wish to use them in pages',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'Enabled',
                'highlight' => 1,
                'help' => 'Enable page summary (the summary returns the same as the page content)',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'help' => 'The amount of characters of a page to use as a content summary',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'Format',
                'classes' => 'fancy',
                'help' => 'short = use the first occurrence of delimiter or size; long = summary delimiter will be ignored',
                'highlight' => 'short',
                'options' => [
                    'short' => 'Short',
                    'long' => 'Long'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delimiter',
                'help' => 'The summary delimiter (default \'===\')',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'help' => 'Default metadata values that will be displayed on every page unless overridden by the page',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'Custom Redirects',
                'help' => 'routes to redirect to other pages. Standard Regex replacement is valid',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/redirect',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom Routes',
                'help' => 'routes to alias to other pages. Standard Regex replacement is valid',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'Default theme',
                'help' => 'Set the default theme for Grav to use (default is Antimatter)',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'help' => 'Control how pages are processed. Can be set per-page rather than globally',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'Timezone',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'Override the default timezone the server',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Santa_Isabel' => '(UTC-07:00) America/Santa_Isabel',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Mazatlan' => '(UTC-06:00) America/Mazatlan',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'America/Chihuahua' => '(UTC-06:00) America/Chihuahua',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Mexico_City' => '(UTC-05:00) America/Mexico_City',
                    'America/Monterrey' => '(UTC-05:00) America/Monterrey',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Bahia_Banderas' => '(UTC-05:00) America/Bahia_Banderas',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/Merida' => '(UTC-05:00) America/Merida',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'Pacific/Easter' => '(UTC-05:00) Pacific/Easter',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Cuiaba' => '(UTC-04:00) America/Cuiaba',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Asuncion' => '(UTC-04:00) America/Asuncion',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/Campo_Grande' => '(UTC-04:00) America/Campo_Grande',
                    'America/Montevideo' => '(UTC-03:00) America/Montevideo',
                    'Antarctica/Palmer' => '(UTC-03:00) Antarctica/Palmer',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Sao_Paulo' => '(UTC-03:00) America/Sao_Paulo',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Santiago' => '(UTC-03:00) America/Santiago',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'America/Godthab' => '(UTC-02:00) America/Godthab',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'America/Scoresbysund' => '(UTC+00:00) America/Scoresbysund',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Atlantic/Azores' => '(UTC+00:00) Atlantic/Azores',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Europe/Jersey' => '(UTC+01:00) Europe/Jersey',
                    'Europe/London' => '(UTC+01:00) Europe/London',
                    'Africa/El_Aaiun' => '(UTC+01:00) Africa/El_Aaiun',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Africa/Casablanca' => '(UTC+01:00) Africa/Casablanca',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Europe/Dublin' => '(UTC+01:00) Europe/Dublin',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Lisbon' => '(UTC+01:00) Europe/Lisbon',
                    'Europe/Isle_of_Man' => '(UTC+01:00) Europe/Isle_of_Man',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Atlantic/Madeira' => '(UTC+01:00) Atlantic/Madeira',
                    'Atlantic/Canary' => '(UTC+01:00) Atlantic/Canary',
                    'Atlantic/Faroe' => '(UTC+01:00) Atlantic/Faroe',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Europe/Guernsey' => '(UTC+01:00) Europe/Guernsey',
                    'Africa/Windhoek' => '(UTC+01:00) Africa/Windhoek',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Belgrade' => '(UTC+02:00) Europe/Belgrade',
                    'Europe/Vatican' => '(UTC+02:00) Europe/Vatican',
                    'Europe/Berlin' => '(UTC+02:00) Europe/Berlin',
                    'Europe/Andorra' => '(UTC+02:00) Europe/Andorra',
                    'Europe/Warsaw' => '(UTC+02:00) Europe/Warsaw',
                    'Europe/Zagreb' => '(UTC+02:00) Europe/Zagreb',
                    'Europe/Zurich' => '(UTC+02:00) Europe/Zurich',
                    'Europe/Amsterdam' => '(UTC+02:00) Europe/Amsterdam',
                    'Europe/Vienna' => '(UTC+02:00) Europe/Vienna',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Monaco' => '(UTC+02:00) Europe/Monaco',
                    'Europe/Madrid' => '(UTC+02:00) Europe/Madrid',
                    'Europe/Malta' => '(UTC+02:00) Europe/Malta',
                    'Europe/Oslo' => '(UTC+02:00) Europe/Oslo',
                    'Europe/Luxembourg' => '(UTC+02:00) Europe/Luxembourg',
                    'Europe/Podgorica' => '(UTC+02:00) Europe/Podgorica',
                    'Europe/Paris' => '(UTC+02:00) Europe/Paris',
                    'Europe/Ljubljana' => '(UTC+02:00) Europe/Ljubljana',
                    'Europe/Rome' => '(UTC+02:00) Europe/Rome',
                    'Europe/Stockholm' => '(UTC+02:00) Europe/Stockholm',
                    'Europe/Tirane' => '(UTC+02:00) Europe/Tirane',
                    'Europe/Prague' => '(UTC+02:00) Europe/Prague',
                    'Europe/Bratislava' => '(UTC+02:00) Europe/Bratislava',
                    'Europe/Skopje' => '(UTC+02:00) Europe/Skopje',
                    'Europe/San_Marino' => '(UTC+02:00) Europe/San_Marino',
                    'Europe/Sarajevo' => '(UTC+02:00) Europe/Sarajevo',
                    'Europe/Vaduz' => '(UTC+02:00) Europe/Vaduz',
                    'Europe/Copenhagen' => '(UTC+02:00) Europe/Copenhagen',
                    'Europe/Gibraltar' => '(UTC+02:00) Europe/Gibraltar',
                    'Arctic/Longyearbyen' => '(UTC+02:00) Arctic/Longyearbyen',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Europe/Busingen' => '(UTC+02:00) Europe/Busingen',
                    'Africa/Ceuta' => '(UTC+02:00) Africa/Ceuta',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Europe/Budapest' => '(UTC+02:00) Europe/Budapest',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Antarctica/Troll' => '(UTC+02:00) Antarctica/Troll',
                    'Europe/Brussels' => '(UTC+02:00) Europe/Brussels',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Europe/Riga' => '(UTC+03:00) Europe/Riga',
                    'Africa/Cairo' => '(UTC+03:00) Africa/Cairo',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Europe/Mariehamn' => '(UTC+03:00) Europe/Mariehamn',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Europe/Kiev' => '(UTC+03:00) Europe/Kiev',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Europe/Sofia' => '(UTC+03:00) Europe/Sofia',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Europe/Helsinki' => '(UTC+03:00) Europe/Helsinki',
                    'Europe/Istanbul' => '(UTC+03:00) Europe/Istanbul',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Asia/Beirut' => '(UTC+03:00) Asia/Beirut',
                    'Europe/Zaporozhye' => '(UTC+03:00) Europe/Zaporozhye',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Europe/Bucharest' => '(UTC+03:00) Europe/Bucharest',
                    'Asia/Gaza' => '(UTC+03:00) Asia/Gaza',
                    'Asia/Hebron' => '(UTC+03:00) Asia/Hebron',
                    'Europe/Athens' => '(UTC+03:00) Europe/Athens',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Asia/Jerusalem' => '(UTC+03:00) Asia/Jerusalem',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Europe/Tallinn' => '(UTC+03:00) Europe/Tallinn',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Europe/Uzhgorod' => '(UTC+03:00) Europe/Uzhgorod',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Europe/Vilnius' => '(UTC+03:00) Europe/Vilnius',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Asia/Nicosia' => '(UTC+03:00) Asia/Nicosia',
                    'Europe/Chisinau' => '(UTC+03:00) Europe/Chisinau',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Tehran' => '(UTC+04:30) Asia/Tehran',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Baku' => '(UTC+05:00) Asia/Baku',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Hovd' => '(UTC+08:00) Asia/Hovd',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Choibalsan' => '(UTC+09:00) Asia/Choibalsan',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Ulaanbaatar' => '(UTC+09:00) Asia/Ulaanbaatar',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Australia/Broken_Hill' => '(UTC+09:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+09:30) Australia/Adelaide',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Currie' => '(UTC+10:00) Australia/Currie',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Australia/Melbourne' => '(UTC+10:00) Australia/Melbourne',
                    'Australia/Hobart' => '(UTC+10:00) Australia/Hobart',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Sydney' => '(UTC+10:00) Australia/Sydney',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Australia/Lord_Howe' => '(UTC+10:30) Australia/Lord_Howe',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Antarctica/McMurdo' => '(UTC+12:00) Antarctica/McMurdo',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Auckland' => '(UTC+12:00) Pacific/Auckland',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Pacific/Chatham' => '(UTC+12:45) Pacific/Chatham',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Apia' => '(UTC+13:00) Pacific/Apia',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short date format',
                'help' => 'Set the short date format that can be used by themes',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long date format',
                'help' => 'Set the long date format that can be used by themes',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default ordering',
                'help' => 'Pages in a list will render using this order unless it is overridden',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default order direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'The direction of pages in a list',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default page count',
                'help' => 'Default maximum pages count in a list',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'Date-based publishing',
                'help' => 'Automatically (un)publish posts based on their date',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'Events',
                'help' => 'Enable or Disable specific events.  Disabling these can break plugins',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'Redirect default route',
                'help' => 'Automatically redirect to a page\'s default route',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Supported',
                'help' => 'Comma separated list of 2 letter language codes (for example \'en,fr,de\')',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'Translations enabled',
                'help' => 'Support translations in Grav, plugins and extensions',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'Translations fallback',
                'help' => 'Fallback through supported translations if active language doesn\'t exist',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'Active language in session',
                'help' => 'Store the active language in the session',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.home_redirect.include_lang' => [
                'type' => 'toggle',
                'label' => 'Home redirect include language',
                'help' => 'Include language in home redirect (/en)',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_lang'
            ],
            'system.languages.home_redirect.include_route' => [
                'type' => 'toggle',
                'label' => 'Home redirect include route',
                'help' => 'Include route in home redirect (/blog)',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_route'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Expires',
                'help' => 'Sets the expires header. The value is in seconds.',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'Last modified',
                'help' => 'Sets the last modified header that can help optimize proxy and browser caching',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'ETag',
                'help' => 'Sets the etag header to help identify when a page has been modified',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'Vary accept encoding',
                'help' => 'Sets the `Vary: Accept Encoding` header to help with proxy and CDN caching',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'Enable default support for Markdown Extra - https://michelf.ca/projects/php-markdown/extra/',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'Auto line breaks',
                'help' => 'Enable support for automatic line breaks in markdown',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'Auto URL links',
                'help' => 'Enable automatic conversion of URLs into HTML hyperlinks',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'Escape markup',
                'help' => 'Escape markup tags into HTML entities',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'help' => 'Global ON/OFF switch to enable/disable Grav caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache check method',
                'help' => 'Select the method that Grav uses to check if page files have been modified.',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'help' => 'Choose which cache driver Grav should use. \'Auto Detect\' attempts to find the best for you',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache prefix',
                'help' => 'An identifier for part of the Grav key.  Don\'t change unless you know what your doing.',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Lifetime',
                'help' => 'Sets the cache lifetime in seconds. 0 = infinite',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'Gzip compression',
                'help' => 'Enable GZip compression of the Grav page for increased performance.',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'help' => 'Control the Twig caching mechanism. Leave this enabled for best performance.',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'help' => 'Allows the option of not loading the Twig Debugger extension',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'help' => 'Twig will automatically recompile the Twig cache if it detects any changes in Twig templates',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'help' => 'Autoescapes all variables.  This will break your site most likely',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS pipeline',
                'help' => 'The CSS pipeline is the unification of multiple CSS resources into one file',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS minify',
                'help' => 'Minify the CSS during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS minify Windows override',
                'help' => 'Minify Override for Windows platforms. False by default due to ThreadStackSize',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS rewrite',
                'help' => 'Rewrite any CSS relative URLs during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript pipeline',
                'help' => 'The JS pipeline is the unification of multiple JS resources into one file',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript minify',
                'help' => 'Minify the JS during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on assets',
                'help' => 'Enable asset timestamps',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'Collections',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'Display errors',
                'help' => 'Display full backtrace-style error page',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'Log errors',
                'help' => 'Log errors to /logs folder',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'help' => 'Enable Grav debugger and following settings',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.twig' => [
                'type' => 'toggle',
                'label' => 'Debug Twig',
                'help' => 'Enable debugging of Twig templates',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.twig'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown close connection',
                'help' => 'Close the connection before calling onShutdown(). false for debugging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'Default image quality',
                'help' => 'Default image quality to use when resampling or caching images (85%)',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'Cache all images',
                'help' => 'Run all images through Grav\'s cache system even if they have no media manipulations',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'Image debug watermark',
                'help' => 'Show an overlay over images indicating the pixel depth of the image when working with retina for example',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'File upload limit',
                'help' => 'Set maximum upload size in bytes (0 is unlimited)',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on media',
                'help' => 'Appends a timestamp based on last modified date to each media item',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.session.enabled' => [
                'type' => 'toggle',
                'label' => 'Enabled',
                'help' => 'Enable session support within Grav',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Timeout',
                'help' => 'Sets the session timeout in seconds',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Name',
                'help' => 'An identifier used to form the name of the session cookie',
                'name' => 'system.session.name'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'Absolute URLs',
                'highlight' => 0,
                'help' => 'Absolute or relative URLs for `base_url`',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'Parameter separator',
                'classes' => 'fancy',
                'help' => 'Separater for passed parameters that can be changed for Apache on Windows',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'cachebuster' => [
                    'enabled' => 'plugins.cachebuster.enabled',
                    'route' => 'plugins.cachebuster.route'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled'
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'count' => 'plugins.feed.count',
                    'description' => 'plugins.feed.description',
                    'lang' => 'plugins.feed.lang',
                    'length' => 'plugins.feed.length'
                ],
                'highlight' => [
                    'enabled' => 'plugins.highlight.enabled',
                    'theme' => 'plugins.highlight.theme'
                ],
                'mediaembed' => [
                    'enabled' => 'plugins.mediaembed.enabled',
                    'built_in_css' => 'plugins.mediaembed.built_in_css',
                    'built_in_js' => 'plugins.mediaembed.built_in_js',
                    'media' => [
                        'width' => 'plugins.mediaembed.media.width',
                        'height' => 'plugins.mediaembed.media.height',
                        'adjust' => 'plugins.mediaembed.media.adjust',
                        'preview' => 'plugins.mediaembed.media.preview',
                        'protocol' => 'plugins.mediaembed.media.protocol'
                    ],
                    'services' => [
                        'SoundCloud' => 'plugins.mediaembed.services.SoundCloud',
                        'Spotify' => 'plugins.mediaembed.services.Spotify',
                        'Flickr' => 'plugins.mediaembed.services.Flickr',
                        'Imgur' => 'plugins.mediaembed.services.Imgur',
                        'Instagram' => 'plugins.mediaembed.services.Instagram',
                        'Dailymotion' => 'plugins.mediaembed.services.Dailymotion',
                        'YouTube' => 'plugins.mediaembed.services.YouTube',
                        'Vimeo' => 'plugins.mediaembed.services.Vimeo',
                        'GitHub' => 'plugins.mediaembed.services.GitHub',
                        'Slides' => 'plugins.mediaembed.services.Slides'
                    ]
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'home_redirect' => [
                        'include_lang' => 'system.languages.home_redirect.include_lang',
                        'include_route' => 'system.languages.home_redirect.include_route'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'twig' => 'system.debugger.twig',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'debug' => 'system.images.debug'
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name'
                ],
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
