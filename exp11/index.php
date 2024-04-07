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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $xml = simplexml_load_file("users.xml");

            $user = $xml->xpath("//user[username='" . $username . "']");
            if (!empty($user) && (string) $user[0]->password == $password) {
                echo "<p class='message'>Login successful!</p>";
            } else {
                echo "<p class='message'>Incorrect username or password!</p>";
            }
        }
        ?>

        <!-- HTML form for user login -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>