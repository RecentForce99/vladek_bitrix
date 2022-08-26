<?php
    function getPhoneNumber($number)
    {
        $n = 0;
        $phone = [];

        for($i = 0; $i < strlen($number); $i++ )
        {
            if( ((int)$number[$i] || $number[$i] == 0) && $number[$i] !== ' ' && $number[$i] !== '-' && $number[$i] !== '(' && $number[$i] !== ')')
            {
                $phone[$n]['url'] .= $number[$i];
            }
        }

        return $phone[0]['url'];
    }
?>
