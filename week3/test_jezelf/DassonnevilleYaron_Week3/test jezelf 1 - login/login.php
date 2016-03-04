<?php
session_start();

function canLogin( $p_username, $p_password ){
    $conn = new mysqli('localhost', 'root', '', 'yaronlogin');

    $sql = "select * from users
            where username = '".$conn->real_escape_string($p_username)."'";

    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        $hash = $user['password'];

        if(password_verify($p_password, $hash)) {
            return true;
        }
        else{
            return false;
        }
    }
    else {
        return false;
    };
}
if( !empty( $_POST ) ){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( canLogin( $username, $password ) ){
        $error = "You logged in";
        $_SESSION['loggedinFact'] = true;
        $_SESSION['loggedin'] = "yes";
        // redirect to index.php
        //header('location: index.php');

    }
    else{
        // feedback
        $error = "Woops, cannot login.";
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <!-- LAYOUT BY ED BOND: http://codepen.io/edbond88/pen/yGjAu -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="login-form-wrap">
    <div class="login">
        <div class="container">
        <div class="login-triangle"></div>

        <h2 class="login-header">Log in</h2>
    <form class="login-container" method="POST" action="">
        <?php if( isset($error) ): ?>
            <p class='error'><?php echo $error ?></p>
            <?php endif ?>
        <?php if(isset($_SESSION['loggedin'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
        <p>
            <input type="text" name="username" placeholder="Username">
        </p>
        <p>
            <input required type="password" name="password" placeholder="Password">
        </p>
        <input type="submit" value="Login">
        <?php endif; ?>
    </form>
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "yes"): ?>

                <?php else: ?>
    <h5><a href="signup.php">Signup</a></h5>
            <?php endif; ?>
        </div>
</section>
</body>
</html>