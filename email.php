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
    $query = "DELETE FROM branch WHERE id = '$id'";
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
    $query = "SELECT * FROM branch WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name = $row['name'];
        $code = $row['code'];
        $address = $row['address'];
        $remark = $row['remark'];
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
                                                <div class="col-sm-12">
                                                    <div class="card-box m-t-20">
                                                        <div class="">
                                                            <form role="form">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" placeholder="To">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="email" class="form-control" placeholder="Cc">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="email" class="form-control" placeholder="Bcc">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Subject">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="summernote form-control">
                                                                       
                                                                    </textarea>
                                                                </div>

                                                                <div class="btn-toolbar form-group m-b-0">
                                                                    <div class="pull-right">
                                                                         <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-folder"></i></button>
                                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                                                                        <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button>
                                                                        <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- End row -->


                    </div> <!-- container -->
                </div> <!-- content -->
            </div>


            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 450,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>


    </body>
</html>