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
        //string to lower
        $texto = 'curso completo de php';
         echo $texto, '<br/>';
         echo strtolower($texto) ;
            echo '<hr/>';
         //string to upper
         echo $texto, '<br/>';
         echo strtoupper($texto);
         echo '<hr/>';
         //string to first
         echo $texto, '<br/>';
         echo ucfirst($texto);

         echo '<hr/>';

         echo $texto, '<br/>';
         echo strlen($texto);

         echo '<hr/>';

         echo $texto, '<br/>';
         echo str_replace('php', 'java',$texto);

         echo '<hr/>';

         echo $texto, '<br/>';
         echo substr($texto, 0,14) . '..';

    ?>
</body>
</html>