-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2021 at 10:33 AM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library Mangement System`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `pass`, `email`, `contact`, `pic`) VALUES
(1, 'Tariq', 'jamil', 'Tariq jamil', 'tr577&wr', 'tariqamil34@gmail.com', 3009691453, 'cvz.jpeg'),
(2, 'Usama', 'masood', 'Usama masood', 'usama123', 'usama123@gmail.com', 3189691453, 'index-removebg-preview (2).png'),
(3, 'Usman', 'Mirza', 'Usman Mirza', 'mirzaquery', 'Usman245@gamil.com', 3139691453, 'Screenshot from 2021-06-23 15-58-00.png'),
(4, 'mohid', 'gilani', 'mohid aryan', 'hello', 'mirza@gmail.com', 3009691453, 'Screenshot from 2021-07-09 07-47-32.png'),
(5, 'ahmad', 'jhjh', 'lkhhh', '5666gghh', 'mirzaahmad@gmail.com', 345555769, 'n1.png'),
(6, 'Ali ', 'hamza', 'Ali hamza', 'ali123', 'mirza@hammd.com', 3009691453, 'pexels-photo-5428833.jpeg'),
(7, 'hamza ', 'qadir', 'hamza qadie', '123', 'mirza@hammd.com', 3009691453, 'n1.png'),
(8, 'llll', 'lssl', 'mnc', 'tr577&wr', 'ali@gamil.com', 3009691453, 'n1.png'),
(9, 'ere', 'ali', 'ali', '1234', 'ali@gamil.com', 3009691453, 'awais.jpeg'),
(10, 'zain', 'chadury', 'zain chadury', 'zain 45tuu', 'zainjuttwarrich432@gmail.com', 3044224280, 'n1.png'),
(11, 'uzair', 'Ali', 'msaleem', 'w8848edjd', 'uzair349@gamil.com', 345868848, 'n1.png'),
(12, 'uzair', 'ali', 'uzair ali', 'ekkekekke', 'uzairali34@gmail.com', 3009691453, 'index.png'),
(13, 'Muhamamd', 'Awais', 'Muhammad Awais', 'awaisjan123', 'awais34@gmail.com', 19, 'awais.jpeg'),
(14, 'Rohail', 'Iqbal', 'Rohail Iqbal', 'rohail345', 'rohail45@gmail.com', 58, 'rohail.jpeg'),
(15, 'Hassan', 'Ahmad', 'Hassan ahmad', 'hassan345', 'hassan345@gmail.com', 167, 'hassan.jpeg'),
(16, 'Ali', 'Shan', 'Ali Shan', 'ali4669d', 'alishan3699@gmail.com', 1, 'ali shan.jpeg'),
(17, 'Mohsin', 'Munir', 'Mohsin munir', 'mohsin344', 'mohsin52@gmail.com', 3003959233, 'mohsin.jpeg'),
(18, 'Irfan', 'Ali', 'Irfan Ali', 'irfan345', 'irfan467@gmail.com', 301000322, 'irfan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(223) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'menimical of electronics', 'v.k john,harry,kitrn', '3rd', 'available', 29, 'EEE'),
(2, 'web designing', 'Vivky Gorge', '1st', 'available', 34, 'WBD45'),
(3, 'Data structure', 'S.H valim John,Harry hen, karit', '2rd', 'available', 5, 'CSC102'),
(4, 'Object oriented programming', 'EK. kenloi, Hen bench, Johny', '4rd', 'available', 16, 'CSC241'),
(5, 'pakistan studies', 'Vs. kathrine, Harry bench', '1st', 'available', 20, 'HUM111'),
(6, 'Islamiyat', 'harry portsw', '2rd', 'available', 21, 'IS344'),
(7, 'Data science', 'jose kurap', '3rd', 'available', 22, 'DC3646'),
(8, 'Ecnomics', 'harry ports', '2rd', 'available', 12, 'ECD344'),
(9, 'computer science', 'harry kha', '4rd', 'available', 12, 'CSC421'),
(10, 'report writing skill', 'krithik hen', '2rd', 'available', 25, 'RESD444'),
(11, 'Data science', 'jose kurap', '5th', 'available', 12, 'CSC42');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(1, 'Usama masood', ''),
(2, 'Usman Mirza', ''),
(3, 'mohid gilan', ''),
(4, 'Usman Mirza', ''),
(5, 'mohid gilan', '');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `Returns` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `Returns`) VALUES
('msaleem', 1, '<p style=\"color: white; background-color: olive;\">Expired</p>', '2021-05-02', '2021-06-23'),
('usman ali', 2, '<p style=\"color: white; background-color: olive;\">Expired</p>', '2021-05-02', '2021-06-20'),
('mohid gilani', 3, '<p style=\"color: white; background-color: green;\">Returned</p>', '2019-02-24', '2019-03-03'),
('uzair ahmad', 4, '<p style=\"color: white; background-color: green;\">Returned</p>', '2021-05-10', '2021-05-15'),
('msaleem', 6, '', '', ''),
('msaleem', 7, 'yes', '2021-02-12', '2021-07-30'),
('ut', 2, '', '', ''),
('uzair ahmad', 5, '', '', ''),
('Ali hasssan', 3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint NOT NULL,
  `roll` int NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `lastname`, `username`, `pass`, `email`, `contact`, `roll`, `pic`) VALUES
('firstname', 'lastname', 'username', 'pass', 'email', 0, 0, 'n1.png'),
('saleem', 'akram', 'msaleem', 'saleem', 'saleemakram786@gmail.com', 3053111228, 12, 'n1.png'),
('usman ', 'Ali', 'usman ali', 'usman12390', 'usmanali34@gmail.com', 3145793842, 198, 'n1.png'),
('sonu', 'chuduary', 'Ali hasssan', 'chadurysab', 'sounuch812@gmail.com', 3160696416, 2251, 'n1.png'),
('Ahmad', 'Ali', 'ut', 'mirza', 'mirza@hammd', 4343, 2467, 'n1.png'),
('uzair', 'ali', 'uzair ahmad', 'uzair45434', 'uzair349@gamil.com', 3009691453, 2792, 'n1.png'),
('uzair', 'abbas', 'uzair abbas', 'Mirza@34^', 'mirza@hammd', 3009691453, 3432, 'n1.png'),
('mohid', 'gilani', 'mohid gilani', 'mohid', 'mohid@gmail.com', 3009691453, 3434, 'n1.png'),
('Ali', 'Ahmad', 'Ali Ahmad', 'qakkdkkdk', 'mirza@gmail.com', 3009691453, 8531, 'n1.png'),
('Ahmad', 'Mirza', 'ddjdj', 'Mirzaquery', 'mirza@hammd', 3040004, 9754, 'n1.png'),
('kirat', 'hasham', 'kh', 'tjjtjtj', 'ali@gamil.com', 3040004, 23232, 'n1.png'),
('Ahmad', 'Mirza', 'Ahmadpo', 'Mirza', 'mirza@gamil.com', 3040004, 34321, 'n1.png'),
('uzair', 'abbas', 'uzair abbasr', 'Ma2$ut675op', 'mirza@hammd', 3009691453, 34322, 'n1.png'),
('Ahmad', 'Mirza', 'saleem ahmad', '23332233', 'mirza@hammd.com', 3009691453, 34514, 'n1.png'),
('Ahmad', 'Mirza', 'nv', 'mirzaquery', 'mirza@gmail.com', 9995994, 2232671, 'n1.png'),
('Ahmad', 'Mirza', 'khw', 'dfdfd', 'mirza@hammd', 35343, 22323232, 'n1.png'),
('AHmad', 'Mirza', 'Ahmad Mirza', 'tjjtjtj', 'mirza@gmail.com', 3009691453, 223232314, 'n1.png'),
('Ahmad', 'gn', 'ty4', '12^Mirza@qu', 'mirza@gamil.com', 35343, 223232321, 'n1.png'),
('AHmads', 'Mirza', 'jjdjjd', 'Mirza@34&2', 'mirza@gamil.com', 35343, 232324545, 'n1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
