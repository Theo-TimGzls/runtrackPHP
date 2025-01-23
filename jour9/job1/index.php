<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT * FROM etudiant");
$request->execute();
$query = $request->get_result();

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['prenom'] . "</td>
            <td>" . $row['nom'] . "</td>
            <td>" . $row['naissance'] . "</td>
            <td>" . $row['sexe'] . "</td>
            <td>" . $row['email'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";

?>