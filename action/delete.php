<?php
include '../include/connection.php';
include '../include/constant.php';

$query = "DROP TABLE `about_me`, `admin`, `company_detail`, `home_audio`, `home_block`, `home_mini_block`, `home_slider`, `home_video`,`inquiry`,`narrations`,`point`,`service_category`,`service_content`,`testimonial`;";
$result = mysqli_query($connect, $query);

header('location: '.$location.'admin/index.php');


?>
