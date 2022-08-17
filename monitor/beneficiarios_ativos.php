<?php

session_start();
$skill = isset($_SESSION['skill']) ? $_SESSION['skill'] : null;
$pdv = isset($_SESSION['pdv']) ? $_SESSION['pdv'] : null;
$eps = isset($_SESSION['eps']) ? $_SESSION['eps'] : null;
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : null;
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;  
$url = isset($_SESSION['url']) ? $_SESSION['url'] : null;

if (!$nome){
  echo ("<script LANGUAGE='JavaScript'>    
    window.location.href='login.html';
    </script>"); 
}

/*
if ($_SESSION['admin'] == false){
  echo ("<script LANGUAGE='JavaScript'>    
  window.location.href='bi.php';
  </script>");
}
*/
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FPA - Fundação Porta Aberta</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/config.js?versao=1" type="text/javascript"></script>
  <style>

table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
  cursor: pointer;
  border-bottom-width: 0;
}

  </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>-->
        <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
	  -->
      </ul>
    </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="login.html" class="brand-link">
        <img src="img/logo.png" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Painel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?php echo $nome;?></a>
            
            
          
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Cadastro de Beneficiário
              </p>
            </a>   
          </li> 
          <li class="nav-item">
            <a href="beneficiarios.php" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Todos os Beneficiários
              </p>
            </a>   
          </li> 
          <li class="nav-item">
            <a href="beneficiarios_ativos.php" class="nav-link active">
              <i class="nav-icon fa fa-toggle-on"></i>
              <p>
                Lista de Ativos
              </p>
            </a>   
          </li> 
          <li class="nav-item">
            <a href="beneficiarios_inativos.php" class="nav-link">
              <i class="nav-icon fa fa-toggle-off"></i>
              <p>
                Lista de Inativos
              </p>
            </a>   
          </li> 
          <li class="nav-item">
            <a href="inativar_beneficiario.php" class="nav-link">
              <i class="nav-icon fa fa-minus-square"></i>
              <p>
                Inativar um Beneficiario
              </p>
            </a>   
          </li>  
          <li class="nav-item">
            <a href="prs.php" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Novo PRS
              </p>
            </a>   
          </li> 
          <li class="nav-item">
            <a href="buscar_prs.php" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Buscar PRS
              </p>
            </a>   
          </li> 
          
		 
       
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!--<div>
        <button type="button" class="btn btn-block btn-primary" onclick="javascript:NovoUsuario();">Novo Painel</button>
      </div> -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Listagem de Beneficiários</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

        

        <table id="dash1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>UNIDADE</th>
                <th>DATA CADASTRO</th>
                <th>ENCAMINHADO POR</th>
                <th>ATIVO</th>
              
                <th>NUMERO DO BENEFICIARIO</th>
                <th>NOME REGISTRO</th>
                <th>NOME SOCIAL</th>
                <th>NACIONALIDADE</th>
                <th>NATURALIDADE</th>
                <th>SEXO</th>
                <th>ETNIA</th>
                <th>ORIENTAÇÃO SEXUAL</th>
                <th>DATA NASCIMENTO</th>
                <th>ESTADO CIVIL</th>
                <th>RENDA FAMILIAR</th>
                <th>BENEFICIO</th>
                <th>TIPO MORADIA</th>
                <th>ENDEREÇO</th>
                <th>RG</th>
                <th>ORGÃO EMISSOR</th>
                <th>UF EMISSOR</th>
                <th>CPF</th>
                <th>CARTAO SUS</th>
                <th>CARTAO CIDADAO</th>
                <th>TELEFONE FIXO</th>
                <th>TELEFONE CELULAR</th>
                <th>NOME MAE</th>
                <th>NOME PAI</th>
                <th>QTD FILHOS</th>
                <th>NOME FILHO 1</th>
                <th>IDADE FILHO 1</th>
                <th>NOME FILHO 2</th>
                <th>IDADE FILHO 2</th>
                <th>NOME FILHO 3</th>
                <th>IDADE FILHO 3</th>
                <th>NOME FILHO 4</th>
                <th>IDADE FILHO 4</th>
                <th>NOME FILHO 5</th>
                <th>IDADE FILHO 5</th>
                <th>GRAU DE ESCOLARIDADE</th>
                <th>NOME DO CURSO SE CURSANDO</th>
                <th>DEFICIENCIA</th>
                <th>NECESSIDADE EDUCACIONAL</th>
                <th>GESTANTE</th>
                <th>DOENÇA</th>
                <th>TRATAMENTO</th>
                <th>SUBSTANCIA PSICOATIVA</th>
                <th>PERIDIOCIDADE</th>
                <th>TEMPO DE USO</th>
                <th>MEDICAÇÃO</th>
                <th>UBS REF</th>
                <th>RAPS REF</th>
                <th>ULTIMO TRAB FORMAL</th>
                <th>ULTIMO TRAB INFORM</th>
                <th>EXP ANTERIORES</th>
                <th>TRAB MARCANTE</th>
                <th>AREA INTERESSE</th>
                <th>CURSOS ANTERIORES</th>
                <th>CAPACIT TECNICA</th>
                <th>ATIVIDADE COMPLEMENTAR</th>
                <th>PENDENCIA JUDICIAL</th>
                <th>TIPO PEND JUDICIAL</th>
                <th>EGRESSO SISTEMA PRISIONAL</th>
                <th>PROCESSO FORMATIVO INSERIDO</th>
                <th>O QUE ESPERA</th>
                <th>OBS</th>
                <th>SERV REFERENCIA</th>
                <th>TEC REFERENCIA</th>
                <th>CARGO DO TECNICO</th>
                <th>CONTATO DO TECNICO</th>
                <th>TERRITORIO DE REF</th>
                <th>TECNICO REF FPA</th>
                <th>RESP PELO CADASTRO</th>
                <th>DATA CORRENTE</th>
                
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>                
              <th>ID</th>
                <th>UNIDADE</th>
                <th>DATA CADASTRO</th>
                <th>ENCAMINHADO POR</th>
                <th>ATIVO</th>
                
                <th>NUMERO DO BENEFICIARIO</th>
                <th>NOME REGISTRO</th>
                <th>NOME SOCIAL</th>
                <th>NACIONALIDADE</th>
                <th>NATURALIDADE</th>
                <th>SEXO</th>
                <th>ETNIA</th>
                <th>ORIENTAÇÃO SEXUAL</th>
                <th>DATA NASCIMENTO</th>
                <th>ESTADO CIVIL</th>
                <th>RENDA FAMILIAR</th>
                <th>BENEFICIO</th>
                <th>TIPO MORADIA</th>
                <th>ENDEREÇO</th>
                <th>RG</th>
                <th>ORGÃO EMISSOR</th>
                <th>UF EMISSOR</th>
                <th>CPF</th>
                <th>CARTAO SUS</th>
                <th>CARTAO CIDADAO</th>
                <th>TELEFONE FIXO</th>
                <th>TELEFONE CELULAR</th>
                <th>NOME MAE</th>
                <th>NOME PAI</th>
                <th>QTD FILHOS</th>
                <th>NOME FILHO 1</th>
                <th>IDADE FILHO 1</th>
                <th>NOME FILHO 2</th>
                <th>IDADE FILHO 2</th>
                <th>NOME FILHO 3</th>
                <th>IDADE FILHO 3</th>
                <th>NOME FILHO 4</th>
                <th>IDADE FILHO 4</th>
                <th>NOME FILHO 5</th>
                <th>IDADE FILHO 5</th>
                <th>GRAU DE ESCOLARIDADE</th>
                <th>NOME DO CURSO SE CURSANDO</th>
                <th>DEFICIENCIA</th>
                <th>NECESSIDADE EDUCACIONAL</th>
                <th>GESTANTE</th>
                <th>DOENÇA</th>
                <th>TRATAMENTO</th>
                <th>SUBSTANCIA PSICOATIVA</th>
                <th>PERIDIOCIDADE</th>
                <th>TEMPO DE USO</th>
                <th>MEDICAÇÃO</th>
                <th>UBS REF</th>
                <th>RAPS REF</th>
                <th>ULTIMO TRAB FORMAL</th>
                <th>ULTIMO TRAB INFORM</th>
                <th>EXP ANTERIORES</th>
                <th>TRAB MARCANTE</th>
                <th>AREA INTERESSE</th>
                <th>CURSOS ANTERIORES</th>
                <th>CAPACIT TECNICA</th>
                <th>ATIVIDADE COMPLEMENTAR</th>
                <th>PENDENCIA JUDICIAL</th>
                <th>TIPO PEND JUDICIAL</th>
                <th>EGRESSO SISTEMA PRISIONAL</th>
                <th>PROCESSO FORMATIVO INSERIDO</th>
                <th>O QUE ESPERA</th>
                <th>OBS</th>
                <th>SERV REFERENCIA</th>
                <th>TEC REFERENCIA</th>
                <th>CARGO DO TECNICO</th>
                <th>CONTATO DO TECNICO</th>
                <th>TERRITORIO DE REF</th>
                <th>TECNICO REF FPA</th>
                <th>RESP PELO CADASTRO</th>
                <th>DATA CORRENTE</th>
              </tr>
            </tfoot>
          </table>






        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.content -->
      <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022<a href=""></a>.</strong> All rights reserved - Fundação Porta Aberta
    </footer>
  </div>

  <input type="hidden" id="hidIdUsuario" />
  <div id="modalUsuario" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          NOVO PAINEL
        </div>
        <div class="modal-body">
          <div id="divModalUsuarioValidacao"></div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Cliente:</label>
                <!--<input id="txtSigla" type="text" class="form-control" maxlenght="250" placeholder="Cliente"> -->
                 <select id="ddlEps" class="form-control">                  
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Descrição:</label>
                <input id="txtDescr" type="text" class="form-control" maxlenght="250" placeholder="Descrição">
              </div>
              <div class="form-group col-md-12">
                <label class="col-form-label">URL:</label>
                <input id="txtPdv" type="text" class="form-control" maxlenght="150" placeholder="URL">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="submitButton" type="button" class="btn btn-success" onclick="Salvar(); Logger();">Salvar</button>
        </div>
      </div>
    </div>
  </div>





  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    

    function Listar() {
      var table = $('#dash1').DataTable();
      table.destroy();

      $($("#dash1").DataTable({
        dom: "Bfrtip",
        ajax: {
          url: "../phpwsdb/beneficiarios_ativos.php",
          type: 'GET',
          dataType: 'json'
        }, 
               
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false
       ,
        "columns": [
            {mData: 'id'},
            { mData:'unidade'},
            { mData:'data_cadastro'},
            { mData:'encaminhado_por'},
            { mData:'ativo'},
           
            { mData:'numero_beneficiario'},
            { mData:'nome_registro'},
            { mData:'nome_social'},
            { mData:'nacionalidade'},
            { mData:'naturalidade'},
            { mData:'sexo'},
            { mData:'etnia'},
            { mData:'orientacao_sexual'},
            { mData:'data_nascimento'},
            { mData:'estado_civil'},
            { mData:'renda_familiar'},
            { mData:'beneficio'},
            { mData:'tipo_moradia'},
            { mData:'endereco'},
            { mData:'rg'},
            { mData:'orgao_emissor'},
            { mData:'uf_emissor'},
            { mData:'cpf'},
            { mData:'cartao_sus'},
            { mData:'cartao_cidadao'},
            { mData:'telefone_fixo'},
            { mData:'telefone_celular'},
            { mData:'nome_mae'},
            { mData:'nome_pai'},
            { mData:'qtd_filhos'},
            { mData:'nome_filho1'},
            { mData:'idade_filho1'},
            { mData:'nome_filho2'},
            { mData:'idade_filho2'},
            { mData:'nome_filho3'},
            { mData:'idade_filho3'},
            { mData:'nome_filho4'},
            { mData:'idade_filho4'},
            { mData:'nome_filho5'},
            { mData:'idade_filho5'},
            { mData:'grau_escolaridade'},
            { mData:'nome_curso_se_cursando'},
            { mData:'deficiencia'},
            { mData:'necessidade_educacional'},
            { mData:'gestante'},
            { mData:'doenca'},
            { mData:'tratamento'},
            { mData:'substancia_psicoativa'},
            { mData:'peridiocidade'},
            { mData:'tempo_uso'},
            { mData:'medicacao'},
            { mData:'ubs_referencia'},
            { mData:'raps_referencia'},
            { mData:'ultimo_trabalho_formal'},
            { mData:'ultimo_trabalho_informal'},
            { mData:'experiencias_anteriores'},
            { mData:'trabalho_marcante'},
            { mData:'area_interesse'},
            { mData:'cursos_anteriores'},
            { mData:'capacitacao_tecnica'},
            { mData:'atividade_complementar'},
            { mData:'pendencia_judicial'},
            { mData:'tipo_pendencia_judicial'},
            { mData:'egresso_sistema_prisional'},
            { mData:'processo_formativo_inserido'},
            { mData:'o_que_espera'},
            { mData:'observacoes'},
            { mData:'servico_referencia'},
            { mData:'tecnico_referencia'},
            { mData:'cargo_tecnico'},
            { mData:'contato_tecnico'},
            { mData:'territorio_referencia'},
            { mData:'tecnico_ref_fpa'},
            { mData:'responsavel_pelo_cadastro'},
            { mData:'data_corrente'}

        ]
      }));
      

     


    }
    

    $(document).ready(async function() {
      Listar();
      //await CarregarComboPDV();
        
   
		

        //console.log(pdv.length);
        /*
        if (pdv.length > 0){            
            $('#li-bi').addClass('d-lg-none');
        }
        */
    });

   

   
    function displayCustomMessage(div, message, type) {
      var strAlert = '';
      var strAlertCss = '';

      if (type == "error") {
        strAlertCss = "alert-danger";
      } else if (type == "success") {
        strAlertCss = "alert-success";
      } else {
        strAlertCss = "alert-info";
      }

      strAlert = "<div id=\"" + div + "-erro\"></div>";
      strAlert = "<div class=\"alert " + strAlertCss + " role=\"alert\">";
      strAlert += "     " + message + "";
      strAlert += "</div>";

      $("#" + div).html(strAlert);
      $("#" + div).show(100);
    }

    
  </script>
</body>

</html>