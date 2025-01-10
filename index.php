<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>
<body>
    <h2>Vyberte si kurz</h2>
    <form action="formular.php" method="post">
        <input type="radio" name="pohlavie" value="muz"> <label>muž</label> <br>
        <input type="radio" name="pohlavie" value="zena"> <label>žena</label> <br>
        <input type="radio" name="pohlavie" value="ine"> <label>nechcem uviesť</label> <br>
        <input type="submit" name="tlacidlo" value="Odoslať">
    </form>

</body>
</html>