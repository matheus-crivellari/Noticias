<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Conta mais</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body style="background-color: #f5f5f5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4">
               
                <form class="mt-5">
                    <h1 class="h3 mb-3 font-weight-normal">Por favor faça o log in</h1>

                    <!-- Campo de usuario -->
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Nome de usuario" required autofocus>
                    </div>

                    <!-- Campo de senha -->
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </div>
        
                    <!-- Botao login -->
                    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Log in</button>
                    <p class="mt-3 mb-3 text-muted text-center">© Conta mais - 2019</p>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>