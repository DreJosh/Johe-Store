<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cinpal</title>

    <script src="https://kit.fontawesome.com/775fd40529.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- this should go after your </body> -->
    <link href="<?php echo base_url('/assets/CSS/header.css'); ?>" rel="stylesheet">
</head>

<body class="hero-anime">


    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand" href="<?php echo base_url('/index.php/home'); ?>" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active mx-2">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('/index.php/home'); ?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mx-2">
                                    <a class="nav-link" href="#">Cadastro</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Material</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/index.php/Vendas'); ?>">Venda</a>
                                        <a class="dropdown-item" href="#">Vendedor</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mx-2">
                                    <a class="nav-link" href="#">Consula</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Material</a>
                                        <a class="dropdown-item" href="<?php echo base_url('/index.php/consulVendas'); ?>">Venda</a>
                                        <a class="dropdown-item" href="#">Vendedor</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mx-2">
                                    <a class="nav-link" href="#">Empresa</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 mx-2">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>