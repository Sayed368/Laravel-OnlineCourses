-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2021 at 10:07 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecourses`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(4, 'Marketing', '2021-01-22 17:58:40', '2021-01-22 18:48:15', 'categoryimg/1697095259.jpg'),
(5, 'Photography', '2021-01-22 18:01:20', '2021-01-22 18:01:20', 'categoryimg/1399756048.jpg'),
(6, 'Web Development', '2021-01-22 18:02:27', '2021-01-22 18:49:06', 'categoryimg/1233915761.jpg'),
(7, 'Finance', '2021-01-22 18:03:07', '2021-01-22 18:49:24', 'categoryimg/465719692.jpg'),
(8, 'Interior Design', '2021-01-22 18:03:43', '2021-01-22 18:49:46', 'categoryimg/1790381171.jpg'),
(9, 'Science', '2021-01-22 18:04:22', '2021-01-22 18:52:44', 'categoryimg/1651055443.jpeg'),
(10, 'Mobile Development', '2021-01-22 18:05:44', '2021-01-22 18:05:44', 'categoryimg/1720111695.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_courses`
--

DROP TABLE IF EXISTS `category_courses`;
CREATE TABLE IF NOT EXISTS `category_courses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_courses_course_id_foreign` (`course_id`),
  KEY `category_courses_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_courses`
--

