<!DOCTYPE html>
<html>
    <body>
        <div>
            <form METHOD="post" action="../submit.php">
                <input type="number" name="amount" placeholder="Mėnesinis suvartotas kilovatvalandžių kiekis:">
                <input type="number" name="rate" placeholder="Tarifas:">
                <input type="text" name="daytime" placeholder="Dieninė ar Naktinė Elektra:">
                <input type="text" name="month" placeholder="Apmokamas Mėnuo:">
                <button type="submit">Skaičiuoti kainą</button>
            </form>
            <p>Išklotinė:</p>
            <?php $bill = file_get_contents('bills.json'); ?>
            <?php foreach (json_decode($bill, true) as $key => $value): ?>
                <?php echo $value['amount'] ?? null ?>
                <?php echo $value['rate'] ?? null ?>
                <?php echo $value['daytime'] ?? null ?>
                <?php echo $value['month'] ?? null ?>
                <?php echo $sum = $value['amount']*$value['rate'] ?? null ?>
            <form method="POST" action="k.php">
                <input type="hidden" name="id" value="<?php echo $key; ?>">
                <button type="submit" name="submit" value="submit">DEKLARUOTI IR SUMOKĖTI</button>
            </form>
            <?php endforeach; ?>
        </div>
    </body>
</html>