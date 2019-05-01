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
      //recuperação da data corrente
      echo date('d/m/Y H:i');
      echo '<br/>';
      echo date_default_timezone_get();
     // echo date_default_timezone_set();
      echo '<br/>';
      echo date('d/m/Y H:i');
  */
   $data_inicial ='2019-04-12';
   $data_final='2019-05-01';
   //timestamp
   //01/01/1970
   $time_inicial = strtotime($data_inicial);
   echo $data_inicial . ' -- ' . $time_inicial;

   echo '<br/>';
   $time_final = strtotime($data_final);
   echo $data_final . ' -- ' . $time_final;
   echo '<br/>';
   //calculando a diferença

   $diferenca_times = $time_final - $time_inicial;
   echo 'A diferença de segundos ente DATA INICIAL  e  DATA INICIAL é:' . $diferenca_times;
   echo '<br/>';
   //Calculando quantos segundos tem 1 dia

   $segundos_existem_dia = 24*60*60;

   echo 'Um dia possui ' . $segundos_existem_dia . ' segundos ';

   $diferenca_entre_as_datas = $diferenca_times/$segundos_existem_dia;
    echo '<br/>';

    echo 'A diferença entre ' . $data_inicial . ' e ' . $data_inicial . ' é: ' . $diferenca_entre_as_datas;


    ?>
</body>
</html>