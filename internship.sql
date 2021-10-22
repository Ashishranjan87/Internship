-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2021 at 06:18 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `five`
--

DROP TABLE IF EXISTS `five`;
CREATE TABLE IF NOT EXISTS `five` (
  `Collaborative_activities` int(11) NOT NULL,
  `Collaborative_activities_2019` int(11) NOT NULL,
  `Collaborative_activities_2018` int(11) NOT NULL,
  `Collaborative_activities_2017` int(11) NOT NULL,
  `Collaborative_activities_2016` int(11) NOT NULL,
  `Collaborative_activities_2015` int(11) NOT NULL,
  `Functional_MoUs` int(11) NOT NULL,
  `Functional_MoUs_2019` int(11) NOT NULL,
  `Functional_MoUs_2018` int(11) NOT NULL,
  `Functional_MoUs_2017` int(11) NOT NULL,
  `Functional_MoUs_2016` int(11) NOT NULL,
  `Functional_MoUs_2015` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `four`
--

DROP TABLE IF EXISTS `four`;
CREATE TABLE IF NOT EXISTS `four` (
  `Extension_activities` varchar(500) NOT NULL,
  `Number_awards` int(11) NOT NULL,
  `Number_awards_2019` int(11) NOT NULL,
  `Number_awards_2018` int(11) NOT NULL,
  `Number_awards_2017` int(11) NOT NULL,
  `Number_awards_2016` int(11) NOT NULL,
  `Number_awards_2015` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `Extension_programs` int(11) NOT NULL,
  `Extension_programs_2019` int(11) NOT NULL,
  `Extension_programs_2018` int(11) NOT NULL,
  `Extension_programs_2017` int(11) NOT NULL,
  `Extension_programs_2016` int(11) NOT NULL,
  `Extension_programs_2015` int(11) NOT NULL,
  `Students_participating` int(11) NOT NULL,
  `Students_participating_2019` int(11) NOT NULL,
  `Students_participating_2018` int(11) NOT NULL,
  `Students_participating_2017` int(11) NOT NULL,
  `Students_participating_2016` int(11) NOT NULL,
  `Students_participating_2015` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `one`
--

DROP TABLE IF EXISTS `one`;
CREATE TABLE IF NOT EXISTS `one` (
  `avrage_grant` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `noofteachers` int(11) NOT NULL,
  `percentageofdepartments` int(11) NOT NULL,
  `Grant_Received_2019` int(11) NOT NULL,
  `Grant_Received_2018` int(11) NOT NULL,
  `Grant_Received_2017` int(11) NOT NULL,
  `Grant_Received_2016` int(11) NOT NULL,
  `Grant_Received_2015` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `one`
--

INSERT INTO `one` (`avrage_grant`, `percentage`, `noofteachers`, `percentageofdepartments`, `Grant_Received_2019`, `Grant_Received_2018`, `Grant_Received_2017`, `Grant_Received_2016`, `Grant_Received_2015`) VALUES
(45, 65, 45, 78, 10, 20, 30, 40, 50);

-- --------------------------------------------------------

--
-- Table structure for table `three`
--

DROP TABLE IF EXISTS `three`;
CREATE TABLE IF NOT EXISTS `three` (
  `PhDs_Registered` int(11) NOT NULL,
  `Eligible_teacher` int(11) NOT NULL,
  `Guides` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `Research_paper` int(11) NOT NULL,
  `Research_paper_2019` int(11) NOT NULL,
  `Research_paper_2018` int(11) NOT NULL,
  `Research_paper_2017` int(11) NOT NULL,
  `Research_paper_2016` int(11) NOT NULL,
  `Research_paper_2015` int(11) NOT NULL,
  `list_research` int(11) NOT NULL,
  `list_research_2019` int(11) NOT NULL,
  `list_research_2018` int(11) NOT NULL,
  `list_research_2017` int(11) NOT NULL,
  `list_research_2016` int(11) NOT NULL,
  `list_research_2015` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `two`
--

DROP TABLE IF EXISTS `two`;
CREATE TABLE IF NOT EXISTS `two` (
  `inovations` varchar(200) NOT NULL,
  `noofworkshops` float NOT NULL,
  `No_of_workshops_2019` int(11) NOT NULL,
  `No_of_workshops_2018` int(11) NOT NULL,
  `No_of_workshops_2017` int(11) NOT NULL,
  `No_of_workshops_2016` int(11) NOT NULL,
  `No_of_workshops_2015` int(11) NOT NULL,
  `Additional_link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
