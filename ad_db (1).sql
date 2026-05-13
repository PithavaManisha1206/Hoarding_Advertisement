-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2025 at 07:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'manisha', 'manisha@123', '1206', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `advertising_company_tbl`
--

CREATE TABLE `advertising_company_tbl` (
  `ac_id` int(5) NOT NULL,
  `ac_name` varchar(150) NOT NULL,
  `ac_description` varchar(250) NOT NULL,
  `ac_logo` varchar(250) NOT NULL,
  `ac_address` varchar(250) NOT NULL,
  `ac_contact_mo` varchar(20) NOT NULL,
  `ac_contact_person` varchar(50) NOT NULL,
  `hc_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertising_company_tbl`
--

INSERT INTO `advertising_company_tbl` (`ac_id`, `ac_name`, `ac_description`, `ac_logo`, `ac_address`, `ac_contact_mo`, `ac_contact_person`, `hc_id`) VALUES
(1, 'Prime Outdoor Promotions', 'Budget-friendly outdoor campaigns & branding.', 'ac_logo/6.jpg', 'B-102, Commercial Complex, Sector 5, Gandhinagar', '9012345678', '  Amit Bhatt', 1),
(2, 'AdMax Advertising Pvt Ltd', 'Leading outdoor and digital advertising agency', 'ac_logo/admax advertising.jpeg', '301, Silver Plaza, SG Highway, Ahmedabad', '9876543210    ', ' Rajesh Mehta', 7),
(3, 'City Hoardings Agency', 'Specializes in city-wide hoardings and banners.', 'ac_logo/2.jpg', ' 15, Market Road, Near Bus Depot, Vadodara	 ', '9823456789	         ', ' Anjali Patel', 3),
(4, 'SkyHigh Media', ' Experts in large format billboards and transit ads.	', 'ac_logo/4.png', '22, Corporate Park, Dumas Road, Surat', '9098765432', 'Jignesh Shah', 4),
(5, 'Metro Ads Solutions', 'Creative indoor & outdoor ad solutions provider.', 'ac_logo/5.jpg', '12th Floor, Shree Tower, Airport Road, Rajkot', '  9123456780', 'Priya Desai', 5),
(6, 'Star Outdoor Ads Pvt Ltd ', 'Experts in bus shelters, kiosks, metro & airport ads. Worked with Tata, Reliance, Airtel. ', 'ac_logo/Star Outdoor Ads Pvt Ltd.jpeg', ' 45, Ring Road, Satellite, Ahmedabad - 380015 ', '9825034567      ', ' Pooja Shah ', 6),
(7, 'Skyline Ad Agency   ', 'Premium branding at airports, malls, stadiums. Exclusive IPL and event promotions.', 'ac_logo/Skyline Ad Agency.jpeg', '101, Indiranagar, Double Road, Bengaluru - 560038 ', ' 9845123456         ', 'Neha Reddy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoarding_booking_tbl`
--

CREATE TABLE `hoarding_booking_tbl` (
  `hb_id` int(5) NOT NULL,
  `hc_id` int(5) NOT NULL,
  `hl_id` int(5) NOT NULL,
  `hb_book_date` varchar(100) NOT NULL,
  `hb_book_duration` varchar(50) NOT NULL,
  `hb_total_amount` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL,
  `hb_booking_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoarding_booking_tbl`
--

INSERT INTO `hoarding_booking_tbl` (`hb_id`, `hc_id`, `hl_id`, `hb_book_date`, `hb_book_duration`, `hb_total_amount`, `user_id`, `hb_booking_status`) VALUES
(13, 4, 4, '2025-09-02', '20', '60000 ', 24, 'accept'),
(42, 1, 1, '01/09/25', '5', '90000', 22, 'accept'),
(43, 2, 2, '03/09/25', '7', '157500', 22, 'accept'),
(44, 3, 3, '15/09/25', '4', '140000', 22, 'reject'),
(45, 4, 4, '11/09/25', '7', '196000', 22, 'accept'),
(46, 5, 5, '20/09/25', '8', '180000', 22, 'accept'),
(47, 6, 6, '19/09/25', '5', '112500', 22, 'reject'),
(48, 7, 7, '20/09/25', '7', '245000', 22, 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `hoarding_category_tbl`
--

CREATE TABLE `hoarding_category_tbl` (
  `hc_id` int(5) NOT NULL,
  `hc_name` varchar(250) NOT NULL,
  `hc_description` varchar(250) NOT NULL,
  `hc_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoarding_category_tbl`
--

INSERT INTO `hoarding_category_tbl` (`hc_id`, `hc_name`, `hc_description`, `hc_photo`) VALUES
(1, 'Large Format Hoardings', 'Large format hoardings, also known as billboards, are large, prominent outdoor advertising structures, often found in high-traffic areas like highways and city centers. ', 'hc_photo/large2.jpg'),
(2, 'Unipoles Hoardings', 'Unipole hoardings are large, single-pole advertising structures, typically found in high-traffic areas.', 'hc_photo/uh2.jpg'),
(3, ' Gantry Advertising', 'Gantry advertising involves placing billboards on large overhead structures, typically spanning roads or highways, to reach motorists and commuters.', 'hc_photo/p1.jpg'),
(4, 'kiosk', 'Kiosk hoarding, also known as low-height perimeter hoarding, is a type of temporary structure used to enclose construction sites or areas undergoing renovation, particularly in public spaces like shopping malls or airports.', 'hc_photo/kiosk1.jpg'),
(5, ' GSRTC Branding', 'GSRTC branding primarily focuses on leveraging buses and bus stands as advertising mediums to reach a wide audience in Gujarat.', 'hc_photo/GSRTC1.jpg'),
(6, ' Rural Branding', 'Rural branding, a specialized form of place branding, focuses on promoting specific rural areas, communities, or regions.', 'hc_photo/rb1.jpg'),
(7, ' BQS ', 'BQS (Bus Queue Shelter) advertising refers to promotional displays placed on bus shelters, offering a high-visibility, cost-effective outdoor advertising solution.', 'hc_photo/p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoarding_location_tbl`
--

CREATE TABLE `hoarding_location_tbl` (
  `hl_id` int(5) NOT NULL,
  `hl_name` varchar(150) NOT NULL,
  `hl_address` varchar(250) NOT NULL,
  `hl_city` varchar(150) NOT NULL,
  `hl_photo` varchar(250) NOT NULL,
  `hl_rent` varchar(100) NOT NULL,
  `hc_id` varchar(10) NOT NULL,
  `ac_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoarding_location_tbl`
--

INSERT INTO `hoarding_location_tbl` (`hl_id`, `hl_name`, `hl_address`, `hl_city`, `hl_photo`, `hl_rent`, `hc_id`, `ac_id`) VALUES
(1, 'Highway Toll Hoarding', 'NH-8 Highway, Near Express Toll Plaza, Exit 5', 'Vadodara', 'hl_photo/large4.jpg', '18000', '1', '1'),
(2, 'City Circle Banner', 'Opposite Railway Station Circle, Near Hotel Grand', 'surat', 'hl_photo/city circle banner.jpeg', '22500', '2', '7'),
(3, 'Airport Road Hoarding', 'Airport Road, Near Domestic Terminal Parking Gate', 'Rajkot', 'hl_photo/p4.jpg', '35000', '3', '3'),
(4, 'Shopping Hub Hoarding', 'Near Alpha One Mall, SG Highway, Near Vastrapur Lake', 'Gandhinagar', 'hl_photo/p2.jpg', '28000', '4', '4'),
(5, 'MG Road Billboard', 'MG Road, Near Central Mall, Sector 17', 'surat', 'hl_photo/p3.jpg', '22500', '5', '5'),
(6, 'Chitra Outdoor Publicity ', 'Election campaigns, retail promotions, hoarding rentals. Trusted in Gujarat.', 'surat', 'hl_photo/chitra publicity.jpeg', '22500', '6', '6'),
(7, 'Skyline Ad Agency      ', 'Premium branding at airports, malls, stadiums. Exclusive IPL and event promotions.  ', 'rajkot', 'hl_photo/Skyline Ad Agency.jpeg', '35000', '7', '2');

-- --------------------------------------------------------

--
-- Table structure for table `review_master_tbl`
--

CREATE TABLE `review_master_tbl` (
  `rm_id` int(5) NOT NULL,
  `rm_message` varchar(250) NOT NULL,
  `hl_id` int(5) NOT NULL,
  `rm_date` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL,
  `review_photo` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_master_tbl`
--

INSERT INTO `review_master_tbl` (`rm_id`, `rm_message`, `hl_id`, `rm_date`, `user_id`, `review_photo`) VALUES
(11, 'Nice spot for advertisements,visible from both directions of traffic.', 1, '2025-09-01', 24, 'ac_logo/6.jpg'),
(12, 'Good Hoarging,but slightly expensive.still,the foot traffic was worth the investment.		', 2, '2025-08-21', 21, 'ac_logo/2.jpg'),
(13, 'Excellent location near the main market.our compaign got huge visibility in just one week.	', 3, '2025-08-21', 21, 'hl_photo/p4.jpg'),
(15, 'Easy booking process,friendly support team,and prime location.Highly recommend Chitra Hoarding.', 4, '2025-09-08', 22, ' hl_photo/p3.jpg'),
(16, 'Average experience Location was fine but not much crowd during the evening hours.', 5, '2025-09-21', 24, 'ac_logo/Star Outdoor Ads Pvt Ltd.jpeg'),
(17, 'Great location,very visible.', 6, '2025-09-10', 22, 'hl_photo/city circle banner.jpeg'),
(18, 'Good value for money.', 7, '2025-09-05', 21, 'hl_photo/Skyline Ad Agency.jpeg'),
(47, 'Booking was quick and easy.', 2, '09/09/25', 21, 'ac_logo/Star Outdoor Ads Pvt Ltd.jpeg'),
(48, 'High traffic area,effective hoarding.', 2, '09/09/25', 21, 'ac_logo/4.png'),
(52, 'prime location,good exposure.', 2, '09/09/25', 21, 'review_photo/5.jpg'),
(54, 'Rent is a bit high but worth it.', 3, '09/09/25', 21, 'review_photo/Skyline Ad Agency.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_master_tbl`
--

CREATE TABLE `user_master_tbl` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_pincode` varchar(10) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master_tbl`
--

INSERT INTO `user_master_tbl` (`user_id`, `user_name`, `user_email`, `user_address`, `user_city`, `user_pincode`, `user_mobile`, `user_password`, `user_photo`) VALUES
(21, 'Ravi Patel	', 'ravi.patel@example.com', '456 Nehru Street     	', 'Ahmedabad', '380001', '9123456789', ' Ravi@456	', 'user_photo/p6.jpg'),
(22, 'Anjali Rao	', 'anjali.rao@example.com', '789 Park Avenue  		', 'Pune', '411001', '9988776655', 'Anjali@789', 'user_photo/p1.jpg'),
(24, 'Priya Shah patel', 'priya.shah@example.com', '123 MG Road', 'Mumbai	', '400001', '9876543210', 'Priya@12 ', 'user_photo/uh2.jpg'),
(33, 'Manisha', 'ab@df', 'Near Alpha Road', 'Mumbai	', '123456', '9087654321', 'mona@123', 'user_photo/Skyline Ad Agency.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertising_company_tbl`
--
ALTER TABLE `advertising_company_tbl`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `hoarding_booking_tbl`
--
ALTER TABLE `hoarding_booking_tbl`
  ADD PRIMARY KEY (`hb_id`);

--
-- Indexes for table `hoarding_category_tbl`
--
ALTER TABLE `hoarding_category_tbl`
  ADD PRIMARY KEY (`hc_id`);

--
-- Indexes for table `hoarding_location_tbl`
--
ALTER TABLE `hoarding_location_tbl`
  ADD PRIMARY KEY (`hl_id`);

--
-- Indexes for table `review_master_tbl`
--
ALTER TABLE `review_master_tbl`
  ADD PRIMARY KEY (`rm_id`);

--
-- Indexes for table `user_master_tbl`
--
ALTER TABLE `user_master_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertising_company_tbl`
--
ALTER TABLE `advertising_company_tbl`
  MODIFY `ac_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `hoarding_booking_tbl`
--
ALTER TABLE `hoarding_booking_tbl`
  MODIFY `hb_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `hoarding_category_tbl`
--
ALTER TABLE `hoarding_category_tbl`
  MODIFY `hc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hoarding_location_tbl`
--
ALTER TABLE `hoarding_location_tbl`
  MODIFY `hl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `review_master_tbl`
--
ALTER TABLE `review_master_tbl`
  MODIFY `rm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_master_tbl`
--
ALTER TABLE `user_master_tbl`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
