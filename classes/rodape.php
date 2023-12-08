<?php
class Rodape{

 private $ano;
 private $autor;
 private $email;

public function __construct($ano = ANO, $autor = AUTOR, $email = EMAIL){
    $this->ano = $ano;
    $this->autor = $autor;
    $this->email = $email;
}

public function gerarHtml(){
    ?>
    <div class="bg-info text-white text-center">
    <div>
       Desevolvido por 
        <a href="mailto: <?php echo $this->email ?>">
        <?php echo $this->autor ?>
        </a>
    </div>

    <div>&copy; <?php echo $this->ano ?></div>
    </div>
<?php
}
}