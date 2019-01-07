<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta mais</title>

    <link rel="stylesheet" href="../assets/style/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/style/admin/style.css">
    <link rel="stylesheet" href="../assets/style/fontawesome/css/all.css">
</head>
<body>
    <!-- Topo do admin -->
    <?php $pag_sel = 'not' ?>
    <?php require_once '_header.php' ?>

    <!-- Conteúdo da página -->
    <div class="container-fluid p-3 p-lg-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Alert sucesso -->
                <?php $msg = 'Notícia adicionda com sucesso.' ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $msg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <h1>Notícias</h1>
                
                <!-- Adiciona notícia -->
                <a href="noticia_form.php">
                    <button type="button" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Adicionar Notícia</button>
                </a>

                <!-- Tabela de notícias -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Atualizado em</th>
                                <th scope="col">Destaque</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i<5; $i++): ?>
                                <?php $id = $i+1 ?>
                                <tr>
                                    <td scope="col"><?= $id ?></td>
                                    <td scope="col">Título da notícia</td>
                                    <td scope="col">Nome da categoria</td>
                                    <td scope="col"><code>nome_do_arquivo.jpg</code></td>
                                    <td scope="col">2018-12-03 19:31:42</td>
                                    <td scope="col">Sim</td>
                                    <td scope="col">
                                        <a href="noticia_form.php?id=<?= $id ?>"><button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</button></a>
                                        <button type="button" data-toggle="modal" data-target="#excluirModal_<?= $id ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Excluir</button>
                                    </td>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Paginação -->
                <nav aria-label="Paginação de notícias mx-auto">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Primeira</a></li>
                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item"><span id="pagination" class="disabled page-link text-muted">Página <strong>1</strong> de <strong>10</span></strong></li>
                        <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                        <li class="page-item"><a class="page-link" href="#">Última</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
      
    <?php for ($i=0; $i < 5; $i++): ?>
        <?php $id = $i+1 ?>
        <!-- Modal <?= $id ?> -->
        <div class="modal fade" id="excluirModal_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="excluirModalLabel">Confirmar exclusão</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Confirmar exclusão de "Notícia <?= $id ?>"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form action="noticia_excluir.php" method="GET">
                                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor ?>

    <!-- Scripts necessários -->
    <script src="../assets/script/bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/script/bootstrap/popper.min.js"></script>
    <script src="../assets/script/bootstrap/bootstrap.bundle.js"></script>
</body>
</html>