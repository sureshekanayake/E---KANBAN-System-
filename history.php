<?php session_start(); 
if (!isset($_SESSION['admin_id'])) {
  header("location:adminlogin.php");
}
?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<?php include "./templates/sidebar.php"; ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "E_KANBAN");
$query = "SELECT * FROM complete_orders ORDER BY id desc";
$request_date = "";
$complete_date ="";
$sql = mysqli_query($conn, $query);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>E-KANBAN SYSTEM</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<div class="col-md-10">
<h2 style="font-family: Montserrat-Light;">Select Date to Search Order History,</h2>
<input type="text" style="background-color: rgb(52,58,64); border-radius: 10px; color: white;" name="From" id="From" class="col-md-4" placeholder="From Date">
<input type="text" style="margin-left: 10px; background-color: rgb(52,58,64); border-radius: 10px; color: white;" name="to" id="to" class="col-md-4" placeholder="To Date">
<input type="button" style="margin-left: 10px;" name="range" id="range" value="Range" class="btn btn-success">
<a href="exportnew.php" style="padding-left: 20px;" target="popup" 
  onclick="window.open('exportnew.php','popup','width=1000,height=600'); return false;"><button class="btn btn-info">Export</button></a>
</div>

<div class="clearfix"></div>
<br/>
<div id="purchase_order">

  <table class="table table-hover">
    <thead>
      <tr>
        <th style="width: 5%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Module No.</th>
        <th style="width: 5%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Shift</th>
        <th style="width: 8%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Request By</th>
        <th style="width: 15%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Article Name</th>
        <th style="width: 5%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Quantity</th>
        <th style="width: 7%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Request Time</th>
        <th style="width: 7%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Complete Time</th>
        <th style="width: 1%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Time to Complete</th>
        <th style="width: 1%; font-family: Montserrat-Light; font-size: 23px; text-align: center;">Time to Deliver</th>
      </tr>
    </thead>
    <?php
      while($row= mysqli_fetch_array($sql))
    {
    ?>
    <tbody>
      <tr>
        <td><h2 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;"><?php echo $row["module_no"]; ?></h2></td>
        <td><h2 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;"><?php echo $row["shift"];?></td>
        <td><h3 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;"><label>Username</label><br><?php echo $row["admin_name"]; ?></h3><hr><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><label>E.P.F. Number</label><br><?php echo $row["epf_no"]; ?></h3 style="text-align: center;"></td>
        <td><h4 style="text-align: center; font-family: Montserrat-Light; font-size: 21px; line-height: 0.3; "><?php echo $row["article_name"]; ?><hr>
            <?php echo $row["article_name1"]; ?><hr>
            <?php echo $row["article_name2"]; ?><hr>
            <?php echo $row["article_name3"]; ?><hr>
            <?php echo $row["article_name4"]; ?><hr>
            <?php echo $row["article_name5"]; ?><hr>
            <?php echo $row["article_name6"]; ?><hr>
            <?php echo $row["article_name7"]; ?><hr>
            <?php echo $row["article_name8"]; ?><hr>
            <?php echo $row["article_name9"]; ?><hr>
            <?php echo $row["article_name10"]; ?><hr>
            <?php echo $row["article_name11"]; ?><hr>
            <?php echo $row["article_name12"]; ?><hr>
            <?php echo $row["article_name13"]; ?><hr>
            <?php echo $row["article_name14"]; ?><hr>
            <?php echo $row["article_name15"]; ?><hr></h4></td>

        <td><h4 style="text-align: center; font-size: 21px; font-family: Montserrat-Light; line-height: 0.3;"><?php echo $row["quantity"]; ?><hr>
            <?php echo $row["quantity1"]; ?><hr>
            <?php echo $row["quantity2"]; ?><hr>
            <?php echo $row["quantity3"]; ?><hr>
            <?php echo $row["quantity4"]; ?><hr>
            <?php echo $row["quantity5"]; ?><hr>
            <?php echo $row["quantity6"]; ?><hr>
            <?php echo $row["quantity7"]; ?><hr>
            <?php echo $row["quantity8"]; ?><hr>
            <?php echo $row["quantity9"]; ?><hr>
            <?php echo $row["quantity10"]; ?><hr>
            <?php echo $row["quantity11"]; ?><hr>
            <?php echo $row["quantity12"]; ?><hr>
            <?php echo $row["quantity13"]; ?><hr>
            <?php echo $row["quantity14"]; ?><hr>
            <?php echo $row["quantity15"]; ?><hr></h4></td>

        <td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><?php echo $row["request_date"]; ?></h3></td>
        <td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><?php echo $row["complete_date"]; ?></h3></td>
        <td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><?php echo $row["Time"]; ?></h3></td>
        <td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><?php echo $row["DeliverTime"]; ?></h3></td>

      </tr>
    </tbody>
    <?php
}
?>
  </table>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<!-- Script -->

<script>
$(document).ready(function(){
$.datepicker.setDefaults({
dateFormat: 'yy-mm-dd'
});
$(function(){
$("#From").datepicker();
$("#to").datepicker();
});
$('#range').click(function(){
var From = $('#From').val();
var to = $('#to').val();
if(From != '' && to != '')
{
$.ajax({
url:"range.php",
method:"POST",
data:{From:From, to:to},
success:function(data)
{
$('#purchase_order').html(data);
}
});
}
else
{
alert("Please Select the Date");
}
});
});
</script>

</body>
</html>