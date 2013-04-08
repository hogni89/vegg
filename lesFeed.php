<?php
    require("samband.php");
    
    if($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }
    else {
        //Eg skal nokk ikki brúka hetta her, men eg behaldi tað fyri sikkurheits skyld
        /*if(!$mysqli->set_charset("utf8")) {
            echo "Failed to set charset" . $mysqli->error;
        }
        else {
            
        }*/
        
        $urslit = $mysqli->query("SELECT feed_innihald FROM feed WHERE feed_id = 1");
        
        $row = $urslit->fetch_array(MYSQLI_ASSOC);
        
        $json = '{"ting" : "'.$row['feed_innihald'].'"}';
        
        $json = htmlentities($json, ENT_NOQUOTES);
        
        //grundin fyri hesum er at htmlentities konverterar < og >
        $json = str_replace('&lt;br&gt;', '<br>', $json);

        echo $json;
    }
?>