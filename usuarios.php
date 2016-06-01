<meta charset="UTF-8">
<table class="table table-striped table-bordered text-center">
	<thead>
		<tr class="success">
			<th>
				ID
			</th>
			<th>
				Login
			</th>
			<th>
				Email
			</th>
			<th>
				Permissão
			</th>	
		</tr>	
	</thead>
	<tbody>
		<?php 
			$select = $mysqli->query("SELECT * FROM usuarios ORDER BY id ASC");
			$row = $select->num_rows;
			if($row > 0) {
				while($get = $select->fetch_array()) {
		?>
		<tr>
			<td>
				<?=$get["id"]?>
			</td>
			<td>
				<?=$get["Usuario"]?>
			</td>
			<td>
				<?=$get["Email"]?>
			</td>
			<td>
				<?=$get["Permissao"]?>
			</td>
		</tr>
		<?php 
				}
			} else {
		?>
		<h4> Não existe nenhum usuário! </h4>
		<?php
			}
		?>
	</tbody>			
</table>