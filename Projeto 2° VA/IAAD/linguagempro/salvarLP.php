<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome_linguagem = $_POST["nome_linguagem"];
            $ano_lancamento =$_POST["ano_lancamento"];

            $sql = "INSERT INTO linguagem_programacao (nome_linguagem, ano_lancamento) 
            VALUES ('{$nome_linguagem}','{$ano_lancamento}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Inserido com sucesso!');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            } else {
                print "<script>
                alert('Não foi inserido ! :c');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            }

            break;
        case 'editar':
            $nome_linguagem = $_POST["nome_linguagem"];
            $ano_lancamento =$_POST["ano_lancamento"];

            $sql = "UPDATE linguagem_programacao SET 
                        nome_linguagem = '{$nome_linguagem}',
                        ano_lancamento  = '{$ano_lancamento}'
                    WHERE id_linguagem=".$_REQUEST["id"];
 
            $res = $conn->query($sql);

            if($res == true){
                print "<script>
                alert('Editado com sucesso!');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            } else {
                print "<script>
                alert('Não foi editado ! :c');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM linguagem_programacao WHERE id_linguagem  = ".$_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>
                alert('Excluído com sucesso!');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            } else {
                print "<script>
                alert('Não foi excluído ! :c');
                </script>";
                print "<script>
                location.href='?page=lp';
                </script>";
            }
            break;
    }