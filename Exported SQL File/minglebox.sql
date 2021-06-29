-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 10:09 AM
-- Server version: 5.6.20
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minglebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientprofiles`
--

CREATE TABLE IF NOT EXISTS `clientprofiles` (
`ClientID` int(12) NOT NULL,
  `FullName` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `Contact_no` int(15) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `clientprofiles`
--

INSERT INTO `clientprofiles` (`ClientID`, `FullName`, `username`, `Contact_no`, `country`) VALUES
(3, 'Adnan Anjum', 'Adnan Anjum', 92300698, 'Canada'),
(6, 'Jesse Pinkman', 'Jesse', 987654321, 'USA'),
(7, 'Rohan Anjum', 'Rohan Anjum', 123456789, 'Pakistan'),
(8, 'Vladimir David', 'David', 147892429, 'Russia'),
(9, 'Angelina Martin', 'Angelina', 32145678, 'Pakistan'),
(11, 'ross1982', 'Ross Geller', 231564978, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `coderprofiles`
--

CREATE TABLE IF NOT EXISTS `coderprofiles` (
`CoderID` int(12) NOT NULL,
  `CoderName` varchar(25) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Skills` varchar(40) DEFAULT NULL,
  `CoderUserName` varchar(25) DEFAULT NULL,
  `CoderCountry` varchar(20) DEFAULT NULL,
  `CoderEmail` varchar(25) DEFAULT NULL,
  `CoderDescription` varchar(1000) DEFAULT NULL,
  `Qualification` varchar(25) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `coderprofiles`
--

