<?php
require '../dbconn.php';

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];

$sql="select Category from lms_DB.user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category=$row['Category'];



if($category == 'GEN' || $category == 'OBC' )
{$sql1="update lms_DB.record set Due_Date=date_add(Due_Date,interval 60 day),Renewals_left=0 where BookId='$bookid' and RollNo='$rollno'";
 
if($conn->query($sql1) === TRUE)
{$sql3="delete from lms_DB.renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql3);
 
 $sql5="insert into lms_DB.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for renewal of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
$_SESSION['message'] = 'success'; 
header( "Refresh:0.01; url=renewRequest.php", true, 303);
}
else
{
	$_SESSION['message'] = 'error';
    header( "Refresh:0.01; url=renewRequest.php", true, 303);

}
}
else
{$sql2="update lms_DB.record set Due_Date=date_add(Due_Date,interval 180 day),Renewals_left=0 where BookId='$bookid' and RollNo='$rollno'";

if($conn->query($sql2) === TRUE)
{$sql4="delete from lms_DB.renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql4);
 $sql6="insert into lms_DB.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for renewal of BookId: $bookid has been accepted',curdate(),curtime())";
 $result=$conn->query($sql6);
$_SESSION['message'] = 'success';
header( "Refresh:0.01; url=renewRequest.php", true, 303);
}
else
{
	$_SESSION['message'] = 'error';
    header( "Refresh:0.01; url=renewRequest.php", true, 303);

}
}



?>