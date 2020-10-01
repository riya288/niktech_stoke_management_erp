<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM add_stoke";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM add_stoke WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $category = $_POST['category'];
            $sub_category = $_POST['sub_category'];
            $product = $_POST['product'];
            $sub_sub_category = $_POST['sub_sub_category'];
            $stoke = $_POST['stoke'];
            $rate = $_POST['rate'];
            $total = $_POST['total'];
            $today_dt = $_POST['today_dt'];

          $queryUpdate = mysqli_query($connect,"UPDATE add_stoke SET category = '$category',sub_category = '$sub_category',product = '$product',sub_sub_category = '$sub_sub_category',stoke = '$stoke',available = '$stoke',rate = '$rate',total = '$total',today_dt = '$today_dt',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'add_stoke.php'); 
        }else{
            $category = $_POST['category'];
            $sub_category = $_POST['sub_category'];
            $product = $_POST['product'];
            $sub_sub_category = $_POST['sub_sub_category'];
            $stoke = $_POST['stoke'];
            $rate = $_POST['rate'];
            $total = $_POST['total'];
            $today_dt = $_POST['today_dt'];

          $query=mysqli_query($connect,"INSERT INTO add_stoke (category,sub_category,product,sub_sub_category,stoke,available,rate,total,today_dt,dt_created) VALUES('$category','$sub_category','$product','$sub_sub_category','$stoke','$stoke','$rate','$total','$today_dt','$date')");
        }
    header('location: '.$location.'add_stoke.php'); 
  } 
?>
