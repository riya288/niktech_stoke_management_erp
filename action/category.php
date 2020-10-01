<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM category";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM category WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
          $category = $_POST['category'];
          $queryUpdate = mysqli_query($connect,"UPDATE category SET category = '$category',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'category.php'); 
        }else{
         $category = $_POST['category'];
          $query=mysqli_query($connect,"INSERT INTO category (category,dt_created) VALUES('$category','$date')");
        }
    header('location: '.$location.'category.php'); 
  } 
?>
