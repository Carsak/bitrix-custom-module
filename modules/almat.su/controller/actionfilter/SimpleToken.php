<?php
namespace Almat\Su\Controller\ActionFilter;

use Bitrix\Main\Application;
use Bitrix\Main\Engine\ActionFilter\Base;
use Bitrix\Main\Error;
use Bitrix\Main\Event;
use Bitrix\Main\EventResult;

final class SimpleToken extends Base
{
    private const INVALID_TOKEN = 401;
    private const TOKEN = 'simple_token';

    public function onBeforeAction(Event $event): ?EventResult
    {
        $request = Application::getInstance()->getContext()->getRequest();
        $token = $request->getHeader('token');

        \CModule::IncludeModule('almat.su');

        if ($token) {
            if ($token !== self::TOKEN) {
                $this->addError(new Error('Неверный токен', self::INVALID_TOKEN));

                return new EventResult(EventResult::ERROR, '', 'almat.su', $this);
            } else {
                /** @var \CUser $USER */
                global $USER;
                // по умолчанию авторизация из-под админа
                $USER->Authorize(1);
            }
        }

        return null;
    }
}
