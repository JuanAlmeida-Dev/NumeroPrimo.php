<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>numeroPrimo</title>
</head>
<body class="fundo">
<form class="formulario"  method="post">
<p><label class="title">Números Primos</label></p>
    <p><label class="insira" for="idInsira">Insira um número: </label>
    <input class="txtValor" type="text" name="valor" id="idInsira"></p>
    <div class="botoes">
    <input type="submit" value="Verificar" name="btVerificar">
    <input type="submit" value="Imprimir Primos" name="btImprimir">
    </div>
</form>

<?php
    if (isset($_POST['btVerificar'])) {
        $valor = $_POST['valor'];
        verificaPrimo($valor);
    }

    function verificaPrimo($valor)
    {
        $qtd = 0;
        $saida = "<p class='valor_div'>Verificando os divisores de $valor : </p>";
        $controle = 2;
        while ($controle <= $valor/2) {
            if ($valor % $controle == 0) {
                $saida .= "<div class='box'>É divisivel por " .$controle." </div>";
                $qtd++;
            }
        $controle++; 
        }
        if ($qtd == 0) {
            $saida .= "<p class='valor_primo'>O numero $valor é primo!</p>";
        }
        echo $saida;
    }
    if(isset($_POST['btImprimir'])) {
        $num = $_POST['valor'];
        imprimirPrimo($num);
    }

    function imprimirPrimo($num)
    {
        $verif = 2;
        while ($verif <= $num) {
            $i = 2;
            $num_primo = 1;
            while ($i < $verif) {
                if ($verif % $i == 0) {
                    $num_primo= 0;

                }
                $i++;
        }
        if ($num_primo) {
            echo "<div class='cubo'>$verif</div>"; 
        }
        $verif++;
    }

}  
?>
    
</body>
</html>