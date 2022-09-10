<?php

/**
 * API class
 * @author Denis Moreira
 * @version 2020-12-07
 */
$url = '';

class api_sqlsrv
{

	private $db;
	function __construct()
	{
	}
	function __destruct()
	{
		//pg_close($db);
	}

	function ConnectSql()
	{
	}


	function Login($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$serverName = $confdb['host_sqlsrv'];

		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($db->connect_error) {
			die("Erro na conexão " . $db->connect_error);
		}

		$query = "SELECT t1.*, t2.sigla, t2.pdv from usuario t1 inner join eps t2 on t1.EpsId = t2.id_eps  where email = '{email}' and senha = '{senha}'";
		$query = str_replace('{email}', $params['email'], $query);
		$query = str_replace('{senha}', base64_encode($params['senha']), $query);
		$result = mysqli_query($db, $query);

		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			//$error = addslashes(mysqli_error($conn));
			echo mysqli_error($conn);
			exit();
		}

		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
	}


	function GetPaineis($params)
	{


		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = $db->prepare("SELECT p.PainelId as id, e.Sigla as Sigla, p.Descricao as Descr, p.url as Urlp FROM painel p, eps e where p.EpsId = e.Id and e.Id = ?");


		var_dump($params);
		$query->bind_param('i', $params);

		$query->execute();

		$result = mysqli_stmt_get_result($query);
		$list = array();
		while ($myrow = mysqli_fetch_assoc($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();



		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
	}
	function GetUsuarios()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$serverName = $confdb['host_sqlsrv'];


		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);

		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], "db_porta_aberta");

		$query = "SELECT nome, email, u.id, case ativo when 1 then 'Sim' when 0 then 'Não' end as ativo, case admin when 1 then 'Sim' when 0 then 'Não' end as admin,sigla, ifnull(u.pdv,'Todos') as pdv FROM usuario u  inner join eps e  on u.EpsId = e.Id order by u.id";

		$result = mysqli_query($db, $query);

		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			$db->close();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}


	function GetPaineisAdmin()
	{

		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "SELECT p.PainelId as Id, e.Sigla as Sigla, p.Descricao as Descr, p.url as Urlp FROM painel p, eps e where  p.EpsId = e.Id order by p.Descricao asc";

		//$query = "SELECT p.PainelId as Id, e.Sigla as Sigla, p.Descricao as Descr, p.url as Urlp FROM painel p, eps e where p.EpsId = e.Id and p.EpsId = $eps order by p.Descricao asc";      

		$result = mysqli_query($db, $query);

		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}


	function GetPdv()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "SELECT Id, Sigla, Descricao, ifnull(Pdv,'Todos') as Pdv FROM eps";

		$result = mysqli_query($db, $query);

		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}



	function GetPainelById($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT p.PainelId as Id, p.Descricao as Descr, e.Sigla as Sigla, p.url as Urlp FROM painel p, eps e where p.EpsId = e.Id and e.id = {id}";
		$query = str_replace('{id}', $params['id'], $query);
		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}


	function beneficiarios()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT * from beneficiarios";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function beneficiarios_ativos()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT * from beneficiarios where ativo = 1";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function get_nomes()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT id, nome_registro from beneficiarios where ativo = 1";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function lista_prs()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT id, nome_beneficiario, unidade, data_corrente, resp_elaboração from prs";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function prs_detalhado($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT * FROM prs where id = {id}";
		$query = str_replace('{id}', $params['id'], $query);
		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function notificacoes($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT nome_beneficiario, unidade, data_corrente, data_reavaliacao, resp_elaboração FROM prs where (DATE(data_reavaliacao) BETWEEN '{data_inicial}' AND '{data_final}')";
		$query = str_replace('{data_inicial}', $params['data_inicial'], $query);
		$query = str_replace('{data_final}', $params['data_final'], $query);


		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function beneficiarios_inativos()
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		//$teste = 3;
		$query = "SELECT id, nome_registro, rg, cpf, data_nascimento, ativo, unidade, motivo_saida, data_saida, obito from beneficiarios WHERE ativo = 0";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();
	}

	function inativar_beneficiario($params)
	{

		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$serverName = $confdb['host_sqlsrv'];

		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($db->connect_error) {
			die("Erro na conexão " . $db->connect_error);
		}

		$query = "UPDATE beneficiarios SET ativo = {ativo}, motivo_saida = '{motivo_saida}', obito = {obito}, data_saida = '{data_saida}', data_obito = '{data_obito}' WHERE id = {id}";

		$query = str_replace('{id}', $params['id'], $query);
		$query = str_replace('{data_saida}', $params['data_saida'], $query);
		$query = str_replace('{ativo}', $params['ativo'], $query);
		$query = str_replace('{motivo_saida}', $params['motivo_saida'], $query);
		$query = str_replace('{obito}', $params['obito'], $query);
		$query = str_replace('{data_obito}', $params['data_obito'], $query);


		mysqli_query($db, $query);
		$db->close();
	}


	function Insert($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO usuario
						(EpsId
						,Nome
						,Email
						,Senha
						,Admin
						,Ativo)
				VALUES
						({eps}
						,'{nome}'
						,'{email}'
						,'{senha}'
						,{admin}
						,{ativo})";

		$query = str_replace('{eps}', $params['eps'], $query);
		$query = str_replace('{nome}', $params['nome'], $query);
		$query = str_replace('{email}', $params['email'], $query);
		$query = str_replace('{senha}', base64_encode($params['senha']), $query);
		$query = str_replace('{admin}', $params['admin'], $query);
		$query = str_replace('{ativo}', $params['ativo'], $query);

		mysqli_query($db, $query);
		$db->close();
	}



	function cadastro_beneficiario($params)
	{

		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$serverName = $confdb['host_sqlsrv'];

		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($db->connect_error) {
			die("Erro na conexão " . $db->connect_error);
		}





		$query = "INSERT INTO beneficiarios
						(unidade,
						data_cadastro,
						encaminhado_por,
						ativo,
						
						numero_beneficiario,
						nome_registro,
						nome_social,
						nacionalidade,
						Naturalidade,
						sexo,
						etnia,
						orientacao_sexual,
						data_nascimento,
						estado_civil,
						renda_familiar,
						beneficio,
						tipo_moradia,
						endereco,
						rg,
						orgao_emissor,
						uf_emissor,
						cpf,
						cartao_sus,
						cartao_cidadao,
						telefone_fixo,
						telefone_celular,
						nome_mae,
						nome_pai,
						qtd_filhos,
						nome_filho1,
						idade_filho1,
						nome_filho2,
						idade_filho2,
						nome_filho3,
						idade_filho3,
						nome_filho4,
						idade_filho4,
						nome_filho5,
						idade_filho5,
						grau_escolaridade,
						nome_curso_se_cursando,
						deficiencia,
						necessidade_educacional,
						gestante,
						doenca,
						tratamento,
						substancia_psicoativa,
						peridiocidade,
						tempo_uso,
						medicacao,
						ubs_referencia,
						raps_referencia,
						ultimo_trabalho_formal,
						ultimo_trabalho_informal,
						experiencias_anteriores,
						trabalho_marcante,
						area_interesse,
						cursos_anteriores,
						capacitacao_tecnica,
						atividade_complementar,
						pendencia_judicial,
						tipo_pendencia_judicial,
						egresso_sistema_prisional,
						processo_formativo_inserido,
						o_que_espera,
						observacoes,
						servico_referencia,
						tecnico_referencia,
						cargo_tecnico,
						contato_tecnico,
						territorio_referencia,
						tecnico_ref_fpa,
						responsavel_pelo_cadastro,
						data_corrente)
				VALUES
						('{unidade}',
						'{data_cadastro}',
						'{encaminhado_por}',
						'{ativo}',
						
						'{numero_beneficiario}',
						'{nome_registro}',
						'{nome_social}',
						'{nacionalidade}',
						'{Naturalidade}',
						'{sexo}',
						'{etnia}',
						'{orientacao_sexual}',
						'{data_nascimento}',
						'{estado_civil}',
						'{renda_familiar}',
						'{beneficio}',
						'{tipo_moradia}',
						'{endereco}',
						'{rg}',
						'{orgao_emissor}',
						'{uf_emissor}',
						'{cpf}',
						'{cartao_sus}',
						'{cartao_cidadao}',
						'{telefone_fixo}',
						'{telefone_celular}',
						'{nome_mae}',
						'{nome_pai}',
						'{qtd_filhos}',
						'{nome_filho1}',
						'{idade_filho1}',
						'{nome_filho2}',
						'{idade_filho2}',
						'{nome_filho3}',
						'{idade_filho3}',
						'{nome_filho4}',
						'{idade_filho4}',
						'{nome_filho5}',
						'{idade_filho5}',
						'{grau_escolaridade}',
						'{nome_curso_se_cursando}',
						'{deficiencia}',
						'{necessidade_educacional}',
						'{gestante}',
						'{doenca}',
						'{tratamento}',
						'{substancia_psicoativa}',
						'{peridiocidade}',
						'{tempo_uso}',
						'{medicacao}',
						'{ubs_referencia}',
						'{raps_referencia}',
						'{ultimo_trabalho_formal}',
						'{ultimo_trabalho_informal}',
						'{experiencias_anteriores}',
						'{trabalho_marcante}',
						'{area_interesse}',
						'{cursos_anteriores}',
						'{capacitacao_tecnica}',
						'{atividade_complementar}',
						'{pendencia_judicial}',
						'{tipo_pendencia_judicial}',
						'{egresso_sistema_prisional}',
						'{processo_formativo_inserido}',
						'{o_que_espera}',
						'{observacoes}',
						'{servico_referencia}',
						'{tecnico_referencia}',
						'{cargo_tecnico}',
						'{contato_tecnico}',
						'{territorio_referencia}',
						'{tecnico_ref_fpa}',
						'{responsavel_pelo_cadastro}',
						'{data_corrente}')";

		$query = str_replace('{unidade}', $params['unidade'], $query);
		$query = str_replace('{data_cadastro}', $params['data_cadastro'], $query);
		$query = str_replace('{encaminhado_por}', $params['encaminhado_por'], $query);
		$query = str_replace('{ativo}', $params['ativo'], $query);
		$query = str_replace('{numero_beneficiario}', $params['numero_beneficiario'], $query);
		$query = str_replace('{nome_registro}', $params['nome_registro'], $query);
		$query = str_replace('{nome_social}', $params['nome_social'], $query);
		$query = str_replace('{nacionalidade}', $params['nacionalidade'], $query);
		$query = str_replace('{Naturalidade}', $params['Naturalidade'], $query);
		$query = str_replace('{sexo}', $params['sexo'], $query);
		$query = str_replace('{etnia}', $params['etnia'], $query);
		$query = str_replace('{orientacao_sexual}', $params['orientacao_sexual'], $query);
		$query = str_replace('{data_nascimento}', $params['data_nascimento'], $query);
		$query = str_replace('{estado_civil}', $params['estado_civil'], $query);
		$query = str_replace('{renda_familiar}', $params['renda_familiar'], $query);
		$query = str_replace('{beneficio}', $params['beneficio'], $query);
		$query = str_replace('{tipo_moradia}', $params['tipo_moradia'], $query);
		$query = str_replace('{endereco}', $params['endereco'], $query);
		$query = str_replace('{rg}', $params['rg'], $query);
		$query = str_replace('{orgao_emissor}', $params['orgao_emissor'], $query);
		$query = str_replace('{uf_emissor}', $params['uf_emissor'], $query);
		$query = str_replace('{cpf}', $params['cpf'], $query);
		$query = str_replace('{cartao_sus}', $params['cartao_sus'], $query);
		$query = str_replace('{cartao_cidadao}', $params['cartao_cidadao'], $query);
		$query = str_replace('{telefone_fixo}', $params['telefone_fixo'], $query);
		$query = str_replace('{telefone_celular}', $params['telefone_celular'], $query);
		$query = str_replace('{nome_mae}', $params['nome_mae'], $query);
		$query = str_replace('{nome_pai}', $params['nome_pai'], $query);
		$query = str_replace('{qtd_filhos}', $params['qtd_filhos'], $query);
		$query = str_replace('{nome_filho1}', $params['nome_filho1'], $query);
		$query = str_replace('{idade_filho1}', $params['idade_filho1'], $query);
		$query = str_replace('{nome_filho2}', $params['nome_filho2'], $query);
		$query = str_replace('{idade_filho2}', $params['idade_filho2'], $query);
		$query = str_replace('{nome_filho3}', $params['nome_filho3'], $query);
		$query = str_replace('{idade_filho3}', $params['idade_filho3'], $query);
		$query = str_replace('{nome_filho4}', $params['nome_filho4'], $query);
		$query = str_replace('{idade_filho4}', $params['idade_filho4'], $query);
		$query = str_replace('{nome_filho5}', $params['nome_filho5'], $query);
		$query = str_replace('{idade_filho5}', $params['idade_filho5'], $query);
		$query = str_replace('{grau_escolaridade}', $params['grau_escolaridade'], $query);
		$query = str_replace('{nome_curso_se_cursando}', $params['nome_curso_se_cursando'], $query);
		$query = str_replace('{deficiencia}', $params['deficiencia'], $query);
		$query = str_replace('{necessidade_educacional}', $params['necessidade_educacional'], $query);
		$query = str_replace('{gestante}', $params['gestante'], $query);
		$query = str_replace('{doenca}', $params['doenca'], $query);
		$query = str_replace('{tratamento}', $params['tratamento'], $query);
		$query = str_replace('{substancia_psicoativa}', $params['substancia_psicoativa'], $query);
		$query = str_replace('{peridiocidade}', $params['peridiocidade'], $query);
		$query = str_replace('{tempo_uso}', $params['tempo_uso'], $query);
		$query = str_replace('{medicacao}', $params['medicacao'], $query);
		$query = str_replace('{ubs_referencia}', $params['ubs_referencia'], $query);
		$query = str_replace('{raps_referencia}', $params['raps_referencia'], $query);
		$query = str_replace('{ultimo_trabalho_formal}', $params['ultimo_trabalho_formal'], $query);
		$query = str_replace('{ultimo_trabalho_informal}', $params['ultimo_trabalho_informal'], $query);
		$query = str_replace('{experiencias_anteriores}', $params['experiencias_anteriores'], $query);
		$query = str_replace('{trabalho_marcante}', $params['trabalho_marcante'], $query);
		$query = str_replace('{area_interesse}', $params['area_interesse'], $query);
		$query = str_replace('{cursos_anteriores}', $params['cursos_anteriores'], $query);
		$query = str_replace('{capacitacao_tecnica}', $params['capacitacao_tecnica'], $query);
		$query = str_replace('{atividade_complementar}', $params['atividade_complementar'], $query);
		$query = str_replace('{pendencia_judicial}', $params['pendencia_judicial'], $query);
		$query = str_replace('{tipo_pendencia_judicial}', $params['tipo_pendencia_judicial'], $query);
		$query = str_replace('{egresso_sistema_prisional}', $params['egresso_sistema_prisional'], $query);
		$query = str_replace('{processo_formativo_inserido}', $params['processo_formativo_inserido'], $query);
		$query = str_replace('{o_que_espera}', $params['o_que_espera'], $query);
		$query = str_replace('{observacoes}', $params['observacoes'], $query);
		$query = str_replace('{servico_referencia}', $params['servico_referencia'], $query);
		$query = str_replace('{tecnico_referencia}', $params['tecnico_referencia'], $query);
		$query = str_replace('{cargo_tecnico}', $params['cargo_tecnico'], $query);
		$query = str_replace('{contato_tecnico}', $params['contato_tecnico'], $query);
		$query = str_replace('{territorio_referencia}', $params['territorio_referencia'], $query);
		$query = str_replace('{tecnico_ref_fpa}', $params['tecnico_ref_fpa'], $query);
		$query = str_replace('{responsavel_pelo_cadastro}', $params['responsavel_pelo_cadastro'], $query);
		$query = str_replace('{data_corrente}', $params['data_corrente'], $query);

		mysqli_query($db, $query);
		$db->close();
	}


	function cadastro_prs($params)
	{

		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$serverName = $confdb['host_sqlsrv'];

		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($db->connect_error) {
			die("Erro na conexão " . $db->connect_error);
		}





		$query = "INSERT INTO prs
				(
				nome_beneficiario,
				unidade,
				data_corrente,
				composicao_familiar,
				hist_vida,
				hist_cuidados_clinicos,
				form_educacional,
				mundo_trabalho,
				cp_m1,
				cp_r1,
				cp_m2,
				cp_r2,
				cp_m3,
				cp_r3,
				cp_m4,
				cp_r4,
				mp_m1,
				mp_r1,
				mp_m2,
				mp_r2,
				mp_m3,
				mp_r3,
				mp_m4,
				mp_r4,
				lp_m1,
				lp_r1,
				lp_m2,
				lp_r2,
				lp_m3,
				lp_r3,
				lp_m4,
				lp_r4,
				obs1,
				resp_elaboração,
				data_reavaliacao,
				pontos_reavaliacao_prs,
				obs2
				)
		VALUES
				('{nome_beneficiario}',
				'{unidade}',
				'{data_corrente}',
				'{composicao_familiar}',
				'{hist_vida}',
				'{hist_cuidados_clinicos}',
				'{form_educacional}',
				'{mundo_trabalho}',
				'{cp_m1}',
				'{cp_r1}',
				'{cp_m2}',
				'{cp_r2}',
				'{cp_m3}',
				'{cp_r3}',
				'{cp_m4}',
				'{cp_r4}',
				'{mp_m1}',
				'{mp_r1}',
				'{mp_m2}',
				'{mp_r2}',
				'{mp_m3}',
				'{mp_r3}',
				'{mp_m4}',
				'{mp_r4}',
				'{lp_m1}',
				'{lp_r1}',
				'{lp_m2}',
				'{lp_r2}',
				'{lp_m3}',
				'{lp_r3}',
				'{lp_m4}',
				'{lp_r4}',
				'{obs1}',
				'{resp_elaboração}',
				'{data_reavaliacao}',
				'{pontos_reavaliacao_prs}',
				'{obs2}')";

		$query = str_replace('{nome_beneficiario}', $params['nome_beneficiario'], $query);
		$query = str_replace('{unidade}', $params['unidade'], $query);
		$query = str_replace('{data_corrente}', $params['data_corrente'], $query);





		$query = str_replace('{composicao_familiar}', $params['composicao_familiar'], $query);
		$query = str_replace('{hist_vida}', $params['hist_vida'], $query);
		$query = str_replace('{hist_cuidados_clinicos}', $params['hist_cuidados_clinicos'], $query);
		$query = str_replace('{form_educacional}', $params['form_educacional'], $query);
		$query = str_replace('{mundo_trabalho}', $params['mundo_trabalho'], $query);
		$query = str_replace('{cp_m1}', $params['cp_m1'], $query);
		$query = str_replace('{cp_r1}', $params['cp_r1'], $query);
		$query = str_replace('{cp_m2}', $params['cp_m2'], $query);
		$query = str_replace('{cp_r2}', $params['cp_r2'], $query);
		$query = str_replace('{cp_m3}', $params['cp_m3'], $query);
		$query = str_replace('{cp_r3}', $params['cp_r3'], $query);
		$query = str_replace('{cp_m4}', $params['cp_m4'], $query);
		$query = str_replace('{cp_r4}', $params['cp_r4'], $query);
		$query = str_replace('{mp_m1}', $params['mp_m1'], $query);
		$query = str_replace('{mp_r1}', $params['mp_r1'], $query);
		$query = str_replace('{mp_m2}', $params['mp_m2'], $query);
		$query = str_replace('{mp_r2}', $params['mp_r2'], $query);
		$query = str_replace('{mp_m3}', $params['mp_m3'], $query);
		$query = str_replace('{mp_r3}', $params['mp_r3'], $query);
		$query = str_replace('{mp_m4}', $params['mp_m4'], $query);
		$query = str_replace('{mp_r4}', $params['mp_r4'], $query);
		$query = str_replace('{lp_m1}', $params['lp_m1'], $query);
		$query = str_replace('{lp_r1}', $params['lp_r1'], $query);
		$query = str_replace('{lp_m2}', $params['lp_m2'], $query);
		$query = str_replace('{lp_r2}', $params['lp_r2'], $query);
		$query = str_replace('{lp_m3}', $params['lp_m3'], $query);
		$query = str_replace('{lp_r3}', $params['lp_r3'], $query);
		$query = str_replace('{lp_m4}', $params['lp_m4'], $query);
		$query = str_replace('{lp_r4}', $params['lp_r4'], $query);
		$query = str_replace('{obs1}', $params['obs1'], $query);
		$query = str_replace('{resp_elaboração}', $params['resp_elaboração'], $query);
		$query = str_replace('{data_reavaliacao}', $params['data_reavaliacao'], $query);
		$query = str_replace('{pontos_reavaliacao_prs}', $params['pontos_reavaliacao_prs'], $query);
		$query = str_replace('{obs2}', $params['obs2'], $query);






		mysqli_query($db, $query);
		$db->close();
	}

	//================================================================================================================
	function InsertPainel($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);

		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO painel
						(EpsId,
						Descricao, 
						url)
				VALUES
						('{eps}',
						 '{descr}',
						 '{url}' )";

		$query = str_replace('{eps}', $params['eps'], $query);
		$query = str_replace('{descr}', $params['descr'], $query);
		$query = str_replace('{url}', $params['url'], $query);



		mysqli_query($db, $query);
	}
	//================================================================================================================

	function InsertLogTempos($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		$query = "INSERT INTO logrelatoriotempo
						(UsuarioLogado
						,DateTime
						,Acao
						,DataInicio
						,DataFim
						,Pdv)

				VALUES
						('{usuario}'
						,'{datetime}'
						,'{acao}'
						,'{dataInicio}'
						,'{dataFinal}'
						,'{pdv}')";


		$query = str_replace('{usuario}', $params['usuario'], $query);
		$query = str_replace('{datetime}', $params['datetime'], $query);
		$query = str_replace('{acao}', $params['acao'], $query);
		$query = str_replace('{dataInicio}', $params['dataInicio'], $query);
		$query = str_replace('{dataFinal}', $params['dataFinal'], $query);
		$query = str_replace('{pdv}', $params['pdv'], $query);

		mysqli_query($db, $query);
	}

	function InsertLogPausas($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO logrelatoriopausas
						(UsuarioLogado
						,DateTime
						,Acao
						,DataInicio
						,[DataFim]
						,Pdv)

				VALUES
						('{usuario}'
						,'{datetime}'
						,'{acao}'
						,'{dataInicio}'
						,'{dataFinal}'
						,'{pdv}')";


		$query = str_replace('{usuario}', $params['usuario'], $query);
		$query = str_replace('{datetime}', $params['datetime'], $query);
		$query = str_replace('{acao}', $params['acao'], $query);
		$query = str_replace('{dataInicio}', $params['dataInicio'], $query);
		$query = str_replace('{dataFinal}', $params['dataFinal'], $query);
		$query = str_replace('{pdv}', $params['pdv'], $query);

		mysqli_query($db, $query);
	}

	function InsertLogContatos($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO logRelatoriocontatos
						([UsuarioLogado]
						,[DateTime]
						,[Acao]
						,[DataInicio]
						,[DataFim]
						,[Pdv]
						,[Agrupamento])

				VALUES
						('{usuario}'
						,'{datetime}'
						,'{acao}'
						,'{dataInicio}'
						,'{dataFinal}'
						,'{pdv}'
						,'{agrupamento}')";


		$query = str_replace('{usuario}', $params['usuario'], $query);
		$query = str_replace('{datetime}', $params['datetime'], $query);
		$query = str_replace('{acao}', $params['acao'], $query);
		$query = str_replace('{dataInicio}', $params['dataInicio'], $query);
		$query = str_replace('{dataFinal}', $params['dataFinal'], $query);
		$query = str_replace('{pdv}', $params['pdv'], $query);
		$query = str_replace('{agrupamento}', $params['agrupamento'], $query);

		mysql_query($db, $query);
	}



	function InsertLogEps($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);
		$db = sqlsrv_connect($serverName, $connectionInfo);

		$query = "INSERT INTO logeps
						([UsuarioLogado]
						,[DateTime]
						,[Acao]
						,[SiglaAntiga]
						,[PdvAntigo]
						,[SiglaNova]
						,[PdvNovo])

				VALUES
						('{usuario}'
						,'{datetime}'
						,'{acao}'
						,'{siglaAntiga}'
						,'{pdvAntigo}'
						,'{siglaNova}'
						,'{pdvNovo}')";


		$query = str_replace('{usuario}', $params['usuario'], $query);
		$query = str_replace('{datetime}', $params['datetime'], $query);
		$query = str_replace('{acao}', $params['acao'], $query);
		$query = str_replace('{siglaAntiga}', $params['siglaAntiga'], $query);
		$query = str_replace('{pdvAntigo}', $params['pdvAntigo'], $query);
		$query = str_replace('{siglaNova}', $params['siglaNova'], $query);
		$query = str_replace('{pdvNovo}', $params['pdvNovo'], $query);





		mysqli_query($db, $query);
	}

	function InsertLogUsuario($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO logusuario
						(UsuarioLogado
						,DateTime
						,Acao
						,NomeAntigo
						,EmailAntigo
						,AtivoAntigo
						,AdminAntigo
						,EpsAntiga
						,NomeNovo
						,EmailNovo
						,AtivoNovo
						,AdminNovo
						,EpsNova)

				VALUES
						('{usuario}'
						,'{datetime}'
						,'{acao}'
						,'{nomeAntigo}'
						,'{emailAntigo}'
						,'{ativoAntigo}'
						,'{adminAntigo}'
						,'{epsAntiga}'
						,'{nomeNovo}'
						,'{emailNovo}'
						,'{ativoNovo}'
						,'{adminNovo}'
						,'{epsNova}')";


		$query = str_replace('{usuario}', $params['usuario'], $query);
		$query = str_replace('{datetime}', $params['datetime'], $query);
		$query = str_replace('{acao}', $params['acao'], $query);
		$query = str_replace('{nomeAntigo}', $params['nomeAntigo'], $query);
		$query = str_replace('{emailAntigo}', $params['emailAntigo'], $query);
		$query = str_replace('{ativoAntigo}', $params['ativoAntigo'], $query);
		$query = str_replace('{adminAntigo}', $params['adminAntigo'], $query);
		$query = str_replace('{epsAntiga}', $params['epsAntiga'], $query);
		$query = str_replace('{nomeNovo}', $params['nomeNovo'], $query);
		$query = str_replace('{emailNovo}', $params['emailNovo'], $query);
		$query = str_replace('{ativoNovo}', $params['ativoNovo'], $query);
		$query = str_replace('{adminNovo}', $params['adminNovo'], $query);
		$query = str_replace('{epsNova}', $params['epsNova'], $query);

		mysqli_query($db, $query);
	}



	function InsertEps($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($params['pdv']) {
			$query = "INSERT INTO eps
						(Sigla, Pdv)
				VALUES
						('{Sigla}','{Descricao}','{Pdv}')";

			$query = str_replace('{Sigla}', $params['sigla'], $query);
			$query = str_replace('{Descricao}', $params['descricao'], $query);
			$query = str_replace('{Pdv}', $params['pdv'], $query);
		} else {
			$query = "INSERT INTO eps
						(Sigla, Descricao, Pdv)
				VALUES
						('{Sigla}', '{Descricao}', NULL)";

			$query = str_replace('{Sigla}', $params['sigla'], $query);
			$query = str_replace('{Descricao}', $params['descricao'], $query);
			$query = str_replace('{Pdv}', $params['pdv'], $query);
		}



		mysqli_query($db, $query);
	}

	function UpdateEps($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		if ($params['pdv']) {
			$query = "UPDATE eps
					SET Sigla = '{sigla}'
					, Descricao = '{descricao}'
					, Pdv = '{pdv}'
				WHERE Id = {id}";
			$query = str_replace('{id}', $params['id'], $query);
			$query = str_replace('{sigla}', $params['sigla'], $query);
			$query = str_replace('{descricao}', $params['descricao'], $query);
			$query = str_replace('{pdv}', $params['pdv'], $query);
		} else {
			$query = "UPDATE eps
					SET Sigla = '{sigla}'
					, Descricao = '{descricao}'
					, Pdv = NULL
				WHERE Id = {id}";
			$query = str_replace('{id}', $params['id'], $query);
			$query = str_replace('{sigla}', $params['sigla'], $query);
			$query = str_replace('{descricao}', $params['descricao'], $query);
			$query = str_replace('{pdv}', $params['pdv'], $query);
		}


		mysqli_query($db, $query);
	}

	function Update($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "UPDATE usuario
					SET EpsId = {eps}
					, Nome = '{nome}'
					, Email = '{email}'
					, Senha = '{senha}'
					, Admin = {admin}
					, Ativo = {ativo}
				WHERE Id = {id}";

		$query = str_replace('{id}', $params['id'], $query);
		$query = str_replace('{eps}', $params['eps'], $query);
		$query = str_replace('{nome}', $params['nome'], $query);
		$query = str_replace('{email}', $params['email'], $query);
		$query = str_replace('{senha}', base64_encode($params['senha']), $query);
		$query = str_replace('{admin}', $params['admin'], $query);
		$query = str_replace('{ativo}', $params['ativo'], $query);

		mysqli_query($db, $query);
	}

	function UpdateSenha($params)
	{
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "UPDATE usuario SET Senha = '{senha}' WHERE Id = {id}";

		$query = str_replace('{id}', $params['id'], $query);
		$query = str_replace('{senha}', base64_encode($params['senha']), $query);



		mysqli_query($db, $query);
	}


	function Select()
	{
		echo "Connection......";
		if ($db) {
			echo "Connection established.";
		} else {
			echo "Connection could not be established.";
			die(print_r(mysqli_errors(), true));
		}

		$sql = "select * from [pomschedule].[dbo].[tabulado]";
		$stmt = mysqli_query($db, $sql);
		if ($stmt === false) {
			die(print_r(mysqli_errors(), true));
		}
		while ($row = mysqli_fetch_array($stmt, MYSQLI_FETCH_NUMERIC)) {
			echo $row[0] . ", " . $row[1] . "<br />";
		}
	}

	function adicionar_historico($params) {
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "INSERT INTO historico (id_beneficiario, nome_beneficiario, ativo, motivo, data_evento, obito, data_obito)
			VALUES ({id}, '{nome}', {ativo}, '{motivo}', '{data_evento}', '{obito}', '{data_obito}');";
		
		$query = str_replace('{id}', $params['id'], $query);
		$query = str_replace('{nome}', $params['nome'], $query);
		$query = str_replace('{ativo}', $params['ativo'], $query);
		$query = str_replace('{data_evento}', $params['data_evento'], $query);
		$query = str_replace('{motivo}', $params['motivo'], $query);
		$query = str_replace('{obito}', $params['obito'], $query);
		$query = str_replace('{data_obito}', $params['data_obito'], $query);

		mysqli_query($db, $query);
		$db->close();
	}

	function lista_historico() {
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "SELECT * FROM historico";

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		return $list;
		$db->close();

	}

	function historico_detalhado($params) {
		$confdb = json_decode(file_get_contents('configuration.json'), TRUE);
		$serverName = $confdb['host_sqlsrv'];
		$connectionInfo = array("Database" => $confdb['database_sqlsrv'], "UID" => $confdb['user_sqlsrv'], "PWD" => $confdb['password_sqlsrv']);
		//$db = sqlsrv_connect( $serverName, $connectionInfo);
		$db = new mysqli($confdb['host_sqlsrv'], $confdb['user_sqlsrv'], $confdb['password_sqlsrv'], $confdb['database_sqlsrv']);

		$query = "SELECT * FROM historico WHERE id = {id}";

		$query = str_replace('{id}', $params['id'], $query);

		$result = mysqli_query($db, $query);
		if (!$result) {
			echo "Problem with query " . $query . "<br/>";
			echo mysqli_errors();
			exit();
		}
		$list = array();
		while ($myrow = mysqli_fetch_object($result)) {
			$list[] = $myrow;
		}
		
		return $list;
		$db->close();

	}
}
