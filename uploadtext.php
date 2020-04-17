<?php

    //uploading text
    $mysqli = new mysqli ("localhost", "root", "", "threads");
    $mysqli->query("SET NAMES 'utf8'");
    

    $temptext = $_POST[utext];
    
    date_default_timezone_set('Europe/Moscow');

    $temptext =  nl2br($temptext);

    $anontime = date('Y/m/d H:i:s')." anonimus";

    $anonip = $_SERVER['REMOTE_ADDR'];

    //text in DB
    $mysqli->query("INSERT INTO `threads`.`thread` (`Number`, `Name`, `Images`, `Text`, `IpAdress`) VALUES (NULL, '$anontime', 'src...', '$temptext', '$anonip');");

    //close DB
    $mysqli->close();
   
    
?>