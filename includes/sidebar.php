  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../assets/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>LMS</strong></span>
      </a>
  <!-- ../assets/images/user1-128x128.jpg -->

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Home 
                </p>
                <!-- set page title -->
              </a>
            </li>
            <?php if (isset($_SESSION['Type'])){
              // code...
              if ($_SESSION['Type'] === 'Admin'){
                // code...
            ?>
            <li class="nav-header">STUDENTS</li>
            <li class="nav-item">
              <a href="manageStudents.php" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p>
                  Manage Students
                </p>
              </a>
            </li>
            <li class="nav-header">BOOKS</li>
            <li class="nav-item">
              <a href="allBooks.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  All Books
                </p>
                <!-- set page title -->
              </a>
            </li>
            <li class="nav-item">
              <a href="newBook.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Add Book
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="issuedBook.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Issued Books
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="bookRecommendation.php" class="nav-link">
                <i class="fas fa-book-open nav-icon"></i>
                <p>Book Recommendation</p>
              </a>
            </li>
            <li class="nav-header">REQUESTS</li>
            <li class="nav-item">
              <a href="issueRequest.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Issue Request</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="renewRequest.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Renew Request</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="returnRequest.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Return Request</p>
              </a>
            </li>   
            <?php 
              }
            }
            ?>
            <?php if (isset($_SESSION['Type'])){
              // code...
              if ($_SESSION['Type'] === 'Student'){
                // code...
            ?>
            <li class="nav-header">BOOKS</li>
            <li class="nav-item">
              <a href="allBooks.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  All Books
                </p>
                <!-- set page title -->
              </a>
            </li>
            <li class="nav-item">
              <a href="borrowedBooks.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Borrowed Books
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Recommend Books
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fas fa-book-open nav-icon"></i>
                <p>Issued Books</p>
              </a>
            </li>  
            <?php 
              }
            }
            ?>        
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="../includes/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->
    </aside>