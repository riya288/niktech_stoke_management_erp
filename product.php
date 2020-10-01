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
    $query = "DELETE FROM product WHERE id = '$id'";
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
    $query = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $category = $row['category'];
        $sub_category = $row['sub_category'];
        $sub_sub_category = $row['sub_sub_category'];
        $product = $row['product'];
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
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add Product</h4>
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
                              <form class="form-horizontal" role="form" action="action/product.php" method="post">
                                 <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="category">Product Category Name<span class="text-danger">*</span></label>
                                               <select class="select2" name="category" id="category">
                                                  <option>please choose</option>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="sub_category">Product Sub Category Name<span class="text-danger">*</span></label>
                                             <select class="select2" name="sub_category" id="sub_category">
                                                 
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sub_sub_category">Select Sub Sub Category<span class="text-danger">*</span></label>
                                               <select class="form-control select2" name="sub_sub_category" id="sub_sub_category">
                                                  
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Product Name<span class="text-danger">*</span></label>
                                              <input type="text" name="product" parsley-trigger="change"  placeholder="Product name" class="form-control" id="userName">
                                               <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                          </div>
                                       </div>
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
                                    <th>Product Name</th>
                                    <th>Date</th>
                                    <th align="center">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $query = "SELECT * FROM product order by id DESC";
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
                                            if(isset($row['dt_updated']) && !empty($row['dt_updated']))
                                            {
                                                echo $row['dt_updated']; 
                                            }
                                            ?>
                                        </td>
                                       <td>
                                        <a href="product.php?hId=<?php if (isset($row['id']) &&
                                          !empty($row['id'])) {echo $row['id'];} ?>" title="Edit">
                                          <i class="fa fa-edit" style="font-size: 20px;"></i></a>
                                        <a href="product.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
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
               <!-- container -->
               </div>
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
  $("#hide").hide();
  jQuery('.add').click(function(event) {
                   $("#hide").slideToggle();
                   $("#show").slideToggle();   
                }); 
</script>

   </body>
</html>