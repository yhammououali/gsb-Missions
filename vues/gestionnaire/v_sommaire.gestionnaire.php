<div id="menuGauche">
	<div id="infosUtil">
    </div>  
	<ul id="menuList">
		<li >Gestionnaire : <br>
			<?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom']. "<br>" ?>
		</li>
		<br>
		<li class="smenu">
			<a href="index.php?uc=gererUtilisateur&action=ajouterUtilisateur" title="Ajout d'un utilisateur">Ajout utilisateur</a>
		</li>
		<li class="smenu">
			<a href="index.php?uc=gererUtilisateur&action=voirTousUtilisateurs" title="Administration des utilisateurs">Administrer utilisateur</a>
		</li>
		<br>
		<li class="smenu">
			<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
		</li>
	</ul>
</div>