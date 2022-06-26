-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `image`, `role`) VALUES
(2, 'Mohamed El hosisny', '01117433885', 'm.m.m.elhossin@gmail.com', '123', 'mohamed-elhossin.png', 0),
(4, 'amira', '3894782190', 'amira@gmail.com', '1234', 'Gull_portrait_ca_usa.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `image` varchar(122) NOT NULL,
  `adminId` int(11) NOT NULL,
  `trackId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `link`, `image`, `adminId`, `trackId`, `levelId`) VALUES
(2, 'Web desgin', 'https://www.youtube.com/watch?v=nOroJh6qpqY&t=601s', 'CER_Course_F.jpg', 2, 1, 2),
(3, 'html', 'https://www.youtube.com/watch?v=q3yFo-t1ykw', 'admincase.png', 2, 2, 2),
(4, 'CSS', 'https://www.youtube.com/watch?v=nOroJh6qpqY&t=601s', 'Screenshot_2.png', 2, 2, 3),
(5, 'css', 'https://www.youtube.com/watch?v=q3yFo-t1ykw', 'Screenshot_2.png', 2, 2, 4),
(6, 'Javascript', 'https://www.youtube.com/watch?v=nOroJh6qpqY&t=601s', 'Screenshot_2.png', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `title`) VALUES
(2, 'biggener'),
(3, 'advanced'),
(4, 'middels');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `student_id`, `course_id`, `rate`) VALUES
(1, 1, 2, 2),
(2, 6, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `collage` varchar(22) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `collage`, `password`, `image`) VALUES
(1, 'Mohamed El hosisny', 'm.m.m.elhossin@gmail.com', '01117433885', 'BIS', '123', 'mohamed-elhossin.png'),
(2, 'Mohamed El hosisnysss', 'm.m.m.elhossin@gmail.com', '01117433885', 'BIS', '123', 'mohamed-elhossin.png'),
(3, 'ahmed tofiq', 'm.m.m.elhossin@gmail.com', '01117433885', 'BIS', '123', 'mohamed-elhossin.png'),
(5, 'Toma', 'mohamedaymanmoudy1@gmail.com', '01117433885', 'BIS', '123', ''),
(6, 'ahmed magdy yasser', 'ahmed@gmail.com', '0123213', 'BIS', '1234', 'Gull_portrait_ca_usa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trackes`
--

CREATE TABLE `trackes` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desciption` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackes`
--

INSERT INTO `trackes` (`id`, `title`, `desciption`) VALUES
(1, 'Full stack', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ipsum assumenda repellat magni nihil, iusto inventore quam eos a totam sint et. Vero, mollitia quaerat. Velit possimus expedita tenetur nostrum.'),
(2, 'Web desgin', 'How to create your site'),
(4, 'markting', 'how to learn markting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminId` (`adminId`),
  ADD KEY `trackId` (`trackId`),
  ADD KEY `levelId` (`levelId`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackes`
--
ALTER TABLE `trackes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trackes`
--
ALTER TABLE `trackes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`adminId`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `courses_ibfk_3` FOREIGN KEY (`trackId`) REFERENCES `trackes` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
