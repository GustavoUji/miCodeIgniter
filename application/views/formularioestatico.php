<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto sencillo</title>	
<style type="text/css">
	.piedepagina {
		color: lightblue;
		padding-top: 40px;
		padding-right: 10px;
		text-align: right;
	}
	fieldset {
		background-color: lightyellow;
	}
	fieldset fieldset {
		background-color: lightgreen;
		border-color: red;
		border-width: 4px;
	}

	fieldset input {
		margin-left: 70px;
		background-color: lightblue;
	}
	legend {
		color: blue;
		padding-left: 10px;
		padding-right: 10px;
	}
	h1 {
		color: darkgrey;
	}
	div span {
		color: violet;
	}
	textarea {
		border-color: red;
		border-width: 4px;
		background-color: lightblue;
	}
	.mensaje {
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.direccionfisica {
		padding-top: 30px;
	}
	.direccionfisica p {	 
		 letter-spacing: 2px;
	}
	ul {
	    list-style-image: url('sqpurple.gif');
	}
	/* Menu   */
	ul.nav {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	    position: fixed;
	    top: 0;
	    width: 100%;
	    opacity: 0.7;
	}

	ul.nav li {
	    float: left;
	}

	ul.nav li a, .dropbtn {
	    display: inline-block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	ul.nav li a:hover, .dropdown:hover .dropbtn {
	    background-color: red;
	}

	ul.nav li.dropdown {
	    display: inline-block;
	}

	li .dropdown-content {
	    display: none;
	    position: absolute;
	    background-color: #f9f9f9;
	    min-width: 160px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    z-index: 1;
	}

	li.dropdown .dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	    text-align: left;
	}

	li.dropdown .dropdown-content a:hover {background-color: #f1f1f1}

	li.dropdown:hover .dropdown-content {
	    display: block;
	}
</style>

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
			<form> 
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