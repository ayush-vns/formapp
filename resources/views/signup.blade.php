<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<?php
use App\signup;

$name = "";
$username = "";
$email ="";
$password="";
$status = "ok";

if (!isset($_POST['check'])) {
    $status = "0";
}
if ($status == "ok") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $signup = new signup();
    $signup->name = $name;
    $signup->username = $username;
    $signup->email = $email;
    $signup->password = $password;
    $signup->save();
    echo "save";
} else {
    echo "error";
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="">
                  @csrf
                    <input type="hidden" name="token" value="{{csrf_token()}}">
                    <input type="hidden" name="check" value="0">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="username" placeholder="Username">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="password" placeholder="Password">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
