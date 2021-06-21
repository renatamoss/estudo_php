# CURSO PHP E MYSQL - INTRODUÇÃO À UMA WEBAPP

### BACK-END:
Linguagem de programação que funciona no lado do servidor:
- [x] O navegador manda requisição para o Apache;
- [x] O Apache manda para o PHP fazer o processo dos arquivos PHP;
- [x] O PHP procura no banco de dados, os dados;
- [x] O banco retorna para PHP que retorna para Apache;
- [x] O Apache retorna esses dados para o navegador como HTML e CSS que consegue visualizar. </br>
*Muito importante notar que a comunicação do banco de dados é feita com o PHP e não com o Apache diretamente.*

<hr>

### PHP NO SERVIDOR:
O PHP é uma linguagem executada do lado do servidor, ela é executada lá 
e nada dela vai para o navegador. </br>
Costuma-se dizer que o PHP é uma linguagem utilizada para back-end por este motivo.

<hr>

### XAMPP:
Xampp é uma sigla para Apache, MySQL, PHP. </br>
o Apache é o servidor que vem junto com o Xampp.

<hr>

### QUERY:
É o nome dado a um comando (consulta), uma instrução na linguagem SQL a ser executada pelo banco de dados.

<hr>

### Array superglobal *$_GET* e *$_POST*:
- [x] O array superglobal *$_POST*: acessa os dados do formulário a partir do array enviadas ao servidor via HTTP.
- [x] O array superglobal *$_GET* armazena todas as variáveis recebidas pela URL.</br>

*Eles utilizam o atributo name do HTML como chave do array.*

~~~php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo']);

    redireciona('/blog/admin/index.php');
}

$artigo = new Artigo($mysql);
$art = $artigo->encontrarPorId($_GET['id']);

?>
~~~

### Adicionar/remover/encontrar por id/editar-> usando o método *bind_param*:
Vincula o valor recebido no ponto de interrogação para as variáveis do *bind_param*. 
O método *bind_param* é responsável por este vínculo, isso faz parte de uma funcionalidade do 
banco de dados chamada *prepared statements*. Cria a consulta SQL e executa (*execute()*):

~~~php
    public function adicionar(string $titulo, string $conteudo): void
    {
        $insereArtigo = $this->mysql->prepare('INSERT INTO artigos (titulo, conteudo) values (?,?);');
        $insereArtigo->bind_param('ss', $titulo, $conteudo);
        $insereArtigo->execute();
    }
~~~

<hr>

### Exibir todos utilizando o método *fetch_all*:
É o método que transforma os dados do resultado no MySQL em uma forma que o PHP 
consegue entender mais fácil como um array.  Esse método retorna um array associativa. 
Ele utiliza os parâmetros: *MYSQÇLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH*.

~~~php
    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }
~~~

<hr>

### Encontrar por ID usando o método:
- [x] *get_result*: Obtém um conjunto de resultados de uma instrução preparada;
- [x] *fetch_assoc()*: retorna apenas uma linha por vez. 

~~~php
   public function encontrarPorId(string $id): array 
    { 
        $selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id = ?"); 
        $selecionaArtigo->bind_param('s', $id); 
        $selecionaArtigo->execute(); 
        $artigo = $selecionaArtigo->get_result()->fetch_assoc(); 
        return $artigo; 
    }  
~~~

<hr>

### Acionando um artigo utilizando *$_SERVER['REQUEST_METHOD'*:
- [x] *$_SERVER*: É um array contendo informações, onde as entradas neste array são criadas pelo servidor web. 
- [x] *[REQUEST_METHOD]*: Contém o método de request utilizado para acessar a página. Geralmente 'GET'ou 'POST'.

~~~php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $artigo = new Artigo($mysql); 
    $artigo->adicionar($_POST['titulo'], $_POST['conteudo']); 

    header('Location: /blog/admin/index.php'); 
    die(); 
} 
~~~

### Padrão de projeto Post Redirect Get:
Assim que termina as ações do post, faz-se um redirecionamento e pára a execução da página (*die()*).
O nome deste padrão de projeto é o Post Redirect Get. Ele gerencia a requisição POST do formulário:

~~~php
function redireciona(string $url): void
{
    header("Location: $url");
    die();
}
~~~

<hr>

### Função nl2br:
A função nl2br nos permite corrigir a questão das quebras de linha que não são exibidas no html.
Quando é digitado no formulário uma nova linha, o meta-caractere \n é utilizado internamente, 
mas quando estamos exibindo no HTML, ele só interpreta a tag como uma quebra de linha. 
A função nl2br converte \n para em um texto.

~~~php
<textarea class="campo-form" type="text" name="conteudo" id="titulo"><?php echo nl2br($art['conteudo']); ?></textarea>
~~~

<hr>



*Anotações feitas no Curso de PHP e MySQL: Introdução a uma webapp - Alura* </br>
*O projeto deste curso está na pasta php_mysql_banco-web deste mesmo repositório*.


