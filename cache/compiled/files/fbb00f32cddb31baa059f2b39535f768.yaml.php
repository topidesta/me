<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://personal/personal.yaml',
    'modified' => 1652338833,
    'size' => 780,
    'data' => [
        'enabled' => true,
        'profile' => [
            'name' => 'John Doe',
            'desc' => 'short description',
            'avatar_url' => 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Wikipe-tan_avatar.png',
            'bio' => 'Some longer description of self. Write anything you\'d like here, as long as it will make you shine...'
        ],
        'social' => [
            'networks' => [
                0 => [
                    'url' => '#',
                    'icon' => 'fa-twitter',
                    'title' => NULL
                ],
                1 => [
                    'url' => '#',
                    'icon' => 'fa-mastodon',
                    'title' => NULL
                ],
                2 => [
                    'url' => '#',
                    'icon' => 'fa-linkedin',
                    'title' => NULL
                ],
                3 => [
                    'url' => '#',
                    'icon' => 'fa-gitlab',
                    'title' => NULL
                ],
                4 => [
                    'url' => '#',
                    'icon' => 'fa-peertube',
                    'title' => NULL
                ]
            ]
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/personal'
                    ]
                ]
            ]
        ]
    ]
];
