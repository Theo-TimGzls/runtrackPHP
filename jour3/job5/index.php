<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("voyelles" => 0, "consonnes" => 0);

$voyelles = array('a', 'e', 'i', 'o', 'u', 'y');

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); 

    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>" . (isset($dic["voyelles"]) ? $dic["voyelles"] : 0) . "</td>
                <td>" . (isset($dic["consonnes"]) ? $dic["consonnes"] : 0) . "</td>
            </tr>
        </tbody>
      </table>";
?>
