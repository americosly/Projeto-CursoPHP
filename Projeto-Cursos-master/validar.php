<?php 
    // GET
    // $nome = $_GET["nome"];
    // $senha = $_GET["senha"];

    //POST
    // $nome = $_POST["nome"];
    // $senha = $_POST["senha"];

    //REQUEST só usar o request, pois ele serve para o GET quando para o POST
    $nome = $_REQUEST["nome"];
    $senha = $_REQUEST["senha"];

?>

<h3><?php echo $nome; ?></h3>
<p><?php echo $senha; ?></p>