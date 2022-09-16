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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FPA - Unidades</title>

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
<?php if ($_SESSION['eps'] === '1') include __DIR__ . '/header/administrador_header.php'; ?>

<!-- Carrega o Menu para a EPS - Diretor(a), Coordenador(a) Geral, Coordenador(a) Pedagógico(a) -->
<?php if ($_SESSION['eps'] === '2') header('Location: beneficiarios.php'); ?>

<!-- Controle de acessos para a EPS - Coordenador(a) Administrativo, Técnico(a) Administrador(a) -->
<?php if ($_SESSION['eps'] === '3') header('Location: beneficiarios.php'); ?>

<!-- Controle de acessos para a EPS - Educador, Agente de Ação Social -->
<?php if ($_SESSION['eps'] === '4') header('Location: beneficiarios.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastrar Unidade</h3>
            <h5>Cadastre uma nova unidade no sistema</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body mb-5">
            <div id="validacao"></div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Unidade</label>
                        <input type="text" class="form-control" id="unidade" placeholder="Unidade">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contato</label>
                        <input type="" class="form-control" id="contato" placeholder="Contato">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                    </div>
                </div>
                <button id="submitButton" type="button" class="btn btn-primary"  onclick="Salvar();">Cadastrar</button>
            </form>
        </div>

        <div class="card-header">
            <h3 class="card-title">Alterar Unidade</h3>
            <h5>Altere uma unidade no sistema</h5>
        </div>
        <div class="card-body mb-5">
            <table id="dash1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>UNIDADE</th>
                        <th>CONTATO</th>
                        <th>ENDERECO</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>UNIDADE</th>
                        <th>CONTATO</th>
                        <th>ENDERECO</th>
                        <th>STATUS</th>
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
                Unidade
            </div>
            <div class="modal-body">
                <div id="modal_validacao"></div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nome:</label>
                            <input type="text" class="form-control" id="modal_unidade" placeholder="Unidade" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contato:</label>
                            <input type="text" class="form-control" id="modal_contato" placeholder="Contato">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Endereço:</label>
                            <input type="text" class="form-control" id="modal_endereco" placeholder="Endereço">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status:</label>
                            <select class="form-control" id="modal_status">
                                <option value=1>Ativo</option>
                                <option value=0>Inativo</option>
                                <input class="d-none" id="modal_id">
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button id="submitButton" type="button" class="btn btn-primary" onclick="Alterar()">Salvar</button>
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
                url: "../phpwsdb/lista_unidade.php",
                type: 'GET',
                dataType: 'json'
            },
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columns": [
                {
                    mData: 'id'
                },
                {
                    mData: 'nome_unidade'
                },
                {
                    mData: 'contato_unidade'
                },
                {
                    mData: 'endereco_unidade'
                },
                {
                    mData: 'ativo'
                }
            ]
        }))
    }

    $('#dash1 tbody').on('dblclick', 'td', function() {
        var $row = $(this).closest("tr"), // Finds the closest row <tr> 
            $tds = $row.find("td:nth-child(1)"); // Finds the 2nd <td> element     
        $tds1 = $row.find("td:nth-child(2)");
        Carregar($tds.text(), $tds1.text());
    });

    function Carregar(id) {
        $.getJSON("../phpwsdb/dados_unidades.php?id=" + id, function(data) {
            $('#modal_id').val(data[0].id);
            $('#modal_unidade').val(data[0].nome_unidade);
            $('#modal_contato').val(data[0].contato_unidade);
            $('#modal_endereco').val(data[0].endereco_unidade);
            $('#modal_status').val(data[0].ativo);

            $("#modalUsuario").modal('show');
        })
    }

    function Salvar() {
        var unidade = $("#unidade").val();
        var contato = $("#contato").val();
        var endereco = $("#endereco").val();
        var erro = '';

        if (unidade.length == 0) {
            erro += '- Unidade <br />';
        }
        if (contato.length == 0) {
            erro += '- Contato <br />';
        }
        if (endereco.length == 0) {
            erro += '- Endereço <br />';
        }
        if (erro.length != 0) {
            displayCustomMessage('validacao', erro, 'error');
            return;
        } else {
            var jsonData = {
                unidade: unidade,
                contato: contato,
                endereco: endereco
            };

            $.ajax({
                url: "../phpwsdb/unidade_salvar.php",
                data: jsonData,
                type: 'POST',
                success: function(data) {
                    window.location.reload();
                }
            });
        }
    }

    function Alterar() {
        var id = $("#modal_id").val();
        var unidade = $("#modal_unidade").val();
        var contato = $("#modal_contato").val();
        var endereco = $("#modal_endereco").val();
        var status = $("#modal_status").val();
        var erro = '';

        if (unidade.length == 0) {
            erro += '- Unidade <br />';
        }
        if (contato.length == 0) {
            erro += '- Contato <br />';
        }
        if (endereco.length == 0) {
            erro += '- Endereço <br />';
        }
        if (erro.length != 0) {
            displayCustomMessage('modal_validacao', erro, 'error');
            return;
        } else {
            var jsonData = {
                id: id,
                unidade: unidade,
                contato: contato,
                endereco: endereco,
                status: status
            };
            $.ajax({
                url: "../phpwsdb/unidade_alterar.php",
                data: jsonData,
                type: 'POST',
                success: function(data) {
                    window.location.reload();
                }
            });
        }
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
        $("#" + div).show(1000);
        $("#" + div).delay(1000).hide(1000);
    }

    $(document).ready(async function() {
        Listar();
    });
</script>