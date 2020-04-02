<!DOCTYPE html>
<html>
<head>
  <title>E-KANBAN SYSTEM</title>
  <script type="text/javascript" src="date_time.js"></script>
  <style>
.times{
  color:white;
  font-family: Montserrat-Light;
  font-size: 28px;
  padding-top: 10px;
  text-align: center;

}

.dropbtn {
  color: white;
  padding: 3px;
  font-size: 28px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(39,44,49);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a style="font-family: Montserrat-Light; font-size: 24px;" class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">E-KANBAN SYSTEM</a>
  <div class="times"><span id="date_time"></span></div>
  <script type="text/javascript">window.onload = date_time('date_time');</script>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">

    <div class="dropdown">

        <button class="dropbtn" style="font-family: Montserrat-Light;">Hi <?php echo $_SESSION["monitor_username"]; ?><i class="fa fa-caret-down" style="padding-left: 8px;"></i></button>

        <div class="dropdown-content">

        <a>
      <?php
        if (isset($_SESSION['user_id'])) {
          ?>
            <a style="font-family: Montserrat-Light; color: white; font-size: 22px;" class="nav-link" href="../admin/monitor-logout.php">Sign out</a>
          <?php
        }else{
          $uriAr = explode("/", $_SERVER['REQUEST_URI']);
          $page = end($uriAr);
          if ($page === "monitorlogin.php") {
            ?>
              
            <?php
          }else{
            ?>
              <a class="nav-link" href="../admin/monitorlogin.php">Login</a>
            <?php
          }


          
        }

      ?>
        </a>
      
    </li>
  </ul>
  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Welcome to E-KANBAN System"],
            typeSpeed: 80,           
            startDelay: 800,          
            });
            </script>
</nav>

</body>
</html>


