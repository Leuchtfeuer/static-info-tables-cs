<?php
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_cs',
    ];

    \Bitmotion\StaticInfoTablesCs\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_territories');
unset($initialize);
