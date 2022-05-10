-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2022 at 04:37 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaizen`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Education'),
(2, 'Financial'),
(3, 'Business'),
(4, 'Health'),
(5, 'Self Development');

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `speaker_id` int(11) NOT NULL,
  `speaker_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`speaker_id`, `speaker_name`) VALUES
(1, 'Ian Schnoor'),
(2, 'Ferial'),
(3, 'Doddy Zulma'),
(4, 'Arry Andrian Simbolon'),
(5, 'Vidvant Brahmantyo'),
(6, 'Angga Hafiidh Fahrizal'),
(7, 'Riesintiya Aska'),
(8, 'Vidvant Brahmantyo'),
(9, 'Agus Triarso'),
(10, 'AC Mahendra K Datu'),
(11, 'Fathur Rokhman'),
(12, 'Luluk Elyana'),
(13, 'Samsudi'),
(14, 'Rex Marindo'),
(15, 'Ivan Kanel');

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `webinar_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `webinar_title` varchar(250) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=default,1=trending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webinar`
--

INSERT INTO `webinar` (`webinar_id`, `speaker_id`, `category_id`, `webinar_title`, `views`, `date`, `link`, `status`) VALUES
(1, 1, 2, 'Checking and Reviewing a Financial Model', 1204, '2021-04-30', 'https://www.youtube.com/watch?v=HULD38d8new', 1),
(2, 4, 2, 'Akuntansi Perusahaan Digital: Keunikan dan Tantangan', 1113, '2022-04-16', 'https://www.youtube.com/watch?v=_tTngynwM-k', 0),
(3, 8, 2, 'Internal Control Over Financial Reporting', 5716, '2021-10-30', 'https://www.youtube.com/watch?v=jTIsxAiAYsU', 1),
(4, 11, 1, 'Merdeka Belajar di Era Kurikulum Prototipe 2022', 3595, '2022-02-03', 'https://www.youtube.com/watch?v=fJiCcZd6Ky8', 0),
(5, 10, 5, 'How to Improve Characteristic Self Potential', 2721, '2022-03-10', 'ttps://www.youtube.com/watch?v=AjuIcMzjf5M', 0),
(6, 1, 2, 'Financial Modeling Best Practices', 38147, '2020-07-09', 'https://www.youtube.com/watch?v=tJxHM71QKoo', 1),
(7, 6, 3, 'Strategi Mengimplementasikan Good Corporate Governance', 1026, '2022-02-20', 'https://www.youtube.com/watch?v=Zf2haSUVrr0', 1),
(8, 9, 1, 'Optimasi Media Podcast Radio dan TV Edukasi pada Pembelajaran', 25824, '2020-04-20', 'https://www.youtube.com/watch?v=_tTngynwM-k', 0),
(9, 2, 1, 'Mengembangkan Semangat Guru dalam Meningkatkan Publikasi Ilmiah', 19697, '2022-04-21', 'https://www.youtube.com/watch?v=l3QntsdJh4g', 0),
(10, 3, 2, 'Investigative Auditing and Forensic Accounting', 4349, '2022-03-12', 'https://www.youtube.com/watch?v=gCGnBBdyBC0', 0),
(11, 7, 1, 'Pembelajaran Interaktif Untuk Generasi Z yang Menyenangkan', 12355, '2022-04-23', 'https://www.youtube.com/watch?v=htOAldFIt4Q', 0),
(12, 8, 2, 'Forensic Accounting vs Investigative Auditing', 4910, '2020-12-19', 'https://www.youtube.com/watch?v=OKAlX-GArG8', 0),
(13, 12, 1, 'Strategi Praktik Pembelajaran Kurikulum Merdeka', NULL, '2022-10-12', 'https://www.youtube.com/watch?v=MU5VVoWACEc', 0),
(14, 13, 1, 'Meneropong Arah Kebijakan Baru Kurikulum Pendidikan Dasar dan Menengah', NULL, '2022-12-25', 'https://www.youtube.com/watch?v=n9yEr9gjm-E', 0),
(15, 14, 3, 'Membangun Bisnis Kuliner dari Nol', NULL, '2022-11-11', 'https://www.youtube.com/watch?v=XUbBZCuO7-o', 0),
(16, 15, 2, 'SA 500 Bukti Audit - Audit Berbasis ISA', NULL, '2022-08-23', 'https://www.youtube.com/watch?v=1xiuzKtbxPY', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`speaker_id`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`webinar_id`),
  ADD KEY `speaker_id` (`speaker_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `speaker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `webinar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `webinar`
--
ALTER TABLE `webinar`
  ADD CONSTRAINT `webinar_ibfk_1` FOREIGN KEY (`speaker_id`) REFERENCES `speaker` (`speaker_id`),
  ADD CONSTRAINT `webinar_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
