<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength Checker</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #4CAF50, #2196F3, #9C27B0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(10px);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.5);
        }

        input[type="submit"] {
            background: linear-gradient(45deg, #4CAF50, #2196F3);
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .result {
            margin-top: 25px;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .weak {
            background: linear-gradient(45deg, #ffcccb, #ff9999);
            color: #d32f2f;
        }

        .medium {
            background: linear-gradient(45deg, #fff9c4, #fff59d);
            color: #f57f17;
        }

        .strong {
            background: linear-gradient(45deg, #c8e6c9, #a5d6a7);
            color: #1b5e20;
        }
    </style>
</head>

<body>
    <div>
        <form method="post">
            <label for="password">Enter your password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Check Password Strength">
        </form>

        <?php
        function checkPasswordStrength($password)
        {
            $length = strlen($password);

            if ($length < 6) {
                return "<div class='result weak'>Weak password.</div>";
            } elseif ($length <= 12) {
                return "<div class='result medium'>Medium password.</div>";
            } else {
                return "<div class='result strong'>Strong password.</div>";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = $_POST["password"];
            echo checkPasswordStrength($password);
        }
        ?>
    </div>
</body>

</html>