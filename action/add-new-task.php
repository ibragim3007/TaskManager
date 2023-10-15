<?php
require "../include/database.php";
require "../classes/page.php";
session_start();

$login = $_SESSION['user']['login'];
$nameTask = $_POST['nameTask'];
$desTask = $_POST['desTask'];
$colorTakes = $_POST['colorTakes'];

if(trim($nameTask) == ''){

    echo json_encode($res = [

        'status' => false,
        'answer' => 'empty-name'

    ]);

    die();

}

if(trim($desTask) == ''){

    echo json_encode($res = [

        'status' => false,
        'answer' => 'empty-des'

    ]);

    die();

}
$timeAdd = date('U');
if(mysqli_query($connect, "INSERT INTO `task` 
(`name`, `discription`, `time add`, `color`, `user login`) 
VALUES ('$nameTask', '$desTask', '$timeAdd', '$colorTakes', '$login')")){

    echo json_encode($res = [
        
        'status' => true,
        'color' => $colorTakes,
        'nameTask' => $nameTask,
        'desTask' => $desTask,
        'time' => $timeAdd

    ]);

}



