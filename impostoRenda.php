<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    
    function calcularImpostoRenda($renda){
        if($renda<= 1000){
            echo 'O contribuinte é ISENTO!! </br>';

        }else if(($renda >= 1000.01) && ($renda <= 2000.00)){
            $valorDesonto = ($renda * 10)/100;
            $novaRenda = $renda - $valorDesonto;

        }else if(($renda >= 2000.01) && ($renda <= 3000.00)){
            $valorDesonto = ($renda * 20)/100;
            $novaRenda = $renda - $valorDesonto;

        }else if(($renda >= 3000.01) && ($renda <= 4000.00)){
            $valorDesonto = ($renda * 30)/100;
            $novaRenda = $renda - $valorDesonto;

        }else if($renda > 4000.01){
            $valorDesonto = ($renda * 50)/100;
            $novaRenda = $renda - $valorDesonto;

}
if($renda<= 1000.00){
    return  $renda;
}else{
    return  $novaRenda;
}
}
$resultado = calcularImpostoRenda(500);
   
 if($resultado<=1000){
        echo 'A renda não mudou :', $resultado;
    }else{
        echo 'Nova Renda :', $resultado;
    }
   
?>
</body>
</html>