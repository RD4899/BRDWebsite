-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2020 at 10:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `divdigitalbrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingId` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `bookingDateTime` date NOT NULL,
  `sessionDateTime` datetime(6) NOT NULL,
  `sessionType` varchar(50) NOT NULL,
  `peopleQty` int(3) NOT NULL,
  `groupType` varchar(50) NOT NULL,
  `equipment` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `productId` int(5) NOT NULL,
  `orderDateTime` datetime(6) NOT NULL,
  `qty` int(3) NOT NULL,
  `shippingType` varchar(100) NOT NULL,
  `totalPrice` varchar(8) NOT NULL,
  `postalDate` datetime(6) NOT NULL,
  `estDeliveryDate` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` char(7) NOT NULL DEFAULT 'brd_001',
  `productTitle` varchar(30) NOT NULL,
  `productDesc` varchar(400) NOT NULL,
  `productPrice` decimal(5,2) NOT NULL,
  `productImg` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productTitle`, `productDesc`, `productPrice`, `productImg`) VALUES
('brd_001', 'BRD Premium Hoodie', 'The BRD Premium Collection stands for best-possible print results on top-quality products. A huge range of sizes makes sure that our gear fits everyone, big and small alike. Our premium hoodie convinces in terms of soft and heavy fabrics to give you a feeling of comfort in all walks of life.', '39.99', '/media/images/shop/BRD_Hoodie_White.png'),
('brd_002', 'BRD Premium T-Shirt', 'The BRD T-Shirt Collection stands for best-possible print results on top-quality products. A huge range of sizes makes sure that our gear fits everyone, big and small alike. The Premium T-shirt offers a sheer infinite choice of combination opportunity with other items. Top quality and supreme print results with all print methods.', '23.99', '/media/images/shop/BRD_Tshirt_Red.png'),
('brd_003', 'BRD Jacket', 'The sophisticated logo-jacquard across BRD\'s windbreaker jacket brings a refined edge to its streetwear aesthetic. The reversible design is crafted from mid-weight technical fabric and can be worn as a plain black style or with the quadruple-G motif. Secure the fit according to the weather with the drawstring hood and hemline.', '34.99', '/media/images/shop/BRD_Jacket_Black.png'),
('brd_004', 'BRD Gravity Beanie', 'BRD are known for bringing their beautiful styling to your everyday lifestyle choices. They continue their successful year with a winter Beanie that will be sought after by many, this includes knitted cotton and cashmere blend, turn-up hem and embroidered small flag branding to the front. ', '12.99', '/media/images/shop/BRD_Beanie_Grey.png'),
('brd_005', 'BRD Coffee Mug', '', '8.99', '/media/images/shop/BRD_Mug_Red.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_colour`
--

CREATE TABLE `product_colour` (
  `colourID` int(11) NOT NULL,
  `productColour` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_colour`
--

INSERT INTO `product_colour` (`colourID`, `productColour`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Red'),
(4, 'Grey');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `imageID` int(11) NOT NULL,
  `productImg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`imageID`, `productImg`) VALUES
(1, '/media/images/shop/BRD_Hoodie_Black.png'),
(2, '/media/images/shop/BRD_Hoodie_White.png'),
(3, '/media/images/shop/BRD_Hoodie_Red.png'),
(4, '/media/images/shop/BRD_Hoodie_Grey.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_object`
--

CREATE TABLE `product_object` (
  `objectID` int(11) NOT NULL,
  `productID` char(7) NOT NULL DEFAULT 'brd_001',
  `sizeID` int(11) NOT NULL,
  `colourID` int(11) NOT NULL,
  `imageID` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_object`
--

INSERT INTO `product_object` (`objectID`, `productID`, `sizeID`, `colourID`, `imageID`, `stock`) VALUES
(1, 'brd_001', 1, 1, 1, 4),
(2, 'brd_001', 1, 2, 2, 2),
(3, 'brd_001', 1, 3, 3, 3),
(4, 'brd_001', 1, 4, 4, 5),
(5, 'brd_001', 2, 1, 1, 1),
(6, 'brd_001', 2, 2, 2, 0),
(7, 'brd_001', 2, 3, 3, 6),
(8, 'brd_001', 2, 4, 4, 2),
(9, 'brd_001', 3, 1, 1, 2),
(10, 'brd_001', 3, 2, 2, 2),
(11, 'brd_001', 3, 3, 3, 4),
(12, 'brd_001', 3, 4, 4, 1),
(13, 'brd_001', 4, 1, 1, 2),
(14, 'brd_001', 4, 2, 2, 4),
(15, 'brd_001', 4, 3, 3, 2),
(16, 'brd_001', 4, 4, 4, 3),
(17, 'brd_001', 5, 1, 1, 3),
(18, 'brd_001', 5, 2, 2, 1),
(19, 'brd_001', 5, 3, 3, 0),
(20, 'brd_001', 5, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `sizeID` int(4) NOT NULL,
  `productSize` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`sizeID`, `productSize`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(5) NOT NULL,
  `fName` varchar(40) NOT NULL,
  `lName` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(12) DEFAULT NULL,
  `joinDate` date NOT NULL,
  `expDate` date DEFAULT NULL,
  `membershipStatus` varchar(50) DEFAULT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fName`, `lName`, `dob`, `address`, `postcode`, `email`, `phoneNo`, `joinDate`, `expDate`, `membershipStatus`, `password`) VALUES
(1, 'Connor', 'Ellement', '1998-09-19', '88 Castle Street, Loughor, Swansea', 'SA4 6TS', 'connorcompound@outlook.com', '07427 357395', '2020-02-19', NULL, 'Not Member', 'Chelsea10'),
(2, 'Mark', 'Hun', '1971-07-21', 'Neath', 'sa13 3ds', 'mark@outlook.com', '', '2020-02-27', NULL, NULL, 'Judith'),
(3, 'Rhys', 'Davies', '1999-08-04', 'Townhill', 'SA3 6DS', 'rhys@outlook.com', '', '2020-02-27', NULL, NULL, 'ilovemymac'),
(4, 'Sham', 'Hashan', '1999-08-21', 'Penlan', 'sa5 6ys', 'sham@outlook.com', '', '2020-02-27', NULL, NULL, 'Faiza10'),
(5, 'Gemma', 'Dunlop', '1999-12-06', 'Bridgend', 'CF3 6TS', 'gemma@outlook.com', '', '2020-02-28', NULL, NULL, 'whsmith'),
(6, 'John', 'Rhys', '1984-02-19', 'Fforestfach', 'sa2 7ys', 'johnrhys@outlook.com', '', '2020-02-28', NULL, NULL, 'lecturer'),
(13, 'James', 'Williams', '1987-06-20', 'Swansea', 'sa2 4hg', 'jameswilliams@outlook.com', '', '2020-02-28', NULL, 'Yes', 'eigp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product_colour`
--
ALTER TABLE `product_colour`
  ADD PRIMARY KEY (`colourID`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `product_object`
--
ALTER TABLE `product_object`
  ADD PRIMARY KEY (`objectID`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`sizeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingId` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_colour`
--
ALTER TABLE `product_colour`
  MODIFY `colourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_object`
--
ALTER TABLE `product_object`
  MODIFY `objectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `sizeID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
