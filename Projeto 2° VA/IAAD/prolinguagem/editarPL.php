<h1 class='mb-3'>Editar Startup</h1>

<?php
    $sql = "SELECT * FROM programador_linguagem WHERE id_busca=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res  -> fetch_object();
?>

<form action="?page=spl" method="POST">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row -> id_busca;?>">

    <div class="mb-3">
        <label for="">ID Linguagem (200XX)</label>
        <input type="text" name="id_linguagem" value="<?php print $row->id_linguagem;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">ID Programador (300XX)</label>
        <input type="text" name="id_programador" value="<?php print $row->id_programador;?>"  class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Editar
        </button>
    </div>
</form>