<div class="d-flex flex-column justify-content-center align-items-center">
    <h1>Tabela StartUP</h1>
    <a class="btn btn-primary mb-4 mt-3" href="?page=novastartup">Adicionar Startup</a>
</div>
<?php

    $sql = "SELECT * FROM startup";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";
            print"<th>ID</th>";
            print"<th>Nome StartUP</th>";
            print"<th>Cidade Sede</th>";
            print"<th>Ações</th>";
            print"</tr>";
        while($row = $res -> fetch_object()) {
            print"<tr>";
            print "<td>".$row -> id_startup."</td>";
            print "<td>".$row -> nome_startup."</td>";
            print "<td>".$row -> cidade_sede."</td>";
            print "<td>
                <button 
                onclick=\"location.href='?page=editarstartup&id=".$row->id_startup."';\"
                class='btn btn-success'>Editar</button>

                <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvarstartup&acao=excluir&id=".$row->id_startup."';
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