-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- MÃ¡y chá»§: 127.0.0.1
-- Thá»i gian Ä‘Ã£ táº¡o: Th10 22, 2021 lÃºc 05:16 AM
-- PhiÃªn báº£n mÃ¡y phá»¥c vá»¥: 10.4.21-MariaDB
-- PhiÃªn báº£n PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- CÆ¡ sá»Ÿ dá»¯ liá»‡u: `db_tracnghiem`
--

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `exam_title` varchar(30) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` time NOT NULL,
  `total_question` int(10) NOT NULL,
  `marks_per_right_answer` int(10) NOT NULL,
  `created_on` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `exam_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(1, 'congngheWeb', '2021-10-22', '00:01:20', 2, 1, '2021-10-22', 'Started', '06');

--
-- Chá»‰ má»¥c cho cÃ¡c báº£ng Ä‘Ã£ Ä‘á»•
--

--
-- Chá»‰ má»¥c cho báº£ng `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
