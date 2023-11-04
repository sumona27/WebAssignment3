<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #8B0000;
            color: #fff;
            padding: 20px 0;
        }

        form {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #8B0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2684cd;
        }

        h2 {
            color: #8B0000;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Sum of Even Numbers in the Array</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function sumEvenNumbers($arr) {
        $numbersArray = explode(",", $arr);
        $numbersArray = array_map('trim', $numbersArray);
        $sum = 0;
        foreach ($numbersArray as $number) {
            if (is_numeric($number) && $number % 2 === 0) {
                $sum += (int)$number;
            }
        }
        return $sum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumbers = $_POST["numbers"];
        $evenSum = sumEvenNumbers($inputNumbers);
        echo "<h2>Result:</h2>";
        echo "<p>Sum of even numbers in the input array: " . $evenSum . "</p>";
    }
    ?>
</body>
</html>
