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
