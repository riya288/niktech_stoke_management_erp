<?php
/**
 * Created by PhpStorm.
 * User: HD
 * Date: 27-04-2019
 * Time: 11:22
 */
include '../include/constant.php';

include '../include/connection.php';
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d h:i:s");

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password = '$pass'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $user_id = $row['id'];
        $user_name = $row['first_name'];
        $queryInsert = "INSERT INTO user_log(user_id) VALUES('$user_id')";
        $result2 = mysqli_query($connect, $queryInsert);


        header('location: '.$location.'index.php');

        session_start();
        $_SESSION["user_id"] = $user_id;
        $_SESSION["name"] = $user_name;


    }
    else{

        header('location: '.$location.'login.php?error=1');

    }





}

?>