<h1>ESPACE RESPONSABLE</h1>

<h3>Valdation</h3>
<form action="index.php?action=responsable" method="post">
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nom</th>
	      <th scope="col">Prénom</th>
	      <th scope="col">Validation</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php for ($i=0;$i<count($tablogin);$i++) { ?>
	    <tr>
	      <th scope="row"><?php echo ($i+1) ?></th>
	      <td><?php echo $tablogin[$i]->lastName() ?></td>
	      <td><?php echo $tablogin[$i]->firstName() ?></td>
	      <td>	
	      	<input type="checkbox" name="choix[]" value=<?php echo '"'.$i.'"'?>>
   		  </td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>
	<div class="col-sm-2 col-sm-offset-0">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
    </div>
</form>
<br>
<br>
