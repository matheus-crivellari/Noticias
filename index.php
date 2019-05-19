<!DOCTYPE html>
<html lang="pt_br">

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
        <main id="conteudo">
            <br>
            <!-- Notícias em destaque -->
            <section id="destaques">
                <?php for ($i=0;$i<3;$i++): ?>
                <?php $link = 'detalhe.php'; ?>
                <?php $cat_url = '#'; ?>
                <article class="destaque">
                    <figure>
                        <a href="<?= $link ?>"><img src="assets/img/1000x610.png" alt=""></a>
                    </figure>
                    <div>
                        <p class="categoria">
                            <strong><a href="<?= $cat_url ?>">Categoria</a></strong>
                        </p>
                        <h2 class="manchete">
                            <a href="<?= $link ?>">Lorem ipsum dolor sit amet, consectetur
                                adipisicing</a>
                        </h2>
                        <p class="resumo">
                            <a href="<?= $link ?>">Sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.</a>
                        </p>
                        <strong class="data">10/11/2018</strong>
                    </div>
                    <div class="clearfix"></div>
                </article>
                <?php endfor; ?>
                <div class="clearfix"></div>
            </section>
            <br>
            <!-- Notícias comuns -->
            <section id="comuns">
                <?php for ($i=0;$i<3;$i++): ?>
                <?php $link = 'detalhe.php'; ?>
                <?php $cat_url = '#'; ?>
                <article class="comum">
                    <figure>
                        <a href="<?= $link ?>"><img src="assets/img/1000x610.png" alt=""></a>
                    </figure>
                    <div>
                        <p class="categoria">
                            <strong><a href="<?= $cat_url ?>">Categoria</a></strong>
                        </p>
                        <h2 class="manchete">
                            <a href="<?= $link ?>">Lorem ipsum dolor sit amet, consectetur
                                adipisicing</a>
                        </h2>
                        <p class="resumo">
                            <a href="<?= $link ?>">Sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.</a>
                        </p>
                        <strong class="data">10/11/2018</strong>
                    </div>
                    <div class="clearfix"></div>
                </article>
                <?php endfor; ?>
                <div class="clearfix"></div>
            </section>
        </main>
        <p><a id="mais" href="noticias.php">Mais notícias...</a></p>

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