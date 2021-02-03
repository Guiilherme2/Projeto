<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <link rel="shortcut icon" href="assets/img/logobg.png" />

  <title>Casa de Patricia</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
    .modal-backdrop {
        display: none;
    }

    .box-img {

        vertical-align: middle;
        height: 50%;

        align-self: center;
    }

    .box-txt {
        flex: 1;

        font-size: 20px;
    }

    .box-content {
        display: flex;
        flex-direction: column;


    }

    .header-img {
        width: 70px;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;

        min-height: 100%;
        width: 100%;
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;

    }

    .img-perfil {
        border-radius: 100%;
        border: 2px solid #009afa;
        object-fit: cover;
        height: 50px;
        width: 50px;


    }

    .btn-file {
        width: 100%;
    }

    .presenca {
        width: 25px;
    }

    input[type=checkbox] {
        display: none;
    }

    input[type=checkbox]+label {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 25px;
        width: 25px;
        display: inline-block;
    }

    input[type=checkbox]+label {
        background-image: url('assets/img/smalltimes.png');
    }

    input[type=checkbox]:checked+label {
        background-image: url('assets/img/smallcheck.png');
    }

    .btn-circle-content {
        width: 45px;
        height: 45px;
        text-align: center;
        padding: 6px 0;
        line-height: 1.1;
        border-radius: 40px;
        vertical-align: middle;
        font-size: 30px;
        font-weight: bold;
    }
</style>
    <?php
$meses = array(
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Março',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
);
?>

</head>

<body id="page-top">

  <?php
    // CONFIGURAÇÃO DOS ALERTS

    if(isset($_GET['op']) && $_GET['op'] == 'cadastro'){?>

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Sucesso!</strong> Pessoa cadastrada com sucesso no sistema! :)
            </div>

    <?php
    }
    

    if(isset($_GET['op']) && $_GET['op'] == 'alterar'){?>

    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> As informações da Pessoa foram atualizadas! :)
    </div>

    <?php
    }
    ?>
    <?php
    if(isset($_GET['op']) && $_GET['op'] == 'excluir'){?>

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> A Pessoa foi desvinculada da associação :'(
    </div>               


    <?php
    }
    ?>

    <?php
    if(isset($_GET['op']) && $_GET['op'] == 'vincular'){?>

    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Sucesso!</strong> A Pessoa revinculada à associação :')
    </div>               


    <?php
    }
    ?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Casa de Patricia</div>
      </a>

      <!-- Barra divisora -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Página Inicial</span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Eventos
      </div>

      <!-- Eventos -->
      <li class="nav-item">
        <a class="nav-link" href="eventos.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Eventos</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Relatório
      </div>

      <!-- Relatório -->
      <li class="nav-item">
        <a class="nav-link" href="selecionarcampos.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Relatório</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ficha Individual
      </div>

      <!-- Ficha Individual -->
      <li class="nav-item">
        <a class="nav-link" href="gerarfichaindividual.php">
          <i class="fas fa-fw fa-table"></i>
          <span><strong>Ficha Individual</strong></span></a>
      </li>

      <!-- Barra divisora -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Mais Opções
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span><strong>PDFs</strong></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Opções:</h6>
           
              <!-- PDF - Ficha de Frequência Idosos -->
          <div class="modal-body"> 
                <div class="container-hero" >
                    <div class="row">
                        <script>
                            function abrirUrl(url){
                                let win = window.open(url, '_blank');
                                          win.focus();
                                              }
                        </script>
                      <div class="" onclick="abrirUrl('gerarpdfmanual.php?tipo=Idoso');">          <ul class="list-group">
                           <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                                <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                                <span><h7 class="price text-dark"> PDF - Ficha de Frequência Idosos</h7></span>
                            </li>
                        </ul>                
                      </div>
                    </div>            
                </div>
            </div>

            <!-- PDF - Ficha de Frequência Deficientes -->
            <div class="" onclick="abrirUrl('gerarpdfmanual.php?tipo=Deficiente');">
                <ul class="list-group">
                    <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                       <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                       <span><h7 class="price text-dark"> PDF - Ficha de Frequência Deficientes</h7></span>
                    </li>
                </ul>       
            </div>
            
            <!-- PDF - Folha de Cadastro Manual -->
            <div class="" onclick="window.open('includes/cadastroManual.pdf')" style="cursor:pointer">
              <ul class="list-group">
                <li class="list-group-item heading" data-bs-hover-animate="pulse" style="height: 110px;">
                  <img src="assets/img/pdf.png" alt="Idosos" class="box-img">
                  <span><h7 class="price text-dark">PDF - Folha de Cadastro Manual</h7></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>

