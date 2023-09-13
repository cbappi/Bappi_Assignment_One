
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
  <?php include "grade.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Grade Calculator</h2>

        <form method="post" action="">
            <input type="number" name="num1" class="form-control" placeholder="Enter first number" min="0" step="0.01" required>
            <input type="number" name="num2" placeholder="Enter second number" min="0" step="0.01" required><br>
            <input type="number" name="num3" placeholder="Enter third number" min="0" step="0.01" required><br>
        
          
            <button type="submit">Calculate</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
               
                $average = ($num1+$num2+$num3)/3;
                echo "Your Average : ". round($average,4);

                echo"<br/>";

                if($average>=60){
                    echo"Grade = A";
                }elseif($average>=50 && $average<60){
                    echo"Grade = B";
                }elseif($average>=40 && $average<50){
                    echo"Grade = C";
                }elseif($average>=33 && $average<40){
                    echo"Grade = D";
                }elseif($average<33){
                    echo"Grade = F";
                }

            }
            ?>
        </div>
    </div>
</body>
</html>