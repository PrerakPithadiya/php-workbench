<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
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
            border-radius: 8px;
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

        input[type="text"] {
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

        p {
            margin-top: 1rem;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Find Largest Number</h1>
        <form method="post">
            <label for="numbers">Enter numbers (comma-separated):</label>
            <input type="text" id="numbers" name="numbers" required>
            <input type="submit" value="Find Largest">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["numbers"];
            $numbers = array_map('trim', explode(',', $input));
            $numbers = array_filter($numbers, 'is_numeric');

            if (count($numbers) > 0) {
                $largest = $numbers[0];

                foreach ($numbers as $number) {
                    if ($number > $largest) {
                        $largest = $number;
                    }
                }

                echo "<p>The largest number is $largest.</p>";
            } else {
                echo "<p>Please enter valid numbers.</p>";
            }
        }
        ?>
    </div>
</body>

</html>