<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function exibirBoasVindas(){
            echo 'Seja bem-vindo ao curso de php!! </br>';
        }

        exibirBoasVindas();

        function calculaAreaTerreno($largura, $cumprimento){
            $area = $largura * $cumprimento;
            return $area;
        }
         echo calculaAreaTerreno(30, 30);
    ?>
</body>
</html>