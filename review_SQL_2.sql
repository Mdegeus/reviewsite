-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 nov 2021 om 14:19
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Gaming'),
(2, 'School'),
(3, 'Web browser'),
(4, 'Virus'),
(5, 'Service'),
(6, 'company');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `img` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `siteLink` varchar(225) NOT NULL,
  `categorie_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `items`
--

INSERT INTO `items` (`id`, `img`, `title`, `description`, `siteLink`, `categorie_id`) VALUES
(1, '/public/img/items/tinwerf16.jpg', 'Roc Mondriaan (tinwerf 16)', 'School voor ict.', '', 2),
(2, '/public/img/items/tinwerf12.jpg', 'Roc Mondriaan (tinwerf 12)', 'School voor techniek.', '', 2),
(3, '/public/img/items/krunker.jpg', 'Krunker.io', 'Shoot your way through 15 rotation maps to earn rewards.', '', 1),
(4, '/public/img/items/homescapes.jpg', 'Home Scapes', 'Homescapes is a casual free-to-play puzzle game. The storyline narrates about attempts of the game\'s protagonist, Austin the Butler, to restore his childhood home. ... The game is available on Apple\'s App Store and MacOS, also on Android (Google Play, Amazon Appstore, and Huawei AppGallery).', '', 1),
(6, '/public/img/items/chrome.png', 'Google Chrome', 'Chrome is a free Internet browser officially released by Google on December 11, 2008. Its features include synchronization with Google services and accounts, tabbed browsing, and automatic translation and spell check of web pages. It also features an integrated address bar/search bar, called the omnibox', '', 3),
(7, '/public/img/items/fortnite.jpg', 'Fortnite', 'Fortnite is a survival game where 100 players fight against each other in player versus player combat to be the last one standing. It is a fast-paced, action-packed game, not unlike The Hunger Games, where strategic thinking is a must in order to survive.', '', 1),
(10, '/public/img/items/warframe.png', 'Warframe', 'Warframe is a free-to-play action role-playing third-person shooter multiplayer online game developed and published by Digital Extremes.', '', 1),
(11, '/public/img/items/c-cocaine.jpg', 'Tripple A grade pure Colombian cocaine', 'Cocaine is a powerfully addictive stimulant drug made from the leaves of the coca plant native to South America. Although health care providers can use it for valid medical purposes, such as local anesthesia for some surgeries, cocaine is an illegal drug. As a street drug, cocaine looks like a fine, white, crystal powder. Street dealers often mix it with things like cornstarch, talcum powder, or flour to increase profits. They may also mix it with other drugs such as the stimulant amphetamine.', '', 2),
(12, '/public/img/items/firefox.jpg', 'Fire Fox', '', '', 3),
(14, '/public/img/items/covid.jpg', 'Covid-19 (Corona)', 'Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.  Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age.   The best way to prevent and slow down transmission is to be well informed about the disease and how the virus spreads. Protect yourself and others from infection by staying at least 1 metre apart from others, wearing a properly fitted mask, and washing your hands or using an alcohol-based rub frequently. Get vaccinated when it’s your turn and follow local guidance.  The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols. It is important to practice respiratory etiquette, for example by coughing into a flexed elbow, and to stay home and self-isolate until you recover if you feel unwell.', '', 4),
(15, '/public/img/items/thuisbezorgdnl.png', 'Thuisbezorgd', 'Bestel je favoriete eten in enkele klikken online bij restaurants in je buurt! Tijd om te bestellen bij Thuisbezorgd.nl. Live je Bestelling Volgen. Snelle levering. 8000+ Restaurants. Geen verborgen kosten. Nummer 1 in Nederland.', '', 5),
(16, '/public/img/items/ubereats.png', 'Uber Eats', 'Uber Eats is a food delivery service that\'s an offshoot of the Uber ride-hailing service. You can place orders with local restaurants from the Uber Eats website or mobile app, and food is delivered directly to your door, usually for a small delivery fee.', '', 5),
(17, '/public/img/items/roblox.jpg', 'Roblox', 'Roblox is a global platform where millions of people gather together every day to imagine, create, and share experiences with each other in immersive, user-generated 3D worlds. ... All the online games you see on the platform have been built by members of the Roblox community for members of the Roblox community.', '', 1),
(18, '/public/img/items/minecraft.jpg', 'Minecraft', 'Minecraft is a sandbox video game developed by the Swedish video game developer Mojang Studios. The game was created by Markus \"Notch\" Persson in the Java programming language. Following several early private testing versions, it was first made public in May 2009 before fully releasing in November 2011, with Jens Bergensten then taking over development. Minecraft has since been ported to several other platforms and is the best-selling video game of all time, with over 238 million copies sold and nearly 140 million monthly active users as of 2021.\r\n\r\nIn Minecraft, players explore a blocky, procedurally generated 3D world with virtually infinite terrain, and may discover and extract raw materials, craft tools and items, and build structures or earthworks. Depending on game mode, players can fight computer-controlled mobs, as well as cooperate with or compete against other players in the same world. Game modes include a survival mode, in which players must acquire resources to build the world and maintain health, and a creative mode, where players have unlimited resources and access to flight. Players can modify the game to create new gameplay mechanics, items, and assets.\r\n\r\nMinecraft has been critically acclaimed, winning several awards and being cited as one of the greatest video games of all time. Social media, parodies, adaptations, merchandise, and the annual Minecon conventions played large roles in popularizing the game. The game has also been used in educational environments to teach chemistry, computer-aided design, and computer science. In 2014, Mojang and the Minecraft intellectual property were purchased by Microsoft for US$2.5 billion. A number of spin-off games have also been produced, such as Minecraft: Story Mode, Minecraft Dungeons, and Minecraft Earth.', '', 1),
(19, '/public/img/items/jbl.svg', 'JBL', 'JBL is an American company that manufactures audio equipment, including loudspeakers and headphones. JBL Consumer serves the consumer home market. JBL Professional serves the studio, installed sound, tour sound, portable sound, cars, production, disc jockey, cinema markets, etc.', '', 6),
(20, '/public/img/items/amazon.jpg', 'Amazon', 'Amazon.com is a vast Internet-based enterprise that sells books, music, movies, housewares, electronics, toys, and many other goods, either directly or as the middleman between other retailers and Amazon.com\'s millions of customers.', '', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `item_id` int(255) NOT NULL,
  `title` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `command` text NOT NULL,
  `rating` int(2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `item_id`, `title`, `username`, `email`, `command`, `rating`, `date`) VALUES
(32, 3, '', 'Adnane', 'adnane-1999@hotmail.com', 'Dit is wel een goede game imo', 5, '2021-11-19'),
(36, 14, '', 'karan', 'karankandhai@gmail.com', 'zeg eerlijk ik vind dit virus echt kanker, maar de lockdown was wel nice', 3, '2021-11-19'),
(48, 1, '', 'Karan', 'karankandhai@gmail.com', 'wat een kut school\r\nholy shit ik wil zo snel mogelijk weg van deze kutschool', 1, '2021-11-19'),
(56, 14, '', 'Boomer', 'parisensuki1@gmail.com', 'Oh heb jij ook je QR code?', 2, '2021-11-19'),
(57, 1, '', 'Michel De geus', 'parisensuki1@gmail.com', 'been there, done that. please god never again.', 1, '2021-11-19');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
