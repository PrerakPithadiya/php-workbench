<!DOCTYPE html>
<html>

<head>
    <title>Age Category</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f5f5f5;
        }

        form {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 12px;
            font-weight: bold;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 25px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 25px;
            padding: 15px;
            background-color: #e8f6f3;
            border-left: 6px solid #1abc9c;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    function determineAgeCategory($age)
    {
        if ($age < 18) {
            return "You are a minor.";
        } elseif ($age >= 18 && $age <= 64) {
            return "You are an adult.";
        } else {
            return "You are a senior.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = intval($_POST["age"]);

        $result = determineAgeCategory($age);

        echo "<div class='result'>" . $result . "</div>";
    }
    ?>
</body>

</html>