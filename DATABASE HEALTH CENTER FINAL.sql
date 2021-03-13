-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2020 at 09:49 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health_center`
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
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adult_immunization`
--

INSERT INTO `adult_immunization` (`id`, `patient_id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `PNL`, `FL`, `others`, `done_consult`, `dates`) VALUES
(1, '    Patient ID- 0390', 'Uchiha', 'Obito', 'h', '45', 'Hidden Leaf', 'Adult Immunization', 'june11', 'june9', 'june10', 'Done consulting', '2020-02-10 10:26:20'),
(2, '    Patient ID- 2300', 'Hatake', 'Kakashi', 'K', '45', 'Hidden Leaf', 'Adult Immunization', 'june2', 'june2', 'june2', 'Done consulting', '2020-02-10 10:01:03'),
(3, '    Patient ID- 2021', 'Son', 'Goku', 'San', '46', 'Planet Earth', 'Adult Immunization', 'January 12, 2020', 'January 12, 2020', 'January 12, 2020', 'Done consulting', '2020-02-10 11:47:41');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `ad_patient`
--

INSERT INTO `ad_patient` (`id`, `patient_id`, `Lastname`, `Firstname`, `Middlename`, `Sex`, `Birth_date`, `Birth_place`, `Bloodtype`, `Civil_status`, `spouse_name`, `Ed_attainment`, `Emp_status`, `Family_mem`, `Suffix`, `Maiden_name`, `Mother_name`, `Res_address`, `Contact_no`, `Department`, `Fh_number`, `Member`, `Household_no`, `Ph_member`, `Status_type`, `Ph_no`, `Category`, `Pcb_member`, `Dates`) VALUES
(71, '    Patient ID- 6000', 'Batersal', 'Naruto', 'Torib', '', 0, '', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-09 23:13:00'),
(54, '    Patient ID- 0675', 'Kun', 'Genos', 'Torib', 'Male', 2020, 'City Z', 'A+', 'Annulled', 'none', 'Annulled', 'Employed', 'Father', 'none', 'none', 'none', 'City Z', 33223, 'Yes', '233232', 'No', '3232', 'Yes', 'Member', '3232', 'IE', 'Yes', '2020-02-04 23:21:59'),
(53, '    Patient ID- 0604', 'Uchiha', 'Madara', 'Uzumaki', 'Male', 2020, 'Hidden Leaf', 'A+', 'Single', 'none', 'High School', 'Student', 'Father', 'none', 'none', 'none', 'Hidden Leaf', 77677, 'No', '32323', 'Yes', '23232', 'Yes', 'Member', '868', 'Others', 'Yes', '2020-02-04 23:19:05'),
(52, '    Patient ID- 2077', 'Son', 'Goku', 'j', 'Male', 2020, 'Planet Earth', 'A+', 'Married', 'Chi chi', 'High School', 'Employed', 'Father', 'Sr', 'none', 'none', 'Planet Earth', 99979797, 'Yes', '322332', 'No', '2443', 'Yes', 'Member', '2332', 'FE-Private', 'Yes', '2020-02-04 22:07:18'),
(48, '    Patient ID- 3100', 'Batersal', 'Rodney', 'Torib', 'Male', 2020, 'Tul_ang', 'AB+', 'Single', 'none', 'Co-habitition', 'Student', 'Son', 'none', 'Dindin', 'Guillerma', 'Saint Vincent', 2147483647, 'Yes', '0989', 'No', '9767686', 'Yes', 'Member', '7855556', 'FE-Goverment', 'No', '2020-02-04 18:29:10'),
(49, '    Patient ID- 7829', 'Sensie', 'Saitama', 'One Punch Man', 'Male', 2020, 'City Z', 'AB+', 'Single', 'none', 'High School', 'Retired', 'Son', 'none', 'none', 'Secret', 'City Z', 2147483647, 'No', '787564', 'No', '868675756', 'No', 'Dependent', '65644', 'FE-Private', 'No', '2020-02-04 18:35:54'),
(50, '    Patient ID- 0300', 'Uchiha', 'Sasuke', 'Uzumaki', 'Male', 2211, 'Hidden Leaf', 'A-', 'Married', 'Sakura', 'High School', 'Unknown', 'Father', 'none', 'boloy', 'martiyana espanya ', 'Hidden Leaf', 987672626, 'No', '232382368', 'Yes', '233454', 'No', 'Member', '5454', 'FE-Private', 'Yes', '2020-02-04 18:41:54'),
(70, '    Patient ID- 2173', 'Uchiha', 'Rodney', 'Torib', '', 0, '', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-09 23:11:42'),
(56, '    Patient ID- 2671', 'dandan', 'dexter', 'b', 'Male', 2020, 'Hidden Leaf', 'O-', 'Married', 'Rin', 'High School', 'Employed', 'Father', 'none', 'none', 'martiyana espanya ', 'manila zoo', 111111, 'Yes', '11111', 'Yes', '11111', 'Yes', 'Dependent', '2332', 'FE-Goverment', 'Yes', '2020-02-07 15:30:08'),
(57, '    Patient ID- 2372', 'sds', 'jj', 'jjgj', 'Male', 2020, 'sdsdds', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-07 16:25:36'),
(58, '    Patient ID- 0708', 'Uzumaki', 'Naruto', 'Namikaze', 'Male', 2020, 'Hidden Leaf', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:05:19'),
(59, '    Patient ID- 0540', 'Chan', 'Sakura', 'Uchiha', 'Female', 2020, 'Hidden Leaf', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:12:31'),
(60, '    Patient ID- 9002', 'Uchiha', 'Itachi', 'Uzumaki', 'Male', 2020, 'Hidden Leaf', 'A+', '', '', '', '', '', 'Jr', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:17:22'),
(61, '    Patient ID- 0000', 'Uzumaki', 'Hinata', 'Hyuga', 'Female', 2020, 'Hidden Leaf', 'A+', '', 'Naruto Uzumaki', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:33:05'),
(62, '    Patient ID- 2300', 'Hatake', 'Kakashi', 'K', 'Male', 2020, 'Hidden Leaf', 'A+', '', '', '', '', '', 'Jr', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:43:57'),
(63, '    Patient ID- 0390', 'Uchiha', 'Obito', 'h', 'Male', 2020, 'Land of Fire', 'A+', '', '', '', '', '', 'none', '', '', 'Hidden Leaf', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:45:48'),
(64, '    Patient ID- 6945', 'Fubuki', 'Tatsumaki', 'H', 'Female', 2020, 'City Z', 'A+', '', '', '', '', '', 'none', '', '', 'City Z', 0, '', '', '', '', '', '', '', '', '', '2020-02-08 21:47:30'),
(72, '    Patient ID- 3420', 'Uzumaki', 'Kushina', 'Namikaze', 'Female', 2020, 'Hidden Leaf', 'A-', 'Married', 'Minato Namikaze', 'High School', 'Unknown', 'Mother', 'none', 'none', 'none', 'Hidden Leaf', 3233, 'Yes', '2323', 'Yes', '32323', 'No', 'Member', '43434', 'FE-Private', 'Yes', '2020-02-09 23:37:13'),
(69, '    Patient ID- 3888', 'Batersal', 'Rodney', 'Uzumaki', '', 0, '', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-09 23:08:16'),
(76, '    Patient ID- 4000', 'Son', 'Piccolo', 'K', 'Male', 1998, 'Planet Earth', 'A+', 'Single', 'Rin', 'No Formal Education', 'Student', 'Father', 'none', 'none', 'none', 'Planet Earth', 2323, 'Yes', '3232', '', '', '', '', '', '', '', '2020-02-11 20:52:55'),
(74, '    Patient ID- 2021', 'Son', 'Goku', 'San', 'Male', 2020, 'Planet Earth', 'A+', 'Married', 'Chichi', 'High School', 'Employed', 'Father', 'none', 'none', 'none', 'Planet Earth', 3344, 'No', '32332', 'No', '3222', 'Yes', 'Member', '2323', 'FE-Private', 'Yes', '2020-02-10 10:30:21'),
(75, '    Patient ID- 9990', 'Uzumaki', 'Hinata', 'Uchiha', 'Female', 1998, 'Hidden Leaf', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-10 11:33:31'),
(77, '    Patient ID- 0010', 'kdhhksdkk', 'hshdkh', 'khkhdk', 'Male', 0, 'sds', 'A+', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '2020-02-11 21:57:46');

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
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `child_immunization`
--

INSERT INTO `child_immunization` (`id`, `patient_id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `birth_weight`, `HP_B1`, `HP_B2`, `PENTA_1`, `PENTA_2`, `PENTA_3`, `OPV_1`, `OPV_2`, `OPV_3`, `MCV_1`, `MCV_2`, `ROTA_1`, `ROTA_2`, `PCV_1`, `PCV_2`, `PCV_3`, `HEPA_B2`, `HEPA_B3`, `HEPA_A`, `PN`, `INF`, `others`, `done_consult`, `dates`) VALUES
(1, '    Patient ID- 3100', 'Batersal', 'Rodney', 'Torib', '25', 'Saint Vincent', 'Child Immunization', '70kg', 'june 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '6', 'Done consulting', '2020-02-09 22:41:33'),
(4, '    Patient ID- 0675', 'Kun', 'Genos', 'Torib', '25', 'City Z', 'Child Immunization', '60kg', 'July 5', 'July 5', 'July 5', 'July 5', 'v', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'July 5', 'v', 'July 5', 'July 5', 'v', 'July 5', 'July 5', 'Done consulting', '0000-00-00 00:00:00'),
(34, '    Patient ID- 7829', 'Sensie', 'Saitama', 'One Punch Man', '23', 'City Z', 'Child Immunization', '60kg', 'September 8', 'September 8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Done consulting', '2020-02-09 21:47:34');

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
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `lastname`, `firstname`, `middlename`, `age`, `residential_address`, `consultation_purpose`, `type_client`, `method`, `drop_out`, `schedule_nxt_vist`, `patient_id`, `done_consult`, `dates`) VALUES
(1, 'Uchiha', 'Madara', 'Uzumaki', '25', 'Hidden Leaf', 'Family Planning', 'sndksdk', 'khkshdkk', 'kdkhsdhk', 'kshkdskdhks', '    Patient ID- 0604', 'Done consulting', '2020-02-11 23:09:35');

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
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `old_patient`
--

