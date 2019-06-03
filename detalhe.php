<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Conta mais</title>

    <link rel="stylesheet" href="assets/style/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <div id="principal">
        <!-- CABEÇALHO DO SITE -->
        <nav id="social">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </nav>
        <header id="header">
            <div id="logo">
                <a href="index.php">
                    <img src="assets/img/contamais-logo.svg" alt="Conta Mais Notícias" title="Conta Mais Notícias">
                </a>
            </div>
            <div id="busca">
                <form action="buscar.php" action="post">
                    <input type="search" id="buscar" name="buscar" placeholder="Buscar">
                    <input type="submit" id="ir" value="Ir">
                </form>
            </div>
            <div class="clearfix"></div>
        </header>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="noticias.php">Notícias</a></li>
                <li><a href="admin">Administração <i class="fas fa-lock"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </nav>
        <!-- FIM CABEÇALHO DO SITE -->

        <!-- Conteúdo do site -->
        <main>
            <article id="artigo">
                <h1 id="titulo">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua
                </h1>
                <article>
                    <article id="resumo">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </article>
                    <figure>
                        <img src="assets/img/1000x610.png" alt="">
                    </figure>
                    <article id="corpo">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem
                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </article>
                    <p class="data"><i>Notícia criada em: <strong>10/10/2018 às 10:20</strong></i></p>
                    <p id="voltar"><a class="button" href="javascript:history.back()"><i
                                class="fas fa-chevron-left"></i> Voltar</a></p>
                </article>
            </article>
        </main>

        <!-- RODAPÉ DO SITE -->
        <footer id="footer">
            <div id="copyright">
                © Copyright 2018 - Conta mais - Todos os direitos reservados.
            </div>
            <div id="creditos">
                Desenvolvido por: Conta mais
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- FIM DO RODAPÉ DO SITE -->
    </div>
</body>

</html>