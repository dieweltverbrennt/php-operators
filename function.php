<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$patronymic = $_POST['patronymic'];

// var_dump(iconv($firstName,'UTF-8'));

$charFirst = mb_strtoupper(substr($firstName,0,2), "utf-8"); // это первый символ
$firstName[0] = $charFirst[0];
$firstName[1] = $charFirst[1];

$charLast = mb_strtoupper(substr($lastName,0,2), "utf-8"); // это первый символ
$lastName[0] = $charLast[0];
$lastName[1] = $charLast[1];

$charPatronymic = mb_strtoupper(substr($patronymic,0,2), "utf-8"); // это первый символ
$patronymic[0] = $charPatronymic[0];
$patronymic[1] = $charPatronymic[1];

$fullName = $lastName . ' ' . $firstName . ' ' . $patronymic;
$fio = $charLast . $charFirst . $charPatronymic;
$surnameAndInitials = $lastName . ' ' . $charFirst . '. ' . $charPatronymic . '.';

echo 'Полное имя: "' . $fullName . '"';
echo "</br>";
echo 'Аббревиатура: "' . $fio . '"';
echo "</br>";
echo 'Фамилия и инициалы: "' . $surnameAndInitials . '"';