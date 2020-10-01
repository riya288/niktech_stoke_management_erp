<?php

// Validate data
function input_validate($data) {
  
  // Remove white space
  $data = trim($data);

  // Remove back slashes.
  $data = stripslashes($data);

  // Convert special characters to html entity.
  $data = htmlspecialchars($data);

  // Remove html tags and sanitize the string.
  $data = filter_var($data, FILTER_SANITIZE_STRING);

  // Return the purified data
  return $data;
}

// Validate data
function input_validate2($data) {
  
  // Remove white space
  $data = trim($data);

  // Remove back slashes.
  $data = stripslashes($data);

  // Return the purified data
  return $data;
}

// Validate email
function validate_email($data)
{
	$email = input_validate($data);
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
   {
      	return $email; 
   }
   else
   {
   		return false;
   }
}

// validate website
function validate_website($data)
{
	$website = input_validate($data);
   	if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
   	{
    	return $website; 
   	}
   	else
   	{
   		return false;
   	}
}
   
// Validate name fields
function validate_name($data)
{
   $name = test_input($data);
   if (preg_match("/^[a-zA-Z ]*$/",$name)) 
   {
      return $name; 
   }
   else
   {
   	  return false;
   }
}

?>