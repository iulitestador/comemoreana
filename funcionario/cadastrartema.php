<html>
	<head>
		<meta charset='utf-8'/>
		<title>Formulario Teste</title>

	</head>
<?php
	
	if(@$_REQUEST['ds_tema']){
	
	$ds_tema = $_REQUEST['ds_tema']; 
	$ds_descricao = $_REQUEST['ds_tema'];
	$ds_genero = $_REQUEST['genero'];
	$ds_data_compra = $_REQUEST['data_tema']; 
	$ds_preco = $_REQUEST['preco']; 
	$tb_categoria_id_categoria = $_REQUEST['cat_tema'];
	
	include 'conectacomemore.php';
	
	$stmt = $con->prepare('
	insert into tb_tema (ds_tema, ds_descricao, ds_genero, ds_data_compra, ds_preco, tb_categoria_id_categoria)
	values
	(:ds_tema, :ds_descricao, :ds_genero, :ds_data_compra, :ds_preco, :tb_categoria_id_categoria)
	');
	try {
		$stmt->execute(array(
		':ds_tema' => $ds_tema, 
		':ds_descricao' => $ds_descricao, 
		':ds_genero' => $ds_genero, 
		':ds_data_compra' => $ds_data_compra, 
		':ds_preco' => $ds_preco, 
		':tb_categoria_id_categoria' => $tb_categoria_id_categoria
	));
	echo "<script type='text/javascript'>alert('funcionou!');</script>";
	include ('login2.php');
	} catch (PDOException $e) {
		echo $e;
	}
	
	}
	
?>	
	
	
	<body>
			<form action='cadastrartema.php' method='GET'>
				
                <center><h1> Cadastrar Tema-PHP</h1></center>
                <fieldset><br>
					<table>
						<tr>
						<td>Nome do Tema:</td>
						<td><input type='text' name='ds_tema' maxlength='80' size='38' /></td>		
						</tr>
						<tr>
						<td>Descrição:</td>
						<td><textarea rows="10" cols="40" name='ds_tema'> </textarea> </td>	
						</tr>
						</tr>
						<td><br>Gênero:<br><br></td>
						<td><br>
							<input type='radio' name='genero' value='M'>Masculino     
							<input type='radio' name='genero'value='F'>Feminino     
							<input type='radio' name='genero'value='U'>Unissex
						<br><br></td>
						</tr>
						<td>Data:</td>
						<td><input type="date" name="data_tema"></td>
						</tr>
						<td>Preço:</td>
						<td><input type="text" name="preco" maxlength='12' size='16'></td>
						</tr>
						<td>Adicionar imagem: </td>
						<td><input type="file" name="img_tema" value='Selecionar imagem'></td>
						</tr>
						</tr>
							<td>Categoria:</td>
								<td>
									<select name='cat_tema'>
										<option value='1'>Heróis</option>
										<option value='2'>Princesas</option>
										<option value='3'>Animes</option>
										<option value='4'>Video Game</option>
									</select>
								</td>
						</tr>						
					</table><br></fieldset><br>
                    <center>
					<input type='submit' value='Salvar'/>
					<input type='button' value='Cancelar'/>
			</form></center>
			
			
	
	</body>
	
	
	
	
	
	
	
	
</html>