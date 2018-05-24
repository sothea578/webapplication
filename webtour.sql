-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 09:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booktour`
--

CREATE TABLE `booktour` (
  `id_bookTour` int(255) NOT NULL,
  `id_tour_type` int(255) NOT NULL,
  `id_cat` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_des` int(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booktour`
--

INSERT INTO `booktour` (`id_bookTour`, `id_tour_type`, `id_cat`, `id_user`, `id_des`, `status`, `booking_date`) VALUES
(3, 5, 1, 1, 1, 'confirm', '2018-05-12'),
(6, 2, 2, 2, 3, 'confirm', '2018-05-06'),
(8, 3, 2, 4, 3, 'confirm', '2018-05-12'),
(9, 3, 3, 7, 5, 'finished', '2018-05-12'),
(10, 6, 2, 1, 2, 'finished', '2018-05-14'),
(12, 3, 3, 1, 5, 'confirm', '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Phnom Penh'),
(2, 'Siem Reap'),
(3, 'Sihanouk Ville'),
(4, 'Kompong Thom');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(30) NOT NULL,
  `massage` text NOT NULL,
  `contact_date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `full_name`, `email`, `phone_num`, `massage`, `contact_date`, `status`) VALUES
(2, 'Nuon Sothea', 'than578@gmail.com', '0987738749', 'How can i book tour on this website?', '2018-05-14', 'replied');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `des_id` int(255) NOT NULL,
  `des_name` varchar(100) NOT NULL,
  `des_pic` varchar(50) NOT NULL,
  `des_detail` text NOT NULL,
  `des_price` varchar(10) NOT NULL,
  `id_cat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`des_id`, `des_name`, `des_pic`, `des_detail`, `des_price`, `id_cat`) VALUES
(1, 'Cycling Tour Phnom Penh', 'Que-faire-Ã -Phnom-Penh.jpg', '<p><strong>DAY.01 ARRIVAL PHNOM PENH:</strong></p>\r\n<p>Upon arrival in Phnom Penh International Airport transfer to hotel for check in. Dinner at local restaurant. Overnight stay at hotel in Phnom Penh.</p>\r\n<p><strong>DAY.02 PHNOM PENH- CITY TOUR (B/L/D):</strong></p>\r\n<p>Upon arrival in Phnom Penh International Airport transfer to hotel for check in. Dinner at local restaurant. Overnight stay at hotel in Phnom Penh.</p>\r\n<p><strong>DAY.03 PHNOM PENH- CYCLING TOUR:</strong></p>\r\n<p>- At 12:00pm: Have lunch at local restaurant Picnic at silk farm (Khmer food)</p>\r\n<p>- At 13:30pm: Cycling to Mekong to see people daily living life (visit Buddhist temple, farms and fields)</p>\r\n<p>- At 15:00pm: Cycling back to Phnom Penh, relax as you do your own activity (Snack &amp; Cold Drink will be provided during cycling only)</p>\r\n<p>- At 19:00pm: Transfer to Dinner on private boat (BBQ) and enjoy the picturesque view of the Mekong River. Overnight in Phnom Penh.</p>', '50$', 1),
(2, 'SIC Tours - SIEM REAP - TONLE SAP LAKE 3D/2N', 'Tonle sap.jpg', '<p><strong>DAY.01 ARRIVAL - SIEM REAP:</strong></p>\r\n<p>The driver will wait and pick up at the Airport and transfer to Hotel for check in without guide. Overnight at hotel in Siem Reap.</p>\r\n<p><strong>DAY.02 SIEM REAP- TONLE SAP:</strong></p>\r\n<p>After breakfast at Hotel, a boat trip to floating village is a pleasant break from temple roving and gives you a change to see a fishing village, and foating market. Overnight in Siem reap.</p>\r\n<p><strong>DAY.03 SIEM REAP - DEPARTURE:</strong></p>\r\n<p>After breakfast, free leisure your own activities and the driver will transfer to Airport for flight off without guide too. End of services.</p>', '100$', 2),
(3, 'Charity tour Siem Reap 6D 5N', '9838_728.jpg', '<p><strong>Day 1 Arrival &ndash; Siem Reap:</strong></p>\r\n<p>Upon arrival at Siem Reap international Airport, driver will transfer to hotel for check in. Over night at hotel in Siem Reap.</p>\r\n<p><strong>Day 2 Siem reap &ndash; charity project:</strong></p>\r\n<p>After breakfast at hotel, guide and driver will wait for pick up and transfer to do charity at rural area school and community at Siem Reap Province. After that dinner at local restraurant, then transfer to hotel for check in. Over night at hotel in Siem Reap. Community activities such as : Buiding library, Toilet, donnet booking, cloth, plan the tree, clean the school.....</p>\r\n<p><strong>Day 3 Siem reap &ndash; Charities project:</strong></p>\r\n<p>After breakfast at hotel, Guide and driver will pick up and transfer to rural area school for doing community project and some donation to poor family and student. Community activities such as : Buiding library, Toilet, donnet booking, cloth, plan the tree, clean the school.....</p>\r\n<p><strong>Day 4 Siem reap &ndash; ANGKOR WAT &ndash; ANGKOR THOM:</strong></p>\r\n<p>After breakfast at hotel, Guide and driver will pick up you from hotel and transfer to visit the wonderful temple tour to visit the lost city of the Khmer Empire: South Gate of Angkor Thom, Giant faces of famous Bayon and Baphuon Temples, Terraces of Elephants and Leper King and the unforgettable jungle temple of Ta Prohm. Afternoon program: visit to the World Heritage of Angkor Wat Temple; study both the splendid architecture and bas-relief until late evening climb up Bakheng hill to view the Angkor Wat temple and surrounding areas during sunset. Overnight at hotel in Siem Reap.</p>\r\n<p><strong>Day 5 Siem reap &ndash; Phnom Kulen:</strong></p>\r\n<p>After breakfast at hotel, guide and driver will transfer to visit Phnom Kulen where the river of 1000 lingas features thousands of carvings engraved into the sandstone rocks under the water. We also visit the Rock temple which has a large reclining Buddha and take lunch at there. We leave some time free to swim or relax in this lovely waterfall until time want to go back to town. We will have buffet dinner with Apsara Dance Show. Overnight in Siem Reap.</p>\r\n<p><strong>Day 6 Siem reap &ndash; DEPARTURE:</strong></p>\r\n<p>After breakfast at hotel, free own leasuir until time to flight, driver will transfert to airport for flight of.</p>', '100$', 2),
(5, 'Sihanouk Ville 3D/2N - Souther', 'general-information-sihanoukville.jpg', '<p><strong>DAY.01 PHNOM PENH &ndash; SIHANOUK VILLE:</strong></p>\r\n<p>Breakfast at hotel, and then go to Sihanouk Ville by car/van. Sihanouk Ville the premier beach town is 230 km from Phnom Penh and the trip takes about 4 hours, but on the way we pause to pay our respects to Yeay Mao, a protective spirit who looks after travellers on the road and then we transfer to have lunch at Picnic resort. After lunch we will go to Sihanouk Ville directly. Upon arrival you will transfer to your hotel for check in. The remainder of the day is free to spend at your leisure. Dinner is not provided. Overnight at Sihanouk Ville.</p>\r\n<p><strong>DAY.02 SIHANOUK VILLE &ndash; KOH RONG:</strong></p>\r\n<p>After breakfast at hotel, transfer to the port to go to Koh Rong by speed boat. Koh Rong is situated about 22 kilometres west of Sihanouk Ville in the Gulf of Thailand and the trip normally takes 45 minutes by speed boat, depending on the weather and sea conditions. Upon arrival you will be transferred to your Bungalow for check in. The remainder of the day is free to spend at your leisure with good white sandy beaches and pristine views. Dinner at local restaurant. Overnight at Koh Rong.</p>\r\n<p><strong>DAY.03 SIHANOUK VILLE- PHNOM PENH:</strong></p>\r\n<p>After breakfast, you will have free time to relax on the white sandy beach until around 11:00AM when you will be transferred to speed boat to go to Sihanouk Ville. And upon arrival in Sihanouk Ville you will board your transportation to travel overland through to Phnom Penh for drop off.</p>', '100$', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(255) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `id_des` int(255) NOT NULL,
  `id_cat` int(255) NOT NULL,
  `gal_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `picture`, `id_des`, `id_cat`, `gal_name`) VALUES
