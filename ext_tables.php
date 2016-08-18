<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
$tablesAdditionalFields = array(
    'static_countries' => array(
        'cn_short_en' => 'cn_short_cs',
        'cn_official_name_en' => 'cn_official_name_cs',
        'cn_capital' => 'cn_capital_cs',
    ),
    'static_country_zones' => array(
        'zn_name_en' => 'zn_name_cs',
    ),
    'static_currencies' => array(
        'cu_name_en' => 'cu_name_cs',
        'cu_sub_name_en' => 'cu_sub_name_cs',
    ),
    'static_languages' => array(
        'lg_name_en' => 'lg_name_cs',
    ),
    'static_territories' => array(
        'tr_name_en' => 'tr_name_cs',
    ),
);

$extensionResourcesLanguagePath = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:';

foreach ($tablesAdditionalFields as $table => $additionalFields) {
    if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < 6001000) {
        \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA($table);
    }
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = array();
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = $extensionResourcesLanguagePath . ':' . $table . '_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
    }
}
unset($additionalColumns);
unset($tablesAdditionalFields);
