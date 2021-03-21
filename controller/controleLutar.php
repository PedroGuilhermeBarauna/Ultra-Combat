<?php  
	require_once "../model/lutaCRUD.php";
	require_once "../model/lutadorCRUD.php";

	$LutadorCRUD = new LutadorCRUD();
	$LutaCRUD = new lutaCRUD();

	// Pego todas as lutas marcadas.
	$desafiantesMarcadas = $LutaCRUD->getDesafiantesMarcadas();
	$desafiadosMarcadas = $LutaCRUD->getDesafiadosMarcadas();

	$contadorLutasMarcadas = count($desafiadosMarcadas);


    // Pego todas as luta já concluidas e os ganhadores
    $desafiantesConcluidas = $LutaCRUD->getDesafiantesConcluidas();
    $desafiadosConcluidas = $LutaCRUD->getDesafiadosConcluidas();
    $ganhadoresConcluidas = $LutaCRUD->getGanhadoresConcluidas();

    $contadorLutasConcluidas = count($desafiadosConcluidas);


 ?>
<div id="tabelaLutar" class="ui two column grid container">
  <div class="column">
      <a class="ui grey massive label">Histórico de lutas</a>
      <table class="ui selectable inverted table">
      <tbody>
        <tr class="active">
          <td>Desafiante</td>
          <td>Desafiado</td>
          <td class="right aligned">Ganhador</td>
        </tr>
        <?php
        for ($i=0; $i < $contadorLutasConcluidas; $i++) {
        ?>
        <tr>
          <td><?php echo $desafiantesConcluidas[$i]['apelido']; ?></td>
          <td><?php echo $desafiadosConcluidas[$i]['apelido']; ?></td>
          <td class="right aligned"><?php echo $ganhadoresConcluidas[$i]['apelido']; ?></td>
        </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
  <div class="column">
      <a class="ui grey massive label">Lutas Marcadas</a>
    <table class="ui selectable inverted table">
      <tbody>
        <?php 
          for ($i=0; $i < $contadorLutasMarcadas; $i++) {
        ?>
          <tr>
            <td><?php echo $desafiantesMarcadas[$i]["apelido"]; ?></td>
            <td><?php echo $desafiadosMarcadas[$i]["apelido"]; ?></td>
            <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=<?php echo $desafiadosMarcadas[$i]['id']; ?>">Lutar</a></td>
          </tr>
        <?php 
          }
         ?>
      </tbody>
    </table>
  </div>
</div>