-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 07:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `track`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_contact`
--

CREATE TABLE `a_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(18, 'Duaan Ansari', 'duaan@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `c_detail`
--

CREATE TABLE `c_detail` (
  `c_name` varchar(40) DEFAULT NULL,
  `c_city` varchar(40) DEFAULT NULL,
  `b_date` date DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `order_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_detail`
--

INSERT INTO `c_detail` (`c_name`, `c_city`, `b_date`, `d_date`, `order_no`) VALUES
('Moiz', 'LHR', '2010-03-23', '2015-03-23', 101),
('salman', 'LHR', '2015-03-23', '2018-03-23', 102),
('asim', 'ISB', '2018-03-23', '2020-03-23', 103),
('adnan', 'SUKKUR', '2021-03-23', '2023-03-23', 104),
('asif', 'RAWALPINDI', '2024-03-23', '2025-03-23', 105),
('huzaifa', 'MULTAN', '2026-03-23', '2028-03-23', 106),
('feroz', 'KHI', '2029-03-23', '2030-03-23', 107),
('tlha', 'ISB', '2031-03-23', '0002-04-23', 108),
('hamza', 'LHR', '0003-04-23', '0005-04-23', 109),
('ali', 'MULTAN', '2013-03-23', '2015-04-23', 112),
('hassan', 'KHI', '2016-04-23', '2017-04-23', 113),
('khan', 'LHR', '2018-04-23', '2020-04-23', 114),
('shaveer', 'ISB', '2021-04-23', '2023-04-23', 115),
('zunair', 'MULTAN', '2025-04-23', '2027-04-23', 116),
('babar', 'FSD', '2028-04-23', '2030-04-23', 117),
('shaheen', 'LHR', '0001-05-23', '0003-05-23', 118),
('shadab', 'RAWALPINDI', '0004-05-23', '0005-05-23', 119),
('ahsan', 'MIRPUR', '0006-05-23', '0008-05-23', 120),
('rehman', 'KHI', '0009-05-23', '2011-05-23', 121),
('alam', 'ISB', '2012-05-23', '2014-05-23', 122),
('iftikhar', 'LHR', '2015-05-23', '2017-05-23', 123),
('duAan', 'FSD', '2018-05-23', '2020-05-23', 124),
('abdullah', 'MULTAN', '2021-05-23', '2023-05-23', 125),
('farzam', 'MIRPUR', '2024-05-23', '2026-05-23', 126),
('zeeshan', 'RAWALPINDI', '2027-05-23', '2029-05-23', 127),
('sufyan', 'KHI', '2030-05-23', '0002-06-23', 128),
('dayan', 'LHR', '0003-06-23', '0005-06-23', 129),
('zaryan', 'FSD', '0006-06-23', '0008-06-23', 130),
('shayan', 'MULTAN', '2010-06-23', '2012-06-23', 131),
('aliyan', 'ISB', '2013-06-23', '2015-06-23', 132),
('shakeel', 'KHI', '2017-06-23', '2019-06-23', 133),
('safwan', 'LHR', '2021-06-23', '2023-06-23', 134),
('tahir', 'MULTAN', '2025-06-23', '2027-06-23', 135),
('mansoor', 'FSD', '2028-06-23', '2030-06-23', 136),
('mohd ali', 'RAWALPINDI', '0001-07-23', '0003-07-23', 137),
('nadeem', 'ISB', '0005-07-23', '0007-07-23', 138),
('nafees', 'KHI', '0008-07-23', '2010-07-23', 139),
('nasir', 'KHI', '2012-07-23', '2014-07-23', 140),
('nawwaf', 'LHR', '2015-07-23', '2017-07-23', 141),
('nazar', 'ISB', '2018-07-23', '2020-07-23', 142),
('qabus', 'SUKKUR', '2021-07-23', '2023-07-23', 143),
('qasid', 'RAWALPINDI', '2024-07-23', '2026-07-23', 144),
('qutb', 'MULTAN', '2027-07-23', '2029-07-23', 145),
('raed', 'KHI', '2030-07-23', '0001-08-23', 146),
('rafeed', 'ISB', '0002-08-23', '0004-08-23', 147),
('rafeeq', 'LHR', '0005-08-23', '0007-08-23', 148),
('rajwan', 'SUKKUR', '0008-08-23', '2010-08-23', 149),
('ramzi', 'RAWALPINDI', '2011-08-23', '2013-08-23', 150),
('rashad', 'MULTAN', '2014-08-23', '2016-08-23', 151),
('rashid', 'KHI', '2017-08-23', '2019-08-23', 152),
('rasheed', 'LHR', '2020-08-23', '2022-08-23', 153),
('rehan', 'ISB', '2023-08-23', '2025-08-23', 154),
('ryan', 'MULTAN', '2027-08-23', '2029-08-23', 155),
('razi', 'FSD', '2030-08-23', '0001-09-23', 156),
('rahul', 'LHR', '0003-09-23', '0005-09-23', 157),
('rifat', 'RAWALPINDI', '0007-09-23', '0009-09-23', 158),
('riza', 'MIRPUR', '2010-09-23', '2012-09-23', 159),
('wafiq', 'KHI', '2013-09-23', '2015-09-23', 160),
('waleed', 'ISB', '0000-00-00', '2019-09-23', 161),
('warith', 'LHR', '2020-09-23', '2022-09-23', 162),
('waris', 'FSD', '2023-09-23', '2025-09-23', 163),
('waseem', 'MULTAN', '2026-09-23', '2028-09-23', 164),
('yaseer', 'MIRPUR', '2026-09-23', '2028-09-23', 165),
('yaseen', 'RAWALPINDI', '2026-09-23', '2028-09-23', 166),
('sufyan', 'KHI', '2026-09-23', '2028-09-23', 167),
('zaheer', 'LHR', '2026-09-23', '2028-09-23', 168),
('zahid', 'FSD', '2026-09-23', '2028-09-23', 169),
('zahir', 'MULTAN', '2026-09-23', '0000-00-00', 170),
('zameel', 'ISB', '2026-09-23', '2028-09-23', 171),
('zakir', 'KHI', '2026-09-23', '2028-09-23', 172),
('zayd', 'LHR', '2026-09-23', '2028-09-23', 173),
('zayn', 'MULTAN', '2026-09-23', '2028-09-23', 174),
('zimar', 'FSD', '2029-09-23', '0001-10-23', 175),
('zuhoor', 'RAWALPINDI', '0002-10-23', '0004-10-23', 176),
('zuhnoor', 'MULTAN', '0002-10-23', '0004-10-23', 177),
('shameen', 'LHR', '0002-10-23', '0004-10-23', 179),
('shafeeq', 'RAWALPINDI', '0002-10-23', '0004-10-23', 180),
('sultan', 'MIRPUR', '0002-10-23', '0004-10-23', 181),
('taha', 'KHI', '0002-10-23', '0004-10-23', 182),
('saeed', 'ISB', '0002-10-23', '0004-10-23', 183),
('saif', 'LHR', '0002-10-23', '0004-10-23', 184),
('siraj', 'FSD', '0002-10-23', '0004-10-23', 185),
('surayj', 'MULTAN', '0005-10-23', '0007-10-23', 186),
('shaihd', 'MIRPUR', '0005-10-23', '0007-10-23', 187),
('sami', 'RAWALPINDI', '0005-10-23', '0007-10-23', 188),
('saim', 'KHI', '0005-10-23', '0007-10-23', 189),
('hammad', 'LHR', '0005-10-23', '0007-10-23', 190),
('wahaj', 'FSD', '0005-10-23', '0007-10-23', 191),
('wajih', 'MULTAN', '0008-10-23', '2010-10-23', 192);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `orderId` int(11) NOT NULL,
  `product` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `vehicleNo` int(11) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `Status` varchar(40) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`orderId`, `product`, `amount`, `vehicleNo`, `category`, `Status`) VALUES
(101, 'Phone', 60000, 20, 'Fragile', 'Enroute'),
(102, 'Watch', 15000, 3, 'Resilient', 'Pending'),
(103, 'Fridge', 120000, 4, 'Resilient', 'Pending'),
(104, 'Camera', 10000, 5, 'Fragile', 'Pending'),
(105, 'Sofa', 30000, 6, 'Resilient', 'Pending'),
(106, 'PC', 45000, 7, 'Fragile', 'Enroute'),
(107, 'Airpods', 40000, 8, 'Resilient', 'Delivered'),
(108, 'Mouse', 2000, 9, 'Resilient', 'Delivered'),
(109, 'Keyboard', 1500, 10, 'Resilient', 'Enroute'),
(112, 'Cap', 1000, 3, 'Resilient', 'Enroute'),
(113, 'School Bag', 2000, 4, 'Resilient', 'Pending'),
(114, 'Bag', 10000, 5, 'Resilient', 'Pending'),
(115, 'Ladies Purse', 30000, 6, 'Resilient', 'Pending'),
(116, 'Necklace', 100000, 7, 'Resilient', 'Pending'),
(117, 'Sunglasses', 2000, 8, 'Resilient', 'Pending'),
(118, 'Watch', 25000, 9, 'Resilient', 'Pending'),
(119, 'Gold Ring', 20000, 10, 'Resilient', 'Pending'),
(120, 'Boots', 3999, 1, 'Resilient', 'Pending'),
(121, 'Ipad Mini', 90000, 2, 'Fragile', 'Pending'),
(122, 'smart watch', 20000, 3, 'Fragile', 'Pending'),
(123, 'RAM', 8000, 4, 'Fragile', 'Pending'),
(124, 'Graphic card', 25000, 5, 'Resilient', 'Pending'),
(125, 'Gaming mouse', 12000, 6, 'Fragile', 'Pending'),
(126, 'Gaming keyboard', 8000, 7, 'Fragile', 'Pending'),
(127, 'L.E.D T.V', 50000, 8, 'Fragile', 'Pending'),
(128, 'LCD', 7000, 9, 'Fragile', 'Pending'),
(129, 'Oven', 25000, 10, 'Fragile', 'Pending'),
(130, 'Handfree', 1500, 1, 'Resilient', 'Pending'),
(131, 'Gaming Mic', 4000, 2, 'Fragile', 'Pending'),
(132, 'Wireless Headphone', 5000, 3, 'Resilient', 'Pending'),
(133, 'USB', 2000, 4, 'Resilient', 'Pending'),
(134, 'Mouse Pad', 500, 5, 'Resilient', 'Pending'),
(135, 'Mobile Charger', 1000, 6, 'Resilient', 'Pending'),
(136, 'Wall Clock', 5000, 7, 'Fragile', 'Pending'),
(137, 'Camera Lens', 30000, 8, 'Fragile', 'Pending'),
(138, 'VGA cable', 500, 9, 'Resilient', 'Pending'),
(139, 'Laptop', 30000, 10, 'Fragile', 'Pending'),
(140, 'Gaming laptop', 90000, 1, 'Fragile', 'Pending'),
(141, 'Speakers', 10000, 2, 'Fragile', 'Pending'),
(142, 'Mini speakers', 3000, 3, 'Fragile', 'Pending'),
(143, 'Wallet', 1000, 4, 'Resilient', 'Pending'),
(144, 'Hats', 1000, 5, 'Resilient', 'Pending'),
(145, 'Books', 2000, 6, 'Resilient', 'Pending'),
(146, 'Copies', 5000, 7, 'Resilient', 'Pending'),
(147, 'Hard drive', 3000, 8, 'Resilient', 'Pending'),
(148, 'SSD', 3000, 9, 'Resilient', 'Pending'),
(149, 'cardboard', 1000, 10, 'Resilient', 'Pending'),
(150, 'Iphone14', 200000, 1, 'Fragile', 'Pending'),
(151, 'samsung galaxy S22', 300000, 2, 'Fragile', 'Pending'),
(152, 'Xbox', 100000, 3, 'Fragile', 'Pending'),
(153, 'PS-5', 120000, 4, 'Fragile', 'Pending'),
(154, 'PS-5 controller', 30000, 5, 'Fragile', 'Pending'),
(155, 'Iron', 5000, 6, 'Fragile', 'Pending'),
(156, 'Washing machine', 20000, 7, 'Fragile', 'Pending'),
(157, 'Picnic hat', 500, 8, 'Resilient', 'Pending'),
(158, 'Table', 10000, 9, 'Fragile', 'Pending'),
(159, 'Stapilizer', 5000, 10, 'Fragile', 'Pending'),
(160, 'Spareparts', 1000, 1, 'Resilient', 'Pending'),
(161, 'Laptop Battery', 3000, 2, 'Fragile', 'Pending'),
(162, 'Perfume', 10000, 3, 'Resilient', 'Pending'),
(163, 'Headlight', 1000, 4, 'Resilient', 'Pending'),
(164, 'Juicer', 2500, 5, 'Fragile', 'Pending'),
(165, 'Natural honey', 500, 6, 'Resilient', 'Pending'),
(166, 'Vlogging Kit', 3200, 7, 'Resilient', 'Pending'),
(167, 'CCTV camera', 3999, 8, 'Fragile', 'Pending'),
(168, 'Ring light', 1600, 9, 'Fragile', 'Pending'),
(169, 'Lamp', 2000, 10, 'Fragile', 'Pending'),
(170, 'Finger gripper', 30000, 1, 'Resilient', 'Pending'),
(171, 'Shoes', 5500, 2, 'Resilient', 'Pending'),
(172, 'Sports shoes', 30000, 3, 'Resilient', 'Pending'),
(173, 'Clothes', 10000, 4, 'Resilient', 'Pending'),
(174, 'Sandle', 2500, 5, 'Resilient', 'Pending'),
(175, 'Mobile backcover', 1000, 6, 'Resilient', 'Pending'),
(176, 'Shirts', 3000, 7, 'Resilient', 'Pending'),
(177, 'Gaming handfree', 2000, 8, 'Resilient', 'Pending'),
(179, 'Pants', 3000, 10, 'Resilient', 'Pending'),
(180, 'Mask', 300, 1, 'Resilient', 'Pending'),
(181, 'R.G.B keyboard', 3000, 2, 'Fragile', 'Pending'),
(182, 'Keyboard for mobile', 3000, 3, 'Fragile', 'Pending'),
(183, 'Mouse for mobile', 3000, 4, 'Fragile', 'Pending'),
(184, 'Thumbs gloves', 500, 5, 'Resilient', 'Pending'),
(185, 'Cricket bat', 10000, 6, 'Resilient', 'Pending'),
(186, 'Balls', 1000, 7, 'Resilient', 'Pending'),
(187, 'Cricket Keeping gloves', 10000, 8, 'Resilient', 'Pending'),
(188, 'Cricket Batting gloves', 10000, 9, 'Resilient', 'Pending'),
(189, 'Cricket Keeping Pads', 10000, 10, 'Resilient', 'Pending'),
(190, 'Cricket Batting Pads', 10000, 1, 'Resilient', 'Pending'),
(191, 'Cricket helmet', 10000, 2, 'Resilient', 'Pending'),
(192, 'Bike helmet', 2000, 3, 'Resilient', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sender_detail`
--

CREATE TABLE `sender_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `contact` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sender_detail`
--

INSERT INTO `sender_detail` (`id`, `name`, `contact`) VALUES
(101, 'Kashan', 3123456789),
(102, 'Zainab Khan', 3331112222),
(103, 'Fariha Malik', 3212223333),
(104, 'Waqar Ahmed', 3004445555),
(105, 'Sadia Malik', 3453334444),
(106, 'Tariq Shah', 3143332222),
(107, 'Nashra Khan', 3334446666),
(108, 'Bilal Ahmed', 3210001111),
(109, 'Ayesha Shah', 3009998877),
(112, 'Yasir Khan', 3337776666),
(113, 'Mehwish Ali', 3218884444),
(114, 'Javed Ahmed', 3001112233),
(115, 'Hina Ahmed', 3451112233),
(116, 'Nadeem Malik', 3143332222),
(117, 'Sadia Shah', 3334445555),
(118, 'Irfan Khan', 3214446666),
(119, 'Nashra Ahmed', 3003334444),
(120, 'Saba Khan', 3450001111),
(121, 'Zubair Ahmed', 3142223333),
(122, 'Nadia Malik', 3338889999),
(123, 'Rizwan Khan', 3214445555),
(124, 'Ayesha Ahmed', 3003334444),
(125, 'Bilal Malik', 3451112222),
(126, 'Madiha Shah', 3143332222),
(127, 'Imran Khan', 3339998888),
(128, 'Saima Ahmed', 3219998888),
(129, 'Usman Malik', 3001110000),
(130, 'Fahad Khan', 3450002222),
(131, 'Nashit Ahmed', 3142224444),
(132, 'Asma Malik', 3339991111),
(133, 'Hamza Shah', 3212223333),
(134, 'Nida Ahmed', 3004446666),
(135, 'Omar Malik', 3452226666),
(136, 'Amina Khan', 3144447777),
(137, 'Noman Ahmed', 3331112233),
(138, 'Sana Khan', 3218889999),
(139, 'Rabia Shah', 3009998888),
(140, 'Aisha Malik', 3458889999),
(141, 'Yasir Khan', 3142223333),
(142, 'Mehwish Ali', 3337776666),
(143, 'Javed Ahmed', 3214445555),
(144, 'Hina Ahmed', 3003334444),
(145, 'Nadeem Malik', 3451112222),
(146, 'Sadia Shah', 3143332222),
(147, 'Irfan Khan', 3339998888),
(148, 'Nashra Ahmed', 3219998888),
(149, 'Imran Malik', 3001110000),
(150, 'Saima Ahmed', 3452223344),
(151, 'Waqar Khan', 3120002222),
(152, 'Nashra Malik', 3330003333),
(153, 'Imtiaz Ali', 3218884444),
(154, 'Zoya Khan', 3007776666),
(155, 'Adeel Ahmed', 3453334444),
(156, 'Nadia Malik', 3141111111),
(157, 'Fahad Shah', 3331112222),
(158, 'Rabia Khan', 3219998888),
(159, 'Tariq Ahmed', 3004445555),
(160, 'Asma Ali', 3451112233),
(161, 'Imran Malik', 3129998877),
(162, 'Fariha Ahmed', 3334446666),
(163, 'Hamza Khan', 3217889999),
(164, 'Sadia Ahmed', 3007778888),
(165, 'Usama Khan', 3456667777),
(166, 'Hina Shah', 3143332222),
(167, 'Farhan Malik', 3334445555),
(168, 'Ayesha Khan', 3210001111),
(169, 'Bilal Ahmed', 3001112222),
(170, 'Ali Hassan', 3451239876),
(171, 'Amina Khan', 3127654321),
(172, 'Noman Ahmed', 3331112233),
(173, 'Saba Malik', 3215678901),
(174, 'Omar Khan', 3019998877),
(175, 'Madiha Ali', 3457775555),
(176, 'Faisal Shah', 3146667777),
(177, 'Samina Khan', 3335556666),
(179, 'Nashit Malik', 3018889999),
(180, 'Sana Khan', 3451234567),
(181, 'Ahmed Khan', 3129876543),
(182, 'Fatima Ali', 3331231234),
(183, 'Usman Malik', 3217894561),
(184, 'Ayesha Ahmed', 3001112233),
(185, 'Bilal Khan', 3457778899),
(186, 'Zainab Shah', 3141314131),
(187, 'Imran Khan', 3334445566),
(188, 'Nida Malik', 3218887777),
(189, 'Saad Ahmed', 3009998877),
(190, 'Imran Khan', 3458889999),
(191, 'Ayesha Malik', 3142223333),
(192, 'Bilal Ahmed', 3334445555);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vreg_no` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `driver_name` varchar(100) DEFAULT NULL,
  `driver_cell` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vreg_no`, `driver_id`, `driver_name`, `driver_cell`) VALUES
(1010, 1, 'Umair', 3001234567),
(1011, 2, 'Babar', 3001234567),
(1012, 3, 'Zeeshan', 3001235560),
(1013, 4, 'sajid', 3001234597),
(1014, 5, 'Ali', 3001234560),
(1015, 6, 'Rashid', 3001039567),
(1016, 7, 'Zubair', 3007230567),
(1017, 8, 'Saqib', 3007230567),
(1018, 9, 'Daniyal', 3007230567),
(1019, 10, 'Sadiq', 3007230567),
(1020, 11, 'Aqib', 3003230767),
(1021, 12, 'Hashir', 3007539567),
(1022, 13, 'Asif', 3045619106),
(1023, 14, 'Ajmal', 3048619106),
(1024, 15, 'Fazal', 3045619160),
(1025, 16, 'Zaman', 3065619106),
(1026, 17, 'Subhan', 3095619106),
(1027, 18, 'Lareeb', 3047219106),
(1028, 19, 'Danish', 3045619106),
(1029, 20, 'Basit', 3045619106),
(1030, 21, 'Rafy', 3045619756),
(1031, 22, 'Abbas', 3056149060),
(1032, 23, 'Hassan', 3045618406),
(1033, 24, 'Arif', 3045619106),
(1034, 25, 'Asjad', 3047619106),
(1035, 25, 'Wasi', 3045609106),
(1036, 26, 'Baariq', 3070619106),
(1037, 27, 'Hamza', 3045612106),
(1038, 29, 'Zaakir', 3041563790),
(1039, 30, 'Usaid', 3004593790),
(1040, 31, 'Usama', 3304563790),
(1041, 32, 'Aqeel', 3004563797),
(1042, 33, 'Usama', 3008563790),
(1043, 34, 'Sabhi', 3004561790),
(1044, 35, 'Yasir', 3004563190),
(1045, 36, 'Yosuf', 3005563790),
(1046, 37, 'Qasim', 3004553790),
(1047, 38, 'Kabeer', 3004562790),
(1048, 39, 'Jawad', 3004063790),
(1049, 40, 'Hadi', 3004563590);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_contact`
--
ALTER TABLE `a_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_detail`
--
ALTER TABLE `c_detail`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `sender_detail`
--
ALTER TABLE `sender_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vreg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_contact`
--
ALTER TABLE `a_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `c_detail`
--
ALTER TABLE `c_detail`
  MODIFY `order_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `sender_detail`
--
ALTER TABLE `sender_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