INSERT INTO `old_patient` (`id`, `patient_id`, `Lastname`, `Firstname`, `Middlename`, `Suffix`, `Age`, `Residential_Address`, `Mode_Transaction`, `Reffered_from`, `Date_Consultation`, `Reffered_to`, `Consulation_Time`, `Reason_for_Referral`, `Blood_Pressure`, `Reffered_by`, `Height`, `Name_of_Attending_Provider`, `Temperature`, `Weight`, `Nature_of_Visit`, `Chief_Complaints`, `Consultation_Purpose`, `Diagnosis`, `Medication_Treatment`, `Lab_Findings_Impression`, `medicine`, `quantity`, `progress_report`, `date_checkup`, `dates`) VALUES
(53, '    Patient ID- 2300', 'Hatake', 'Kakashi', 'K', 'Jr', '45', 'Hidden Leaf', '', 'Don Isko', '', 'Don Turko', '', 'TEST', '', 'Obito Uchiha', '', '', '', '', 'New Consultation/case', '', 'Adult Immunization', 'Bone Crack', 'Food Medication', 'Temporary', 'delfenal', '10', 'for heartache', '2020-02-11', '2020-02-11 21:08:47'),
(54, '    Patient ID- 0390', 'Uchiha', 'Obito', 'h', 'none', '45', 'Hidden Leaf', '', 'Hashirma Senju', '', 'Tobirama Senju', '', 'test', '', 'Dong Dako', '', '', '', '', 'New Consultation/case', '', 'Adult Immunization', 'Positive', 'cement bone', 'Temporary', '', '', '', '', '2020-02-08 21:55:10'),
(52, '    Patient ID- 0000', 'Uzumaki', 'Hinata', 'Hyuga', 'none', '23', 'Hidden Leaf', '', 'Genos', '', 'Don Turko', '', 'testing', '', 'Atomic Samurria', '', '', '', '', 'Follow-up visit', '', 'Postpatrum', 'Positive', 'Surgery', 'Good', 'Bioflu', '4', 'for fever', '2020-02-10', '2020-02-10 11:15:43'),
(51, '    Patient ID- 9002', 'Uchiha', 'Itachi', 'Uzumaki', 'Jr', '25', 'Hidden Leaf', '', 'Genos', '', 'Don Turko', '', 'testing', '', 'Atomic Samurria', '', '', '', '', 'New Admission', 'testing', 'Postpatrum', 'Positive', 'cement bone', 'Good', 'Bioflu', '10', 'for fever', '2020-02-11', '2020-02-11 00:58:33'),
(49, '    Patient ID- 0708', 'Uzumaki', 'Naruto', 'Namikaze', 'none', '20', 'Hidden Leaf', '', 'Hashirma Senju', '', 'Tobirama Senju', '', 'testting', '', 'Obito Uchiha', '', '', '', '', 'New Admission', 'testing', 'Postpatrum', 'Positive', 'cement bone', 'Good', '', '', '', '', '2020-02-08 21:08:49'),
(50, '    Patient ID- 0540', 'Chan', 'Sakura', 'Uchiha', 'none', '25', 'Hidden Leaf', '', 'Don Isko', '', 'Don Turko', '', 'testing', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'testing', 'Family Planning', 'Positive', 'Food Medication', 'Temporary', 'Diavit', '10', 'for diabetes', '2020-02-11', '2020-02-11 01:13:47'),
(48, '    Patient ID- 2671', 'dandan', 'dexter', 'b', 'none', '25', 'manila zoo', '', 'Don Isko', '', 'Bang Sensie', '', 'hahha', '', 'Atomic Samurria', '', '', '', '', 'New Admission', 'ahhah', 'Child Immunization', 'Positive', 'cement bone', 'heart attact', '', '', '', '', '2020-02-07 15:32:14'),
(47, '    Patient ID- 1255', 'Batersals', 'Rodneys', 'Toribs', 'jrs', '25s', 'Saint Vincents', 'V-sited', 'Hashirma Senjus', '', 'Bang Sensies', '', 'hahahhaha', '', 'Vegeta', '', '', '', '', 'New Admission', '', 'Child Nutrition', 'Positive', 'cement bone', 'Good', 'Amoxixilin', '', 'for headache', '2020-02-11', '2020-02-11 20:25:10'),
(46, '    Patient ID- 0675', 'Kun', 'Genos', 'Torib', 'none', '25', 'City Z', '', 'Saitama', '', 'Bang Sensie', '', 'testing', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'Testing', 'Child Immunization', 'Malnutrition', 'diabitis', 'Temporary', 'Amoxixilin', '10', 'for fever\r\n', '2020-02-11', '2020-02-11 18:19:07'),
(43, '    Patient ID- 0300', 'Uchiha', 'Sasuke', 'Uzumaki', 'none', '20', 'Hidden Leaf', '', 'Hashirma Senju', '', 'Tobirama Senju', '', 'London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants', '', 'Obito Uchiha', '', '', '', '', 'New Admission', 'London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants', 'Child Immunization', 'Positive', 'Cough', 'Good', 'biogesic', '2', 'for fever', '2020-02-07', '2020-02-07 16:05:38'),
(44, '    Patient ID- 2077', 'Son', 'Goku', 'j', 'Sr', '45', 'Planet Earth', '', 'KLIRIN', '', 'Gohan', '', 'test test', '', 'Vegeta', '', '', '', '', 'New Consultation/case', 'test test', 'Child Immunization', 'Positive', 'cement bone', 'Good', '', '', '', '', '2020-02-04 22:08:19'),
(42, '    Patient ID- 7829', 'Sensie', 'Saitama', 'One Punch Man', 'none', '23', 'City Z', '', 'Genos', '', 'Bang Sensie', '', 'London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants', '', 'Atomic Samurria', '', '', '', '', 'New Admission', 'London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants', 'Child Immunization', 'Malnutrition', 'cement bone', 'heart attact', '', '', '', '', '2020-02-08 20:36:40'),
(45, '    Patient ID- 0604', 'Uchiha', 'Madara', 'Uzumaki', 'none', '25', 'Hidden Leaf', '', 'Hashirma Senju', '', 'Tobirama Senju', '', 'TESTING', '', 'Obito Uchiha', '', '', '', '', 'New Consultation/case', 'TESTING', 'Family Planning', 'Positive', 'Cough', 'heart attact', 'amoxixilin', '4', 'for wound', '2020-02-07', '2020-02-07 15:51:09'),
(59, '    Patient ID- 4000', 'Son', 'Piccolo', 'K', 'none', '25', 'Planet Earth', '', 'Don Isko', '', 'Bang Sensie', '', 'SDSDS', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'SASA', 'Adult Immunization', 'SAASAS', 'SAA', 'ASA', 'Amoxixilin', '3', 'for fever', '2020-02-11', '2020-02-11 21:00:07'),
(60, '    Patient ID- 0010', 'kdhhksdkk', 'hshdkh', 'khkhdk', '', '3232', '', '', 'dssd', '', 'dsd', '', 'sdsds', '', 'sdsdz', '', '', '', '', 'New Admission', 'sdsd', 'Postpatrum', 'dsd', 'dsd', 'sds', '', '', '', '', '2020-02-11 21:58:16'),
(55, '    Patient ID- 6945', 'Fubuki', 'Tatsumaki', 'H', 'none', '25', 'City Z', '', 'Hashirma Senju', '', 'Don Turko', '', 'TEST', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'TEST', 'Postpatrum', 'Injury', 'Food Medication', 'Good', '', '', '', '', '2020-02-08 21:48:17'),
(56, '    Patient ID- 3420', 'Uzumaki', 'Kushina', 'Namikaze', 'none', '45', 'Hidden Leaf', '', 'KLIRIN', '', 'Hinata Hyuga', '', 'test', '', 'Atomic Samurria', '', '', '', '', 'New Consultation/case', 'test', 'Prenatal', 'Positive', 'cement bone', '', '', '', '', '', '2020-02-09 23:38:08'),
(57, '    Patient ID- 2021', 'Son', 'Goku', 'San', 'none', '46', 'Planet Earth', '', 'Genos', '', 'Don Turko', '', 'test', '', 'Atomic Samurria', '', '', '', '', 'New Admission', 'test', 'Adult Immunization', 'Bone Crack', 'diabitis', 'heart attact', '', '', '', '', '2020-02-10 10:31:16'),
(58, '    Patient ID- 9990', 'Uzumaki', 'Hinata', 'Uchiha', '', '45', '', '', 'Genos', '', 'Don Turko', '', 'test', '', 'dong gamay', '', '', '', '', 'New Consultation/case', 'test', 'Prenatal', 'Positive', 'Food Medication', 'heart attact', '', '', '', '', '2020-02-10 11:38:35');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `patient_medicine`
--

