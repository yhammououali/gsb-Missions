<script language="JavaScript">
    alert("Merci de remplir l'ensemble des champs du formulaire !");
</script>	
<script language="JavaScript">
    <!-- Begin
    function checkPass(form) {
        MDP1 = form.MDP1.value;
        MDP2 = form.MDP2.value;
        if (MDP1 != MDP2) {
            alert ("\nVos mots de passe ne correspondent pas. Merci de bien vouloir resaisir le mot de passe.")
            return false;
        }
        else return true;
    }
</script>
<div id="contenu">
<h2>Fomulaire d'ajout d'un nouvel utilisateur</h2>
<br>
	<form name="Formulaire" action="index.php?uc=gererUtilisateur&action=confirmerAjouterProduit" method="POST" onSubmit="return checkPass(this)" align="center">
	<table class="listeLegere">
	<tr>
		<th colspan = "2">Ajout d'un nouvel utilisateur</th>
	</tr>
	<tr>
		<td class="td"> Id : </td> <td> <input type = "text" size = "30" name = "id"> </td>
	</tr>	
		
	<tr>
		<td class="td"> Nom : </td> <td> <input type = "text" size = "30" name = "nom"> </td>
	</tr>

	<tr>
		<td class="td"> Prénom : </td> <td> <input type = "text" size = "30" name = "prenom"> </td>
	</tr>

	<tr>
		<td class="td"> Login : </td> <td> <input type = "text" size = "30" name = "login"> </td>
	</tr>

	<tr>
		<td class="td"> Mot de Passe : </td> <td> <input type = "password" size = "30" name = "MDP1"> </td>
	</tr>

	<tr>
		<td class="td"> Confirmer Mot de Passe : </td> <td> <input type = "password" size = "30" name = "MDP2"> </td>
	</tr>
        
        <tr>
		<td class="td"> Adresse : </td> <td> <input type = "text" size = "30" name = "adresse"> </td>
	</tr>
        
        <tr>
		<td class="td"> Cp : </td> <td> <input type = "text" size = "30" name = "cp"> </td>
	</tr>
        
        <tr>
		<td class="td"> Ville : </td> <td> <input type = "text" size = "30" name = "ville"> </td>
	</tr>
        
        <tr>
		<td class="td"> Date d'embauche : </td> <td> <input type = "text" size = "30" name = "dateEmbauche"> </td>
	</tr>
        
        <tr>
		<td class="td"> Statut : </td> <td class = "td2"> <input type = "text" size = "30" name = "statut"> </td>
	</tr>
        
	<tr>
		<td class="td" colspan="2" align="center"> <input type="submit" name="Valider" value="Ajouter"></td>
	</tr>
        
	</table>
	
	<br />
	
	<b>Attention afin d'éviter toutes erreurs, merci de bien vérifier que tous les champs sont complétés</b>
</div>