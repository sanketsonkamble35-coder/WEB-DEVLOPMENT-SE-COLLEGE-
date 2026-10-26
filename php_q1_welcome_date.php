<?php
// PHP Q1: Display Welcome message and current server date & time

echo "<h2>Welcome to our Website!</h2>";

// Using built-in date() function
$currentDate = date("d-m-Y");           // e.g. 17-05-2026
$currentTime = date("h:i:s A");         // e.g. 10:30:45 AM
$fullDateTime = date("l, d F Y, h:i:s A"); // e.g. Sunday, 17 May 2026, 10:30:45 AM

echo "<p>Current Date: <strong>" . $currentDate . "</strong></p>";
echo "<p>Current Time: <strong>" . $currentTime . "</strong></p>";
echo "<p>Full Date & Time: <strong>" . $fullDateTime . "</strong></p>";
?>
