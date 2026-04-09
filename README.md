# 📚 Exercícios de PHP

Repositório com as listas de exercícios da disciplina de **Linguagens para Programação Web (PHP)**, organizadas por progressão de conteúdo.

---

## 🗂️ Estrutura

```
/
├── README.md
├── lista1/exercicios.php
├── lista2/lista2.php
└── lista3/exercicios.php
```

---

## 📋 Listas de Exercícios

### Lista 1 — Lógica de Variáveis e Atribuições
> `lista1/exercicios.php`

| Exercício | Descrição |
|-----------|-----------|
| **A** | Atribuição simples, exibição intermediária e reatribuição |
| **B** | Soma entre variáveis em diferentes momentos e reatribuição |
| **C** | Cópia de valores entre variáveis — variáveis guardam valores, não referências |
| **D** | Incrementos encadeados — cada variável depende do valor atual da anterior |
| **E** | Cálculo antes de reatribuição — preserva o valor do momento do cálculo |
| **F** | Subtração, exibição intermediária e reatribuição com soma |

**Conceitos:** atribuição, operadores aritméticos (`+`, `-`), `echo`, execução sequencial.

---

### Lista 2 — Estruturas de Controle e Funções
> `lista2/lista2.php`

| Exercício | Descrição |
|-----------|-----------|
| **1** | Recebe 4 inteiros e soma apenas os pares (operador `%`) |
| **2** | Imprime inteiros de 200 a 100 em ordem decrescente com `for` |
| **3** | Soma todos os números pares entre um limite inferior e superior |
| **4** | Compara duas strings com `strcasecmp()` (ignora maiúsculas) |
| **5** | Informa se um número é positivo, negativo ou zero |
| **6** | Exibe ACEITA se o cadastro for feminino e menor de 25 anos |
| **7** | Imprime todos os inteiros de 0 até N |
| **8** | Conta ocorrências de um caractere em uma string com `substr_count()` |
| **9** | Calculadora com 4 operações, cada uma em uma função separada |

**Conceitos:** `if/elseif/else`, `for`, `%`, funções, `strcasecmp()`, `substr_count()`.

---

### Lista 3 — Strings, Arrays e Aplicações Web
> `lista3/exercicios.php`

> **Obs.:** Esta lista inclui HTML com formulários (`$_POST`) como exemplo prático de entrada de dados via navegador — não foi um requisito explícito, mas serve de referência.

| Exercício | Descrição |
|-----------|-----------|
| **1** | Compara duas strings e exibe se são iguais |
| **2** | Conta ocorrências de um caractere com `strlen()` e `substr()` |
| **3** | Calculadora simples com as 4 operações por escolha do usuário |
| **4** | Verifica se um número é par ou ímpar |
| **5** | Exibe uma sequência de números com `for` |
| **6** | Gera a tabuada de um número |
| **7** | Percorre e exibe valores de um array com `foreach` |
| **8** | Soma todos os valores de um array |
| **9** | Calcula a média dos valores de um array com `count()` |
| **10** | Array multidimensional com dados de clientes |
| **11** | Conversão entre Celsius e Fahrenheit com funções |
| **12** | Soma e média via função com retorno em array |
| **13** | Inverte uma string com laço de repetição |
| **14** | Encontra o maior valor de um array |
| **15** | Encontra o menor valor de um array |
| **16** | Ordena um array com Bubble Sort |

**Conceitos:** `strlen`, `substr`, arrays simples e multidimensionais, `foreach`, `count`, funções com retorno, Bubble Sort, formulários HTML, `$_POST`.
 
---
 
### Prova I — Revisão Geral (Peso 3)
> `prova1/ex1.php` até `prova1/ex5.php`
 
> **Obs.:** Exercícios da Prova I da disciplina SIN 1049, aplicada em 24/04/2023. Todos os scripts são PHP puro, sem HTML, com valores fixos no código (hardcoded).
 
| Exercício | Arquivo | Descrição |
|-----------|---------|-----------|
| **1** | `ex1.php` | Dado um limite inferior e superior, calcula a soma de todos os números pares do intervalo |
| **2** | `ex2.php` | Função que recebe duas strings e compara se são iguais, exibindo a mensagem correspondente |
| **3** | `ex3.php` | Imprime todos os inteiros de 100 a 200 informando se cada um é par ou ímpar |
| **4** | `ex4.php` | Recebe uma matriz com nome e idade de 15 nadadores e os classifica em Infantil, Juvenil ou Sênior |
| **5** | `ex5.php` | Processa uma matriz 6x4 de estoque de produtos e calcula totais, maior compra, maior preço unitário e média |
 
**Conceitos:** `for`, `foreach`, `%`, arrays multidimensionais, funções, `implode()`, `count()`, `number_format()`.
 
**Detalhes do Exercício 4 — Categorias de nadadores:**
 
| Categoria | Faixa etária |
|-----------|-------------|
| Infantil  | 5 a 10 anos |
| Juvenil   | 11 a 17 anos |
| Sênior    | 18 anos ou mais |
 
**Detalhes do Exercício 5 — O que é calculado:**
- a) Total de unidades, preço unitário e preço total do Produto 4
- b) Produto mais comprado (maior número de unidades)
- c) Produto com maior preço unitário
- d) Média de unidades compradas (soma das unidades / total de produtos)
 
---

## ▶️ Como Executar

### Arquivos sem HTML (PHP puro)

**Terminal:**
```bash
php lista1/exercicios.php
```

**VS Code — extensão PHP:**
Instale a extensão [PHP Runner](https://marketplace.visualstudio.com/items?itemName=recca0120.vscode-phpunit) ou similar. Com o arquivo aberto, use `F1 > Run PHP` ou o atalho configurado pela extensão para executar diretamente no editor.

---

### Arquivos com HTML (Lista 3)

**Servidor embutido do PHP** *(recomendado)*:
```bash
php -S localhost:8000
# Acesse: http://localhost:8000/lista3/exercicios.php
```

**XAMPP:**
Mova o projeto para `C:\xampp\htdocs\`, inicie o Apache e acesse `http://localhost/nome-da-pasta`.

---

## 🛠️ Tecnologias

- PHP 8+
- Sem dependências externas

---

## 📝 Observações

- Valores estão **fixos no código** (hardcoded) nas listas que não envolvem formulários.
- O fechamento `?>` é **omitido intencionalmente** em arquivos PHP puro — evita espaços acidentais após a tag.