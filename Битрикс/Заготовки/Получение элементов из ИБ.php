<?php
$items = CIBlockElement::GetList(
array(), 
array('IBLOCK_ID' => 18, 'ACTIVE' => 'Y'), 
false, 
array(),
array('PROPERTY_BANNER', 'PROPERTY_TITLE', 'PROPERTY_SUBTITLE'));
while($item = $items->GetNext())
?>
