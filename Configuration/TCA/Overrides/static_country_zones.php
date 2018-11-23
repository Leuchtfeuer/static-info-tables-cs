<?php
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'zn_name_en' => 'zn_name_cs',
    ];

    \Bitmotion\StaticInfoTablesCs\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_country_zones');
unset($initialize);
