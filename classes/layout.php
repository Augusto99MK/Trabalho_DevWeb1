<?php

class Layout {
    private $cabecalho;
    private $container;
    private $title;
    private $estilos;
    private $scripts;

    public function __construct($title = TITULO, $estilos = ESTILOS, $scripts = SCRIPTS) {
        $this->title = $title;
        $this->estilos = $estilos;
        $this->scripts = $scripts;
        $this->cabecalho = new Cabecalho();
        $this->container = new Container();
    }

    public function gerarHtml() {
        // Gera a marcação HTML da página
        echo '<!DOCTYPE html>';
        echo '<html lang="pt-br">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo "<title>{$this->title}</title>";

        // Adiciona os estilos dinamicamente
        foreach ($this->estilos as $estilo) {
            echo "<link rel='stylesheet' href='css/{$estilo}'>";
        }

        // Adiciona os scripts dinamicamente
        foreach ($this->scripts as $script) {
            echo "<script src='js/{$script}'></script>";
        }

        echo '</head>';
        echo '<body>';
        
        // Chama o método gerarHtml do cabeçalho e do contêiner
        $this->cabecalho->gerarHtml();
        $this->container->gerarHtml();

        echo '</body>';
        echo '</html>';
    }
}
