<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Academic social network fields for tt_address',
    'description' => 'Adds fields for researchers in tt_address',
    'category' => 'plugin',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'extender' => '6.6.0-7.99.99',
            'tt_address' => '4.0.0-5.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
