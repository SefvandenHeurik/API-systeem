<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:inlogdocent.php');
  
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="main.js"></script>
<body>

    <div class="tekstbox1">
    <form id="myForm">
        <input type="text" id="textInput" placeholder="Typ hier">
        <button type="submit">Verzenden</button>
      </form>
    </div>

</body>
</html>