<?php
// Start the session
session_start();

// Check if the session variables are set
if (!isset($_SESSION["name"]) || !isset($_SESSION["start_time"])) {
    // Redirect to the welcome page
    header("Location: index.php");
    exit();
}

// Get the start time from the session
$start_time = $_SESSION["start_time"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Hello,
        <?php echo $_SESSION["name"]; ?>
    </title>
    <style>
        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
        }
    </style>
</head>

<body>
    <h1>Hello,
        <?php echo $_SESSION["name"]; ?>
    </h1>
    <div class="top-right">
        Start Time:
        <?php echo date("h:i:s A", $start_time); ?>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>