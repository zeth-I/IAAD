<div class="d-flex flex-column justify-content-center align-items-center">
    <h1>Tabela Programador Linguagem</h1>
    <a class="btn btn-primary mb-4 mt-3" href="?page=npl">Adicionar PL</a>
</div>
<?php

    $sql = "SELECT * FROM programador_linguagem";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";
            print"<th>ID linguagem</th>";
            print"<th>ID Programador</th>";
            print"<th>Ações</th>";
            print"</tr>";
        while($row = $res -> fetch_object()) {
            print"<tr>";
            print "<td>".$row -> id_linguagem."</td>";
            print "<td>".$row -> id_programador."</td>";
            print "<td>
                <button 
                onclick=\"location.href='?page=epl&id=".$row->id_busca."';\"
                class='btn btn-success'>Editar</button>

                <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=spl&acao=excluir&id=".$row->id_busca."';
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