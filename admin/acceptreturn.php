<?php
require '../dbconn.php';

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];
$dues=$_GET['id3'];

$sql="select Category from lms_DB.user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category=$row['Category'];




$sql1="update lms_DB.record set Date_of_Return=curdate(),Dues='$dues' where BookId='$bookid' and RollNo='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="update lms_DB.book set Availability=Availability+1 where BookId='$bookid'";
 $result=$conn->query($sql3);
 $sql4="delete from lms_DB.return where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql4);
 $sql6="delete from lms_DB.renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql6);
 $sql5="insert into lms_DB.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for return of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
$_SESSION['message'] = 'success'; 
header( "Refresh:0.01; url=returnRequest.php", true, 303);
}
else
{
	$_SESSION['message'] = 'error'; 
    header( "Refresh:1; url=returnRequest.php", true, 303);

}





?>