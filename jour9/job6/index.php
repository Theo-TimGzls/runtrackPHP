<?php

$username = 'root';
$password = ''; 

$db = new mysqli('localhost', $username, $password, 'jour8');

$request = $db->prepare("SELECT COUNT(id) AS nb_etudiants FROM etudiant");
$request->execute();
$query = $request->get_result();
$row = $query->fetch_assoc();

echo "<table border='1'>
            <thead>
                <tr>
                <th>Nombre d'étudiants</th>
                </tr>
            </thead>
            <tbody>";
echo "<tr>
        <td>" . $row['nb_etudiants'] . "</td>
      </tr>";
echo "</tbody>
      </table>";

?>