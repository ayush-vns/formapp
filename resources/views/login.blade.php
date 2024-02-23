<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<?php
session_start();
use App\loginmanager;
use App\signup;


$username = "";
$password="";
$status = "ok";
$message="";
$currentuser="";

if (!isset($_POST['check'])) {
    $status = "0";
}
if ($status == "ok") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = LoginManager::isUserNameAndPasswordCorrect($username, $password);
 
 if(!$message){
        $message="username or password wrong";
    }
 else {
   $_SESSION['username']=$username;
   $currentuser= $_SESSION['username'];

   $message="login Success";
}
}
?>


<body>
    

<form method="POST" action="">
    <input type="hidden" name="check" value="0">
    @csrf
<?php echo $message?>
<div class="row">
    <div class="col-md-12"><?php echo $currentuser?></div>
</div>

    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password"  required>

    <button type="submit">Login</button>
</form>



</body>
</html>