<?php

$produkty = [
    "Arbuz" => 4.50,
    "Pomarancza" => 1.99,
    "Truskawka" => 5.00,
    "Jazebina" => 2.99
];

echo "<table border='1'>";
echo "<tr><th>Produkt</th><th>Cena</th></tr>";

foreach ($produkty as $nazwa => $cena) {
    echo "<tr>";
    echo "<td>$nazwa</td>";
    echo "<td>$cena zł</td>";
    echo "</tr>";
}

echo "</table>";

?>