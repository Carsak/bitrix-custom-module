<?php

return function (\Bitrix\Main\Routing\RoutingConfigurator $routes) {
    $routes->get('/almat/su/user/', [\Almat\Su\Controller\User::class, 'getAction']);
};