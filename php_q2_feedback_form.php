<?php
// PHP Q2: Capture and display Username and Feedback via $_POST

$username = "";
$feedback = "";
$message  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use htmlspecialchars() to prevent XSS (display securely)
    $username = htmlspecialchars(trim($_POST["username"]));
    $feedback = htmlspecialchars(trim($_POST["feedback"]));

    if ($username !== "" && $feedback !== "") {
        $message = "<p style='color:green;'><strong>Thank you, " . $username . "!</strong><br>
                    Your feedback: <em>" . $feedback . "</em></p>";
    } else {
        $message = "<p style='color:red;'>Please fill in all fields.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <style>
    body { font-family: Arial, sans-serif; max-width: 450px; margin: 40px auto; }
    input, textarea { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
    button { margin-top: 12px; padding: 10px 20px; background: #4caf50; color: #fff; border: none; cursor: pointer; }
  </style>
</head>
<body>

  <h2>Feedback Form</h2>

  <!-- HTML form that sends data via POST -->
  <form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" placeholder="Your name" value="<?php echo $username; ?>">

    <label style="margin-top:12px; display:block;">Feedback:</label>
    <textarea name="feedback" rows="4" placeholder="Write your feedback here..."><?php echo $feedback; ?></textarea>

    <button type="submit">Submit Feedback</button>
  </form>

  <!-- Display captured data -->
  <?php echo $message; ?>

</body>
</html>
