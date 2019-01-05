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
		<title>Editar notícia</title>
	<?php else: ?>
		<title>Nova notícia</title>
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
			<div class="col-md-6 offset-md-3 col-sm-12">
				<?php if($id): ?>
					<h1>Editar notícia</h1>
				<?php else: ?>
					<h1>Nova notícia</h1>
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
						<select name="tipo" id="tipo" class="form-control" aria-describedby="tipo_desc">
							<option value="0">Selectione um tipo</option>
							<option value="1">Esporte</option>
							<option value="2">Política</option>
						</select>
						<small id="tipo_desc">Tipo da notícia</small>
					</div>
					
					<!-- Resumo da notícia -->
					<div class="form-group">
						<label for="resumo">Resumo</label>
						<textarea name="resumo" id="resumo" rows="2" class="form-control" aria-describedby="resumo_desc"></textarea>
						<small id="resumo_desc">Resumo da notícia</small>
					</div>
					
					<!-- Conteúdo da notícia -->
					<div class="form-group">
						<label for="conteudo">Conteúdo</label>
						<textarea name="conteudo" id="conteudo" rows="5" class="form-control" aria-describedby="conteudo_desc"></textarea>
						<small id="conteudo_desc">Conteúdo da notícia</small>
					</div>
					
					<!-- Imagem -->
					<div class="form-group">
						<label for="imagem">Imagem</label>
						<input type="text" id="imagem" name="imagem" class="form-control" placeholder="Nome do arquivo de imagem" aria-describedby="imagem_desc">
						<small id="imagem_desc">Nome do arquivo de imagem na pasta img.</small>
					</div>
					
					<!-- Destaque -->
					<div class="form-group">
						<label>Destaque</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" id="sim" name="destaque" value="sim" aria-describedby="destaque_desc">
							<label class="form-check-label" for="sim">Sim</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" id="nao" name="destaque" value="nao" aria-describedby="destaque_desc" checked>
							<label class="form-check-label" for="nao">Não</label>
						</div>
						<small id="destaque_desc">Notícia deve aparecer como destque no site</small>
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