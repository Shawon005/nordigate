-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 01:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordigate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `facebook`, `twitter`, `whatsapp`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 'password', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `name`, `email`, `phone`, `subject`, `comment`, `cdt`) VALUES
(10, 'Mr. Jhon Alex', 'email@gmail.com', '01912345678', 'test', 'Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore text.', '2023-06-12 11:27:29'),
(11, 'Mr. Don', 'email@gmail.com', '+8801853431701', 'trt', 'Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore text.', '2023-06-12 11:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(2) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `title`, `description`, `status`, `cdt`) VALUES
(2, 'Discover', 'We emphasize planning get everythin documente nothing assumption', 1, '2023-06-11 18:54:43'),
(3, 'Planning', 'Our design approach is to simplify. We embrace creating something.', 1, '2023-06-11 18:55:06'),
(4, 'Design & Dev', 'At this step, we cater to requirement backed web services developmenc', 1, '2023-06-11 18:55:25'),
(5, 'Testing', 'On the other denounce with righteou indignation dislike beguile demore', 1, '2023-06-11 18:55:43'),
(6, 'Project Deliver', 'We denounce righteous indignation and dislike men who beguiled', 1, '2023-06-11 18:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `designation`, `image`, `thumbnail`, `description`, `category_id`, `status`, `slug`, `cdt`) VALUES
(1, 'project', 'pro dev', '/storage/uploads/23/06/1686806326ArUsPvaMUjani6itRpvL.jpg', '/storage/uploads/23/06/1686978129UySkFOCjtJhovxZfsih5.jpg', '<ul style=\"list-style-type: circle;\">\r\n<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</li>\r\n</ul>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>sed diam nonummy nibh euismod tincidunt ut laoreet.</li>\r\n</ul>', 1, 1, 'project', '2023-06-15 11:18:46'),
(2, 'project2', 'photo dev', '/storage/uploads/23/06/1686808974rpixxOsgMoTQd9atBR4N.jpg', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>', 2, 1, 'project2', '2023-06-15 12:02:54'),
(3, 'project3', 'photo dev', '/storage/uploads/23/06/1686809042gfbZWmk4a14zpihq1jZn.jpg', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>', 2, 1, 'project3', '2023-06-15 12:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `category_name`, `status`, `cdt`) VALUES
(1, 'Web', 1, '2023-06-15 10:57:36'),
(2, 'IOS', 1, '2023-06-15 12:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `image` varchar(222) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `description`, `status`, `cdt`) VALUES
(1, 'we', '/storage/uploads/23/06/1686143461x0JmYXv7Yk7WKJfYh0Oa.jpg', 'sdfsd', 1, '2023-06-07 19:11:01'),
(2, 'dlks', '/storage/uploads/23/06/1686153354NF6FNQz5UdIipCVPIw76.jpg', 'sd', 1, '2023-06-07 21:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `service_up`
--

CREATE TABLE `service_up` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `sub_details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `logo` varchar(222) DEFAULT NULL,
  `logo1` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `slug` varchar(255) DEFAULT NULL,
  `cdt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_up`
--

INSERT INTO `service_up` (`id`, `title`, `details`, `sub_title`, `sub_details`, `image`, `image1`, `image2`, `logo`, `logo1`, `status`, `slug`, `cdt`) VALUES
(1, 'web Design', '<p>We are passionate about innovation and driving positive change. Our commitment to quality is unwavering, and we strive for excellence in every project we undertake</p>', 'web Design imfact', 'We are passionate about innovation and driving 											positive change. Our commitment to quality is unwavering, and we strive for', '/storage/uploads/23/06/1686809569C7T2evpatemRNw0gwyig.jpg', '/storage/uploads/23/06/1686809569dcLRtpuNjuU24XGOmZw3.jpg', NULL, '/storage/uploads/23/06/1686203418JnjZQYInT4hZY9CNr2PO.png', '/storage/uploads/23/06/1686203943yvwS3AshYEBpf2xmRMA1.png', 1, 'web-design', NULL),
(2, 'Website Development', '<p>we offer comprehensive web development services</p>', 'Website Development Infact', 'we offer comprehensive web development services', '/storage/uploads/23/06/1686207011wyerpZQc5ph39UVNhtAL.jpg', '/storage/uploads/23/06/168620701141DNNo00PDPqU2ZXs7ak.jpg', NULL, '/storage/uploads/23/06/1686207011pNrW7y4JcOmPSBVTUiOe.png', '/storage/uploads/23/06/1686207011b2DrIvuknlmap82aeSsw.png', 1, 'website-development', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatapp` varchar(222) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `about_title` varchar(222) DEFAULT NULL,
  `about_description` text DEFAULT NULL,
  `about_image` varchar(222) DEFAULT NULL,
  `our_mission` text DEFAULT NULL,
  `our_vission` text DEFAULT NULL,
  `about_video` varchar(222) DEFAULT NULL,
  `facebook` varchar(222) DEFAULT NULL,
  `twitter` varchar(222) DEFAULT NULL,
  `linkind` varchar(222) DEFAULT NULL,
  `instragram` varchar(222) DEFAULT NULL,
  `address` varchar(222) DEFAULT NULL,
  `open_hour` varchar(255) DEFAULT NULL,
  `header_logo` varchar(222) DEFAULT NULL,
  `foot_logo` varchar(255) DEFAULT NULL,
  `fav_logo` varchar(222) DEFAULT NULL,
  `site_title` varchar(222) DEFAULT NULL,
  `copy_right_year` varchar(222) DEFAULT NULL,
  `cdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `mobile`, `email`, `whatapp`, `location`, `about_title`, `about_description`, `about_image`, `our_mission`, `our_vission`, `about_video`, `facebook`, `twitter`, `linkind`, `instragram`, `address`, `open_hour`, `header_logo`, `foot_logo`, `fav_logo`, `site_title`, `copy_right_year`, `cdt`) VALUES
(1, '01967565434', 'Nordigate@gmail.com', '01812345678', NULL, 'Nordigate About', 'NordiGate is a leading IT company dedicated to transforming 									businesses through innovative technology solutions. With a focus on delivering 									excellence and exceeding client expectations, we have established ourselves as a 									trusted partner for organizations seeking to harness the power of digital 									transformation..', '/storage/uploads/23/06/16861384769ksUJAn0EOv9sCN0P6E3.jpg', '>Our vision is to empower businesses by leveraging the 													latest advancements in technology. We believe that by embracing 													innovation and embracing the digital era, organizations can unlock 													new opportunities, streamline operations, and achieve sustainable', '>Our vision is to empower businesses by leveraging the 													latest advancements in technology. We believe that by embracing 													innovation and embracing the digital era, organizations can unlock 													new opportunities, streamline operations, and achieve sustainable', 'https://www.youtube.com/watch?v=wPUomHM7aYA', 'https://facebook.com', 'https://twitter.com', 'http://linkind.com', 'https://instragram.com', 'Chittagong', '9AM - 5PM', '/storage/uploads/23/06/1686138476xzrZ8KO9TKMSAnaOX2Ji.png', NULL, '/storage/uploads/23/06/16861384761luc0TQlQnNmZrhcRpep.png', 'Nordigate AB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `btn_text` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `is_pin` int(11) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `btn_text`, `btn_link`, `type`, `is_pin`, `image`, `status`, `cdt`) VALUES
(1, 'Prosper in this volatile <br> market funding', 'We place you at the centre of international networks to 									<br> advance your strategic interests', 'Team Us', 'teamus.com', 0, 0, '/storage/uploads/23/06/16857965712mRvC7CgWb556Msbepuc.jpg', 0, '2023-06-03 06:49:31'),
(2, 'Prosper in this volatile <br> market funding.', 'We place you at the centre of international networks to 									<br> advance your strategic interests', 'Team Meet', 'meet.com', 0, 0, '/storage/uploads/23/06/1685796311m1BOeW082b6i2wIu2Smr.jpg', 1, '2023-06-03 06:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `slider_box`
--

CREATE TABLE `slider_box` (
  `id` int(11) NOT NULL,
  `title` varchar(265) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_box`
--

INSERT INTO `slider_box` (`id`, `title`, `description`, `link`, `image`, `status`, `cdt`) VALUES
(2, 'Innovative Solutions', 'details', 'link.com', '/storage/uploads/23/06/1686487777e7sJOCbP8KS6bitdUSYt.png', 1, '2023-06-11 18:49:37'),
(3, 'Industry Expertise', NULL, 'link.com', '/storage/uploads/23/06/1686487884ZT4M0g8ZOShqu8kfqUS2.png', 1, '2023-06-11 18:51:24'),
(4, 'Client Success', NULL, 'link.com', '/storage/uploads/23/06/1686487907eKdbbN7E9xouI1vGGZzQ.png', 1, '2023-06-11 18:51:47'),
(5, 'Blog and Insights', NULL, 'http://www.fb.com', '/storage/uploads/23/06/1686487939DkvRQ9oHR55jBwjTriyR.png', 1, '2023-06-11 18:52:19'),
(6, 'Join Our Team', NULL, 'http://facebbok.com', '/storage/uploads/23/06/1686488001g6UtEnAwW9VeWcjgTx4L.png', 1, '2023-06-11 18:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `title`, `image`, `status`, `link`, `cdt`) VALUES
(2, 'Web', '/storage/uploads/23/06/1686546676sUEXdStBsC98ea24nCXX.png', 1, 'link', '2023-06-12 11:09:02'),
(3, 'It', '/storage/uploads/23/06/1686546737lydLO1qhnGDTYmjyDHJD.png', 1, 'link', '2023-06-12 11:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `name`, `image`, `description`, `status`, `cdt`) VALUES
(1, 'Custmar', 'Mr.John', '/storage/uploads/23/06/1686555127jvR6fesExt0wxyOUJcD3.png', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.', 1, '2023-06-12 13:32:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_up`
--
ALTER TABLE `service_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_box`
--
ALTER TABLE `slider_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_up`
--
ALTER TABLE `service_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_box`
--
ALTER TABLE `slider_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
