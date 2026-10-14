<?php
$limite = 10;

echo "Números del 1 al $limite:<br>";
for ($i = 1; $i <= $limite; $i++) {
    echo $i . " ";
}

echo "<br><br>Números invertidos del $limite al 1:<br>";
for ($i = $limite; $i >= 1; $i--) {
    echo $i . " ";
}
?>
