<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Guardar Persona</title>
  </head>
  <body>
<?php echo validation_errors();?>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-6 offset-lg-3">
    			<h1 class="text-center pt-3">Guardar Persona</h1>
    			<?php echo form_open('');?>
    			<?php

				$attributes = array(
				'class' => 'mycustomclass',
				'style' => 'color: #000;'
				);

				$data1 = array(
				'name'  => 'nombre',
				'id'    => 'nombre',
				'placeholder' => 'Winston',
                'value' => "{$nombre}",
				'class' => 'form-control'
				);

                $data2 = array(
                'name'  => 'apellido',
                'id'    => 'apellido',
                'value' => "{$apellido}",
                'placeholder' => 'Bravo',
                'class' => 'form-control'
                );

                $data3 = array(
                'name'  => 'edad',
                'id'    => 'edad',
                'value' => "{$edad}",
                'placeholder' => '27',
                'class' => 'form-control'
                );

                $data4 = array(
                'name'  => 'edad',
                'id'    => 'hiddenemail',
                'class' => 'btn btn-primary mt-3 text-center d-flex',
                'style' => 'margin:0 auto'
                );                   


				echo form_label('Nombre', 'hiddenemail', $attributes);
				echo form_input($data1);

                echo form_label('Apellido', 'hiddenemail', $attributes);
                echo form_input($data2);

                echo form_label('Edad', 'hiddenemail', $attributes);
                echo form_input($data3);

                echo form_submit('mysubmit', 'Submit Post!',$data4);

    			?>

    			<?php echo form_close();?>
    		</div>
    	</div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>