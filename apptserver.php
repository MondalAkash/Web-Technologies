<?php
include("db_rwforpat.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["uname"])){
	//$sql="select * from student where name='".$_REQUEST["uname"]."'";
	$sql="select d.dfrom,d.dto from doctor d where d.dname='".$_REQUEST['uname']."'";
	//echo $sql;
	$a=getDataFromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	
	$starttime = $a['dfrom'];  // your start time
	$endtime = $a['dto'];  // End time
	$duration = '15';  // split by 15 mins
	 
	$array_of_time = array ();
	$start_time    = strtotime ($starttime); //change to strtotime
	$end_time      = strtotime ($endtime); //change to strtotime
	 
	$add_mins  = $duration * 60;
	 
	while ($start_time <= $end_time) // loop between time
	{
	   $array_of_time[] = date ("h:i", $start_time);
	   $start_time += $add_mins; // to check endtie=me
	}
	for($i = 0; $i < sizeof($array_of_time); $i++)
	{
		//$ti = $i+1;
		//echo "<option value='$array_of_time[$i]--$array_of_time[$i+1]'>$array_of_time[$i] -- $array_of_time[$i+1]</option>"; 
		//echo "<li>".$array_of_time[$i]."--".$array_of_time[$i+1]."</li>";
		echo $array_of_time[$i] ."to" .$array_of_time[$i+1]."<br />" ; 
	}
	/*echo '<pre>';
print_r($array_of_time);
echo '</pre>';*/

	
	/*foreach($a as $v){
		//echo "<p>".$v["name"]." from ".$v["dept"]."</p>";
		echo "<option value='$v[dname]'>$v[dname]</option>"; 
		//echo "<p>".$v["name"]."</p>";
		//echo "<a href='details.php?uid=".$v['id']."'>".$v["name"]."</a><br/>";

	}*/
}
?>