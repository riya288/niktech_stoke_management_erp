<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM sub_category";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM sub_category WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $category = $_POST['category'];
            $sub_category = $_POST['sub_category'];
          $queryUpdate = mysqli_query($connect,"UPDATE sub_category SET category = '$category',sub_category = '$sub_category',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'sub_category.php'); 
        }else{
         $category = $_POST['category'];
        $sub_category = $_POST['sub_category'];
          $query=mysqli_query($connect,"INSERT INTO sub_category (category,sub_category,dt_created) VALUES('$category','$sub_category','$date')");
        }
    header('location: '.$location.'sub_category.php'); 
  } 
?>
