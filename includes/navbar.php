<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link"><?php echo $Nowdate;   ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- profile -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown"  role="button">
          <img src="../assets/images/avatar.png" class="img-circle elevation-2" alt="User Image" style="width: 30px;">
          <?= $_SESSION['Name']?>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a role="button" href="#" class="dropdown-item">
            <i class="fas fa-user nav-icon"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="../includes/logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt nav-icon"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>