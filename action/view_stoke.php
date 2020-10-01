<?php
    include 'include/constant.php';
    include 'include/connection.php';
    include 'include/function.php';
    include 'include/config.php';
    include 'include/input_validation.php';
    $query = "SELECT * FROM view_stoke";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM view_stoke WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            
          $queryUpdate = mysqli_query($connect,"UPDATE view_stoke SET cat_name = '$cat_name',image = '$image',name = '$name',title = '$title',price = '$price',dt_updated = '$date' WHERE id = '$id'");
          }
          //header('location: '.$location.'admin/view_stoke.php'); 
        }else{
         
          $query=mysqli_query($connect,"INSERT INTO view_stoke (cat_name,image,name,title,price,dt_created) VALUES('$cat_name','$image','$name','$title','$price','$date')");
        }
    header('location: '.$location.'admin/view_stoke.php'); 
  } 
?>
