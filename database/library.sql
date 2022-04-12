-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 07:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `grp_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_edition` int(5) NOT NULL,
  `book_author` varchar(40) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`grp_id`, `book_name`, `book_edition`, `book_author`, `book_quantity`) VALUES
(20, 'The KGF', 1, 'Henil', 5),
(21, 'Harry Potter', 1, 'The Unknown Girl', 3),
(22, 'The London Travel', 2, 'Kirti Dave', 4),
(23, 'The Brief History Of', 1, 'Stephen Hawkings', 6),
(24, 'The Lust Stories', 1, 'Deepa Dhadhuk', 3),
(26, 'Java : The Complete ', 15, 'Henil Mistry', 20),
(27, 'The ABCD', 1, 'Dev Nakum', 2),
(28, 'The Blocks of C++', 2, 'Pratham Modi', 3),
(29, 'The Networking FireW', 1, 'Henil Mistry', 2),
(30, 'The Monkeys', 5, 'Henil Modi', 4),
(31, 'The time dilation', 1, 'Albert Einstine', 10),
(32, 'Jingle Bells Poems', 1, 'Deepa Bhai', 20),
(33, 'The building blocks ', 1, 'Harshil Padsala', 10),
(34, 'Pirates of the careb', 1, 'Jack sparrow', 5),
(37, 'A glitch', 1, 'Harry', 1),
(38, 'A glitch in the world', 1, 'Code wirh harry', 5),
(39, 'Harry Potter', 1, 'J. K. Rowling', 2),
(40, 'Harry Potter', 2, 'J. K. Rowling', 1),
(41, 'Harry Potter', 2, 'J. K. Rowling', 1),
(42, 'Harry Potter', 3, 'J. K. Rowling', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_copies`
--

CREATE TABLE `tbl_book_copies` (
  `book_id` int(11) NOT NULL,
  `grp_id` int(11) NOT NULL,
  `book_status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book_copies`
--

INSERT INTO `tbl_book_copies` (`book_id`, `grp_id`, `book_status`) VALUES
(71, 20, 'NO'),
(72, 20, 'YES'),
(73, 20, 'YES'),
(74, 20, 'NO'),
(75, 20, 'NO'),
(76, 21, 'YES'),
(77, 21, 'NO'),
(78, 21, 'NO'),
(79, 22, 'NO'),
(80, 22, 'NO'),
(81, 22, 'NO'),
(82, 22, 'NO'),
(83, 23, 'NO'),
(84, 23, 'NO'),
(85, 23, 'NO'),
(86, 23, 'NO'),
(87, 23, 'NO'),
(88, 23, 'NO'),
(89, 24, 'NO'),
(90, 24, 'NO'),
(91, 24, 'NO'),
(112, 26, 'NO'),
(113, 26, 'NO'),
(114, 26, 'NO'),
(115, 26, 'NO'),
(116, 26, 'NO'),
(117, 26, 'NO'),
(118, 26, 'NO'),
(119, 26, 'NO'),
(120, 26, 'NO'),
(121, 26, 'NO'),
(122, 26, 'NO'),
(123, 26, 'NO'),
(124, 26, 'NO'),
(125, 26, 'NO'),
(126, 26, 'NO'),
(127, 26, 'NO'),
(128, 26, 'NO'),
(129, 26, 'NO'),
(130, 26, 'NO'),
(131, 26, 'NO'),
(132, 27, 'NO'),
(133, 27, 'NO'),
(134, 28, 'NO'),
(135, 28, 'NO'),
(136, 28, 'NO'),
(137, 29, 'NO'),
(138, 29, 'NO'),
(139, 30, 'NO'),
(140, 30, 'NO'),
(141, 30, 'NO'),
(142, 30, 'NO'),
(143, 31, 'NO'),
(144, 31, 'NO'),
(145, 31, 'NO'),
(146, 31, 'NO'),
(147, 31, 'NO'),
(148, 31, 'NO'),
(149, 31, 'NO'),
(150, 31, 'NO'),
(151, 31, 'NO'),
(152, 31, 'NO'),
(153, 32, 'NO'),
(154, 32, 'NO'),
(155, 32, 'NO'),
(156, 32, 'NO'),
(157, 32, 'NO'),
(158, 32, 'NO'),
(159, 32, 'NO'),
(160, 32, 'NO'),
(161, 32, 'NO'),
(162, 32, 'NO'),
(163, 32, 'NO'),
(164, 32, 'NO'),
(165, 32, 'NO'),
(166, 32, 'NO'),
(167, 32, 'NO'),
(168, 32, 'NO'),
(169, 32, 'NO'),
(170, 32, 'NO'),
(171, 32, 'NO'),
(172, 32, 'NO'),
(173, 33, 'NO'),
(174, 33, 'NO'),
(175, 33, 'NO'),
(176, 33, 'NO'),
(177, 33, 'NO'),
(178, 33, 'NO'),
(179, 33, 'NO'),
(180, 33, 'NO'),
(181, 33, 'NO'),
(182, 33, 'NO'),
(183, 34, 'NO'),
(184, 34, 'NO'),
(185, 34, 'NO'),
(186, 34, 'NO'),
(187, 34, 'NO'),
(194, 37, 'NO'),
(195, 38, 'NO'),
(196, 38, 'NO'),
(197, 38, 'NO'),
(198, 38, 'NO'),
(199, 38, 'NO'),
(200, 39, 'YES'),
(201, 39, 'NO'),
(202, 40, 'NO'),
(203, 41, 'NO'),
(204, 42, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept_subjects`
--

CREATE TABLE `tbl_dept_subjects` (
  `dept_name` varchar(2) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `sub_code` varchar(10) DEFAULT NULL,
  `sub_name` varchar(56) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dept_subjects`
--

INSERT INTO `tbl_dept_subjects` (`dept_name`, `semester`, `sub_code`, `sub_name`) VALUES
('CE', 1, 'MA143', 'ENGINEERING MATHEMATICS-I'),
('CE', 1, 'CE143', 'COMPUTER CONCEPTS & PROGRAMMING'),
('CE', 1, 'EE145', 'BASICS OF ELECTRONICS & ELECTRICAL ENGINEERING'),
('CE', 1, 'IT144', 'ICT WORKSHOP'),
('CE', 1, 'PY142', 'ENGINEERING PHYSICS-I'),
('CE', 1, 'FS101A', 'FOUNDATION COURSE ON MATHEMATICS AND PHYSICS'),
('CE', 1, 'HS101.02', 'A COMMUNICATIVE ENGLISH'),
('CE', 2, 'MA144', 'ENGINEERING MATHEMATICS-II'),
('CE', 2, 'CE144', 'OBJECT ORIENTED PROGRAMMING WITH C++'),
('CE', 2, 'ME145', 'ELEMENTS OF ENGINEERING'),
('CE', 2, 'CL144.02', 'A ENVIRONMENTAL SCIENCES'),
('CE', 2, 'PY143', 'ENGINEERING PHYSICS-II'),
('CE', 2, 'FS102A', 'FOUNDATION COURSE ON CHEMISTRY AND BIOLOGY'),
('CE', 3, 'MA245', 'DISCRETE MATHEMATICS'),
('CE', 3, 'CE251', 'JAVA PROGRAMMING'),
('CE', 3, 'CE252', 'DIGITAL ELECTRONICS'),
('CE', 3, 'CE253', 'DATA COMMUNICATION & NETWORKING'),
('CE', 3, 'CE244', 'SOFTWARE GROUP PROJECT-1'),
('CE', 4, 'CE245', 'DATA STRUCTURE AND ALGORITHMS'),
('CE', 4, 'CE246', 'DATABASE MANAGEMENT SYSTEM'),
('CE', 4, 'CE258', 'MICROPROCESSOR AND COMPUTER ORGANIZATION'),
('CE', 4, 'CE259', 'PROGRAMMING IN PYTHON'),
('CE', 4, 'CE255', 'SOFTWARE GROUP PROJECT-2'),
('CE', 5, 'CE354', 'OPERATING SYSTEM'),
('CE', 5, 'CE355', 'DESIGN AND ANALYSIS OF ALGORITHMS'),
('CE', 5, 'CE343', 'SOFTWARE ENGINEERING'),
('CE', 5, 'CE373', 'MOBILE APPLICATION DEVELOPMENT'),
('CE', 5, 'CE377', 'ADVANCED WEB TECHNOLOGY'),
('CE', 5, 'CE356', 'SOFTWARE GROUP PROJECT-3'),
('CE', 6, 'CE357', 'ARTIFICIAL INTELLIGENCE'),
('CE', 6, 'CE348', 'INFORMATION SECURITY'),
('CE', 6, 'CE349', 'THEORY OF COMPUTATION'),
('CE', 6, 'CE358', 'COMPUTER NETWORKS'),
('CE', 6, 'CE374', 'SERVICE ORIENTED COMPUTING'),
('CE', 6, 'CE375', 'DIGITAL IMAGE PROCESSING'),
('CE', 6, 'CE359', 'SOFTWARE GROUP PROJECT-4'),
('CE', 7, 'CE441', 'BIG DATA ANALYTICS'),
('CE', 7, 'CE442', 'DESIGN OF LANAGUAGE PROCESSORS'),
('CE', 7, 'CE443', 'CLOUD COMPUTING'),
('CE', 7, 'CE444', 'INTERNET OF THINGS'),
('CE', 7, 'CE473', 'MACHINE LEARNING'),
('CE', 8, 'CE447', 'SOFTWARE PROJECT MAJOR'),
('IT', 1, 'MA143', 'ENGINEERING MATHEMATICS-I'),
('IT', 1, 'CE143', 'COMPUTER CONCEPTS & PROGRAMMING'),
('IT', 1, 'EE145', 'BASICS OF ELECTRONICS & ELECTRICAL ENGINEERING'),
('IT', 1, 'IT144', 'ICT WORKSHOP'),
('IT', 1, 'PY142', 'ENGINEERING PHYSICS-I'),
('IT', 1, 'FS101A', 'FOUNDATION COURSE ON MATHEMATICS AND PHYSICS'),
('IT', 1, 'HS101.02', 'A COMMUNICATIVE ENGLISH'),
('IT', 2, 'MA144', 'ENGINEERING MATHEMATICS-II'),
('IT', 2, 'CE144', 'OBJECT ORIENTED PROGRAMMING WITH C++'),
('IT', 2, 'ME145', 'ELEMENTS OF ENGINEERING'),
('IT', 2, 'CL144.02', 'A ENVIRONMENTAL SCIENCES'),
('IT', 2, 'PY143', 'ENGINEERING PHYSICS-II'),
('IT', 2, 'FS102A', 'FOUNDATION COURSE ON CHEMISTRY AND BIOLOGY'),
('IT', 3, 'MA253', 'DISCRETE MATHEMATICS AND ALGEBRA'),
('IT', 3, 'IT250', 'DIGITAL ELECTRONICS'),
('IT', 3, 'IT251', 'JAVA PROGRAMMING'),
('IT', 3, 'IT252', 'DATA COMMUNICATION & NETWORKING'),
('IT', 3, 'IT253', 'SOFTWARE GROUP PROJECT'),
('IT', 4, 'MA261', 'STATISTICAL AND NUMBERICAL'),
('IT', 4, 'IT254', 'COMPUTER ARCHITECTURE AND MICROPROCESSOR INTERFACING'),
('IT', 4, 'IT255', 'WEB TECHNOLOGIES'),
('IT', 4, 'IT256', 'DATA STRUCTURE AND ALGORITHMS'),
('IT', 4, 'IT257', 'DATABASE MANAGEMENT SYSTEM'),
('IT', 4, 'IT258', 'SOFTWARE GROUP PROJECT'),
('IT', 5, 'IT341', 'DESIGN & ANALYSIS OF ALGORITHM'),
('IT', 5, 'IT342', 'ADVANCED WEB TECHNOLOGY'),
('IT', 5, 'IT343', 'OPERATING SYSTEM'),
('IT', 5, 'IT344', 'COMPUTER NETWORKS'),
('IT', 5, 'IT345', 'SOFTWARE GROUP PROJECT'),
('IT', 5, 'IT371', 'ADVANCED JAVA PROGRAMMING'),
('IT', 5, 'IT373', 'EMBEDDED SYSTEMS'),
('IT', 5, 'IT374', 'PYTHON PROGRAMMING'),
('IT', 6, 'IT347', 'SOFTWARE ENGINEERING'),
('IT', 6, 'IT348', 'CRYPTOGRAPHY & NETWORK SECURITY'),
('IT', 6, 'IT349', 'WIRELESS COMMUNICATION & MOBILE COMPUTING'),
('IT', 6, 'IT375', 'SERVICE ORIENTED ARCHITECTURE'),
('IT', 6, 'IT376', 'IMAGE PROCESSING'),
('IT', 6, 'IT377', 'MACHINE LEARNING & APPLICATIONS'),
('IT', 6, 'IT350', 'SOFTWARE GROUP PROJECT'),
('IT', 7, 'IT441', 'DATA SCIENCE'),
('IT', 7, 'IT442', 'ADVANCED COMPUTING'),
('IT', 7, 'IT443', 'LANGUAGE PROCESSOR'),
('IT', 7, 'IT444', 'INTERNET OF THINGS'),
('IT', 7, 'IT471', 'FOUNDATION OF MODERN NETWORKING'),
('IT', 7, 'IT472', 'HIGH PERFORMANCE COMPUTER ARCHITECTURE'),
('IT', 7, 'IT473', 'ARTIFICIAL INTELLIGENCE'),
('IT', 7, 'IT445', 'SOFTWARE GROUP PROJECT'),
('IT', 8, 'IT407', 'SOFTWARE PROJECT MAJOR'),
('ME', 1, 'MA143', 'ENGINEERING MATHEMATICS-1'),
('ME', 1, 'ME146', 'ENGINEERING GRAPHICS'),
('ME', 1, 'CL143', 'ENGINEERING MECHANICS'),
('ME', 1, 'ME142', 'WORKSHOP PRACTICES'),
('ME', 1, 'PY142', 'ENGINEERING PHYSICS-1'),
('ME', 1, 'CL144.01', 'A ENVIRONMENTAL SCIENCES'),
('ME', 1, 'FS101A', 'FOUNDATION COURSE ON MATHEMATICS AND PHYSICS'),
('ME', 1, 'HS101.02', 'A COMMUNICATIVE ENGLISH'),
('ME', 2, 'MA144', 'ENGINEERING MATHEMATICS-2'),
('ME', 2, 'ME147', 'BASICS OF CIVIL & MECHANICAL ENGINEERING'),
('ME', 2, 'EE145', 'BASICS OF ELECTRONICS & ELECTRICAL ENGINEERING'),
('ME', 2, 'IT143', 'FUNDAMENTALS OF COMPUTER PROGRAMMING'),
('ME', 2, 'PY143', 'ENGINEERING PHYSICS-2'),
('ME', 2, 'FS102', 'FOUNDATION COURSE ON CHEMISTRY AND BIOLOGY'),
('ME', 3, 'MA251', 'ENGINEERING MATHEMATICS-3'),
('ME', 3, 'CL243', 'MECHANICS OF SOLIDS'),
('ME', 3, 'ME242', 'ENGINEERING THERMODYNAMICS'),
('ME', 3, 'ME253', 'MECHANISMS AND MACHINES'),
('ME', 3, 'ME251', 'CASTING & JOINING PROCESSES'),
('ME', 3, 'HS121.02 A', 'CREATIVITY, PROBLEM SOLVING AND INNOVATION'),
('ME', 4, 'ME252', 'MACHNING & FORMING PROCESSES'),
('ME', 4, 'ME246', 'MATERIAL ENGINEERING & METALLURGY'),
('ME', 4, 'ME247', 'FLUID MECHANICS'),
('ME', 4, 'ME250', 'DYNAMICS OF MACHINES'),
('ME', 4, 'MA248', 'NUMERICAL AND STATISTICAL METHODS'),
('ME', 4, 'HS111.02A', 'HUMAN VALUES & PROFESSIONAL ETHICS'),
('ME', 5, 'ME350', 'THERMAL ENGINEERING'),
('ME', 5, 'ME341', 'DESIGN CONCEPT & MACHINE DRAWING'),
('ME', 5, 'ME342', 'HEAT & MASS TRANSFER'),
('ME', 5, 'ME352', 'METROLOGY & QUALITY CONTROL'),
('ME', 5, 'HS131.02A', 'COMMUNICATION AND SOFT SKILLS'),
('ME', 6, 'ME344', 'REFRIGERATION AND AIR-CONDITIONING'),
('ME', 6, 'ME348', 'PRODUCTION TECHNOLOGY'),
('ME', 6, 'ME354', 'FLUID MECHINES'),
('ME', 6, 'ME355', 'DESIGN OF MACHINE ELEMENTS'),
('ME', 6, 'ME353', 'COMPUTER AIDED DESIGN'),
('ME', 6, 'HS132.02A', 'CONTRIBUTOR PERSONALITY DEVELOPMENT'),
('ME', 7, 'ME441.01', 'QUALITY ENGINEERING & ASSURANCE'),
('ME', 7, 'ME442', 'COMPUTER AIDED DESIGN'),
('ME', 7, 'ME443', 'OPERATION RESEARCH'),
('ME', 7, 'ME444.01', 'DESIGN OF MACHINE ELEMENTS 2'),
('ME', 7, 'ME445', 'ALTERNATIVE ENERGY SOURCES'),
('ME', 8, 'ME447', 'POWER PLANT ENGINEERING'),
('ME', 8, 'ME448', 'COMPUTER AIDED MANUFACTURING'),
('ME', 8, 'ME449', 'INDUSTRIAL ENGINEERING & MANAGEMENT'),
('ME', 8, 'ME450', 'CONTROL ENGINEERING'),
('EE', 1, 'MA143', 'ENGINEERING MATHEMATICS-1'),
('EE', 1, 'ME146', 'ENGINEERING GRAPHICS'),
('EE', 1, 'ME142', 'WORKSHOP PRACTICES'),
('EE', 1, 'CL143', 'ENGINEERING PRACTICES'),
('EE', 1, 'PY141.01', 'ENGINEERING PHYSICS'),
('EE', 2, 'MA144', 'ENGINEERING MATHEMATICS-2'),
('EE', 2, 'ME147', 'BASICS OF CIVIL & MECHANICAL ENGINEERING'),
('EE', 2, 'CL142.01', 'ENVIROMENTAL SCIENCES'),
('EE', 2, 'EE145', 'BASICS OF ELECTRONICS & ELECTRICAL ENGINEERING'),
('EE', 2, 'IT143', 'FUNDAMENTALS OF COMPUTER PROGRAMMING'),
('EE', 3, 'MA241', 'ENGINEERING MATHEMATICS-III'),
('EE', 3, 'EE241', 'ANALOG AND DIGITAL ELECTRONICS'),
('EE', 3, 'EE242', 'CIRCUIT THEORY'),
('EE', 3, 'EE243', 'ELECTRICAL MEASUREMENTS & INDUSTRIAL INSTRUMENTATION'),
('EE', 4, 'EE244', 'ELECTRICAL POWER GENERATION AND ITS ECONOMICS'),
('EE', 4, 'EE245', 'CONTROL SYSTEMS'),
('EE', 4, 'EE246', 'MICROPROCESSOR & MICROCONTROLLER'),
('EE', 4, 'EE247', 'TRANSFORMERS & INDUCTION MACHINES'),
('EE', 5, 'EE341', 'ELECTRICAL POWER TRANSMISSION AND DISTRIBUTION'),
('EE', 5, 'EE342', 'SYNCHRONOUS AND DC MACHINES'),
('EE', 5, 'EE343', 'POWER ELECTRONICS AND DRIVES - I'),
('EE', 5, 'EE345', 'ELECTRICAL PRODUCT SURVEY'),
('EE', 6, 'EE346', 'DIGITAL SIGNAL PROCESSING'),
('EE', 6, 'EE347', 'PROGRAMMABLE LOGIC CONTROLLERS AND INDUSTRIAL AUTOMATION'),
('EE', 6, 'EE348', 'POWER ELECTRONICS AND DRIVES - II'),
('EE', 6, 'EE349', 'FAULT ANALYSIS AND SWITCHGEAR'),
('EE', 6, 'EE376', 'SPECIAL ELECTRICAL MACHINES AND APPLICATIONS'),
('EE', 6, 'EE377', 'EMBEDDED SYSTEMS'),
('EE', 7, 'EE441', 'POWER SYSTEM OPERATIONS AND CONTROL'),
('EE', 7, 'EE442', 'POWER SYSTEM PROTECTION'),
('EE', 7, 'EE443', 'ELECTRICALMACHINE DESIGN'),
('EE', 7, 'EE444', 'SIMULATION LAB'),
('EE', 7, 'EE471', 'POWER ELECTRONICS APPLICATIONS IN POWER SYSTEM'),
('EE', 7, 'EE472', 'COMMUNICATION ENGINEERING'),
('EE', 8, 'EE446', 'COMMISSIONING AND TESTING OF ELECTRICAL'),
('EE', 8, 'EE447', 'MODELING AND CONTROL OF RENEWABLE ENERGY'),
('EC', 1, 'MA143', 'ENGINEERING MATHEMATICS-I'),
('EC', 1, 'CE143', 'COMPUTER CONCEPTS & PROGRAMMING'),
('EC', 1, 'EE145', 'BASICS OF ELECTRONICS & ELECTRICAL ENGINEERING'),
('EC', 1, 'IT144', 'ICT WORKSHOP'),
('EC', 1, 'PY142', 'ENGINEERING PHYSICS-I'),
('EC', 1, 'FS101A', 'FOUNDATION COURSE ON MATHEMATICS AND PHYSICS'),
('EC', 1, 'HS101.02', 'A COMMUNICATIVE ENGLISH'),
('EC', 2, 'MA144', 'ENGINEERING MATHEMATICS-II'),
('EC', 2, 'CE144', 'OBJECT ORIENTED PROGRAMMING WITH C++'),
('EC', 2, 'ME145', 'ELEMENTS OF ENGINEERING'),
('EC', 2, 'CL144.02', 'A ENVIRONMENTAL SCIENCES'),
('EC', 2, 'PY143', 'ENGINEERING PHYSICS-II'),
('EC', 2, 'FS102A', 'FOUNDATION COURSE ON CHEMISTRY AND BIOLOGY'),
('EC', 3, 'MA243.01', 'TRANSFORMS AND VECTOR DIFFERENTIAL CALCULUS'),
('EC', 3, 'EC241', 'DIGITAL ELECTRONICS & LOGIC DESIGN'),
('EC', 3, 'EC242', 'NETWORK THEORY'),
('EC', 3, 'EC243', 'ELECTRONIC DEVICES & MEASUREMENTS'),
('EC', 3, 'EC281.01', 'INTRODUCTION TO MATLAB PROGRAMMING'),
('EC', 4, 'EC245', 'CONTROL SYSTEMS'),
('EC', 4, 'EC246', 'ANALOG CIRCUITS AND APPLICATIONS'),
('EC', 4, 'EC247', 'MICROPROCESSOR & INTERFACING'),
('EC', 4, 'EC248', 'ANALOG COMMUNICATION'),
('EC', 4, 'EC282.01', 'PROTOTYPING ELECTRONICS WITH ARDUINO'),
('EC', 5, 'EC341', 'ELECTROMANGETIC THEORY'),
('EC', 5, 'EC342', 'VLSI TECHNOLOGY & DESIGN'),
('EC', 5, 'EC343', 'DIGITAL SIGNAL PROCESSING'),
('EC', 5, 'EC344', 'MICROCONTROLLER AND APPLICATION'),
('EC', 5, 'EC371', 'POWER ELCTRONICS'),
('EC', 5, 'EC372', 'DIGITAL SYSTEM DESIGN'),
('EC', 6, 'EC347', 'ANTENNA & WAVE PROPAGATION'),
('EC', 6, 'EC348', 'DIGITAL COMMUNICATION'),
('EC', 6, 'EC349', 'EMBEDDED SYSTEMS'),
('EC', 6, 'EC352', 'EMBEDDED LINUX'),
('EC', 6, 'EC373', 'JAVA PROGRAMMING'),
('EC', 6, 'EC374', 'INFORMATION THEORY'),
('EC', 7, 'EC441', 'DATA COMMUNICATION & NETWORKING'),
('EC', 7, 'EC442', 'RF & MICROWAVE ENGINEERING'),
('EC', 7, 'EC443', 'WIRELESS COMMUNICATION'),
('EC', 7, 'EC444', 'OPTICAL COMMUNICATION'),
('EC', 7, 'EC471', 'DIGITAL IMAGE PROCESSING'),
('EC', 7, 'EC472', 'RADAR SYSTEMS'),
('EC', 7, 'EC473', 'ERROR CONTROL CODING'),
('EC', 8, 'EC448', 'PROJECT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issued_books`
--

CREATE TABLE `tbl_issued_books` (
  `book_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `issued_date` date NOT NULL,
  `expected_return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_issued_books`
--

INSERT INTO `tbl_issued_books` (`book_id`, `user_id`, `issued_date`, `expected_return_date`) VALUES
(72, '20ce059', '2022-04-08', '2022-04-23'),
(73, '20ce056', '2022-04-06', '2022-04-21'),
(76, '20ce059', '2022-04-09', '2022-04-24'),
(200, '20ce056', '2022-04-11', '2022-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recommendation`
--

CREATE TABLE `tbl_recommendation` (
  `grp_id` int(11) NOT NULL,
  `sub_code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_recommendation`
--

INSERT INTO `tbl_recommendation` (`grp_id`, `sub_code`) VALUES
(26, 'CE373'),
(27, 'CE373'),
(20, 'CE259'),
(21, 'CE259'),
(22, 'CE259'),
(23, 'CE259'),
(24, 'CE259'),
(27, 'CE251'),
(26, 'CE251'),
(24, 'CE245'),
(23, 'CE245'),
(39, 'HS101.02'),
(40, 'FS101A'),
(42, 'PY142');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_book`
--

CREATE TABLE `tbl_return_book` (
  `book_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `return_date` date NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_return_book`
--

INSERT INTO `tbl_return_book` (`book_id`, `user_id`, `return_date`, `admin_id`) VALUES
(74, '20ce059', '2022-04-10', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(10) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_mail`, `user_password`, `user_role`) VALUES
('20ce056', '20ce056@charusat.edu.in', '916172e7995de7e1e64c0c3aad1edd59', 0),
('20ce059', '20ce059@charusat.edu.in', 'e84ff5b4071e6bbe7a7d7fd97c75decd', 0),
('Admin', 'prathammodi333@gmail.com', '916172e7995de7e1e64c0c3aad1edd59', 1),
('admin1', '20ce054@charusat.edu.in', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `tbl_book_copies`
--
ALTER TABLE `tbl_book_copies`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_issued_books`
--
ALTER TABLE `tbl_issued_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_return_book`
--
ALTER TABLE `tbl_return_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_book_copies`
--
ALTER TABLE `tbl_book_copies`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
