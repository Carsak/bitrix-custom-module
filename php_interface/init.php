<?php

CModule::IncludeModule('almat.su');

$user = new \Almat\Su\User();

$rows = $user->getNameAndLastName();

print_r($rows);