<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
 	$category_id=$_POST["category_id"];
	$result = mysqli_query($connect,"SELECT * FROM sub_sub_category where sub_category='$category_id'");
?>
<option value="">Please choose</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["sub_sub_category"];?>"><?php echo $row["sub_sub_category"];?></option>
<?php
}
?>