<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/index.css") ?>">
    <title>Carbanco - Banco de carbonita</title>
</head>

<body>
    <div class="cabecalho">
        <h1 class="titulo">Carbanco</h1>
    </div>

    <div class="mensagem my-4">
        <h3>Seja bem vindo ao carbanco, escolha o que deseja fazer</h3>
    </div>

    <div class="container">
        <div class="opcoes">
            Ações
        </div>
        <div class="d-flex divisão">
            <p class="mx-3 mt-3">Cadastrar conta: <a class="link" href="<?= base_url("home/criaConta") ?>"><button class="btn btn-primary">Criar conta</button></a></p>

            <p class="mx-3 mt-3">Exibir saldo: <a class="link" href="<?= base_url("home/login") ?>"><button class="btn btn-primary">Exibir</button></a> </p>

            <p class="mx-3 mt-3">Depositar dinheiro: <a class="link" href="<?= base_url("home/depositar") ?>"><button class="btn btn-primary">Depositar</button></a> </p>

            <p class="mx-3 mt-3">Retirar dinheiro: <a class="link" href="<?= base_url("home/retirar") ?>"><button class="btn btn-primary">Retirar</button></a> </p>
        </div>
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