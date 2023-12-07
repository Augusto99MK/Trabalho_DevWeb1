<?php


class Cabecalho{
    private $logo;
    private $titulo;
    private $links = array();

    public function __construct($links= LINKS, $logo= LOGO, $titulo= TITULO){
      $this->links = $links;
      $this->logo = $logo;            
      $this->titulo = $titulo;
    }

    public function gerarHtml(){
    ?>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">

          <?php if (is_null($this->logo) === false): ?>
          <a class="navbar-brand" href="#">
            <img src="imagens/<?php echo $this->logo ?>" alt="Logotipo da Aplicação" style="width:40px;" class="rounded-pill"> 
          </a>  
          <?php endif ?>
          
          <?php if (is_null($this->titulo) === false): ?>
          <a class="navbar-brand" href="#">
            <?php echo $this->titulo ?>
          </a>
          <?php endif ?>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

              <?php foreach ($this->links as $link): ?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $link ?></a>
              </li>
              <?php endforeach ?>
            
            </ul>
          </div>
        </div>
      </nav>
    <?php
    }
}
?>