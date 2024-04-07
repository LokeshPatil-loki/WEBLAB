<!DOCTYPE html>
<html>

<head>
    <title>Current Date, Time, and Day</title>
    <style>
        .watermark {
            position: absolute;
            top: 10%;
            left: 10%;
            transform: translate(-50%, -50%);
            font-size: 48px;
            font-weight: bold;
            color: rgba(118, 118, 118, 0.29);
            pointer-events: none;
            user-select: none;
        }
    </style>
</head>

<body>
    <div class="watermark">ZIYA</div>
    <?php
    $currentDateTime = new DateTime();

    $currentDate = $currentDateTime->format('Y-m-d');

    $currentTime = $currentDateTime->format('H:i:s');

    $currentDay = $currentDateTime->format('l');

    echo "<h3>Current Date: " . $currentDate . "</h3>";
    echo "<h3>Current Time: " . $currentTime . "</h3>";
    echo "<h3>Current Day: " . $currentDay . "</h3>";
    ?>
</body>

</html>