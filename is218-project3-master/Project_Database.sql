--
-- Database: `yz746`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--
USE `bcn3_proj`;

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE  `accounts` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `fname`, `lname`, `birthday`, `password`) VALUES
(1, 'mjlee@njit.edu', 'Mike', 'Lee', '2000-05-05', '1234'),
(2, 'janedoe@njit.edu', 'John', 'Doe', '1950-07-07', '1234'),
(3, 'ml4q73@njit.edu', NULL, NULL, '1950-07-07', '1'),
(4, 'ml24q73@njit.edu', '1', '1', '2000-01-01', '2'),
(5, 'ml241q73@njit.edu', '1', '1', '1991-01-01', '1'),
(6, 'js829', '', '', '2000-01-01', '123'),
(7, 'test@njit.edu', 'yong', 'zhao', '2000-02-02', '1234'),
(8, 'Rebecca@gmail.com', 'Rebecca', 'cortes', '1900-03-03', 'cortes'),
(9, '', '', '', '1980-12-05', ''),
(10, 'test@gmail.com', 'test', 'test', '1980-12-05', 'test'),
(11, 'test2@gmail.com', 'test', 'test', '1980-12-05', 'test'),
(12, 'mjlee@njit.edu0', 'yong', 'yong', '1980-12-05', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--
DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owneremail` varchar(60) DEFAULT NULL,
  `ownerid` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `title` text,
  `body` text,
  `skills` text,
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `owneremail`, `ownerid`, `createddate`, `title`, `body`, `skills`, `score`) VALUES
(1, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', 'This is test #B', 'Question Text Here', 'PHP', 0),
(2, 'mjlee@njit.edu', 1, '2017-05-03 00:00:00', 'new name 2', 'What is PHP?', 'PHP, Programming', 0),
(3, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', 'This is test #A', 'How to HTML?', 'HTML, CSS', 0),
(4, 'mjlee@njit.edu', 1, '2017-05-03 00:00:00', 'test again', 'Question Text Here', 'Manual Testing', 0),
(5, 'mjlee@njit.edu', 1, '2017-05-07 00:00:00', '1111', 'Pew Pew Pew Lasers Pew', 'Science Fiction', 0),
(6, 'test@gmail.com', 13, '2019-10-20 00:00:00', 'HELLO', 'How to If Statement?', 'Programming', 0);
