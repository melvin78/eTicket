-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 08:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `alias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `alias`) VALUES
(4, 'tango'),
(5, 'foxtroto'),
(6, 'bravo'),
(7, 'chanteelle'),
(8, 'livik'),
(9, 'sahnok'),
(10, 'erangel'),
(11, 'bootcamp');

-- --------------------------------------------------------

--
-- Table structure for table `adminpass`
--

CREATE TABLE `adminpass` (
  `idadminPass` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `adminpass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpass`
--

INSERT INTO `adminpass` (`idadminPass`, `adminid`, `adminpass`) VALUES
(4, 4, 'jumbo'),
(5, 5, 'liviko'),
(6, 6, 'rohzok'),
(7, 7, 'georgopool');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `idagent` int(11) NOT NULL,
  `agentFirstname` varchar(45) NOT NULL,
  `agentSecondame` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`idagent`, `agentFirstname`, `agentSecondame`) VALUES
(1, 'Eticket', 'System'),
(2, 'deogracious', 'sino'),
(3, 'bootcamp', 'rohok');

--
-- Triggers `agent`
--
DELIMITER $$
CREATE TRIGGER `agent_BEFORE_INSERT` BEFORE INSERT ON `agent` FOR EACH ROW BEGIN



END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `agentpass`
--

CREATE TABLE `agentpass` (
  `idagentPass` int(11) NOT NULL,
  `agentid` int(11) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentpass`
--

INSERT INTO `agentpass` (`idagentPass`, `agentid`, `password`) VALUES
(5, 1, 'nickfury'),
(6, 2, 'leviticus'),
(7, 3, 'serious');

-- --------------------------------------------------------

--
-- Stand-in structure for view `availale_seats`
-- (See below for the actual view)
--
CREATE TABLE `availale_seats` (
`seatscol` varchar(45)
,`busid` int(11)
,`busno` varchar(45)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `booked_tickets_by_date`
-- (See below for the actual view)
--
CREATE TABLE `booked_tickets_by_date` (
`traveldate` date
,`Boardingpoint` varchar(45)
,`destination` varchar(45)
,`countyfrom` varchar(45)
,`countyto` varchar(45)
,`afrom` varchar(45)
,`ato` varchar(45)
,`price` int(11)
,`arrivaltime` time
,`tickets_bought_by` int(11)
,`idno` int(11)
,`ticketno` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `idbus` int(11) NOT NULL,
  `busno` varchar(45) NOT NULL,
  `mileage` int(11) NOT NULL,
  `ofseats` int(11) NOT NULL,
  `scheduleid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`idbus`, `busno`, `mileage`, `ofseats`, `scheduleid`) VALUES
(15, 'KAT788', 12, 48, 4),
(16, 'KAYU90', 12, 46, 2),
(17, 'KAY712', 12, 12, 3),
(18, 'KAHYE1', 12, 12, 1),
(19, 'JKLLLQ', 12, 31, 2);

--
-- Triggers `bus`
--
DELIMITER $$
CREATE TRIGGER `bus_AFTER_INSERT` AFTER INSERT ON `bus` FOR EACH ROW BEGIN
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('1A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('2A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('3A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('4A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('5A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('6A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('7A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('10A', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('1B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('2B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('3B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('4B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('5B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('6B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('7B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9B', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('10B',new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('1C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('2C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('3C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('4C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('5C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('6C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('7C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('8C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9C',new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('10C', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('1D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('2D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('3D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('4D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('5D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('6D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('7D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('10D', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('1E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('2E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('3E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('4E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('5E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('6E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('7E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('9E', new.idbus, '0');
INSERT INTO `eticket`.`seats` (`seatscol`, `busid`, `status`) VALUES ('10E', new.idbus, '0');


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bus_BEFORE_INSERT` BEFORE INSERT ON `bus` FOR EACH ROW BEGIN


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `buss`
-- (See below for the actual view)
--
CREATE TABLE `buss` (
`busno` varchar(45)
,`idbus` int(11)
,`idschedule` int(11)
,`seatsavailable` bigint(21)
,`traveldate` date
,`Boardingpoint` varchar(45)
,`Destination` varchar(45)
,`departuretime` time
,`arrival_time` time
,`price` int(11)
,`countyfrom` varchar(45)
,`countyt` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bus_seat`
-- (See below for the actual view)
--
CREATE TABLE `bus_seat` (
`idbus` int(11)
,`busno` varchar(45)
,`seatscol` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `idcounty` int(11) NOT NULL,
  `countyname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`idcounty`, `countyname`) VALUES
(1, 'MOMBASA'),
(2, 'KISUMU'),
(3, 'SIAYA'),
(4, 'KAJIADO'),
(5, 'NAIROBI');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `idlocation` int(11) NOT NULL,
  `location_name` varchar(45) NOT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `countyid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`idlocation`, `location_name`, `alias`, `countyid`) VALUES
(1, 'kwale', 'KW', 1),
(2, 'kondele', 'KO', 2),
(3, 'wagayi', 'WG', 2),
(4, 'taita taveta', 'LV', 1),
(5, 'ongata rongai', 'OR', 4),
(6, 'bondo', 'PH', 3),
(7, 'kasarani', 'KR', 5),
(8, 'nairobi west', 'NW', 5),
(9, 'kisumu ndogo', 'KN', 3);

--
-- Triggers `location`
--
DELIMITER $$
CREATE TRIGGER `location_BEFORE_INSERT` BEFORE INSERT ON `location` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `passenger_ticket_details`
-- (See below for the actual view)
--
CREATE TABLE `passenger_ticket_details` (
`seat_id` varchar(45)
,`busno` varchar(45)
,`Expecte_arrivaltime` time
,`departuretime` time
,`dateofissue` timestamp
,`schedule_id` int(11)
,`id` int(11)
,`idticketdetails` int(11)
,`fname` varchar(45)
,`sname` varchar(45)
,`lname` varchar(45)
,`phone` int(11)
,`secondary_id` int(11)
,`travel_Date` date
,`TICKETNO` varchar(107)
,`Boardingfrom` varchar(45)
,`Destination` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `idschedule` int(11) NOT NULL,
  `traveldate` date DEFAULT NULL,
  `fro_M` int(11) DEFAULT NULL,
  `to_dest` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `countyf` int(11) DEFAULT NULL,
  `countyt` int(11) DEFAULT NULL,
  `aliasfrom` varchar(45) DEFAULT NULL,
  `aliasto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`idschedule`, `traveldate`, `fro_M`, `to_dest`, `price`, `time_id`, `arrival_time`, `countyf`, `countyt`, `aliasfrom`, `aliasto`) VALUES
(1, '2020-05-21', 1, 5, 1000, 2, '19:50:00', 1, 5, 'BY', 'JE'),
(2, '2020-06-16', 2, 3, 15000, 4, '20:50:00', 2, 3, 'NY', 'OR'),
(3, '2020-07-21', 4, 3, 1000, 2, '21:10:00', 1, 2, 'LV', 'OR'),
(4, '2020-06-22', 3, 1, 3000, 9, '23:50:00', 3, 1, 'OR', 'BY');

-- --------------------------------------------------------

--
-- Stand-in structure for view `schedule_details`
-- (See below for the actual view)
--
CREATE TABLE `schedule_details` (
`idschedule` int(11)
,`traveldate` date
,`departuretime` time
,`Boardingpoint` varchar(45)
,`Destination` varchar(45)
,`countyfrom` varchar(45)
,`countyto` varchar(45)
,`afrom` varchar(45)
,`ato` varchar(45)
,`price` int(11)
,`arrivaltime` time
);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `idseats` int(11) NOT NULL,
  `seatscol` varchar(45) DEFAULT NULL,
  `busid` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`idseats`, `seatscol`, `busid`, `status`) VALUES
