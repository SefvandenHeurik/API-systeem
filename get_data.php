<?php
include 'config.php';

$sql = "SELECT Tekst, Tijdstempel, name FROM meldingen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output table header
    echo "<table>";
    echo "<tr><th>Tekst</th><th>Tijdstempel</th><th>Naam</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Process each row's data
        $text = $row["Tekst"];
        $timestamp = $row["Tijdstempel"];
        $name = $row["name"];

        // Display data in table rows
        echo "<tr class='php-generated-row'>";
        echo "<td>$text</td>";
        echo "<td>$timestamp</td>";
        echo "<td>$name</td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

