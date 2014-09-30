-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 23 Σεπ 2014 στις 11:43:03
-- Έκδοση διακομιστή: 5.5.24-log
-- Έκδοση PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `politistika`
--
CREATE DATABASE `politistika` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `politistika`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ft_form_4`
--

CREATE TABLE IF NOT EXISTS `ft_form_4` (
  `submission_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `programa` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ar_protocol` varchar(255) DEFAULT NULL,
  `sxol_etos` varchar(255) DEFAULT NULL,
  `dide_name` varchar(255) DEFAULT NULL,
  `sch_name` varchar(255) DEFAULT NULL,
  `tel_ergasias` varchar(255) DEFAULT NULL,
  `dimos` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `sch_teachers` varchar(255) DEFAULT NULL,
  `sch_students` varchar(255) DEFAULT NULL,
  `dieythintis_name` varchar(255) DEFAULT NULL,
  `klados_dieythinti` varchar(255) DEFAULT NULL,
  `program_title` varchar(255) DEFAULT NULL,
  `ar_praksis` varchar(255) DEFAULT NULL,
  `date_praksis` varchar(255) DEFAULT NULL,
  `sch_orario` varchar(255) DEFAULT NULL,
  `ypeythinos_name` varchar(255) DEFAULT NULL,
  `ypeythinos_amm` varchar(255) DEFAULT NULL,
  `ypeythinos_klados` varchar(255) DEFAULT NULL,
  `ypeythinos_wres` int(100) DEFAULT NULL,
  `ypeythinos_again` varchar(255) DEFAULT NULL,
  `ypeythinos_epimorfosi` text,
  `symetexwn1_name` varchar(255) DEFAULT NULL,
  `symetexwn1_amm` varchar(255) DEFAULT NULL,
  `symetexwn1_klados` varchar(255) DEFAULT NULL,
  `symetexwn1_wres` varchar(255) DEFAULT NULL,
  `symetexwn1_again` varchar(255) DEFAULT NULL,
  `symetexwn1_epimorfosi` text,
  `symetexwn2_name` varchar(255) DEFAULT NULL,
  `symetexwn2_amm` varchar(255) DEFAULT NULL,
  `symetexwn2_klados` varchar(255) DEFAULT NULL,
  `symetexwn2_wres` varchar(255) DEFAULT NULL,
  `symetexwn2_again` varchar(255) DEFAULT NULL,
  `symetexwn2_epimorfosi` text,
  `symetexwn3_name` varchar(255) DEFAULT NULL,
  `symetexwn3_amm` varchar(255) DEFAULT NULL,
  `symetexwn3_klados` varchar(255) DEFAULT NULL,
  `symetexwn3_wres` varchar(255) DEFAULT NULL,
  `symetexwn3_again` varchar(255) DEFAULT NULL,
  `symetexwn3_epimorfosi` text,
  `mathites_synolo` varchar(255) DEFAULT NULL,
  `agoria` varchar(255) DEFAULT NULL,
  `koritsia` varchar(255) DEFAULT NULL,
  `amiges` varchar(255) DEFAULT NULL,
  `meet_day` varchar(255) DEFAULT NULL,
  `meet_hour` varchar(255) DEFAULT NULL,
  `meet_place` varchar(255) DEFAULT NULL,
  `arxeio` varchar(255) DEFAULT NULL,
  `ypothemata` longtext,
  `stoxoi` longtext,
  `methodologia` longtext,
  `syndeseis` longtext,
  `month1` longtext,
  `month2` longtext,
  `month3` longtext,
  `month4` longtext,
  `month5` longtext,
  `episkepseis` varchar(255) DEFAULT NULL,
  `submission_date` varchar(200) NOT NULL,
  `last_modified_date` varchar(200) NOT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `is_finalized` enum('yes','no') DEFAULT 'no',
  `sch_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Άδειασμα δεδομένων του πίνακα `ft_form_4`
--

