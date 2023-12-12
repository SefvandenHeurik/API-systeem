<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:inlogdocent.php');
    exit();
}

if (isset($_POST['submit'])) {

    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $pass = isset($_POST['password']) ? md5($_POST['password']) : '';

    // Note: Avoid using md5 for password hashing, use more secure methods like password_hash

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            header('location: docenten.php');
        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            header('location: docenten.php');
        }
    } else {
        $error[] = 'Incorrect email or password!';
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
    <title>Docenten Login</title>
</head>

<body>

    <div class="containerdocenteninlog">

        <div>
            <p>Docenten Login</p>
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
                <input type="password" name="password" placeholder="Password.." id="password">
            </div>

            <div id="loginForgotPasswordDocenten" style="display: flex;">
                <a href="#" class="loginForgotPasswordDocenten">Register</a>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