(1, 'phnom-penh.jpg.jpg', 1, 1, 'Phnum Penh Ind'),
(2, 'royal palace.jpg', 1, 1, 'Royal Palace'),
(3, 'Sihanoukville-Cambodia-12.jpg', 5, 3, 'Shihaknuville1'),
(4, '9838_728.jpg', 3, 2, 'sun rise'),
(5, 'Angkor-Wat-Temple-2.jpg', 3, 2, 'ankorwat'),
(6, 'Tonle sap.jpg', 2, 2, 'Tonle Sap River'),
(7, 'honeymoon.jpg', 5, 3, 'Koh Rong');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_id` int(100) NOT NULL,
  `serv_type` varchar(50) NOT NULL,
  `serv_desc` text NOT NULL,
  `serv_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `serv_type`, `serv_desc`, `serv_pic`) VALUES
(1, 'Family trip', 'Just because you''ve settled down and had kids doesn''t mean your adventuring days are through. Family trips open up the world of adventure travel to kids age six and up by letting them experience their planet on their own terms. Everything is new and exciting when you''re a kid. Travel with yours and discover your world for the first time all over again.', 'family.jpg'),
(2, 'Group tour', 'Although many of our readers will organise for groups of 40, 50 or several hundred people, if you organise trips, holidays or vacations for 10 or more people, then you are a group travel organiser.', 'group.jpg'),
(3, 'Honeymoon tour', 'You''re newlyweds? And now you''re finding for place to spend your honeymoon? That''s great! Welcome to our travel company. We''ll find a really best places for you to celebrate your marriage in intimacy and seclusion in destinations considered exotic or romantic.', 'honeymoon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE `tour_type` (
  `tour_type_id` int(255) NOT NULL,
  `tour_code` varchar(50) NOT NULL,
  `id_des` int(255) NOT NULL,
  `people_amount` int(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_type`
--

INSERT INTO `tour_type` (`tour_type_id`, `tour_code`, `id_des`, `people_amount`, `status`) VALUES
(1, '000', 3, 0, 'pending'),
(2, 'SR01', 3, 0, 'pending'),
(3, 'SH01', 5, 1, 'pending'),
(5, 'PP01', 1, 1, 'pending'),
(6, 'SR02', 2, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `user_dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `full_name`, `sex`, `user_dob`, `email`, `phone_number`, `address`) VALUES
(1, 'thea', '123456', 'Nuon Sothea', 'F', '1993-11-30', 'bellelg@hotmail.com', '0987738749', 'Kandal province, Cambodia'),
(2, 'mey', '123456', 'Chea Sivmey', 'F', '1993-02-02', 'meymey@gmail.com', '017875540', 'Kompong Cham, Cambodia'),
(3, 'thea578', '123456', 'Nuon Sothea', 'F', '1994-01-30', 'thea578@gmail.com', '0987738749', 'Cambodia'),
(4, 'theng', '123456', 'Nuon Buntheng', 'M', '1996-03-22', 'theng@gmail.com', '017875540', 'Cambodia'),
(6, 'vana', '12345', 'Nguyen Van A', 'M', '1992-03-04', 'vana@gmail.com', '098754334', 'Vietnam'),
(7, 'symon123', '123456', 'Pum Symon', 'M', '1988-08-02', 'symonpum@gmail.com', '0987738749', 'Siem Riep, Cambodia'),
(8, 'vanb', '123456', 'Nguyá»…n VÄƒn B', 'M', '1995-05-22', 'vanb@gmail.com', '0987654', 'Hanoi, Vietnam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booktour`
--
ALTER TABLE `booktour`
  ADD PRIMARY KEY (`id_bookTour`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`tour_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booktour`
--
ALTER TABLE `booktour`
  MODIFY `id_bookTour` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `des_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serv_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `tour_type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
