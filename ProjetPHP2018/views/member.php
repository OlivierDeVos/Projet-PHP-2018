<div class="container">
            <form class="form-horizontal" action="index.php?action=membre" method="post" enctype="multipart/form-data">
                <h2>Modification</h2>
               <!-- <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mot de passe</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" id="password" placeholder="Mot de passe" class="form-control" required>
                    </div>
                </div>-->
                 <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Prénom</label>
                    <div class="col-sm-9">
                        <input name="firstName" type="text" id="firstName" value="<?php echo $user->firstName(); ?>" class="form-control" required autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Nom</label>
                    <div class="col-sm-9">
                        <input name="lastName" type="text" id="lastName" value="<?php echo $user->lastName(); ?>" class="form-control"  required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date de naissance</label>
                    <div class="col-sm-9">
                        <input name="date" type="date" value="<?php echo $user->birthDate(); ?>" id="birthDate" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" id="email" value="<?php echo $user->mail(); ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Adress" class="col-sm-3 control-label">Adresse</label>
                    <div class="col-sm-9">
                        <input name="Adress" type="text" id="Adress" value="<?php echo $user->adress(); ?>" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Téléphone</label>
                    <div class="col-sm-9">
                        <input name="phone" type="text" id="phone" value="<?php echo $user->phone(); ?>" class="form-control" required autofocus>
                    </div>
                </div>
               <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                            <span class="btn btn-primary" style="background-color: #FFF; border-color: #C8C8C8; width: 100%;">
                                <input type="file" name="picture" style="background-color: #FFF; color: #000; width: 100%;"><input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
                            </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
                    </div>
                </div>
            </form> <!-- /form -->
        	<?php
	            if($notification=="Nom d'utilisateur indisponible"){ 
	            	echo '<p id="notif" class="alert alert-danger" role="alert">'.$notification.'</p>';
	        	}
            ?>
        </div> <!-- ./container -->