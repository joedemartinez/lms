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
              <!-- /.card-header -->
              <div class="card-header">
                <h3>Books Borrowed</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Book name</th>
                      <th>Issue Date</th>
                      <th>Return Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $rollno = $_SESSION['RollNo'];
                    $sql="select * from lms_DB.record,lms_DB.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NOT NULL and book.Bookid = record.BookId";

                    $result=$conn->query($sql);
                    $rowcount=mysqli_num_rows($result);

                    $i = 1;
                    while($row=$result->fetch_assoc())
                    {
                      $bookid=$row['BookId'];
                      $name=$row['Title'];
                      $issuedate=$row['Date_of_Issue'];
                      $returndate=$row['Date_of_Return']; 

                    ?>
                    <tr>
                      <td><?=$i;$i++;?></td>
                      <td><?php echo $name ?></td>
                      <td><?php echo $issuedate ?></td>
                      <td><?php echo $returndate ?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>#</th>
                      <th>Book name</th>
                      <th>Issue Date</th>
                      <th>Return Date</th>
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
</body>
</html>
