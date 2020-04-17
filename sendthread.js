    
//upload thread


    $(document).ready (function () {
       
        var files;

        $('input[type=file]').on('change', function(){

            files = this.files;

        });

        

        
        $("#done").bind("click", function(){
             
                //text..................
                $.ajax ({

                    
                    url: "uploadtext.php",
                    type: "POST",
                    data: ({ utext: $( "#utext" ).val() }),
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
                            //all OK
                            console.log('File has been upload');
                        }
                        
                        else {
                            //error
                            console.log('ERROR: ' + respond.error );
                        }
                    },
                    
                    error: function( jqXHR, status, errorThrown ){
                        console.log( 'ERROR of AJAX: ' + status, jqXHR );
                    }
            
                });
            }
            else {
                //error

                $.ajax ({
                    url         : 'noimage.php'
                });
            }

        });




    });
    

