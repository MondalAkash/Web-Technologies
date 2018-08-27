<?php
include("db_rwforpat.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["uname"])){
	//$sql="select * from student where name='".$_REQUEST["uname"]."'";
	$sql="select dname from doctor where dspecial like '".$_REQUEST["uname"]."%'";
	//echo $sql;
	$a=getDataFromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){
		//echo "<p>".$v["name"]." from ".$v["dept"]."</p>";
		echo "<option value='$v[dname]'>$v[dname]</option>"; 
		//echo "<p>".$v["name"]."</p>";
		//echo "<a href='details.php?uid=".$v['id']."'>".$v["name"]."</a><br/>";

	}
}
?>