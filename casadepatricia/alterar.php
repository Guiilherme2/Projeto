<?php
    include 'includes/conexao.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM tb_idoso WHERE idtb_idoso = $id";
  $query = $conexao->query($sql);
  $return = $query->fetch();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Guilherme Gomes">
  <title>Alteração - Casa de Patrícia</title>
  <link rel="shortcut icon" href="assets/img/logobg.png" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
  <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
  <!--<link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">-->
  <link rel="stylesheet" href="assets/css/styles.css">


  <!-- fonts template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- styles template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- styles page -->
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
        border: 6px solid #009afa;
        object-fit: cover;
        width:200px;
        height:200px;
        
    }

    .btn-file{
        width:100%;
    }
    
    .lbl-xerox::after{
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

    .custom-file-label{
        content:"Buscar";
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

      <!-- Nav Item - painel de controle -->
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
                        <div class="" onclick="abrirUrl('gerarpdfmanual.php?tipo=Idoso');">
                          <ul class="list-group" >
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

        <!-- Conteúdo Alterar -->
        <div>
    </div>
    <div class="container profile profile-view" data-aos="zoom-in" data-aos-once="true" id="profile">
      <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">  
                <span aria-hidden="true">×</span>
              </button>
              <span>Pedido salvo com sucesso</span>
            </div>
        </div>
      </div>
        <form action="valida/validaAlterar.php?id=<?php echo $return[0]; ?>" enctype="multipart/form-data" name="formCad" method="post">
          <div class="form-row profile-row">
            <div class="col-md-4 align-items-center align-content-center relative">
              <div class="avatar">
                <div class="avatar-bg center">
                  <?php
                    if($return['profile_src'] == null){ ?>
                        <img id="output" src="assets/img/family.png" alt="Foto de Perfil" class="img-perfil" style="width:100%;">
                    <?php }else{ ?>
                        <img id="output" src="<?php echo $return['profile_src']; ?>" alt="Foto de Perfil" class="img-perfil" style="width:100%;">
                    <?php             
                      }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <h1 style="color: #070707;">Informações</h1>
              <hr>
              <div class="form-row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Nome</label>
                    <input class="form-control form-control-lg" type="text" value="<?php echo $return['nome']; ?>" name="nome">
                  </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group"><label style="color: #0a0a0a;">Tipo</label> 
                      <select class="form-control form-control-lg" name="tipo_pessoa">
                        <option value="">Selecione...</option>
                        <option value="Idoso" <?php if($return['tipo'] == "Idoso"){ echo 'selected';}?>>Idoso</option>
                        <option value="Idoso e Associado" <?php if($return['tipo'] == "Idoso e Associado"){ echo 'selected';}?>>Idoso e Associado</option>
                        <option value="Deficiente" <?php if($return['tipo'] == "Deficiente"){ echo 'selected';}?>>Deficiente</option>
                        <option value="Associado" <?php if($return['tipo'] == "Associado"){ echo 'selected';}?>>Associado</option>  
                      </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group"><label style="color: #0a0a0a;">Foto</label><br>
                    <span class="btn btn-primary btn-lg form-btn btn-file" >
                       Buscar Foto 
                      <input type="file" name="imagem"  accept="image/*" onchange="loadFile(event)">
                   </span>
                  </div>
                </div>
              </div>
              <?php       
              ?>
              <div class="form-row">
                <div class="col-sm-12 col-md-4">
                  <div class="form-group"><label style="color: #0a0a0a;">Data de Nascimento</label>
                    <input class="form-control form-control-lg dataMASK" type="date" name="data_nasc" value="<?php echo $return['data_nasc']; ?>">
                  </div>
                </div>
                <div class="col-sm-12 col-md-5">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Contato</label>
                      <input value="<?php echo $return['contato']; ?>" placeholder="(00) 00000-0000 (00) 00000-0000"  class="form-control form-control-lg telefone" type="text" inputmode="numeric" name="contato">
                  </div>
                </div>
                <div class="col-sm-12 col-md-3">
                  <div class="form-group"><label style="color: #0a0a0a;">Sexo</label>
                    <input class="form-control form-control-lg" name="sexo" list="sexos" value="<?php echo $return['sexo']; ?>">
                      <datalist id="sexos">
                        <option value="Masculino">
                        <option value="Feminino">
                        <option value="Não Binário">      
                    </datalist>
                 </div>
                </div>
              </div>
              <!-- NOME PAI E MAE -->
              <div class="form-row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Nome do Pai</label>
                    <input value="<?php echo $return['pai']; ?>"class="form-control form-control-lg" type="text"  name="pai" >
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group"><label style="color: #0a0a0a;">Nome da Mãe</label>
                    <input value="<?php echo $return['mae']; ?>" class="form-control form-control-lg" type="text"  name="mae" >
                 </div>
                </div>
              </div>

              <!-- ENDEREÇO -->
              <div class="form-row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Rua</label>
                    <input value="<?php echo $return['rua']; ?>" class="form-control form-control-lg" type="text"  name="rua">
                  </div>
                </div>
                <div class="col-sm-12 col-md-2">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Número</label>
                      <input value="<?php echo $return['numero']; ?>" class="form-control form-control-lg" type="text" inputmode="numeric" name="numero">
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Bairro/Localidade</label>
                    <input value="<?php echo $return['bairro']; ?>" class="form-control form-control-lg" type="text"  name="bairro">
                  </div>
                </div>
              </div>

              <!-- ENDEREÇO -->
              <div class="form-row">
                <div class="col-sm-12 col-md-4">
                  <div class="form-group"><label style="color: #0a0a0a;">Município</label><input value="<?php echo $return['municipio']; ?>" class="form-control form-control-lg" type="text"  name="municipio"></div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label style="color: #0a0a0a;">CEP</label>
                      <input value="<?php echo $return['cep']; ?>" class="form-control form-control-lg cep" type="text"  name="cep">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Complemento</label>
                      <input value="<?php echo $return['complemento']; ?>" class="form-control form-control-lg" type="text"  name="complemento">
                  </div>
                </div>
              </div>

              <!-- ENDEREÇO -->
              <div class="form-row">
                <div class="col-sm-12 col-md-12">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">Ponto de Referência</label>
                      <input value="<?php echo $return['ponto_referencia']; ?>" class="form-control form-control-lg" type="text"  name="ponto_referencia">
                    </div>
                </div>
              </div>

              <!-- DOCUMENTAÇÃO -->
              <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label style="color: #0a0a0a;">RG</label>
                    <input value="<?php echo $return['rg']; ?>" class="form-control form-control-lg" type="text" id="RG" name="rg"></div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <label style="color: #0a0a0a;">Data de Expedição</label>
                        <input value="<?php echo $return['data_expedicao']; ?>" class="form-control form-control-lg" type="date" name="data_expedicao">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="form-group"><label style="color: #0a0a0a;">Orgão Expedidor</label>
                    <input value="<?php echo $return['orgao_expedidor']; ?>" class="form-control form-control-lg" type="text" name="orgao_expedidor">
                  </div>
                </div>
              </div>

              <!-- DOCUMENTAÇÃO -->
              <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label style="color: #0a0a0a;">CPF</label>
                      <input value="<?php echo $return['cpf']; ?>" class="form-control form-control-lg" type="text" id="CPF" name="cpf">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label style="color: #0a0a0a;">NIS</label>
                      <input value="<?php echo $return['nis']; ?>" class="form-control form-control-lg" type="text" inputmode="numeric" name="nis">
                  </div>
                </div>
              </div>

              <!-- XEROX -->
              <div class="form-row">
                <div class="col-sm-12 col-md-12">  
                  <div class="form-group">
                    <div class="custom-file form-control" >
                      <input type="file" class="custom-file-input "  id="xerox" name="xerox"  >
                        <label class="custom-file-label"  for="xerox">Xerox dos Documentos</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- INFORMAÇÕES MÉDICAS -->
                <div class="form-row">
                  <div class="col-sm-12 col-md-12">               
                    <div class="form-group">
                      <label style="color: #0a0a0a;" for="">
                        <strong>Informações Médicas</strong>
                      </label>
                      <div class="form-group">
                        <label style="color: #0a0a0a;" for="">Tem alguma doença?</label>
                          <?php
                            include 'includes/conexao.php';

                            $sth = $conexao->prepare("SELECT * FROM tb_doenca");
                            $sth->execute();

                            $resultDoenca = $sth->fetchAll();

                            foreach($resultDoenca as $doenca){
                                $sthDoente = $conexao->prepare("SELECT * FROM tb_doente WHERE tb_doenca_idtb_doenca = $doenca[0] AND tb_idoso_idtb_idoso = $return[0]");
                                $sthDoente->execute();

                                $resultDoente = $sthDoente->fetchAll();
                          ?>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input <?php if($resultDoente != null){echo 'checked';} ?> type="checkbox" class="form-check-input" name="doenca[]" id="doenca" value="<?php echo $doenca[0];?>">
                              <?php echo $doenca['nome'];?>
                            </label>
                          </div>
                          <?php
                              }
                          ?>
                      </div>
                      <div class="form-group">
                          <label style="color: #0a0a0a;" for="">Outras Doenças? Quais?</label>
                            <input type="text" value="<?php echo $return['outras_doencas'] ?>"
                            class="form-control" name="outras_doencas" id="" aria-describedby="helpId" placeholder="" >
                      </div>
                      <div class="form-group">
                        <label style="color: #0a0a0a;" for="">Toma alguma medicação? Qual?</label>
                          <input value="<?php echo $return['medicacoes']; ?>" type="text"
                          class="form-control" name="medicacoes" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="form-group">
                        <label style="color: #0a0a0a;" for="">É alergico a alguma coisa? O quê?</label>
                          <input type="text" value="<?php echo $return['alergias']; ?>"
                          class="form-control" name="alergias" id="" aria-describedby="helpId" placeholder="">
                      </div>
                      <div class="form-group">
                        <label style="color: #0a0a0a;" for="">Tem intolerância a algum alimento? Qual?</label>
                          <input type="text" value="<?php echo $return['intolerancia']; ?>"
                          class="form-control" name="intolerancia" id="" aria-describedby="helpId" placeholder="">  
                      </div>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label style="color: #0a0a0a;">Responsável Familiar</label>
                      <input value="<?php echo $return['nome_familiar']; ?>" class="form-control form-control-lg" type="text"  name="nome_familiar"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="form-group"><label style="color: #0a0a0a;">Contato Familiar</label><br>
                        <input value="<?php echo $return['contato_familiar']; ?>" placeholder="(00) 00000-0000" class="form-control form-control-lg telefone" type="text" name="contato_familiar">
                      </div>
                    </div>
                </div> 
                <hr>
                <div class="form-row">
                  <div class="col-md-12 content-right">
                    <button class="btn btn-primary form-btn" type="submit" >SALVAR</button>
                    <br><br><br><br>
                  </div>
                </div>
              </div>
            </div>
        </form>
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
        function verificarCampos(){

            //if()
            //document.formCad.submit();
        }

        var $campoCPF = $("#CPF");
        $campoCPF.mask('000.000.000-00', {reverse: true});

        var $campoCPF = $(".cep");
        $campoCPF.mask('00.000-000', {reverse: true});

        

        var $campoTELEFONE = $('.telefone');
        $campoTELEFONE.mask('(00) 00000-0000 (00) 00000-0000');


        //var $campoDATA = $(".dataMASK");
        //$campoDATA.mask('00-00-0000', {reverse: true});

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
