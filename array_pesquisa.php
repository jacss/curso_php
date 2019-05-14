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
        $lista_frutas = array('Banana','Laranja','Morango','Maracuja');
        echo '<pre>';
         print_r($lista_frutas);
        echo '</pre>';

        $existe = in_array('Limão', $lista_frutas);

        if($existe){
            echo 'O valor procurado existe no meu array';

        }else{
            echo 'O valor procurado não existe no meu array';
        }
    ?>
</body>
</html>