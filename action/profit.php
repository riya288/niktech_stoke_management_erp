<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM profit";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM profit WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $product = $_POST['product'];
            $total = $_POST['total'];
            $sel_amt = $_POST['sel_amt'];
            $tax = $_POST['tax'];
            $cgst = $_POST['cgst'];
            $sgst = $_POST['sgst'];
            $total_gst = $_POST['total_gst'];
            $profit = $_POST['profit'];
            $loss = $_POST['loss'];

          $queryUpdate = mysqli_query($connect,"UPDATE profit SET product = '$product',total = '$total',sel_amt = '$sel_amt',tax = '$tax',cgst = '$cgst',sgst = '$sgst',total_gst = '$total_gst',profit = '$profit',loss = '$loss',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'profit.php'); 
        }else{
          $product = $_POST['product'];
          $total = $_POST['total'];
          $sel_amt = $_POST['sel_amt'];
          $tax = $_POST['tax'];
          $cgst = $_POST['cgst'];
          $sgst = $_POST['sgst'];
          $total_gst = $_POST['total_gst'];
          $profit = $_POST['profit'];
          $loss = $_POST['loss'];
          $query=mysqli_query($connect,"INSERT INTO profit (product,total,sel_amt,tax,cgst,sgst,total_gst,profit,loss,dt_created) VALUES('$product','$total','$sel_amt','$tax','$cgst','$sgst','$total_gst','$profit','$loss','$date')");
        }
    header('location: '.$location.'profit.php'); 
  } 
?>
