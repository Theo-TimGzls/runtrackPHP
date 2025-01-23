<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT capacite, nom FROM salles");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacite</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['nom'] . "</td>
            <td>" . $row['capacite'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";

?>