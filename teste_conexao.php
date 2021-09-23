<?php 
    $pagina_atual = "Mind Lamp - Teste Banco";
    $titulo = "Teste Banco de Dados";
    include("menu.php"); 

    include("class/conexao.php");

    if ($conexao){  
      echo "MySQL Conectado com sucesso !";
    };

    include("footer.php"); 
?>