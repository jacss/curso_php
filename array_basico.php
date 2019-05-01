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
    /*
    //ARRAYS SEQUENCIAIS NUMÉRICOS
        //$lista_frutas = array('Banana','Mação','Morango','Uva');
        $lista_frutas = ['Banana','Mação','Morango','Uva','Manga'];
        //adicionando um elemento no array
        $lista_frutas [] = 'Abacaxi';

        //recuperando um item especifico do array

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo '<br/>';

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';
        
//recuperando um item especifico do array
echo $lista_frutas[2];
*/
//ARRAYS ASSOCIATIVOS NUMÉRICOS
$lista_frutas =array('a' => 'Banana',
                     'b' => 'Mação',
                     'c' => 'Morango',
                     'd' => 'Uva',
                     'e' => 'Manga');

        var_dump($lista_frutas)



    ?>
</body>
</html>