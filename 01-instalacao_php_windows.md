# PHP Primeiros passos

PHP é uma linguagem de programação interpretada (embora por baixo dos panos aconteça uma "compilação").
PHP é uma linguagem de propósito geral (para web, para desktop, para IOT, na linha de comando etc).
O site oficial do PHP é https://php.net/

Para executar um código em PHP o seu interpretador precisa ser instalado antes;
- [x] O arquivo principal de configuração é o php.ini;
- [x] Para o PHP funcionar na linha de comando, o sistema operacional precisa encontrá-lo no PATH;
- [x] O comando php -v imprime a versão do PHP instalado;
- [x] O comando php -a abre o shell interativo (CLI);
- [x] Arquivos PHP geralmente possuem a extensão .php

### Instalação do PHP no Windows:
PASSOS:
- [x] Baixe e instale PHP;
- [x] Site do download PHP é: https://www.php.net/downloads.php;
- [x] Adicione a pasta PHP na variável de ambiente PATH;
- [x] Renomeie o arquivo php.ini-development para php.ini;
- [x] Após instalação abre um terminal e digite o comando: php -v

Seguindo os passos no site, baixaremos ZIP disponível na página, que trará diversos arquivos, 
dentre eles um executável do Windows (.exe). Esse é o programa que lerá o nosso código e 
executará as instruções. Mas como o nosso sistema vai encontrar esse arquivo? 
Precisamos instruir o Windows a localização desse executável, o que é feito por meio das 
Variáveis de Ambiente.

Portanto, abriremos o menu Iniciar, pesquisaremos por "variáveis" e clicaremos em "editar 
as variáveis de ambiente do sistema". Na tela que será aberta, clicaremos no botão 
"Variáveis de Ambiente", selecionaremos "Path" e clicaremos em "Editar". 
Na nova janela, clicaremos em "Novo" e adicionaremos o caminho da pasta na qual os arquivos 
do ZIP foram extraídos.

Sempre que digitamos um comando no Terminal, o Windows busca um executável nos caminhos 
mostrados nessa lista. Logo, no Prompt de Comando (que pode ser aberto digitando cmd no menu Iniciar),
escreveremos php e pressionaremos "Enter" para que o PHP seja executado. Se executarmos php -v, 
seremos informados a versão do PHP que está instalada. Com isso, já temos o nosso ambiente pronto 
para começarmos a trabalhar.

Dentre os arquivos que foram extraídos, temos o php.ini, que contém diversas configurações do PHP, 
como quais extensões estão habilitadas. Uma extensão do PHP é uma funcionalidade adicional, 
como a conexão com um banco de dados específico ou a manipulação de alguns tipos de dados, 
detalhes aos quais não precisamos nos atentar agora. Uma configuração um pouco mais simples 
encontrada nesse arquivo é, por exemplo, se o PHP deve ou não exibir os erros.

O PHP nos fornece dois arquivos de exemplo: um para ser utilizado em ambiente de desenvolvimento,
e outro para ser utilizado quando a nossa aplicação estiver em ambiente de produção. 
Obviamente, iremos editá-los de acordo com as nossas necessidades. 
Porém, por enquanto, o php.ini-development já serve para o nosso propósito. 
Portanto, vamos renomeá-lo para php.ini, tornando-o válido para ser lido.

Feito isso, já temos todo o ambiente configurado para começarmos a desenvolver.

<hr>

*Anotações feitas no Curso Introdução ao PHP: Primeiros passos com a linguagem, Trilha Formação em PHP da Alura.*