<?php
if(!empty($_POST)){
    $email = $_POST['email'];
    $options = [
        'cost' => 12 //Tot de 12de keer (2 tot de 12) ==> bcrypt ==> Hoe groter hoe langer het duurt
    ];

    //Telkens nieuwe salt ==> beter encrypteren ==> Random salt ==> Ergens stockeren (DB)
    /*$pass = "test";
    $salt = "qjhsqdjhfqlshdfjhDDDD!!";
    md5($pass.$salt);*/

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
//DEFAULT IS HET BESTE
    //connectie
    $conn = new mysqli('localhost', 'root', '', 'imd');
    if($conn->connect_errno){
        die("No database connection");
    }

    //query
    $query = "INSERT INTO users(email, password) VALUES ('$email', '$password');" ;
    //echo $query;
    if($conn->query( $query )){
        $success = "Welcome aboard!";
    };
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <!-- LAYOUT BY ED BOND: http://codepen.io/edbond88/pen/yGjAu -->
    <link rel="stylesheet" href="css/facebook.css">
</head>
<body>
<section class="login-form-wrap">
    <h1>Facebook</h1>
    <?php if( isset($success)){
        echo "<p class='message'>$success</p>";
    } ?>
    <form class="login-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>
            <input type="email" name="email" placeholder="Email">
        </label>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <input type="submit" value="Login">
    </form>
    <h5><a href="#">Forgot password</a></h5>
</section>
</body>
</html>