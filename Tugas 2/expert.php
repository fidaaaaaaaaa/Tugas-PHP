<?php
echo "<table border='1' cellpadding='8' cellspacing='0'>";

// Header tabel
echo "<tr><th>Angka Pertama</th><th>Angka Kedua</th></tr>";

// Perulangan 0–7
for ($i = 0; $i <= 7; $i++) {
    for ($j = 0; $j <= 7; $j++) {
        // Jika angka pertama genap, warnai silver
        if ($i % 2 == 0) {
            echo "<tr style='background-color:silver;'>";
        } else {
            echo "<tr>";
        }

        echo "<td>$i</td><td>$j</td></tr>";
    }
}

echo "</table>";
?>
