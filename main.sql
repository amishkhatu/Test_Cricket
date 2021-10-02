-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 04:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `match_no` int(11) NOT NULL,
  `winner` varchar(50) NOT NULL,
  `loser` varchar(50) NOT NULL,
  `mom` varchar(50) NOT NULL,
  `bbowler` varchar(50) NOT NULL,
  `bfielder` varchar(50) NOT NULL,
  `stadium_no` int(11) NOT NULL,
  `stadium` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`match_no`, `winner`, `loser`, `mom`, `bbowler`, `bfielder`, `stadium_no`, `stadium`) VALUES
(0, '', '', '', '', '', 0, ''),
(1, 'india', 'srilanka', 'Virat', 'R Chahar', 'Hardik', 1, 'wankhade'),
(2, 'srilanka', 'india', 'Chameera', 'Bhanuka', 'Chameera', 2, 'dypatil'),
(3, 'india', 'srilanka', 'Hardik', 'Ashwin', 'Virat', 2, 'dypatil');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `matchno` int(11) NOT NULL,
  `wt` varchar(50) NOT NULL,
  `lt` varchar(50) NOT NULL,
  `mom` varchar(50) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `bf` varchar(50) NOT NULL,
  `sno` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `match_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchno`, `wt`, `lt`, `mom`, `bb`, `bf`, `sno`, `sname`, `match_name`) VALUES
(0, '', '', '', '', '', 0, '', ''),
(1, 'india', 'srilanka', 'Virat', 'Ashwin', 'Hardik', 1, 'wankhade', 'match1'),
(2, 'srilanka', 'india', 'Chameera', 'Bhanuka', 'Bhanuka', 2, 'dypatil', 'match2'),
(3, 'india', 'srilanka', 'Surya', 'R Chahar', 'Rohit', 1, 'wankhade', 'match3'),
(4, 'india', 'srilanka', 'Rohit', 'Hardik', 'Ashwin', 2, 'dypatil', 'match4');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `no_MOM` int(11) NOT NULL,
  `match_played` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `total_runs` int(11) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`p_id`, `p_name`, `no_MOM`, `match_played`, `status`, `total_runs`, `country`) VALUES
(0, 'Virat', 1, 2, 'batsman', 110, 'india'),
(1, 'Rohit', 2, 3, 'captain', 89, 'india'),
(2, 'Surya', 2, 2, 'batsman', 79, 'india'),
(4, 'hardik', 2, 3, 'batsman', 78, 'india'),
(5, 'Rishab Pant', 1, 3, 'all rounder', 67, 'india'),
(6, 'Ishan Kishan', 0, 3, 'batsman', 34, 'india'),
(7, 'rahul', 3, 3, 'all rounder', 85, 'india'),
(8, 'Ravindra Jadeja', 1, 3, 'bolwer', 12, 'india'),
(9, 'R Chahar', 0, 3, 'bolwer', 14, 'india'),
(10, 'Ashwin', 0, 3, 'bolwer', 12, 'india'),
(11, 'Axar Patel', 0, 2, 'bolwer', 17, 'india'),
(101, 'Bhanuka', 2, 3, 'captain', 78, 'srilanka'),
(102, 'Chameera', 1, 3, 'batsman', 58, 'srilanka'),
(103, 'Chandimal', 1, 3, 'Batsman', 46, 'srilanka'),
(104, 'Silva', 0, 2, 'Bowler', 16, 'srilanka'),
(105, 'dickwella', 1, 3, 'All rounder', 102, 'srilanka'),
(106, 'Fernando', 2, 3, 'Batsman', 85, 'srilanka'),
(107, 'Jayawickrama', 3, 3, 'All rounder', 98, 'srilanka'),
(108, 'Lakmal', 1, 3, 'Bowler', 89, 'srilanka'),
(109, 'Mendis', 2, 3, 'Bowler', 18, 'srilanka'),
(110, 'perera', 0, 2, 'Bowler', 12, 'srilanka'),
(111, 'Thirimanne', 2, 2, 'Bowler', 15, 'srilanka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`matchno`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;