<!-- Barra lateral -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Pesquisa -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquise aqui..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Informações do Usuario -->
            <l
            i class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Guilherme Gomes</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Registro de atividade
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </l
            i>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Conteúdo da página inicial -->
    
    <div class="container-fluid profile profile-view mb-5" data-aos="zoom-in" data-aos-once="true" id="profile">
        <h1>Frequência no Mês</h1>

        <?php
        include 'includes/conexao.php';

        $sth = $conexao->prepare("SELECT * FROM tb_idoso WHERE status = 'ATIVO' AND tipo = 'Deficiente' OR tipo = 'Idoso' OR tipo = 'Idoso e Associado' ORDER BY idtb_idoso ASC");
        $sth->execute();

        $result = $sth->fetchAll();
        ?>
        <?php
        $fuso = new DateTimeZone('America/Fortaleza');
        $data = new DateTime();
        $data->setTimezone($fuso);

        ?>

        <?php
        if (isset($_GET['mes'])) {
            $mesAtual = $_GET['mes'];
            $mesNOFORMAT = $_GET['mes'];
        }

        if (isset($_GET['ano'])) {
            $anoAtual = $_GET['ano'];
        }
        ?>

        <form class="form-inline mb-2">
            <div class="form-group sm-6">
                <label for="" style="margin-right:15px">Ano:</label>
                <input style="margin-right:25px" type="number" class="form-control" name="" id="ano" value="<?php echo $anoAtual; ?>">

                <label for="" style="margin-right:15px">Mês:</label>
                <select class="form-control" id="meses" style="margin-right:15px">
                    <option>selecione...</option>
                    <option value="01" <?php if ($mesAtual == '01') {
                                            echo 'selected';
                                        } ?>>Janeiro</option>
                    <option value="02" <?php if ($mesAtual == '02') {
                                            echo 'selected';
                                        } ?>>Fevereiro</option>
                    <option value="03" <?php if ($mesAtual == '03') {
                                            echo 'selected';
                                        } ?>>Março</option>
                    <option value="04" <?php if ($mesAtual == '04') {
                                            echo 'selected';
                                        } ?>>Abril</option>
                    <option value="05" <?php if ($mesAtual == '05') {
                                            echo 'selected';
                                        } ?>>Maio</option>
                    <option value="06" <?php if ($mesAtual == '06') {
                                            echo 'selected';
                                        } ?>>Junho</option>
                    <option value="07" <?php if ($mesAtual == '07') {
                                            echo 'selected';
                                        } ?>>Julho</option>
                    <option value="08" <?php if ($mesAtual == '08') {
                                            echo 'selected';
                                        } ?>>Agosto</option>
                    <option value="09" <?php if ($mesAtual == '09') {
                                            echo 'selected';
                                        } ?>>Setembro</option>
                    <option value="10" <?php if ($mesAtual == '10') {
                                            echo 'selected';
                                        } ?>>Outubro</option>
                    <option value="11" <?php if ($mesAtual == '11') {
                                            echo 'selected';
                                        } ?>>Novembro</option>
                    <option value="12" <?php if ($mesAtual == '12') {
                                            echo 'selected';
                                        } ?>>Dezembro</option>
                </select>
            </div>

            <div class="form-group sm-4">
                <button name="" type="button" onClick="trocaMes()" class="btn btn-primary" role="button">Consultar</button>
            </div>

            <script>
                function trocaMes() {

                    let mes = $('#meses').val();
                    let ano = $('#ano').val();

                    window.location.href = "consultafrequencia.php?mes=" + mes + "&ano=" + ano;
                }
            </script>

        </form>

        <form action="valida/validaTabelaFrequencia.php?mes=<?php echo $mesAtual; ?>&ano=<?php echo $anoAtual; ?>" method="post">
            <?php if (isset($_GET['op']) && $_GET['op'] == 'sucess') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Sucesso!</strong> a frequência foi atualizada com sucesso.
                </div>

            <?php } ?>
            <?php if (isset($_GET['op']) && $_GET['op'] == 'obs') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Sucesso!</strong> observação acrescentada ao mês.
                </div>

            <?php } ?>
            <?php if (isset($_GET['op']) && $_GET['op'] == 'delete') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Sucesso!</strong> observação foi deletada.
                </div>

            <?php } ?>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th colspan="2" clas="text-center">Associado</th>
                        <th colspan="29" class="text-center">
                            <?php echo $meses[$mesNOFORMAT] . "/" . $anoAtual ?>
                        </th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo ("<th>$i</th>");
                        }
                        ?>
                        <th>
                            <center>Total de Presenças</center>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $conta = 0;
                    foreach ($result as $cadastro) {

                        if($conta%10 == 0 && $conta !=0){?>

                    <tr>
                        <td><strong>#</strong></td>
                        <td><strong>Nome</strong></td>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo ("<td><strong>$i</strong></td>");
                        }
                        ?>
                        <td><strong>
                            <center>Total de Presenças</center>
                        </strong></td>
                    </tr>

                        <?php
                    }
                        $idIdoso = $cadastro[0];

                        $nomeReduzido = explode(" ", $cadastro[1]);
                        ?>
                        <tr>
                            <td scope="row">
                                <?php echo $cadastro[0]; ?>
                            </td>
                            <td>
                                <?php echo $cadastro['nome'] ;
                                     ?>
                            </td>


                            <?php
                                $totalPresenca = 0;
                                for ($i = 1; $i <= 31; $i++) {
                                    $dataIterada =  $anoAtual;
                                    $dataIterada = $dataIterada . "-" . $mesAtual;
                                    $dataIterada = $dataIterada . "-" . $i;

                                    $sth = $conexao->prepare("SELECT tb_idoso_idtb_idoso FROM tb_frequencia WHERE data = '$dataIterada' AND tb_idoso_idtb_idoso = $cadastro[0]");
                                    $sth->execute();

                                    $result = $sth->fetch();

                                    if ($result == null) {
                                        echo "<td><input value='$dataIterada' type='checkbox' name='idoso$idIdoso" . "[]' id='$cadastro[1]" . '-' . "$i '/>
                                    <label for='$cadastro[1]" . '-' . "$i ' ></label></td>";
                                    } else {
                                        echo "<td><input value='$dataIterada'  checked type='checkbox' name='idoso$idIdoso" . "[]' id='$cadastro[1]" . '-' . "$i '/>
                                    <label for='$cadastro[1]" . '-' . "$i '></label></td>";
                                        $totalPresenca++;
                                    }
                                }

                                echo "<td><center>$totalPresenca</center></td>";
                        $conta++;

                                ?>

                        </tr>

                    <?php

                    }
                    ?>

                </tbody>
            </table>
            <button type="submit" class="btn btn-primary" style="float:right">Salvar</button>
        </form>
        <hr>
        <br>
        <br>
        <div class="row">
            
            <div class="col-md-6">
                <h2>Observações no Mês <button type="button" class="btn btn-primary text-center btn-circle-content " data-toggle="modal" data-target="#modal-add">+</button></h2>
                <?php
                $query = $conexao->query("SELECT * FROM tb_observacao WHERE mes = '$mesAtual' AND ano = '$anoAtual'");
                $observacoes = $query->fetchAll();
                ?>
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Observação</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <style>
                        .mod {
                            position: absolute;
                            top: 10px;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            z-index: 10040;
                            overflow: auto;
                            overflow-y: auto;
                        }
                    </style>
                    <tbody>
                        <?php
                        foreach ($observacoes as $observacao) { ?>
                            <tr>
                                <td><?php echo $observacao['observacao']; ?></td>

                                <td><a data-toggle="modal" data-target="#modal-delete<?php echo $observacao['idtb_observacao']; ?>" name="botaoExcluir" id="botaoExcluir" class="btn btn-danger text-white" role="button">Excluir</a></td>
                            </tr>

                            <div class="modal fade mod" id="modal-delete<?php echo $observacao['idtb_observacao']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Tem certeza?
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir a observação?</p>

                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="valida/validaExcluirObservacao.php?mes=<?php echo $mesAtual;?>&ano=<?php echo $anoAtual;?>&id=<?php echo $observacao['idtb_observacao']; ?>" role="button">Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Nova Observação no Mês de <?php echo $meses[$mesAtual]; ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                </div>
                <form action="valida/validaObservacao.php?mes=<?php echo $mesAtual; ?>&ano=<?php echo $anoAtual; ?>" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <textarea required="" class="form-control" name="observacao" id="observacao" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você está pronto para encerrar a sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../pag_inicial/index.html">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
