-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2022 at 06:55 AM
-- Server version: 10.5.16-MariaDB
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
-- Database: `id19919878_managmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(2, 'admin', 'admin007');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Work` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `Name`, `Subject`, `Class`, `Date`, `Work`, `Size`) VALUES
(2, 'Home Work', 'python', '11', '2022-11-08', 'Resume.pdf', '268321');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `LectureName` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Lecture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `Publisher`, `LectureName`, `Class`, `Date`, `Lecture`) VALUES
(14, 'Aditya Das', 'python', '12', '2022-12-04', 'videoplayback.mp4'),
(16, 'Anish Sen', 'DBMS', '10', '2022-12-04', 'videoplayback (2).mp4'),
(17, 'Anish Sen', 'Java', '11', '2022-12-04', 'Functions in Java _ Practice Questions _ Complete Placement Course _ Lecture 8.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  `Notice` varchar(100) NOT NULL,
  `Size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `Name`, `Date`, `Notice`, `Size`) VALUES
(21, 'notice2', '2022-11-04 19:12:00', 'Resume.pdf', 268321),
(30, 'notice 5', '2022-11-06 18:18:00', 'Resume.pdf', 268321),
(31, 'notice 6', '2022-11-06 18:24:00', 'Resume.pdf', 268321);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `StudentID` varchar(100) NOT NULL,
  `Tital` varchar(100) NOT NULL,
  `Result` varchar(100) NOT NULL,
  `Size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Name`, `StudentID`, `Tital`, `Result`, `Size`) VALUES
(2, 'Aditya Das', 'test1234', 'sem1', 'Exam Form.pdf', 76812),
(3, 'Aditya Das', 'test1234', 'sem2', 'CET RANK CARD.pdf', 114639);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Roll` varchar(100) NOT NULL,
  `StudentID` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Roll`, `StudentID`, `Class`, `DOB`, `Image`, `Street`, `City`, `State`, `Zip`) VALUES
(12, 'Aditya Das', '1', 'Aditya1234', '12', '2000-12-31', 'studentimage/Google 288x288_000831.jpg', '1041/1, Central Park, Naihati', 'Naihati', 'West Bengal', '743165'),
(13, 'Kaustav Ghosh', '2', 'Kaustav1234', '10', '2001-05-01', 'studentimage/Picsart_22-10-05_11-58-45-853 (1).jpg', 'Pratappur', 'Chinsurah', 'West Bengal', '000000'),
(15, 'Anish Sen', '3', 'Anish1234', '11', '2000-12-08', 'studentimage/WhatsApp Image 2022-12-04 at 13.31.07.jpg', 'N.A.', 'Bally', 'West Bengal', '711227');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `TeacherID` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Name`, `TeacherID`, `Department`, `Image`, `Phone`, `Street`, `City`, `State`, `Zip`) VALUES
(7, 'Aditya Das', 'T1234', 'BCA', 'teacherimage/Photo.jpg', '6289547876', '1041/1, Central Park, Naihati', 'Naihati', 'West Bengal', '743165'),
(11, 'Anish Sen', 'T4321', 'BBA', 'teacherimage/WhatsApp Image 2022-12-04 at 13.31.07.jpg', '6289547000', 'N.A.', 'Bally', 'West Bengal', '711227');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
