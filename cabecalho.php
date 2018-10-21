<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require_once ("mostra-alerta.php");
?>
<html>
<head>
    <title> Minha Loja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            padding-top: 50px;
        }

        .principal{
            padding: 40px 15px;
            text-align: center;
        }

    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Minha Loja</a>
        </div>

        <div>
            <ul class="nav navbar-nav">
                <li><a href="produto-formulario.php">Adiciona Produto</a></li>
                <li><a href="produto-lista.php">Produtos</a></li>
            </ul>
        </div>
    </div><!-- container acaba aqui -->
</div>

<div class="container">
    <div class="principal">
<!-- fim cabecalho.php -->
        <?php  mostraAlerta("success"); ?>
        <?php mostraAlerta("danger"); ?>
