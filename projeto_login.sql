-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2019 às 00:56
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Jandson Talison', 'jandsontalison007@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Marcio Pereira', 'marcio@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'JoÃ£o da Silva', 'joaosilva@hotmail.com', 'e8d95a51f3af4a3b134bf6bb680a213a'),
(4, 'Kaio Sousa', 'ks@outlook.com', '32250170a0dca92d53ec9624f336ca24'),
(5, 'Lucas Bonfim', 'lucas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Paulo Pereir', 'p@gmail.com', 'a906449d5769fa7361d7ecc6aa3f6d28'),
(7, 'Marcela Rodrigues', 'marcela@gmail.com', '7a28e5190cbe115e1c91d273f71ccf1b'),
(8, 'Ronaldo', 'ronaldo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'Teste', 'teste@gmail.com', '698dc19d489c4e4db73e28a713eab07b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
