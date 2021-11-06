<?php
defined('TYPO3_MODE') or die();

$columns = [
    'orcid' => [
        'label' => 'ORCID',
        'config' => [
              'type' => 'input',
              'size' => 20,
              'eval' => 'trim',
              'max' => 20,
              'placeholder' => '0000-0000-0000-0000',
        ]
    ],

    'scholar' => [
        'label' => 'Google Scholar',
        'config' => [
              'type' => 'input',
              'size' => 15,
              'eval' => 'trim',
              'max' => 15,
              'placeholder' => 'jnpiIskAAAAJ',
        ]
    ],

    'researchgate' => [
        'label' => 'Research gate',
        'config' => [
              'type' => 'input',
              'size' => 20,
              'eval' => 'trim',
              'max' => 255,
              'placeholder' => 'John-Doe',
        ]
    ],

    'researcherid' => [
        'label' => 'Researcher ID',
        'config' => [
              'type' => 'input',
              'size' => 12,
              'eval' => 'trim',
              'max' => 255,
              'placeholder' => 'H-0000-2000',
        ]
    ]
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'orcid, scholar, researchgate, researcherid', '', 'after:linkedin');
