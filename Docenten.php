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

if(isset($_POST['submit'])){
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    // Assuming you have a 'meldingen' table in your database
    $query = "INSERT INTO meldingen (`name`, `tekst`) VALUES ('$username', '$text')";

    // Perform the query
    if(mysqli_query($conn, $query)){
        // Data successfully inserted
        echo '<script>alert("Message inserted successfully"); window.location.href="docenten.php";</script>';
        exit(); // terminate script execution to prevent further processing
    } else {
        // Display an error message if the query fails
        echo "Error: " . mysqli_error($conn);
    }
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
        
        <form method="POST" action="logout1.php">
            <button class="btnmainscreen" type="submit" name="logout1" class="btnlogout1" ></button>    
        </form> 

        <form method="POST" action="logout.php">
            <button  class="btnlogout" type="submit" name="logout" class="btnlogout" >Logout</button> 
        </form>    

        <div class="toggle-button">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <div class="btnLogout">

        </div>
        <div id="btnAccount";>
                    <a class="btnaccount" href="register_form.php" class="btnAccount">Account</a>
                </div>

            <div class="tekstbox1">
            <form id="myForm" method="POST" action="">
                <input type="text" name="text" required placeholder="vul je bericht in">
                <button class="submitbtn" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>