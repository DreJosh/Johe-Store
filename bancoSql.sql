-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 26-Abr-2023 às 19:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Banco de dados: `dbadm`
--
CREATE DATABASE `dbadm`;

/*Criando tabela de vendedores*/
CREATE TABLE `funcionarios` (
  `registro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `centroCusto` int(11) NOT NULL,
  `empresa` varchar(255) NOT NULL, 
  `email` varchar(255) NOT NULL,
  `dtcria` date NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telefone` varchar(20) NOT NULL,
    PRIMARY KEY (`codigo`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

/*Criando tabela de materiais*/
CREATE TABLE `dbadm`.`material` (
  `codMaterial` INT(15) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NOT NULL,
  `fornecedor` INT(20) NOT NULL,
  `dataCria` DATE NOT NULL,
  `MatMini` INT(255) NOT NULL,
  `Matmax` INT(255) NOT NULL,
  `status` VARCHAR(3) NOT NULL,
  `usucria` INT(255) NOT NULL,
  PRIMARY KEY (`codMaterial`)
) ENGINE = InnoDB;

/*Criando tabela de movimentação de material*/
CREATE TABLE `dbadm`.`movloja` (
  `Produto` INT(255) NOT NULL,
  `Descricao` VARCHAR(255) NOT NULL,
  `dtMov` DATE NOT NULL,
  `func` INT(6) NOT NULL,
  `cliente` VARCHAR(255) NOT NULL,
  `dtcria` DATETIME(6) NOT NULL,
  `saldo` INT(255) NOT NULL,
  `qtdeMov` INT(255) NOT NULL,
  `meioVenda` TEXT NOT NULL,
  `tpdov` VARCHAR(20) NOT NULL
) ENGINE = InnoDB;

/*Cadastrando venda*/
INSERT INTO
  `movloja` (
    `Produto`,
    `dtMov`,
    `func`,
    `cliente`,
    `dtcria`,
    `saldo`,
    `qtdeMov`,
    `meioVenda`,
    `tpdov`
  )
VALUES
  (
    '1',
    '2023-03-01',
    '1',
    'Luiza Santos',
    '2023-05-04 12:45:48.000000',
    '25',
    '1',
    'P',
    '2'
  );

/*Criar tabela de fornecedores*/
CREATE TABLE `dbadm`.`fornecedores` (
  `CEP` INT(10) NOT NULL,
  `pais` VARCHAR(20) NOT NULL DEFAULT 'BRAZIL',
  `estado` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `municipio` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `CNPJ` INT(15) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `codigo` INT(255) NOT NULL AUTO_INCREMENT,
  `CodDDD` INT(3) NOT NULL,
  `telefone` INT(10) NOT NULL DEFAULT '11',
  `emailEmpre` VARCHAR(100) NOT NULL,
  `dtcria` DATETIME(6) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE = InnoDB;