<?php
include_once '../php/servidor.php';
$server = new servidor ();

$categorias = $server->getCategorias ();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ShoeShop - Nueva Categor�a</title>
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
		<img alt="LOGO" src="../../logo.png" width="150"> <a
			href="../../index.html">Inicio</a> <a href="../productos.html">Productos</a>
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
						<li><a href="acategorias.html"> CATEGOR�AS</a></li>
						<li><a href="anuevacategoria.html"> NUEVA CATEGOR�A</a></li>
					</ul>

				</td>

				<td>

					<div class="col s12 l9">

						<div class="card">

							<div class="card-content">
							<?php
							if (count ( $categorias ) > 0) {
								echo '
										<table class="responsive-table">


											<thead>

										<tr>

											<th>CODIGO</th>
											<th>NOMBRE</th>
											<th>OPCIONES</th>

										</tr>
									</thead>
									<tbody>';
								for($i = 0; $i < count ( $categorias ); $i ++) {
									
									echo '<tr>

											<td>' . $categorias[$i] ['id'] .'</td>
										    <td>' . $categorias [$i] ['nombre'] .'</td>
                                            
											<td>
												<button>EDITAR</button>
												<button>ELIMINAR</button>
										    </td>
									 </tr>';
								}
								
								echo '
				                 </tbody>

								</table>
                               ';
							}else {
								echo '
									<h4 class="center">No hay ategorias a mostrar </h4>'
							;
							}
							?>

								
							</div>

						</div>
					</div>


				</td>
	
	</table>



	<!-- ESTA ES LA SECCI�N DE PIE DE PAGINA -->
	<footer>

		<p>
			ShoeShop � 2006-2017<br> Contacto: contacto@shoeshop.com
		</p>


	</footer>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>


</body>
</html>
