DROP DATABASE IF EXISTS `sandwich_quizz`;

CREATE DATABASE IF NOT EXISTS `sandwich_quizz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sandwich_quizz`;

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `answer_check` tinyint(1) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_question_question_id` (`question_id`);
  
ALTER TABLE `question`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `answer`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `answer`
  ADD CONSTRAINT `question_idfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `question` (`id`, `question`) VALUES
(1, 'Qui a dit que 1+1 pouvait faire \"même peut-être 11\"'),
(2, 'En combien d\'heures les protagonistes du \"Tour de monde\" en 80 jours de Jules Verne font-ils le tour du monde'),
(3, 'Dans \"les Simpson\", le gérant du bar s\'appelle'),
(4, 'Qui n\'a jamais combattu Dracula au cinéma'),
(5, 'Laquelle de ces peintures n\'existe pas'),
(6, 'Laquelle de ces peintures n\'existe pas'),
(7, 'Qu\'est-ce qui est surpenant quand David Banner se transforme en Hulk'),
(8, 'Jean-Claude Vandamme a déclaré dans Première : \"Je suis fasciné par l\'air. Si vous enlever l\'air du ciel...\"'),
(9, 'En plongée, qui signifie le geste pouce et index joints faisant un cercle'),
(10, 'Qu\'est-ce que la kénophobie'),
(11, 'Quel gang n\'a jamais existé au cinéma'),
(12, 'Un anglais a reçu un avertissement de la SPA anglaise parce qu\'il :'),
(13, 'Quel est le point commun ente Janis Joplin, Jimi Hendrix et Jim Morisson'),
(14, 'Quelle est la durée de vie d\'un termite'),
(15, 'Une seule de ces chansons de Fancky Vincent n\'est pas dans l\'album Franky Vincent'),
(16, 'A quoi s\'intéresse-t-on quand on fait de la potamologie'),
(17, 'Que signifie le nom du groupe corse \'I Muvrini\''),
(18, 'Laquelle de ces montagnes existe'),
(19, 'Qu\'est-ce qu\'une ploutocratie'),
(20, 'En l\'an 2000, combien de personnes ont été tuées par des requins'),
(21, 'Comment est mort l\'inventeur du parachute'),
(22, 'Yamakasi veut dire :'),
(23, 'Quel est le nom de la petite Sirène de Disney'),
(24, 'Pourquoi les autruches enfouissent-elles leut tête dans le sol');

