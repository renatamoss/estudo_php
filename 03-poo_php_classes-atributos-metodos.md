### Programação Procedural:
É um paradigma onde temos diversos procedimentos - que podem estar separados em outras funções, 
por exemplo -, mas não temos essa divisão muito bem organizada.
Não é um problema trabalhar dessa forma, mas existem outros paradigmas de desenvolvimento que surgiram 
para resolver os problemas causados com este tipo de programação.

Além do problema da reutilização de código, temos ainda peças soltas em nosso código.
É possível acessar e manipular os dados de forma indireta, 
inclusive fazendo operações sem nenhum sentido para nossas regras de negócio. 
Portanto, separar os dados de seus comportamentos é um grande problema da programação procedural.
Estes problemas citados acima deverão ser resolvidos utilizando a POO.


# Programação Orientada à Objetos - PHP
### Classes - Atributos - Métodos

O nome Programação Orientada à Objetos vem do fato de que, a partir de uma classe, 
podemos criar objetos que servirão de base para montarmos todo o sistema. 
Sendo assim, o desenvolvimento deixa de ser orientado à funções, como na programação procedural, 
e se torna orientado à objetos.

### Classe(modelo) -> variável(referência) -> objeto(instância) ->atributos(valores);

<hr>

### Classe
Classe é o modelo utilizado para criar um objeto, é a forma de bolo. Objeto é o bolo em si. 
Quando criamos uma variável à partir de uma classe, estamos criando um objeto.
As classes são criadas e referenciadas pelas variáveis.
O valor da variável é o endereço de memória onde o objeto foi armazenado. 
Através desta variável, conseguimos acessar todos os valores do objeto(instância).

- [x] Podemos definir tipos complexos com PHP através de classes;
- [x] Objeto (ou instância) é o nome dado para cada valor gerado através de uma classe;
- [x] Palavra new é utilizada para criar um objeto, e devolve o endereço dele;
- [x] Este endereço é armazenado em uma variável, e através desta variável podemos acessar o objeto;
- [x] Objetos possuem valores, e esses valores são chamados de atributos;
- [x] Os atributos dos objetos são individuais, ou seja, não estão atrelados a todas as instâncias da mesma classe;
- [x] Atributos válidos: todos os tipos primitivos e completos (int, float, bool, string, array, objetos, etc).

<hr>

### Métodos:
É possível adicionar comportamento às instâncias das nossas classes;
Funções definidas em uma classe são chamadas de métodos;
- [x] Variável $this tem a referência para o objeto que chamou o método atual;
- [x] Os métodos que devolvem o valor de um atributo da classe são chamados de getters(return);
- [x] Os métodos que definem os atributos privados e podem ter validação(condicionais) são os setters.
- [x] É interessante mantermos os atributos privados e os métodos públicos.

<hr>

### Early Return(return):
Quando utilizamos condicionais (if, else if, else), aumentamos a complexidade do nosso código. 
Quanto menos condicionais tivermos, mais natural e fácil se torna a leitura. 
A técnica Early Return ajuda bastante neste caso.

<hr>

### Dois pilares fundamentais da orientação a objetos:
* abstração, na qual trazemos o que é necessário do "mundo real" ao nosso sistema;
* encapsulamento, no qual só devemos expôr o que for necessário da nossa aplicação,
garantindo que o mundo externo não viole as regras de negócio,além de facilitar a utilização.

<hr>

### "Ciclo de vida" dos objetos: Métodos mágicos:
Existem métodos no PHP que são executados em momentos específicos, são conhecidos como métodos mágicos;
- [x] Ao criar uma instância, o método mágico construtor (__construct) é executado;
- [x] Quando uma instância deixa de existir, seu método mágico destrutor (__destruct) é executado.

<hr>

### Método público __construtor(): 
Podemos inicializar as classes já em um estado válido.
Após criada a classe com o método contrutor, um objeto não pode ter o seu atributos alterados. 

<hr>

### Método público __destruct():
Coletor de lixo, ou garbage: o interpretador do PHP chamará o garbage collector para verificar 
todos os dados que estão sem nenhuma referência, removendo-os da memória. 

<hr>

### Função unset(): para remover uma referência:
Com essas duas funcionalidades __destruct e __construct, podemos por exemplo, 
abrir um arquivo no construtor (fopen()) e fechá-lo no destrutor (fclose()).

<hr>

### O conceito de imutabilidade: 
Quando definimos uma classe onde seus objetos não podem ser alterados após criados, 
dizemos que eles são imutáveis. 

<hr>

### Atributos estáticos(static):
São membros da classe em si, e não de cada instância (objeto).
O método estático acessará um atributo estático que é incrementado qdo uma nova instância é criada.
Quando acessamos uma instância usamos nome reservado para acessarmos esta classe atual, que é self.
Apenas escreva métodos estáticos quando eles realmente forem necessários e fizerem sentido (é raro).

<hr>

### Composição de objetos: 
Um objeto do nosso sistema pode ser composto por vários outros objetos menores, 
em outras palavras, uma classe pode conter instâncias de outras classes também. 
Ainda é possível armazenar o atribuotos em outras variáveis, definir outros métodos em novas classes,
como um método destrutor, entre outras funcionalidades. Assim temos um código mais conciso e compartimentalizado.

<hr>

### Refatoração: 
Consiste em melhorar o código sem alterar os comportamentos.
É interessante que, durante o desenvolvimento, cada método tenha apenas uma responsabilidade. 
Sendo assim, o construtor poderá inicializar as variáveis e um outro método fará a validação.

<hr>

*Anotações feitas no Curso de Orientação a Objetos com PHP: Classes, métodos e atributos, 
Trilha Formação em PHP da Alura.*





