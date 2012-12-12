<div id="contenu">
      <h2>Identification utilisateur</h2>
      <br />
<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
    <table>
        <tr>
            <td align="right">
                <label for="nom">Login*</label>
                <input id="login" type="text" name="login"  size="30" maxlength="45" value="Yassin">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mdp">Mot de passe*</label>
                <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45" value="yassin">
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" value="Valider" name="valider">
                <input type="reset" value="Annuler" name="annuler">
            </td>
        </tr>
    </table>
</form>
</div>