<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="number"] {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
            width: 200px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 1rem;
            font-size: 1.2rem;
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Reverse Number</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" value="Reverse">
        </form>

        <?php
        function reverseNumber($number)
        {
            $reversedNumber = 0;
            while ($number > 0) {
                $remainder = $number % 10;
                $reversedNumber = ($reversedNumber * 10) + $remainder;
                $number = (int)($number / 10);
            }
            return $reversedNumber;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $reversedNumber = reverseNumber($number);
            echo "<p class='result'>Reversed number is $reversedNumber.</p>";
        }
        ?>
    </div>
</body>

</html>