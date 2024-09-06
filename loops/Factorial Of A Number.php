<!DOCTYPE html>
<html>

<head>
    <title>Factorial Calculation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Factorial Calculation</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate Factorial">
    </form>
    <?php
    function factorial($n)
    {
        $result = 1;
        $i = $n;
        while ($i > 0) {
            $result *= $i;
            $i--;
        }
        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = isset($_POST["number"]) ? intval($_POST["number"]) : 0;
        $factorial = factorial($n);
        echo "<p>Factorial of $n is $factorial.</p>";
    }
    ?>
</body>

</html>