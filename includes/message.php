<?php 
 if (isset($_SESSION['message'])) {
 if ($_SESSION['message'] == 'success') {
   // code...
  echo  "<script type='text/javascript'>Swal.fire('Successful!!!')</script>";
  $_SESSION['message'] = '';
 }
 if ($_SESSION['message'] == 'error') {
   // code...
  echo "<script type='text/javascript'>Swal.fire('Something went wrong!!! Try Again')</script>";
  $_SESSION['message'] = '';
 }
  $_SESSION['message'] = '';// code...
 }
?>