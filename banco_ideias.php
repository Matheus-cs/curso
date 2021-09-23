<?php 
    $pagina_atual = 'Mind Lamp - Banco de ideias';
    $titulo = "Banco de ideias";
    include("menu.php"); 
    $query = "SELECT * FROM tb_ideias";
    $consulta_ideia = mysqli_query($conexao, $query);
?>
<center>
<div class="row justify-content-md-center">
<?php 
    while ($ideia_card = mysqli_fetch_array($consulta_ideia)){
 
        echo'<div class="col-3" style="padding-top: 2% !important;">';
            echo'<dvv class="card text-dark bg-light mb-3 h-100" style="max-width: 18rem;">';
                echo'<div class="card-header">'.$ideia_card['nome_ideia'].'</div>';
                echo'<div class="card-body">';
                    echo'<h5 class="card-title">'.$ideia_card['sub_ideia'].'</h5>';
                    echo'<p class="card-text">'.$ideia_card['descricao_ideia'].'</p>';
                echo'</div>';   
            echo'</dvv>';
        echo'</div>';
    } 
?>
</center>
</div>

<?php include("footer.php"); ?>





INSERT INTO `tb_ideias` (`id_ideia`, `nome_ideia`, `sub_ideia`, `descricao_ideia`) VALUES (NULL, 'teste', 'teste', 'teste'), (NULL, 'teste', 'teste', 'teste');
 

