<?php
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

global $APPLICATION;
$USER = new CUser;

$id = filter_var(trim(htmlspecialchars(strip_tags($_POST['ID']))), FILTER_SANITIZE_STRING);
$pass = filter_var(trim(htmlspecialchars(strip_tags($_POST['PASSWORD']))), FILTER_SANITIZE_STRING);

if($id !== '' && $pass !== '')
{
    $arAuthResult = $USER->Login($id, $pass, "Y");
    $result = $APPLICATION->arAuthResult = $arAuthResult;

    if(strval($result) == 1) print_r(1);
    else die('Неверный логин/пароль или Ваш аккаунт ещё не был активирован');
}
else
{
    $result = 'Вы не указали все данные';
}
