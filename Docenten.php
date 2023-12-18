<?php
session_start();
@include 'config.php';

// Check if the user is logged in
if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name'];
} else {
    // Redirect to the login page if the user is not logged in
    header('Location:inlogdocent.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hoofdpagina</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>
</head>

<body class="body">
<div class="navbar">
      <img class="logo" src="img/GildeICT.png" alt="gildeOpleidingen.Models.Settings?.Websitename">
       <div class="toggle-button">
          <input type="checkbox" id="menu-toggle">
          <label for="menu-toggle" class="menu-icon">&#9776;</label>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
        </div>
      </div>
    <div class="btnLogout">
        <form method="POST" action="logout.php">
            <button type="submit" name="logout" class="btnlogout" >Logout</button>
        </form>
    </div>
    <div id="btnAccount";>
                <a href="register_form.php" class="btnAccount">Account</a>

            </div>
    <div class="tekstbox1">
        <form id="myForm" method="POST" action="">
            <input type="text" id="textInput" placeholder="Type here">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>