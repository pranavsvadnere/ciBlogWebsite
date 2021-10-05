-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 12:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `special` enum('promo','featured') NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `author`, `special`, `created_at`) VALUES
(16, 'Virat Kohli to step down as T20I captain after 2021 T20 World Cup', 'Virat Kohli will step down as India\'s T20I captain after the T20 World Cup in the UAE next month, he announced on Thursday (September 16) in a statement on Twitter. Kohli said he arrived at the decision in order to better manage his captaincy workload in the Test and ODI format, having discussed the matter with coach Ravi Shastri and vice captain Rohit Sharma.\r\n\r\n\"I have been fortunate enough to not only represent India but also lead the Indian Cricket Team to my utmost capability. I thank everyone who has supported me in my journey as the Captain of the Indian Cricket Team. I couldn\'t have done it without them - the boys, the support staff, the selection committee, my coaches and each and every Indian who prayed for us to win,\" wrote Kohli.\r\n\r\n\"Understanding workload is a very important thing and considering my immense workload over the last 8-9 years playing all 3 formats and captaining regularly for last 5-6 years, I feel I need to give myself space to be fully ready to lead the Indian Team in Test and ODI Cricket. I have given everything to the Team during my time as T20 Captain and I will continue to do so for the T20 Team as a batsman moving forward.\r\n\r\n\"Of course, arriving at this decision took a lot of time. After a lot of contemplation and discussions with my close people, Ravi bhai and also Rohit, who have been an essential part of the leadership group, I\'ve decided to step down as the T20 Captain after this T20 World Cup in Dubai in October. I have also spoken to the secretary Mr Jay Shah and the President of BCCI Mr Sourav Ganguly along with all the selectors about the same. I will continue to serve Indian Cricket and the Indian Team to the best of my ability,\" he added.\r\nIn a media release from the BCCI, Ganguly acknowledged Kohli\'s contributions as T20I skipper. \"Virat has been a true asset for Indian Cricket and has led with aplomb. He is one of the most successful captains in all the formats. The decision has been made keeping in mind the future roadmap. We thank Virat for his tremendous performance as the T20I Captain. We wish him all the best for the upcoming World Cup and beyond and hope that he continues to score plenty of runs for India.\"\r\n\r\nJay Shah, the BCCI secretary, added: \"We have a clear roadmap for Team India. Considering the workloads and ensuring that we have smooth transition, Mr Virat Kohli has decided to step down as T20I Captain after the upcoming World Cup. I have been in discussions with Virat and the leadership team for the last six months and the decision has been thought through. Virat will continue to contribute as a player and as a senior member of the side in shaping the future course of Indian cricket.\"\r\n\r\nKohli took over the T20I captaincy from MS Dhoni in 2017, with his first series being the three T20Is against England in January-February 2017 which India won 2-1. Till date, Kohli has led India in 45 matches, with 29 wins (including two Super Over victories against New Zealand in January 2020), 14 losses and two no results. The upcoming event in UAE will be Kohli\'s first and only captaincy assignment for India in a T20 World Cup.\r\n\r\nKohli, who is the leading run-getter in T20Is and the only men\'s cricketer to cross 3000 T20I runs, averages 48.45 as T20I captain, with 12 half-centuries including a career-best of 94 not out against West Indies in December 2019 as India chased down 208 in this game.\r\n\r\nBut of late, Kohli\'s captaincy in the T20 format has been a hotbed of discussions, and the presence of an alternative in Rohit Sharma, who\'s led Mumbai Indians to five IPL title wins since 2013, has only added fuel to fire. Kohli has been the captain of Royal Challengers Bangalore from 2013 and under his leadership, the team\'s best finish was during the 2016 season when they finished runners-up after losing to Sunrisers Hyderabad in the final. Royal Challengers finished eighth in 2017 and 2019 while they were seventh in 2014 and sixth in 2018.\r\n\r\nThe T20I World Cup starts on October 17 with the Group phase matches in Oman. India open their campaign with the game against Pakistan in Dubai on October 24.', 'Pranav vadnere', 'featured', '2021-09-16'),
(31, 'What Kind of Blogger Do You Want to Be?', 'Congratulations, you’ve decided that you want to enter the blogosphere and dive into the fun, new hobby of blogging! There are so many steps to follow and processes to understand that you may be feeling a little overwhelmed. Rather than jump feet first in', 'The Pranav vadnere', 'featured', '2021-09-17'),
(33, 'Kohli stepping down - A decision in the offing for months', 'As much as it came as a shock to the cricketing world, Virat Kohli\'s decision to step down from T20I captaincy seemingly did not come as a surprise for many within the BCCI, with the decision being in the works many months prior to the actual announcement', 'Pranav vadnere', 'promo', '2021-09-17'),
(35, '1st ODI: New Zealand team refuses to travel to stadium in Pakistan on security concerns, says sources', 'SLAMABAD: New Zealand\'s cricket team refused to travel on Friday to the stadium in Rawalpindi where they were due to to play the first one-day international against Pakistan, citing security concerns, two Pakistani officials said.\r\n\"Our security officials', 'times of india', 'featured', '2021-09-17'),
(36, 'No public transport, 6-day quarantine, squad size of 30 - BCCI to state associations', 'The Board of Control for Cricket in India (BCCI) has advised the state teams participating in the domestic championships to avoid public transport and restrict the size of their squad. In a detailed communications to the state associations, seen by Cricbuzz, the BCCI has asked the teams to have a maximum of 30 members with only 20 players and 10 support staff members.\r\n\r\n\"Each team is encouraged to have a team physician to manage COVID related issues,\" an elaborate BCCI advisory said, adding, \"Use of public transport viz. share rides (Uber, Ola, etc), trains, local bus network, etc is strictly prohibited during the tournament.\" The domestic season starts later this year in different centres and will run almost till April.\r\n\r\nThe BCCI also has an advisory on match fee. The note reads, \"20 players will be eligible for Match fee (Playing XI will be eligible for 100 per cent while the remaining 9 will be entitled for 50 per cent). In case where a Team India cricketer is deputed by the BCCI to participate in domestic cricket, he or she will be eligible for match fee over and above the 20 players based on Playing XI and non-Playing XI status in the matches.\"\r\nThe Board of Control for Cricket in India (BCCI) has advised the state teams participating in the domestic championships to avoid public transport and restrict the size of their squad. In a detailed communications to the state associations, seen by Cricbuzz, the BCCI has asked the teams to have a maximum of 30 members with only 20 players and 10 support staff members.\r\n\r\n\"Each team is encouraged to have a team physician to manage COVID related issues,\" an elaborate BCCI advisory said, adding, \"Use of public transport viz. share rides (Uber, Ola, etc), trains, local bus network, etc is strictly prohibited during the tournament.\" The domestic season starts later this year in different centres and will run almost till April.\r\n\r\nThe BCCI also has an advisory on match fee. The note reads, \"20 players will be eligible for Match fee (Playing XI will be eligible for 100 per cent while the remaining 9 will be entitled for 50 per cent). In case where a Team India cricketer is deputed by the BCCI to participate in domestic cricket, he or she will be eligible for match fee over and above the 20 players based on Playing XI and non-Playing XI status in the matches.\"\r\n\r\n\r\nThe Board of Control for Cricket in India (BCCI) has advised the state teams participating in the domestic championships to avoid public transport and restrict the size of their squad. In a detailed communications to the state associations, seen by Cricbuzz, the BCCI has asked the teams to have a maximum of 30 members with only 20 players and 10 support staff members.\r\n\r\n\"Each team is encouraged to have a team physician to manage COVID related issues,\" an elaborate BCCI advisory said, adding, \"Use of public transport viz. share rides (Uber, Ola, etc), trains, local bus network, etc is strictly prohibited during the tournament.\" The domestic season starts later this year in different centres and will run almost till April.\r\n\r\nThe BCCI also has an advisory on match fee. The note reads, \"20 players will be eligible for Match fee (Playing XI will be eligible for 100 per cent while the remaining 9 will be entitled for 50 per cent). In case where a Team India cricketer is deputed by the BCCI to participate in domestic cricket, he or she will be eligible for match fee over and above the 20 players based on Playing XI and non-Playing XI status in the matches.\"\r\n\r\n\r\nThe Board of Control for Cricket in India (BCCI) has advised the state teams participating in the domestic championships to avoid public transport and restrict the size of their squad. In a detailed communications to the state associations, seen by Cricbuzz, the BCCI has asked the teams to have a maximum of 30 members with only 20 players and 10 support staff members.\r\n\r\n\"Each team is encouraged to have a team physician to manage COVID related issues,\" an elaborate BCCI advisory said, adding, \"Use of public transport viz. share rides (Uber, Ola, etc), trains, local bus network, etc is strictly prohibited during the tournament.\" The domestic season starts later this year in different centres and will run almost till April.\r\n\r\nThe BCCI also has an advisory on match fee. The note reads, \"20 players will be eligible for Match fee (Playing XI will be eligible for 100 per cent while the remaining 9 will be entitled for 50 per cent). In case where a Team India cricketer is deputed by the BCCI to participate in domestic cricket, he or she will be eligible for match fee over and above the 20 players based on Playing XI and non-Playing XI status in the matches.\"', 'pranav vadnere', 'featured', '2021-09-17'),
(38, 'The prathamesh Vadnere', 'Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham  Hi This is Pratham fffsdfsdfs', 'pratham Vadnere', 'featured', '2021-09-17'),
(39, 'Qwerty', 'qwqwqwq', 'qwqwq', 'featured', '2021-09-27'),
(40, 'IPL 2021 Restarts in UAE', 'Mumbai Indians can\'t find a win in UAE from last 3 matches..', 'pranav vadnere', 'promo', '2021-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'pranavvadnere', 'pranav@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
