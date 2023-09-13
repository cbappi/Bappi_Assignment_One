
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
  <?php include "evenodd.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Even or Odd Checker</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter a number" step="0.00001" required><br>
                   
            <button type="submit">Check number</button>
        </form>
        <div id="result">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $r = $num1 % 2;
                    

                        switch ($r) {
                            case 0:
                                echo "{$num1} is an even number";
                                break;
                            default:
                                echo "{$num1} is an odd number";                      
                    
                        }
                    }
                    ?>
        </div>
    </div>
</body>
</html>