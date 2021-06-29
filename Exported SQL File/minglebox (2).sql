-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 05:20 AM
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
(7, 'Rohan Anjum', 'Rohan Anjum', 1234567892, 'Pakistan'),
(8, 'Vladimir David', 'David', 147892429, 'Russia'),
(9, 'Hannah Martin', 'Hannah', 12345, 'Canada'),
(11, 'ross1982', 'Ross Geller', 231564978, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `coderprofiles`
--

CREATE TABLE IF NOT EXISTS `coderprofiles` (
`CoderID` int(12) NOT NULL,
  `CoderName` varchar(25) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Skills` varchar(200) DEFAULT NULL,
  `CoderUserName` varchar(25) DEFAULT NULL,
  `CoderCountry` varchar(20) DEFAULT NULL,
  `CoderEmail` varchar(40) DEFAULT NULL,
  `CoderDescription` varchar(1000) DEFAULT NULL,
  `Qualification` varchar(100) DEFAULT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `coderprofiles`
--

INSERT INTO `coderprofiles` (`CoderID`, `CoderName`, `Category`, `Skills`, `CoderUserName`, `CoderCountry`, `CoderEmail`, `CoderDescription`, `Qualification`, `image`) VALUES
(2, 'Numan Anjum', 'IT', 'PHP, MYSQLi, Python, JS, JAVA, .NET', 'Numan Anjum', 'Pakistan', 'numananjum2019@gmail.com', 'Hi there! I''m a senior team lead WordPress CMS, PHP Codeigniter developer, having 8 years of experience in website development. My extensive experience in building high-quality websites in Custom WordPress CMS, PHP(Codeigniter) Framework.\r\n\r\nI focused only to build long-term business relationships with clients and 100% employer''s satisfaction. Negotiable and fair budget Developer.\r\n\r\nCore areas,\r\n1- PHP (Codeigniter)\r\n2- WordPress CMS Ecommerce/Woocommerce, PSD to Custom WordPress\r\n3- PSD to Bootstrap-HTML5, CSS3/LESS/SASS Technology\r\n4- Scratch WP Plugins Development, Customization\r\n5- Ajax, Mobile Jquery, Javascript\r\n6- Website, Graphic, Logo''s, Database Design, Mobile Web Design\r\n7- Shopify theme development\r\n8- Bigcommerce theme development\r\n\r\nWhy you choose me?\r\nI- Full Stack Web Developer\r\nII- Only take the project which I am sure I can do within the time frame and budget.\r\nIII- Fast turnaround time. IV- 24/7 available to help my clients.', 'BSCS', 'Account.jpg'),
(4, 'Joey Tribbiani', 'IT', 'Java, C, C++', 'Joey Tribbiani', 'USA', 'joey@gmail.com', 'Recently Graduated. New to the Mingle box.', 'BSCS', '1527430476383.jpg'),
(5, 'Umer Razzaq', 'IT', 'PHP, MYSQL', 'Umer Razzaq', 'Russia', 'umer@yahoo.com', 'Android & iPhone Apps\r\nPHP Application Development\r\nInternet Marketing / SEO\r\nWeb Hosting Services\r\nWebsite Maintenance\r\nWebsite Designing\r\nCMS Website Development\r\nPHP Open Scripts Customization\r\nHire Full Time Resources\r\nE-Commerce Development\r\nGraphic / Print Design', 'BSCS', '1512594038000.jpg'),
(10, 'Michael Josh Scott', 'IT', 'Blog Install, Graphic Design', 'Michael Scott', 'Italy', 'michael@gmail.com', 'Description:\r\nI am an Individual Experienced Web Developer, work with a Highly Experienced IT professionals team having rich experience in Design and Development.\r\n\r\nWork in open source programming and developing innovative solutions on a range of platforms including Magento, WordPress, WooCoomerce, PrestaShop, Core PHP, MySQL.\r\n\r\nMuch experience in Woo-Commerce Customization and Custom Plugin Modification at any level.', 'College Education', '11428061_838232676231772_1276236958284170840_n.jpg'),
(12, 'Isabella Hudson', 'Mobile App Development', 'IPhone, Android, Mobile App Development,', 'bella', 'Brazil', 'bellaharper@gmail.com', 'I am a full-time available freelancer having 4+ years of experience in Website and Application Development and Designing. I have tremendous experience in Web Design, Graphic Design, Logo Design, Banner, Brochures Design.\r\n\r\n4+ years of experience in programming and development. I am a Full Stack Web Developer with skills in WordPress, Shopify, Magento, PHP, MySQL, HTML/CSS, JavaScript, jQuery, XML, AJAX, REST, SOAP, Site Migration, iPhone, Android, Mobile App Development, iPad, and more!\r\n\r\nI have developed many hybrid apps in cross platforms and have excellent skills in React Native, Ionic Framework, Ionic2, AngularJS, Angular 2, Cordova, and front end development. I have worked on 50+ apps in Ionic Framework, websites using angularJS, and worked as front end developer for different clients.', 'BSSE', 'BosniaHerzegovina_IT-Girls_Ena_Kosanovic_web.jpg'),
(13, 'John Cena', 'IT', 'Linux, C, C++ Programming', 'Johnny', 'USA', 'john@gmail.com', 'I am a C/C++ programmer with lots of experience in POSIX and Linux. I have completed quite a few assembly language projects too. Desiging and developing wide range of Embedded system based on ARM processors, AMD and Intel.\r\n\r\nWorked on multiple RTOS and Linux operating system.\r\n\r\nDevice driver developer .', 'BSCS', 'IMG-20180614-WA0001.jpg'),
(14, 'Ali Haider', 'Programming Languages', 'Web Development', 'Ali', 'Pakistan', 'alihaider@gmail.com', 'Description:  we are providing web development, digital marketing SEO, and SMO service in worldwide range since 2011. we are a bunch of development teams by which we create marvelous websites.\r\nOur specialized services include the following\r\n=> Website Design and Development, WordPress plugins\r\n=> IT Strategy and Consulting\r\n=> Data Analytics\r\n=> Digital Marketing and SEO, SMO\r\n=> E-commerce\r\n=> Graphic Design & logo designs', 'MSCS', 'IMG20180429201044.jpg'),
(15, 'Thomas Jeffrey Hanks', 'Programming', 'AI, JAVA, Linux/ Unix', 'Tom Hanks', 'USA', 'tomhanks@gmail.com', 'I started programming computers when I was 13 years old, and, over the last 10 years, I''ve realized that I am, well, a programmer. This was a very big discovering for me and I decided that I willing to give all my life to the programming.\r\nI have rich experience on Python, C#, C++ with 10 year. Especially I love Python then any other. I can built website with Django as backend and Other Javascript Framework as Frontend. And I also enjoy Image Processing, ML & DL with python.', 'PHD', 'IMG-20180822-WA0001.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `ClientID`, `CoderID`, `ProjectID`, `RequestID`, `Progress`, `Paid`) VALUES
(1, 3, 2, 1, 1, 'Completed', '1200 $'),
(2, 6, 2, 2, 2, 'Completed', '500 $'),
(6, 7, 4, 4, 4, 'Completed', '300 $'),
(7, 3, 2, 5, 7, 'Completed', '150 $'),
(8, 9, 2, 9, 10, 'Completed', '275 $'),
(9, 7, 5, 12, 12, 'In-Progress', ''),
(10, 8, 13, 8, 8, 'Completed', '250 $');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`ProjectID` int(12) NOT NULL,
  `ClientID` int(12) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Type` varchar(25) DEFAULT NULL,
  `Languages` varchar(250) DEFAULT NULL,
  `Duration` varchar(20) NOT NULL,
  `Budget` varchar(20) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `ClientID`, `Name`, `Type`, `Languages`, `Duration`, `Budget`, `Description`) VALUES
(1, 3, 'Mingle Box', 'Web Application', 'PHP MYSQL', '12 DAYS', '1200 $', 'Build a that website look professional, looking programmer build website, looking someone build website, build website similar custom ink, build website similar myspace, build website similar justintv, can build website similar myspace, looking someone can build website, build website similar YouTube, build website similar craigslist, want build website similar istockphoto, build website similar etc, build website similar alibaba.com joomla.'),
(2, 6, 'Python Scraping Application', 'Python Web Scraping', 'Python, Web Scraping, PHP', '10 DAYS', '500 $', 'I need python tutoring, python scraping post, python scraping parsing, python scraping ec2, android market python scraping, application takes photos sends email mms automatically, need coder can code important program, application takes picture sends, app store python scraping, python scraping script, python scraping javascript, python scraping aspx, backpage python scraping, python scraping web page, python scraping tables, project need python script, python scraping websites.'),
(4, 7, 'Looking for a Laravel and Vue JS developer ', 'IT', 'PHP, Laravel, JavaScript,', '5 Days', '300 $', 'hello looking for a Laravel and Vue JS developer to work with us on some modules of a project.\r\n\r\n- Can commit codes on bitbucket\r\n\r\n- Can work with a team\r\n\r\n- Freelancer with good knowledge of both Laravel and VUE JS and looking term affiliate software developer, looking freelance winforms wpf developer, looking reliable freelance web developer, looking experienced iphone app developer video rec, looking full time joomla developer, looking subcontract quality web developer, hello looking affil'),
(5, 3, 'Need to integrate Payment gateway (razor pay or agripay) in ', 'Payment Gateway', 'Magento, PHP, eCommerce, ', '7 Days', '150 $', 'cc avenu payment gateway integration Magento, cc avenu payment gateway integration tool Magento, code PayPal integration Magento site, free payment gateway integration Magento, Magento payment gateway integration, payment gateway integration Magento service, need payment gateway group-buying site,  CCBill payment gateway integration Magento, payment gateway integration Magento API, PayPal payment gateway integration Magento, PayU payment gateway integration'),
(6, 11, 'Need a Backend Developer to create the Backend of the Mobile', 'Third Party', '.Net, C#, RWD, JavaScript', '5 Days', '700 $', 'Brief about the project: Product for educational institutions to conduct online exams\r\n\r\nTasks Needed to be performed by the developer:\r\n\r\n1. Build a Database\r\n\r\n3. Create a caching layer on top of the database.\r\n\r\n4. Integration with front end layer GUI, Mobile IOS, Android app, Tablet etc.,\r\n\r\n6. Use AWS services (lambda/dynamodb..etc)\r\n\r\n7. Experienced in AWS\r\n\r\nProgramming expertise with functional thinking and strong skills in backend technology with cost effective solutions.\r\n\r\nExperience with distributed, cloud-based environments, particularly AWS.\r\n\r\nWell-versed in writing unit-tested code, developing object-oriented models and designing data structures\r\n\r\nUnderstanding of build, deployment, A/B testing of products.\r\n\r\nOnly Experienced Backend Developers must Apply. Also, post your previous work and if possible your GIT Repositories with your Bid. Happy Bidding !!'),
(7, 7, 'Customize web layout for Magento 2.4.1', 'Customization', 'PHP, Website Design', '2 Days', '400 $', 'I am working on a very tight deadline, we only want someone who is on the ball and works efficiently and delivers error-free well-coded projects.\r\n\r\nIf you don''t have the confidence regarding the above, or if you are are unable to work on this project within the timeline required, please be upfront about it.\r\n\r\nSituation:\r\n\r\nWe have a staging Magento 2.4.1 with a theme installed.\r\n\r\n--------------------------\r\n\r\nYour deliverables:\r\n\r\n1. Customize the website to the layout we want. You may have to further edit the theme, so you may have to touch on the programming. We already have a mock up of the layout available. In addition to that, we want to be able to embed youtube videos and facebook live videos (when we have live streamings) on the homepage.\r\n\r\nIf you intend to use the theme, please make a child theme, such that when we update the main theme, it wonâ€™t affect the customizations you made.\r\n\r\nIf you feel that it is easier to customize the layout from scratch, we are good with it '),
(8, 8, 'Fire Alarm System', 'Programming', 'C Programming, Electronic', '8 Days', '250 $', 'Our project is about Fire Alarm System. We will be using Keil uVision software for the coding. The type of coding is using C programming or ASM programming using this software. After the coding has been done, must use Proteus software to draw the circuit and show the simulation. Further details will be given during discussion.'),
(9, 9, 'Website based on .Net Core', '.NET Core', 'HTML, Website Design, ASP', '2 Days', '275 $', 'We are looking for a developer to help with web programming on a smaller scale.\r\n\r\n1. Registration, password reset\r\n\r\n2. Login to administration, Au ths Form, FB, Google, MS Account\r\n\r\n2. Content management, texts on the web\r\n\r\n3. Service Management\r\n\r\n4. Ordering the service to the cart\r\n\r\n5. Support page'),
(10, 9, 'Website and Mobile App Testing & Documentation', ' Mobile App', 'Website Design, Graphic D', ' Testing / QA, Websi', '2270 $', 'We are looking for an individual to test our website to identify bugs and issues in Chrome, Safari, Firefox, and Edge browsers and our app as we prepare for public launch. Bugs will need to be documented and added to JIRA.\r\n\r\nWe will need some availability to discuss the project during times that overlap with our EST hours from 8a-10am.\r\n\r\nA successful candidate should be able to work at least several hours each day Monday-Friday. The work need each week will increase or decrease based on the speed of development. The work hours are flexible and could continue on as a part-time contract as testing is required.\r\n\r\nOur first project is to test our website using Firefox and we expect this to take 10-20 hours.\r\n\r\nThis company is a Christian ministry so you will need to feel comfortable working in a Christian faith context.'),
(11, 6, 'Bus Ticket Booking Application', 'Booking Application', 'Java, Laravel, Flutter', '30 Days', '1500 $', 'Major requirements are listed bellow:\r\n\r\n1.) user registration\r\n\r\n2.) user should also able to book his ticket without registration (guest account)\r\n\r\n3.)admin login: the website owner should be able to easily manage, book tickets in particular bus, functionality to add new bus service to new destination point\r\n\r\n4.) this website should allow the user to select a preferred seat from one of\r\n\r\nthe vacant seats available at the time of booking.\r\n\r\n5.) the website owner should be able to block/ release booking for preferred seats.\r\n\r\n6.)the website owner should able to edit /delete user logins.\r\n\r\n7.)Generate a printable Bus Ticket if the ticket booking and payment is successful\r\n\r\nticket should automatically emailed to the user once the ticket is booked, simultaneously website owner should get a copy of printed ticket to his email.\r\n\r\n8.)user can be able to print ticket at any-time from the website.\r\n\r\n9.) if the particular seat is booked and the user made a payment, then the status of t'),
(12, 7, 'Front-End Development', 'Enterprise Web Applicatio', 'Website Design, HTML, PHP', '10 Days', '125 $', 'TradeUp is a startup that aims to bring the only secure solution to online item trading. We are currently looking for a skilled website developer to recreate our websiteâ€™s Figma prototype (Â± 20 pages) using HTML and CSS. The job will not require any backend coding or interface designing, only front-end development.\r\n\r\nDepending on your skillset, we may be interested in an ongoing job.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`RequestID`, `ClientID`, `CoderID`, `ProjectID`, `Response`) VALUES
(1, 3, 2, '1', 'Accepted'),
(2, 6, 2, '2', 'Accepted'),
(4, 7, 4, '4', 'Accepted'),
(7, 3, 2, '5', 'Accepted'),
(8, 8, 13, '8', 'Accepted'),
(9, 9, 12, '10', 'Pending'),
(10, 9, 2, '9', 'Accepted'),
(11, 6, 15, '11', 'Rejected'),
(12, 7, 5, '12', 'Accepted'),
(13, 11, 10, '6', 'Accepted'),
(14, 7, 2, '7', 'Pending');

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
(9, 'Hannah', '$2y$10$VaqSiOEm92ReTNeio4XpBOvprnhlPROlM/mOMr5ZjLNn2cWpRD70.', 'client', 'angelina@yahoo.com'),
(10, 'Michael Scott', '$2y$10$mljAgCSR77xhp3aXjLOdD.ZWU.J47GkSwY5OCnc/Qt.BNQYqCTN9.', 'coder', 'michael@gmail.com'),
(11, 'Ross Geller 1982', '$2y$10$xtymC8.Y/YweFHrkFHwyeuAPSQCZWD/OfSUXF./6vKmE54Muwt8Dm', 'client', 'ross1982@gmail.com'),
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
MODIFY `PaymentID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `ProjectID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `RequestID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
