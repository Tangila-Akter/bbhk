-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 08:45 AM
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
-- Database: `bbhk_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE `calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calenders`
--

INSERT INTO `calenders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(10, '1678764222.png', '2023-03-13 21:23:42', '2023-03-13 21:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1678737680.jpg', '2023-03-13 14:01:20', '2023-03-13 14:01:20'),
(6, '1678737727.jpg', '2023-03-13 14:02:07', '2023-03-13 14:02:07'),
(7, '1678738183.jpg', '2023-03-13 14:09:43', '2023-03-13 14:09:43'),
(9, '1678738309.jpg', '2023-03-13 14:11:49', '2023-03-13 14:11:49'),
(11, '1678738394.jpg', '2023-03-13 14:13:14', '2023-03-13 14:13:14'),
(12, '1678738473.jpg', '2023-03-13 14:14:33', '2023-03-13 14:14:33'),
(13, '1678738510.jpg', '2023-03-13 14:15:10', '2023-03-13 14:15:10'),
(14, '1678738550.jpg', '2023-03-13 14:15:50', '2023-03-13 14:15:50'),
(15, '1678760216.jpg', '2023-03-13 20:16:56', '2023-03-13 20:16:56'),
(16, '1678760248.jpg', '2023-03-13 20:17:28', '2023-03-13 20:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `class_6s`
--

CREATE TABLE `class_6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `বাংলা ব্যাকরণ ও নির্মিতি` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `আনন্দ পাঠ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `English` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `গণিত` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `বিজ্ঞান` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `চারুপাঠ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `চারু ও কারুকলা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `বাংলাদেশ ও বিশ্বপরিচয়` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ক্ষুদ্র ও নৃগোষ্ঠীর ভাষা ও সংস্কৃতি` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `কৃষি শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `গার্হস্থ্য বিজ্ঞান` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `শারীরিক শিক্ষা ও স্বাস্থ্য` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `তথ্য ও যোগাযোগ প্রযুক্তি` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `কর্ম ও জীবনমুকী শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ইসলাম ও নৈতিক শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `হিন্দুধর্ম ও নৈতিক শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `বৌদ্ধধর্ম ও নৈতিক শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `খ্রিষ্টধর্ম ও নৈতিক শিক্ষা` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `paragraph`, `created_at`, `updated_at`) VALUES
(4, '\"Middle school is kind of like Middle-earth. It’s a magical journey filled with elves, dwarves, hobbits, queens, kings, and a few corrupt wizards. Word to the wise: pick your traveling companions well. Ones with the courage and moral fiber to persevere. Ones who wield their lip gloss like magic wands when confronted with danger. This way, when you pass through the congested hallways rife with pernicious diversion, you achieve your desired destination—or at least your next class.\" – Kimberly Dana', '2023-03-14 14:52:00', '2023-03-14 14:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `title`, `usertype`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `governings`
--

CREATE TABLE `governings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `vacancy`, `type`, `requirement`, `salary`, `time`, `holiday`, `deadline`, `created_at`, `updated_at`) VALUES
(3, 'Government', '01', 'Office Assistant', NULL, 'Government', 'Office time', 'Friday', '10-03-2023', '2023-03-13 22:00:21', '2023-03-13 22:00:21'),
(4, 'Government', '01', 'Maid', NULL, 'Government', 'Office time', 'Friday', '10-03-2023', '2023-03-13 22:01:18', '2023-03-13 22:01:18'),
(5, 'Government', '01', 'Cleaner', NULL, 'Government', 'Office time', 'Friday', '10-03-2023', '2023-03-13 22:02:11', '2023-03-13 22:02:11');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_05_214423_create_sessions_table', 1),
(7, '2022_09_05_215222_create_jobs_table', 1),
(8, '2022_09_05_215303_create_calenders_table', 1),
(9, '2022_09_05_215331_create_notices_table', 1),
(10, '2022_09_05_215408_create_contacts_table', 1),
(11, '2022_09_10_183525_create_routines_table', 1),
(12, '2022_09_10_212321_create_syllabi_table', 1),
(13, '2022_09_10_213858_create_exams_table', 1),
(14, '2022_09_11_023152_create_governings_table', 1),
(15, '2022_09_11_025118_create_schools_table', 1),
(16, '2022_09_11_031247_create_staffs__docs_table', 1),
(17, '2022_09_24_032332_create_class_6s_table', 1),
(18, '2022_10_03_051403_create_results_table', 1),
(19, '2023_03_10_020700_create_pages_table', 2),
(20, '2023_03_10_021043_create_footer_table', 2),
(21, '2023_03_10_021328_create_carousel_table', 2),
(22, '2023_03_10_092804_create_carousels_table', 3),
(23, '2023_03_10_151904_create_footers_table', 4),
(24, '2023_04_28_120726_create_gallaries_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `date`, `filename`, `created_at`, `updated_at`) VALUES
(3, 'SSC-2023 Schedule', '12/03/2023', '1678735855.pdf', '2023-03-13 13:30:55', '2023-03-13 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `before` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `name`, `position`, `before`, `after`, `created_at`, `updated_at`) VALUES
(3, 'dfgsdg', 'dsfdf', 'dsfg', 'প্রত্যন্তর পল্লীর মাটি ও মানুষের একান্ত সান্নিধ্যে থেকে যারা নানা প্রতিকূলতার মাঝে থেকেও এলাকায় শিক্ষার আলোকে ছড়িয়ে দেয়ার \r\n                        জন্য বিশেষ অবদান রেখেছেন, রেখে চলেছেন তাদের মধ্যে অন্যতম নোয়াখালী জেলার সোনাইমুড়ি উপজেলার তিন নং চাষিরহাট \r\n                        ইউনিয়নের সাহাপাড় গ্রামের ঐতিহ্যবাহী ভূঁইয়া পরিবার। ওই পরিবারের সাত সন্তানের মধ্যে বড় সন্তান আলহাজ্ব ইদ্রিস ভুন্দিয়ার \r\n                        নেতৃত্বে সকলে একমত পোষণ করে নিজেদের ৭৫ শতক জমিন দান করে এবং প্রচুর অর্থ বিনিয়োগ করে ১৯৯৯ খ্রিস্টাব্দ সনে\r\n                         তাদের মায়ের নামে \"ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়\" নামে স্কুলটি প্রতিষ্ঠা করেন। মেয়ে ২০১০ সালে জুনিয়র হিসেবে\r\n                          এমপিও ভুক্ত হওয়ার পর ১লা ডিসেম্বর ২০১০ সালে আমি বিদ্যালয়টির প্রধান শিক্ষক পদে নিয়োগ প্রাপ্ত হই। তখন বিদ্যালয়ে \r\n                          একজন ধর্মীয় শিক্ষক একজন অফিস সহকারী একজন দপ্তরি সহ তিনজন এমপিওভুক্ত ছিলেন বাকি ৪ জন মেহমান শিক্ষক\r\n                           ছিলেন। সংখ্যা উল্লেখ যোগ্য নয় নানা প্রতিক পরিস্থিতি মোকাবেলা শেষে পড়ালেখার মান উন্নয়ন সহ পাবলিক পরীক্ষায় ঈশ্বরের \r\n                           নিয়ম ফলাফল শেষে বর্তমান শিক্ষা বান্ধব সরকার \r\n                        ২৩/১০/২০১৯ খ্রিষ্টাব্দ তারিখে প্রজ্ঞাপনের আলোকে গত ১৯/০৪/২০২০ খ্রিষ্টাব্দ বিদ্যালয়টিকে মাধ্যমিক হিসেবে', 'এমপিও ভুক্ত করেন। ইতিমধ্যে যোগ্য ও দক্ষ শিক্ষক নিয়োগ, পাঠদানে কৌশল পরিবর্তন সহ নানামুখী পদক্ষেপ ও দিনরাত পরিশ্রমের\r\n                             ফলে শিক্ষার মান বৃদ্ধির সাথে সাথে শিক্ষার্থীর সংখ্যা গাণিতিক হারে বৃদ্ধি পেয়েছে।\r\n                            এ প্রতিষ্ঠানের ম্যানেজিং কমিটি, অভিভাবক, শিক্ষক-শিক্ষার্থী একই সূত্রে গাথা। সকলের সার্বিক সহযোগিতায় পল্লী গায়ের \r\n                            এ বিদ্যাপীঠটি সর্বদাই কোলাহল ও মুখরিত থাকে। এ বিদ্যালয়ের মাধ্যমে শিক্ষার আলো ছড়িয়ে পড়ুক দিগন্তে। মহান আল্লাহর \r\n                            নিকট এই কামনা সর্বদা আমিন । \r\n                          ', '2023-03-10 04:15:33', '2023-03-10 04:15:33'),
(4, '\"কিছু কথা\"', 'আব্দুল্লাহ আল মামুন', 'প্রধান শিক্ষক', 'প্রত্যন্তর পল্লীর মাটি ও মানুষের একান্ত সান্নিধ্যে থেকে যারা নানা প্রতিকূলতার মাঝে থেকেও এলাকায় শিক্ষার আলোকে ছড়িয়ে দেয়ার জন্য বিশেষ অবদান রেখেছেন, রেখে চলেছেন তাদের মধ্যে অন্যতম নোয়াখালী জেলার সোনাইমুড়ি উপজেলার ৩ নং চাষিরহাট ইউনিয়নের সাহাপাড় গ্রামের ঐতিহ্যবাহী ভূঁইয়া পরিবার। ওই পরিবারের সাত সন্তানের মধ্যে বড় সন্তান আলহাজ্ব ইদ্রিস ভূঁইয়ার নেতৃত্বে সকলে একমত পোষণ করে নিজেদের ৭৫ শতক জমিন দান করে এবং প্রচুর অর্থ বিনিয়োগ করে ১৯৯৯ খ্রিস্টাব্দ সনে তাদের মায়ের নামে \"ভূঁইয়ার বাজার হনুফা খাতুন উচ্চ বিদ্যালয়\" নামে স্কুলটি প্রতিষ্ঠা করেন। মে ২০১০ সালে জুনিয়র হিসেবে এমপিও ভুক্ত হওয়ার পর ১লা ডিসেম্বর ২০১০ সালে আমি বিদ্যালয়টির প্রধান শিক্ষক পদে নিয়োগ প্রাপ্ত হই।', 'তখন বিদ্যালয়ে একজন ধর্মীয় শিক্ষক একজন অফিস সহকারী একজন দপ্তরি সহ তিনজন এমপিওভুক্ত ছিলেন বাকি ৪ জন মেহমান শিক্ষক ছিলেন। সংখ্যা উল্লেখ যোগ্য নয় নানা প্রতিকুল পরিস্থিতি মোকাবেলা শেষে পড়ালেখার মান উন্নয়ন সহ পাবলিক পরীক্ষায় ঈশ্বর্নীয় ফলাফল শেষে বর্তমান শিক্ষা বান্ধব সরকার ২৩/১০/২০১৯ খ্রিষ্টাব্দ তারিখে প্রজ্ঞাপনের আলোকে গত ১৯/০৪/২০২০ খ্রিষ্টাব্দ বিদ্যালয়টিকে মাধ্যমিক হিসেবে এমপিও ভুক্ত করেন। ইতিমধ্যে যোগ্য ও দক্ষ শিক্ষক নিয়োগ, পাঠদানে কৌশল পরিবর্তন সহ নানামুখী পদক্ষেপ ও দিনরাত পরিশ্রমের ফলে শিক্ষার মান বৃদ্ধির সাথে সাথে শিক্ষার্থীর সংখ্যা গাণিতিক হারে বৃদ্ধি পেয়েছে।\r\nএ প্রতিষ্ঠানের ম্যানেজিং কমিটি, অভিভাবক, শিক্ষক-শিক্ষার্থী একই সূত্রে গাঁথা। সকলের সার্বিক সহযোগিতায় পল্লী গায়ের এ বিদ্যাপীঠটি সর্বদাই কোলাহল ও মুখরিত থাকে। এ বিদ্যালয়ের মাধ্যমে শিক্ষার আলো ছড়িয়ে পড়ুক দিগন্তে। মহান আল্লাহর নিকট এই কামনা সর্বদা আমিন।', '2023-03-13 19:38:31', '2023-03-13 19:38:31');

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `title`, `date`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Class Schedule', '12/03/2023', '1678765380.jpg', '2023-03-13 21:43:00', '2023-03-13 21:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Nor3J0f9clAtm9LgkErRwTkHAPkxSLBzRMBwMRNp', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.58', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZlZpeHFSRmZVc3RBdmNmQmpLdXJRdFlhRHlTdGdRS1gyZ1Axd2RaTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvYmJoay9wdWJsaWMvYWRtaW5fZ2FsbGFyeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO30=', 1682686009);

-- --------------------------------------------------------

--
-- Table structure for table `staffs__docs`
--

CREATE TABLE `staffs__docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'tSQFu4hsNTfey9ZfAbalJOk9CQzzzOLqkIwrzhFRRKHsYeh1sxHtKjegdpTL', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calenders`
--
ALTER TABLE `calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_6s`
--
ALTER TABLE `class_6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governings`
--
ALTER TABLE `governings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staffs__docs`
--
ALTER TABLE `staffs__docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
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
-- AUTO_INCREMENT for table `calenders`
--
ALTER TABLE `calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `class_6s`
--
ALTER TABLE `class_6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `governings`
--
ALTER TABLE `governings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs__docs`
--
ALTER TABLE `staffs__docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
