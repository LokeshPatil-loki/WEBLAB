<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the name and start time in the session
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["start_time"] = time();

    // Redirect to the hello page
    header("Location: hello.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>