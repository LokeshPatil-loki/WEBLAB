<?php
// Start the session
session_start();

// Check if the session variables are set
if (!isset($_SESSION["name"]) || !isset($_SESSION["start_time"])) {
    // Redirect to the welcome page
    header("Location: index.php");
    exit();
}

// Calculate the duration of usage
$end_time = time();
$duration = $end_time - $_SESSION["start_time"];

// Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Logout</title>
</head>

<body>
    <h1>Thank You,
        <?php echo $_SESSION["name"]; ?>
    </h1>
    <p>Duration of usage:
        <?php echo gmdate("H:i:s", $duration); ?>
    </p>
</body>

</html>