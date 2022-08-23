-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 06:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gir_ropeway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `con_password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `con_password`) VALUES
(1, 'Smit soni', 'smitghusani7@gmail.com', 0, '1234', '1234'),
(2, 'admin', 'admin@ssn.com', 1234567890, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_contact`
--

CREATE TABLE `advertisement_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement_contact`
--

INSERT INTO `advertisement_contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'Rishi Fichadiya', 'rishi123@gmail.com', 1010101010, 'The Girnar Quiz', 'We are giving the opportunity to the masses to win an exciting cash prize by participating in a simple quiz content about the sacred Girnar Hill.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timeslot` varchar(5) NOT NULL,
  `member` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `razorpay_order_id` varchar(100) NOT NULL,
  `razorpay_payment_id` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `destination`, `date`, `timeslot`, `member`, `price`, `email`, `razorpay_order_id`, `razorpay_payment_id`, `phone`, `city`, `pincode`) VALUES
(17, 'Smith Ghusani', 'Dat Temple', 'Jun 27, 2021', '10 AM', 1, 160, 'smitghusani7@gmail.com', 'order_HRbZJa1d3yPbgz', 'pay_HRbZRY0ByLIXxe', 9510660995, 'Junagadh', 362001),
(18, 'Nirbhay Purohit', 'Ambaji', 'Jul 8, 2021', '2 PM', 3, 360, 'np789@gmail.com', 'order_HRbdwU1HTxO40z', 'pay_HRbeL4iWbKLxPk', 1234567890, 'Junagadh', 362001),
(19, 'MahajanSoni', 'Ambaji', 'Jul 10, 2021', '10 AM', 2, 240, 'mahajansoni555@gmail.com', 'order_HX2bPAyDftlvkO', 'pay_HX2cHufNvG7KC6', 1234567890, 'Amreli', 362002),
(20, 'SMITH GHUSANI', 'Dat Temple', 'Mar 12, 2022', '10 AM', 1, 160, 'SMITHGHUSANI7@GMAIL.COM', 'order_J4psNQeJKGO7Kf', 'pay_J4psXDzFv2a5td', 9510660995, 'RAJKOT', 362002),
(21, 'Smit Ghusani', 'Ambaji', 'Mar 31, 2022', '3 PM', 2, 240, 'admin@gmail.com', 'order_JDjOqlO93dhNm4', 'pay_JDjP1PLntvuQ8D', 123456778, 'Junagadh', 362001);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Smi', 'smitghusani7@gmail.com', 9510660995, 'hifsdfgsdfsdfsdfsdafasfgdjfvbdhgvbdshvbdvjfgvbndsfhifsdfgsdfsdfsdfsdafasfgdjfvbdhgvbdshvbdvjfgvbndsf');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `placename` varchar(30) NOT NULL,
  `ticketprice` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `placename`, `ticketprice`) VALUES
(2, 'Ambaji', 120),
(3, 'Dat Temple', 160),
(4, 'Jain Derasir', 100);

-- --------------------------------------------------------

--
-- Table structure for table `image_video`
--

