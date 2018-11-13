<div class="container-fluid">
    <div class="container">
        <?php if (!$isFormValid) : ?>
            <div class="hiba"><?php echo "Hibásan kitöltött űrlap."; ?></div>
        <?php endif; ?>
        <form class="reg" action="index.php?oldal=urlap" method="post">
            <label for="nev">Teljes név:</label><br />
            <input class="mezo" type="text" name="nev" <?php if (isset($nev)) : ?>value="<?php echo $nev; ?>"<?php endif; ?>><br />
            <?php if (isset($errors["nev"])) : ?>
                <div class="hiba"><?php echo $errors["nev"]; ?></div>
            <?php endif; ?>

            <label for="nev">Telefonszám:</label><br />
            <input class="mezo" type="text" name="telefon" <?php if (isset($telefon)) : ?>value="<?php echo $telefon; ?>"<?php endif; ?>><br />
            <?php if (isset($errors["telefon"])) : ?>
                <div class="hiba"><?php echo $errors["telefon"]; ?></div>
            <?php endif; ?>

            <label for="nev">Emailcím:</label><br />
            <input class="mezo" type="text" name="email" <?php if (isset($email)) : ?>value="<?php echo $email; ?>"<?php endif; ?>><br />
            <?php if (isset($errors["email"])) : ?>
                <div class="hiba"><?php echo $errors["email"]; ?></div>
            <?php endif; ?>

            <label for="text">Üzenet:</label><br>

            <textarea name="szoveg" id="ide" class="mezo" rows="4" cols="50"><?php if (isset($szoveg)) { echo trim($szoveg); } ?></textarea><br>
                <?php if (isset($errors["szoveg"])) : ?>
                  <div class="hiba"><?php echo $errors["szoveg"]; ?></div>
                <?php endif; ?>
            <input name="kuld" id="kuldgomb" type="submit" value="Elküld">
        </form>
    </div>
</div>