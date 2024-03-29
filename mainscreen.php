<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="main.js"></script>
  <title>mainscreen</title>
</head>

<body class="body">
  <div class="navbar">
    <img class="logo" src="img/GildeICT.png" alt="gildeOpleidingen.Models.Settings?.Websitename">
    <img class="Devops" src="img/DevOps.png" alt="gildeOpleidingen.Models.Settings?.Websitename">

    <div id="logoutButton2">
      <button onclick="redirectToindex()"></button>
    </div>

    <div class="toggle-button">
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>

  <div class="container">
    <?php
    // Include the configuration file
    include 'config.php';

    // Include the PHP code to fetch and display data
    include 'get_data.php';
    ?>
  </div>

  <div class="container2">
</div>
  <div class="container3"></div>

  <script>
    // Vervang 'Het weer API pagina/index.html' door het juiste pad naar je pagina
    var pagePathContainer2 = 'nsNL.html';
    var pagePath = 'Het weer API pagina/index.html';
    const refreshMinutes = 10;
    const refreshTimer = 60 * 1000 * refreshMinutes;

    // Functie om de inhoud van de pagina in container2 in te voegen
    function loadPageContainer2() {
      
      var container2 = document.querySelector('.container2');
      container2.innerHTML = '';
      var iframe = document.createElement('iframe');
      iframe.src = pagePathContainer2;
      iframe.style.width = '100%';
      iframe.style.height = '100%';
      iframe.style.border = 'none';

      // Hide both horizontal and vertical scrollbars
      iframe.style.overflow = 'hidden';

      container2.appendChild(iframe);
    }

    // Functie om de inhoud van de pagina in container2 in te voegen
    function loadPageContainer3() {
      
      var container3 = document.querySelector('.container3');
      container3.innerHTML = ''; // Leeg de inhoud van container2
      var iframe = document.createElement('iframe');
      iframe.src = pagePath;
      iframe.style.width = '100%';
      iframe.style.height = '100%';
      iframe.style.border = 'none'; // Optional: Remove iframe border

      // Hide both horizontal and vertical scrollbars
      iframe.style.overflow = 'hidden';

      // Wait for the iframe content to load
      iframe.onload = function () {
        // Access the iframe content document
        var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

        // Hide scrollbars within the iframe content
        iframeDocument.body.style.overflow = 'hidden';
      };

      container3.appendChild(iframe);
 
    }

    // Functie om de inhoud van de pagina in container2 in te voegen
    function loadPage() {
      var container3 = document.querySelector('.container3');
      container3.innerHTML = ''; // Leeg de inhoud van container2
      var iframe = document.createElement('iframe');
      iframe.src = pagePath;
      iframe.style.width = '100%';
      iframe.style.height = '100%';
      iframe.style.border = 'none'; // Optional: Remove iframe border

      // Hide both horizontal and vertical scrollbars
      iframe.style.overflow = 'hidden';

      // Wait for the iframe content to load
      iframe.onload = function () {
        // Access the iframe content document
        var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

        // Hide scrollbars within the iframe content
        iframeDocument.body.style.overflow = 'hidden';
      };

      container3.appendChild(iframe);
    }
    // Laad de pagina's wanneer de pagina is geladen
    window.onload = function () {
      loadPageContainer2();
      loadPageContainer3();
      loadPage();
   
    };

    /*refresh functie dat de site zich opnieuw laad per x minuten. 
    Dit is puur voor de 2 apis zodat de website zich niet constant herlaad.*/ 
     function refresh() {
      location.reload(true); // Reload the entire page
      setTimeout(refresh, refreshTimer);
    };
    
    setTimeout(refresh, refreshTimer);
  </script>
</body>

</html>
