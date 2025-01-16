<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$nouvelleStr = "";
$longueur = strlen($str);

for ($i = 0; $i < $longueur; $i++) {
    if ($i == $longueur - 1) {
        $nouvelleStr .= $str[0];
    } else {
        $nouvelleStr .= $str[$i + 1];
    }
}

echo $nouvelleStr;
?>