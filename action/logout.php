<?php
/**
 * Created by PhpStorm.
 * User: HD
 * Date: 27-04-2019
 * Time: 14:14
 */
include '../include/constant.php';

session_start();
session_destroy();
header('location: '.$location.'login.php');

?>