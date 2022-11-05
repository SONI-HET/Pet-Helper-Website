<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$department = $_POST['department'];
$date = $_POST['date'];
$time = $_POST['time'];

$conn = new mysqli('localhost', 'root', '', 'pet_helper_user_database');

if($conn->connect_error){
	die('connection error :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user_appointment_database(name, email,subject,number,department,date,time) values(?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssss", $name, $email,$subject,$number,$department,$date,$time);
			$stmt->execute();
			echo
			"<script>
			alert('Your Appointment Has Been Sent Successfully...!!!');
			window.location.href = 'homeregister.php';
			</script>";
			$stmt->close();
}
?>