INSERT INTO `patient_medicine` (`id`, `Lastname`, `Firstname`, `Middlename`, `Sex`, `medicine`, `quantity`, `number_minus`, `progress_report`, `date_checkup`, `dates`) VALUES
(15, 'Chan', 'Sakura', 'Uchiha', 'Female', 'Amoxixilin', '10', '', 'for wound', 'feb 12', '2020-02-12 12:21:15'),
(14, 'Batersal', 'Rodney', 'Torib', 'Male', 'Alaxan', '5', '', 'for body pain', 'feb 12', '2020-02-12 12:20:13'),
(13, 'Batersal', 'Rodney', 'Torib', 'Male', 'Alaxan', '5', '', 'for body pain', 'feb 12', '2020-02-12 12:20:11');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `stock_update`
--

INSERT INTO `stock_update` (`id`, `medicine`, `quantity`, `dates`) VALUES
(8, 'Bioflu', 69, '2020-02-12 12:17:12'),
(7, 'Amoxixilin', 88, '2020-02-12 12:24:20'),
(12, 'Diavit', 140, '2020-02-11 01:15:21'),
(13, 'delfenal', 190, '2020-02-11 21:08:47'),
(14, 'Biogesic', 52, '2020-02-12 11:35:11'),
(15, 'Alaxan', 56, '2020-02-12 12:20:13'),
(16, 'Mefenamic', 150, '2020-02-11 18:52:50'),
(17, 'Paracetamol', 80, '2020-02-11 19:52:06'),
(18, 'Diatabs', 10, '2020-02-12 10:00:41'),
(19, 'Noesep', 0, '2020-02-12 09:52:25'),
(20, 'testongs', 40, '2020-02-11 19:50:44'),
(25, 'Adderall', 40, '2020-02-12 12:24:47');
