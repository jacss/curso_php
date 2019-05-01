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
        $lista_coisas = [];
        $lista_coisas ['frutas'] = array (1=>'Banana',2 => 'Mação', 3=>'Morango', 4=>'Uva');
        $lista_coisas ['pessoas'] = array(1 => 'Augusto', 2 => 'Iraci', 3=> 'Nayara', 4 => 'Antonio');

        echo '<pre>';
            print_r($lista_coisas);
            //print_r($lista_coisas);

        
        echo '</pre>';
        echo '<hr>';
       echo $lista_coisas['frutas'][2];
       echo '<hr>';
      echo $lista_coisas['pessoas'][3];

    ?>
</body>
</html> 