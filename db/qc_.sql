-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 05:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qc_`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_machine` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `id_machine`, `date`, `status`) VALUES
(1, 99, '0000-00-00 00:00:00', 1),
(2, 21, '0000-00-00 00:00:00', 1),
(3, 212, '2024-06-10 19:29:05', 1),
(4, 2112, '2024-06-11 00:29:47', 1),
(5, 2112, '2024-06-11 00:43:10', 1),
(6, 9, '2024-06-11 00:55:30', 1),
(7, 9, '2024-06-11 00:55:30', 1),
(8, 9, '2024-06-11 00:55:30', 1),
(9, 9, '2024-06-11 00:55:30', 1),
(10, 9, '2024-06-11 00:55:30', 1),
(11, 9, '2024-06-11 00:55:30', 1),
(12, 9, '2024-06-11 00:55:30', 1),
(13, 9, '2024-06-11 00:55:30', 1),
(14, 9, '2024-06-11 00:55:30', 1),
(15, 9, '2024-06-11 00:55:31', 1),
(16, 9, '2024-06-11 22:01:08', 0),
(17, 9, '2024-06-11 22:01:08', 0),
(18, 9, '2024-06-11 22:01:09', 0),
(19, 9, '2024-06-11 22:01:09', 0),
(20, 9, '2024-06-11 22:01:09', 0),
(21, 9, '2024-06-11 22:01:09', 1),
(22, 9, '2024-06-11 22:01:09', 1),
(23, 9, '2024-06-11 22:01:09', 1),
(24, 9, '2024-06-11 22:01:09', 1),
(25, 9, '2024-06-11 22:01:09', 1),
(26, 9, '2024-06-11 22:01:09', 1),
(27, 9, '2024-06-11 22:01:09', 0),
(28, 9, '2024-06-11 22:01:09', 0),
(29, 9, '2024-06-11 22:01:09', 0),
(30, 9, '2024-06-11 22:01:09', 1),
(31, 9, '2024-06-11 22:01:09', 0),
(32, 9, '2024-06-11 22:01:09', 1),
(33, 9, '2024-06-11 22:01:09', 1),
(34, 9, '2024-06-11 22:01:09', 1),
(35, 9, '2024-06-11 22:01:09', 0),
(36, 9, '2024-06-11 22:01:09', 0),
(37, 9, '2024-06-11 22:01:09', 0),
(38, 9, '2024-06-11 22:01:09', 0),
(39, 9, '2024-06-11 22:01:09', 0),
(40, 9, '2024-06-11 22:01:09', 0),
(41, 9, '2024-06-11 22:01:09', 0),
(42, 9, '2024-06-11 22:01:09', 0),
(43, 9, '2024-06-11 22:01:09', 0),
(44, 9, '2024-06-11 22:01:10', 0),
(45, 9, '2024-06-11 22:01:10', 0),
(46, 9, '2024-06-11 22:01:10', 0),
(47, 9, '2024-06-11 22:01:10', 0),
(48, 9, '2024-06-11 22:01:10', 0),
(49, 9, '2024-06-11 22:01:10', 0),
(50, 9, '2024-06-11 22:01:10', 0),
(51, 9, '2024-06-11 22:01:10', 0),
(52, 9, '2024-06-11 22:01:10', 1),
(53, 9, '2024-06-11 22:01:10', 1),
(54, 9, '2024-06-11 22:01:10', 0),
(55, 9, '2024-06-11 22:01:10', 0),
(56, 9, '2024-06-11 22:01:10', 0),
(57, 9, '2024-06-11 22:01:10', 1),
(58, 9, '2024-06-11 22:01:10', 0),
(59, 9, '2024-06-11 22:01:10', 0),
(60, 9, '2024-06-11 22:01:10', 1),
(61, 9, '2024-06-11 22:01:10', 1),
(62, 9, '2024-06-11 22:01:10', 0),
(63, 9, '2024-06-11 22:02:14', 1),
(64, 9, '2024-06-11 22:02:14', 1),
(65, 9, '2024-06-11 22:02:15', 1),
(66, 9, '2024-06-11 22:02:15', 1),
(67, 9, '2024-06-11 22:02:15', 1),
(68, 9, '2024-06-11 22:02:15', 1),
(69, 9, '2024-06-11 22:02:15', 1),
(70, 9, '2024-06-11 22:02:15', 1),
(71, 9, '2024-06-11 22:02:15', 1),
(72, 9, '2024-06-11 22:02:15', 1),
(73, 9, '2024-06-11 22:10:54', 1),
(74, 9, '2024-06-11 22:10:54', 1),
(75, 9, '2024-06-11 22:10:54', 1),
(76, 9, '2024-06-11 22:10:54', 1),
(77, 9, '2024-06-11 22:10:54', 1),
(78, 9, '2024-06-11 22:10:54', 1),
(79, 9, '2024-06-11 22:10:54', 1),
(80, 9, '2024-06-11 22:10:54', 1),
(81, 9, '2024-06-11 22:10:55', 1),
(82, 9, '2024-06-11 22:10:55', 1),
(83, 9, '2024-06-11 22:11:42', 1),
(84, 9, '2024-06-11 22:11:42', 1),
(85, 9, '2024-06-11 22:11:43', 1),
(86, 9, '2024-06-11 22:11:43', 1),
(87, 9, '2024-06-11 22:11:43', 1),
(88, 9, '2024-06-11 22:11:43', 1),
(89, 9, '2024-06-11 22:11:43', 1),
(90, 9, '2024-06-11 22:11:43', 1),
(91, 9, '2024-06-11 22:11:43', 1),
(92, 9, '2024-06-11 22:11:43', 1),
(93, 9, '2024-06-11 22:12:07', 0),
(94, 9, '2024-06-11 22:12:07', 0),
(95, 9, '2024-06-11 22:12:07', 0),
(96, 9, '2024-06-11 22:12:07', 0),
(97, 9, '2024-06-11 22:12:07', 0),
(98, 9, '2024-06-11 22:12:07', 1),
(99, 9, '2024-06-11 22:12:07', 1),
(100, 9, '2024-06-11 22:12:07', 1),
(101, 9, '2024-06-11 22:12:07', 1),
(102, 9, '2024-06-11 22:12:07', 1),
(103, 9, '2024-06-11 22:12:07', 1),
(104, 9, '2024-06-11 22:12:07', 0),
(105, 9, '2024-06-11 22:12:07', 0),
(106, 9, '2024-06-11 22:12:08', 0),
(107, 9, '2024-06-11 22:12:08', 1),
(108, 9, '2024-06-11 22:12:08', 0),
(109, 9, '2024-06-11 22:12:08', 1),
(110, 9, '2024-06-11 22:12:08', 1),
(111, 9, '2024-06-11 22:12:08', 1),
(112, 9, '2024-06-11 22:12:08', 0),
(113, 9, '2024-06-11 22:12:08', 0),
(114, 9, '2024-06-11 22:12:08', 0),
(115, 9, '2024-06-11 22:12:08', 0),
(116, 9, '2024-06-11 22:12:08', 0),
(117, 9, '2024-06-11 22:12:08', 0),
(118, 9, '2024-06-11 22:12:08', 0),
(119, 9, '2024-06-11 22:12:08', 0),
(120, 9, '2024-06-11 22:12:08', 0),
(121, 9, '2024-06-11 22:12:08', 0),
(122, 1, '2024-06-11 22:15:11', 0),
(123, 1, '2024-06-11 22:15:11', 0),
(124, 1, '2024-06-11 22:15:11', 0),
(125, 1, '2024-06-11 22:15:11', 0),
(126, 1, '2024-06-11 22:15:11', 0),
(127, 1, '2024-06-11 22:15:11', 1),
(128, 1, '2024-06-11 22:15:11', 1),
(129, 1, '2024-06-11 22:15:11', 1),
(130, 1, '2024-06-11 22:15:11', 1),
(131, 1, '2024-06-11 22:15:11', 1),
(132, 1, '2024-06-11 22:15:11', 1),
(133, 1, '2024-06-11 22:15:11', 0),
(134, 1, '2024-06-11 22:15:11', 0),
(135, 1, '2024-06-11 22:15:11', 0),
(136, 1, '2024-06-11 22:15:11', 1),
(137, 1, '2024-06-11 22:15:11', 0),
(138, 1, '2024-06-11 22:15:11', 1),
(139, 1, '2024-06-11 22:15:11', 1),
(140, 1, '2024-06-11 22:15:11', 1),
(141, 1, '2024-06-11 22:15:11', 0),
(142, 1, '2024-06-11 22:15:11', 0),
(143, 1, '2024-06-11 22:15:11', 0),
(144, 1, '2024-06-11 22:15:12', 0),
(145, 1, '2024-06-11 22:15:12', 0),
(146, 1, '2024-06-11 22:15:12', 0),
(147, 1, '2024-06-11 22:15:12', 0),
(148, 1, '2024-06-11 22:15:12', 0),
(149, 1, '2024-06-11 22:15:12', 0),
(150, 1, '2024-06-11 22:15:12', 0),
(151, 1, '2024-06-11 22:15:12', 0),
(152, 1, '2024-06-11 22:15:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
