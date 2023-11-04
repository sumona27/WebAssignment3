<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h3 {
            background-color: #8B0000;
            color: #fff;
            padding: 10px 0;
        }

        div.container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px;
            padding: 20px;
        }

        pre {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $numbers = array(2, 4, 6, 8, 10);

        echo "<h3>First Element:</h3>";
        echo "First element of the array: " . $numbers[0] . "<br>";

        echo "<h3>Last Element:</h3>";
        echo "Last element of the array: " . end($numbers) . "<br>";

        $numbers[] = 12;

        echo "<h3>Updated Array:</h3>";
        echo "<pre>";
        print_r($numbers);
        echo "</pre>";

        $sum = array_sum($numbers);
        echo "<h3>Array Sum:</h3>";
        echo "Sum of all elements in the array: " . $sum . "<br>";
        ?>
    </div>
</body>
</html>
