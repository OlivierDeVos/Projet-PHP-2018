<div class="container">
            <form class="form-horizontal" action="index.php?action=register" method="post">
                <h2>Inscription</h2>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Nom d'utilisateur</label>
                    <div class="col-sm-9">
                        <input name="login" type="text" id="username" placeholder="Nom d'utilisateur" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mot de passe</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" id="password" placeholder="Mot de passe" class="form-control" required>
                        <span class="help-block">Identifiants pour la connexion</span>
                    </div>
                </div>
                <hr>
                 <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nom</label>
                    <div class="col-sm-9">
                        <input name="firstName" type="text" id="firstName" placeholder="Nom" class="form-control" required autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Prénom</label>
                    <div class="col-sm-9">
                        <input name="lastName" type="text" id="lastName" placeholder="Prénom" class="form-control"  required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date de naissance</label>
                    <div class="col-sm-9">
                        <input name="date" type="date" id="birthDate" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" id="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Adress" class="col-sm-3 control-label">Adresse</label>
                    <div class="col-sm-9">
                        <input name="Adress" type="text" id="Adress" placeholder="Adresse" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Téléphone</label>
                    <div class="col-sm-9">
                        <input name="phone" type="text" id="phone" placeholder="Téléphone" class="form-control" required autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
                    </div>
                </div>
            </form> <!-- /form -->
        	<?php
	            if($notification=="Nom d'utilisateur indisponible"){ 
	            	echo '<p id="notif" class="alert alert-danger" role="alert">'.$notification.'</p>';
	        	}
            ?>
        </div> <!-- ./container -->