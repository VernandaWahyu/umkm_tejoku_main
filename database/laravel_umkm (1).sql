-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 03:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'UMKM Ponorogo', 'abouts/9GFYvkAAKB5h9cNpEO31BweMs9xLTs02MrcH1aEI.png', 'UMKM (Usaha Mikro, Kecil, dan Menengah) di Ponorogo memainkan peran penting dalam perekonomian lokal. Dengan beragam jenis usaha, mulai dari kerajinan tangan, kuliner, hingga produk pertanian, UMKM di daerah ini menjadi tulang punggung ekonomi bagi masyarakat. Selain menciptakan lapangan pekerjaan, UMKM juga membantu mempertahankan budaya dan tradisi lokal, seperti batik Ponorogo dan makanan khas daerah. Seiring perkembangan teknologi, banyak UMKM di Ponorogo yang mulai beralih ke pemasaran digital. Melalui platform media sosial dan e-commerce, para pelaku UMKM mampu menjangkau pasar yang lebih luas, baik di dalam maupun luar daerah. Hal ini juga didukung oleh berbagai program pelatihan dan pendampingan yang diselenggarakan oleh pemerintah daerah dan lembaga swadaya masyarakat.', '2024-09-04 01:03:41', '2024-09-04 18:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', 'superadmin', NULL, '$2y$10$.k6elOBeWJq9MBgiieZv9OLu/rJW0gKGfue9v9kGEvUQ7htLG5rZa', NULL, '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(2, 'Wahyu Saputra', 'wahyukekae@gmail.com', 'wahyusaputra', NULL, '$2y$10$wF2Gqiauf2HkV6GNTZWKQOtXUvAsRat/Vtga/AUozW5y2UEP3WUbq', NULL, '2024-09-02 18:43:10', '2024-09-02 18:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `content` text NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `subcontent` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `keyword`, `content`, `image1`, `subtitle`, `subcontent`, `slug`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Tegalsari', 'Masjid ,Wisata Religi', 'Tegalsari adalah sebuah desa di wilayah Kecamatan Jetis, Kabupaten Ponorogo, Jawa Timur. Di Tegalsari terdapat pondok pesantren tertua di Jawa yang bernama Gebang Tinatar asuhan Kyai Ageng Hasan Besari yang hingga saat ini menjadi cagar budaya dan wisata religi di Ponorogo. Pada era kolonial Belanda, Tegalsari merupakan tanah perdikan atau merdeka yaitu desa istimewa yang bebas dari segala kewajiban membayar pajak kepada kerajaan. Di desa ini tokoh nasional Hos Tjokroaminoto dilahirkan.', 'articles/CII770NCWQGOxFHXRAD6oWW2pCX6BTwCXCvv7MX2.jpg', 'Masjid Tegalsari', 'Di Tegalsari terdapat sebuah masjid kuno yaitu Masjid Tegalsari. Masjid ini merupakan peninggalan Kiai Ageng Muhammad Besari yang dibangun pada abad ke-18.Masjid Tegalsari menjadi salah satu tempat wisata religi di Ponorogo; di samping Makam Bathara Katong, Sendang Tirto Waluyojati, dan Makam Astana Srandil.Di depan masjid ini, terdapat makam sang kiai yang ramai dikunjungi para peziarah dari berbagai kota di Indonesia', 'tegalsari', 'articles/VTdOADFSk4OYYPfXlL1rjOmbYXde6wF9NnAob0LW.jpg', '2024-09-05 16:48:22', '2024-09-05 18:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `text1`, `text2`, `number`, `created_at`, `updated_at`) VALUES
(2, 'Ingin Tahu Lebih Lanjut? ', 'Hubungi', '+6285655923203', '2024-09-03 18:38:29', '2024-09-03 18:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galerikoloms`
--

CREATE TABLE `galerikoloms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galerikoloms`
--

INSERT INTO `galerikoloms` (`id`, `title`, `image`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'test', 'galerikoloms/1725540337.jpg', 'test1,test2', '2024-09-05 05:45:37', '2024-09-05 05:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Tegalsari', 'galleries/6XMK0cJXaYprbFuvEMEOVtWeIWcsDoWhWehiKI7v.jpg', 'Galley,Wisata', '2024-09-04 01:43:30', '2024-09-04 18:21:05'),
(2, 'Josari', 'galleries/1725499335.jpg', 'UMKM,Wisata', '2024-09-04 18:22:15', '2024-09-04 18:22:15'),
(4, 'KutuWetan', 'galleries/qawn7btJjPaKTdGDoOedyAUc3hSg5qdLP88guYYZ.jpg', 'Galley,Wisata', '2024-09-05 14:49:42', '2024-09-05 19:07:21'),
(6, 'Tegalsari', 'galleries/1725925363.jpg', 'Galley,Wisata', '2024-09-09 16:42:44', '2024-09-09 16:42:44'),
(7, 'Kutu', 'galleries/1725925394.jpg', 'Wisata,Makanan', '2024-09-09 16:43:14', '2024-09-09 16:43:14'),
(8, 'Josari', 'galleries/1725925434.jpg', 'UMKM,Wisata', '2024-09-09 16:43:54', '2024-09-09 16:43:54'),
(9, 'test bottom', 'galleries/1725925457.jpg', 'Galley,Wisata', '2024-09-09 16:44:17', '2024-09-09 16:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_map` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `url_map`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.721511545299!2d111.48894601535258!3d-7.8689399943301565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a5278c0dc2ab%3A0x503e1f8e441c8a0!2sJosari%2C%20Tegalsari%2C%20Ponorogo%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1693215768000!5m2!1sen!2sid', '2024-09-04 09:53:42', '2024-09-04 18:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_184706_create_permission_tables', 1),
(5, '2020_09_12_043205_create_admins_table', 1),
(6, '2024_09_03_074124_create_sliders_table', 2),
(8, '2024_09_03_231529_create_contacts_table', 3),
(9, '2024_09_04_070123_create_abouts_table', 4),
(10, '2024_09_04_081929_create_gallerys_table', 5),
(11, '2024_09_04_144741_create_socials_table', 6),
(12, '2024_09_04_164004_create_maps_table', 7),
(13, '2024_09_05_120426_create_galerikoloms_table', 8),
(14, '2024_09_05_231340_create_articles_table', 9),
(15, '2024_09_06_060659_create_sponsors_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\Models\\Admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(3, 'blog.create', 'admin', 'blog', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(4, 'blog.view', 'admin', 'blog', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(5, 'blog.edit', 'admin', 'blog', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(6, 'blog.delete', 'admin', 'blog', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(7, 'blog.approve', 'admin', 'blog', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(8, 'admin.create', 'admin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(9, 'admin.view', 'admin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(10, 'admin.edit', 'admin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(11, 'admin.delete', 'admin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(12, 'admin.approve', 'admin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(13, 'role.create', 'admin', 'role', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(14, 'role.view', 'admin', 'role', '2024-09-01 18:34:47', '2024-09-01 18:34:47'),
(15, 'role.edit', 'admin', 'role', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(16, 'role.delete', 'admin', 'role', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(17, 'role.approve', 'admin', 'role', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(18, 'profile.view', 'admin', 'profile', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(19, 'profile.edit', 'admin', 'profile', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(20, 'profile.delete', 'admin', 'profile', '2024-09-01 18:34:48', '2024-09-01 18:34:48'),
(21, 'profile.update', 'admin', 'profile', '2024-09-01 18:34:48', '2024-09-01 18:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2024-09-01 18:34:47', '2024-09-01 18:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `button_text`, `button_link`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Tegalsari', 'Desa Tegalsari', 'sliders/JWKCtMK7ClZL5jaqo0rUe8sjqyqix3FACxYGMJ4u.png', 'Selengkapnya', 'article/tegalsari', 'Di Tegalsari terdapat pondok pesantren tertua di Jawa yang bernama Gebang Tinatar', '2024-09-04 20:53:05', '2024-09-05 19:01:10'),
(6, 'test slider', 'slider baru', 'sliders/1725509674.jpg', 'Disini', 'sliders.index', 'test slider coba', '2024-09-04 21:14:36', '2024-09-04 21:14:36'),
(7, 'test', 'test', 'sliders/1725578789.jpg', 'test', 'test', 'test', '2024-09-05 16:26:30', '2024-09-05 16:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `title`, `image`, `keyword`, `facebook`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Masjid Tegalsari', 'socials/G9fkyCQQw59wTw15U1Bug6BmE9Mxa7WiEdPiJsCu.png', 'Wisata Religi,Masjid', 'http://facebook.com/edit', 'https://www.instagram.com/edit', 'https://www.instagram.com/edit', '2024-09-04 09:16:42', '2024-09-05 19:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sponsors/1725603747.png', '2024-09-05 23:22:28', '2024-09-05 23:22:28'),
(2, 'sponsors/U4BzPJvwMUk6rUCIzUjn2DHb1MVxEP8BNSunJ3dA.png', '2024-09-05 23:22:37', '2024-09-05 23:24:14'),
(3, 'sponsors/1725603866.png', '2024-09-05 23:24:26', '2024-09-05 23:24:26'),
(4, 'sponsors/1725603878.png', '2024-09-05 23:24:38', '2024-09-05 23:24:38'),
(5, 'sponsors/1725603887.png', '2024-09-05 23:24:47', '2024-09-05 23:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maniruzzaman Akash', 'manirujjamanakash@gmail.com', NULL, '$2y$10$sOsw2UcD6XYpCysbWp1b8uOx2/eLxii1EYYaEeIAcGndrwiXevF3q', NULL, '2024-09-01 18:34:47', '2024-09-01 18:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerikoloms`
--
ALTER TABLE `galerikoloms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galerikoloms`
--
ALTER TABLE `galerikoloms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
