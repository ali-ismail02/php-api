<?php
    $pass = $_POST['pass'];
    $message = "";
    $flag = 0;
    if(strlen($pass) < 12){ 
        $message .="Password should be at least 12 characters. ";
        $flag = 1;
    }
    if(!preg_match('@[A-Z]@', $pass)){ 
        $message .= "Password should contain 1 uppercase letter. ";
        $flag = 1;
    }
    if(!preg_match('@[a-z]@', $pass)){
        $message .= "Password should contain 1 lowercase letter. ";
        $flag =1;
    }
    if(!preg_match('@[0-9]@', $pass)){
        $message .= "Password should contain 1 number. ";
        $flag =1;
    }
    if(!$flag){
       $message .= "Strong Password";
    }

    echo json_encode($message);

    // NOTE: tried pspell butit requires a library which needs to be configured on your device so i removed it