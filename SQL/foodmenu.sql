-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `user_id`, `name`, `price`, `created at`, `quantity`, `status`) VALUES
(28, 3, 'Maaza', '110', '2023-03-22 00:02:18', 2, 0),
(32, 18, 'Coca cola', '100', '2023-03-22 21:38:02', 2, 0),
(39, 18, 'Coca cola', '100', '2023-03-22 23:02:57', 1, 0),
(43, 4, 'Coca cola', '100', '2023-03-24 22:42:46', 1, 0),
(44, 4, 'Pizza', '120', '2023-03-24 22:43:15', 1, 0),
(49, 22, 'Maaza', '110', '2023-03-27 18:36:54', 4, 0),
(50, 22, 'Sprite', '100', '2023-03-27 18:37:12', 10, 0),
(51, 3, 'Pizza', '120', '2023-03-27 22:02:59', 5, 0),
(53, 23, 'Coca cola', '100', '2023-03-28 15:06:44', 2, 0),
(62, 25, 'Samosa', '110', '2023-04-03 23:57:27', 3, 1),
(64, 25, 'Aloo paratha ', '100', '2023-04-04 00:24:33', 1, 1),
(65, 25, 'Maaza', '110', '2023-04-04 00:41:30', 1, 1),
(66, 25, 'Maisur Dose', '120', '2023-04-04 00:05:08', 1, 1),
(101, 26, 'Pizza', '120', '2023-04-11 11:02:21', 4, 1),
(102, 26, 'Poha', '100', '2023-04-11 11:02:27', 7, 1),
(105, 27, 'Patra', '90', '2023-04-11 11:11:02', 2, 1),
(106, 27, 'Idli', '120', '2023-04-11 11:47:45', 3, 1),
(107, 28, 'Poha', '100', '2023-04-11 11:59:35', 3, 1),
(108, 29, 'Lassi ', '90', '2023-04-15 15:10:34', 4, 1),
(109, 29, 'Poha', '100', '2023-04-15 15:10:46', 3, 1),
(110, 29, 'Pizza', '120', '2023-04-15 15:10:55', 2, 1),
(111, 29, 'Idli', '120', '2023-04-15 15:11:06', 1, 1),
(112, 30, 'Pizza', '120', '2023-04-16 02:00:31', 2, 1),
(113, 30, 'Patra', '90', '2023-04-16 02:00:37', 3, 1),
(114, 30, 'Lassi ', '90', '2023-04-16 02:00:42', 2, 1),
(115, 30, 'Idli', '120', '2023-04-16 02:00:47', 1, 1),
(117, 2, 'Pizza', '120', '2023-04-24 19:08:15', 1, 1),
(118, 2, 'Poha', '100', '2023-04-24 19:08:25', 1, 1),
(119, 2, 'Lassi ', '90', '2023-04-24 19:08:32', 1, 1),
(120, 2, 'Patra', '90', '2023-04-24 19:08:41', 1, 1),
(122, 31, 'Pizza', '120', '2023-04-24 20:07:31', 4, 1),
(123, 31, 'Lassi ', '90', '2023-04-24 20:07:38', 3, 1),
(124, 31, 'Poha', '100', '2023-04-24 20:07:44', 2, 1),
(125, 31, 'Idli', '120', '2023-04-24 20:08:00', 1, 1),
(126, 32, 'Pizza', '120', '2023-04-24 21:13:14', 4, 1),
(127, 32, 'Lassi ', '90', '2023-04-24 21:13:22', 3, 1),
(128, 32, 'Idli', '120', '2023-04-24 21:13:28', 2, 1),
(129, 32, 'Patra', '90', '2023-04-24 21:13:40', 1, 1),
(130, 33, 'Pizza', '120', '2023-04-24 22:12:31', 4, 1),
(131, 33, 'Poha', '100', '2023-04-24 22:12:38', 3, 1),
(132, 33, 'Lassi ', '90', '2023-04-24 22:12:44', 2, 1),
(133, 33, 'Idli', '120', '2023-04-24 22:12:49', 1, 1),
(134, 34, 'Pizza', '120', '2023-04-24 22:48:42', 4, 1),
(135, 34, 'Lassi ', '90', '2023-04-24 22:48:49', 3, 1),
(136, 34, 'Idli', '120', '2023-04-24 22:48:54', 2, 1),
(137, 34, 'Patra', '90', '2023-04-24 22:48:59', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `password`, `created_at`) VALUES
(9, 'Vinit', '1113132132323', 'vinit@gmail.com', '2345', '2023-03-15 22:15:55'),
(11, 'Arpit', '2112113133', 'arpit@gmail.com', '23456', '2023-03-15 22:19:48'),
(15, 'Jemis', '2342232227', 'bhuvajemis@gmail.com', '1234', '2023-03-25 17:49:25'),
(16, 'Keyur', '3435627283', 'keyur123@gmail.com', '123456', '2023-03-25 17:51:36'),
(19, 'Aman', '9979901290', 'aman1194@gmail.com', '123456', '2023-04-25 10:23:19'),
(20, 'yash', '1234567890', 'yash@gmail.com', '123', '2024-01-25 10:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Img` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `trending`, `status`, `created_at`, `Img`) VALUES
(8, 'ColdDrink', 'Natural flavors are derived from fruits, nuts, berries, roots, herbs, and other plant sources.', 1, 0, '2023-03-31 20:19:20', 'coldr.jpg'),
(9, 'Fast Food', 'Fast food is food quickly prepared and served, often at chain restaurants and typically associated with less expensive and less nutritious items like hamburgers, French fries, and soft drinks.', 0, 1, '2023-03-31 20:21:09', '1680294069.jpg'),
(10, 'Breakfast Food', 'The definition of a breakfast food is a food that is eaten primarily for the first meal of the day commonly including: cereal, toast, eggs, pancakes, waffles, pastries, sausage or bacon.', 1, 0, '2023-03-31 20:22:56', '1680294176.jpg'),
(11, 'Punjabi Food', 'Punjabi cuisine is known for its rich, buttery flavors along with the extensive vegetarian and meat dishes.', 0, 1, '2023-03-31 20:24:15', '1680294255.jpg'),
(12, 'Gujarati Food', 'The typical Gujarati thali consists of roti, dal or curry, rice, and shack.', 1, 0, '2023-03-31 20:26:08', '1680294368.png'),
(13, 'South Indian Food', 'Southern Indian food will feature curry leaves, mustard, asafetida, pepper and peppercorns, tamarind, chilies, and fenugreek seeds.', 1, 0, '2023-03-31 20:27:51', '1680294471.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `user` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` int(10) NOT NULL,
  `comments` longtext NOT NULL,
  `Image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `user`, `email`, `mobile`, `comments`, `Image`) VALUES
(6, 'Vinit Patel', 'vinit@gmail.com', 2147483647, 'Many times, people review a restaurant unfavorably when they feel the service was poor or that the food wasn\'t as good as expected.', '1680555084.jpg'),
(7, 'Raj Dave', 'raj234@gmail.com', 2147483647, 'Atmosphere complaints: Food is great; the atmosphere isn\'t. .be disrespectful, and cause potentially more damage than help.', '1680555194.jpg'),
(8, 'Meet Jani', 'meet34@gmail.com', 2147483647, 'An alternate way of providing feedback is by rating the restaurant. This will help them to keep our standards up to your satisfaction and understand how to serve you better on your next order.\r\n\r\n', '1680555532.jpg'),
(9, 'Kevin Desai', 'kevin@gmail.com', 2147483647, 'Food damage or quality issue. We\'re sorry the order you received . You can also give feedback for each item in your order using our in-app rating system.', '1680556188.jpg'),
(10, 'Aman Patel', 'amanpatel1575@gmail.com', 2147483647, 'The Food we had enjoyed at the time of dinner. It was really delicious taste with great quality, everything had unique taste which we had ordered, nice arrangement and services from the staff while eating.', '1681200095.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `long_description` longtext NOT NULL,
  `price` varchar(191) NOT NULL,
  `offerprice` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `category_id`, `name`, `small_description`, `long_description`, `price`, `offerprice`, `image`, `created_at`) VALUES
(4, 9, 'Pizza', '                                                                                                  The Ligurian pizza resembles the pissaladière of Provence in France, adding anchovies to olives and onions.                                                                                                                                                                                   ', '   pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.', '120', '100', '1680290954.jpg', '2023-03-01 00:34:12'),
(6, 8, 'Coca cola', '                                Our company’s purpose is to refresh the world and make a difference. Our portfolio of brands includes Coca-Cola, Sprite, Fanta and other sparkling soft drinks.                                                                                                                                                                                                                              ', ' At The Coca-Cola Company, we are in pursuit of becoming an even more consumer-centric total beverage company. Beverages are a growing and vibrant industry with long-term growth opportunities well into the future. We have established a platform for sustained performance in order to capitalize on that opportunity centered around disciplined portfolio growth, an aligned and engaged bottling system and winning with our stakeholders. ', '100', '50', '1678488031.jpg', '2023-03-03 00:22:41'),
(7, 8, 'Sprite', '                                Very testy drink.                                ', ' very strong and fresh felling.', '100', '80', '1677881051.jpg', '2023-03-03 22:04:11'),
(8, 8, 'Maaza', '                                                                Maaza has a distinct pulpy taste as compared to Frooti and tastes slightly sweeter than Slice                                                                ', '  Maaza claims to contain mango pulp of the Alphonso variety, which is known as the \"King of Mangoes\" in India. Maaza is a popular household name in Dubai.', '110', '90', '1678481168.jpg', '2023-03-10 20:46:08'),
(9, 9, 'Samosa', '                                A samosa  or singara is a fried South Asian pastry with a savoury filling, including ingredients such as spiced potatoes, onions, and peas                                ', ' It may take different forms, including triangular, cone, or half-moon shapes, depending on the region.', '110', '50', '1678481533.jpg', '2023-03-10 20:52:13'),
(10, 9, 'Sandwich', '                                A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread.                                ', ' A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein bread serves as a container or wrapper for another food type.', '130', '60', '1679430578.jpg', '2023-03-21 20:29:38'),
(11, 10, 'Paratha ', '                                                                 Punjabi aloo paratha is a popular Indian breakfast of unleavened whole wheat flatbread stuffed with a spiced potato stuffing.                                                                ', '  Aloo paratha is a whole wheat flatbread which is stuffed with spicy mashed potatoes. It is pan fried with oil or ghee and is usually enjoyed with butter, yogurt or pickle.My aloo paratha is nothing fancy, it’s a basic simple recipe which is made in so many homes across India.', '100', '80', '1679443995.jpg', '2023-03-22 00:13:15'),
(12, 13, 'Maisur Dose', 'The Mysore Masala Dose served in Mumbai is crisp and white like the regular Dose.', 'This soft texture and golden brown color, is due to the addition of cooked rice or Paha .\r\n', '120', '90', '1680295127.jpg', '2023-03-31 20:38:47'),
(13, 11, 'Lachha Paratha', ' Lachha Paratha is a popular North Indian flatbread with many flaky and crispy layers.', 'Lachha paratha is a very popular flatbread from North India. It is usually made with whole wheat flour and derives its name thanks to the all the crispy, flaky layers that form while cooking this paratha. ', '130', '90', '1680559184.jpg', '2023-04-03 21:59:44'),
(14, 11, 'Lassi ', '                                Lassi is a cooling, refreshing, probiotic drink perfect for the warm summer months.                                 ', ' Popular in Punjab and North India, there are many variations of a lassi recipe, including mango lassi, dry fruits lassi, and mallei lassi. ', '90', '70', '1680559489.jpg', '2023-04-03 22:04:49'),
(15, 12, 'Khandvi ', '                                Gujarati Khandvi (Patuli/Paturi) are tightly rolled, bite-sized snacks made using chickpea flour and yoghurt.                                 ', ' They’re spicy, sour, slightly sweet and so delicious. Khandvi , also known as Patuli/Paturi is a popular vegetarian snack from Gujarat, western India.', '120', '60', '1680559693.jpg', '2023-04-03 22:08:13'),
(16, 12, 'Patra', 'Patra Recipe also known as the Aloo Vada is a stuffed rolled colocation leaves snack that is popular in both Gujarati and Maharashtra cuisine', 'It is made using colocation leaves that have a sweet and tangy gram flour mixture spread on them and rolled to form a pinwheel.', '90', '60', '1680559892.jpg', '2023-04-03 22:11:32'),
(17, 13, 'Idli', 'Idle is a quintessential South Indian dish and one of the best and easy breakfast recipe.', ' This is a high protein and fiber breakfast. Also, this is vegan and gluten-free. Perfect to include in weight loss diet.', '120', '70', '1680560215.jpg', '2023-04-03 22:16:55'),
(18, 10, 'Poha', '                                Aloo Paha also known as the Batata Paha brings with it delicious tastes and textures of sweetness, sourness, softness and crunchiness.                                ', ' It is made tangy and spicy from green chilies and lemon juice along with boiled potatoes that further enhances the texture.', '100', '80', '1680560436.png', '2023-04-03 22:20:36'),
(19, 11, 'Paneer Butter Masala', 'Best Test Ever', 'Best Paneer Butter Masala', '210', '210', '1681109071.jpg', '2023-04-10 06:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `cardname` varchar(191) NOT NULL,
  `cardnumber` bigint(255) NOT NULL,
  `expmonth` varchar(111) NOT NULL,
  `expyear` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `firstname`, `email`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `created_at`, `user_id`) VALUES
(94, 'Jemis', 'jemis@gmail.com', 'Master', 1234566543243565, 'May', 2025, 12, '2023-04-11 11:52:43', 27),
(95, 'Jemis', 'jemis@gmail.com', 'Master', 1234566543243565, 'May', 2025, 12, '2023-04-11 11:55:21', 27),
(96, 'Jemis', 'jemis@gmail.com', 'Master', 1234566543243565, 'May', 2025, 122, '2023-04-11 11:56:11', 27),
(97, 'Yash', 'kp@gmail.com', 'SDFGH', 9606784567456783, 'Jan', 2023, 456, '2023-04-11 11:57:58', 27),
(98, 'Dvs', 'dvs@gmail.com', 'Master', 6704783492758934, 'Oct', 2026, 456, '2023-04-11 12:00:28', 28),
(99, 'Yash', 'yash@gmail.com', 'Master', 6749742934234234, 'May', 2026, 456, '2023-04-11 12:38:45', 26),
(100, 'Varun', 'varun234@gmail.com', 'Crdit Card', 7564843895674234, 'Oct', 2026, 678, '2023-04-15 15:12:36', 29),
(101, 'Aman', 'aman1575@gmail.com', 'Master', 6705647585746534, 'Jul', 2026, 230, '2023-04-16 02:02:26', 30),
(102, 'Darshil Desai', 'darshil@gmail.com', 'Master', 2467839334849444, 'Aug', 2027, 234, '2023-04-24 19:09:55', 2),
(103, 'Dhaval Patel', 'dhaval@gmail.com', 'Master', 4536782653647826, 'Oct', 2027, 234, '2023-04-24 20:09:00', 31),
(104, 'Rutvik', 'rutvik123@gmail.com', 'Debit ', 7689009898900034, 'Aug', 2026, 234, '2023-04-24 21:14:49', 32),
(105, 'Jenish', 'jenish234@gmail.com', 'Master', 9008770023456789, 'Oct', 2026, 345, '2023-04-24 22:13:39', 33),
(106, 'Harsh Patel', 'harsh@gmail.com', 'Master', 7890004657894789, 'Oct', 2027, 345, '2023-04-24 22:49:55', 34);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `password`, `created_at`, `name`) VALUES
(1, 'arpit2@gmail.com', '123', '2023-03-15 20:14:43', 'arpit'),
(2, 'darshil@gmail.com', '123', '2023-03-21 21:01:42', 'Darshil'),
(3, 'keyur@gmail.com', '123', '2023-03-21 21:05:48', 'Keyur'),
(4, 'arpit@gmail.com', '11111', '2023-03-21 21:06:16', 'Arpit'),
(22, 'bhuvajemis123@gmail.com', '123456', '2023-03-24 23:05:22', 'Jemsi'),
(23, 'ved@gmail.com', '123', '2023-03-28 15:06:22', 'Ved'),
(24, 'raj@gmail.com', '12345', '2023-03-28 18:52:14', 'Raj '),
(25, 'dev123@gmail.com', '1234', '2023-04-03 23:56:49', 'Dev Patel'),
(26, 'kp@gmail.com', '123', '2023-04-09 14:21:37', 'krunal'),
(27, 'utsav@gmail.com', '123', '2023-04-11 11:10:38', 'Utsav'),
(28, 'dvs@gmail.com', '123', '2023-04-11 11:59:16', 'Dvs'),
(29, 'varun234@gmail.com', '1234', '2023-04-15 15:09:48', 'Varun'),
(30, 'aman1575@gmail.com', '123', '2023-04-16 01:54:28', 'Aman'),
(31, 'dhaval@gmail.com', '12345', '2023-04-24 20:06:52', 'Dhaval patel'),
(32, 'rutvik123@gmail.com', '1234', '2023-04-24 21:12:33', 'Rutvik'),
(33, 'jenish234@gmail.com', '23456', '2023-04-24 22:11:53', 'Jenish'),
(34, 'harsh@gmail.com', '1234', '2023-04-24 22:48:09', 'Harsh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
