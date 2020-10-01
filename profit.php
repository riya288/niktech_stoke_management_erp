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
    $query = "DELETE FROM profit WHERE id = '$id'";
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
    $query = "SELECT * FROM profit WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $product = $row['product'];
        $total = $row['total'];
        $sel_amt = $row['sel_amt'];
        $tax = $row['tax'];
        $cgst = $row['cgst'];
        $sgst = $row['sgst'];
        $total_gst = $row['total_gst'];
        $profit = $row['profit'];
        $loss = $row['loss'];
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
                   <div class="row">
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
                              <form class="form-horizontal" role="form" action="action/profit.php" method="post">
                                 <div class="col-md-12">
                                     <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="product">Product Name<span class="text-danger">*</span></label>
                                              <select class="form-control select2" name="product" id="product">
                                                   <option>Select</option>
                                                    <?php  $query = "SELECT * FROM product order by id DESC";
                                                  $result = mysqli_query($connect, $query);
                                                  $i = 1;
                                                  while ($row = mysqli_fetch_assoc($result)) {?>
                                                  <option value="<?php echo $row['product'];?>"><?php echo $row['product'];?></option>
                                                  <?php
                                                    $i++;
                                                }
                                                ?>
                                               </select>
                                          </div>
                                       </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="total">Purchase Amount<span class="text-danger">*</span></label>
                                                <input type="text" id="total" name="total" parsley-trigger="change"  class="form-control" placeholder="RS...">
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sel_amt">Shelling Amount<span class="text-danger">*</span></label>
                                                <input type="text" id="sel_amt" name="sel_amt" parsley-trigger="change"  class="form-control" placeholder="RS...">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="tax">Select Tax<span class="text-danger">*</span></label>
                                                 <select class="form-control select2 select" name="tax">
                                                     <option>Select</option>
                                                         <option value="AK">GST</option>
                                                         <option value="1">Non GST</option>
                                                         <option value="AK">Other</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div id="gst">
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="cgst">CGST<span class="text-danger">*</span></label>
                                                  <input type="text" name="cgst" id="cgst" class="form-control" onkeyup="myfunction()">
                                                </div>
                                            </div>
                                           <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="sgst">SGST<span class="text-danger">*</span></label>
                                                  <input type="text" name="sgst" id="sgst" class="form-control" onkeyup="myfunction()">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="total_gst">Total GST<span class="text-danger">*</span></label>
                                                  <input type="text" name="total_gst" id="total_gst" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="profit">Profit<span class="text-danger">*</span></label>
                                                <input type="text" id="profit" name="profit" parsley-trigger="change"  class="form-control" placeholder="RS..." readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="loss">Loss<span class="text-danger">*</span></label>
                                                <input type="text" id="loss" name="loss" parsley-trigger="change"  class="form-control" placeholder="RS..." readonly>
                                                 <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
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
                                       <th>product name</th>
                                       <th>Profit</th>
                                       <th>Loss</th>
                                       <th>Amount</th>
                                       <th>date</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                    <?php
                                      $query = "SELECT * FROM profit order by id DESC";
                                      $result = mysqli_query($connect, $query);
                                      $i = 1;
                                      while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                   <tr>
                                       <td><?php echo $i ?></td>
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
                                            if(isset($row['profit']) && !empty($row['profit']))
                                            {
                                                echo $row['profit']; 
                                            }
                                            ?>
                                        </td>
                                        <td> 
                                        <?php
                                            if(isset($row['loss']) && !empty($row['loss']))
                                            {
                                                echo $row['loss']; 
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
                                            if(isset($row['dt_updated']) && !empty($row['dt_updated']))
                                            {
                                                echo $row['dt_updated']; 
                                            }
                                            ?>
                                        </td>
                                       <td>
                                          <a href="report_site.php?hId=<?php if (isset($row['id']) &&
                                         !empty($row['id'])) {echo $row['id'];} ?>" title="pdf"><i class="fa fa-print" style="font-size: 20px;"></i></a>
                                          <a href="profit.php?hId=<?php if (isset($row['id']) &&
                                         !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                          <i class="fa fa-edit" style="font-size: 20px;"></i></a>
                                          <a href="profit.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                          <i class="fa fa-trash" style="font-size: 20px;"></i></a>
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
<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-full">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="full-width-modalLabel">Agency Report</h4>
                  </div>

                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">

                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="clearfix">
                                          <div class="pull-left">
                                              <h4 >Site Name: <span>Saa Real estate</span></h4>
                                              <h5> Address: <span>Sapa road guru krupa building Godhra</span></h5>
                                          </div>
                                          <div class="pull-right">
                                              <h5>PO Date : <strong>22/2/2020</strong>
                                              </h5>
                                          </div>
                                      </div>
                                  </div><!-- end col -->
                              </div>
                              <!-- end row -->

                              <div class="m-h-50"></div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="table-responsive">
                                          <table class="table m-t-30">
                                             <thead>
                                                        <tr>
                                                          <th style="width:10%;">Sr No</th>
                                                            <th style="width:10%;">Date</th>
                                                            <th style="width:40%;">Product Name</th>
                                                            <th style="width:10%;">Profit</th>
                                                            <th style="width:10%;">Loss</th>
                                                            <th style="width:20%; text-align: right;" >Total Rs</th>
                                                        </tr>
                                                      </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>25/2/2019</td>
                                                            <td>Shirt</td>
                                                            <td>200</td>
                                                            <td></td>
                                                            <td align="right">500</td>
                                                        </tr>
                                                        </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6 col-sm-6 col-xs-6">

                                  </div>
                                  <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">

                                      <hr>
                                      <h5 class="text-right">Total Rs:   2930.00</h5>
                                  </div>
                              </div>

                          </div>


                      </div>
                  </div>

              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
   </body>
</html>