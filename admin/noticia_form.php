<?php
$id = $_GET['id'] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php if($id): ?>
		<title>Nova notícia</title>
	<?php else: ?>
		<title>Editar notícia</title>
	<?php endif ?>

	<link rel="stylesheet" href="../assets/style/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../assets/style/admin/style.css">
	<link rel="stylesheet" href="../assets/style/fontawesome/css/all.css">  
</head>
<body>
	<!-- Topo do admin -->
    <?php $pag_sel = 'not' ?>
    <?php require_once 'header.php' ?>

	<!-- Conteúdo da página -->
    <div class="container-fluid p-3 p-lg-5">
		<div class="row">
			<div class="col-6 offset-3">
				<?php if($id): ?>
					<h1>Nova notícia</h1>
				<?php else: ?>
					<h1>Editar notícia</h1>
				<?php endif ?>
				<form>
					<!-- Título da notícia -->
					<div class="form-group">
						<label for="date">Data</label>
						<input type="date" id="date" class="form-control" name="date" aria-describedby="date_desc" value="<?= date('Y-m-d') ?>">
						<small id="date_desc">Data de publicação da notícia</small>
					</div>

					<!-- Categoria da notícia -->
					<div class="form-group">
						<label for="titulo">Título</label>
						<input type="text" id="titulo" class="form-control" placeholder="Título da notícia" aria-describedby="titulo_desc">
						<small id="titulo_desc">Título da notícia</small>
					</div>

					<!-- Tipo da notícia -->
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
							<option value="0">Selectione um tipo</option>
							<option value="1">Esporte</option>
							<option value="2">Política</option>
						</select>
						<small id="tipo_desc">Tipo da notícia</small>
					</div>

					<!-- Resumo da notícia -->
					<div class="form-group">
						<label for="resumo">Resumo</label>
						<textarea name="resumo" id="resumo" rows="2" class="form-control"></textarea>
						<small id="resumo_desc">Resumo da notícia</small>
					</div>

					<!-- conteudo da notícia -->
					<div class="form-group">
						<label for="conteudo">Conteúdo</label>
						<textarea name="conteudo" id="conteudo" rows="5" class="form-control"></textarea>
						<small id="conteudo_desc">Conteúdo da notícia</small>
					</div>

					<!-- Submit -->
					<p class="text-right">
						<a href="index.php" class="btn btn-danger">
							<i class="fas fa-times"></i> Cancelar
						</a>&nbsp;
						<button class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
					</p>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>