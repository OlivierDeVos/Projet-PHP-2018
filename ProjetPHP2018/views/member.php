<section id="contenu">
	<h2>Formulaire de modification d'information</h2>
			<div class="form">
				<form action="index.php?action=members" method="post">
				<p>nom d'utilisateur<input type="text" name="login" /></p>
				<p>mot de passe<input type="text" name="password" /></p>
				<p>prénom<input type="text" name="name" /></p>
				<p>nom<input type="text" name="lastname" /></p>
				<p>date de naissance<input type="text" name="birthdate" /></p>
				<p>adresse<input type="text" name="adress" /></p>
				<p>numéro de téléphone<input type="text" name="phone" /></p>
				<p>adresse e-mail<input type="text" name="mail" /></p>
                <p>photo de profil<input type="image" name="picture" /></p>

				<p><input type="submit" name="form_modification_member" value="modify"></p>
				</form>
			</div>
			<div id="notification"><?php echo $notification; ?></div>
		</section>
