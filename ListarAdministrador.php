<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" >
		<title>Inicio</title>
	</head>
	
	
	<body>
			<div id="cabecalho">
			<img id="img1" src = "img/logo.png">
			</div>
			<div id="menu">
				<center>
				<ul>
					<li><a href="InicioAdministrador.php">Inicio</a></li>
					<li><a href="CategoriaAdministrador.php">Categoria</a></li>
					<li><a href="">Contato</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="ListarAdministrador.php">Listar</a></li>
				</ul>
				</center>
			</div>
			<div id="corpo">
			<br></br>
			<center><div id="demoFont">Pessoas Cadastradas Para Receber Ofertas</div></center>
	
			<table border="1">
		<thead>
			<tr>
			<td id="li">ID Pessoa</td>
			<td id="li">Nome</td>
			<td id="li">Email</td>
			</tr>	
	<?php
	include "listarPessoas.php";
	listarPessoas();
	?>
	</thead>
	</table>
			</div>
			<div id="rodape">
			<table>
			<tr>
			</br>
			</tr>
			<tr>
			<td>
			&ensp;&ensp;<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/204_nike.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-10-10/2918_adidas.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-11-05/1918_puma.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-09-27/8918_mizuno.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/2338_olimpikus.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/188_new_balance.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/1214_gonew.png" alt="">
			</td>
			<td>
			<img src="https://static.netshoes.com.br/banners/l_netshoes/2018-06-12/1476_under.png" alt="">
			</td>
			</tr>
			</table>
			</div>
			</table>
			</div>
			</div>
	
	</body>

</html>