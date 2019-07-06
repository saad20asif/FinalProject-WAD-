-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 11:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect_guitaring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(255) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_pass`) VALUES
(1, 'zain@perfect.com', 'A123');

-- --------------------------------------------------------

--
-- Table structure for table `guitar_brands`
--

CREATE TABLE `guitar_brands` (
  `brands_Id` int(100) NOT NULL,
  `brands_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guitar_brands`
--

INSERT INTO `guitar_brands` (`brands_Id`, `brands_title`) VALUES
(1, 'Fender'),
(2, 'Gibson'),
(3, 'Washburn'),
(4, 'Yamaha');

-- --------------------------------------------------------

--
-- Table structure for table `guitar_categories`
--

CREATE TABLE `guitar_categories` (
  `cat_Id` int(50) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guitar_categories`
--

INSERT INTO `guitar_categories` (`cat_Id`, `cat_title`) VALUES
(1, 'Electric'),
(2, 'Acoustic');

-- --------------------------------------------------------

--
-- Table structure for table `guitar_product`
--

CREATE TABLE `guitar_product` (
  `guitar_Id` int(255) NOT NULL,
  `guitar_cat` int(50) NOT NULL,
  `guitar_brand` int(25) NOT NULL,
  `guitar_price` int(50) NOT NULL,
  `guitar_image` varchar(200) NOT NULL,
  `guitar_keyword` varchar(300) NOT NULL,
  `guitar_title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guitar_product`
--

INSERT INTO `guitar_product` (`guitar_Id`, `guitar_cat`, `guitar_brand`, `guitar_price`, `guitar_image`, `guitar_keyword`, `guitar_title`) VALUES
(44, 1, 1, 1500000, '6a00d83451706569e2017744a91651970d.jpg', 'eleco', 'awesome ed56'),
(45, 1, 1, 13400, '13881322_f520.jpg', 'el', 'awsome Ed90'),
(46, 1, 1, 167000, 'hqdefault.jpg', 'eli', 'awesome ed57'),
(47, 1, 1, 146008, 'offset_full.jpg', 'elc', 'awesome ed59'),
(48, 1, 1, 1500060, 'tumblr_mrrs89xnBt1rtqh62o5_1280.jpg', 'eld', 'awesome ed55'),
(49, 2, 1, 120000, 'taxonomy-acoustic-guitar-acoustic-packs@2x.png', 'ac1', 'awesome ed20'),
(50, 2, 1, 130000, '31jk6Z7Ef+L._SX425_.jpg', 'ac2', 'awesome ed21'),
(51, 2, 1, 140000, 'feature-1.jpg', 'ac3', ''),
(52, 1, 2, 167000, '1_Full_Straight_Front_NA-43432444d2daeebb5c879171561415aa.jpg', 'el1', 'best ES10'),
(53, 0, 2, 1500000, '0620abd9dd9e915713250faf7d42029e.jpg', 'el2', 'best ES11'),
(54, 2, 0, 450000, '1938GibsonJ35_Top.jpg', 'acc1', 'best ES12'),
(55, 2, 2, 250000, 'IMG_9799_380x@2x.jpg', 'acc2', 'best ES13'),
(56, 1, 3, 278000, 'GUEST_67d89ebb-a046-46bc-8e84-bad785996b8f.jpg', 'elec1', 'Series ES99'),
(57, 1, 3, 350000, 'home-featuredbox-newidols.jpg', 'elec2', 'Series ES90'),
(58, 2, 3, 120000, '41YE+syxlOL._SX425_.jpg', 'accc1', ''),
(59, 2, 3, 130000, 'EA15ATB-1400x1000.jpg', 'accc2', 'Series ES95'),
(60, 1, 4, 120000, 'Dec15_LNU_Yamaha-RevStar-RS820-Guitar_FEAT.jpg', 'elll1', 'SER FC12'),
(61, 1, 4, 460000, 'download.jpg', 'ellll2', ''),
(62, 2, 4, 230000, 'ae00-6529.jpg', 'accc1', 'SER FC13'),
(63, 2, 0, 350000, 'Yamaha_Guitars_APX600-NA_Natural_Acoustic_Electric_Thinline_Cutaway_889025115018_FBV.jpg', 'accc8', 'SER FC15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `L_id` int(255) NOT NULL,
  `L_email` varchar(300) NOT NULL,
  `L_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`L_id`, `L_email`, `L_password`) VALUES
(1, 'saad20asif@gmai.com', 'SAAD12345'),
(3, 'saad20asif@gmail.com', 'sad12345@D');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `U_id` int(255) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Uemail` varchar(50) NOT NULL,
  `Upass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`U_id`, `Uname`, `Uemail`, `Upass`) VALUES
(2, 'Zain Ali', 'za97544@gmail.com', 'Ali12345'),
(3, 'haris', 'harissheikh123@gmail.com', 'Has456123'),
(4, 'saad', 'saad20asif@gmail.com', 'sad12345@D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `guitar_brands`
--
ALTER TABLE `guitar_brands`
  ADD PRIMARY KEY (`brands_Id`);

--
-- Indexes for table `guitar_categories`
--
ALTER TABLE `guitar_categories`
  ADD PRIMARY KEY (`cat_Id`);

--
-- Indexes for table `guitar_product`
--
ALTER TABLE `guitar_product`
  ADD PRIMARY KEY (`guitar_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guitar_brands`
--
ALTER TABLE `guitar_brands`
  MODIFY `brands_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guitar_categories`
--
ALTER TABLE `guitar_categories`
  MODIFY `cat_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guitar_product`
--
ALTER TABLE `guitar_product`
  MODIFY `guitar_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `L_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `U_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
