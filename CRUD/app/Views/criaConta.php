<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/login.css") ?>">
    <title>Document</title>
</head>

<body>

    <div class="cabecalho">
        <h1 class="titulo">Carbanco</h1>
    </div>

    <div class="formulario mb-4">
        <h3>Digite as informações da conta</h3>

        <form action="<?= base_url('Home/insert'); ?>" method="post" id="c">
            <div class="form-group">
                <label for="Nome">Digite seu nome</label>
                <input type="text" class="form-control" name="Nome">

                <label for="CPF">Digite seu CPF</label>
                <input type="text" class="form-control" name="CPF" id="CPF">

                <label for="Email">Digite seu Email</label>
                <input type="text" class="form-control" name="Email">


                <label for="Senha">Digite uma senha</label>
                <input type="password" class="form-control" name="Senha">


                <label for="Saldo">Digite seu saldo inicial</label>
                <input type="text" class="form-control" name="Saldo">
            </div>

            <button type="submit" class="btn btn-primary">Criar conta</button>
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
