<!DOCTYPE html>
<html>

<head>
    <title>Day of the Week</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #83a4d4, #b6fbff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
            color: #34495e;
            text-align: center;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #3498db;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            text-align: center;
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #2980b9;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        p {
            margin-top: 25px;
            font-weight: bold;
            color: #2c3e50;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Day of the Week</h1>
        <form method="post">
            <label for="dayNumber">Enter a number (1-7):</label>
            <input type="number" id="dayNumber" name="dayNumber" min="1" max="7" required>
            <input type="submit" value="Get Day">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dayNumber = intval($_POST["dayNumber"]);
            $dayName = "";

            switch ($dayNumber) {
                case 1:
                    $dayName = "Monday";
                    break;
                case 2:
                    $dayName = "Tuesday";
                    break;
                case 3:
                    $dayName = "Wednesday";
                    break;
                case 4:
                    $dayName = "Thursday";
                    break;
                case 5:
                    $dayName = "Friday";
                    break;
                case 6:
                    $dayName = "Saturday";
                    break;
                case 7:
                    $dayName = "Sunday";
                    break;
                default:
                    $dayName = "Invalid input. Please enter a number between 1 and 7.";
            }

            echo "<p>The day of the week is: $dayName</p>";
        }
        ?>
    </div>
</body>

</html>