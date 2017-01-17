-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Mar 17 Janvier 2017 à 15:58
-- Version du serveur: 10.1.18-MariaDB-cll-lve
-- Version de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zespeng2_esp`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `english_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vietnam_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `english_name`, `vietnam_name`) VALUES
(3, 'Home', 'Trang chủ'),
(4, 'Introduce', 'Giới thiệu'),
(5, 'ESP ENGLISH', 'ESP ENGLISH'),
(6, 'Teachers', 'Đội ngũ giảng viên'),
(7, 'News&events', 'Tin tức&sự kiện'),
(13, 'Study ciriculum', 'Chương trình học'),
(14, ' Technical English', 'Tiếng anh chuyên ngành'),
(15, 'English communication', 'Tiếng anh giao tiếp'),
(16, 'English for children', 'Tiếng anh trẻ em'),
(17, 'College exam', 'Ôn thi đại học'),
(18, 'Interactive student', 'Tương tác học viên'),
(19, 'Contacts us', 'Liên hệ');

-- --------------------------------------------------------

--
-- Structure de la table `chuyen_nganh`
--

CREATE TABLE IF NOT EXISTS `chuyen_nganh` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vn` longtext COLLATE utf8_unicode_ci NOT NULL,
  `eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `chuyen_nganh`
--

INSERT INTO `chuyen_nganh` (`id`, `vn`, `eng`) VALUES
(1, 'Tiếng Anh chuyên ngành – English for Specific Purposes', 'ESP - English for Specific Purposes'),
(2, 'Để học tiếng Anh chuyên ngành hiệu quả, bạn cần phải kết hợp tiếng Anh giao tiếp và từ vựng tiếng Anh phù hợp với chuyên ngành của mình. ESP English sẽ giúp bạn cải thiện tối đa vốn từ vựng đã có và nâng cao vốn từ vựng chuyên ngành thông qua khóa học tiếng Anh chuyên ngành. Đến ESP English bạn sẽ nhận được:', 'In order to study English for Specific Purposes effectively, you need to combine both communication English and suitable ESP vocabulary. ESP English will help you to improve and enrich your English for Specific Purposes vocabulary during the course. When studying at ESP English, you will get:'),
(3, 'Giao tiếp tiếng Anh 100% với giáo viên nước ngoài: Bạn sẽ được học tập, giao tiếp với giáo viên nước ngoài để tăng cường khả năng giao tiếp và kĩ năng tiếng Anh tốt nhất. ', 'Communicate English with 100% foreign teachers. You will study and communicate with native speakers to enhance your communicating skills and abilities at best.'),
(4, 'Từ vựng tiếng Anh chuyên ngành: Cùng với phát triển kĩ năng giao tiếp 100% bằng tiếng Anh, ESP English sẽ cung cấp cho các bạn vốn từ vựng phù hợp với chuyên ngành của mình. Mỗi chuyên ngành bạn sẽ được trau dồi từ vựng, thực hành giao tiếp tình huống thực tế, có tính ứng dụng cao trong công việc cùng với đội ngũ trợ giảng và giáo viên bản ngữ có nhiều kinh nghiệm. Bạn có thể lựa chọn trong 8 khóa học tiếng Anh chuyên ngành tại ESP English khóa học phù hợp với chuyên ngành của mình.', 'ESP Vocabulary: As well as communicating skills in 100% English, ESP English will provide a great amount of vocabulary which is suitable for your specific major. Each major, you will enrich vocabulary, practice in real situations applying in your future career together with a large number of teacher assistants as well as experienced native teachers. Learners can choose from 8 ESP courses at ESP English which is appropriate to the major.'),
(5, 'Luyện phát âm chuẩn: Khi học với giáo viên bản ngữ, bạn sẽ học được cách phát âm chuẩn và cách dùng từ chính xác với tình huống. Giáo viên sẽ giúp bạn cải thiện kĩ năng phát âm và nghe nói trong thời gian ngắn nhất.', 'Correct pronunciation: When learning with foreign teachers, you will know how to pronounce correctly and use of English exactly. Experienced teachers will help you to improve your pronunciation and intonation abilities in the shortest amount of time.'),
(6, 'Kinh tế', 'Economy'),
(7, 'Quan hệ quốc tế', 'International relationship'),
(8, 'Y dược', 'Pharmacy'),
(9, 'Ngành xây dựng', 'Construction industry'),
(10, 'Ngành du lịch', 'Tourism'),
(11, 'Ngành điện', 'Power industry'),
(12, 'Luật', 'Law'),
(13, 'Công nghệ thông tin', 'Information technology');

