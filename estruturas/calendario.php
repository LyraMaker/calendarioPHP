<?php

function calendario()
{
    $calendario = '';
    $dia = 1;
    $semana = [];

    while ($dia <= 31) {
        array_push($semana, $dia);

        if (count($semana) == 7) {
            $calendario .= gerarLinha($semana);
            $semana = [];
        }
        $dia++;
    }
    $calendario .= gerarLinha($semana);

    return $calendario;
}

function tituloCalendario()
{
    return "<thead><tr class='has-text-centered has-background-primary'><th>DOM</th><th>SEG</th><th>TER</th><th>QUA</th><th>QUI</th><th>SEX</th><th>SÁB</th></tr></thead>";
}

function gerarLinha($semana)
{
    $linha = "<tr>";

    for ($diaSemana = 0; $diaSemana <= 6; $diaSemana++) {
        array_key_exists($diaSemana, $semana) ? $linha .= "<td>{$semana[$diaSemana]}</td>" : $linha .= "<td></td>"; //Optei utilizar um operador ternário pois é uma condição composta de estrutura simples
    }
    $linha .= "</tr>";

    return $linha;
}
