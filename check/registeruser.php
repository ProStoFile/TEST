<?php
if (isset($_POST['submit'])) {
    $user = new RegisterUser($_POST['username'],
        $_POST['password'],
        $_POST['login'],
        $_POST['email']);
}
?>
