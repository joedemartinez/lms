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
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Books in Library</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * FROM lms_DB.book";
                    $query = $conn->query($sql);

                    echo $query->num_rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book-reader"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">
                  Students
                </span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * FROM lms_DB.user where RollNo != 'admin'";
                    $query = $conn->query($sql);

                    echo $query->num_rows;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-6">
              <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Book Categories by Publisher</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php  
                    $sql="SELECT * FROM lms_DB.book GROUP BY Publisher ASC limit 5";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {                    
                    ?>
                  <li class="item">
                    <div class="product-img">
                      <i alt="Product Image" class="fas fa-book fa-3x"></i>
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"><?= $row['Title']?></a>
                      <span class="product-description">
                        <?= $row['Publisher']?>
                      </span>
                    </div>
                  </li>
                  <?php } ?>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- right col -->
          <div class="col-md-6">
              <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Book Categories by Year</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <?php  
                    $sql="SELECT * FROM lms_DB.book GROUP BY Year ASC limit 5";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {                    
                    ?>
                  <li class="item">
                    <div class="product-img">
                      <i alt="Product Image" class="fas fa-book fa-3x"></i>
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"><?= $row['Title']?></a>
                      <span class="product-description">
                        <?= $row['Publisher']?>
                      </span>
                    </div>
                  </li>
                  <?php } ?>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include "../includes/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- scripts -->
<?php include "../includes/scripts.php" ?>
</body>
</html>
