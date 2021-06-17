# Tratamento de erros e exceções utilizando o PHP 

### Pilha de execução ou call stack: 
A pilha da Zend Engine (interpretador do PHP) armazena as funções e os métodos que estão sendo executados. 
Além do bloco de código, na pilha ficam guardadas as variáveis e as referências referentes ao bloco. 
Assim, o PHP organiza a execução e sabe exatamente qual método está sendo executado, 
que é sempre o código no topo da pilha. O PHP também sabe quais outros métodos ainda precisam ser executados, 
que são justamente os que estão abaixo.

Problemas podem acontecer durante a exceução de um programa.
O PHP reporta o acontecimento destes problemas através de exceções.

- [x] Toda exceção em PHP possui um nome que a identifica;
- [x] Essa abordagem torna seu entendimento mais fácil do que o uso de números mágicos (códigos de erros).

<hr>

### RuntimeException ou DivisionByZeroError (exemplos de exceções):
São alguns dos erros e exceções já existentes no PHP.
A mensagem informa que não tratamos uma exceção (ou problema) no tempo de execução. 
O código na verdade está escrito de forma correta, mas há um exceção na execução de um programa.
Esse tipo de situação é muito comum no desenvolvimento de um programa, já que é impossível escrevermos 
sempre códigos perfeitos sem nenhum tipo de correção a ser feita.

<hr>

### Utilizando try - catch:
Usando try/catch no trecho de código onde ocorre a exceção, conseguiremos, por exemplo, 
mostrar uma mensagem na tela e continuar a execução do programa. 
Não podemos ter um bloco catch sem um bloco try o precedendo. 
Mas é possível que tenhamos um bloco try sem o catch, sendo só try e finally.

<hr>

### Tratar mais de uma exceção por vez, usa-se o multi-catch, com o operador:
Através de um | (pipe) na cláusula catch, podemos capturar mais de uma exceção. 
Com isso, podemos ter um único bloco para tratar uma ou mais exceções. </br>

function funcao2() </br>
{ </br>
    echo 'Entrei na função 2' . PHP_EOL; </br>
    $exception = new RuntimeException(); </br>
    echo 'Saindo da função 2' . PHP_EOL; </br>
} </br>

Sendo assim, em $exception temos uma referência a um objeto do tipo RuntimeException.

<hr>

### Classe de exceção:
A exceção nada mais é do que uma classe, logo, podemos instanciar exceções;
Isso implica na possibilidade de criarmos um objeto dessa classe/tipo por meio da instrução new. 
Uma exceção pode ter uma mensagem informada por meio do seu construtor. </br>

try { </br>
    $contaCorrente->deposita(-100); </br>
} catch (InvalidArgumentException $exception) { </br>
    echo "Valor a depositar precisa ser positivo."; </br>
} </br>
 
class SaldoInsuficienteException extends \DomainException </br>
{ </br>
    public function __construct(float $valorSaque, float $saldoAtual) </br>
    { </br>
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta."; </br>
        parent::__construct($mensagem); </br>
    } </br>
} </br>

<hr>

### Os principais tipos de erros do PHP:
Noticem, Warning, Error (erro fatal): 
Normalmente, ferramentas especializadas em tratar erros cuidam dessa parte para nós.
A Depuração é muito importante para encontrarmos possíveis problemas em nosso sistema.

<hr>

*Anotações do Curso PHP Exceptions: Tratamento de erros - Alura.*</br>
*O projeto deste curso está na pasta poo_php_heranca-poliform-interfaces deste mesmo repositório.*