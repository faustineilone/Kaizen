-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2022 at 05:21 PM
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
  `speaker_name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`speaker_id`, `speaker_name`, `pic`) VALUES
(1, 'Ian Schnoor', 'assets/img/profpic.png'),
(2, 'Ferial', 'assets/img/profpic.png'),
(3, 'Doddy Zulma', 'assets/img/profpic.png'),
(4, 'Arry Andrian Simbolon', 'assets/img/profpic.png'),
(5, 'Vidvant Brahmantyo', 'assets/img/profpic.png'),
(6, 'Angga Hafiidh Fahrizal', 'assets/img/profpic.png'),
(7, 'Riesintiya Aska', 'assets/img/profpic.png'),
(8, 'A', 'assets/img/profpic.png'),
(9, 'Agus Triarso', 'assets/img/profpic.png'),
(10, 'AC Mahendra K Datu', 'assets/img/profpic.png'),
(11, 'Fathur Rokhman', 'assets/img/profpic.png'),
(12, 'Luluk Elyana', 'assets/img/profpic.png'),
(13, 'Samsudi', 'assets/img/profpic.png'),
(14, 'Rex Marindo', 'assets/img/profpic.png'),
(15, 'Ivan Kanel', 'assets/img/profpic.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=unsubscribed, 1=subscribed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `user_id`, `speaker_id`, `status`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `phone_no`, `date_joined`) VALUES
(1, 'lon', 'faustine.ilone@student.umn.ac.id', '$2y$10$g5J4xhDTJ9quzJdhQ.ncZOBb03LL8OR7XKelw8SAwANT5jcfHM91q', '08161641288', '2022-05-15 23:21:17'),
(2, 'jwh', 'jwh@gmail.com', '$2y$10$jdc68fCCAs8JnQr6aKpRrO59gUgv1pIRjtZDytS11nW9N4lr788aW', NULL, '2022-05-15 23:22:20'),
(7, 'a', 'a@gmail.com', '$2y$10$J.9a1sNXUgozC4BwGgX8FOP3Sten9/ZCaGtDRnITUlQKbGsZbnsSu', NULL, '2022-05-16 00:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `webinar_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `webinar_title` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'in minutes',
  `views` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `webinar_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=default,1=trending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webinar`
--

