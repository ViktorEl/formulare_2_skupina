<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>

<body>

    <?php

        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["pohlavie"])) {
                $pohlavie = $_POST["pohlavie"];
                if($pohlavie == "muz") {
                    echo "ste muž";
                }
                elseif($pohlavie == "zena") {
                    echo "ste žena";
                }
                elseif($pohlavie == "ine") {
                    echo "nechcem uviesť";
                }
                else {
                    echo "nevybrali ste nič";
                }
             
            }
        }






    ?>

    
</body>
</html>