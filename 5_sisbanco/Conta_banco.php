<?php

$titular = "Pessoa Dias";
$saldo = 1000;

echo "*******LASCOU BANK*******\n";
echo "Titular: $titular \n";
echo "Saldo atual: R$ $saldo \n";

do{
    echo "************************\n";
    echo "Escolha uma opção: \n";
    echo "1 - Consultar saldo atual\n";
    echo "2 - Sacar valor\n";
    echo "3 - Depositar valor\n";
    echo "4 - Sair\n";
    echo "************************\n";
    $opcao = (int) fgets(STDIN);

    switch($opcao){
        case 1: 
            echo "************************\n";
            echo "Saldo atual: R$ $saldo \n";
            echo "************************\n";
            break;

        case 2: 
            echo "Qual valor deseja sacar?\n";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar <= 0) {
                echo "Valor inválido para saque!\n";
            } elseif ($valorSacar > $saldo){
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorSacar;
            }
            break;
        case 3: 
            echo "Quanto deseja depositar? \n";
            $valorDepositar = (float) fgets(STDIN);
            if ($valorDepositar <= 0) {
                echo "Valor inválido para depósito!\n";
            } else {
                $saldo += $valorDepositar;
            }
            break;
        case 4: 
            echo "Atendimento encerrado. Obrigada!\n";
            break;

        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);
?>

