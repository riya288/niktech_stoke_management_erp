<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM tax";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM tax WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $tax = $_POST['tax'];
            $cgst = $_POST['cgst'];
            $sgst = $_POST['sgst'];
            $total_gst = $_POST['total_gst'];
          $queryUpdate = mysqli_query($connect,"UPDATE tax SET tax = '$tax',cgst = '$cgst',sgst = '$sgst',total_gst = '$total_gst',dt_updated = '$date' WHERE id = '$id'");
          }
        header('location: '.$location.'tax.php'); 
        }else{
          $tax = $_POST['tax'];
          $cgst = $_POST['cgst'];
          $sgst = $_POST['sgst'];
          $total_gst = $_POST['total_gst'];
          print_r($_POST);
          $query=mysqli_query($connect,"INSERT INTO tax (tax,cgst,sgst,total_gst,dt_created) VALUES('$tax','$cgst','$sgst','$total_gst','$date')");
        }
    header('location: '.$location.'tax.php'); 
  } 
?>
