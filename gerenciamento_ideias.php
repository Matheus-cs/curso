<?php 
    $pagina_atual = "Mind Lamp - Gerenciar Ideias";
    $titulo = "Gerenciar - Ideias";
    include("menu.php"); 
?>
<div class="card">
  <div class="card-header">Inserir nova ideia:</div>
    <div class="card-body">
        <div style="padding-left: 1%; padding-right: 35%;">
            <form> 
                <h6>Título:</h6>
                <textarea type="submit" class="form-control" name="titulo_ideia" placeholder="Insira o título" value="" rows="1"></textarea><br>

                <h6>Legenda:</h6>
                <textarea  type="submit" class="form-control" name="legenda_ideia" placeholder="Insira a legenda" value="" rows="1"></textarea><br>
                

                <h6>Descrição:</h6>
                <textarea type="submit" class="form-control" name="descricao_ideia" placeholder="Insira uma descrição" value="" rows="5"></textarea><br>
        
                <button type="submit" class="btn btn-primary">Salvar</button>
                <?php
                    // $confirmacao = 1;
                    // if ($confirmacao=1) { 
                    //     include("class/insere_ideia.php"); 
                    // }
                ?> 
            </form>
        </div>
    </div>
</div><br>
<?php 
    $query = "SELECT * FROM tb_ideias";
    $consulta_ideia = mysqli_query($conexao, $query);
?>
<div class="card">
  <div class="card-header">Editar ideias:</div>
    <div class="card-body">
        <div style="padding-left: 1%; padding-right: 35%;">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                <?php
                    while ($ideias = mysqli_fetch_array($consulta_ideia)){
                    <td></td>
                    <td></td>
                    <td></td>
                }
                ?>
            </table>
</div>


<?php include("footer.php"); ?>