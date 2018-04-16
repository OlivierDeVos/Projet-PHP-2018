<section id="contenu">
	<h2>Calendrier</h2>
	<table id="table">
		<thead>
            <tr>
			<th>Date</th>
			<th>Evénement</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($tabevent as $i => $event) { ?>
				<tr>
				<td><span class="html"><?php echo $date->html_date() ?></span></td>
				<td><?php echo $name->html_name()?></td>		
				</tr>
			<?php } ?>
		</tbody>
	</table>
</section>
