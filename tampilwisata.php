<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/khanesaagilfadilah/getwisata.php");

$data = json_decode($send, TRUE);

if (is_array($data) && count($data) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead>
            <tr>
                <th>ID Wisata</th>
                <th>Kota</th>
                <th>Landmark</th>
                <th>Tarif</th>
            </tr>
          </thead>";
    echo "<tbody>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id_wisata"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["kota"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["landmark"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["tarif"]) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Tidak ada data tersedia.";
}
?>
