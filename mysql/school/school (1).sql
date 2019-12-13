-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 04:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `course_room` varchar(50) NOT NULL,
  `course_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `course_room`, `course_status`) VALUES
(1, 'Web Development', 'Course: Web Development\r\n- Bootstrap Framework (Fast UI Design)\r\n- GIT (Version Control System)\r\n- PHP (Server Side Scripting)  and MySQL (Database Management System)\r\n- Object Oriented Programming Concepts using PHP', 'G6', 'A'),
(2, 'Web Design', 'Course: Web Design\r\n- HTML and CSS advanced\r\n- Adobe Photoshop for web design (mockup)\r\n- Adobe XD (basic prototype and use)\r\n- Javascript and Jquery (this is a PLUS)', 'G2', 'A'),
(3, 'Web Basic', 'Course: Web Basic\r\n- Adobe Photoshop\r\n- WordPress Lesson\r\n- HTML and CSS\r\n', 'G1', 'A'),
(4, 'Speaking English for Dummies', 'Speaking English', 'G4', 'A'),
(5, 'Travel English Buddies', 'Travel English', 'G9', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(50) NOT NULL,
  `student_lastname` varchar(50) NOT NULL,
  `student_address` text NOT NULL,
  `student_birthday` date NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `student_status` char(1) NOT NULL DEFAULT 'E'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_address`, `student_birthday`, `student_email`, `student_photo`, `student_status`) VALUES
(1, 'Christian', 'Barral, jr', 'Sitio Tahna Tisa Cebu City Philippines', '1994-07-02', 'christianbarral0794@gmail.com', '', 'E'),
(2, 'Kim Brian', 'Manalo', 'Tagbilaran, Bohol Philippines', '1994-07-02', 'kimbrianbarral@gmail.com', '', 'D'),
(3, 'Jacinth Cedric', 'Barral', 'San Francisco, LA, USA', '2019-07-02', 'jc_04@gmail.com', '', 'E'),
(4, 'Mary Grace', 'Castro', 'Cebu City Philippines', '1994-09-09', 'marygrace@gmail.com', '', 'E'),
(5, 'Aika', 'Villarojo', 'Tisa Cebu City', '1994-09-10', 'aikamazing@gmail.com', '', 'E'),
(6, 'Takayuki', 'Miyamoto', 'Tokyo Japan', '1994-10-10', 'takayukikun@gmail.com', '', 'E'),
(7, 'Keirby', 'Giangan', 'Talamban Cebu', '1995-10-10', 'kierby@gmail.com', '', 'E'),
(8, 'Keisha', 'Sato', 'Metro Manila', '2019-07-01', 'keishasato@gmail.com', '../images/female1-512.png', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `studyload`
--

CREATE TABLE `studyload` (
  `studyload_no` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `studyload_date_created` date NOT NULL,
  `studyload_date_approved` date DEFAULT NULL,
  `studyload_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studyload`
--

INSERT INTO `studyload` (`studyload_no`, `student_id`, `course_id`, `teacher_id`, `studyload_date_created`, `studyload_date_approved`, `studyload_status`) VALUES
(1, 1, 2, 2, '2019-07-17', NULL, 'A'),
(2, 1, 1, 3, '2019-07-18', NULL, 'A'),
(3, 1, 3, 4, '2019-07-18', NULL, 'A'),
(4, 3, 3, 1, '2019-07-18', NULL, 'A'),
(5, 3, 1, 3, '2019-07-18', NULL, 'A'),
(6, 1, 4, 4, '2019-07-19', NULL, 'A'),
(7, 4, 1, 1, '2019-07-19', NULL, 'A'),
(8, 5, 1, 3, '2019-07-19', NULL, 'A'),
(9, 6, 3, 1, '2019-07-19', NULL, 'A'),
(10, 7, 4, 5, '2019-07-19', NULL, 'A'),
(11, 5, 3, 5, '2019-07-19', NULL, 'A'),
(12, 4, 2, 2, '2019-07-19', NULL, 'A'),
(13, 3, 4, 2, '2019-07-19', NULL, 'A'),
(14, 7, 1, 1, '2019-07-19', NULL, 'A'),
(15, 5, 4, 1, '2019-07-19', NULL, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_firstname` varchar(50) NOT NULL,
  `teacher_lastname` varchar(50) NOT NULL,
  `teacher_specialization` varchar(50) NOT NULL,
  `teacher_address` text NOT NULL,
  `teacher_birthday` date NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `teacher_specialization`, `teacher_address`, `teacher_birthday`, `teacher_email`, `teacher_status`) VALUES
(1, 'Christian', 'Barral', 'Web Development', 'Tisa, Cebu City', '1995-07-02', 'christianbarral0794@gmail.com', 'A'),
(2, 'Richard', 'Real', 'AI and Python', 'Bacolod, Negros Oriental', '1994-06-09', 'richard.rr@gmail.com', 'A'),
(3, 'Richell', 'Bacus', 'Full Stack Development', 'Basak, Lapu-lapu City', '1992-06-02', 'richellbacus@gmail.com', 'A'),
(4, 'John', 'Inso', 'Web Basic', 'Bulacao Pardo, Cebu City', '1992-01-20', 'johninso@gmail.com', 'A'),
(5, 'Benney', 'Ong', 'Technical Specialist', 'Dalaguete Cebu', '1995-10-10', 'benneyong@gmail.com', 'A'),
(6, 'Kurt John', 'Mojado', 'Web Development', 'This is an address', '1885-10-10', 'kurjiohnmojado@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_login_name` varchar(50) NOT NULL,
  `user_login_pass` varchar(100) NOT NULL,
  `user_type` char(1) NOT NULL,
  `user_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_no`, `user_id`, `user_login_name`, `user_login_pass`, `user_type`, `user_status`) VALUES
(1, 1, 'christian.barral, jr', 'student12345', 'S', 'A'),
(2, 0, 'christian.barral123', 'teacher12345', 'A', 'A'),
(3, 2, 'richard.real', 'teacher12345', 'T', 'A'),
(4, 3, 'richell.bacus', 'teacher12345', 'T', 'A'),
(5, 4, 'john.inso', 'teacher12345', 'T', 'A'),
(6, 3, 'jacinth cedric.barral', 'student12345', 'S', 'A'),
(7, 1, 'christian.barral', 'teacher12345', 'T', 'A'),
(8, 4, 'mary grace.castro', 'student12345', 'S', 'A'),
(9, 5, 'aika.villarojo', 'student12345', 'S', 'A'),
(10, 6, 'takayuki.miyamoto', 'student12345', 'S', 'A'),
(11, 7, 'keirby.giangan', 'student12345', 'S', 'A'),
(12, 5, 'benney.ong', 'teacher12345', 'T', 'A'),
(13, 6, 'kurt.john.mojado', 'teacher12345', 'T', 'A'),
(14, 8, 'keisha.sato', 'student12345', 'S', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `studyload`
--
ALTER TABLE `studyload`
  ADD PRIMARY KEY (`studyload_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studyload`
--
ALTER TABLE `studyload`
  MODIFY `studyload_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
