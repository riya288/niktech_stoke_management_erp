<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');

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
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4> Company Name: <span>Nik Tech Solution</span></h4>
                                                <h5> Address: <span>TF-9A Lotus Aura,Sama Savli Road,Vadodra</span></h5>
                                            </div>
                                            <div class="pull-right">
                                                <h5>PO Date : <strong>22/2/2020</strong>
                                                </h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr><th style="width:10%;">Sr No</th>
                                                            <th style="width:40%;">Product Name</th>
                                                            <th style="width:10%;">Profit</th>
                                                            <th style="width:10%;">Loss</th>
                                                            <th style="width:20%; text-align: right;" >Total Rs</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><?php echo $product; ?></td>
                                                            <td><?php echo $profit; ?></td>
                                                            <td><?php echo $loss; ?></td>
                                                            <td align="right"><?php echo $sel_amt;?></td>
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
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i> Print</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

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

    </body>
</html>