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
  <title>FPA - PRS</title>

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
  <!-- Select -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet" />
  <!--JQuery -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.min.css" rel="stylesheet">
  <script src="js/config.js?versao=1" type="text/javascript"></script>
</head>
<!-- Carrega o Menu para a EPS - Administrador -->
<?php if ($_SESSION['eps'] === '1') include __DIR__ . '/header/administrador_header.php'; ?>

<!-- Carrega o Menu para a EPS - Diretor(a), Coordenador(a) Geral, Coordenador(a) Pedagógico(a) -->
<?php if ($_SESSION['eps'] === '2') include __DIR__ . '/header/diretor_header.php'; ?>

<!-- Controle de acessos para a EPS - Coordenador(a) Administrativo, Técnico(a) Administrador(a) -->
<?php if ($_SESSION['eps'] === '3') header('Location: beneficiarios.php'); ?>

<!-- Controle de acessos para a EPS - Educador, Agente de Ação Social -->
<?php if ($_SESSION['eps'] === '4') header('Location: beneficiarios.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <!-- Content Header (Page header) -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Projeto de Ressocialização Singular</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <form>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Nome do Beneficiário:</label>
            <select id="nome_beneficiario" class="selectpicker form-control" title="Nome" data-live-search="true">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Unidade:</label>
            <input type="text" class="form-control" id="unidade" placeholder="Unidade">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Data:</label>
            <input type="date" class="form-control" id="data_corrente" placeholder="Data">
          </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class="h3 mb-0 text-gray-800" style="font-size:25px">1. Diagnóstico Situacional</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Composição Familiar:</label>
            <textarea class="form-control" id="composicao_familiar" rows="4"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label>História de Vida (Linha do Tempo, até o contexto atual, rotina e vida social):</label>
            <textarea class="form-control" id="historia_vida" rows="4"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label>Histórico de Cuidados Clínicos (tratamentos anteriores):</label>
            <textarea class="form-control" id="cuidados_clinicos" rows="4"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label>Formação Educacional (cursos realizados, desejo de retomada dos estudos):</label>
            <textarea class="form-control" id="formacao_educacional" rows="4"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label>Mundo do Trabalho (qual sentido, momentos marcantes, planos, desejos/sonhos):</label>
            <textarea class="form-control" id="mundo_trabalho" rows="4"></textarea>
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
            <textarea class="form-control" id="meta_curto1" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>1ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_curto1" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>2ª Meta:</label>
            <textarea class="form-control" id="meta_curto2" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>2ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_curto2" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>3ª Meta:</label>
            <textarea class="form-control" id="meta_curto3" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>3ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_curto3" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>4ª Meta:</label>
            <textarea class="form-control" id="meta_curto4" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>4ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_curto4" rows="2"></textarea>
          </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class="h3 mb-0 text-gray-800" style="font-size:20px">Médio Prazo (6 a 12 meses)</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>1ª Meta:</label>
            <textarea class="form-control" id="meta_medio1" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>1ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_medio1" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>2ª Meta:</label>
            <textarea class="form-control" id="meta_medio2" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>2ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_medio2" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>3ª Meta:</label>
            <textarea class="form-control" id="meta_medio3" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>3ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_medio3" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>4ª Meta:</label>
            <textarea class="form-control" id="meta_medio4" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>4ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_medio4" rows="2"></textarea>
          </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class="h3 mb-0 text-gray-800" style="font-size:20px">Longo Prazo (12 a 24 meses)</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>1ª Meta:</label>
            <textarea class="form-control" id="meta_longo1" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>1ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_longo1" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>2ª Meta:</label>
            <textarea class="form-control" id="meta_longo2" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>2ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_longo2" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>3ª Meta:</label>
            <textarea class="form-control" id="meta_longo3" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>3ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_longo3" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>4ª Meta:</label>
            <textarea class="form-control" id="meta_longo4" rows="2"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label>4ª Responsabilidade (como agir):</label>
            <textarea class="form-control" id="responsabilidade_longo4" rows="2"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>OBSERVAÇÕES (identificação de demandas, potencialidades, vulnerabilidades):</label>
            <textarea class="form-control" id="observacoes" rows="3"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Responsável pela Elaboração:</label>
            <input type="text" class="form-control" id="responsavel_pela_elaboracao" placeholder="Nome do Responsável">
          </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class="h3 mb-0 text-gray-800" style="font-size:25px">3. Reavaliação</h5>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Data de Reavaliação:</label>
            <input type="date" class="form-control" id="data_reavaliacao" placeholder="Data">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Pontos a serem reavaliados do PRS construído:</label>
            <textarea class="form-control" id="pontos_reavaliacao" rows="8"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Observações:</label>
            <textarea class="form-control" id="observacoes_geral" rows="8"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="Salvar();">Salvar novo PRS</button>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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
<!-- Select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/js/bootstrap-select.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="./js/sb-admin-2.min.js"></script>
<script>
  var id = "<?php echo $eps ?>";

  $(document).ready(function() {
    CarregarComboPDV();
    console.log('pasou aqui');
  });

  function CarregarComboPDV() {
    $.getJSON("../phpwsdb/get_nomes.php", function(data) {
      for (var i = 0, len = data.length; i < len; i++) {
        $('#nome_beneficiario').append($('<option>', {
          value: data[i].nome_registro,
          text: data[i].nome_registro
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

    $.getJSON("../phpwsdb/painel_get_id.php?id=" + id, function(data) {
      $("#hidIdUsuario").val(data[0].Id);
      $("#ddlEps").val(data[0].EpsId);
      $("txtDescr").val(data[0].Descricao)
      $("#txtPdv").val(data[0].Pdv);

      //pdvAntigo = (data[0].Pdv);
      //siglaAntiga = (data[0].Sigla);
      Id = (data[0].Id);
      $("#modalUsuario").modal('show');
    });
  }

  function SalvarNovaSenha() {
    var id = $("#txtID").val();
    var senha = $("#txtSenha").val();
    var confirmacao = $("#txtSenhaConfirmacao").val();
    var erro = '';
    if (senha != confirmacao) {
      erro += '- Senha e confirmação precisam ser iguais <br />';
    }
    if (senha == '') {
      erro += '- Senha e confirmação não podem ser vazias <br />';
    }
    console.log(erro.length);

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

      var dt = new Date();

      var datetime = `${
          dt.getDate().toString().padStart(2, '0')}/${
          (dt.getMonth()+1).toString().padStart(2, '0')}/${
          dt.getFullYear().toString().padStart(4, '0')} ${
          dt.getHours().toString().padStart(2, '0')}:${
          dt.getMinutes().toString().padStart(2, '0')}:${
          dt.getSeconds().toString().padStart(2, '0')}`;

      var jsonDataLog = {
        usuario: nome,
        datetime: datetime,
        acao: 'Mudanca de senha de usuario',
        valorAntigo: '',
        valorNovo: ''
      };
      $.ajax({
        url: "../phpwsdb/log_insert_eps.php",
        data: jsonDataLog,
        type: 'POST',
        success: function(data) {
          console.log('Logs gerados com sucesso!');
        }
      });

      ClearForm();
    }

  }

  function Salvar() {
    event.preventDefault()
    var nome_beneficiario = $("#nome_beneficiario").val();
    var unidade = $("#unidade").val();
    var data_corrente = $("#data_corrente").val();
    var composicao_familiar = $("#composicao_familiar").val();
    var historia_vida = $("#historia_vida").val();
    var cuidados_clinicos = $("#cuidados_clinicos").val();
    var formacao_educacional = $("#formacao_educacional").val();
    var mundo_trabalho = $("#mundo_trabalho").val();
    var meta_curto1 = $("#meta_curto1").val();
    var responsabilidade_curto1 = $("#responsabilidade_curto1").val();
    var meta_curto2 = $("#meta_curto2").val();
    var responsabilidade_curto2 = $("#responsabilidade_curto2").val();
    var meta_curto3 = $("#meta_curto3").val();
    var responsabilidade_curto3 = $("#responsabilidade_curto3").val();
    var meta_curto4 = $("#meta_curto4").val();
    var responsabilidade_curto4 = $("#responsabilidade_curto4").val();
    var meta_medio1 = $("#meta_medio1").val();
    var responsabilidade_medio1 = $("#responsabilidade_medio1").val();
    var meta_medio2 = $("#meta_medio2").val();
    var responsabilidade_medio2 = $("#responsabilidade_medio2").val();
    var meta_medio3 = $("#meta_medio3").val();
    var responsabilidade_medio3 = $("#responsabilidade_medio3").val();
    var meta_medio4 = $("#meta_medio4").val();
    var responsabilidade_medio4 = $("#responsabilidade_medio4").val();
    var meta_longo1 = $("#meta_longo1").val();
    var responsabilidade_longo1 = $("#responsabilidade_longo1").val();
    var meta_longo2 = $("#meta_longo2").val();
    var responsabilidade_longo2 = $("#responsabilidade_longo2").val();
    var meta_longo3 = $("#meta_longo3").val();
    var responsabilidade_longo3 = $("#responsabilidade_longo3").val();
    var meta_longo4 = $("#meta_longo4").val();
    var responsabilidade_longo4 = $("#responsabilidade_longo4").val();
    var observacoes = $("#observacoes").val();
    var responsavel_pela_elaboracao = $("#responsavel_pela_elaboracao").val();
    var data_reavaliacao = $("#data_reavaliacao").val();
    var pontos_reavaliacao = $("#pontos_reavaliacao").val();
    var observacoes_geral = $("#observacoes_geral").val();

    var jsonData = {
      nome_beneficiario: nome_beneficiario,
      unidade: unidade,
      data_corrente: data_corrente,
      composicao_familiar: composicao_familiar,
      hist_vida: historia_vida,
      hist_cuidados_clinicos: cuidados_clinicos,
      form_educacional: formacao_educacional,
      mundo_trabalho: mundo_trabalho,
      cp_m1: meta_curto1,
      cp_r1: responsabilidade_curto1,
      cp_m2: meta_curto2,
      cp_r2: responsabilidade_curto2,
      cp_m3: meta_curto3,
      cp_r3: responsabilidade_curto3,
      cp_m4: meta_curto4,
      cp_r4: responsabilidade_curto4,
      mp_m1: meta_medio1,
      mp_r1: responsabilidade_medio1,
      mp_m2: meta_medio2,
      mp_r2: responsabilidade_medio2,
      mp_m3: meta_medio3,
      mp_r3: responsabilidade_medio3,
      mp_m4: meta_medio4,
      mp_r4: responsabilidade_medio4,
      lp_m1: meta_longo1,
      lp_r1: responsabilidade_longo1,
      lp_m2: meta_longo2,
      lp_r2: responsabilidade_longo2,
      lp_m3: meta_longo3,
      lp_r3: responsabilidade_longo3,
      lp_m4: meta_longo4,
      lp_r4: responsabilidade_longo4,
      obs1: observacoes,
      resp_elaboração: responsavel_pela_elaboracao,
      data_reavaliacao: data_reavaliacao,
      pontos_reavaliacao_prs: pontos_reavaliacao,
      obs2: observacoes_geral
    }
    console.log(jsonData);
    if (nome_beneficiario == "" || unidade == "" || data_corrente == "") {
      alert("Preencha os campos de Nome, Unidade e Data!");
    } else {
      $.ajax({
        url: "../phpwsdb/cadastro_prs.php",
        data: jsonData,
        type: 'POST',
        success: function(data) {
          alert("PRS incluído com sucesso!")

          ClearForm();
        }
      });
    }

  }

  function ClearForm() {
    $("#nome_beneficiario").val('');
    $("#unidade").val('');
    $("#data_corrente").val('');
    $("#composicao_familiar").val('');
    $("#historia_vida").val('');
    $("#cuidados_clinicos").val('');
    $("#formacao_educacional").val('');
    $("#mundo_trabalho").val('');
    $("#meta_curto1").val('');
    $("#responsabilidade_curto1").val('');
    $("#meta_curto2").val('');
    $("#responsabilidade_curto2").val('');
    $("#meta_curto3").val('');
    $("#responsabilidade_curto3").val('');
    $("#meta_curto4").val('');
    $("#responsabilidade_curto4").val('');
    $("#meta_medio1").val('');
    $("#responsabilidade_medio1").val('');
    $("#meta_medio2").val('');
    $("#responsabilidade_medio2").val('');
    $("#meta_medio3").val('');
    $("#responsabilidade_medio3").val('');
    $("#meta_medio4").val('');
    $("#responsabilidade_medio4").val('');
    $("#meta_longo1").val('');
    $("#responsabilidade_longo1").val('');
    $("#meta_longo2").val('');
    $("#responsabilidade_longo2").val('');
    $("#meta_longo3").val('');
    $("#responsabilidade_longo3").val('');
    $("#meta_longo4").val('');
    $("#responsabilidade_longo4").val('');
    $("#observacoes").val('');
    $("#responsavel_pela_elaboracao").val('');
    $("#data_reavaliacao").val('');
    $("#pontos_reavaliacao").val('');
    $("#observacoes_geral").val('');
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