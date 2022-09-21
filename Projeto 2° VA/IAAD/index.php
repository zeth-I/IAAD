<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500&display=swap" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BD StartUP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?page=startup">Startup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=programador">Programador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=lp">Linguagem Programação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=pl">Programador Linguagem</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");

                    switch(@$_REQUEST["page"]){
                    case "novastartup":
                        include("startup/insertStartup.php");
                    break;
                    case "salvarstartup":
                        include("startup/salvarStartup.php");
                    break;
                    case "startup":
                        include("startup/listarStartup.php");
                    break;
                    case "editarstartup":
                        include("startup/editarStartup.php");
                    break;

                    case "novoprogramador":
                        include("programador/insertProg.php");
                    break;
                    case "salvarprogramador":
                        include("programador/salvarProg.php");
                    break;
                    case "programador":
                        include("programador/listarProg.php");
                    break;
                    case "editarprogramador":
                        include("programador/editarProg.php");
                    break;

                    case "nlp":
                        include("linguagempro/insertLP.php");
                    break;
                    case "slp":
                        include("linguagempro/salvarLP.php");
                    break;
                    case "lp":
                        include("linguagempro/listarLP.php");
                    break;
                    case "elp":
                        include("linguagempro/editarlP.php");
                    break;

                    case "npl":
                        include("prolinguagem/insertPL.php");
                    break;
                    case "spl":
                        include("prolinguagem/salvarPL.php");
                    break;
                    case "pl":
                        include("prolinguagem/listarPL.php");
                    break;
                    case "epl":
                        include("prolinguagem/editarPL.php");
                    break;

                    default:
                        print "<h1 class='d-flex justify-content-center mb-5'>Bem Vindo ao BD Start UP</h1>";
                    }
                ?>
                
            </div>
        </div>
    </div>

    <style>
        body{
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>
  </body>
</html>