INSERT INTO `coderprofiles` (`CoderID`, `CoderName`, `Category`, `Skills`, `CoderUserName`, `CoderCountry`, `CoderEmail`, `CoderDescription`, `Qualification`, `image`) VALUES
(2, 'Numan Anjum', 'IT', 'PHP, MYSQL, Python, JS', 'Numan Anjum', 'Pakistan', 'numananjum2019@gmail.com', 'Hi there! I''m a senior team lead WordPress CMS, PHP Codeigniter developer, having 8 years of experience in website development. My extensive experience in building high-quality websites in Custom WordPress CMS, PHP(Codeigniter) Framework.\r\n\r\nI focused only to build long-term business relationships with clients and 100% employer''s satisfaction. Negotiable and fair budget Developer.\r\n\r\nCore areas,\r\n1- PHP (Codeigniter)\r\n2- WordPress CMS Ecommerce/Woocommerce, PSD to Custom WordPress\r\n3- PSD to Bootstrap-HTML5, CSS3/LESS/SASS Technology\r\n4- Scratch WP Plugins Development, Customization\r\n5- Ajax, Mobile Jquery, Javascript\r\n6- Website, Graphic, Logo''s, Database Design, Mobile Web Design\r\n7- Shopify theme development\r\n8- Bigcommerce theme development\r\n\r\nWhy you choose me?\r\nI- Full Stack Web Developer\r\nII- Only take the project which I am sure I can do within the time frame and budget.\r\nIII- Fast turnaround time. IV- 24/7 available to help my clients.', 'BSCS', 'Account.jpg'),
(4, 'Joey Tribbiani', 'IT', 'Java, C, C++', 'Joey Tribbiani', 'USA', 'joey@gmail.com', 'Recently Graduated. New to the Mingle box.', 'BSCS', '1527430476383.jpg'),
(5, 'Umer Razzaq', 'IT', 'PHP, MYSQL', 'Umer Razzaq', 'Russia', 'umer@yahoo.com', 'Android & iPhone Apps\r\nPHP Application Development\r\nInternet Marketing / SEO\r\nWeb Hosting Services\r\nWebsite Maintenance\r\nWebsite Designing\r\nCMS Website Development\r\nPHP Open Scripts Customization\r\nHire Full Time Resources\r\nE-Commerce Development\r\nGraphic / Print Design', 'BSCS', '1512594038000.jpg'),
(10, 'Michael Josh Scott', 'IT', 'Blog Install, Graphic Design', 'Michael Scott', 'Italy', 'michael@gmail.com', 'Description:\r\nI am an Individual Experienced Web Developer, work with a Highly Experienced IT professionals team having rich experience in Design and Development.\r\n\r\nWork in open source programming and developing innovative solutions on a range of platforms including Magento, WordPress, WooCoomerce, PrestaShop, Core PHP, MySQL.\r\n\r\nMuch experience in Woo-Commerce Customization and Custom Plugin Modification at any level.', 'College Education', '11428061_838232676231772_1276236958284170840_n.jpg'),
(12, 'Isabella Hudson', 'Mobile App Development', 'IPhone, Android, Mobile App Development,', 'bella', 'Brazil', 'bellaharper@gmail.com', 'I am a full-time available freelancer having 4+ years of experience in Website and Application Development and Designing. I have tremendous experience in Web Design, Graphic Design, Logo Design, Banner, Brochures Design.\r\n\r\n4+ years of experience in programming and development. I am a Full Stack Web Developer with skills in WordPress, Shopify, Magento, PHP, MySQL, HTML/CSS, JavaScript, jQuery, XML, AJAX, REST, SOAP, Site Migration, iPhone, Android, Mobile App Development, iPad, and more!\r\n\r\nI have developed many hybrid apps in cross platforms and have excellent skills in React Native, Ionic Framework, Ionic2, AngularJS, Angular 2, Cordova, and front end development. I have worked on 50+ apps in Ionic Framework, websites using angularJS, and worked as front end developer for different clients.', 'BSSE', 'bella.jpg'),
(14, 'Ali Haider', 'Programming Languages', 'Web Development', 'Ali', 'Pakistan', 'alihaider@gmail.com', 'Description:  we are providing web development, digital marketing SEO, and SMO service in worldwide range since 2011. we are a bunch of development teams by which we create marvelous websites.\r\nOur specialized services include the following\r\n=> Website Design and Development, WordPress plugins\r\n=> IT Strategy and Consulting\r\n=> Data Analytics\r\n=> Digital Marketing and SEO, SMO\r\n=> E-commerce\r\n=> Graphic Design & logo designs', 'MSCS', 'IMG20180429201044.jpg'),
(15, 'Thomas Jeffrey Hanks', 'Programming Languages', 'PHP, AJAX, MySQL, jQuery ', 'Tom Hanks', 'United States', 'tomhanks@gmail.com', 'We are providing the online business solutions since 2010.\r\n\r\nWe are the FIVE STAR rated company here on Freelancer. We do not speak, our work speaks itself.\r\n\r\nOur team of experts are skilled in:\r\n\r\nPHP, MySQL, HTML 5, CSS 3.0. MSSQL, Laravel, Code Igniter, Yii, Angular JS, Node JS, Javascript, jQuery, Python, C++, C#, Bootstrap, , Wordpress, Joomla, Drupal, Mobile Responsiveness, Visual Studio, Adobe Photoshop, Adobe Dreamweaver, API Integration, Application Penetration Safety', 'BSIT', 'IMG_20180725_223618857.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`PaymentID` int(12) NOT NULL,
  `ClientID` int(12) NOT NULL,
  `CoderID` int(12) NOT NULL,
  `ProjectID` int(12) DEFAULT NULL,
  `RequestID` int(12) NOT NULL,
  `Progress` varchar(20) NOT NULL,
  `Paid` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `ClientID`, `CoderID`, `ProjectID`, `RequestID`, `Progress`, `Paid`) VALUES
