<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels</title>
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
            background-color: #8B0000;
        }

        h2 {
            color: #8B0000;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Let's Count Vowels in a String</h1>
    <form method="post" action="">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <button type="submit">Count Vowels</button>
    </form>

    <?php
    function countVowels($inputString) {
        $inputString = preg_replace("/[^a-zA-Z]/", "", $inputString); 
        $inputString = strtolower($inputString);
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;

        for ($i = 0; $i < strlen($inputString); $i++) {
            if (in_array($inputString[$i], $vowels)) {
                $count++;
            }
        }

        return $count;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["input_string"];
        $vowelCount = countVowels($inputString);
        echo "<h2>Result:</h2>";
        echo "<p>Number of vowels in the input string: " . $vowelCount . "</p>";
    }
    ?>
</body>
</html>
