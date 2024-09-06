<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci Sequence</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #34495e;
        }

        input[type="number"] {
            width: 100px;
            padding: 5px;
            margin: 10px 0;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        p {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Fibonacci Sequence</h1>
    <form method="post">
        <label for="n">Enter the number of terms:</label>
        <input type="number" id="n" name="n" min="1" required>
        <input type="submit" value="Generate">
    </form>
    <?php
    function generateFibonacci($n)
    {
        $fibonacci = [];

        if ($n >= 1) {
            $fibonacci[0] = 0;
        }
        if ($n >= 2) {
            $fibonacci[1] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = isset($_POST['n']) ? intval($_POST['n']) : 0;
        if ($n > 0) {
            $fibonacciSequence = generateFibonacci($n);

            echo "<p>The first $n terms of the Fibonacci sequence are:</p>";
            echo "<p>" . implode(", ", $fibonacciSequence) . "</p>";
        }
    }
    ?>
</body>

</html>