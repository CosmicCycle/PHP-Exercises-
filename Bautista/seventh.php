<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself</title>

    <style>
        body {
            background-color: #4CAF50; /* mid-green background */
            font-family: "Segoe UI", Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modal {
            background-color: #ffffff;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
            padding: 30px;
            box-sizing: border-box;
        }

        h2 {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-cancel {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            color: #333;
        }

        .btn-save {
            background-color: #007bff;
            border: none;
            color: #fff;
        }

        .btn-cancel:hover {
            background-color: #e0e0e0;
        }

        .btn-save:hover {
            background-color: #0066cc;
        }

        h3 {
            color: #2e7d32;
            text-align: center;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="modal">
<?php
echo "<h2>BMI (Body Mass Index) Calculator</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs safely
    $weight = (float) $_POST["weight"];
    $height = (float) $_POST["height"];

    // Validate input
    if ($height > 0) {
        // Compute BMI
        $bmi = $weight / ($height * $height);
        $bmi = number_format($bmi, 2);

        echo "Weight: $weight kg<br>";
        echo "Height: $height m<br><br>";
        echo "<strong>BMI: $bmi</strong><br><br>";

        // Optional BMI category
        if ($bmi < 18.5) {
            echo "Category: Underweight<br>";
        } elseif ($bmi < 25) {
            echo "Category: Normal weight<br>";
        } elseif ($bmi < 30) {
            echo "Category: Overweight<br>";
        } else {
            echo "Category: Obese<br>";
        }
    } else {
        echo "Height must be greater than zero.<br><br>";
    }

    // Back link
    echo '<br><a href="">Calculate Again</a>';
} else {
    // Display form
    echo '
    <form method="post" action="">
        <label for="weight">Enter Weight (kg):</label>
        <input type="number" step="any" name="weight" id="weight" required><br><br>

        <label for="height">Enter Height (m):</label>
        <input type="number" step="any" name="height" id="height" required><br><br>

        <input type="submit" value="Calculate BMI">
    </form>
    ';
}
?>
</div>

</body>
</html>