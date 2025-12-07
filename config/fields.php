<?php

return [
    [
        'name' => 'text_parallax_y',
        'type' => 'Text',
        'label' => 'Parallax Speed Y',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 25,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'text_parallax_x',
        'type' => 'Text',
        'label' => 'Parallax Data Speed X',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 25,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'text_label',
        'type' => 'Text',
        'label' => 'Modul Beschriftung',
        'tags' => 'text',
        'icon' => 'File text o',
        'width' => 100,
        'formatter' => 'TextformatterEntities',
        'inputfieldClass' => null,
    ],
    [
        'name' => 'checkbox_individual',
        'type' => 'Checkbox',
        'label' => 'Individuelle Containereinstellung?',
        'tags' => 'settings',
        'icon' => 'Check',
        'width' => 25,
        'formatter' => null,
        'inputfieldClass' => null,
    ],
    [
        'name' => 'select_width_column',
        'type' => 'Options',
        'label' => 'Spaltenbreite',
        'tags' => 'settings',
        'icon' => 'Check square o',
        'width' => 25,
        'options' => '
                1=col-1
                2=col-2
                3=col-3
                4=col-4
                5=col-5
                6=col-6
                7=col-7
                8=col-8
                9=col-9
                10=col-10 (für offset-2)
                11=col-11 (für offset-1)
                12=col
                ',
    ],
    [
        'name' => 'select_offset_column',
        'type' => 'Options',
        'label' => 'Spaltenabstand',
        'tags' => 'settings',
        'icon' => 'Check square o',
        'width' => 25,
        'options' => '
                1=offset-1
                2=offset-2
                3=offset-3
                4=offset-4
                5=offset-5
                6=offset-6
                7=offset-7
                8=offset-8
                9=offset-9
                ',
    ],
    [
        'name' => 'select_header_options',
        'type' => 'Options',
        'label' => 'Header Darstellung',
        'tags' => 'settings',
        'icon' => 'Check square o',
        'width' => 100,
        'defaultValue' => 1,
        'required' => 1,
        'options' => '
                1=Bildslider (Standard)
                2=Videoslider
                3=Videoslider (Bild Cover)
                4=Ein Video / Bildslider
            ',
    ],
    [
        'name' => 'int_slider',
        'type' => 'Integer',
        'label' => 'Slide - Anzahl',
        'tags' => 'integer',
        'icon' => 'calculator',
        'width' => 100,
        'zeroNotEmpty' => 0,
        'defaultValue' => 2,
        'inputType' => 'text',
        'size' => 10,
        'min' => 2,
        'max' => 5,
    ],
    [
        'name' => 'repeater_content',
        'type' => 'Repeater',
        'label' => 'Repeater (Content)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'rememberOpen' => 1,
        'fields' => [
            'select_width_column',
            'select_offset_column',
            'text_class',
            'checkbox_individual',
            'matrix_content'
        ]
    ],
    [
        'name' => 'repeater_slider',
        'type' => 'Repeater',
        'label' => 'Repeater (Slider)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'matrix_content',
        ]
    ],
    [
        'name' => 'repeater_two_col',
        'type' => 'Repeater',
        'label' => 'Repeater (2 Spalten)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'matrix_content',
        ]
    ],
    [
        'name' => 'repeater_parallax_images',
        'type' => 'Repeater',
        'label' => 'Repeater (Parallax Images)',
        'tags' => 'repeater',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'image',
            'text_parallax_y',
            'text_parallax_x',
        ]
    ],
    [
        'name' => 'image_background',
        'type' => 'CroppableImage3',
        'label' => 'Hintergrundbild',
        'tags' => 'images',
        'icon' => 'File image o',
        'width' => 50,
        'maxFiles' => 1,
        'defaultValuePage' => 0,
        'gridMode' => 'list',
        'clientQuality' => 90,
        'extensions' => 'jpg jpeg png',
        'inputfieldClass' => 'InputfieldCroppableImage3',
        'cropSetting' =>
            <<<EOT
                desktop,1920,1080
                tablet,1024,600
                mobile,600,600
                quadratisch,750,750
                EOT,
    ],
    [
        'name' => 'matrix_basic',
        'type' => 'RepeaterMatrix',
        'label' => 'Matrix (Basic)',
        'tags' => 'matrix',
        'icon' => 'Codepen',
        'addType' => 1,
        'rememberOpen' => 1,
        'fields' => [
            'repeater_content',
            'repeater_slider',
            'repeater_two_col',
            'repeater_header_smooth',
            'repeater_parallax_images',
            'text_label',
            'image',
            'image_background',
            'fieldset_video_content',
            'fieldset_video_content_END',
            'text_class',
            'text_difference_desktop',
            'text_difference_tablet',
            'text_difference_mobile',
            'file_video',
            'file_video_subtitle',
            'text_video_speaker',
            'text_video_description',
            'int_slider',
            'checkbox_separator',
            'select_header_options',
            'select_separator_options',
            'matrix_content'
        ],
        'matrix_items' => [
            [
                'name' => 'basic_header',
                'label' => 'Header',
                'fields' => [
                    'select_header_options',
                    'fieldset_video_content' => [
                        'showIf' => 'select_header_options=4',
                    ],
                    'file_video',
                    'file_video_subtitle',
                    'text_video_speaker',
                    'text_video_description',
                    'fieldset_video_content_END',
                    'repeater_header_smooth'
                ]
            ],
            [
                'name' => 'basic_breadcrumb',
                'label' => 'Breadcrumb',
                'fields' => []
            ],
            [
                'name' => 'basic_separator',
                'label' => 'Separator',
                'fields' => [
                    'text_label',
                    'select_separator_options',
                    'text_class',
                    'text_difference_desktop' => [
                        'showIf' => 'select_separator_options=1',
                    ],
                    'text_difference_tablet' => [
                        'showIf' => 'select_separator_options=1',
                    ],
                    'text_difference_mobile' => [
                        'showIf' => 'select_separator_options=1',
                    ],
                    'checkbox_separator' => [
                        'showIf' => 'select_separator_options=1',
                    ],
                    'image' => [
                        'width' => 100,
                        'showIf' => 'select_separator_options=2|3|4',
                    ]
                ],
            ],
            [
                'name' => 'basic_content',
                'label' => 'Grid',
                'fields' => [
                    'text_label',
                    'image_background',
                    'text_class',
                    'repeater_content',
                ]
            ],
            [
                'name' => 'basic_slider',
                'label' => 'Slider',
                'fields' => [
                    'text_label',
                    'int_slider',
                    'repeater_slider'
                ]
            ],
            [
                'name' => 'basic_smooth',
                'label' => 'Smooth Boxes',
                'fields' => [
                    'text_label',
                    'repeater_header_smooth'
                ]
            ],
            [
                'name' => 'basic_two_columns',
                'label' => 'Two Columns',
                'fields' => [
                    'text_label',
                    'repeater_two_col'
                ]
            ],
            [
                'name' => 'basic_parallax',
                'label' => 'Parallax',
                'fields' => [
                    'text_label',
                    'repeater_parallax_images',
                    'matrix_content'
                ]
            ]
        ]
    ]
];