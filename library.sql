-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2018 at 11:40 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` tinyint(6) UNSIGNED NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(20) NOT NULL DEFAULT 'bookDefault.jpg',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `description`, `image_name`, `date_created`) VALUES
(4, 'Harry Potter and the Philosopher\'s Stone', 'J K Rowling', 'Harry Potter has been living an ordinary life, constantly abused by his surly and cold aunt and uncle, Vernon and Petunia Dursley and bullied by their spoiled son Dudley since the death of his parents ten years prior. His life changes on the day of his eleventh birthday when he receives a letter of acceptance into a Hogwarts School of Witchcraft and Wizardry, delivered by a half-giant named Rubeus Hagrid after previous letters had been destroyed by Harry’s Uncle Vernon and his Aunt Petunia. Hagrid explains Harry\'s hidden past as the wizard son of James and Lily Potter, who were a wizard and witch respectively, and how they were murdered by the most evil and powerful dark wizard of all time, Lord Voldemort, which resulted in the one-year-old Harry being sent to live with his aunt and uncle. The strangest bit of the murder was how Voldemort was unable to kill him, but instead had his own powers removed and blasted away, sparking Harry\'s immense fame among the magical community.', '5bc514dad6863.jpg', '2018-10-15 22:29:46'),
(5, 'Harry Potter and the Chamber of Secrets', 'J K Rowling', 'On Harry Potter\'s twelfth birthday, the Dursley family—Harry\'s uncle Vernon, aunt Petunia, and cousin Dudley—hold a dinner party for a potential client of Vernon\'s drill-manufacturing company. Harry is not invited, but is content to spend the evening quietly in his bedroom, although he is confused why his school friends have not sent cards or presents. However, when he goes to his room, a house-elf named Dobby warns him not to return to Hogwarts and admits to intercepting Harry\'s post from his friends. Having failed to persuade Harry to voluntarily give up his place at Hogwarts, Dobby then attempts to get him expelled by using magic to smash Petunia\'s dessert on a dinner party guest and framing it on Harry, who is not allowed to use magic out of school. Uncle Vernon\'s business deal falls through, but Harry is given a second chance from the Ministry of Magic, and allowed to return at the start of the school year.', '5bc5154044690.jpg', '2018-10-15 22:31:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_name` (`image_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` tinyint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
