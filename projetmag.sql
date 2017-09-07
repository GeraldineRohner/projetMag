-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 sep. 2017 à 15:46
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetmag`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `titlte` varchar(100) NOT NULL,
  `DoP` date NOT NULL,
  `subject` int(11) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `author`, `titlte`, `DoP`, `subject`, `content`) VALUES
(1, 'Bill Gates', 'How to make a billion in seconds', '2017-09-03', 0, 'Spicy jalapeno bacon ipsum dolor amet occaecat sed rump laboris enim pig ground round veniam nisi drumstick cupim tempor ut deserunt. Enim drumstick lorem pork chop frankfurter. Pastrami dolor ex sed quis eiusmod ipsum. Non velit mollit voluptate frankfurter drumstick esse incididunt rump dolore porchetta andouille chuck corned beef. Salami fatback elit non jerky tenderloin quis incididunt kevin meatball aliquip capicola chuck proident. In meatball short ribs pork chop fatback.\r\n\r\nAnim in cillum, ball tip esse minim velit. Jowl dolor do nisi, filet mignon enim cillum ullamco. Beef proident officia ipsum, chicken tenderloin beef ribs short loin venison pork belly biltong adipisicing pastrami capicola. Tempor sirloin jowl, culpa laborum pancetta pork chop boudin occaecat mollit eu. Sunt ex velit drumstick bresaola pork belly exercitation picanha frankfurter. Aute frankfurter t-bone eiusmod, sausage fugiat ground round. Pariatur tenderloin proident, quis nisi capicola consectetur jerky reprehenderit cupim nostrud.\r\n\r\nFrankfurter drumstick filet mignon pariatur dolore, ad turkey pork loin ham hock sausage picanha ea esse. Aliqua voluptate shankle reprehenderit, jowl commodo sunt adipisicing shoulder alcatra ex pancetta dolore. Sausage cupim incididunt drumstick et officia ut excepteur. Pastrami quis salami, cillum rump sint meatloaf veniam ea ut. Ground round strip steak adipisicing nostrud short loin pig pork belly, venison tail beef bacon duis ea. Ham hock cupidatat meatloaf, adipisicing bacon short loin ullamco. Eu magna consequat tongue short loin frankfurter aute.\r\n\r\nEa consequat proident officia kevin ad leberkas occaecat jowl pork loin deserunt sunt kielbasa excepteur. Tongue sunt pig, ut aliqua excepteur ad adipisicing sausage jerky bresaola brisket nostrud. Officia landjaeger cupim, pancetta ham hock sed porchetta. Dolore rump shankle aute. Capicola doner quis corned beef jowl. Sed ipsum tongue jerky bresaola meatloaf. Laboris sint brisket short ribs.\r\n\r\nChuck capicola ut dolore drumstick. Capicola eiusmod reprehenderit beef ribs, quis burgdoggen est. Ut sausage ut deserunt, cupidatat hamburger fatback. Et pancetta non, ex spare ribs chicken voluptate labore sed. Eiusmod consequat est, cillum sed laboris enim fugiat rump elit ham sint id aliqua. Aute short ribs biltong, in elit beef fatback tempor ex rump labore magna eiusmod consequat pig.\r\n\r\nTenderloin enim qui t-bone nostrud incididunt cow est id, sint sunt beef ribs. Biltong shank esse porchetta, elit proident burgdoggen ea bresaola meatloaf landjaeger. Tenderloin kielbasa tri-tip dolore, biltong duis pork belly ground round. Aute sirloin picanha boudin adipisicing ex, short ribs officia turkey nostrud. Tail velit prosciutto ex, pork loin ut jerky. Irure tri-tip deserunt boudin ut beef ribs proident.\r\n\r\nPork belly meatball consequat incididunt. Kevin commodo porchetta lorem cow sunt proident shankle in. Ham in pork loin dolor brisket. Exercitation burgdoggen est proident. Beef ribs tenderloin salami, eu beef deserunt pastrami commodo hamburger nostrud pork belly chuck.\r\n\r\nMeatball rump pork loin beef ribs. Ea adipisicing turkey magna sed. T-bone culpa labore nostrud, laborum pork chop ut leberkas lorem prosciutto spare ribs dolore elit. Biltong qui eu, sirloin corned beef incididunt turducken occaecat beef shoulder ham hock sint. Duis voluptate jerky nostrud. Beef corned beef velit turkey ut boudin bresaola sunt.\r\n\r\nT-bone chuck in flank filet mignon laboris. Tail rump pariatur, elit nisi do et aute prosciutto. Landjaeger prosciutto chuck shank veniam kielbasa, doner ham hock mollit nisi in aute spare ribs. Qui eu labore ut sed short ribs adipisicing pork belly.\r\n\r\nLandjaeger fatback turkey ea pancetta in reprehenderit aliqua incididunt enim pork chop pork loin tongue. Velit hamburger pork picanha, deserunt pork chop nostrud anim esse enim venison tongue landjaeger short loin. Capicola doner chicken pig eiusmod flank. Elit pariatur eu aliquip. Ad meatball dolore rump, laboris consectetur spare ribs ea. Pork belly pork chop beef deserunt exercitation, kevin ad mollit jerky in ullamco.\r\nDoes your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!'),
(2, 'Amira Jaméstejupp', 'De l\'utilité de l\'humour dans la causalité relationnelle', '2017-09-01', 1, 'Spicy jalapeno bacon ipsum dolor amet occaecat sed rump laboris enim pig ground round veniam nisi drumstick cupim tempor ut deserunt. Enim drumstick lorem pork chop frankfurter. Pastrami dolor ex sed quis eiusmod ipsum. Non velit mollit voluptate frankfurter drumstick esse incididunt rump dolore porchetta andouille chuck corned beef. Salami fatback elit non jerky tenderloin quis incididunt kevin meatball aliquip capicola chuck proident. In meatball short ribs pork chop fatback.\r\n\r\nAnim in cillum, ball tip esse minim velit. Jowl dolor do nisi, filet mignon enim cillum ullamco. Beef proident officia ipsum, chicken tenderloin beef ribs short loin venison pork belly biltong adipisicing pastrami capicola. Tempor sirloin jowl, culpa laborum pancetta pork chop boudin occaecat mollit eu. Sunt ex velit drumstick bresaola pork belly exercitation picanha frankfurter. Aute frankfurter t-bone eiusmod, sausage fugiat ground round. Pariatur tenderloin proident, quis nisi capicola consectetur jerky reprehenderit cupim nostrud.\r\n\r\nFrankfurter drumstick filet mignon pariatur dolore, ad turkey pork loin ham hock sausage picanha ea esse. Aliqua voluptate shankle reprehenderit, jowl commodo sunt adipisicing shoulder alcatra ex pancetta dolore. Sausage cupim incididunt drumstick et officia ut excepteur. Pastrami quis salami, cillum rump sint meatloaf veniam ea ut. Ground round strip steak adipisicing nostrud short loin pig pork belly, venison tail beef bacon duis ea. Ham hock cupidatat meatloaf, adipisicing bacon short loin ullamco. Eu magna consequat tongue short loin frankfurter aute.\r\n\r\nEa consequat proident officia kevin ad leberkas occaecat jowl pork loin deserunt sunt kielbasa excepteur. Tongue sunt pig, ut aliqua excepteur ad adipisicing sausage jerky bresaola brisket nost\r\n\r\nChuck capicola ut dolore drumstick. Capicre sed. Eiusmod consequat est, cillum sed laboris enim fugiat rump elit ham sint id aliqua. Aute short ribs biltong, in elit beef fatback tempor ex rump labore magna eiusmod consequat pig.\r\n\r\nTenderloin enim qui t-bone nostrud incididunt cow est id, sint sunt beef ribs. Biltong shank esse porchetta, elit proident burgdoggen ea bresaola meatloaf landjaeger. Tenderloin kielbasa tri-tip dolore, biltong duis pork belly ground round. Aute sirloin picanha boudin adipisicing ex, short ribs officia turkey nostrud. Tail velit prosciutto ex, pork loin ut jerky. Irure tri-tip deserunt boudin ut beef ribs proident.\r\n\r\nPork belly meatball consequat incididunt. Kevin commodo porchetta lorem cow sunt proident shankle in. Ham in pork loin dolor brisket. Exercitation burgdoggen est proident. Beef ribs tenderloin salami, eu beef deserunt pastrami commodo hamburger nostrud pork belly chuck.\r\n\r\nMeatball rump pork loin beef ribs. Ea adipisicing turkey magna sed. T-bone culpa labore nostrud, laborum pork chop ut leberkas lorem prosciutto spare ribs dolore elit. Biltong qui eu, sirloin corned beef incididunt turducken occaecat beef shoulder ham hock sint. Duis voluptate jerky nostrud. Beef corned beef velit turkey ut boudin bresaola sunt.\r\n\r\nT-bone chuck in flank filet mignon laboris. Tail rump pariatur, elit nisi ectetur spare ribs ea. Pork belly pork chop beef deserunt exercitation, kevin ad mollit jerky in ullamco.\r\nDoes your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!'),
(3, 'Valentine Polsky', 'Le scandale Rihanna', '2017-08-14', 3, 'Anim in cillum, ball tip esse minim velit. Jowl dolor do nisi, filet mignon enim cillum ullamco. Beef proident officia ipsum, chicken tenderloin beef ribs short loin venison pork belly biltong adipisicing pastrami capicola. Tempor sirloin jowl, culpa laborum pancetta pork chop boudin occaecat mollit eu. Sunt ex velit drumstick bresaola pork belly exercitation picanha frankfurter. Aute frankfurter t-bone eiusmod, sausage fugiat ground round. Pariatur tenderloin proident, quis nisi capicola consectetur jerky reprehenderit cupim nostrud.\r\n\r\nFrankfurter drumstick filet mignon pariatur dolore, ad turkey pork loin ham hock sausage picanha ea esse. Aliqua voluptate shankle reprehenderit, jowl commodo sunt adipisicing shoulder alcatra ex pancetta dolore. Sausage cupim incididunt drumstick et officia ut excepteur. Pastrami quis salami, cillum rump sint meatloaf veniam ea ut. Ground round strip steak adipisicing nostrud short loin pig pork belly, venison tail beef bacon duis ea. Ham hock cupidatat meatloaf, adipisicing bacon short loin ullamco. Eu magna consequat tongue short loin frankfurter aute.');

-- --------------------------------------------------------

--
-- Structure de la table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `TelephoneNb` varchar(50) NOT NULL,
  `Favs` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_info`
--

INSERT INTO `users_info` (`id`, `LastName`, `FirstName`, `UserName`, `DoB`, `Email`, `Password`, `TelephoneNb`, `Favs`, `Status`) VALUES
(2, 'Dupont', 'Jean', 'Jdupont', '1954-07-11', 'Jdupont@gmail.com', '$2y$10$Yj7Jhp7S6NRNBRqj63F.W.Y7SDxzMlm91vEv67cs2iut8512DTmBa', '0675559764', '0', 0),
(3, 'Admin', 'Admin', 'Admin', '1974-08-17', 'jake.shelton@gmail.com', '$2y$10$GnRVlLaS2hh7PEAO/d9YruU7F2NZniREM6/pr0pWQZdl12ZdW7yXq', '0644963157', '1', 1),
(4, 'Turner', 'Samanta', 'Leelo27', '1981-09-15', 'Leelo27@caramail.com', '$2y$10$ETuwFYp8seiaF.5hEVZg9egqJEtVszu/0OLJK0LpZOM3Wd4DJ4hLu', '', '3', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
