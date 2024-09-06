<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: gradientBG 15s ease infinite;
            background-size: 400% 400%;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            backdrop-filter: blur(10px);
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #4a4a4a;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.75rem;
            color: #4a4a4a;
            font-weight: 600;
            font-size: 1.1rem;
        }

        input[type="number"] {
            padding: 1rem;
            margin-bottom: 2rem;
            border: 2px solid #a29bfe;
            border-radius: 12px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #6c5ce7;
            box-shadow: 0 0 15px rgba(108, 92, 231, 0.5);
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #6c5ce7 0%, #a29bfe 100%);
            color: white;
            padding: 1.2rem;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #5b4cdb 0%, #917ffc 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"]:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .result {
            margin-top: 2.5rem;
            text-align: center;
            font-weight: bold;
            color: #4a4a4a;
            padding: 1.5rem;
            background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
            border-radius: 12px;
            font-size: 1.3rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Discount Calculator</h1>
        <form method="post" action="">
            <label for="purchaseAmount">Enter Purchase Amount:</label>
            <input type="number" id="purchaseAmount" name="purchaseAmount" required>
            <input type="submit" value="Calculate Discount">
        </form>

        <?php
        function calculateDiscount($amount)
        {
            if ($amount >= 100 && $amount < 200) {
                return 10;
            } elseif ($amount >= 200 && $amount < 300) {
                return 20;
            } elseif ($amount >= 300) {
                return 30;
            } else {
                return 0;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $purchaseAmount = $_POST["purchaseAmount"];
            $discount = calculateDiscount($purchaseAmount);

            echo '<div class="result">';
            if ($discount > 0) {
                echo "Congratulations! You get a $discount% discount!";
            } else {
                echo "No discount available for this purchase amount.";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>