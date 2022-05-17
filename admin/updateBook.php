<?php
require '../dbconn.php';

if(isset($_POST['updateBook'])){

  $bookid = $_POST['bookid'];
  $title=$_POST['title'];
  $author=$_POST['author'];
  $publisher=$_POST['publisher'];
  $year=$_POST['year'];
  $avail=$_POST['copies'];

$sql1="update lms_DB.book set Title='$title', Author='$author', Publisher='$publisher', Year='$year', Availability='$avail' where BookId='$bookid'"; 

  if($conn->query($sql1) === TRUE){
    $_SESSION['message'] = 'success';
    header( "Refresh:0.1; url=allBooks.php", true, 303);
  }else {
    $_SESSION['message'] = 'error';
  }

}

if (isset($_GET['status']) && isset($_GET['id'])) {
  // code...
  $id = $_GET['id'];

  $sql1="DELETE FROM lms_DB.book WHERE BookId = $id";

  if($conn->query($sql1) === TRUE){
    $_SESSION['message'] = 'success';
    header( "Refresh:0.1; url=allBooks.php", true, 303);
  }else {
    $_SESSION['message'] = 'error';
  }
}