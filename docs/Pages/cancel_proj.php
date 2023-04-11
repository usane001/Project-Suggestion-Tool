<?php
include '../Pages/includes/dbh.inc.php';

$query= mysqli_query($conn,"DELETE from projects where project_id = '".$_GET['id']."'");
if($query){
	header("location:fggs.php?page=SuggestProject&io=1");
}
?>