<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'think\\helper\\' => array($vendorDir . '/topthink/think-helper/src'),
    'think\\composer\\' => array($vendorDir . '/topthink/think-installer/src'),
    'think\\captcha\\' => array($vendorDir . '/topthink/think-captcha/src'),
    'think\\' => array($vendorDir . '/topthink/think-image/src', $baseDir . '/simplewind/thinkphp/library/think', $vendorDir . '/topthink/think-queue/src'),
    'mindplay\\annotations\\' => array($vendorDir . '/mindplay/annotations/src/annotations'),
    'Qiniu\\' => array($vendorDir . '/qiniu/php-sdk/src/Qiniu'),
    'FontLib\\' => array($vendorDir . '/phenx/php-font-lib/src/FontLib'),
    'Dompdf\\' => array($vendorDir . '/dompdf/dompdf/src'),
);
