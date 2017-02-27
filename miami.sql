-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 01:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miami`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_date` date DEFAULT NULL,
  `no_of_days` int(2) DEFAULT NULL,
  `is_verified` bit(1) DEFAULT b'0',
  `r_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b6140d614bbfdbe9dc3225247a9ce4e7', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', 1480831160, 'a:5:{s:2:"id";s:2:"20";s:8:"username";s:7:"Nimasha";s:5:"email";s:28:"nimasha.jayathunga@gmail.com";s:14:"is_admin_login";b:1;s:9:"user_type";s:2:"SA";}'),
('4d990fb9e1d4f500bfb900679d409e1f', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', 1480899296, 'a:6:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:8:"username";s:4:"sdsd";s:5:"email";s:28:"nimasha.jayathunga@gmail.com";s:14:"is_admin_login";b:1;s:9:"user_type";N;}');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `e_date` datetime DEFAULT NULL,
  `q_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `f_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `message`, `f_date`) VALUES
(1, 'Bhagya', 'bngunawardana@gmail.com', 'Great!', '2015-11-26 18:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `no_of_courses` int(2) DEFAULT NULL,
  `price_per_plate` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_quotation`
--

CREATE TABLE `menu_quotation` (
  `m_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `r_id` int(11) NOT NULL,
  `r_no` int(11) NOT NULL,
  `type` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `size` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `q_id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `head_count` int(5) DEFAULT NULL,
  `amount` int(5) DEFAULT NULL,
  `duration` int(2) DEFAULT NULL,
  `rh_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reception_hall`
--

CREATE TABLE `reception_hall` (
  `rh_id` int(11) NOT NULL,
  `rh_name` varchar(45) DEFAULT NULL,
  `max_capacity` int(5) DEFAULT NULL,
  `price_per_hour` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception_hall`
--

INSERT INTO `reception_hall` (`rh_id`, `rh_name`, `max_capacity`, `price_per_hour`) VALUES
(5, 'Diamond', 70, 2000),
(6, 'Ivy', 250, 1500),
(7, 'Nightshade', 120, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `block` tinyint(4) NOT NULL DEFAULT '0',
  `user_type` enum('SA','A') DEFAULT 'SA' COMMENT 'SA: Super Admin,A: Admin',
  `telephone` varchar(10) NOT NULL,
  `nic` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `email`, `password`, `block`, `user_type`, `telephone`, `nic`) VALUES
(20, 'Nimasha', 'nimasha.jayathunga@gmail.com', '88a3df7d923222ed1fb2b8e38f40e375', 0, 'SA', '0715103021', '930130093v');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE `tbl_cms` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`id`, `label`, `content`) VALUES
(1, 'About Us', '<p style="padding-left: 30px; text-align: left;"><img src="/ark_admin_v2/uploads/images/Water_lilies.jpg" alt="" width="179" height="134" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br /><br />Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br /><br />Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<br /><br />Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.<br /><br />Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n<p>&nbsp;</p>'),
(2, 'What We do', '<p>This is the new text.</p>\r\n<p>&nbsp;</p>\r\n<p>ggg</p>\r\n<p>&nbsp;</p>'),
(3, 'Services', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br /><br />Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br /><br />Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.<br /><br />Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.<br /><br />Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>'),
(4, 'Contact Us', '<p>294, Street Name,</p>\r\n<p>Area- Zip Code,</p>\r\n<p>City, State, Country</p>\r\n<p>&nbsp;</p>\r\n<p>phone: 999-999-9999</p>\r\n<p>Email: abc@xyz.com</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `block` tinyint(4) NOT NULL DEFAULT '0',
  `telephone` varchar(10) NOT NULL,
  `nic` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `block`, `telephone`, `nic`) VALUES
(2, 'sdsd', 'nimasha.jayathunga@gmail.com', '8538ef7350605b271d973f4324880696', 0, '0715103021', '940130093v');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `signup_date` datetime DEFAULT NULL,
  `phone_mobile` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `address_street` varchar(150) DEFAULT NULL,
  `address_city` varchar(100) DEFAULT NULL,
  `address_state` varchar(100) DEFAULT NULL,
  `address_country` varchar(100) DEFAULT NULL,
  `address_postalcode` varchar(20) DEFAULT NULL,
  `deleted` enum('Y','N') DEFAULT 'N',
  `user_status` enum('A','B') DEFAULT 'A' COMMENT 'A: Active; B: Blocked'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_b_fk_idx` (`u_id`),
  ADD KEY `r_b_fk_idx` (`r_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `q_e_fk_idx` (`q_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `menu_quotation`
--
ALTER TABLE `menu_quotation`
  ADD PRIMARY KEY (`m_id`,`q_id`),
  ADD KEY `q_fk_idx` (`q_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `r_q_fk_idx` (`rh_id`),
  ADD KEY `u_q_fk_idx` (`u_id`);

--
-- Indexes for table `reception_hall`
--
ALTER TABLE `reception_hall`
  ADD PRIMARY KEY (`rh_id`);

--
-- Indexes for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic_UNIQUE` (`nic`);

--
-- Indexes for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic_UNIQUE` (`nic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reception_hall`
--
ALTER TABLE `reception_hall`
  MODIFY `rh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `r_b_fk` FOREIGN KEY (`r_id`) REFERENCES `product` (`r_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `u_b_fk` FOREIGN KEY (`u_id`) REFERENCES `tbl_admin_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `q_e_fk` FOREIGN KEY (`q_id`) REFERENCES `quotation` (`q_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu_quotation`
--
ALTER TABLE `menu_quotation`
  ADD CONSTRAINT `m_fk` FOREIGN KEY (`m_id`) REFERENCES `menu` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `q_fk` FOREIGN KEY (`q_id`) REFERENCES `quotation` (`q_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `r_q_fk` FOREIGN KEY (`rh_id`) REFERENCES `reception_hall` (`rh_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `u_q_fk` FOREIGN KEY (`u_id`) REFERENCES `tbl_admin_users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
