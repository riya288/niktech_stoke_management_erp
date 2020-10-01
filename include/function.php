<?php
//file upload function
function upload($file,$name,$path){
	if($file[$name]["size"] > 50000000){
		$error = "file is too large";
		return $error;
	}
	$upload_name = basename($file[$name]["name"]);
	$target_file = $path . $upload_name;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "wav" && $imageFileType != "m4a") {
   		$error =  0;
    	return $error;
	}
	if (file_exists($target_file)) {
    	$error =  1;
   		return $error;
	}
	 if (move_uploaded_file($file[$name]["tmp_name"], $target_file)) {
       return $upload_name;
    } else {
       return false;
    }
}
?>