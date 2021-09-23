<html>
    <head>

        <!-- BootStrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- BootStrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- Icones -->
        <script src="https://kit.fontawesome.com/610e9e2973.js" crossorigin="anonymous"></script>
        <!-- Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Conexão MySQL -->
        <?php 
            include("class/conexao.php"); 
            // include("class/db_funcao.php"); 
        
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="midia/logo.png" type="image/x-icon">
        <title><?php echo "$pagina_atual" ?></title>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Mind Lamp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li id="menu" class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"><i id="menu" class="fas fa-home"></i>Home</a>
                        </li>
                        <li id="menu" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i id="menu" class="fas fa-comments"></i></i>Banco de Ideias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="banco_ideias.php">Quadro de Ideias</a></li>
                                <li><a class="dropdown-item" href="gerenciamento_ideias.php">Gerenciar</a></li>
                            </ul>
                        </li>
                        <li id="menu" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i id="menu" class="fas fa-dice"></i></i>Banco de Dados</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="teste_conexao.php">Testar Conexao</a></li>
                                <li><a class="dropdown-item" target="_blank" href="http://localhost/phpmyadmin/index.php">PHP My Admim</a></li>
                                <li><a class="dropdown-item" href="terminal_sql.php">Terminal</a></li>
                            </ul>
                        </li>
                        <li id="menu" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i id="menu" class="fas fa-code"></i>Códigos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="codigos.php">Menu</a></li>
                            </ul>
                        </li>
                    </ul>
                <span class="navbar-text" id="menu">
                <i id="menu" class="fas fa-power-off"></i>Sair
                </span>
                </div>
            </div>
        </nav><br>
        <div class="row justify-content-md-center">
            <div class="col-10"> 
                <div class="card">
                    <div class="card-header"><?php echo "$titulo" ?></div>
                    <div class="card-body" id="container">