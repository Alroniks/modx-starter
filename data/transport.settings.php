<?php

$settings = array();

$opt = array(
    'date_timezone' => array(
        'key' => 'date_timezone',
        'value' => 'Europe/Minsk'
    ),
    'link_tag_scheme' => array(
        'key' => 'link_tag_scheme',
        'value' => 'full'
    ),
    'manager_date_format' => array(
        'key' => 'manager_date_format',
        'value' => 'd.m.Y'
    ),
    'manager_time_format' => array(
        'key' => 'manager_time_format',
        'value' => 'H:i'
    ),
    'manager_week_start' => array(
        'key' => 'manager_week_start',
        'value' => 1
    ),
    'automatic_alias' => array(
        'key' => 'automatic_alias',
        'value' => true
    ),
    'friendly_alias_translit' => array(
        'key' => 'friendly_alias_translit',
        'value' => 'russian'
    ),
    'friendly_urls' => array(
        'key' => 'friendly_urls',
        'value' => true
    ),
    'friendly_urls_strict' => array(
        'key' => 'friendly_urls_strict',
        'value' => true
    ),
    'use_alias_path' => array(
        'key' => 'use_alias_path',
        'value' => true
    ),
    'upload_maxsize' => array(
        'key' => 'upload_maxsize',
        'value' => 10485760 // 10Mb
    ),
    'which_element_editor' => array(
        'key' => 'which_element_editor',
        'value' => 'Ace'
    ),
    'cache_disabled' => array(
        'key' => 'cache_disabled',
        'value' => true
    ),
    'cache_scripts' => array(
        'key' => 'cache_scripts',
        'value' => false
    )
);

foreach ($opt as $k => $v) {
    /* @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
            array(
                'key' => $k,
                'namespace' => 'core',
            ), $v
        ),'',true,true);

    $settings[] = $setting;
}

unset($tmp);
return $settings;
