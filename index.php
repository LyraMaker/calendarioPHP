<?php
include "confi/ambiente.php";
include 'estruturas/calendario.php';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

?>
<!DOCTYPE html>
<html class="has-background-light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>📅 calendarioPHP | Que dia é hoje ?</title>
</head>

<body>
    <header class="has-background-info">
        <div class="container has-text-centered p-4">
            <h1 class="title has-text-white	 ">📅 calendarioPHP | Que dia é hoje ?</h1>
            <h2 class="subtitle pt-3 has-text-white"><?php echo    "Hoje é " . "<strong class='has-text-warning'>" . date('d/m/Y') . '</strong>';    ?> </h2>
        </div>
    </header>
    <main class="section">
        <div class="container is-flex is-justify-content-center">
            <table class="table is-striped is-bordered has-text-centered">
                <?php echo tituloCalendario();
                ?>
                <tbody>
                    <?php
                    echo calendario();
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="p-4 has-text-white is-flex is-justify-content-center has-background-black">
        <div class="container has-text-centered">
            <p>Site desenvolvido por <em>Gabriel Lyra Torquato</em></p>
        </div>
        <div class="container has-text-centered">
            <p>Página gerada às <?php echo date('H') . ':' . date('i'); ?></p>
        </div>
    </footer>

</body>

</html>