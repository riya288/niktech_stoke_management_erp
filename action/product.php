<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM product";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM product WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $category = $_POST['category'];
            $sub_category = $_POST['sub_category'];
            $sub_sub_category = $_POST['sub_sub_category'];
            $product = $_POST['product'];

          $queryUpdate = mysqli_query($connect,"UPDATE product SET category = '$category',sub_category = '$sub_category',sub_sub_category = '$sub_sub_category',product = '$product',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'product.php'); 
        }else{
          $category = $_POST['category'];
          $sub_category = $_POST['sub_category'];
          $sub_sub_category = $_POST['sub_sub_category'];
          $product = $_POST['product'];
// print_r($_POST);
          $query=mysqli_query($connect,"INSERT INTO product (category,sub_category,sub_sub_category,product,dt_created) VALUES('$category','$sub_category','$sub_sub_category','$product','$date')");
        }

    header('location: '.$location.'product.php'); 
  } 
?>
