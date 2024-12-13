<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>

<body>

    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["cislo1"]) && isset($_POST["cislo2"]) && isset($_POST["operator"])) {
                    $cislo1 = $_POST["cislo1"];
                    $cislo2 = $_POST["cislo2"];
                    $operator = $_POST["operator"];
                    if($operator == "1") {
                        die("chyba nevybrali ste operator");
                    }
                    if($operator == "+") {
                        echo $cislo1 + $cislo2;

                    }
                    elseif($operator == "-") {
                        echo $cislo1 - $cislo2;
                    }
                    elseif($operator == "*") {
                        echo $cislo1 * $cislo2;
                    }
                    elseif($operator == "/") {
                        if($cislo2 == 0) {
                            die("chyba delenie nulou");
                        }
                        else {
                            echo $cislo1 / $cislo2;
                        }

                    }



            }


        }





    ?>

    
</body>
</html>