INSERT INTO `ft_form_4` (`submission_id`, `programa`, `date`, `ar_protocol`, `sxol_etos`, `dide_name`, `sch_name`, `tel_ergasias`, `dimos`, `fax`, `e_mail`, `sch_teachers`, `sch_students`, `dieythintis_name`, `klados_dieythinti`, `program_title`, `ar_praksis`, `date_praksis`, `sch_orario`, `ypeythinos_name`, `ypeythinos_amm`, `ypeythinos_klados`, `ypeythinos_wres`, `ypeythinos_again`, `ypeythinos_epimorfosi`, `symetexwn1_name`, `symetexwn1_amm`, `symetexwn1_klados`, `symetexwn1_wres`, `symetexwn1_again`, `symetexwn1_epimorfosi`, `symetexwn2_name`, `symetexwn2_amm`, `symetexwn2_klados`, `symetexwn2_wres`, `symetexwn2_again`, `symetexwn2_epimorfosi`, `symetexwn3_name`, `symetexwn3_amm`, `symetexwn3_klados`, `symetexwn3_wres`, `symetexwn3_again`, `symetexwn3_epimorfosi`, `mathites_synolo`, `agoria`, `koritsia`, `amiges`, `meet_day`, `meet_hour`, `meet_place`, `arxeio`, `ypothemata`, `stoxoi`, `methodologia`, `syndeseis`, `month1`, `month2`, `month3`, `month4`, `month5`, `episkepseis`, `submission_date`, `last_modified_date`, `ip_address`, `is_finalized`, `sch_id`) VALUES
(15, 'ΠΟΛΙΤΙΣΤΙΚΑ ΘΕΜΑΤΑ', '25/09/2013', '45', '2013-2014', 'ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ', 'ΠΕΙΡΑΜΑΤΙΚΟ ΜΟΥΣΙΚΟ ΓΥΜΝΑΣΙΟ ΠΑΛΛΗΝΗΣ', '2106668547', 'ΠΑΛΛΗΝΗΣ', '2106668547', 'mail@gym-mous-pallin.att.sch.gr', '700', '670', 'ΓΚΓΚΓ ΞΚ', 'ΠΕ 07', 'ΚΗΚΗΓΚ ΚΞ΄ΚΞ', '78', '25/09/2013', 'ΜΟΝΟ ΠΡΩΙ', 'ΗΞΓΚΓ ΞΗΛΗ', '064567899', 'ΠΕ 10', 1, 'ΟΧΙ', 'ΓΘΡΘΡΘΦΓΝ', 'ΕΚΔΦΓΚΞΔΦΛΚ ΠΟΓΣΠ', '054345876', 'ΠΕ 12', '1', 'ΟΧΙ', '', '', '', '', '', '', '', '', '', '', '', '', '', '14', '11', '5', 'ΜΕΙΚΤΗ ΟΜΑΔΑ', 'ΔΓΣΦΔΗ', '1530', 'ΡΤΝΩΒ', 'ΟΧΙ', 'ΙΔΦΣΔΛΦΣΟΙΓΞ\r\nΔΚΦΞΣΦΞ', 'ΓΚΣΔΓΚΣ\r\nΛΔΦΚΣΔ', 'ΓΔΞΣΔΟΓΣΓΣΦΓ΄ΣΓ΄Σ', 'ΙΣΔΞΞ\r\nΔΣΟΦΚΣΓΚ', 'ΞΣΔ΄ΓΣ΄ΔΓ\r\nΚΓΛΚΣΞΓ', 'ΔΓΚΣΦ΄ΚΞΨΩΙΒ\r\nΞΓΛΚΣΓΞ', 'ΣΔΗΦΣΔΚΓΗΣ\r\nΣΔΚΞΣΔΛΓ\r\nΚΣΞΓΙΓ', 'ΦΓΗΦΗΔΦ', 'ΦΓΦΓ', '1', '20/ 09/ 13', '20/09/2013', '127.0.0.1', 'yes', '12'),
(16, 'ΑΓΩΓΗ ΥΓΕΙΑΣ', '11/09/2013', '5', '2013-2014', 'ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ', 'ΓΕΝΙΚΟ ΛΥΚΕΙΟ ΔΙΟΝΥΣΟΥ «ΦΩΤΗΣ ΚΟΝΤΟΓΛΟΥ»', '2106210095', 'ΔΙΟΝΥΣΟΥ', '2106210095', 'mail@lyk-dionys.att.sch.gr', '55', '5', 'ΠΑΠΠΑΣ ΚΚΚ', 'ΠΕ 14', 'ΤΤΤ', '4', '11/09/2013', 'ΠΡΩΙ ΚΑΙ ΑΠΟΓΕΥΜΑ', 'ΠΑΠΑΠΑΠΑΠ', '888888888', 'ΠΕ 01', 2, 'ΟΧΙ', 'ΤΤΤΤΤΤΤΤΤ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '4', '4', 'ΑΜΙΓΕΣ ΤΜΗΜΑ', 'Δ', '15:00', 'ΣΧ', 'ΟΧΙ', 'ΤΤ', 'Τ', 'Τ', 'Τ', 'Τ', 'Τ', 'Τ', 'Τ', 'Τ', '4', '20/ 09/ 13', '20/09/2013', '127.0.0.1', 'no', '110');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pschools`
--

CREATE TABLE IF NOT EXISTS `pschools` (
  `sch_id` int(3) NOT NULL DEFAULT '0',
  `submited` int(1) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `sch_code` varchar(20) DEFAULT NULL,
  `sch_perioxi` varchar(45) DEFAULT NULL,
  `sch_name` varchar(98) DEFAULT NULL,
  `sch_dimos` varchar(34) DEFAULT NULL,
  `sch_phone` bigint(10) DEFAULT NULL,
  `fax` bigint(10) DEFAULT NULL,
  `email` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `pschools`
--

INSERT INTO `pschools` (`sch_id`, `submited`, `username`, `password`, `sch_code`, `sch_perioxi`, `sch_name`, `sch_dimos`, `sch_phone`, `fax`, `email`) VALUES
(1, 0, '0502036', '1123F13L', '0502036', 'Α΄ Ανατ. Αττικής', 'ΓΥΜΝΑΣΙΟ ΓΕΡΑΚΑ 1', 'ΠΑΛΛΗΝΗΣ', 2106613656, 2106613656, 'mail@1gym-gerak.att.sch.gr'),
(2, 0, '0502037', '1132F50L', '0502037', 'Α΄ Ανατ. Αττικής', 'ΓΥΜΝΑΣΙΟ ΓΕΡΑΚΑ 2', 'ΠΑΛΛΗΝΗΣ', 2106047305, 2106047305, 'mail@2gym-gerak.att.sch.gr'),
(3, 0, 'ΞΕΝΟΓΛΩΣΣΟ', '3084F04G', 'ΞΕΝΟΓΛΩΣΣΟ', 'Ανατ. Αττικής-Ξενόγλωσσα', 'Campion School', 'ΠΑΛΛΗΝΗΣ', 2106071700, 2106071700, 'dbaker@campion.edu.gr');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `puggroups`
--

CREATE TABLE IF NOT EXISTS `puggroups` (
  `GroupID` int(11) NOT NULL AUTO_INCREMENT,
  `Label` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`GroupID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Άδειασμα δεδομένων του πίνακα `puggroups`
--

INSERT INTO `puggroups` (`GroupID`, `Label`) VALUES
(1, 'users');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pugmembers`
--

CREATE TABLE IF NOT EXISTS `pugmembers` (
  `UserName` varchar(50) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserName`,`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `pugmembers`
--

INSERT INTO `pugmembers` (`UserName`, `GroupID`) VALUES
('admin', -1),
('user', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pugrights`
--

CREATE TABLE IF NOT EXISTS `pugrights` (
  `TableName` varchar(50) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '0',
  `AccessMask` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`TableName`,`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `pugrights`
--

INSERT INTO `pugrights` (`TableName`, `GroupID`, `AccessMask`) VALUES
('ft_form_4', -1, 'AEDSPIM'),
('ft_form_4 Chart', -1, 'SM'),
('pschools', -1, 'AEDSPIM'),
('pusers', -1, 'SPIM'),
('settings', -1, 'EDSPIM'),
('ΟΛΕΣ ΟΙ ΑΙΤΗΣΕΙΣ', -1, 'AEDSPIM'),
('ΟΛΕΣ ΟΙ ΑΙΤΗΣΕΙΣ', 1, 'SP'),
('ΟΡΙΣΤΙΚΕΣ ΑΙΤΗΣΕΙΣ', -1, 'AEDSPIM'),
('ΟΡΙΣΤΙΚΕΣ ΑΙΤΗΣΕΙΣ', 1, 'SP'),
('ΟΡΙΣΤΙΚΕΣ ΜΕ ΔΙΑΚΟΠΗ', -1, 'AEDSPIM'),
('ΟΡΙΣΤΙΚΕΣ ΜΕ ΔΙΑΚΟΠΗ', 1, 'SP'),
('ΠΡΟΣΩΡΙΝΕΣ ΑΙΤΗΣΕΙΣ', -1, 'AEDSPIM'),
('ΠΡΟΣΩΡΙΝΕΣ ΑΙΤΗΣΕΙΣ', 1, 'SP');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pusers`
--

CREATE TABLE IF NOT EXISTS `pusers` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `pusers`
--

INSERT INTO `pusers` (`username`, `password`) VALUES
('admin', 'tester@#$'),
('user', 'pruser@#$');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `active` int(10) NOT NULL,
  `trexon_sxol_etos` varchar(200) NOT NULL,
  `dide` varchar(100) NOT NULL,
  `max_wres_ana_programma` int(10) NOT NULL,
  `max_wres_ana_teacher` int(10) NOT NULL,
  `max_programmata_ana_teacher` int(10) NOT NULL,
  `max_ypeythinos` int(10) NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `settings`
--

INSERT INTO `settings` (`active`, `trexon_sxol_etos`, `dide`, `max_wres_ana_programma`, `max_wres_ana_teacher`, `max_programmata_ana_teacher`, `max_ypeythinos`, `deadline`) VALUES
(0, '2013-2014', 'ΔΔΕ ΑΝ. ΑΤΤΙΚΗΣ', 2, 2, 3, 1, '2013-10-11 15:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
