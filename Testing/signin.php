<?php
$alerttt = '';
include 'config.php';
if(isset($_POST['sign_btn'])){
$email = $_POST['email'];
$password = $_POST['passwordd'];
$cpassword = $_POST['cpasswordd'];
$name = $_POST['namme'];
//check connection
if ($con->connect_error)
die("Connection failed: " .$con->connect_error);
else{
    //check if passwords match
    if($password == $cpassword){
$stmt = $con->prepare("INSERT INTO users (username, name, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $name, $password);
$stmt->execute();
$stmt->close();
$con->close();
$alerttt = '<div class="alerttt-success">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
     <span>Your account has been created !</span>  
        </div>';
}
else
    $alerttt = '<div class="alerttt-error">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
    <span>Passwords don`t match !</span>
    </div>';}
}

?>