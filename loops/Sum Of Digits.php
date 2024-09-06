<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            line-height: 1.6;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            font-size: 3em;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            letter-spacing: 2px;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        form:hover {
            transform: translateY(-5px);
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-weight: bold;
            color: #34495e;
            font-size: 1.1em;
        }

        input[type="text"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
            outline: none;
        }

        input[type="submit"] {
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #2980b9, #3498db);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        p {
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            font-size: 20px;
            color: #2c3e50;
            text-align: center;
            transition: all 0.3s ease;
        }

        p:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body>
    <h1>Calculate the Sum of the Digits</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        function sumOfDigits($number)
        {
            $sum = 0;

            while ($number > 0) {
                $digit = $number % 10; // Get the last digit
                $sum += $digit;        // Add the digit to the sum
                $number = (int)($number / 10); // Remove the last digit
            }

            return $sum;
        }

        $sum = sumOfDigits($number);
        echo "<p>The sum of the digits is $sum.</p>";
    }
    ?>
</body>

</html>