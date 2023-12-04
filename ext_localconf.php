<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sitepackage_xsite'] = 'EXT:sitepackage_xsite/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['layoutRootPaths'][700] = 'EXT:sitepackage_xsite/Resources/Private/Layouts/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['partialRootPaths'][700] = 'EXT:sitepackage_xsite/Resources/Private/Partials/';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['templateRootPaths'][700] = 'EXT:sitepackage_xsite/Resources/Private/Templates/Email/';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sitepackage_xsite/Configuration/TsConfig/Page/All.tsconfig">');
