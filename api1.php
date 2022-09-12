<?php
    $str = $_GET['string'];
    function palindrome ($MyString) {
        $l = 0;
        $r = strlen($MyString) - 1;
        $flag = 0;

        while($r > $l){
            if ($MyString[$l] != $MyString[$r]){
            $flag = 1;
            break;
            }
            $l++;
            $r--;
        }

        return (!$flag);
    }
    echo json_encode(palindrome($str));
?>