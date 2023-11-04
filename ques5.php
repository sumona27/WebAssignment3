<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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

        input[type="number"] {
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
            background-color: #8B0000;
        }

        div.results {
            margin: 20px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Dynamic Calculator</h1>
    <form method="post" action="">
        <label for="number1">Enter first number:</label>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Enter second number:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $sum = $number1 + $number2;
        $difference = $number1 - $number2;
        $product = $number1 * $number2;
        $quotient = $number1 / $number2;

        echo "<div class='results'>";
        echo "Calculation<br>";
        echo "Sum: $sum<br>";
        echo "Difference: $difference<br>";
        echo "Product: $product<br>";
        echo "Quotient: $quotient<br>";
        echo "</div>";
    }
    ?>
</body>
</html>
