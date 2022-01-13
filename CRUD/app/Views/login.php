<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/login.css") ?>">
    <title>Login</title>
</head>

<body>

    <div class="cabecalho">
        <h1 class="titulo">Carbanco</h1>
    </div>

    <div class="formulario">
        <h3>Logue com sua conta</h3>

        <form action="<?= base_url('Home/exibirSaldo'); ?>" method="post">
            <div class="form-group">
                <label for="">Digite seu número de conta</label>
                <input type="text" class="form-control" name="Conta_id">
            
                <label for="">Digite seu email</label>
                <input type="text" class="form-control" name="Email">

                <label for="">Digite seu senha</label>
                <input type="password" class="form-control" name="Senha">
            </div>

            <button type="submit" class="btn btn-primary">Logar</button>
        </form>
    </div>

</body>

</html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>