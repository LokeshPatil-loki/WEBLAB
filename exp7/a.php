<!DOCTYPE html>
<html>

<head>
    <title>Sum of Individual Digits</title>
    <style>
        .watermark {
            position: absolute;
            top: 10%;
            left: 10%;
            transform: translate(-50%, -50%);
            font-size: 48px;
            font-weight: bold;
            color: rgba(118, 118, 118, 0.603);
            pointer-events: none;
            user-select: none;
        }
    </style>
</head>

<body>
    <div class="watermark">ZIYA</div>

    <?php
    function sumOfDigits($number)
    {
        $sum = 0;
        $number = abs($number);

        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int) ($number / 10);
        }

        return $sum;
    }

    $num = 89745;
    $result = sumOfDigits($num);
    echo "Sum of individual digits of $num is: $result";
    ?>
</body>

</html>