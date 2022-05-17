<?php
require '../dbconn.php';

if(isset($_POST['addBook'])){
  $title=$_POST['title'];
  $author=$_POST['author'];
  $publisher=$_POST['publisher'];
  $year=$_POST['year'];
  $availability=$_POST['copies'];

  $sql1="insert into lms_DB.book (Title,Author,Publisher,Year,Availability) values ('$title','$author', '$publisher','$year','$availability')";

  if($title !== ""){
    $conn->query($sql1);
    $_POST['title']="";
    $_SESSION['message'] = 'success';
    header( "Refresh:0.1; url=allBooks.php", true, 303);
  }else {
    $_SESSION['message'] = 'error';
  }
}