    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
	<div class="row">
		<div class="col-10 offset-lg-1">
			<h1 class="text-center mt-5 mb-5">LISTADO</h1>

			<?php

echo "
			<table class='table table-striped'>
			  <thead>
			    <tr>
			      <th scope='col'>#</th>
			      <th scope='col'>Nombre</th>
			      <th scope='col'>Apellido</th>
			      <th scope='col'>Edad</th>
			      <th scope='col'>Editar</th>
			      <th scope='col'>Borrar</th>
			    </tr>
			  </thead>
			  <tbody>
";

		foreach ($listado as $row){
				echo "<tr>";
				echo "<td>".$row->idPersona."</td>";
				echo "<td>".$row->nombre."</td>";
				echo "<td>".$row->apellido."</td>";
				echo "<td>".$row->edad."</td>";
				echo "<td><a class='btn btn-success' href='".base_url()."persona/guardar/".$row->idPersona."'>Editar</a></td>";
				echo "<td><a class='btn btn-danger' href='".base_url()."persona/borrar/".$row->idPersona."'>Borrar</a></td>";
				echo "</tr>";
				}

	echo "
			  </tbody>
			</table>";	

?>
		</div>
	</div>
</div>


