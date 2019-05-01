<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php
		$possui_cartao_loja =false;
		$valor_compra = 45;
		$valor_frete = 50;

		$desconto_frete = false;

		if($valor_compra >=100 || $possui_cartao_loja==true){
			$valor_frete = 0;
			$desconto_frete = true;
		}
	?>
	<h1>Detalhes do pedido</h1>
	 <p>Possui o cartão da loja?
	 	<?php
	 		if($possui_cartao_loja==true){
	 			echo "SIM";
	 		}else{
	 			echo "NÃO";
	 		}
	 	?>
	 </p>

	 
	 <p>Teve desconto no frete?
	 	<?php
	 		if($desconto_frete){
	 			echo "SIM";
	 		}else{
	 			echo "NÃO";
	 		}
	 	?>
	 </p>
	 <p>Valor da compra: <?= $valor_compra ?></p>
	 <p>Valor do Frete: <?= $valor_frete ?></p>

</body>
</html>