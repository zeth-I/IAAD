<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $id_linguagem = $_POST["id_linguagem"];
            $id_programador =$_POST["id_programador"];

            $sql = "INSERT INTO programador_linguagem (id_linguagem, id_programador) 
            VALUES ('{$id_linguagem}','{$id_programador}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Inserido com sucesso!');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            } else {
                print "<script>
                alert('Não foi inserido ! :c');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            }

            break;
        case 'editar':
            $id_linguagem = $_POST["id_linguagem"];
            $id_programador =$_POST["id_programador"];

            $sql = "UPDATE programador_linguagem SET 
                        id_linguagem = '{$id_linguagem}',
                        id_programador  = '{$id_programador}'
                    WHERE id_busca=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Editado com sucesso!');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            } else {
                print "<script>
                alert('Não foi editado ! :c');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM programador_linguagem WHERE id_busca=".$_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>
                alert('Excluído com sucesso!');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            } else {
                print "<script>
                alert('Não foi excluído ! :c');
                </script>";
                print "<script>
                location.href='?page=pl';
                </script>";
            }
            break;
    }