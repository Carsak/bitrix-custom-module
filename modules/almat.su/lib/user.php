<?php

namespace Almat\Su;

class User
{
    public function getNameAndLastName(): array
    {
        $result = \CUser::GetList();

        while ($row = $result->Fetch()) {
            $data[$row['ID']] = $row['NAME'] . ' ' . $row['LAST_NAME'];
        }

        return $data ?? [];
    }
}