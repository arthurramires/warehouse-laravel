# Desafio Back-End - Almoxarifado

A Before está organizando seu almoxarifado e precisa de um sistema para catalogar os produtos em estoque, bem como lançamento de compras de novos produtos e vendas de produtos sobressalentes.

A equipe de análise colheu as informações de como a diretoria espera que o sistema funcione e encaminhou à equipe de desenvolvimento para começar o desenvolvimento da aplicação.

Resumo da análise feita pelo _Beto_, um dos analistas envolvidos no projeto:

> Esta aplicação deverá representar o almoxarifado da empresa. É preciso que seja possível cadastrar produtos físicos (mouse, teclado) e digitais (ebooks, cursos), além de realizar o lançamento de compras e vendas.
>
> O administrativo precisa ter a capacidade de cadastrar os produtos, bem como editá-los e visualizá-los em uma listagem.
> Os produtos poderão ser de 2 tipos:
> - Produto físico, que deverá conter as seguintes informações: código, nome, descrição e valor de venda (Ex: mouse, teclado)
> - Produto digital, que deverá conter as seguintes informações: código, nome, descrição, valor de venda e link para download  (ex: ebook)
> Não será permitido o cadastro de produtos com código duplicado.
>
> As compras poderão ter um ou mais produtos, sendo necessário informar a quantidade de cada produto e a data que ocorreu a compra. Ao lançar a compra, a aplicação deverá fazer um controle simples de estoque para os produtos comprados.
> É necessário ter uma visualização das compras já lançadas.
>
> Uma venda poderá ter um ou mais produtos, sendo necessário informar a quantidade de cada produto, a data que ocorreu a venda e os dados do cliente que adquiriu os produtos. Ao lançar a venda, a aplicação deverá validar se existe estoque disponível para a quantidade de produtos que está sendo vendida.
> Uma vez que o produto for vendido, a quantidade em estoque do mesmo deverá ser atualizada.
> É obrigatório ter o nome e CPF do cliente que adquiriu o produto. De forma opcional, solicitar o e-mail.
> É necessário ter uma visualização das vendas já lançadas.
>
> Por fim, a diretoria gostaria de exibir de forma automática uma lista com todos os produtos em estoque com suas respectivas quantidades.
>
> Contamos com a equipe para iniciarmos o desenvolvimento o quanto antes.
>
> Bom Trabalho!
Atenciosamente, Beto.

Neste momento, você está escalado para trabalhar com a equipe de **back-end** e aplicar os seus conhecimentos no desenvolvimento desta API. A equipe de front-end irá cuidar de toda a parte do front para você, então não se preocupe!

## Sua API deverá ser capaz de:
1. Cadastrar, editar e listar os produtos
- Tipo* (Físico ou Digital)
- Código*
- Nome*
- Descrição*
- Valor de Venda*
- Link para download (no caso de produtos digitais)
2. Cadastrar e listar as compras
- Data da compra*
- Produtos (código* e quantidade*)
3. Cadastrar e listar as vendas
- Data da venda*
- Cliente (nome*, CPF*, email)
- Produtos (codigo* e quantidade*)
- Valor Total*
4. Listar os produtos do estoque
- Produto
- Quantidade

### Itens Obrigatórios:

- Documentação dos endpoints, informando o payload e os possíveis retornos;

### Itens que podem ser implementados e acrescentam pontos:

- Ordenação das listagens;
- Filtros das listagens;
- Utilização de containers Docker;
- Implementação de Testes Unitários;
- Implementação de Testes de Integração;
- Autenticação na API;

##  Regras para o desenvolvimento da API:

- A arquitetura deverá respeitar as boas práticas do RestFull;
- A linguagem implementada deverá ser em PHP;
- A API deverá ser implementada usando o framework Laravel;
- Deverá usar um banco de dados relacional para armazenar os dados;

Estas regras são eliminatórias e o não cumprimento desclassifica o candidato.

## Como sua prova será avaliada:

- Correto funcionamento dos endpoints;
- Tratamento de erros;
- Implementação de padrões de projeto (design patterns, SOLID, etc); 
- Documentação dos endpoints;
- Código limpo e organizado;
- Modelagem do banco de dados;

## Duração da prova

A prova poderá ser entregue até:

**16/11/2020 às 23:59:59**

## Como entregar a prova

Antes de começar o desenvolvimento, faça um fork do repositório do avaliador e faça um clone do repositório forkeado no seu ambiente de desenvolvimento.
Após terminar o desenvolvimento, submeta sua prova ao repositório forkeado e abra uma Pull Request solicitando a inclusão do seu código ao repositório do avaliador.
Resumindo:

1. Fork
2. Clone
3. Desenvolvimento
4. Push para o Fork
5. Pull Request do Fork para o repositório do seu Avaliador

Seguindo estes passos não tem como errar, mas caso algo aconteça contacte o seu avaliador!

Boa sorte! Aguardamos pela sua prova :smile:.
