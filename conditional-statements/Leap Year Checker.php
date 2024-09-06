<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 450px;
            width: 100%;
            backdrop-filter: blur(10px);
        }

        h1 {
            color: #4a4a4a;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 2rem;
        }

        label {
            display: block;
            margin-bottom: 1rem;
            color: #4a4a4a;
            font-weight: 600;
            font-size: 1.1rem;
        }

        input[type="number"] {
            padding: 1rem;
            font-size: 1.1rem;
            border: 2px solid #764ba2;
            border-radius: 12px;
            width: 85%;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 10px rgba(102, 126, 234, 0.5);
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 12px;
            transition: all 0.3s ease;
            margin-top: 1.5rem;
            width: 85%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:active {
            transform: translateY(-1px);
        }

        .result {
            margin-top: 2rem;
            font-weight: bold;
            color: #4a4a4a;
            padding: 1.5rem;
            border-radius: 12px;
            background-color: rgba(236, 240, 241, 0.8);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Leap Year Checker</h1>
        <form method="post">
            <label for="year">Enter a year:</label>
            <input type="number" id="year" name="year" required>
            <input type="submit" value="Check">
        </form>

        <?php
        function isLeapYear($year)
        {
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = $_POST["year"];
            echo '<div class="result">';
            if (isLeapYear($year)) {
                echo "$year is a leap year!";
            } else {
                echo "$year is not a leap year.";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>