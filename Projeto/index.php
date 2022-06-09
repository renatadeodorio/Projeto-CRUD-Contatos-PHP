<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>

  
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="arrays/style.css">


</head>
<body class="container py-5" style="background-color:#EE82EE">

        <div >
            <table class="table-Success" >
                <?php

                $url = explode('?', $_SERVER['REQUEST_URI']);
                
                include 'telas/menu.php';
                include 'acoes.php';

                match ($url[0]) {
                    '/' => home(),
                    '/cadastro' => cadastro(),
                    '/login' => login(),
                    '/listar' => listar(),
                    '/relatorio' => relatorio(),
                    '/excluir' => excluir(),
                    '/editar' => editar(),
                    default => admin(),
                }

                ?>
            </table>    
        </div>

</body>
</html>