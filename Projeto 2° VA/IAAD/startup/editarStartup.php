<h1 class='mb-3'>Editar Startup</h1>

<?php
    $sql = "SELECT * FROM startup WHERE id_startup=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res  -> fetch_object();
?>

<form action="?page=salvarstartup" method="POST">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row -> id_startup;?>">

    <div class="mb-3">
        <label for="">Nome StartUP</label>
        <input type="text" name="nome_startup" value="<?php print $row->nome_startup;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Cidade Sede</label>
        <input type="text" name="cidade_sede" value="<?php print $row->cidade_sede;?>"  class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Editar
        </button>
    </div>
</form>