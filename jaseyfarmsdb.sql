-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 06:27 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaseyfarms`
--
CREATE DATABASE IF NOT EXISTS `jaseyfarms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jaseyfarms`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage_aboutus_cards`
--

CREATE TABLE `aboutpage_aboutus_cards` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage_aboutus_cards`
--

INSERT INTO `aboutpage_aboutus_cards` (`id`, `title`, `content`) VALUES
(4, 'Vision', 'To promote the well-being of consumers through the cultivating and supply of well grown vegetables.'),
(5, 'Mission', 'To employ the modern farming know-how and capability to support the supply of fresh, healthy and quality vegetables at competitive rates with least impact on the environment.'),
(6, 'Values', 'Integrity Healthy products Value for money Environmentally conscious');

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage_content`
--

CREATE TABLE `aboutpage_content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutpage_content`
--

INSERT INTO `aboutpage_content` (`id`, `content`) VALUES
(1, 'More and more people are focusing on vegetables for healthy eating and vegetarian dieting; there are concerns about the source of these vegetables. These concerns include the quality of water used in growing these vegetables, the pesticide and chemical application, whether or not child labor is involved, the carbon footprint and environmental impact of the farming process, and also the post-harvest handling issues. Jasey farms work to address all these issues in their vegetable farming to ensure a sustainable supply of vegetables.'),
(2, 'Jasey Farm is mainly into the farming and supply of the following named vegetables: tomato, onion, eggplant (garden-eggs), sweet pepper, carrots, cabbage, chili pepper, hot pepper, carrot, cucumber, and okra. We provide our products to the general public, and there are pre-orders as well. We recommend you use our \"Order now\" in the menu to place your request for both small and large supplies. Our sales representatives support domestic, institutional, and reseller arrangements.'),
(3, 'We employ a state-of-the-art greenhouse facility and technology to reduce and eliminate the need for the use of dangerous pesticides found on many commercially grown crops. The controlled environment used to farm our vegetables allows us to create an optimum environment for growing our plants. This approach to farming helps to enhance the growth of our plants batch by batch and year after year, giving our customers well developed and nutrient-packed vegetables for their use and consumption always.'),
(4, 'We built our business model around vegetable foods because of the enormous health benefits of vegetables. There are several compelling and robust evidence that a diet rich in vegetables can lower the risk of heart disease and stroke. Persons with high blood pressure can improve their lives by consuming a diet high in vegetables, which restricts the amount of saturated and total fat in the body resulting in lower blood pressure. Numerous studies have revealed what appears to be a strong connection between the consumption of vegetables and its protection against cancer. The increase consumption of vegetables may help reduce the risk of type 2 diabetes. Similarly, concerning body weight, eating non-starchy vegetables is likely to support weight loss over time. Most vegetables contain indigestible fiber, which absorbs water and expands as it passes through the digestive system. This assists in calming symptoms of irritable bowels, and triggering regular bowel movements can relieve or prevent constipation. The bulking and softening action of insoluble fiber also decreases pressure inside the intestinal tract and may help prevent diverticulosis. Lastly, eating vegetables can also keep your eyes healthy and may help prevent two common aging-related eye diseases such as cataracts and macular degeneration. All these benefits are in line with the objective of Jasey farms, which is to improve the health and the well-being of our consumers.');

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage_slide`
--

CREATE TABLE `aboutpage_slide` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `heading` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage_slide`
--

INSERT INTO `aboutpage_slide` (`id`, `img`, `heading`) VALUES
(1, 'b_24.jpg', 'About Big Ollay Ghana Limited');

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage_strategic_Positioning`
--

CREATE TABLE `aboutpage_strategic_Positioning` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage_strategic_Positioning`
--

