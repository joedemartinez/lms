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
                <h3>Add Book</h3>
              </div>
               <form action="addNewBook.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Book Title" required>
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author" required>
                  </div>
                  <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Publisher">
                  </div>
                  <div class="form-group">
                    <label for="year">Year</label>
                    <input type="year" class="form-control" id="year" name="year" placeholder="Year">
                  </div>
                  <div class="form-group">
                    <label for="copies">No of Copies</label>
                    <input type="number" class="form-control" id="copies" name="copies" placeholder="Number of copies" min="0" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="addBook" class="btn btn-primary">Submit</button>
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
