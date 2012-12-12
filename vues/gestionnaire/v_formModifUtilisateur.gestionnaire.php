<div id="contenu">
    <h2>Fomulaire de modification d'un utilisateur</h2>
    <br>

    <FORM NAME = "Formulaire" action = "index.php?uc=gererUtilisateur&action=confirmerModifierProduit&nom=<?php $nom ?>" METHOD = "POST" onSubmit = "return checkPass(this)" ALIGN = "CENTER">
        <table class="listeLegere">
            <tr>
                <th colspan = "2">Modification du visiteur <?php echo $_GET['nom']; ?></th>
            </tr>
            <tr>
                <td class="td"> Id : </td> <td> <input type = "text" size = "30" name = "id" value = "<?php echo $lutilisateur['id']; ?>"> </td>
            </tr>	
            <tr>
                <td class="td"> Nom : </td> <td> <input type = "text" size = "30" name = "nom" value = "<?php echo $lutilisateur['nom']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Prénom : </td> <td> <input type = "text" size = "30" name = "prenom" value = "<?php echo $lutilisateur['prenom']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Login : </td> <td> <input type = "text" size = "30" name = "login" value = "<?php echo $lutilisateur['login']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Mot de Passe : </td> <td> <input type = "text" size = "30" name = "MDP1" value = "<?php echo $lutilisateur['mdp']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Confirmer Mot de Passe : </td> <td> <input type = "text" size = "30" name = "MDP2" value = "<?php echo $lutilisateur['mdp']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Adresse : </td> <td> <input type = "text" size = "30" name = "adresse" value = "<?php echo $lutilisateur['adresse']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Cp : </td> <td> <input type = "text" size = "30" name = "cp" value = "<?php echo $lutilisateur['cp']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Ville : </td> <td> <input type = "text" size = "30" name = "ville" value = "<?php echo $lutilisateur['ville']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Date d'embauche : </td> <td> <input type = "text" size = "30" name = "dateEmbauche" value = "<?php echo $lutilisateur['dateEmbauche']; ?>"> </td>
            </tr>
            <tr>
                <td class="td"> Statut : </td> <td> <input type = "text" size = "30" name = "statut" value = "<?php echo $lutilisateur['statut']; ?>"> </td>
            </tr>
            <tr>
                <td class="td" colspan="2" align="center"> <input type="submit" name="Valider" value="Modifier"></td>
            </tr>
        </table>
    </FORM>
</div>