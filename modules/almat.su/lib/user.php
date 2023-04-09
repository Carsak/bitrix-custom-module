<?php

namespace Almat\Su;

class User
{
    public function getNameAndLastName(): array
    {
        /** @var \CUser $USER */
        global $USER;
        $result = $USER::GetList();

        while ($row = $result->Fetch()) {
            $data[$row['ID']] = $row['NAME'] . ' ' . $row['LAST_NAME'];
        }

        return $data ?? [];
    }
}