<?php
    
    class Container {
        private $secao;
        private $rodape;
    
        public function __construct() {
            $this->secao = new Secao(isset($_GET["secao"]) ? $_GET["secao"] : "home");
            $this->rodape = new Rodape();
        }
    
        public function gerarHtml() {
            ?>
            <div class="container">
                <?php $this->secao->carregar(); ?>
                <?php $this->rodape->gerarHtml(); ?>
            </div>
            <?php
        }
    }
    
?>