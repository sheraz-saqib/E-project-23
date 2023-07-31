-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:35 AM
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
  `hospital_email` varchar(255) NOT NULL,
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
(5, 3, ' subhan', 'subhan@gmail.com', '54545454', '565655655665', ' 33', 'nationl', 'Male', '\r\nSinopharm', 'tuesday', 'not vaccinated', 'not vaccinated', '00-00-00', '00-00-00'),
(6, 1, ' sheraz', 'sheraz@gmail.com', '434434', '565655655665', ' 33', 'nationl', 'Male', '\r\nSinopharm', 'monday', 'vaccinated', 'not vaccinated', '2023-02-22', '00-00-00'),
(7, 7, ' maria', 'maria@gmail.com', '33333333', '33333333333', ' 333333333', 'nationl', 'Male', 'Sinovac', 'monday', 'vaccinated', 'vaccinated', '2023-02-22', '2025-05-05'),
(8, 6, ' maria', 'maria@gmail.com', '222222222222222', '22222222222222', ' 22', 'nationl', 'Femail', 'Sinovac', 'monday', 'not vaccinated', 'not vaccinated', '00-00-00', '00-00-00'),
(9, 5, ' ali', 'ali@gmail.com', '333333333334', '43333333333334', ' 33', 'nationl', 'Male', 'Sinovac', 'tuesday', 'not vaccinated', 'not vaccinated', '00-00-00', '00-00-00'),
(10, 8, ' hamza', 'hamza@gmail.com', '45454545', '355353553', ' 22', 'nationl', 'Male', '\r\nSinopharm', 'tuesday', 'not vaccinated', 'not vaccinated', '00-00-00', '00-00-00');

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
(1, 'sherazAdmin', 'admin@gmail.com', '112233445566', '$2y$10$ADB4totvDxKV0XshKd1vX.XWqus0PB0u929/gr5jpuQlCqNyBO.U6', '33003232323'),
(3, 'subhanedit', 'admin22@gmail.com', '43443434', '23232', '344343434');

-- --------------------------------------------------------

--
-- Table structure for table `reg_hospital`
--

CREATE TABLE `reg_hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_manager_name` varchar(200) NOT NULL,
  `hospital_email` varchar(200) NOT NULL,
  `hospital_contact` varchar(255) NOT NULL,
  `hospital_location` varchar(222) NOT NULL,
  `hospital_manager_cnic` varchar(222) NOT NULL,
  `hospital_open_time` varchar(222) NOT NULL,
  `hospital_close_time` varchar(222) NOT NULL,
  `user_id` varchar(222) NOT NULL,
  `hospital_status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_hospital`
--

INSERT INTO `reg_hospital` (`hospital_id`, `hospital_name`, `hospital_manager_name`, `hospital_email`, `hospital_contact`, `hospital_location`, `hospital_manager_cnic`, `hospital_open_time`, `hospital_close_time`, `user_id`, `hospital_status`) VALUES
(1, 'nationl', 'humaira', 'humaira@gmail.com', '4343434', 'karachi ', '565655655665', '03:33 ', '08:01', '6 ', '');

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
(1, 'sheraz', 'sheraz@gmail.com', '434434', '565655655665', '33', 'nationl', 'Male', '\r\nSinopharm', 'monday', 'approved'),
(2, 'umer', 'umer@gmail.com', '4545454545', '565655655665', '44', 'nationl', 'Male', '\r\nSinopharm', 'monday', 'approved'),
(3, 'subhan', 'subhan@gmail.com', '54545454', '565655655665', '33', 'nationl', 'Male', '\r\nSinopharm', 'tuesday', 'approved'),
(4, 'javeed', 'javeed@gmail.com', '343434343', '565655655665', '55', 'nationl', 'Male', 'Sinovac', 'monday', 'approved'),
(5, 'ali', 'ali@gmail.com', '333333333334', '43333333333334', '33', 'nationl', 'Male', 'Sinovac', 'tuesday', 'approved'),
(6, 'maria', 'maria@gmail.com', '222222222222222', '22222222222222', '22', 'nationl', 'Femail', 'Sinovac', 'monday', 'approved'),
(7, 'maria', 'maria@gmail.com', '33333333', '33333333333', '333333333', 'nationl', 'Male', 'Sinovac', 'monday', 'approved'),
(8, 'hamza', 'hamza@gmail.com', '45454545', '355353553', '22', 'nationl', 'Male', '\r\nSinopharm', 'tuesday', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `reject_hospital`
--

CREATE TABLE `reject_hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_manager_name` varchar(200) NOT NULL,
  `hospital_email` varchar(255) NOT NULL,
  `hospital_contact` varchar(222) NOT NULL,
  `hospital_location` varchar(222) NOT NULL,
  `hospital_Avail_vaccine` varchar(222) NOT NULL,
  `hospital_manager_cnic` varchar(222) NOT NULL,
  `hospital_open_time` varchar(222) NOT NULL,
  `hospital_close_time` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'sheraz', 'sheraz@gmail.com', '565655655665', '$2y$10$3ONwfDMABSoiZluYjGNQse96b9POvvzKYMO8QMRUuXCeqz0sD9ghK', '2023-07-29 23:52:51'),
(3, 'subhan', 'subhan@gmail.com', '565655655665', '$2y$10$Gg7mgzx/jZtuUPND30qXCeCvY8D8J6RCqXkaeoN12XD8I3TIUQDTK', '2023-07-29 23:53:21'),
(6, 'humaira', 'humaira@gmail.com', '565655655665', '$2y$10$AYZeTv0iP6R.T1jKbURnlurDpa6kAJ/H876neCH9khSNNEhmHoFEm', '2023-07-29 23:54:40'),
(7, 'hamza', 'hamza@gmail.com', '355353553', '$2y$10$KU4/mt1y5./Ih5SaUTn9WefF070nrkfmD0LKph21tc6Jsh/vGS34u', '2023-07-30 02:45:23'),
(8, 'bilal', 'bilal@gmail.com', '1232323232', '$2y$10$UxJucnbB64dhFMyE3AvezeAvOUZpsazMOwoZtDlnxsNkUACoqwv.2', '2023-07-31 00:20:07'),
(9, 'bhanak', 'bhank@gmail.com', '2372738237287', '$2y$10$5GTk8tHK2KfbbRe.4HfiQesVu3O7NvyZbqu8Od73xGCDO9ZXPvHo.', '2023-07-31 00:21:08'),
(10, 'bhanak', 'bhanak@gmial.com', '565655655665', '$2y$10$FpcxNzeqtzAz2Zf5wmfLD.k7ft2ESKLj6TZgupvTB3coK2iCg3Bj.', '2023-07-31 00:21:26');

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
-- Indexes for table `reject_hospital`
--
ALTER TABLE `reject_hospital`
  ADD PRIMARY KEY (`hospital_id`);

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
  MODIFY `pateint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg_hospital`
--
ALTER TABLE `reg_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg_patient`
--
ALTER TABLE `reg_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reject_hospital`
--
ALTER TABLE `reject_hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reject_patient`
--
ALTER TABLE `reject_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
