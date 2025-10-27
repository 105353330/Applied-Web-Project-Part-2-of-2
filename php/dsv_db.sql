-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2025 at 02:00 AM
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
-- Database: `dsv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `project1_contribution` text NOT NULL,
  `project2_contribution` text NOT NULL,
  `quote` text NOT NULL,
  `language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `student_id`, `role`, `project1_contribution`, `project2_contribution`, `quote`, `language`) VALUES
(1, 'Shehan Ariyarathna', '105305593', 'Index php\r\nAbout php\r\nHeader, Nav and Footer inc', 'Developed About and Index pages with responsive design and accessibility improvements for Project 1.', 'Converted about.html and index.html into dynamic PHP pages (about.php and index.php). Added modular header.inc, nav.inc, and footer.inc files and linked CSS for accessibility and SEO.', '“Less is more.”', 'English, Sinhala'),
(2, 'Patrick Ward', '105353330', 'Jobs php\r\nProcess_eoi php\r\nCss Styling', 'Built Jobs page with position listings and navigation integration in Project 1.', 'Converted jobs.html into jobs.php, implemented process_eoi.php to handle Expression of Interest submissions, and integrated MySQL database with validation and security.', '“Keep it simple.”', 'English, Francias'),
(3, 'Christopher Katsoulis', '105924338', 'Apply php\r\nManage php', 'Created Apply page and Css style for Apply page Project 1.', 'Converted apply.html  into apply.php and add manage php and implemented database connections, and validated forms for EOI and admin management functionality.', '“Nice and calm.”', 'English, Greek');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
