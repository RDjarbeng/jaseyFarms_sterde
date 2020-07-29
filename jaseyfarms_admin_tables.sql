-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:49 AM
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
-- Table structure for table `aboutpage_strategy`
--

CREATE TABLE `aboutpage_strategy` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(400) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `cont1` varchar(500) NOT NULL,
  `cont2` varchar(500) NOT NULL,
  `cont3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage_strategy`
--

INSERT INTO `aboutpage_strategy` (`id`, `heading`, `subheading`, `sub1`, `sub2`, `sub3`, `cont1`, `cont2`, `cont3`) VALUES
(1, '', '', 'Vision', 'Mission', 'Values', 'To provide our clients with quality quarrying and mining support services that enable clients to create more value.', 'To apply world-class quarrying and mining tools, techniques, and experience to help our client exploit their ore reserves.', '* Safety<br>\r\n											* Stakeholder engagement<br>\r\n											* Delivery<br>\r\n											* Efficiency<br>\r\n											* Environmentally conscious');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `careers_title` varchar(255) NOT NULL,
  `careers` varchar(500) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_companyname` varchar(255) NOT NULL,
  `contact_location` varchar(255) NOT NULL,
  `contact_digital` varchar(255) NOT NULL,
  `contact_postal` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_telephone` varchar(255) NOT NULL,
  `links_title` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `link4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallerypage`
--

