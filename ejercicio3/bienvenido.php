<html>
<head>
<title>Bienvenido</title>
</head>
<body>

<?php

  function verificarClaves($usu,$pass)
  {
    if ($usu!=$pass)
	  echo "Las claves ingresadas son distintas";
  }
  
  verificarClaves($_REQUEST['usuario'],$_REQUEST['clave']);

$pass = array(

	'juan' => '123',
	'elena' => 'troya',
	'marco' => 'polo',
	'diego' => 'zamba',
	'evelin' => 'admin'

);

echo $pass['marco'];


?>
<h2>Se verificaron las claves ingresadas.</h2>
</body>
</html>