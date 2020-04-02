
<?php

if(isset($_POST["From"], $_POST["to"]))
{
$conn = mysqli_connect("localhost", "root", "", "E_KANBAN");
$result = '';
$query = "SELECT * FROM complete_orders WHERE request_date BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
$sql = mysqli_query($conn, $query);
$result .='
<div class="clearfix"></div>
<br/>
<div id="purchase_order">
<table class="table table-bordered">
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
</tr>';
if(mysqli_num_rows($sql) > 0)
{
while($row = mysqli_fetch_array($sql))
{
$result .='
<tr>
<td><h2 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;">'.$row["module_no"].'</h2></td>
<td><h2 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;">'.$row["shift"].'</h2></td>
<td><h3 style="text-align: center; font-family: Montserrat-Light; font-size: 21px;"><label>Username</label><br>'.$row["admin_name"].'</h3><hr><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;"><label>E.P.F. Number</label><br>'.$row["epf_no"].'</h3 style="text-align: center;"></td>
<td><h4 style="text-align: center; font-family: Montserrat-Light; font-size: 21px; line-height: 0.3; ">'.$row["article_name"].'<hr>
            '.$row["article_name1"].'<hr>
            '.$row["article_name2"].'<hr>
            '.$row["article_name3"].'<hr>
            '.$row["article_name4"].'<hr>
            '.$row["article_name5"].'<hr>
            '.$row["article_name6"].'<hr>
            '.$row["article_name7"].'<hr>
            '.$row["article_name8"].'<hr>
            '.$row["article_name9"].'<hr>
            '.$row["article_name10"].'<hr>
            '.$row["article_name11"].'<hr>
            '.$row["article_name12"].'<hr>
            '.$row["article_name13"].'<hr>
            '.$row["article_name14"].'<hr>
            '.$row["article_name15"].'<hr></h4></td>

<td><h4 style="text-align: center; font-size: 21px; font-family: Montserrat-Light; line-height: 0.3;">'.$row["quantity"].'<hr>
            '.$row["quantity1"].'<hr>
            '.$row["quantity2"].'<hr>
            '.$row["quantity3"].'<hr>
            '.$row["quantity4"].'<hr>
            '.$row["quantity5"].'<hr>
            '.$row["quantity6"].'<hr>
            '.$row["quantity7"].'<hr>
            '.$row["quantity8"].'<hr>
            '.$row["quantity9"].'<hr>
            '.$row["quantity10"].'<hr>
            '.$row["quantity11"].'<hr>
            '.$row["quantity12"].'<hr>
            '.$row["quantity13"].'<hr>
            '.$row["quantity14"].'<hr>
            '.$row["quantity15"].'<hr></h4></td>

</td>
<td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;">'.$row["request_date"].'</h3></td>
<td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;">'.$row["complete_date"].'</h3></td>
<td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;">'.$row["Time"].'</h3></td>
<td><h3 style="text-align: center; font-size: 21px; font-family: Montserrat-Light;">'.$row["DeliverTime"].'</h3></td>


</tr>'
;
}
}
else
{
$result .='
<tr>
<td style="font-size:24px; font-family: Montserrat-Light; text-align: center;" colspan="9">No Request Details Found</td>
</tr>';
}
$result .='</table>';
echo $result;
}
?>