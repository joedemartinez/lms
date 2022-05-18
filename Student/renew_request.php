<?php
require '../dbconn.php';

$id=$_GET['id'];

$roll=$_SESSION['RollNo'];

$sql="insert into lms_DB.renew (RollNo,BookId) values ('$roll','$id')";

if($conn->query($sql) === TRUE)
{
$_SESSION['message'] = 'success';
// echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=issuedBooks.php", true, 303);
}
else
{
	$_SESSION['message'] = 'error';
	// echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=issuedBooks.php", true, 303);

}




?>