-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 01:29 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_courses`
--

CREATE TABLE `category_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `image` text,
  `instructor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `name`, `duration`, `description`, `content`, `image`, `instructor_id`) VALUES
(1, '2021-01-17 14:28:58', '2021-01-17 14:28:58', 'php', '25', 'ddscimdsicmods', 'lmdsclmsdlmcldssdlclsd', 'courseimg/1791005277.png', 5),
(2, '2021-01-17 14:30:21', '2021-01-17 14:30:21', 'laravel', '33', 'kdsmcmdsmckds', 'wmecomewrcedsm', 'courseimg/1288718310.gif', 5),
(3, '2021-01-17 15:38:58', '2021-01-17 15:38:58', 'html', '55', 'wuecwecwehci', 'djcisdjiciksdm', 'courseimg/110105880.jpg', 3),
(4, '2021-01-17 15:39:46', '2021-01-17 15:39:46', 'css', '44', 'djcinedscsdm', 'AJcsijaedcji', 'courseimg/1927681307.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` text,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `comments`, `updated_at`, `created_at`) VALUES
(9, 'ahmed tarek', 'ahmad@alshegreyonline.com', 'Php course', 'Conducting performance reviews can be tricky. Especially for managers. Sometimes there’s a huge difference between what they say and what they want to convey.To improve this,', '2021-01-18 00:22:39', '2021-01-18 00:22:39'),
(10, 'sayed abdulha', 'sayed@g.com', 'laravel course', 'A wholesome appraisal process will be one that consists of both positive and negative appraisal comments. Therefore, don’t misunderstand appraisals to be a program', '2021-01-18 00:23:48', '2021-01-18 00:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(11, '2021_01_14_184538_create_category_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fp6uv03ILTMHEO2fX4p6nC5lpZy8pFY1c4VzbJu4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTAzVHFMcDR6WHVueFZhR3lYdkluYmRNWVNQeVZIcGFpaUpZSTlNaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1610929440);

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `enroll_date` timestamp NULL DEFAULT NULL,
  `feedback_date` timestamp NULL DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','student','instructor') NOT NULL DEFAULT 'student',
  `university` varchar(255) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `gender` enum('male','female','other') NOT NULL DEFAULT 'other',
  `specialist` text,
  `description` text,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`, `university`, `dob`, `gender`, `specialist`, `description`, `address`) VALUES
(1, 'Sayed Abdallah', 'sayed@gmail.com', NULL, NULL, '$2y$10$OaFN0zLjMY7YOCWvwZGP8uWWQgdWKL95crwAgIxk6KqknUk9GbizG', NULL, NULL, NULL, NULL, 'userimg/1884988766.jpg', '2021-01-14 17:11:43', '2021-01-14 17:11:43', 'student', NULL, NULL, 'other', 'php', 'It’s good to let your teens struggle with the initial writing process. When they wrestle with ideas and words, it reminds them why it’s important to thoroughly and effectively brainstorm.', NULL),
(3, 'sarah', 'cc@gmail.com', 1052703, NULL, '$2y$10$KMlzbs9HRB9OsdotXbsrmusdGWEkTZAnGtQwfnKhgELLFAEUOY7cG', NULL, NULL, NULL, NULL, 'userimg/389496095.jpg', '2021-01-17 10:37:32', '2021-01-17 10:37:32', 'instructor', 'msa1', NULL, 'female', 'teacher', 'Even outside of everyday conversations, it’s very useful to know how to describe people. Descriptions are used a lot in books, in articles and in other kinds of communication in English. Reading or hearing a description of someone can give you a better idea of what they look like or act like.', '6 sahl hamza-haram-giza'),
(4, 'mohamed', 'aalcan1993@gmail.com', 1555551997, NULL, '$2y$10$C58rtZDxzOyprfFNTYAOy.7ShBMtLbPIPJXBNgNm7oOgFayzKZeyy', NULL, NULL, NULL, NULL, 'userimg/1282051962.jpg', '2021-01-17 10:38:57', '2021-01-17 10:38:57', 'instructor', 'msa2', NULL, 'male', 'Assistant', 'Even outside of everyday conversations, it’s very useful to know how to describe people. Descriptions are used a lot in books, in articles and in other kinds of communication in English. Reading or hearing a description of someone can give you a better idea of what they look like or act like.', '6 sahl ham'),
(5, 'bassant', 'basnt@gmail.com', 1010752703, NULL, '$2y$10$uFqo7uAHkFlKlzrdzx2I2.75FWekANRnwb9Y0m5eF7fe5UzJUhNS.', NULL, NULL, NULL, NULL, 'userimg/800976186.jpg', '2021-01-17 11:09:54', '2021-01-17 11:09:54', 'instructor', 'msa2', NULL, 'female', 'super visior', 'Even outside of everyday conversations, it’s very useful to know how to describe people. Descriptions are used a lot in books, in articles and in other kinds of communication in English. Reading or hearing a description of someone can give you a better idea of what they look like or act like.', '6 -haram-giza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_courses`
--
ALTER TABLE `category_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_courses_course_id_foreign` (`course_id`),
  ADD KEY `category_courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_instructor_id_foreign` (`instructor_id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_videos_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_courses_student_id_foreign` (`student_id`),
  ADD KEY `student_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category_courses`
--
ALTER TABLE `category_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
