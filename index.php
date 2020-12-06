<?php
// index.php
require_once './classesphp/conexao.class.php';

$con = new conexao();
$chave = $con->connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle de alunos do EAD</title>
</head>

<body>
  <?php
  if ($chave) {
    echo 'Conectou';
  } else {
    echo 'Não conectou';
  }

  if ($con->disconnect()) {
    echo 'Desconectou';
  } else {
    echo 'Não desconectou';
  }
  ?>
</body>

</html>