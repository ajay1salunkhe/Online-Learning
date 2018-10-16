<?php
include("connection.php");

// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['inputUsername1']);
$email = mysqli_real_escape_string($link, $_REQUEST['inputEmail1']);
$password = mysqli_real_escape_string($link, $_REQUEST['inputPassword1']);
 
// attempt insert query execution
$sql = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
if(mysqli_query($link, $sql)){
    header("Location: login_redirect.html");
} else{
	/*echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);*/
	echo "Error while Registering.";
}
 
// close connection
mysqli_close($link);
?>