INSERT INTO `aboutpage_strategic_Positioning` (`id`, `title`, `content`) VALUES
(2, 'Strategic Positioning', 'As the population of Ghana growth exceeds the 30million with an increasing number of middle and upper class-income earners, Jasey farms foresee opportunities for a market that is very interested in the benefits of well-grown and healthy vegetables. Again, there is a clear indication that Ghana is importing lots of well-grown vegetables for the hospitality industry. For this reason, Jasey Farms is working to strategically positioning itself to tap into this market, and its management has set out the following vision, mission, and values as a guide.');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_aboutus`
--

CREATE TABLE `homepage_aboutus` (
  `id` int(11) NOT NULL,
  `about_heading` varchar(255) DEFAULT NULL,
  `about_subheading1` varchar(255) DEFAULT NULL,
  `about_content1` text,
  `about_subheading2` varchar(255) DEFAULT NULL,
  `about_content2` text,
  `about_subheading3` varchar(255) DEFAULT NULL,
  `about_content3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_aboutus`
--

INSERT INTO `homepage_aboutus` (`id`, `about_heading`, `about_subheading1`, `about_content1`, `about_subheading2`, `about_content2`, `about_subheading3`, `about_content3`) VALUES
(1, 'About Us', 'Our Objective', 'Our objective is to improve the well-being of our consumers through the cultivation and supply of well-grown farm products with specific emphasis on vegetables.', 'Our Mission', 'Our focus is to develop our greenhouse farming know-how, capability, and output progressively to enable us to supply fresh, healthy, and quality vegetables at competitive rates with the least impact on the environment.', 'Our Approach', 'Our approach involves using a greenhouse-controlled environment for farming various vegetables in commercial quantities using no pesticides in the cultivation process. More so, we mindfully endeavor to ensure less usage of water and energy to lower our carbon footprint. We believe in sustainable farming to meet the needs of our growing population.');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_benefits`
--

CREATE TABLE `homepage_benefits` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_benefits`
--

INSERT INTO `homepage_benefits` (`id`, `title`, `subtitle`) VALUES
(2, 'Benefits', 'A diet rich in vegetables can:');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_benefits_contents`
--

