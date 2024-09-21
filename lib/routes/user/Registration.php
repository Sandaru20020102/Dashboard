<?php

include_once('../../functions/userFunction.php');//this is for connect with userFunction.php file.

$result = userRegistration($_POST['userName'],$_POST['userEmail'],$_POST['userPass'],$_POST['userPhone'],$_POST['userNic']);
//Methanata dana userEmail wage ewa index eke forms wala name walata dana nama danna ona.

echo($result);

?>