INSERT INTO `category_courses` (`id`, `created_at`, `updated_at`, `course_id`, `category_id`) VALUES
(18, NULL, NULL, 18, 6),
(19, NULL, NULL, 19, 4),
(20, NULL, NULL, 20, 5),
(21, NULL, NULL, 21, 7),
(22, NULL, NULL, 22, 10),
(23, NULL, NULL, 23, 8),
(24, NULL, NULL, 24, 9);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `image` text,
  `instructor_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_instructor_id_foreign` (`instructor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `name`, `duration`, `description`, `content`, `image`, `instructor_id`) VALUES
(18, '2021-01-22 18:38:40', '2021-01-22 18:38:40', 'Laravel', '5', 'Laravel is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '20 Video', 'courseimg/894751892.jpg', 6),
(19, '2021-01-22 18:58:28', '2021-01-22 18:58:28', 'Marketing 1', '5', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '20 video', 'courseimg/1626510908.jpg', 11),
(20, '2021-01-22 18:59:39', '2021-01-22 18:59:39', 'Photography 1', '3', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '10 video', 'courseimg/1946369958.jpg', 11),
(21, '2021-01-22 19:00:41', '2021-01-22 19:00:41', 'Finance 1', '4', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '5 video', 'courseimg/112284155.jpg', 10),
(22, '2021-01-22 19:01:26', '2021-01-22 19:01:26', 'mobile 1', '3', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '12 video', 'courseimg/1307568758.jpg', 8),
(23, '2021-01-22 19:02:36', '2021-01-22 19:02:36', 'design 1', '3', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '66 video', 'courseimg/751241795.jpg', 7),
(24, '2021-01-22 19:03:30', '2021-01-22 19:03:30', 'Science 1', '5', 'A programming language is a set of commands, instructions, and other syntax use to create a software program. Languages that programmers use to write code are called \"high-level languages.\" This code can be compiled into a \"low-level language,\" which is recognized directly by the computer hardware.', '10 videos', 'courseimg/752475410.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

DROP TABLE IF EXISTS `course_videos`;
CREATE TABLE IF NOT EXISTS `course_videos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` text,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_videos_course_id_foreign` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_videos`
--

INSERT INTO `course_videos` (`id`, `created_at`, `updated_at`, `video_url`, `course_id`, `name`) VALUES
(46, '2021-01-22 19:22:34', '2021-01-22 19:22:34', 'PYjyg0LNTfE', 19, 'introduction'),
(47, '2021-01-22 19:22:34', '2021-01-22 19:22:34', 'YBAhrf7Bz6k', 19, 'chapter 1'),
(48, '2021-01-22 19:22:34', '2021-01-22 19:22:34', 'BCh2JCgrMp8', 19, 'chapter 2'),
(49, '2021-01-22 19:22:34', '2021-01-22 19:22:34', 'Cc7ur4-7mJ8', 19, 'chapter 3'),
(50, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'pjV6FyBV7Fk', 19, 'chapter 4'),
(51, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'k2IdoJ3wfTE', 19, 'chapter 5'),
(52, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'gn9a14Nn-QU', 19, 'chapter 6'),
(53, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'sdpYT2HyhdQ', 19, 'chapter 7'),
(54, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'oADG1SEXPxA', 19, 'chapter 8'),
(55, '2021-01-22 19:22:35', '2021-01-22 19:22:35', '4WnOExZKr3g', 19, 'chapter 9'),
(56, '2021-01-22 19:22:35', '2021-01-22 19:22:35', '3gOR7PiMx1E', 19, 'chapter 10'),
(57, '2021-01-22 19:22:35', '2021-01-22 19:22:35', '76AzS5nsWBs', 19, 'chapter 11'),
(58, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'WuzYyKkSPXs', 19, 'chapter 12'),
(59, '2021-01-22 19:22:35', '2021-01-22 19:22:35', '9Vtnq6WJO0g', 19, 'chapter 13'),
(60, '2021-01-22 19:22:35', '2021-01-22 19:22:35', 'BXZu2QZ44Q8', 19, 'chapter 14'),
(61, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'Iy4Na_lz3VQ', 21, 'introduction'),
(62, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'sxa5-YlccmI', 21, 'chapter 1'),
(63, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'wpTn-JEC6-8', 21, 'chapter 2'),
(64, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'Kh9F7x2wbW8', 21, 'chapter 3'),
(65, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 't-MfM87Bvyo', 21, 'chapter 4'),
(66, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'EyMnuIKcBcM', 21, 'chapter 5'),
(67, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'CUBhbXtWlTo', 21, 'chapter 6'),
(68, '2021-01-22 19:32:54', '2021-01-22 19:32:54', 'Bkas_k5oTLM', 21, 'chapter 7'),
(69, '2021-01-22 19:32:55', '2021-01-22 19:32:55', 'sxa5-YlccmI', 21, 'chapter 8'),
(70, '2021-01-22 19:32:55', '2021-01-22 19:32:55', 'fqWXmH2PebI', 21, 'chapter 9'),
(71, '2021-01-22 19:32:55', '2021-01-22 19:32:55', 's0hqoXvJjH0', 21, 'chapter 10'),
(72, '2021-01-22 19:32:55', '2021-01-22 19:32:55', 'XkqMHjITYx4', 21, 'chapter 11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `created_at`, `updated_at`, `name`, `email`, `subject`, `comments`) VALUES
(2, '2021-01-22 19:13:55', '2021-01-22 19:13:55', 'Ahmed', 'ahmed@gmail.com', 'Thank', 'Thank you for giving the confidence which will surely help the students in every sphere of life.'),
(3, '2021-01-22 19:14:25', '2021-01-22 19:14:25', 'Mohamed', 'mohamed@gmail.com', 'Thank', 'Thank you for giving the confidence which will surely help the students in every sphere of life.'),
(4, '2021-01-22 19:15:05', '2021-01-22 19:15:05', 'Ali', 'ali@gmail.com', 'Thank', 'Thank you for giving the confidence which will surely help the students in every sphere of life.');

-- --------------------------------------------------------

--
-- Table structure for table `member_requests`
--

DROP TABLE IF EXISTS `member_requests`;
CREATE TABLE IF NOT EXISTS `member_requests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint UNSIGNED DEFAULT NULL,
  `skills` text,
  `status` enum('accepted','waiting','rejected') NOT NULL DEFAULT 'waiting',
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_requests_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_01_14_183947_create_sessions_table', 1),
(7, '2021_01_14_184202_create_courses_table', 1),
(8, '2021_01_14_184303_create_student_courses_table', 1),
(9, '2021_01_14_184410_create_course_videos_table', 1),
(10, '2021_01_14_184510_create_categories_table', 1),
(11, '2021_01_14_184538_create_category_courses_table', 1),
(12, '2021_01_18_144540_create_feedback_table', 2),
(13, '2021_01_18_145210_add_photo_to_category_table', 2),
(14, '2021_01_18_153705_create_member_requests_table', 3),
(15, '2021_01_20_202812_add_name_column_to_videos_table', 4),
(16, '2021_01_20_203039_add_status_column_to_member_requests_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('U1rRs5Tw788zVaAKCu7gua1aF6FtLQtq3qIXhUka', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZ1JiRk5icmJDTFlXdUttbWR2SjVtWnNaaWJPT0F5bFdWWU5vZ1FVbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkN2FVTnIyWndyaVU1MXVzWmx3RkQvdXVQQzhzaG9LY1NIUTNzejZ0dnVZOHBPQzBZL1M1YksiO30=', 1611353085);

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

DROP TABLE IF EXISTS `student_courses`;
CREATE TABLE IF NOT EXISTS `student_courses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` bigint UNSIGNED DEFAULT NULL,
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `enroll_date` timestamp NULL DEFAULT NULL,
  `feedback_date` timestamp NULL DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `student_courses_student_id_foreign` (`student_id`),
  KEY `student_courses_course_id_foreign` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`id`, `created_at`, `updated_at`, `student_id`, `course_id`, `enroll_date`, `feedback_date`, `feedback`, `comment`) VALUES
