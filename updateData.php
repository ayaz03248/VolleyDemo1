<?php
$name =$_POST["name"];
$email = $_POST["email"];


$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "std";

$con = mysqli_connect($hostname,$username,$password,$dbname);



$sql = "insert into stdinfo(name,email) values('".$name."','".$email."');";



if(mysqli_query($con,$sql)){
	
	
	echo "Data Inserted Successfully";
}
else{
	echo "Data Insertion Failed";
	
}


mysqli_close($con);

?>