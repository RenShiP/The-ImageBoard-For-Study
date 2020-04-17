<?php

if (isset($_GET['u_name']))
{  
    $threadlink = $_GET['u_name'];

//text
$showsqlthreadtext = new mysqli ("localhost", "root", "", "threads");
$showsqlthreadtext->query("SET NAMES 'utf8'");
$sqlthreadthreadtext = $showsqlthreadtext->query("SELECT `Text` FROM `threadmessages`");

//thread link
$showsqlthreadlink = new mysqli ("localhost", "root", "", "threads");
$showsqlthreadlink->query("SET NAMES 'utf8'");
$sqlthreadthreadlink = $showsqlthreadlink->query("SELECT `TNumLink` FROM `threadmessages`");

//message date
$showsqlthreaddate = new mysqli ("localhost", "root", "", "threads");
$showsqlthreaddate->query("SET NAMES 'utf8'");
$sqlthreadthreaddate = $showsqlthreaddate->query("SELECT `Name` FROM `threadmessages`");

//message image
$showsqlthreadimage = new mysqli ("localhost", "root", "", "threads");
$showsqlthreadimage->query("SET NAMES 'utf8'");
$sqlthreadimage = $showsqlthreadimage->query("SELECT `Src` FROM `threadmessagesimages`");

//message number
$showsqlthreadtextnumber = new mysqli ("localhost", "root", "", "threads");
$showsqlthreadtextnumber->query("SET NAMES 'utf8'");
$sqlthreadtextnumber = $showsqlthreadtextnumber->query("SELECT `Number` FROM `threadmessages`");

//image number
$showsqlthreadimgnumber = new mysqli ("localhost", "root", "", "threads");
$showsqlthreadimgnumber->query("SET NAMES 'utf8'");
$sqlthreadimgnumber = $showsqlthreadimgnumber->query("SELECT `ImgNumber` FROM `threadmessagesimages`");

echo '<style>
     @font-face {
        font-family: Minecraft-Title-Cyrillic;
        src: url(miney.ttf);
        src: local(Minecraft-Title-Cyrillic), url(miney.ttf); 
        }
        .cubesgame {
            font-family: Minecraft-Title-Cyrillic;
        }
        </style>';

//----------------
while ( ($rowthreadimgnumber = mysqli_fetch_row($sqlthreadimgnumber)) && ($rowthreadtextnumber = mysqli_fetch_row($sqlthreadtextnumber)) && ($rowthreadimage = mysqli_fetch_row($sqlthreadimage)) && ($rowthreadtext = mysqli_fetch_row($sqlthreadthreadtext)) && ($rowthreadlink = mysqli_fetch_row($sqlthreadthreadlink)) && ($rowthreaddate = mysqli_fetch_row($sqlthreadthreaddate)) ) {


        for ($j = 0 ; $j < 1 ; ++$j){
            $localthreadthreadlink = $rowthreadlink[$j];
            if ($localthreadthreadlink == $threadlink){

            $localthreadtext = $rowthreadtext[$j];
            $localthreaddate = $rowthreaddate[$j];
            $localthreadimage = $rowthreadimage[$j];
            $localthreadtextnumber = $rowthreadtextnumber[$j];
            $localthreadimgnumber = $rowthreadimgnumber[$j];

            if ($localthreadtextnumber != $localthreadimgnumber){
                $mysqli = new mysqli ("localhost", "root", "", "threads");
                $mysqli->query("SET NAMES 'utf8'");
                
                $mysqli->query("INSERT INTO `threads`.`threadmessagesimages` (`ImgNumber`, `Src`) VALUES ('$localthreadtextnumber', '$file_name');");

                $mysqli->close();
            }






            $localthreadtext = str_replace('messageMOI5FO45lyhkgh?','jujuju',$localthreadtext);
            $localthreadtext = str_replace('threadOI5FO45lyhkghjn?','JUJUJU',$localthreadtext);  
            

            //minecraft text
            $anonminecraftstart = strpos($localthreadtext, "[mine]");
            $anonminecraftend = strpos($localthreadtext, "[/mine]");

            $localthreadtext = str_replace('[mine]','<p class="cubesgame">',$localthreadtext);
            $localthreadtext = str_replace('[/mine]','</p">',$localthreadtext);

            

            $anonpospng = strpos($localthreadimage, ".png");
            $anonposjpg = strpos($localthreadimage, ".jpg");
            $anonposgif = strpos($localthreadimage, ".gif");
            $anonposjpeg = strpos($localthreadimage, ".jpeg");

            if ($localthreadimage != "noimage.png"){
                echo '<div class="anonthreadmeswith">';
            }
            else {
                echo '<div class="anonthreadmeswithout">';
            }
            echo '<div class="anondate">';
            echo $localthreaddate;
            echo ' <a href="#">#',$localthreadtextnumber,'</a>';
            echo ' <a href="#">Answer</a>';
            echo '</div>';

            if ($localthreadimage != "noimage.png"){

            if($anonpospng or $anonposjpg or $anonposgif or $anonposjpeg) {
                
                    echo '<a class="anonimage"><img class="anonimg" src="ufiles/'.$localthreadimage.'"></a>';
                }
            else {
                    echo '<a download href="'.$localthreadimage.'">'.$localthreadimage.'</a>';
            }
            }

            echo '<div class="anonmes">';
            echo $localthreadtext;
            echo '</div>';

            echo '</div>';
            echo '<br>';

            }
        } 

}


$showsqlthreadtext->close();
$showsqlthreadlink->close();
$showsqlthreaddate->close();
$showsqlthreadimage->close();
$showsqlthreadtextnumber->close();
$showsqlthreadimgnumber->close();

}


else
{
    echo '<script type="text/javascript">';     
    echo 'document.location.href="' . $_SERVER['REQUEST_URI'] . '?u_name=" + localthreadlink';  
    echo '</script>';
    exit();   
}

?>