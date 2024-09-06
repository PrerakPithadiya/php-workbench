<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="score">Enter the student's score (0-100):</label>
        <input type="number" id="score" name="score" min="0" max="100" required>
        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    // Function to determine the grade based on the score
    function getGrade($score)
    {
        if ($score >= 90) {
            return 'A';
        } elseif ($score >= 80) {
            return 'B';
        } elseif ($score >= 70) {
            return 'C';
        } elseif ($score >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = $_POST["score"];

        // Validate the input
        if (is_numeric($score) && $score >= 0 && $score <= 100) {
            // Get the grade
            $grade = getGrade($score);
            // Print the grade
            echo "<p>Grade: $grade</p>";
        } else {
            echo "<p>Invalid input. Please enter a number between 0 and 100.</p>";
        }
    }
    ?>
</body>

</html>