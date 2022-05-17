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
                <h3>All Students on LMS</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Roll No.</th>
                      <th>Email id</th>                                      
                      <th>Category</th>
                      <th>Phone #</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql="select * from lms_DB.user where RollNo<>'ADMIN'";

                    $result=$conn->query($sql);
                    $rowcount=mysqli_num_rows($result);                    

                    $i = 1;
                    while($row=$result->fetch_assoc())
                    {

                      $email=$row['EmailId'];
                      $name=$row['Name'];
                      $rollno=$row['RollNo'];
                      $category=$row['Category'];
                      $email=$row['EmailId'];
                      $mobno=$row['MobNo']; 

                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $rollno ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $category ?></td>
                    <td><?php echo $mobno ?></td>
                    <td><center>
                          <a href="#" class="btn btn-danger">Block Access</a>
                      </center></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Email id</th>                                      
                    <th>Category</th>
                    <th>Phone #</th>
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
</body>
</html>
