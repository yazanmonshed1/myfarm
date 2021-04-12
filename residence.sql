-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 05:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `residence`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(8, 'عمان'),
(9, 'الزرقاء'),
(10, 'اربد'),
(11, 'المفرق');

-- --------------------------------------------------------

--
-- Table structure for table `residences`
--

CREATE TABLE `residences` (
  `user_id` int(11) NOT NULL,
  `residences_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `residences_name` varchar(255) NOT NULL,
  `residences_image` varchar(255) NOT NULL,
  `residences_desc` text NOT NULL,
  `residences_data_updata` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `residences_entry_data` datetime NOT NULL DEFAULT current_timestamp(),
  `university_id` int(11) NOT NULL,
  `residences_number` int(11) NOT NULL DEFAULT 1,
  `residences_gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residences`
--

INSERT INTO `residences` (`user_id`, `residences_id`, `city_id`, `residences_name`, `residences_image`, `residences_desc`, `residences_data_updata`, `residences_entry_data`, `university_id`, `residences_number`, `residences_gender`) VALUES
(22, 8, 8, 'اجنحة دار الضيافة الطلابية', '1609189622blog-detail-img2.jpg,1609189638blog-img6.jpg', 'اجنحة دار الضيافة الطلابية', '2020-12-28 23:19:36', '2020-12-28 23:07:24', 9, 2, 1),
(24, 9, 8, 'سكن كوين', '1609189798blog-img4.jpg,1609190331blog-img8.jpg', 'سكن طلاب/ شارع الملكة رانيا العبدالله – الجامعة الأردنية.', '2020-12-28 23:18:52', '2020-12-28 23:09:59', 9, 1, 1),
(24, 10, 11, 'سكن بركات للطالبات', '1609189920blog-img6.jpg,1609189929blog-large-img5.jpg', 'سكن بركات للطالبات\r\nقريب من جامعة ال البيت', '2020-12-28 23:12:14', '2020-12-28 23:12:14', 10, 1, 2),
(24, 11, 8, 'سكن الباسم للطالبات', '1609190023blog-medium-img7.jpg', 'سكن الباسم للطالبات\r\nالعبد الله، ش. الوليد بن عبد الملك، عمّان ش الملكة رانيا', '2020-12-28 23:13:45', '2020-12-28 23:13:45', 12, 2, 2),
(24, 12, 9, 'سكن الولاء', '1609190131blog-grid-img7.jpg,1609190143blog-detail-img2.jpg', 'سكن الولاء\r\nالزرقاء قريب من الجامعهة الهاشميه \r\nاسعار مناسبة', '2020-12-28 23:15:53', '2020-12-28 23:15:45', 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `university_id` int(11) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_name`, `city_id`) VALUES
(9, 'الجامعة الأردنية', 8),
(10, 'جامعة آل البيت', 11),
(11, 'الجامعة الهاشمية', 9),
(12, 'الجامعة الألمانية الأردنية', 8),
(13, 'جامعة إربد الأهلية', 10),
(14, 'جامعة العلوم والتكنولوجيا الأردنية', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_status`, `user_password`, `user_gender`) VALUES
(22, 'admin', 'admin@gmail.com', '0788888888', 0, 'e1badf904666cae52783595431bb119b', 1),
(23, 'محمد نعمان', 'mohammed@yahoo.com', '0789898474', 1, 'e1badf904666cae52783595431bb119b', 0),
(24, ' احمد علي', 'ahamd@yahooo.com', '0788883468', 1, 'e1badf904666cae52783595431bb119b', 0),
(25, 'ايمان احمد', 'em@yahoo.com', '0788412388', 1, 'e1badf904666cae52783595431bb119b', 1),
(26, ' عمر عدنان', 'omar@gmail.com', '0788883288', 1, 'e1badf904666cae52783595431bb119b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`residences_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `residences`
--
ALTER TABLE `residences`
  MODIFY `residences_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
