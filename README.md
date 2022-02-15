# Ultra-Combat (Em andamento) #
Projeto criado em PHP com o intuito de aprender mais sobre formato MVC e Jquery.

## O que é ? ##
  Consiste em uma plataforma web. O usuário faz o cadastro de lutadores, que são inseridos e salvos no banco de dados. O programa gera a "habilidade" do lutador, com base nas informações inseridas, como peso e altura. Tendo no minimo 2 lutadores cadastrados, é possivel marcar uma luta, que também é salva no banco de dados. Através da pagina "Lutar", o usuário poderá visualizar as lutas marcadas e um relatório do histórico de lutas. Então ele pode clicar em "Lutar" em uma das lutas marcadas para executar a luta. O programa faz a calculos, utilizando fatores como a habilidade, idade, peso, altura, sorte, histórico do lutador (relação entre taxa de vitórias e derrotas), compara os 2 lutadores e anuncia o vencedor, também pode haver um empate. Vale ressaltar que não há recarregamento das paginas quando o usuário navega entre formulários graças ao Jquery.
 ## Banco de dados - Diagrama Entidade-Relacionamento
 ![Diagrama Entidade-Relacionamento](https://github.com/PedroGuilhermeBarauna/Ultra-Combat/blob/main/img/Banco.PNG)

## O que é ? ##
* Cadastrar lutadores
* Visualizar e alterar informações dos lutadores
* Marcar uma luta
* Executar uma luta
* Visualizar o histórico de lutas
