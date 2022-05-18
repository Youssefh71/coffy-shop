-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 01:26 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_wf3`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `recette` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `description`, `recette`, `image`) VALUES
(1, 'Caffè Latte', 'L\'intensité de notre espresso rencontre la douceur du lait chauffé à la vapeur, le tout recouvert d\'une fine couche de mousse de lait. ', '2 cups milk \r\n\r\n1 ⅓ cups hot freshly brewed dark roast espresso coffee .', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Hot_Drinks_Caffe_Latte.jpg.webp?itok=sqeqXDrx'),
(3, 'Americano ', 'Shots d\'espresso couverts d\'eau chaude, générant une fine couche crémeuse.', 'Espresso machine, espresso coffee beans, boiling water', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Hot_Drinks_Americano.jpg.webp?itok=FbcjipdO'),
(4, 'Café Filtre', 'Café de torréfaction moyenne, doux, équilibré et riche en saveur. ', 'Cafetière filtre café en grain 1 poêle une pincée de sel eau de pluie si possible 1 moulin à café', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Hot_Drinks_Cafe_Filtre_Brewed_Coffee.jpg.webp?itok=DlIaMvzE'),
(5, 'Espresso ', 'la boisson expresso est une boisson au café de spécialité qui comprend un ou plusieurs coups d\'espresso qui sont \"tirés\" sur une machine à expresso', '4 ounces of strong brewed coffee from a french press', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-09/Starbucks_FR_Website_600x600_Espresso.jpg.webp?itok=Scy5caUd'),
(6, 'Frappuccino', 'Sauce saveur chocolat et pépites de chocolat Frappuccino® combinées à du sirop saveur café et du lait, mélangés à de la glace pilée, garnis de crème fouettée et d\'un filet de sirop saveur chocolat. ', 'Chocolate syrup, almond, whipped cream, sugar substitute, crushed ice', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Frappuccino_Choco_Chip.jpg.webp?itok=mmRqKAZv'),
(7, 'Chocolat Viennois Classique Glacé ', 'Lait froid mélangé à un sirop saveur chocolat. ', 'Chocolate ice cream, whipped cream, espresso, milk, ice ', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Iced_Classic_Chocolate.jpg.webp?itok=izSI6TA1'),
(8, 'Mocha ', 'Un espresso riche et corsé, mélangé avec du sirop saveur chocolat et du lait chauffé à la vapeur. ', 'Mason jar, unsweetened cocoa powder, heavy cream, whipped', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-09/Starbucks_FR_Website_600x600_Mocha.jpg.webp?itok=9z7O9M-e'),
(9, 'Teavana- Chai Tea Latte ', 'Un latte chaud et aromatique au thé Chai, merveilleusement doux et épicé', 'Mint tea, lemonade, peppermint syrup, honey syrup', 'https://www.starbucks.fr/sites/starbucks-fr/files/styles/c04_image_text_grid_600x600/public/2020-07/Starbucks_FR_Deliveroo_1200x1200_Hot_Drinks_Chai_Tea_Latte.jpg.webp?itok=Mxb764XZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
