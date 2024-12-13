<!DOCTYPE html>
<html lang="en">
<?php include "hlavicka.php" ?>
<body>

    <form action="formular.php" method="post">
        <label>Zadajte prvé číslo</label>
        <input type="number" name="cislo1" min="0" max="1000000"> <br>
        <label>Zadajte druhé číslo</label>
        <input type="number" name="cislo2" min="0" max="1000000"> <br>
        <label>Vyber operátor</label>
        <select name="operator">
            <option value="1">--</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select> <br>
        <input type="submit" name="tlacidlo" value="Odoslať">
    </form>

</body>
</html>