<?php 
require("../../config/db_connect.php");

if($_POST['type']==""){
    $sql = "SELECT * FROM `country`";
    $query = mysqli_query($conn,$sql) or die("Query Unsucessfull.");
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";      
    }
   
}elseif($_POST['type'] == "state_data"){
    $sql = "SELECT * FROM `state` WHERE country = {$_POST['id']}";
    $query = mysqli_query($conn,$sql) or die("Query Unsucessfull.");
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";      
    }
}
echo $str;
?>