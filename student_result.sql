-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 10:26 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student result`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `Eno` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Father Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Semester` tinyint(4) NOT NULL,
  `Studmail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`Eno`, `Name`, `Father Name`, `DOB`, `Semester`, `Studmail`) VALUES
('0901MA001', 'Adam Smiths*', 'John Smith', '2000-09-18', 1, 'Adam_smith@gmail.com'),
('0901MA002', 'Richard Jones', 'Michael Jones', '2000-03-07', 1, 'rich@gmail.com'),
('0901MA003', 'Peter Weyl', 'Hermann Weyll', '1999-12-04', 1, 'peterweyl@yahoo.com'),
('0901MA004', 'Sean Caroll', 'Smith Caroll', '2000-04-18', 1, 'seansosmith@yahoo.com'),
('0901MA005', 'Mike Tyson', 'Will Tyson', '2000-09-07', 1, 'fevhi@rediff.com'),
('0901MA006', 'Isaac Stroock', 'Michael Stroock', '1998-07-22', 1, 'i_123@rediffmail.com'),
('0901MA007', 'Geoff Sebastian', 'Martin Sebastian', '2001-05-18', 2, 'geoff@gmail.com'),
('0901MA009', 'Klaus Roth', 'Bill Roth', '2001-11-08', 1, 'klaus@gmail.com'),
('0901MA010', 'Michael Levitt', 'Joseph Levitt', '2002-05-14', 6, 'mike@gmail.com'),
('0901MA011', 'Bill Clinton Jr.', 'Bill Clintion Sr.', '1988-11-27', 2, 'bill@gmal.com');

-- --------------------------------------------------------

--
-- Table structure for table `stud_result`
--

CREATE TABLE `stud_result` (
  `Eno` varchar(10) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `ObtMarks` smallint(6) NOT NULL,
  `MaxMarks` smallint(6) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_result`
--

INSERT INTO `stud_result` (`Eno`, `Course`, `ObtMarks`, `MaxMarks`, `Semester`, `Date_Time`) VALUES
('0901MA001', 'BTech-Civil Engineering', 85, 100, 2, '2023-06-01 09:22:19'),
('0901MA002', 'BTech-Computer Science', 97, 100, 3, '2023-06-01 08:50:24'),
('0901MA003', 'BTech-Information Technology', 99, 100, 1, '2023-06-01 09:22:38'),
('0901MA004', 'BTech-Electrical Engineering', 95, 100, 1, '2023-06-20 13:50:35'),
('0901MA005', 'B. Architecture', 77, 100, 1, '2023-06-20 13:51:39'),
('0901MA006', 'B.Tech Electronics Engineering', 83, 100, 1, '2023-06-20 13:52:28'),
('0901MA007', 'B.Tech Civil Engineering', 88, 100, 3, '2023-06-20 13:54:03'),
('0901MA008', 'B.Tech Automobile Engineering', 79, 100, 1, '2023-06-20 13:54:50'),
('0901MA009', 'B. Architecture', 75, 100, 1, '2023-06-20 13:58:30'),
('0901MA010', 'B.Tech Computer and Design', 77, 100, 1, '2023-06-20 13:59:12'),
('0901MA011', 'B. Architecture', 150, 200, 1, '2023-06-20 15:42:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`Eno`),
  ADD KEY `Stud_Name` (`Name`),
  ADD KEY `Enrollment_No` (`Eno`);

--
-- Indexes for table `stud_result`
--
ALTER TABLE `stud_result`
  ADD PRIMARY KEY (`Eno`),
  ADD KEY `Enrollment_No` (`Eno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
