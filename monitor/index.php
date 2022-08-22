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
    <title>FPA - Fundação Porta Aberta</title>

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
</head>

    <!-- Carrega o Menu para a EPS - Diretor -->
    <?php if ($_SESSION['eps'] === '26') include __DIR__.'/header/diretor_header.php'; ?>

    <!-- Carrega o Menu para a EPS - Coordenador -->
    <?php if ($_SESSION['eps'] === '28') include __DIR__.'/header/coordenador_header.php'; ?>

    <!-- Carrega o Menu para a EPS - Educador -->
    <?php if ($_SESSION['eps'] === '29') include __DIR__.'/header/educador_header.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de Beneficiário</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Unidade</label>
                                        <input type="text" class="form-control" id="unidade" placeholder="Unidade">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Data de Cadastramento</label>
                                        <input type="date" class="form-control" id="data_cadastro" placeholder="DD/MM/AAAA">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Encaminhado por</label>
                                        <input type="" class="form-control" id="encaminhado_por" placeholder="Encaminhado por">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Número do Beneficiário (POT)</label>
                                        <input type="text" class="form-control" id="numero_beneficiario" placeholder="Número do Beneficiário">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nome de Registro</label>
                                        <input type="" class="form-control" id="nome_registro" placeholder="Nome do Beneficiário">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nome Social</label>
                                        <input type="text" class="form-control" id="nome_social" placeholder="Nome Social">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nacionalidade</label>
                                        <input type="" class="form-control" id="nacionalidade" placeholder="Nacionalidade">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Naturalidade</label>
                                        <input type="" class="form-control" id="naturalidade" placeholder="Naturalidade">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Sexo/Gênero</label>
                                        <select id="sexo" class="form-control">
                                            <option selected value=""></option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Etnia</label>
                                        <select id="etnia" class="form-control">
                                            <option selected value=""></option>
                                            <option value="branca">Branca</option>
                                            <option value="negra">Negra</option>
                                            <option value="amarela">Amarela</option>
                                            <option value="parda">Parda</option>
                                            <option value="indigena">Indígena</option>
                                            <option value="nao declarado">Não Declarado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Orientação Sexual</label>
                                        <select id="orientacao_sexual" class="form-control">
                                            <option selected value=""></option>
                                            <option value="heterossexual">Heterossexual</option>
                                            <option value="homossexual">Homossexual</option>
                                            <option value="lesbica">Lésbica</option>
                                            <option value="bissexual">Bissexual</option>
                                            <option value="panssexual">Panssexual</option>
                                            <option value="nao declarado">Não Declarado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Data Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" placeholder="DD/MM/AAAA">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Estado Civil</label>
                                        <select id="estado_civil" class="form-control">
                                            <option selected value=""></option>
                                            <option value="solteiro">Solteiro(a)</option>
                                            <option value="casado">Casado(a)</option>
                                            <option value="divorciado">Divorciado(a)</option>
                                            <option value="separado">Separado(a)</option>
                                            <option value="viuvo">Viúvo(a)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Renda Familiar</label>
                                        <input type="number" class="form-control" id="renda_familiar" placeholder="Renda Familiar">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Benefício</label>
                                        <input type="text" class="form-control" id="beneficio" placeholder="Nome do Benefício">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tipo de Moradia</label>
                                        <select id="tipo_moradia" class="form-control">
                                            <option selected></option>
                                            <option>Residência Prórpia</option>
                                            <option>Residência Aluguel</option>
                                            <option>Centro de Acolhida</option>
                                            <option>SIAT II</option>
                                            <option>SIAT III</option>
                                            <option>Situação de Rua</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>RG</label>
                                        <input type="number" class="form-control" id="rg" placeholder="RG">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Órgão Emissor</label>
                                        <input type="" class="form-control" id="orgao_emissor" placeholder="Órgão Emissor">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>UF</label>
                                        <select id="uf" class="form-control">
                                            <option selected></option>
                                            <option>RO</option>
                                            <option>AC</option>
                                            <option>AM</option>
                                            <option>RR</option>
                                            <option>PA</option>
                                            <option>AP</option>
                                            <option>TO</option>
                                            <option>MA</option>
                                            <option>PI</option>
                                            <option>CE</option>
                                            <option>RN</option>
                                            <option>PB</option>
                                            <option>PE</option>
                                            <option>AL</option>
                                            <option>SE</option>
                                            <option>BA</option>
                                            <option>MG</option>
                                            <option>ES</option>
                                            <option>RJ</option>
                                            <option>SP</option>
                                            <option>PR</option>
                                            <option>SC</option>
                                            <option>RS</option>
                                            <option>MS</option>
                                            <option>MT</option>
                                            <option>GO</option>
                                            <option>DF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>CPF</label>
                                        <input type="number" class="form-control" id="cpf" placeholder="CPF">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Cartão SUS</label>
                                        <input type="number" class="form-control" id="cartao_sus" placeholder="Cartão SUS">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Cartão Cidadão</label>
                                        <input type="number" class="form-control" id="cartao_cidadao" placeholder="Cartão Cidadão">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Telefone Fixo</label>
                                        <input type="number" class="form-control" id="telefone_fixo" placeholder="(DDD)XXXX-XXXX">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telefone Celular</label>
                                        <input type="number" class="form-control" id="telefone_celular" placeholder="(DDD)XXXXX-XXXX">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Configuração Familiar</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Nome da Mãe</label>
                                        <input type="text" class="form-control" id="nome_mae" placeholder="Nome da Mãe">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nome da Pai</label>
                                        <input type="text" class="form-control" id="nome_pai" placeholder="Nome da Pai">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Filho(s)/Dependente(s)</label>
                                        <select id="qtd_filho" class="form-control">
                                            <option selected value="0"></option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>1. Nome</label>
                                        <input type="text" class="form-control" id="nome_filho1" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Idade</label>
                                        <input type="number" class="form-control" id="idade_filho1" placeholder="Idade">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>2. Nome</label>
                                        <input type="text" class="form-control" id="nome_filho2" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Idade</label>
                                        <input type="number" class="form-control" id="idade_filho2" placeholder="Idade">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>3. Nome</label>
                                        <input type="text" class="form-control" id="nome_filho3" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Idade</label>
                                        <input type="number" class="form-control" id="idade_filho3" placeholder="Idade">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>4. Nome</label>
                                        <input type="text" class="form-control" id="nome_filho4" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Idade</label>
                                        <input type="number" class="form-control" id="idade_filho4" placeholder="Idade">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>5. Nome</label>
                                        <input type="text" class="form-control" id="nome_filho5" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Idade</label>
                                        <input type="number" class="form-control" id="idade_filho5" placeholder="Idade">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Vida Escolar</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Grau de Escolaridade</label>
                                        <select id="grau_escolaridade" class="form-control">
                                            <option selected value=""></option>
                                            <option value="Nao Alfabetizado">Não Alfabetizado</option>
                                            <option value="Alfabetizado">Alfabetizado (sabe ler e escrever)</option>
                                            <option value="Ens Fund Incompleto">Ens. Fund. Incompleto</option>
                                            <option value="Ens Fund Completo">Ens. Fund. Completo</option>
                                            <option value="Ens Med Incompleto">Ens. Méd. Incompleto</option>
                                            <option value="Ens Med Completo">Ens. Méd. Completo</option>
                                            <option value="Ens Sup Incompleto">Ens. Sup. Incompleto</option>
                                            <option value="Ens Superior Completo">Ens. Superior Completo</option>
                                            <option value="Pos Graduacao">Pós-Graduação</option>
                                            <option value="Cursando">Cursando</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nome do Curso, caso esteja cursando</label>
                                        <input type="text" class="form-control" id="nome_curso_se_cursando" placeholder="Nome do Curso">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Informações de Saúde</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Em caso de deficiência, especifique</label>
                                        <input type="text" class="form-control" id="deficiencia" placeholder="Deficiência(s)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Em caso de necessidade especial, especifique</label>
                                        <input type="text" class="form-control" id="necessidade_especial" placeholder="Necessidade(s) especial(is)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Em caso de gestação, escolha</label>
                                        <select id="gestacao" class="form-control">
                                            <option selected value=""></option>
                                            <option value="1 a 6">1 a 6 semanas</option>
                                            <option value="7 a 10">7 a 10 semanas</option>
                                            <option value="11 a 14">11 a 14 semanas</option>
                                            <option value="15 a 18">15 a 18 semanas</option>
                                            <option value="19 a 23">19 a 23 semanas</option>
                                            <option value="24 a 28">24 a 28 semanas</option>
                                            <option value="29 a 33">29 a 33 semanas</option>
                                            <option value="34 a 37">34 a 37 semanas</option>
                                            <option value="38 a 42">38 a 42 semanas</option>
                                            <option value="Nao sabe responder">Não sabe responder</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Em caso de doença, especifique</label>
                                        <input type="text" class="form-control" id="doenca" placeholder="Doença(s)">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Em caso de tratamento, especifique</label>
                                        <input type="text" class="form-control" id="tratamento" placeholder="Tratamento(s)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Substancias Psicoativas</label> <br>
                                        <form id="substancia_psicoativa" class="container" style="margin-top:20px;">
                                            <input type="checkbox" name="alcool" value="alcool"> Álcool <br>
                                            <input type="checkbox" name="tabaco" value="tabaco"> Tabaco <br>
                                            <input type="checkbox" name="maconha" value="maconha"> Maconha <br>
                                            <input type="checkbox" name="cocaina" value="cocaina"> Cocaína <br>
                                            <input type="checkbox" name="crack" value="crack"> Crack <br>
                                            <input type="checkbox" name="ecstasy" value="ecstasy"> Ecstasy <br>
                                            <input type="checkbox" name="lsd" value="lsd"> LSD <br>
                                            <input type="checkbox" name="cloroformio" value="cloroformio"> Clorofórmio <br>
                                            <input type="checkbox" name="heroina" value="heroina"> Heroína <br>
                                            <input type="checkbox" name="outros" value="outros"> Outros <br>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Periodicidade</label>
                                        <input type="text" class="form-control" id="peridiocidade" placeholder="Periodicidade">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tempo de Uso</label>
                                        <input type="text" class="form-control" id="tempo_uso" placeholder="Tempo de Uso">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Medicação(ões)</label>
                                        <input type="text" class="form-control" id="medicacao" placeholder="Medicação(ões)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>UBS de referência</label>
                                        <input type="text" class="form-control" id="ubs_referencia" placeholder="UBS">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Serviço RAPS de Referência</label>
                                        <input type="text" class="form-control" id="raps_referencia" placeholder="RAPS">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Histórico Profissional</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Data do Último Trabalho (CTPS assinada)</label>
                                        <input type="date" class="form-control" id="ultimo_ctps_assinada" placeholder="DD/MM/AAAA">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Data do Último Trabalho (sem CTPS assinada)</label>
                                        <input type="date" class="form-control" id="ultimo_ctps_nao_assinada" placeholder="DD/MM/AAAA">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Experiências Profissionais Anteriores</label>
                                        <input type="text" class="form-control" id="experiencia_anterior" placeholder="Experiências">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Qual seu Trabalho mais Marcante</label>
                                        <input type="text" class="form-control" id="trabalho_marcante" placeholder="Trabalho Marcante">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Área de Interesse Atual</label>
                                        <input type="text" class="form-control" id="area_interesse" placeholder="Área de Interesse">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Curso(s) Anteriore(s)</label>
                                        <input type="text" class="form-control" id="curso_anterior" placeholder="Curso(s) Anteriore(s)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Capacitação(ões) Tecnica(s)</label>
                                        <input type="text" class="form-control" id="capacitacao_tecnica" placeholder="Capacitação(ões) Tecnica(s)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Atividade(s) Complementar(es)</label>
                                        <input type="text" class="form-control" id="atividade_complementar" placeholder="Atividade(s) Complementar(es)">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Situação Jurídica</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Tem Pendência alguma Judicial?</label>
                                        <select id="pendencia_judicial" class="form-control">
                                            <option selected value=""></option>
                                            <option value="sim">Sim</option>
                                            <option value="nao">Não</option>
                                            <option value="nao declarado">Não Declarado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Qual(is) Pendência(s) Judicial(is)</label>
                                        <input type="text" class="form-control" id="nome_pendencia_judicial" placeholder="Qual(is) Pendência(s) Judicial(is)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Egresso do Sistema Prisional?</label>
                                        <select id="egresso_sistema_prisional" class="form-control">
                                            <option selected value=""></option>
                                            <option value="sim">Sim</option>
                                            <option value="nao">Não</option>
                                            <option value="nao declarado">Não Declarado</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Programa Operação de Trabalho (POT)</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Processo formativo o qual será inserido</label>
                                        <select id="processo_formativo_inserido" class="form-control">
                                            <option selected value=""></option>
                                            <option value="artes e empreendedorismo">Artes e Empreendedorismo</option>
                                            <option value="auxiliar de cozinha">Auxiliar de Cozinha - Panificação e Confeitaria</option>
                                            <option value="higienizacao e limpeza">Higienização e Limpeza</option>
                                            <option value="corte e costura">Corte e Costura</option>
                                            <option value="horta">Horta</option>
                                            <option value="jardinagem">Jardinagem</option>
                                            <option value="reciclagem e empreendedorismo">Reciclagem e Empreendedorismo</option>
                                            <option value="servico e reparos">Serviço e Reparos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>O que você espera a partir da sua inserção no POT/FPA</label>
                                        <input type="text" class="form-control" id="o_que_espera" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Observações</label>
                                        <input type="text" class="form-control" id="observacoes" placeholder="">
                                    </div>
                                </div>
                                <br>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h5 class="h3 mb-0 text-gray-800">Referências</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Serviço de Referência</label>
                                        <input type="text" class="form-control" id="servico_referencia" placeholder="Serviço de Referência">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Técnico de Referência no Serviço</label>
                                        <input type="text" class="form-control" id="tecnico_referencia" placeholder="Técnico de Referência no Serviço">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Cargo/Função</label>
                                        <input type="text" class="form-control" id="cargo_tecnico" placeholder="Cargo/Função">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Contato</label>
                                        <input type="text" class="form-control" id="contato_tecnico" placeholder="(DDD)XXXXX-XXXX">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Território de Referência</label>
                                        <input type="text" class="form-control" id="territorio_referencia" placeholder="Território de Referência">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Técnico de Referência na FPA</label>
                                        <input type="text" class="form-control" id="tecnico_ref_fpa" placeholder="Território de Referência">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Profissional Responsável pelo Cadastro</label>
                                        <input type="text" class="form-control" id="responsavel_pelo_cadastro" placeholder="Profissional Responsável pelo Cadastro">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Data</label>
                                        <input type="date" class="form-control" id="data_atual" placeholder="DD/MM/AAAA">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="javascript:cadastro();">Cadastrar</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

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
                    <a class="btn btn-primary" href="index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="./vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="./js/demo/chart-area-demo.js"></script>
    <script src=".js/demo/chart-pie-demo.js"></script>
    <script>
        function LoggerSenha() {
            var acao = 'Alterando a propria senha'
            var nome = "<?php echo $nome; ?>";
            var dt = new Date();
            var datetime = `${dt.getDate().toString().padStart(2, '0')}/${(dt.getMonth()+1).toString().padStart(2, '0')}/${dt.getFullYear().toString().padStart(4, '0')} ${dt.getHours().toString().padStart(2, '0')}:${dt.getMinutes().toString().padStart(2, '0')}:${dt.getSeconds().toString().padStart(2, '0')}`;
            var jsonData = {
                usuario: nome,
                datetime: datetime,
                acao: acao,
                nomeAntigo: '',
                emailAntigo: '',
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
        //Pegando valores antigos para loggar
        var siglaAntiga;
        var pdvAntigo;
        var Id;
        var nome = "<?php echo $nome; ?>";

        function Logger() {
            var siglaNova = document.getElementById('ddlEps').value;
            var pdvNovo = document.getElementById('txtPdv').value;
            var nome = "<?php echo $nome; ?>";
            var dt = new Date();
            var datetime = `${
          dt.getDate().toString().padStart(2, '0')}/${
          (dt.getMonth()+1).toString().padStart(2, '0')}/${
          dt.getFullYear().toString().padStart(4, '0')} ${
          dt.getHours().toString().padStart(2, '0')}:${
          dt.getMinutes().toString().padStart(2, '0')}:${
          dt.getSeconds().toString().padStart(2, '0')}`;

            var alteraEps = 'Alteracao de EPS';
            var criaEps = 'Criacao de EPS';
            if (pdvAntigo == '' || pdvAntigo == null) {
                pdvAntigo = 'Todos';
            }
            if (pdvNovo == '') {
                pdvNovo = 'Todos';
            }
            if (Id != '') {

                var jsonData = {
                    usuario: nome,
                    datetime: datetime,
                    acao: alteraEps,
                    siglaAntiga: siglaAntiga,
                    pdvAntigo: pdvAntigo,
                    siglaNova: siglaNova,
                    pdvNovo: pdvNovo
                };
            } else {

                var jsonData = {
                    usuario: nome,
                    datetime: datetime,
                    acao: criaEps,
                    siglaAntiga: '',
                    pdvAntigo: '',
                    siglaNova: siglaNova,
                    pdvNovo: pdvNovo
                };
            }

            console.log(jsonData);

            $.ajax({
                url: "../phpwsdb/log_insert_eps.php",
                data: jsonData,
                type: 'POST',
                success: function(data) {
                    console.log('logs gravados com sucesso!');
                }
            });
        }

        var id = "<?php echo $eps ?>";

        function Listar() {
            var table = $('#dash1').DataTable();
            table.destroy();

            $($("#dash1").DataTable({
                dom: "Bfrtip",
                ajax: {
                    url: "../phpwsdb/get_paineis.php?id=" + id,
                    type: 'GET'
                    //body: form
                },

                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "columns": [{
                        mData: 'Id'
                    },
                    {
                        mData: 'Sigla'
                    },
                    {
                        mData: 'Descr'
                    },
                    {
                        mData: 'Urlp'
                    }
                ]
            }));


            $('#dash1 tbody').on('dblclick', 'td', function() {
                var $row = $(this).closest("tr"), // Finds the closest row <tr> 
                    $tds = $row.find("td:nth-child(4)"); // Finds the 2nd <td> element  
                var url = $tds.text();

                $.ajax({
                    method: "POST",
                    url: "bi.php",
                    data: "{ $url: " + url + "}"
                });

                //window.location.href="bi.php";
                window.location = "bi.php?url=" + url;
                Carregar($tds.text());
            });
        }

        $(document).ready(async function() {
            await Listar();
            //await CarregarComboPDV();


            var pdv = <?php echo json_encode($pdv) ?>;

            console.log(pdv.length);
            /*
            if (pdv.length > 0){            
                $('#li-bi').addClass('d-lg-none');
            }
            */
        });

        function CarregarComboPDV() {
            $.getJSON("../phpwsdb/pdv_get.php", function(data) {
                for (var i = 0, len = data.length; i < len; i++) {
                    jQuery('#ddlEps').append($('<option>', {
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
            var Id = $("#hidIdUsuario").val();
            var eps = $("#ddlEps").val();
            var descr = $("#txtDescr").val();
            var url = $("#txtPdv").val();

            if (Id.length == 0) {
                Id = 0;
            }

            var erro = '';

            if (eps.length == 0) {
                erro += '- Eps <br />';
            }

            if (descr.length == 0) {
                erro += '- Descr <br />';
            }

            console.log(erro.length);

            if (erro.length != 0) {
                displayCustomMessage('divModalUsuarioValidacao', erro, 'error');
                return;
            } else {
                var jsonData = {
                    Id: Id,
                    eps: eps,
                    descr: descr,
                    url: url
                };
                console.log(jsonData);
                $.ajax({
                    url: "../phpwsdb/painel_salvar.php",
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

        function ClearForm() {
            $("#unidade").val('');
            $("#data_cadastro").val('');
            $("#encaminhado_por").val('');
            $("#numero_beneficiario").val('');
            $("#nome_registro").val('');
            $("#nome_social").val('');
            $("#nacionalidade").val('');
            $("#naturalidade").val('');
            $("#sexo").val('');
            $("#etnia").val('');
            $("#orientacao_sexual").val('');
            $("#data_nascimento").val('');
            $("#estado_civil").val('');
            $("#renda_familiar").val('');
            $("#beneficio").val('');
            $("#tipo_moradia").val('');
            $("#endereco").val('');
            $("#rg").val('');
            $("#orgao_emissor").val('');
            $("#uf").val('');
            $("#cpf").val('');
            $("#cartao_sus").val('');
            $("#cartao_cidadao").val('');
            $("#telefone_fixo").val('');
            $("#telefone_celular").val('');
            $("#nome_mae").val('');
            $("#nome_pai").val('');
            $("#qtd_filho").val('');
            $("#nome_filho1").val('');
            $("#idade_filho1").val('');
            $("#nome_filho2").val('');
            $("#idade_filho2").val('');
            $("#nome_filho3").val('');
            $("#idade_filho3").val('');
            $("#nome_filho4").val('');
            $("#idade_filho4").val('');
            $("#nome_filho5").val('');
            $("#idade_filho5").val('');
            $("#grau_escolaridade").val('');
            $("#nome_curso_se_cursando").val('');
            $("#deficiencia").val('');
            $("#necessidade_especial").val('');
            $("#gestacao").val('');
            $("#doenca").val('');
            $("#tratamento").val('');
            $("#substancia_psicoativa").val('');
            $("#peridiocidade").val('');
            $("#tempo_uso").val('');
            $("#medicacao").val('');
            $("#ubs_referencia").val('');
            $("#raps_referencia").val('');
            $("#ultimo_ctps_assinada").val('');
            $("#ultimo_ctps_nao_assinada").val('');
            $("#experiencia_anterior").val('');
            $("#trabalho_marcante").val('');
            $("#area_interesse").val('');
            $("#curso_anterior").val('');
            $("#capacitacao_tecnica").val('');
            $("#atividade_complementar").val('');
            $("#pendencia_judicial").val('');
            $("#nome_pendencia_judicial").val('');
            $("#egresso_sistema_prisional").val('');
            $("#processo_formativo_inserido").val('');
            $("#o_que_espera").val('');
            $("#observacoes").val('');
            $("#servico_referencia").val('');
            $("#tecnico_referencia").val('');
            $("#cargo_tecnico").val('');
            $("#contato_tecnico").val('');
            $("#territorio_referencia").val('');
            $("#tecnico_ref_fpa").val('');
            $("#responsavel_pelo_cadastro").val('');
            $("#data_atual").val('');
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

        function cadastro() {
            event.preventDefault()

            const unidade = $("#unidade").val();
            const data_cadastro = $("#data_cadastro").val();
            const encaminhado_por = $("#encaminhado_por").val();
            const numero_beneficiario = $("#numero_beneficiario").val();
            const nome_registro = $("#nome_registro").val();
            const nome_social = $("#nome_social").val();
            const nacionalidade = $("#nacionalidade").val();
            const naturalidade = $("#naturalidade").val();
            const sexo = $("#sexo").val();
            const etnia = $("#etnia").val();
            const orientacao_sexual = $("#orientacao_sexual").val();
            const data_nascimento = $("#data_nascimento").val();
            const estado_civil = $("#estado_civil").val();
            const renda_familiar = $("#renda_familiar").val();
            const beneficio = $("#beneficio").val();
            const tipo_moradia = $("#tipo_moradia").val();
            const endereco = $("#endereco").val();
            const rg = $("#rg").val();
            const orgao_emissor = $("#orgao_emissor").val();
            const uf = $("#uf").val();
            const cpf = $("#cpf").val();
            const cartao_sus = $("#cartao_sus").val();
            const cartao_cidadao = $("#cartao_cidadao").val();
            const telefone_fixo = $("#telefone_fixo").val();
            const telefone_celular = $("#telefone_celular").val();
            const nome_mae = $("#nome_mae").val();
            const nome_pai = $("#nome_pai").val();
            const qtd_filho = $("#qtd_filho").val();
            const nome_filho1 = $("#nome_filho1").val();
            const idade_filho1 = $("#idade_filho1").val();
            const nome_filho2 = $("#nome_filho2").val();
            const idade_filho2 = $("#idade_filho2").val();
            const nome_filho3 = $("#nome_filho3").val();
            const idade_filho3 = $("#idade_filho3").val();
            const nome_filho4 = $("#nome_filho4").val();
            const idade_filho4 = $("#idade_filho4").val();
            const nome_filho5 = $("#nome_filho5").val();
            const idade_filho5 = $("#idade_filho5").val();
            const grau_escolaridade = $("#grau_escolaridade").val();
            const nome_curso_se_cursando = $("#nome_curso_se_cursando").val();
            const deficiencia = $("#deficiencia").val();
            const necessidade_especial = $("#necessidade_especial").val();
            const gestacao = $("#gestacao").val();
            const doenca = $("#doenca").val();
            const tratamento = $("#tratamento").val();
            var substancia_psicoativa = [];
            var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
            for (var i = 0; i < checkboxes.length; i++) {
                substancia_psicoativa.push(checkboxes[i].value);
            };
            const peridiocidade = $("#peridiocidade").val();
            const tempo_uso = $("#tempo_uso").val();
            const medicacao = $("#medicacao").val();
            const ubs_referencia = $("#ubs_referencia").val();
            const raps_referencia = $("#raps_referencia").val();
            const ultimo_ctps_assinada = $("#ultimo_ctps_assinada").val();
            const ultimo_ctps_nao_assinada = $("#ultimo_ctps_nao_assinada").val();
            const experiencia_anterior = $("#experiencia_anterior").val();
            const trabalho_marcante = $("#trabalho_marcante").val();
            const area_interesse = $("#area_interesse").val();
            const curso_anterior = $("#curso_anterior").val();
            const capacitacao_tecnica = $("#capacitacao_tecnica").val();
            const atividade_complementar = $("#atividade_complementar").val();
            const pendencia_judicial = $("#pendencia_judicial").val();
            const nome_pendencia_judicial = $("#nome_pendencia_judicial").val();
            const egresso_sistema_prisional = $("#egresso_sistema_prisional").val();
            const processo_formativo_inserido = $("#processo_formativo_inserido").val();
            const o_que_espera = $("#o_que_espera").val();
            const observacoes = $("#observacoes").val();
            const servico_referencia = $("#servico_referencia").val();
            const tecnico_referencia = $("#tecnico_referencia").val();
            const cargo_tecnico = $("#cargo_tecnico").val();
            const contato_tecnico = $("#contato_tecnico").val();
            const territorio_referencia = $("#territorio_referencia").val();
            const tecnico_ref_fpa = $("#tecnico_ref_fpa").val();
            const responsavel_pelo_cadastro = $("#responsavel_pelo_cadastro").val();
            const data_atual = $("#data_atual").val();

            var jsonData = {
                unidade: unidade,
                data_cadastro: data_cadastro,
                encaminhado_por: encaminhado_por,
                ativo: 1,

                numero_beneficiario: numero_beneficiario,
                nome_registro: nome_registro,
                nome_social: nome_social,
                nacionalidade: nacionalidade,
                Naturalidade: naturalidade,
                sexo: sexo,
                etnia: etnia,
                orientacao_sexual: orientacao_sexual,
                data_nascimento: data_nascimento,
                estado_civil: estado_civil,
                renda_familiar: renda_familiar,
                beneficio: beneficio,
                tipo_moradia: tipo_moradia,
                endereco: endereco,
                rg: rg,
                orgao_emissor: orgao_emissor,
                uf_emissor: uf,
                cpf: cpf,
                cartao_sus: cartao_sus,
                cartao_cidadao: cartao_cidadao,
                telefone_fixo: telefone_fixo,
                telefone_celular: telefone_celular,
                nome_mae: nome_mae,
                nome_pai: nome_pai,
                qtd_filhos: qtd_filho,
                nome_filho1: nome_filho1,
                idade_filho1: idade_filho1,
                nome_filho2: nome_filho2,
                idade_filho2: idade_filho2,
                nome_filho3: nome_filho3,
                idade_filho3: idade_filho3,
                nome_filho4: nome_filho4,
                idade_filho4: idade_filho4,
                nome_filho5: nome_filho5,
                idade_filho5: idade_filho5,
                grau_escolaridade: grau_escolaridade,
                nome_curso_se_cursando: nome_curso_se_cursando,
                deficiencia: deficiencia,
                necessidade_educacional: necessidade_especial,
                gestante: gestacao,
                doenca: doenca,
                tratamento: tratamento,
                substancia_psicoativa: substancia_psicoativa.join(),
                peridiocidade: peridiocidade,
                tempo_uso: tempo_uso,
                medicacao: medicacao,
                ubs_referencia: ubs_referencia,
                raps_referencia: raps_referencia,
                ultimo_trabalho_formal: ultimo_ctps_assinada,
                ultimo_trabalho_informal: ultimo_ctps_nao_assinada,
                experiencias_anteriores: experiencia_anterior,
                trabalho_marcante: trabalho_marcante,
                area_interesse: area_interesse,
                cursos_anteriores: curso_anterior,
                capacitacao_tecnica: capacitacao_tecnica,
                atividade_complementar: atividade_complementar,
                pendencia_judicial: pendencia_judicial,
                tipo_pendencia_judicial: nome_pendencia_judicial,
                egresso_sistema_prisional: egresso_sistema_prisional,
                processo_formativo_inserido: processo_formativo_inserido,
                o_que_espera: o_que_espera,
                observacoes: observacoes,
                servico_referencia: servico_referencia,
                tecnico_referencia: tecnico_referencia,
                cargo_tecnico: cargo_tecnico,
                contato_tecnico: contato_tecnico,
                territorio_referencia: territorio_referencia,
                tecnico_ref_fpa: tecnico_ref_fpa,
                responsavel_pelo_cadastro: responsavel_pelo_cadastro,
                data_corrente: data_atual
            }

            console.log(jsonData);

            $.ajax({
                url: "../phpwsdb/cadastro_beneficiario.php",
                data: jsonData,
                type: 'POST',
                success: function(data) {
                    alert("Beneficiário cadastrado com sucesso!")

                    ClearForm();
                }
            });
        }
    </script>
</body>

</html>