(20, NULL, NULL, 1, 18, NULL, NULL, NULL, NULL),
(21, NULL, NULL, 1, 19, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 1, 21, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','student','instructor') NOT NULL DEFAULT 'student',
  `university` varchar(255) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `gender` enum('male','female','other') NOT NULL DEFAULT 'other',
  `specialist` text,
  `description` text,
  `address` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`, `university`, `dob`, `gender`, `specialist`, `description`, `address`) VALUES
(1, 'Sayed Abdallah', 'sayed@gmail.com', 120354999812, NULL, '$2y$10$7aUNr2ZwriU51usZlwFD/uuPC8shoKcSHQ3sz6tvuY8pOC0Y/S5bK', NULL, NULL, NULL, NULL, 'userimg/1191886870.jpg', '2021-01-14 17:11:43', '2021-01-22 19:40:27', 'admin', 'benha', '1998-01-27 22:00:00', 'male', 'admin', NULL, 'benha'),
(5, 'Mark', 'mark@gmail.com', 12000000000, NULL, '$2y$10$Z.vEZaEGGiZSAN9Xi1BCXuVUH4ivcGrgLX.yTT29QZMIx/HXn0pnO', NULL, NULL, NULL, NULL, 'userimg/643175681.jpg', '2021-01-22 18:18:06', '2021-01-22 18:18:06', 'instructor', 'alexandria', '2021-01-21 22:00:00', 'male', 'System admin', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'ITI Smart'),
(6, 'Noha Shehab', 'noha@gmail.com', 12000000000, NULL, '$2y$10$qTp5OAhLvKkgJiSUKHwYm.1S79RFBFXGHczKyT/jsfro1yXV4/gmS', NULL, NULL, NULL, NULL, 'userimg/2062550434.jpg', '2021-01-22 18:20:05', '2021-01-22 18:25:22', 'instructor', 'mansora', '2020-12-29 22:00:00', 'female', 'PHP Developer', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'Mansora'),
(7, 'Mohamed Soliman', 'mohamed@gmail.com', 12000000000, NULL, '$2y$10$3kVnTdLrFHGyl5EyOyFJN.YbXHBxRSEUlZWQcAfj6edznOK86dCiW', NULL, NULL, NULL, NULL, 'userimg/1498053673.jpg', '2021-01-22 18:22:18', '2021-01-22 18:22:18', 'instructor', 'Cairo', '2021-01-06 22:00:00', 'male', 'Node JS Developer', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'ITI Smart'),
(8, 'Andrew', 'andrew@gmail.com', 12000000000, NULL, '$2y$10$t.2lxa91cp5PlVYbyz2k2uB7KvqWjRnuhoJh3jx7DmOmvSPYmbHcK', NULL, NULL, NULL, NULL, 'userimg/1448499992.jpg', '2021-01-22 18:26:42', '2021-01-22 18:26:42', 'instructor', 'Cairo', '2020-12-26 22:00:00', 'male', 'Node JS Developer', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'ITI Smart'),
(9, 'Omnia Nour', 'omnia@gmail.com', 1200000000, NULL, '$2y$10$.DUkUg0JJb/4/XkZ/clcZ.ruvHiwxAcaiD1voz.dBUK//2BZlpdC2', NULL, NULL, NULL, NULL, 'userimg/255300998.jpg', '2021-01-22 18:28:55', '2021-01-22 18:28:55', 'instructor', 'Cairo', '2021-01-05 22:00:00', 'female', '.Net Developer', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'menofia'),
(10, 'Mona addeq', 'mona@gmail.com', 1200000000, NULL, '$2y$10$1q7etEUm7xmwDpI6v110XOFcju9XhQZhboZTPsvjZYJLDfFmSJou6', NULL, NULL, NULL, NULL, 'userimg/1034598336.jpg', '2021-01-22 18:30:34', '2021-01-22 18:30:34', 'instructor', 'Cairo', '2021-01-13 22:00:00', 'female', 'Communication Skills', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', 'ITI Smart'),
(11, 'Henry J Smith', 'sayed.abdallah1998@gmail.com', 6612058160, NULL, '$2y$10$sW5MOBWlqWBKHCbTAGWG3.9v0ZP3znQi5UDZQZiR7OahIgzowMFLy', NULL, NULL, NULL, NULL, 'userimg/1807501434.jpg', '2021-01-22 18:55:56', '2021-01-22 18:55:56', 'instructor', 'benha', '2021-01-22 22:00:00', 'male', 'Full Stack  Developer', 'Bachelor’s degree in Computer science\r\nExperience with vocational training or adult education\r\nStrong teaching skills\r\nVerbal communication abilities', '705 East Cathedral Road'),
(12, 'admin', 'admin@gmail.com', 6612058160, NULL, '$2y$10$YIOVoV80jEMxvHvm54bBTeZJ/iBeGWH/ZfIA8AmaJLMtsxXCq6OqC', NULL, NULL, NULL, NULL, 'userimg/894749110.jpg', '2021-01-22 19:41:42', '2021-01-22 19:41:42', 'admin', 'alexandria', '2021-01-12 22:00:00', 'male', 'admin', NULL, '705 East Cathedral Road');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_courses`
--
ALTER TABLE `category_courses`
  ADD CONSTRAINT `category_courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD CONSTRAINT `course_videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