CREATE TABLE `homepage_benefits_contents` (
  `id` int(11) NOT NULL,
  `benefits` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_benefits_contents`
--

INSERT INTO `homepage_benefits_contents` (`id`, `benefits`) VALUES
(1, 'Lower the risk of heart disease and stroke'),
(2, 'Lower blood pressure for persons with high blood pressure'),
(3, 'Protection against cancer'),
(4, 'Help reduce the risk of type 2 diabetes'),
(5, 'Support weight loss'),
(6, 'Relieve or prevent constipation'),
(7, 'May help prevent diverticulosis'),
(8, 'Help prevent two common aging-related eye diseases such as cataracts and macular degeneration');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_clients`
--

CREATE TABLE `homepage_clients` (
  `id` int(11) NOT NULL,
  `client_heading` varchar(255) NOT NULL,
  `client_subheading` varchar(255) NOT NULL,
  `client_img` text NOT NULL,
  `client_img1` text NOT NULL,
  `client_img2` text NOT NULL,
  `client_img3` text NOT NULL,
  `client_img4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_clients`
--

INSERT INTO `homepage_clients` (`id`, `client_heading`, `client_subheading`, `client_img`, `client_img1`, `client_img2`, `client_img3`, `client_img4`) VALUES
(1, 'Our Clients', 'Some of our cherished clients.', 'bg1.JPG', 'bg2.JPG', 'bg3.JPG', 'bg4.JPG', 'bg5.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_details`
--

CREATE TABLE `homepage_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_details`
--

INSERT INTO `homepage_details` (`id`, `title`, `logo`) VALUES
(1, 'Jasey Farms | Home', 'JaseyFarms_new_full_Logo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_footer_careers`
--

CREATE TABLE `homepage_footer_careers` (
  `id` int(11) NOT NULL,
  `careers` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_footer_careers`
--

INSERT INTO `homepage_footer_careers` (`id`, `careers`) VALUES
(1, 'Presently, there are no employment opportunities. However, we believe in working with brilliant minds seeking to support our company\'s objectives and mission. Kindly send us your profile and contact details, and we will reach you as and when opportunities arise. Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_footer_contactus`
--

CREATE TABLE `homepage_footer_contactus` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `digital_address` varchar(25) NOT NULL,
  `postal_address` text NOT NULL,
  `phone1` varchar(25) NOT NULL,
  `phone2` varchar(25) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_footer_contactus`
--

INSERT INTO `homepage_footer_contactus` (`id`, `location`, `digital_address`, `postal_address`, `phone1`, `phone2`, `email1`, `email2`) VALUES
(1, 'Sunyani, Bono Region Ghana ', '', ' P.O Box 19540 Accra North Ghana', '+233 244132705', '+233 264132705', 'joseph.wilson-sey@jaseyfarms.com', 'jaseyfarms@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_footer_products`
--

CREATE TABLE `homepage_footer_products` (
  `id` int(11) NOT NULL,
  `products` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_footer_products`
--

INSERT INTO `homepage_footer_products` (`id`, `products`) VALUES
(1, 'Carrots'),
(2, 'Cabbage'),
(3, 'Pepper'),
(4, 'Spinach'),
(5, 'Tomatoes');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_order`
--

CREATE TABLE `homepage_order` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `subtitle1` varchar(255) DEFAULT NULL,
  `content1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `subtitle2` varchar(255) DEFAULT NULL,
  `content2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `subtitle3` varchar(255) DEFAULT NULL,
  `content3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_order`
--

INSERT INTO `homepage_order` (`id`, `title`, `image1`, `subtitle1`, `content1`, `image2`, `subtitle2`, `content2`, `image3`, `subtitle3`, `content3`) VALUES
(1, 'Make an order', 'm1.png', 'Please call a sales representative', '0244132705', 'm2.jpg', 'Place an order', 'Tap to order healthy quality affordable vegetables', 'm3.png', 'Engage us', 'Send us an email');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_products`
--

CREATE TABLE `homepage_products` (
  `id` int(11) NOT NULL,
  `slide_caption` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_products`
--

INSERT INTO `homepage_products` (`id`, `slide_caption`, `title`, `subtitle`) VALUES
(1, 'Production of organic vegetables in commercial quantities to promote the well-being of our patrons', 'Our Products', 'We highly recommend you place an order by using the option below:');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_products_pictures`
--

CREATE TABLE `homepage_products_pictures` (
  `id` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_products_pictures`
--

INSERT INTO `homepage_products_pictures` (`id`, `text`, `image`) VALUES
(1, 'Lettuce', 'v1.jpg'),
(2, 'Tomato', 'v2.png'),
(3, 'Spinach', 'v3.jpg'),
(4, 'Carrot', 'v4.jpg'),
(5, 'Sweet Pepper', 'v5.jpg'),
(6, 'Okra', 'v6.jpg'),
(7, 'Cucumber', 'v7.png'),
(8, 'Chili Pepper', 'v8.jpg'),
(9, 'EggPlant (Garden-Eggs)', 'v9.jpg'),
(10, 'Cabbage', 'v10.png'),
(11, 'Hot pepper', 'v11.png'),
(12, 'Onion', 'v12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_slide`
--

CREATE TABLE `homepage_slide` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage_slide`
--

INSERT INTO `homepage_slide` (`id`, `image`, `text`) VALUES
(1, 's4.JPG', 'Healthy quality affordable vegetables for everyday people'),
(2, 's3.png', 'Healthy quality affordable vegetables for everyday people'),
(3, 's1.JPG', 'Healthy quality affordable vegetables for everyday people');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `heading_hover` varchar(255) DEFAULT NULL,
  `subheading_hover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `caption`, `heading_hover`, `subheading_hover`) VALUES
(1, 'v1.jpg', 'Lettuce', 'Lettuce', 'Lettuce'),
(2, 'v2.png', 'Tomato', 'Tomato', 'Tomato'),
(3, 'v3.jpg', 'Spinach', 'Spinach', 'Spinach'),
(4, 'v4.jpg', 'Carrot', 'Carrot', 'Carrot'),
(5, 'v5.jpg', 'Sweet Pepper', 'Sweet Pepper', 'Sweet Pepper'),
(6, 'v6.jpg', 'Okra', 'Okra', 'Okra'),
(8, 'v7.png', 'Cucumber', 'Cucumber', 'Cucumber'),
(9, 'v8.jpg', 'Chili Pepper', 'Chili Pepper', 'Chili Pepper'),
(10, 'v9.jpg', 'EggPlant (Garden-Eggs)', 'EggPlant (Garden-Eggs)', 'EggPlant (Garden-Eggs)');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `logintime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `username`, `userIp`, `logintime`) VALUES
(1, 2, 'test', 0x3a3a31, '2020-06-29 11:39:49'),
(2, 2, 'test', 0x3a3a31, '2020-06-29 12:17:45'),
(3, 1, 'admin', 0x3a3a31, '2020-07-14 22:58:05'),
(4, 1, 'admin', 0x3a3a31, '2020-07-15 14:53:49'),
(5, 1, 'admin', 0x3a3a31, '2020-07-16 14:30:14'),
(6, 1, 'admin', 0x3a3a31, '2020-07-17 12:23:54'),
(7, 1, 'admin', 0x3a3a31, '2020-07-18 11:41:42'),
(8, 1, 'admin', 0x3a3a31, '2020-07-19 00:15:31'),
(9, 1, 'admin', 0x3a3a31, '2020-07-19 23:01:01'),
(10, 1, 'admin', 0x3a3a31, '2020-07-20 00:26:04'),
(11, 1, 'admin', 0x3a3a31, '2020-07-20 17:24:20'),
(12, 3, 'admin1', 0x3a3a31, '2020-07-20 23:50:03'),
(13, 3, 'admin1', 0x3a3a31, '2020-07-21 14:29:17'),
(14, 3, 'admin1', 0x3a3a31, '2020-07-24 18:56:11'),
(15, 3, 'admin1', 0x3a3a31, '2020-07-28 17:47:46'),
(16, 3, 'admin1', 0x3a3a31, '2020-09-03 19:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `role`, `created_at`) VALUES
(1, 'admin', '123', 'admin', 'admin', 'info@sterde.com', 'admin', '2020-06-29 08:18:30'),
(2, 'test', '$2y$10$As1x1q.AVPwyyM7nj7sKLekJWPde5Q29/TrMyPRBbxZ3s8YnAL65.', '', '', '', '', '2020-06-29 09:28:21'),
(3, 'admin1', '$2y$10$w5J/rTwNepJxPQSH2EPvN.AIIJ7347KVpDCISPLVhaycSh2AIlBNy', '1234567', '', '', '', '2020-07-20 23:41:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage_aboutus_cards`
--
ALTER TABLE `aboutpage_aboutus_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutpage_content`
--
ALTER TABLE `aboutpage_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutpage_slide`
--
ALTER TABLE `aboutpage_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutpage_strategic_Positioning`
--
ALTER TABLE `aboutpage_strategic_Positioning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_aboutus`
--
ALTER TABLE `homepage_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_benefits`
--
ALTER TABLE `homepage_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_benefits_contents`
--
ALTER TABLE `homepage_benefits_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_clients`
--
ALTER TABLE `homepage_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_details`
--
ALTER TABLE `homepage_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_footer_careers`
--
ALTER TABLE `homepage_footer_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_footer_contactus`
--
ALTER TABLE `homepage_footer_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_footer_products`
--
ALTER TABLE `homepage_footer_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_order`
--
ALTER TABLE `homepage_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_products`
--
ALTER TABLE `homepage_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_products_pictures`
--
ALTER TABLE `homepage_products_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_slide`
--
ALTER TABLE `homepage_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpage_aboutus_cards`
--
ALTER TABLE `aboutpage_aboutus_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aboutpage_content`
--
ALTER TABLE `aboutpage_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutpage_slide`
--
ALTER TABLE `aboutpage_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutpage_strategic_Positioning`
--
ALTER TABLE `aboutpage_strategic_Positioning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homepage_aboutus`
--
ALTER TABLE `homepage_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_benefits`
--
ALTER TABLE `homepage_benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homepage_benefits_contents`
--
ALTER TABLE `homepage_benefits_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homepage_clients`
--
ALTER TABLE `homepage_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_details`
--
ALTER TABLE `homepage_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_footer_careers`
--
ALTER TABLE `homepage_footer_careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_footer_contactus`
--
ALTER TABLE `homepage_footer_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_footer_products`
--
ALTER TABLE `homepage_footer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homepage_order`
--
ALTER TABLE `homepage_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_products`
--
ALTER TABLE `homepage_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_products_pictures`
--
ALTER TABLE `homepage_products_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homepage_slide`
--
ALTER TABLE `homepage_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
