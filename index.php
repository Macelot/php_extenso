<?php
header('Content-Type:text/html; charset=UTF-8');
echo "<table border=1>";
echo "<tr><td>Contador</td><td>Extenso</td></tr>";
for ($i=1; $i <=999 ; $i++) { 
    $url="http://localhost/extenso_array.php?v=".$i;
    $result = file_get_contents($url);
    echo "<tr><td>$i</td>";
    echo "<td>$result</td></tr>";
}
echo "</table>";