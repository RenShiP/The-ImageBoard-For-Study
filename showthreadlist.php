<?php


//text
$showsqltext = new mysqli ("localhost", "root", "", "threads");
$showsqltext->query("SET NAMES 'utf8'");

$sqlthreadtext = $showsqltext->query("SELECT `Text` FROM `thread`");

//image
$showsqlimage = new mysqli ("localhost", "root", "", "threads");
$showsqlimage->query("SET NAMES 'utf8'");

$sqlthreadimage = $showsqlimage->query("SELECT `Src` FROM `threadimages`");

//thread data
$showsqldate = new mysqli ("localhost", "root", "", "threads");
$showsqldate->query("SET NAMES 'utf8'");

$sqlthreaddate = $showsqldate->query("SELECT `Name` FROM `thread`");

//thread number
$showsqlnumber = new mysqli ("localhost", "root", "", "threads");
$showsqlnumber->query("SET NAMES 'utf8'");

$sqlthreadtextnumber = $showsqlnumber->query("SELECT `Number` FROM `thread`");

//image number
$showsqlimgnumber = new mysqli ("localhost", "root", "", "threads");
$showsqlimgnumber->query("SET NAMES 'utf8'");

$sqlthreadimgnumber = $showsqlimgnumber->query("SELECT `ImgNumber` FROM `threadimages`");

