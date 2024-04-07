<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-top: 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>User Login</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "weblab";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");

            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($password == $row["password"]) {
                    echo "<p class='message'>Login successful!</p>";
                } else {
                    echo "<p class='message'>Incorrect password!</p>";
                }
            } else {
                echo "<p class='message'>Username not found!</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <!-- HTML form for user login -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>