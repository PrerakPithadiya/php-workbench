<!DOCTYPE html>
<html>

<head>
    <title>Pyramid Pattern</title>
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
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 60px;
            padding: 5px;
            margin: 0 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .pyramid {
            font-family: monospace;
            font-size: 18px;
            line-height: 1;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <label for="rows">Enter the number of rows for the pyramid:</label>
            <input type="number" id="rows" name="rows" min="1" required>
            <input type="submit" value="Generate Pyramid">
        </form>

        <?php
        function printPyramid($n)
        {
            echo '<div class="pyramid">';
            for ($i = 1; $i <= $n; $i++) {
                // Print spaces
                for ($j = $i; $j < $n; $j++) {
                    echo " ";
                }
                // Print stars
                for ($j = 1; $j <= (2 * $i - 1); $j++) {
                    echo "*";
                }
                // Move to the next line
                echo "<br>";
            }
            echo '</div>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = isset($_POST["rows"]) ? intval($_POST["rows"]) : 5;
            printPyramid($n);
        }
        ?>
    </div>
</body>

</html>