//-------------------
while (($rowimgnumber = mysqli_fetch_row($sqlthreadimgnumber)) && ($rowtextnumber = mysqli_fetch_row($sqlthreadtextnumber)) && ($rowtext = mysqli_fetch_row($sqlthreadtext)) && ($rowimage = mysqli_fetch_row($sqlthreadimage)) && ($rowdate = mysqli_fetch_row($sqlthreaddate))) {


        for ($j = 0 ; $j < 1 ; ++$j){

            $localthreaddate = $rowdate[$j];
            $localthreadtext = $rowtext[$j];
            $localthreadimage = $rowimage[$j];
            $localthreadtextnumber = $rowtextnumber[$j];
            $localthreadimgnumber = $rowimgnumber[$j];


            $localthreadtext = str_replace("<","≤",$localthreadtext);
            $localthreadtext = str_replace(">","≥",$localthreadtext);

            // messageMOI5FO45lyhkgh? threadOI5FO45lyhkghjn?
            $localthreadtext = str_replace('messageMOI5FO45lyhkgh?','jujuju',$localthreadtext);
            $localthreadtext = str_replace('threadOI5FO45lyhkghjn?','JUJUJU',$localthreadtext);            



            $localthreadtext = str_replace('ihufrrh72bi43f9ubla','<h2>',$localthreadtext);
            $localthreadtext = str_replace('niuf2982kjfn2f232f3','</h2>',$localthreadtext);


            //creating thread file
            $threadfile = "res/";
            $threadfile .= $localthreadtextnumber;
            $threadfile .= ".php";
            

                if (file_exists($threadfile)) {
                    
                }
                else {
                                        
                    $newthreadfile = fopen($threadfile, 'wt');

                    $localbidlovar = '
<head>
<title>ThisIsShouldBeName</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="youstyles.css">
<link rel="shortcut icon" href="logo.png" type="image/png">
</head>
<body>';

                $localbidlovar .= '<script>
localthreadlink = "';
                $localbidlovar .= $localthreadtextnumber;
                $localbidlovar .= '"
</script>
<script type="text/javascript" src="sendmessage.js"></script>';

                    $localbidlovar .= '<div class="anonthread">';

                    $localbidlovar .= '<div class="anondate">';
                    $localbidlovar .= $localthreaddate;
                    $localbidlovar .= ' <a href="#">#';
                    $localbidlovar .= $localthreadtextnumber;
                    $localbidlovar .= '</a>';
                    $localbidlovar .= ' <a href="#">Answer</a>';
                    $localbidlovar .= ' <a href="#">Back</a>';
                    $localbidlovar .= '</div>';

                    $anonpospng = strpos($localthreadimage, ".png");
                    $anonposjpg = strpos($localthreadimage, ".jpg");
                    $anonposgif = strpos($localthreadimage, ".gif");
                    $anonposjpeg = strpos($localthreadimage, ".jpeg");
            
            if ($localthreadimage != "noimage.png"){

            if($anonpospng or $anonposjpg or $anonposgif or $anonposjpeg) {

                    $localimage = '<a class="anonimage"><img class="anonimg" src="ufiles/'.$localthreadimage.'"></a>';
                    echo $localimage;
                }
            else {
                    $localimage = '<a download href="ufiles/'.$localthreadimage.'">'.$localthreadimage.'</a>';
                    
                    echo $localimage;
            }
            }
            
                    $localbidlovar .= '<div class="anonmessage"> ';
                    $localbidlovar .= $localthreadtext;
                    $localbidlovar .= '</div>';
        
                    $localbidlovar .= '</div><br><br>';

                    fwrite($newthreadfile, $localbidlovar);

$localbidlovar = '<div class="content">

<hr class="threadline">

<script>
function wait() {
    var submitbutton = document.querySelector(".notdone");
    submitbutton.style.display = "none";

    submitbutton = document.querySelector(".donedone");
    submitbutton.style.display = "inline";

setTimeout(() => {  document.querySelector(".donedone").value = "15";
    setTimeout(() => {  document.querySelector(".donedone").value = "14";
        setTimeout(() => {document.querySelector(".donedone").value = "13";
            setTimeout(() => {document.querySelector(".donedone").value = "12";
                setTimeout(() => {document.querySelector(".donedone").value = "11";
                    setTimeout(() => {document.querySelector(".donedone").value = "10";
                        setTimeout(() => {document.querySelector(".donedone").value = "9";
                            setTimeout(() => {document.querySelector(".donedone").value = "8";
                                setTimeout(() => {document.querySelector(".donedone").value = "7";
                                    setTimeout(() => {document.querySelector(".donedone").value = "6";
                                        setTimeout(() => {document.querySelector(".donedone").value = "5";
                                            setTimeout(() => {document.querySelector(".donedone").value = "4";
                                                setTimeout(() => {document.querySelector(".donedone").value = "3";
                                                    setTimeout(() => {document.querySelector(".donedone").value = "2";
                                                        setTimeout(() => {document.querySelector(".donedone").value = "wait...";
                                                            location.reload();
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}, 1000);
}
</script>

<?php
include "showthread.php";
?>

</div>

<a href="#" class="createthreadanswer" id="createanswer" onclick="ChangeText();">Answer in thread</a>
<a href="#" class="refresh" onclick="location.reload();">Refresh</a>


<script>
    

    function ChangeText(){

        if (document.getElementById("createanswer").innerHTML == "Answer in thread"){
            
            document.getElementById("createanswer").innerHTML="Close form";

            var threadformstyle = document.querySelector(".answerform");
            threadformstyle.style.display = "inline";
            document.documentElement.scrollTop = document.documentElement.scrollHeight;
        }
        else {
            document.getElementById("createanswer").innerHTML="Answer in thread";

            var threadformstyle = document.querySelector(".answerform");
            threadformstyle.style.display = "none";
        }

    }

</script>

<div class="answerform">
    <form name="message" action="" method="post"> 

    <p>
    <textarea class="threadmessage" type="text" id="utext" autocomplete="off" placeholder="Text"></textarea>
    </p>

    <p>

    <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
    <input type="file" name="yourfile" id="thisisfile" multiple>

    </p>

        <input type="button" id="done" class="notdone" value="Done" onclick="wait()"/>
        <input type="button" class="donedone" value="wait"/>

    </form>
</div>



</body>';

                    fwrite($newthreadfile, $localbidlovar);
                    fclose($newthreadfile);
                }
                //end of thread file creation
            


            echo '<div class="anonthread">';

            echo '<div class="anondate">';
            echo $localthreaddate;
            echo ' <a href="res/',$localthreadtextnumber,'.php">#',$localthreadtextnumber,'</a>';
            echo ' <a href="res/',$localthreadtextnumber,'.php">Answer</a>';
            echo '</div>';

            $anonpospng = strpos($localthreadimage, ".png");
            $anonposjpg = strpos($localthreadimage, ".jpg");
            $anonposgif = strpos($localthreadimage, ".gif");
            $anonposjpeg = strpos($localthreadimage, ".jpeg");
            

            if ($localthreadimage != "noimage.png"){

            if($anonpospng or $anonposjpg or $anonposgif or $anonposjpeg) {
                
                    echo '<a class="anonimage"><img class="anonimg" src="res/ufiles/'.$localthreadimage.'"></a>';
                }
            else {
                    echo '<a download href="'.$localthreadimage.'">'.$localthreadimage.'</a>';
            }
            }
            echo '<div class="anonmessage"> ';
            echo $localthreadtext;
            echo '</div>';

            echo '</div><br><br>';

        } 

}

$showsqltext->close();
$showsqlimage->close();
$showsqldate->close();
$showsqlnumber->close();
$showsqlimgnumber->close();

?>