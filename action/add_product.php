<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM add_product";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
            $id = $_POST['check'];
          $query = "SELECT * FROM add_product WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $bill_to = $_POST['bill_to'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $invoice_no = $_POST['invoice_no'];
            $invoice_date = $_POST['invoice_date'];
            $po_no = $_POST['po_no'];
            $state_code = $_POST['state_code'];
            $category = $_POST['category'];
            $gst_no = $_POST['gst_no'];
            $stoke = $_POST['stoke'];
            $sub_category = $_POST['sub_category'];
            $product = $_POST['product'];
            $sub_sub_category = $_POST['sub_sub_category'];
            $qty = $_POST['qty'];
            $rate = $_POST['rate'];
            $total = $_POST['total'];
            $tax = $_POST['tax'];
            $cgst = $_POST['cgst'];
            $sgst = $_POST['sgst'];
            $total_gst = $_POST['total_gst'];
            
          $queryUpdate = mysqli_query($connect,"UPDATE add_product SET bill_to = '$bill_to',name = '$name',address = '$address',invoice_no = '$invoice_no',invoice_date = '$invoice_date',po_no = '$po_no',state_code = '$state_code',category = '$category',gst_no = '$gst_no',stoke = '$stoke',sub_category = '$sub_category',product = '$product',sub_sub_category = '$sub_sub_category',qty = '$qty',rate = '$rate',total = '$total',tax = '$tax',cgst = '$cgst',sgst = '$sgst',total_gst = '$total_gst',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'add_product.php'); 
        }else{
          $bill_to = $_POST['bill_to'];
          $name = $_POST['name'];
          $address = $_POST['address'];
          $invoice_no = $_POST['invoice_no'];
          $invoice_date = $_POST['invoice_date'];
          $po_no = $_POST['po_no'];
          $state_code = $_POST['state_code'];
          $category = $_POST['category'];
          $gst_no = $_POST['gst_no'];
          $stoke = $_POST['stoke'];
          $sub_category = $_POST['sub_category'];
          $product = $_POST['product'];
          $sub_sub_category = $_POST['sub_sub_category'];
          $qty = $_POST['qty'];
          $rate = $_POST['rate'];
          $total = $_POST['total'];
          $tax = $_POST['tax'];
          $cgst = $_POST['cgst'];
          $sgst = $_POST['sgst'];
          $total_gst = $_POST['total_gst'];
         
          $query=mysqli_query($connect,"INSERT INTO add_product (bill_to,name,address,invoice_no,invoice_date,po_no,state_code,category,gst_no,stoke,sub_category,product,sub_sub_category,qty,rate,total,tax,cgst,sgst,total_gst,dt_created) VALUES('$bill_to','$name','$address','$invoice_no','$invoice_date','$po_no','$state_code','$category','$gst_no','$stoke','$sub_category','$product','$sub_sub_category','$qty','$rate','$total','$tax','$cgst','$sgst','$total_gst','$date')");

          $query1 = "SELECT * FROM add_stoke WHERE product = '$product'";
          $result1 = mysqli_query($connect, $query1);
          $row = mysqli_fetch_assoc($result1);
          $stoke = $row['stoke'];
          $available = $stoke - $qty;
          $queryUpdate = mysqli_query($connect,"UPDATE add_stoke SET available = '$available',dt_updated = '$date' WHERE product = '$product'");

        }
    header('location: '.$location.'add_product.php'); 
  } 
?>
