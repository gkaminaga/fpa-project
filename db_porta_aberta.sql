-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2022 às 04:05
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_porta_aberta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL,
  `unidade` varchar(255) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `encaminhado_por` varchar(100) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `motivo_saida` varchar(255) DEFAULT NULL,
  `data_saida` date DEFAULT NULL,
  `obito` tinyint(1) DEFAULT NULL,
  `data_obito` date DEFAULT NULL,
  `numero_beneficiario` varchar(30) DEFAULT NULL,
  `nome_registro` varchar(155) DEFAULT NULL,
  `nome_social` varchar(155) DEFAULT NULL,
  `nacionalidade` varchar(155) DEFAULT NULL,
  `naturalidade` varchar(155) DEFAULT NULL,
  `sexo` varchar(155) DEFAULT NULL,
  `etnia` varchar(155) DEFAULT NULL,
  `orientacao_sexual` varchar(155) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `estado_civil` varchar(155) DEFAULT NULL,
  `renda_familiar` varchar(155) DEFAULT NULL,
  `beneficio` varchar(155) DEFAULT NULL,
  `tipo_moradia` varchar(155) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `orgao_emissor` varchar(10) DEFAULT NULL,
  `uf_emissor` varchar(5) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `cartao_sus` varchar(30) DEFAULT NULL,
  `cartao_cidadao` varchar(30) DEFAULT NULL,
  `telefone_fixo` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) DEFAULT NULL,
  `nome_mae` varchar(155) DEFAULT NULL,
  `nome_pai` varchar(155) DEFAULT NULL,
  `qtd_filhos` int(11) DEFAULT NULL,
  `nome_filho1` varchar(155) DEFAULT NULL,
  `idade_filho1` varchar(2) DEFAULT NULL,
  `nome_filho2` varchar(155) DEFAULT NULL,
  `idade_filho2` varchar(2) DEFAULT NULL,
  `nome_filho3` varchar(155) DEFAULT NULL,
  `idade_filho3` varchar(2) DEFAULT NULL,
  `nome_filho4` varchar(155) DEFAULT NULL,
  `idade_filho4` varchar(2) DEFAULT NULL,
  `nome_filho5` varchar(155) DEFAULT NULL,
  `idade_filho5` varchar(2) DEFAULT NULL,
  `grau_escolaridade` varchar(155) DEFAULT NULL,
  `nome_curso_se_cursando` varchar(155) DEFAULT NULL,
  `deficiencia` varchar(155) DEFAULT NULL,
  `necessidade_educacional` varchar(155) DEFAULT NULL,
  `gestante` varchar(155) DEFAULT NULL,
  `doenca` varchar(155) DEFAULT NULL,
  `tratamento` varchar(100) DEFAULT NULL,
  `substancia_psicoativa` varchar(255) DEFAULT NULL,
  `peridiocidade` varchar(255) DEFAULT NULL,
  `tempo_uso` varchar(255) DEFAULT NULL,
  `medicacao` varchar(255) DEFAULT NULL,
  `ubs_referencia` varchar(100) DEFAULT NULL,
  `raps_referencia` varchar(100) DEFAULT NULL,
  `ultimo_trabalho_formal` date DEFAULT NULL,
  `ultimo_trabalho_informal` date DEFAULT NULL,
  `experiencias_anteriores` varchar(255) DEFAULT NULL,
  `trabalho_marcante` varchar(255) DEFAULT NULL,
  `area_interesse` varchar(255) DEFAULT NULL,
  `cursos_anteriores` varchar(255) DEFAULT NULL,
  `capacitacao_tecnica` varchar(255) DEFAULT NULL,
  `atividade_complementar` varchar(255) DEFAULT NULL,
  `pendencia_judicial` varchar(255) DEFAULT NULL,
  `tipo_pendencia_judicial` varchar(255) DEFAULT NULL,
  `egresso_sistema_prisional` varchar(255) DEFAULT NULL,
  `processo_formativo_inserido` varchar(255) DEFAULT NULL,
  `o_que_espera` varchar(255) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `servico_referencia` varchar(255) DEFAULT NULL,
  `tecnico_referencia` varchar(255) DEFAULT NULL,
  `cargo_tecnico` varchar(255) DEFAULT NULL,
  `contato_tecnico` varchar(255) DEFAULT NULL,
  `territorio_referencia` varchar(255) DEFAULT NULL,
  `tecnico_ref_fpa` varchar(255) DEFAULT NULL,
  `responsavel_pelo_cadastro` varchar(255) DEFAULT NULL,
  `data_corrente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `beneficiarios`
--

INSERT INTO `beneficiarios` (`id`, `unidade`, `data_cadastro`, `encaminhado_por`, `ativo`, `motivo_saida`, `data_saida`, `obito`, `data_obito`, `numero_beneficiario`, `nome_registro`, `nome_social`, `nacionalidade`, `naturalidade`, `sexo`, `etnia`, `orientacao_sexual`, `data_nascimento`, `estado_civil`, `renda_familiar`, `beneficio`, `tipo_moradia`, `endereco`, `rg`, `orgao_emissor`, `uf_emissor`, `cpf`, `cartao_sus`, `cartao_cidadao`, `telefone_fixo`, `telefone_celular`, `nome_mae`, `nome_pai`, `qtd_filhos`, `nome_filho1`, `idade_filho1`, `nome_filho2`, `idade_filho2`, `nome_filho3`, `idade_filho3`, `nome_filho4`, `idade_filho4`, `nome_filho5`, `idade_filho5`, `grau_escolaridade`, `nome_curso_se_cursando`, `deficiencia`, `necessidade_educacional`, `gestante`, `doenca`, `tratamento`, `substancia_psicoativa`, `peridiocidade`, `tempo_uso`, `medicacao`, `ubs_referencia`, `raps_referencia`, `ultimo_trabalho_formal`, `ultimo_trabalho_informal`, `experiencias_anteriores`, `trabalho_marcante`, `area_interesse`, `cursos_anteriores`, `capacitacao_tecnica`, `atividade_complementar`, `pendencia_judicial`, `tipo_pendencia_judicial`, `egresso_sistema_prisional`, `processo_formativo_inserido`, `o_que_espera`, `observacoes`, `servico_referencia`, `tecnico_referencia`, `cargo_tecnico`, `contato_tecnico`, `territorio_referencia`, `tecnico_ref_fpa`, `responsavel_pelo_cadastro`, `data_corrente`) VALUES
(3, 'Campo Belo ', '2021-10-07', 'CAPS - Capela do Socorro', 1, '', '2022-09-04', NULL, NULL, '', 'Aldjanio dos Santos Pereira', 'Aldjanio dos Santos Pereira', 'Brasileiro', 'Saloá - PE', 'Masculino', 'parda', 'heterossexual', '1977-01-28', 'solteiro', '150', 'Bolsa Familia', 'Residência Prórpia', 'Rua Manga Natal, 261 - casa 1', '255752155', 'ssp', 'SP', '26957073807', '', '', '11972297897', '11949633256', 'Ivanete dos Santos Pereira', 'Severino Pereira da Silva', 0, '', '', '', '', '', '', '', '', '', '', 'Ens Fund Incompleto', '', '', '', '', 'Cirrose Hepatica ', '', 'alcool,cocaina', '2 dias atras alcool / 1 semana atras cocaina', '30 anos', 'Fluoxtina, carbamazepina', 'Jardim Clipa', 'CAPS - Capela do Socorro', '2021-01-06', '2021-12-15', 'Auxiliar de cozinha, Estoquista, Ajudante de pedreiro, Porteiro, Metalurgico', 'Auxiliar de Limpeza', 'Auxiliar de Limpeza', 'Corte e Costura (FPA)', '', '', 'nao', '', 'nao', 'higienizacao e limpeza', 'Trabalhar para continuar a construção da sua casa', '', 'CAPS - Capela do Socorro', 'Luciana', 'Psicologa', '', '', 'Fabiana', 'Fabiana dos Santos de Souza', '2021-10-07'),
(12, 'Brasilândia', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', 'Adriano Santos', 'Adriano Santos', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(13, 'Heliópolis', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', 'Jonas Silva', 'Jonas Silva', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(14, 'Centro', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', 'Aline Souza', 'Aline Souza', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, 'Ermelino Matarazzo', '2022-08-02', '', 1, NULL, NULL, NULL, NULL, 'asd', 'Marcos Assunção', 'Marcos Assunção', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(16, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(17, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(18, 'Osasco', '2022-08-22', 'Teste', 1, NULL, NULL, NULL, NULL, 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'Masculino', 'amarela', 'heterossexual', '2022-08-22', 'solteiro', '100000', 'Teste', 'Situação de Rua', 'Teste', '123456789', 'asd', 'PA', '123456789123', '123456', '123456', '111111111', '111111111', 'Teste', 'Teste', 2, 'Teste', '4', '', '', '', '', '', '', '', '', 'Cursando', 'Teste', 'Teste', 'Teste', '15 a 18', 'Teste', 'Teste', 'alcool,tabaco,maconha,cocaina', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', '2022-08-22', '2022-08-22', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'sim', 'Teste', 'nao', 'higienizacao e limpeza', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', '123456', 'Teste', 'Teste', 'Teste', '2022-08-22'),
(19, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(20, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Residência Aluguel', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(21, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'SIAT II', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-09-04'),
(22, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-09-04'),
(23, 'Brasilândia', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-09-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eps`
--

