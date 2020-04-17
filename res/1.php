
<head>
<title>ThisIsShouldBeName</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="youstyles.css">
<link rel="shortcut icon" href="logo.png" type="image/png">
</head>
<body><script>
localthreadlink = "1"
</script>
<script type="text/javascript" src="sendmessage.js"></script><div class="anonthread"><div class="anondate">2020/04/17 20:23:10 anonimus <a href="#">#1</a> <a href="#">Answer</a> <a href="#">Back</a></div><div class="anonmessage"> test thread</div></div><br><br><div class="content">

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



</body>