(1, 3, 2, 3, 3, 'Completed', '1000 $'),
(2, 6, 2, 2, 2, 'In-Progress', ''),
(3, 3, 2, 1, 1, 'Completed', '1200 $'),
(4, 3, 14, 5, 5, 'Completed', '150 $');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`ProjectID` int(12) NOT NULL,
  `ClientID` int(12) DEFAULT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Type` varchar(25) DEFAULT NULL,
  `Languages` varchar(25) DEFAULT NULL,
  `Duration` varchar(20) NOT NULL,
  `Budget` varchar(20) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `ClientID`, `Name`, `Type`, `Languages`, `Duration`, `Budget`, `Description`) VALUES
(1, 3, 'Mingle Box', 'Web Application', 'PHP MYSQL', '12 DAYS', '1200 $', 'Build a that website look professional, looking programmer build website, looking someone build website, build website similar custom ink, build website similar myspace, build website similar justintv, can build website similar myspace, looking someone can build website, build website similar YouTube, build website similar craigslist, want build website similar istockphoto, build website similar etc, build website similar alibaba.com joomla.'),
(2, 6, 'Python Scraping Application', 'Python Web Scraping', 'Python, Web Scraping, PHP', '10 DAYS', '500 $', 'I need python tutoring, python scraping post, python scraping parsing, python scraping ec2, android market python scraping, application takes photos sends email mms automatically, need coder can code important program, application takes picture sends, app store python scraping, python scraping script, python scraping javascript, python scraping aspx, backpage python scraping, python scraping web page, python scraping tables, project need python script, python scraping websites.'),
(3, 3, 'Recover my WordPress website', 'Word Press', 'PHP MYSQL', '2 days', '1000 $', 'Hi guys,\r\nI''ve made an hosting upgrade on my domain [login to view URL] changing from basic hosting to business hosting.\r\nGoDaddy told me that this change would not affect the website, but that happens...\r\nCheck home page, the front-end is corrupted.\r\nI don''t have a backup, so i need you to work on ftp to recover the website and WordPress website migration, add WordPress website, recover WordPress post, recover WordPress posts, recover deleted website ipconfig, recover closed website, build Word'),
(4, 7, 'Looking for a Laravel and Vue JS developer ', 'IT', 'PHP, Laravel, JavaScript,', '5 Days', '300 $', 'hello looking for a Laravel and Vue JS developer to work with us on some modules of a project.\r\n\r\n- Can commit codes on bitbucket\r\n\r\n- Can work with a team\r\n\r\n- Freelancer with good knowledge of both Laravel and VUE JS and looking term affiliate software developer, looking freelance winforms wpf developer, looking reliable freelance web developer, looking experienced iphone app developer video rec, looking full time joomla developer, looking subcontract quality web developer, hello looking affil'),
(5, 3, 'Need to integrate Payment gateway (razor pay or agripay) in ', 'Payment Gateway', 'Magento, PHP, eCommerce, ', '7 Days', '150 $', 'ccavenue payment gateway integration magento, ccavenue payment gateway integration tool magento, code paypal integration magento site, free payment gateway integration magento, magento payment gateway integration, payment gateway integration magento service, need payment gateway group buying site, ebs payment gateway integration magento, ccbill payment gateway integration magento, payment gateway integration magento api, paypal payment gateway integration magento, payu payment gateway integratio');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
`RequestID` int(12) NOT NULL,
  `ClientID` int(12) NOT NULL,
  `CoderID` int(12) NOT NULL,
  `ProjectID` varchar(12) NOT NULL,
  `Response` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`RequestID`, `ClientID`, `CoderID`, `ProjectID`, `Response`) VALUES
(1, 3, 2, '1', 'Accepted'),
(2, 6, 2, '2', 'Accepted'),
(3, 3, 2, '3', 'Accepted'),
(4, 7, 4, '4', 'Pending'),
(5, 3, 14, '5', 'Accepted'),
(6, 3, 14, '3', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userID` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `usertype`, `email`) VALUES
(1, 'Admin', '$2y$10$qx1d9riWKJjBpD9BKfU/lukducUv0GMYwUrWRmEdI.Sbh39iafjcW', 'admin', 'admin@admin.com'),
(2, 'Numan Anjum', '$2y$10$/ciBmIUrH2pROoCOB/tTlOa79q73xBPWesvLVR4j5b/ZnOu/MQaCK', 'coder', 'numananjum2019@gmail.com'),
(3, 'Adnan Anjum', '$2y$10$gihHvioAk3hmLsh2vdYwk.HUEk6V6G5Cn4rDLh0awbm.RlOfzTQ8S', 'client', 'adnan@gmail.com'),
(4, 'Joey Tribbiani', '$2y$10$PGwgqAPP7.MkM3krdL05Nu8gmSy2yrAKQ6XJ1qIv2Old3URT1CNuu', 'coder', 'joey@gmail.com'),
(5, 'Umer Razzaq', '$2y$10$VhOTyVokLsYDMdPgVztwTeIc2WGoQNcyDv/.o3k6/Yw/i9dvEHOlS', 'coder', 'umer@yahoo.com'),
(6, 'Jesse', '$2y$10$iwvrPNtbA2ijcw9nFbwT7OF/JI7utnFHQ0elpy/02dfA3RmpgWTQ6', 'client', 'jesse@gmail.com'),
(7, 'Rohan Anjum', '$2y$10$dn5ZCFDBYOVHOTyO9kS.4.kYWVUDVqe0naPCYWJ/BvtT4hCQFJ6oW', 'client', 'rohan@gmail.com'),
(8, 'David', '$2y$10$3KPKotYEdvJifHxSqPcJB.AVnPr93nxEKticPgNyQ2lJ6rYjbGkUO', 'client', 'david@yandex.com'),
(9, 'Angelina', '$2y$10$myxA3U9UCWToT//xC9.1d./E6sCPL5g5hCv7tyV6WhHfuH5WErd/q', 'client', 'angelina@yahoo.com'),
(10, 'Michael Scott', '$2y$10$mljAgCSR77xhp3aXjLOdD.ZWU.J47GkSwY5OCnc/Qt.BNQYqCTN9.', 'coder', 'michael@gmail.com'),
(11, 'ross1982', '$2y$10$lDe9B9LBuP/bXmUsPNYN4uBkwLA2TBqma8/u0vIAVUSuo.2uGDdLq', 'client', 'ross1982@gmail.com'),
(12, 'bella', '$2y$10$isQbihuy8eswaoskgkdIhu/rSmrmfJ8fPpvLl3iWaPfJvnkudv8L2', 'coder', 'bellaharper@gmail.com'),
(13, 'Johnny', '$2y$10$6CbP2/zwUeI8sRWAr.iA7..J9Y6TcaP6aWHp1xpjjkhRqsXk6MOkC', 'coder', 'john@gmail.com'),
(14, 'Ali', '$2y$10$ZOkiYUhYuoZBfsugnrHZBOOOmhaXW7srTSPewsf/Q6FHNTIWqvXVO', 'coder', 'alihaider@gmail.com'),
(15, 'Tom Hanks', '$2y$10$dPF5qyBToXtcDDMD4uY2aOr8CR.nJs1WM.UpxjnMk9XNoocxz/ECK', 'coder', 'tomhanks@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientprofiles`
--
ALTER TABLE `clientprofiles`
 ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `coderprofiles`
--
ALTER TABLE `coderprofiles`
 ADD PRIMARY KEY (`CoderID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`ProjectID`), ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
 ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientprofiles`
--
ALTER TABLE `clientprofiles`
MODIFY `ClientID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `coderprofiles`
--
ALTER TABLE `coderprofiles`
MODIFY `CoderID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `PaymentID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `ProjectID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `RequestID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientprofiles`
--
ALTER TABLE `clientprofiles`
ADD CONSTRAINT `clientprofiles_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coderprofiles`
--
ALTER TABLE `coderprofiles`
ADD CONSTRAINT `coderprofiles_ibfk_3` FOREIGN KEY (`CoderID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `clientprofiles` (`ClientID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
