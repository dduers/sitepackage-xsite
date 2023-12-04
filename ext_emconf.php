<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage_xsite".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'sitepackage-xsite',
    'description' => 'Site package for XSite TYPO3 web page',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dduers\\SitepackageXsite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Daniel Dürsteler',
    'author_email' => 'daniel.duersteler@xsite.ch',
    'author_company' => 'XSite Web Development & Design',
    'version' => '1.0.0',
];
