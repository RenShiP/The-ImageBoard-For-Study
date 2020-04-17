<?php

                $file_name="noimage.png";

                $mysqli = new mysqli ("localhost", "root", "", "threads");
                $mysqli->query("SET NAMES 'utf8'");
                
                $mysqli->query("INSERT INTO `threads`.`threadimages` (`ImgNumber`, `Src`) VALUES (NULL, '$file_name');");

                $mysqli->close();

      

?>