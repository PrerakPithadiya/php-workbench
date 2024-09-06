<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array Elements</title>
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

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .number {
            background-color: #3498db;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .number:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <label for="numbers">Enter numbers (comma-separated):</label>
            <input type="text" id="numbers" name="numbers" required>
            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input from the user
            $input = $_POST['numbers'];

            // Convert the input string to an array
            $numbers = explode(',', $input);

            // Trim whitespace from each element
            $numbers = array_map('trim', $numbers);

            // Start the HTML output
            echo "<div class='result'>";

            // Use a foreach loop to display each element
            foreach ($numbers as $number) {
                echo "<span class='number'>$number</span>";
            }

            // End the HTML output
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>