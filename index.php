<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Učíme sa skryť formulár</h1>

    <?php
        $stav = false;
        if(isset($_POST["tlacidlo"])) {
            $stav = true;
            if(isset($_POST["meno"]) && isset($_POST["priezvisko"]) && !empty($_POST["meno"]) && !empty($_POST["priezvisko"]) ) {
                $meno = $_POST["meno"];
                $priezvisko = $_POST["priezvisko"];
                echo "vase meno je: ".$meno." ".$priezvisko;
            }
        }
    ?>


    <form action="index.php" method="post" id="<?php if($stav == true) echo "skrytie"; ?>">
        <input type="text" name="meno" placeholder="Zadajde meno" required> <br>
        <input type="text" name="priezvisko" placeholder="Zadajte priezvisko" required> <br>
        <input type="submit" name="tlacidlo" value="Odoslať"> <br>
    </form>




    
</body>
</html>