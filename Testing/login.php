<?php
if(isset($_POST['but_submit'])){
    $alertt = '';
    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            $alertt = '<div class="alertt-success">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
     <span>You are logged in !</span>  
        </div>';
        session_destroy();
        session_start();
        }else{
            // echo "Invalid username and password";/
            $alertt = '<div class="alertt-error">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
            <span>Invalid username or password !</span>
            </div>';
        }

    }

}
?>