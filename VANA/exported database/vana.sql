-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2020 at 06:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vana`
--
CREATE DATABASE IF NOT EXISTS `vana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vana`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AdminIdentifier` int(3) NOT NULL AUTO_INCREMENT,
  `vanaAdminName` varchar(2000) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminIdentifier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminIdentifier`, `vanaAdminName`, `adminPassword`) VALUES
(1, 'kevin', 'kevinpassword');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductIdentifier` int(12) NOT NULL AUTO_INCREMENT,
  `Cost` double(10,2) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `StockAvailable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ProductIdentifier`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductIdentifier`, `Cost`, `Description`, `Name`, `StockAvailable`) VALUES
(1, 210.00, 'Our triple-whipped, creamy-luxurious, multi-purpose moisturiser is made from a premium blend of organic shea and mango butter and will nourish, protect and heal your hair and skin.', 'Everything Butter (100mls)', 1),
(2, 30.00, 'Our triple-whipped, creamy-luxurious, multi-purpose moisturiser is made from a premium blend of organic shea and mango butter and will nourish, protect and heal your hair and skin.', 'Everything Butter (5mls)', 1),
(3, 380.00, 'Our ultra-nourishing MakeMeCurly styling cream is suitable for thin, softer hair & thick, coarser hair and gives flexible medium hold and definition to your unique natural curl pattern for twist-outs, braid-outs, and roller-sets. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Curly Moisturising Hibiscus Curl Defining Styler with Argan Oil & Shea Butter (500mls)', 1),
(4, 210.00, 'Our ultra-nourishing MakeMeCurly styling cream is suitable for thin, softer hair & thick, coarser hair and gives flexible medium hold and definition to your unique natural curl pattern for twist-outs, braid-outs, and roller-sets. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Curly Moisturising Hibiscus Curl Defining Styler with Argan Oil & Shea Butter (250mls)', 1),
(5, 110.00, 'Our ultra-nourishing MakeMeCurly styling cream is suitable for thin, softer hair & thick, coarser hair and gives flexible medium hold and definition to your unique natural curl pattern for twist-outs, braid-outs, and roller-sets. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Curly Moisturising Hibiscus Curl Defining Styler with Argan Oil & Shea Butter (125mls)', 1),
(6, 390.00, 'Our intensive MakeMeStrong mask conditions deeply & revives dry, damaged hair to reveal soft, moisturised, shiny, bouncy curls. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Strong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (500mls)', 1),
(7, 220.00, 'Our intensive MakeMeStrong mask conditions deeply & revives dry, damaged hair to reveal soft, moisturised, shiny, bouncy curls. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Strong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (250mls)', 1),
(8, 120.00, 'Our intensive MakeMeStrong mask conditions deeply & revives dry, damaged hair to reveal soft, moisturised, shiny, bouncy curls. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Strong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (125mls)', 1),
(9, 210.00, 'Our MakeMeSoft moisturising leave-in curl primer is fortified with a botanical blend of shea butter, hibiscus extract & rich argan and avocado oils to nourish and promote soft manageable hair safe from breakage. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Soft Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (250mls)', 1),
(10, 110.00, 'Our MakeMeSoft moisturising leave-in curl primer is fortified with a botanical blend of shea butter, hibiscus extract & rich argan and avocado oils to nourish and promote soft manageable hair safe from breakage. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Soft Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (125mls)', 1),
(11, 220.00, 'Our sulphate-free, kind cleansing, nourishing MakeMeClean shampoo removes build-up, gently exfoliates your scalp & hydrates the hair. Ideal for all afro textured coily, curly or wavy natural hair. ', 'Make Me Clean Kind Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (300mls)', 1),
(12, 60.00, 'Our sulphate-free, kind cleansing, nourishing MakeMeClean shampoo removes build-up, gently exfoliates your scalp & hydrates the hair. Ideal for all afro textured coily, curly or wavy natural hair.', 'Make Me Clean Kind Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (50mls)', 1),
(13, 290.00, 'MakeMeClean Kind-Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (50mls). MakeMeStrong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (125mls). MakeMeSoft Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (125mls). MakeMeCurly Moisturising Hibiscus Curl Defining & Styling Cream with Argan Oil & Shea Butter (125mls). VanaNaturals 100% Linen Eco Bag', 'On The Go Kit (with eco bag)', 1),
(14, 380.00, 'MakeMeClean Kind-Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (300mls). MakeMeStrong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (250mls).', 'Curl Basics Kit', 1),
(15, 550.00, 'MakeMeClean Kind-Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (300mls). MakeMeStrong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (250mls). MakeMeSoft Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (250mls).', 'Curl Awakening Kit', 1),
(16, 750.00, 'MakeMeClean Kind-Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (300mls). MakeMeStrong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (250mls). MakeMeSoft Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (250mls). MakeMeCurly Moisturising Hibiscus Curl Defining & Styling Cream with Argan Oil & Shea Butter (250mls).', 'Curl Expression Kit', 1),
(17, 1000.00, 'MakeMeClean Kind-Cleansing Hibiscus Shampoo with Aloe Vera & Inulin (300mls). MakeMeStrong Deep Conditioning Hibiscus Mask with Argan & Black Cumin Oil (500mls). MakeMeSoft  Intense Moisture Hibiscus Leave-In Curl Primer with Avocado & Grapefruit Oil (250mls). MakeMeCurly Moisturising Hibiscus Curl Defining & Styling Cream with Argan Oil & Shea Butter (500mls). VanaNaturals EverythingButter: Triple Whipped Shea-Mango Multi-Purpose Moisturiser (100mls). VanaNaturals 100% Linen Eco Bag (Large).', 'Deluxe Kit (with eco bag)', 1),
(18, 999.00, 'UPDATED DESCRIPTION - Newly updated description!', 'Example Of Updated Product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productpurchase`
--

