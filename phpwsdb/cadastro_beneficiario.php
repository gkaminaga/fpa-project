<?php

require_once 'api_sqlsrv.php';
$api = new api_sqlsrv();
$unidade=$_POST['unidade'];
$data_cadastro=$_POST['data_cadastro'];
$encaminhado_por=$_POST['encaminhado_por'];
$ativo=$_POST['ativo'];

$numero_beneficiario=$_POST['numero_beneficiario'];
$nome_registro=$_POST['nome_registro'];
$nome_social=$_POST['nome_social'];
$nacionalidade=$_POST['nacionalidade'];
$Naturalidade=$_POST['Naturalidade'];
$sexo=$_POST['sexo'];
$etnia=$_POST['etnia'];
$orientacao_sexual=$_POST['orientacao_sexual'];
$data_nascimento=$_POST['data_nascimento'];
$estado_civil=$_POST['estado_civil'];
$renda_familiar=$_POST['renda_familiar'];
$beneficio=$_POST['beneficio'];
$tipo_moradia=$_POST['tipo_moradia'];
$endereco=$_POST['endereco'];
$rg=$_POST['rg'];
$orgao_emissor=$_POST['orgao_emissor'];
$uf_emissor=$_POST['uf_emissor'];
$cpf=$_POST['cpf'];
$cartao_sus=$_POST['cartao_sus'];
$cartao_cidadao=$_POST['cartao_cidadao'];
$telefone_fixo=$_POST['telefone_fixo'];
$telefone_celular=$_POST['telefone_celular'];
$nome_mae=$_POST['nome_mae'];
$nome_pai=$_POST['nome_pai'];
$qtd_filhos=$_POST['qtd_filhos'];
$nome_filho1=$_POST['nome_filho1'];
$idade_filho1=$_POST['idade_filho1'];
$nome_filho2=$_POST['nome_filho2'];
$idade_filho2=$_POST['idade_filho2'];
$nome_filho3=$_POST['nome_filho3'];
$idade_filho3=$_POST['idade_filho3'];
$nome_filho4=$_POST['nome_filho4'];
$idade_filho4=$_POST['idade_filho4'];
$nome_filho5=$_POST['nome_filho5'];
$idade_filho5=$_POST['idade_filho5'];
$grau_escolaridade=$_POST['grau_escolaridade'];
$nome_curso_se_cursando=$_POST['nome_curso_se_cursando'];
$deficiencia=$_POST['deficiencia'];
$necessidade_educacional=$_POST['necessidade_educacional'];
$gestante=$_POST['gestante'];
$doenca=$_POST['doenca'];
$tratamento=$_POST['tratamento'];
$substancia_psicoativa=$_POST['substancia_psicoativa'];
$peridiocidade=$_POST['peridiocidade'];
$tempo_uso=$_POST['tempo_uso'];
$medicacao=$_POST['medicacao'];
$ubs_referencia=$_POST['ubs_referencia'];
$raps_referencia=$_POST['raps_referencia'];
$ultimo_trabalho_formal=$_POST['ultimo_trabalho_formal'];
$ultimo_trabalho_informal=$_POST['ultimo_trabalho_informal'];
$experiencias_anteriores=$_POST['experiencias_anteriores'];
$trabalho_marcante=$_POST['trabalho_marcante'];
$area_interesse=$_POST['area_interesse'];
$cursos_anteriores=$_POST['cursos_anteriores'];
$capacitacao_tecnica=$_POST['capacitacao_tecnica'];
$atividade_complementar=$_POST['atividade_complementar'];
$pendencia_judicial=$_POST['pendencia_judicial'];
$tipo_pendencia_judicial=$_POST['tipo_pendencia_judicial'];
$egresso_sistema_prisional=$_POST['egresso_sistema_prisional'];
$processo_formativo_inserido=$_POST['processo_formativo_inserido'];
$o_que_espera=$_POST['o_que_espera'];
$observacoes=$_POST['observacoes'];
$servico_referencia=$_POST['servico_referencia'];
$tecnico_referencia=$_POST['tecnico_referencia'];
$cargo_tecnico=$_POST['cargo_tecnico'];
$contato_tecnico=$_POST['contato_tecnico'];
$territorio_referencia=$_POST['territorio_referencia'];
$tecnico_ref_fpa=$_POST['tecnico_ref_fpa'];
$responsavel_pelo_cadastro=$_POST['responsavel_pelo_cadastro'];
$data_corrente=$_POST['data_corrente'];


