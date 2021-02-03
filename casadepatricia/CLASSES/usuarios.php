<?php
  class Usuario{

    private $pdo;

    public function conectar($banco, $host, $usuario, $senha){
      global $pdo;
      try {
        $pdo = new PDO("mysql:host={$host}; dbname={$banco}", $usuario, $senha);
      } catch (PDOException $e) {
        $msgErro = $e->getMessage();
      }
    }
    
    public function cadastrar($nome, $sobrenome, $email, $password){
      global $pdo;
      //verificar se já existe o email cadastrado
      $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
      $sql->bindValue(":e", $email);
      $sql->execute();
      if ($sql->rowCount() > 0) {
        return false; //Já está cadastrado
      }else{
        //caso não, Cadastrar
      $sql = $pdo->prepare("INSERT INTO usuarios(nome, 
            sobrenome, email, senha) VALUES(:n, :c :e, :p)");
      $sql->bindValue(":n", $nome);
      $sql->bindValue(":c", $sobrenome);
      $sql->bindValue(":e", $email);
      $sql->bindValue(":p", $password);
      $sql->execute();
        return true; //cadastrado com sucesso
      }
    }

    public function logar($email, $password){
      global $pdo;
      //verificar se o email e senha estão cadastrados, se sim
      $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE
            email = :e AND senha = :p");
      $sql->bindValue(":e", $email);
      $sql->bindValue(":p", $password);
      $sql-> execute();
      if ($sql->rowCount() > 0) {
        //entrar no sistema(senão)
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id_usuario'] = $dado['id_usuario'];
        return true; //cadastrato com sucesso
      }else{
        return false; //não foi possivel logar
      }
    }

    public function verificar($email){
      global $pdo;
      //verificar se o email está cadastrado, se sim
      $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE
            email = :e");
      $sql->bindValue(":e", $email);
      $sql-> execute();
      if ($sql->rowCount() > 0) {
        //entrar na confirmação de email(senão)
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id_usuario'] = $dado['id_usuario'];
        return true; //email correto
      }else{
        return false; //email não compativel
      }
    }
  }
?>