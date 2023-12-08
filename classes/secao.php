<?php
/**Classe que carrega uma seção específica no layout do website
 * 
 * Atributo
 * secao: nome do arquivo onde vai estar implementada uma das seções do website
 */
class Secao {
    private $secao;

    public function __construct($secao) {
        $this->secao = $secao;
    }

    public function carregar() {
        $arquivo = "secoes/{$this->secao}.php";

        if (file_exists($arquivo)) {
            require $arquivo;
        } else {
            echo "<div class='bg-warning text-white m-3 p-3'>";
            echo "A seção $arquivo não existe!!";
            echo "</div>";
        }
    }
}