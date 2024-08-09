<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Nigga ordering Form </title>
</head>
<body>
    
    <div class="container">
     <h1>ordring form</h1>
        <form action="index.php" method="post">
            <label>How many niggas do you want?</label>
            <input type="number" name="nigga" required>
            <br>
            <input type="submit" value="Buy">
        </form>
        
        <div class="result">
            <?php 
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $niggaCount = null;
                    $niggaCount = intval($_POST["nigga"]);

                    switch (true) {
                        case ($niggaCount == 0):
                            echo "lotfan nigga bekharid .<br>";
                            break;
                        case ($niggaCount < 0):
                            echo "are you sirus ali ??? .<br>";
                            break;
                        case ($niggaCount > 1):
                            echo "You want: {$niggaCount} nigga.<br>";
                            break;
                        default:
                            echo "You want: {$niggaCount} nigga.<br>";
                            break;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>