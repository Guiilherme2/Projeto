<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <link rel="shortcut icon" href="assets/img/logobg.png" />
  
  <title>Cadastro</title>

    <link rel="shortcut icon" href="assets/img/logo.png"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
    <!--<link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">-->
    <link rel="stylesheet" href="assets/css/styles.css">


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style>
.modal-backdrop{
    display:none;
}
.box-img {

  vertical-align: middle;
  height: 50%;

  align-self: center;
}

.box-txt {
  flex: 1;

  font-size: 30px;
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
  cursor: pointer;
  display: block;

}

.img-perfil {
  border-radius: 100%;
  border: 6px solid #009afa;
  object-fit: cover;
  width: 200px;
  height: 200px;

}

.btn-file {
  width: 100%;
}

.lbl-xerox::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  padding: .375rem .75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: 1px solid #ced4da;
  border-radius: 0 .25rem .25rem 0;
  box-sizing: border-box;
}

.custom-file-label {
    content: "Buscar";
}
</style> 
  <link href='assets/fullcalendar/core/main.css' rel='stylesheet' />
  <link href='assets/fullcalendar/daygrid/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/core/locales/pt-br.js'></script>

  <script src='assets/fullcalendar/core/main.js'></script>
  <script src='assets/fullcalendar/daygrid/main.js'></script>

  <link href='assets/fullcalendar/list/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/list/main.js'></script>

  <link href='assets/fullcalendar/timegrid/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/timegrid/main.js'></script>

  <!--Script loadfile(imagem)-->
  <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>


