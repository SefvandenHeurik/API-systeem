<?php
session_start();
@include 'config.php';

// Check if the user is logged in
if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name'];
    echo "Welcome, $username!"; // Display a welcome message or any other content for logged-in users
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

<body>
    <div class="tekstbox1">
        <form id="myForm" method="POST" action="">
            <input type="text" id="textInput" placeholder="Type here">
            <button type="submit" name="submit">Submit</button>
        </form>
        
        <!-- Logout Form -->
        <form method="POST" action="logout.php">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>

</html>
