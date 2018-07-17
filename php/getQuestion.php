<?php
    include("config.php");
    
$sql = " SELECT * FROM QUES ORDER BY upvote ";


    if ($result=mysqli_query($db,$sql))
    {

        $rows = array();
        while ($row=mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
    
    

    }

?>