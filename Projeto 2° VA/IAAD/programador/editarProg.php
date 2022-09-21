<h1 class='mb-3'>Editar Startup</h1>

<?php
    $sql = "SELECT * FROM programador WHERE id_programador=".$_REQUEST["id"];
    $res = $conn -> query($sql);
    $row = $res  -> fetch_object();
?>

<form action="?page=salvarprogramador" method="POST">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row -> id_programador;?>">

    <div class="mb-3">
        <label for="">Id Startup (100XX)</label>
        <input type="text" name="id_startup" value="<?php print $row -> id_startup;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Nome do Programador</label>
        <input type="text" name="nome_programador" value="<?php print $row -> nome_programador;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Genero (M/F)</label>
        <input type="text" name="genero" value="<?php print $row -> genero;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="Date" name="data_nascimento" value="<?php print $row -> data_nascimento;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="Email" name="email" value="<?php print $row -> email;?>" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Editar
        </button>
    </div>
</form>