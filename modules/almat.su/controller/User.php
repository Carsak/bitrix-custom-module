<?php
namespace Almat\Su\Controller;


use Almat\Su\Controller\ActionFilter as MyActionFilter;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;

class User extends Controller
{
    private \Almat\Su\User $user;

    public function getDefaultPreFilters(): array
    {
        return [
            new MyActionFilter\SimpleToken(),
            new ActionFilter\HttpMethod(
                [ActionFilter\HttpMethod::METHOD_GET, ActionFilter\HttpMethod::METHOD_POST]
            ),
        ];
    }

    protected function prepareParams(): bool
    {
        $this->user = new \Almat\Su\User();
        return parent::prepareParams();
    }

    public function getAction(array $params = []): array
    {
        return $this->user->getNameAndLastName($params);
    }
}