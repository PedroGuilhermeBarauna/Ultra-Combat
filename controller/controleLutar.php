<?php  
	require_once "../model/lutaCRUD.php";
	require_once "../model/lutadorCRUD.php";
	$lutadorCRUD = new LutadorCRUD();
	$lutaCRUD = new lutaCRUD();
	$nomes = $lutaCRUD->getLutasMarcadas();
    $contador = count($nomes['desafiantes']);

    $historico = $lutaCRUD->getAll();

    $historicoNomes = [
        "desafiados" => null,
        "desafiantes" => null,
        "ganhador" => null
    ];

    $contadorHistorico = count($historico);

    if ($contadorHistorico != 0){
        $historicoNomes['desafiados'][] = $lutadorCRUD->get($historico[0]['desafiado']);
        $historicoNomes['desafiantes'][] = $lutadorCRUD->get($historico[0]['desafiante']);

        if ($historico[0]["ganhador"] != null){
            if ($historico[0]["ganhador"] == $historicoNomes["desafiados"][0]["id"]){
                $historicoNomes["ganhador"] = $historicoNomes["desafiados"][0]["apelido"];
            }
            else {
                $historicoNomes["ganhador"] = $historicoNomes["desafiantes"][0]["apelido"];
            }
        }


        $historicoNomes["desafiados"] = $historicoNomes["desafiados"][0]["apelido"];
        $historicoNomes["desafiantes"] = $historicoNomes["desafiantes"][0]["apelido"];
    }

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
          <td><?php echo $historicoNomes['desafiantes']; ?></td>
          <td><?php echo $historicoNomes["desafiados"];?></td>
          <td class="right aligned"><?php echo $historicoNomes["ganhador"];?></td>
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