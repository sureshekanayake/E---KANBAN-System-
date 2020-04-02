<?php
    include('../function.php');
    $id = $_GET['id'];
    $query = "select * from `orders` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $admin_name = $row['admin_name'];
            $epf_no = $row['epf_no'];
            $module_no = $row['module_no'];
            $shift = $row['shift'];
            $article_name = $row['article_name'];
            $quantity = $row['quantity'];
            $article_name1 = $row['article_name1'];
            $quantity1 = $row['quantity1'];
            $article_name2 = $row['article_name2'];
            $quantity2 = $row['quantity2'];
            $article_name3 = $row['article_name3'];
            $quantity3 = $row['quantity3'];
            $article_name4 = $row['article_name4'];
            $quantity4 = $row['quantity4'];
            $article_name5 = $row['article_name5'];
            $quantity5 = $row['quantity5'];
            $article_name6 = $row['article_name6'];
            $quantity6 = $row['quantity6'];
            $article_name7 = $row['article_name7'];
            $quantity7 = $row['quantity7'];
            $article_name8 = $row['article_name8'];
            $quantity8 = $row['quantity8'];
            $article_name9 = $row['article_name9'];
            $quantity9 = $row['quantity9'];
            $article_name10 = $row['article_name10'];
            $quantity10 = $row['quantity10'];
            $article_name11 = $row['article_name11'];
            $quantity11 = $row['quantity11'];
            $article_name12 = $row['article_name12'];
            $quantity12 = $row['quantity12'];
            $article_name13 = $row['article_name13'];
            $quantity13 = $row['quantity13'];
            $article_name14 = $row['article_name14'];
            $quantity14 = $row['quantity14'];
            $article_name15 = $row['article_name15'];
            $quantity15 = $row['quantity15'];
            $request_date = $row['request_date'];
            $complete_date = $row['complete_date'];
            $query = "INSERT INTO `complete_orders` (`id`,`admin_name`,`epf_no`,`module_no`, `shift`, `article_name`, `quantity`, `article_name1`, `quantity1`, `article_name2`, `quantity2`,`article_name3`,`quantity3`,`article_name4`,`quantity4`,`article_name5`,`quantity5`,`article_name6`,`quantity6`,`article_name7`,`quantity7`,`article_name8`,`quantity8`,`article_name9`,`quantity9`,`article_name10`,`quantity10`,`article_name11`,`quantity11`,`article_name12`,`quantity12`,`article_name13`,`quantity13`,`article_name14`,`quantity14`,`article_name15`,`quantity15`,`request_date`,`complete_date`,`deliver_date`) VALUES (NULL,'$admin_name','$epf_no','$module_no', '$shift', '$article_name', '$quantity', '$article_name1', '$quantity1', '$article_name2', '$quantity2','$article_name3','$quantity3','$article_name4','$quantity4','$article_name5','$quantity5','$article_name6','$quantity6','$article_name7','$quantity7','$article_name8','$quantity8','$article_name9','$quantity9','$article_name10','$quantity10','$article_name11','$quantity11','$article_name12','$quantity12','$article_name13','$quantity13','$article_name14','$quantity14','$article_name15','$quantity15','$request_date','$complete_date',CURRENT_TIMESTAMP);";
        }
        $query .= "DELETE FROM `orders` WHERE `orders`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    if ($row['module_no'] == 1) {
        header('location: ../request/requestpanel.php');
    }
    if ($row['module_no'] == 2) {
        header('location: ../request/requestpanel1.php');
    }
    if ($row['module_no'] == 3) {
        header('location: ../request/requestpanel2.php');
    }
    if ($row['module_no'] == 4) {
        header('location: ../request/requestpanel3.php');
    }
    if ($row['module_no'] == 5) {
        header('location: ../request/requestpanel4.php');
    }
    if ($row['module_no'] == 6) {
        header('location: ../request/requestpanel5.php');
    }
    if ($row['module_no'] == 7) {
        header('location: ../request/requestpanel6.php');
    }
    if ($row['module_no'] == 8) {
        header('location: ../request/requestpanel7.php');
    }
    if ($row['module_no'] == 9) {
        header('location: ../request/requestpanel8.php');
    }
    if ($row['module_no'] == 10) {
        header('location: ../request/requestpanel9.php');
    }
    if ($row['module_no'] == 11) {
        header('location: ../request/requestpanel10.php');
    }
    if ($row['module_no'] == 12) {
        header('location: ../request/requestpanel11.php');
    }
    
?>
