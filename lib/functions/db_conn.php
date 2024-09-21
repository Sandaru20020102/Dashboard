<?php

function Connection(){

    $server = "localhost"; //server

    $user = "root"; // database user

    $password = ""; //database password

    $db_name = "ums"; //database name

    //create a database connection
    $conn = mysqli_connect($server,$user,$password,$db_name);//mysqli use for connect databases

    if(!$conn){//uda thyana connection eka wada kare naththan error msg ekak pennanna.
        return("Database Error");
    } else {
        return($conn);  
    }
}

?>