<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto sencillo</title>
	
	<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>estilos/miestilo.css">
</head>
<body>
	<section class="direccionfisica">
		<div>
			<h1>
				Datos de contacto
			</h1>
			
				Para establecer contacto con Snow SA puedes 
				<ul>

					<li>llamar al teléfono <span>666 66 66 66</span>.</li>
				
					<li> <p>
						Escribir a nuestra dirección:
						Calle Infernal 66, Sexto A
						12004 Castellón
						España
						</p>
					</li>
				</ul>
		</div>
	</section>
	<section>
		<div>
			<ul>
				<li><span>También puedes rellenar este formulario:</span>
				</li>
			</ul>
			<form> //este formulario no hace nada
				<fieldset>
		    		<legend>Formulario:</legend>
					<fieldset>
			    		<legend>Datos personales:</legend>
						Nombre:
						<br>
			  			<input type="text" name="nombre">
			  			<br>
			  			Apellidos:
			  			<br>
			  			<input type="text" name="apellidos" size="40">
			  			<br>
			  			<input type="radio" name="genero" value="hombre" checked>Hombre
			  			<br>
			  			<input type="radio" name="genero" value="mujer"> Mujer<br>
			  			<input type="radio" name="genero" value="otro"> Otro
			  		</fieldset>
			  		<div class="mensaje">
			  			Mensaje:<br>
			  			<textarea name="mensaje" rows="10" cols="30">Escribe tu mensaje.</textarea><br>
			  		</div>
			  		<input type="submit" value="Enviar">
				</fieldset>
			</form>
		</div>
	</section>
	<section class="piedepagina">
		<div>
		Todos los derechos reservados 2017.
		</div>
	</section>
</body>
</html>