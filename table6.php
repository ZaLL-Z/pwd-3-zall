<?php
echo "<table>";
echo "<tr><td class='side'>bilangan</td>";

for ($i = 1; $i <= 10; $i++) {
    echo "<td class='header'>$i</td>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td class='side'>$i</td>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        if ($hasil % 5 == 0) {
            echo "<td class='header'>$hasil</td>";
        } else {
            echo "<td class='main'>$hasil</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

