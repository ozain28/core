<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "test@gmail.com" && $password == "123456"){
        echo "Login Successful";
    } else {
        echo "Invalid Credentials";
    }
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <button name="login">Login</button>
</form>