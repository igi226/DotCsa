-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotcsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'DOTCSA ADMIN', 'admin@mail.com', '$2y$10$AdpQVNLSByUL0VTh/9zmuuV5a2AfHaDC/bR0rwMCDE3e11mPluLK6', NULL, '2023-03-25 03:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `slug`, `title`, `short_desc`, `description`, `image`, `created_at`, `updated_at`, `page`) VALUES
(4, 'we-train-you-to-be-your-own', 'We train you to be your own DOTCSA certified DOT Subject Matter specialist', NULL, '<ol><li>DOTCSA ACCREDITED Training Modeled For Best Practices in Self Auditing and Mock Investigations</li><li>Standard DOT Government Intervention Investigation and Inspection Methodologies</li><li>Motor Carrier Safety Assistance Program Education to better engage with State &amp; Federal Oversight in your State</li></ol><p>24 hour Phone Access to a DOTCSA reviewed Subject Matter Expert with former State, Federal, Law Enforcement &amp;Private DOT Large Fleet Experience.</p><p>&nbsp;</p>', '16777554916111.jpg', NULL, '2023-03-24 23:19:17', 'home'),
(5, 'we-train-you-to-be-your-own-banner2', 'We train you to be your own DOTCSA certified DOT Subject Matter specialist', NULL, '<ol><li>DOTCSA ACCREDITED Training Modeled For Best Practices in Self Auditing and Mock Investigations</li><li>Standard DOT Government Intervention Investigation and Inspection Methodologies</li><li>Motor Carrier Safety Assistance Program Education to better engage with State &amp; Federal Oversight in your State</li></ol><p>24 hour Phone Access to a DOTCSA reviewed Subject Matter Expert with former State, Federal, Law Enforcement &amp;Private DOT Large Fleet Experience.</p>', '16787741218754.png', NULL, '2023-03-24 23:23:04', 'home'),
(6, 'dotcsa-has-decades-of-experience-in-government-industry', 'DOTCSA\'s Founding Members have 100 years of combined Regulatory & Fleet Safety Experience in Government & Private Industry', 'REAL EXPERIENCE MATTERS, NOT BOOK EXPERIENCE', '<p>Most “DOT Consultants” can point you to a regulation, that\'s it. That approach never works.</p><p>Our Experience in Government Investigations find Risk Management Issues no Regulation Book can point out.</p><p>We Train You on Developing DOT Regulation into Risk Reduction Safety Program Modeled after State &amp; Federal DOT Interventions &amp; Safety Data Prioritization</p>', '16778291574634.png', NULL, '2023-03-25 01:53:49', 'home'),
(7, 'dotcsa-has-access-to-dot-safety-pros-meeting-our-standards', 'DOTCSA HAS ACCESS TO DOT SAFETY PROS MEETING OUR STANDARDS', 'DOTCSA Accredited DOT Safety Compliance Service Providers Can Help.', NULL, NULL, NULL, NULL, 'home'),
(8, 'theres-no-such-thing-as-dot-certified-training-stop-wasting-your', 'There\'s NO such thing as DOT Certified Training, stop wasting your $.', 'ES&H Insurance Industry Safety Professionals Know Risk Management When They See It.', 'DOTCSA Training provides Association Registered Accreditation through periodic bi-annual training programs that provides your clients with confidence in your ES&H role.', '16777581343113.png', NULL, NULL, 'home'),
(9, '227587-dotcsa-has-decades-of-experience-in-government-industry', 'DOTCSA FOUNDERS HAVE OVER 100 YEARS OF EXPERIENCE IN GOVERNMENT & PRIVATE INDUSTRY', 'REAL EXPERIENCE MATTERS, A DOT BOOK IS NOT EXPERIENCE', '<p>Most \"DOT Consultants\" can point you to a regulation, that\'s it. That approach never works. We Train You on Developing DOT Regulations into a Risk Reduction Safety Program modeled after DOT Interventions &amp; Safety Data for Safety Fitness Determination, the way it should be!</p>', NULL, NULL, '2023-03-25 02:26:51', 'about'),
(10, 'former-law-enforcement-with-dot-transportation-safety-crash-investigator-experience', 'Former Law Enforcement with DOT Transportation Safety & Crash Investigator Experience', 'Two of our Member Founders Were Former Law Enforcement', NULL, '16777596144644.jpg', NULL, NULL, 'about'),
(11, 'former-usdot-investigators-state-director', 'Former USDOT Investigators & State Director', 'Three of our Founders served our nation as former USDOT (OMC) FMCSA Investigators & an Assistant State Director', NULL, '16777596539946.png', NULL, NULL, 'about'),
(12, 'former-private-industry-freight-safety-regulatory-pros', 'Former Private Industry Freight & Safety Regulatory Pros.', 'GOVERNMENT Never Knows It All. Most Importantly, DOTCSA has three Founders with experience in Director & Executive Management Level Positions within Big Trucking, many who worked their way up to the Top. Yes, they wore your shoes.', NULL, '16777596906846.png', NULL, NULL, 'about'),
(13, 'former-non-dot-government-federal-contractors-managing-dot-compliance', 'Former Non-DOT Government & Federal Contractors Managing DOT Compliance', 'Even other Federal Agencies such as EPA, NASA, DOD, DOE and Government Research Labs can be responsible for the DOT Compliance of Hazardous Materials & Government Property.  Three of our Founders held former high-level positions within Government Agencies or as Federal Contractors ensuring DOT Compliance on our Nation\'s Roadways.', NULL, '16777597517792.png', NULL, NULL, 'about'),
(14, 'real-dot-professionals-with-former-real-experience-in-law-enforcement-and-dot-government-compliance-programs-services', 'REAL DOT Professionals, with former REAL EXPERIENCE in Law Enforcement and DOT Government Compliance Programs & Services', NULL, 'DOTCSA\'s core Founding Members originally met in 2005 as Law Enforcement, DOT Government Investigators, & DOT Compliance Safety Program Provider Professionals who back then realized the Motor Carrier industry lacked a real understanding that DOT Safety Compliance goes beyond \"reading a regulation\" & being \"consulted\'.\r\n\r\nFrom 2005 onward into 2022, this core friendship of DOT Safety Professionals came to the realization that Training to an Industry Standard of 49 CFR Safety Fitness Determination modeled after State & Federal DOT Inspections, Audits and Investigations was the answer.\r\n\r\nIn 2013 onward 2022, after losing two members of our growing group of DOT Safety Professionals, businessman & proprietor Sid Martinez (pictured above in uniform) a former San Antonio PD Detective & Accident Investigator) put pen to paper & DOTCSA was established.', '16777598029930.png', NULL, NULL, 'about'),
(15, '365251-dotcsa-has-access-to-dot-safety-pros-meeting-our-standards', 'DOTCSA HAS ACCESS TO DOT SAFETY PROS MEETING OUR STANDARDS', 'DOTCSA Accredited DOT Safety Compliance Service Providers Can Help.', NULL, NULL, NULL, NULL, 'motorcareer'),
(16, 'dot-drug-alcohol-testing-that-meets-dotcsa-standards', 'DOT Drug & Alcohol Testing that MEETS DOTCSA Standards', NULL, 'Most State & Federal DOT Investigators can tell you DOT Drug & Alcohol testing violations are the most common found, resulting in thousands in penalties.\r\n\r\nUsing a Clinic or Hospital for DOT Drug & Alcohol Compliance? Is your Healthcare source READY to help you handle a DOT Investigation on your behalf? Not Really.\r\n\r\nDOTCSA Accredited a National Provider Third Party Agent DOT Drug & Alcohol testing firm founded by a former USDOT FMCSA State Administrator. YOUR PROBLEMS STOP HERE.', '16780832804203.png', NULL, NULL, 'motorcareer'),
(17, 'mock-dot-investigations-audits-by-former-government-investigators', 'MOCK DOT Investigations & Audits by Former Government Investigators', NULL, 'Comprehensive 49 CFR Mock DOT Investigations covering every Federal Motor Carrier Safety Regulation & Hazardous Material Regulation using established State & Federal DOT Investigations methods.\r\n\r\nDOTCSA has Accredited subject matter experts with former experiences as DOT State & Federal Investigators and with past experiences in other Government Agencies responsible for 49 CFR DOT regulatory compliance.', '16780833132565.png', NULL, NULL, 'motorcareer'),
(18, 'partial-or-full-dot-program-compliance-records-management', 'Partial or FULL DOT Program Compliance Records Management', NULL, 'Why worry about keeping DOT Compliant Paperwork?\r\n\r\nYou Drive & Run Your Business, DOTCSA Accredited Providers manage your DOT files.\r\n\r\nDOTCSA can refer you to DOT Compliance Providers that have managed fleets for large trucking companies.\r\n\r\nWe can also refer you to DOT Safety Pros. who have former positions as State & Federal DOT Investigators for Program Guidance in Compliant Record Keeping', '16780833437166.png', NULL, NULL, 'motorcareer'),
(19, 'dot-inspection-maintenance-record-program', 'DOT Inspection & Maintenance Record Program', NULL, 'Our vetted sources have former DOT State & Federal backgrounds with decades of experience in conducting DOT Inspections & Investigations.\r\n\r\nWe also have sources with former careers in maintenance for DOD Military and Large Trucking companies who know their tools by getting their hands dirty to keep their work DOT Compliant .\r\n\r\nOur Providers can Train Mechanics, Drivers, Motor Carriers in all DOT Compliance areas for Load Securement, Driver Inspections, & Federal Maintenance DOT FMVSS Standards', '16780833899307.png', NULL, NULL, 'motorcareer'),
(20, 'driver-qualification', 'Driver Qualification', NULL, 'If you are a Motor Carrier, Hiring Agent, Safety Professional, or in HR you know better than ANYONE the complexity of onboarding and QUALIFYING any CDL or Non-CDL Driver.\r\n\r\nDOTCSA Accredited Providers can help you with regulatory Driver Qualification based on their former experiences in State or Federal DOT Agencies.\r\n\r\nBetter yet, our sources can help you with your BOTTOM LINE by helping you with EVERYTHING about the hiring & Qualification Process.\r\n\r\nYou Focus On Your Business making $.', '1678083421649.png', NULL, NULL, 'motorcareer'),
(21, 'dotcsa-accredits-training-for-dot-safety-compliance-beyond-regulations', 'DOTCSA Accredits Training For DOT Safety & Compliance Beyond Regulations', NULL, 'DOTCSA\'s primary mission is training Safety Professionals to manage their DOT Safety Programs with precision methods used by Government Regulators.\r\n\r\nDOTCSA has Accredited Training & Service Providers with actual Government & Private Industry experience in areas like Load Securement, Hazardous Materials Record Management, HM Transport & Handling, Custom Business Fleet Safety Policies, Better Navigating FMCSA\'s Safety Measurement System, & helping with FMCSA Rating Upgrades & Corrective Action req', '16780834439551.png', NULL, NULL, 'motorcareer');

