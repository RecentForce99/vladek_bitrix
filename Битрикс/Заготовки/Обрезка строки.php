<?php
 function mbCutString($str, $length, $postfix='...', $encoding='UTF-8')
    {
        if (mb_strlen($str, $encoding) <= $length) {
            return $str;
        }

        $tmp = mb_substr($str, 0, $length, $encoding);
        return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
    };

function cutStringToDotOrComma($str, $length, $encoding='UTF-8') : string
{
    $str = strip_tags($str);
    if (mb_strlen($str, $encoding) <= $length) 
        return $str;

    $tmp = mb_substr($str, 0, $length, $encoding);
    $croppedStr = mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding);

    $strToArrayTransform = explode(' ', $croppedStr);
    $result = '';

    for( $i = count($strToArrayTransform); $i > 0; $i-- )
    {
        if(isset($strToArrayTransform[$i]))
        {
            if(mb_substr($strToArrayTransform[$i], -1) == '.' || mb_substr($strToArrayTransform[$i], -1) == ',')
            {
                $result = implode(' ', $strToArrayTransform); 
                break;
            }
            else unset($strToArrayTransform[$i]);   
        }
    }

    if(!$result) $result = $croppedStr;

    return $result;
}



?> 
