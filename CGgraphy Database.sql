-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2022 at 06:26 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cngraphy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcomment`
--

DROP TABLE IF EXISTS `blogcomment`;
CREATE TABLE IF NOT EXISTS `blogcomment` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `blogID` int(100) NOT NULL,
  `Comment` varchar(10000) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `blogID` (`blogID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcomment`
--

INSERT INTO `blogcomment` (`ID`, `blogID`, `Comment`, `Mail`) VALUES
(1, 12, 'Nice Content', 'chalana@gmail.com'),
(2, 11, 'Beautiful Capture', 'cc@gmail.com'),
(3, 11, 'Valuable', 'chalana@gmail.com'),
(4, 11, 'Keep it up', 'CK@gmail.com'),
(5, 12, 'nice', 'chalana@gmail.com'),
(6, 11, 'nice', 'chalana@gmail.com'),
(7, 11, 'Keep It Up', 'chalana@gmail.com'),
(8, 11, 'nice', 'chalana@gmail.com'),
(9, 11, 'nice', 'chalana@gmail.com'),
(10, 12, 'nice aaaaaaaa', 'chalana@gmail.com'),
(11, 12, 'Keep It Up', 'chalana@gmail.com'),
(12, 12, 'fsdfsd', 'chalana@gmail.com'),
(13, 12, 'Duck', 'chalana@gmail.com'),
(15, 11, 'Keep It Up', 'chalana@gmail.com'),
(16, 13, 'nice', 'chalana@gmail.com'),
(17, 13, 'good', 'k@gmail.com'),
(18, 13, 'lovely', 'k@gmail.com'),
(19, 12, 'llllllllll', 'chalana@gmail.com'),
(20, 12, 'Im Buddhila from srilanka', 'chalana@gmail.com'),
(21, 13, 'mmmm', 'chalana@gmail.com'),
(22, 11, 'Duck', 'chalana@gmail.com'),
(23, 13, 'Outstanding', 'chalana@gmail.com'),
(24, 11, 'good', 'chalana@gmail.com'),
(25, 13, 'Hello', 'chalana@gmail.com'),
(26, 12, 'Duck', 'cc@gmail.com'),
(27, 11, 'Awesome', 'CN@gmail.com'),
(28, 11, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'CN@gmail.com'),
(29, 20, 'Keep It Up', 'CN@gmail.com'),
(30, 13, 'Test', 'CN@gmail.com'),
(31, 11, 'test', 'cc@gmail.com'),
(32, 11, 'Hello', 'CN@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bloglikes`
--

