-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 11:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jk_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

create database jk_database;
	use jk_database;

CREATE TABLE `approval` (
  `app_id` int(10) NOT NULL,
  `e_no` int(10) NOT NULL,
  `job_id` int(10) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `company` varchar(20) DEFAULT NULL,
  `tp` int(10) DEFAULT NULL,
  `distance` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `company`, `tp`, `distance`, `email`, `address`) VALUES
(1, 'MAS Unichela', 65476465, 45, 'mas@mas.mas', 'panadura'),
(2, 'Alfa', 12356634, 35, 'alfa@alfa.alfa', 'Polgahawela'),
(3, 'Hela', 5243556, 48, 'hela@hela.hela', 'Piliyandala'),
(4, 'Paradise', 76345643, 20, 'para@para.para', 'watthala'),
(5, 'Hidramani', 87642387, 98, 'hi@hi.hi', 'vavniya'),
(6, 'Sleek Line', 643543, 18, 'sleek@sleek.sleek', 'nittabuwa'),
(7, 'Slimline', 7455465, 36, 'slim@slim.slim', 'Giriulla'),
(8, 'Omega Line', 653423654, 68, 'omega@omega.omega', 'Sandalankawa');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_no` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `tp` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_no`, `name`, `address`, `nic`, `tp`, `email`) VALUES
(1, 'malin', 'kandy', '162531653', 2147483647, 'm@m.m');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(10) NOT NULL,
  `inq_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `serial_no` varchar(20) DEFAULT NULL,
  `machine` varchar(10) DEFAULT NULL,
  `req` varchar(20) NOT NULL DEFAULT 'service',
  `remark` varchar(300) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `c_id` int(10) DEFAULT NULL,
  `status` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `inq_date`, `serial_no`, `machine`, `req`, `remark`, `company`, `c_id`, `status`) VALUES
(1, '2017-09-18 00:00:00', '6832376', 'OverLock', 'service', 'Machine not power up', 'MAS', 1, 0),
(3, '0000-00-00 00:00:00', '807fg008o', 'ddl2800', 'service', 'Machine Not Working', 'MAS Unichela', 1, 0),
(4, '0000-00-00 00:00:00', '435266y65', 'ams240', 'service', 'Seminar', 'MAS Unichela', 1, 0),
(5, '2017-09-25 15:37:31', '3000', 'jd600', 'service', 'Monthly Service', 'MAS Unichela', 1, 0),
(6, '2017-09-25 16:08:15', '436yt654', 'lk1900', 'service', 'Error 360 ', 'MAS Unichela', 1, 0),
(7, '2017-09-25 16:10:01', '', 'ddl2800', 'service', 'Assembly', 'MAS Unichela', 1, 0),
(8, '2017-09-25 16:48:24', '657u876l', 'ddl2800', 'service', 'Monthly servicing', 'MAS Unichela', 1, 0),
(9, '2017-09-26 14:02:21', '657u876l', 'ddl2800', 'service', 'Monthly servicing', 'MAS Unichela', 1, 0),
(10, '2017-09-26 14:25:19', '657u876l', 'ddl2800', 'service', 'Monthly servicing', 'MAS Unichela', 1, 0),
(11, '2017-09-27 10:56:43', '3006', 'jd600', 'service', 'Monthly Service', 'Omega Line', 8, 0),
(12, '2017-10-02 12:34:32', '547889u76', 'ddl2800', 'service', 'Needle position ', 'Omega Line', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `c_id` int(10) NOT NULL,
  `inq_id` int(10) NOT NULL,
  `j_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `apprved_by` varchar(20) DEFAULT NULL,
  `e_no` int(10) DEFAULT NULL,
  `tech1` int(10) DEFAULT NULL,
  `tech2` int(10) DEFAULT NULL,
  `tech3` int(10) DEFAULT NULL,
  `tech4` int(10) DEFAULT NULL,
  `tech5` int(10) DEFAULT NULL,
  `tech6` int(10) DEFAULT NULL,
  `tech7` int(10) DEFAULT NULL,
  `tech8` int(10) DEFAULT NULL,
  `tech9` int(10) DEFAULT NULL,
  `tech10` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `status`, `c_id`, `inq_id`, `j_date`, `apprved_by`, `e_no`, `tech1`, `tech2`, `tech3`, `tech4`, `tech5`, `tech6`, `tech7`, `tech8`, `tech9`, `tech10`) VALUES
(4, 'pending', 1, 1, '2017-09-18 11:21:54', 'k@k.k', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(10) NOT NULL,
  `log_date` date DEFAULT NULL,
  `log_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(10) NOT NULL,
  `e_no` int(10) NOT NULL,
  `n_date` date DEFAULT NULL,
  `n_time` time DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `t_id` int(10) NOT NULL,
  `e_no` int(10) NOT NULL,
  `clz` varchar(10) DEFAULT NULL,
  `class` char(1) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `t_id` int(10) NOT NULL,
  `t_e_no` int(10) NOT NULL,
  `t_job_id` int(10) NOT NULL,
  `c_vehicle` char(1) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `uname`, `password`, `user_type_id`) VALUES
(1, 'm@m.m', 'caf1a3dfb505ffed0d024130f58c5cfa', 2),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(3, 'k@k.k', '202cb962ac59075b964b07152d234b70', 1),
(4, 'c@c.c', '202cb962ac59075b964b07152d234b70', 3),
(5, 'mas@mas.mas', '202cb962ac59075b964b07152d234b70', 3),
(6, 'alfa@alfa.alfa', '202cb962ac59075b964b07152d234b70', 3),
(7, 'hela@hela.hela', '202cb962ac59075b964b07152d234b70', 3),
(8, 'para@para.para', '202cb962ac59075b964b07152d234b70', 3),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(11, '', 'd41d8cd98f00b204e9800998ecf8427e', 3),
(12, 'omega@omega.omega', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(10) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `priviledges` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `e_no` (`e_no`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_no`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `e_no` (`e_no`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `inq_id` (`inq_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `e_no` (`e_no`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `e_no` (`e_no`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `t_e_no` (`t_e_no`),
  ADD KEY `t_job_id` (`t_job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `approval_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `employee` (`e_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `approval_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON UPDATE CASCADE;

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `employee` (`e_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_ibfk_3` FOREIGN KEY (`inq_id`) REFERENCES `inquiry` (`inq_id`) ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `employee` (`e_no`) ON UPDATE CASCADE;

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_ibfk_1` FOREIGN KEY (`e_no`) REFERENCES `employee` (`e_no`) ON UPDATE CASCADE;

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`t_e_no`) REFERENCES `employee` (`e_no`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_ibfk_2` FOREIGN KEY (`t_job_id`) REFERENCES `job` (`job_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
