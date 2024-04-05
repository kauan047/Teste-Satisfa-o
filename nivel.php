<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['av_atendimento'], $_POST['av_edVendendor'], $_POST['av_infoPrestadas'], $_POST['av_entregas'], $_POST['av_montagem'], $_POST['av_entregador'], $_POST['av_entrega'])) {
        
        $atendimento = intval($_POST['av_atendimento']);
        $educacao = intval($_POST['av_edVendendor']);
        $info_prest = intval($_POST['av_infoPrestadas']);
        $entregas = intval($_POST['av_entregas']);
        $montagem = intval($_POST['av_montagem']);
        $entregador = intval($_POST['av_entregador']);
        $entrega = intval($_POST['av_entrega']);

    
        $pontos = $atendimento + $educacao + $info_prest + $entregas + $montagem + $entregador + $entrega;

      
        if ($pontos <= 280) {
            echo "Cliente totalmente insatisfeito com a empresa";
        } elseif ($pontos > 280 && $pontos <= 420) {
            echo "Cliente satisfeito com a empresa";
        } else {
            echo "Cliente extremamente satisfeito com a empresa";
        }
    } else {
        echo "Erro: Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Erro: Formulário não foi submetido.";
}
?>