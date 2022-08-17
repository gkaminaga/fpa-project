<?php
session_start();
$skill = isset($_SESSION['skill']) ? $_SESSION['skill'] : null;
$pdv = isset($_SESSION['pdv']) ? $_SESSION['pdv'] : null;
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : null;
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;  

if (!$nome){
 echo ("<script LANGUAGE='JavaScript'>    
    window.location.href='login.html';
    </script>");
}

if ($_SESSION['admin'] == false){
  echo ("<script LANGUAGE='JavaScript'>    
    window.location.href='bi.php';
    </script>");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitor</title>
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
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
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
        <img src="dist/img/noovi.png" alt="Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Painel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?php echo $nome;?></a>
            <a href="javascript:AlterarSenha();" style="color:#c2c7d0;font-size:12px;text-decoration:underline">Alterar Senha</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item" id="li-bi">
            <a href="listapainelAdmin.php" class="nav-link">
              <i class="nav-icon fa fa-laptop"></i>
              <p>
                BI
              </p>
            </a>
          </li>

          <!--<li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                BI
              </p>
            </a>   
          </li> -->
		 
          <!--<li class="nav-item"> -->
		    <!--<script type="text/javascript"> var $skill="<?php echo $skill;?>"; console.log("Skill", $skill)</script>-->
        <!--<a href="pausas.php" class="nav-link">
              <i class="nav-icon fa fa-user-clock"></i>
              <p>
                Relatório de Pausas
              </p>
            </a>
          </li>   -->
          <!--<li class="nav-item"> -->
		    <!--<script type="text/javascript"> var $skill="<?php echo $skill;?>"; console.log("Skill", $skill)</script>-->
        <!--<a href="pausas_detalhadas.php" class="nav-link">
              <i class="nav-icon fa fa-user-clock"></i>
              <p>
                Relatório de Pausas Detalhadas
              </p>
            </a>
          </li> -->

          <!--<li class="nav-item"> -->
		    <!--<script type="text/javascript"> var $skill="<?php echo $skill;?>"; console.log("Skill", $skill)</script>-->
        <!--<a href="contatos.php" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Relatório de Contatos
              </p>
            </a>
          </li> -->
          <!--<li class="nav-item">
            <a href="atendimentos.php" class="nav-link">
              <i class="nav-icon fa fa-phone-square"></i>
              <p>
                Relatório de Atendimentos
              </p>
            </a>
          </li> --> 
        <li class="nav-item">
		    <!--<script type="text/javascript"> var $skill="<?php echo $skill;?>"; console.log("Skill", $skill)</script>-->
        <a href="painel.php" class="nav-link">
              <i class="nav-icon fa fa-chart-line"></i>
              <p>
                Painéis
              </p>
            </a>
          </li> 
          <li class="nav-item" id="li-user">
              <!--<script type="text/javascript"> var $skill="<?php echo $skill; ?>"; console.log("Skill", $skill)</script>-->
              <a href="usuarios.php" class="nav-link active">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Usuários
                </p>
              </a>
            </li>
          
            <li class="nav-item" id="li-eps">
              <!--<script type="text/javascript"> var $skill="<?php echo $skill; ?>"; console.log("Skill", $skill)</script>-->
              <a href="eps.php" class="nav-link">
                <i class="nav-icon fa fa-folder"></i>
                <p>
                  EPS
                </p>
              </a>
            </li>
            <!--
            <li class="nav-item" id="li-mapacalor">
                <a href="mapacalor.php" class="nav-link ">
                    <i class="nav-icon fa fa-thermometer-half"></i>
                    <p>
                        Mapa de Calor
                    </p>
                </a>
            </li>
-->
			<!--<li class="nav-item" id="li-bi">
				<a href="bi.php" class="nav-link">
					<i class="nav-icon fa fa-laptop"></i>
					<p>
						BI
					</p>
				</a>
			</li> -->
            <!--
          <li class="nav-item">
            <a href="remoteconfig.html" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Configuração
              </p>
            </a>
          </li>   
		  -->
            <!--			  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
		-->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div>
        <button type="button" class="btn btn-block btn-primary" onclick="javascript:NovoUsuario();">Novo Usuário</button>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Usuarios cadastrados</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <!-- /.row -->
          <table id="dash1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>ATIVO</th>
                <th>ADMIN</th>
                <th>EMPRESA</th>
                <!--<th>PDV</th> -->
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>                
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>ATIVO</th>
                <th>ADMIN</th>
                <th>EMPRESA</th>
                <!--<th>PDV</th> -->
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
      <strong>Copyright &copy; 2020 <a href=""></a>.</strong> All rights reserved.
    </footer>
  </div>

  <input type="hidden" id="hidIdUsuario" />
  <div id="modalUsuario" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          Usuário
        </div>
        <div class="modal-body">
          <div id="divModalUsuarioValidacao"></div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Nome:</label>
                <input id="txtNome" type="text" class="form-control" maxlenght="250" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">E-mail:</label>
                <input id="txtEmail" type="text" class="form-control" maxlenght="150" placeholder="E-mail">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Senha:</label>
                <input id="txtSenha" type="password" class="form-control" maxlenght="20" placeholder="Senha">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Senha:</label>
                <input id="txtSenhaConfirmacao" type="password" class="form-control" maxlenght="20" placeholder="Senha (confirmação)">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label class="col-form-label">Cliente:</label>
                <select id="ddlEps" class="form-control">                  
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Admin:</label>
                <select id="ddlAdmin" class="form-control">
                  <option value="0">Não</option>
                  <option value="1">Sim</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Ativo:</label>
                <select id="ddlAtivo" class="form-control">
                  <option value="0">Não</option>
                  <option value="1">Sim</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="submitButton" type="button" class="btn btn-success" onclick="Salvar(); Logger()">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <input type="hidden" id="hidAlterarSenha" />
  <div id="modalAlteraSenha" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          Alterar senha
        </div>
        <div class="modal-body">
          <div id="divModalAlterarSenha"></div>
          <form>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label class="col-form-label">Nome:</label>
                <input id="txtNome" type="text" class="form-control" value=<?php echo $nome;?> disabled>
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">ID:</label>
                <input id="txtID" type="text" class="form-control" value=<?php echo $id;?> disabled>
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Nova senha:</label>
                <input id="txtSenha1" type="password" class="form-control" maxlenght="250" placeholder="Senha">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Confirme a nova senha:</label>
                <input id="txtSenhaConfirmacao1" type="password" class="form-control" maxlenght="150" placeholder="Senha">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button id="submitButton" type="button" class="btn btn-success" onclick="SalvarNovaSenha(); LoggerSenha();">Salvar</button>
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
  <!--<script src="dist/js/demo.js"></script>-->
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
    var Id;
    var nomeAntigo;
    var emailAntigo;
    var ativoAntigo;
    var adminAntigo;
    var epsAntiga;
    var senhaAntiga;
    
    function LoggerSenha(){
      var acao = 'Alterando a propria senha'
      var nome = "<?php echo $nome;?>";
      var dt = new Date();
      var datetime = `${dt.getDate().toString().padStart(2, '0')}/${(dt.getMonth()+1).toString().padStart(2, '0')}/${dt.getFullYear().toString().padStart(4, '0')} ${dt.getHours().toString().padStart(2, '0')}:${dt.getMinutes().toString().padStart(2, '0')}:${dt.getSeconds().toString().padStart(2, '0')}`;
      var alteraUsuario = 'Alteracao das configuracoes de usuario';
      var jsonData = {
        usuario: nome,
        datetime: datetime,
        acao: acao,
        nomeAntigo: '',
        emailAntigo : '',
        ativoAntigo: '',
        adminAntigo: '',
        epsAntiga: '',
        nomeNovo: '',
        emailNovo: '',
        ativoNovo: '',
        adminNovo: '',
        epsNova: ''
        
      };

      $.ajax({
        url: "../phpwsdb/log_insert_usuario.php",
        data: jsonData,
        type: 'POST',
        success: function(data) {
          console.log('logs gravados com sucesso!');
        }
      });

    }
    function Logger(){
      var nome = "<?php echo $nome;?>";
      var dt = new Date();
      var datetime = `${dt.getDate().toString().padStart(2, '0')}/${(dt.getMonth()+1).toString().padStart(2, '0')}/${dt.getFullYear().toString().padStart(4, '0')} ${dt.getHours().toString().padStart(2, '0')}:${dt.getMinutes().toString().padStart(2, '0')}:${dt.getSeconds().toString().padStart(2, '0')}`;
      var alteraUsuario = 'Alteracao das configuracoes de usuario';
      var alteraUsuarioSenha = 'Alteracao de senha e configuracao de usuario';
      var criaUsuario = 'Criacao de Usuario';


      var nomeNovo = document.getElementById('txtNome').value;
      var emailNovo = document.getElementById('txtEmail').value;
      var ativoNovo = document.getElementById('ddlAtivo').value;
      var adminNovo = document.getElementById('ddlAdmin').value;
      var epsNova = document.getElementById('ddlEps').value;
      var novaSenha = document.getElementById('txtSenha').value;


      if (Id != ''){
        //Alteraçao de Usuario ja existente
        if (senhaAntiga == novaSenha){
          var jsonData = {
            usuario: nome,
            datetime: datetime,
            acao: alteraUsuario,
            nomeAntigo: nomeAntigo,
            emailAntigo : emailAntigo,
            ativoAntigo: ativoAntigo,
            adminAntigo: adminAntigo,
            epsAntiga: epsAntiga,
            nomeNovo: nomeNovo,
            emailNovo: emailNovo,
            ativoNovo: ativoNovo,
            adminNovo: adminNovo,
            epsNova: epsNova
            
          };

        }
        else {
          var jsonData = {
            usuario: nome,
            datetime: datetime,
            acao: alteraUsuarioSenha,
            nomeAntigo: nomeAntigo,
            emailAntigo : emailAntigo,
            ativoAntigo: ativoAntigo,
            adminAntigo: adminAntigo,
            epsAntiga: epsAntiga,
            nomeNovo: nomeNovo,
            emailNovo: emailNovo,
            ativoNovo: ativoNovo,
            adminNovo: adminNovo,
            epsNova: epsNova
            
          };
        }
        
        
      }
      else {
        //Criaçao de um novo Usuario
        var jsonData = {
          usuario: nome,
          datetime: datetime,
          acao: criaUsuario,
          nomeAntigo: '',
          emailAntigo: '',
          ativoAntigo: '',
          adminAntigo: '',
          epsAntiga: '',
          nomeNovo: nomeNovo,
          emailNovo: emailNovo,
          ativoNovo: ativoNovo,
          adminNovo: adminNovo,
          epsNova: epsNova
          
        };
      }

      console.log(jsonData);
      console.log(senhaAntiga);
      console.log(novaSenha);

      $.ajax({
        url: "../phpwsdb/log_insert_usuario.php",
        data: jsonData,
        type: 'POST',
        success: function(data) {
          console.log('logs gravados com sucesso!');
        }
      });
      

    }




    function Listar() {

      var table = $('#dash1').DataTable();
      table.destroy();

      $("#dash1").DataTable({
        dom: "Bfrtip",
        ajax: {
          url: "../phpwsdb/usuarios.php",
          type: 'POST'
          //body: form
        }, 
               
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false
       ,
        "columns": [
          {
            mData: 'id'
          },
          {
            mData: 'nome'
          },
          {
            mData: 'email'
          }, 
          {
            mData: 'ativo'
          }, 
          {
            mData: 'admin'
          }, 
          {
            mData: 'sigla'
          } 
          //{
          //  mData: 'pdv'
          //}
        ]
      });

      $('#dash1 tbody').on('dblclick', 'td', function () {
        var $row = $(this).closest("tr"),        // Finds the closest row <tr> 
        $tds = $row.find("td:nth-child(1)"); // Finds the 2nd <td> element        
        Carregar($tds.text());
      });


    }
    

    $(document).ready(function() {
      Listar();
      CarregarComboPDV();
	  
	  var pdv = <?php echo json_encode($pdv) ?>;
		/*if (pdv.length > 0){   
			$('#li-bi').addClass('d-lg-none');
		}	
    */
    });

    function CarregarComboPDV(){
      $.getJSON("../phpwsdb/pdv_get.php", function(data){
          for (var i = 0, len = data.length; i < len; i++) {
            $('#ddlEps').append($('<option>', {
                value: data[i].Id,
                text: data[i].Sigla
            }));
          }
      });
    }

    function NovoUsuario() {
      Id = '';      
      ClearForm();
      $("#modalUsuario").modal('show');
    }

    function AlterarSenha() {
      ClearForm();
      $("#modalAlteraSenha").modal('show');
    }

    function Carregar(id) {
      var jsonData = {
        id: id
      };

      $.getJSON("../phpwsdb/usuario_get.php?id=" + id, function(data){
          $("#hidIdUsuario").val(data[0].Id);
          $("#txtNome").val(data[0].Nome);
          $("#txtEmail").val(data[0].Email);
          $("#txtSenha").val(window.atob(data[0].Senha));
          $("#txtSenhaConfirmacao").val(window.atob(data[0].Senha));
          $("#ddlEps").val(data[0].EpsId);
          $("#ddlAdmin").val(data[0].Admin);
          $("#ddlAtivo").val(data[0].Ativo);

          nomeAntigo = data[0].Nome;
          emailAntigo = data[0].Email;
          ativoAntigo = data[0].Ativo;
          adminAntigo = data[0].Admin;
          epsAntiga = data[0].EpsId;
          Id = data[0].Id;
          senhaAntiga = window.atob(data[0].Senha);
          console.log(Id);
          

          $("#modalUsuario").modal('show');
      });
    }

    function SalvarNovaSenha() {
      var id = $("#txtID").val();
      var senha = $("#txtSenha1").val();
      var confirmacao = $("#txtSenhaConfirmacao1").val();
      var erro = '';
      if (senha != confirmacao) {
        erro += '- Senha e confirmação precisam ser iguais <br />';
      }
      if (senha == ''){
        erro += '- Senha e confirmação não podem ser vazias <br />';
      }
      

      if (erro.length != 0) {
        displayCustomMessage('divModalAlterarSenha', erro, 'error');
        return;
      } else {
        var jsonData = {
          id: id,
          senha: senha
        };
        console.log(jsonData);
        $.ajax({
          url: "../phpwsdb/alterar_senha.php",
          data: jsonData,
          type: 'POST',
          success: function(data) {
            alert("Senha alterada com sucesso")
            $("#modalAlteraSenha").modal('hide');
              ClearForm();
          }
        });
        ClearForm();
      }
	  
    }
    function ClearForm() {
      $("#hidAlterarSenha").val('');
      $("#hidIdUsuario").val('');
      $("#txtNome").val('');
      $("#txtEmail").val('');
      $("#txtSenha").val('');
      $("#txtSenhaConfirmacao").val('');
      $("#ddlEps").val('');
      $("#ddlAdmin").val('');
      $("#ddlAtivo").val('');

      $("#txtSenha1").val('');
      $("#txtSenhaConfirmacao1").val('');
      
    }


    function Salvar() {
      var id = $("#hidIdUsuario").val();
      var nome = $("#txtNome").val();
      var email = $("#txtEmail").val();
      var senha = $("#txtSenha").val();
      var senhaConfirmacao = $("#txtSenhaConfirmacao").val();
      var eps = $("#ddlEps").val();
      var admin = $("#ddlAdmin").val();
      var ativo = $("#ddlAtivo").val();

      if (id.length == 0) {
        id = 0;
      }

      var erro = '';

      if (nome.length == 0) {
        erro += '- Nome <br />';
      }

      if (email.length == 0) {
        erro += '- Email <br />';
      }

      if (senha.length == 0) {
        erro += '- Senha <br />';
      }

      if (senhaConfirmacao.length == 0) {
        erro += '- Senha Confirmação <br />';
      }

      if (senha != senhaConfirmacao) {
        erro += '- Senha e confirmação precisam ser iguais <br />';
      }
      
      

      if (erro.length != 0) {
        displayCustomMessage('divModalUsuarioValidacao', erro, 'error');
        return;
      } else {
        var jsonData = {
          id: id,
          nome: nome,
          email: email,
          senha: senha,
          eps: eps,
          admin: admin,
          ativo: ativo
        };
        console.log(jsonData);

        $.ajax({
          url: "../phpwsdb/usuario_salvar.php",
          data: jsonData,
          type: 'POST',
          success: function(data) {
            $("#modalUsuario").modal('hide');
              ClearForm();
          }
        });
      }
	  Listar();
      CarregarComboPDV();
    }

    

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