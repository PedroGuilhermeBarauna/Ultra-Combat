<?php 
	require_once "../model/lutaCRUD.php";


	$desafiante = $_POST['desafiante'];
	$desafiado = $_POST['desafiado'];

	$lutaCRUD = new lutaCRUD();
	$luta = new Luta($desafiante, $desafiado);


	$lutaCRUD->insert($luta);
	header("location: ../view/index.php");
?>