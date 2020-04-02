<?php

$connect = new PDO("mysql:host=localhost;dbname=E_KANBAN", "root", "");

$start_date_error = '';
$end_date_error = '';

if(isset($_POST["export"]))
{
 if(empty($_POST["start_date"]))
 {
  $start_date_error = '<label class="text-danger">Start Date is required</label>';
 }
 else if(empty($_POST["end_date"]))
 {
  $end_date_error = '<label class="text-danger">End Date is required</label>';
 }
 else
 {
  $file_name = 'Orders History.csv';
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Type: application/csv;");

  $file = fopen('php://output', 'w');

  $header = array("Order ID", "Requested By", "Module No.", "Shift", "Article 1", "Article 2", "Article 3", "Article 4", "Article 5", "Article 6", "Article 7", "Article 8", "Article 9", "Article 10", "Article 11", "Article 12", "Article 13", "Article 14", "Article 15", "Request Date", "Complete Date", "Time to Complete");

  fputcsv($file, $header);

  $query = "
  SELECT * FROM orders 
  WHERE request_date >= '".$_POST["start_date"]."' 
  AND request_date <= '".$_POST["end_date"]."' 
  ORDER BY request_date DESC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $data = array();
   $data[] = $row["id"];
   $data[] = $row["admin_name"] . PHP_EOL . 
             $row["epf_no"];
   $data[] = $row["module_no"];
   $data[] = $row["shift"];
   $data[] = $row["article_name"] . PHP_EOL . 
             $row["quantity1"];
   $data[] = $row["article_name2"] . PHP_EOL . 
             $row["quantity2"];
   $data[] = $row["article_name3"] . PHP_EOL . 
             $row["quantity3"];
  $data[] = $row["article_name4"] . PHP_EOL . 
             $row["quantity4"];
  $data[] = $row["article_name5"] . PHP_EOL . 
            $row["quantity5"];
  $data[] = $row["article_name6"] . PHP_EOL . 
            $row["quantity6"];
  $data[] = $row["article_name7"] . PHP_EOL . 
            $row["quantity7"];
  $data[] = $row["article_name8"] . PHP_EOL . 
            $row["quantity8"];
  $data[] = $row["article_name9"] . PHP_EOL .           
            $row["quantity9"];
  $data[] = $row["article_name10"] . PHP_EOL . 
            $row["quantity10"];
  $data[] = $row["article_name11"] . PHP_EOL . 
            $row["quantity11"];
  $data[] = $row["article_name12"] . PHP_EOL . 
            $row["quantity12"];
  $data[] = $row["article_name13"] . PHP_EOL . 
            $row["quantity13"];
  $data[] = $row["article_name14"] . PHP_EOL . 
            $row["quantity14"];
  $data[] = $row["article_name15"] . PHP_EOL . 
            $row["quantity15"];
  $data[] = $row["request_date"];
  $data[] = $row["complete_date"];
  $data[] = $row["Time"];
   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "
SELECT * FROM orders 
ORDER BY request_date DESC;
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>

<html>
 <head>
  <title>Extract Data to Excel Sheet</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
 </head>
 <body>
  <div class="container box">
    <h1>Please Select Date for the Get Order Details</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div class="row">
     <form method="post">
      <div class="input-daterange">
       <div class="col-md-4">
        <input type="text" name="start_date" class="form-control" placeholder="Date From" readonly />
        <?php echo $start_date_error; ?>
       </div>
       <div class="col-md-4">
        <input type="text" name="end_date" class="form-control" placeholder="Date To" readonly />
        <?php echo $end_date_error; ?>
       </div>
      </div>
      <div class="col-md-3">
       <input type="submit" name="export" value="Export" class="btn btn-info" />
      </div>
     </form>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });
});

</script>
