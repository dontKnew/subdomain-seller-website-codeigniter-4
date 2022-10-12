-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2022 at 11:33 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortss`
--

-- --------------------------------------------------------

--
-- Table structure for table `acomodation`
--

CREATE TABLE `acomodation` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acomodation`
--

INSERT INTO `acomodation` (`id`, `image`, `name`, `status`, `date`, `domain`, `description`) VALUES
(1, '1618129594giftpng.png', 'dsgsg435t43', 'Active', '2021-04-11 08:26:34', 'test.impdate.com', 'asfsafa'),
(2, '1619622029nainiretreatnainital-superiorroomjpg.jpg', 'Superior Rooms', 'Active', '2021-04-28 15:00:29', 'nainitalretreat.impdate.com', 'First or base class rooms are better known as rooms, rooms provide a contemporary look and feel. The well-appointed rooms are a spontaneous symphony inside and outside the Nani Retreat. All the rooms have a balcony and it offers spectacular views to the secluded gardens.'),
(3, '1619622835nainiretreatnainital-gardenroomjpg.jpg', 'Garden Rooms', 'Active', '2021-04-28 15:13:55', 'nainitalretreat.impdate.com', 'This category of rooms provides access to the garden at the resort, where one can soak in the afternoon sun or enjoy a live band in the evening. The open spaces around the suites add to the rustic appeal, as well as giving you the option to enjoy the outdoors - the perfect way to relax after a long trip. Ask for a romantic candlelight dinner at the garden and our butlers will enjoy the show for you.'),
(4, '16494166791jpg.jpg', 'Description of Room', 'Active', '2022-04-08 11:17:59', 'servicearpartment.impdate.com', 'Built in 420 sq ft, our rooms are well positioned to ensure that you enjoy maximum comfort. The view of unmatched luxury and stunning open spaces gives our rooms a feast for the senses. The well-appointed rooms are a spontaneous symphony inside and outside the house. All the rooms have a balcony and it offers spectacular views to the secluded gardens. The rooms are divided into 3 floors and have superior security features.');

-- --------------------------------------------------------

--
-- Table structure for table `acomodationtype`
--

CREATE TABLE `acomodationtype` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `url` text NOT NULL,
  `acomodation` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `offerprice` varchar(10) NOT NULL,
  `short` text NOT NULL,
  `description` longtext NOT NULL,
  `overview` longtext NOT NULL,
  `image` text NOT NULL,
  `sliderimage` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acomodationtype`
--

INSERT INTO `acomodationtype` (`id`, `domain`, `url`, `acomodation`, `name`, `price`, `offerprice`, `short`, `description`, `overview`, `image`, `sliderimage`, `status`, `date`) VALUES
(1, 'test.impdate.com', '', 1, 'asfsaf', '555534', '543', 'dsvdsv', '<p>dsfsdfds</p>', '<p>dsfdsfsd</p>', '1618136697giftpng.png', '[\"1618136697giftpng.png\"]', 'Active', '2021-04-11 10:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenties` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenties` (`id`, `image`, `name`, `status`, `date`, `domain`) VALUES
(1, '1618125153giftpng.png', 'test', 'Active', '2021-04-11 07:12:33', 'test.impdate.com'),
(2, '', 'dgtdfg', 'Active', '2021-04-17 03:01:32', 'test.impdate.com'),
(3, '', 'cxvbcxbcxbcx', 'Active', '2021-04-17 03:01:59', 'test.impdate.com'),
(4, '164941679511jpg.jpg', 'Badminton Court', 'Active', '2022-04-08 11:19:11', 'servicearpartment.impdate.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `iconimage` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `url`, `iconimage`, `status`, `date`) VALUES
(1, 'test2', 'test2', '', 'Active', '2021-02-22 05:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `domain` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `whatsapp` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `favicon` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `maps` longtext NOT NULL,
  `video_id` text NOT NULL,
  `desc1` longtext NOT NULL,
  `desc2` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `domain`, `email`, `mobile`, `whatsapp`, `address`, `image`, `favicon`, `status`, `date`, `maps`, `video_id`, `desc1`, `desc2`) VALUES
(1, 'test', 'test.impdate.com', 'helloskmk@gmail.com', '8418813550', '8418813550', 'test', '1619850955giftpng.png', '1619850955giftpng.png', 'Active', '2021-04-11 06:39:41', 'sddfsd', '', '', ''),
(3, 'Corbett The Grand Resort', 'corbettgrand.impdate.com', 'bookings@crsmails.com', '9999105555', '9999105555', 'Corbett The Grand Resort, Vill. Santoshpur Choi, Near Hanuman Dham, Ramnagar – 244715, Uttarakhand, India', '1639490016ResortGroupLogopng.png', '1639490016ResortGroupLogopng.png', 'Active', '2021-12-14 13:53:36', 'https://www.google.com/maps/dir//corbett+the+grand+resort/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x390a6cc76e0718f7:0xc7e15c013bd3ea2?sa=X&ved=2ahUKEwiklPmPzeP0AhWVgtgFHQWCCkkQ9Rd6BAgWEAQ', 'rIO5hMLV5kk', '<div class=\"row nwelcomestyle\" style=\"margin-bottom: 40px; color: rgb(170, 170, 170); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.2px;\"=\"\"><div class=\"col-lg-6 col-md-6 this-texts\" style=\"width: 600px;\"><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\"><span style=\"letter-spacing: 0.3px;\">Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.</span><br></p></div></div>', '<p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; padding-bottom: 20px;\">We welcome you to this abode of peace and assure you of not having the same experience as before!</p>'),
(4, 'service Arpartment', 'servicearpartment.impdate.com', 'admin@impdate.com', '8888888888', '8888888888', 'xyz', '1649415685E-Service-Apartments-logopng.png', '1649415685E-Service-Apartments-logopng.png', 'Active', '2022-04-08 11:01:25', 'https://www.google.com/maps/@28.5016781,76.9867377,11z', '222', '<div class=\"row nwelcomestyle\" style=\"margin-bottom: 40px; color: rgb(170, 170, 170); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.2px;\"><div class=\"col-lg-6 col-md-6 this-texts\" style=\"width: 600px;\"><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p></div></div><div class=\"row nwelcomestyle\" style=\"margin-bottom: 40px; color: rgb(170, 170, 170); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.2px;\"><div class=\"col-lg-12 col-md-12 this-texts\" style=\"width: 1200px;\"><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\">This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px;\"><br></p></div></div>', '<p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">We welcome you to this abode of peace and assure you of not having the same experience as before!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `domain`, `name`, `image`, `status`, `date`) VALUES
(2, 'test.impdate.com', 'test2', '1618127558giftpng.png', 'Active', '2021-04-11 07:52:38'),
(3, 'servicearpartment.impdate.com', 'Front View', '164941706513jpg.jpg', 'Active', '2022-04-08 11:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `inclusion` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image`, `name`, `inclusion`, `status`, `date`, `domain`) VALUES
(1, '1618126536giftpng.png', 'gdfgdf', 'Test1##test2##test3', 'Active', '2021-04-11 07:34:57', 'corbettgrand.impdate.com'),
(2, '164941694812jpg.jpg', 'New Year Package', '#Inclusion \r\n#Stay At Deluxe Rooms/Cottages\r\n#Adventure Trekking\r\n#Soft Adventure Activities\r\n#One Jeep Safari\r\n#Bonfire', 'Active', '2022-04-08 11:22:28', 'servicearpartment.impdate.com');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `image` text NOT NULL,
  `category` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `short` text NOT NULL,
  `specification` longtext NOT NULL,
  `information` longtext NOT NULL,
  `sliderimage` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `url`, `image`, `category`, `description`, `short`, `specification`, `information`, `sliderimage`, `status`, `date`) VALUES
