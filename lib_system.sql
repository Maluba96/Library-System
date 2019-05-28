-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2019 at 11:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` varchar(20) NOT NULL,
  `name_id` int(11) NOT NULL,
  `writers` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `categories` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `book_condition` varchar(6) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_names`
--

CREATE TABLE `book_names` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Fiction'),
(2, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `id` int(20) NOT NULL,
  `book_id` varchar(20) NOT NULL,
  `member_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `returned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `junct_categories_books`
--

CREATE TABLE `junct_categories_books` (
  `book_id` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `junct_writers`
--

CREATE TABLE `junct_writers` (
  `book_id` varchar(20) NOT NULL,
  `writer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `junc_users_issued_books`
--

CREATE TABLE `junc_users_issued_books` (
  `issued_book_id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members_list`
--

CREATE TABLE `members_list` (
  `id` int(20) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `nrc_number` varchar(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `joined` date NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `writers` (`writers`),
  ADD KEY `name_id` (`name_id`),
  ADD KEY `categories` (`categories`);

--
-- Indexes for table `book_names`
--
ALTER TABLE `book_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `junct_categories_books`
--
ALTER TABLE `junct_categories_books`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `junct_writers`
--
ALTER TABLE `junct_writers`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `junc_users_issued_books`
--
ALTER TABLE `junc_users_issued_books`
  ADD KEY `book_id` (`issued_book_id`),
  ADD KEY `member_id` (`user_id`);

--
-- Indexes for table `members_list`
--
ALTER TABLE `members_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_names`
--
ALTER TABLE `book_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`name_id`) REFERENCES `book_names` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD CONSTRAINT `issued_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`ISBN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `issued_books_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members_list` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `junct_categories_books`
--
ALTER TABLE `junct_categories_books`
  ADD CONSTRAINT `junct_categories_books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`ISBN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `junct_categories_books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `junct_writers`
--
ALTER TABLE `junct_writers`
  ADD CONSTRAINT `junct_writers_ibfk_1` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `junct_writers_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`ISBN`) ON UPDATE CASCADE;

--
-- Constraints for table `junc_users_issued_books`
--
ALTER TABLE `junc_users_issued_books`
  ADD CONSTRAINT `junc_users_issued_books_ibfk_1` FOREIGN KEY (`issued_book_id`) REFERENCES `issued_books` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `junc_users_issued_books_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
