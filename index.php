<head>
    <title>Imageboard</title>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="youstyles.css">
    <link rel="shortcut icon" href="logo.png" type="image/png">
</head>

<body>

<h1 class="welcomemessage">Wellcome</h1>

<div class="upborder">

<script>

function wait(){

    var submitbutton = document.querySelector('.notdone');
    submitbutton.style.display = 'none';

    submitbutton = document.querySelector('.donedone');
    submitbutton.style.display = 'inline';

setTimeout(() => {  document.querySelector('.donedone').value = "15";
    setTimeout(() => {  document.querySelector('.donedone').value = "14";
        setTimeout(() => {document.querySelector('.donedone').value = "13";
            setTimeout(() => {document.querySelector('.donedone').value = "12";
                setTimeout(() => {document.querySelector('.donedone').value = "11";
                    setTimeout(() => {document.querySelector('.donedone').value = "10";
                        setTimeout(() => {document.querySelector('.donedone').value = "9";
                            setTimeout(() => {document.querySelector('.donedone').value = "8";
                                setTimeout(() => {document.querySelector('.donedone').value = "7";
                                    setTimeout(() => {document.querySelector('.donedone').value = "6";
                                        setTimeout(() => {document.querySelector('.donedone').value = "5";
                                            setTimeout(() => {document.querySelector('.donedone').value = "4";
                                                setTimeout(() => {document.querySelector('.donedone').value = "3";
                                                    setTimeout(() => {document.querySelector('.donedone').value = "2";
                                                        setTimeout(() => {document.querySelector('.donedone').value = "wait...";
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

<script>
//show form
    

    function ChangeText(){

        if (document.getElementById("createthread").innerHTML == "Create thread"){
            document.getElementById("createthread").innerHTML="Close form";

            var threadformstyle = document.querySelector('.newtheadform');
            threadformstyle.style.display = 'inline';

        }
        else {
            document.getElementById("createthread").innerHTML="Create thread";

            var threadformstyle = document.querySelector('.newtheadform');
            threadformstyle.style.display = 'none';
        }

    }

</script>


<script type="text/javascript" src="sendthread.js"></script>

<a href="#" id="createthread" onclick="ChangeText();">Create thread</a>
<a href="#" class="refresh" onclick="location.reload();">Refresh</a>


<div class="newtheadform">

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

    <script>
$("#done").submit(function(e){
    e.preventDefault();
    return false;

    setTimeout(function() {window.location.reload();}, 20000);
});
</script>


</div>

</div>

<br>

<div class="content">

<?php

include 'showthreadlist.php';

?>

</div>

</body>