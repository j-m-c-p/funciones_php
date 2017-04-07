<?PHP
	if (function_exists('mysq_fetch_array')) 
	{
		//mysqli está instalado
		echo "Si es una función";
	}else{
		echo "No es una función";
	}

	echo "<br><br>";
	echo "<br><br>";

	echo phpinfo();
?>
