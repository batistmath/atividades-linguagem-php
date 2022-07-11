<?php
    include("Venda.php");
    include("Produtos.php");
    include("Empresa.php");

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

    //gerando a venda 1
    $venda1 = new Venda();
    $venda1->id = 1;
    $venda1->paga = "Sim";
    $venda1->finalidade = "A vista";
    $venda1->produtos[0] = $p1;
    $venda1->numprod++;
    $venda1->produtos[1] = $p2;
    $venda1->numprod++;
    

    //gerando a venda 2
    $venda2 = new Venda();
    $venda2->id = 2;
    $venda2->paga = "Sim";
    $venda2->finalidade = "A vista";
    $venda2->produtos[0] = $p1;
    $venda2->numprod++;
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;

    
    //gerando a venda 3
    $venda3 = new Venda();
    $venda3->id = 3;
    $venda3->paga = "Não";
    $venda3->finalidade = "A prazo";
    $venda3->produtos[0] = $p1;
    $venda3->numprod++;
    $venda3->produtos[1] = $p2;
    $venda3->numprod++;

    //gerando a venda 4
    $venda4 = new Venda();
    $venda4->id = 4;
    $venda4->paga = "Sim";
    $venda4->finalidade = "A prazo";
    $venda4->produtos[0] = $p1;
    $venda4->numprod++;
    $venda4->produtos[1] = $p2;
    $venda4->numprod++;

    // salvando as vendas
    $Empresa = new Empresa();
    $Empresa->vendas[0] = $venda1;
    $Empresa->vendas[1] = $venda2;
    $Empresa->vendas[2] = $venda3;
    $Empresa->vendas[3] = $venda4;
    $Empresa->imprimir();


    

    

?>