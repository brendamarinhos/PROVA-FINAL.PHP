<<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova Final PHP</title>
</head>
<body>
    <h1>Resultados dos Exercícios</h1>
    <pre>
        <?php
        // Exercício 1
        $raio = 5;
        $perimetro = 2 * M_PI * $raio;
        $area = M_PI * pow($raio, 2);
        echo "Exercício 1: \n";
        echo "O perímetro do círculo é: " . $perimetro . "\n";
        echo "A área do círculo é: " . $area . "\n\n";

        // Exercício 4
        $nota1 = 7;
        $nota2 = 8.5;
        $nota3 = 9;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "Exercício 4: \n";
        echo "A média do aluno é: " . $media . "\n\n";

        // Exercício 8
        $fahrenheit = 77;
        $celsius = (5 * ($fahrenheit - 32)) / 9;
        echo "Exercício 8: \n";
        echo "A temperatura em Celsius é: " . $celsius . "\n\n";

        // Exercício 9
        $celsius = 25;
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "Exercício 9: \n";
        echo "A temperatura em Fahrenheit é: " . $fahrenheit . "\n";
        ?>
    </pre>
</body>
</html>