<?php
// echo  'hi';
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'pet_helper_user_database');
$userid = $_POST['userid'];
$usrpsw  = md5($_POST['usrpsw']);
$s = "select * from user_registered_database where email_address = '$userid' && password = '$usrpsw'" ;
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
        echo
        "<script>
        alert('Login Successfull');
        window.location.href = 'homeregister.php';
        </script>";    
    
}
else{
        echo
         "<script>
         alert('Invalid Information Try Again...!!!');
         window.location.href = 'index.html';
         </script>";
}


?>