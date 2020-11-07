<?php 

    include '../modelo/cliente.php';
    include '../modelo/conta.php';

    $nome = $_POST['nome'];
    $endereco = $_POST['email'];
    $cpf = $_POST['idade'];
    
    $agencia = $_POST['agencia'];
    $num_conta = $_POST['conta'];
    $saldo = $_POST['saldo'];
    
    $conta = new Conta();
    $id_conta = $conta->salvar_conta($agencia, $num_conta, $saldo);

    $cliente = new Cliente();
    $resposta = $cliente->salvar_cliente($nome, $endereco, $cpf, $id_conta);

    include "../visao/resposta.php";

?>
