<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky" >
        <ul class="nav flex-column">

          <?php 


            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>
          <body style="background-image: url('//www.toptal.com/designers/subtlepatterns/patterns/symphony.png');">

          <br>

          <li class="nav-item" style="font-family: Montserrat-Light; font-size: 23px;">
            <a class="nav-link <?php echo ($page == '' || $page == 'adminprofilehome.php') ? 'active' : ''; ?>" href="adminprofilehome.php">
              <span class="symbol-input100">
              <i class="fas fa-users-cog" aria-hidden="true"></i>
              Admin Panel Users <span class="sr-only" class="fa fa-at">(current)</span>
            </a>
            </span>
          </li>
          <br>
          <li class="nav-item" style="font-family: Montserrat-Light; font-size: 23px;">
            <a class="nav-link <?php echo ($page == 'androidappuserprofile.php') ? 'active' : ''; ?>" href="androidappuserprofile.php">
              <span class="symbol-input100">
              <i class="fas fa-users" aria-hidden="true"></i>
              Request Panel Users
            </a>
          </span>
          </li>
          <br>
          <li class="nav-item" style="font-family: Montserrat-Light; font-size: 23px;">
            <a class="nav-link <?php echo ($page == 'history.php') ? 'active' : ''; ?>" href="history.php">
              <span class="symbol-input100">
              <i class="fas fa-history" aria-hidden="true"></i>
              History
            </a>
          </span>
          </li>
          <br>
          <li class="nav-item" style="font-family: Montserrat-Light; font-size: 23px;">
            <a class="nav-link <?php echo ($page == 'yarnarticles.php') ? 'active' : ''; ?>" href="yarnarticles.php">
              <span class="symbol-input100">
              <i class="far fa-tasks" aria-hidden="true"></i>
              Manage Yarn Articles
            </a>
          </span>
          </li>
          <br>
          <li class="nav-item" style="font-family: Montserrat-Light; font-size: 23px;">
            <a class="nav-link <?php echo ($page == 'adminpaneluserprofile.php') ? 'active' : ''; ?>" href="adminpaneluserprofile.php">
              <span class="symbol-input100">
              <i class="fas fa-user-cog" aria-hidden="true"></i>
              Monitor Panel Users
            </a>
          </span>
          </li>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>