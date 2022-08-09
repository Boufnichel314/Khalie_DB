<?php 
include 'login.php';
include 'config.php';
// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['uname']; ?></h1>
    <a href="index.php">Logout</a>
</body>
</html>
<?php