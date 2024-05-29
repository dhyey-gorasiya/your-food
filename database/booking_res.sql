-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 08:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_res`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `email`, `password`) VALUES
(1, 'admin01@gmail.com', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(200) DEFAULT NULL,
  `res_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `make_date` date DEFAULT NULL,
  `make_time` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `phone` float DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` varchar(30) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0- reject, 1-confirmed',
  `reject` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `res_id`, `c_id`, `make_date`, `make_time`, `name`, `first_name`, `phone`, `email`, `booking_date`, `booking_time`, `status`, `reject`) VALUES
(65, '64304db679e2b', 1, 37, '2023-04-07', '07:07:02pm', 'gorasiya', 'dhyey', 9023150000, 'dhyeygorasiya@gmail.com', '2023-04-08', '20:00 h', 0, 0),
(66, '64304f3b201c2', 3, 37, '2023-04-07', '07:13:31pm', 'gorasiya', 'dhyey', 9023150000, 'dhyeygorasiya@gmail.com', '2023-04-08', '14:00 h', 0, 0),
(67, '64304f6327573', 20, 37, '2023-04-07', '07:14:11pm', 'gorasiya', 'dhyey', 9023150000, 'dhyeygorasiya@gmail.com', '2023-04-08', '20:00 h', 0, 0),
(68, '6430e6b1984c1', 1, 37, '2023-04-08', '05:59:45am', 'gorasiya', 'dhyey', 9023150000, 'dhyeygorasiya@gmail.com', '2023-04-09', '12:00 h', 0, 0),
(69, '6430ea2cd04e5', 3, 37, '2023-04-08', '06:14:36am', 'gorasiya', 'dhyey', 9023150000, 'dhyeygorasiya@gmail.com', '2023-04-09', '10:30 h', 1, 0),
(70, '6430effa4fcc8', 3, 36, '2023-04-08', '06:39:22am', 'gorasiya', 'dhyey', 9023150000, 'gorasiyadhyey760@gmail.com', '2023-04-09', '10:00 h', 0, 0),
(71, '64316fe57d4a3', 25, 36, '2023-04-08', '03:45:09pm', 'gorasiya', 'dhyey', 9023150000, 'gorasiyadhyey760@gmail.com', '2023-04-10', '12:00 h', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(200) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `table_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `isActive`) VALUES
(1, 'Pizza', 1),
(2, 'Burger', 1),
(3, 'South Indian', 1),
(4, 'Gujarati', 1),
(5, 'Panjabi', 1),
(6, 'Chinese', 1),
(8, 'Tea Bar', 1),
(9, 'Momos', 1),
(11, 'Non-Vegetarian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location_name` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `isActive`) VALUES
(1, 'Rajkot', 1),
(2, 'Ahmedabad', 1),
(3, 'Surat', 1),
(4, 'Gandhi Nagar', 1),
(5, 'Vadodara', 1),
(11, 'Bhavnagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `item_desc` varchar(500) DEFAULT NULL,
  `food_type` varchar(100) NOT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `res_id`, `item_name`, `item_desc`, `food_type`, `price`, `image`, `isActive`) VALUES
(13, 1, 'Salad', 'Made with green vegetables and fruits', 'Entree', 129, 'burratta.jpg', 1),
(14, 1, 'Roti', 'Made with wheat flour', 'Dish', 40, 'naan.jpg', 1),
(15, 1, 'Apple Pie', 'An apple pie is a fruit pie in which the principal filling ingredient is apples.', 'Dessert', 550, 'apple-pie-10.jpg', 1),
(16, 1, 'Shahi Paneer', 'Shahi paneer is a preparation of paneer, native to the Indian subcontinent, consisting of a thick gravy of cream, tomatoes and Indian spices.', 'Dish', 299, 'download.jpeg', 1),
(17, 1, 'Plain Naan', 'A typical naan recipe involves mixing white or whole wheat flour with active dry yeast, salt, and water.', 'SideDish', 30, 'Homemade-Naan-stack-1.jpg', 1),
(18, 1, 'Dal Fry', 'Dal Fry is a delicious and popular Indian lentil recipe that is made with tuvar dal (pigeon pea lentils), onions, tomatoes and spices. ', 'Menu', 130, 'dal fry.jpeg', 1),
(19, 1, 'Plain Rice', 'Cooked rice refers to rice that has been cooked either by steaming or boiling.', 'Menu', 100, 'plain rice.jpeg', 1),
(20, 1, 'Paneer Kadai', 'Kadai Paneer is a popular Indian paneer dish made with paneer (Indian cottage cheese), onions, and bell peppers cooked in a spicy onion tomato gravy flavored with freshly ground Kadai masala', 'Menu', 220, 'paneer kadai.jpeg', 1),
(21, 1, 'Aloo Gobi', 'Aloo gobi is a vegetarian dish from the Indian subcontinent made with potatoes, cauliflower, and Indian spices.', 'Menu', 120, 'aloo gobi.jpeg', 1),
(22, 3, 'Butter Roti', 'Butter roti is made using whole wheat flour and can be eaten with any choice of dal,vegetable or curry dish.', 'Menu', 20, 'butter roti.jpeg', 1),
(23, 3, 'Butter Naan', 'Naan is always made with all-purpose flour', 'Menu', 30, 'butter naan.jpeg', 1),
(24, 3, 'Dal Tadka', 'dal tadka is cooked lentils which are tempered with oil or ghee fried spices & herbs.', 'Menu', 140, 'dal tadka.jpeg', 1),
(25, 3, 'Masala Rice', 'Rice is mixed with spices and flavored with cumin.', 'Menu', 150, 'masala rice.jpeg', 1),
(26, 3, 'Palak Paneer', 'Palak Paneer is such a staple in north India. It’s one of the most commonly made paneer dishes in Indian homes', 'Menu', 220, 'palak paneer.jpeg', 1),
(27, 3, 'Paneer Butter Masala', 'paneer butter masala is rich and creamy made of butter, paneer, onions, tomatoes, cashew and spice powders, and herbs.', 'Menu', 220, 'paneer Butter masala.jpeg', 1),
(28, 3, 'Malai Kofta', 'Malai Kofta is a very popular Indian vegetarian dish where balls (kofta) made of potato and paneer are deep fried and served with a creamy and spiced tomato based curry.', 'Menu', 220, 'malai kofta.jpeg', 1),
(29, 3, 'Aloo Gobi', 'Aloo gobhi is a vegetarian dish from the Indian subcontinent made with potatoes, cauliflower, and Indian spices.', 'Menu', 240, 'aloo gobi.jpeg', 1),
(30, 3, 'Green Salad', 'Mixed greens, red leaf lettuce, green leaf lettuce and spinach all work well. Cucumber:', 'Entree', 60, 'saladesaumon.jpeg', 1),
(31, 3, 'Masala Papad', ' it is a dough made of urad dal (black gram) flour, which may or may not be spiced, and rolled into thin discs.', 'SideDish', 40, 'masala papad.jpeg', 1),
(32, 3, 'coca cola', 'Its a soft Drink.', 'Drinks', 20, 'BK_CocaCola_detail.png', 1),
(33, 3, 'Apple Pie', 'An apple pie is a fruit pie in which the principal filling ingredient is apples.', 'Dessert', 450, 'apple-pie-10.jpg', 1),
(34, 20, 'Plain Dosa', 'Paper dosa is made from a batter of raw rice, urad dal, rice flour and water which is ground into a smooth paste.', 'Menu', 60, 'plain dosa.jpeg', 1),
(35, 20, 'Masala Uttapam', 'uttapam is one of the most liked breakfasts or dinner items.', 'Menu', 80, 'uttapam.jpeg', 1),
(36, 20, 'Fry Idli', ' The idlis are fried till they are crispy and then tossed in curry leaves and South Indian spices.', 'Entree', 60, 'idli.jpeg', 1),
(37, 20, 'Dal Vada', 'Dal Vada is made with chana dal.', 'Dish', 50, 'dal vada.jpeg', 1),
(38, 20, 'Misal Pav', ' It consists of misal (a spicy curry usually made from moth beans) and pav (a type of Indian bread roll).', 'Dish', 50, 'misal pav.jpeg', 1),
(39, 20, 'Mysore Masala Dosa', 'It is a type of dosa and has its origin in the town of Udupi in Karnataka. It is made from rice, lentils, Urad dal, Chana dal, fenugreek, puffed rice, Toor dal, dry red chilli and served with potato curry, chutneys, and sambar.', 'Dish', 140, 'masala dosa.jpeg', 1),
(40, 1, 'coca cola', 'coca cola', 'Drinks', 123, '1200-L-des-bires-diffrencier.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rc_info`
--

CREATE TABLE `rc_info` (
  `id` int(11) NOT NULL,
  `rc_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` float DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `opening_res` time DEFAULT NULL,
  `closing_res` time DEFAULT NULL,
  `full_service` int(20) DEFAULT NULL COMMENT '1 = oui, 2 = non ',
  `logo` varchar(500) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `siret` int(9) DEFAULT NULL,
  `approve_status` int(11) NOT NULL DEFAULT 0 COMMENT '0-not approve,1-approve ',
  `role` int(11) DEFAULT NULL COMMENT '1 = restaurant, 2 = customer ',
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rc_info`
--

INSERT INTO `rc_info` (`id`, `rc_name`, `first_name`, `category`, `email`, `website`, `phone`, `address`, `location`, `opening_res`, `closing_res`, `full_service`, `logo`, `password`, `siret`, `approve_status`, `role`, `isActive`) VALUES
(1, 'Vrundavan Restaurant', '', 5, 'vrundavan01@gmail.com', 'http://localhost/booking-res/accueil.php', 9879820000, 'mota varachha - 394101', 3, '10:00:00', '23:00:00', 2, 'vrundavan-garden-restaurant-sabarkantha-restaurants-kzoq6 (1).jpg', '123', 478922751, 0, 1, 1),
(3, 'Govardhan Restaurant', NULL, 5, 'goverdhan01@gmail.com', 'http://localhost/booking-res/accueil.php', 8673030000, 'vesu - 395007', 4, '11:45:00', '23:30:00', 1, 'govardhan.jpeg', '123', 175121186, 0, 1, 1),
(20, 'Malhar Restaurant', NULL, 3, 'malhar123@gmail.com', 'https://www.youtube.com/', 9023150000, 'mota varachha', 3, '18:00:00', '00:00:00', 1, 'malhar.jpeg', '123', 123456789, 0, 1, 1),
(25, 'mcDonald\'s', NULL, 1, 'mcdonald@gamil.com', 'https://www.mcdonalds.com/', 1234570000, 'Deepkamal Mall, Nana Varachha-395006', 2, '10:00:00', '00:00:00', 1, 'mcdonald.jpeg', '123', 0, 0, 1, 1),
(28, 'Real paprika', NULL, 1, 'realpaprika@gmail.com', 'https://www.realpaprika.com/', 1234570000, 'mota varachha - 394101', 1, '09:00:00', '23:00:00', 1, 'real peprika.jpg', '123', 0, 0, 1, 1),
(32, 'tejas', 'devani', NULL, 'tejasdevani77@gmail.com', NULL, 8320940000, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, 0, 2, 1),
(35, 'Dominos Pizza', NULL, 1, 'dominos@gmail.com', '', 9023150000, 'A-202 omkar residency', 5, '10:00:00', '00:00:00', 1, 'dominos.jpg', '123', 0, 0, 1, 1),
(36, 'gorasiya', 'dhyey', NULL, 'gorasiyadhyey760@gmail.com', NULL, 9023150000, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, 0, 2, 1),
(37, 'gorasiya', 'dhyey', NULL, 'dhyeygorasiya@gmail.com', NULL, 9023150000, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_personne`
--

CREATE TABLE `restaurant_personne` (
  `id` int(11) NOT NULL,
  `tbl_id` int(11) DEFAULT NULL,
  `table_no` varchar(30) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_personne`
--

INSERT INTO `restaurant_personne` (`id`, `tbl_id`, `table_no`, `isActive`) VALUES
(16, NULL, '8 personnes- Table N° 1', 1),
(17, NULL, '8 personnes- Table N° 2', 1),
(18, NULL, '8 personnes- Table N° 3', 1),
(19, NULL, '8 personnes- Table N° 4', 1),
(20, NULL, '8 personnes- Table N° 5', 1),
(21, NULL, '8 personnes- Table N° 6', 1),
(22, NULL, '8 personnes- Table N° 7', 1),
(23, NULL, '8 personnes- Table N° 8', 1),
(24, NULL, '1 personne- Table N° 1', 1),
(25, NULL, '1 personne- Table N° 2', 1),
(26, NULL, '1 personne- Table N° 3', 1),
(27, NULL, '1 personne- Table N° 4', 1),
(28, NULL, '1 personne- Table N° 5', 1),
(29, 13, '2 personnes- Table N° 1', 1),
(30, 13, '2 personnes- Table N° 2', 1),
(31, 13, '2 personnes- Table N° 3', 1),
(32, 13, '2 personnes- Table N° 4', 1),
(33, 13, '2 personnes- Table N° 5', 1),
(34, 14, '3 personnes- Table N° 1', 1),
(35, 14, '3 personnes- Table N° 2', 1),
(36, 14, '3 personnes- Table N° 3', 1),
(37, 14, '3 personnes- Table N° 4', 1),
(38, 14, '3 personnes- Table N° 5', 1),
(39, 15, '4 personnes- Table N° 1', 1),
(40, 15, '4 personnes- Table N° 2', 1),
(41, 15, '4 personnes- Table N° 3', 1),
(42, 15, '4 personnes- Table N° 4', 1),
(43, 15, '4 personnes- Table N° 5', 1),
(44, 16, '5 personnes- Table N° 1', 1),
(45, 16, '5 personnes- Table N° 2', 1),
(46, 16, '5 personnes- Table N° 3', 1),
(47, 16, '5 personnes- Table N° 4', 1),
(48, 16, '5 personnes- Table N° 5', 1),
(49, 17, '6 personnes- Table N° 1', 1),
(50, 17, '6 personnes- Table N° 2', 1),
(51, 17, '6 personnes- Table N° 3', 1),
(52, 17, '6 personnes- Table N° 4', 1),
(53, 17, '6 personnes- Table N° 5', 1),
(54, 19, '7 personnes- Table N° 1', 1),
(55, 19, '7 personnes- Table N° 2', 1),
(56, 19, '7 personnes- Table N° 3', 1),
(57, 19, '7 personnes- Table N° 4', 1),
(58, 19, '7 personnes- Table N° 5', 1),
(59, 20, '8 personnes- Table N° 1', 1),
(60, 20, '8 personnes- Table N° 2', 1),
(61, 20, '8 personnes- Table N° 3', 1),
(62, 20, '8 personnes- Table N° 4', 1),
(63, 20, '8 personnes- Table N° 5', 1),
(69, 25, '9 personnes- Table N° 1', 1),
(70, 25, '9 personnes- Table N° 2', 1),
(71, 25, '9 personnes- Table N° 3', 1),
(72, 25, '9 personnes- Table N° 4', 1),
(73, 25, '9 personnes- Table N° 5', 1),
(74, 26, '1 personne- Table N° 1', 1),
(75, 26, '1 personne- Table N° 2', 1),
(76, 26, '1 personne- Table N° 3', 1),
(77, 26, '1 personne- Table N° 4', 1),
(78, 26, '1 personne- Table N° 5', 1),
(79, 27, '2 personnes- Table N° 1', 1),
(80, 27, '2 personnes- Table N° 2', 1),
(81, 27, '2 personnes- Table N° 3', 1),
(82, 27, '2 personnes- Table N° 4', 1),
(83, 27, '2 personnes- Table N° 5', 1),
(84, 28, '3 personnes- Table N° 1', 1),
(85, 28, '3 personnes- Table N° 2', 1),
(86, 28, '3 personnes- Table N° 3', 1),
(87, 28, '3 personnes- Table N° 4', 1),
(88, 28, '3 personnes- Table N° 5', 1),
(89, 29, '4 personnes- Table N° 1', 1),
(90, 29, '4 personnes- Table N° 2', 1),
(91, 29, '4 personnes- Table N° 3', 1),
(92, 29, '4 personnes- Table N° 4', 1),
(93, 29, '4 personnes- Table N° 5', 1),
(94, 30, '5 personnes- Table N° 1', 1),
(95, 30, '5 personnes- Table N° 2', 1),
(96, 30, '5 personnes- Table N° 3', 1),
(97, 30, '5 personnes- Table N° 4', 1),
(98, 30, '5 personnes- Table N° 5', 1),
(104, NULL, '10 personnes- Table N° 1', 1),
(105, NULL, '10 personnes- Table N° 2', 1),
(106, NULL, '10 personnes- Table N° 3', 1),
(107, NULL, '10 personnes- Table N° 4', 1),
(108, NULL, '10 personnes- Table N° 5', 1),
(109, 32, '3 personnes- Table N° 1', 1),
(110, 32, '3 personnes- Table N° 2', 1),
(111, 32, '3 personnes- Table N° 3', 1),
(112, 32, '3 personnes- Table N° 4', 1),
(113, 32, '3 personnes- Table N° 5', 0),
(114, 33, '4 personnes- Table N° 1', 1),
(115, 33, '4 personnes- Table N° 2', 1),
(116, 33, '4 personnes- Table N° 3', 1),
(117, 33, '4 personnes- Table N° 4', 0),
(118, 33, '4 personnes- Table N° 5', 0),
(119, 34, '5 personnes- Table N° 1', 1),
(120, 34, '5 personnes- Table N° 2', 1),
(121, 34, '5 personnes- Table N° 3', 1),
(122, 34, '5 personnes- Table N° 4', 1),
(123, 34, '5 personnes- Table N° 5', 1),
(124, 35, '6 personnes- Table N° 1', 1),
(125, 35, '6 personnes- Table N° 2', 1),
(126, 35, '6 personnes- Table N° 3', 1),
(127, 35, '6 personnes- Table N° 4', 1),
(128, 35, '6 personnes- Table N° 5', 1),
(129, 36, '7 personnes- Table N° 1', 1),
(130, 36, '7 personnes- Table N° 2', 1),
(131, 36, '7 personnes- Table N° 3', 1),
(132, 36, '7 personnes- Table N° 4', 1),
(133, 36, '7 personnes- Table N° 5', 1),
(134, 37, '3 personnes- Table N° 1', 1),
(135, 37, '3 personnes- Table N° 2', 1),
(136, 37, '3 personnes- Table N° 3', 1),
(137, 37, '3 personnes- Table N° 4', 1),
(138, 37, '3 personnes- Table N° 5', 1),
(139, 38, '4 personnes- Table N° 1', 1),
(140, 38, '4 personnes- Table N° 2', 1),
(141, 38, '4 personnes- Table N° 3', 1),
(142, 38, '4 personnes- Table N° 4', 1),
(143, 38, '4 personnes- Table N° 5', 1),
(144, 39, '5 personnes- Table N° 1', 1),
(145, 39, '5 personnes- Table N° 2', 1),
(146, 39, '5 personnes- Table N° 3', 1),
(147, 39, '5 personnes- Table N° 4', 1),
(148, 39, '5 personnes- Table N° 5', 1),
(149, 40, '6 personnes- Table N° 1', 1),
(150, 40, '6 personnes- Table N° 2', 1),
(151, 40, '6 personnes- Table N° 3', 1),
(152, 40, '6 personnes- Table N° 4', 1),
(153, 40, '6 personnes- Table N° 5', 1),
(154, 41, '7 personnes- Table N° 1', 1),
(155, 41, '7 personnes- Table N° 2', 1),
(156, 41, '7 personnes- Table N° 3', 1),
(157, 41, '7 personnes- Table N° 4', 1),
(158, 41, '7 personnes- Table N° 5', 1),
(159, NULL, '10 personnes- Table N° 1', 1),
(160, NULL, '10 personnes- Table N° 2', 1),
(161, NULL, '10 personnes- Table N° 3', 1),
(162, NULL, '10 personnes- Table N° 4', 1),
(163, NULL, '10 personnes- Table N° 5', 1),
(179, NULL, '1 personne- Table N° 1', 1),
(180, NULL, '1 personne- Table N° 2', 1),
(181, NULL, '1 personne- Table N° 3', 1),
(182, NULL, '1 personne- Table N° 4', 1),
(183, NULL, '1 personne- Table N° 5', 1),
(184, NULL, '1 personne- Table N° 6', 1),
(185, NULL, '1 personne- Table N° 7', 1),
(186, NULL, '1 personne- Table N° 8', 1),
(187, NULL, '1 personne- Table N° 9', 1),
(188, NULL, '1 personne- Table N° 10', 1),
(189, NULL, '1 personne- Table N° 11', 1),
(190, NULL, '1 personne- Table N° 12', 1),
(191, NULL, '1 personne- Table N° 13', 1),
(192, NULL, '1 personne- Table N° 14', 1),
(193, NULL, '1 personne- Table N° 15', 1),
(194, 49, '8 personnes- Table N° 1', 1),
(195, 49, '8 personnes- Table N° 2', 1),
(196, 49, '8 personnes- Table N° 3', 1),
(197, 49, '8 personnes- Table N° 4', 1),
(198, 49, '8 personnes- Table N° 5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tables`
--

CREATE TABLE `restaurant_tables` (
  `id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `person_num` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_tables`
--

INSERT INTO `restaurant_tables` (`id`, `res_id`, `person_num`, `isActive`) VALUES
(13, 1, '2 personnes', 1),
(14, 1, '3 personnes', 1),
(15, 1, '4 personnes', 1),
(16, 1, '5 personnes', 1),
(17, 1, '6 personnes', 1),
(19, 1, '7 personnes', 1),
(20, 1, '8 personnes', 1),
(25, 1, '9 personnes', 1),
(26, 25, '1 personne', 1),
(27, 25, '2 personnes', 1),
(28, 25, '3 personnes', 1),
(29, 25, '4 personnes', 1),
(30, 25, '5 personnes', 1),
(32, 3, '3 personnes', 1),
(33, 3, '4 personnes', 1),
(34, 3, '5 personnes', 1),
(35, 3, '6 personnes', 1),
(36, 3, '7 personnes', 1),
(37, 20, '3 personnes', 1),
(38, 20, '4 personnes', 1),
(39, 20, '5 personnes', 1),
(40, 20, '6 personnes', 1),
(41, 20, '7 personnes', 1),
(42, 20, '8 personnes', 1),
(49, 3, '8 personnes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state_location`
--

CREATE TABLE `state_location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_location`
--

INSERT INTO `state_location` (`id`, `name`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Res_bc` (`res_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Bt` (`table_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Rc_Menu` (`res_id`);

--
-- Indexes for table `rc_info`
--
ALTER TABLE `rc_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Location` (`location`),
  ADD KEY `FK_Cat` (`category`);

--
-- Indexes for table `restaurant_personne`
--
ALTER TABLE `restaurant_personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_R_pers` (`tbl_id`);

--
-- Indexes for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Rc_tables` (`res_id`);

--
-- Indexes for table `state_location`
--
ALTER TABLE `state_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rc_info`
--
ALTER TABLE `rc_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `restaurant_personne`
--
ALTER TABLE `restaurant_personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `state_location`
--
ALTER TABLE `state_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `FK_Res_bc` FOREIGN KEY (`res_id`) REFERENCES `rc_info` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD CONSTRAINT `FK_Bt` FOREIGN KEY (`table_id`) REFERENCES `restaurant_personne` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD CONSTRAINT `FK_Rc_Menu` FOREIGN KEY (`res_id`) REFERENCES `rc_info` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `rc_info`
--
ALTER TABLE `rc_info`
  ADD CONSTRAINT `FK_Cat` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Location` FOREIGN KEY (`location`) REFERENCES `locations` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_personne`
--
ALTER TABLE `restaurant_personne`
  ADD CONSTRAINT `FK_R_pers` FOREIGN KEY (`tbl_id`) REFERENCES `restaurant_tables` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD CONSTRAINT `FK_Rc_tables` FOREIGN KEY (`res_id`) REFERENCES `rc_info` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
