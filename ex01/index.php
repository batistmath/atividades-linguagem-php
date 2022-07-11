<?php
    include("Vendas.php");
    include("Produtos.php");

    // declarando o produto 1
    $p1 = new Produtos();
    $p1->nome = "coxinha";
    $p1->valorUN = 3.50;
    $p1->qtd = 2;
    $p1->calcularvalor();

    // declarando o produto 2
    $p2 = new Produtos();
    $p2->nome = "pastel";
    $p2->valorUN = 5;
    $p2->qtd = 4;
    $p2->calcularvalor();

    //gerando a venda
    $venda2 = new Vendas();
    $venda2->produtos[0] = $p1;
    $venda2->numprod++;
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;
    $venda2->imprimir();

?>