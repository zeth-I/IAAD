<h1 class='mb-3'>Editar Startup</h1>

<?php
    $sql = "SELECT * FROM linguagem_programacao WHERE id_linguagem=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res  -> fetch_object();
?>

<form action="?page=slp" method="POST">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row -> id_linguagem;?>">

    <div class="mb-3">
        <label for="">Nome Linguagem</label>
        <input type="text" name="nome_linguagem" value="<?php print $row->nome_linguagem;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Ano de lançamento</label>
        <input type="text" name="ano_lancamento" value="<?php print $row->ano_lancamento;?>"  class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Editar
        </button>
    </div>
</form>