CREATE TABLE `eps` (
  `Id` int(11) NOT NULL,
  `id_eps` int(11) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `pdv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eps`
--

INSERT INTO `eps` (`Id`, `id_eps`, `sigla`, `descricao`, `pdv`) VALUES
(26, 2, 'Diretor(a)', 'Todas as funções', NULL),
(27, 1, 'Administrador(a)', 'Todas as funções e autorizações para criação de usuários', NULL),
(28, 3, 'Coordenador(a) Administrativo', 'Relatórios gerenciais', NULL),
(29, 4, 'Educador(a)', 'Atividades pedagógicas', NULL),
(31, 2, 'Coordenador(a) Geral', 'Todas as funções', NULL),
(32, 2, 'Coordenador(a) Pedagógico(a)', 'Todas as funções', NULL),
(33, 3, 'Técnico(a) Administrador(a)', 'Relatórios gerenciais', NULL),
(34, 4, 'Agente de Ação Social', 'Atividades pedagógicas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `id_beneficiario` int(11) DEFAULT NULL,
  `nome_beneficiario` varchar(250) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `motivo` varchar(250) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `obito` tinyint(1) DEFAULT NULL,
  `data_obito` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `id_beneficiario`, `nome_beneficiario`, `ativo`, `motivo`, `data_evento`, `obito`, `data_obito`) VALUES
(1, 3, 'Aldjanio dos Santos Pereira', 1, NULL, '2022-09-04', 0, NULL),
(2, 3, 'Aldjanio dos Santos Pereira', 0, NULL, '2022-09-04', 0, NULL),
(3, 3, 'Aldjanio dos Santos Pereira', 1, NULL, '2022-09-04', 0, NULL),
(4, 3, 'Aldjanio dos Santos Pereira', 0, NULL, NULL, 1, '2022-09-01'),
(7, 3, 'Aldjanio dos Santos Pereira', 0, '123', '2022-09-04', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logusuario`
--

CREATE TABLE `logusuario` (
  `UsuarioLogado` varchar(300) NOT NULL,
  `DateTime` varchar(300) DEFAULT NULL,
  `Acao` varchar(300) DEFAULT NULL,
  `NomeAntigo` varchar(300) DEFAULT NULL,
  `EmailAntigo` varchar(300) DEFAULT NULL,
  `AtivoAntigo` varchar(300) DEFAULT NULL,
  `AdminAntigo` varchar(300) DEFAULT NULL,
  `EpsAntiga` varchar(300) DEFAULT NULL,
  `NomeNovo` varchar(300) DEFAULT NULL,
  `EmailNovo` varchar(300) DEFAULT NULL,
  `AtivoNovo` varchar(300) DEFAULT NULL,
  `AdminNovo` varchar(300) DEFAULT NULL,
  `EpsNova` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logusuario`
--

INSERT INTO `logusuario` (`UsuarioLogado`, `DateTime`, `Acao`, `NomeAntigo`, `EmailAntigo`, `AtivoAntigo`, `AdminAntigo`, `EpsAntiga`, `NomeNovo`, `EmailNovo`, `AtivoNovo`, `AdminNovo`, `EpsNova`) VALUES
('Admin', '31/08/2022 10:12:11', 'Criacao de Usuario', '', '', '', '', '', 'Psicologa', 'psico@teste.com', '1', '1', '26'),
('Usuario teste', '08/08/2022 13:50:36', 'Criacao de Usuario', '', '', '', '', '', 'Fabiana ', 'fabiana@teste.com', '1', '0', '26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `id_projeto` int(11) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  `id_beneficiario` int(11) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `origem`
--

CREATE TABLE `origem` (
  `id` int(11) NOT NULL,
  `sigla_origem` varchar(100) DEFAULT NULL,
  `nome_origem` varchar(255) DEFAULT NULL,
  `contato_origem` varchar(20) DEFAULT NULL,
  `endereco_origem` varchar(255) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `origem`
--

INSERT INTO `origem` (`id`, `sigla_origem`, `nome_origem`, `contato_origem`, `endereco_origem`, `data_criacao`, `data_alteracao`) VALUES
(1, 'CAPS II AD JABAQUARA', 'Centros de Atenção Psicossocial II Álcool e Drogas - Jabaquara', '(11) 5011-1583', 'Praça Barão de Japurá, 1 - Vila Guarani (Zona Sul), São Paulo - SP, 04313-160', '2022-09-10', '2022-09-10'),
(2, 'CAPS AD II SANTO AMARO', 'Centros de Atenção Psicossocial II Álcool e Drogas - Santo Amaro', '(11) 5523-3566', 'R. Bela Vista, 269 - Jardim Francisco Mendes, São Paulo - SP, 04709-001', '2022-09-10', '2022-09-10'),
(3, 'CAPS AD III CAMPO LIMPO', 'Centros de Atenção Psicossocial III Álcool e Drogas - Jabaquara', '(11) 5841-0472', 'R. Domingos Bicudo, 385 - Vila Pirajussara, São Paulo - SP, 05786-080', '2022-09-10', '2022-09-10'),
(4, 'CAPS AD III GRAJAÚ', 'Centros de Atenção Psicossocial III Álcool e Drogas - Grajaú', '(11) 5528-0280', 'Rua Engenheiro Guaracy Torres, 1253 - Jardim Shangrilá (Zona Sul), São Paulo - SP, 04852-000', '2022-09-10', '2022-09-10'),
(5, 'CAPS AD III CAPELA DO SOCORRO', 'Centros de Atenção Psicossocial III Álcool e Drogas - Capela do Socorro', '(11) 5667-6277', 'Rua Luiz Rotta, 300 - Jardim Panorama, São Paulo - SP, 04836-500', '2022-09-10', '2022-09-10'),
(6, 'CAPS AD III JD. SÃO LUIZ', 'Centros de Atenção Psicossocial III Álcool e Drogas - Jardim São Luiz', '(11) 5851-9146', 'R. Luciano Silva, 179 - Vila das Belezas, São Paulo - SP, 05841-000', '2022-09-10', '2022-09-10'),
(7, 'CAPS III AD JD ANGELA', 'Centros de Atenção Psicossocial III Álcool e Drogas - Jardim Ângela', '(11) 5833-2838', 'R. Padre Claro, 51 - Riviera Paulista, São Paulo - SP, 04923-120', '2022-09-10', '2022-09-10'),
(8, 'CRATOD', 'Centro de Referência de Atendimento a Tabaco, Álcool e Outras Drogas', '0800 227 2863', 'Rua Prates, 165 - Luz, São Paulo - SP, 01121-000', '2022-09-10', '2022-09-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `nome_projeto` varchar(80) DEFAULT NULL,
  `tipo_projeto` varchar(80) DEFAULT NULL,
  `id_responsavel` int(11) DEFAULT NULL,
  `nome_responsavel` varchar(80) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nome_projeto`, `tipo_projeto`, `id_responsavel`, `nome_responsavel`, `data_criacao`, `data_alteracao`) VALUES
(1, 'Jardinagem e Horta', 'POT - Programa Operação Trabalho', 26, 'Amanda (Educador(a))', '2022-09-11', '2022-09-11'),
(2, 'Agricultura Urbana', 'Curso Geral', 26, 'Amanda (Educador(a))', '2022-09-11', '2022-09-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prs`
--

CREATE TABLE `prs` (
  `id` int(11) NOT NULL,
  `nome_beneficiario` varchar(255) DEFAULT NULL,
  `unidade` varchar(255) DEFAULT NULL,
  `data_corrente` date DEFAULT NULL,
  `composicao_familiar` text DEFAULT NULL,
  `hist_vida` text DEFAULT NULL,
  `hist_cuidados_clinicos` text DEFAULT NULL,
  `form_educacional` text DEFAULT NULL,
  `mundo_trabalho` text DEFAULT NULL,
  `cp_m1` varchar(255) DEFAULT NULL,
  `cp_r1` varchar(255) DEFAULT NULL,
  `cp_m2` varchar(255) DEFAULT NULL,
  `cp_r2` varchar(255) DEFAULT NULL,
  `cp_m3` varchar(255) DEFAULT NULL,
  `cp_r3` varchar(255) DEFAULT NULL,
  `cp_m4` varchar(255) DEFAULT NULL,
  `cp_r4` varchar(255) DEFAULT NULL,
  `mp_m1` varchar(255) DEFAULT NULL,
  `mp_r1` varchar(255) DEFAULT NULL,
  `mp_m2` varchar(255) DEFAULT NULL,
  `mp_r2` varchar(255) DEFAULT NULL,
  `mp_m3` varchar(255) DEFAULT NULL,
  `mp_r3` varchar(255) DEFAULT NULL,
  `mp_m4` varchar(255) DEFAULT NULL,
  `mp_r4` varchar(255) DEFAULT NULL,
  `lp_m1` varchar(255) DEFAULT NULL,
  `lp_r1` varchar(255) DEFAULT NULL,
  `lp_m2` varchar(255) DEFAULT NULL,
  `lp_r2` varchar(255) DEFAULT NULL,
  `lp_m3` varchar(255) DEFAULT NULL,
  `lp_r3` varchar(255) DEFAULT NULL,
  `lp_m4` varchar(255) DEFAULT NULL,
  `lp_r4` varchar(255) DEFAULT NULL,
  `obs1` text DEFAULT NULL,
  `resp_elaboração` varchar(155) DEFAULT NULL,
  `data_reavaliacao` date DEFAULT NULL,
  `pontos_reavaliacao_prs` text DEFAULT NULL,
  `obs2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prs`
--

INSERT INTO `prs` (`id`, `nome_beneficiario`, `unidade`, `data_corrente`, `composicao_familiar`, `hist_vida`, `hist_cuidados_clinicos`, `form_educacional`, `mundo_trabalho`, `cp_m1`, `cp_r1`, `cp_m2`, `cp_r2`, `cp_m3`, `cp_r3`, `cp_m4`, `cp_r4`, `mp_m1`, `mp_r1`, `mp_m2`, `mp_r2`, `mp_m3`, `mp_r3`, `mp_m4`, `mp_r4`, `lp_m1`, `lp_r1`, `lp_m2`, `lp_r2`, `lp_m3`, `lp_r3`, `lp_m4`, `lp_r4`, `obs1`, `resp_elaboração`, `data_reavaliacao`, `pontos_reavaliacao_prs`, `obs2`) VALUES
(11, 'Aldjanio dos Santos Pereira', 'Campo Limpo', '2022-08-30', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', '', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Luciana', '2022-09-02', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.'),
(14, 'Aldjanio dos Santos Pereira', 'Campo Limpo', '2022-08-31', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegad', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Luciana', '2022-09-05', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Delegadis gente finis, bibendum egestas augue arcu ut est.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmaprojeto`
--

CREATE TABLE `turmaprojeto` (
  `id` int(11) NOT NULL,
  `nome_turma` varchar(80) DEFAULT NULL,
  `id_projeto` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `data_criacao` date DEFAULT current_timestamp(),
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `id` int(11) NOT NULL,
  `nome_unidade` varchar(100) DEFAULT NULL,
  `contato_unidade` varchar(20) DEFAULT NULL,
  `endereco_unidade` varchar(100) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id`, `nome_unidade`, `contato_unidade`, `endereco_unidade`, `ativo`, `data_criacao`, `data_alteracao`) VALUES
(1, 'Campo Belo', ' (11) 3115-1250', 'R. José dos Santos Júnior, 563 - Campo Belo, São Paulo - SP, 04609-011', 1, '2022-09-11', '2022-09-11'),
(2, 'Centro', '(11) 3214-0830', 'R. Júlio Conceição, 320 - Bom Retiro, São Paulo - SP, 01126-000', 1, '2022-09-11', '2022-09-11'),
(3, 'Ermelino Matarazzo', '(11) 2623-5656', 'Rua Saivá, 59 - Vila Marieta, São Paulo - SP, 03617-020', 1, '2022-09-11', '2022-09-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Senha` varchar(64) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `EpsId` int(11) DEFAULT NULL,
  `Admin` varchar(45) DEFAULT NULL,
  `Ativo` int(11) DEFAULT NULL,
  `IdCargo` int(11) DEFAULT NULL,
  `Cargo` varchar(45) DEFAULT NULL,
  `pdv` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de Usuários';

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Senha`, `Email`, `Nome`, `EpsId`, `Admin`, `Ativo`, `IdCargo`, `Cargo`, `pdv`) VALUES
(23, 'MTIz', 'psicologa@teste.com', 'Fabiana (Coordenador(a) Geral)', 2, '0', 1, 31, 'Coordenador(a) Geral', NULL),
(24, 'MTIz', 'admin@teste.com', 'Admin', 1, '1', 1, 27, 'Administrador(a)', NULL),
(25, 'MTIz', 'lucas@teste.com', 'Lucas (Coord. Adm.)', 3, '0', 1, 28, 'Coordenador(a) Administrativo', NULL),
(26, 'MTIz', 'amanda@teste.com', 'Amanda (Educador(a))', 4, '0', 1, 29, 'Educador(a)', NULL),
(27, 'MTIz', 'psico@teste.com', 'Psicologa (Coordenador(a) Pedagógico(a))', 2, '0', 1, 32, 'Coordenador(a) Pedagógico(a)', NULL),
(29, 'MTIz', 'ivan@teste.com.br', 'Ivan (Diretor(a))', 2, '0', 1, 26, 'Diretor(a)', NULL),
(31, 'MTIz', 'fernando@teste.com', 'Fernando', 3, '0', 1, 33, 'Técnico(a) Administrador(a)', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `logusuario`
--
ALTER TABLE `logusuario`
  ADD PRIMARY KEY (`UsuarioLogado`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `origem`
--
ALTER TABLE `origem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prs`
--
ALTER TABLE `prs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turmaprojeto`
--
ALTER TABLE `turmaprojeto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `eps`
--
ALTER TABLE `eps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `origem`
--
ALTER TABLE `origem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `prs`
--
ALTER TABLE `prs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `turmaprojeto`
--
ALTER TABLE `turmaprojeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `unidade`
--
ALTER TABLE `unidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
