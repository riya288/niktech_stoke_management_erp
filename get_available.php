<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
 	$category_id=$_POST["category_id"];
    $query = "SELECT * FROM add_stoke WHERE product = '$category_id'";
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
         if(isset($row['stoke']) && !empty($row['stoke']))
         {
             echo $row['stoke']; 
         }
         ?>
     </td>
     <td> 
     <?php
         if(isset($row['available']) && !empty($row['available']))
         {
             echo $row['available']; 
         }
         ?>
     </td>
  </tr>
	<?php
                                        $i++;
                                    }
                                    ?>