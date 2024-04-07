<!DOCTYPE html>
<html>

<head>
    <title>Palindrome Check</title>
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
    function isPalindrome($number)
    {
        $original = $number;
        $reverse = 0;

        while ($number > 0) {
            $digit = $number % 10;
            $reverse = ($reverse * 10) + $digit;
            $number = (int) ($number / 10);
        }
        echo "Reverse Digits are $reverse<br>";
        return ($original == $reverse);
    }

    // Example usage
    $num = 12321;
    if (isPalindrome($num)) {
        echo "$num is a palindrome";
    } else {
        echo "$num is not a palindrome";
    }
    ?>
</body>

</html>