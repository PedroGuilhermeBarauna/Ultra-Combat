# Ultra-Combat #
Projeto criado com o intuito de aprender mais sobre formato MVC e Jquery.

## O que é ? ##
  Consiste em uma plataforma web. O usuário faz o cadastro de lutadores, que são inseridos e salvos no banco de dados. O programa gera a "habilidade" do lutador, com base nas informações inseridas (Peso, idade, altura...).
  Tendo pelo menos 2 lutadores cadastrados, é possivel marcar uma luta, entre o desafiante e o desafiado, que também é salva no banco de dados.
  Através da pagina "Lutar", o usuário poderá visualizar as lutas marcadas e um relatório do histórico de lutas. 
  Então ele pode clicar em "Lutar" nas lutas marcadas. O programa faz uma série de calculos, utilizando a habilidade, idade, peso, altura, histórico do lutador e compara os 2 lutadores e anuncia o vencedor, também pode haver um empate.
  Então é atualizado o histórico do lutador, e a luta agora aparece no histórico de lutas.
  Vale ressaltar que não há recarregamento das paginas quando o usuário navega entre Cadastrar lutador, Marcar Lutas e Lutar, graças ao Jquery.
 ## Banco de dados - Diagrama Entidade-Relacionamento
 ![Diagrama Entidade-Relacionamento](https://github.com/PedroGuilhermeBarauna/Ultra-Combat/blob/main/img/Banco.PNG)