$params = array();
$params['unidade']=$unidade;
$params['data_cadastro']=$data_cadastro;
$params['encaminhado_por']=$encaminhado_por;
$params['ativo']=$ativo;
$params['motivo_saida']=$motivo_saida;
$params['obito']=$obito;
$params['data_obito']=$data_obito;
$params['numero_beneficiario']=$numero_beneficiario;
$params['nome_registro']=$nome_registro;
$params['nome_social']=$nome_social;
$params['nacionalidade']=$nacionalidade;
$params['Naturalidade']=$Naturalidade;
$params['sexo']=$sexo;
$params['etnia']=$etnia;
$params['orientacao_sexual']=$orientacao_sexual;
$params['data_nascimento']=$data_nascimento;
$params['estado_civil']=$estado_civil;
$params['renda_familiar']=$renda_familiar;
$params['beneficio']=$beneficio;
$params['tipo_moradia']=$tipo_moradia;
$params['endereco']=$endereco;
$params['rg']=$rg;
$params['orgao_emissor']=$orgao_emissor;
$params['uf_emissor']=$uf_emissor;
$params['cpf']=$cpf;
$params['cartao_sus']=$cartao_sus;
$params['cartao_cidadao']=$cartao_cidadao;
$params['telefone_fixo']=$telefone_fixo;
$params['telefone_celular']=$telefone_celular;
$params['nome_mae']=$nome_mae;
$params['nome_pai']=$nome_pai;
$params['qtd_filhos']=$qtd_filhos;
$params['nome_filho1']=$nome_filho1;
$params['idade_filho1']=$idade_filho1;
$params['nome_filho2']=$nome_filho2;
$params['idade_filho2']=$idade_filho2;
$params['nome_filho3']=$nome_filho3;
$params['idade_filho3']=$idade_filho3;
$params['nome_filho4']=$nome_filho4;
$params['idade_filho4']=$idade_filho4;
$params['nome_filho5']=$nome_filho5;
$params['idade_filho5']=$idade_filho5;
$params['grau_escolaridade']=$grau_escolaridade;
$params['nome_curso_se_cursando']=$nome_curso_se_cursando;
$params['deficiencia']=$deficiencia;
$params['necessidade_educacional']=$necessidade_educacional;
$params['gestante']=$gestante;
$params['doenca']=$doenca;
$params['tratamento']=$tratamento;
$params['substancia_psicoativa']=$substancia_psicoativa;
$params['peridiocidade']=$peridiocidade;
$params['tempo_uso']=$tempo_uso;
$params['medicacao']=$medicacao;
$params['ubs_referencia']=$ubs_referencia;
$params['raps_referencia']=$raps_referencia;
$params['ultimo_trabalho_formal']=$ultimo_trabalho_formal;
$params['ultimo_trabalho_informal']=$ultimo_trabalho_informal;
$params['experiencias_anteriores']=$experiencias_anteriores;
$params['trabalho_marcante']=$trabalho_marcante;
$params['area_interesse']=$area_interesse;
$params['cursos_anteriores']=$cursos_anteriores;
$params['capacitacao_tecnica']=$capacitacao_tecnica;
$params['atividade_complementar']=$atividade_complementar;
$params['pendencia_judicial']=$pendencia_judicial;
$params['tipo_pendencia_judicial']=$tipo_pendencia_judicial;
$params['egresso_sistema_prisional']=$egresso_sistema_prisional;
$params['processo_formativo_inserido']=$processo_formativo_inserido;
$params['o_que_espera']=$o_que_espera;
$params['observacoes']=$observacoes;
$params['servico_referencia']=$servico_referencia;
$params['tecnico_referencia']=$tecnico_referencia;
$params['cargo_tecnico']=$cargo_tecnico;
$params['contato_tecnico']=$contato_tecnico;
$params['territorio_referencia']=$territorio_referencia;
$params['tecnico_ref_fpa']=$tecnico_ref_fpa;
$params['responsavel_pelo_cadastro']=$responsavel_pelo_cadastro;
$params['data_corrente']=$data_corrente;








$data = $api->cadastro_beneficiario($params);



echo json_encode($data);


?>