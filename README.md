# Estudos de PHP

Este repositório reúne exercícios introdutórios de PHP voltados para prática de sintaxe, operadores, estruturas de controle, funções, arrays e acesso básico a banco de dados.

O material funciona como um caderno de estudos com exemplos simples executados via terminal usando PHP CLI.

## Objetivo

Os arquivos deste projeto mostram os fundamentos mais comuns de PHP para quem está começando:

- declaração de variáveis e saída com `echo`
- comentários e convenções básicas de escrita
- operadores aritméticos e de atribuição
- estruturas condicionais
- laços de repetição
- `switch` e operador ternário
- criação e uso de funções
- arrays simples, associativos e multidimensionais
- cálculo de médias e manipulação de notas
- leitura de parâmetros via `GET`
- conexões básicas com MySQL e PostgreSQL

## Estrutura do repositório

### Introdução e sintaxe básica

- `index.php`: primeiro exemplo com `echo`, comentários, variáveis e interpolação de strings.
- `operadores.php`: operadores aritméticos, atribuição composta e concatenação.

### Estruturas condicionais

- `condicionais.php`: uso de `if`, `else` e `elseif` para comparações numéricas e verificação de idade.
- `switch.php`: seleção de casos com `switch` e exemplo de operador ternário.

### Laços de repetição

- `lacos.php`: exemplos com `while`, sintaxe alternativa do `while`, `do while`, `for` e `foreach`.

### Funções

- `funcoes.php`: definição de funções, retorno de valores e impressão de resultados.
- `funcoe1.php`: exemplo simples de função para soma de dois números.
- `calcularNota.php`: função para cálculo de média, verificação de números pares e laço usando função auxiliar.

### Arrays e vetores

- `arraysVetores.php`: criação de arrays vazios e preenchidos, acesso por índice, alteração de valores e contagem de elementos.
- `vetores.php`: arrays associativos, inclusão e remoção de elementos, `count`, `print_r` e arrays multidimensionais.
- `demontracao.php`: demonstração de acesso a dados em array multidimensional representando alunos e notas.

### Exercícios com notas e médias

- `media.php`: cálculo manual da média de uma lista de notas e classificação entre aprovados e reprovados.
- `media1.php`: cálculo de média e multiplicação entre notas usando funções.
- `calculoMedia.php`: cálculo de média de vários alunos armazenados em array.

### Entrada de dados por URL

- `metodos.php`: leitura de valores enviados por `GET` usando a superglobal `$_GET`.

Exemplo:

```url
http://localhost/metodos.php?var1=10&var2=20&var3=30
```

### Banco de dados

Arquivos na pasta `bancoDados` mostram conexões e consultas simples.

- `bancoDados/mysql.php`: conexão com MySQL usando `mysqli`, preparação de consulta e leitura de resultados.
- `bancoDados/postgresql.php`: conexão com PostgreSQL usando `pg_connect` e consulta com `pg_query`.

Esses exemplos assumem:

- banco de dados chamado `test`
- tabela `Cliente`
- colunas `nome`, `cpf` e `telefone`
- extensões do PHP para MySQL e PostgreSQL habilitadas

## Como executar

### Pré-requisitos

- PHP instalado e disponível no terminal
- para os exemplos de banco: servidor MySQL ou PostgreSQL configurado

### Executando exemplos simples

Na raiz do projeto:

```powershell
php index.php
php operadores.php
php condicionais.php
php lacos.php
php funcoes.php
php media.php
```

### Executando arquivos da pasta de banco

Use o caminho correto a partir da raiz do projeto:

```powershell
php bancoDados/mysql.php
php bancoDados/postgresql.php
```

Se executar `php mysql.php` na raiz, o comando falhará porque o arquivo está dentro da pasta `bancoDados`.

## Conceitos praticados

### 1. Variáveis e tipos básicos

Os exemplos mostram uso de strings, números inteiros, valores booleanos e concatenação/interpolação em saídas com `echo`.

### 2. Operadores

O projeto trabalha com:

- adição, subtração, multiplicação, divisão, módulo e exponenciação
- atribuição composta como `+=`, `*=` e `.=`
- comparações usadas em decisões
- operador ternário para decisões curtas

### 3. Controle de fluxo

Você pratica decisões com `if/else`, múltiplos casos com `switch` e repetições com todos os laços principais do PHP básico.

### 4. Funções

As funções aparecem para separar responsabilidades, reaproveitar lógica e retornar resultados, especialmente nos exemplos de soma e cálculo de média.

### 5. Arrays

Os exercícios cobrem:

- arrays indexados
- arrays associativos
- arrays multidimensionais
- inserção com `array_push`
- remoção com `array_pop`
- contagem com `count`
- iteração com `foreach`

### 6. Processamento de notas

Os arquivos de média reforçam:

- percorrer listas numéricas
- acumular valores
- calcular médias
- formatar resultados
- associar nomes de alunos a notas

### 7. Integração com banco de dados

Os exemplos de banco apresentam a base de uma aplicação PHP conectada a banco:

- configuração de host, banco, usuário e senha
- abertura e fechamento de conexão
- execução de consulta SQL
- leitura linha a linha dos resultados

## Pontos de atenção no estudo

Alguns arquivos são exercícios livres e servem para prática. Isso significa que você pode encontrar:

- nomes de funções e variáveis ainda não padronizados
- pequenas inconsistências de digitação
- exemplos focados no conceito, sem tratamento completo de erros

Isso é normal em material de aprendizado. Uma boa evolução para este repositório é revisar os arquivos e aplicar melhorias graduais de organização e padronização.

## Próximos passos sugeridos

Depois destes fundamentos, os próximos temas naturais de estudo em PHP são:

1. formulários com `POST`
2. validação de dados
3. sessões e autenticação
4. orientação a objetos
5. PDO para acesso a banco de dados
6. organização com múltiplos arquivos e includes
7. integração com HTML e CSS

## Resumo

Este repositório documenta uma trilha inicial de aprendizado em PHP, cobrindo os principais blocos da linguagem e exemplos práticos de lógica de programação e banco de dados. Ele é adequado como base para versionamento no Git e para acompanhar sua evolução nos estudos.