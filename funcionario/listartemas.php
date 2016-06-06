<style>
.temas{	
	margin:0 auto;	
		}
.contTemas{	
	margin:0 auto;
}
</style>

<h1>TEMAS</h1>
Nome do tema:<br />
<input type="text" /><br />

Data:<br />
<input type="text" /><br /><br /><br />
<div class="contTemas">
<div class="temas">
<h2>Lista de temas</h2>
<table width="100%" border="1">
  <tr align="center">
    <td>Nome</td>
    <td>valor</td>
    <td>Disponibilidade</td>
	<td>comando</td>
	<td>comando</td>
  </tr>
<?php
	include 'conectacomemore.php';
	$res = $con->query('SELECT ds_nome, ds_preco, ds_status, id_tema FROM tb_tema ORDER BY ds_nome;');
	while($row = $res->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>' . $row['ds_nome'] . '</td>';
		echo '<td>' . $row['ds_preco'] . '</td>';
		echo '<td>' . $row['ds_status'] . '</td>';
		echo '<td>' . $row['id_tema'] . '</td>';
		echo '<td>' . $row['id_tema'] . '</td>';
		echo '</tr>';
	}
?>

</table>

</div><br />
<table width="100%">
  <tr>
    <td><a href="?pag=cadastrarpedido"><button value="Alugar" >Alugar</button></a></td>
    <td align="right"><button value="Alugar" >Desativar</button></td>
  </tr>
  <tr>
    <td><button value="Exibir Dados" >Exibir Dados</button></td>
    <td align="right"><a href="?pag=cadastrartema"><button value="Novo" >Novo</button></a></td>
  </tr>
</table>

</div>
