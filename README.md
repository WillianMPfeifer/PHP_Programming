# 📚 Exercícios de PHP

Repositório criado para armazenar e organizar as listas de exercícios da disciplina de Linguagens para programação em Web (PHP).  
Cada lista aborda conceitos progressivos da linguagem, desde lógica básica até estruturas mais elaboradas.

---

## 🗂️ Estrutura do Repositório

```
/
├── README.md
├── lista1/
│   └── exercicios.php
├── lista2/
│   └── lista2.php
└── ...
```

---

## 📋 Listas de Exercícios

---

### 📁 Lista 1 — Lógica de Variáveis e Atribuições

> **Arquivo:** `lista1/exercicios.php`

Exercícios introdutórios focados em entender como variáveis funcionam em PHP:
como valores são atribuídos, sobrescritos e como a ordem das instruções impacta o resultado final.

| Exercício | Descrição |
|-----------|-----------|
| **A** | Atribuição simples de variáveis, exibição intermediária de valor e reatribuição |
| **B** | Operação de soma entre variáveis, exibição em diferentes momentos e reatribuição |
| **C** | Cópia de valores entre variáveis — demonstra que variáveis guardam valores, não referências |
| **D** | Incrementos encadeados — cada variável depende do valor atual da anterior |
| **E** | Cálculo realizado antes de reatribuição — o resultado preserva o valor do momento do cálculo |
| **F** | Operação de subtração, exibição intermediária e reatribuição com soma |

**Conceitos abordados:** atribuição de variáveis, operadores aritméticos básicos (`+`, `-`), `echo`, ordem de execução sequencial.

---

### 📁 Lista 2 — Estruturas de Controle e Funções

> **Arquivo:** `lista2/lista2.php`

Exercícios que introduzem estruturas de decisão, laços de repetição e funções em PHP.

| Exercício | Descrição |
|-----------|-----------|
| **1** | Recebe 4 inteiros e soma apenas os que forem pares usando o operador módulo (`%`) |
| **2** | Imprime todos os inteiros de 200 a 100 em ordem decrescente com `for` |
| **3** | Recebe limite inferior e superior e soma todos os números pares do intervalo |
| **4** | Compara duas strings usando `strcasecmp()` e exibe se são iguais (ignora maiúsculas) |
| **5** | Lê um número e informa se é positivo, negativo ou zero com `if / elseif / else` |
| **6** | Recebe nome, sexo e idade — exibe ACEITA se feminino e menos de 25 anos |
| **7** | Recebe um valor N e imprime todos os inteiros de 0 até N |
| **8** | Recebe uma string e um caractere, conta as ocorrências com `substr_count()` |
| **9** | Calculadora com 4 operações básicas — cada operação implementada em uma função separada |

**Conceitos abordados:** `if / elseif / else`, operador `&&`, laço `for`, operador módulo `%`, funções (`function`), `strcasecmp()`, `substr_count()`.

---

### 📁 Lista 3 — *(em breve)*

> **Arquivo:** `lista3/lista3.php`

*Adicione aqui a descrição da próxima lista quando for entregue.*

| Exercício | Descrição |
|-----------|-----------|
| — | — |

---

## 💡 Como usar este README

Sempre que uma nova lista for adicionada ao repositório:

1. Crie uma pasta com o nome da lista (ex: `lista3/`)
2. Adicione o arquivo `.php` dentro dela
3. Copie o bloco de template da **Lista 3** acima
4. Preencha o nome da lista, arquivo, descrição geral e a tabela de exercícios
5. Atualize a seção de **Estrutura do Repositório**

---

## 🛠️ Tecnologias

- PHP 8+
- Nenhuma dependência externa — todos os scripts rodam com `php arquivo.php` no terminal

---

## 📝 Observações Gerais

- Os valores das variáveis estão **fixos no código** (hardcoded), pois ainda não foi abordada a leitura de input do usuário.
- O fechamento `?>` é **omitido intencionalmente** em arquivos puramente PHP — isso evita problemas com espaços acidentais após a tag.
- Os arquivos seguem uma nomenclatura simples e sem acentos para compatibilidade entre sistemas.