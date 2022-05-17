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
                <h3>Edit Book</h3>
              </div>
              <!-- /.card-header -->
                <?php
                  $bookid = $_GET['id'];
                  $sql = "select * from lms_DB.book where Bookid='$bookid'";
                  $result=$conn->query($sql);
                  $row=$result->fetch_assoc();
                  $name=$row['Title'];
                  $Author=$row['Author'];
                  $publisher=$row['Publisher'];
                  $year=$row['Year'];
                  $avail=$row['Availability'];
                ?>
               <form action="updateBook.php?id=<?php echo $bookid ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" class="form-control" id="bookid" name="bookid" value= "<?php echo $bookid?>" required style="display: none;">
                    <input type="text" class="form-control" id="title" name="title" value= "<?php echo $name?>" placeholder="Book Title" required>
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value= "<?php echo $Author?>" placeholder="Author" required>
                  </div>
                  <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value= "<?php echo $publisher?>" placeholder="Publisher">
                  </div>
                  <div class="form-group">
                    <label for="year">Year</label>
                    <input type="year" class="form-control" id="year" name="year" value= "<?php echo $year?>" placeholder="Year">
                  </div>
                  <div class="form-group">
                    <label for="copies">No of Copies</label>
                    <input type="number" class="form-control" id="copies" name="copies" value= "<?php echo $avail?>" placeholder="Number of copies" min="0" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="updateBook" class="btn btn-primary">Submit</button>
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
<?php include "../includes/message.php" ?>
<!-- scripts -->
<?php include "../includes/scripts.php" ?>

</body>
</html>
