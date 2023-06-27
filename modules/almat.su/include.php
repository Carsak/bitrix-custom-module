<?php

$module_folder = \Bitrix\Main\Application::getDocumentRoot() . '/local/modules/almat.su';

\Bitrix\Main\Loader::registerNamespace('Almat\Su\Controller', $module_folder . '/controller');