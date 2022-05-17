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
                <h3>All Books</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Book #</th>
                      <th>Book name</th>
                      <th>Author</th>
                      <th>Publisher</th>
                      <th>Year</th>
                      <th>Availability</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql="SELECT * FROM lms_DB.book ORDER BY BookId DESC";

                    $result=$conn->query($sql);
                    $i = 1;   
                    //$result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        $name=$row['Title'];
                        $avail=$row['Availability'];
                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo $name ?></td>
                    <td><?= $row['Author'];?></td>
                    <td><?= $row['Publisher'];?></td>
                    <td><?= $row['Year'];?></td>
                    <td><b><?php echo $avail ?></b></td>
                      <td><center>
                          <a href="editBook.php?id=<?php echo $row['BookId']; ?>" class="btn btn-success">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                      </center></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Book #</th>
                      <th>Book #</th>
                      <th>Book name</th>
                      <th>Author</th>
                      <th>Publisher</th>
                      <th>Year</th>
                      <th>Availability</th>
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
