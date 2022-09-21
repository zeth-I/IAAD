<h1 class='mb-3'>Insira uma nova Startup</h1>

<form action="?page=salvarstartup" method="POST">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="">Nome StartUP</label>
        <input type="text" name="nome_startup" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Cidade Sede</label>
        <input type="text" name="cidade_sede" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Enviar
        </button>
    </div>
</form>