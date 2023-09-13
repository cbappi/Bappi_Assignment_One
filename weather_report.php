
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Weather Report</title>
    <style>
  <?php include "weather.css" ?>
</style>
</head>
<body>
    <div class="container">
        <h2>Weather Report</h2>
        
        <form method="post" action="">
            <input type="number" name="temp" placeholder="Enter a temperature" required><br>          
            <button type="submit">Check Weather</button>
        </form>
        <div id="result">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $temp = $_POST["temp"];
                        
                    
                        if($temp<=0){

                            echo"It's freezing!";
                        }elseif($temp>0 && $temp<=15){
                            echo"It's cool.";
                        }elseif($temp>=16){
                            echo"It's warm.";}
                                                        
                    }
                    ?>
        </div>
    </div>
</body>
</html>