<?php
	require_once "../model/LutadorCRUD.php";

	$lutador = new Lutador(
		$_POST["nacionalidade"],
		$_POST["nascimento"],
		$_POST["altura"],
		$_POST["peso"],
		0,
		0,
		0,
		$_POST["nome"],
		$_POST["apelido"]
	);
	$LutadorCRUD = new LutadorCRUD();
	$LutadorCRUD->insert($lutador);
	header("location: ../view/index.php?");
?>