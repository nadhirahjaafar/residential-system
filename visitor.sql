-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2021 at 04:10 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amzarine_st1g5`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `resident id` int(8) NOT NULL,
  `visitor id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ic no` varchar(12) NOT NULL,
  `tel no` varchar(11) NOT NULL,
  `vehicle reg no` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`resident id`, `visitor id`, `name`, `ic no`, `tel no`, `vehicle reg no`, `username`, `password`, `email`) VALUES
(10, 1, 'RAJU A/L GOPAL', '871203012219', '0113490714', 'BBQ3928', 'rajugopal', '$2y$10$DztfAs.3B1.cqObwJd8y3u5VT/dNsFUl81TofAJXylXj9QX7LddAa', 'rajugopal87@gmail.com'),
(2, 2, 'ZUHAILI BIN RAZLAN', '971107144857', '0123390875', 'WBN6690', 'zurazlan', '$2y$10$fLbrUqWsVIlIz.0lOyi8S.QyXK3gE09yq9zjmEWAeqeBBZO.P2ste', 'zuhaili97@gmail.com'),
(17, 3, 'SYAFIQ BIN ABU', '980423072215', '0197701239', 'JPK2216', 'syafiqabu', '$2y$10$9x3woCzTE9AJrj3KNadPIumiqqm6DCoL5pbY6oFemK57fuwHl5njC', 'syafiq98@gmail.com'),
(11, 4, 'INTAN BINTI SAZALI', '870808091744', '0179013425', 'GBW3129', 'intansaz', '$2y$10$MguFWCxIHbQ8IyqLzp6N8ehL05GT2ZozBLosrJddNgiELyVNY6KvC', 'intansaz87@gmail.com'),
(12, 5, 'LEE MEI LING', '940601091922', '0182231760', 'RMQ7402', 'meiling', '$2y$10$PPPWspLRlU0g3s9vAkT8bujuY0gHGuxzBjnH264YckSwbEuaFIrE6', 'meiling94@gmail.com'),
(3, 6, 'SYASYA BINTI HAMIZAN', '931109011368', '0125507319', 'GWS9253', 'syasyamizan', '$2y$10$JhHtpGvoCCyjGNzAy9tfo.hdFMhPJLt0GLNQf/iGEdEuz1fFST.KO', 'syasyamizan93@gmail.com'),
(17, 7, 'AMIRA BINTI SULAIMAN', '990204141184', '0196924731', 'BHC6610', 'amirasulaiman', '$2y$10$ZweUAr6QZMrFB.7lbAwIHORoO99xxeW6trVTP1d3E70gplUzhEgh.', 'amirasu99@gmail.com'),
(18, 8, 'NOOR AFIQAH BINTI RAHMAT', '960328125414', '0114578342', 'TCA7140', 'afiqahrahmat', '$2y$10$5muy2CLQrq98r8PUMWkDKOQKxkdHBljRryosRUN/JM4Um5YL36CVW', 'fiqahrahmat@gmail.com'),
(24, 9, 'KUMARAN A/L SINGGAH', '930901045667', '0134574219', 'NDL478', 'kumaran', '$2y$10$sWyiPqHr75eS4.jtIwBgpOV7CRdjZRgdKG2PNIULVO17JttTRDj2G', 'kumaran@gmail.com'),
(16, 10, 'LI LILIAN', '908170944432', '0175432867', 'PNU7560', 'lililian', '$2y$10$/OfXMjWVh6WDtk8l71BkrOX74HJxAWvhQEDAq7Qr8J/AM6q6gbBGC', 'lilian90@gmail.com'),
(18, 11, 'NUR EZATUL BINTI ABU', '820423097656', '0196548321', 'VCT9751', 'nrezatul', '$2y$10$zKNE7zirHeADSUdOC9EpOup8KaqnM9De.ZYjJOgzBOZWr7Bj0lgnS', 'ezatulabu@gmail.com'),
(12, 12, 'ZHANG LI MEI', '921019058216', '0128756942', 'RAB5262', 'zlimei', '$2y$10$DrVdkHgfrju4iWmBwpg58empn2tH0.lzMWOfOD4wRpaHQjcJeexk6', 'zhangli77@gmail.com'),
(6, 13, 'AZIZAH BINTI HARUN', '571106115684', '0125578902', 'TQX8796', 'zizah', '$2y$10$75Jkh7RqwJ/fDFO9T/yp0eyztQiTN4x77FNZi4UVxGUlqwDRGqu3m', 'azizah57@gmail.com'),
(6, 14, 'RAJA FARAH BINTI RAJA MAHMUD', '970420115888', '0174848750', 'AJK1414', 'farah', '$2y$10$sSV0mWooVnIUH7eYlKKNGeRhoOkPtAHAQb2zDR19NA8qs7u2MdLn.', 'rajafarah@gmail.com'),
(7, 15, 'HAFIZ AHMAD BIN RAZAK', '900503086181', '0135879630', 'KUL2145', 'madhafiz', '$2y$10$D18OGAcRT1cVyKxkoqUdTevlYskQHUUSanWuFfZGdmTaPHpWoj5Ne', 'madfiz90052@gmail.com'),
(7, 16, 'KAMAL BIN MUSTAFA', '920611115896', '0111245789', 'WBX000', 'malmustafa', '$2y$10$WVToPR8gD4qUc2PeFFOvLO67ExnTvFN2ef/gBgcfnoFgrH1dgNLeO', 'kamalmustafa@gmail.com'),
(13, 17, 'LIM HONG DAN', '890417085574', '0197789963', 'T021UV', 'hongdanlim', '$2y$10$6qH7Df22fq6BYfLFVE2yde3W9pa6ScqxBJGI99RYUJsZL/ppfJkxS', 'hongdanlim@gmail.com'),
(13, 18, 'CHOW MEI MEI', '871014026107', '0132223350', 'W5140BX', 'meymey', '$2y$10$.NNITGXsjF7jvwYMcG34FuKS/kmFb7EYFlH.KVVvAxWjkaEb7lhHG', 'chowmey@gmail.com'),
(14, 19, 'SURESH A/L DEVAREV', '790505087463', '0178875496', 'SUV2222', 'sureshi', '$2y$10$oHjbGWja8ZMpg7kL6wcGM.mNwL95DpmqxgeI54rrFA8Tv/.iZMDLu', 'sureshdev@gmail.com'),
(14, 20, 'ADVAITH A/L JAYARASH', '831205086930', '0189898901', 'POV4174', 'vaithjaya', '$2y$10$XhCdatcUNqkT84RyDCH9W.m.EqneHGFi12yvCSm8Ci95dkNhXHg5a', 'advaithjaya83@gmail.com'),
(20, 21, 'ADITYA RAJ A/L AKIV', '910201180258', '0102020301', 'PER1234', 'adityaraj', '$2y$10$41LkxYD4w9n7Sdg.t7hvKO//.x.esqvroF3MudiuKrrOl/SryvTMW', 'rajakiv91@gmail.com'),
(20, 22, 'PRATEEB KAUR A/L JARJIT KAUR', '501118081745', '0111856301', 'RJK7854', 'prateebkaur', '$2y$10$.klGKWQUFwVupsK.SRn0r.cD7joDNZC.rXSIe6u6.8OlMCDvdfhrW', 'preateeb50@gmail.com'),
(21, 23, 'KAMARUL AMIR BIN AHMAD', '791010118576', '0105589637', 'GWS8888', 'amarulamir', '$2y$10$5N/7hHAZgyBm5AsGb79Vt.mU.TdnkUvTyyhM3gwKEg.rmuiXlRRwO', 'kamalmustafa@gmail.com'),
(21, 24, 'HAZIQ BIN TUAH', '791114087852', '0144445474', 'NMN7878', 'ziqtuah', '$2y$10$YXKaoEkyGN8Hb/TkdpY4S..vgmBvW.6CeVosI41Sqr5aRich1Aa3m', 'ziqtuah79@gmail.com'),
(22, 25, 'HONG MIN FENG', '890217054789', '0166655656', 'BGY7417', 'minfeng', '$2y$10$EbMKM3cysrIIu6.usOxCMOR.OXr6phibUuH7P0Pg2OAR7NYGVDpHu', 'mingfeng0217@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor id`),
  ADD UNIQUE KEY `visitor name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
