<?php
include_once '../php/servidor.php';
$server = new servidor ();

$categorias = $server->getCategorias ();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ShoeShop - Nuevo Producto</title>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"
	media="screen,projection" />

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<!-- MENU DE NAVEGACION -->
<nav>
  <img alt="LOGO" src="../../logo.png" width="150">		
  <a href="../../index.html">Inicio</a>
  <a href="../productos.html">Productos</a>
  <a href="login.html">Entrar</a>
</nav>


<table>

		
		<tbody>
		
				<tr>
				
					<td width="250" valign="top">
					
						<h2>MENU</h2>
					
						<ul>
							<li><a href="aproductos.html"> PRODUCTOS</a></li>
							<li><a href="anuevoproducto.html"> NUEVO PRODUCTO</a></li>
							<li><a href="acategorias.html"> CATEGORÃ�AS</a></li>
							<li><a href="anuevacategoria.html"> NUEVA CATEGORÃ�A</a></li>
						</ul>							
					
					</td>
					
					
					
					<td>
					
							<form >
								<label for="codigo">CODIGO</label>
								<input id="codigo" type="text"></input>
								
								<br>
								<br>
								
								<label for="nombre">NOMBRE</label>
								<input id="nombre" type="text">
								
								
								<br>
								<br>
								
								<label for="costo">COSTO</label>
								<input id="costo" type="text">
								
								
								<br>
								<br>
								
								<label for="precio">PRECIO</label>
								<input id="precio" type="text">
								
								
								<br>
								<br>
								
								<label for="descripcion">DESCRIPCIÃ“N</label>
								<textarea id="descripcion" rows="" cols=""></textarea>
								
								
								<br>
								<br>
								
								
								<label for="imagen">IMAGEN</label>
								<input id="imagen" type="FILE">
								
								
								<br>
								<br>
								
								<div class="input-field col s12">
								<textarea id="descripcion" class="materialize-textarea"></textarea>
							    <label for="descripcion">DESCRIPCION</label>
							    <<div class="input-field col s12"></div>
							    
								<select>
								<?php 
								for($i = 0; $i < count ( $categorias ); $i ++) {
									echo'
';
								}
								?>
								
								</select>
																
								
								<br>
								<br>
								
								<button>GUARDAR</button>
								<button>CANCELAR</button>
							</form>
					
					
					</td>

</table>



<!-- ESTA ES LA SECCIÃ“N DE PIE DE PAGINA -->
<footer >

	<p>ShoeShop Â© 2006-2017<br>
		Contacto: contacto@shoeshop.com
	</p>


</footer>
<!--Import jQuery before materialize.js-->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>


</body>
</html>
