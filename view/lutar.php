 <div class="column">
      <a class="ui grey massive label">Lutas Marcadas</a>
    <table class="ui selectable inverted table">
      <tbody>
        <tr>
          <td><?php echo $lutas[3]['desafiado']; ?></td>
          <td><?php echo $lutas[3]['desafiante']; ?></td>
          <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=3">Lutar</a></td>
        </tr>
        <tr>
          <td><?php echo $lutas[5]['desafiado']; ?></td>
          <td><?php echo $lutas[5]['desafiante']; ?></td>
          <td class="right aligned"><a class="ui red button" href="../controller/lutar.php?lutar=<?php echo $lutas[0]["id"]; ?>">Lutar</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>