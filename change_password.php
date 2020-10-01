<?php

// Include the files which is used for this module.
require_once('include/connection.php');
require_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');

// create object for flash message
$msg = new FlashMessages();
 
    $querySccess = 0;
    $queryError = 0;
    $notMatched = 0;

    // Change the admin password
    if(isset($_POST["submit"]))
    {
        $userPassword = md5(input_validate($_POST["userPassword"]));
        $confirmPassword = md5(input_validate($_POST["confirmPassword"]));

        if($userPassword == $confirmPassword)
        {
            $adminId = $_SESSION['adminId'];
            $query = "UPDATE admin SET password = '$userPassword' WHERE id='$adminId'";
            if(mysqli_query($connect,$query))
            {
                $querySccess = 1;
                
            }
            else
            {
                $queryError = 1;
            }
        }
        else
        {
            $notMatched = 1;
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
                <div class="col-xs-12">
                    <h3 class="header-title m-t-0">Change Password</h3>
                    <div class="card-box">

                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-6">

                                <div class="row">
                            
                            <div class="col-md-12 p-l-0 p-r-0">
                                     <?php
                            // Display the flash message.
                            if($querySccess == 1)   
                            {
                                $msg->success("Your password updated successfully");
                                $msg->display();
                            }
                            else if($queryError == 1)
                            {
                                $msg->error("Your passwordError");
                                $msg->display();
                            }
                            else if($notMatched == 1)
                            {
                                $msg->error("Please enter both password same");
                                $msg->display();
                            }
                            ?>

                            </div>
                           
                        </div> 

                                <div class="p-20">
                                    <form role="form" data-parsley-validate="" novalidate="" name="changePassword" class="form-horizontal" method="post">

                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-sm-3 form-control-label">Password<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input id="hori-pass1" type="password" placeholder="Password" required="" name="userPassword" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-sm-3 form-control-label">Confirm Password
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input data-parsley-equalto="#hori-pass1" type="password" name="confirmPassword" required="" placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light pull-right" >
                                                    Submit
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- end ard-box -->
                </div>

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
<script type="text/javascript">
    $(document).ready(function () {
    $('#datatable').dataTable();
    });
</script>

</body>
</html>