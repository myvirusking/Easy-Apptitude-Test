-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 03:29 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptitude`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(13, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `test_topic` varchar(30) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `corrected_questions` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `result` varchar(5) NOT NULL,
  `test_timing` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `test_topic`, `total_questions`, `corrected_questions`, `total_marks`, `obtained_marks`, `result`, `test_timing`, `user_id`) VALUES
(27, 'Web Technology', 5, 5, 50, 50, 'PASS', '2018-10-04 13:29:11', 13);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `each_carry` int(11) NOT NULL,
  `q1` varchar(250) NOT NULL,
  `q1_option1` varchar(50) NOT NULL,
  `q1_option2` varchar(50) NOT NULL,
  `q1_option3` varchar(50) NOT NULL,
  `q1_option4` varchar(50) NOT NULL,
  `q1_answer` varchar(50) NOT NULL,
  `q2` varchar(250) NOT NULL,
  `q2_option1` varchar(50) NOT NULL,
  `q2_option2` varchar(50) NOT NULL,
  `q2_option3` varchar(50) NOT NULL,
  `q2_option4` varchar(50) NOT NULL,
  `q2_answer` varchar(50) NOT NULL,
  `q3` varchar(250) NOT NULL,
  `q3_option1` varchar(50) NOT NULL,
  `q3_option2` varchar(50) NOT NULL,
  `q3_option3` varchar(50) NOT NULL,
  `q3_option4` varchar(50) NOT NULL,
  `q3_answer` varchar(50) NOT NULL,
  `q4` varchar(250) NOT NULL,
  `q4_option1` varchar(50) NOT NULL,
  `q4_option2` varchar(50) NOT NULL,
  `q4_option3` varchar(50) NOT NULL,
  `q4_option4` varchar(50) NOT NULL,
  `q4_answer` varchar(50) NOT NULL,
  `q5` varchar(250) NOT NULL,
  `q5_option1` varchar(50) NOT NULL,
  `q5_option2` varchar(50) NOT NULL,
  `q5_option3` varchar(25) NOT NULL,
  `q5_option4` varchar(50) NOT NULL,
  `q5_answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `topic`, `each_carry`, `q1`, `q1_option1`, `q1_option2`, `q1_option3`, `q1_option4`, `q1_answer`, `q2`, `q2_option1`, `q2_option2`, `q2_option3`, `q2_option4`, `q2_answer`, `q3`, `q3_option1`, `q3_option2`, `q3_option3`, `q3_option4`, `q3_answer`, `q4`, `q4_option1`, `q4_option2`, `q4_option3`, `q4_option4`, `q4_answer`, `q5`, `q5_option1`, `q5_option2`, `q5_option3`, `q5_option4`, `q5_answer`) VALUES
(1, 'Probability', 1, 'Tickets numbered 1 to 20 are mixed up and then a ticket is drawn at random. What is the probability that the ticket drawn has a number which is a multiple of 3 or 5?', '1/2', '2/5', '8/15', '9/20', '9/20', 'Three unbiased coins are tossed. What is the probability of getting at most two heads?', '8/8', '6/8', '7/8', '9/8', '7/8', 'A bag contains 4 white, 5 red and 6 blue balls. Three balls are drawn at random from the bag. The probability that all of them are red, is?', '2/91', '4/455', '2/455', '4/91', '2/91', 'In a class, there are 15 boys and 10 girls. Three students are selected at random. The probability that 1 girl and 2 boys are selected, is?', '19/46', '1040/2300', '1042/2300', '21/46', '21/46', 'From a pack of 52 cards, two cards are drawn together at random. What is the probability of both the cards being kings?', '5/1326', '1/221', '7/1326', '3/221', '1/221'),
(2, 'Time And Distance', 2, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', '6.2', '6.9', '7.2', '7.4', '7.2', '	\r\nThe ratio between the speeds of two trains is 7 : 8. If the second train runs 400 km in 4 hours, then the speed of the first train is?', '84.82', '97.2', '88', '87.5 ', '87.5 ', 'A man on tour travels first 160 km at 64 km/hr and the next 160 km at 80 km/hr. The average speed for the first 320 km of the tour is?', '35.55', ' 71.11', '66', '44.12', ' 71.11', '	\r\nA farmer travelled a distance of 61 km in 9 hours. He travelled partly on foot @ 4 km/hr and partly on bicycle @ 9 km/hr. The distance travelled on foot is?', '14', '15', '16', '17', '16', 'In covering a distance of 30 km, Abhay takes 2 hours more than Sameer. If Abhay doubles his speed, then he would take 1 hour less than Sameer. Abhay\'s speed is?', '4', '5', '6', '7', '5'),
(3, 'Technical', 5, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 'Field', 'What does the term PLC stand for?', 'Programmable Lift Computer', 'Program List Control', 'Programmable Logic Controller', 'Piezo Lamp Connector', 'Programmable Logic Controller', '	\r\n\'.INI\' extension refers usually to what kind of file?', 'Image file', 'System file', 'Hypertext related file', 'System file', 'System file', 'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 'Inernet', 'Interanet', 'Local Area Network', 'Wide Area Network', 'Local Area Network', ' 	\r\nIn what year was the \"@\" chosen for its use in e-mail addresses?', '1976', '1972', '1992', '1980', '1972'),
(4, 'Web Technology', 10, 'If you want to align text to the right side of an block element in a cascading style sheet (CSS) then which of the following property would you use? ', 'Right align', 'Justify', 'Left align', 'Text align', 'Text align', 'In a Javascript Application what function can be used to send messages to users requesting for an text input? ', 'Display()', 'Scan()', 'Prompt()', 'Alert()', 'Prompt()', 'With which element width attribute is not define?', 'input', 'textarea', 'img', 'object', 'textarea', 'JavaScript Code can be called by using?', 'head', 'head and body', 'title and head', ' All of the Above', 'head and body', 'If you echo a Boolean variable, the value FALSE displays as a .... and the value TRUE echoes as a ?', '0, 1', 'blank string, 2', ' empty variable, 1', 'blank string, 1', 'blank string, 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
