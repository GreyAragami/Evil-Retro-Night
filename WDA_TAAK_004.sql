-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2015 at 11:50 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.6.8-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `AWD078`
--

-- --------------------------------------------------------

--
-- Table structure for table `COMMENTS`
--

CREATE TABLE IF NOT EXISTS `COMMENTS` (
  `id` int(10) unsigned NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ENTRIES`
--

CREATE TABLE IF NOT EXISTS `ENTRIES` (
  `id` int(10) unsigned NOT NULL,
  `TITLE` varchar(30) NOT NULL,
  `SUMMARY` varchar(100) NOT NULL,
  `CONTENT` varchar(1000) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ENTRIES`
--

INSERT INTO `ENTRIES` (`id`, `TITLE`, `SUMMARY`, `CONTENT`, `reg_date`) VALUES
(2, 'Nieuwe artiesten !', 'Nieuwe artiesten zijn nu zichtbaar in onze line-up sectie !', 'Morbi at est sit amet enim congue pretium. Aenean dignissim arcu in ipsum pellentesque, quis euismod arcu faucibus. Nam ac purus enim. Donec interdum ante in nisl pellentesque, cursus ullamcorper lacus finibus. Aenean consequat odio eu dolor pulvinar tincidunt. Integer auctor turpis vitae nibh aliquet volutpat. Mauris feugiat tortor at nisi laoreet condimentum. Nunc finibus congue justo, in pellentesque leo euismod nec. Vestibulum eleifend velit orci, non tincidunt massa accumsan vitae. Quisque Nam scelerisque tincidunt velit, id faucibus lacus porttitor sit amet. Nam quis lorem et lorem commodo faucibus eget ut mauris. Ut dolor magna, tincidunt a nibh sagittis, fermentum congue turpis. Aliquam in nisl a elit venenatis imperdiet sed sed sem. Integer aliquet arcu quis lacinia fringilla. Praesent nec tellus maximus, dictum est et, pharetra mi. Nullam in sodales ante. Nulla facilisi.\r\n\r\nNulla tristique scelerisque iaculis. Sed pretium nisi convallis sagittis egestas. Donec viverra tortor ', '2015-05-23 19:38:16'),
(3, 'Datum bekend !', 'De officiele datum is nu bekend !', 'Nam scelerisque tincidunt velit, id faucibus lacus porttitor sit amet. Nam quis lorem et lorem commodo faucibus eget ut mauris. Ut dolor magna, tincidunt a nibh sagittis, fermentum congue turpis. Aliquam in nisl a elit venenatis imperdiet sed sed sem. Integer aliquet arcu quis lacinia fringilla. Praesent nec tellus maximus, dictum est et, pharetra mi. Nullam in sodales ante. Nulla facilisi.\r\n\r\nNulla tristique scelerisque iaculis. Sed pretium nisi convallis sagittis egestas. Donec viverra tortor ut lacus aliquet, sed lacinia elit rhoncus. Curabitur venenatis urna sed est efficitur luctus. Aliquam porttitor placerat nisl sit amet imperdiet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc purus nunc, facilisis eu hendrerit sed, sagittis et dolor. Vestibulum finibus congue enim, ut tristique libero gravida vitae. Curabitur purus ligula, placerat a malesuada ac, tincidunt et enim. Pellentesque a quam ac metus viverra porttitor.', '2015-05-23 19:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `LINE_UP`
--

CREATE TABLE IF NOT EXISTS `LINE_UP` (
  `id` int(10) NOT NULL,
  `band_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LINE_UP`
--

INSERT INTO `LINE_UP` (`id`, `band_name`, `description`, `img`) VALUES
(7, 'Powerglove', 'Powerglove is an American instrumental-only power metal cover band. They are known to play metal cover versions of classic video game themes. The band is named after the Power Glove, a NES controller accessory.', 'http://upload.wikimedia.org/wikipedia/en/7/7f/Power_Glove_logo.jpg'),
(8, 'Lazerhawk', 'Garrett "Lazerhawk" Hays is an electronic music artist from Austin, United States.', 'https://m1.behance.net/rendition/modules/44092513/disp/43059ff9015ffa868a4b8f8f3b2b2b57.jpg'),
(9, 'Trevor Something', 'Not much is known about him, come and check him out !', 'https://f1.bcbits.com/img/a4048531311_10.jpg'),
(16, 'VHS Glitch', 'Music composer for games and visual media and independent Synthwave artist.', 'https://f1.bcbits.com/img/0002827476_10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
  `id` int(6) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`id`, `last_name`, `first_name`, `mail`, `reg_date`) VALUES
(2, 'Aragami', 'Grey', 'grey@aragami.com', '2015-05-24 03:46:56'),
(6, 'admin', 'admin', 'admin@admin.com', '2015-05-23 21:49:19'),
(7, 'Coubeaux', 'Loik', 'erenjager@outlook.be', '2015-05-23 22:50:58'),
(8, 'Paci', 'Laurie', 'shin-juu@hotmail.com', '2015-05-23 22:46:42'),
(9, 'Blehbleh', 'Bleh', 'eliasvanlangenhove@hotmail.com', '2015-05-23 22:54:09'),
(10, 'Lipinski', 'Thomas', 'thomas_lipinski@msn.com', '2015-05-23 23:02:16'),
(13, 'Descamps', 'Grey', 'grey.descamps@gmail.com', '2015-05-24 04:14:03'),
(14, 'ergergre', 'rregerge', 'grey@aragami.com', '2015-05-24 05:20:01'),
(15, 'Liveyns', 'Jelka', 'jelka.liveyns@gmail.com', '2015-05-24 10:37:03'),
(16, 'test', 'test', 'test@test.com', '2015-05-24 19:55:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMMENTS`
--
ALTER TABLE `COMMENTS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ENTRIES`
--
ALTER TABLE `ENTRIES`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `LINE_UP`
--
ALTER TABLE `LINE_UP`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ENTRIES`
--
ALTER TABLE `ENTRIES`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `LINE_UP`
--
ALTER TABLE `LINE_UP`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `COMMENTS`
--
ALTER TABLE `COMMENTS`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id`) REFERENCES `ENTRIES` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
