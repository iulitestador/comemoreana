<?php
	// Recebe os dados a ser alterados

	include 'conectacomemore.php';
	
	//Query de pegar os dados a ser atualizados
	
	$id_tema = $_REQUEST['id_tema'];
	
	$stmt = $con->prepare('
	SELECT ds_nome, ds_descricao, ds_genero, ds_data_compra, ds_preco, tb_categoria_id_categoria, id_tema
	FROM tb_tema
	WHERE id_tema = :id_tema
	');
	
	$stmt->execute(array(':id_tema' => $id_tema));
	$tema = $stmt->fetch(PDO::FETCH_ASSOC);

	//Query de update
	
	//Pegandos os novos dados enviados pelo action
	if (isset($_REQUEST['ds_nome'])) {
		
		$ds_nome = $_REQUEST['ds_nome'];
		$ds_descricao = $_REQUEST['ds_descricao']; 
		$ds_genero = $_REQUEST['ds_genero$_REQUEST'];
		$ds_data_compra = $_REQUEST['ds_data_compra'];
		$ds_preco = $_REQUEST['ds_preco'];
		$tb_categoria_id_categoria = $_REQUEST['tb_categoria_id_categoria'];
		$id_tema = $_REQUEST['id_tema'];
		
		$stmt = $con->prepare('
		update tb_tema
		set ds_nome = :ds_nome, ds_descricao = :ds_descricao, ds_genero = :ds_genero, ds_data_compra = :ds_data_compra, 
		ds_preco = :ds_preco, tb_categoria_id_categoria = :tb_categoria_id_categoria
		where id_tema = :id_tema;
		');
		
		$stmt->execute(array(
		':ds_nome' => $ds_nome,
		':ds_descricao' => $ds_descricao,
		':ds_genero' => $ds_genero,
		':ds_data_compra' => $ds_data_compra,
		':ds_preco' => $ds_preco,
		':tb_categoria_id_categoria' => $tb_categoria_id_categoria,
		'id_tema' => $id_tema;
		));
		
	}
	
	
?>



