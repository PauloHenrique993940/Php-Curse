<?php
define('HOST', '127.0.0.1');
define('PORT', '5432');
define('DBNAME', 'postgres');
define('USER', 'postgres');
define('PASSWORD', 'sua_senha');

try {
	$dsn = 'pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME;
	$opcoes = [
		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	];

	$conn = new PDO($dsn, USER, PASSWORD, $opcoes);
	echo 'Conexao realizada com sucesso.';

} catch (PDOException $e) {
	echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' . $e->getMessage();
}

?>