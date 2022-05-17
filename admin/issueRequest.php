  <!-- header -->
  <?php include "../includes/header.php" ?>
  <!-- header -->

  <!-- Navbar -->
  <?php include "../includes/navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "../includes/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include "../includes/breadcrumb.php" ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3>Issue Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Roll Number</th>
                      <th>Book Name</th>
                      <th>Availabilty</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $i = 1;
                    $sql="select * from lms_DB.record,lms_DB.book where Date_of_Issue is NULL and record.BookId=book.BookId order by Time";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        $bookid=$row['BookId'];
                        $rollno=$row['RollNo'];
                        $name=$row['Title'];
                        $avail=$row['Availability'];  
                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo strtoupper($rollno) ?></td>
                    <td><b><?php echo $name ?></b></td>
                    <td><?php echo $avail ?></td>
                    <td><center>
                      <?php
                      if($avail > 0)
                      {echo "<a href=\"accept.php?id1=".$bookid."&id2=".$rollno."\" class=\"btn btn-success\">Accept</a>";}
                       ?>
                      <a href="reject.php?id1=<?php echo $bookid ?>&id2=<?php echo $rollno ?>" class="btn btn-danger">Reject</a>
                  </center></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Roll Number</th>
                    <th>Book Name</th>
                    <th>Availabilty</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <?php include "../includes/footer.php" ?>
</div>
<!-- ./wrapper -->
<?php 
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
?>
<!-- REQUIRED SCRIPTS -->

<!-- scripts -->
<?php include "../includes/scripts.php" ?>
</body>
</html>
