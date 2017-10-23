
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        //crio pessoas
        $p[0] = new Pessoa("John", 35, "masculino");
        $p[1] = new Pessoa("Jennifer", 32, "feminino");
        
        //crio livros
        $l[0] = new Livro("Por Lugares Incríveis", "Jennifer Niven", 335, $p[0]);
        $l[1] = new Livro("Quem é Você Alasca", "John Green", 298, $p[1]);
        $l[2] = new Livro("O Poder do Agora", "Eckhart Tolle", 222, $p[0]);
        
        $l[1]->abrir();
        $l[1]->folhear(28);
        $l[1]->detalhes();
        $l[2]->folhear(68); 
        $l[2]->detalhes();
        
        $p[1]->fazAniver();
        $p[1]->apresenta();
        
        ?>
        </pre>
    </body>
</html>
