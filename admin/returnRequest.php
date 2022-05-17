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
                <h3>Renew Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Roll Number</th>
                      <th>Book Name</th>
                      <th>Due (days)</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $i = 1;
                    $sql="select return.BookId,return.RollNo,Title,datediff(curdate(),Due_Date) as x from lms_DB.return,lms_DB.book,lms_DB.record where return.BookId=book.BookId and return.BookId=record.BookId and return.RollNo=record.RollNo";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                        $bookid=$row['BookId'];
                        $rollno=$row['RollNo'];
                        $name=$row['Title'];
                        $dues=$row['x'];
                        
                    
                   
                    ?>
                  <tr>
                    <td><?=$i;$i++;?></td>
                    <td><?php echo strtoupper($rollno) ?></td>
                    <td><b><?php echo $name ?></b></td>
                    <td><?php 
                    if($dues > 0)
                        echo $dues;
                        else
                        echo 0; ?></td>
                    <td><center>
                                                              
                      <a href="acceptreturn.php?id1=<?php echo $bookid; ?>&id2=<?php echo $rollno; ?>&id3=<?php echo $dues ?>" class="btn btn-success">Accept</a>
                  </center></td>
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Roll Number</th>
                    <th>Book Name</th>
                    <th>Due</th>
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
<?php include "../includes/message.php" ?>
<!-- scripts -->
<?php include "../includes/scripts.php" ?>
</body>
</html>
