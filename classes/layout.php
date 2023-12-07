<?php

class Layout{

    private $cabecalho;
    private $container;
    private $title;
    private $estilos;
    private $scripts;

    public function __construct($title = TITULO, $estilos = ESTILOS, $scripts = SCRIPTS){
        $this->title = $title;
        $this->estilos = $estilos;
        $this->scripts = $scripts;

        $this->cabecalho = new Cabecalho();
        $this->container = new Container();
    }

    public function gerarHtml(){
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $this->title; ?></title>

            <?php foreach($this->estilos as $estilo): ?>
            <link rel="stylesheet" href="css/<?php echo $estilo; ?>.css">
            <?php endforeach; ?>

            <?php foreach($this->scripts as $script): ?>
            <script src="js/<?php echo $script; ?>.js"></script>
            <?php endforeach; ?>
        </head>
        <body>
            <?php echo $this->cabecalho->gerarHtml(); ?>

            <div class="container">
                <?php echo $this->container->gerarHtml(); ?>
            </div>

            <?php echo $this->rodape->gerarHtml(); ?>
        </body>
        </html>
        <?php
    }
}

