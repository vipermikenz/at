<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'Bootstrap' => $baseDir . '/vendor/holt59/cakephp3-bootstrap-helpers/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'LightStrap' => $baseDir . '/vendor/cakemanager/cakeadmin-lightstrap/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'StallholderAgreement' => $baseDir . '/plugins/StallholderAgreement/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/'
    ]
];