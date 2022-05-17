<?php
require '../dbconn.php';

$bookid=$_GET['id1'];

$rollno=$_GET['id2'];

$sql="delete from lms_DB.record where RollNo='$rollno' and BookId='$bookid'";

if($conn->query($sql) === TRUE)
{
	$sql1="insert into lms_DB.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for issue of BookId: $bookid  has been rejected',curdate(),curtime())";
 $result=$conn->query($sql1);
$_SESSION['message'] = 'success';  
header( "Refresh:0.01; url=issueRequest.php", true, 303);
}
else
{
	$_SESSION['message'] = 'error'; 
    header( "Refresh:0.01; url=issueRequest.php", true, 303);

}




?>