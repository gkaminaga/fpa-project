-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2022 às 05:46
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
(3, 'Campo Belo ', '2021-10-07', 'CAPS - Capela do Socorro', 1, NULL, NULL, NULL, NULL, '', 'Aldjanio dos Santos Pereira', 'Aldjanio dos Santos Pereira', 'Brasileiro', 'Saloá - PE', 'Masculino', 'parda', 'heterossexual', '1977-01-28', 'solteiro', '150', 'Bolsa Familia', 'Residência Prórpia', 'Rua Manga Natal, 261 - casa 1', '255752155', 'ssp', 'SP', '26957073807', '', '', '11972297897', '11949633256', 'Ivanete dos Santos Pereira', 'Severino Pereira da Silva', 0, '', '', '', '', '', '', '', '', '', '', 'Ens Fund Incompleto', '', '', '', '', 'Cirrose Hepatica ', '', 'alcool,cocaina', '2 dias atras alcool / 1 semana atras cocaina', '30 anos', 'Fluoxtina, carbamazepina', 'Jardim Clipa', 'CAPS - Capela do Socorro', '2021-01-06', '2021-12-15', 'Auxiliar de cozinha, Estoquista, Ajudante de pedreiro, Porteiro, Metalurgico', 'Auxiliar de Limpeza', 'Auxiliar de Limpeza', 'Corte e Costura (FPA)', '', '', 'nao', '', 'nao', 'higienizacao e limpeza', 'Trabalhar para continuar a construção da sua casa', '', 'CAPS - Capela do Socorro', 'Luciana', 'Psicologa', '', '', 'Fabiana', 'Fabiana dos Santos de Souza', '2021-10-07'),
(12, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(13, 'asd', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(14, 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, 'asd11111111111111111', '2022-08-02', 'asd', 1, NULL, NULL, NULL, NULL, 'asd', 'asd', 'asd', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(16, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(17, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(18, 'Osasco', '2022-08-22', 'Teste', 1, NULL, NULL, NULL, NULL, 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'Masculino', 'amarela', 'heterossexual', '2022-08-22', 'solteiro', '100000', 'Teste', 'Situação de Rua', 'Teste', '123456789', 'asd', 'PA', '123456789123', '123456', '123456', '111111111', '111111111', 'Teste', 'Teste', 2, 'Teste', '4', '', '', '', '', '', '', '', '', 'Cursando', 'Teste', 'Teste', 'Teste', '15 a 18', 'Teste', 'Teste', 'alcool,tabaco,maconha,cocaina', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', '2022-08-22', '2022-08-22', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', 'sim', 'Teste', 'nao', 'higienizacao e limpeza', 'Teste', 'Teste', 'Teste', 'Teste', 'Teste', '123456', 'Teste', 'Teste', 'Teste', '2022-08-22'),
(19, '', '0000-00-00', '', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eps`
--

CREATE TABLE `eps` (
  `Id` int(11) NOT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `pdv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eps`
--

INSERT INTO `eps` (`Id`, `sigla`, `descricao`, `pdv`) VALUES
(26, 'Diretoria, Coord geral, Coord pedagogica', 'Todas as funções', NULL),
(27, 'Administrador', 'Todas as funções e autorizações para criação de usuários', NULL),
(28, 'Coord adm, Téc administrador', 'Relatórios gerenciais', NULL),
(29, 'Educador e Agente de ação social', 'Atividades pedagógicas', NULL);

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
  `pdv` varchar(45) DEFAULT NULL,
  `Skill` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de Usuários';

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Senha`, `Email`, `Nome`, `EpsId`, `Admin`, `Ativo`, `pdv`, `Skill`) VALUES
(23, 'MTIz', 'psicologa@teste.com', 'Fabiana ', 26, '0', 1, NULL, NULL),
(24, 'MTIz', 'admin@teste.com', 'Admin', 27, '1', 1, NULL, NULL),
(25, 'MTIz', 'lucas@teste.com', 'Lucas', 28, '0', 1, NULL, NULL),
(26, 'MTIz', 'amanda@teste.com', 'Amanda', 29, '0', 1, NULL, NULL),
(27, 'MTIz', 'psico@teste.com', 'Psicologa', 26, '0', 1, NULL, NULL),
(29, 'MTIz', 'ivan@teste.com.br', 'Ivan', 26, '0', 1, NULL, NULL);

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
-- Índices para tabela `logusuario`
--
ALTER TABLE `logusuario`
  ADD PRIMARY KEY (`UsuarioLogado`);

--
-- Índices para tabela `prs`
--
ALTER TABLE `prs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `eps`
--
ALTER TABLE `eps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `prs`
--
ALTER TABLE `prs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
