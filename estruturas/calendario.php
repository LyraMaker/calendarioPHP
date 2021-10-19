<?php

function saudacao()
{
    if ((date('G') >= 6) && (date('G') <= 12)) {
        return "Bom dia!";
    } else if ((date('G') >= 13) && (date('G') <= 18)) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function tituloCalendario()
{
    return "<thead><tr class='has-text-centered has-background-primary'><th class='has-text-white'>DOM</th><th class='has-text-white'>SEG</th><th class='has-text-white'>TER</th><th class='has-text-white'>QUA</th><th class='has-text-white'>QUI</th><th class='has-text-white'>SEX</th><th class='has-text-white'>SÁB</th></tr></thead>";
}

function calendario()
{
    $calendario = '';
    $dia = 1;
    $semana = [];

    $diaHoje = date('d'); //Captura a data do dia

    while ($dia <= 31) {
        $diaHoje == $dia ? array_push($semana, "<strong class='has-text-primary'>$dia</strong>") : array_push($semana, $dia);

        if (count($semana) == 7) {
            $calendario .= gerarLinha($semana);
            $semana = [];
        }
        $dia++;
    }
    $calendario .= gerarLinha($semana);
    return $calendario;
}

function gerarLinha($semana)
{
    $linha = "<tr>";

    for ($diaSemana = 0; $diaSemana <= 6; $diaSemana++) {
        if (array_key_exists($diaSemana, $semana)) {
            if ($diaSemana == 0 || $diaSemana == 6) {
                $linha .= "<td><strong class='has-text-danger'>{$semana[$diaSemana]}</strong></td>";
            } else {
                $linha .= "<td><strong>{$semana[$diaSemana]}</strong></td>";
            }
        } else {
            $linha .= "<td></td>";
        }
        //array_key_exists($diaSemana, $semana) ? $linha .= "<td>{$semana[$diaSemana]}</td>" : $linha .= "<td></td>"; Optei utilizar um operador ternário pois é uma condição composta de estrutura simples
    }
    $linha .= "</tr>";

    return $linha;
}
