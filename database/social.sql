-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 08:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--
CREATE DATABASE IF NOT EXISTS `social` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `social`;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--
-- Creation: Nov 20, 2019 at 10:12 PM
--

CREATE TABLE `genres` (
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `genres`:
--

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`name`) VALUES
('Games'),
('Jobs'),
('Memes'),
('Movies/Shows'),
('Music'),
('School'),
('Sience'),
('Technology');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--
-- Creation: Nov 22, 2019 at 11:53 AM
--

CREATE TABLE `posts` (
  `title` varchar(120) DEFAULT NULL,
  `post` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `writer` int(11) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `posts`:
--   `genre`
--       `genres` -> `name`
--   `writer`
--       `users` -> `id`
--

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`title`, `post`, `date`, `writer`, `genre`, `likes`, `id`) VALUES
('Adipiscing tristique risus nec feugiat in.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu feugiat pretium nibh ipsum. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Eleifend quam adipiscing vitae proin. Arcu felis bibendum ut tristique et. Egestas pretium aenean pharetra magna ac placerat. Elementum tempus egestas sed sed risus pretium. Platea dictumst vestibulum rhoncus est pellentesque. Odio pellentesque diam volutpat commodo sed egestas egestas. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Lorem donec massa sapien faucibus. Arcu non odio euismod lacinia at quis risus. Massa sed elementum tempus egestas sed.\r\n\r\nVolutpat ac tincidunt vitae semper quis lectus nulla at volutpat. Proin nibh nisl condimentum id venenatis a. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. At quis risus sed vulputate odio. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Morbi tincidunt ornare massa eget egestas purus viverra. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Volutpat maecenas volutpat blandit aliquam etiam erat velit. Vitae tempus quam pellentesque nec nam aliquam. Fermentum posuere urna nec tincidunt praesent semper. Eget aliquet nibh praesent tristique magna sit amet purus.', '2019-11-21 21:22:50', 1, 'Jobs', 62, 1),
('Ut morbi tincidunt augue interdum.', 'Semper eget duis at tellus at urna condimentum mattis. Maecenas ultricies mi eget mauris pharetra et ultrices. Sit amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Est lorem ipsum dolor sit. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Et ligula ullamcorper malesuada proin libero nunc. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Nec ullamcorper sit amet risus nullam. Posuere morbi leo urna molestie at elementum. Sit amet nulla facilisi morbi tempus iaculis urna id volutpat. Nec feugiat nisl pretium fusce id. Ac tincidunt vitae semper quis lectus nulla at. Velit egestas dui id ornare arcu odio.\r\n\r\nNec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Sed blandit libero volutpat sed cras ornare arcu. Diam maecenas sed enim ut sem viverra aliquet eget. Condimentum id venenatis a condimentum vitae sapien pellentesque. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi. Ornare aenean euismod elementum nisi quis eleifend. Fusce id velit ut tortor pretium viverra suspendisse. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Eu scelerisque felis imperdiet proin. Fringilla urna porttitor rhoncus dolor purus non enim praesent. Et leo duis ut diam quam nulla porttitor massa. Auctor elit sed vulputate mi. Habitant morbi tristique senectus et netus. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Mauris vitae ultricies leo integer malesuada. Mattis molestie a iaculis at. Tortor consequat id porta nibh venenatis cras sed felis eget. Nulla facilisi morbi tempus iaculis.', '2019-11-21 21:23:30', 2, 'Sience', 102, 2),
('Sed velit dignissim sodales ut eu sem integer vitae.', 'Rhoncus aenean vel elit scelerisque. Et pharetra pharetra massa massa ultricies mi. Vitae justo eget magna fermentum iaculis eu. Mauris ultrices eros in cursus. Urna nec tincidunt praesent semper feugiat. Velit egestas dui id ornare arcu. Vitae turpis massa sed elementum tempus egestas sed sed. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Diam maecenas ultricies mi eget mauris pharetra et ultrices neque. Faucibus ornare suspendisse sed nisi lacus sed. Duis at consectetur lorem donec. Ut faucibus pulvinar elementum integer enim neque. In nulla posuere sollicitudin aliquam ultrices sagittis. Tempus imperdiet nulla malesuada pellentesque elit. Gravida rutrum quisque non tellus orci ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. Amet mauris commodo quis imperdiet massa tincidunt.\r\n\r\nUt enim blandit volutpat maecenas volutpat blandit. Magna fringilla urna porttitor rhoncus dolor. Aliquam nulla facilisi cras fermentum odio eu feugiat. Ac tortor dignissim convallis aenean et tortor. Nec feugiat in fermentum posuere urna. Turpis massa sed elementum tempus. Faucibus turpis in eu mi bibendum neque. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Sed arcu non odio euismod lacinia at. Sem et tortor consequat id porta nibh. In metus vulputate eu scelerisque felis imperdiet proin.\r\n\r\nId aliquet lectus proin nibh nisl condimentum id venenatis a. Ultrices dui sapien eget mi proin sed libero enim sed. Senectus et netus et malesuada fames ac turpis egestas maecenas. Mauris commodo quis imperdiet massa tincidunt nunc. Risus sed vulputate odio ut enim blandit volutpat. Risus commodo viverra maecenas accumsan lacus. Adipiscing tristique risus nec feugiat in. Elit eget gravida cum sociis natoque penatibus et. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Eget duis at tellus at urna condimentum mattis. Nec ultrices dui sapien eget mi proin sed libero enim. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Mattis molestie a iaculis at erat pellentesque adipiscing. Netus et malesuada fames ac. At urna condimentum mattis pellentesque id nibh. Gravida rutrum quisque non tellus orci ac. Vel quam elementum pulvinar etiam non. Gravida cum sociis natoque penatibus et magnis dis parturient. Sit amet cursus sit amet dictum sit amet.', '2019-11-21 21:24:09', 3, 'School', 30, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Dec 29, 2019 at 01:35 PM
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`) VALUES
(1, 'DioBrando', 'roadrollerda@gmail.com', 'diopassword', 'assets/profiles/DioBrando.jpg'),
(2, 'EpsteinKilledHimself69', 'actuallyhedidnt@gmail.com', 'epsteinpassword', 'assets/profiles/Epstein.jpg'),
(3, 'PeaceWasNeverAnOption420', 'thoughwemaycounsiderit@gmail.com', 'peacepassword', 'assets/profiles/Peace.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK2` (`genre`),
  ADD KEY `writer` (`writer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`genre`) REFERENCES `genres` (`name`),
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`writer`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
