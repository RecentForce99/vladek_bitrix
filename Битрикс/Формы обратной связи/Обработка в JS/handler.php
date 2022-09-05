<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
global $USER;

$props = [
    'EMAIL' => filter_var(trim(htmlspecialchars(strip_tags($_POST['EMAIL']))), FILTER_SANITIZE_STRING),
    'PHONE' => filter_var(trim(htmlspecialchars(strip_tags($_POST['PHONE']))), FILTER_SANITIZE_STRING),
    'URL'   => filter_var(trim(htmlspecialchars(strip_tags($_POST['URL']))), FILTER_SANITIZE_STRING),
    'MESSAGE' => ["VALUE" => ["TEXT" => filter_var(trim(htmlspecialchars(strip_tags($_POST['MESSAGE']))), FILTER_SANITIZE_STRING), "TYPE" => "TEXT"]]
];


$el = new CIBlockElement;

$upload = Array(
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_SECTION_ID" => 79,
    "IBLOCK_ID"      => 43,
    "PROPERTY_VALUES"=> $props,
    "NAME"           => filter_var(trim(htmlspecialchars(strip_tags($_POST['NAME']))), FILTER_SANITIZE_STRING),
    "ACTIVE"         => "Y",
);
if($PRODUCT_ID = $el->Add($upload))
    echo 1;
else
    echo "Error: ".$el->LAST_ERROR;
?>
