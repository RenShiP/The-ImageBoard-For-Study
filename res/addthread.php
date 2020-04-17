<?php



    

    //upload file in directory

    $imgsource = "src...";

    if( isset( $_POST['my_file_upload'] ) ){  
        
        $uploaddir = './ufiles';

        //create file
        if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
    
        $files      = $_FILES;
        $done_files = array();

    
        //uloading file in directory
        foreach( $files as $file ){
            $file_name = $file['name'];

            $GLOBALS['ufilename'] = $file_name;
            
            if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
                $done_files[] = realpath( "$uploaddir/$file_name" );

                //uload thread in DB

                $mysqli = new mysqli ("localhost", "root", "", "threads");
                $mysqli->query("SET NAMES 'utf8'");
                
                $mysqli->query("INSERT INTO `threads`.`threadmessagesimages` (`ImgNumber`, `Src`) VALUES (NULL, '$file_name');");

                $mysqli->close();
            }
        }
    
        $data = $done_files ? array('files' => $done_files ) : array('error' => 'Error.');
    
        die( json_encode( $data ) );
        
    }




      

?>