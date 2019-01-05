<!-- Topo do admin -->
<div class="jumbotron" id="topo">
	<h1 class="display-4">Nome do site</h1>
</div>

<!-- Navegação do admin -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Administração</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link <?= $pag_sel == 'not' ? 'active' : null ?>" href="index.php">Notícias  			<?php if($pag_sel == 'not'): ?><span class="sr-only">(current)</span><?php endif ?></a>
			<a class="nav-item nav-link <?= $pag_sel == 'cat' ? 'active' : null ?>" href="categorias.php">Categorias 	<?php if($pag_sel == 'not'): ?><span class="sr-only">(current)</span><?php endif ?></a>
			<a class="nav-item nav-link <?= $pag_sel == 'usu' ? 'active' : null ?>" href="usuarios.php">Usuários 		<?php if($pag_sel == 'not'): ?><span class="sr-only">(current)</span><?php endif ?></a>
			<a class="nav-item nav-link <?= $pag_sel == 'upl' ? 'active' : null ?>" href="uploads.php">Uploads 			<?php if($pag_sel == 'not'): ?><span class="sr-only">(current)</span><?php endif ?></a>
			<a class="nav-item nav-link" href="../index.php">Sair</a>
		</div>
	</div>
</nav>