CREATE TABLE `gallerypage` (
  `id` int(11) NOT NULL,
  `projectimg` text NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerypage`
--

INSERT INTO `gallerypage` (`id`, `projectimg`, `des`) VALUES
(1, 'bgal_1.jpeg', 'Project name and description'),
(2, 'bgal_3.jpeg', 'Project name and description'),
(3, 'bgal_6.jpeg', 'Project name and description'),
(4, 'bgal_2.jpeg', 'Project name and description'),
(5, 'bgal_17.jpeg', 'Project name and description'),
(6, 'bgal_18.jpeg', 'Project name and description\r\n\r\n'),
(7, 'bgal_19.jpeg', 'Project name and description\r\n\r\n'),
(8, 'bgal_20.jpeg', 'Project name and description\r\n\r\n'),
(9, 'bgal_21.jpeg', 'Project name and description\r\n\r\n'),
(10, 'bgal_22.jpeg', 'Project name and description\r\n\r\n'),
(11, 'bgal_10.jpeg', 'Project name and description\r\n\r\n'),
(12, 'bgal_11.jpeg', 'Project name and description\r\n\r\n'),
(13, 'bgal_12.jpeg', 'Project name and description\r\n\r\n'),
(14, 'bgal_13.jpeg', 'Project name and description\r\n\r\n'),
(15, 'bgal_14.jpeg', 'Project name and description\r\n\r\n'),
(16, 'bgal_15.jpeg', 'Project name and description\r\n\r\n'),
(17, 'bgal_16.jpeg', 'Project name and description\r\n\r\n'),
(18, 'bgal_17.jpeg', 'Project name and description\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallerypage_product`
--

CREATE TABLE `gallerypage_product` (
  `id` int(11) NOT NULL,
  `productimg` text NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerypage_product`
--

INSERT INTO `gallerypage_product` (`id`, `productimg`, `des`) VALUES
(1, 'b_10.jfif', 'Project name and description\r\n\r\n'),
(2, 'b_11.jpg', 'Project name and description\r\n\r\n'),
(3, 'b_13.jpg', 'Project name and description\r\n\r\n'),
(4, 'b_17.jpg', 'Project name and description\r\n\r\n');

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
(1, 'About Us\r\n', 'Our Objective', 'Our objective is to improve the well-being of our consumers through the cultivation and supply of well-grown farm products with specific emphasis on vegetables.', 'Our Mission', 'Our focus is to develop our greenhouse farming know-how, capability, and output progressively to enable us to supply fresh, healthy, and quality vegetables at competitive rates with the least impact on the environment.', 'Our Approach', 'Our approach involves using a greenhouse-controlled environment for farming various vegetables in commercial quantities using no pesticides in the cultivation process. More so, we mindfully endeavor to ensure less usage of water and energy to lower our carbon footprint. We believe in sustainable farming to meet the needs of our growing population.');

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
-- Table structure for table `homepage_gallery`
--

CREATE TABLE `homepage_gallery` (
  `id` int(11) NOT NULL,
  `gallery_img` text NOT NULL,
  `gallery_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_gallery`
--

INSERT INTO `homepage_gallery` (`id`, `gallery_img`, `gallery_description`) VALUES
(1, 'bgal_9.jpeg', 'Project and short description'),
(2, 'bgal_11.jpeg', 'Project and short description'),
(3, 'bgal_10.jpeg', 'Project and short description');

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
-- Table structure for table `homepage_services`
--

CREATE TABLE `homepage_services` (
  `id` int(11) NOT NULL,
  `services_heading` varchar(255) NOT NULL,
  `services_subheading` varchar(255) NOT NULL,
  `services_img` text NOT NULL,
  `services_imgheading` varchar(255) NOT NULL,
  `services_imgsubheading` varchar(255) NOT NULL,
  `services_content` varchar(500) NOT NULL,
  `services_img1` text NOT NULL,
  `services_img2` text NOT NULL,
  `services_imgheading1` varchar(255) NOT NULL,
  `services_imgheading2` varchar(255) NOT NULL,
  `services_imgsubheading1` varchar(255) NOT NULL,
  `services_imgsubheading2` varchar(255) NOT NULL,
  `services_content1` varchar(500) NOT NULL,
  `services_content2` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_services`
--

INSERT INTO `homepage_services` (`id`, `services_heading`, `services_subheading`, `services_img`, `services_imgheading`, `services_imgsubheading`, `services_content`, `services_img1`, `services_img2`, `services_imgheading1`, `services_imgheading2`, `services_imgsubheading1`, `services_imgsubheading2`, `services_content1`, `services_content2`) VALUES
(1, 'Services\r\n', 'Big Ollay Ghana Limited Services include\r\n', 'b_28.jpg', 'Quarrying services', 'Quarrying services', 'In the quarry industry, BOGL provides:<br>\r\n									1.	Quarry mine startup technical design and business plan;<br>\r\n									2.	Installation of crushing set (jaw crusher, cone crusher, and screens) covering both mechanical and electric requirements;<br>\r\n									3.	Primary drilling and blasting services;<br>\r\n									4.	Secondary drilling and blasting services;<br>\r\n									5.	Acquisition of blast materials on behalf of clients. ', 'b_29.jpg', 'b_8.jfif', 'Mining consumables and safety Services', 'Project /Operational Management Services', 'Mining consumables and safety Services', 'Project /Operational Management Services', 'BOGL has always promoted and encouraged clients to use good quarry and mining consumables to ensure good health, safety, and output results.  The business executes supplies contracts on demand. BOGL supplies cover the following: <br>\r\n									1.	Quarry aggregates supplies;\r\n									2.	Sales of drilling equipment and accessories;<br>\r\n									3.	Sale of rubber tubing for blasting;<br>\r\n									4.	Renting of drill rigs and crushing sets.', 'At the project management and operational management section of the business.  We work with our clients’ base on their unique situations and challenges.  BOGL provide the following services based on our experience to date:<br>\r\n									1.	Build and hand over turkey projects;<br>\r\n									2.	Build, operate and hand over the project;<br>\r\n									3.	Provide project management services for agreed on the scope of work;<br>\r\n									4.	Provide and train clients’ staff on new and improved operational optimization techniques.');

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
-- Table structure for table `homepage_team`
--

CREATE TABLE `homepage_team` (
  `id` int(11) NOT NULL,
  `team_heading` varchar(255) NOT NULL,
  `team_subheading` varchar(255) NOT NULL,
  `team_img` text NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_content` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage_team`
--

INSERT INTO `homepage_team` (`id`, `team_heading`, `team_subheading`, `team_img`, `team_title`, `team_content`) VALUES
(1, 'Meet Our Team\r\n', 'We work to provide quality drilling and blasting services\r\n\r\n', 't1.jpg', 'Rev. Joshua Ollennu(C.E.O)', 'Rev. Joshua Ollennu is an astute engineer with vast practical experience in handling drilling and blasting of various rocks or ore bodies.  Some rock formations he has worked on include gold, granite, feldspar and limestone ore bodies.  He is also the founder of the company, and he is well vest in the field of mining.  He holds both an MSc and Diploma in Mining Engineering from the University of Mines and Technology. Over the past fifteen (15) years, he has provided consultancy, design, and operational services for many clients in the quarry and alluvial gold mining industry in Ghana.  His track record of continuous delivery is due to his excellent communication, interpersonal, organizational, and team-building skills.  Plus, his ability to develop innovative solutions in the field of mining and quarrying.  Some of his working exposures are with Ghana Consolidated Diamonds Limited, Nsemmere Quarry Limited, Mawums Quarry Limited, Biga Gold Mining Ltd, GDC Limited, various Sea defense projects, and many smaller entities. '),
(2, 'Meet Our Team\r\n', 'We work to provide quality drilling and blasting services\r\n\r\n', 't4.jpg', 'Mrs. Doris Ollennu (Director & Head of business development)', 'Mrs. Doris Ollennu is the head of business development and also a co-founder of the company.  She is the longest-serving employee.  Mrs. Ollennu is in charge of all administrative activities in the office at Takoradi in the West Region.  She also works to meet all the company’s human resources, finance, correspondence, contract administration, and vendor management needs.  With vast experience in the job, she works to ensure that the company always understand, meet, and exceed the expectations of all clients.'),
(3, 'Meet Our Team\r\n', 'We work to provide quality drilling and blasting services\r\n\r\n', 't2.jpg', 'Mr. Joseph Norgah (Project Manager)', 'Mr. Joseph Norgah is the current Project Manager of the Company and very experienced in the mining industry in Ghana.  He can take on the scope of works associated with both Greenfield or existing projects.  His work experience includes a senior mining engineer at African Underground Mining Services (AUMS), a quarry engineer at Consar Stone Quarry Ltd, a mining engineer at Fazo Minerals Resources Ltd, and an exploration geologist at Semafo Ghana Limited.  He holds a diploma in mining engineering from the University of Mines and Technology.  He is also a certified blast man in good standing and can plan and implement drilling and blasting projects effectively.  Working with heavy machinery and explosives, Mr. Norgah takes the health and safety issues seriously to the extent that he holds a certificate in Occupational Health and safety and First Aid Certificate.'),
(4, 'Meet Our Team\r\n', 'We work to provide quality drilling and blasting services\r\n\r\n', 't3.jpg', 'Ms. Sename Kwame (Operations Manager)', 'Ms. Sename Kwame is the Operations Manager of the company in charge of the organization and allocation of resources for each approved project.  With exceptional interpersonal, project management, and administrative skill developed by her involvement on various projects, she is able to work seamlessly with the project manager, the company’s team of engineers, certified blastmen, and safety officers on multiple projects at a time.  She also works to promote the company’s safety culture by continually teaming up with the various project safety officers to ensure management commitment to safety and to the philosophy that all workers must go back to their families after the day’s work.  She holds a BSc in Economics from the University: University for Development Studies (UDS), Wa Campus.');

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
(6, 1, 'admin', 0x3a3a31, '2020-07-17 12:23:54');

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
(2, 'test', '$2y$10$As1x1q.AVPwyyM7nj7sKLekJWPde5Q29/TrMyPRBbxZ3s8YnAL65.', '', '', '', '', '2020-06-29 09:28:21');

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
-- Indexes for table `aboutpage_strategy`
--
ALTER TABLE `aboutpage_strategy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerypage`
--
ALTER TABLE `gallerypage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerypage_product`
--
ALTER TABLE `gallerypage_product`
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
-- Indexes for table `homepage_gallery`
--
ALTER TABLE `homepage_gallery`
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
-- Indexes for table `homepage_services`
--
ALTER TABLE `homepage_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_slide`
--
ALTER TABLE `homepage_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_team`
--
ALTER TABLE `homepage_team`
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
-- AUTO_INCREMENT for table `aboutpage_strategy`
--
ALTER TABLE `aboutpage_strategy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallerypage`
--
ALTER TABLE `gallerypage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallerypage_product`
--
ALTER TABLE `gallerypage_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `homepage_gallery`
--
ALTER TABLE `homepage_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `homepage_services`
--
ALTER TABLE `homepage_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage_slide`
--
ALTER TABLE `homepage_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homepage_team`
--
ALTER TABLE `homepage_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
