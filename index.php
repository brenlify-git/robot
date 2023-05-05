<?php
session_start();

$users = array(
    array("name" => "Sam Espino", "email" => "sam@gmail.com", "password" => "secret1"),
    array("name" => "Shae Smith", "email" => "shae@gmail.com", "password" => "secret2"),
    array("name" => "Third Lee", "email" => "third@gmail.com", "password" => "secret3")
);

$_SESSION['accounts'] = $users;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

   
    foreach ($users as $user) {
        if ($user["email"] == $email && $user["password"] == $password) {
            $_SESSION["user"] = $user["name"];
            header("Location: profile.php"); 
            exit;
        }
    }
    $error = "Invalid email or password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="outer">
        <div class="container">
            <div class="textBox">
                <img src="images/robot.png" alt="" class="imgLogo"> <br>
                <div class="inputbox">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input type="text" class="intbox" placeholder=" Email Address" title="Please fill out the field" name="email" required> <br>
                        <input type="password" class="intbox" placeholder=" Password" title="Please fill out the field" name="password" required> <br>
                        <button class="btn" type="submit">Sign In</button>
                        <button class="btn" type="reset">Clear</button>
                    </form>
                    <?php 
                    if (isset($error)) { 
                        header("location:register.html");
                       
                 } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>