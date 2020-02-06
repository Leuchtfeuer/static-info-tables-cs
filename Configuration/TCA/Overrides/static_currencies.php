<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesAr\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cu_name_en' => 'cu_name_cs', 'cu_sub_name_en' => 'cu_sub_name_cs'],
    'static_currencies'
);
