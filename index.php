<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação PHP Orientada a Objetos</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="javascript/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
require "config/constantes.php";
    // Importa a classe Cabecalho e container
    require "classes/cabecalho.php";
    require "classes/container.php";
    require "classes/secao.php";
    require "classes/rodape.php";
    require "classes/layout.php";

    // Instancia um cabecalho
    $cabecalho = new Cabecalho();

     // Instancia um containers
    $container = new Container();

    // O objeto gera o código HTML de um cabeçalho
    $cabecalho->gerarHtml();

    $layout = new Layout();

    $layout->gerarHtml();

?>
    
    <div class="container">
        <h1>Aplicação PHP</h1>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, ducimus iusto! Ad maiores modi quo incidunt neque iure vel soluta nisi voluptas quae! Eligendi animi, necessitatibus commodi excepturi quaerat cum enim, voluptatum est vitae porro quos fugit amet sit magni eaque ullam quam iusto exercitationem reiciendis tenetur. Ad tempore esse eum mollitia explicabo delectus odio ipsum, consectetur facere modi laudantium iste in vero eius consequatur perferendis! Debitis rem suscipit laudantium, amet modi voluptatem natus, numquam fuga ab corrupti vero asperiores.</p>
        <p>Voluptatibus, ipsa. Repudiandae fugit natus hic, quibusdam similique aliquid provident sit assumenda impedit, voluptates, mollitia sed odit eius quia dolore modi quae laboriosam tenetur animi optio nulla eveniet soluta adipisci qui? Et exercitationem facere tenetur repellendus, quas quos saepe alias eveniet. Dolore sequi asperiores placeat itaque eligendi maiores ab quos nobis blanditiis! Consectetur, ab? Nemo adipisci libero obcaecati consectetur totam quod facere optio molestias, sunt illum fugit placeat asperiores recusandae molestiae vero a officiis, nostrum culpa repudiandae perferendis natus? Fugiat.</p>
        <p>Suscipit adipisci dolor alias maxime nulla hic odio quos error delectus numquam ex, sint quidem eveniet magni quas quisquam cum, veniam reprehenderit mollitia veritatis voluptatem, pariatur molestias inventore? Ex deserunt dicta maxime, recusandae possimus iste culpa sapiente animi saepe ea non. Unde ad corrupti voluptatem nulla aspernatur necessitatibus, libero vitae repellendus nam commodi, perspiciatis quasi fugiat animi, neque consequuntur officia excepturi perferendis nisi dolorum est dolor quos voluptatibus culpa dolorem. Impedit reiciendis earum, nesciunt omnis quo numquam itaque optio illum!</p>
        <p>Ullam, amet nam deserunt sunt vel suscipit iusto nisi quo sit! Voluptatum pariatur ratione recusandae, sunt alias doloribus mollitia sapiente harum inventore porro, impedit magnam provident quibusdam perspiciatis. Consequuntur accusantium quod asperiores consequatur! Libero, iure facere sunt similique consequatur debitis corrupti ea, laboriosam dolores doloremque cupiditate rem deleniti aperiam dolore odio temporibus hic veniam sapiente impedit quam at molestiae pariatur, nobis nulla. Natus ex quia excepturi ea vel perferendis. Rem omnis aliquam iusto harum reiciendis doloremque ipsa tenetur voluptatibus iste?</p>

    </div>
</body>
</html>