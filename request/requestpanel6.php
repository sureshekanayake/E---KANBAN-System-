<?php session_start(); 
if (!isset($_SESSION['username'])) {
  header("location:index.php");
}?>
<?php include('requestpanelserver6.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>E-KANBAN SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="date_time.js"></script>
</head>
<body style="background-image: url('img/background.jpeg');">
  <ul>
    <li><ul style="font-size: 28px; font-family: Montserrat-Light; color: white; padding-left: 10px;">E-KANBAN SYSTEM</ul></li>

    <div class="times"><span id="date_time"></span></div>
            <script type="text/javascript">window.onload = date_time('date_time');</script>

  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Hi <?php echo $_SESSION["username"]; ?>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    
    <a href="index.php">Logout</a>
  </div>
  </div>

</ul>
<?php $_SESSION["appuser_epf_no"]; ?>
  <div class="container-fluid">
  <div class="row">
<?php
$mysqli = NEW MySQLi ('localhost','root','','E_KANBAN');

$resultset = $mysqli->query("SELECT article_name FROM articles");
$resultset1 = $mysqli->query("SELECT article_name FROM articles");
$resultset2 = $mysqli->query("SELECT article_name FROM articles");
$resultset3 = $mysqli->query("SELECT article_name FROM articles");
$resultset4 = $mysqli->query("SELECT article_name FROM articles");
$resultset5 = $mysqli->query("SELECT article_name FROM articles");
$resultset6 = $mysqli->query("SELECT article_name FROM articles");
$resultset7 = $mysqli->query("SELECT article_name FROM articles");
$resultset8 = $mysqli->query("SELECT article_name FROM articles");
$resultset9 = $mysqli->query("SELECT article_name FROM articles");
$resultset10 = $mysqli->query("SELECT article_name FROM articles");
$resultset11 = $mysqli->query("SELECT article_name FROM articles");
$resultset12 = $mysqli->query("SELECT article_name FROM articles");
$resultset13 = $mysqli->query("SELECT article_name FROM articles");
$resultset14 = $mysqli->query("SELECT article_name FROM articles");
$resultset15 = $mysqli->query("SELECT article_name FROM articles");
$resultset16 = $mysqli->query("SELECT module_no FROM modules");
$resultset17 = $mysqli->query("SELECT shift FROM shift");


?>
<br>
<br>

 <form action="requestpanel6.php" method="post">
        <?php include('errors.php'); ?>
    <label style="font-family:Montserrat-Light; font-size:24px; color:white; padding-left: 30px; font-weight: bold; letter-spacing: 0.5px;">Module Number : 7</label>
<label style="font-family:Montserrat-Light; font-size:24px; color:white; padding-left: 320px; font-weight: bold; letter-spacing: 0.5px;">Shift</label>
    <select name="shift" required>
    <option value=""></option>
      <?php
            while ($rows = $resultset17->fetch_assoc())
            {
              $shift = $rows['shift'];                
              echo "<option value='$shift'>$shift</option>";
            }

      ?>

</select>
<br>
<br>
<br>

 
  <table>
    <th>
      <label class="head1" style="font-family:Montserrat-Light; font-size:24px; color:white; letter-spacing: 0.5px;">Yarn Article Type</label>
      <label class="head2" style="font-family:Montserrat-Light; font-size:24px; color:white; letter-spacing: 0.5px; padding-left: 12px;">Quantity</label>
      <label class="head3" style="font-family:Montserrat-Light; font-size:24px; color:white; letter-spacing: 0.5px;">Yarn Article Type</label>
      <label class="head4" style="font-family:Montserrat-Light; font-size:24px; color:white; letter-spacing: 0.5px;">Quantity</label>
    </th>
  </table>

<select name="article" required>
    <option value=""></option>
  
      <?php
            while ($rows = $resultset->fetch_assoc())
            {
              $article_name = $rows['article_name'];                
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>

          <input type="Number" class="qarea" name="quantity" value="<?php echo $quantity; ?>" required>


</select>

<select name="article1">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset1->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity1" value="<?php echo $quantity1; ?>">

</select>

<select name="article2">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset2->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity2" value="<?php echo $quantity2; ?>">

</select>

<select name="article3">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset3->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity3" value="<?php echo $quantity3; ?>">

</select>

<select name="article4">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset4->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity4" value="<?php echo $quantity4; ?>">

</select>

<select name="article5">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset5->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity5" value="<?php echo $quantity5; ?>">

</select>

<select name="article6">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset6->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity6" value="<?php echo $quantity6; ?>">

</select>

<select name="article7">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset7->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity7" value="<?php echo $quantity7; ?>">

</select>

<select name="article8">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset8->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity8" value="<?php echo $quantity8; ?>">

</select>

<select name="article9">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset9->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity9" value="<?php echo $quantity9; ?>">

</select>

<select name="article10">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset10->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity10" value="<?php echo $quantity10; ?>">

</select>

<select name="article11">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset11->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity11" value="<?php echo $quantity11; ?>">

</select>

<select name="article12">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset12->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity12" value="<?php echo $quantity12; ?>">

</select>

<select name="article13">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset13->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity13" value="<?php echo $quantity13; ?>">

</select>

<select name="article14">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset14->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity14" value="<?php echo $quantity14; ?>">

</select>

<select name="article15">
    <option value=""></option>
  
      <?php
            while ($rows = $resultset15->fetch_assoc())
            {
              $article_name = $rows['article_name'];
              echo "<option value='$article_name'>$article_name</option>";
            }


      ?>
          <input type="Number" class="qarea"  name="quantity15" value="<?php echo $quantity15; ?>">

</select>


<div class="footer">
  <button type="reset" class="btn123" name="submit" value="Clear"> Clear </button>
  <button type="submit" class="btn123" name="submit"> Order </button>
</div>
<br>
<div class="footer">
  <button class="btn1234" onclick="window.location.href='../deliver/deliver6.php'"> Show Request Order </button>
</div>
          
        </form>

      </div>
    </div>
  </div>
      
    </main>
  </div>
</div>





 <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>


</body>
</html>
