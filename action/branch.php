<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM branch";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM branch WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $address = $_POST['address'];
            $remark = $_POST['remark'];

          $queryUpdate = mysqli_query($connect,"UPDATE branch SET name = '$name',code = '$code',address = '$address',remark = '$remark',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'branch.php'); 
        }else{
            $name = $_POST['name'];
            $code = $_POST['code'];
            $address = $_POST['address'];
            $remark = $_POST['remark'];

          $query=mysqli_query($connect,"INSERT INTO branch (name,code,address,remark,dt_created) VALUES('$name','$code','$address','$remark','$date')");
        }
    header('location: '.$location.'branch.php'); 
  } 
?>
