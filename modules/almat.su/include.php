<?php

$module_folder = \Bitrix\Main\Application::getDocumentRoot() . '/local/modules/almat.su';

\Bitrix\Main\Loader::registerNamespace('Almat\Su\Controller', $module_folder . '/controller');

$classes = [
    'Almat\Su\Controller\ActionFilter\SimpleToken' => 'controller/actionfilter/SimpleToken.php',
];

\Bitrix\Main\Loader::registerAutoLoadClasses(
    'almat.su',
    $classes,
);