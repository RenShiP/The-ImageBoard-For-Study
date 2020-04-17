<?php

    //upload text
    $mysqli = new mysqli ("localhost", "root", "", "threads");
    $mysqli->query("SET NAMES 'utf8'");
    

    $temptext = $_POST[utext];

    date_default_timezone_set('Europe/Moscow');

    $temptext =  nl2br($temptext);
    
    $anonname = " anonimus";

    $anontime = date('Y/m/d H:i:s').$anonname;

    //chanching text
    $newtemptext = mb_substr($temptext,12);
    
    $threadlink = stristr( $temptext,'!',true);
    $threadlink = strrev($threadlink);
    $threadlink = stristr($threadlink,'0',true);
    $threadlink = strrev($threadlink);

    $anonip = $_SERVER['REMOTE_ADDR'];

    $pos1 = strpos($temptext, "threadOI5FO45lyhkghjn?");
    $pos2 = strpos($temptext, "messageMOI5FO45lyhkgh?");


//admin cheats for deleting messages or threads
    if( $pos1 !== false ){
        
        $thenumber = 1;

        $thenewtemptext = mb_substr($newtemptext, 22);
        $thenumber = (int)$thenewtemptext;

        $deletemysqli = new mysqli ("localhost", "root", "", "threads");
        $deletemysqli->query("DELETE FROM `threads`.`thread` WHERE `Number` = $thenumber");
        $deletemysqli->close();

        
        $deletemysqli = new mysqli ("localhost", "root", "", "threads");
        $deletemysqli->query("DELETE FROM `threads`.`threadimages` WHERE `ImgNumber` = $thenumber");
        $deletemysqli->close();

        $thebestnewtemptext = ">puk";

        $mysqli->query("INSERT INTO `threads`.`threadmessages` (`Number`, `Name`, `Images`, `Text`, `TNumLink` ,`IpAdress`) VALUES (NULL, '$anontime', 'src...', '$thebestnewtemptext','$threadlink','$anonip');");
        
    }
    if( $pos2 !== false ){

            $thenumber = 1;
    
            $thenewtemptext = mb_substr($newtemptext, 22);
            $thenumber = (int)$thenewtemptext;
    
            $deletemysqli = new mysqli ("localhost", "root", "", "threads");
            $deletemysqli->query("DELETE FROM `threads`.`threadmessages` WHERE `Number` = $thenumber");
            $deletemysqli->close();
            
            $deletemysqli = new mysqli ("localhost", "root", "", "threads");
            $deletemysqli->query("DELETE FROM `threads`.`threadmessagesimages` WHERE `ImgNumber` = $thenumber");
            $deletemysqli->close();
    
            $thebestnewtemptext = ">puk";
    
            $mysqli->query("INSERT INTO `threads`.`threadmessages` (`Number`, `Name`, `Images`, `Text`, `TNumLink` ,`IpAdress`) VALUES (NULL, '$anontime', 'src...', '$thebestnewtemptext','$threadlink','$anonip');");
            
    }
    if($pos2 !== true){
        if ($pos1 !== true){

    //upload thread in DB
    $mysqli->query("INSERT INTO `threads`.`threadmessages` (`Number`, `Name`, `Images`, `Text`, `TNumLink` ,`IpAdress`) VALUES (NULL, '$anontime', 'src...', '$newtemptext','$threadlink','$anonip');");

        }
   
    }

 
    $mysqli->close();
    
?>
