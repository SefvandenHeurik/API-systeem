<?php
@include 'config.php';

session_start();

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
    </div>
</body>

</html>
