-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2022 às 00:22
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hubinnovation`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestra`
--

CREATE TABLE `palestra` (
  `id_palestra` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `sala` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `id_palestrante` int(11) NOT NULL,
  `dia_palestra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `palestra`
--

INSERT INTO `palestra` (`id_palestra`, `nome`, `descricao`, `sala`, `vagas`, `id_palestrante`, `dia_palestra`) VALUES
(1, 'Sustentabilidade atravÃ©s do Cuidado Centrado no Paciente', 'GestÃ£o Hospitalar /Qualidade: Sustentabilidade atravÃ©s do Cuidado Centrado no Paciente', 101, 14, 1, 1),
(2, 'Data Science: Visualização de Dados com Python - Aplicação no seu Dia a Dia', ' Este workshop tem como objetivo demonstrar que mesmo com pouco conhecimento é rápido transformar dados do seu dia a dia em informações com valor agregado, vamos utilizar a linguagem de programação Python, uma das linguagens mais utilizadas pelos Cientistas de Dados, e com ela nós vamos ler as informações de vários arquivos &#34;.pdf&#34;, tratar e organizar os dados coletados e gerar visualizações e gráficos que irão auxiliar na análise e tomada de decisão', 322, 11, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestrante`
--

CREATE TABLE `palestrante` (
  `id_palestrante` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `palestrante`
--

INSERT INTO `palestrante` (`id_palestrante`, `nome`, `imagem`) VALUES
(1, 'Regina Pereira', '../../uploads/fotos/63499b87b3d83.jfif'),
(2, 'Rafael Valente', '../../uploads/fotos/63499c096ec7f.jfif'),
(3, 'Deyvid Michel', '../../uploads/fotos/63499c996f42c.jfif'),
(4, 'Blink FM', '../../uploads/fotos/634aebbf068df.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuaio` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `telefone` char(11) DEFAULT NULL,
  `info` varchar(160) DEFAULT NULL,
  `lgpd` varchar(160) DEFAULT NULL,
  `id_palestra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuaio`, `nome`, `cpf`, `data_nasc`, `email`, `sexo`, `telefone`, `info`, `lgpd`, `id_palestra`) VALUES
(6, 'THIAGO ALMEIDA', '02102202324', '2022-10-11', 'thiagoalmeida@live.com', 'masculino', '67988888333', '1', '1', 1),
(7, 'THIAGO ALMEIDA', '02102202324', '2022-10-20', 'thiagoalmeida@live.com', 'masculino', '67988888333', '1', '1', 10),
(10, 'THIAGO ALMEIDA', '01342850181', '2022-10-06', 'thiagoalmeida@live.com', 'masculino', '67988888333', '1', '1', 60);

--
-- Acionadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `atualiza_vagas` AFTER INSERT ON `usuario` FOR EACH ROW BEGIN
	UPDATE palestra 
	SET vagas = vagas - 1
	WHERE id_palestra = new.id_palestra;
END
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `palestra`
--
ALTER TABLE `palestra`
  ADD PRIMARY KEY (`id_palestra`);

--
-- Índices para tabela `palestrante`
--
ALTER TABLE `palestrante`
  ADD PRIMARY KEY (`id_palestrante`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuaio`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `palestra`
--
ALTER TABLE `palestra`
  MODIFY `id_palestra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `palestrante`
--
ALTER TABLE `palestrante`
  MODIFY `id_palestrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
