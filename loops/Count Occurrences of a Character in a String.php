<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Count</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            margin-bottom: 1.5rem;
            font-family: 'Georgia', serif;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            color: #555;
            font-family: 'Roboto', sans-serif;
        }

        input[type="text"] {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Open Sans', sans-serif;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.75rem;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 1.5rem;
            padding: 1rem;
            background-color: #e7f3fe;
            border-left: 5px solid #2196F3;
            border-radius: 4px;
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Character Count</h1>
        <form method="post">
            <label for="input_string">Enter a string:</label>
            <input type="text" id="input_string" name="input_string" required>
            <label for="input_char">Enter a character to count:</label>
            <input type="text" id="input_char" name="input_char" maxlength="1" required>
            <input type="submit" value="Count">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input string and character from the user
            $string = $_POST["input_string"];
            $char = $_POST["input_char"];

            // Initialize the counter
            $count = 0;

            // Use a for loop to iterate through each character in the string
            for ($i = 0; $i < strlen($string); $i++) {
                // Check if the current character matches the specified character
                if ($string[$i] == $char) {
                    // Increment the counter
                    $count++;
                }
            }

            // Output the result within an HTML tag
            echo "<div class='result'><p>'$char' appears $count times in '$string'.</p></div>";
        }
        ?>
    </div>
</body>

</html>