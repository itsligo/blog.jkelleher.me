<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '0037e3063969e46f8cdf1b84e99c82c2:4fbe988615f49ada05d9dd5b42b3cf1b',
    'files' => [
        'user/plugins' => [
            'plugins/cachebuster' => [
                'file' => 'user/plugins/cachebuster/blueprints.yaml',
                'modified' => 1439721565
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1441294781
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1441294783
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
                'modified' => 1441294784
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1441294786
            ],
            'plugins/random' => [
                'file' => 'user/plugins/random/blueprints.yaml',
                'modified' => 1441360626
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1442860064
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1442859860
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1442859860
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1442859860
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1442859860
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins'
            ],
            'plugins.cachebuster' => [
                'type' => '_parent',
                'name' => 'plugins.cachebuster'
            ],
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
            'plugins.error' => [
                'type' => '_parent',
                'name' => 'plugins.error'
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
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes'
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404'
            ],
            'plugins.feed' => [
                'type' => '_parent',
                'name' => 'plugins.feed'
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
            'plugins.feed.limit' => [
                'type' => 'text',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.limit'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description'
            ],
            'plugins.feed.lang' => [
                'type' => 'text',
                'label' => 'Feed language code',
                'default' => 'en',
                'placeholder' => 'en',
                'validate' => [
                    'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                ],
                'name' => 'plugins.feed.lang'
            ],
            'plugins.feed.length' => [
                'type' => 'text',
                'label' => 'Feed Length',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length'
            ],
            'plugins.highlight' => [
                'type' => '_parent',
                'name' => 'plugins.highlight'
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
            'plugins.mediaembed' => [
                'type' => '_parent',
                'name' => 'plugins.mediaembed'
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
            'plugins.mediaembed.media' => [
                'type' => '_parent',
                'name' => 'plugins.mediaembed.media'
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
            'plugins.mediaembed.services' => [
                'type' => '_parent',
                'name' => 'plugins.mediaembed.services'
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
            'plugins.pagination' => [
                'type' => '_parent',
                'name' => 'plugins.pagination'
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
            'plugins.pagination.delta' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delta',
                'default' => 0,
                'help' => 'How many pages to show left and right of the current page',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta'
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
            'plugins.problems' => [
                'type' => '_parent',
                'name' => 'plugins.problems'
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
            'plugins.problems.built_in_css' => [
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
                'name' => 'plugins.problems.built_in_css'
            ],
            'plugins.random' => [
                'type' => '_parent',
                'name' => 'plugins.random'
            ],
            'plugins.random.enabled' => [
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
                'name' => 'plugins.random.enabled'
            ],
            'plugins.random.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'help' => 'Default route of the random plugin',
                'name' => 'plugins.random.route'
            ],
            'plugins.random.redirect' => [
                'type' => 'toggle',
                'label' => 'Redirect',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.random.redirect'
            ],
            'plugins.random.filters' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.random.filters'
            ],
            'plugins.random.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.random.filter_combinator'
            ],
            'plugins.relatedpages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages'
            ],
            'plugins.relatedpages.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.enabled'
            ],
            'plugins.relatedpages.basics_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.BASICS',
                'underline' => true,
                'name' => 'plugins.relatedpages.basics_title'
            ],
            'plugins.relatedpages.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.LIMIT',
                'help' => 'PLUGIN_REL_PAGES.LIMIT_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'plugins.relatedpages.limit'
            ],
            'plugins.relatedpages.show_score' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                'help' => 'PLUGIN_REL_PAGES.SHOW_SCORE_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.show_score'
            ],
            'plugins.relatedpages.filter' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter'
            ],
            'plugins.relatedpages.filter.items' => [
                'type' => 'text',
                'yaml' => true,
                'label' => 'PLUGIN_REL_PAGES.ITEMS',
                'help' => 'PLUGIN_REL_PAGES.ITEMS_HELP',
                'default' => '@page: /blog',
                'name' => 'plugins.relatedpages.filter.items'
            ],
            'plugins.relatedpages.filter.order' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter.order'
            ],
            'plugins.relatedpages.filter.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                'default' => 'date',
                'options' => [
                    'folder' => 'Folder',
                    'title' => 'Title',
                    'date' => 'Date',
                    'default' => 'Default'
                ],
                'name' => 'plugins.relatedpages.filter.order.by'
            ],
            'plugins.relatedpages.filter.order.dir' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.relatedpages.filter.order.dir'
            ],
            'plugins.relatedpages.page_in_filter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                'help' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.page_in_filter'
            ],
            'plugins.relatedpages.explicit_pages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.explicit_pages'
            ],
            'plugins.relatedpages.explicit_pages.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.explicit_pages.process'
            ],
            'plugins.relatedpages.explicit_pages.score' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                'help' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.relatedpages.explicit_pages.score'
            ],
            'plugins.relatedpages.taxonomy_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.TAXONOMY_MATCH',
                'underline' => true,
                'name' => 'plugins.relatedpages.taxonomy_title'
            ],
            'plugins.relatedpages.taxonomy_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_HELP',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process'
            ],
            'plugins.relatedpages.content_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.CONTENT_MATCH',
                'underline' => true,
                'name' => 'plugins.relatedpages.content_title'
            ],
            'plugins.relatedpages.content_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.content_match'
            ],
            'plugins.relatedpages.content_match.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                'help' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS_HELP',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.content_match.process'
            ],
            'plugins.relatedpages.advanced_title' => [
                'type' => 'section',
                'title' => 'PLUGIN_REL_PAGES.ADVANCED',
                'underline' => true,
                'name' => 'plugins.relatedpages.advanced_title'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'placeholder_value' => 50,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'placeholder_value' => 50,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
            ],
            'site' => [
                'type' => '_parent',
                'name' => 'site'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'placeholder' => 'PLUGIN_ADMIN.SITE_TITLE_PLACEHOLDER',
                'help' => 'PLUGIN_ADMIN.SITE_TITLE_HELP',
                'name' => 'site.title'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'help' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR_HELP',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TAXONOMY_TYPES_HELP',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'help' => 'PLUGIN_ADMIN.SUMMARY_SIZE_HELP',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.FORMAT_HELP',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'help' => 'PLUGIN_ADMIN.DELIMITER_HELP',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'help' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS_PLACEHOLDER_VALUE',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'help' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_HELP',
                'placeholder_key' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_KEY',
                'placeholder_value' => 'PLUGIN_ADMIN.CUSTOM_ROUTES_PLACEHOLDER_VALUE',
                'name' => 'site.routes'
            ],
            'streams' => [
                'type' => '_parent',
                'name' => 'streams'
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system' => [
                'type' => '_parent',
                'name' => 'system'
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP',
                'name' => 'system.home.alias'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
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
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
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
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Godthab' => '(UTC-02:00) America/Godthab',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'America/Scoresbysund' => '(UTC+00:00) America/Scoresbysund',
                    'Atlantic/Azores' => '(UTC+00:00) Atlantic/Azores',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Europe/Jersey' => '(UTC+01:00) Europe/Jersey',
                    'Africa/El_Aaiun' => '(UTC+01:00) Africa/El_Aaiun',
                    'Europe/London' => '(UTC+01:00) Europe/London',
                    'Europe/Isle_of_Man' => '(UTC+01:00) Europe/Isle_of_Man',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Europe/Lisbon' => '(UTC+01:00) Europe/Lisbon',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Africa/Casablanca' => '(UTC+01:00) Africa/Casablanca',
                    'Europe/Dublin' => '(UTC+01:00) Europe/Dublin',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Atlantic/Madeira' => '(UTC+01:00) Atlantic/Madeira',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Atlantic/Faroe' => '(UTC+01:00) Atlantic/Faroe',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Atlantic/Canary' => '(UTC+01:00) Atlantic/Canary',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Europe/Guernsey' => '(UTC+01:00) Europe/Guernsey',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Malta' => '(UTC+02:00) Europe/Malta',
                    'Europe/Belgrade' => '(UTC+02:00) Europe/Belgrade',
                    'Europe/Berlin' => '(UTC+02:00) Europe/Berlin',
                    'Europe/Vienna' => '(UTC+02:00) Europe/Vienna',
                    'Europe/Warsaw' => '(UTC+02:00) Europe/Warsaw',
                    'Europe/Zurich' => '(UTC+02:00) Europe/Zurich',
                    'Europe/Amsterdam' => '(UTC+02:00) Europe/Amsterdam',
                    'Europe/Zagreb' => '(UTC+02:00) Europe/Zagreb',
                    'Europe/Andorra' => '(UTC+02:00) Europe/Andorra',
                    'Europe/Vaduz' => '(UTC+02:00) Europe/Vaduz',
                    'Europe/Oslo' => '(UTC+02:00) Europe/Oslo',
                    'Europe/Monaco' => '(UTC+02:00) Europe/Monaco',
                    'Europe/Madrid' => '(UTC+02:00) Europe/Madrid',
                    'Europe/Ljubljana' => '(UTC+02:00) Europe/Ljubljana',
                    'Europe/Paris' => '(UTC+02:00) Europe/Paris',
                    'Europe/Prague' => '(UTC+02:00) Europe/Prague',
                    'Europe/Podgorica' => '(UTC+02:00) Europe/Podgorica',
                    'Europe/Rome' => '(UTC+02:00) Europe/Rome',
                    'Europe/San_Marino' => '(UTC+02:00) Europe/San_Marino',
                    'Europe/Tirane' => '(UTC+02:00) Europe/Tirane',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Luxembourg' => '(UTC+02:00) Europe/Luxembourg',
                    'Europe/Bratislava' => '(UTC+02:00) Europe/Bratislava',
                    'Europe/Stockholm' => '(UTC+02:00) Europe/Stockholm',
                    'Europe/Sarajevo' => '(UTC+02:00) Europe/Sarajevo',
                    'Europe/Skopje' => '(UTC+02:00) Europe/Skopje',
                    'Europe/Vatican' => '(UTC+02:00) Europe/Vatican',
                    'Europe/Copenhagen' => '(UTC+02:00) Europe/Copenhagen',
                    'Europe/Busingen' => '(UTC+02:00) Europe/Busingen',
                    'Antarctica/Troll' => '(UTC+02:00) Antarctica/Troll',
                    'Europe/Gibraltar' => '(UTC+02:00) Europe/Gibraltar',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Ceuta' => '(UTC+02:00) Africa/Ceuta',
                    'Arctic/Longyearbyen' => '(UTC+02:00) Arctic/Longyearbyen',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Europe/Brussels' => '(UTC+02:00) Europe/Brussels',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Africa/Windhoek' => '(UTC+02:00) Africa/Windhoek',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Europe/Budapest' => '(UTC+02:00) Europe/Budapest',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Cairo' => '(UTC+03:00) Africa/Cairo',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Europe/Riga' => '(UTC+03:00) Europe/Riga',
                    'Europe/Kiev' => '(UTC+03:00) Europe/Kiev',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Europe/Mariehamn' => '(UTC+03:00) Europe/Mariehamn',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Europe/Helsinki' => '(UTC+03:00) Europe/Helsinki',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Europe/Istanbul' => '(UTC+03:00) Europe/Istanbul',
                    'Europe/Zaporozhye' => '(UTC+03:00) Europe/Zaporozhye',
                    'Asia/Beirut' => '(UTC+03:00) Asia/Beirut',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Asia/Jerusalem' => '(UTC+03:00) Asia/Jerusalem',
                    'Asia/Gaza' => '(UTC+03:00) Asia/Gaza',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Europe/Bucharest' => '(UTC+03:00) Europe/Bucharest',
                    'Europe/Athens' => '(UTC+03:00) Europe/Athens',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Europe/Tallinn' => '(UTC+03:00) Europe/Tallinn',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Asia/Hebron' => '(UTC+03:00) Asia/Hebron',
                    'Europe/Sofia' => '(UTC+03:00) Europe/Sofia',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Europe/Uzhgorod' => '(UTC+03:00) Europe/Uzhgorod',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Europe/Vilnius' => '(UTC+03:00) Europe/Vilnius',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Europe/Chisinau' => '(UTC+03:00) Europe/Chisinau',
                    'Asia/Nicosia' => '(UTC+03:00) Asia/Nicosia',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
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
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat'
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                '@data-options' => '\\Grav\\Common\\Utils::dateFormats',
                'options' => [
                    '' => 'Auto Guess or Enter Custom',
                    'd-m-Y H:i' => 'd-m-Y H:i (e.g. 21-09-2015 19:43)',
                    'Y-m-d H:i' => 'Y-m-d H:i (e.g. 2015-09-21 19:43)',
                    'm/d/Y h:i a' => 'm/d/Y h:i (e.g. 09/21/2015 07:43 pm)',
                    'H:i d-m-Y' => 'H:i d-m-Y (e.g. 19:43 21-09-2015)',
                    'h:i a m/d/Y' => 'h:i a m/d/Y (e.g. 07:43 pm 09/21/2015)'
                ],
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
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
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
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
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
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
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_trailing_slash'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.home_redirect' => [
                'type' => '_parent',
                'name' => 'system.languages.home_redirect'
            ],
            'system.languages.home_redirect.include_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_LANGUAGE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_lang'
            ],
            'system.languages.home_redirect.include_route' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_ROUTE',
                'help' => 'PLUGIN_ADMIN.HOME_REDIRECT_INCLUDE_ROUTE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_route'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
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
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
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
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
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
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                'help' => 'PLUGIN_ADMIN.UPLOAD_LIMIT_HELP',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session'
            ],
            'system.session.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP',
                'name' => 'system.session.name'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
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
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'limit' => 'plugins.feed.limit',
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
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'random' => [
                    'enabled' => 'plugins.random.enabled',
                    'route' => 'plugins.random.route',
                    'redirect' => 'plugins.random.redirect',
                    'filters' => 'plugins.random.filters',
                    'filter_combinator' => 'plugins.random.filter_combinator'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'basics_title' => 'plugins.relatedpages.basics_title',
                    'limit' => 'plugins.relatedpages.limit',
                    'show_score' => 'plugins.relatedpages.show_score',
                    'filter' => [
                        'items' => 'plugins.relatedpages.filter.items',
                        'order' => [
                            'by' => 'plugins.relatedpages.filter.order.by',
                            'dir' => 'plugins.relatedpages.filter.order.dir'
                        ]
                    ],
                    'page_in_filter' => 'plugins.relatedpages.page_in_filter',
                    'explicit_pages' => [
                        'process' => 'plugins.relatedpages.explicit_pages.process',
                        'score' => 'plugins.relatedpages.explicit_pages.score'
                    ],
                    'taxonomy_title' => 'plugins.relatedpages.taxonomy_title',
                    'taxonomy_match' => [
                        'taxonomy' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                        'taxonomy_taxonomy' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
                        ],
                        'taxonomy_content' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
                        ]
                    ],
                    'content_title' => 'plugins.relatedpages.content_title',
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ],
                    'advanced_title' => 'plugins.relatedpages.advanced_title'
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
                        'default' => 'system.pages.dateformat.default',
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
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
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
                    ],
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale'
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
