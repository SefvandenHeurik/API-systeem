



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Your head content here -->
</head>

<body class="body">
  <div class="navbar">
    <!-- Your navbar content here -->
  </div>

  <?php
  // Include the configuration file
  include 'config.php';

  // Retrieve Data from the Database
  $sql = "SELECT Tekst, Tijdstempel, name FROM meldingen";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
          // Process each row's data
          $text = $row["Tekst"];
          $timestamp = $row["Tijdstempel"];
          $name = $row["name"];

          // Display or process the data as needed
          echo "<div class='container'>";
          echo "<p>Tekst: $text</p>";
          echo "<p>Tijdstempel: $timestamp</p>";
          echo "<p>Name: $name</p>";
          echo "</div>";
      }
  } else {
      echo "0 results";
  }

  // Close the database connection
  $conn->close();
  ?>

  <div class="container">
    <!-- The fetched data will be displayed here -->
  </div>

  <!-- Your scripts and closing body/html tags here -->
</body>

</html>
