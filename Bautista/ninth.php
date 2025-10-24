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
echo "<h2>Bank Account Balance Update</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input safely
    $balance = (float) $_POST["balance"];
    $deposit = (float) $_POST["deposit"];
    $withdraw = (float) $_POST["withdraw"];

    // Update balance
    $balance += $deposit;
    $balance -= $withdraw;

    echo "Initial Balance: " . number_format((float)$_POST["balance"], 2) . "<br>";
    echo "Deposit: " . number_format($deposit, 2) . "<br>";
    echo "Withdrawal: " . number_format($withdraw, 2) . "<br><br>";
    echo "<strong>Updated Balance: " . number_format($balance, 2) . "</strong><br><br>";

    // Back link
    echo '<a href="">Update Again</a>';
} else {
    // Display the form
    echo '
    <form method="post" action="">
        <label for="balance">Current Balance:</label>
        <input type="number" step="any" name="balance" id="balance" required><br><br>

        <label for="deposit">Deposit Amount:</label>
        <input type="number" step="any" name="deposit" id="deposit" required><br><br>

        <label for="withdraw">Withdraw Amount:</label>
        <input type="number" step="any" name="withdraw" id="withdraw" required><br><br>

        <input type="submit" value="Update Balance">
    </form>
    ';
}
?>

</div>

</body>
</html>