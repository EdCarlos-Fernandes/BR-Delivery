<?php
include('../../../_core/_includes/config.php');
restrict_estabelecimento();
restrict_expirado();
$subtitle = "Retirada";
?>

<!-- Aditional Header's -->


<?php

	$id = $_GET['id'];
	$eid = $_SESSION['estabelecimento']['id'];
	$nome = $_GET['nome'];
    $whats = $_GET['whats'];
	
	

	// VERIFICA SE O USUARIO TEM DIREITOS

	$edit = mysqli_query( $db_con, "UPDATE pedidos SET status = '6' WHERE id = '$id' AND rel_estabelecimentos_id = '$eid'");
	
	if( $edit ) {

		header("Location: ../index.php?msg=retirada&nome=$nome&whats=$whats");
	
	} else {

		header("Location: ../index.php?msg=erro");

	}

?>



