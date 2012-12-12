<div id="contenu">
    <h2>Administration</h2>
    <br>
    
    <?php
        //Affichage dans un tableau de tout les utilisateurs
        echo "<table class='listeLegere'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prenom</th>";
        echo "<th>Login</th>";
        echo "<th>Adresse</th>";
        echo "<th>Cp</th>";
        echo "<th>Ville</th>";
        echo "<th>Date d'embauche</th>";
        echo "<th>Statut</th>";
        echo "<th colspan='2'>Administration</th>";
        echo "</tr>";

        //Boucle qui va parcourir tout les utilisateurs
        foreach($lesUtilisateurs as $unUtilisateur)
        {
            $id = $unUtilisateur['id'];
            $nom = $unUtilisateur['nom'];
            $prenom = $unUtilisateur['prenom'];
            $login = $unUtilisateur['login'];
            $mdp = $unUtilisateur['mdp'];
            $adresse = $unUtilisateur['adresse'];
            $cp = $unUtilisateur['cp'];
            $ville = $unUtilisateur['ville'];
            $dateEmbauche = $unUtilisateur['dateEmbauche'];
            $statut = $unUtilisateur['statut'];
            
            echo "<tr>";
            echo "<td class='td'> $id </td>";
            echo "<td class='td'> $nom </td>";
            echo "<td class='td'> $prenom </td>";
            echo "<td class='td'> $login </td>";
            echo "<td class='td'> $adresse </td>";
            echo "<td class='td'> $cp </td>";
            echo "<td class='td'> $ville </td>";
            echo "<td class='td'> $dateEmbauche </td>";
            echo "<td class='td'> $statut </td>";
            echo "<td class='td'> <a href='index.php?uc=gererUtilisateur&action=modifierProduit&nom=$nom'>Modifier</a> </td>";
            echo "<td class='td'> <a href='index.php?uc=gererUtilisateur&action=supprimerUtilisateur&id=$id&nom=$nom'>Supprimer</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</div>