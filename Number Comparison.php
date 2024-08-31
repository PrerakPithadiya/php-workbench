<!DOCTYPE html>
<html>

<head>
    <title>Compare Numbers</title>
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

        form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 300px;
            height: auto;
            text-align: center;
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="number"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 30px;
            font-weight: bold;
            color: #333;
            padding: 15px;
            background-color: #f8f8f8;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .result:hover {
            transform: scale(1.05);
        }

        .greater {
            color: #4CAF50;
            font-size: 1.2em;
        }

        .less {
            color: #f44336;
            font-size: 1.2em;
        }

        .equal {
            color: #2196F3;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div>
        <form method="post" action="">
            <label for="num1">Enter first number:</label>
            <input type="number" id="num1" name="num1" required>
            <label for="num2">Enter second number:</label>
            <input type="number" id="num2" name="num2" required>
            <input type="submit" value="Compare">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if ($num1 > $num2) {
                echo "<div class='result'><span class='greater'>$num1</span> is greater than <span class='less'>$num2</span>.</div>";
            } elseif ($num1 < $num2) {
                echo "<div class='result'><span class='greater'>$num2</span> is greater than <span class='less'>$num1</span>.</div>";
            } else {
                echo "<div class='result'><span class='equal'>Both numbers are equal</span>: $num1 = $num2</div>";
            }
        }
        ?>
    </div>
</body>

</html>