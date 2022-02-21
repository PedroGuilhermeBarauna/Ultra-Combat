<!DOCTYPE html>
<html>
  <head>
    <title>Pagina inicial</title>
    <meta charset="utf-8" />
      <script type="text/javascript" src="../scripts/jquery.js" ></script>
      <script type="text/javascript" src="../scripts/script.js"></script>
      <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
      <script type="text/javascript" src="semantic/semantic.js"></script>

    <style type="text/css">
      .masthead.segment {
        min-height: 675px;
        padding: 1em;
      }
      #corpoIndex {
          margin: 25px;
      }

    </style>
  </head>

  <body>
    <div id="menuCorpo" class="ui inverted masthead center aligned segment">
        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
            <div class="left item">
              <a id="index" class="ui inverted button withe">Página Inicial</a>
              <a id="marcarLuta" class="ui inverted button yellow">Marcar luta</a>
              <a id="lutar" class="ui inverted button red">Lutar</a>
            </div>
            <div class="right item">
              <a id="cadastraLutador" class="ui inverted button green">Cadastrar Lutador</a>
            </div>
          </div>
        </div>
      <div id="corpoIndex">

      </div>
    </div>
  </body>
  </html>