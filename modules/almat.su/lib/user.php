<?php

namespace Almat\Su;

class User
{
    public function getNameAndLastName(array $filter): array
    {
        $result = \CUser::GetList('', '', $filter);

        while ($row = $result->Fetch()) {
            $data[$row['ID']] = $row['NAME'] . ' ' . $row['LAST_NAME'];
        }

        return $data ?? [];
    }
}