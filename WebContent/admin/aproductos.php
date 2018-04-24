<?php
include_once '../php/servidor.php';

$server = new servidor ();
$productos = $server->getProductos ();

?>

<!DOCTYPE html>
<html>
<head>


<meta charset="UTF-8">
<title>ShoeShop - Productos</title>
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



	<table class="red">


		<tbody>

			<tr>

				<td width="250" valign="top">

					<h2>MENÚ</h2>

					<ul>
						<li><a href="aproductos.html"> PRODUCTOS</a></li>
						<li><a href="anuevoproducto.html"> NUEVO PRODUCTO</a></li>
						<li><a href="acategorias.html"> CATEGORÍAS</a></li>
						<li><a href="anuevacategoria.html"> NUEVA CATEGORÍA</a></li>
					</ul>

				</td>


				<td>

					<div class="col s12 l9">

						<div class="card">

							<div class="card-content">
							<?php
							if (count ( $productos ) > 0) {
								echo '
										<table class="responsive-table">


											<thead>

										<tr>

											<th>CODIGO</th>
											<th>NOMBRE</th>
											<th>COSTO</th>
											<th>PRECIO</th>
											<th>CATEGORIA</th>
											<th>OPCIONES</th>

										</tr>
									</thead>
									<tbody>';
								for ($i=0; $i<count($productos); $i++){
							
								 echo'<tr>

											<td>' .$productos[$i]['codigo'].'</td>
										    <td>' .$productos[$i]['nombre'].'</td>
                                            <td>$' .number_format($productos[$i]['costo'], 0,'.',',').'</td>
                                            <td>$' .number_format($productos[$i]['precio'],0,'.',',').'</td>
                                            <td>' .$productos[$i]['nombreCategoria'].'</td>
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
							}
					?>

								
							</div>

						</div>
					</div>
				</td>


			</tr>

		</tbody>

	</table>








	<!-- ESTA ES LA SECCIÓN DE PIE DE PAGINA -->
	<footer>

		<p>
			ShoeShop © 2006-2017<br> Contacto: contacto@shoeshop.com
		</p>


	</footer>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>