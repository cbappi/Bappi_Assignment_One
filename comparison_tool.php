
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Weather Report</title>
    <style>
  <?php include "comparison.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Number Comparison</h2>
       
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number"  step = "0.0001" required><br>
            <input type="number" name="num2" placeholder="Enter second number"  step = "0.0001" required><br>
          
       
          
            <button type="submit">Get Big Number</button>
        </form>
        <div id="result">
            
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        
            
                    $result = ($num1>$num2)? "{$num1}":"{$num2}";
                    
                    echo"Larger number is : ".$result;
                            
                
                        
                    }
                ?>
        </div>
    </div>
</body>
</html>

