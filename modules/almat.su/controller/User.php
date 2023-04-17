<?php
namespace Almat\Su\Controller;


use Bitrix\Main\Engine\Controller;

class User extends Controller
{
    private \Almat\Su\User $user;

    protected function prepareParams(): bool
    {
        $this->user = new \Almat\Su\User();
        return parent::prepareParams();
    }

    public function getAction(array $params ): array
    {
        return $this->user->getNameAndLastName($params);
    }
}