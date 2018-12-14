-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2018 at 11:06 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '4', 1513334360),
('manager', '3', 1513334360);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1513334359, 1513334359),
('createCategory', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('createProduct', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('createUser', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('deleteCategory', 2, 'Xóa đơn hàng', NULL, NULL, 1513334359, 1513334359),
('deleteContact', 2, 'Xóa liên hệ', NULL, NULL, 1513334358, 1513334358),
('deleteOrders', 2, 'Xóa đơn hàng', NULL, NULL, 1513334355, 1513334355),
('deleteOrdersItem', 2, 'Xóa thực đơn đã orders', NULL, NULL, 1513334356, 1513334356),
('deleteProduct', 2, 'Xóa đơn hàng', NULL, NULL, 1513334359, 1513334359),
('deleteUser', 2, 'Xóa đơn hàng', NULL, NULL, 1513334359, 1513334359),
('indexCategory', 2, 'Xem danh sách đơn hàng', NULL, NULL, 1513334359, 1513334359),
('indexContact', 2, 'Xem danh sách liên hệ', NULL, NULL, 1513334358, 1513334358),
('indexOrders', 2, 'Xem danh sách đơn hàng', NULL, NULL, 1513334355, 1513334355),
('indexOrdersItem', 2, 'Xem danh sách thực đơn đã Orders', NULL, NULL, 1513334356, 1513334356),
('indexProduct', 2, 'Xem danh sách đơn hàng', NULL, NULL, 1513334359, 1513334359),
('indexUser', 2, 'Xem danh sách đơn hàng', NULL, NULL, 1513334359, 1513334359),
('manager', 1, NULL, NULL, NULL, 1513334358, 1513334358),
('updateCategory', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('updateContact', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334358, 1513334358),
('updateOrders', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334355, 1513334355),
('updateOrdersItem', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334357, 1513334357),
('updateProduct', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('updateUser', 2, 'Cập nhật đơn hàng', NULL, NULL, 1513334359, 1513334359),
('viewCategory', 2, 'Xem Category', NULL, NULL, 1513334359, 1513334359),
('viewContact', 2, 'Xem liên hệ', NULL, NULL, 1513334357, 1513334357),
('viewOrders', 2, 'Xem đơn hàng', NULL, NULL, 1513334355, 1513334355),
('viewOrdersItem', 2, 'Xem thực đơn đã orders', NULL, NULL, 1513334355, 1513334355),
('viewProduct', 2, 'Xem đơn hàng', NULL, NULL, 1513334359, 1513334359),
('viewUser', 2, 'Xem đơn hàng', NULL, NULL, 1513334359, 1513334359);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'createCategory'),
('admin', 'createProduct'),
('admin', 'createUser'),
('admin', 'deleteCategory'),
('manager', 'deleteContact'),
('manager', 'deleteOrders'),
('manager', 'deleteOrdersItem'),
('admin', 'deleteProduct'),
('admin', 'deleteUser'),
('admin', 'indexCategory'),
('manager', 'indexContact'),
('manager', 'indexOrders'),
('manager', 'indexOrdersItem'),
('admin', 'indexProduct'),
('admin', 'indexUser'),
('admin', 'manager'),
('admin', 'updateCategory'),
('manager', 'updateContact'),
('manager', 'updateOrders'),
('manager', 'updateOrdersItem'),
('admin', 'updateProduct'),
('admin', 'updateUser'),
('admin', 'viewCategory'),
('manager', 'viewContact'),
('manager', 'viewOrders'),
('manager', 'viewOrdersItem'),
('admin', 'viewProduct'),
('admin', 'viewUser');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Cafe'),
(2, 'Socola'),
(3, 'Thức Uống Trái Cây'),
(4, 'Trà Đặc Biệt');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `body`, `created_at`, `updated_at`) VALUES
(1, 'gfhfgh', 'dgd@dg.com', '4242', '4242', 1513336045, 1513336045);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1513234964),
('m130524_201442_init', 1513234981),
('m140506_102106_rbac_init', 1513332464),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1513332464);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `amount`, `name`, `phone`, `address`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 211000, 'Nguyễn Văn A', '01632141485', 'Đà Nẵng', '...', '0', 1515562755, 1515562755),
(2, 5, 18000, 'Nguyễn Đỗ Việt Đức', '01632141485', '56 Trần Cao Vân', 'Trước 5h chiều', '0', 1515566739, 1515566739);

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `orders_item` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`id`, `orders_id`, `product_id`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 2, 36000, '0', 1515562756, 1515562756),
(2, 1, 13, 4, 100000, '0', 1515562756, 1515562756),
(3, 1, 14, 3, 75000, '0', 1515562756, 1515562756),
(4, 2, 10, 1, 18000, '0', 1515566739, 1515566739);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(8, 'Nước dâu tươi', 'upload/product30095.jpg', '20000', 'Ngon tuyệt !', 3, 1513267700, 1513267700),
(9, 'Soda Ý', 'upload/product69082.jpg', '25000', 'Ngon tuyệt !', 3, 1513267767, 1513267767),
(10, 'Trà đào', 'upload/product30676.jpg', '18000', 'Ngon tuyệt !', 3, 1513267920, 1513267920),
(11, 'Trà vải', 'upload/product77026.jpg', '28000', 'Ngon tuyệt !', 3, 1513267974, 1513267974),
(12, 'Trà táo', 'upload/product38509.jpg', '22000', 'Ngon tuyệt !', 3, 1513267996, 1513267996),
(13, 'Matcha', 'upload/product45097.jpg', '25000', 'Ngon tuyệt !', 4, 1513268806, 1513268806),
(14, 'Trà xanh', 'upload/product78492.jpg', '25000', 'Ngon tuyệt !', 4, 1513268836, 1513268836),
(15, 'Yoshake', 'upload/product70643.jpg', '28000', 'Ngon tuyệt !', 4, 1513269234, 1513269234),
(16, 'Trà sữa Trân châu', 'upload/product28524.png', '29000', 'Ngon tuyệt !', 4, 1513269254, 1513269254),
(17, 'Super Peach', 'upload/product58870.jpg', '26000', 'Ngon tuyệt !', 4, 1513269305, 1513269305),
(18, 'Matcha Paris', 'upload/product36725.jpg', '32000', 'Ngon tuyệt !', 4, 1513269330, 1513269330),
(19, 'New Matcha', 'upload/product87196.jpg', '27000', 'Ngon tuyệt !', 4, 1513269351, 1513269351),
(20, 'Cafe Towdeli', 'upload/product78525.jpg', '20000', 'Ngon tuyệt !', 1, 1513269379, 1513269379),
(21, 'Cafe sữa hảo hạng', 'upload/product97236.jpg', '21000', 'Ngon tuyệt !', 1, 1513269414, 1513269414),
(22, 'Trà sữa đặc biệt', 'upload/product86999.jpg', '25000', 'Ngon tuyệt !', 4, 1513269440, 1513269440),
(23, 'Trà sữa dâu tây', 'upload/product57146.png', '29000', 'Ngon tuyệt !', 4, 1513269474, 1513269474);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `value` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `fullname`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Customer', 'T33IjHLCG5G_tnOJSbVO-7gKH2t404B8', '$2y$13$GYuiti0/ybRmEII.OBkwX.9SrcQ8P.wWBZxiHBkfqTJFnn/HlZVu6', NULL, 'customer@gmail.com', 'Customer', '01632141483', '125 Trần Cao Vân, Hải Châu, Đà Nẵng', 10, 1513235405, 1513235405),
(3, 'Manager', 'PWaa6cd5wkHwWZzl2XP1lyf9QG0d9Bv7', '$2y$13$9xQMPDFK3u.XLgM3yPq/luY1qGCLPVYK8Wq4FCoiOkqWvzNqunAxO', NULL, 'manager@gmail.com', 'Managerment', '0123456987', 'Đà Nẵng', 10, 1513332932, 1513332932),
(4, 'Admin', 'XM234pLwEyN2SbvFuqSI40Wlt4Pu-PGf', '$2y$13$89GTGVKTxEaDI1W1Bg6GHePAuKrU9FpuVYM4kIVsrP0eZx1ND1vem', NULL, 'admin@gmail.com', 'Administrator', '0123456789', 'Đà Nẵng', 10, 1515555605, 1515555605),
(5, 'Khách Hàng', 'KZSiBjiAyqsMRxacHxHbJlLw8jBs6rDc', '$2y$13$6zEocNCOSdLR0mBCo8ny1.jEppCWYTbsPoJFWtIR6F2H4oogyEgou', NULL, 'khachhang@gmail.com', 'Khách Hàng 001', '01632141485', '34 Trần Cao Vân', 10, 1515566708, 1515566708),
(6, 'ABCD', '5fPJLLpRkpWZ5cGvNC_iT2xuMCi7FFPn', '$2y$13$kqhANFaOGheyytZ1RTmfqu8aU4l92UubxJmVzeXIY5YqEw6FzFbeu', NULL, 'abdc@gmil.com', 'A B C D', '0123456789', '56 Long Quân, Tây Hồ, Hà Nội', 10, 1515728756, 1515728756);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-002` (`user_id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-003` (`orders_id`),
  ADD KEY `fk-004` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-001` (`category_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkx1` (`user_id`),
  ADD KEY `fkz1` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk-002` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD CONSTRAINT `fk-003` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-004` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-001` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
