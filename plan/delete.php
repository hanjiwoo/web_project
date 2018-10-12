<?php
 include "./dbconnect.php";

if(isset($_POST["id"]))
{
	$delid=$_POST["id"];
	mysqli_query($mysqli,"DELETE from plan WHERE plan_id=$delid");

}

?>