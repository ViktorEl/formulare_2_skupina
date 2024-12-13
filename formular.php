<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="formular.php" name="registracia" method="post">
        <input type="text" name="meno" placeholder="Zadajte meno" required> <br>
        <input type="password" name="heslo" placeholder="Zadajte heslo" required> <br>
        <input type="submit" name="tlacidlo" value="Odoslať"> <br>
    </form>


    <?php
        $mena = ["Viktor", "Jozo", "Fero"];
        $hesla = ["Viktor"=>"123", "Jozo"=>"456", "Fero"=>"789"];
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["meno"]) && isset($_POST["heslo"])) {
                    $meno = $_POST["meno"];
                    $heslo = $_POST["heslo"];
                    if(!in_array($meno, $mena)) {
                        die("nie ste registrovany");
                    }
                    if($heslo != $hesla[$meno]) {
                        die("nespravne heslo");
                    }
                    echo "ste prihlasený";

                }
        }

    ?>

    
</body>
</html>