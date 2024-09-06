<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Eligibility</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        label {
            font-weight: bold;
            color: #34495e;
        }

        input[type="number"] {
            padding: 0.75rem;
            border: 2px solid #bdc3c7;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #3498db;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
            font-size: 1rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        p {
            text-align: center;
            font-weight: bold;
            margin-top: 1.5rem;
            font-size: 1.2rem;
            padding: 1rem;
            border-radius: 8px;
        }

        .eligible {
            background-color: #2ecc71;
            color: white;
        }

        .not-eligible {
            background-color: #e74c3c;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Check Voting Eligibility</h1>
        <form method="post">
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" min="0" required>
            <input type="submit" value="Check Eligibility">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = max(0, intval($_POST["age"]));

            if ($age >= 18) {
                echo "<p class='eligible'>You are eligible to vote!</p>";
            } else {
                echo "<p class='not-eligible'>You are not eligible to vote yet.</p>";
            }
        }
        ?>
    </div>
</body>

</html>