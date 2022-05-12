<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/WEB-DEV/www/me.topidesta.my.id/user/plugins/flex-objects/blueprints/flex-objects.yaml',
    'modified' => 1652338687,
    'size' => 338,
    'data' => [
        'type' => 'flex-objects',
        'form' => [
            'fields' => [
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_OBJECTS.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
