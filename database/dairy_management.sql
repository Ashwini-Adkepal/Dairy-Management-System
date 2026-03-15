-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 08:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(2, 'Curd', 'Curd'),
(3, 'Cow Milk', 'Cow Milk'),
(5, 'Ghee', 'Ghee per 500'),
(6, 'Paneer', 'per 380/kg'),
(7, 'Peda', 'milk'),
(8, 'Butter', 'milk');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(400) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_address`, `pincode`, `city`, `email_id`, `contact_no`) VALUES
(1, 'Harsha', 'Dharwad', 580001, 'Dharwad', 'harsha@gmail.com', 9865456786),
(5, 'Akshay Bhat', 'Balagar', 581359, 'Yellapur', 'akshay123@gmail.com', 8657599888),
(6, 'Ganapati Bhat', 'Tatagar', 581359, 'yellapur', 'ganapati123@gmail.com', 9481815106),
(10, 'ashwini adkepal', 'balagar', 581359, 'yellapur', 'ashwinibhat9483@gmail.com', 9483644749),
(11, 'Mahima Bhat', 'Tatagar', 581359, 'Yellapur', 'mahimab415@gmail.com', 8762946136);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `cust_order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`cust_order_id`, `customer_id`, `product_id`, `quantity`, `rate`, `order_status`, `order_date`) VALUES
(1, 1, 2, 2, 35, 'Processing', '2023-01-27'),
(2, 1, 1, 2, 45, 'Dispatched', '2023-01-27'),
(3, 2, 1, 3, 45, 'Dispatched', '2023-01-27'),
(6, 3, 1, 3, 45, 'Dispatched', '2023-01-27'),
(8, 5, 5, 15, 48, 'Dispatched', '2023-01-27'),
(10, 0, 1, 15, 45, 'Pending', '2023-01-28'),
(11, 2, 1, 10, 45, 'Dispatched', '2023-01-28'),
(12, 2, 4, 10, 380, 'Dispatched', '2023-01-28'),
(13, 3, 4, 2, 380, 'Dispatched', '2023-01-28'),
(16, 2, 1, 5, 45, 'Processing', '2023-02-11'),
(17, 2, 5, 2, 48, 'Processing', '2023-02-11'),
(18, 2, 5, 2, 48, 'Pending', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `cust_pay_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tranc_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_payments`
--

INSERT INTO `customer_payments` (`cust_pay_id`, `customer_id`, `total_amount`, `status`, `date`, `tranc_id`) VALUES
(1, 1, 160, 'PAID', '2023-01-27', 'pay_L9E5NAwfa9DsZ8'),
(2, 2, 135, 'PAID', '2023-01-27', 'pay_L9FLWsQ8IDnUza'),
(3, 3, 3640, 'PAID', '2023-01-27', 'pay_L9GYFTIi4TF9J3'),
(4, 3, 270, 'PAID', '2023-01-27', 'pay_L9H720VrPxMfNY'),
(5, 6, 5000, 'PAID', '2023-01-27', 'pay_L9KNZrkrNK1q0T'),
(6, 2, 450, 'PAID', '2023-01-28', 'pay_L9UBkpvIUW26Zk'),
(7, 2, 3800, 'PAID', '2023-01-28', 'pay_L9UWUj1VSfCa49'),
(8, 3, 760, 'PAID', '2023-01-28', 'pay_L9VMRS2o8rD0Fs'),
(9, 2, 1500, 'PAID', '2023-01-28', 'pay_L9VdqgRWayMxMP'),
(10, 2, 540, 'PAID', '2023-02-08', 'pay_LDsnwCbz9n6d6y'),
(11, 2, 321, 'PAID', '2023-02-11', 'pay_LF1agBMoyjCqI7');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_details`
--

CREATE TABLE `farmer_details` (
  `farmer_id` int(11) NOT NULL,
  `farmer_name` varchar(60) NOT NULL,
  `farmer_city` varchar(100) NOT NULL,
  `farmer_address` varchar(200) NOT NULL,
  `farmer_contact_no` bigint(20) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmer_details`
--

INSERT INTO `farmer_details` (`farmer_id`, `farmer_name`, `farmer_city`, `farmer_address`, `farmer_contact_no`, `email_id`) VALUES
(1, 'Rajesh', 'Dhaarwad', 'Dharwad', 9481815106, 'rajesh@gmail.com'),
(3, 'Ganapati Bhat', 'Yellapur', 'Tatagar', 9481815106, 'ganapati123@gmail.com'),
(4, 'Shrinatha Bhat', 'Yellapur', 'Balagar', 9482402565, 'shrinatha@gmail.com'),
(5, 'Ramakrishna Bhat', 'Ankola', 'Heggar', 9482185632, 'ramakrishna456@gmail.com'),
(6, 'Shridhar Bhat', 'Ankola', 'Heggar', 9568930858, 'shridharbhat@gmail.com'),
(7, 'Bhaskar Bhat', 'Yellapur', 'Balagar Yellapur', 9482567648, 'bhaskarbhat@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_payments`
--

CREATE TABLE `farmer_payments` (
  `farmer_payment_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `payment_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `mode_of_payment` varchar(20) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `cheque_dd_no` varchar(60) NOT NULL,
  `given_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_supply_details`
--

CREATE TABLE `farmer_supply_details` (
  `farmer_supply_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_rate` int(11) NOT NULL,
  `supply_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmer_supply_details`
--

INSERT INTO `farmer_supply_details` (`farmer_supply_id`, `farmer_id`, `product_id`, `quantity`, `purchase_rate`, `supply_date`, `status`) VALUES
(1, 1, 1, 20, 200, '2023-01-27', 'Supply'),
(2, 1, 2, 3, 40, '2023-01-27', 'Supply'),
(3, 3, 3, 5, 500, '2023-01-10', 'Supply'),
(4, 5, 1, 46, 40, '2023-01-25', 'Supply'),
(5, 4, 3, 10, 500, '2023-01-02', 'Supply'),
(6, 7, 8, 10, 400, '2023-01-20', 'Supply');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `security_que` varchar(100) NOT NULL,
  `security_ans` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`, `type`, `security_que`, `security_ans`, `status`) VALUES
(1, 'admin', '123123', 'admin', 'who are you', 'admin', 'active'),
(15, 'harsha@gmail.com', '123123', 'customer', 'Enter Your Contact No', '9865456786', 'Actie'),
(16, 'ashwini@gmail.com', '123456', 'customer', 'Enter Your Contact No', '9483644749', 'Actie'),
(17, 'mahima@gmail.com', '1234567', 'customer', 'Enter Your Contact No', '8762946136', 'Actie'),
(18, 'hfseh@gmail.com', '1234567', 'customer', 'Enter Your Contact No', '8759375785', 'Actie'),
(19, 'akshay123@gmail.com', '123456789', 'customer', 'Enter Your Contact No', '8657599888', 'Actie'),
(20, 'ganapati123@gmail.com', '12345', 'customer', 'Enter Your Contact No', '9481815106', 'Actie'),
(21, 'ganapati123@gmail.com', '12345', 'customer', 'Enter Your Contact No', '9481815106', 'Actie'),
(22, 'ashwinibhat9483@gmail.com', 'ashubhat9483', 'customer', 'Enter Your Contact No', '9483644749', 'Actie'),
(23, 'mahimab415@gmail.com', 'mahima@123', 'customer', 'Enter Your Contact No', '8762946136', 'Actie'),
(24, 'ashwinibhat9483@gmail.com', 'ashuadkepal', 'customer', 'Enter Your Contact No', '9483644749', 'Actie'),
(25, 'mahimab415@gmail.com', 'mahima@123', 'customer', 'Enter Your Contact No', '8762946136', 'Actie');

-- --------------------------------------------------------

--
-- Table structure for table `product_catalog`
--

CREATE TABLE `product_catalog` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_description` varchar(400) NOT NULL,
  `product_rate` int(11) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_catalog`
--

INSERT INTO `product_catalog` (`product_id`, `product_name`, `category_id`, `product_description`, `product_rate`, `product_image`) VALUES
(1, '   Milk', 3, '     Milk is a source of potassium, which can help the blood vessels dilate and reduce blood pressure.\r\n Milk Maintains Bone Density. ...', 45, 'milk-300x194.jpg'),
(3, '   Ghee', 3, ' Ghee is a rich source of vitamins, antioxidants, and healthy fats.It may also help reduce gut inflammation and support heart health.\r\n', 500, 'ghee.jpg'),
(4, '    Paneer', 3, 'Paneer is a good source of magnesium and phosphorus which may enhance the healthy digestion and excretion processes.', 380, 'paneer.jpg'),
(5, '    Curd ', 2, '  Curd is rich in calcium, phosphorus, potassium, magnesium and sodium.Good for Digestive System. Curd benefits people with digestive issues. ...', 48, 'curd.jpg'),
(7, '   Peda', 7, '    Peda is a delicious Indian sweet made with full fat milk and sugar. This fudge like sweet is delicately flavored with cardamom powder or saffron ...', 350, 'peda1.jpg'),
(8, '    Butter', 8, ' It can help lower your chances of cancer. Butter is high in beta-carotene, a compound that your body converts into vitamin A. ', 420, 'butter1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`stock_id`, `product_id`, `stock`) VALUES
(1, 2, 3),
(2, 3, 15),
(3, 1, 46),
(4, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `vetenory_details`
--

CREATE TABLE `vetenory_details` (
  `vetenory_id` int(11) NOT NULL,
  `doctor_name` varchar(60) NOT NULL,
  `vetenory_city` varchar(100) NOT NULL,
  `vetenory_address` varchar(200) NOT NULL,
  `vetenory_contact_no` bigint(20) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vetenory_details`
--

INSERT INTO `vetenory_details` (`vetenory_id`, `doctor_name`, `vetenory_city`, `vetenory_address`, `vetenory_contact_no`, `email_id`) VALUES
(1, 'K G Hegade', 'Yellapur', 'Bisgod', 8762613630, 'kghegade@gmail.com'),
(2, 'Tirumala Bhat', 'Yellapur', 'Tatagar', 8277626685, 'tirumala@gmail.com'),
(3, 'M M Hegade', 'Yellapur', 'Heggar', 6360989702, 'mm123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`cust_order_id`);

--
-- Indexes for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD PRIMARY KEY (`cust_pay_id`);

--
-- Indexes for table `farmer_details`
--
ALTER TABLE `farmer_details`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `farmer_payments`
--
ALTER TABLE `farmer_payments`
  ADD PRIMARY KEY (`farmer_payment_id`);

--
-- Indexes for table `farmer_supply_details`
--
ALTER TABLE `farmer_supply_details`
  ADD PRIMARY KEY (`farmer_supply_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product_catalog`
--
ALTER TABLE `product_catalog`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `vetenory_details`
--
ALTER TABLE `vetenory_details`
  ADD PRIMARY KEY (`vetenory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `cust_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `cust_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `farmer_details`
--
ALTER TABLE `farmer_details`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `farmer_payments`
--
ALTER TABLE `farmer_payments`
  MODIFY `farmer_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer_supply_details`
--
ALTER TABLE `farmer_supply_details`
  MODIFY `farmer_supply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_catalog`
--
ALTER TABLE `product_catalog`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vetenory_details`
--
ALTER TABLE `vetenory_details`
  MODIFY `vetenory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
