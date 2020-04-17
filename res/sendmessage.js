//localthreadlink = "0";
String.prototype.replaceAt = function(index, replacement) {
    //replaceing thread number
  return this.substr(0, index) + replacement + this.substr(index + replacement.length);
}

let newthreadlink ="00000000000";
let threadlink = "00000000000";
locallocalthreadlink = localthreadlink;

let index = threadlink.length - 1;
locallocallocalthreadlink = localthreadlink.length;

while ((index != 1) & (locallocallocalthreadlink != 0)){
locallocalthreadlink * 10;
i = 0;
while (i <index) {
    locallocalthreadlink / 10;
    i = i + 1;
}
localcharlink = 'x';
localcharlink = locallocalthreadlink;

newthreadlink = threadlink.replaceAt(index, localcharlink); 

index = index - 1;
locallocallocalthreadlink = locallocallocalthreadlink - 1;
}
//upload thread


$(document).ready (function () {
       


       
    var files;

    $('input[type=file]').on('change', function(){

        files = this.files;

    });

    

    
    $("#done").bind("click", function(){



            thetext = newthreadlink + '!' + $( "#utext" ).val();

            //text..................
            $.ajax ({

                
                url: "uploadtext.php",
                type: "POST",
                data: ({ utext: thetext }),
                dataType: "html"
                
            });

            //file...................
            
        var thefileisupload= $("#thisisfile").val();

        if(thefileisupload != ""){

            var data = new FormData();

            $.each( files, function( key, value ){
                data.append( key, value );
            });

            data.append( 'my_file_upload', 1 );

            $.ajax({
                url         : 'addthread.php',
                type        : 'POST',
                data        : data,
                cache       : false,
                dataType    : 'json',

                
                processData : false,
                contentType : false, 
                
                success     : function( respond, status, jqXHR ){
        
                    
                    if( typeof respond.error === 'undefined' ){
                        //all Ok
                        console.log('File has been upload');
                    }
                    
                    else {
                        //Error
                        console.log('ERROR: ' + respond.error );
                    }
                },

                
                error: function( jqXHR, status, errorThrown ){
                    console.log( 'ERROR OF AJAX: ' + status, jqXHR );
                }
        
            });
        }
        else {
            // error

            $.ajax ({
                url         : 'noimage.php'
            });
        }

 
    });
});