-- --------------------------------------------------------

--
-- Table structure for table `dot_professionals`
--

CREATE TABLE `dot_professionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dot_professionals`
--

INSERT INTO `dot_professionals` (`id`, `name`, `address`, `contact_number`, `email`, `city`, `state`, `zipcode`, `profile_doc`, `created_at`, `updated_at`) VALUES
(1, 'Jogn', 'Durgapur Station Rd', '544316234', 'a@mail.com', 'Durgapur', 'WB', '713210', '16771310561066.docx', NULL, NULL),
(2, '3443', '3443', '3443', '3443@mail.com', '3443', '3443', '3443', NULL, NULL, NULL),
(5, '235432', '235432', '235432', '235432@mail.com', '235432', '235432', '235432', '16771324858928.docx', '2023-02-22 18:30:00', NULL),
(8, 'John', 'Walking road', '8787', '8909@mail.com', 'Arizona', 'Los V', '111407', '16775683114638.pdf', '2023-02-27 18:30:00', NULL);

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_image`, `created_at`, `updated_at`) VALUES
(4, '16800701606904.jpg', '2023-03-29 00:39:20', '2023-03-29 00:39:20'),
(6, '16800701787625.png', '2023-03-29 00:39:38', '2023-03-29 00:39:38'),
(7, '16800701856315.jpg', '2023-03-29 00:39:45', '2023-03-29 00:39:45'),
(9, '16800705011364.png', '2023-03-29 00:45:01', '2023-03-29 00:45:01'),
(10, '1680070509633.png', '2023-03-29 00:45:09', '2023-03-29 00:45:09'),
(11, '16800705272606.png', '2023-03-29 00:45:27', '2023-03-29 00:45:27'),
(14, '16802462438415.jpg', '2023-03-31 01:34:03', '2023-03-31 01:34:03'),
(15, '16802462708370.png', '2023-03-31 01:34:30', '2023-03-31 01:34:30');

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
(5, '2023_02_23_044844_create_dot_professionals_table', 1),
(6, '2023_02_25_062541_create_admins_table', 2),
(7, '2023_03_01_055614_create_cms_table', 3),
(8, '2023_03_09_090745_create_site_infos_table', 4),
(9, '2023_03_28_063151_create_galleries_table', 5);

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
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `slug`, `site_name`, `logo_image`, `favicon_image`, `address`, `email`, `phone`, `twitter`, `facebook`, `instagram`, `pinterest`, `linkdin`, `created_at`, `updated_at`) VALUES
(1, 'site-info-dotcsa', 'DOTCSA', '16784277223286.png', '16784277225754.png', 'oom.,o', 'a@mail.com', '123455', 'https://twitter.com/', 'https://www.facebook.com/narendramodi/', 'https://www.instagram.com/narendramodi/?hl=en', 'https://www.youtube.com/', 'https://twitter.com/', NULL, '2023-03-10 00:26:00');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_professionals`
--
ALTER TABLE `dot_professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_infos_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dot_professionals`
--
ALTER TABLE `dot_professionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
