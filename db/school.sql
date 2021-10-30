-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 01:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'ativor nelson', 'ativor1999');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(50) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `sid`, `sname`, `fname`, `mname`, `date`, `gender`, `number`, `email`, `address`, `class`, `section`, `image`) VALUES
(1, 'ss102', 'ativor nelson', 'ativor godson', 'happy goni', '14/Aug/2020', 'Female', '0242071008', 'ativornelson2@gmail.com', 'DABALA,P.O.BOX3', 'jh2', 'II', 'blog-three.jpg'),
(2, 'ss234', 'agbo sandra', 'Rashford Agbo', 'agbeli selinam', '14/Aug/2020', 'Male', '89000243467', 'ISHMAELAFENYO@gmail.com', 'nungua,estate', 'JH2', 'II', 'man-three.jpg'),
(3, 'ss123', 'jean pierre doe', 'selase doe', 'ivy sgbenyegah', '14/Aug/2020', 'Female', '10000753647', 'ISHMAELAFENYO@gmail.com', 'nungua,brigade 12 street', 'jh3', 'III', 'blog-two.jpg'),
(4, 'ss108', 'lissa anne', 'lissa frank', 'anabel brown', '15/Aug/2020', 'Female', '0246722860', 'lissa@gmail.com', 'East legon,Mills street', 'JH2', 'III', 'man-three.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class-name` varchar(150) NOT NULL,
  `class-section` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `class-name`, `class-section`) VALUES
(1, 'nelson ativor', '5', 'A'),
(2, 'kwame tsikata', 'JHS2', 'B'),
(3, 'kwame dame', '2', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `examtb`
--

CREATE TABLE `examtb` (
  `id` int(50) NOT NULL,
  `examname` varchar(150) NOT NULL,
  `session` varchar(150) NOT NULL,
  `class` varchar(150) NOT NULL,
  `date` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `term` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examtb`
--

INSERT INTO `examtb` (`id`, `examname`, `session`, `class`, `date`, `subject`, `term`) VALUES
(1, 'MID-SEMESTER', 'Afternoon', 'JHS3', '8/august/2020', 'chemistry', 'I'),
(2, 'MID-SEMESTER', 'Morning', 'JHS3', '8/august/2020', 'physics', 'I'),
(3, 'MID-SEMESTER', 'Morning', 'JHS3', '11/Aug/2020', 'English language', 'I'),
(4, 'MID-SEMESTER', 'Afternoon', 'JHS3', '13/Aug/2020', 'Elective-Maths', 'I'),
(5, 'MID-SEMESTER', 'Evening', 'JHS3', '13/Aug/2020', 'maths', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(50) NOT NULL,
  `item` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `amount` varchar(150) NOT NULL,
  `purchasedb` varchar(100) NOT NULL,
  `purchasedf` varchar(100) NOT NULL,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `item`, `quantity`, `amount`, `purchasedb`, `purchasedf`, `date`) VALUES
(1, 'chalk', '200', '200gh', 'kwame bediako', 'happy books', '11/08/2020'),
(2, 'uniform', '3500', '10,0000gh', 'Erica amoabeng', 'sam.k furniture', '07/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ssnit` varchar(150) NOT NULL,
  `number` varchar(150) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `position` varchar(150) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `name`, `ssnit`, `number`, `bank`, `salary`, `position`, `date`) VALUES
(1, 'klinogo gladys jnr', '2300674', '10000753647', 'zenith bank', '3500gh', 'Teacher', '11/Aug/2020'),
(4, 'Adukpo Philimon', '576874', '0986785452567', 'Access bank', '2000gh', 'Teacher', '11/Aug/2020'),
(5, 'Justice Agbodzan', '4563383', '89000243467', 'Access bank', '5000gh', 'Teacher', '11/Aug/2020'),
(6, 'kwame dame', '4563383', '89000243467', 'Cal Bank', '7500gh', 'Administrator', '11/Aug/2020');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phonenumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `qualification`, `salary`, `address`, `phonenumber`) VALUES
(2, 'kevin durant', 'ISHMAELAFENYO@gmail.com', '1234567', 'MBA', '5000gh', 'TESHIE', 248011187),
(3, 'KLINOGO GLADYS', 'GLADYS4@gmail.com', 'qwreva1234', 'PHD', '10000gh', 'NUNGUA,BRIGADE', 547683979);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(50) NOT NULL,
  `subject-name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject-name`) VALUES
(1, 'maths'),
(2, 'chemistry'),
(3, 'physics'),
(5, 'English language'),
(6, 'Elective-Maths');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(50) NOT NULL,
  `classname` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `teacher` varchar(150) NOT NULL,
  `time` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `classname`, `subject`, `teacher`, `time`, `day`) VALUES
(1, 'JHS2', 'chemistry', 'KLINOGO GLADYS', '8:00Am-10:00Am', 'Monday'),
(2, 'JHS2', 'English language', 'kevin durant', '10:00Am-12:00Pm', 'Monday'),
(3, 'JHS2', 'physics', 'kevin durant', '1:00Pm-3:00Pm', 'Monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examtb`
--
ALTER TABLE `examtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examtb`
--
ALTER TABLE `examtb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