-- --------------------------------------------------------

--
-- Structure de la table `comment_eng`
--

CREATE TABLE IF NOT EXISTS `comment_eng` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `comment_eng`
--

INSERT INTO `comment_eng` (`id`, `name`, `job`, `comment`) VALUES
(1, 'Do Van Thong', 'Engineer - 33 years old', 'After studying 2 Communication English courses at ESP English, I am more confident in speaking English, especially communicating in the workplace. ESP English has helped me a lot in my study and my work.'),
(2, 'Phan Thi Hoai', 'Student at Academy of Finance', 'I have been studied in many English centers but until studying at ESP English I can master my English skills and enrich my vocabulary. I love all foreign teachers and tutors at ESP English who can help me with my grammar mistakes and speaking weaknesses. At present, I am absolutely confident in my English speaking as well as TOEIC 800. Thank you so much, ESP English!'),
(3, 'Chu Van Quang', 'FLC Engineer', 'Excellent course book, suitable for applying in practical situations. Teachers are all experienced and knowledgeable. At present, I am more confident in my English communication. Teachers and tutors are always listening to learners’ comments and requirements'),
(4, 'Nguyen Minh Hieu', 'Students at Hanoi Industry University', 'I am the second year students in English Department at Hanoi Industry University. When I started learning English at University, It was my nightmare when I had to study and speak in all English. I was one of the worst students in my class. Fortunately, after 3 courses at ESP English, I am more confident in using English and I can self-study and enrich my English day by day. I hope ESP English can help many people like me who can master their English in short time.');

-- --------------------------------------------------------

--
-- Structure de la table `comment_vn`
--

CREATE TABLE IF NOT EXISTS `comment_vn` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `comment_vn`
--

INSERT INTO `comment_vn` (`id`, `name`, `job`, `comment`) VALUES
(1, 'Đỗ Văn Thông', 'Kỹ sư trưởng - 33 tuổi', 'Sau 2 khóa học tiếng Anh giao tiếp tại trung tâm ESP English, tôi đã tự tin hơn trong giao tiếp tiếng Anh, đặc biệt là sử dụng tiếng Anh tốt hơn trong công việc. ESP English đã giúp đỡ tôi rất nhiều trong việc học tập và trong công việc '),
(2, 'Phan Thị Hoài', 'Sinh viên học viện Tài Chính', 'Tôi đã tìm và học ở rất nhiều trung tâm khác nhau với mong muốn sử dụng thành thạo tiếng Anh, nhưng chỉ đến khi tôi học tại ESP English, tôi mới có thể làm chủ khả năng tiếng Anh của mình và tang vốn từ vựng nghèo nàn của mình. Tôi rất thích các thầy cô người nước ngoài và các bạn trợ giảng tại ESP English, họ đã giúp tôi rất nhiều với các lỗi ngữ pháp và điểm yếu trong nghe nói tiếng Anh. Hiện tại, tôi rất tự tin với khả năng tiếng Anh của mình cùng với chứng chỉ TOEIC 800. Cảm ơn ESP English rất nhiều!'),
(3, 'Chu Văn Quang', 'Kiến trúc sư', 'Giáo trình rất hay, phù hợp để có thể ứng dụng ngay vào thực tế công việc. Trình độ giáo viên và cách truyền đạt kiến thức tốt. Tôi cảm thấy tự tin hơn rất nhiều với khả năng giao tiếp tiếng Anh của mình (đây là cảm nhận chung của mọi người trong lớp). Giáo viên thật tâm lý khi chịu khó lắng nghe mọi học viên.'),
(4, 'Nguyễn Minh Hiếu', 'Sinh viên ĐH Công Nghiệp', 'Tôi đang là sinh viên khoa tiếng Anh tại trường Đại học công nghiệp Hà Nội. Khi bắt đầu học tiếng Anh, tôi là một trong những học sinh đứng cuối lớp vì tiếng Anh nghe nói quá kém cộng với giọng địa phương làm tôi không thể phát âm cũng như giao tiếp đúng và chuẩn được. Vậy mà chỉ sau 3 khóa tại ESP English, tôi đã có thể tự học, tự nghe bằng tiếng Anh, giao tiếp với giáo viên và các bạn trên lớp hoàn toàn bằng tiếng Anh. Tôi hi vọng ESP English sẽ giúp được nhiều người bị mất gốc như tôi.');

