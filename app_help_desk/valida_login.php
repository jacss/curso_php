<?php
$usuario_autenticado = false;

$usuario_app = array(
    array('email' => 'augusto@teste.com.br',  'senha' => '123456'),
    array('email' => 'j.augustocss@gmail.com',  'senha' => 'Sm69Admin'),
    array('email' => 'ns.lago@gmail.com',  'senha' => '123'),
);


foreach($usuario_app as $user){
   if($user['email']== $_POST['email'] && $user['senha']== $_POST['senha']){
    $usuario_autenticado = true;
   }
}
if($usuario_autenticado == true){
    echo 'Usuário autenticado!!';

}else{
    echo 'Erro na autenticação do usuario!!';

}
/*
 print_r($_GET);
    echo '<br />';

   echo $_GET['email'];
   echo '<br />';
    echo $_GET['senha'];

  print_r( $_POST);

  echo '<br/>';

  echo $_POST['email'];
  echo '<br/>';
  echo $_POST['senha'];
  */
?>