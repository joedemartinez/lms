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
                <h3>Book Recommendations</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Book Name</th>
                      <th>Description</th>
                      <th>Recommended By</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $i = 1;
                    $sql="select * from lms_DB.recommendations";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        $bookname=$row['Book_Name'];
                        $description=$row['Description'];
                        $rollno=$row['RollNo'];
                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo $bookname ?></td>
                    <td><?php echo $description?></td>
                    <td><b><?php echo strtoupper($rollno)?></b></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Book Name</th>
                    <th>Description</th>
                    <th>Recommended By</th>

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
