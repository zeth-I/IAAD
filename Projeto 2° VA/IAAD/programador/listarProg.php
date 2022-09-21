<div class="d-flex flex-column justify-content-center align-items-center">
    <h1>Tabela Programador</h1>
    <a class="btn btn-primary mb-4 mt-3" href="?page=novoprogramador">Adicionar Programador</a>
</div>
<?php

    $sql = "SELECT * FROM programador";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";
            print"<th>ID Programador</th>";
            print"<th>ID Startup</th>";
            print"<th>Nome Programador</th>";
            print"<th>Gênero</th>";
            print"<th>Data de Nascimento</th>";
            print"<th>Email</th>";
            print"<th>Ações</th>";
            print"</tr>";
        while($row = $res -> fetch_object()) {
            print"<tr>";
            print "<td>".$row -> id_programador."</td>";
            print "<td>".$row -> id_startup."</td>";
            print "<td>".$row -> nome_programador."</td>";
            print "<td>".$row -> genero."</td>";
            print "<td>".$row -> data_nascimento."</td>";
            print "<td>".$row -> email."</td>";
            print "<td>
                <button 
                onclick=\"location.href='?page=editarprogramador&id=".$row->id_programador."';\"
                class='btn btn-success'>Editar</button>

                <button 
                onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvarprogramador&acao=excluir&id=".$row->id_programador."';
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