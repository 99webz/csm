-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2016 at 12:52 AM
-- Server version: 5.5.49-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nitrxgtt_ci99`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `phone` int(11) unsigned NOT NULL,
  `mobile_1` int(11) unsigned NOT NULL,
  `mobile_2` int(11) unsigned NOT NULL,
  `email` varchar(60) NOT NULL,
  `street` varchar(100) NOT NULL,
  `suburb` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `post_code` int(4) unsigned NOT NULL,
  `dob` date NOT NULL,
  `id_type` varchar(60) NOT NULL,
  `id_num` varchar(60) NOT NULL,
  `join_date` date NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_id` (`customer_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `customer_id_2` (`customer_id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `customer_id_3` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2663 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `first_name`, `last_name`, `status`, `type`, `phone`, `mobile_1`, `mobile_2`, `email`, `street`, `suburb`, `city`, `post_code`, `dob`, `id_type`, `id_num`, `join_date`, `date_added`, `comments`) VALUES
(5, 'AA10003', 'Vaisamoa', 'Noa', 'Active', '', 123458, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'increased payment to $30 from 28/07/14'),
(2602, 'AA10001', 'Brian (Jossy)', 'Grace', 'Active', '', 123456, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale samung trend and xbox games increased payment to $40'),
(2603, 'AA10002', 'Selesitina', 'Alataua', 'Closed', '', 123457, 0, 0, '', 'street address here', 'Trenthem,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Refunded $55 on 03/02/15'),
(2604, 'AA10004', 'Teresa', 'Smith', 'Active', '', 123459, 0, 0, '', 'street address here', 'Petone,5012,Porirua', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-06/09/14 increased payment to 50'),
(2605, 'AA10005', 'Nicola', 'Talivai', 'Active', '', 123460, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-03/10/14, Resale 30/04/15- weekly payment $10 starts on 06/05/15.'),
(2606, 'AA10006', 'Aroha', 'Pahi', 'Cancelled', '', 123461, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale on 16/09/14'),
(2607, 'AA10007', 'Selesitina', 'Alatau', 'Cancelled', '', 123462, 0, 0, '', 'street address here', 'Trenthem,5018', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Customer lost his job cant pay anymore until he gets his job back.'),
(2608, 'AA10008', 'Aron', 'Travers', 'Active', '', 123463, 0, 0, '', 'street address here', 'Trentham,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-19/09/14, Fender installment start date: 13/07/15'),
(2609, 'AA10009', 'Apoiliu', 'Paipa', 'Active', '', 123464, 0, 0, '', 'street address here', 'Stokes Valley', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'phoned to canx laptop 10/06/14'),
(2610, 'AA10010', 'Andrew', 'Davoren', 'Active', '', 123465, 0, 0, '', 'street address here', 'Wainuiomata,5014', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'changed payment to $70'),
(2611, 'AA10011', 'Candice', 'Rapana', 'Cancelled', '', 123466, 0, 0, '', 'street address here', 'Moera,5010', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'changed the payment from wed to thurs.Still missing.'),
(2612, 'AA10012', 'Casey', 'Wharehinga', 'Active', '', 123467, 0, 0, '', 'street address here', 'Wainuiomata,5014', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Wants to cancel,Cant afford,got phone from winz anyway..Cancelled..reactive...refunded $30 on 18/11/14'),
(2613, 'AA10013', 'Channel', 'Martini', 'Active', '', 123468, 0, 0, '', 'street address here', 'Trenthem,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-03/09/14\n$53 on old order to go towards Pan TV.'),
(2614, 'AA10014', 'Chauntelle', 'Maloney', 'Cancelled', '', 123469, 0, 0, '', 'street address here', 'helen mamako', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2615, 'AA10015', 'Dallas', 'Kipa', 'Active', '', 123470, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale huawii phone on 10/07/,resale-18/10/14'),
(2616, 'AA10016', 'David', 'Pouwhare', 'Closed', '', 123471, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-01/10/14'),
(2617, 'AA10017', 'Desmond Waka', 'Burton', 'Active', '', 123472, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'tv repair - due 06/11/15'),
(2618, 'AA10018', 'Donald', 'Katai', 'Cancelled', '', 123473, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Very Unreliable Customer,Signs up and then cancels-Have done three timesalready'),
(2619, 'AA10019', 'Douglas Garth', 'Lurch', 'Active', '', 123474, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Gave Phone for Free when he was going to Australia, Resale-04/06/14,XBOX increased payment to $25..resale on 08/09/14,payment up to $45'),
(2620, 'AA10020', 'Duane', 'Matthews', 'Cancelled', '', 123475, 0, 0, '', 'street address here', 'Moera,5010', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale on16/09/14,Resale-30/09/14'),
(2621, 'AA10021', 'Tai', 'Davies', 'Cancelled', '', 123476, 0, 0, '', 'street address here', 'Titahi Bay,5022', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2622, 'AA10022', 'Lafoia', 'Afele', 'Cancelled', '', 123477, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2623, 'AA10023', 'Emily', 'Watkins', 'Cancelled', '', 123478, 0, 0, '', 'street address here', 'Strathmore', 'Strathmore', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', '11/06/14 called to find out delivery date'),
(2624, 'AA10024', 'Pene Horo', 'Walker', 'Closed', '', 123479, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Penehoro changed her name - was formerly Ena Penehoro. 24/04/15'),
(2625, 'AA10025', 'Fatai', 'Finau', 'Cancelled', '', 123480, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resent the DD on 17/06/14'),
(2626, 'AA10026', 'Felise', 'Silipa', 'Active', '', 123481, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale 05/01/15 payment reduced to $40,picked up his iphone 5c was playing up'),
(2627, 'AA10027', 'Fergus', 'Lurch', 'Active', '', 123482, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-04/06/14-LG 32 TV,Incresed  Payment to $30...his home theter played up so gave him Panasonic bluray for free'),
(2628, 'AA10028', 'Filika', 'Tusiga', 'Cancelled', '', 123483, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale and delivery of nextbook 7(10/09/14)'),
(2629, 'AA10029', 'Chelise', 'Chelise', 'Cancelled', '', 123484, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2630, 'AA10030', 'Franquel', 'Hughes', 'Cancelled', '', 123485, 0, 0, '', 'street address here', 'Wainuiomata,5014', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Met on 06/09/14.gave free headphones..met on 21.2.15. She will do automatic payments'),
(2631, 'AA10031', 'Fredrick', 'Morunga', 'Active', '', 123486, 0, 0, '', 'street address here', 'Timberlea,5018', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-Samsung Trend-16/08/14'),
(2632, 'AA10032', 'Garry', 'Reynard', 'Cancelled', '', 123487, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2633, 'AA10033', 'Glenn', 'Augustine', 'Closed', '', 123488, 0, 0, '', 'street address here', 'Brooklyn,6021', 'Wellington', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-28/07/14'),
(2634, 'AA10034', 'George', 'Tipene', 'Closed', '', 123489, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2635, 'AA10035', 'Gorrina', 'Teina', 'Active', '', 123490, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2636, 'AA10036', 'Hare', 'Kerehoma', 'Active', '', 123491, 0, 0, '', 'street address here', 'Wainuiomata,5014', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-31/10/14,resale-22/11/14'),
(2637, 'AA10037', 'Dywayne', 'Eiao', 'Cancelled', '', 123492, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2638, 'AA10038', 'Helen', 'Davis', 'Closed', '', 123493, 0, 0, '', 'street address here', 'Johnsonville,newlands', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Paid off Konka TV,$699.Resle of s3 on 10/07/14'),
(2639, 'AA10039', 'Heulupeau', 'Sefesi', 'Cancelled', '', 123494, 0, 0, '', 'street address here', 'Johnsonville', 'Johnsonville', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2640, 'AA10040', 'Kalena', 'Hemi', 'Active', '', 123495, 0, 0, '', 'street address here', 'Trenthem,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2641, 'AA10041', 'Jackie', 'Daniels', 'Active', '', 123496, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Paid off Samsung Tab2,949,Resale-4/08/14'),
(2642, 'AA10042', 'Jacob', 'Te Waa', 'Cancelled', '', 123497, 0, 0, '', 'street address here', 'Waitangirua,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-04/09/14,Resale-29/09/14'),
(2643, 'AA10043', 'Jacob', 'Kava', 'Active', '', 123498, 0, 0, '', 'street address here', 'Waterloo', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-15/10/14'),
(2644, 'AA10044', 'Jeanette', 'Mamasfono (nee Fruean)', 'Closed', '', 123499, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Kara', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'customer stopped payment 26/05/14(H)02/06/14(H) did not authorize DD.'),
(2645, 'AA10045', 'Joanne', 'Campbell Hyde', 'Closed', '', 123500, 0, 0, '', 'street address here', 'Timberlea,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'increased payment to $40 from 27/08/14,reduced payment to $25 fortnight.'),
(2646, 'AA10046', 'John', 'Lole', 'Cancelled', '', 123501, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Cancelled, Delivery too late, Wants straight away'),
(2647, 'AA10047', 'John', 'Tana', 'Cancelled', '', 123502, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Cancelled,No Money received'),
(2648, 'AA10048', 'Josephine', 'Mcgregor', 'Cancelled', '', 123503, 0, 0, '', 'street address here', 'Johnsonville', 'Johnsonville', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Cancelled Cant afford, Refunded $50'),
(2649, 'AA10049', 'Josh', 'Hawira', 'Active', '', 123504, 0, 0, '', 'street address here', 'Wainuiomata,5014', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-29/10/14,Resale-10/12/14'),
(2650, 'AA10050', 'Joseph', 'Faauga', 'Active', '', 123505, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-19/09/14'),
(2651, 'AA10051', 'Fredrick Haniteli', 'Foliaki', 'Active', '', 123506, 0, 0, '', 'street address here', 'Lyal Bay', 'Wellington', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'HP Envy 15-ko22tx priced 2099(Nl) bought 379 mistake'),
(2652, 'AA10052', 'Julie', 'Iasona', 'Closed', '', 123507, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2653, 'AA10053', 'Karen', 'Lancaster', 'Active', '', 123508, 0, 0, '', 'street address here', 'Cannons Creek,5024', 'Porirua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-04/02/15\nresale-16/11/15'),
(2654, 'AA10054', 'Katarina', 'Tipene', 'Active', '', 123509, 0, 0, '', 'street address here', 'Foxton, Stokes Valley', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2655, 'AA10055', 'Shirley Anne', 'Te Kooti', 'Active', '', 123510, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'resale-08/09/14'),
(2656, 'AA10056', 'Katiana', 'Tamiana', 'Cancelled', '', 123511, 0, 0, '', 'street address here', 'Western Heights', 'Rotorua', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2657, 'AA10057', 'Kelly', 'McFarlane', 'Active', '', 123512, 0, 0, '', 'street address here', 'Naenae,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'called 14/06/14 to give balance but only got voicemail'),
(2658, 'AA10058', 'Koleta', 'Okeamoa', 'Active', '', 123513, 0, 0, '', 'street address here', 'Timberlea,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Resale-01/08/14.Payment changed from $20  to$40'),
(2659, 'AA10059', 'Elia', 'Fonoti', 'Cancelled', '', 123514, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2660, 'AA10060', 'Leonard', 'Graham', 'Closed', '', 123515, 0, 0, '', 'street address here', 'Taita,5011', 'Lower Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(2661, 'AA10061', 'Lavinia', 'Finau', 'Active', '', 123516, 0, 0, '', 'street address here', 'Crofton Downs', 'Wellington', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'Reminder:\ninitial sale of 949 Was paid of with 480 f2 Cash + 600 from ASB. had dishonour fee of 90$.  (-41) amount Due . Kuldeep'),
(2662, 'AA10062', 'Leona Manawa', 'Apanui', 'Active', '', 123517, 0, 0, '', 'street address here', 'Timberlea,5018', 'Upper Hutt', 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00 00:00:00', 'increased payment to $30 from 18/08/14,resale phone-15/10/14 put up the payment to $45, now $80 from 05/01/16');

-- --------------------------------------------------------

--
-- Table structure for table `sales_rep`
--

CREATE TABLE IF NOT EXISTS `sales_rep` (
  `rep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rep_name` varchar(40) NOT NULL,
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