DROP TABLE IF EXISTS `productpurchase`;
CREATE TABLE IF NOT EXISTS `productpurchase` (
  `PPIdentifier` int(12) NOT NULL AUTO_INCREMENT,
  `PurchaseID` int(12) NOT NULL,
  `ProductID` int(12) NOT NULL,
  `ItemCount` int(3) NOT NULL,
  PRIMARY KEY (`PPIdentifier`),
  KEY `PurchaseID` (`PurchaseID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productpurchase`
--

INSERT INTO `productpurchase` (`PPIdentifier`, `PurchaseID`, `ProductID`, `ItemCount`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `promotionemailinglist`
--

DROP TABLE IF EXISTS `promotionemailinglist`;
CREATE TABLE IF NOT EXISTS `promotionemailinglist` (
  `EmailIdentifier` int(12) NOT NULL AUTO_INCREMENT,
  `EmailAddress` varchar(70) NOT NULL,
  PRIMARY KEY (`EmailIdentifier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotionemailinglist`
--

INSERT INTO `promotionemailinglist` (`EmailIdentifier`, `EmailAddress`) VALUES
(1, 'steynsazqwach@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `PurchaseIdentifier` int(12) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Residence` varchar(70) NOT NULL,
  `City` varchar(70) NOT NULL,
  `Country` varchar(70) NOT NULL,
  `PostalCode` varchar(70) NOT NULL,
  `Phonenumber` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `DatePurchased` date NOT NULL,
  PRIMARY KEY (`PurchaseIdentifier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseIdentifier`, `FirstName`, `LastName`, `Address`, `Residence`, `City`, `Country`, `PostalCode`, `Phonenumber`, `Email`, `DatePurchased`) VALUES
(1, 'kevin', 'Steyyn', '9 Main Road', '5 Maplewood', 'Cape Town', 'South Africa', '7945', '0778889912', 'steynsazqwach@gmail.com', '2020-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `shippingemailconfirmation`
--

DROP TABLE IF EXISTS `shippingemailconfirmation`;
CREATE TABLE IF NOT EXISTS `shippingemailconfirmation` (
  `ConfirmationIdentifier` int(12) NOT NULL AUTO_INCREMENT,
  `Content` varchar(2000) NOT NULL,
  `PurchaseID` int(12) NOT NULL,
  `Sent` tinyint(1) NOT NULL DEFAULT '0',
  `DateSent` date DEFAULT NULL,
  PRIMARY KEY (`ConfirmationIdentifier`),
  KEY `PurchaseID` (`PurchaseID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippingemailconfirmation`
--

INSERT INTO `shippingemailconfirmation` (`ConfirmationIdentifier`, `Content`, `PurchaseID`, `Sent`, `DateSent`) VALUES
(1, 'This email is sent on behalf of Vana Naturals in order to inform you that your package has been mailed.<br><br>The mailed product(s) are as follows:<br><br>Product:&nbsp;Everything Butter (100mls)&nbsp;&nbsp;&nbsp;Amount:&nbsp;2&nbsp;&nbsp;&nbsp;Price:&nbsp;R420<br>Product:&nbsp;Everything Butter (5mls)&nbsp;&nbsp;&nbsp;Amount:&nbsp;2&nbsp;&nbsp;&nbsp;Price:&nbsp;R60<br><br>Total Price: R480<br><br>We here at Vananaturals thank you for your support.', 1, 0, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productpurchase`
--
ALTER TABLE `productpurchase`
  ADD CONSTRAINT `productpurchase_ibfk_1` FOREIGN KEY (`PurchaseID`) REFERENCES `purchase` (`PurchaseIdentifier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productpurchase_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductIdentifier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shippingemailconfirmation`
--
ALTER TABLE `shippingemailconfirmation`
  ADD CONSTRAINT `shippingemailconfirmation_ibfk_1` FOREIGN KEY (`PurchaseID`) REFERENCES `purchase` (`PurchaseIdentifier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
