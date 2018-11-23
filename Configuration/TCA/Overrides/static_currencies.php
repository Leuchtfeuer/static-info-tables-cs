<?php
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en' => 'cu_name_cs',
        'cu_sub_name_en' => 'cu_sub_name_cs',
    ];

    \Bitmotion\StaticInfoTablesCs\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_currencies');
unset($initialize);
