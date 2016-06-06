<?php

include 'conectacomemore.php';

$res = $con->query('select id_categoria, ds_nome from tb_categoria order by ds_nome;');

while ($row = $res->fetch(PDO::FETCH_ASSOC)){
	var_dump($row);
	echo '<br>';
}

?>