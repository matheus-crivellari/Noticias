<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="assets/style/fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
	<div id="principal">
		<?php require_once 'php/header.php' ?>
		<main>
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
							<p class="categoria"><strong><a href="<?= $cat_url ?>">Categoria</a></strong></p>
							<h2 class="manchete"><a href="<?= $link ?>">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h2>
							<p class="resumo"><a href="<?= $link ?>">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></p>
							<strong class="data">10/11/2018</strong>
						</div>
						<div class="clearfix"></div>
					</article>
				<?php endfor; ?>
				<div class="clearfix"></div>
			</section>
			<div id="paginacao">
				<a class="button" href="#">Início</a>
				<a class="button" href="#">Anterior</a>
				<span>Página <strong>1</strong> de <strong>10</strong></span>
				<a class="button" href="#">Próxima</a>
				<a class="button" href="#">Última</a>
			</div>
		</main>
		<?php require_once 'php/footer.php' ?>
	</div>
</body>
</html>