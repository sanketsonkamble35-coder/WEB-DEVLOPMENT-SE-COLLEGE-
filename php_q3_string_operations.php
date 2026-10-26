<?php
// PHP Q3: String operations – length, reverse, and substring

$inputString = "Engineering";   // You can change this string

// 1. Total length of the string
$length = strlen($inputString);

// 2. Reversed version of the string
$reversed = strrev($inputString);

// 3. Extract a specific 5-character substring (starting from position 0)
$substring = substr($inputString, 0, 5);   // "Engin"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP String Operations</title>
  <style>
    body { font-family: Arial, sans-serif; max-width: 400px; margin: 40px auto; }
    table { border-collapse: collapse; width: 100%; margin-top: 15px; }
    th, td { border: 1px solid #ccc; padding: 10px; }
    th { background: #f0a500; }
  </style>
</head>
<body>

  <h2>PHP String Operations</h2>

  <table>
    <tr><th>Operation</th><th>Result</th></tr>
    <tr><td>Original String</td><td><?php echo $inputString; ?></td></tr>
    <tr><td>Total Length (strlen)</td><td><?php echo $length; ?></td></tr>
    <tr><td>Reversed (strrev)</td><td><?php echo $reversed; ?></td></tr>
    <tr><td>Substring – first 5 chars (substr)</td><td><?php echo $substring; ?></td></tr>
  </table>

</body>
</html>
