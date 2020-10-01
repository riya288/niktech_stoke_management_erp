
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Print A4 Blog</title>
   </head>
   <style type="text/css">
      /* Both z-index are resolving recursive element containment */
      [background-color] {
      z-index: 0;
      position: relative;
      -webkit-print-color-adjust: exact !important;
      }
      [background-color] canvas {
      display: block;
      position:absolute;
      z-index: -1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%; 
      }
      @media all{
      body{
      background-color: white;
      padding: 15px;
      }
      #break{
      page-break-before: always;
      }
      .b-b-1_line
      {
          border-bottom  :1px solid black !important;
      }
      .b-t-1
      {
        border-top: 1px solid black;
      }
      .b-l-1
      {
        border-left: 1px solid black;
      }
      .b-b-2
      {
        border-bottom: 1px solid black;
      }
      .b-r-1
      {
        border-right: 1px solid black;
      }
      }
      .blue-back span{
      
      color:white !important;

      -webkit-print-color-adjust: exact; 
      }
      .blue-back{
      background-color: #0091d2 !important;
      

      -webkit-print-color-adjust: exact; 
      }
   </style>
       
   <link rel="stylesheet" href="assets/css/style.css" media="print">
   <link rel="stylesheet" href="assets/css/style.css" media="screen">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <body style="font-family: calibri !important;font-size:15px !important;">
   
   <div class="container" style="padding-top: 5px;">
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
                                        
                                        <div class="m-h-50"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr><th style="width:10%;">Sr No</th>
                                                            <th style="width:10%;">Date</th>
                                                            <th style="width:20%;">Product Name</th>
                                                            <th style="width:20%;">Proffit</th>
                                                            <th style="width:20%;">Loss</th>
                                                            <th style="width:20%;" >Total Rs</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>25/2/2019</td>
                                                            <td>shirt</td>
                                                            <td>100</td>
                                                            <td>5</td>
                                                            <td>2380</td>
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
                                                <h4 class="text-right"> Total Rs:   2930.00</h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print"></i> Print</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
         </div>
   </body>
  
</html>
<script type="text/javascript">
   $(document).ready(function(){
     $(".row .remove .div .b-b-1_line .b-l-1::before").last().css("display", "none");
   });
      var containers = document.querySelectorAll("[background-color]");
      
      for (i = 0; i < containers.length; i++)
      {
          // Element
          var container = containers[i];
          container.insertAdjacentHTML('beforeend', '<canvas id="canvas-' + i + '"></canvas>');
      
          // Color
          var color = container.getAttribute("background-color");
          container.style.backgroundColor = color;
      
          // Inner Canvas
          var canvas = document.getElementById("canvas-" + i);
          canvas.width = container.offsetWidth;
          canvas.height = container.offsetHeight;
          var ctx = canvas.getContext("2d");
          ctx.fillStyle = color;
          ctx.fillRect(0, 0, canvas.width, canvas.height);
      }
      
      
</script>