INSERT INTO `webinar` (`webinar_id`, `speaker_id`, `category_id`, `webinar_title`, `duration`, `views`, `date`, `link`, `thumbnail`, `webinar_desc`, `status`) VALUES
(1, 1, 2, 'Checking and Reviewing a Financial Model', 101, 1204, '2021-04-30', 'https://www.youtube.com/watch?v=HULD38d8new', 'assets/img/thumbnail/binar1.png', 'Schnoor, an expert in financial modeling, explained, checked, and reviewed a financial model of a new but well known start-up in Jakarta, Indonesia.', 1),
(2, 4, 2, 'Akuntansi Perusahaan Digital', 23, 1113, '2022-04-16', 'https://www.youtube.com/watch?v=_tTngynwM-k', 'assets/img/thumbnail/binar5.png', 'Simbolon shared his experience in digital enterprise accounting in terms of its uniqueness and challenges he had come across along the way.', 0),
(3, 5, 2, 'Internal Control Over Financial Reporting', 214, 5716, '2021-10-30', 'https://www.youtube.com/watch?v=jTIsxAiAYsU', 'assets/img/thumbnail/binar2.png', 'Brahmantyo stated the importance and advantages of internal control over financial reporting and compared them both in various different aspects.', 1),
(4, 11, 1, 'Merdeka Belajar di Era Kurikulum Prototipe 2022', 178, 3595, '2022-02-03', 'https://www.youtube.com/watch?v=fJiCcZd6Ky8', 'assets/img/thumbnail/binar12.png', 'Rokhman shared his thoughts on the concept of Freedom to Learn in numerous universities in Indonesia and how it affects students in learning.', 0),
(5, 10, 5, 'How to Improve Characteristic Self Potential', 156, 2721, '2022-03-10', 'ttps://www.youtube.com/watch?v=AjuIcMzjf5M', 'assets/img/thumbnail/binar11.png', 'Tips from Datu on how to improve one’s potential in hopes of becoming a better person for ourselves as well as for the people around us.', 0),
(6, 1, 2, 'Financial Modeling Best Practices', 113, 38147, '2020-07-09', 'https://www.youtube.com/watch?v=tJxHM71QKoo', 'assets/img/thumbnail/binar3.png', 'Schnoor discussed about some financial modeling best practices filled with lectures and interactions which made learning a pleasure.', 1),
(7, 6, 3, 'Strategi Good Corporate Governance', 220, 1026, '2022-02-20', 'https://www.youtube.com/watch?v=Zf2haSUVrr0', 'assets/img/thumbnail/binar4.png', 'Fahrizal gave out strategies regarding the implementation of good corporate governance that will help educate and give comfort to the employees.', 1),
(8, 9, 1, 'Optimasi Media Edukasi pada Pembelajaran', 153, 25824, '2020-04-20', 'https://www.youtube.com/watch?v=_tTngynwM-k', 'assets/img/thumbnail/binar10.png', 'An innovative approach proposed by Triarso in optimizing podcast, radio, as well as TV to help children in their studies and increase interests.', 0),
(9, 2, 1, 'Semangat Guru Tingkatkan Publikasi Ilmiah', 140, 19697, '2022-04-21', 'https://www.youtube.com/watch?v=l3QntsdJh4g', 'assets/img/thumbnail/binar6.png', 'Ferial showed the importance of having passion and spirit while teaching in order to increase the number of published scientific papers in universities.', 0),
(10, 3, 2, 'Investigative Auditing and Forensic Accounting', 224, 4349, '2022-03-12', 'https://www.youtube.com/watch?v=gCGnBBdyBC0', 'assets/img/thumbnail/binar7.png', 'Zulma helps understand the differences between investigative auditing and forensic accounting, as well as auditors and forensic accountants.', 0),
(11, 7, 1, 'Pembelajaran Interaktif Generasi Z yang Menyenangkan', 119, 12355, '2022-04-23', 'https://www.youtube.com/watch?v=htOAldFIt4Q', 'assets/img/thumbnail/binar8.png', 'Aska recommended a few learning techniques for Gen Z to switch things up and have an interactive teaching and learning process.', 0),
(12, 5, 2, 'Forensic Accounting vs Investigative Auditing', 207, 4910, '2020-12-19', 'https://www.youtube.com/watch?v=OKAlX-GArG8', 'assets/img/thumbnail/binar9.png', 'Brahmantyo gave explanation on how to distinguish forensic accounting and investigative auditing which are often thought as the same thing.', 0),
(13, 12, 1, 'Strategi Praktik Pembelajaran Kurikulum Merdeka', 121, NULL, '2022-10-12', 'https://www.youtube.com/watch?v=MU5VVoWACEc', 'assets/img/thumbnail/binar13.png', 'Elyana shared numerous strategies in Freedom to Learn studies in Indonesia, as well as their impact on students and the nation.', 0),
(14, 13, 1, 'Meneropong Arah Kebijakan Baru Kurikulum Pendidikan Dasar dan Menengah', 111, NULL, '2022-12-25', 'https://www.youtube.com/watch?v=n9yEr9gjm-E', 'assets/img/thumbnail/binar14.png', 'Samsudi helped us understand new terms regarding the curriculum of elementary and middle schoolers along with the pros and cons.', 0),
(15, 14, 3, 'Membangun Bisnis Kuliner dari Nol', 137, NULL, '2022-11-11', 'https://www.youtube.com/watch?v=XUbBZCuO7-o', 'assets/img/thumbnail/binar15.png', 'Marindo, the CEO of Foodizz, shared his experience on building his first ever business and how he had managed to keep it running despite Covid.', 0),
(16, 15, 2, 'SA 500 Bukti Audit - Audit Berbasis ISA', 170, NULL, '2022-08-23', 'https://www.youtube.com/watch?v=1xiuzKtbxPY', 'assets/img/thumbnail/binar16.png', 'Kanel led the discussion regarding audit which involves Indonesia, Australia, and Singapore that includes examination and inspection.', 0);

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
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `speaker_id` (`speaker_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `webinar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`speaker_id`) REFERENCES `speaker` (`speaker_id`);

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
