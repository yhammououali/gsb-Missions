<?php
echo "<div id='contenu'>";
echo "<h2>Frais Forfaitisés Simple</h2>";
echo "<br>";

echo "<table class='listeLegere'>";
echo "<tr>";
    echo "<th class='libelle'>ID</th>";
    echo "<th class='libelle'>Libellé</th>";
    echo "<th class='montant'>Montant</th>";
echo "</tr>"; 

foreach($tousFraisForfait as $leFraisForfait)
    {
    $id=$leFraisForfait["id"];
    $libelle=$leFraisForfait["libelle"];
    $montant=$leFraisForfait["montant"];
    echo "<tr>";
        echo "<td class='td'> $id </td>";
        echo "<td class='td'> $libelle </td>";
        echo "<td class='td'> $montant €</td>";
    echo "</tr>";
    }

echo "</table>";
echo "</div>";
?>
