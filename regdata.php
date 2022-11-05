<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$password = md5($_POST['password']);
$confirm_password = md5($_POST['confirm_password']);

$conn = new mysqli('localhost', 'root', '', 'pet_helper_user_database');
$ps=1;
$s = "select * from user_registered_database where email_address = '$email_address'";
$res = mysqli_query($conn, $s);
if($conn->connect_error){
	die('connection error :'.$conn->connect_error);
    
}

else{
		if(mysqli_num_rows($res)>0){
		
			echo
			 "<script>
			 alert('User Already Registered With This Email Address');
			 window.location.href = 'registration.html';
			 </script>";
		}
		if(($confirm_password==$password)  && (mysqli_num_rows($res)<=0)){
			$stmt = $conn->prepare("insert into user_registered_database(first_name, last_name,email_address,password) values(?,?,?,?)");
			$stmt->bind_param("ssss", $first_name, $last_name,$email_address,$password);
			$stmt->execute();
			$stmt->close();
			echo
			"<script>
			alert('Registration Successfull...');
			window.location.href = 'homeregister.php';
			</script>";
		}
		else{	
			echo
			"<script>
			alert('Password Not Match...');
			window.location.href = 'registration.html';
			</script>";
	}
	}
    
?>