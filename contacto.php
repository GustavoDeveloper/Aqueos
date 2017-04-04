<?php 
include 'header.php';
 ?>

<div class="contenedorfull">
	<div class="col-xs-6">
		<div class="panel-form">
			<div class="form-head">Formulario de Contacto</div>
			<div class="form-body">
				<form method="post">
					<div class="row">
						<div class="col-xs-12">
							<input class="textfield"type="text" name="nombre" placeholder="Nombres" id="nombre" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input class="textfield"type="text" name="apellidos" placeholder="Apellidos" id="apellidos" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input class="textfield"type="text" name="direccion" placeholder="Direccion" id="direccion" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<input class="textfield"type="tel" name="telefono" pattern="[0-9]{7}" placeholder="Telefono Fijo" id="telefono" required>
						</div>
						<div class="col-xs-6">
							<input class="textfield"type="tel" name="Celular" pattern="[0-9]{10}" placeholder="Celular" id="Celular" required>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<input class="textfield"type="email" name="correo" placeholder="Correo Electronico" id="correo" required>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <br>
 <br>
 <br>
 <br>
 <br>
<?php
	include 'footer.php';
?>