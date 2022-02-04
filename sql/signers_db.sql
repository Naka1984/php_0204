-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2022 at 10:09 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(19, '那珂　慎二', 's1008.c0720@ja2.so-net.ne.jp', '$2y$10$DSIH9AUNbKk/raK18mvDTO69xthdp6J4cVHs76U1acSERZVNn1Uzm'),
(20, '那珂　慎二', 's@a', '$2y$10$iY7xcV2FJYWxIoe2shCmt.rBhahBFIPKs0tEPFsaV4K3qUAFwpnOu'),
(21, '那珂　慎二', 's@qqq', '$2y$10$JJY3BfAFZRhAhz4Z5WVucORMKn9o1R/QTIJw/t/CZgIgqf3b3A9G.'),
(22, '那珂　慎二', 'a@ssa', '$2y$10$bnyt6jEU33xyOYafIXthv..0EJA.d0AunLe.3EZEhZwc3dl3fR16G'),
(23, '那珂　慎二', 's@we', '$2y$10$nwvPrXwrgOaqnS.pSXD1geMNDekdkq4tIQy4mecNNS7uIkAtAMN0i'),
(24, '那珂　慎二', 'ss@d', '$2y$10$A8IRHTiyTB7GmeWhZdWik.QudyD/a1a7i5Zru21PxWKPVLweqhApi'),
(25, '那珂　慎二', 's@ksk', '$2y$10$J3bJG8.eqcQ.e4Jc5aIK7ujsrRLs66q2BapdEYoPKG/CTFv86.KbK'),
(26, '那珂　慎二', 's@hgdh', '$2y$10$Qw5IIy3Vg4qiZ1RySVchveJKSi1Zl2rblIlBIlKgXsrOQfX2UxBMC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