-- --------------------------------------------------------

--
-- Structure de la table `comunicate`
--

CREATE TABLE IF NOT EXISTS `comunicate` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `comunicate`
--

INSERT INTO `comunicate` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', '<p>Tieengs ANh</p>\r\n', '2016-04-25', '2016-04-25'),
(2, 'Pre – intermediate', '<p><img alt="" src="/public/template/kcfinder/upload/images/mua-lon-ha-noi-pho-cung-nhu-song-69-081036.jpg" style="height:500px; width:760px" /></p>\r\n', '2016-04-25', '2016-05-27'),
(3, 'Intermediate', '<p>TIẾNG VIỆT</p>\r\n', '2016-04-25', '2016-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `comunicate_eng`
--

CREATE TABLE IF NOT EXISTS `comunicate_eng` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `comunicate_eng`
--

INSERT INTO `comunicate_eng` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', '<p>Tieng Viet</p>\r\n', '2016-04-25', '2016-04-25'),
(2, 'Pre – intermediate', '<p><img alt="" src="/public/template/kcfinder/upload/images/mua-lon-ha-noi-pho-cung-nhu-song-69-081036.jpg" style="height:500px; width:760px" /></p>\r\n', '2016-04-25', '2016-05-27'),
(3, 'Intermediate', '<p>TIẾNG Anh</p>\r\n', '2016-04-25', '2016-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `vn`, `eng`) VALUES
(1, 'Địa chỉ', 'Address'),
(2, 'Điện thoại', 'Phone Number'),
(8, 'Số 27, Ngõ 2, Đường Trần Cung, Phường Cổ Nhuế, Hà Nội', 'No 27, Alley 2, Tran Cung Street, Hanoi'),
(4, 'Họ tên', 'Full name'),
(5, 'Email', 'Email'),
(6, 'Nghề nghiệp', 'Job'),
(7, 'Năm sinh', 'Year of Birthday'),
(9, 'Đăng ký học thử miễn phí', 'REGISTER A FREE TRIAL LESSON'),
(10, 'ĐĂNG KÝ', 'REGISTER');

-- --------------------------------------------------------

--
-- Structure de la table `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vietnam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle_english` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tittle_vietnam` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `giao_tiep`
--

CREATE TABLE IF NOT EXISTS `giao_tiep` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vn` longtext COLLATE utf8_unicode_ci NOT NULL,
  `eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `giao_tiep`
--

INSERT INTO `giao_tiep` (`id`, `vn`, `eng`) VALUES
(1, 'Tiếng Anh giao tiếp –THINK, SPEAK AND PRACTICE IN ENGLISH', 'Communication English –THINK, SPEAK AND PRACTICE IN ENGLISH'),
(2, 'Tự tin sử dụng tiếng Anh giúp bạn nâng cao chất lượng cuộc sống. Tiếng Anh giúp bạn cải thiện giao tiếp xã hội, nâng cao cơ hội nghề nghiệp cũng như hiểu và tận dụng được nguồn thông tin đa dạng trên mạng.', 'Being confident in using English can help you to enhance the quality of life. English assists you to improve your social communication, increase your career opportunity as well as understand and make full use of diverse Internet information.'),
(5, 'Sau khi hoàn thành khóa học, học viên có thể:', 'After completing the course, learners can:'),
(6, 'Cải thiện 4 kĩ năng: nghe, nói, đọc, viết', 'Improve 4 skills: Listening, Speaking, Reading and Writing'),
(4, 'Nơi hội tụ các chuyên gia tiếng Anh toàn cầu, ESP English sẽ giúp các bạn tự tin hơn với các kĩ năng giao tiếp nghe, nói, đọc viết. Các khóa học của chúng tôi rất đa dạng, phù hợp với học viên từ trình độ khởi đầu đến trình độ nâng cao, giáo viên bản ngữ sẽ giúp các bạn sử dụng tiếng Anh tốt nhất có thể.', 'Processing a large number of global English experts, ESP English will help you tom be more confident and more fluent with Listening, Speaking, Reading and Writing skills. Our English courses are extremely diverse and suitable for all levels of students from beginner to advanced. Moreover, native English teacher will help you to use English at your best level in shortest length of time.');

-- --------------------------------------------------------

--
-- Structure de la table `introduce`
--

CREATE TABLE IF NOT EXISTS `introduce` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vn` longtext COLLATE utf8_unicode_ci NOT NULL,
  `eng` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `introduce`
--

INSERT INTO `introduce` (`id`, `vn`, `eng`) VALUES
(8, 'Tiếng Anh giao tiếp – Communication English với 3 chương trình học chuyên biệt, đào tạo theo khung tham chiếu chuẩn Châu Âu CEFR.', 'Communication English with 3 specified learning programs and the training programs based on CEFR - The Common European Framework of Reference for Languages.'),
(9, 'Ôn thi đại học – đảm bảo học viên sẽ đạt số điểm mong muốn, cải thiện ngữ pháp tiếng Anh bị mất tại trường học.', 'Practical English program – Unlimited learning– Efficient Benefits – Long-life Commitment – Reasonable cost.'),
(4, 'ESP English xây dựng với mong muốn là một trong những tổ chức giáo dục hàng đầu tại Việt Nam trong việc đào tạo tiếng Anh chuyên ngành và tiếng Anh giao tiếp với sự kết hợp giảng dạy của 100 % giảng viên nước ngoài có chứng chỉ, bằng cấp sư phạm quốc tế và kinh nghiệm giảng dạy lâu năm. ', 'ESP English is established with passion to become one of the top echelon of  English Training in Vietnam which focuses on ESP – English for Specific Purposes and Communication English. ESP English processes a great number of experienced native teachers with TESOL and CELTA Certificates who can help students boost their English skills at highest level.'),
(5, 'Chương trình đào tạo tại ESP English', 'Training Programs at ESP English'),
(6, 'Hệ thống chương trình đào tạo tại ESP English được xây dựng nhằm đáp ứng nhu cầu đào tạo toàn diện từ nền tảng đến chuyên sâu', 'Training Programs system at ESP English is built to satisfy training and learning needs from beginner to advanced'),
(7, 'Tiếng Anh chuyên ngành - ESP English với 8 chuyên ngành đa dạng, chuyên biệt đào tạo từ cơ bản đến nâng cao phù hợp với nhu cầu thực tiễn của người học. Thêm vào đó, học viên được học với giáo viên nước ngoài sẽ nâng cao khả năng  ngôn ngữ và phát triển kĩ năng giao tiếp tốt nhất.', 'ESP – English for Specific Purposes consists of 8 specific purposes, specialized in training from beginner to advanced which is suitable for practical demands of learners. In addition, learners will have wonderful opportunity to study with foreign teachers which can help them enhance their English language skills and communication skills at best. '),
(10, 'Chương trình học Practical English – Học không giới hạn – Hiệu quả tối đa – Cam kết đầu ra – Chi phí hợp lý.', 'Beyond your limits');

-- --------------------------------------------------------

--
-- Structure de la table `list_chuyen_nganh`
--

CREATE TABLE IF NOT EXISTS `list_chuyen_nganh` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `list_chuyen_nganh`
--

INSERT INTO `list_chuyen_nganh` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tiếng Anh kinh tế', '<p>B&agrave;i 1: WORK AND JOBS</p>\r\n\r\n<p><img alt="" src="/public/template/kcfinder/upload/images/1%281%29.jpg" style="height:637px; width:1101px" /></p>\r\n\r\n<p><strong>A. What you do/&nbsp;What is your job/ career/ profession/ occupation?: Bạn l&agrave;m nghề g&igrave;?</strong></p>\r\n\r\n<p>1.&nbsp;<strong>I&#39;m a / an</strong>&nbsp;(+ job): T&ocirc;i l&agrave; một + nghề nghiệp<br />\r\ne.g. a nurse / an accountant / a builder</p>\r\n\r\n<p>2.&nbsp;<strong>I&nbsp;work in</strong>&nbsp;(+ place or general area): T&ocirc;i l&agrave;m tại + nơi chốn<br />\r\ne.g. a hospital / an office marketing / social</p>\r\n\r\n<p>3.&nbsp;<strong>I&nbsp;work for</strong>&nbsp;(+ name / place of the company): T&ocirc;i l&agrave;m cho + t&ecirc;n c&ocirc;ng ty/ tổ chức<br />\r\ne.g. Union Bank / IBM / Fiat / an international bank</p>\r\n\r\n<p><strong>B. What your job involves: C&ocirc;ng việc của bạn bao gồm những g&igrave;?</strong></p>\r\n\r\n<p>4.&nbsp;<strong>I&#39;m&nbsp;in charge of: T&ocirc;i chịu tr&aacute;ch nhiệm...................</strong><br />\r\ne.g. a big company</p>\r\n\r\n<p>5.&nbsp;<strong>I&#39;m responsible for:&nbsp;T&ocirc;i chịu tr&aacute;ch nhiệm....................</strong><br />\r\ne.g. some workers in that department</p>\r\n\r\n<p>6.&nbsp;<strong>I have to&nbsp;deal with: T&ocirc;i phải giải quyết với.............</strong><br />\r\ne.g. any complaints / overseas clients, mainly</p>\r\n\r\n<p>7.&nbsp;<strong>I&nbsp;run: T&ocirc;i điều h&agrave;nh ...............</strong><br />\r\ne.g. the company / a restaurant</p>\r\n\r\n<p>8.&nbsp;<strong>I&nbsp;manage: T&ocirc;i quản l&yacute;</strong><br />\r\ne.g. a shop in downtown</p>\r\n\r\n<p><img alt="" src="/public/template/kcfinder/upload/images/2%281%29.jpg" style="height:549px; width:1040px" /><img alt="" src="/public/template/kcfinder/upload/images/3.jpg" style="height:233px; width:1064px" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Written by: Xuan Nguyen_ ESP English</p>\r\n', NULL, '2016-06-13'),
(2, 'Tiếng Anh ngành quan hệ quốc tế', '<h1><img alt="" src="/public/template/kcfinder/upload/images/2.jpg" style="height:327px; width:925px" /></h1>\r\n', NULL, '2016-05-28'),
(3, 'Tiếng Anh y dược', '', NULL, '2016-06-08'),
(4, 'Tiếng Anh ngành xây dựng', '', NULL, NULL),
(5, 'Tiếng Anh du lịch', '', NULL, NULL),
(6, 'Tiếng anh ngành điện', '', NULL, NULL),
(7, 'Tiếng anh ngành luật', '', NULL, NULL),
(8, 'Tiếng Anh công nghệ thông tin', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `list_chuyen_nganh_eng`
--

CREATE TABLE IF NOT EXISTS `list_chuyen_nganh_eng` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `list_chuyen_nganh_eng`
--

INSERT INTO `list_chuyen_nganh_eng` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Economy', '<p><img alt="" src="/public/template/kcfinder/upload/images/1%282%29.jpg" style="height:637px; width:1101px" /><img alt="" src="/public/template/kcfinder/upload/images/2%282%29.jpg" style="height:549px; width:1040px" /><img alt="" src="/public/template/kcfinder/upload/images/3%282%29.jpg" style="height:233px; width:1064px" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Written by: Xuan Nguyen_ ESP English</p>\r\n', NULL, '2016-06-13'),
(2, 'International relationship', '<h1><img alt="" src="/public/template/kcfinder/upload/images/2.jpg" style="height:327px; width:925px" />​​​​​​​</h1>\r\n', NULL, '2016-05-28'),
(3, 'Pharmacy', '', NULL, '2016-06-08'),
(4, 'Construction industry', '', NULL, NULL),
(5, 'Tourism', '', NULL, NULL),
(6, 'Power industry', '', NULL, NULL),
(7, 'Law', '', NULL, NULL),
(8, 'Information technology', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `list_tips`
--

CREATE TABLE IF NOT EXISTS `list_tips` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tip_id` int(255) NOT NULL,
  `tittle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `list_tips`
--

INSERT INTO `list_tips` (`id`, `tip_id`, `tittle`, `content`, `created_at`, `updated_at`) VALUES
(16, 4, 'Danh từ số nhiều trong tiếng Anh (Part 1)', '<p><img alt="" src="/public/template/kcfinder/upload/images/1.plural%283%29.jpg" style="height:416px; width:872px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-06-13', '2016-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `vn`, `eng`) VALUES
(1, 'Trang chủ', 'Home'),
(2, 'Giới thiệu', 'Introduction'),
(3, '	\r\nESP ENGLISH', '	\r\nESP ENGLISH'),
(4, 'Đội ngũ giảng viên', 'Teachers'),
(5, 'Tin tức&sự kiện', 'News&events'),
(6, 'Chương trình học', 'Learning Programs'),
(7, 'Tiếng anh chuyên ngành', 'English for specific purposes'),
(8, 'Tiếng anh giao tiếp', 'Communication English'),
(9, 'Tiếng anh trẻ em', 'English for children'),
(10, 'Ôn thi đại học', 'University entrance exam'),
(11, 'Tương tác học viên', 'English Tips'),
(12, 'Liên hệ', 'Contacts us'),
(13, 'Liên kết', 'Link to page'),
(14, 'Cảm nhận của học viên', 'Students’ comments');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `english` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vietnam` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tittle_english` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tittle_vietnam` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `accept` int(10) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `english`, `vietnam`, `tittle_english`, `tittle_vietnam`, `img`, `accept`, `updated_at`, `created_at`) VALUES
(31, '', '<p>asdsadsd</p>\r\n', '', 'asdsdasd', 'anh1.png', 1, '2016-04-19', '2016-04-19'),
(32, '', '', '', 'adasdasdsa', 'anh2.png', 0, '2016-04-19', '2016-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `news_english`
--

CREATE TABLE IF NOT EXISTS `news_english` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `news_english`
--

INSERT INTO `news_english` (`id`, `img`, `tittle`, `content`, `created_at`, `updated_at`) VALUES
(4, 'hoc-tieng-anh-cho-nguoi-moi-bat-dau.jpg', 'ESP ENGLISH THÁI BÌNH ĐẶT BOOTH TƯ VẤN TẠI CÁC TRƯỜNG', '<p><strong>Từ 1/4/2016-20/4/2016 ESP ENGLISH Th&aacute;i B&igrave;nh đ&atilde; triển khai chạy booth, đặt b&agrave;n tư vấn v&agrave; tổ chức bốc thăm tr&uacute;ng thưởng tại c&aacute;c trường tại địa b&agrave;n th&agrave;nh phố.</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Để quảng b&aacute; <strong>ESP ENGLISH</strong> đến nhiều đối tượng v&agrave; rộng khắp địa b&agrave;n Th&aacute;i B&igrave;nh, gi&uacute;p&nbsp;phụ huynh v&agrave; c&aacute;c em c&oacute; cơ hội hiểu th&ecirc;m về c&aacute;c chương tr&igrave;nh học cũng như những chương tr&igrave;nh ưu đ&atilde;i v&agrave; nhiều lợi &iacute;ch kh&aacute;c m&agrave;&nbsp;<strong>ESP ENGLISH&nbsp;</strong>Th&aacute;i B&igrave;nh&nbsp;mang lại cho qu&yacute; phụ huynh v&agrave; c&aacute;c em học sinh. Trong đầu th&aacute;ng 4 <strong>ESP ENGLISH</strong> đ&atilde; tiến h&agrave;nh đặt b&agrave;n tư vấn tuyển sinh trong nhiều trường v&agrave; ở c&aacute;c cấp độ kh&aacute;c nhau: MN Hoa Phượng, MN IKIDS,Tiểu học Ph&uacute; Xu&acirc;n, THCS Vũ Hội, THPT Chuy&ecirc;n. Tại đ&acirc;y <strong>ESP ENGLISH</strong> Th&aacute;i B&igrave;nh&nbsp;đ&atilde; tư vấn đầy đủ c&aacute;c kh&oacute;a học ph&ugrave; hợp cho từng đối tượng như phụ huynh c&oacute; quan t&acirc;m hoặc đang c&oacute; nhu cầu cho con em m&igrave;nh đi học anh văn tại&nbsp;<strong>ESP ENGLISH</strong>, ngo&agrave;i ra c&ograve;n diễn ra hoạt động bốc thăm tr&uacute;ng thưởng đ&atilde; thu h&uacute;t h&agrave;ng trăm em học sinh tham gia. C&aacute;c em học sinh rất&nbsp;h&agrave;o hứng, hứng khởi tham gia v&agrave;o c&aacute;c chương tr&igrave;nh do <strong>ESP ENGLISH</strong> Th&aacute;i B&igrave;nh tổ chức&nbsp;.&nbsp;</p>\r\n', '2016-04-21', '2016-04-21');

-- --------------------------------------------------------

--
-- Structure de la table `news_vn`
--

CREATE TABLE IF NOT EXISTS `news_vn` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `news_vn`
--

INSERT INTO `news_vn` (`id`, `img`, `tittle`, `content`, `created_at`, `updated_at`) VALUES
(4, 'hoc-tieng-anh-cho-nguoi-moi-bat-dau.jpg', 'ESP ENGLISH THÁI BÌNH ĐẶT BOOTH TƯ VẤN TẠI CÁC TRƯỜNG', '<p><strong>Từ 1/4/2016-20/4/2016 ESP ENGLISH Th&aacute;i B&igrave;nh đ&atilde; triển khai chạy booth, đặt b&agrave;n tư vấn v&agrave; tổ chức bốc thăm tr&uacute;ng thưởng tại c&aacute;c trường tại địa b&agrave;n th&agrave;nh phố.</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Để quảng b&aacute; <strong>ESP ENGLISH</strong> đến nhiều đối tượng v&agrave; rộng khắp địa b&agrave;n Th&aacute;i B&igrave;nh, gi&uacute;p&nbsp;phụ huynh v&agrave; c&aacute;c em c&oacute; cơ hội hiểu th&ecirc;m về c&aacute;c chương tr&igrave;nh học cũng như những chương tr&igrave;nh ưu đ&atilde;i v&agrave; nhiều lợi &iacute;ch kh&aacute;c m&agrave;&nbsp;<strong>ESP ENGLISH&nbsp;</strong>Th&aacute;i B&igrave;nh&nbsp;mang lại cho qu&yacute; phụ huynh v&agrave; c&aacute;c em học sinh. Trong đầu th&aacute;ng 4 <strong>ESP ENGLISH</strong> đ&atilde; tiến h&agrave;nh đặt b&agrave;n tư vấn tuyển sinh trong nhiều trường v&agrave; ở c&aacute;c cấp độ kh&aacute;c nhau: MN Hoa Phượng, MN IKIDS,Tiểu học Ph&uacute; Xu&acirc;n, THCS Vũ Hội, THPT Chuy&ecirc;n. Tại đ&acirc;y <strong>ESP ENGLISH</strong> Th&aacute;i B&igrave;nh&nbsp;đ&atilde; tư vấn đầy đủ c&aacute;c kh&oacute;a học ph&ugrave; hợp cho từng đối tượng như phụ huynh c&oacute; quan t&acirc;m hoặc đang c&oacute; nhu cầu cho con em m&igrave;nh đi học anh văn tại&nbsp;<strong>ESP ENGLISH</strong>, ngo&agrave;i ra c&ograve;n diễn ra hoạt động bốc thăm tr&uacute;ng thưởng đ&atilde; thu h&uacute;t h&agrave;ng trăm em học sinh tham gia. C&aacute;c em học sinh rất&nbsp;h&agrave;o hứng, hứng khởi tham gia v&agrave;o c&aacute;c chương tr&igrave;nh do <strong>ESP ENGLISH</strong> Th&aacute;i B&igrave;nh tổ chức&nbsp;.&nbsp;</p>\r\n', '2016-04-21', '2016-04-21');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accept` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `email`, `subject`, `accept`, `created_at`, `updated_at`) VALUES
(1, 'huudo', '0979504024', 'huudt.3012@gmail.com', 'Tiếng anh chuyên ngành', 1, '2016-04-20', 2016),
(2, 'huudo2', '0979504024', 'huudt.3012@gmail.com', 'English for children', 1, '2016-04-21', 2016),
(3, 'huudo24', '0979504024', 'huudt.3012@gmail.com', 'English for children', 1, '2016-04-21', 2016),
(4, 'Huudo2', '0979504024', 'huudt.3012@gmail.com', 'English communication', 1, '2016-04-25', 2016),
(5, 'huudo223', '0979504024', 'huudt.3012@gmail.com', 'College exam', 1, '2016-04-25', 2016),
(6, 'hung', '0979504024', 'huudt.3012@gmail.com', 'Technical English', 0, '2016-04-25', 2016);

-- --------------------------------------------------------

--
-- Structure de la table `tip_eng`
--

CREATE TABLE IF NOT EXISTS `tip_eng` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tip_eng`
--

INSERT INTO `tip_eng` (`id`, `name`) VALUES
(1, 'Listening & Speaking'),
(2, 'Reading & Writing'),
(3, 'Pronounce'),
(4, 'Grammar');

-- --------------------------------------------------------

--
-- Structure de la table `tip_vn`
--

CREATE TABLE IF NOT EXISTS `tip_vn` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tip_vn`
--

INSERT INTO `tip_vn` (`id`, `name`) VALUES
(1, 'Nghe nói'),
(2, 'Đọc viết'),
(3, 'Phát âm'),
(4, 'Ngữ pháp');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'huudo', 'huudt.3012@gmail.com', '$2y$10$/gWLKfCD1UKc40c2UU2Lie5lTeJDo5fQN314b9VjBnLTHTlwkTDyS', '1wiRr1SnCYY40IKcTfmLOsLy5QPYTP0pn3uoiafhGcyCVo7ifTg3HjS3cohl', '2016-04-19 01:43:38', '2016-04-19 21:39:20'),
(2, 'Xuan', 'espenglish.vn@gmail.com', '$2y$10$tkjlwG1.dhAKQ7WyTnQb/ePoNLkZmiBbGrAYUNqMooIJfF5yTU8ma', 'SfW0j4RqLydP3jsFuSjf09qC2PXTjmEK108Vr8VH2wan4ZZR28UxBIEHB6ZC', '2016-04-27 03:07:27', '2016-05-16 20:25:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
