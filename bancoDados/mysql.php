<?php
    //constantes para aramezar as variaveis de conexao
    define('HOST', '127.0.0.1');
    define('DBNAME', 'test');
    define('USER', 'user');
    define('PASSWORD', 'psswd');

    //conectando com servidor
    $conn = mysqli_connect(HOST, USER, PASSWORD) or die("Não foi possivel conectar com o banco de dados");
    
    //Realizando uma consulta
    $instrucaoSQL = "SELECT nome, cpf, telefone From Cliente";
    $stmt = mysqli_prepare($conn, $instrucaoSQL);
    mysqli_stmt_bind_result($stmt, $nome, $cpf, $tel);
    mysqli_stmt_execute($stmt);


    while (mysqli_stmt_fetch($stmt)) {
	    echo $nome . "\t";
	    echo $cpf . "\t";
	    echo $tel . "\n";
    }

    //Encerrando a conexão
    mysqli_close($conn);


?>