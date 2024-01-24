<?php
session_start();
@include 'config.php';

if (isset($_POST['submit'])) {

    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $pass = isset($_POST['password']) ? md5($_POST['password']) : '';

    // Note: Avoid using md5 for password hashing, use more secure methods like password_hash

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

         {
            $_SESSION['user_name'] = $row['name'];
            header('location: Docenten.php');
        }
    } else {
        $error[] = 'Onjuist e-mail of wachtwoord!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>
    <title>Docent Inlog</title>
</head>

<body>

    <div class="containerdocenteninlog">

        <div>
            <p>Docent Inlog</p>
        </div>

     

        <?php
        if (isset($error)) {
            foreach ($error as $errorMessage) {
                echo '<span class="error-msg">' . $errorMessage . '</span>';
            };
        }
        ?>

        <form method="POST" action="">
            <div class="loginInputFieldDocenten">
                <input type="email" name="email" placeholder="Email.." id="email">
            </div>

            <div class="loginInputFieldDocenten">
                <input type="password" name="password" placeholder="Wachtwoord.." id="password">
            </div>

            <div id="loginForgotPasswordDocenten" style="display: flex background-color#eeee";>
                <a href="index.html" class="loginForgotPasswordDocenten">Ga terug</a>
                <button type="submit" name="submit">Inloggen</button>
            </div>
        </form>
    </div>

</body>

</html>
