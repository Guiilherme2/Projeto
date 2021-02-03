<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Guilherme Gomes">
    <link rel="shortcut icon" href="assets/img/logobg.png" />
    <link rel="stylesheet" href="css/style.css">

    <title>Register - Casa de Patricia</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>
 <body class="bg-gradient-info">


    <!--JavaScript para a Confirmação da senha-->
<script>
  function validarSenha(){
    CadSenha = document.f1.CadSenha.value
    ConfSenha = document.f1.ConfSenha.value
  
    if (CadSenha == ConfSenha){      
      document.getElementById("entrar").disabled = false;

    }if (CadSenha != ConfSenha){
      alert("SENHAS DIFERENTES");
    
      document.getElementById("entrar").disabled = true;
    }
  }
</script>

    <div class="container">
<div class="row justify-content-center">

      <div class="col-xl-10 col-lg-7 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Crie uma conta!</h1>
                </div>
                <form class="user" method="POST">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="CadNome" placeholder="Nome" maxlength="30">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="CadSobre" placeholder="Sobrenome" maxlength="30">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="CadEmail" placeholder="Endereço de email" maxlength="30">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" name="CadSenha" placeholder="Senha" minlength="8">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" name="ConfSenha" placeholder="Repita a senha" minlength="8" onchange="validarSenha()">
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-user btn-block" name="enviar" value="Criar">
                  <hr>
                  <a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=ecobx&nui=5&btmpl=mobile&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Entrar com Google
                  </a>  
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="esqueciasenha.php">Esqueceu a senha?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="login.php">Já tem uma conta? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  session_start();
  if (isset($_POST['enviar'])) {
	                        
	 /*Recebe os campos do form e armazena nas variáveis*/
    $nome = $_POST['CadNome'];
    $sobrenome = $_POST['CadSobre'];   
    $email = $_POST['CadEmail'];
    $senhaCad = $_POST['CadSenha'];


	include ('conexao.php');  
	mysqli_select_db($conexao, "bd_patricia") or die ("Erro ao selecionar o Banco");

	$sqlUsu = "SELECT * FROM usuarios WHERE nome ='$nome'";
    $queryUsu = mysqli_query($conexao, $sqlUsu) or die ("Erro na consulta sql do Nome de Usuário");
    $retornoUsu = mysqli_num_rows($queryUsu);

	$sqlEmail = "SELECT * FROM usuarios WHERE email ='$email'";
	$queryEmail = mysqli_query($conexao, $sqlEmail) or die ("Erro na consulta sql do Email");
	$retornoEmail = mysqli_num_rows($queryEmail);
	
	   /*Verifica se o Nome de Usuário já está cadastrado*/
    if ($retornoUsu != 0) {   
      echo "<script>
            alert('Nome de Usuário já cadastrado!')
            window.location.href= 'register.php'
          </script>
          ";

  }
         /*Verifica se o email já está cadastrado*/
	if($retornoEmail != 0){
    echo "<script>
            alert('Email já cadastrado!')
            window.location.href= 'register.php'
          </script> ";
          /*Se não, os dados são inseridos no banco*/
      }else{ 
        include_once 'conexao.php';
        mysqli_select_db($conexao,"educa");

                //Rotina SQL para inserir no banco

	$sqlInserir = "INSERT INTO usuarios(nome, sobrenome, email, senha)
				   VALUES('$nome', '$sobrenome', '$email', '$senhaCad')";

      //Verifica se a função de inserção foi executada sem erro 
	if(mysqli_query($conexao, $sqlInserir)){

    echo "<script>
            alert('Usuário cadastrado com sucesso!')
            window.location.href= '/conexao (com Bootstrap)/Login/login.php'
          </script> ";
	  }else{  //Informa o erro
		  echo "<h3>Erro na inserção: </h3>".mysqli_error($conexao);
	  }
		  mysqli_close($conexao);
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