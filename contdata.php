<?php
$conn = new mysqli('localhost', 'root', '', 'pet_helper_user_database');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$message = $_POST['message'];

if($conn->connect_error){
	die('connection error :'.$conn->connect_error);
    
}
else{
    $stmt = $conn->prepare("insert into user_contact_us_database(name, email,subject,number,message) values(?,?,?,?,?)");
			$stmt->bind_param("sssss", $name, $email,$subject,$number,$message);
			$stmt->execute();
			echo
			"<script>
			alert('Information has been sent Successfully...');
			window.location.href = 'homeregister.php';
			</script>";
			$stmt->close();
}
?>