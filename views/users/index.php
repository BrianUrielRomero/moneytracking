<div class="row">
	<div class="col-xs-12">
		
	</div>
</div>
<h2>Usuarios</h2>
<div class="table-responsive">
	<table class="table table-striped"> 
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>Password</th>
			<th>Type</th>
			<th>Action</th>
		</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user["users"]["id"]; ?></td>
		<td><?php echo $user["users"]["username"]; ?></td>
		<td><?php echo $user["users"]["password"]; ?></td>
		<td><?php echo $user["types"]["name"]; ?></td>
		<td>

			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/users/edit/".$user["users"]["id"],
					array(
						"title"=>"Editar usuario",
						"target"=>"_blank"
					)
				);
			?>
			<?php
				echo $this->Html->link(
					"Delete", 
					"/users/delete/".$user["users"]["id"]
					
				);
			?>
			
		</td>
	</tr>
	<?php endforeach; ?>

	</table>
	<a href="<?php echo APP_URL; ?>/users/add" ><button  type="button" class="btn btn-primary" >Crear Usuarios</button></a>
</div>
