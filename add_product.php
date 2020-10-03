<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');

$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
$datainsertsuccess =0;

$datainserterror =0;
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM add_product WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
    if($result){
        $queryDeleteSccess = 1;
    }
    else{
        $queryDeleteError = 1;
    }
}
?>
<?php
if (isset($_GET['hId']) && !empty($_GET['hId'])) {
    $id = input_validate($_GET['hId']);
    $query = "SELECT * FROM add_product WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $bill_to = $row['bill_to'];
        $name = $row['name'];
        $address = $row['address'];
        $invoice_no = $row['invoice_no'];
        $invoice_date = $row['invoice_date'];
        $po_no = $row['po_no'];
        $state_code = $row['state_code'];
        $category = $row['category'];
        $gst_no = $row['gst_no'];
        $stoke = $row['stoke'];
        $sub_category = $row['sub_category'];
        $product = $row['product'];
        $sub_sub_category = $row['sub_sub_category'];
        $qty = $row['qty'];
        $rate = $row['rate'];
        $total = $row['total'];
        $tax = $row['tax'];
        $cgst = $row['cgst'];
        $sgst = $row['sgst'];
        $total_gst = $row['total_gst'];
    }
}
?>
<!DOCTYPE html>
<html>
   <?php require_once('include/headerscript.php'); ?>
   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
         <!-- Top Bar Start -->
         <?php require_once('include/topbar.php'); ?>
         <!-- Top Bar End -->
         <!-- ========== Left Sidebar Start ========== -->
         <?php require_once('include/sidebar.php'); ?>
         <!-- Left Sidebar End -->
         <!-- ============================================================== -->
         <!-- Start Page Content here -->
         <!-- ============================================================== -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                   <div class="row" id="">
                     <div class="col-md-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add  Product</h4>
                           <div class="clearfix"></div>
                        </div>
                     </div>

                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                       <div class="row pull-right m-b-20" id="show">
                             <div class="col-md-2">
                               <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Product</div>
                             </div>
                           </div>
                        <div class="card-box" id="hide">
                           <div class="row">
                              <form class="form-horizontal" role="form" method="post" action="action/add_product.php">
                                 <div class="col-md-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userName">Billed to<span class="text-danger">*</span></label>
                                                <input type="text" name="bill_to" value="<?php if(isset($bill_to) && !empty($bill_to)) {echo $bill_to;} ?>" parsley-trigger="change"  placeholder="customer name" class="form-control new">
                                            </div>
                                        </div>
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userName">Company Name<span class="text-danger">*</span></label>
                                                <input type="text" name="name" value="<?php if(isset($name) && !empty($name)) {echo $name;} ?>" parsley-trigger="change"  placeholder="company name" class="form-control new">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Address<span class="text-danger">*</span></label>
                                               <textarea class="form-control" name="address" rows="5" value="<?php if(isset($address) && !empty($address)) {echo $address;} ?>"><?php if(isset($address) && !empty($address)) {echo $address;} ?></textarea>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">Invoice no<span class="text-danger">*</span></label>
                                                <input type="text" name="invoice_no" value="" parsley-trigger="change"  placeholder="0" class="form-control new" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label>Invoice Date</label>
                                                 <div class="input-group">
                                                     <input type="text" name="invoice_date" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" value="<?php if(isset($invoice_date) && !empty($invoice_date)) {echo $invoice_date;} ?>" id="datepicker">
                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                 </div>
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">P.O Number<span class="text-danger">*</span></label>
                                                <input type="text" name="po_no" value="<?php if(isset($po_no) && !empty($po_no)) {echo $po_no;} ?>" parsley-trigger="change"  placeholder="" class="form-control new">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">State code<span class="text-danger">*</span></label>
                                                <input type="text" name="state_code" value="<?php if(isset($state_code) && !empty($state_code)) {echo $state_code;} ?>" parsley-trigger="change"  placeholder="" class="form-control new">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="userName">Select Category<span class="text-danger">*</span></label>
                                                 <select class="form-control select2" name="category" id="category">
                                                     <option>Please choose</option>
                                                        <?php  $query = "SELECT * FROM category order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                  <label for="userName">GST Number<span class="text-danger">*</span></label>
                                                <input type="text" name="gst_no" value="<?php if(isset($gst_no) && !empty($gst_no)) {echo $gst_no;} ?>" parsley-trigger="change"  placeholder="" class="form-control new">
                                              </div>
                                        </div>
                                         <div class="col-md-3">
                                             <div class="form-group" id="stoke">
                                                
                                             </div>
                                         </div>
                                     </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Select Sub Category<span class="text-danger">*</span></label>
                                               <select class="form-control select2" name="sub_category" id="sub_category">
                                                  
                                               </select>
                                           </div>
                                       </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                 <label for="userName">Select Tax<span class="text-danger">*</span></label>
                                                 <select class="form-control select2 select" name="tax">
                                                     <option>Please choose</option>
                                                          <?php  $query = "SELECT * FROM tax order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['tax'];?>"><?php echo $row['tax'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                                 </select>
                                                  <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                             </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Select Sub Sub Category<span class="text-danger">*</span></label>
                                               <select class="form-control select2" name="sub_sub_category" id="sub_sub_category">
                                                  
                                               </select>
                                           </div>
                                       </div>
                                        
                                           <div id="gst">
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="userName">CGST<span class="text-danger">*</span></label>
                                                  <input type="text" name="cgst" id="cgst" value="0<?php if(isset($cgst) && !empty($cgst)) {echo $cgst;} ?>" class="form-control" onkeyup="myfunction()">
                                                </div>
                                            </div>
                                           <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="userName">SGST<span class="text-danger">*</span></label>
                                                  <input type="text" name="sgst" id="sgst" value="<?php if(isset($sgst) && !empty($sgst)) {echo $sgst;}else{ echo "0"; } ?>" class="form-control" onkeyup="myfunction()">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="userName">Total GST<span class="text-danger">*</span></label>
                                                  <input type="text" name="total_gst" id="total_gst" value="<?php if(isset($total_gst) && !empty($total_gst)) {echo $total_gst;}else{ echo "0"; } ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="product">Product Name<span class="text-danger">*</span></label>
                                              <select class="form-control select2" name="product" id="product">
                                                   
                                               </select>
                                          </div>  
                                         </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="qty">Qty<span class="text-danger">*</span></label>
                                                <input type="text" name="qty" value="<?php if(isset($qty) && !empty($qty)) {echo $qty;}else{ echo "0"; } ?>" parsley-trigger="change"  placeholder="Qty" class="form-control new" id="qty">
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="rate">Rate<span class="text-danger">*</span></label>
                                                <input type="text" name="rate" value="<?php if(isset($rate) && !empty($rate)) {echo $rate;}else{ echo "0"; } ?>" parsley-trigger="change"  placeholder="RS..." class="form-control new" id="rate">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="total">Total Amount<span class="text-danger">*</span></label>
                                                <input type="text" id="total" name="total" value="<?php if(isset($total) && !empty($total)) {echo $total;}else{ echo "0"; } ?>" parsley-trigger="change"  class="form-control" placeholder="RS...">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12" align="right">
                                            <button type="submit" name="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25" id="submit_completed">Submit</button>
                                        </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-box table-responsive">
                               <table id="datatable-buttons" class="table table-striped table-bordered">
                                   <thead>
                                   <tr>
                                       <th>Sr No</th>
                                       <th>bill_to</th>
                                       <th>name</th>
                                       <th>address</th>
                                       <th>invoice_no</th>
                                       <th>invoice_date</th>
                                       <th>po_no</th>
                                       <th>state_code</th>
                                       <th>gst_no</th>
                                       <th>stoke</th>
                                       <th>product</th>
                                       <th>qty</th>
                                       <th>rate</th>
                                       <th>total</th>
                                       <th>tax</th>
                                       <th>cgst</th>
                                       <th>sgst</th>
                                       <th>total_gst</th>
                                       <th>date</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                    <?php
                                      $query = "SELECT * FROM add_product order by id DESC";
                                      $result = mysqli_query($connect, $query);
                                      $i = 1;
                                      while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                   <tr>
                                       <td><?php echo $i ?></td>
                                       <td> 
                                        <?php
                                            if(isset($row['bill_to']) && !empty($row['bill_to']))
                                            {
                                                echo $row['bill_to']; 
                                            }
                                            ?>
                                        </td>
                                       <td> 
                                        <?php
                                            if(isset($row['name']) && !empty($row['name']))
                                            {
                                                echo $row['name']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['address']) && !empty($row['address']))
                                            {
                                                echo $row['address']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['invoice_no']) && !empty($row['invoice_no']))
                                            {
                                                echo $row['invoice_no']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['invoice_date']) && !empty($row['invoice_date']))
                                            {
                                                echo $row['invoice_date']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['po_no']) && !empty($row['po_no']))
                                            {
                                                echo $row['po_no']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['state_code']) && !empty($row['state_code']))
                                            {
                                                echo $row['state_code']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['gst_no']) && !empty($row['gst_no']))
                                            {
                                                echo $row['gst_no']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['stoke']) && !empty($row['stoke']))
                                            {
                                                echo $row['stoke']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['product']) && !empty($row['product']))
                                            {
                                                echo $row['product']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['qty']) && !empty($row['qty']))
                                            {
                                                echo $row['qty']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['rate']) && !empty($row['rate']))
                                            {
                                                echo $row['rate']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['total']) && !empty($row['total']))
                                            {
                                                echo $row['total']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['tax']) && !empty($row['tax']))
                                            {
                                                echo $row['tax']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['cgst']) && !empty($row['cgst']))
                                            {
                                                echo $row['cgst']; 
                                            }
                                            ?>
                                        </td>
                                         <td> 
                                        <?php
                                            if(isset($row['sgst']) && !empty($row['sgst']))
                                            {
                                                echo $row['sgst']; 
                                            }
                                            ?>
                                        </td>
                                         <td> 
                                        <?php
                                            if(isset($row['total_gst']) && !empty($row['total_gst']))
                                            {
                                                echo $row['total_gst']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['dt_updated']) && !empty($row['dt_updated']))
                                            {
                                                echo $row['dt_updated']; 
                                            }
                                            ?>
                                        </td>
                                       <td>
                                        <a href="get_pdf.php" title="pdf">
                                                        <i class="fa fa-print" style="font-size: 20px;"></i>
                                                        </a>
                                          <a href="add_product.php?hId=<?php if (isset($row['id']) &&
                                                        !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                        </a>
                                                 <a href="add_product.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                                                        </a>

                                       </td>
                                   </tr>
                                   <?php
                                        $i++;
                                    }
                                    ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                 
               </div>
               <!-- container -->
            </div>
            <!-- content -->
         </div>
         <!-- ============================================================== -->
         <!-- End of the page -->
         <!-- ============================================================== -->
      </div>
      <!-- END wrapper -->
      <!-- START Footerscript -->
      <?php require_once('include/footerscript.php'); ?>
<script>
   $('.new').keyup(function(){
       var qty = $('#qty').val();
       var rate = $('#rate').val();
       var total = parseInt(qty)*parseInt(rate);
       $('#total').val(total);
        });
</script>
<script>
  $("#hide").hide();
  jQuery('.add').click(function(event) {
                   $("#hide").slideToggle();
                   $("#show").slideToggle();   

                }); 
  
</script>
<script>
  $('#gst').hide();
   jQuery('.select').on("change",function(event) {
                  var select = $('.select').val();
                  if (select == 1) {
                    $('#gst').hide();
                  }else{
                    $('#gst').show();
                  }

                }); 
</script>
<script>
  function myfunction(){
    var cgst=$("#cgst").val();
    var sgst=$("#sgst").val();
    var total_gst = parseFloat(cgst)+parseFloat(sgst);
    $("#total_gst").val(total_gst);
  }
</script>
<script>
   $('#product').on("change",function() {
      var category_id = this.value;
      $.ajax({
        url: "get_stoke.php",
        type: "POST",
        data: {
          category_id: category_id
        },
        cache: false,
        success: function(dataResult){
          $("#stoke").html(dataResult);
        }
      });
  });
</script>
   </body>
</html>