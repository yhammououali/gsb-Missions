<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
echo "<table>";
    echo "<tr>";
        echo "<td>" . "Êtes-vous sur de vouloir supprimer l'utilisateur : " . $nom . " ?" . "</td>";
        echo "<br />";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . "<form action='index.php?uc=gererUtilisateur&action=confirmerSupprimerUtilisateur&id=$id&nom=$nom' method='POST'>";
        echo "<input type='submit' value='OUI'>";
        echo "</form>" . "</td>";
        echo "</tr>";
        echo "<br />";
        echo "<br />";
        echo "<tr>";
        echo "<td>" . "<form action='index.php?uc=gererUtilisateur&action=voirTousUtilisateurs' method='POST'>";
        echo "<input type='submit' value='NON'>" . "</td>";
        echo "</form>";
    echo "</tr>";
echo "</table>";
?>
