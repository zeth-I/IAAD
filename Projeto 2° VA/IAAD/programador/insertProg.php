<h1 class='mb-3'>Insira um novo Programador</h1>

<form action="?page=salvarprogramador" method="POST">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="">Id Startup (100XX)</label>
        <input type="text" name="id_startup" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Nome do Programador</label>
        <input type="text" name="nome_programador" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Genero (M/F)</label>
        <input type="text" name="genero" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="Date" name="data_nascimento" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="Email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Enviar
        </button>
    </div>
</form>