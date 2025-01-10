<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>
<body>
    <h2>Vyberte si kurz</h2>
    <form action="formular.php" method="post">
        <input type="checkbox" name="kurz[]" value="1"> <label>PHP</label> <br>
        <input type="checkbox" name="kurz[]" value="2"> <label>Python</label> <br>
        <input type="checkbox" name="kurz[]" value="3"> <label>Java</label> <br>
        <input type="submit" name="tlacidlo" value="Odoslať">
    </form>

</body>
</html>