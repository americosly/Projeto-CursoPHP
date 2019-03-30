<?php 
    $pessoa = "Américo";

    echo $pessoa;
    echo "<br>";
    var_dump($pessoa);

    // Array Simples
    $arraySimples = ["Américo","Hendy","Thomaz"];
    echo "<br>";
    var_dump($arraySimples);
    echo "<br>";
    echo $arraySimples[0];
    echo "<br>";
    echo $arraySimples[1];
    echo "<br>";
    echo $arraySimples[2];

    // Array Associativo
    $arrayAssociativo = [
        "Nome" => "Américo",
        "Fruta" => "Laranja",
        "Idade" => 23
    ];

    echo "<br>";
    echo $arrayAssociativo ["Fruta"];


    echo "<br>";

    $arrayAssociativo["Time"] = "São Paulo";
    $arrayAssociativo["Jogo"] = "Xadrez";

    if($arrayAssociativo["Idade"] >= 18 ){

        echo "Pode entrar";
    }elseif($arrayAssociativo["Fruta"] == "Laranja"){
        echo "Você pode entrar pelo bom gosto";
    }elseif ($arrayAssociativo["Time"] == "São Paulo") {
        echo "Pode entrar pelo bom gosto";
    }
    // } else {
    //     echo " Não pode entrar";
    echo "<br>";

    echo $arrayAssociativo["Jogo"] == "Xadrez" ? "Você é paciente" : "Medite mais";
?>