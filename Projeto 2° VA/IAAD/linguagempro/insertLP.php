<h1 class='mb-3'>Insira uma nova linguagem</h1>

<form action="?page=slp" method="POST">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="">Nome da Linguagem</label>
        <input type="text" name="nome_linguagem" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Ano de lançamento</label>
        <input type="text" name="ano_lancamento" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type='submit'>
            Enviar
        </button>
    </div>
</form>