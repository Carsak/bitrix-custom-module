<?php

class almat_su extends CModule
{
    var $MODULE_ID = 'almat.su';
    var $MODULE_NAME = 'Выборка пользователей';
    var $MODULE_DESCRIPTION = "Каркас для модуля для сайта almat.su";
    var $MODULE_VERSION = "1.0";
    var $MODULE_VERSION_DATE = "2023-04-09 12:00:00";
    var $PARTNER_NAME = 'Almat Zhandauletov';
    var $PARTNER_URI = 'https://almat.su';

    public function DoInstall()
    {
        \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
    }

    public function DoUninstall()
    {
        \Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}
