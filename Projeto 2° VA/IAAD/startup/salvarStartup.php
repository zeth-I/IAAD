<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_startup = $_POST["nome_startup"];
            $cidade_sede =$_POST["cidade_sede"];

            $sql = "INSERT INTO startup (nome_startup, cidade_sede) 
            VALUES ('{$nome_startup}','{$cidade_sede}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Inserido com sucesso!');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            } else {
                print "<script>
                alert('Não foi inserido ! :c');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            }

            break;
        case 'editar':
            $nome_startup = $_POST["nome_startup"];
            $cidade_sede =$_POST["cidade_sede"];

            $sql = "UPDATE startup SET 
                        nome_startup = '{$nome_startup}',
                        cidade_sede  = '{$cidade_sede}'
                    WHERE id_startup=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Editado com sucesso!');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            } else {
                print "<script>
                alert('Não foi editado ! :c');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM startup WHERE id_startup=".$_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>
                alert('Excluído com sucesso!');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            } else {
                print "<script>
                alert('Não foi excluído ! :c');
                </script>";
                print "<script>
                location.href='?page=startup';
                </script>";
            }
            break;
    }