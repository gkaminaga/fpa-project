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
  <title>FPA - Beneficiário</title>

  <link rel="icon" type="image/x-icon" href="./img/logo.ico">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="fullscreenmodal/dist/bootstrap4-modal-fullscreen.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
<?php if ($_SESSION['eps'] === '27') include __DIR__ . '/header/administrador_header.php'; ?>

<!-- Carrega o Menu para a EPS - Diretor -->
<?php if ($_SESSION['eps'] === '26') include __DIR__ . '/header/diretor_header.php'; ?>

<!-- Carrega o Menu para a EPS - Coordenador -->
<?php if ($_SESSION['eps'] === '28') include __DIR__ . '/header/coordenador_header.php'; ?>

<!-- Carrega o Menu para a EPS - Educador -->
<?php if ($_SESSION['eps'] === '29') include __DIR__ . '/header/educador_header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <!--<div>
        <button type="button" class="btn btn-block btn-primary" onclick="javascript:NovoUsuario();">Novo Painel</button>
      </div> -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Buscar Avaliação de PRS</h3>
      <h5>Duplo clique para exibir detalhes sobre o PRS!</h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table id="dash1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID DO PRS</th>
            <th>NOME DO BENEFICIÁRIO</th>
            <th>UNIDADE</th>
            <th>DATA DA AVALIAÇÃO (PRS)</th>  
            <th>RESPONSÁVEL PELA AVALIAÇÃO</th>          
          </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
          <tr>
            <th>ID DO PRS</th>
            <th>NOME DO BENEFICIÁRIO</th>
            <th>UNIDADE</th>
            <th>DATA DA AVALIAÇÃO (PRS)</th>    
            <th>RESPONSÁVEL PELA AVALIAÇÃO</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
      <input type="hidden" id="hidIdUsuario" />
      <div id="modalUsuario" class="modal fade modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              PRS
            </div>
            <div class="modal-body">
              <div id="divModalUsuarioValidacao"></div>
              <form>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Nome do Beneficiário:</label>
                <input type="text" class="form-control" id="nome_beneficiario" placeholder="nome_beneficiario" disabled>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Unidade:</label>
                <input type="text" class="form-control" id="unidade" placeholder="Unidade" disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Data:</label>
                <input type="date" class="form-control" id="data_corrente" placeholder="Data"disabled>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:25px">1. Diagnóstico Situacional</h5>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Composição Familiar:</label>
                <textarea class="form-control" id="composicao_familiar" rows="4"disabled></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>História de Vida (Linha do Tempo, até o contexto atual, rotina e vida social):</label>
                <textarea class="form-control" id="historia_vida" rows="4"disabled></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>Histórico de Cuidados Clínicos (tratamentos anteriores):</label>
                <textarea class="form-control" id="cuidados_clinicos" rows="4"disabled></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>Formação Educacional (cursos realizados, desejo de retomada dos estudos):</label>
                <textarea class="form-control" id="formacao_educacional" rows="4"disabled></textarea>
              </div>
              <div class="form-group col-md-12">
                <label>Mundo do Trabalho (qual sentido, momentos marcantes, planos, desejos/sonhos):</label>
                <textarea class="form-control" id="mundo_trabalho" rows="4"disabled></textarea>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:25px">2. Definição de Metas e Divisão de Responsabilidades</h5>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:20px">Curto Prazo (até 6 meses)</h5>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>1ª Meta:</label>
                <textarea class="form-control" id="meta_curto1" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>1ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_curto1" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>2ª Meta:</label>
                <textarea class="form-control" id="meta_curto2" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>2ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_curto2" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>3ª Meta:</label>
                <textarea class="form-control" id="meta_curto3" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>3ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_curto3" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>4ª Meta:</label>
                <textarea class="form-control" id="meta_curto4" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>4ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_curto4" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:20px">Médio Prazo (6 a 12 meses)</h5>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>1ª Meta:</label>
                <textarea class="form-control" id="meta_medio1" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>1ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_medio1" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>2ª Meta:</label>
                <textarea class="form-control" id="meta_medio2" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>2ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_medio2" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>3ª Meta:</label>
                <textarea class="form-control" id="meta_medio3" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>3ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_medio3" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>4ª Meta:</label>
                <textarea class="form-control" id="meta_medio4" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>4ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_medio4" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:20px">Longo Prazo (12 a 24 meses)</h5>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>1ª Meta:</label>
                <textarea class="form-control" id="meta_longo1" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>1ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_longo1" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>2ª Meta:</label>
                <textarea class="form-control" id="meta_longo2" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>2ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_longo2" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>3ª Meta:</label>
                <textarea class="form-control" id="meta_longo3" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>3ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_longo3" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>4ª Meta:</label>
                <textarea class="form-control" id="meta_longo4" rows="2"disabled></textarea>
              </div>
              <div class="form-group col-md-6">
                <label>4ª Responsabilidade (como agir):</label>
                <textarea class="form-control" id="responsabilidade_longo4" rows="2"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>OBSERVAÇÕES (identificação de demandas, potencialidades, vulnerabilidades):</label>
                <textarea class="form-control" id="observacoes" rows="3"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Responsável pela Elaboração:</label>
                <input type="text" class="form-control" id="responsavel_pela_elaboracao" placeholder="Nome do Responsável"disabled>
              </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h5 class="h3 mb-0 text-gray-800" style="font-size:25px">3. Reavaliação</h5>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Data de Reavaliação:</label>
                <input type="date" class="form-control" id="data_reavaliacao" placeholder="Data"disabled>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Pontos a serem reavaliados do PRS construído:</label>
                <textarea class="form-control" id="pontos_reavaliacao" rows="8"disabled></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>Observações:</label>
                <textarea class="form-control" id="observacoes_geral" rows="8"disabled></textarea>
              </div>
            </div>
            
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button id="submitButton" type="button" class="btn btn-success" onclick="window.print()">Imprimir</button>
            </div>
          </div>
        </div>
      </div>

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
        url: "../phpwsdb/lista_prs.php",
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
          mData: 'nome_beneficiario'
        },
        {
          mData: 'unidade'
        },
        {
          mData: 'data_corrente'
        },
        {
          mData: 'resp_elaboração'
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

  function Carregar(id) {
        console.log(id)
        
        $.getJSON("../phpwsdb/prs_detalhado.php?id=" + id, function(data){
        

          $("#nome_beneficiario").val(data[0].nome_beneficiario);
          $("#unidade").val(data[0].unidade);
          $("#data_corrente").val(data[0].data_corrente);
          $("#composicao_familiar").val(data[0].composicao_familiar);
          $("#historia_vida").val(data[0].hist_vida);
          $("#cuidados_clinicos").val(data[0].hist_cuidados_clinicos);
          $("#formacao_educacional").val(data[0].form_educacional);
          $("#mundo_trabalho").val(data[0].mundo_trabalho);
          $("#meta_curto1").val(data[0].cp_m1);
          $("#responsabilidade_curto1").val(data[0].cp_r1);
          $("#meta_curto2").val(data[0].cp_m2);
          $("#responsabilidade_curto2").val(data[0].cp_r2);
          $("#meta_curto3").val(data[0].cp_m3);
          $("#responsabilidade_curto3").val(data[0].cp_r3);
          $("#meta_curto4").val(data[0].cp_m4);
          $("#responsabilidade_curto4").val(data[0].cp_r4);
          $("#meta_medio1").val(data[0].mp_m1);
          $("#responsabilidade_medio1").val(data[0].mp_r1);
          $("#meta_medio2").val(data[0].mp_m2);
          $("#responsabilidade_medio2").val(data[0].mp_r2);
          $("#meta_medio3").val(data[0].mp_m3);
          $("#responsabilidade_medio3").val(data[0].mp_r3);
          $("#meta_medio4").val(data[0].mp_m4);
          $("#responsabilidade_medio4").val(data[0].mp_r4);
          $("#meta_longo1").val(data[0].lp_m1);
          $("#responsabilidade_longo1").val(data[0].lp_r1);
          $("#meta_longo2").val(data[0].lp_m2);
          $("#responsabilidade_longo2").val(data[0].lp_r2);
          $("#meta_longo3").val(data[0].lp_m3);
          $("#responsabilidade_longo3").val(data[0].lp_r3);
          $("#meta_longo4").val(data[0].lp_m4);
          $("#responsabilidade_longo4").val(data[0].lp_r4);
          $("#observacoes").val(data[0].obs1);
          $("#responsavel_pela_elaboracao").val(data[0].resp_elaboração);
          $("#data_reavaliacao").val(data[0].data_reavaliacao);
          $("#pontos_reavaliacao").val(data[0].pontos_reavaliacao_prs);
          $("#observacoes_geral").val(data[0].obs2);
        

        
        
          $("#modalUsuario").modal('show');

        //$("#modalUsuario").modal('show');
      });
        
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