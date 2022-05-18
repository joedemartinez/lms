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
                <h3>Recommend Book</h3>
              </div>
               <form action="recommendBook.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Book Title" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" cols="20" style="resize: none;"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="recommendBook" class="btn btn-primary">Submit</button>
                </div>
              </form>
            <!-- /.card -->
          </div>
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
if(isset($_POST['recommendBook']))
{
  $title=$_POST['title'];
  $Description=$_POST['description'];
  $rollno=$_SESSION['RollNo'];

  $sql1="insert into lms_DB.recommendations (Book_Name,Description,RollNo) values ('$title','$Description','$rollno')"; 

  if($conn->query($sql1) === TRUE){
    $_SESSION['message'] = 'success';
  }else{//echo $conn->error;
    $_SESSION['message'] = 'error';
  }
    
}
?>
<?php include "../includes/message.php" ?>
<!-- scripts -->
<?php include "../includes/scripts.php" ?>


</body>
</html>
