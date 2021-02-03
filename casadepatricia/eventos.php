<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <link rel="shortcut icon" href="assets/img/logobg.png" />

  <title>Eventos</title>

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
.box-img{
        
        vertical-align: middle;
        height: 50%;
        
        align-self: center;
    }

    .box-txt{
        flex:1;
        
        font-size:20px;
    }

    .box-content{
        display: flex;
        flex-direction: column;
        

    }

    .header-img{
        width:70px;
    }
    
    .btn-file input[type=file]{
        position: absolute;
        top: 0;
        right: 0;
        
        min-height: 100%;
        width:100%;
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;

    }

    .img-perfil{
        border-radius: 100%;
        border: 2px solid #009afa;
        object-fit: cover;
        height:50px;
        width:50px;
        
        
    }

    .btn-file{
        width:100%;
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
  <link href='assets/fullcalendar/core/main.css' rel='stylesheet' />
  <link href='assets/fullcalendar/daygrid/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/core/locales/pt-br.js'></script>

  <script src='assets/fullcalendar/core/main.js'></script>
  <script src='assets/fullcalendar/daygrid/main.js'></script>

  <link href='assets/fullcalendar/list/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/list/main.js'></script>

  <link href='assets/fullcalendar/timegrid/main.css' rel='stylesheet' />
  <script src='assets/fullcalendar/timegrid/main.js'></script>


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

        <!-- Conteúdo da página inicial -->
      <div class="container-fluid">
        <div class="container profile profile-view mb-5" data-aos="zoom-in" data-aos-once="true" id="profile">
            <h1>Eventos</h1>
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <div id='calendar'></div>
                </div>
                  <div class="col-sm-10 col-md-5 ">

                      <h3 class="">Todos Eventos <button type="button" class="btn btn-primary text-center btn-circle-content " data-toggle="modal" data-target="#modal-add">+</button></h3>
                      
                      <?php 
                        if(isset($_GET['op']) && $_GET['op'] == 'success'){
                      ?>

                      <center>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <strong>Successo!</strong> Evento cadastrado.
                        </div>
                      </center>            
                      <?php    
                        }
                      ?>

                      <?php 
                          if(isset($_GET['op']) && $_GET['op'] == 'delete'){?>

                      <center>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <strong>Successo!</strong> Evento deletado.
                        </div>
                      </center>            


                      <?php    
                          }
                      ?>
                      
                      <table class="table table-striped table-responsive" id="tabela">
                          <thead>
                              <tr>
                                <th scope="col" >Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Data</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Ações </th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                              include 'includes/conexao.php';

                              $query = $conexao->query("SELECT * FROM tb_evento");

                              $eventos = $query->fetchAll();

                              $cores = array(
                                  "I" => '#FFFF00',
                                  "E" => "#00FFFF"
                              );
                          ?>
                        
                        <?php
                            foreach($eventos as $eventoAtual){  
                                $dataBr = date_format(date_create($eventoAtual['data']), 'd/m/Y');
                                
                                ?>

                                <tr>
                                    <th ><?php echo $eventoAtual['nome']; ?></th>
                                    <td><?php echo $eventoAtual['descricao']; ?></td>
                                    <td><?php echo $dataBr; ?></td>
                                    <td><?php if($eventoAtual['tipo'] == 'I'){ echo "Interno";}else{echo "Externo";}
                                        ?></td>
                                    <td><button data-toggle="modal" data-target="#modal-delete<?php echo $eventoAtual['idtb_evento']; ?>" name="botaoExcluir" id="botaoExcluir" class="btn btn-danger"  role="button">Excluir</button></td>
                                </tr>
                                <div class="modal fade" id="modal-delete<?php echo $eventoAtual['idtb_evento']; ?>">
                                    <div class="modal-dialog" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">
                                                Tem certeza?
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
                                            </div>
                                            <form action="valida/validaEvento.php" method="POST">
                                            <div class="modal-body"> 
                                                <p>Tem certeza que deseja excluir o evento: <?php echo $eventoAtual['nome']; ?>?</p>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-danger" href="valida/validaExcluirEvento.php?id=<?php echo $eventoAtual['idtb_evento']; ?>" role="button">Excluir</a>
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

                  </div>
              </div>
          </div> 
            
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/bootstrap/js/bootstrap.min.js"></script>
          <script src="assets/js/bs-animation.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
          <script src="assets/js/Pricing-Tables.js"></script>
          <script src="assets/js/jquery.mask.min.js"></script>
          <script src="assets/js/colResizable-1.6.min.js"></script>
          <script type="text/javascript" src="assets/datatables.min.js"></script>


          <script>
              $(document).ready(function() {
                  $('#tabela').DataTable({
                      language:{
                          url:'assets/Portuguese-Brasil.json'
                      }
                  });
              });
          </script>  
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              var calendar = new FullCalendar.Calendar(calendarEl, {
              plugins: [ 'dayGrid' ],
              locale: 'pt-br',
              timeZone: 'UTC',
              defaultView: 'dayGridMonth',
              events: [<?php 
                foreach($eventos as $eventoAtual){
                ?>{
                  title:"<?php echo $eventoAtual['nome']; ?>",
                  start:"<?php echo $eventoAtual['data']; ?>",
                  color:"<?php echo $cores[$eventoAtual['tipo']]; ?>",    
                },   
              <?php
               } 
              ?>]
          });
            calendar.render();
          });
        </script>

        <div class="modal fade" id="modal-add">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">
                  Novo Evento
                </h4>
                  <button type="button" class="close" data-dismiss="modal"><b>x</b></button>
              </div>
              <form action="valida/validaEvento.php" method="POST">
                <div class="modal-body"> 
                  <div class="form-group">
                      <label for="">Nome</label>
                      <input type="text" name="nome_evento" id="" class="form-control" placeholder="nome do evento" aria-describedby="helpId" required="">
                  </div>
                  <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <textarea class="form-control" name="descricao" id="descricao" rows="2"></textarea>
                  </div>
                  <div class="form-row">                
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <label for="data">Data</label>
                          <input type="date" name="data" id="data" class="form-control" aria-describedby="helpId" required="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                        <label for="tipo">Tipo</label>
                          <select class="form-control" name="tipo" id="tipo" required="">
                            <option value="">selecione...</option>
                            <option value="I">Interno</option>
                            <option value="E">Externo</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Adicionar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>  
      </div>
    </div>
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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancela</button>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
