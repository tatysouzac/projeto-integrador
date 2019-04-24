<?php

function listarPessoas(){

include "conexao.php";

$sql="select * from cliente_ofertas";

$result=mysqli_query($conexao,$sql);

while ($linha = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$linha['0']."</td>";
		echo "<td>".$linha['1']."</td>";
		echo "<td>".$linha['2']."</td>";
		echo "</tr>";

}
 
}





?>