<body id="page-top">

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

      <!-- Conteúdo Consulta -->
        <div class="container profile profile-view" data-aos="zoom-in" data-aos-once="true" id="profile">
          <h1>Cadastros</h1>

        <?php
        include 'includes/conexao.php';

        $sth = $conexao->prepare("SELECT * FROM tb_idoso ORDER BY idtb_idoso ASC");
        $sth->execute();

        $result = $sth->fetchAll();
        ?>
        <table class="table table-striped table-inverse table-responsive text-nowrap" id="tabela">
            <thead class="thead-inverse">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Nome</th>
                    <th scope="col" class="text-center">Tipo</th>
                    <th scope="col" class="text-center">Sexo</th>
                    <th scope="col" class="text-center">RG</th>
                    <th scope="col" class="text-center">CPF</th>
                    <th scope="col" class="text-center">NIS</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $cadastro) {
                    ?>
                    <tr>
                        <?php 
                        if ($cadastro['profile_src'] != null) { ?> 
                          <td scope="row">
                            <img class="img-perfil" src="<?php echo $cadastro['profile_src']; ?>" alt="Imagem">
                          </td> 
                            <?php 
                        } else { ?> 
                          <td scope="row"><img class="img-perfil" src="assets/img/man.png" alt="Imagem"></td> <?php } ?>
                        <td><?php echo $cadastro['nome']; ?></td>
                        <td><?php echo $cadastro['tipo']; ?></td>
                        <td><?php echo $cadastro['sexo']; ?></td>
                        
                        <td>
                          <?php 
                            if ($cadastro['rg']) {
                                  echo $cadastro['rg'];
                                } else {
                                  echo "(n. informado)";
                                } 
                          ?>
                        </td>
                        <td>
                          <?php if ($cadastro['cpf']) {
                                    echo $cadastro['cpf'];
                                } else {
                                    echo "(n. informado)";
                                } 
                          ?>
                        </td>
                        <td>
                          <?php if ($cadastro['nis']) {
                                    echo $cadastro['nis'];
                                } else {
                                    echo "(n. informado)";
                                } ?>
                          </td>
                        <td>
                            <center>
                              <?php 
                                echo $cadastro['status'];
                                  if ($cadastro['status'] == "ATIVO") {
                                    echo $cadastro['ja_saiu'];
                                      } 
                                ?>
                                <br><button class="btn btn-primary text-white" data-toggle="modal" data-target="#modal-obs<?php echo $cadastro[0] ?>" role="button">Histórico</button>
                            </center>
                        </td>
                        <td>
                            <?php
                                if ($cadastro['status'] == 'ATIVO') { ?>
                                <button class="btn btn-success text-white" data-toggle="modal" data-target="#modal-documento<?php echo $cadastro[0] ?>" role="button">Documentos</button>
                                <a class="btn btn-warning text-white" href="alterar.php?id=<?php echo $cadastro[0] ?>" role="button">Alterar</a>
                                <a class="btn btn-danger text-white" data-toggle="modal" data-target="#modal-excluir<?php echo $cadastro[0] ?>" role="button">Inativar</a>
                            <?php } else { ?>

                                <a class="btn btn-primary text-white" data-toggle="modal" data-target="#modal-vincular<?php echo $cadastro[0] ?>" role="button">Reativar</a>
                            <?php
                                }
                              ?>
                        </td>
                    </tr>
                    <div class="modal fade" id="modal-excluir<?php echo $cadastro[0]; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Tem certeza?
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                                </div>
                                <form action="valida/validaExcluir.php?id=<?php echo $cadastro[0] ?>" method="POST">
                                    <div class="modal-body">
                                        <p>Tem certeza que deseja desvincular <?php echo $cadastro[1] ?>?</p>
                                        <div class="form-group">
                                            <label for="motivo"> <strong> Motivo:</strong></label>
                                            <textarea class="form-control" name="motivo" id="motivo" rows="3" required=""></textarea>
                                        </div>
                                        <strong>O Associado não aparecerá nos relatórios</strong>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger text-white">Inativar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-vincular<?php echo $cadastro[0]; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        Tem certeza?
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                                </div>
                                <form action="valida/validaVincular.php?id=<?php echo $cadastro[0] ?>" method="POST">
                                    <div class="modal-body">

                                        <p>Tem certeza que deseja revincular <?php echo $cadastro[1] ?>?</p>
                                        <div class="form-group">
                                            <label for="motivo"> <strong> Motivo:</strong></label>
                                            <textarea class="form-control" name="motivo" id="motivo" rows="3" required=""></textarea>
                                        </div>
                                        <strong>O Associado tornará a aparecer nos relatórios</strong>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger text-white">Reativar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Consultas Avançadas</h2>
        <hr>
        <?php
        $fuso = new DateTimeZone('America/Fortaleza');
        $data = new DateTime();
        $data->setTimezone($fuso);
        $mesAtual =  $data->format('m');
        $anoAtual =  $data->format('Y');

        ?>

        <a name="" id="" class="btn btn-primary" href="aniversariantes.php?mes=<?php echo $mesAtual; ?>" role="button">Aniversariantes do Mês</a>

    </div>

    <!--Script Documentos-->
    <?php
    foreach ($result as $cadastro) { ?>

        <div class="modal fade" id="modal-documento<?php echo $cadastro[0]; ?>">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Documentos</h4>
                      <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                  </div>
                  <div class="modal-body">
                    <img src="<?php echo $cadastro['xerox']; ?>" alt="" style="width:100%">
                  </div>
                  <div class="modal-footer">
                    <button name="" id="" class="btn btn-primary" data-dismiss="modal" role="button">Fechar</button>
                  </div>
              </div>
          </div>
        </div>

        <div class="modal fade" id="modal-obs<?php echo $cadastro[0]; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Histórico do Associado
                        </h4>
                        <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                    </div>
                    <div class="modal-body">
                      <?php
                        $resultHist = $conexao->query("SELECT * FROM tb_historico WHERE tb_idoso_idtb_idoso = $cadastro[0] ORDER BY idtb_historico DESC");
                        $historicoAssociado = $resultHist->fetchAll();

                        foreach ($historicoAssociado as $historicoAtual) { 
                      ?>
                        <strong><?php echo $historicoAtual['tipo']; ?>:</strong><br>
                        <strong>Data:</strong><?php echo $historicoAtual['data']; ?><br>
                        <strong>Motivo:</strong><?php echo $historicoAtual['motivo']; ?><br>
                        <hr>
                      <?php
                        }
                      ?>

                    </div>
                    <div class="modal-footer">
                        <button name="" id="" class="btn btn-primary" data-dismiss="modal" role="button">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
      <?php
        }
      ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/colResizable-1.6.min.js"></script>
    <script type="text/javascript" src="assets/datatables.min.js"></script>



    <script>
        var $campoCPF = $("#CPF");
        $campoCPF.mask('000.000.000-00', {
            reverse: true
        });

        var $campoRG = $("#RG");
        $campoRG.mask('00.000.000-0');

        var $campoTELEFONE = $('.telefone');
        $campoTELEFONE.mask('(00) 00000-0000');
    </script>
    <script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                language:{
                    url:'assets/Portuguese-Brasil.json'
                }
            });
        });
    </script>


            
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/bootstrap/js/bootstrap.min.js"></script>
          <script src="assets/js/bs-animation.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
          <script src="assets/js/Pricing-Tables.js"></script>
          <script src="assets/js/jquery.mask.min.js"></script>
          <script src="assets/js/colResizable-1.6.min.js"></script>
          <script type="text/javascript" src="assets/datatables.min.js"></script>
        </div>   

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

  <!-- Scripts das Páginas-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
