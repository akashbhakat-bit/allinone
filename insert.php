<?php
$name=$_POST('name');
$work=$_POST['work'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$address=$_POST['address'];
$aadhar=$_POST['aadhar'];

if (!empty($name)||empty($work)||empty($email)||empty($telephone)||empty($address)||empty($aadhar){
	$host='localhost';
	$dbUsername='username';
	$dbPassword='password';
	$dbname='id0777102_workerdetails';
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error(',mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		$sql="INSERT INTO workerdetails VALUES('$name','$work','$email','$telephone','$address','$aadhar')";
		if($conn->query($sql)){
			echo "New record is inserted successfully";
		}
	else{echo "Errot:".$sql."<br>".$conn->error;} $conn->close();
}
echo "aadhar should not be empty";
die();
}
?>

		