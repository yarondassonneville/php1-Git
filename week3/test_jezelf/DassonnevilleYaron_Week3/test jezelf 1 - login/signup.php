<?php
if(!empty($_POST)){
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $username = $_POST['username'];

    echo $email . $firstName . $lastName . $username;

    $options = [
        'cost' => 12
    ];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);

    echo $password;

    //connectie
    $conn = new mysqli('localhost', 'root', '', 'yaronlogin');
    if($conn->connect_errno){
        die("No database connection");
    }

    //query
    $query = "INSERT INTO users(email, lastname, firstname, username, password) VALUES ('$email', '$lastName', '$firstName', '$username', '$password')";

    if($conn->query( $query )){
        $success = "Welcome aboard!";
    }
    else{
        $success = "oeie";
    };
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="login-form-wrap">
    <div class="login">
        <div class="container">
            <div class="login-triangle"></div>
            <h2 class="login-header">Signup</h2>
    <form class="login-container" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <?php if( isset($success)): ?>
            <p class='error'><?php echo $success ?></p>
        <?php else: ?>
        <label>
            <input type="text" name="firstname" placeholder="First name">
        </label>
        <label>
            <input type="text" name="lastname" placeholder="Last name">
        </label>
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <label>
            <input type="email" name="email" placeholder="Email">
        </label>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <input type="submit" value="Register">
        <?php endif; ?>
    </form>
        </div>
</section>
</body>
</html>