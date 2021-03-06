<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_happyfeet_domain_model_footnote');
$TCA['tx_happyfeet_domain_model_footnote'] = array(
    'ctrl' => array(
        'title' => 'LLL:EXT:happy_feet/Resources/Private/Language/locallang_db.xml:tx_happyfeet_domain_model_footnote',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => TRUE,
        'searchFields' => 'index_number,title,header,description',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden'
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Footnote.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/TCA/Footnote.gif'
    ),
    "feInterface" => array(
        "fe_admin_fieldList" => "hidden, title, index_number, description",
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Happy Feet Footnote');