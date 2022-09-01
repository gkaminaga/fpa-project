<?php
require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$nome_beneficiario=$_POST['nome_beneficiario'];
$unidade=$_POST['unidade'];
$data_corrente=$_POST['data_corrente'];
$composicao_familiar=$_POST['composicao_familiar'];
$hist_vida=$_POST['hist_vida'];
$hist_cuidados_clinicos=$_POST['hist_cuidados_clinicos'];
$form_educacional=$_POST['form_educacional'];
$mundo_trabalho=$_POST['mundo_trabalho'];
$cp_m1=$_POST['cp_m1'];
$cp_r1=$_POST['cp_r1'];
$cp_m2=$_POST['cp_m2'];
$cp_r2=$_POST['cp_r2'];
$cp_m3=$_POST['cp_m3'];
$cp_r3=$_POST['cp_r3'];
$cp_m4=$_POST['cp_m4'];
$cp_r4=$_POST['cp_r4'];
$mp_m1=$_POST['mp_m1'];
$mp_r1=$_POST['mp_r1'];
$mp_m2=$_POST['mp_m2'];
$mp_r2=$_POST['mp_r2'];
$mp_m3=$_POST['mp_m3'];
$mp_r3=$_POST['mp_r3'];
$mp_m4=$_POST['mp_m4'];
$mp_r4=$_POST['mp_r4'];
$lp_m1=$_POST['lp_m1'];
$lp_r1=$_POST['lp_r1'];
$lp_m2=$_POST['lp_m2'];
$lp_r2=$_POST['lp_r2'];
$lp_m3=$_POST['lp_m3'];
$lp_r3=$_POST['lp_r3'];
$lp_m4=$_POST['lp_m4'];
$lp_r4=$_POST['lp_r4'];
$obs1=$_POST['obs1'];
$resp_elaboração=$_POST['resp_elaboração'];
$data_reavaliacao=$_POST['data_reavaliacao'];
$pontos_reavaliacao_prs=$_POST['pontos_reavaliacao_prs'];
$obs2=$_POST['obs2'];

$params = array();
$params['nome_beneficiario']=$nome_beneficiario;
$params['unidade']=$unidade;
$params['data_corrente']=$data_corrente;
$params['composicao_familiar']=$composicao_familiar;
$params['hist_vida']=$hist_vida;
$params['hist_cuidados_clinicos']=$hist_cuidados_clinicos;
$params['form_educacional']=$form_educacional;
$params['mundo_trabalho']=$mundo_trabalho;
$params['cp_m1']=$cp_m1;
$params['cp_r1']=$cp_r1;
$params['cp_m2']=$cp_m2;
$params['cp_r2']=$cp_r2;
$params['cp_m3']=$cp_m3;
$params['cp_r3']=$cp_r3;
$params['cp_m4']=$cp_m4;
$params['cp_r4']=$cp_r4;
$params['mp_m1']=$mp_m1;
$params['mp_r1']=$mp_r1;
$params['mp_m2']=$mp_m2;
$params['mp_r2']=$mp_r2;
$params['mp_m3']=$mp_m3;
$params['mp_r3']=$mp_r3;
$params['mp_m4']=$mp_m4;
$params['mp_r4']=$mp_r4;
$params['lp_m1']=$lp_m1;
$params['lp_r1']=$lp_r1;
$params['lp_m2']=$lp_m2;
$params['lp_r2']=$lp_r2;
$params['lp_m3']=$lp_m3;
$params['lp_r3']=$lp_r3;
$params['lp_m4']=$lp_m4;
$params['lp_r4']=$lp_r4;
$params['obs1']=$obs1;
$params['resp_elaboração']=$resp_elaboração;
$params['data_reavaliacao']=$data_reavaliacao;
$params['pontos_reavaliacao_prs']=$pontos_reavaliacao_prs;
$params['obs2']=$obs2;






$data = $api->cadastro_prs($params);

echo json_encode($data);


?>