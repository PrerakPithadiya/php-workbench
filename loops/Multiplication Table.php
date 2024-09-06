<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
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
            background-color: white;
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
            align-items: center;
            margin-bottom: 1rem;
        }

        label {
            margin-bottom: 0.5rem;
        }

        input[type="number"] {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        pre {
            background-color: #f8f8f8;
            padding: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Multiplication Table</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" value="Generate Table">
        </form>
        <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the user input
    $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

    // Use a for loop to iterate from 1 to 10
    for ($i = 1; $i <= 10; $i++) {
        // Calculate the product
        $product = $number * $i;

        // Print the result in the desired format
        echo "$number x $i = $product\n";
    }
}
?>
        </pre>
    </div>
</body>

</html>