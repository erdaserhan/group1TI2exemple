-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 09 fév. 2024 à 09:23
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.2.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `group2ti2exemple`
--
DROP DATABASE IF EXISTS `group2ti2exemple`;
CREATE DATABASE IF NOT EXISTS `group2ti2exemple` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `group2ti2exemple`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(120) NOT NULL,
  `courriel` varchar(160) NOT NULL,
  `titre` varchar(120) NOT NULL,
  `texte` varchar(600) NOT NULL,
  `date_heure` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `nom`, `courriel`, `titre`, `texte`, `date_heure`) VALUES
(1, 'Pitz Mike', 'gitweb@cf2m.be', 'Premier commentaire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2024-02-09 10:12:40'),
(2, 'Pierre Sandron', 'pierre@sansnom.be', 'Idiot va!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2024-02-09 10:19:40');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
