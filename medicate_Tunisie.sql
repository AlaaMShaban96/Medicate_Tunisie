-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2020 at 10:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicate_Tunisie`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_available_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `catogry_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_status_id` int(11) NOT NULL DEFAULT 1,
  `clinic_employee_id` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_available_id`, `patient_id`, `catogry_id`, `appointment_status_id`, `clinic_employee_id`, `date`, `created_at`, `updated_at`, `time`) VALUES
(2, 1, 1, 2, 1, 0, '2020-06-19', '2020-07-12 08:02:06', '2020-07-12 08:02:06', ''),
(3, 1, 1, 2, 1, 0, '2020-07-12', '2020-08-05 11:10:10', '2020-08-05 11:10:10', ''),
(4, 1, 1, 2, 1, 0, '2020-07-12', '2020-08-05 11:11:19', '2020-08-05 11:11:19', ''),
(5, 1, 1, 2, 1, 0, '2020-07-12', '2020-08-05 11:55:11', '2020-08-05 11:55:11', '8:00 to 9:00'),
(6, 1, 1, 2, 1, 0, '2020-07-12', '2020-08-05 12:28:23', '2020-08-05 12:28:23', '8:00 to 9:00'),
(7, 1, 1, 2, 1, 0, '2020-07-12', '2020-08-05 12:28:49', '2020-08-05 12:28:49', '8:00 to 9:00'),
(8, 1, 1, 2, 1, 0, '2020-07-19', '2020-08-05 12:31:12', '2020-08-05 12:31:12', '8:00 to 9:00'),
(9, 1, 1, 2, 1, 0, '2020-07-19', '2020-08-05 12:32:29', '2020-08-05 12:32:29', '8:00 to 9:00'),
(10, 1, 1, 2, 1, 0, '2020-07-19', '2020-08-05 12:33:02', '2020-08-05 12:33:02', '8:00 to 9:00'),
(11, 1, 1, 2, 1, 0, '2020-07-19', '2020-08-05 12:33:28', '2020-08-05 12:33:28', '8:00 to 9:00'),
(12, 1, 1, 2, 1, 0, '2020-07-19', '2020-08-05 12:34:19', '2020-08-05 12:34:19', '8:00 to 9:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_availables`
--

CREATE TABLE `appointment_availables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clinic_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `number_of_patient` tinyint(4) NOT NULL,
  `status_appointment` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_availables`
--

INSERT INTO `appointment_availables` (`id`, `clinic_id`, `doctor_id`, `service_id`, `time_from`, `time_to`, `number_of_patient`, `status_appointment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '35:00:00', '50:00:00', 10, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_available_day`
--

CREATE TABLE `appointment_available_day` (
  `appointment_available_id` bigint(20) UNSIGNED NOT NULL,
  `day_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_available_day`
--

INSERT INTO `appointment_available_day` (`appointment_available_id`, `day_id`) VALUES
(1, 4),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_statuses`
--

CREATE TABLE `appointment_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_statuses`
--

INSERT INTO `appointment_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'قيد المعالجة', NULL, NULL),
(5, 'تم الموافقة علي الموعد', NULL, NULL),
(6, 'تم رفض الموعد', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_ar` text NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fr` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `name_fr`, `img_path`, `created_at`, `updated_at`, `item_id`) VALUES
(1, 'طبيب ميديكيت', 'Medicate Doctor', 'Médecin médecine', 'img/pages/yourHealth/sehtk1.png', '2020-08-16 12:25:03', '0000-00-00 00:00:00', 4),
(2, 'رعاية الحمل و الامومة', 'Pregnancy and maternity care', 'Grossesse et soins de maternité', 'img/pages/yourHealth/sehtk2.png', '2020-08-17 07:45:00', '0000-00-00 00:00:00', 5),
(3, 'رعاية الأمراض المزمنة', 'Chronic disease care', 'Soins des maladies chroniques', 'img/pages/yourHealth/sehtk3.png', '2020-08-17 07:45:04', '0000-00-00 00:00:00', 6),
(4, 'الخدمات الدولية المتخصصة', 'Specialized international services', 'Services internationaux spécialisés', 'img/pages/yourHealth/sehtk4.png', '2020-08-17 07:49:19', '0000-00-00 00:00:00', 9),
(5, 'خدمة الصحة و اللياقة', 'Health and fitness service', 'Service  santé et remise  forme', 'img/pages/yourHealth/sehtk5.png', '2020-08-17 07:46:15', '0000-00-00 00:00:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `catogries`
--

CREATE TABLE `catogries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catogries`
--

INSERT INTO `catogries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'كشف', NULL, NULL),
(3, 'مراجعة', NULL, NULL),
(4, 'عملية', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `contactName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `phoneNo`, `contactName`, `email`, `license`, `address`, `area`, `city`, `state`, `zipCode`, `created_at`, `updated_at`) VALUES
(1, 'المختار', 1234567, 'احمد', 'almoktar@gmail.com', 12345, 'tripoli', 'tripoli', 'tripoli', 'نشط', '1245', '2020-07-01 08:09:29', '2020-07-01 08:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titel_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_fr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `titel_ar`, `titel_en`, `titel_fr`, `descrption_ar`, `descrption_en`, `descrption_fr`, `details_ar`, `details_en`, `details_fr`, `created_at`, `updated_at`, `img_path`) VALUES
(1, 'My medicate', 'My medicate', 'My medicate', 'قريبا ......', 'soon.....', 'Bientôt....', 'قريبا ......<br>', 'soon.....', 'Bientôt....', '2020-07-19 07:41:13', '2020-07-20 10:55:00', 'storage/uploads/1595245392.png'),
(3, 'الصحة المدرسية', 'School Health', 'Santé scolaire', '<b> تم إنشاء بطاقة MedKit لرفع مستوا الرعاية الصحية المدرسية....\r\n</b>', 'The MedKit Card was created to raise the standard of school health care,....', 'La carte Medicate a été créée pour élever le niveau des soins de santé en milieu scolaire.....', '<p> انشئت بطاقة ميدكيت من أجل الرفع من مستوى الرعاية الصحية المدرسية,</p><p> ولكي يحظى الطالب بعناية صحية تشمل الفحص الطبي العام و كشف العيون و رعاية صحة الفم والاسنان.</p><p> كما توفر البطاقة قاعدة بيانات و معلومات تصف الوضع الصحي, عبر طرق حديثة و متطورة لحفظ البيانات الصحية لكل طالب و ضمان عدم ضياعها عن طريق بطاقة ميديكيت الصحة المدرسية medicate school وذلك بواسطة رمز <b>QR code</b> الموجود بالبطاقة يقرأ عبر تطبيق ميديكيت ( medicate app ) على الهواتف الذكية حيث يتم مراجعة و تحديث الملف الطبي <b>on line</b> لكل طالب بسهولة.</p>', 'The MedKit Card was created to raise the standard of school health care, so that students receive health care including general medical examination, eye detection and oral health care. The card also provides a database and information describing the health situation, through modern and sophisticated ways to save health data for each student and ensure that it is not lost through Medicate school health card through the QR code on the card read through the Medicate app (phones) Smart where the medical file on line is reviewed and updated for each student easily.  \",', 'The MedKit Card was created to raise the standard of school health care, so that students receive health care including general medical examination, eye detection and oral health care. The card also provides a database and information describing the health situation, through modern and sophisticated ways to save health data for each student and ensure that it is not lost through Medicate school health card through the QR code on the card read through the Medicate app (phones) Smart where the medical file on line is reviewed and updated for each student easily.  \",', NULL, '2020-07-20 10:01:09', 'storage/uploads/1595240643.png'),
(5, 'التثقيف الصحي', 'Health Education', 'Éducation à la santé', 'يساعد التثقيف الصحي بشكل كبير على التعرف على المخاطر الصحية التي تؤثر على المجتمع والوقاية منها.', 'Health education greatly helps to recognize and prevent health risks that affect society.', 'L\'éducation à la santé aide considérablement à reconnaître et à prévenir les risques pour la santé qui affectent la société', 'كن على دراية بكافة الظروف المعيشية التي لها تأثير على صحتك.\r\n\r\nمع زيادة الوعي الصحي، بإمكانك اتخاذ الخطوات اللازمة لمنع المخاطر الصحية.', 'Be aware of all living conditions that have an impact on your health. \r\nWith electronic health record, which ensures high quality health care. You don\'t need to waste time finding your profile during an emergency.', 'Be aware of all living conditions that have an impact on your health. \r\nWith electronic health record, which ensures high quality health care. You don\'t need to waste time finding your profile during an emergency.', NULL, '2020-07-20 08:26:00', 'storage/uploads/1595240760.png'),
(6, 'نظام شبكة Medicate', 'eHR Services', 'eRH Services', 'يتكون نظام شبكة ميديكيت من المريض ومزودي الخدمات.', 'Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.', 'Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.', 'Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.', 'Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.', 'Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.', NULL, '2020-07-20 09:31:46', 'storage/uploads/1595244706.png'),
(7, 'الخدمات الإلكترونية', 'Network Ecosystem', 'Écosystème de réseau', 'مع السجل الصحي الإلكتروني ، الذي يضمن رعاية صحية بجودة عالية. لا يحتاج المرء إلى إضاعة الوقت في العثور على ملفه أثناء الطوارئ.', 'The Medicet network system consists of the following, patient and service providers.', 'Le système de réseau Medicate se compose des patients et des prestataires de services', 'كن جزءًا من نظام شبكة ميديكيت الشامل الذي يتبع نهجًا يرتكز على المريض. \r\nستمتع بحرية اختيار الطبيب والصيدلة والمصحة الطبية.\r\nالاستفادة من جميع مرافق الرعاية الصحية المطلوبة دون أي متاعب.', 'Be part of Medicet\'s comprehensive network system that follows a patient-centered approach.\r\nEnjoy the freedom to choose a doctor, pharmacy and medical clinic.\r\nTake advantage of all required healthcare facilities without any hassle.', 'Be part of Medicet\'s comprehensive network system that follows a patient-centered approach.\r\nEnjoy the freedom to choose a doctor, pharmacy and medical clinic.\r\nTake advantage of all required healthcare facilities without any hassle.', NULL, '2020-07-20 08:27:07', 'storage/uploads/1595240827.png'),
(8, 'تخفيضات على الخدمات', 'Discounts on Services', 'Réductions sur les services', 'قريبا.....', 'soon ......', 'Bientôt', 'قريبا.....', 'soon ......', 'Bientôt', NULL, '2020-07-21 06:37:04', 'storage/uploads/1595320624.png');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_fr` varchar(255) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name_ar`, `name_en`, `name_fr`, `img_path`) VALUES
(1, 'ليبيا', 'Libya', 'Libye', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/2000px-Flag_of_Libya.svg.png'),
(2, 'تركيا', 'Turkey', 'Turquie', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/280px-Flag_of_Turkey.svg.png'),
(3, 'تونس', 'Tunisia', 'Tunisie', 'https://lh3.googleusercontent.com/proxy/3cRRR6wuBQbn3CtSVPaYxL4Co1pMpKFCgRq4YZApwJgtdTIaewVeszrVxpTd6vEbN9fi5FN5GWIlhOzTZtxESbvU9CxirmxmFZbkqCzxUunNp7SMWABZhN3RH40lYvbFyzFD0zUbxaXN3Ww0o0WFIpM'),
(4, 'الجزائر', 'Algeria', 'Algérie', 'https://m.marefa.org/images/thumb/7/77/Flag_of_Algeria.svg/250px-Flag_of_Algeria.svg.png'),
(5, 'المانيا', 'Germany', 'Allemagne', 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg'),
(6, 'مصر', 'Egypt', 'Égypte', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/250px-Flag_of_Egypt.svg.png'),
(7, 'موريتانيا', 'Mauritania', 'Mauritanie', 'https://upload.wikimedia.org/wikipedia/commons/f/ff/%D8%B9%D9%84%D9%85_%D9%85%D9%88%D8%B1%D9%8A%D8%AA%D8%A7%D9%86%D9%8A%D8%A7_Mauritanian_flag.jpg'),
(8, 'بوركينافاسو', 'Burkina Faso', 'Burkina Faso', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Burkina_Faso.svg');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', NULL, NULL),
(2, 'Sunday', NULL, NULL),
(3, 'Monday', NULL, NULL),
(4, 'Tuesday', NULL, NULL),
(5, 'Wednesday', NULL, NULL),
(6, 'Thursday', NULL, NULL),
(7, 'Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diags`
--

CREATE TABLE `diags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `contactName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `address`, `area`, `phoneNo`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Alaa', 'ala96ala96@gmail.com', 'tripoli', 'tripoli', 123456789, 'tripoli', '2020-07-01 08:07:27', '2020-07-01 08:07:27'),
(2, 'Alaa', 'ala96ala96@gmail.com', 'tripoli', 'tripoli', 123456789, 'tripoli', '2020-07-01 08:07:27', '2020-07-01 08:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `description_fr` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `description_ar`, `description_en`, `description_fr`, `created_at`, `updated_at`) VALUES
(3, 'gedrfg', 'frrh', 'herher', '2020-08-16 12:00:09', '0000-00-00 00:00:00'),
(4, '<p>ergrghrehr5</p><ul><li>reregrgegeg</li><li>ergerger</li><li>ergergre</li></ul><p>gergergre<br></p>', '<p>ergrghrehr5</p><ul><li>reregrgegeg</li><li>ergerger</li><li>ergergre</li></ul><p>gergergre<br></p>', '<p>ergrghrehr5</p><ul><li>reregrgegeg</li><li>ergerger</li><li>ergergre</li></ul><p>gergergre<br></p>', '2020-08-17 07:42:44', '2020-08-17 05:42:44'),
(5, '<p>ergrghrehr5<br></p>', '<p>rhrehreh<br></p>', '<p>rhreherh<br></p>', '2020-08-16 10:05:55', '2020-08-16 10:05:55'),
(6, '<p>ergrghrehr5<br></p>', '<p>rhrehreh<br></p>', '<p>rhreherh<br></p>', '2020-08-16 10:06:01', '2020-08-16 10:06:01'),
(8, '<p>ergrghrehr5<br></p>', '<p>ergrghrehr5<br></p>', '<p>ergrghrehr5<br></p>', '2020-08-17 07:46:04', '0000-00-00 00:00:00'),
(9, '<p>ergrghrehr5<br></p>', 'عتمنهعمهعهم', '<p>ergrghrehr5<br></p>', '2020-08-17 07:49:35', '2020-08-17 05:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `description_ar` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `description_fr` varchar(255) NOT NULL,
  `tel` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `google_map` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `description_ar`, `description_en`, `description_fr`, `tel`, `fax`, `email`, `country_id`, `google_map`) VALUES
(1, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', 973, 973, 'ala', 1, NULL),
(2, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District ', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 2, NULL),
(3, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District ', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 3, NULL),
(4, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District ', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 4, NULL),
(5, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District ', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 5, NULL),
(6, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District ', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 6, NULL),
(7, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 7, NULL),
(8, ' برج العاصمة 13، المكتب رقم 131 و 132، المبنى 79، الطريق 2802، بلوك 428 منطقة السف ', ' Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District', ' Capital Plus Tower 13 étage, Bureau no 131 - 132, Bâtiment 79, Route 2802, Bloc 428 Al Seef District', NULL, NULL, NULL, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_11_185332_create_news_table', 1),
(4, '2020_06_13_115247_create_doctors_table', 1),
(5, '2020_06_18_073240_create_patients_table', 1),
(6, '2020_06_18_073436_create_services_table', 1),
(7, '2020_06_18_074104_create_appointment_statuses_table', 1),
(8, '2020_06_18_081000_create_clinics_table', 2),
(9, '2020_06_18_074412_create_days_table', 3),
(10, '2020_06_18_074218_create_appointment_availables_table', 4),
(11, '2020_06_18_103341_create_catogries_table', 5),
(12, '2020_07_01_012357_create_pharmacies_table', 6),
(13, '2020_06_18_074238_create_appointments_table', 7),
(14, '2020_06_18_130837_appointment_availabl_day', 7),
(15, '2020_07_01_081201_create_diags_table', 7),
(16, '2020_07_02_000723_create_service_companies_table', 8),
(18, '2020_07_02_074233_create_company_services_table', 9),
(19, '2020_07_05_093843_add_img_path_to_company_service', 10),
(20, '2020_07_06_104917_add_img_path_to_news', 11),
(21, '2020_08_05_134105_add_time_to_appointments', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titel_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `description_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `description_fr` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titel_ar`, `titel_en`, `titel_fr`, `description_ar`, `description_en`, `description_fr`, `created_at`, `updated_at`, `img_path`) VALUES
(1, 'تم اختياره من قبل مخطط Startup India Scheme من قبل حكومة الهند.', 'selected by Startup India Scheme by the Government of India.', 'sélectionné par Startup India Scheme par le gouvernement indien.', 'يسعدنا حرفيًا أن نكون جزءًا من برنامج Startup India Scheme الذي قدمته حكومة الهند. لقد أعطت حرفيا أجنحة لرواد الأعمال الشباب في جميع أنحاء البلاد.', 'We are literally delighted to be a part of the Startup India Scheme introduced by the Government of India. It has literally given wings to young entrepreneurs across the country.', 'Nous sommes littéralement ravis de faire partie du programme Startup India lancé par le gouvernement indien. Il a littéralement donné des ailes aux jeunes entrepreneurs de tout le pays.', '2020-07-05 10:06:30', '2020-07-07 06:00:31', 'storage/uploads/1594108831.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `width` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img_path`, `name`, `width`, `updated_at`, `created_at`) VALUES
(1, 'storage/uploads/1595316627.png', NULL, 60, '2020-07-23 07:21:57', '2020-07-21 05:30:27'),
(2, 'storage/uploads/1595316635.png', NULL, 86, '2020-07-23 07:22:34', '2020-07-21 05:30:35'),
(3, 'storage/uploads/1595316643.png', NULL, 86, '2020-07-23 07:23:00', '2020-07-21 05:30:43'),
(5, 'storage/uploads/1595316617.png', NULL, 70, '2020-07-23 07:23:22', '2020-07-21 05:30:17'),
(9, 'storage/uploads/1595493194.png', NULL, 45, '2020-07-23 07:23:45', '2020-07-23 06:33:14'),
(10, 'storage/uploads/1595493206.png', NULL, 55, '2020-07-23 07:24:11', '2020-07-23 06:33:26'),
(11, 'storage/uploads/1595493220.png', NULL, 55, '2020-07-23 07:24:34', '2020-07-23 06:33:40'),
(12, 'storage/uploads/1595493232.png', NULL, 61, '2020-07-23 07:25:05', '2020-07-23 06:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `file_id`, `created_at`, `updated_at`) VALUES
(1, 'موسي علي حامد', 923456789, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `contactName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `regCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'عظام', NULL, NULL),
(2, 'انف اذن حنجرة', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_companies`
--

CREATE TABLE `service_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titel_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titel_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrption_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_fr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_appointment_available_id_foreign` (`appointment_available_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_catogry_id_foreign` (`catogry_id`);

--
-- Indexes for table `appointment_availables`
--
ALTER TABLE `appointment_availables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_availables_clinic_id_foreign` (`clinic_id`),
  ADD KEY `appointment_availables_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointment_availables_service_id_foreign` (`service_id`);

--
-- Indexes for table `appointment_available_day`
--
ALTER TABLE `appointment_available_day`
  ADD KEY `appointment_available_day_appointment_available_id_foreign` (`appointment_available_id`),
  ADD KEY `appointment_available_day_day_id_foreign` (`day_id`);

--
-- Indexes for table `appointment_statuses`
--
ALTER TABLE `appointment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catogries`
--
ALTER TABLE `catogries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diags`
--
ALTER TABLE `diags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

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
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_companies`
--
ALTER TABLE `service_companies`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appointment_availables`
--
ALTER TABLE `appointment_availables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_statuses`
--
ALTER TABLE `appointment_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catogries`
--
ALTER TABLE `catogries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diags`
--
ALTER TABLE `diags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_companies`
--
ALTER TABLE `service_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_appointment_available_id_foreign` FOREIGN KEY (`appointment_available_id`) REFERENCES `appointment_availables` (`id`),
  ADD CONSTRAINT `appointments_catogry_id_foreign` FOREIGN KEY (`catogry_id`) REFERENCES `catogries` (`id`),
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `appointment_availables`
--
ALTER TABLE `appointment_availables`
  ADD CONSTRAINT `appointment_availables_clinic_id_foreign` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`id`),
  ADD CONSTRAINT `appointment_availables_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointment_availables_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `appointment_available_day`
--
ALTER TABLE `appointment_available_day`
  ADD CONSTRAINT `appointment_available_day_appointment_available_id_foreign` FOREIGN KEY (`appointment_available_id`) REFERENCES `appointment_availables` (`id`),
  ADD CONSTRAINT `appointment_available_day_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
