<?php
include 'db.php';
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ) {
    header("location: index,html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Colégio Alberto Gomes Veiga</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="site-header">
        <h1>Colégio Alberto Gomes Veiga</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href=""></a></li>
                <li><a href="./logout.php">Sair</a></li>
            </ul>
        </nav>
        <p ></p>
    </header>

    <main class="content">
        <section>
            <h2>Bem vindo ao nosso Colégio!</h2>
            <p>O Colegio Alberto Gomes Veiga oferece ensino de qualidade com foco em inovação e valores humanos. Aqui formamos cidadãos preparados para o futuro.</p>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 Colegio Alberto Gomes Veiga. Todos os direitos reservados.</p>
    </footer>
</body>
</html>