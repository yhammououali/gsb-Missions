<?php
echo "<div id='contenu'>";
echo "<h2>Période</h2>";
echo "<br>";

echo "Mois/Année : "; 
echo "<form method='post' action='index.php?uc=fraisForfait&action=consulterFraisForfaitParMois'>";
echo "<select id='lstMois' name='lstMois'>";

foreach ($lesMois as $unMois)
{
    $mois = $unMois['mois'];
    $numAnnee =  $unMois['numAnnee'];
    $numMois =  $unMois['numMois'];
    if($mois == $moisASelectionner){
        
    echo "<option selected value='$mois '>$numMois/$numAnnee  </option>";
    }
        else
        { 
        echo "<option value=' $mois '>  $numMois/$numAnnee  </option>";
        }
}
echo "</select>";
echo "</form>";
echo "<h3>Frais au forfait</h2>";
echo "<table class='listeLegere'>";
echo "<tr>";
    echo "<th>Numéro de visiteur</th>";
    echo "<th>Repas midi</th>";
    echo "<th>Nuitée</th>";
    echo "<th>Etape</th>";
    echo "<th>Km</th>";
//    echo "<th>Situation</th>";
//    echo "<th>Date opération</th>";
//    echo "<th>Remboursement</th>";
echo "</tr>";

foreach($tousFraisForfaitMois as $leFraisForfaitMois)
    {
    $id=$leFraisForfaitMois["idVisiteur"];
    $libelle=$leFraisForfaitMois["libelle"];
    $montant=$leFraisForfaitMois["montant"];
    echo "<tr>";
        echo "<td class='td'> $id </td>";
        echo "<td class='td'> $libelle </td>";
        echo "<td class='td'> $montant </td>";
    echo "</tr>";
    }

echo "</table>";
echo "</div>";
?>