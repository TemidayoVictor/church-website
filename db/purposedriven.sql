-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 01:27 AM
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
-- Database: `purposedriven`
--

-- --------------------------------------------------------

--
-- Table structure for table `confessions`
--

CREATE TABLE `confessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confessions`
--

INSERT INTO `confessions` (`id`, `created_at`, `updated_at`, `title`, `video`) VALUES
(3, '2023-06-01 14:16:12', '2023-06-01 14:20:12', 'Confession for the month of June', '1685636412.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `devotional`
--

CREATE TABLE `devotional` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateuploaded` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prayer` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devotional`
--

INSERT INTO `devotional` (`id`, `created_at`, `updated_at`, `topic`, `dateuploaded`, `body`, `prayer`) VALUES
(7, '2023-06-02 15:51:38', '2023-06-02 15:51:38', 'First Devotional Topic', 'Jun 2, 2023', 'The Devotional Body', 'Prayer and Counsel'),
(8, '2023-06-02 15:52:57', '2023-06-02 15:52:57', 'The Second Devotional', 'Jun 2, 2023', 'The Second Devotional Prayer', 'Prayer Two');

-- --------------------------------------------------------

--
-- Table structure for table `eventimages`
--

CREATE TABLE `eventimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventimages`
--

INSERT INTO `eventimages` (`id`, `created_at`, `updated_at`, `image`, `event`) VALUES
(7, '2023-06-01 15:59:44', '2023-06-01 15:59:44', '1685642384.jpg', '4'),
(8, '2023-06-01 15:59:59', '2023-06-01 15:59:59', '1685642399.png', '4'),
(9, '2023-06-01 16:00:14', '2023-06-01 16:00:14', '1685642414.jpg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minister` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `title`, `minister`, `audio`, `image`, `date`, `description`) VALUES
(4, '2023-05-27 18:19:15', '2023-06-02 13:35:57', 'Event Title 1', 'Pastor Olanrewaju Niyi', '1685218755.mp3', '1685218755.jpg', 'May 2, 2023', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>'),
(5, '2023-06-01 15:47:39', '2023-06-01 15:47:39', 'Another Event', 'Pastor Poju Oyemade', '1685641659.mp3', '1685641659.jpg', 'Jun 1, 2023', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `created_at`, `updated_at`, `title`, `author`, `image`, `description`) VALUES
(5, '2023-05-25 20:09:30', '2023-06-02 13:34:52', 'The Purposeful Man', 'Pastor Olufunmi Niyi', '1685635458.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>'),
(6, '2023-06-01 14:05:46', '2023-06-02 12:54:00', 'The Woman of Authority', 'Pastor Olanrewaju Niyi', '1685635546.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occasion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `topic`, `occasion`, `image`, `audio`, `date`, `description`) VALUES
(4, '2023-05-25 19:40:00', '2023-06-02 13:34:23', 'First Message Topic Edited', 'School of Transformation', '1685634432.jpg', '1685050800.mp3', 'May 7, 2023', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aperiam iure autem culpa, quia facere. Illum, soluta consectetur commodi, magnam quaerat suscipit voluptates dolor laboriosam temporibus ducimus optio, labore obcaecati?</p>'),
(5, '2023-06-01 13:45:39', '2023-06-01 13:45:39', 'A New Beginning', 'School of Purpose', '1685634338.png', '1685634338.mp3', 'Jun 1, 2023', ''),
(6, '2023-12-23 22:39:11', '2023-12-23 22:39:11', 'Third message', 'School of Purpose', '1703374751.JPG', '1703374751.mp3', 'Dec 24, 2023', 'Description of Message'),
(7, '2023-12-23 22:45:17', '2023-12-23 22:48:07', 'Fourth Message', 'School of Purpose', '1703375287.png', '1703375117.mp3', 'Dec 24, 2023', 'Brief Description');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_22_175646_add_username_to_users_table', 2),
(6, '2023_05_24_175429_create_devotional_table', 3),
(7, '2023_05_24_224035_add_date_uploaded_to_devotional_table', 4),
(8, '2023_05_25_163709_create_messages_table', 5),
(9, '2023_05_25_210404_create_library_table', 6),
(10, '2023_05_25_223131_create_confessions_table', 7),
(11, '2023_05_26_133833_create_events_table', 8),
(12, '2023_05_26_172440_create_news_table', 9),
(13, '2023_05_27_202226_create_eventimages_table', 10),
(14, '2023_05_30_123340_create_utilities_table', 11),
(15, '2023_06_01_163251_delete_description_from_devotional_table', 12),
(16, '2023_06_01_163649_add_body_to_devotional_table', 13),
(17, '2023_06_01_164009_add_description_to_devotional_table', 14),
(18, '2023_06_02_150858_delete_description_from_events_table', 15),
(19, '2023_06_02_151122_delete_description_from_library_table', 15),
(20, '2023_06_02_151202_delete_description_from_messages_table', 15),
(21, '2023_06_02_152315_delete_description_from_library_table', 16),
(22, '2023_06_02_152453_delete_description_from_messages_table', 16),
(23, '2023_06_02_152942_add_description_to_events_table', 17),
(24, '2023_06_02_153011_add_description_to_library_table', 17),
(25, '2023_06_02_153048_add_description_to_messages_table', 17),
(26, '2023_06_02_153744_delete_prayer_from_devotional_table', 18),
(27, '2023_06_02_154128_delete_prayer_from_devotional_table', 19),
(28, '2023_06_02_154208_add_prayer_to_devotional_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prompt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`, `web`, `prompt`) VALUES
(1, '2023-05-26 15:46:59', '2023-12-23 23:06:55', 'The Ignition [Phase 3]', '21 days of Prayers and Study of the word, three times daily. Join us by 5:30am, 12:00pm and 9:00pm', '1703376415.JPG', 'https://pdciglobal.com', 'Join the Ignition'),
(5, '2023-06-01 19:50:01', '2023-06-01 19:57:15', 'New Wine Conference', 'New Wine Conference is a time to partake of New wine from the Throne of Grace. The New wine conference is from the 5th of November to 10th of November. We celebrate you.', '1685656201.jpg', 'Null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Purpose Driven Church', 'pdci@gmail.com', NULL, '$2y$10$UXGfLFihEkCJOxy01iemEeP9RHLtxkoGtbrpmcJJmwcZOUbrFMBru', NULL, '2023-05-22 20:03:35', '2023-05-22 20:03:35', 'Testuser'),
(3, 'Purpose Driven Church', 'Testuser2@gmail.com', NULL, '$2y$10$2gCukPCeJsoawauXeo7mEOghRq3i/G7uYBl8hzJ9vJgwWp7I2hSQm', NULL, '2023-05-22 20:06:41', '2023-05-22 20:06:41', 'Testuser2');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtopic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `created_at`, `updated_at`, `title`, `subtopic`, `body`, `image`) VALUES
(1, '2023-05-24 21:14:38', '2023-12-23 23:04:52', 'Welcome to the Month of June', 'Our month of Discovering God\'s Purpose', 'In the beginning God created heaven and earth, and the earth was without form and void. Genesis 1:1 [NLT]', '1703376292.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confessions`
--
ALTER TABLE `confessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devotional`
--
ALTER TABLE `devotional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventimages`
--
ALTER TABLE `eventimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confessions`
--
ALTER TABLE `confessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `devotional`
--
ALTER TABLE `devotional`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eventimages`
--
ALTER TABLE `eventimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
