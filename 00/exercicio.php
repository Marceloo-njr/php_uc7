<?php
/*   
    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.

    Desafio: Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.

    PS.: Ao invés de solicitar ao usuário de fato, pode declarar uma variável com o valor diretamente no código.
    EX: $altura = 1.75;
*/

?>







<?php
// Exercício 1 - Índice de Massa Corporal (IMC):
$altura = 1.75; // Altura em metros
$peso = 70; // Peso em quilogramas

$imc = $peso / ($altura * $altura);
echo "Seu IMC é: $imc\n";

if ($imc < 18.5) {
    echo "Você está abaixo do peso.\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Você está com peso normal.\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Você está com sobrepeso.\n";
} else {
    echo "Você está obeso.\n";
}

// Exercício 2 - Verificação de Pagamento:
$temSaldo = true; // Define se o usuário tem saldo na conta
$querComprar = true; // Define se o usuário quer fazer uma compra
$valorCompra = 50.0; // Valor da compra em float

if ($temSaldo && $querComprar) {
    if ($valorCompra <= $saldoDisponivel) {
        echo "Transação concluída com sucesso.\n";
    } else {
        echo "Saldo insuficiente.\n";
    }
}

// Exercício 3 - Conversor de Temperatura:
$temperaturaCelsius = 20.0; // Temperatura em Celsius

$temperaturaFahrenheit = ($temperaturaCelsius * 9 / 5) + 32;
echo "A temperatura em Fahrenheit é: $temperaturaFahrenheit\n";

// Exercício 4 - Verificação de Acesso:
$maiorIdade = true; // Define se o usuário é maior de idade
$autorizacaoPais = true; // Define se o usuário possui autorização dos pais

if ($maiorIdade || $autorizacaoPais) {
    echo "Acesso concedido ao conteúdo restrito.\n";
} else {
    echo "Acesso negado.\n";
}

// Desafio: Verificação de Números Primos:
$numero = 17; // Número a ser verificado se é primo

$primo = true;
if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo) {
    echo "$numero é um número primo.\n";
} else {
    echo "$numero não é um número primo.\n";
}
?>
