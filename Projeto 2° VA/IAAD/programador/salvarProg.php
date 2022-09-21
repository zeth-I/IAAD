<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $id_startup = $_POST["id_startup"];
            $nome_programador = $_POST["nome_programador"];
            $genero =$_POST["genero"];
            $data_nascimento =$_POST["data_nascimento"];
            $email =$_POST["email"];

            $sql = "INSERT INTO programador (id_startup, nome_programador, genero, data_nascimento, email) 
            VALUES ('{$id_startup}','{$nome_programador}','{$genero}','{$data_nascimento}','{$email}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Inserido com sucesso!');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            } else {
                print "<script>
                alert('Não foi inserido ! :c');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            }

            break;
        case 'editar':
            $id_startup = $_POST["id_startup"];
            $nome_programador = $_POST["nome_programador"];
            $genero =$_POST["genero"];
            $data_nascimento =$_POST["data_nascimento"];
            $email =$_POST["email"];

            $sql = "UPDATE programador SET 
                        id_startup = '{$id_startup}',
                        nome_programador  = '{$nome_programador}',
                        genero  = '{$genero}',
                        data_nascimento  = '{$data_nascimento}',
                        email  = '{$email}'
                    WHERE id_programador=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Editado com sucesso!');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            } else {
                print "<script>
                alert('Não foi editado ! :c');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM programador WHERE id_programador=".$_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>
                alert('Excluído com sucesso!');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            } else {
                print "<script>
                alert('Não foi excluído ! :c');
                </script>";
                print "<script>
                location.href='?page=programador';
                </script>";
            }
            break;
    }