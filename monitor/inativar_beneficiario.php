<?php

session_start();
$skill = isset($_SESSION['skill']) ? $_SESSION['skill'] : null;
$pdv = isset($_SESSION['pdv']) ? $_SESSION['pdv'] : null;
$eps = isset($_SESSION['eps']) ? $_SESSION['eps'] : null;
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : null;
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : null;
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$url = isset($_SESSION['url']) ? $_SESSION['url'] : null;

if (!$nome) {
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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FPA - Inativar Beneficiário</title>

    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="fullscreenmodal/dist/bootstrap4-modal-fullscreen.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/config.js?versao=1" type="text/javascript"></script>
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    table.table-bordered.dataTable tbody th,
    table.table-bordered.dataTable tbody td {
      cursor: pointer;
      border-bottom-width: 0;
    }
  </style>
</head>
    <!-- Carrega o Menu para a EPS - Administrador -->
    <?php if ($_SESSION['eps'] === '27') include __DIR__.'/header/administrador_header.php'; ?>

    <!-- Carrega o Menu para a EPS - Diretor -->
    <?php if ($_SESSION['eps'] === '26') include __DIR__.'/header/diretor_header.php'; ?>

    <!-- Controle de acessos para a EPS - Coordenador -->
    <?php if ($_SESSION['eps'] === '28') header('Location: beneficiarios.php'); ?>

    <!-- Controle de acessos para a EPS - Educador -->
    <?php if ($_SESSION['eps'] === '29') header('Location: beneficiarios.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
    <!--<div>
        <button type="button" class="btn btn-block btn-primary" onclick="javascript:NovoUsuario();">Novo Painel</button>
      </div> -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inativar Beneficiário</h3>
              <h5>Duplo clique no nome do beneficiário para inativá-lo!</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dash1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOME REGISTRO</th>
                    <th>DATA CADASTRO</th>
                    <th>UNIDADE</th>
                    <th>ATIVO</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NOME REGISTRO</th>
                    <th>DATA CADASTRO</th>
                    <th>UNIDADE</th>
                    <th>ATIVO</th>
                  </tr>
                </tfoot>
              </table>
            </div>

            <!-- /.card-body -->
          </div>
        </div>

      <input type="hidden" id="hidIdUsuario" />
      <div id="modalUsuario" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              Inativar Beneficiário
            </div>
            <div class="modal-body">
              <div id="divModalUsuarioValidacao"></div>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">ID:</label>
                    <input id="txtId" type="text" class="form-control" disabled>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">Nome:</label>
                    <input id="txtNome" type="text" class="form-control" maxlenght="250" placeholder="Nome" disabled>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">Data de Saída:</label>
                    <input id="dataSaida" type="date" class="form-control" maxlenght="250" placeholder="Data de Saída">
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">Motivo da Saída:</label>
                    <input id="motivoSaida" type="text" class="form-control" maxlenght="250" placeholder="Motivo da Saída">
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">Óbito:</label>
                    <select id="ddlObito" class="form-control">
                      <option value="0">Não</option>
                      <option value="1">Sim</option>
                    </select>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label">Data Óbito:</label>
                    <input id="dataObito" type="date" class="form-control" maxlenght="250" placeholder="Data do Óbito">
                    </select>
                  </div>
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button id="submitButton" type="button" class="btn btn-success" onclick="Salvar()">Salvar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- ./wrapper -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Fundação Porta Aberta 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
            <h5 class="modal-title" id="exampleModalLabel">Pronto para deslogar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione logout caso deseje finalizar a sessão.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../phpwsdb/logout.php">Logout</a>
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
    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
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
          "autoWidth": false,
          "columns": [{
              mData: 'id'
            },
            {
              mData: 'nome_registro'
            },
            {
              mData: 'data_cadastro'
            },
            {
              mData: 'unidade'
            },
            {
              mData: 'ativo'
            }
          ]
        }));

        $('#dash1 tbody').on('dblclick', 'td', function() {
          var $row = $(this).closest("tr"), // Finds the closest row <tr> 
          $tds = $row.find("td:nth-child(1)"); // Finds the 2nd <td> element     
          $tds1 = $row.find("td:nth-child(2)");
          Carregar($tds.text(), $tds1.text());
        });
      }

      function Carregar(id, nome) {
        $("#txtNome").val(nome);
        $("#txtId").val(id);
        $("#modalUsuario").modal('show');
      }

      function Salvar() {
        const id = $("#txtId").val();
        const data_saida = $("#dataSaida").val();
        const motivo_saida = $("#motivoSaida").val();
        const obito = $("#ddlObito").val();
        const data_obito = $("#dataObito").val();

        if (data_saida == '' || motivo_saida == '') {
          alert('Preencha os campos "Data de Saída" e "Motivo de Saída" para continuar!');
        } else {
          jsonData = {
            id: id,
            data_saida: data_saida,
            ativo: 0,
            motivo_saida: motivo_saida,
            obito: obito,
            data_obito: data_obito
          }

          console.log(jsonData);

          $.ajax({
            url: "../phpwsdb/inativar_beneficiario.php",
            data: jsonData,
            type: 'POST',
            success: function(data) {
              alert("Beneficiário inativado!")
              $("#modalUsuario").modal('close');
            }
          });
        }
      }

      $(document).ready(async function() {
        Listar();
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