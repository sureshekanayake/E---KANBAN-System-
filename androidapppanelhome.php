<?php
    session_start();
  if (!isset($_SESSION['monitor_username'])) {
  header("location:index.php");
}
    include("function.php");
?>
<?php include_once("./templates/navbar1.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>E-KANBAN SYSTEM</title>
    <meta charset="utf-8" http-equiv="refresh" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util3.css">
    <link rel="stylesheet" type="text/css" href="css/main3.css">


  </head>

  <body>
    <div class="caption">
      <?php
            
                $query = "select * from `temporary_orders`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
            ?>
  <div class="limiter">
    <div class="container-table100">

      <div class="wrap-table100">

        <div class="table100 ver1 m-b-110">

    <div class="table100-head">
            <table>
              <thead>
            <tr class="row100 head">
              <th class="cell100 column11" style="font-family: Montserrat-Light; font-size: 29px; color:white; font-weight: bold; letter-spacing: 0.5px; width: 300px; padding-left: 20px;"><mark style="background-color: white;">Module Number : <?php echo $row['module_no'] ?></mark><br><mark style="background-color: white;">Shift : <?php echo $row['shift'] ?></mark></th>

              <th class="cell100 column31" style="font-family: Montserrat-Light; font-size: 29px; color:white; font-weight: bold; letter-spacing: 0.5px; width: 300px;"><mark style="background-color: white; margin-top: 2px;">Request By: <?php echo $row['admin_name'] ?> / <?php echo $row['epf_no'] ?></mark></th>

              <th class="cell100 column51" style="font-family: Montserrat-Light; font-size: 29px; color:white; font-weight: bold; letter-spacing: 0.5px; width: 300px;"><mark style="background-color: white;">Request Time: <?php echo $row['request_date'] ?></mark></th>
              
              
            </tr>
          </thead>
        </table>
        <table>
              <thead>
            <tr class="row100 head">

              
              
              
            </tr>
          </thead>
        </table>
        <table>
              <thead>

            <tr class="row100 head">
              <th class="cell100 column1" style="font-family: Montserrat-Light; color:#f39c12; font-weight: 800; letter-spacing: 1px;">Article Name</th>
              <th class="cell100 column2" style="font-family: Montserrat-Light; color:#f39c12; font-weight: 800; letter-spacing: 1px;">Quantity</th>
              <th class="cell100 column3" style="font-family: Montserrat-Light; color:#f39c12; font-weight: 800; letter-spacing: 1px;">Action</th>
            </tr>
          </thead>
        </table>
      </div>
          
          <div class="table100-body js-pscroll">
            <table>
              <tbody>
              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity'] ?></td>
                <td class="cell100 column3" style="font-family: Montserrat-Light;"><a href="accept.php?id=<?php echo $row['id'] ?><?php echo $_SESSION["monitor_username"]; ?>" class="btn btn-dark btn-dm">Complete</a></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name1'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity1'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name2'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity2'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name3'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity3'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name4'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity4'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name5'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity5'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name6'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity6'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name7'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity7'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name8'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity8'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name9'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity9'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name10'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity10'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name11'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity11'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name12'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity12'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name13'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity13'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name14'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity14'] ?></td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1" style="font-family: Montserrat-Light; color: black;"><?php echo $row['article_name15'] ?></td>
                <td class="cell100 column2" style="font-family: Montserrat-Light; color: black;"><?php echo $row['quantity15'] ?></td>
              </tr>


            </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
                            
            <?php
                    }
                }else{
                    echo "No Pending Order Requests.";
                }
            ?>
      </div>        
<!--===============================================================================================-->  
  <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor1/bootstrap/js/popper.js"></script>
  <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor1/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>
<!--===============================================================================================-->
  <script src="js2/main.js"></script>
  

  </body>
</html>