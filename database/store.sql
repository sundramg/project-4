-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 06:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `item_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `price`, `item_timestamp`) VALUES
(1, 'Canono Eos 500', 36000, '2020-04-27 03:02:25'),
(2, 'Sony Meta bone', 44999, '2020-04-27 03:02:25'),
(3, 'Nikon', 21999, '2020-04-27 03:02:25'),
(4, 'Minolta X-700', 17999, '2020-04-27 03:02:25'),
(5, 'Blue Silk shirt', 999, '2020-04-27 03:02:25'),
(6, 'stripped shirt', 799, '2020-04-27 03:02:25'),
(7, 'Check brown shirt', 1699, '2020-04-27 03:02:25'),
(8, 'Party Shirt', 1199, '2020-04-27 03:02:25'),
(9, 'Blue casual trouser', 1699, '2020-04-27 03:02:25'),
(10, 'Stripped trouser', 799, '2020-04-27 03:02:25'),
(11, 'Levis jeans', 2300, '2020-04-27 03:02:25'),
(12, 'Wrangler jeans', 1499, '2020-04-27 03:02:25'),
(13, 'Y&k Watch', 1299, '2020-04-27 03:02:25'),
(14, 'Apple Digital Watch', 9999, '2020-04-27 03:02:25'),
(15, 'Timex Analog Watch', 1200, '2020-04-27 03:02:25'),
(16, 'Bewell Watch', 1699, '2020-04-27 03:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(240) NOT NULL,
  `registration_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `contact`, `pass`, `cpass`, `registration_timestamp`) VALUES
(1, 'sundram gupta', 'sundramg70@gmail.com', '1234', '1234', '$2y$10$fnxOjJrWtm6e0OFQMB.AeOQLyUzEsw2vy3BOuDhnBdDpXZVwc0fyq', '$2y$10$lVj9kGYQlCkyHnsZx39DgeabfNQKYN.DyWwC2r85JquOTx3dZ/pLa', '2020-06-02 12:20:35'),
(2, 'rahul', 'raj@gmail.com', '123', '1234', 'Ü›ÛRÐMÂ\06ÛØ1>ÐU', 'Ü›ÛRÐMÂ\06ÛØ1>ÐU', '2020-06-05 05:27:20'),
(3, 'lgupta', 'l@gmail.com', 'sultanpur', '1234', '$2y$10$c1A/.F9AoD0eaLycCh9uVeXaDaKBsShvoykyfkRluFh4nHd7VbGbi', '$2y$10$xKD1IAR3ueTt7D6O2/lUreGNKWHvUG79KHFwbSWswA/CJgjoPJs2q', '2020-06-05 05:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_item`
--
ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_item`
--
ALTER TABLE `user_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