DROP TABLE IF EXISTS `bloglikes`;
CREATE TABLE IF NOT EXISTS `bloglikes` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `blogID` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `blogID` (`blogID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloglikes`
--

INSERT INTO `bloglikes` (`ID`, `blogID`, `Email`) VALUES
(1, 11, 'k@gmail.com'),
(2, 12, 'chalana@gmail.com'),
(3, 13, 'chalana@gmail.com'),
(5, 13, 'k@gmail.com'),
(7, 12, 'k@gmail.com'),
(8, 20, 'CN@gmail.com'),
(9, 13, 'CN@gmail.com'),
(10, 11, 'CN@gmail.com'),
(11, 12, 'CN@gmail.com'),
(12, 20, 'chalana@gmail.com'),
(13, 11, 'chalana@gmail.com'),
(14, 11, 'cc@gmail.com'),
(15, 13, 'cc@gmail.com'),
(16, 12, 'cc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blogID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Article` longtext NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`blogID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogID`, `Title`, `Image`, `Article`, `Date`) VALUES
(11, 'Wildlife photography', '../Uploads/Article/DSC_0526.jpg', 'Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in their natural habitat.\r\n\r\nAs well as requiring photography skills, wildlife photographers may need field craft skills. For example, some animals and birds are difficult to approach and thus a knowledge of the animal\'s and birds behavior is needed in order to be able to predict its actions. Photographing some species may require stalking skills or the use of a hide/blind for concealment.\r\n\r\nWhile wildlife photographs can be taken using basic equipment, successful photography of some types of wildlife requires specialist equipment, such as macro In the early days of photography, it was difficult to get a photograph of wildlife due to slow lenses and the low sensitivity of photographic media.[2] Earlier photos of animals were often captive animals.[3][4] These included photos of lion cubs taken at the Bristol zoo in 1854 and in 1864, photos of the last Quagga by Frank Hayes.[5] Wildlife photography gained more traction when faster photography emulsions and quicker shutters came in the 1880s.[6] Developments like these lead to photos such as the ones taken by German Ottomar Anschutz in 1884, the first shots of wild birds in action.[6] In July 1906, National Geographic published its first wildlife photos.[7] The photos were taken by George Shiras III, a U.S. Representative from Pennsylvania. Some of his photos were taken with the first wire-tripped camera traps.[8][9] lenses for insects, long focal length lenses for birds and underwater cameras for marine life. However, a great wildlife photograph can involve a understanding of animal behavior.', '2022-06-12 18:37:51'),
(12, 'Nature Photography', '../Uploads/Article/DSC_0552.jpg', 'Nature photography is a wide range of photography taken outdoors and devoted to displaying natural elements such as landscapes, wildlife, plants, and close-ups of natural scenes and textures. Nature photography tends to put a stronger emphasis on the aesthetic value of the photo than other photography genres, such as photojournalism and documentary photography. [1]\r\n\r\n\"Nature photography\" overlaps the fields of—and is sometimes considered an overarching category including -- \"wildlife photography,\" \"landscape photography,\" and \"garden photography\".[1]\r\n\r\nNature photographs are published in scientific, travel and cultural magazines such as National Geographic Magazine, National Wildlife Magazine and Audubon Magazine or other more specific magazines such as Outdoor Photographer and Nature\'s Best Photography. Well known nature photographers include Ansel Adams, Eliot Porter, Frans Lanting, Galen Rowell, and Art Wolfe.\r\n\r\n', '2022-06-12 18:47:52'),
(13, 'Birds', '../Uploads/Article/10.jpg', 'Birds are a group of warm-blooded vertebrates constituting the class Aves /, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton. Birds live worldwide and range in size from the 5.5 cm (2.2 in) bee hummingbird to the 2.8 m (9 ft 2 in) ostrich. There are about ten thousand living species, more than half of which are passerine, or \"perching\" birds. Birds have wings whose development varies according to species; the only known groups without wings are the extinct moa and elephant birds. Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in some birds, including ratites, penguins, and diverse endemic island species. The digestive and respiratory systems of birds are also uniquely adapted for flight. Some bird species of aquatic environments, particularly seabirds and some waterbirds, have further evolved for swimming.\r\n\r\nBirds are feathered theropod dinosaurs and constitute the only known living dinosaurs. Likewise, birds are considered reptiles in the modern cladistic sense of the term, and their closest living relatives are the crocodilians. Birds are descendants of the primitive avialans (whose members include Archaeopteryx) which first appeared about 160 million years ago (mya) in China. According to DNA evidence, modern birds (Neornithes) evolved in the Middle to Late Cretaceous, and diversified dramatically around the time of the Cretaceous–Paleogene extinction event 66 mya, which killed off the pterosaurs and all non-avian dinosaurs.[5]\r\n\r\nMany social species pass on knowledge across generations, which is considered a form of culture. Birds are social, communicating with visual signals, calls, and songs, and participating in such behaviours as cooperative breeding and hunting, flocking, and mobbing of predators. The vast majority of bird species are socially (but not necessarily sexually) monogamous, usually for one breeding season at a time, sometimes for years, and rarely for life. Other species have breeding systems that are polygynous (one male with many females) or, rarely, polyandrous (one female with many males). Birds produce offspring by laying eggs which are fertilised through sexual reproduction. They are usually laid in a nest and incubated by the parents. Most birds have an extended period of parental care after hatching.', '2022-06-12 18:56:16'),
(20, 'Nature', '../Uploads/Article/DSC_0111.jpg', 'This is a test', '2022-06-16 14:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Email` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `ImgID` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `Email`, `Image`, `Name`, `ImgID`, `Price`) VALUES
(53, 'chalana@gmail.com', '../Uploads/DSC_0059.jpg', 'Thin Leaves', 22, 5);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `ImgID` int(100) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` varchar(10) NOT NULL,
  PRIMARY KEY (`ImgID`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImgID`, `Title`, `Image`, `Category`, `Description`, `Price`) VALUES
(16, 'Yellow Flowers', '../Uploads/f-min.jpg', 'Landscape', 'asAS', '6 '),
(18, 'Yellow Leaf', '../Uploads/11.jpg', 'Landscape', 'weqw', '1'),
(20, 'Mountain', '../Uploads/DSC_0105.jpg', 'Landscape', 'qwew', '5'),
(21, 'Owl', '../Uploads/10.jpg', 'Landscape', 'asds', '2'),
(22, 'Thin Leaves', '../Uploads/DSC_0059.jpg', 'Landscape', 'sdf', '5'),
(23, 'Dead Tree', '../Uploads/DSC_0104.jpg', 'Landscape', 'dfsd', '6'),
(25, 'Yellow Bird', '../Uploads/DSC_0552.jpg', 'Landscape', 'sdsd', '7'),
(26, 'Bird Near Lake', '../Uploads/DSC_0526.jpg', 'Landscape', 'sdsd', '8'),
(27, 'Lake In Distance', '../Uploads/DSC_0133.jpg', 'Landscape', 'sdsd', '5'),
(29, 'Neon Light', '../Uploads/12.jpg', 'Landscape', 'Neon lights are a type of cold cathode gas-discharge light. A neon tube is a sealed glass tube with a metal electrode at each end, filled with one of a number of gases at low pressure. A high potential of several thousand volts applied to the electrodes ionizes the gas in the tube, causing it to emit colored light.', '5'),
(30, 'Waterfall', '../Uploads/DSC_0123.jpg', 'Landscape', 'Waterfall in distance', '4'),
(32, 'Path', '../Uploads/nmbn-min.jpg', 'Landscape', 'asasasa', '3'),
(34, 'Portrait', '../Uploads/jack-white-PI9PmOmk0ws-unsplash.jpg', 'Landscape', 'Not Mine', '3'),
(39, 'Road', '../Uploads/DSC_0035-min.jpg', 'Landscape', 'Road in the mountains', '5'),
(40, 'Bird on the tree', '../Uploads/DSC_0045-min.jpg', 'Wildlife', 'Bird on the top of the tree', '2'),
(41, 'Nature', '../Uploads/DSC_0111.jpg', 'Landscape', 'aaaaaaa', '6'),
(45, 'Cat', '../Uploads/DSC_0159.jpg', 'Landscape', 'Nature', '0');

-- --------------------------------------------------------

--
-- Table structure for table `imgcomment`
--

DROP TABLE IF EXISTS `imgcomment`;
CREATE TABLE IF NOT EXISTS `imgcomment` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `ImgID` int(100) NOT NULL,
  `Comment` varchar(10000) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ImgID` (`ImgID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgcomment`
--

INSERT INTO `imgcomment` (`ID`, `ImgID`, `Comment`, `Mail`) VALUES
(1, 20, 'Nice', 'k@gmail.com'),
(2, 20, 'Beautiful', 'CK@gmail.com'),
(3, 22, 'Good One', 'k@gmail.com'),
(4, 22, 'Keep it up', 'chalana@gmail.com'),
(5, 22, 'Good job', 'R@gmail.com'),
(6, 20, 'Outstanding', 'chalana@gmail.com'),
(7, 20, 'nice', 'chalana@gmail.com'),
(8, 20, 'good', 'chalana@gmail.com'),
(16, 20, 'nice', 'chalana@gmail.com'),
(18, 25, 'Keep It Up', 'chalana@gmail.com'),
(19, 25, 'fsdfsd', 'chalana@gmail.com'),
(20, 30, 'lovely', 'k@gmail.com'),
(21, 41, 'good', 'k@gmail.com'),
(22, 23, 'nice', 'chalana@gmail.com'),
(23, 23, 'ddddddd', 'chalana@gmail.com'),
(24, 40, 'Outstanding', 'chalana@gmail.com'),
(25, 39, 'Keep It Up', 'chalana@gmail.com'),
(26, 39, 'Duck', 'chalana@gmail.com'),
(27, 39, 'nice', 'chalana@gmail.com'),
(28, 16, 'good', 'chalana@gmail.com'),
(29, 34, 'Hello', 'chalana@gmail.com'),
(30, 16, 'nice', 'CN@gmail.com'),
(31, 34, 'Outstanding', 'CN@gmail.com'),
(32, 34, 'Outstanding', 'CN@gmail.com'),
(33, 34, 'Test', 'CN@gmail.com'),
(34, 41, 'Keep It Up', 'CN@gmail.com'),
(35, 32, 'Keep It Up', 'CN@gmail.com'),
(36, 29, 'nice', 'CN@gmail.com'),
(37, 45, 'Nice One', 'chalana@gmail.com'),
(38, 30, 'nice', 'RR@gmail.com'),
(39, 22, 'nice', 'chalana@gmail.com'),
(40, 32, 'nice', 'chalana@gmail.com'),
(41, 40, 'nice', 'cc@gmail.com'),
(42, 16, 'Nice One', 'naruto@gmail.com'),
(43, 16, 'Keep It Up', 'nilupul2001chalana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `imglike`
--

DROP TABLE IF EXISTS `imglike`;
CREATE TABLE IF NOT EXISTS `imglike` (
  `likeID` int(100) NOT NULL AUTO_INCREMENT,
  `ImgID` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`likeID`),
  KEY `ImgID` (`ImgID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imglike`
--

INSERT INTO `imglike` (`likeID`, `ImgID`, `Email`) VALUES
(1, 20, 'chalana@gmail.com'),
(2, 22, 'chalana@gmail.com'),
(3, 29, 'chalana@gmail.com'),
(5, 20, 'k@gmail.com'),
(7, 26, 'k@gmail.com'),
(10, 30, 'k@gmail.com'),
(11, 27, 'k@gmail.com'),
(13, 21, 'k@gmail.com'),
(16, 25, 'chalana@gmail.com'),
(17, 18, 'chalana@gmail.com'),
(18, 30, 'chalana@gmail.com'),
(19, 40, 'chalana@gmail.com'),
(20, 16, 'chalana@gmail.com'),
(22, 32, 'chalana@gmail.com'),
(23, 20, 'R@gmail.com'),
(24, 23, 'R@gmail.com'),
(25, 39, 'R@gmail.com'),
(27, 30, 'R@gmail.com'),
(28, 21, 'R@gmail.com'),
(29, 34, 'chalana@gmail.com'),
(30, 25, 'k@gmail.com'),
(31, 26, 'chalana@gmail.com'),
(33, 23, 'CN@gmail.com'),
(34, 39, 'CN@gmail.com'),
(35, 32, 'CN@gmail.com'),
(37, 41, 'chalana@gmail.com'),
(39, 45, 'chalana@gmail.com'),
(40, 39, 'RR@gmail.com'),
(41, 45, 'RR@gmail.com'),
(42, 23, 'chalana@gmail.com'),
(43, 40, 'cc@gmail.com'),
(44, 27, 'cc@gmail.com'),
(45, 16, 'N@gmail.com'),
(46, 26, 'N@gmail.com'),
(47, 25, 'naruto@gmail.com'),
(48, 16, 'naruto@gmail.com'),
(49, 16, 'nilupul2001chalana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

DROP TABLE IF EXISTS `paymentdetails`;
CREATE TABLE IF NOT EXISTS `paymentdetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(1000) NOT NULL,
  `Number` int(100) NOT NULL,
  `Date` date NOT NULL,
  `CVV` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`ID`, `Email`, `Number`, `Date`, `CVV`) VALUES
(6, 'cc@gmail.com', 56465, '2022-06-02', 908),
(5, 'cc@gmail.com', 56465, '2022-06-02', 908),
(4, 'chalana@gmail.com', 56465, '2022-06-10', 564),
(7, 'cc@gmail.com', 234234, '2022-06-24', 657),
(8, 'cc@gmail.com', 234234, '2022-06-24', 657),
(9, 'N@gmail.com', 34234345, '2022-06-30', 456),
(10, 'N@gmail.com', 34234345, '2022-06-30', 456),
(11, 'N@gmail.com', 234234, '2022-06-22', 678),
(12, 'N@gmail.com', 234234, '2022-06-22', 678),
(13, 'chalana@gmail.com', 234234, '2022-06-29', 456),
(14, 'chalana@gmail.com', 234234, '2022-06-29', 456),
(15, 'chalana@gmail.com', 234234, '2022-06-23', 234),
(16, 'chalana@gmail.com', 234234, '2022-06-23', 234),
(17, 'chalana@gmail.com', 234234, '2022-06-22', 456),
(18, 'chalana@gmail.com', 234234, '2022-06-22', 456),
(19, 'chalana@gmail.com', 234234, '2022-06-28', 234),
(20, 'chalana@gmail.com', 234234, '2022-06-28', 234),
(21, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(22, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(23, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(24, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(25, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(26, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(27, 'nilupul2001chalana@gmail.com', 234234, '2022-06-29', 234),
(28, 'nilupul2001chalana@gmail.com', 234234, '2022-06-29', 234),
(29, 'nilupul2001chalana@gmail.com', 234234, '2022-06-28', 345),
(30, 'nilupul2001chalana@gmail.com', 234234, '2022-06-28', 345),
(31, 'nilupul2001chalana@gmail.com', 234234, '2022-06-28', 345),
(32, 'nilupul2001chalana@gmail.com', 234234, '2022-06-28', 345),
(33, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(34, 'chalana@gmail.com', 234234, '2022-06-21', 234),
(35, 'nilupul2001chalana@gmail.com', 234234, '2022-06-22', 456),
(36, 'nilupul2001chalana@gmail.com', 234234, '2022-06-22', 456),
(37, 'chalana@gmail.com', 234234, '2022-06-15', 345),
(38, 'chalana@gmail.com', 234234, '2022-06-15', 345),
(39, 'chalana@gmail.com', 234234, '2022-06-03', 567),
(40, 'chalana@gmail.com', 234234, '2022-06-03', 567),
(41, 'nilupul2001chalana@gmail.com', 234234, '2022-06-02', 456),
(42, 'nilupul2001chalana@gmail.com', 234234, '2022-06-02', 456),
(43, 'nilupul2001chalana@gmail.com', 234234, '2022-06-22', 234),
(44, 'nilupul2001chalana@gmail.com', 234234, '2022-06-22', 234);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
CREATE TABLE IF NOT EXISTS `purchase_details` (
  `PurchaseID` int(100) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `ImgID` int(50) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Date&Time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`PurchaseID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`PurchaseID`, `Email`, `ImgID`, `Price`, `Date&Time`) VALUES
(1, 'chalana@gmail.com', 34, '3', '2022-06-16 17:07:33'),
(2, 'chalana@gmail.com', 45, '0', '2022-06-16 17:23:00'),
(4, 'chalana@gmail.com', 25, '7', '2022-06-17 07:08:07'),
(5, 'chalana@gmail.com', 34, '3', '2022-06-17 07:11:22'),
(6, 'RR@gmail.com', 26, '8', '2022-06-17 18:25:15'),
(7, 'RR@gmail.com', 45, '0', '2022-06-17 18:25:34'),
(8, 'RR@gmail.com', 16, '6 ', '2022-06-17 18:25:42'),
(9, 'chalana@gmail.com', 34, '3', '2022-06-18 10:37:16'),
(10, 'chalana@gmail.com', 26, '8', '2022-06-19 06:44:46'),
(11, 'chalana@gmail.com', 20, '5', '2022-06-19 06:44:46'),
(12, 'cc@gmail.com', 21, '2', '2022-06-19 06:58:41'),
(13, 'cc@gmail.com', 45, '0', '2022-06-19 06:58:41'),
(14, 'cc@gmail.com', 16, '6', '2022-06-19 13:25:54'),
(15, 'cc@gmail.com', 18, '1', '2022-06-19 13:25:54'),
(16, 'cc@gmail.com', 25, '7', '2022-06-19 13:25:54'),
(17, 'N@gmail.com', 39, '5', '2022-06-19 13:29:18'),
(18, 'N@gmail.com', 16, '6', '2022-06-19 13:29:18'),
(19, 'N@gmail.com', 27, '5', '2022-06-19 13:33:30'),
(20, 'chalana@gmail.com', 25, '7', '2022-06-19 13:53:14'),
(21, 'chalana@gmail.com', 29, '5', '2022-06-19 14:01:06'),
(22, 'chalana@gmail.com', 20, '5', '2022-06-19 14:02:29'),
(23, 'chalana@gmail.com', 16, '6', '2022-06-19 14:04:48'),
(24, 'chalana@gmail.com', 41, '6', '2022-06-19 14:09:41'),
(26, 'chalana@gmail.com', 16, '6', '2022-06-19 14:21:37'),
(27, 'nilupul2001chalana@gmail.com', 25, '7', '2022-06-19 16:26:35'),
(28, 'chalana@gmail.com', 27, '5', '2022-06-19 19:20:44'),
(29, 'chalana@gmail.com', 27, '5', '2022-06-19 21:01:57'),
(30, 'nilupul2001chalana@gmail.com', 22, '5', '2022-06-19 21:03:11'),
(31, 'nilupul2001chalana@gmail.com', 25, '7', '2022-06-20 10:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PPic` varchar(1000) NOT NULL,
  `Post` varchar(30) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Email`, `Password`, `PPic`, `Post`) VALUES
(1, 'IT21711978', 'ASDad@SAS', '1111', '../Uploads/PPic/default.png', 'user'),
(2, 'IT21713262', 'k@gmail.com', '12345', '../Uploads/PPic/ab.jpg', 'user'),
(3, 'chalana cc', 'chalana@gmail.com', '1111', '../Uploads/PPic/Lovepik_com-611236404-Halloween cute ghost spooky illustration.png', 'user'),
(4, 'nilupul', 'N@gmail.com', '1234', '../Uploads/PPic/default.png', 'user'),
(5, 'Nilupul CN', 'cc@gmail.com', '2222', '../Uploads/PPic/default.png', 'user'),
(6, 'IT21711978', 'C@gmail.com', '1111', '../Uploads/PPic/default.png', 'user'),
(7, 'CC', 'dfgdf@df', '3333', '../Uploads/PPic/default.png', 'user'),
(8, 'Chalana Nilupul', 'CN@gmail.com', '2001', '../Uploads/PPic/Lovepik_com-610825835-Hand drawn cartoon small fresh cute crocodile.png', 'admin'),
(9, 'Kavi', 'CK@gmail.com', '12345', '../Uploads/PPic/Lovepik_com-610825835-Hand drawn cartoon small fresh cute crocodile.png', 'user'),
(10, 'IT21713262', 'senarathnacn@gmail.com', '1111', '../Uploads/PPic/default.png', 'user'),
(11, 'IT21713262', 'senaranacn@gmail.com', '2222', '../Uploads/PPic/default.png', 'user'),
(12, 'IT21713262', 'cnk@gmail.com', '444', '../Uploads/PPic/default.png', 'user'),
(13, 'Ransi', 'R@gmail.com', '5555', '../Uploads/PPic/DSC_0052.jpg', 'user'),
(15, 'IT21711978', 'senarathna@gmail.com', '123456', '../Uploads/PPic/default.png', 'admin'),
(17, 'RR', 'RR@gmail.com', '123456', '../Uploads/PPic/default.png', 'user'),
(29, 'sdsd', 'l@gmail.com', '222', '../Uploads/PPic/default.png', 'user'),
(19, 'Naruto', 'naruto@gmail.com', '200179', '../Uploads/PPic/default.png', 'user'),
(22, 'nilupul', 'TT@gmsil.com', '1234', '../Uploads/PPic/default.png', 'user'),
(33, 'Chalana', 'nilupul2001chalana@gmail.com', 'Chalana2001', '../Uploads/PPic/as.png', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD CONSTRAINT `blogcomment_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`blogID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bloglikes`
--
ALTER TABLE `bloglikes`
  ADD CONSTRAINT `bloglikes_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `blogs` (`blogID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imgcomment`
--
ALTER TABLE `imgcomment`
  ADD CONSTRAINT `imgcomment_ibfk_1` FOREIGN KEY (`ImgID`) REFERENCES `images` (`ImgID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imglike`
--
ALTER TABLE `imglike`
  ADD CONSTRAINT `imglike_ibfk_1` FOREIGN KEY (`ImgID`) REFERENCES `images` (`ImgID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
