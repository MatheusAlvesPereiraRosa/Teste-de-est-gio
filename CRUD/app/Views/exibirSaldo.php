<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url("assets/css/exibirSaldo.css") ?>">
  <title>Exibir Saldo</title>

  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
      'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Mushrooms', 3],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
      ]);

      // Set chart options
      var options = {
        'title': 'How Much Pizza I Ate Last Night',
        'width': 400,
        'height': 300
      };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div class="cabecalho">
    <h1 class="titulo">Carbanco</h1>
  </div>

  <div class="container my-5">
    <?php
    foreach ($Conta as $conta) { ?>
      <h2 class="mensagem my-4">Seja bem vindo <?php echo $conta->Nome ?></h2>

      <table class="table">
        <thead>
          <tr>
            <th>Email</th>
            <th>CPF</th>
            <th>Saldo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $conta->Email ?></td>
            <td><?php echo $conta->CPF ?></td>
            <td><?php echo $conta->Saldo ?></td>
          </tr>
        </tbody>
      </table>
    <?php } ?>

    <h3>Transações</h3>

    <table class="table">
      <thead>
        <tr>
          <th>Email</th>
          <th>CPF</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($Trans as $trans) { ?>
          <tr>
            <td><?php echo $trans->Operação; ?></td>
            <td><?php echo $trans->Valor; ?></td>
            <td><?php echo $trans->Data; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <button class="btn btn-dark"><a class="link" href="<?= base_url("home/index") ?>">Voltar a tela de início</a></button>
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