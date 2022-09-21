<div class="d-flex flex-column justify-content-center align-items-center">
    <h1>Tabela Linguagem Programação</h1>
    <a class="btn btn-primary mb-4 mt-3" href="?page=nlp">Adicionar Linguagem</a>
</div>
<?php

    $sql = "SELECT * FROM linguagem_programacao";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";
            print"<th>ID linguagem</th>";
            print"<th>Nome Linguagem</th>";
            print"<th>Ano de lançamento</th>";
            print"<th>Ações</th>";
            print"</tr>";
        while($row = $res -> fetch_object()) {
            print"<tr>";
            print "<td>".$row -> id_linguagem."</td>";
            print "<td>".$row -> nome_linguagem."</td>";
            print "<td>".$row -> ano_lancamento."</td>";
            print "<td>
                <button 
                onclick=\"location.href='?page=elp&id=".$row->id_linguagem."';\"
                class='btn btn-success'>Editar</button>

                <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=slp&acao=excluir&id=".$row->id_linguagem."';
                } else {false;}
                \"class='btn btn-danger'>Excluir</button>
            </td>";
            print"</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nada foi encontrado</p>";
    }
?>