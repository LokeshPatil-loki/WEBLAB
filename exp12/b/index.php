<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .calculator {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 10px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
        }

        .watermark {
            position: absolute;
            top: 150px;
            right: 50%;
            font-size: 40px;
            color: rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <p class="watermark">Ziya</p>

    <div class="calculator">
        <form method="post">
            <div class="input-group">
                <input type="text" name="num1" placeholder="Enter first number">
            </div>
            <div class="input-group">
                <input type="text" name="num2" placeholder="Enter second number">
            </div>
            <button type="submit" name="add">Add</button>
            <button type="submit" name="subtract">Subtract</button>
            <button type="submit" name="multiply">Multiply</button>
            <button type="submit" name="divide">Divide</button>
        </form>
        <?php
        if (isset($_POST['add'])) {
            $result = $_POST['num1'] + $_POST['num2'];
            echo "<p class='result'>Result: $result</p>";
        } elseif (isset($_POST['subtract'])) {
            $result = $_POST['num1'] - $_POST['num2'];
            echo "<p class='result'>Result: $result</p>";
        } elseif (isset($_POST['multiply'])) {
            $result = $_POST['num1'] * $_POST['num2'];
            echo "<p class='result'>Result: $result</p>";
        } elseif (isset($_POST['divide'])) {
            if ($_POST['num2'] == 0) {
                echo "<p class='result'>Cannot divide by zero</p>";
            } else {
                $result = $_POST['num1'] / $_POST['num2'];
                echo "<p class='result'>Result: $result</p>";
            }
        }
        ?>
    </div>
</body>

</html>