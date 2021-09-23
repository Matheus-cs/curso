<?php
    $nome_ideia = $_POST['titulo_ideia'];
    $sub_ideia = $_POST['legenda_ideia'];
    $descricao_ideia = $_POST['descricao_ideia'];

    $query = "INSERT INTO `tb_ideias` (`id_ideia`, `nome_ideia`, `sub_ideia`, `descricao_ideia`) VALUES (NULL, '$nome_ideia', '$sub_ideia', '$descricao_ideia')";

    $executar = mysqli_query($conexao, $query);
?>