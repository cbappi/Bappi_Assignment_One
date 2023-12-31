
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Simple Calculator</title>
    <style>
  <?php include "cals.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" step="0.0001" required><br>
            <input type="number" name="num2" placeholder="Enter second number"step="0.0001" required><br>
            <select name="operation">
                <option value="add">addition</option>
                <option value="subtract">subtraction</option>
                <option value="multiply">multiplication</option>
                <option value="divide">division</option>
            </select><br>
          
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo $num1 ." + ". $num2." = ". round($result,4);
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo $num1 ." - ". $num2." = ". round($result,4);
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo $num1 ." X ". $num2." = ". round($result,4);
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo $num1 ." / ". $num2." = ". round($result,4);
                        } else {
                            echo "Cannot divide by zero.";
                        }
                        break;
             
                }
            }
            ?>
        </div>
    </div>
</body>
</html>