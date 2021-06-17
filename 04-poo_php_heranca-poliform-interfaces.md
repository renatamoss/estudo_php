# Programação Orientada à Objetos - PHP
# Herança - Poliformismo - Interfaces

### Herança:
Uma das formas de reutilizar código é fazendo uma classe estender outra (extends), ou seja, 
herdar tudo que uma classe base tem, e adicionar comportamentos específicos.
Mas vale ressaltar que herança não é a solução para todos os problemas de reutilização de código. 
Muitas vezes pode até ser prejudicial.
- [x] parent: para acessar um membro da classe base;
- [x] final: Existem alguns casos, ainda que raros, nos quais desejamos impedir a herança
pois essas são classes definitivas e únicas - algo que é feito usando exatamente a palavra 'final'.

Em PHP temos três modificadores de acesso para os membros (atributos e/ou métodos) 
definidos em nossas classes: public, protected e private:
* public: permite que todos possam acessar o membro, inclusive fora da classe onde foi definido; 
* protected: permite que a classe atual e as classes filhas tenham acesso;
* private: permite que apenas a classe atual tenha acesso.

<hr>

### Classe abstrata:
São classes que ainda não estão prontas para serem instanciadas e precisam ser estendidas (classes abstratas);
Uma classe abstrata não pode ser instanciada, pois ainda não está completa (não é concreta).
Se uma classe tem algum método abstrato, ela também precisa ser abstrata. 
Os métodos abstratos, são uma forma de "obrigar" que classes filhas implementem determinado método;
- [x] Sempre que tivermos uma classe abstract no código, sabemos que ela está relacionada a herança;
- [x] classe de serviço: representa uma funcionalidade;
- [x] classe de modelo: representa algo real em nosso modelo domínio.

<hr>

### Polimorfismo:
Estipula que uma referência pode ter vários tipos e se comportar de formas diferentes, 
mas existindo semelhanças o suficiente de modo a atender a alguns requisitos.
Este 4º princípio de POO está diretamente ligado ao 3º (herança), 
pois através da herança conseguimos alcançar o polimorfismo.
ps: cuidado, polimorfismo não quer dizer que o objeto fica se transformando, muito pelo contrário, 
um objeto nasce de um tipo e morre daquele tipo, o que pode mudar é a maneira como nos referimos a ele.

<hr>

### Interface:
Interfaces são basicamente classes abstratas que possuem somente métodos abstratos, o que nos permite 
a implementação de múltiplas interfaces sem problemas, já que evitam o problema de herdar dois métodos 
"iguais" de classes diferentes. 
Como por definição os métodos de uma interface são abstratos, não precisaremos incluir a palavra 
reservada abstract. 
Feito isso, além de estender a classe, também será implementado a interface, algo que é feito 
com o uso da palavra 'implements'.
O conceito de interface é bem simples, mas a sua utilização é muito importante na programação 
orientada a objetos. Inclusive, existe uma premissa no mundo da orientação a objetos dizendo que 
sempre devemos programar para interfaces ou abstrações, e nunca para as implementações.

<hr>

### Métodos mágicos:
Todos os métodos mágicos do PHP começam com __, e existem vários deles. 
Justamente por essa convenção, a documentação da linguagem não recomenda a criação de métodos com __.
Exemplo: __toString() nos permite representar qualquer objeto como string. 

<hr>

### namespace:
Definindo namespace podemos facilmente ter duas classes com o mesmo nome em namespaces diferentes.
Com um namespace raiz para a nossa aplicação, evitamos conflitos com pacotes externos que viermos a utilizar.
Para utilizar uma classe precisamos importá-la utilizando use ou informar seu nome completo (com namespace) 
em todos os locais onde ela for utilizada.

<hr>

### autoload:
É um processo que busca as classes automaticamente, sem que seja necessário informar cada arquivo separadamente. 
Esse processo precisa seguir algumas regras para atender ao padrão da PSR-4, como não poder gerar erros e 
ter que utilizar uma pasta raiz e um namespace raiz para fazer o mapeamento, entre outras.
Através de um autoloader com o PHP (spl_autoload_register) podemos evitar ficar utilizando require 
para incluir todos os arquivos necessários para executar o programa.

<hr>

### Pilares da POO: -> Abstração -> Encapsulamento -> Herança -> Polimorfismo.

<hr>

*Anotações feitas no Curso Avançando com Orientação a Objetos com PHP: Herança, Polimorfismo e Interfaces, 
Trilha Formação em PHP da Alura.*





