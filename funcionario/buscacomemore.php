<?php

include 'conectacomemore.php';

$res = $con->query('select ds_nome, ds_genero, ds_preco, ds_data_compra from tb_tema order by ds_nome;');

echo "<table border='1'>";
while ($row = $res->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
	echo "<td>" . $row['ds_nome'] . "</td>";
	echo "<td>" . $row['ds_genero'] . "</td>";
	echo "<td>" . $row['ds_preco'] . "</td>";
	echo "<td>" . $row['ds_data_compra'] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>