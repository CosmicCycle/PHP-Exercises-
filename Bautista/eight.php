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
echo "<h2>Sentence Analyzer</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input safely
    $sentence = trim($_POST["sentence"]);

    if (!empty($sentence)) {
        echo "Original Sentence: $sentence<br><br>";
        echo "Number of characters: " . strlen($sentence) . "<br>";
        echo "Number of words: " . str_word_count($sentence) . "<br>";
        echo "Uppercase: " . strtoupper($sentence) . "<br>";
        echo "Lowercase: " . strtolower($sentence) . "<br><br>";
    } else {
        echo "Please enter a sentence.<br><br>";
    }

    // Back link
    echo '<a href="">Try Another Sentence</a>';
} else {
    // Display form
    echo '
    <form method="post" action="">
        <label for="sentence">Enter a sentence:</label><br>
        <textarea name="sentence" id="sentence" rows="3" cols="40" required></textarea><br><br>

        <input type="submit" value="Analyze">
    </form>
    ';
}
?>
</div>

</body>
</html>