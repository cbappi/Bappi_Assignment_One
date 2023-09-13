
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Temperature</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
  <?php include "tempe.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Convert Temparaure</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter temperature" class="form-control"  step=".0001" required><br>
            
            <select name="operation">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
          
            </select><br>
          
            <button type="submit">Convert Temperature</button>
        </form>
        <div id="result">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                    
                        $operation = $_POST["operation"];

                        switch ($operation) {
                            case "celsius":
                                $result = round(($num1 *9/5)+32,4);
                                echo "$result Degree Fahrenheit";
                                break;
                            case "fahrenheit":
                                $result = round(($num1 - 32)*5/9,4);
                                echo "$result Degree Celsius";
                                break;                
                    
                        }
                    }
                    ?>
        </div>
    </div>
</body>
</html>