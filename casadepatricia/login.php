<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <link rel="shortcut icon" href="assets/img/logobg.png" />

  <title>Login - Casa de Patricia</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
              
              <div class="col-lg-14">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bem Vindo(a)!</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp" placeholder="Digite seu email...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="senhaLogin" placeholder="Senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="envia" value="Entrar">
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="esqueciasenha.php">Esqueceu a Senha?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Crie uma conta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

          <!--Validação do Usuário-->

<?php   

  if(isset($_POST['email'])){
      session_start();
    $_SESSION['email'] = $_POST['email'];

    $email = $_SESSION['email'];
    $senhaLogin = $_POST['senhaLogin'];

    include ('conexao.php');
      mysqli_select_db($conexao, "educa") or die ("Erro ao selecionar o Banco");

    $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha ='$senhaLogin'";
    $queryLogin = mysqli_query($conexao, $sql) or die ("Erro na consulta sql");

    $retorno = mysqli_num_rows($queryLogin);
    if($retorno == 0){
      echo "<script>
      alert('Usuário ou senha inválidos')
      window.location.href= 'login.php'
      </script> ";
  }else{
    echo "<script>
      window.location.href= 'index.php'
      </script> ";
      //echo  "<script>alert('Teste: ok');</script>";
  //header('location:/conexao (com Bootstrap)/Front/front.php');
    }    
  }
?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
