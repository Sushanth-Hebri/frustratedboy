-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 08:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_player`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `name`) VALUES
(1, 'Trending in India'),
(2, 'Hot hits'),
(3, 'Kannda hits'),
(4, 'Hindi Hits'),
(5, 'Mass Songs'),
(6, 'Romantic'),
(7, '90\'s Hit'),
(8, 'Hindi'),
(9, 'Punjabi'),
(10, 'Tamil'),
(11, 'Telugu'),
(12, 'Pop'),
(13, 'Indie'),
(14, 'pure kadhal'),
(15, 'Mood'),
(16, 'Party'),
(17, 'Devotional'),
(18, 'Decades'),
(19, 'Hip-Hop'),
(20, 'Chill'),
(21, 'K-pop'),
(22, 'Workout'),
(23, 'Indian Classical'),
(24, 'Instrumental'),
(25, 'New music Hindi'),
(26, 'Latest-kannada'),
(27, 'Latest-Hindi'),
(28, 'Latest-tamil'),
(29, 'Latest-Malayalam'),
(30, 'Bollywood-brook'),
(31, 'Bahubali-the-beginning'),
(32, 'Indie'),
(33, 'Geetha Govindam'),
(34, 'Arijit singh hits'),
(35, 'anirudh hits'),
(36, 'Moody Mix'),
(37, 'Romantic Mix'),
(38, 'Feel Good Hits'),
(39, 'Mass Hits'),
(40, 'indie-pop'),
(41, 'Kannada Hits'),
(42, 'Telugu and Tamil Mix'),
(43, 'Hindi Hits'),
(44, 'Tamil Hit'),
(45, 'Telugu Hits');

-- --------------------------------------------------------

--
-- Table structure for table `album_song`
--

CREATE TABLE `album_song` (
  `album_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album_song`
--

INSERT INTO `album_song` (`album_id`, `song_id`) VALUES
(1, 6),
(1, 15),
(1, 16),
(1, 28),
(1, 30),
(1, 33),
(2, 26),
(2, 33),
(3, 9),
(3, 14),
(3, 21),
(4, 3),
(4, 6),
(4, 11),
(4, 24),
(6, 1),
(6, 6),
(6, 11),
(6, 10),
(6, 16),
(6, 23),
(6, 20),
(6, 27),
(6, 28),
(6, 30),
(7, 32),
(7, 8),
(5, 57),
(9, 41),
(9, 46),
(10, 47),
(10, 68),
(17, 34),
(31, 35),
(31, 36),
(31, 37),
(31, 38),
(31, 39),
(11, 53),
(11, 54),
(12, 56),
(12, 10),
(12, 1),
(22, 52),
(22, 53),
(22, 57),
(22, 58),
(22, 59),
(35, 58),
(35, 52),
(36, 70),
(36, 69),
(36, 54),
(36, 55),
(36, 56),
(36, 57),
(36, 58),
(36, 59),
(36, 60),
(36, 61),
(36, 62),
(36, 63),
(36, 64),
(36, 65),
(36, 66),
(36, 67),
(36, 68),
(37, 40),
(37, 41),
(37, 42),
(37, 43),
(38, 44),
(38, 45),
(38, 46),
(38, 47),
(37, 48),
(37, 49),
(37, 50),
(39, 60),
(39, 59),
(39, 54),
(39, 48),
(39, 21),
(39, 24),
(39, 37),
(39, 53),
(5, 56),
(5, 55),
(5, 54),
(5, 53),
(40, 71),
(40, 72),
(40, 73),
(40, 74),
(40, 75),
(40, 76),
(40, 77),
(40, 78),
(40, 79),
(40, 80),
(40, 81),
(41, 20),
(41, 21),
(41, 18),
(41, 17),
(41, 14),
(41, 9),
(41, 43),
(41, 44),
(41, 62),
(41, 64),
(41, 66),
(41, 67),
(42, 41),
(42, 42),
(42, 46),
(42, 50),
(42, 52),
(42, 53),
(42, 54),
(42, 55),
(42, 56),
(42, 57),
(42, 60),
(42, 61),
(42, 65),
(42, 69),
(42, 70),
(43, 15),
(43, 13),
(43, 10),
(43, 6),
(43, 5),
(43, 3),
(43, 2),
(43, 1),
(43, 34),
(43, 39),
(43, 47),
(43, 48),
(43, 51),
(43, 77),
(43, 68),
(43, 71),
(43, 70),
(44, 33),
(45, 34);

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `liked_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`liked_id`, `email_id`) VALUES
(2, 'sushanthhebri336@gmail.com'),
(3, '19610sushanth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `liked_song`
--

CREATE TABLE `liked_song` (
  `liked_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `liked_song`
--

INSERT INTO `liked_song` (`liked_id`, `song_id`) VALUES
(2, 6),
(2, 28),
(2, 33),
(2, 39),
(3, 35),
(3, 39);

-- --------------------------------------------------------

--
-- Table structure for table `new_playlist_song`
--

CREATE TABLE `new_playlist_song` (
  `playlist_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_playlist_song`
--

INSERT INTO `new_playlist_song` (`playlist_id`, `song_id`, `email_id`) VALUES
(3, 33, '19610sushanth@gmail.com'),
(4, 33, 'subramanyal.vit@gmail.com'),
(5, 38, '19610sushanth@gmail.com'),
(5, 39, '19610sushanth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(11) NOT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `email_id`, `name`) VALUES
(1, 'sushanthhebri336@gmail.com', 'my fav'),
(2, 'kenny123@gmail.com', 'my favorite'),
(3, '19610sushanth@gmail.com', 'my fav'),
(4, 'subramanyal.vit@gmail.com', 'my favourite'),
(5, '19610sushanth@gmail.com', 'blissfull'),
(6, '19610sushanth@gmail.com', 'swe');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_temp`
--

CREATE TABLE `playlist_temp` (
  `playlist_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `title`, `artist`, `genre`) VALUES
(1, 'Agar Tum Saath ho', 'Arijith Singh', 'Melody'),
(2, 'Rockabye', 'Anne-Marie', 'pop'),
(3, 'Shiv_Tandav', 'Sachet Tandon', 'Devotional'),
(4, 'Dynamite', 'BTS', 'K-pop'),
(5, 'Pink Venom', 'BlackPink', 'K-pop'),
(6, 'Kesariya', 'Arijith Singh', 'Feel good'),
(7, 'Still loving you', 'Scorpions', 'Metal'),
(8, 'Ringa Ringa', 'Priya', 'Mass'),
(9, 'Kagadada doniyalli', 'Vasuki Vaibhav', 'Feeling'),
(10, 'Hum Tere Bin', 'Arijith Singh', 'Romantic'),
(11, 'Kanunna kalyanam', 'Anurag kulkarani', 'Emotional Drama'),
(12, 'kadhale Kadhale', 'Padmalatha', 'Feel good'),
(13, 'Bali bali ra bali', 'Kala Bhairava', 'Energetic'),
(14, 'Katheyonda helide', 'Ajineesh lokhnath', 'Ajineesh lokhnath'),
(15, 'Naatu Naatu', 'Vishal Mishra', 'Mass'),
(16, 'Mastaru Mastaru', 'Shwetha Mohan', 'Melody'),
(17, 'Sariyagi nenapide nanage', 'Armaan Malik', 'Feel good'),
(18, 'Ambari oorinalli', 'Soumya', 'Action'),
(19, 'D J tillu', 'Ram miriyala', 'Mass'),
(20, 'Paravashanadenu', 'Sonu nigam', 'Romantic'),
(21, 'Badava Rascal', 'Vasuki vaibhav', 'Mass'),
(22, 'aaj sajeya', 'Goldie Sohel', 'romance'),
(23, 'asal mein', 'Darshan Raval', 'Romance'),
(24, 'Bhool Bulaiyaa 2', 'Tanishk Bagchi', 'Party'),
(25, 'Bye', 'Aditya Bhardwaj', 'Chill'),
(26, 'Tu Aake Dekhle', 'King', 'Party'),
(27, 'Chaand Baaliyan', 'Aditya A', 'Calm'),
(28, 'Maan meri Jaan', 'King', 'Party'),
(29, 'Character Dheela 2.0', 'Neeraj Shridhar', 'Party'),
(30, 'Deewani', 'Sachet Tandon', 'Romance'),
(31, 'Desperado', 'Raghav, Tesher', 'Punk'),
(32, 'Ghodey Pe Sawar', 'Sireesha Bhagavatula', 'Old Bollywood'),
(33, 'kavalaa..', 'Shilpa Rao', 'catchy'),
(34, 'Jai shri Ram', 'Ajay-Atul', 'Devotional'),
(35, 'Mamatala talli', 'Surya-Yamini', 'telugu'),
(36, 'Jeva nadhi', 'Geetha Madhuri', 'telugu'),
(37, 'Dhirava', 'Ramya Behara,deepu', 'Goosebumps'),
(38, 'pacha Bottasi', 'Karthik,Damini', 'Love'),
(39, 'Manohari', 'Mohana Bhogaraju', 'Romantic'),
(40, 'Galiye', 'Sonu nigam', 'pure kadhal'),
(41, 'Inkem Inkem', 'Sid Sriram', 'pure kadhal'),
(42, 'Priyathama Priyatham', 'Chinmayi', 'pure kadhal'),
(43, 'Nithalli Nillalare', 'Shreya Goshal', 'pure kadhal'),
(44, 'Saluthillave', 'Shreya Goshal, Vijay Prakash', 'pure kadhal'),
(45, 'Yaare Yaare', 'Armaan Malik', 'pure kadhal'),
(46, 'Yenti Yenti', 'Chinmayi', 'pure kadhal'),
(47, 'Pal', 'Arijith Sing', 'Romantic'),
(48, 'Veeron ke Veer Aa', 'Adithi paul, Deepu', 'pure kadhal'),
(49, 'Theme of 3', 'Anirudh Ravichander', 'pure kadhal'),
(50, 'Apudo Ipudo', 'Siddarth', 'pure kadhal'),
(51, 'Dil Ko Karaar Aaya', 'Neha Kakkar,Yasser desai', 'pure kadhal'),
(52, 'Arambame', 'Anirudh Ravichander', 'Mass Hits'),
(53, 'Adheera', 'A.R. Rahman', 'Mass Hits'),
(54, 'Chola Chola', 'A.R. Rahman', 'Mass Hits'),
(55, 'Nane Oruven', 'Anirudh Ravichander', 'Mass Hits'),
(56, 'Ponni Nadhi', 'A.R. Rahman', 'Mass Hits'),
(57, 'Rise Of Shyam', 'Vishal Dadlani', 'Mass Hits'),
(58, 'Vikram', 'Anirudh Ravichander', 'Mass Hits'),
(59, 'Vikramadithyan', 'Bijibal', 'Mass Hits'),
(60, 'Yarenna Sonnalum', 'Kutle Khan and Anthony', 'Feel Good'),
(61, 'Chiru Chiru', 'Hari Charana and Tanvi', 'Feel Good'),
(62, 'Gaaliye', 'Sonu nigam', 'Feel Good'),
(63, 'Jeena Jeena', 'Shaan', 'Feel Good'),
(64, 'Madarangi', 'Rajesh Krishnan, Shreya Ghoshal', 'Feel Good'),
(65, 'Nee Yadalo', 'Yuvan Shankar Raj', 'Feel Good'),
(66, 'Sadha Ninna Kannali', 'Sonu Nigam and Shreya Goshal', 'Feel Good'),
(67, 'Thanthane ThandanThane', 'Karthik', 'Feel Good'),
(68, 'Tum Hi Ho', 'Arijit Singh', 'Feel Good'),
(69, 'Boomi Enna Suthude', 'Anirudh Ravichander', 'Feel Good'),
(70, 'Baliye Re', 'Sachet Tandon, Stebin Ben & Parampara Tandon', 'Feel Good'),
(71, 'Deewani Sachet', 'Sachet Tandon', 'Indi-pop'),
(72, 'Krishna Teri ho', 'Kinshuk Vaidya', 'Indi-pop'),
(73, 'Mohabbat', 'Amaal Malik', 'Indi-pop'),
(74, 'Pehli Baarish mein', 'Jubin Nautiyal', 'Indi-pop'),
(75, 'Danger industry', 'Arjun Kanungo', 'Indi-pop'),
(76, 'Baarishon ki dhun', 'Saaj Bhatt', 'Indi-pop'),
(77, 'Sanam aa gaya', 'Abhinav Shukla', 'Indi-pop'),
(78, 'Pehli pehli baar', 'Aamir Majid', 'Indi-pop'),
(79, 'Mahiye jinna', 'Darshan Raval', 'Indi-pop'),
(80, 'Baarish karde', 'Swati Mehul', 'Indi-pop');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email_id`, `password`, `birthdate`, `country`) VALUES
('19610sushanth@gmail.com', 'admin', '2023-07-07', 'Barbados'),
('as@d', 'asdf', '2008-10-21', 'Belgium'),
('df@fdf', '1234', '2023-07-27', 'Belarus'),
('fake@gmail.com', 'admis', '2023-07-05', 'Australia'),
('hebrisushma@gmail.com', 'ad', '2023-07-05', 'Barbados'),
('kenny123@gmail.com', 'admin', '2003-07-08', 'Iceland'),
('ok@gmail.com', 'asdf', '2023-07-22', 'Bangladesh'),
('subhash.cs21@gmail.com', 'admin', '2004-01-12', 'India'),
('subhash@gmail.com', 'user2', NULL, NULL),
('subramanyal.vit@gmail.com', 'admin', '2023-07-17', 'Bangladesh'),
('sushanth.cs21@bmsce.ac.in', 'admin', NULL, NULL),
('sushanthadmin@gmail.com', 'admin', '2004-03-02', 'India'),
('sushanthhebri336@gmail.com', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `album_song`
--
ALTER TABLE `album_song`
  ADD KEY `album_id` (`album_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`liked_id`);

--
-- Indexes for table `liked_song`
--
ALTER TABLE `liked_song`
  ADD UNIQUE KEY `unique_like_song` (`liked_id`,`song_id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `playlist_temp`
--
ALTER TABLE `playlist_temp`
  ADD PRIMARY KEY (`playlist_id`),
  ADD KEY `email_id` (`email_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `liked_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album_song`
--
ALTER TABLE `album_song`
  ADD CONSTRAINT `album_song_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `album_song_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `songs` (`song_id`);

--
-- Constraints for table `liked_song`
--
ALTER TABLE `liked_song`
  ADD CONSTRAINT `liked_song_ibfk_1` FOREIGN KEY (`liked_id`) REFERENCES `liked` (`liked_id`);

--
-- Constraints for table `playlist_temp`
--
ALTER TABLE `playlist_temp`
  ADD CONSTRAINT `playlist_temp_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `users` (`email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
