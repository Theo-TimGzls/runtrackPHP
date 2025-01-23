<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT salles.nom AS nom_salles, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Nom de la salle</th>
                    <th>Nom de l'etage</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['nom_salles'] . "</td>
            <td>" . $row['nom_etage'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";

?>