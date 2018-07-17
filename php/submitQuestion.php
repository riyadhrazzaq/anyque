<?php
    include("config.php");
    if( $_SERVER["REQUEST_METHOD"]=="POST" ){
        $title = $_POST["title"];
        $question = $_POST["question"];
        $tag = $_POST["tag"];
 
    }
    
/* sends data to DB */

$sql = " INSERT into ques (title,question,tag) values ( '$title', '$question','$tag') ";


    if (mysqli_query($db,$sql) === TRUE) {
        echo "Your question has been posted";
    } else {
        echo "Error: " . $sql;
    }



?>