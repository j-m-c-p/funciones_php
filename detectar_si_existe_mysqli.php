<?PHP
	
	$funcion=$_GET['funcion'];
	if (function_exists($funcion)) 
	{
		//mysqli está instalado
		echo $funcion.", si es una función";
	}else{
		echo $funcion.", no es una función";
	}

	echo "<br><br>";

	//Esta otra función se encontró en http://stackoverflow.com/questions/16254413/php-5-installed-also-mysqli-is-installed-but-not-compiling-in-mac-lion
	
	echo $funcion;
	echo "<br><br>";

	//echo phpinfo();
?>
