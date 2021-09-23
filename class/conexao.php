<?php
// Conexão com banco de dados MySQL

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "curso";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

// $query = "CREATE TABLE tb_ideias(
//     id_ideia int not null auto_increment,
//     nome_ideia varchar(255) not null,
//     sub_ideia varchar(255) not null,
//     descricao_ideia varchar(255) not null,
//     primary key(id_ideia)

// )";

// $executar = mysqli_query($conexao, $query);

?>