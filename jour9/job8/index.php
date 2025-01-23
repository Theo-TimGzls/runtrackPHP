<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT SUM(capacite) AS capacite_totale FROM salles");
$request->execute();
$query = $request->get_result();
$row = $query->fetch_assoc();

echo "<table border='1'>
            <thead>
                <tr>
                <th>Capacite Totale</th>
                </tr>
            </thead>
            <tbody>";
echo "<tr>
        <td>" . $row['capacite_totale'] . "</td>
      </tr>";
echo "</tbody>
      </table>";

?>