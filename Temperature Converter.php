<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #ffffff;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: 450px;
            width: 100%;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        label {
            font-weight: bold;
            color: #ffffff;
            font-size: 1.1rem;
        }

        input,
        select,
        button {
            padding: 1rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            padding-right: 3rem;
        }

        select option {
            background-color: #4a4a4a;
            color: #ffffff;
            padding: 0.5rem;
        }

        select::-webkit-scrollbar {
            width: 10px;
        }

        select::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        select::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        select::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        button {
            background-color: #ff6b6b;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        button:hover {
            background-color: #ff8787;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        button:active {
            transform: translateY(-1px);
        }

        p {
            margin-top: 2rem;
            text-align: center;
            font-weight: bold;
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 1.2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <form method="post">
            <label for="temperature">Enter Temperature:</label>
            <input type="text" id="temperature" name="temperature" required placeholder="Enter temperature...">
            <select name="unit" id="unit">
                <option value="C">Celsius</option>
                <option value="F">Fahrenheit</option>
            </select>
            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST['temperature'];
            $unit = $_POST['unit'];

            if (is_numeric($temperature)) {
                if ($unit == "C") {
                    // Convert Celsius to Fahrenheit
                    $convertedTemp = ($temperature * 9 / 5) + 32;
                    $convertedUnit = "F";
                } else {
                    // Convert Fahrenheit to Celsius
                    $convertedTemp = ($temperature - 32) * 5 / 9;
                    $convertedUnit = "C";
                }
                echo "<p>$temperature $unit is equal to " . number_format($convertedTemp, 2) . " $convertedUnit</p>";
            } else {
                echo "<p>Please enter a valid numeric temperature.</p>";
            }
        }
        ?>
    </div>
</body>

</html>