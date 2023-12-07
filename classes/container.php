<?php
    
     class Container{
         private $secao;
         private $rodape;

         public function _construct(){
            $this->secao = new Secao();
            $this->rodape = new Rodape();
         }

         public function gerarHtml(){
             ?>
          <div class="container">
              <?php $this->secao->carregar() ?>
              <?php $this->rodape->gerarHtml() ?>
         </div>
<?php
         }
     }
?>