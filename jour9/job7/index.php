<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT SUM(superficie) AS superficie_totale FROM etage");
$request->execute();
$query = $request->get_result();
$row = $query->fetch_assoc();

echo "<table border='1'>
            <thead>
                <tr>
                <th>Superficie Totale</th>
                </tr>
            </thead>
            <tbody>";
echo "<tr>
        <td>" . $row['superficie_totale'] . "</td>
      </tr>";
echo "</tbody>
      </table>";

?>