<h1 class='mb-3'>Insira uma nova PL</h1>

<form action="?page=spl" method="POST">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="">ID Linguagem (200XX)</label>
        <input type="text" name="id_linguagem" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">ID Programador (300XX)</label>
        <input type="text" name="id_programador" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Enviar
        </button>
    </div>
</form>