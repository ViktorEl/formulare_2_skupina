<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>

<body>

    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["kurz"])) {
                $pole = $_POST["kurz"];
                $dlzkaPola = count($pole); // zistime dlzku pola
                if($dlzkaPola != 2) {
                    die("musite vybrat presne 2 kurzy");
                }
   
                foreach($pole as $prvok) {
                    if($prvok == "1") {
                        echo "vybrali ste si PHP";
                        echo "<br>";
                    }
                    elseif($prvok == "2") {
                        echo "vybrali ste si Python";
                        echo "<br>";
                    }
                    elseif($prvok == "3") {
                        echo "vybrali ste si Javu";
                    }
                }
            } else {
                die("musite vybrat presne 2 kurzy");
            }
        }
  
    ?>

    
</body>
</html>