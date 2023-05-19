<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>Números Aleatorios</main>
    <?php 
// Função para sortear números
function sortearNumeros($quantidade, $minimo, $maximo) {
    $numerosSorteados = array();
    
    for ($i = 0; $i < $quantidade; $i++) {
        $numero = rand($minimo, $maximo);
        
        // Verificar se o número já foi sorteado anteriormente
        while (in_array($numero, $numerosSorteados)) {
            $numero = rand($minimo, $maximo);
        }
        
        $numerosSorteados[] = $numero;
    }
    
    return $numerosSorteados;
}

// Exemplo de uso
$quantidadeNumeros = 1; // Defina a quantidade de números que deseja sortear
$minimo = 1; // Valor mínimo para o sorteio
$maximo = 10000; // Valor máximo para o sorteio

$numerosSorteados = sortearNumeros($quantidadeNumeros, $minimo, $maximo);

// Exibir os números sorteados
echo "Números sorteados: ";
foreach ($numerosSorteados as $numero) {
    echo $numero . " ";
}
?> 


</body>
</html>