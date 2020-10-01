
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
      <div class="row bb-1 bt-1 br-1 bl-1">
        <div class="col-md-5 col-xs-5" style="padding:40px;">
          <img src="assets/images/logo.png" height="70px">
        </div>
         <div class="col-md-7 col-xs-7 pull-right">
            <div class="row">
               <div class="col-md-8 col-xs-8 fwb f-20 bgb m-b-16 pull-right blue-back" style="border-bottom-left-radius: 15px;"><span class="pull-right" >GST TAX INVOICE</span></div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>M : 9104505088 | 9773113554</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>E : cybernetworks5618@gmail.com</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>25,Shreenath Sanidhya,New Alkapuri,Gotri,Vadodara-390021</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-right" style="padding-right: 10px;">
                  <p>GST : 24ATAPV9974DIZA</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row br-1 bl-1 bb-1">
         <div class="col-md-8 col-xs-8 br-1" style="padding-left: 30px; padding-right: 30px;">
            <div class="row">
               <div style="font-weight: bold;padding-top: 5px;">BILLED TO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </div>
            <div class="row"  style="padding-top: 16px;">
               <div style="width:15%; display:inline;">Company :</div>
               <div class="b-b-1_line" style="width:85%; display:inline; float: right;">&nbsp;</div>
            </div>
            <div class="row">
               <div style="width:14%; display:inline;">Address :</div>
               <div class="b-b-1_line" style="width:86%; display:inline; float: right;">&nbsp;</div>
            </div>
            <div class="row">
               <div style="width:17%; display:inline;">State Code :</div>
               <div class="b-b-1_line" style="width:83%; display:inline; float: right;">&nbsp;</div>
            </div>
            <div class="row" style="padding-bottom: 20px;">
               <div style="width:14%; display:inline;">GST No. :</div>
               <div class="b-b-1_line" style="width:86%; display:inline; float: right;">&nbsp;</div>
            </div>
         </div>
         <div class="col-md-4 col-xs-4" style="padding-left: 30px; padding-right: 30px;padding-top: 40px;">
            <div class="row" style="padding-top: 5px;">
               <div style="width:40%; display:inline;">Invoice No. :</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;">&nbsp;</div>
            </div>
            <div class="row" style="padding-top: 5px;">
               <div style="width:40%; display:inline;">Invoice Date :</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;">&nbsp;</div>
            </div>
            <div class="row" style="padding-top: 5px;">
               <div  style="width:40%; display:inline;">P.O. Number :</div>
               <div class="b-b-1_line" style="width:60%; display:inline; float: right;">&nbsp;</div>
            </div>
         </div>
      </div>
   </div>
   <div class="container b-b-1_line b-l-1 b-r-1">
      <table style="padding:5px;margin-top: 10px;text-align: center;">
         <thead style="text-align: center;">
            <th style="width:10%;padding: 2px;text-align: center;">Sr. No.</th>
            <th style="width:40%;padding: 2px;text-align: center;">Description</th>
            <th style="width:15%;padding: 2px;text-align: center;">Qty.</th>
            <th style="width:15%;padding: 2px;text-align: center;">Rate</th>
            <th style="width:20%;padding: 2px;text-align: center;">Amount</th>
         </thead>
         <tbody>
                        <tr>
               <td style="width:10%;padding: 2px;">1</td>
               <td style="width:40%;padding: 2px;">Black forest Cake</td>
               <td style="width:15%;padding: 2px;">1</td>
               <td style="width:15%;padding: 2px;">250</td>
               <td style="width:20%;padding: 2px;">250</td>
            </tr>
                        <tr>
                  <td rowspan="3" colspan="4">
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-md-9 col-xs-9" style="font-weight: bold;">BANK DETAILS:</div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-6 col-xs-6">CGST@</div>
                           <div class="col-md-6 col-xs-6 b-b-1_line">9%</div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-xs-9 col-md-9">
                           <div class="row">
                              <div class="col-md-3 col-xs-3">Bank Name:</div>
                              <div class="col-md-4 col-xs-4">BANK OF BARODA</div>
                              <div class="col-md-2 col-xs-2">A/CNo:</div>
                              <div class="col-md-3 col-xs-3">77980200000490</div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-6 col-xs-6">SGST@</div>
                           <div class="col-md-6 col-xs-6 b-b-1_line">9%</div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-xs-9 col-md-9">
                           <div class="row">
                              <div class="col-md-3 col-xs-3">A/C Name:</div>
                              <div class="col-md-4 col-xs-4">CYBER NETWORKS</div>
                              <div class="col-md-2 col-xs-2">IFSC:</div>
                              <div class="col-md-3 col-xs-3">BARBOVJRAOP</div>
                           </div>
                        </div>
                        <div class="col-md-3 col-xs-3">
                           <div class="col-md-12 col-xs-12 pull-right" style="font-weight: bold;text-align: right;">GRAND TOTAL</div>
                        </div>
                     </div>
                  </div>
               </td>
               <td style="text-align: center;">22.5</td>
            </tr>
            <tr>
               <td style="text-align: center;">22.5</td>
            </tr>
            <tr>
               <td style="text-align: center;">295</td>
            </tr>
            <tr>
               <td colspan="6">
                  <div class="row">
                     <div class="col-md-12 col-xs-12">
                        <div class="col-md-3 col-xs-3">Rupees in word:</div>
                        <div class="col-md-8 col-xs-8"></div>
                     </div>
                  </div>
               </td>
            </tr>
            </tr>
         </tbody>
      </table>
      <div class="col-md-12 col-xs-12 b-b-1_line b-r-1 b-l-1 b-t-1" style="margin-bottom: 20px; margin-top: 20px;">
         <div class="col-md-8 col-xs-8 b-r-1">
            <div class="row">
               <div class="pull-left" style="font-weight: bold;">
                  <p>Terms & Condition</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-left">
                  <p>1)Subject to Vadodara Jurisdiction</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-left">
                  <p>2)Goods One sold will not be accepted back or exchange</p>
               </div>
            </div>
            <div class="row">
               <div class="pull-left">
                  <p>3)Warranty as per the respective company norms</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-4">
            <div class="row">
               <div class="col-md-12 col-xs-12" style="font-weight: bold;">
                  <p>For Cyber Networks</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-xs-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-xs-12" style="font-weight: bold;">
                  <p>Proprietor</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-xs-12">
         <div align="center">
            <div class="hidden-print">
               <a href="javascript:window.print()"><button class="btn btn-lg btn-primary" style="font-weight: bold;font-size: 20px;margin-top: 30px; width: 100%"><i class="fa fa-print">&nbsp;&nbsp;&nbsp;&nbsp;Print Pdf</i></button></a>
            </div>
         </div>
      </div>
   </div>
   <!-- </div> -->
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