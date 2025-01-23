<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT prenom, nom, naissance FROM etudiant WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['prenom'] . "</td>
            <td>" . $row['nom'] . "</td>
            <td>" . $row['naissance'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";

?>