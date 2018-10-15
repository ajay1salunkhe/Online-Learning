<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "online_learning");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['inputUsername1']);
$email = mysqli_real_escape_string($link, $_REQUEST['inputEmail1']);
$password = mysqli_real_escape_string($link, $_REQUEST['inputPassword1']);
 
// attempt insert query execution
$sql = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Sign Up successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>