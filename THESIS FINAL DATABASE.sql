-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2020 at 04:33 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `dates`) VALUES
(10, 'rodney', 'rodney@gmail.com', 'a53e89ae4509b5c206ddedb1913a6f75', '2020-02-12 10:27:03'),
(9, 'rodney', 'rodney@gmail.com', 'a53e89ae4509b5c206ddedb1913a6f75', '2020-02-10 11:58:51'),
(8, 'admin', 'admin@gmailcom', '21232f297a57a5a743894a0e4a801fc3', '2020-02-10 11:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `adult_immunization`
--

CREATE TABLE IF NOT EXISTS `adult_immunization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `consultation_purpose` varchar(255) NOT NULL,
  `PNL` varchar(255) NOT NULL,
  `FL` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `done_consult` varchar(255) NOT NULL,
  `num` int(255) NOT NULL,
  `old` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `adult_immunization`
--

INSERT INTO `adult_immunization` (`id`, `patient_id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `PNL`, `FL`, `others`, `done_consult`, `num`, `old`, `dates`) VALUES
(86, '', 'Uchiha', 'Sasuke', 'Namikaze', '', '', 'Adult Immunization', 'l', '', '', 'Done consulting', 0, '', '2020-03-04 13:14:34'),
(87, '', 'Batersal', 'Rodney', 'Torib', '25', 'Hidden Leaf', 'Adult Immunization', 'l', '', '', 'Done consulting', 0, 'Current', '2020-03-04 14:22:12'),
(88, '', 'Uchiha', 'Obito', 'Namikaze', '25', 'Hidden Leaf', 'Adult Immunization', 's', 'ss', 's', 'Done consulting', 0, 'Current', '2020-03-05 10:56:10'),
(89, '', 'Uchiha', 'Sasuke', 'Namikaze', '43', 'Hidden Leaf', 'Adult Immunization', '2', '2', '2', 'Done consulting', 0, 'Current', '2020-03-05 12:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `ad_patient`
--

CREATE TABLE IF NOT EXISTS `ad_patient` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Birth_date` int(255) NOT NULL,
  `Birth_place` varchar(255) NOT NULL,
  `Bloodtype` varchar(255) NOT NULL,
  `Civil_status` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `Ed_attainment` varchar(255) NOT NULL,
  `Emp_status` varchar(255) NOT NULL,
  `Family_mem` varchar(255) NOT NULL,
  `Suffix` varchar(255) NOT NULL,
  `Maiden_name` varchar(255) NOT NULL,
  `Mother_name` varchar(255) NOT NULL,
  `Res_address` varchar(255) NOT NULL,
  `Contact_no` int(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Fh_number` varchar(255) NOT NULL,
  `Member` varchar(255) NOT NULL,
  `Household_no` varchar(255) NOT NULL,
  `Ph_member` varchar(255) NOT NULL,
  `Status_type` varchar(255) NOT NULL,
  `Ph_no` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Pcb_member` varchar(255) NOT NULL,
  `Dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `ad_patient`
--

INSERT INTO `ad_patient` (`id`, `patient_id`, `Lastname`, `Firstname`, `Middlename`, `Sex`, `Birth_date`, `Birth_place`, `Bloodtype`, `Civil_status`, `spouse_name`, `Ed_attainment`, `Emp_status`, `Family_mem`, `Suffix`, `Maiden_name`, `Mother_name`, `Res_address`, `Contact_no`, `Department`, `Fh_number`, `Member`, `Household_no`, `Ph_member`, `Status_type`, `Ph_no`, `Category`, `Pcb_member`, `Dates`) VALUES
(92, '', 'Uchiha', 'Obito', 'Namikaze', 'Male', 1998, 'Hidden Leaf', 'A+', '', '', '', '', '', '', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '23232', '', '', '2020-03-03 22:56:17'),
(90, '', 'Son', 'Goku', 'San', 'Male', 1996, 'Planet Earth', 'A+', '', '', '', '', '', '', '', '', 'Planet Earth', 0, '', '', '', '', '', '', '232', '', '', '2020-03-03 22:35:55'),
(91, '', 'Uzumaki', 'Hinata', 'Huyuga', 'Male', 1996, 'Hidden Leaf', 'A+', '', '', '', '', '', '', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '1121', '', '', '2020-03-03 22:37:36'),
(88, '', 'Uzumaki', 'Naruto', 'Namikaze', 'Male', 1998, 'Hidden Leaf', 'A+', '', '', '', '', '', '', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '87868688', '', '', '2020-03-03 22:29:25'),
(89, '', 'Sensie', 'Saitama', 'K', 'Male', 1999, 'City Z', 'A+', '', '', '', '', '', '', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '9898', '', '', '2020-03-03 22:31:35'),
(87, '', 'Chan', 'Sakura', 'Uchiha', 'Female', 1997, 'Hidden Leaf', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '5454', '', '', '2020-03-03 22:20:52'),
(85, '', 'Batersal', 'Rodney', 'Torib', 'Male', 1997, 'Hidden Leaf', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-03-03 22:02:31'),
(86, '', 'Uchiha', 'Sasuke', 'Namikaze', 'Male', 1998, 'Hidden Leaf', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '2332', '', '', '2020-03-03 22:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `child_immunization`
--

CREATE TABLE IF NOT EXISTS `child_immunization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `consultation_purpose` varchar(255) NOT NULL,
  `birth_weight` varchar(255) NOT NULL,
  `HP_B1` varchar(255) NOT NULL,
  `HP_B2` varchar(255) NOT NULL,
  `PENTA_1` varchar(255) NOT NULL,
  `PENTA_2` varchar(255) NOT NULL,
  `PENTA_3` varchar(255) NOT NULL,
  `OPV_1` varchar(255) NOT NULL,
  `OPV_2` varchar(255) NOT NULL,
  `OPV_3` varchar(255) NOT NULL,
  `MCV_1` varchar(255) NOT NULL,
  `MCV_2` varchar(255) NOT NULL,
  `ROTA_1` varchar(255) NOT NULL,
  `ROTA_2` varchar(255) NOT NULL,
  `PCV_1` varchar(255) NOT NULL,
  `PCV_2` varchar(255) NOT NULL,
  `PCV_3` varchar(255) NOT NULL,
  `HEPA_B2` varchar(255) NOT NULL,
  `HEPA_B3` varchar(255) NOT NULL,
  `HEPA_A` varchar(255) NOT NULL,
  `PN` varchar(255) NOT NULL,
  `INF` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `done_consult` varchar(255) NOT NULL,
  `old` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `child_immunization`
--

INSERT INTO `child_immunization` (`id`, `patient_id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `birth_weight`, `HP_B1`, `HP_B2`, `PENTA_1`, `PENTA_2`, `PENTA_3`, `OPV_1`, `OPV_2`, `OPV_3`, `MCV_1`, `MCV_2`, `ROTA_1`, `ROTA_2`, `PCV_1`, `PCV_2`, `PCV_3`, `HEPA_B2`, `HEPA_B3`, `HEPA_A`, `PN`, `INF`, `others`, `done_consult`, `old`, `dates`) VALUES
(48, '', 'Chan', 'Sakura', 'Uchiha', '25', 'Hidden Leaf', 'Child Immunization', 'k', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Done consulting', 'Current', '2020-03-05 12:28:16'),
(47, '', 'Sensie', 'Saitama', 'K', '23', 'City Z', 'Child Immunization', 'lkkh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Done consulting', 'Old Patient returning', '2020-03-04 13:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

CREATE TABLE IF NOT EXISTS `family_planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `consultation_purpose` varchar(255) NOT NULL,
  `type_client` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `drop_out` varchar(255) NOT NULL,
  `schedule_nxt_vist` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `done_consult` varchar(255) NOT NULL,
  `old` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `type_client`, `method`, `drop_out`, `schedule_nxt_vist`, `patient_id`, `done_consult`, `old`, `dates`) VALUES
(4, 'Son', 'Goku', 'San', '32', 'Planet Earth', 'Family Planning', 'l', '', '', '', '', 'Done consulting', 'Current', '2020-03-04 14:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `old_patient`
--

CREATE TABLE IF NOT EXISTS `old_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Suffix` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Residential_Address` varchar(255) NOT NULL,
  `Mode_Transaction` varchar(255) NOT NULL,
  `Reffered_from` varchar(255) NOT NULL,
  `Date_Consultation` varchar(255) NOT NULL,
  `Reffered_to` varchar(255) NOT NULL,
  `Consulation_Time` varchar(255) NOT NULL,
  `Reason_for_Referral` varchar(255) NOT NULL,
  `Blood_Pressure` varchar(255) NOT NULL,
  `Reffered_by` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Name_of_Attending_Provider` varchar(255) NOT NULL,
  `Temperature` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Nature_of_Visit` varchar(255) NOT NULL,
  `Chief_Complaints` varchar(255) NOT NULL,
  `Consultation_Purpose` varchar(255) NOT NULL,
  `Diagnosis` varchar(255) NOT NULL,
  `Medication_Treatment` varchar(255) NOT NULL,
  `Lab_Findings_Impression` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `progress_report` varchar(255) NOT NULL,
  `date_checkup` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `old` varchar(255) NOT NULL,
  `not_yet` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `old_patient`
--

INSERT INTO `old_patient` (`id`, `patient_id`, `Lastname`, `Firstname`, `Middlename`, `Suffix`, `Age`, `Residential_Address`, `Mode_Transaction`, `Reffered_from`, `Date_Consultation`, `Reffered_to`, `Consulation_Time`, `Reason_for_Referral`, `Blood_Pressure`, `Reffered_by`, `Height`, `Name_of_Attending_Provider`, `Temperature`, `Weight`, `Nature_of_Visit`, `Chief_Complaints`, `Consultation_Purpose`, `Diagnosis`, `Medication_Treatment`, `Lab_Findings_Impression`, `medicine`, `quantity`, `progress_report`, `date_checkup`, `num`, `old`, `not_yet`, `dates`) VALUES
(98, '', 'Chan', 'Sakura', 'Uchiha', 'none', '25', 'Hidden Leaf', '', 'Genos', '', 'Hinata Hyuga', '', 'kjhgds', '', 'Obito Uchiha', '', '', '', '', 'New Consultation/case', 'lljk', 'Child Immunization', 'k', 'k', 'k', '', '', '', '', 1, 'Current', 'not yet', '2020-03-05 12:28:16'),
(96, '', 'Batersal', 'Rodney', 'Torib', 'none', '25', 'Hidden Leaf', '', 'Don Isko', '', 'Don Turko', '', 'This CSS tutorial contains hundreds of CSS examples.  With our online editor, you can edit the CSS, and click on a button to view the result.', '', 'Dong Dako', '', '', '', '', 'New Admission', 'This CSS tutorial contains hundreds of CSS examples.  With our online editor, you can edit the CSS, and click on a button to view the result.', 'Adult Immunization', 'Positive', 'cement bone', 'Temporary', '', '', '', '', 0, 'Current', 'not yet', '2020-03-05 12:09:19'),
(97, '', 'Uchiha', 'Sasuke', 'Namikaze', 'none', '43', 'Hidden Leaf', '', 'Don Isko', '', 'Hinata Hyuga', '', 'sample', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'sample', 'Adult Immunization', 'Positive', 'cement bone', 'Te', '', '', '', '', 1, 'Current', 'not yet', '2020-03-05 12:15:25'),
(99, '', 'Uzumaki', 'Naruto', 'Namikaze', '', '25', 'Hidden Leaf', '', 'Don Isko', '', 'Hinata Hyuga', '', 'sample', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'sample', 'Child Immunization', '', '', '', '', '', '', '', 0, 'Current', 'not yet', '2020-03-03 22:53:42'),
(101, '', 'Son', 'Goku', 'San', '', '32', 'Planet Earth', '', 'Genos', '', 'Don Turko', '', 'sample', '', 'Dong Dako', '', '', '', '', 'New Consultation/case', 'sample', 'Family Planning', '', '', '', '', '', '', '', 1, 'Current', 'not yet', '2020-03-04 14:23:58'),
(102, '', 'Uzumaki', 'Hinata', 'Huyuga', '', '23', 'Hidden Leaf', '', 'Don Isko', '', 'Bang Sensie', '', 'sample', '', 'dong gamay', '', '', '', '', 'New Admission', 'sample', 'Family Planning', '', '', '', '', '', '', '', 0, 'Current', 'not yet', '2020-03-03 22:52:19'),
(103, '', 'Sensie', 'Saitama', 'K', 'none', '23', 'City Z', '', 'Genos', '', 'Bang Sensie', '', 'sample', '', 'dong gamay', '', '', '', '', 'Follow-up visit', 'sample', 'Child Immunization', '', '', '', '', '', '', '', 0, 'Old Patient returning', 'not yet', '2020-03-05 12:09:35'),
(104, '', 'Uchiha', 'Obito', 'Namikaze', '', '25', 'Hidden Leaf', '', 'Genos', '', 'Hinata Hyuga', '', 'sample', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'sample', 'Adult Immunization', '', '', '', '', '', '', '', 0, 'Current', 'not yet', '2020-03-05 12:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medicine`
--

CREATE TABLE IF NOT EXISTS `patient_medicine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `number_minus` varchar(255) NOT NULL,
  `progress_report` varchar(255) NOT NULL,
  `date_checkup` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=483 ;

--
-- Dumping data for table `patient_medicine`
--

INSERT INTO `patient_medicine` (`id`, `Lastname`, `Firstname`, `Middlename`, `Sex`, `medicine`, `quantity`, `number_minus`, `progress_report`, `date_checkup`, `dates`) VALUES
(18, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '5', '', 'for hea', 'feb 12', '2020-02-28 12:47:46'),
(17, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '10', '', 'for headache', 'february 29, 2020', '2020-02-28 12:45:01'),
(19, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsds', 'feb 12', '2020-02-28 13:05:15'),
(20, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'dsd', '2020-02-28 13:06:14'),
(21, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'sdd', '2020-02-28 13:07:08'),
(22, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'sd', '2020-02-28 13:09:20'),
(23, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'ds', '2020-02-28 13:10:30'),
(24, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DSD', 'SD', '2020-02-28 13:12:28'),
(25, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'DS', '2020-02-28 13:13:09'),
(26, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'D', 'DS', '2020-02-28 13:13:45'),
(27, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'ds', '2020-02-28 13:15:23'),
(28, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'd', '2020-02-28 13:16:03'),
(29, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'ds', '2020-02-28 13:17:19'),
(30, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'sd', '2020-02-28 13:18:20'),
(31, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:20:00'),
(32, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dss', 'ds', '2020-02-28 13:21:16'),
(33, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dss', 'ds', '2020-02-28 13:21:47'),
(34, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'ds', '2020-02-28 13:22:05'),
(35, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'd', '2020-02-28 13:22:28'),
(36, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:23:21'),
(37, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 13:24:46'),
(38, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ds', 'ds', '2020-02-28 13:33:39'),
(39, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'sd', '2020-02-28 13:34:04'),
(40, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:38:29'),
(41, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:39:03'),
(42, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ddsds', 's', '2020-02-28 13:39:34'),
(43, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'dsd', 'ds', '2020-02-28 13:40:03'),
(44, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'd', '2020-02-28 13:40:45'),
(45, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 13:42:03'),
(46, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:42:40'),
(47, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'ds', '2020-02-28 13:43:53'),
(48, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'ds', '2020-02-28 13:44:50'),
(49, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:45:32'),
(50, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsd', 'ds', '2020-02-28 13:46:08'),
(51, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ds', 'ds', '2020-02-28 13:47:15'),
(52, 'Torib', 'adrian', 'Espana', '', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 13:47:50'),
(53, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'sd', '2020-02-28 13:48:11'),
(54, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'd', '2020-02-28 13:49:16'),
(55, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'ds', '2020-02-28 13:50:40'),
(56, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sd', 'dsd', '2020-02-28 13:51:04'),
(57, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sd', 'sd', '2020-02-28 13:51:56'),
(58, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:52:26'),
(59, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'ds', '2020-02-28 13:53:02'),
(60, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sd', 'sd', '2020-02-28 13:53:23'),
(61, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 13:54:21'),
(62, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'sd', '2020-02-28 13:56:30'),
(63, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sds', 'sds', '2020-02-28 13:56:53'),
(64, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sd', 'ds', '2020-02-28 13:57:41'),
(65, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sd', 'ds', '2020-02-28 13:59:19'),
(66, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 14:00:18'),
(67, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'ds', '2020-02-28 14:01:42'),
(68, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sdd', 'sd', '2020-02-28 14:02:02'),
(69, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'ds', '2020-02-28 14:02:34'),
(70, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'sdd', '2020-02-28 14:03:12'),
(71, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'jdkjdk', 'kdjs', '2020-02-28 14:03:35'),
(72, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 14:06:53'),
(73, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'ds', '2020-02-28 14:08:14'),
(74, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:11:34'),
(75, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:12:02'),
(76, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:12:22'),
(77, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:12:24'),
(78, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sdds', 'dsd', '2020-02-28 14:14:33'),
(79, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sds', 'dsd', '2020-02-28 14:15:00'),
(80, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'sds', '2020-02-28 14:16:30'),
(81, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:17:16'),
(82, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ds', 'sds', '2020-02-28 14:17:44'),
(83, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ds', 'ds', '2020-02-28 14:19:13'),
(84, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'sdsd', '2020-02-28 14:19:48'),
(85, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'dsd', '2020-02-28 14:20:30'),
(86, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sdsd', 'ds', '2020-02-28 14:21:17'),
(87, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'ds', '2020-02-28 14:22:06'),
(88, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ds', 'dsd', '2020-02-28 14:22:27'),
(89, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sdds', 'sdd', '2020-02-28 14:23:14'),
(90, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'kk', 'kjk', '2020-02-28 14:24:13'),
(91, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsd', 'dss', '2020-02-28 14:24:56'),
(92, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sds', 'sds', '2020-02-28 14:25:45'),
(93, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ssd', 'sds', '2020-02-28 14:26:25'),
(94, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'ssd', 'sds', '2020-02-28 14:26:57'),
(95, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sdsh', 'hh', '2020-02-28 14:27:14'),
(96, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dssd', 'sds', '2020-02-28 14:27:53'),
(97, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sd', 'sds', '2020-02-28 14:28:49'),
(98, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsd', 'sd', '2020-02-28 14:29:16'),
(99, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsd', 'sd', '2020-02-28 14:30:03'),
(100, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'DDS', 'DS', '2020-02-28 14:30:22'),
(101, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'SD', '2020-02-28 14:30:37'),
(102, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'SDD', 'DS', '2020-02-28 14:31:36'),
(103, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'SD', '2020-02-28 14:32:05'),
(104, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DSD', 'SD', '2020-02-28 14:33:06'),
(105, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'DSKNDK', 'D', '2020-02-28 14:33:27'),
(106, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'SDSKK', 'KKH', '2020-02-28 14:34:06'),
(107, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DSSD', 'SDS', '2020-02-28 14:34:23'),
(108, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'HKHKK', 'KHK', '2020-02-28 14:35:03'),
(109, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'NKHKH', 'KDSD', '2020-02-28 14:35:25'),
(110, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'NK', 'KH', '2020-02-28 14:35:53'),
(111, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'DSSD', 'SDDS', '2020-02-28 14:36:42'),
(112, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'SDS', 'SDD', '2020-02-28 14:38:40'),
(113, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SDD', 'SDD', '2020-02-28 14:39:48'),
(114, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SDDS', 'SD', '2020-02-28 14:40:17'),
(115, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SDD', 'SD', '2020-02-28 14:41:05'),
(116, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'SD', 'DS', '2020-02-28 14:41:44'),
(117, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DDS', 'DS', '2020-02-28 14:42:04'),
(118, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SD', 'DS', '2020-02-28 14:43:50'),
(119, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SD', 'DS', '2020-02-28 14:44:15'),
(120, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SDDQDSD', 'SDD', '2020-02-28 14:45:23'),
(121, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'SD', '2020-02-28 14:45:43'),
(122, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sds', 'sds', '2020-02-28 14:48:00'),
(123, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sds', 'sds', '2020-02-28 14:48:43'),
(124, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sds', 'sds', '2020-02-28 14:49:11'),
(125, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'khk', 'kh', '2020-02-28 14:50:30'),
(126, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsd', 'sds', '2020-02-28 14:51:35'),
(127, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sdsd', 'sdds', '2020-02-28 14:54:03'),
(128, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'dsd', 'ssd', '2020-02-28 14:56:01'),
(129, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '10', '', 'dsd', 'sd', '2020-02-28 14:56:50'),
(130, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'dsd', 'sd', '2020-02-28 14:58:47'),
(131, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'dsd', 'dsd', '2020-02-28 14:59:20'),
(132, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sd', 'sdd', '2020-02-28 14:59:47'),
(133, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ssd', 'sd', '2020-02-28 15:00:09'),
(134, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'kjkj', 'j', '2020-02-28 15:01:20'),
(135, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'sds', 'sd', '2020-02-28 15:01:40'),
(136, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sdd', 'sds', '2020-02-28 15:02:57'),
(137, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'dsd', 'ds', '2020-02-28 15:03:59'),
(138, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'dsd', 'ds', '2020-02-28 15:04:45'),
(139, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'sd', '2020-02-28 15:04:58'),
(140, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'sd', '2020-02-28 15:05:21'),
(141, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 's', 'sd', '2020-02-28 15:05:37'),
(142, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 's', 'ds', '2020-02-28 15:06:08'),
(143, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 's', 'ds', '2020-02-28 15:06:48'),
(144, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'ds', '2020-02-28 15:07:03'),
(145, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'ds', '2020-02-28 15:07:42'),
(146, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'ds', '2020-02-28 15:08:23'),
(147, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'sd', '2020-02-28 15:09:04'),
(148, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'k', 'khhk', '2020-02-28 15:09:54'),
(149, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'sd', 'sd', '2020-02-28 15:11:41'),
(150, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'sds', 'ds', '2020-02-28 15:13:39'),
(151, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'ss', 's', '2020-02-28 15:14:46'),
(152, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'ss', 's', '2020-02-28 15:17:23'),
(153, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '4', '', 'd', 'd', '2020-02-28 15:19:14'),
(154, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '4', '', 'd', 'd', '2020-02-28 15:19:47'),
(155, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '5', '', 'DSD', 'DSD', '2020-02-28 15:23:19'),
(156, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DSD', 'DS', '2020-02-28 15:26:13'),
(157, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'DSD', 'DS', '2020-02-28 15:27:17'),
(158, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'SD', 'D', '2020-02-28 15:27:37'),
(159, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'SD', 'DS', '2020-02-28 15:27:57'),
(160, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 'DSD', 'D', '2020-02-28 15:28:16'),
(161, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '5', '', 'DS', 'D', '2020-02-28 15:28:36'),
(162, 'Torib', 'adrian', 'Espana', 'Male', '', '6', '', 'D', 'D', '2020-02-28 15:28:58'),
(163, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '7', '', 'SD', 'D', '2020-02-28 15:29:24'),
(164, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '8', '', 'SD', 'D', '2020-02-28 15:29:50'),
(165, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '9', '', 'KKJK', 'KJ', '2020-02-28 15:30:08'),
(166, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '10', '', 'SDSD', 'D', '2020-02-28 15:30:24'),
(167, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '10', '', 'SD', 'D', '2020-02-28 15:31:18'),
(168, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'D', '2020-02-28 15:32:01'),
(169, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SDSD', 'D', '2020-02-28 15:32:24'),
(170, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SDQ', 'D', '2020-02-28 15:33:49'),
(171, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'SD', 'D', '2020-02-28 15:34:55'),
(172, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'SD', 'D', '2020-02-28 15:36:01'),
(173, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'DS', 'D', '2020-02-28 15:36:36'),
(174, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'D', 'D', '2020-02-28 15:39:19'),
(175, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'D', 'D', '2020-02-28 15:40:02'),
(176, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'D', 'D', '2020-02-28 15:40:50'),
(177, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'D', 'D', '2020-02-28 15:41:17'),
(178, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'D', 'D', '2020-02-28 15:43:20'),
(179, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'D', 'D', '2020-02-28 15:43:32'),
(180, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:44:11'),
(181, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 15:46:36'),
(182, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 15:47:09'),
(183, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:51:33'),
(184, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 15:52:35'),
(185, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:54:12'),
(186, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:54:14'),
(187, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 15:55:23'),
(188, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'j', 'j', '2020-02-28 15:55:42'),
(189, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 15:56:49'),
(190, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:57:20'),
(191, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '3', '', 'd', 'd', '2020-02-28 15:58:13'),
(192, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 15:59:13'),
(193, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 15:59:31'),
(194, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 16:00:17'),
(195, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', 'd', 'd', '2020-02-28 16:03:32'),
(196, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:03:54'),
(197, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:04:27'),
(198, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:05:02'),
(199, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:05:17'),
(200, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:05:40'),
(201, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:05:57'),
(202, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'c', 'd', '2020-02-28 16:06:26'),
(203, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'c', 'd', '2020-02-28 16:06:55'),
(204, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:07:10'),
(205, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:07:29'),
(206, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:07:42'),
(207, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:08:07'),
(208, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:08:14'),
(209, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:08:27'),
(210, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-02-28 16:09:09'),
(211, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:10:22'),
(212, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:11:13'),
(213, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:14:05'),
(214, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:14:44'),
(215, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:15:06'),
(216, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:16:07'),
(217, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:18:07'),
(218, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:18:43'),
(219, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:19:06'),
(220, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:19:22'),
(221, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:19:47'),
(222, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 16:19:57'),
(223, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:20:23'),
(224, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'D', 'D', '2020-02-28 16:26:17'),
(225, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:26:33'),
(226, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:27:43'),
(227, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:28:01'),
(228, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'D', 'D', '2020-02-28 16:28:36'),
(229, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:28:50'),
(230, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:29:24'),
(231, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 16:29:49'),
(232, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'w', 'w', '2020-02-28 16:31:05'),
(233, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'w', 'w', '2020-02-28 16:31:57'),
(234, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 'd', 'd', '2020-02-28 16:33:00'),
(235, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 'd', 'd', '2020-02-28 16:33:39'),
(236, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 16:42:01'),
(237, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '5', '', 'd', 'd', '2020-02-28 16:42:24'),
(238, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '5', '', 'd', 'd', '2020-02-28 16:47:03'),
(239, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 's', 'w', '2020-02-28 16:48:02'),
(240, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '3', '', 's', 's', '2020-02-28 16:51:33'),
(241, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 'sa', 's', '2020-02-28 16:53:12'),
(242, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 's', 's', '2020-02-28 16:54:10'),
(243, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '5', '', 'd', 'd', '2020-02-28 16:55:45'),
(244, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '6', '', 'd', 'd', '2020-02-28 16:57:07'),
(245, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '6', '', 'dd', 'd', '2020-02-28 16:59:56'),
(246, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '7', '', 'd', 'd', '2020-02-28 17:00:57'),
(247, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '8', '', 'd', 'd', '2020-02-28 17:03:26'),
(248, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '9', '', 'd', 'd', '2020-02-28 17:04:28'),
(249, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '9', '', 'd', 'd', '2020-02-28 17:05:29'),
(250, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:06:08'),
(251, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:06:37'),
(252, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:07:37'),
(253, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'sd', 's', '2020-02-28 17:08:10'),
(254, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:08:46'),
(255, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:09:30'),
(256, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '8', '', 'd', 'd', '2020-02-28 17:10:22'),
(257, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '8', '', 'd', 'd', '2020-02-28 17:10:38'),
(258, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'mm', 'm', '2020-02-28 17:12:22'),
(259, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '8', '', 'd', 'd', '2020-02-28 17:12:59'),
(260, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '7', '', 'd', 'd', '2020-02-28 17:13:31'),
(261, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:14:10'),
(262, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '4', '', 'd', 'd', '2020-02-28 17:15:38'),
(263, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '5', '', 'd', 'd', '2020-02-28 17:17:09'),
(264, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:17:35'),
(265, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:19:14'),
(266, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:19:59'),
(267, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 17:20:26'),
(268, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'd', 'd', '2020-02-28 17:21:27'),
(269, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 17:22:51'),
(270, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 'd', '2020-02-28 17:24:04'),
(271, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 17:24:46'),
(272, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'd', '2020-02-28 17:25:20'),
(273, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 's', '2020-02-28 17:26:08'),
(274, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 's', '2020-02-28 17:26:35'),
(275, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 17:27:36'),
(276, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'a', '2020-02-28 17:29:01'),
(277, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'a', '2020-02-28 17:29:21'),
(278, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 's', 'a', '2020-02-28 17:29:40'),
(279, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 's', 'a', '2020-02-28 17:30:02'),
(280, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 's', 'a', '2020-02-28 17:30:29'),
(281, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'd', 'a', '2020-02-28 17:30:49'),
(282, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 's', 's', '2020-02-28 17:31:21'),
(283, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 17:32:38'),
(284, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 17:34:46'),
(285, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-02-28 17:36:03'),
(286, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 's', 's', '2020-02-28 17:36:33'),
(287, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'd', 's', '2020-02-28 17:37:51'),
(288, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dsf', 'rdte', '2020-02-28 17:40:33'),
(289, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'dsg', 'gfgd', '2020-02-28 17:42:20'),
(290, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'efsd', 'dsfs', '2020-02-28 17:43:22'),
(291, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'dfdsf', 'dg', '2020-02-28 17:44:33'),
(292, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'fs', 'ff', '2020-02-28 17:49:11'),
(293, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'fdf', 'dfdf', '2020-02-28 17:51:08'),
(294, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '5', '', 'fgdf', 'gdf', '2020-02-28 17:51:51'),
(295, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dfgdf', 'dfgdf', '2020-02-28 17:56:57'),
(296, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'dfgdgfdg', 'dfgd', '2020-02-28 18:00:58'),
(297, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'sdfdsf', 'dffdg', '2020-02-28 18:02:00'),
(298, 'Torib', 'adrian', 'Espana', 'Male', '', '10', '', 'gdfgd', 'dfgdfg', '2020-02-28 18:03:30'),
(299, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '10', '', 'vxvcx', 'fgdfg', '2020-02-28 18:04:28'),
(300, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '8', '', 'gdfg', 'dfgd', '2020-02-28 18:05:43'),
(301, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'sdfsd', 'fdf', '2020-02-28 18:06:39'),
(302, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'sdfsd', 'fdf', '2020-02-28 18:06:41'),
(303, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 'hh', 'h', '2020-02-28 18:23:59'),
(304, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '5', '', 'ssd', 'dsd', '2020-02-28 18:29:15'),
(305, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '10', '', 'cbc', 'vc', '2020-02-28 18:30:09'),
(306, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-03-03 10:48:40'),
(307, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'j', 'j', '2020-03-03 10:50:36'),
(308, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-03-03 10:53:12'),
(309, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 10:55:46'),
(310, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 10:56:36'),
(311, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-03-03 10:56:51'),
(312, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-03-03 10:57:41'),
(313, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', 'd', 'd', '2020-03-03 10:58:03'),
(314, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 10:59:16'),
(315, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 10:59:38'),
(316, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 10:59:52'),
(317, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:00:37'),
(318, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:01:06'),
(319, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:01:28'),
(320, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:02:22'),
(321, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:04:19'),
(322, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:04:49'),
(323, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:06:50'),
(324, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:07:17'),
(325, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:07:29'),
(326, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:07:53'),
(327, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:08:08'),
(328, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:08:40'),
(329, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:09:13'),
(330, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:10:03'),
(331, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:10:26'),
(332, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:10:39'),
(333, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:10:58'),
(334, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:11:11'),
(335, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:12:03'),
(336, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:12:29'),
(337, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:12:40'),
(338, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:13:35'),
(339, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:13:53'),
(340, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:14:56'),
(341, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:15:07'),
(342, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:15:32'),
(343, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:15:44'),
(344, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:16:05'),
(345, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', 'S', 'S', '2020-03-03 11:17:21'),
(346, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:18:56'),
(347, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:19:54'),
(348, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:20:40'),
(349, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:21:26'),
(350, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:22:07'),
(351, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:22:22'),
(352, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:22:55'),
(353, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:23:37'),
(354, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:24:23'),
(355, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:24:53'),
(356, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:25:46'),
(357, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:26:07'),
(358, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:26:58'),
(359, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:27:59'),
(360, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:28:19'),
(361, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:29:10'),
(362, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:29:37'),
(363, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:29:57'),
(364, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:31:00'),
(365, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:31:36'),
(366, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:31:54'),
(367, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:33:32'),
(368, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:33:49'),
(369, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:34:23'),
(370, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:35:06'),
(371, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '2', '', '', '', '2020-03-03 11:35:29'),
(372, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:35:53'),
(373, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:36:48'),
(374, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:37:28'),
(375, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:37:47'),
(376, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:38:44'),
(377, 'Torib', 'adrian', 'Espana', 'Male', 'biogesic', '1', '', '', '', '2020-03-03 11:39:13'),
(378, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:39:32'),
(379, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:39:49'),
(380, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '1', '', '', '', '2020-03-03 11:40:28'),
(381, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:40:46'),
(382, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:41:40'),
(383, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', '', '', '2020-03-03 11:42:16'),
(384, 'Torib', 'adrian', 'Espana', 'Male', 'Diatabs', '2', '', 's', 's', '2020-03-03 11:43:05'),
(385, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'd', 'd', '2020-03-04 14:33:15'),
(386, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'k', 'k', '2020-03-04 14:34:40'),
(387, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'j', 'l', '2020-03-04 14:36:31'),
(388, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'k', 'k', '2020-03-04 14:37:17'),
(389, 'Batersal', 'Rodney', 'Torib', 'Male', 'Diatabs', '2', '', 'k', 'l', '2020-03-04 14:38:14'),
(390, 'Batersal', 'Rodney', 'Torib', 'Male', 'Diatabs', '2', '', 'll', 'j', '2020-03-04 14:38:59'),
(391, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'j', 'g', '2020-03-04 14:39:27'),
(392, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'k', 'f', '2020-03-04 14:41:18'),
(393, 'Batersal', 'Rodney', 'Torib', 'Male', 'Diatabs', '2', '', 'k', 'k', '2020-03-04 14:42:31'),
(394, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-04 14:43:47'),
(395, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '6', '', 'd', 'd', '2020-03-04 14:44:29'),
(396, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 's', 's', '2020-03-04 14:44:59'),
(397, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 'd', 'd', '2020-03-04 14:45:58'),
(398, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 's', 's', '2020-03-04 14:46:37'),
(399, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '4', '', 's', 's', '2020-03-04 14:47:30'),
(400, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '3', '', 's', 's', '2020-03-04 14:48:02'),
(401, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 'j', 'g', '2020-03-04 14:48:41'),
(402, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-04 14:49:28'),
(403, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 'd', 'd', '2020-03-04 15:45:14'),
(404, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 'd', 'd', '2020-03-04 15:45:39'),
(405, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-04 15:46:39'),
(406, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '5', '', 'l', 'h', '2020-03-04 15:47:04'),
(407, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 'ss', 's', '2020-03-04 15:50:28'),
(408, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-04 15:51:31'),
(409, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-04 15:52:43'),
(410, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 's', 's', '2020-03-04 15:54:05'),
(411, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 'd', 'd', '2020-03-04 15:54:42'),
(412, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '3', '', 's', 's', '2020-03-04 15:55:11'),
(413, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-04 15:55:50'),
(414, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 's', 's', '2020-03-04 15:56:12'),
(415, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '2', '', 's', 's', '2020-03-04 15:56:45'),
(416, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 's', 's', '2020-03-04 15:57:04'),
(417, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-04 15:59:06'),
(418, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-04 15:59:50'),
(419, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-04 16:00:54'),
(420, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '5', '', 's\r\n', 's', '2020-03-04 16:01:18'),
(421, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:03:28'),
(422, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'S', 'S', '2020-03-05 10:10:29'),
(423, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '1', '', 's', 's', '2020-03-05 10:11:03'),
(424, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'S', 'S', '2020-03-05 10:12:18'),
(425, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'S', 'S', '2020-03-05 10:14:52'),
(426, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:17:21'),
(427, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'a', 'a', '2020-03-05 10:18:26'),
(428, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:19:08'),
(429, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '1', '', 's', 's', '2020-03-05 10:19:39'),
(430, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:20:27'),
(431, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '1', '', 's', 's', '2020-03-05 10:20:45'),
(432, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:21:28'),
(433, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '1', '', 's', 's', '2020-03-05 10:21:45'),
(434, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '1', '', 'j', 'j', '2020-03-05 10:22:50'),
(435, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '1', '', 's', 's', '2020-03-05 10:23:38'),
(436, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '1', '', 's', 's', '2020-03-05 10:24:24'),
(437, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '6', '', 's', 's', '2020-03-05 10:25:11'),
(438, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '5', '', 's', 's', '2020-03-05 10:26:21'),
(439, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:28:58'),
(440, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 's', 's', '2020-03-05 10:31:58'),
(441, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-05 10:32:33'),
(442, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-05 10:33:28'),
(443, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 's', 's', '2020-03-05 10:35:41'),
(444, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-05 10:37:06'),
(445, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '2', '', 's', 's', '2020-03-05 10:37:26'),
(446, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-05 10:38:05'),
(447, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '4', '', 'ss', 's', '2020-03-05 10:38:43'),
(448, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 'k', 'k', '2020-03-05 10:39:11'),
(449, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '4', '', 'k', 'k', '2020-03-05 10:39:35'),
(450, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '4', '', 's', 's', '2020-03-05 10:39:52'),
(451, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '4', '', 's', 's', '2020-03-05 10:40:39'),
(452, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '2', '', 's', 's', '2020-03-05 10:42:43'),
(453, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-05 10:44:00'),
(454, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '2', '', 's', 's', '2020-03-05 10:44:22'),
(455, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '2', '', 's', 's', '2020-03-05 10:46:35'),
(456, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-05 10:46:56'),
(457, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '3', '', 's', 's', '2020-03-05 10:48:17'),
(458, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:49:17'),
(459, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '1', '', 's', 's', '2020-03-05 10:49:43'),
(460, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 's', 's', '2020-03-05 10:50:37'),
(461, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 'k', 'k', '2020-03-05 10:51:45'),
(462, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:52:29'),
(463, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '1', '', 's', 's', '2020-03-05 10:52:48'),
(464, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '1', '', 's', 's', '2020-03-05 10:53:47'),
(465, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 's', 's', '2020-03-05 10:54:19'),
(466, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '2', '', 'g', 'g', '2020-03-05 10:55:05'),
(467, 'Batersal', 'Rodney', 'Torib', 'Male', 'Biogesic', '2', '', 'j', 'd', '2020-03-05 10:55:50'),
(468, 'Batersal', 'Rodney', 'Torib', 'Male', 'Diatabs', '10', '', 's', 's', '2020-03-05 16:05:46'),
(469, 'Batersal', 'Rodney', 'Torib', 'Male', 'cvcv', '10', '', 'h', 'h', '2020-03-05 16:47:46'),
(470, 'Batersal', 'Rodney', 'Torib', 'Male', 'hhhghg', '10', '', 'k', 'k', '2020-03-05 16:55:37'),
(471, 'Batersal', 'Rodney', 'Torib', 'Male', 'zxzx', '10', '', 's', 'ss', '2020-03-05 18:32:17'),
(472, 'Batersal', 'Rodney', 'Torib', 'Male', 'wqwq', '10', '', 's', 's', '2020-03-05 18:32:46'),
(473, 'Batersal', 'Rodney', 'Torib', 'Male', 'cvcv', '10', '', 's', 's', '2020-03-05 18:36:02'),
(474, 'Batersal', 'Rodney', 'Torib', 'Male', 'as', '9', '', 'j', 'j', '2020-03-05 18:47:39'),
(475, 'Batersal', 'Rodney', 'Torib', 'Male', 'as', '10', '', 'j', 'j', '2020-03-05 18:48:29'),
(476, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '7', '', 's', 's', '2020-03-05 18:54:23'),
(477, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '', '', 'd', 'd', '2020-03-05 18:57:44'),
(478, 'Batersal', 'Rodney', 'Torib', 'Male', 'Bioflu', '9', '', 's', 's', '2020-03-05 18:58:31'),
(479, 'Batersal', 'Rodney', 'Torib', 'Male', 'Diatabs', '9', '', 's', 's', '2020-03-05 19:11:32'),
(480, 'Batersal', 'Rodney', 'Torib', 'Male', 'Amoxicilin', '9', '', 's', 's', '2020-03-05 20:11:16'),
(481, 'Batersal', 'Rodney', 'Torib', 'Male', 'Amoxicilin', '10', '', 's', 's', '2020-03-05 20:12:18'),
(482, 'Batersal', 'Rodney', 'Torib', 'Male', 'Delfenal', '9', '', 's', 's', '2020-03-05 20:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE IF NOT EXISTS `prenatal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `consultation_purpose` varchar(255) NOT NULL,
  `gravidity` varchar(255) NOT NULL,
  `lmp` varchar(255) NOT NULL,
  `parity` varchar(255) NOT NULL,
  `edc` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `aog` varchar(255) NOT NULL,
  `preterm` varchar(255) NOT NULL,
  `ti` varchar(255) NOT NULL,
  `livebirth` varchar(255) NOT NULL,
  `abortion` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `syphills` varchar(255) NOT NULL,
  `penicillin` varchar(255) NOT NULL,
  `Sched_next_visit` varchar(255) NOT NULL,
  `fundic_height` varchar(255) NOT NULL,
  `fatal_heart` varchar(255) NOT NULL,
  `done_consult` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `prenatal`
--


-- --------------------------------------------------------

--
-- Table structure for table `stock_update`
--

CREATE TABLE IF NOT EXISTS `stock_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `stock_update`
--

INSERT INTO `stock_update` (`id`, `medicine`, `quantity`, `dates`) VALUES
(44, 'Amoxicilin', 10, '2020-03-05 20:12:18'),
(43, 'Alaxan', 120, '2020-03-05 20:01:43'),
(41, 'Mefenamic', 100, '2020-03-05 16:04:58'),
(40, 'Delfenal', 14, '2020-03-05 20:17:28'),
(39, 'Bioflu', 101, '2020-03-05 20:03:08'),
(38, 'Biogesic', 100, '2020-03-05 15:35:03'),
(37, 'Diatabs', 11, '2020-03-05 19:11:32'),
(48, 'Enervon', 120, '2020-03-05 20:02:00');