CREATE TABLE `image_video` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `vlink` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_video`
--

INSERT INTO `image_video` (`id`, `title`, `vlink`, `image`, `description`) VALUES
(2, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=FbVrwVrZzYE', '310169.jpg', 'Ropeway View'),
(3, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=z5chaeOL6po', '888601.jpg', 'ExploreGirnar Mounta'),
(4, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=Hf0keWqv73s', '782018.jpg', 'Maa Amba Darshan'),
(5, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=ux48nabXWdc', '562053.png', 'Girnar'),
(6, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=Smvw9yA8rHM', '728178.jpg', 'Girnar Falk Song'),
(7, 'admin-panel/uploads/slider/', 'https://www.youtube.com/watch?v=v0xoo1N02TI', '566200.jpg', 'Sakhi Datar'),
(9, 'admin-panel/uploads/slider/', '', '585010.jpg', 'Bhavnath Temple');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `eventname` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `eventname`, `image`, `description`) VALUES
(2, 'admin-panel/uploads/', 'The Girnar Quiz', '740129.jpg', 'Following the huge response of \"Girnar ka Gyan\", Udan Khatola has launched \"The Girnar Quiz\" and tuned the table around. We are giving the opportunity to the masses to win an exciting cash prize by participating in a simple quiz content about the sacred G'),
(3, 'admin-panel/uploads/', 'GIRNAR ROPEWAY', '710160.png', 'The soon to open Girnar Ropeway will enable the pilgrims to seek the blessings of Maa Amba effortlessly. Located at the highest point in Gujarat - Mt. Girnar the Ropeway will feature a state-of-the-art experience zone first of its kind in India featuring '),
(4, 'admin-panel/uploads/', 'Girnar ka Gyan', '989726.jpg', 'Udan Khatola has launched a creative campaign called  Girnar Ka Gyan in the backdrop of upcoming ropeway at Girnar. The campaign is live on all social media platform of Udan Khatola. It flashes light on some fascinating facts about the Girnar Hill. We car'),
(5, 'admin-panel/uploads/', 'All About The Girnar Hill', '896466.jpg', 'The highest point in Gujarat, Mt. Girnar has for centuries been one of the most important pilgrimage sites in the state and indeed in all of Western India, with 866 Hindu and Jain temples spread over the 5 summits. '),
(9, 'admin-panel/uploads/', 'MAA AMBAJI AT GABBAR HILL', '11944.jpg', 'EXCERPTS FROM THE BLOG : Ambaji Temple is located on the Arasur hill of the Aravalli range in Ambaji. The temple is among the 51 Shaktipeeths and it is believed that the heart of the Goddess fell at this place. The temple which is original seat of the goddess, is on Gabbar Hill, 4.5km from the Arasuri Ambaji temple. You can reach it by climbing 999 steps, or by cable car know as Udankhatola Khushiyon Bhari Udaan. On the flat hilltop is a small niche in which a lamp is'),
(8, 'admin-panel/uploads/', 'GIRNAR ROPEWAY', '920765.jpg', 'The soon to open Girnar Ropeway will enable the pilgrims to seek the blessings of Maa Amba effortlessly. Located at the highest point in Gujarat - Mt. Girnar the Ropeway will feature a state-of-the-art experience zone first of its kind in India featuring augmented and virtual reality experiences.');

-- --------------------------------------------------------

--
-- Table structure for table `sight_scene`
--

CREATE TABLE `sight_scene` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `placename` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sight_scene`
--

INSERT INTO `sight_scene` (`id`, `title`, `placename`, `image`, `description`) VALUES
(2, 'admin-panel/uploads/news_event/Bhavnath Temple', 'Bhavnath Temple', '587419.jpg', 'The Shiva ling here is said to have emerged of its own divine intention. There are two main annual festivals: Maha Shivratri and Girnar Lili Parikrama. It is believe that Lord Shiva himself visits the shrine here on this holiest day. Devotees go around the holy hills of Girnar, before the fair. It is compared to the Lili Parikrama of Govardhan mountain in Vraj. It is believed that Lord Dattatrey himself descends down to Earth and stays here these five days to bless his devotees.\r\n\r\n'),
(3, 'admin-panel/uploads/news_event/Uparkot Caves-Upark', 'Uparkot Caves-Uparkot', '509463.jpg', 'The Khapra Kodiya Caves are part of the Junagadh Buddhist Cave Group. They are the oldest of the caves. The caves, on the basis of scribbles and short cursive letters on the wall, are dated to 3rd-4th century BCE during the Emperor Ashoka’sThree separate sites of rooms carved out of stone to be used as monks’ quarters. These caves are also known as Khangar Mahal.These caves are along the edge of the ancient Sudarshan Lake and little outside Uparkot fort, Northerly.'),
(4, 'admin-panel/uploads/news_event/Jain Temple', 'Jain Temple', '688788.jpg', 'Girnar Jain temples were constructed during 3rd Century AD.Situated on the first plateau of Mount Girnar at the height of about 3800 steps from base.16 Jain temples here form a sort of fort on the ledge at the top of the great cliff.it is the Nirvan Bhumi of 22nd Tirthankara Lord Neminath.The idol of Neminath was made by Indra dev from fifth divine world, is believed\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `id` int(11) NOT NULL,
  `timeslab` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`id`, `timeslab`) VALUES
(4, '10 AM'),
(5, '11 AM'),
(6, '12 PM'),
(7, '1 PM'),
(8, '2 PM'),
(9, '3 PM'),
(10, '4 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement_contact`
--
ALTER TABLE `advertisement_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_video`
--
ALTER TABLE `image_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sight_scene`
--
ALTER TABLE `sight_scene`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisement_contact`
--
ALTER TABLE `advertisement_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_video`
--
ALTER TABLE `image_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sight_scene`
--
ALTER TABLE `sight_scene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
