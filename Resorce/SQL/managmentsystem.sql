-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managmentsystem`
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
(1, 'admin', 'admin');

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
(11, 'Abir Das', 'Lecture 150', '12', '2022-12-04', 'videoplayback.mp4'),
(12, 'Aditya Das', 'python', '12', '2022-12-03', 'videoplayback.mp4'),
(13, 'Aditya Das', 'java', '11', '2022-12-03', 'videoplayback (1).mkv');

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
(40, 'notice', '2022-12-03 11:43:00', 'YDM.pdf', 259766),
(41, 'notice1', '2022-12-03 00:43:00', 'YDM.pdf', 259766);

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
(10, 'Aditya Das', '2', 'test1234', '12', '2000-12-31', 'studentimage/Photo.jpg', '1041/1, Central Park, Naihati', 'Naihati', 'West Bengal', '743165'),
(11, 'Abir Das', '4', 'test4321', '11', '2022-11-04', 'studentimage/955345.jpg', '1041/1, Central Park, Naihati', 'Naihati', 'West Bengal', '743165');

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
(7, 'Aditya Das', '256398745214', 'BCA', 'teacherimage/Photo.jpg', '6289547876', '1041/1, Central Park, Naihati', 'Naihati', 'West Bengal', '743165'),
(8, 'Abir Das', '256398745214hf', 'BCA', 'teacherimage/955345.jpg', '6289547876', '1041/1, Central Park, Naihati', 'North 24 Parganas', 'West Bengal', '743165'),
(9, 'Abir', '256398745214hfh', 'BBA', 'teacherimage/PSX_20190326_215016.jpg', '6289547876', '1041/1, Central Park, Naihati', 'North 24 Parganas', 'West Bengal', '743165');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
