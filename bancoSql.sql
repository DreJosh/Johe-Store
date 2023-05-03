-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 26-Abr-2023 às 19:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbadm`
--
CREATE DATABASE `dbadm`;

/*Criando tabela de vendedores*/
CREATE TABLE `vendedores` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dtcria` date NOT NULL,
  `status` varchar(2) NOT NULL,
   PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* Criando dados do vendedor André*/
INSERT INTO `vendedores` (`codigo`, `nome`, `email`, `dtcria`, `status`) 
VALUES ('1', 'André Luiz Belmonte', 'andrebelmonte.234@outlook.com', '2023-05-02', '')

/* Criando dados do vendedor Henrique*/
INSERT INTO `vendedores` (`codigo`, `nome`, `email`, `dtcria`, `status`) 
VALUES ('2', 'Henrique Martin Ferreira da Paixão', 'henriquemfpaixao@gmail.com', '2023-05-03', '')

/*Criando tabela de materiais*/
CREATE TABLE `dbadm`.`material` (`codMaterial` INT(15) NOT NULL AUTO_INCREMENT , `descricao` VARCHAR(255) NOT NULL , `codCliente` INT(20) NOT NULL , `dataCria` DATE NOT NULL , `MatMini` INT(255) NOT NULL , `Matmax` INT(255) NOT NULL , `status` VARCHAR(3) NOT NULL , `usucria` INT(255) NOT NULL , PRIMARY KEY (`codMaterial`)) ENGINE = InnoDB;

/*Criando dados de material*/
INSERT INTO `material` (`codMaterial`, `descricao`, `codCliente`, `dataCria`, `MatMini`, `Matmax`, `status`, `usucria`) VALUES ('1', 'Camisa lisa tamanho G cinza', '789485712', '2023-05-03', '5', '9999', '', '1');

/*Cadastrando venda*/
INSERT INTO `movloja` (`Produto`, `dtmov`, `tpdov`, `func`, `cliente`, `dtcria`, `Saldo`, `qtdeMov`, `meioVenda`) VALUES ('1', '2023-03-01', '2', '1', 'Luzia Sandra Belmonte Ferreira', '2023-05-03 16:41:17.000000', '25', '1', 'P');