(125, '1A', 15, 0),
(126, '2A', 15, 1),
(127, '3A', 15, 1),
(128, '4A', 15, 1),
(129, '5A', 15, 1),
(130, '6A', 15, 1),
(131, '7A', 15, 0),
(132, '9A', 15, 0),
(133, '9A', 15, 0),
(134, '10A', 15, 0),
(135, '1A', 15, 0),
(136, '2B', 15, 0),
(137, '3B', 15, 0),
(138, '4B', 15, 0),
(139, '5B', 15, 0),
(140, '6B', 15, 0),
(141, '7B', 15, 0),
(142, '9B', 15, 0),
(143, '10B', 15, 0),
(144, '1C', 15, 0),
(145, '2C', 15, 0),
(146, '3C', 15, 0),
(147, '4C', 15, 0),
(148, '5C', 15, 0),
(149, '6C', 15, 0),
(150, '7C', 15, 0),
(151, '8C', 15, 0),
(152, '9C', 15, 1),
(153, '10C', 15, 0),
(154, '1D', 15, 0),
(155, '2D', 15, 1),
(156, '3D', 15, 1),
(157, '4D', 15, 1),
(158, '5D', 15, 1),
(159, '6D', 15, 0),
(160, '7D', 15, 0),
(161, '9D', 15, 0),
(162, '9D', 15, 0),
(163, '10D', 15, 0),
(164, '1E', 15, 0),
(165, '2E', 15, 0),
(166, '3E', 15, 1),
(167, '4E', 15, 0),
(168, '5E', 15, 0),
(169, '6E', 15, 1),
(170, '7E', 15, 0),
(171, '9E', 15, 0),
(172, '9E', 15, 1),
(173, '10E', 15, 0),
(174, '1A', 16, 0),
(175, '2A', 16, 0),
(176, '3A', 16, 0),
(177, '4A', 16, 0),
(178, '5A', 16, 0),
(179, '6A', 16, 0),
(180, '7A', 16, 0),
(181, '9A', 16, 0),
(182, '9A', 16, 0),
(183, '10A', 16, 0),
(184, '1B', 16, 0),
(185, '2B', 16, 0),
(186, '3B', 16, 0),
(187, '4B', 16, 0),
(188, '5B', 16, 0),
(189, '6B', 16, 0),
(190, '7B', 16, 0),
(191, '9B', 16, 0),
(192, '10B', 16, 0),
(193, '1C', 16, 1),
(194, '2C', 16, 0),
(195, '3C', 16, 0),
(196, '4C', 16, 0),
(197, '5C', 16, 0),
(198, '6C', 16, 0),
(199, '7C', 16, 0),
(200, '8C', 16, 0),
(201, '9C', 16, 0),
(202, '10C', 16, 0),
(203, '1D', 16, 1),
(204, '2D', 16, 0),
(205, '3D', 16, 1),
(206, '4D', 16, 0),
(207, '5D', 16, 0),
(208, '6D', 16, 0),
(209, '7D', 16, 0),
(210, '9D', 16, 0),
(211, '9D', 16, 0),
(212, '10D', 16, 0),
(213, '1E', 16, 0),
(214, '2E', 16, 0),
(215, '3E', 16, 0),
(216, '4E', 16, 0),
(217, '5E', 16, 0),
(218, '6E', 16, 0),
(219, '7E', 16, 0),
(220, '9E', 16, 0),
(221, '9E', 16, 0),
(222, '10E', 16, 0),
(223, '1A', 17, 1),
(224, '2A', 17, 0),
(225, '3A', 17, 0),
(226, '4A', 17, 1),
(227, '5A', 17, 1),
(228, '6A', 17, 0),
(229, '7A', 17, 0),
(230, '9A', 17, 0),
(231, '9A', 17, 0),
(232, '10A', 17, 0),
(233, '1B', 17, 0),
(234, '2B', 17, 0),
(235, '3B', 17, 1),
(236, '4B', 17, 0),
(237, '5B', 17, 0),
(238, '6B', 17, 0),
(239, '7B', 17, 0),
(240, '9B', 17, 0),
(241, '10B', 17, 0),
(242, '1C', 17, 0),
(243, '2C', 17, 1),
(244, '3C', 17, 1),
(245, '4C', 17, 0),
(246, '5C', 17, 1),
(247, '6C', 17, 0),
(248, '7C', 17, 1),
(249, '8C', 17, 0),
(250, '9C', 17, 0),
(251, '10C', 17, 0),
(252, '1D', 17, 0),
(253, '2D', 17, 0),
(254, '3D', 17, 0),
(255, '4D', 17, 1),
(256, '5D', 17, 0),
(257, '6D', 17, 0),
(258, '7D', 17, 0),
(259, '9D', 17, 0),
(260, '9D', 17, 0),
(261, '10D', 17, 0),
(262, '1E', 17, 0),
(263, '2E', 17, 0),
(264, '3E', 17, 0),
(265, '4E', 17, 0),
(266, '5E', 17, 0),
(267, '6E', 17, 0),
(268, '7E', 17, 0),
(269, '9E', 17, 0),
(270, '9E', 17, 0),
(271, '10E', 17, 0),
(272, '1A', 18, 0),
(273, '2A', 18, 0),
(274, '3A', 18, 0),
(275, '4A', 18, 0),
(276, '5A', 18, 0),
(277, '6A', 18, 0),
(278, '7A', 18, 0),
(279, '9A', 18, 0),
(280, '9A', 18, 0),
(281, '10A', 18, 0),
(282, '1B', 18, 0),
(283, '2B', 18, 1),
(284, '3B', 18, 0),
(285, '4B', 18, 0),
(286, '5B', 18, 0),
(287, '6B', 18, 0),
(288, '7B', 18, 0),
(289, '9B', 18, 0),
(290, '10B', 18, 0),
(291, '1C', 18, 1),
(292, '2C', 18, 0),
(293, '3C', 18, 0),
(294, '4C', 18, 0),
(295, '5C', 18, 0),
(296, '6C', 18, 0),
(297, '7C', 18, 0),
(298, '8C', 18, 0),
(299, '9C', 18, 0),
(300, '10C', 18, 0),
(301, '1D', 18, 1),
(302, '2D', 18, 0),
(303, '3D', 18, 0),
(304, '4D', 18, 0),
(305, '5D', 18, 0),
(306, '6D', 18, 0),
(307, '7D', 18, 1),
(308, '9D', 18, 1),
(309, '9D', 18, 1),
(310, '10D', 18, 0),
(311, '1E', 18, 0),
(312, '2E', 18, 0),
(313, '3E', 18, 0),
(314, '4E', 18, 0),
(315, '5E', 18, 0),
(316, '6E', 18, 0),
(317, '7E', 18, 0),
(318, '9E', 18, 0),
(319, '9E', 18, 0),
(320, '10E', 18, 0),
(321, '1A', 19, 0),
(322, '2A', 19, 0),
(323, '3A', 19, 0),
(324, '4A', 19, 0),
(325, '5A', 19, 0),
(326, '6A', 19, 0),
(327, '7A', 19, 0),
(328, '9A', 19, 0),
(329, '9A', 19, 0),
(330, '10A', 19, 0),
(331, '1B', 19, 0),
(332, '2B', 19, 0),
(333, '3B', 19, 0),
(334, '4B', 19, 0),
(335, '5B', 19, 0),
(336, '6B', 19, 0),
(337, '7B', 19, 0),
(338, '9B', 19, 0),
(339, '10B', 19, 0),
(340, '1C', 19, 0),
(341, '2C', 19, 0),
(342, '3C', 19, 0),
(343, '4C', 19, 0),
(344, '5C', 19, 0),
(345, '6C', 19, 0),
(346, '7C', 19, 0),
(347, '8C', 19, 0),
(348, '9C', 19, 0),
(349, '10C', 19, 0),
(350, '1D', 19, 0),
(351, '2D', 19, 0),
(352, '3D', 19, 0),
(353, '4D', 19, 0),
(354, '5D', 19, 0),
(355, '6D', 19, 0),
(356, '7D', 19, 0),
(357, '9D', 19, 0),
(358, '9D', 19, 0),
(359, '10D', 19, 0),
(360, '1E', 19, 0),
(361, '2E', 19, 0),
(362, '3E', 19, 0),
(363, '4E', 19, 0),
(364, '5E', 19, 0),
(365, '6E', 19, 0),
(366, '7E', 19, 0),
(367, '9E', 19, 0),
(368, '9E', 19, 0),
(369, '10E', 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `secondaryuser`
--

CREATE TABLE `secondaryuser` (
  `fname` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `idno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticketi` int(11) NOT NULL,
  `useridentificationo` int(11) DEFAULT NULL,
  `ticketnol` int(11) DEFAULT 0,
  `seatid` varchar(45) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `busno` varchar(45) DEFAULT NULL,
  `primaryuser_id` int(11) DEFAULT NULL,
  `date_of_generation` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticketi`, `useridentificationo`, `ticketnol`, `seatid`, `schedule_id`, `busno`, `primaryuser_id`, `date_of_generation`) VALUES
(1, 1, 525040, '2C', 3, '17', 567, '2020-09-30 20:32:44'),
(2, 2, 521590, '3C', 3, '17', 567, '2020-09-30 20:32:44'),
(3, 3, 722765, '2C', 3, '17', 567, '2020-09-30 20:33:38'),
(4, 4, 123191, '3C', 3, '17', 567, '2020-09-30 20:33:38'),
(5, 5, 860296, '4D', 3, '17', 567, '2020-09-30 20:40:50'),
(6, 6, 226466, '5C', 3, '17', 567, '2020-09-30 20:48:13'),
(7, 7, 304429, '3D', 2, '16', 567, '2020-09-30 21:01:50'),
(8, 8, 833180, '4D', 4, '15', 254, '2020-10-01 09:48:00'),
(9, 9, 211840, '5D', 4, '15', 254, '2020-10-01 09:48:00'),
(10, 10, 568622, '1D', 2, '16', 36557359, '2020-10-01 09:50:52'),
(11, 11, 287655, '1C', 2, '16', 36557359, '2020-10-01 09:51:55'),
(12, 12, 951836, '9C', 4, '15', 254, '2020-10-01 09:53:05'),
(13, 13, 814500, '1D', 1, '18', 36557359, '2020-10-01 15:33:09'),
(14, 14, 276711, '1C', 1, '18', 567, '2020-10-01 15:47:00'),
(15, 15, 249048, '7D', 1, '18', 36557359, '2020-10-02 18:03:10'),
(16, 16, 409179, '9D', 1, '18', 36557359, '2020-10-02 18:03:11'),
(17, 17, 844708, '2B', 1, '18', 1456, '2020-10-02 21:13:04');

--
-- Triggers `ticket`
--
DELIMITER $$
CREATE TRIGGER `ticket_AFTER_INSERT` AFTER INSERT ON `ticket` FOR EACH ROW BEGIN

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ticket_BEFORE_INSERT` BEFORE INSERT ON `ticket` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ticketdet`
--

CREATE TABLE `ticketdet` (
  `idticketdetails` int(11) NOT NULL,
  `dateofissue` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `busid` int(11) DEFAULT NULL,
  `seat_id` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `secondary_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketdet`
--

INSERT INTO `ticketdet` (`idticketdetails`, `dateofissue`, `id`, `schedule_id`, `busid`, `seat_id`, `fname`, `sname`, `lname`, `phone`, `secondary_id`) VALUES
(567, '2020-09-30 20:32:44', 1, 3, 17, '2C', 'john', 'doe', 'doety', 312, 3242312),
(567, '2020-09-30 20:32:44', 2, 3, 17, '3C', 'joelinton', 'longstaff', 'shawn', 1321, 42332),
(567, '2020-09-30 20:33:38', 3, 3, 17, '2C', 'john', 'doe', 'doety', 312, 3242312),
(567, '2020-09-30 20:33:38', 4, 3, 17, '3C', 'joelinton', 'longstaff', 'shawn', 1321, 42332),
(567, '2020-09-30 20:40:50', 5, 3, 17, '4D', '1', '1', '1', 1, 1),
(567, '2020-09-30 20:48:13', 6, 3, 17, '5C', 'hj', 'nn', 'nn', 67, 234),
(567, '2020-09-30 21:01:50', 7, 2, 16, '3D', 's', 'x', 'x', 11, 342),
(254, '2020-10-01 09:48:00', 8, 4, 15, '4D', 'melvin', 'ochieng', 'odhiambo', 1284, 13231),
(254, '2020-10-01 09:48:00', 9, 4, 15, '5D', 'jesse', 'tyler', 'ferguson', 0, 12312),
(36557359, '2020-10-01 09:50:52', 10, 2, 16, '1D', 'mevlin', 'melvin', 'jdkd', 12323, 123),
(36557359, '2020-10-01 09:51:55', 11, 2, 16, '1C', 'sdadsd', 'sdasda', 'sdsdsd', 12313, 1231),
(254, '2020-10-01 09:53:05', 12, 4, 15, '9C', 'nn', 'sdadasd', 'dsdsa', 12312, 42312),
(36557359, '2020-10-01 15:33:09', 13, 1, 18, '1D', 'ds', 's', 's', 0, 2321),
(567, '2020-10-01 15:47:00', 14, 1, 18, '1C', '1', '1', '1', 1, 1),
(36557359, '2020-10-02 18:03:10', 15, 1, 18, '7D', '1', '1', '1', 1, 1),
(36557359, '2020-10-02 18:03:11', 16, 1, 18, '9D', '1', '1', '1', 1, 1),
(1456, '2020-10-02 21:13:04', 17, 1, 18, '2B', '1', '1', '1', 1, 1);

--
-- Triggers `ticketdet`
--
DELIMITER $$
CREATE TRIGGER `ticketdet_AFTER_INSERT` AFTER INSERT ON `ticketdet` FOR EACH ROW BEGIN

declare ticketno int;
set ticketno=FLOOR(RAND() * 900001) + 100000;

insert into ticket (useridentificationo,schedule_id,busno,ticketnol,seatid,primaryuser_id) values (new.id,new.schedule_id,new.busid,ticketno,new.seat_id,new.idticketdetails);

update seats
set status = 1
where busid = new.busid and seatscol = new.seat_id;


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ticketdet_BEFORE_INSERT` BEFORE INSERT ON `ticketdet` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `idtime` int(11) NOT NULL,
  `timecol` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`idtime`, `timecol`) VALUES
(1, '06:30:00'),
(2, '07:00:00'),
(3, '07:30:00'),
(4, '08:00:00'),
(5, '08:45:00'),
(6, '09:30:00'),
(7, '10:45:00'),
(8, '11:30:00'),
(9, '17:50:00'),
(10, '18:30:00'),
(11, '19:00:00'),
(12, '19:30:00'),
(13, '20:00:00'),
(14, '20:30:00'),
(15, '21:00:00'),
(16, '21:40:00'),
(17, '22:50:00'),
(18, '23:50:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `unavailable_seats`
-- (See below for the actual view)
--
CREATE TABLE `unavailable_seats` (
`seatscol` varchar(45)
,`busid` int(11)
,`status` tinyint(1)
,`idseats` int(11)
,`busno` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `Firstn` varchar(45) DEFAULT NULL,
  `SecondName` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `emailAddress` varchar(45) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `idno` int(11) NOT NULL,
  `postalbox` varchar(45) DEFAULT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`Firstn`, `SecondName`, `surname`, `emailAddress`, `Dob`, `idno`, `postalbox`, `phoneNumber`) VALUES
('fsdas', 'sdsd', 'sdsd', 'sds@gmail.com', '2020-10-06', 0, NULL, 232),
('claire', 'dunohy', 'phil', 'asd@gmail.com', '2020-09-07', 109, NULL, 121),
('johm', 'sss', 'sas', 'asss@gmail.com', '2020-10-02', 145, NULL, 12312),
('kenya', 'jokingly', 'equity', 'equitty@gmail.com', '2020-10-07', 254, NULL, 23122),
('jok', 'fil', 'sd', 'xcvbnm@gmail.com', '2020-10-07', 489, NULL, 346789),
('sofia', 'vergra', 'goj', 'asd@gmail.com', '2020-09-08', 567, NULL, 112312),
('jol', 'jol', 'jol', 'rdfghh@gmail.com', '2020-09-07', 907, NULL, 68799),
('fsdas', 'sdsd', 'sdsd', 'sds@gmail.com', '2020-10-06', 1231, NULL, 232),
('dfadf', 'sss', 'sdas', 'asss@gmail.com', '2020-10-07', 1456, NULL, 12),
('alex', 'dunphy', 'phil', 'dunphy@gmail.com', '2020-07-08', 2713, NULL, 133231),
('asdas', 'sds', 'saada', 'sad@gmail.com', '2020-10-04', 5678, NULL, 3212),
('melvin', 'odhiambo', 'ochij', 'gha@gmail.com', '2020-08-04', 12131, NULL, 71212121),
('melvin', 'ochieng', 'odhiambo', 'adasdas@gmail.com', '2021-01-14', 12345, NULL, 123123),
('cvhbnm', 'cvbn', 'fghb', 'xcvbnm@gmail.com', '2020-10-07', 987657, NULL, 346789),
('melvin', 'odhiambo', 'ochij', 'gha@gmail.com', '2020-08-04', 1213134, NULL, 71212121),
('e', 's', 'ss', 'ss2@gmail.com', '2020-10-05', 4445555, NULL, 32234),
('cvhbnm', 'cvbn', 'fghb', 'xcvbnm@gmail.com', '2020-10-07', 9876579, NULL, 346789),
('Joe', 'Penn', 'Badgley', 'badgley@gmail.com', '0000-00-00', 10101010, '12', 120992121),
('thanos', 'soul', 'stone', 'stone12@gmail.com', '1999-04-09', 11111111, '12', 71281221),
('faith', 'atieno', 'nyasakwa', 'nyasakwa@gmail.com', '2000-06-09', 11111112, '12', 123131132),
('brian', 'owino', 'odhiambo', 'odhiambo@gmail.com', '0000-00-00', 12121212, '12', 812312312),
('khaless', 'khaleid', 'drogo', 'philauri1@gmail.com', '0000-00-00', 12331322, '12', 908088080),
('helio', 'justus', 'brandon', 'brandon76@gmail.com', '0000-00-00', 12345679, '57', 877976556),
('holebas', 'ward', 'prowse', 'prowse34@gmail.com', '1992-04-12', 14141414, '12', 121313123),
('melvin', 'ochieng', 'odhiambo', 'ochieng088@gmail.com', '0000-00-00', 36557347, '12', 713812611),
('melvin', 'ochieng', 'odhiambo', 'ochieng088@gmail.com', '0000-00-00', 36557349, '12', 713812611),
('nimuey', 'fey', 'queen', 'queen@gmail.com', '0000-00-00', 36557359, '12', 713812611),
('melvin', 'ochieng', 'odhiambo', 'ochieng088@gmail.com', '0000-00-00', 36557377, '12', 713812611),
('melvin', 'ochieng', 'odhiambo', 'ochieng088@gmail.com', '0000-00-00', 36557389, '12', 713812611),
('maria', 'odhiambo', 'omwandho', 'jkor@gmail.com', '2020-09-12', 54545432, NULL, 923),
('john', 'doe', 'bluth', 'bluth@gmail.com', '0000-00-00', 55555555, '12', 908123122),
('gamoraa', 'jenkins', 'foul', 'foil@gmail.com', '2020-01-11', 56565656, '12', 313131231),
('melvin', 'ochieng', 'odhiambo', 'ochieng088@gmail.com', '0000-00-00', 68798090, '12', 713812611),
('ariel', 'winter', 'dunphy', 'winter@gmail.com', '2020-09-10', 91919191, NULL, 71234432),
('lindsey', 'bluth', 'horias', 'bluth78@gmail.com', '0000-00-00', 99999999, '12', 133123131),
('sdf', 'adsa', 'saas', 'assa@gmail.com', '2020-10-06', 365573590, NULL, 54321);

--
-- Triggers `userr`
--
DELIMITER $$
CREATE TRIGGER `user_AFTER_INSERT` AFTER INSERT ON `userr` FOR EACH ROW BEGIN





END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_password`
--

CREATE TABLE `user_password` (
  `iduser_password` int(11) NOT NULL,
  `idno` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_password`
--

INSERT INTO `user_password` (`iduser_password`, `idno`, `password`) VALUES
(1, 12345, ''),
(2, 123456, '$2y$10$X16hatlpWUoksUeNwPf3CelEcHQYJJ1QzVF1/0v56IqnHDA8NbJ7q'),
(3, 36557359, '$2y$10$2JaXtSj6UL1/gftdkh3Qnuc.t4NzozNgr7NZQyAd1z/5NDVW5GisG'),
(4, 1234561, '$2y$10$rnJftfZyuNJYnz1nlLQOoemT8tHMQbi8sgmfz8ea06gDwasgIpHt2'),
(5, 12345617, '$2y$10$Peawv3vxLmGvcfkwa7PCM.POYmMzRX0v1xabkjt7s6cdY3iKBrp9S'),
(6, 123456178, '$2y$10$TwB9anpoAe1UegLxIYc5cuksZpTWxTQxj97vyOQ.ezsT4Ds5fNwFK'),
(7, 1234561789, '$2y$10$HVDCIaLNABwkaj.JSUxHeuWLWJmIV2ygSlMslT/PLMZKeJmEVLD4W'),
(8, 123456178, '$2y$10$oz/7gO9.gXaInmbbGI0ezeFd8i6etrq.zXVE.lkzLR.kX6UjmzP86'),
(9, 123412, '$2y$10$xOIV5sK5gUfneC2LSK4XTeieJAst0VDx6rOjV.tdFAn5VIN1ATXgK'),
(10, 509, '$2y$10$uuAMRG6LQ1GzxHtkgb5oSeM0KDHwmOabhfWRR/2n6AUSh.w4wF9PG'),
(11, 1234128, '$2y$10$..lAQJV5YNFbYPON/9/vxOAMWlO29URGqMC5FBD3a3p4nodrvtrIa'),
(12, 123455899, '$2y$10$XudDS0DvQG/aRryP5lEnie6NWNWyOEeZoa3CjYjiBGafA2HPB5M8C'),
(13, 2147483647, '$2y$10$3xsh8yk4/hKK8HduUhSOgO2kk/Wa.lJAjReuAdCJm64C/Flq2pcxS'),
(14, 1232131, '$2y$10$wf9IVEhqqk.Xn/hM98EP.OHZQu2lStHneLH8VHrTUl6n5fonJ1cAK'),
(15, 12345, '$2y$10$TQ08V1JMkTeTWEe6gQHtCejscZj3SnarHdqc1YX1T07hg/33UvPGa'),
(16, 2713, '$2y$10$zu1xFX9hI13Y7Q1KHWjjDumEKRBIMdnADxCiPhyFcMmMVfLVowYYa'),
(17, 9191919, '$2y$10$Q8u7FVDgM0pgvvEPPadqneT1U7NgEYRv24XFEj/qpz14ANNDeYweu'),
(18, 54545432, '$2y$10$Va9XzgEK4VlAQ1VLGT98quwCnn9OkFrKKqxrSp.TJ/aGPYQxPo4vG'),
(19, 567, '$2y$10$JHRp6K5T34D0Mr10aUKkJORaBpgAaEbtyGQdDTVVd2EsqQGb91rgq'),
(20, 907, '$2y$10$J2ojOyfO3anMxykpkgYRtepyHQu64SiuuHWnz1ublaB2TI8WceKIm'),
(21, 254, '$2y$10$wlgXX1iCkIJICpfgHP06OuCCrPBGsmlcCqxEhqb9oibnjCWBu.Ox2'),
(22, 489, '$2y$10$PD/VIFTieUWlNnU2jCXvTuM1ntiNGsQ.AICKkIJ0Q27mcx9obFENO'),
(23, 36557590, '$2y$10$zM3t68ma1NecKog5BhDiS.4/I/mcU0zhMOsGKRz0bZuNxrBeeSiAG'),
(24, 1231, '$2y$10$vbhiuBZNtZIbSmPWqIivvO0W76OfTtD/8zXXcbkFyUERR6s262Csu'),
(25, 5678, '$2y$10$hI.7oGkR3sTz1wLvE.HtG.vB1vazQcxV7NMjTj3/89KSVYGVDLo7u'),
(26, 1456, '$2y$10$4iKeT0dkFLWeXygXpZaVcOrMxdAyUTbsQrKrJ7PuAT3xtuGacdzY2');

-- --------------------------------------------------------

--
-- Structure for view `availale_seats`
--
DROP TABLE IF EXISTS `availale_seats`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `availale_seats`  AS  select `seats`.`seatscol` AS `seatscol`,`seats`.`busid` AS `busid`,(select `bus`.`busno` from `bus` where `bus`.`idbus` = `seats`.`busid`) AS `busno`,`seats`.`status` AS `status` from `seats` where `seats`.`status` = 0 ;

-- --------------------------------------------------------

--
-- Structure for view `booked_tickets_by_date`
--
DROP TABLE IF EXISTS `booked_tickets_by_date`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `booked_tickets_by_date`  AS  select `schedule_details`.`traveldate` AS `traveldate`,`schedule_details`.`Boardingpoint` AS `Boardingpoint`,`schedule_details`.`Destination` AS `destination`,`schedule_details`.`countyfrom` AS `countyfrom`,`schedule_details`.`countyto` AS `countyto`,`schedule_details`.`afrom` AS `afrom`,`schedule_details`.`ato` AS `ato`,`schedule_details`.`price` AS `price`,`schedule_details`.`arrivaltime` AS `arrivaltime`,(select `ticketdet`.`idticketdetails` from `ticketdet` where `ticketdet`.`schedule_id` = `schedule_details`.`idschedule`) AS `tickets_bought_by`,(select `ticketdet`.`secondary_id` from `ticketdet` where `schedule_details`.`idschedule` = `ticketdet`.`schedule_id`) AS `idno`,(select `ticket`.`ticketnol` from `ticket` where `ticket`.`schedule_id` = `schedule_details`.`idschedule`) AS `ticketno` from `schedule_details` ;

-- --------------------------------------------------------

--
-- Structure for view `buss`
--
DROP TABLE IF EXISTS `buss`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `buss`  AS  select `bus`.`busno` AS `busno`,`bus`.`idbus` AS `idbus`,`schedule`.`idschedule` AS `idschedule`,(select count(`seats`.`busid`) AS `status` from `seats` where `bus`.`idbus` = `seats`.`busid` and `seats`.`status` = 0) AS `seatsavailable`,`schedule`.`traveldate` AS `traveldate`,(select `location`.`location_name` from `location` where `location`.`idlocation` = `schedule`.`fro_M`) AS `Boardingpoint`,(select `location`.`location_name` from `location` where `location`.`idlocation` = `schedule`.`to_dest`) AS `Destination`,(select `time`.`timecol` from `time` where `time`.`idtime` = `schedule`.`time_id`) AS `departuretime`,`schedule`.`arrival_time` AS `arrival_time`,`schedule`.`price` AS `price`,(select `county`.`countyname` from `county` where `county`.`idcounty` = `schedule`.`countyf`) AS `countyfrom`,(select `county`.`countyname` from `county` where `county`.`idcounty` = `schedule`.`countyt`) AS `countyt` from (`schedule` join `bus` on(`schedule`.`idschedule` = `bus`.`scheduleid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `bus_seat`
--
DROP TABLE IF EXISTS `bus_seat`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `bus_seat`  AS  select `bus`.`idbus` AS `idbus`,`bus`.`busno` AS `busno`,`seats`.`seatscol` AS `seatscol` from (`bus` join `seats` on(`bus`.`idbus` = `seats`.`busid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `passenger_ticket_details`
--
DROP TABLE IF EXISTS `passenger_ticket_details`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `passenger_ticket_details`  AS  select `ticketdet`.`seat_id` AS `seat_id`,(select `bus`.`busno` from `bus` where `bus`.`idbus` = `ticketdet`.`busid`) AS `busno`,(select `schedule`.`arrival_time` from `schedule` where `schedule`.`idschedule` = `ticketdet`.`schedule_id`) AS `Expecte_arrivaltime`,(select `schedule_details`.`departuretime` from `schedule_details` where `schedule_details`.`idschedule` = `ticketdet`.`schedule_id`) AS `departuretime`,`ticketdet`.`dateofissue` AS `dateofissue`,`ticketdet`.`schedule_id` AS `schedule_id`,`ticketdet`.`id` AS `id`,`ticketdet`.`idticketdetails` AS `idticketdetails`,`ticketdet`.`fname` AS `fname`,`ticketdet`.`sname` AS `sname`,`ticketdet`.`lname` AS `lname`,`ticketdet`.`phone` AS `phone`,`ticketdet`.`secondary_id` AS `secondary_id`,(select `schedule`.`traveldate` from `schedule` where `schedule`.`idschedule` = `ticketdet`.`schedule_id`) AS `travel_Date`,(select concat('ETS-',`schedule`.`aliasfrom`,'-',(select `ticket`.`ticketnol` from `ticket` where `ticket`.`useridentificationo` = `ticketdet`.`id`),'-',`schedule`.`aliasto`) from `schedule` where `schedule`.`idschedule` = `ticketdet`.`schedule_id`) AS `TICKETNO`,(select `schedule_details`.`Boardingpoint` from `schedule_details` where `ticketdet`.`schedule_id` = `schedule_details`.`idschedule`) AS `Boardingfrom`,(select `schedule_details`.`Destination` from `schedule_details` where `ticketdet`.`schedule_id` = `schedule_details`.`idschedule`) AS `Destination` from `ticketdet` ;

-- --------------------------------------------------------

--
-- Structure for view `schedule_details`
--
DROP TABLE IF EXISTS `schedule_details`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `schedule_details`  AS  select `schedule`.`idschedule` AS `idschedule`,`schedule`.`traveldate` AS `traveldate`,(select `time`.`timecol` from `time` where `time`.`idtime` = `schedule`.`time_id`) AS `departuretime`,(select `location`.`location_name` from `location` where `location`.`idlocation` = `schedule`.`fro_M`) AS `Boardingpoint`,(select `location`.`location_name` from `location` where `location`.`idlocation` = `schedule`.`to_dest`) AS `Destination`,(select `county`.`countyname` from `county` where `county`.`idcounty` = `schedule`.`countyf`) AS `countyfrom`,(select `county`.`countyname` from `county` where `county`.`idcounty` = `schedule`.`countyt`) AS `countyto`,(select `location`.`alias` from `location` where `location`.`idlocation` = `schedule`.`fro_M`) AS `afrom`,(select `location`.`alias` from `location` where `location`.`idlocation` = `schedule`.`to_dest`) AS `ato`,`schedule`.`price` AS `price`,`schedule`.`arrival_time` AS `arrivaltime` from `schedule` ;

-- --------------------------------------------------------

--
-- Structure for view `unavailable_seats`
--
DROP TABLE IF EXISTS `unavailable_seats`;

CREATE ALGORITHM=UNDEFINED  SQL SECURITY DEFINER VIEW `unavailable_seats`  AS  select `seats`.`seatscol` AS `seatscol`,`seats`.`busid` AS `busid`,`seats`.`status` AS `status`,`seats`.`idseats` AS `idseats`,(select `bus`.`busno` from `bus` where `bus`.`idbus` = `seats`.`busid`) AS `busno` from `seats` where `seats`.`status` = 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD UNIQUE KEY `idadmin_UNIQUE` (`idadmin`);

--
-- Indexes for table `adminpass`
--
ALTER TABLE `adminpass`
  ADD PRIMARY KEY (`idadminPass`),
  ADD UNIQUE KEY `idadminPass_UNIQUE` (`idadminPass`),
  ADD KEY `admin_adminpass` (`adminid`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idagent`);

--
-- Indexes for table `agentpass`
--
ALTER TABLE `agentpass`
  ADD PRIMARY KEY (`idagentPass`),
  ADD UNIQUE KEY `idagentPass_UNIQUE` (`idagentPass`),
  ADD KEY `agent_pass_idx` (`agentid`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`idbus`),
  ADD UNIQUE KEY `idbus_UNIQUE` (`idbus`),
  ADD KEY `bus_schedule_idx` (`scheduleid`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`idcounty`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idlocation`),
  ADD UNIQUE KEY `idlocation_UNIQUE` (`idlocation`),
  ADD KEY `county_id_idx` (`countyid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idschedule`),
  ADD KEY `fschedule_location_idx` (`fro_M`),
  ADD KEY `schedule_time_idx` (`time_id`),
  ADD KEY `schedule_county_idx` (`countyf`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`idseats`),
  ADD KEY `bus_seat_idx` (`busid`);

--
-- Indexes for table `secondaryuser`
--
ALTER TABLE `secondaryuser`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketi`);

--
-- Indexes for table `ticketdet`
--
ALTER TABLE `ticketdet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketdet_Schedule_idx` (`schedule_id`),
  ADD KEY `ticketdet_user_idx` (`idticketdetails`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`idtime`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`idno`),
  ADD UNIQUE KEY `idno_UNIQUE` (`idno`);

--
-- Indexes for table `user_password`
--
ALTER TABLE `user_password`
  ADD PRIMARY KEY (`iduser_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `adminpass`
--
ALTER TABLE `adminpass`
  MODIFY `idadminPass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `idagent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agentpass`
--
ALTER TABLE `agentpass`
  MODIFY `idagentPass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `idbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `idcounty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `idlocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `idschedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `idseats` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ticketdet`
--
ALTER TABLE `ticketdet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `idtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_password`
--
ALTER TABLE `user_password`
  MODIFY `iduser_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminpass`
--
ALTER TABLE `adminpass`
  ADD CONSTRAINT `admin_adminpass` FOREIGN KEY (`adminid`) REFERENCES `admin` (`idadmin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `agentpass`
--
ALTER TABLE `agentpass`
  ADD CONSTRAINT `agent_pass` FOREIGN KEY (`agentid`) REFERENCES `agent` (`idagent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_schedule` FOREIGN KEY (`scheduleid`) REFERENCES `schedule` (`idschedule`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `ct` FOREIGN KEY (`countyid`) REFERENCES `county` (`idcounty`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fschedule_location` FOREIGN KEY (`fro_M`) REFERENCES `location` (`idlocation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `schedule_county` FOREIGN KEY (`countyf`) REFERENCES `county` (`idcounty`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `schedule_time` FOREIGN KEY (`time_id`) REFERENCES `time` (`idtime`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `bus_seat` FOREIGN KEY (`busid`) REFERENCES `bus` (`idbus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticketdet`
--
ALTER TABLE `ticketdet`
  ADD CONSTRAINT `ticketdet_Schedule` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`idschedule`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticketdet_user` FOREIGN KEY (`idticketdetails`) REFERENCES `userr` (`idno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
