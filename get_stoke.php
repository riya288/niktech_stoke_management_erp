<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
 	$category_id=$_POST["category_id"];
	$result = mysqli_query($connect,"SELECT * FROM add_stoke where product ='$category_id'");
	while($row = mysqli_fetch_array($result)) { 
?>
 <label for="userName">Available Stoke<span class="text-danger">*</span></label>
<input type="text" name="stoke" value="<?php echo $row["available"]; ?>" parsley-trigger="change"  class="form-control" id="userName" readonly>
	<?php }?>