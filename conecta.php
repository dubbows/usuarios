<?php
	// conexão com o banco de dados
	//Nome do Banco de Dados
	$banco = "";
	// Usuario do Banco 
	$usuario = "";
	// Senha do Banco
	$senha = "";
	// Servidor do Bacno
	$hostname = "localhost";
    
    // Conexao (Servidor, usuario, senha, banco)
    $conn = mysqli_connect($hostname,$usuario,$senha, $banco); 
       
      
    //Verifica se a conexao existe
    if (!$conn) {
        // Exibe erro se n"ao existir
        echo "Não foi possivel conectar ao banco mysql"; 
    }
    else 
    {
        //Se Existir exibe a mensagem
        echo "parabéns! A conexão ao banco de dados ocorreu normalmente!";
        echo '<br>';


        // Executa a pesquisa na tabela
        $query = $conn->query('SELECT * FROM usuarios');
        // retorna consulta em objeto
        $obj = $query->fetch_object();
        
        // escreve o valor do objeto $obj->NOME-DO-CAMPO-TABELA
        echo $obj->USUARIO;
    }

    //Fecha a conexao
	mysql_close();

?>

