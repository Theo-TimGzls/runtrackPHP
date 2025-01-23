<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT prenom, nom, naissance FROM etudiant WHERE sexe ='Femme'");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
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