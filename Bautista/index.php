<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Tasks</title>
<style>
  body {
    background-color: #239b27ff; 
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; 
    align-items: center; 
    height: 100vh;
  }

  .container {
    background-color: #ffffff; 
    border: 3px solid #2e7d32; 
    border-radius: 15px;
    width: 80%;
    max-width: 800px;
    padding: 30px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
    max-height: 90vh;
  }

  h1 {
    text-align: center;
    color: #2e7d32;
    margin-bottom: 20px;
  }

  h2 {
    color: #388e3c;
    border-bottom: 2px solid #a5d6a7;
    padding-bottom: 5px;
  }

  hr {
    border: 0;
    border-top: 1px dashed #81c784;
    margin: 20px 0;
  }

  p, 
  pre {
    color: #333;
  }

  
  .result {
    background: #f1f8e9;
    border: 1px solid #c8e6c9;
    padding: 10px;
    border-radius: 8px;
    margin-top: 8px;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>PHP Exercises</h1>

    <h2>1. Introduce Yourself</h2>
    <div class="result">
      <?php
      $name = "Renz Marion Bautista";
      $age = 22;
      $favoriteColor = "blue";
      echo "Hi, I'm $name, I am $age years old, and my favorite color is $favoriteColor.";
      ?>
    </div>

    <hr>

    <h2>2. Simple Math</h2>
    <div class="result">
      <?php
      $a = 13;
      $b = 14;
      echo "Sum: " . ($a + $b) . "<br>";
      echo "Difference: " . ($a - $b) . "<br>";
      echo "Product: " . ($a * $b) . "<br>";
      echo "Quotient: " . ($a / $b) . "<br>";
      ?>
    </div>

    <hr>

    <h2>3. Area and Perimeter of a Rectangle</h2>
    <div class="result">
      <?php
      $length = 30;
      $width = 15;
      $area = $length * $width;
      $perimeter = 2 * ($length + $width);
      echo "Area: $area<br>";
      echo "Perimeter: $perimeter<br>";
      ?>
    </div>

    <hr>

    <h2>4. Temperature Converter</h2>
    <div class="result">
      <?php
      $celsius = 35;
      $fahrenheit = ($celsius * 9/5) + 32;
      echo "$celsius °C = $fahrenheit °F";
      ?>
    </div>

    <hr>

    <h2>5. Swapping Variables</h2>
    <div class="result">
      <?php
      $x = 9;
      $y = 12;
      $temp = $x;
      $x = $y;
      $y = $temp;
      echo "After swapping, x = $x and y = $y.";
      ?>
    </div>

    <hr>

    <h2>6. Salary Calculator</h2>
    <div class="result">
      <?php
      $basic_salary = 8000;
      $allowance = 500;
      $deduction = 250;
      $net_salary = $basic_salary + $allowance - $deduction;
      echo "Net Salary: $net_salary";
      ?>
    </div>

    <hr>

    <h2>7. BMI Calculator</h2>
    <div class="result">
      <?php
      $weight = 55;
      $height = 5.6;
      $bmi = $weight / ($height * $height);
      echo "BMI: $bmi";
      ?>
    </div>

    <hr>

    <h2>8. String Manipulation</h2>
    <div class="result">
      <?php
      $sentence = "Hello, I am Learning PHP";
      echo "Number of characters: " . strlen($sentence) . "<br>";
      echo "Number of words: " . str_word_count($sentence) . "<br>";
      echo "Uppercase: " . strtoupper($sentence) . "<br>";
      echo "Lowercase: " . strtolower($sentence) . "<br>";
      ?>
    </div>

    <hr>

    <h2>9. Bank Account Simulation</h2>
    <div class="result">
      <?php
      $balance = 10000;
      $deposit = 500;
      $withdraw = 250;
      $balance += $deposit;
      $balance -= $withdraw;
      echo "Updated Balance: $balance";
      ?>
    </div>

    <hr>

    <h2>10. Simple Grading System</h2>
    <div class="result">
      <?php
      $math_score = 80;
      $english_score = 85;
      $science_score = 93;
      $average = ($math_score + $english_score + $science_score) / 3;

      if ($average >= 90) {
        $grade = "A";
      } elseif ($average >= 80) {
        $grade = "B";
      } elseif ($average >= 70) {
        $grade = "C";
      } elseif ($average >= 60) {
        $grade = "D";
      } else {
        $grade = "F";
      }
      echo "Average: $average, Grade: $grade";
      ?>
    </div>

    <hr>

    <h2>11. Currency Converter</h2>
    <div class="result">
      <?php
      $amount = 100;
      $usd_rate = 2.2;
      $eur_rate = 0.7;
      $jpy_rate = 120;

      $usd = $amount * $usd_rate;
      $eur = $amount * $eur_rate;
      $jpy = $amount * $jpy_rate;

      echo "Amount in USD: $usd<br>";
      echo "Amount in EUR: $eur<br>";
      echo "Amount in JPY: $jpy<br>";
      ?>
    </div>

    <hr>

    <h2>12. Travel Cost Estimator</h2>
    <div class="result">
      <?php
      $distance = 275;
      $fuel_consumption = 20;
      $fuel_price = 3.5;

      $fuel_needed = $distance / $fuel_consumption;
      $travel_cost = $fuel_needed * $fuel_price;

      echo "Estimated travel cost: $travel_cost";
      ?>
    </div>
  </div>
</body>
</html>
