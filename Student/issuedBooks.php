  <!-- header -->
  <?php include "../includes/header.php";

  if (isset($_SESSION['Type']) && $_SESSION['Type'] === 'Admin') {
    // code...
    header('location:../admin/dashboard.php');
  }?>
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
                <h3>Issued Books</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Book name</th>
                      <th>Issue Date</th>
                      <th>Due date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $rollno = $_SESSION['RollNo'];
                    $i = 1;
                    $sql="select * from lms_DB.record,lms_DB.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";

                    $result=$conn->query($sql);
                    $rowcount=mysqli_num_rows($result);
                    while($row=$result->fetch_assoc())
                    {
                      $bookid=$row['BookId'];
                      $name=$row['Title'];
                      $issuedate=$row['Date_of_Issue'];
                      $duedate=$row['Due_Date'];
                      $renewals=$row['Renewals_left'];
                    
                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $issuedate ?></td>
                    <td><?php echo $duedate ?></td>
                      <td><center>
                      <?php 
                       if($renewals)
                          echo "<a href=\"renew_request.php?id=".$bookid."\" class=\"btn btn-success\">Renew</a>";
                      ?>
                      <a href="return_request.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Return</a>
                      </center></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Book name</th>
                    <th>Issue Date</th>
                    <th>Due date</th>
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

<!-- REQUIRED SCRIPTS -->

<!-- scripts -->
<?php include "../includes/scripts.php" ?>
<?php include "../includes/message.php" ?>
</body>
</html>
