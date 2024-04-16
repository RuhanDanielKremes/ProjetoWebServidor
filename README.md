# ProjetoWebServidor

## Ruhan Daniel Kremes
- Controllers, Models e Views envolvidas com Logins de usuarios/admin.
- Autorizações e estilização.

## Kauê Ruppel Q. da Silva 

- Controllers, Models e Views envolvidos com Carrinho de Compras
- Documentação.

## Julia Raquel Rocha Costa
### Atividades desenvolvidas

- Controllers, Models e Views envolvidos com os produtos.
- Criação e manipulação do DB produtos e DB produtos excluídos.
- Associação da sessão ao crud dos admin e estilização da página de produtos.

### Funcionalidades e bugs das páginas desenvolvidas:

#### PÁGINA DE PRODUTOS PARA O USUÁRIO 
            
__View User:__

A view renderiza um card com informações direto do banco de dados e no botão adicionar manda o código do produto do card por um input invisível.

Possíveis bugs: O carrinho não estava lendo o código que foi passado por parâmetro.
Não sabemos se foi erro na lógica do carrinho ou se foi erro na passagem dos parâmetros, não foi possível efetuar o teste.

__Model User:__

O model seria a integração com o carrinho mas por falta de tempo não conseguimos fazer.

__Controller User__

Um dos controllers do user seria o BTNAddToCartController onde ao clicar iria puxar pelo código as informações dos produtos e mandar para o carrinho todas as informações necessárias. Mas, como ainda não conseguimos fazer a integração do carrinho com o banco de dados e página de produtos não foi possível testar esse controller.

#### PÁGINA DE PRODUTOS PARA O ADMIN

__View admin:__

A view renderiza um formulário para adição de um produto (create), na adição da imagem ele move a imagem do arquivo temporário de armazenamento do navegador para a pasta especificada no código ‘path_dir’. Além disso, para operação de delete é renderizado uma tabela contendo todos os produtos (read) e o botão de deletar que deleta do banco de dados de produtos e passa para um banco de dados de produtos excluídos com o nome do usuario logado na sessão, para controle de informações administrativas. Como nesse primeiro momento o banco de dados foi feito com php optamos por não fazer a função update por conta da complexidade, mas no próximo trabalho iremos realizar uma operação CRUD completa utilizando consultas e comandos SQL.

__Controller Admin:__

Para manipular o controller, além de fazer as verificações necessárias, como código existente e averiguação da imagem, foi feito um tratamento nos dados para ser enviado ao model e fazer a adição ao banco de dados.

A função delete produto além de processar os dados vindo do navegador acabou ficando com o model dentro do controller e fazendo a operação de deleção e envio para o banco de dados produtos excluidos dentro do controller, no próximo trabalho iremos ajustar.

O correto seria o Controller manipular os dados de sessão do usuário que estava realizando as operações e a efetivação da exclusão do dbprodutos e adição no dbprodutos excluídas fossem feitas de fato no model.

__Model Admin:__

Integração do controller com o banco de dados.

## Funcionalidades faltantes

Em primeiro momento gostariamos de integrar esse "Banco de Dados" feito em php ao carrinho de compras, mas devido a complexidade do código, prazo de entrega e o fato de não ser um requisito obrigatório optamos por não integra-lo ao projeto.