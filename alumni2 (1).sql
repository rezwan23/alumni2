-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 02:47 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni2`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `image`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Sample Title', '2019-04-22', 'sliders/1555934948.png', '<p>dsaf</p>', '2019-04-22 06:09:08', '2019-04-22 06:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image_id`, `created_at`, `updated_at`) VALUES
(8, 3, 6, NULL, NULL),
(9, 4, 6, NULL, NULL),
(10, 5, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ln` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `title`, `gp`, `ln`, `moto`, `phone`, `email`, `logo`, `address`, `map`, `fb`, `yt`, `created_at`, `updated_at`) VALUES
(1, 'Sample Title', '#', 'Rifat', 'Sample Moto', '1737603707', 'cc.razghani@gmail.com', 'NCMu9D3MyPVH7vEPsyv2mzEpbL02udjDNqLp7cjK.png', '152/2 Panthapath, Dhaka, Bangladesh', '#', '#', '#', '2019-04-04 23:03:02', '2019-04-04 23:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `batch`, `email`, `phone`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Rifat', 'adfa', 'cc.razghani@gmail.com', '1737603707', 'members/1556719725.jpg', 1, '2019-05-01 08:08:45', '2019-05-01 08:08:53');

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
(3, '2019_04_04_171314_add_photo_column_to_users_table', 2),
(5, '2019_04_05_042116_create_infos_table', 3),
(6, '2019_04_05_052406_create_pages_table', 4),
(8, '2019_04_22_062047_create_sliders_table', 5),
(9, '2019_04_22_104231_create_events_table', 6),
(10, '2019_04_22_112632_create_news_table', 7),
(11, '2019_04_28_152317_create_partners_table', 8),
(12, '2019_04_29_152634_create_photo_galleries_table', 9),
(13, '2019_04_29_153319_create_photo_gallery_images_table', 9),
(15, '2019_04_29_155118_create_gallery_images_table', 10),
(17, '2019_05_01_131936_create_members_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Sample Title', 'sliders/1555934990.png', '<p>dsfa</p>', '2019-04-22 06:09:50', '2019-04-22 06:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(3, 'About JUAA Alumni Association', 'about-juaa-alumni-association', '<p>With the initiative of some of the former students of Daffodil International University and subsequent consents of honorable Chairman, Board of Governors and Vice Chancellor of DIU an Ad hoc Committee was formed in a meeting of DIU Graduates (who were at employment at DIU) on September 7, 2008. The members of the Committee were selected among the Graduates of DIU who were serving as Faculty and Officers at this university. The main responsibility of the Committee was to hold a successful gala gathering of all the Graduates of DIU (the Graduates of the 1st and the 2nd Convocation) to launch the association forming an Executive Committee. All the preparatory works and documentations (including DIUAA Constitution) for forming an effective association have been done before that gathering. This Ad hoc Committee was discontinued just after the formation of Executive Committee of DIUAA on a selection session in the presence of all members of the association on that day of gathering.&nbsp;<br><br>The Association is dedicated to helping the students of DIU and the worthy members in this association with special projects and activities. Moreover, all the alumni, being under one umbrella, are working with DIU to assist the university in getting the apex of quality higher learning. This Association is for making a Quality Cycle- where an entry could make a man polished, a real touchstone. Simultaneously, it is for making a garden where all the daffodils will outdo the odds and maladies of the society in glee.<br><br>Daffodil International University held two successful Convocations and approximately 1,100 Graduates are working in their professional life and many of them holding important positions in a diverse category of organizations; many are pursuing their career abroad. The Daffodil International University Alumni Association will work to bring all the graduates under one community. We believe that this network of graduates will act as a strong platform to share upholding the noble objective to foster the professional and intellectual growth of DIU graduates. Moreover, its activities will include donations of various kinds, relief work during natural calamities, arranging fund-raising events, sustainable contributions to poverty alleviation such as providing trainings and micro scale capital to micro scale entrepreneurs etc. On doing these activities this Association will establish Unity, Compassion and Brotherhood among the graduates in a ground full of assistance and cooperation. It will work together for our betterment and for the betterment of the nation.</p>', '2019-05-01 08:11:41', '2019-05-01 08:22:40'),
(4, 'Terms and Conditions', 'terms-and-conditions', '<p>sample terms and conditions</p>', '2019-05-01 08:23:39', '2019-05-01 08:23:39'),
(5, 'Service', 'service', '<p>Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Daffodil Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Daffodil International University came into being on 24th January 2002, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement.</p>', '2019-05-01 08:25:11', '2019-05-01 08:25:11'),
(6, 'Survey on Job Market', 'survey-on-job-market', '<p>DIU management sincerely believes that Alumni are the important ambassadors of the University. YOU can make significant contributions to your beloved university in many areas. Founded in 2002, DIU endeavors to turn out graduates as high quality Human Resources for the country who are professionally sound and morally upright, equipped with state-of-the-art knowledge and technology know-how. With the Growth of your Career, your university will ultimately grow-up with your fame.</p><p>YOU would be pleased to know that DIU authority is going to conduct a research work of a survey of DIU Graduates in Job Market with the vision of increasing employability skills of outgoing Graduates to meet the upcoming challenges of the second decade of 21st century of world&nbsp;&nbsp; and mitigate gap between academia and real time industry requirement. By this survey, we could able to find out-</p><ul><li>Who are graduates\' employers?</li><li>How did grads find their jobs?</li><li>Where are grads continuing education?</li><li>What programs, degrees?</li><li>Who gave grads advice?</li><li>What experience — internships, volunteering, etc. — did grads have?</li><li>What do grads wish they\'d done differently?</li><li>We survey each grad regiment.</li></ul><p>Partnering with the said research work and by sharing your real-life experience, we believe that this initiative will add an immense value for creating the Future Leaders. In this regard, the Research Work Profile and respective Questioner/survey form are enclosed herewith for your kind review and oblige thereby.</p><p>As a part of the study, we are requesting you for your valuable time for the interview over phone/email and at your preferred location (if required). The bearer of the letter is also a DIU Graduateswho is trained to conduct interviews for this study. We assure you that the information provided by you would be kept strictly confidential and used for research purposes only.</p><p>If you have any further query regarding the study details and purpose behind the Interview, please feel free to contact us:</p><p>Prof. Muhammad Mahboob Ali, PhD<br>Department of Business Administration&nbsp;<br>Daffodil International University<br>4/2, Sobhanbag Campus, Daffodil Tower-5(Level-6)</p><p>Mirpur Road, Dhanmondi, Dhaka-1207<br>Bangladesh. Tel: 880 2 8130864,8129177 Ext:307, Cell: 01753599422,01911394704<br>e-mail: <a href=\"mailto:mahboob@diu.edu.bd\">mahboob@diu.edu.bd</a></p><p>We wish continued success in the chosen careers of our Alumni and hope that will keep in touch with university and support the development in the years to come.</p><p><strong>For further Information about DIUAA :</strong></p><p>Md. Sahin Khan<br>Assistant Officer,<br><a href=\"http://www.daffodilvarsity.edu.bd/\">Daffodil International University (DIU)&nbsp;</a><br>&amp;&nbsp;<br><a href=\"http://www.alumni.daffodilvarsity.edu.bd/\">DIUAlumniAssociation (DIUAA)</a><br>102/1, Sukrabad, Mirpur Road, Dhanmondi, Dhaka-1207<br>Cell: 01811458859, 01674948187,<br>Telephone: +88029138234-5 (Ext: 201)<br>Web:<a href=\"http://www.daffodilvarsity.edu.bd/\">www.daffodilvarsity.edu.bd</a></p>', '2019-05-01 08:26:10', '2019-05-01 08:26:34'),
(7, 'Types of Membership', 'types-of-membership', '<p>a) General Membership: General Membership would be stipulated for the Alumni are defined merely in the section 4 (b).</p><p>b) Life-time Membership: Life-time Membership would be stipulated for the Alumni are defined merely in the section 4 (b).</p><p>c) Honorary Membership: The Executive Committee could provide the Honorary membership to those renowned Non-Alumni and/or donors who can be helpful to enhance the dignity and benefit of the Association as per demand. But they will have no right to cast vote or participate in any election.</p>', '2019-05-01 08:28:37', '2019-05-01 08:28:37'),
(8, 'Registration Fee', 'registration-fee', '<p>Registration fee of Tk. 200/= (Tk. Two Hundred only) as subscription payable for one year has to be paid with application for new general member. Tk 5000/= (Tk. Five Thousand only) have to be deposited for life membership. If any general member is unable to pay the yearly subscription within December, will be considered ineligible to enjoy the facilities of a member what so ever. But a general member can be migrated on the basis of payment of subscription payable fixed for the present year; the re-entry fee is Tk. 200/= (Tk. Two hundred only).</p>', '2019-05-01 08:29:11', '2019-05-01 08:29:11'),
(9, 'Rules Inclusions of Member', 'rules-inclusions-of-member', '<p>Any Alumni of Daffodil International University is eligible to apply for membership in a specified application form addressed to the Secretary General by paying fixed fee with the intimation of full confidence to the clauses and rules of the constitution of the Association and the applicant will be treated as a member of the Association subject to the approval of his application by the Executive Committee. There is a condition that the right is preserved to the Executive Committee to accept or reject any application.</p>', '2019-05-01 08:30:30', '2019-05-01 08:30:30'),
(10, 'Members Rights and Benifits', 'members-rights-and-benifits', '<p>a. To attend the general meeting, participate in the discussion and submit proposal.<br>b. To claim the explanations of activities of the Executive Committee as per rules and regulations and also to ask for the accounts of income &amp; expenditure.&nbsp;<br>c. To participate in the election of the Executive Committee.<br>d. To put forth the vote.&nbsp;<br>e. To be involved with any delegate team of the Association.&nbsp;<br>f. To advise for the interest of development of the Association or act in the Election Commission.</p>', '2019-05-01 08:31:56', '2019-05-01 08:31:56'),
(11, 'Expulsion', 'expulsion', '<p>If any member is alleged with misdeed subversive to the Association or Constitution or against its ethics and/or objectives, s/he will have to face the music. After raising specific complaint in this regard, his/her membership would temporarily be withheld and after appropriate evidence proving the complaint, s/he would be expelled from the organization.</p>', '2019-05-01 08:33:02', '2019-05-01 08:33:02'),
(12, 'Reinstatement of Membership', 'reinstatement-of-membership', '<p>In the cases of those members whose membership were cancelled, can be reinstated to the prior position following their applications and fulfillment of the conditions of section 10. In the cases of vacancy due to resignation/ release/ no-confidence/ expulsion/ termination/ death or other causes of any Officer/ Member of Executive Committee, could be filled up to keep organizational activities in smooth action.</p>', '2019-05-01 08:34:06', '2019-05-01 08:34:06'),
(13, 'Rules of inclusion of member', 'rules-of-inclusion-of-member', '<p>Any Alumni of Daffodil International University is eligible to apply for membership in a specified application form addressed to the Secretary General by paying fixed fee with the intimation of full confidence to the clauses and rules of the constitution of the Association and the applicant will be treated as a member of the Association subject to the approval of his application by the Executive Committee. There is a condition that the right is preserved to the Executive Committee to accept or reject any application.</p>', '2019-05-01 08:34:47', '2019-05-01 08:34:47'),
(14, 'Job Tracking & Career', 'job-tracking-career', '<p>&gt;&gt;&gt;Job Tracking<br>&gt;&gt;&gt; Job Post to DIU CDC:<br>&gt;&gt;&gt; Career Guideline&nbsp;<br>&gt;&gt;&gt; Career Development</p><p>JobsBD.com is the placement solution partner of Daffodil Int. University &amp; Association. The recent Jobs news can find from JobsBD. Visit the site &amp; Apps.</p><ul><li>Jobsbd.com</li><li>Download JobsBD Apps for Job News Alert</li></ul><p><strong>Job Post to DIU CDC:</strong><br>Alumni &amp; Alumni Networks can post their jobs at DIU CDC to recruit DIU fresh graduates &amp; experienced alumni.&nbsp;<br>Click to post Jobs at CDC&nbsp;&nbsp; (Integrate the CDC Recruitment Site)</p><p><strong>Guideline:</strong></p><ul><li>(Tips from CDC)</li></ul><p><strong>Career Development</strong><br><strong>In association with JobsBD &amp; CDC, DIUAA provides the career development supports through the following resources</strong></p><ul><li>Training</li><li>Employability 360’</li><li>Employability Assessment</li></ul>', '2019-05-01 08:36:38', '2019-05-01 08:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'dsaa', 'sliders/1556466784.jpg', '2019-04-28 09:50:21', '2019-04-28 09:53:04');

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
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Ghani Razwanul', 'ghani-razwanul', '2019-04-29 10:27:00', '2019-04-29 10:27:00'),
(4, 'Rezwan Rifat', 'rezwan-rifat', '2019-04-29 10:27:04', '2019-04-29 10:27:04'),
(5, 'Batterybytee', 'batterybytee', '2019-04-29 10:27:08', '2019-04-29 10:27:08'),
(6, 'Class 12', 'class-12', '2019-04-29 10:27:17', '2019-04-29 10:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery_images`
--

CREATE TABLE `photo_gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_gallery_images`
--

INSERT INTO `photo_gallery_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(6, 'galleries/1556721700.jpg', '2019-05-01 08:41:40', '2019-05-01 08:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `content`, `link`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Slider image 2', 'sliders/1556115803.jpg', 'Sample Content', '#', 1, '2019-04-22 00:38:10', '2019-04-24 08:23:23'),
(2, 'Sample Titlee', 'sliders/1556115853.jpg', NULL, '#', 2, '2019-04-24 08:24:13', '2019-04-24 08:24:13');

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
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'Rezwan Rifat', 'admin@gmail.com', NULL, '$2y$10$WPbyMMpqrlW.LiECRLSnhO/aUbHs7uWzreToppqjvCs0NfF0knU7C', NULL, '2019-04-04 11:09:50', '2019-04-04 23:23:09', 'EGkeUr07HnoicSmWYDwL3CivWgWuQZMVh172aizF.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`),
  ADD KEY `gallery_images_image_id_foreign` (`image_id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery_images`
--
ALTER TABLE `photo_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo_gallery_images`
--
ALTER TABLE `photo_gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `photo_galleries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gallery_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `photo_gallery_images` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