(1, 'sdfsdagdsd', 'sdfsdagdsd', '1613973986product4jpg.jpg', 1, '<p>dsgdsgds</p>', 'gsdgds', '<p>gdsgsd</p>', '<p>wetewtr</p>', '[\"1613973986product2jpg.jpg\"]', 'Active', '2021-02-22 05:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `about`, `image`, `date`) VALUES
(1, '<p>wetewt457647dfghdf</p>', '1611985790giftpng.png', '2021-02-15 13:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `position` int(11) NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `type2` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `domain`, `position`, `image`, `type`, `type2`, `status`, `date`) VALUES
(2, 'test.impdate.com', 0, '1618125455giftpng.png', 'dsgsdgds', 'sfgsdgdsg', 'Active', '2021-04-11 07:17:35'),
(3, 'nainitalretreat.impdate.com', 0, '1619621512nainiretreatnainital2jpg.jpg', 'The Naini Retreat Nainital', 'Luxury Resort in Nainital', 'Active', '2021-04-28 14:51:52'),
(4, 'corbettgrand.impdate.com', 0, '1639490816Corbett-the-Grand-10jpg.jpg', 'Corbett The Grand Resort', 'Largest Resort in Jim Corbett', 'Active', '2021-12-14 14:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `testinomial`
--

CREATE TABLE `testinomial` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testinomial`
--

INSERT INTO `testinomial` (`id`, `domain`, `name`, `image`, `description`, `status`, `date`) VALUES
(2, 'test.domain.com', 'dgvfd', '1618128201giftpng.png', 'gfdgfd', 'Active', '2021-04-11 08:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `address`, `status`, `created`, `updated`) VALUES
(1, 'admin', 'admin@resort.in', '279c0f4a300778b2cdff890ecc1e8113', '1234567890', 1, 'Delhi', 1, '2018-04-24 11:31:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `weddingevent`
--

CREATE TABLE `weddingevent` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingevent`
--

INSERT INTO `weddingevent` (`id`, `image`, `name`, `status`, `date`, `domain`) VALUES
(1, '1618127224giftpng.png', 'test3', 'Active', '2021-04-11 07:47:04', 'test.impdate.com'),
(2, '16494170237jpg.jpg', 'Haldi & Menhdi', 'Active', '2022-04-08 11:23:43', 'servicearpartment.impdate.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acomodation`
--
ALTER TABLE `acomodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acomodationtype`
--
ALTER TABLE `acomodationtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial`
--
ALTER TABLE `testinomial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingevent`
--
ALTER TABLE `weddingevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acomodation`
--
ALTER TABLE `acomodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acomodationtype`
--
ALTER TABLE `acomodationtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testinomial`
--
ALTER TABLE `testinomial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weddingevent`
--
ALTER TABLE `weddingevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
