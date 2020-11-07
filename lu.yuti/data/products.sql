-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2020 at 07:04 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yutilu_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `quantity` decimal(9,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(1, 'MR.ITO Cookies', '', '', 5.50, '2020-11-06 17:21:19', '2020-11-06 17:21:19', 'snack', 'img/mr_cookie_main.jpg', 'img/mr_cookie_1.jpg,img/mr_cookie_2.jpg', 'img/mr_cookie_thumb.jpg', 'MR.ITO CONFETTI California Rum Grape Cookies 5pc 130g', 5.00),
(2, 'HAITAI Chip', '', '', 2.00, '2020-11-06 17:28:05', '2020-11-06 17:28:05', 'snack', 'img/hai_chip_main.jpg', 'img/hai_chip_main_1.jpg,img/hai_chip_2.jpg', 'img/hai_chip_main_thumb.jpg', 'HAITAI Honey Butter Chip 60g', 8.00),
(3, 'CALBEE Potato Stick', '', '', 2.30, '2020-11-06 17:30:37', '2020-11-06 17:30:37', 'snack', 'img/potato_stick_main.jpg', 'img/potato_stick_1.jpg,img/potato_stick_2.jpg', 'img/potato_stick_thumb.jpg,', 'CALBEE JagaRico Potato Stick Umami Seaweed Flavor 52g', 8.00),
(4, 'JINJU Fish Sausage', '', '', 6.00, '2020-11-06 17:32:42', '2020-11-06 17:32:42', 'snack', 'img/fish_sausage_main.jpg', 'img/fish_sausage_1.jpg,img/fish_sausage_2.jpg', 'img/fish_sausage_thumb.jpg', 'JINJU Fish Sausage Ham Flavor 280g', 4.00),
(5, 'HOUSE Vitamin Jelly', '', '', 3.50, '2020-11-06 17:34:03', '2020-11-06 17:34:03', 'snack', 'img/vitamin_jelly_main.jpg', 'img/vitamin_jelly_1.jpg,img/vitamin_jelly_2.jpg', 'img/vitamin_jelly_thumb.jpg', 'HOUSE Wellness Foods 1 Day Vitamin Jelly Muscat 180g', 8.00),
(6, 'UHA Milk Candy', '', '', 4.20, '2020-11-06 17:36:30', '2020-11-06 17:36:30', 'snack', 'img/milk_candy_main.jpg', 'img/milk_candy_1.jpg,img/milk_candy_2.jpg', 'img/milk_candy_thumb.jpg', 'MIKAKUTO TOKUNO Milk Candy 85g', 6.00),
(7, 'ORION Chocoboy Snack', '', '', 3.30, '2020-11-06 17:37:36', '2020-11-06 17:37:36', 'snack', 'img/chocoboy_snack_main.jpg', 'img/chocoboy_snack_1.jpg,img/chocoboy_snack_2.jpg', 'img/chocoboy_snack_thumb.jpg', 'ORION Chocoboy Snack made in Korea 144g', 4.00),
(8, 'ORION Koreabob Seaweed', '', '', 2.10, '2020-11-06 17:40:54', '2020-11-06 17:40:54', 'snack', 'img/koreabob_seaweed_main.jpg', 'img/koreabob_seaweed_1.jpg,img/koreabob_seaweed_2.jpg', 'img/koreabob_seaweed_thumb.jpg', 'ORION Koreabob Seaweed are animal crackers with seaweed flavor 40g', 6.00),
(9, 'DAOXIANGCUN Mochi', '', '', 4.00, '2020-11-06 17:42:29', '2020-11-06 17:42:29', 'snack', 'img/dao_mochi_main.jpg', 'img/dao_mochi_1.jpg,img/dao_mochi_2.jpg', 'img/dao_mochi_thumb.jpg', 'DXC-Fruit Mochi Matcha Flavor 210g', 8.00),
(10, 'MOUTHDOLEAK candy', '', '', 4.00, '2020-11-06 17:44:01', '2020-11-06 17:44:01', 'snack', 'img/Mou_candy_main.jpg', 'img/Mou_candy_1.jpg,img/Mou_candy_2.jpg', 'img/Mou_candy_thumb.jpg', 'MOUTHDOLEAK TAMARIND CANDY 160g', 4.00),
(11, 'YUMEI Jujube Cake ', '', '', 3.50, '2020-11-06 17:47:39', '2020-11-06 17:47:39', 'snack', 'img/jujube_cake_main.jpg', 'img/jujube_cake_1.jpg,img/jujube_cake_2.jpg', 'img/jujube_cake_thumb.jpg', 'YUMEI Jujube Cake With Osmanthus 168g', 5.00),
(12, 'Uncle Yu BBQ Flavored Scallops', '', '', 9.90, '2020-11-06 17:48:59', '2020-11-06 17:48:59', 'snack', 'img/uncle_scallops_main.jpg', 'img/uncle_scallops_1.jpg,img/uncle_scallops_2.jpg', 'img/uncle_scallops_thumb.jpg', 'Uncle Yu BBQ Flavored Scallops Snack with frozen scallops and oyster mushrooms,20pk 240g', 6.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
