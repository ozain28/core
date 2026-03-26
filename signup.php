<?php
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        echo "All fields required";
    } else {
        echo "Signup successful for $email";
    }
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <button name="signup">Signup</button>
</form>