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
<body class="modal-open">
    <!-- Topo do admin -->
    <?php $pag_sel = 'not' ?>
    <?php require_once '_header.php' ?>

    <!-- Conteúdo da página -->
    <div class="container-fluid p-3 p-lg-5">

      <!-- modal -->
      <div class="modal modal-open fade show" tabindex="-1" role="dialog" style="display: block; position: static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmaçãom de exclusão</h5>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <p>Tem certeza que deseja excluir?</p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-secondary" value="Cancelar">
              <input type="button" class="btn btn-danger" value="Excluir">
            </div>
          </div>
        </div>
      </div>

    </div>

    

    <!-- Scripts necessários -->
    <script src="../assets/script/bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/script/bootstrap/popper.min.js"></script>
    <script src="../assets/script/bootstrap/bootstrap.bundle.js"></script>
</body>
</html>