<?php  
	require_once "../model/lutaCRUD.php";
	require_once "../model/lutadorCRUD.php";
	$lutadorCRUD = new LutadorCRUD();
	$lutaCRUD = new lutaCRUD();
	$nomes = $lutaCRUD->getLutasMarcadas();
    $contador = count($nomes['desafiantes']);

    $historico = $lutaCRUD->getAll();
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
        <tr>
          <td><?php echo $historico[0]["desafiante"]; ?></td>
          <td><?php echo $historico[0]["desafiado"];?></td>
          <td class="right aligned"><?php echo $historico[0]["ganhador"];?></td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td class="right aligned"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="column">
      <a class="ui grey massive label">Lutas Marcadas</a>
    <table class="ui selectable inverted table">
      <tbody>
        <?php 
          for ($i=0; $i < $contador; $i++) { 
        ?>
          <tr>
            <td><?php echo $nomes['desafiantes'][$i]; ?></td>
            <td><?php echo $nomes['desafiados'][$i]; ?></td>
            <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=<?php echo $nomes['id'][$i]; ?>">Lutar</a></td>
          </tr>
        <?php 
          }
         ?>
      </tbody>
    </table>
  </div>
</div>








