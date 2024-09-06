<!DOCTYPE html>
<html>

<head>
    <title>Sum of First N Natural Numbers</title>
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
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #e7f3fe;
            border-left: 5px solid #2196F3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sum of First N Natural Numbers</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" value="Calculate Sum">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["number"]);
            $sum = 0;

            for ($i = 1; $i <= $n; $i++) {
                $sum += $i;
            }

            echo "<div class='result'><p>The sum of first $n natural numbers is $sum.</p></div>";
        }
        ?>
    </div>
</body>

</html>