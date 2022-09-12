<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if($b){
        $result = pow($a,3)+($b*$c)-($a/$b) ;
    }else $result = "b can't be 0";
    echo json_encode($result);
?>