<div class="ui three column grid container">
  <div class="column">
  </div>
  <div class="column">
    <form id="formularioLuta" action="../controller/controllerMarcarLuta.php" method="post" class="ui form segment">
      <div style="margin-bottom: 5%" class="ui pointing red basic label">
        <h4>Marque a sua luta!</h4>
      </div>
      <div class=" field">
        <label for="nome">Desafiado: </label>
        <input type=text name="desafiado" required=nome/>
      </div>
      <div class=" field">
        <label for="nome">Desafiante</label>
        <input type="text" name="desafiante" required="nome">
      </div>
      <button type="submit" class="ui button green">
        Marcar luta
      </button>
    </form>
  </div>
  <div class="column">
    <p></p>
    <p></p>
  </div>
</div>