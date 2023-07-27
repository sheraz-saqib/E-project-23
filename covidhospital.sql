-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_hospital`
--

CREATE TABLE `accept_hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_manager_name` varchar(200) NOT NULL,
  `hospital_emial` varchar(255) NOT NULL,
  `hospital_contact` varchar(255) NOT NULL,
  `hospital_location` varchar(222) NOT NULL,
  `hospital_Avail_vaccine` varchar(222) NOT NULL,
  `hospital_manager_cnic` varchar(222) NOT NULL,
  `hospital_open_time` varchar(222) NOT NULL,
  `hospital_close_time` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accept_patient`
--

CREATE TABLE `accept_patient` (
  `pateint_id` int(11) NOT NULL,
  `reg_pateint_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `patient_cnic` varchar(255) NOT NULL,
  `patient_age` varchar(222) NOT NULL,
  `patient_select_hos` varchar(222) NOT NULL,
  `patient_gender` varchar(222) NOT NULL,
  `patient_vacc` varchar(222) NOT NULL,
  `patient_app_day` varchar(222) NOT NULL,
  `pateint_dos_1` varchar(222) NOT NULL,
  `pateint_dos_2` varchar(222) NOT NULL,
  `pateint_dos_1_date` varchar(111) NOT NULL,
  `pateint_dos_2_date` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accept_patient`
--

INSERT INTO `accept_patient` (`pateint_id`, `reg_pateint_id`, `patient_name`, `patient_email`, `patient_phone`, `patient_cnic`, `patient_age`, `patient_select_hos`, `patient_gender`, `patient_vacc`, `patient_app_day`, `pateint_dos_1`, `pateint_dos_2`, `pateint_dos_1_date`, `pateint_dos_2_date`) VALUES
(1, 18, 'shahzaib', 'shahzaib@gmail.com', '2382382388', '565655655665', '22', 'jinnah', 'Male', 'CanSino-Bio', '	\r\ntuesday', 'vaccinated', 'vaccinated', '10-5-23', '12-9-23');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(222) NOT NULL,
  `admin_email` varchar(222) NOT NULL,
  `admin_cnic` varchar(222) NOT NULL,
  `admin_password` varchar(222) NOT NULL,
  `admin_phone` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_cnic`, `admin_password`, `admin_phone`) VALUES
(1, 'sherazAdmin1', 'admin@gmail.com', '112233445566', '$2y$10$ADB4totvDxKV0XshKd1vX.XWqus0PB0u929/gr5jpuQlCqNyBO.U6', '33003232323'),
(3, 'subhanedit', 'admin22@gmail.com', '43443434', '23232', '344343434');

-- --------------------------------------------------------

--
-- Table structure for table `reg_hospital`
--

CREATE TABLE `reg_hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_manager_name` varchar(200) NOT NULL,
  `hospital_emial` varchar(200) NOT NULL,
  `hospital_contact` varchar(255) NOT NULL,
  `hospital_location` varchar(222) NOT NULL,
  `hospital_manager_cnic` varchar(222) NOT NULL,
  `hospital_open_time` varchar(222) NOT NULL,
  `hospital_close_time` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_hospital`
--

INSERT INTO `reg_hospital` (`hospital_id`, `hospital_name`, `hospital_manager_name`, `hospital_emial`, `hospital_contact`, `hospital_location`, `hospital_manager_cnic`, `hospital_open_time`, `hospital_close_time`) VALUES
(1, 'jinnah', 'sheraz', 'jinnah@gmail.com', '232434343434', 'karachi ', '232323', '14:22 ', '17:44'),
(2, 'indus', 'subhan', 'indus@gmail.com', '232372973', 'lahore', '2382388238', '03:33 ', '19:33'),
(3, 'nmc', 'umair', 'nmc@gmial.com', '2382382382', 'karachi ', '344343434', '03:33 ', '08:07'),
(4, 'nationl', 'JAVEED', 'national@gmail.com', '232323232', 'karachi ', '7277277272', '23:59 ', '12:59');

-- --------------------------------------------------------

--
-- Table structure for table `reg_patient`
--

CREATE TABLE `reg_patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `patient_cnic` varchar(255) NOT NULL,
  `patient_age` varchar(22) NOT NULL,
  `patient_select_hos` varchar(222) NOT NULL,
  `patient_gender` varchar(222) NOT NULL,
  `patient_vacc` varchar(222) NOT NULL,
  `patient_app_day` varchar(222) NOT NULL,
  `patient_status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_patient`
--

INSERT INTO `reg_patient` (`patient_id`, `patient_name`, `patient_email`, `patient_phone`, `patient_cnic`, `patient_age`, `patient_select_hos`, `patient_gender`, `patient_vacc`, `patient_app_day`, `patient_status`) VALUES
(2, 'subhan', 'subhan@gamil.com', '333333333', '4444444444', '33', 'Department 1', 'Department 1', 'Doctor 1', 'monday', 'approved'),
(3, 'maria', 'maria@gmail.com', '22222222222', '565655655665', '22', 'Department 3', 'Department 2', 'Doctor 3', 'friday', 'approved'),
(4, 'ali', 'ali@gmail.com', '03283238283', '444447237233232', '20', 'Department 1', 'Department 1', 'Doctor 2', 'saturday', 'approved'),
(5, 'umair', 'umair@gamil.com', '882773273273', '5544668833', '18', 'Department 2', 'Department 1', 'Doctor 1', 'monday', 'approved'),
(6, 'umer', 'umer@gmail.com', '232342423', '565655655665', '19', 'Department 1', 'Department 1', 'Doctor 1', 'thusday', 'approved'),
(7, 'sheraz', 'bhanakop@gmial.com', '3232323', '565655655665', '22', 'Department 1', 'Department 1', 'Doctor 2', 'thusday', 'approved'),
(8, 'sheraz', 'bhanakop@gmial.com', '232323', '565655655665', '22', 'Department 1', 'Department 1', 'Doctor 2', 'friday', 'approved'),
(9, 'sheraz', 'bhanakop@gmial.com', '2343', '565655655665', '34', 'Department 1', 'Department 1', 'Doctor 1', 'thusday', 'approved'),
(10, 'sheraz', 'bhanakop@gmial.com', '2322323', '5656556556652', '22', 'Department 1', 'Department 1', 'Doctor 3', 'thusday', 'approved'),
(11, 'sheraz', 'bhanakop@gmial.com', '2322323', '5656556556652', '22', 'Department 1', 'Department 1', 'Doctor 3', 'thusday', 'approved'),
(12, 'sheraz', 'bhanakop@gmial.com', '232323', '565655655665', '22', 'Department 2', 'Department 1', 'Doctor 1', 'friday', 'approved'),
(13, 'sheraz2', 'bhana2kop@gmial.com', '2222222', '565655655665', '22', 'Department 1', 'Department 1', 'Doctor 2', 'monday', 'reject'),
(14, 'sheraz3', 'bhan3akop@gmial.com', '3333333', '565655655665', '33', 'Department 1', 'Department 1', 'Doctor 2', 'monday', 'reject'),
(15, 'umair', 'umair@gamil.com', '42343434', '565655655665', '18', 'jinnah', 'Department 1', 'Doctor 1', 'thusday', 'reject'),
(16, 'sheraz', 'bhanakop@gmial.com', '32343434343', '565655655665', '18', 'jinnah', 'Male', '\r\nSinopharm', 'tuesday', 'approved'),
(17, 'ali ', 'aliop@gmial.com', '43454545', '565655655665', '33', 'nmc', 'Male', 'Sinovac', 'thusday', ''),
(18, 'shahzaib', 'shahzaib@gmai.com', '2382382388', '565655655665', '22', 'jinnah', 'Male', '\r\nCanSino-Bio', 'tuesday', ''),
(19, 'sheraz test', 'sheraz@gmail.com', '5454545', '12121212121212', '18', 'nationl', 'Male', '\r\nSinopharm', 'thusday', ''),
(20, 'javeed', 'javeed@gmail.com', '4343434', '4343434', '22', 'jinnah', 'Male', 'Sputnik', 'tuesday', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reject_patient`
--

CREATE TABLE `reject_patient` (
  `patient_id` int(11) NOT NULL,
  `reg_pateint_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `patient_cnic` varchar(255) NOT NULL,
  `patient_age` varchar(222) NOT NULL,
  `patient_select_hos` varchar(222) NOT NULL,
  `patient_gender` varchar(222) NOT NULL,
  `patient_vacc` varchar(222) NOT NULL,
  `patient_app_day` varchar(232) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reject_patient`
--

INSERT INTO `reject_patient` (`patient_id`, `reg_pateint_id`, `patient_name`, `patient_email`, `patient_phone`, `patient_cnic`, `patient_age`, `patient_select_hos`, `patient_gender`, `patient_vacc`, `patient_app_day`) VALUES
(1, 2, 'subhan', 'subhan@gmail.com', '333333333', '4444444444', '33', 'Department 1', 'Department 1', 'Doctor 1', '	\r\nmonday');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `cnic`, `password`, `time`) VALUES
(1, 'sheraz', 'sheraz@gmail.com', '12121212121212', '$2y$10$Mwak25yCwrTPjRYy6xtUru4e937ASR/u6v9jzSoJOAny5iv140SR6', '2023-07-19 01:27:06'),
(4, 'subhan', 'subhan@gamil.com', '4444444444', '$2y$10$X/aZSD1fV2N2/nTFhx7HxeekRpXSgicHoZJi0FsUAGeoAfXKEJUs.', '2023-07-19 22:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccine_id` int(11) NOT NULL,
  `vaccine_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccine_id`, `vaccine_name`) VALUES
(1, '\r\nSinopharm'),
(2, 'Sinovac'),
(3, '\r\nCanSino-Bio'),
(4, 'Sputnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_patient`
--
ALTER TABLE `accept_patient`
  ADD PRIMARY KEY (`pateint_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `reg_hospital`
--
ALTER TABLE `reg_hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `reg_patient`
--
ALTER TABLE `reg_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `reject_patient`
--
ALTER TABLE `reject_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_patient`
--
ALTER TABLE `accept_patient`
  MODIFY `pateint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg_hospital`
--
ALTER TABLE `reg_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg_patient`
--
ALTER TABLE `reg_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reject_patient`
--
ALTER TABLE `reject_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
