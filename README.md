DOCUMENTAÇÃO DO SITE


Aqui, começa o processo de criação do TCC, eu boto muita fé em nossas pessoas!!


Ficará vazia até buscarmos uma forma melhor para começar e uma forma que envolva AJAX.

Maneiras de como usar o composer.

    1 - Para usar esse código é necessário utilizar o composer. Primeiro instale o composer na sua maquina, com este link: https://getcomposer.org/download/

    3 - Em extensões na direita dentro do VsCode, baixar a extensão do Composer.

    4 - Após instalar o composer, para implementar ele no seu projeto abra um terminal dentro do VsCode. No terminal digite "composer init" e precione enter até o final.

    5 - Agora com o composer no projeto, em um novo terminal ou no mesmo já utilizado, digite "composer dump-autoload -o" isso irá fazer com que o composer recarregue para ser usado.

    6 - Configurações necessárias para o funcionamento: 
        
        6.1 - Dentro do arquivo "composer.json", dentro de "psr-4" deve ser inserido "app\\":"app/" a baixo da primeira linha: 
        "psr-4": {
            "GuilhermeMuller2\\ApiTransparencia\\": "src/",
            "app\\":"app/"
        }

    7 - Maneira de utilizar o composer:

        5.1 - Para facilitar o carregamento das páginas, foi utilizado o "../vendor/autoload.php", esse é um arquivo que faz o carregamento das páginas de maneira mais rápida, por isso ela tem que ficar na raiz do projeto (index.php) nesse caso.



Maneiras que trabalhei com o PHP

    1 - Esse código é feito orientado a objeto e por isso usa algumas configurações diferentes.

    2 - Para chamar uma classe e transformala em objeto, é preciso importala. Ex: $User = new User; para facilitar a importação, precione Crtl + Alt + i com a palavra da classe selecionada.

    3 - Caso ocorra de não funcionar o atalho, escreva "use nomeDapasta\nomeDaPasta\Arquivo" utilizando sempre a contra barra \.

    4 - Sempre em todo arquivo que for criado uma classe, terá um namespace ele serve para que não ocorra colisão de classes, no caso classes com o mesmo nome. Por isso é sempre necessário colocar o caminho das pastas no namespace, para que o composer saiba de onde esta vindo aquela classe. Ex: namespace app\classes;

    5 - Por ultimo, algumas extensões que podem ajudar a trabalhar melhor com PHP: PHP Awesome Snippets, PHP File Types, PHP Intelephense,
    PHP Namespace Resolver, PHP Debug e PHP Profiler

    6 - O debug do PHP exige uma configuração mais especifica, procure mais informações de como configurar na internet.
