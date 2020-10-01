<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
 	$from_dt=$_POST["from_dt"];
 	$to_dt=$_POST["to_dt"];
	$result = mysqli_query($connect,"SELECT * FROM add_product where ");
?>
<option value="">Please choose</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["sub_category"];?>"><?php echo $row["sub_category"];?></option>
<?php
}
?>