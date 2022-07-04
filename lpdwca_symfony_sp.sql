-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 03 juil. 2022 à 20:14
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lpdwca_symfony_sp`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `type_id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `type_id`, `title`, `description`) VALUES
(1, 1, 'Salaire', 'Rémunération d\'un travail, d\'un service.'),
(2, 2, 'Loyer', 'Location d\'un local d\'habitation ou professionnel.'),
(3, 1, 'Aides sociales', 'Assistance aux personnes les plus défavorisées, prise en charge par la collectivité qui s\'est substituée à l\'assistance publique.'),
(4, 2, 'Dépenses alimentaires', 'Dépenses liées aux courses alimentaires.'),
(5, 2, 'Crédit', 'Acte par lequel une banque ou un organisme financier effectue une avance de fonds ; délai accordé pour un remboursement ; montant de l\'avance.'),
(6, 2, 'Factures', 'Note d\'une somme à payer.'),
(7, 2, 'Dépenses pour loisirs', 'Dépenses liées aux loisirs.'),
(8, 1, 'Don', 'Somme perçue de la part d\'une tierce personne.');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220630215122', '2022-06-30 21:51:38', 142),
('DoctrineMigrations\\Version20220630215523', '2022-06-30 21:55:33', 117),
('DoctrineMigrations\\Version20220630215740', '2022-06-30 21:57:56', 236),
('DoctrineMigrations\\Version20220630220602', '2022-06-30 22:06:14', 432),
('DoctrineMigrations\\Version20220701071858', '2022-07-01 07:19:07', 99);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `moyen_de_paiement`
--

CREATE TABLE `moyen_de_paiement` (
  `id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moyen_de_paiement`
--

INSERT INTO `moyen_de_paiement` (`id`, `title`, `description`) VALUES
(1, 'Carte bancaire', 'Document remis par une banque à un client titulaire d\'un compte et qui permet à ce dernier de retirer ou de transférer des fonds au profit du fournisseur d\'un bien ou d\'un service.'),
(2, 'Chèque', 'Écrit par lequel une personne (tireur) donne l\'ordre de remettre, soit à son profit, soit au profit d\'un tiers, une somme à prélever sur le crédit (de son compte ou d\'un autre).'),
(3, 'Espèces', 'Monnaie immédiatement disponible, utilisable dans les échanges etc. , comme les pièces et les billets de banque.'),
(4, 'Virement bancaire', 'Opération d\'envoi et de réception d\'argent entre deux comptes bancaires : soit ouverts dans la même banque, soit dans deux banques différentes.'),
(5, 'Prélèvement automatique', 'Mandat donné à un banquier, qui sera exécuté ensuite de manière récurrente, le plus souvent mensuellement.'),
(6, 'Portefeuille électronique', 'Dispositif qui peut stocker de la monnaie sans avoir besoin d\'un compte bancaire et d\'effectuer directement des paiements sur des terminaux de paiement.'),
(7, 'Paiement mobile', 'Différents usages d\'un smartphone qui peuvent être réalisés pour effectuer un paiement.'),
(8, 'e-Carte Bleue', 'Service rattaché à une carte bancaire qui permet de régler des achats à distance (Internet, téléphone) sans avoir à transmettre les coordonnées de la carte bancaire.'),
(9, 'Autre moyen de paiement', 'Tout autre moyen de paiement.');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `type_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `moyen_de_paiement_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`id`, `type_id`, `user_id`, `category_id`, `name`, `montant`, `created_at`, `moyen_de_paiement_id`) VALUES
(28, 1, 5, 1, 'Salaire du mois de juin', 800, '2022-07-03 18:13:11', 1),
(29, 1, 5, 8, 'Cadeau de Mamie', 50, '2022-07-03 18:13:33', 1),
(30, 2, 5, 7, 'Achat Far Cry 6', 40, '2022-07-03 18:14:23', 1),
(31, 2, 5, 4, 'Courses de la semaine du 27 juin', 100, '2022-07-03 18:15:04', 1),
(32, 2, 5, 5, 'Transaction2021', 617, '2021-07-03 19:18:15', 1),
(34, 1, 5, 8, 'Test_moyenDePaiement', 4981, '2022-07-03 20:01:45', 1),
(35, 1, 7, 1, 'Transaction', 100, '2022-07-03 21:45:07', 4),
(36, 1, 7, 3, 'Test', 250, '2022-07-03 21:45:35', 2),
(37, 2, 7, 4, 'Dépenses du jour', 80, '2022-07-03 21:46:38', 3);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coefficient` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `title`, `coefficient`) VALUES
(1, 'Crédit', 1),
(2, 'Débit', -1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `first_name`, `last_name`, `created_at`) VALUES
(5, 'arthur.daigremont@etu.unistra.fr', '[\"ROLE_ADMIN\"]', '$2y$13$wWhGgOhJTS5R6aUbUnJqDuLEelBrsvAQgq06U3E0cNCvVGhu5RtfG', 'Arthur', 'Daigremont', '2022-07-03 17:23:33'),
(7, 'sp_symfony@lpdwca.fr', '[\"ROLE_ADMIN\"]', '$2y$13$2W0vJ2UjR1ypwkw6LjSit.opAUsR529QmHut6IYNo1V77NuIorSYm', 'admin', 'admin', '2022-07-03 21:31:55'),
(8, 'sp_symfony_user@lpdwca.fr', '[]', '$2y$13$oT1ckZu7usRxegaaKtCRheC3BCr5jmTtWYeGKsvMUDpV5zHQPSREy', 'user', 'user', '2022-07-03 21:32:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_64C19C1C54C8C93` (`type_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `moyen_de_paiement`
--
ALTER TABLE `moyen_de_paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_723705D1C54C8C93` (`type_id`),
  ADD KEY `IDX_723705D1A76ED395` (`user_id`),
  ADD KEY `IDX_723705D112469DE2` (`category_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `moyen_de_paiement`
--
ALTER TABLE `moyen_de_paiement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_64C19C1C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_723705D112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_723705D1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_723705D1C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
