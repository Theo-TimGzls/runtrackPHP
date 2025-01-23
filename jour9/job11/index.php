<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT AVG(capacite) AS capacite_moyenne FROM salles");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Capacite_moyenne</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['capacite_moyenne'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";

?>