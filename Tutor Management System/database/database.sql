-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 02:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminindex`
--

CREATE TABLE `adminindex` (
  `tlist` varchar(100) NOT NULL,
  `slist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pass`, `type`, `status`) VALUES
('a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', 'active'),
('admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active'),
('ah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tutor', 'active'),
('farukabdullah@gmail.com', '040b7cf4a55014e185813e0644502ea9', 'Tutor', 'active'),
('farukabdullahh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `sms` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sender`, `receiver`, `sms`) VALUES
('a@gmail.com', 'ah@gmail.com', 'i want to hire u'),
('ah@gmail.com', 'farukabdullahh@gmail.com', 'good boy'),
('farukabdullahh@gmail.com', 'farukabdullah@gmail.com', 'hi, are u free?'),
('farukabdullahh@gmail.com', 'farukabdullah@gmail.com', 'hello'),
('farukabdullah@gmail.com', 'farukabdullahh@gmail.com', 'yess');

-- --------------------------------------------------------

--
-- Table structure for table `stueducationinfo`
--

CREATE TABLE `stueducationinfo` (
  `email` varchar(100) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stueducationinfo`
--

INSERT INTO `stueducationinfo` (`email`, `insname`, `class`, `medium`) VALUES
('a@gmail.com', 'Ebenzer International School', 'Six', 'English Medium'),
('farukabdullahh@gmail.com', 'HURDCO International School', 'Ten', 'English Medium');

-- --------------------------------------------------------

--
-- Table structure for table `stupersonalinfo`
--

CREATE TABLE `stupersonalinfo` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stupersonalinfo`
--

INSERT INTO `stupersonalinfo` (`email`, `name`, `dob`, `address`, `phoneno`, `gender`) VALUES
('a@gmail.com', 'Abdullah Al Sohan', '2019-06-11', 'Basundhara', '01777654379', 'Male'),
('farukabdullahh@gmail.com', 'Faruk', '2014-09-15', 'Baridhara', '01777699321', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbsc`
--

CREATE TABLE `tbsc` (
  `email` varchar(100) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `result` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsc`
--

INSERT INTO `tbsc` (`email`, `insname`, `passingyear`, `dept`, `result`) VALUES
('ah@gmail.com', 'American International University-Bangladesh(AIUB)', '2019', 'CSE', '4.0'),
('farukabdullah@gmail.com', 'BRAC University', '2014', 'CSE', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `thsc`
--

CREATE TABLE `thsc` (
  `email` varchar(100) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `board` varchar(100) NOT NULL,
  `fourthsub` varchar(11) NOT NULL,
  `result` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thsc`
--

INSERT INTO `thsc` (`email`, `insname`, `passingyear`, `board`, `fourthsub`, `result`) VALUES
('ah@gmail.com', 'Rajuk Uttara Model College', '2016', 'Dhaka', 'Biology', '5.00'),
('farukabdullah@gmail.com', 'Notredam College', '2016', 'Comilla', 'Biology', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `tmsc`
--

CREATE TABLE `tmsc` (
  `email` varchar(100) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `result` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmsc`
--

INSERT INTO `tmsc` (`email`, `insname`, `passingyear`, `dept`, `subject`, `result`) VALUES
('ah@gmail.com', 'American International University-Bangladesh(AIUB)', '2020', 'CSE', 'IT', '4.00'),
('farukabdullah@gmail.com', 'Dhaka University', '2019', 'CSE', 'ICT', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `tssc`
--

CREATE TABLE `tssc` (
  `email` varchar(100) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `board` varchar(100) NOT NULL,
  `result` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tssc`
--

INSERT INTO `tssc` (`email`, `insname`, `passingyear`, `board`, `result`) VALUES
('ah@gmail.com', 'Ahammad Uddin Shah Shishu Niketan School', '2014', 'Dinajpur', '5.00'),
('farukabdullah@gmail.com', 'Ahammad Uddin Shah Shishu Niketan School', '2019', 'Chittagong', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `tutorotherinfo`
--

CREATE TABLE `tutorotherinfo` (
  `email` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `salary` varchar(40) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorotherinfo`
--

INSERT INTO `tutorotherinfo` (`email`, `medium`, `subject`, `salary`, `status`) VALUES
('ah@gmail.com', 'Bangla Medium', 'Higher Math', '3000-5000', 'Available'),
('farukabdullah@gmail.com', 'English Medium', 'General Math', '3000-5000', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tutorpersonalinfo`
--

CREATE TABLE `tutorpersonalinfo` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorpersonalinfo`
--

INSERT INTO `tutorpersonalinfo` (`email`, `name`, `dob`, `phoneno`, `location`, `gender`) VALUES
('ah@gmail.com', 'Faruk Abdullah', '2019-12-10', '01777654379', 'Basundhara', 'Male'),
('farukabdullah@gmail.com', 'Faruk ', '2019-12-09', '01777654379', 'Baridhara', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `stueducationinfo`
--
ALTER TABLE `stueducationinfo`
  ADD KEY `semail_fk` (`email`);

--
-- Indexes for table `stupersonalinfo`
--
ALTER TABLE `stupersonalinfo`
  ADD KEY `semail_fk` (`email`);

--
-- Indexes for table `tbsc`
--
ALTER TABLE `tbsc`
  ADD KEY `temail_fk` (`email`);

--
-- Indexes for table `thsc`
--
ALTER TABLE `thsc`
  ADD KEY `temail_fk` (`email`);

--
-- Indexes for table `tmsc`
--
ALTER TABLE `tmsc`
  ADD KEY `temail_fk` (`email`);

--
-- Indexes for table `tssc`
--
ALTER TABLE `tssc`
  ADD KEY `temail_fk` (`email`);

--
-- Indexes for table `tutorotherinfo`
--
ALTER TABLE `tutorotherinfo`
  ADD KEY `temail_fk` (`email`);

--
-- Indexes for table `tutorpersonalinfo`
--
ALTER TABLE `tutorpersonalinfo`
  ADD KEY `temail_fk` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stueducationinfo`
--
ALTER TABLE `stueducationinfo`
  ADD CONSTRAINT `stueducationinfo_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `stupersonalinfo`
--
ALTER TABLE `stupersonalinfo`
  ADD CONSTRAINT `stupersonalinfo_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tbsc`
--
ALTER TABLE `tbsc`
  ADD CONSTRAINT `tbsc_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `thsc`
--
ALTER TABLE `thsc`
  ADD CONSTRAINT `thsc_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tmsc`
--
ALTER TABLE `tmsc`
  ADD CONSTRAINT `tmsc_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tssc`
--
ALTER TABLE `tssc`
  ADD CONSTRAINT `tssc_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tutorotherinfo`
--
ALTER TABLE `tutorotherinfo`
  ADD CONSTRAINT `tutorotherinfo_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `tutorpersonalinfo`
--
ALTER TABLE `tutorpersonalinfo`
  ADD CONSTRAINT `tutorpersonalinfo_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

