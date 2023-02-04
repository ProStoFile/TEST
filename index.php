<?php require("register.class.php") ?>
<?php
//if (isset($_POST['submit'])) {
//    $user = new RegisterUser($_POST['username'], $_POST['password'], $_POST['login']);
//}
require __DIR__ . "/check/registeruser.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <title>Register form</title>
</head>
<body>

<form id="loginform" action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <h2>Register form</h2>
    <h4>Both fields are <span>required</span></h4>

    <label>Login</label>
    <input type="text" name="login">

    <label>Password</label>
    <input type="text" name="password">

    <label>Email</label>
    <input type="text" name="email">

    <label>Username</label>
    <input type="text" name="username">

    <button type="submit" name="submit">Register</button>

    <p class="error">
        <?php echo @$user->error ?>
    </p>
    <p class="success"><?php echo @$user->success ?></p>
    <a href="login.php">Log in</a>
</form>

</body>
</html>