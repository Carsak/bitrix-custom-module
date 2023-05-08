<?php

namespace Almat\Su;

use Bitrix\Main\Application;

class EventHandler
{
    public static function disableBitrixAuth(): void
    {
        try {
            $route = \Bitrix\Main\Application::getInstance()->getCurrentRoute();
            $c = $route->getController();
        } catch (\Throwable $exception) {
            // direct php file doesnt have route
            return;
        }

        if (is_array($c) && !empty($c[0])) {
            $controller_name = $c[0];
            $is_my_controller = str_starts_with($controller_name, 'Almat\Su\Controller');
            $token = Application::getInstance()->getContext()->getRequest()->getHeader('token');

            if ($is_my_controller && !empty($token)) {
                define("NOT_CHECK_PERMISSIONS", true);
            }
        }
    }
}