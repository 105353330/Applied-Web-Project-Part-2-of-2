-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2025 at 05:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `first_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `job_reference_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `other_skills` varchar(255) NOT NULL,
  `status` enum('New','Current','Final') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `reference_number` varchar(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `reporting_line` varchar(255) NOT NULL,
  `responsibilities` text NOT NULL,
  `requirements` text NOT NULL,
  `required_skills` text NOT NULL,
  `preferred_skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`reference_number`, `title`, `description`, `salary`, `reporting_line`, `responsibilities`, `requirements`, `required_skills`, `preferred_skills`) VALUES
('AAD67', 'Senior Software Engineer', 'Digital Services Victoria is seeking an experienced software engineer to join our team in Melbourne.', 120000, 'Will report to our Head of Software Engineering.', 'Writing programs using the html and css programming languages, Effectively leading a team of other software engineers, Management project requirements within a deadline, Making software related decisions based on efficiency and effectiveness principles', '', 'Exceptional leadership and interpersonal skills, Highly proficient knowledge of html and css languages, Bachelor degree in software engineering or similar course', '5+ years experiences within the software engineering industry,\r\nExperience in a project management role'),
('AAF21', 'Software Engineering Intern', 'Digital Services Victoria is seeking a software engineer to gain experience as a part of our team in Melbourne.', 0, 'Will report to a Software Engineering Team Leader', 'Writing programs using the html and css programming languages, Following instructions from management, Conducting research as a basis for projects, Learning how to work in a professional industry', '', 'A willingness to learn new skills,\r\nMust have completed year 12 or equivalent studies,\r\nA passion for software engineering', 'Some knowledge of html and css languages,\r\nExperience in computer science, software engineering or related industries');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`reference_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
