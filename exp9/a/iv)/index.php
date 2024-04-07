<!DOCTYPE html>
<html>

<head>
    <title>Cookie Manager</title>
</head>

<body>
    <h1>Cookie Manager</h1>

    <h2>List Cookies</h2>
    <button onclick="listCookies()">List Cookies</button>
    <div id="cookieList"></div>

    <h2>Add Cookie</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Cookie Name: <input type="text" name="cookieName" required><br>
        Cookie Value: <input type="text" name="cookieValue" required><br>
        <input type="submit" name="addCookie" value="Add Cookie">
    </form>

    <script>
        function listCookies() {
            var cookies = document.cookie.split(";");
            var cookieList = "";
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].trim();
                if (cookie) {
                    var cookieParts = cookie.split("=");
                    var cookieName = cookieParts[0];
                    var cookieValue = decodeURIComponent(cookieParts[1]);
                    cookieList += cookieName + ": " + cookieValue + "<br>";
                }
            }
            document.getElementById("cookieList").innerHTML = cookieList;
        }
    </script>

    <?php
    if (isset($_POST['addCookie'])) {
        $cookieName = $_POST['cookieName'];
        $cookieValue = $_POST['cookieValue'];
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); // Set cookie for 30 days
        echo "Cookie added: " . $cookieName . "=" . $cookieValue;
    }
    ?>
</body>

</html>