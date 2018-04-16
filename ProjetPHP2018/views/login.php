

	<div class="container">

      <form class="form-horizontal" action="index.php?action=login" method="post">
        <h2 class="form-signin-heading">Connectez-vous</h2>
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Nom d'utilisateur : </label>
          <div class="col-sm-9">
            <input type="text" name="name" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <label for="pw" class="col-sm-3 control-label">Mot de passe : </label>
          <div class="col-sm-9">
            <input type="password" name="pw" id="inputPassword" class="form-control" placeholder="Mot de passe" required autofocus>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9 col-sm-offset-3">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
          </div>
        </div>
      </form>


    
      <?php if($notification=="mot de passe invalide" || $notification=="Ce compte n'existe pas"){ 
      			echo '<p id="notif" class="alert alert-danger" role="alert">'.$notification.'</p>';
      		}
       		if($notification=="Votre compte est en cours de validation"){ 
      			echo '<p id="notif" class="alert alert-warning" role="alert">'.$notification.'</p>';
      		}
      ?>
    </div> <!-- /container -->