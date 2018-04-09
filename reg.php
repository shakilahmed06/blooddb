<?php
$hostname = "localhost";
$username = "root";

	$password = "";

	$dbname = "bdb";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

$name = $_POST['name'];
$student_id =$_POST['student_id'];
$dob = $_POST['dob'];
$blood_group = $_POST['blood_group'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$password = ($_POST['password']);


$sql = "INSERT INTO `doner` (`name`, `student_id`, `dob`, `blood_group`, `gender`, `contact`,`password`) VALUES('$name','$student_id','$dob','$blood_group','$gender','$contact', '$password')";

if ($conn->query($sql) === TRUE) {
     header("Location: /blood/success.php"); /* Redirect browser */
     exit();
} else {
         echo "Error: " . $sql . "<br>" . $conn->error;
		 header("Location: /blood/fail.php"); /* Redirect browser */
     exit();
    }


?>