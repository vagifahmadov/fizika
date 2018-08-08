-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 09:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fizika_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pages`
--

CREATE TABLE `admin_pages` (
  `id` int(11) NOT NULL,
  `id_alt` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `fayl` varchar(255) NOT NULL,
  `ikon` varchar(255) NOT NULL,
  `header` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `kicik_basliqseh` varchar(255) NOT NULL,
  `sil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_pages`
--

INSERT INTO `admin_pages` (`id`, `id_alt`, `menu`, `fayl`, `ikon`, `header`, `kicik_basliqseh`, `sil`) VALUES
(1, 0, 'Əsas panel', 'aspanel.php', '<i class="fa fa-dashboard text-green"></i>', 'Əsas səhifə-Sürətli keçidlər', 'İdarəetmə paneli', 0),
(2, 0, 'Sənəd paylaş', 'flshare.php', '<i class="fa fa-cloud-upload text-aqua"></i>', 'Yüklənmiş sənədin ünvanını paylaş', 'Yülkədiyin faylı buradan paylaş', 0),
(3, 0, 'Bölmələr', 'catago.php', '<i class="fa fa-files-o text-aqua"></i>', 'Səhifələr', 'Saytın səhifələrini burdan idarə et', 0),
(4, 0, 'Slayd başlıq', 'slde.php', '<i class="fa fa-slideshare text-aqua"></i>', 'Slayd başlıqlar', 'Slatdları idarə et', 0),
(5, 0, 'Test sualları', '', '<i class="fa fa-question-circle text-yellow"></i>', 'Testlər', 'Test', 0),
(6, 5, ' Test sualı əlavə et', 'addtest.php', '<i class="fa fa-plus-circle"></i>', 'Test əlavə et', 'Test suallarını əlavə et', 0),
(7, 5, ' Test sualını redaktə et', 'edttest.php', '<i class="fa fa-edit"></i>', 'Redaktə et', 'Test suallarını dəyiş', 0),
(8, 0, 'İnzibatçı və istifadəçilər', '', '<i class="fa fa-users text-aqua"></i>', 'Admin və User', '', 0),
(9, 8, ' İnzibatçı əlavə et', 'adadmin.php', '<i class="fa fa-user-plus"></i>', 'Admin əlavə et', 'Admin daxil et', 0),
(10, 8, ' İnzibatçını tənzimlə', 'edtadmin.php', '<i class="fa fa-edit"></i>', 'Admin redaktə', 'Adminlərin hüququnu dəyiş', 0),
(11, 8, ' İstifadəçilərin siyahısı', 'users.php', '<i class="fa fa-user"></i>', 'İstifadəçi siyasısı', 'Saytın istifadəçiləri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `axtaris`
--

CREATE TABLE `axtaris` (
  `id` int(6) NOT NULL,
  `value` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `value2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_seh` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axtaris`
--

INSERT INTO `axtaris` (`id`, `value`, `value2`, `id_seh`) VALUES
(1, 'Afghanistan', 'Afgan exiler', 1),
(2, 'Aringland Islands', 'Ariglandlar', 1),
(3, 'Albania', 'Albanlar', 1),
(4, 'Algeria', 'Əlcəzairlilər', 1),
(5, 'American Samoa', 'Amerikalılar', 1),
(6, 'Andorra', 'Andoralılar belədidə', 1),
(7, 'Angola', 'Anqollar', 1),
(8, 'Anguilla', 'Bunədiəə', 1),
(9, 'Antarctica', 'Antraktida', 1),
(10, 'Antigua and Barbuda', 'Klik eliyün', 1),
(11, 'Argentina', 'Maradona', 1),
(12, 'Armenia', 'Lənətə gəlmişlər', 1),
(13, 'Aruba', 'haay?', 1),
(14, 'Australia', 'Almandillilər', 1),
(15, 'Austria', 'Mozart', 1),
(16, 'Azerbaijan', 'Ana vətən, Bakı', 1),
(17, 'Bahamas', 'Biyh', 1),
(18, 'Bahrain', 'BƏƏ', 1),
(19, 'Bangladesh', 'Gözəli', 1),
(20, 'Barbados', 'yoxəşşi', 1),
(21, 'Belarus', 'Masanlar', 1),
(22, 'Belgium', 'Almanlar', 1),
(23, 'Belize', 'Bilmədim', 1),
(24, 'Benin', 'Bay?', 1),
(25, 'Bermuda', 'Həə', 1),
(26, 'Bhutan', 'palaza', 1),
(27, 'Bolivia', 'gözəlləri', 1),
(28, 'Bosnia and Herzegovina', 'halaldı', 1),
(29, 'Botswana', 'nə?', 1),
(30, 'Bouvet Island', 'hmm', 1),
(31, 'Brazil', 'Sambo', 1),
(32, 'British Indian Ocean territory', 'Ocean man', 1),
(33, 'Brunei Darussalam', 'eee bezdim', 1),
(34, 'Bulgaria', 'gözəlçələr', 2),
(35, 'Burkina Faso', 'pay', 2),
(36, 'Burundi', 'nədio?', 2),
(37, 'Cambodia', 'yaxşıda', 2),
(38, 'Cameroon', 'surpiriz 98', 2),
(39, 'Canada', 'fransız', 2),
(40, 'Cape Verde', 'vedrə?', 2),
(41, 'Cayman Islands', 'islandiya cala?', 2),
(42, 'Central African Republic', 'Afrika', 2),
(43, 'Chad', 'Cad Allah Quran', 2),
(44, 'Chile', 'Çilli', 2),
(45, 'China', 'Made in China', 2),
(46, 'Christmas Island', 'adacıq', 2),
(47, 'Cocos (Keeling) Islands', 'nədüye', 2),
(48, 'Colombia', 'Karlos Vanderema', 2),
(49, 'Comoros', 'Bilmədimha', 2),
(50, 'Congo', 'Bayrağı', 2),
(51, 'Congo', 'bəsdüdə', 2),
(52, ' Democratic Republic', 'yalannan', 2),
(53, 'Cook Islands', 'xoruz?', 2),
(54, 'Costa Rica', 'Futbol', 2),
(55, 'Ivory Coast (Ivory Coast)', 'ayrı ölkə', 2),
(56, 'Croatia (Hrvatska)', 'xarvatlar', 2),
(57, 'Cuba', 'Cenifer Lopez', 2),
(58, 'Cyprus', 'Yunan kipiri', 2),
(59, 'Czech Republic', 'Piter Çex', 2),
(60, 'Denmark', 'Tomasson', 2),
(61, 'Djibouti', 'nə zıqqıldeyrsən?', 2),
(62, 'Dominica', 'şahmat bayraq', 2),
(63, 'Dominican Republic', 'oda şahmatdı', 2),
(64, 'East Timor', 'haay nədi?', 2),
(65, 'Ecuador', 'Ekvadooor?', 2),
(66, 'Egypt', 'Pramidalar', 2),
(67, 'El Salvador', 'bıyyy?', 2),
(68, 'Equatorial Guinea', 'onədiye?', 2),
(69, 'Eritrea', 'sənöl?', 3),
(70, 'Estonia', 'euro 2016', 3),
(71, 'Ethiopia', 'Nağayracuğa?', 3),
(72, 'Falkland Islands', 'Adalar', 3),
(73, 'Faroe Islands', 'Adacıqlar', 3),
(74, 'Fiji', 'Fildişi', 3),
(75, 'Finland', 'Forlan', 3),
(76, 'France', 'Zidan', 3),
(77, 'French Guiana', 'Yoxduginan', 3),
(78, 'French Polynesia', 'əsarət', 3),
(79, 'French Southern Territories', 'bəsdidəəə', 3),
(80, 'Gabon', 'Qoboy', 3),
(81, 'Gambia', 'Qanmazlar', 3),
(82, 'Georgia', 'Gurzinkalar', 3),
(83, 'Germany', 'Müller', 3),
(84, 'Ghana', 'Drogba', 3),
(85, 'Gibraltar', 'Cəbəllütarix', 3),
(86, 'Greece', 'karaguniz', 3),
(87, 'Greenland', 'olmamışam', 3),
(88, 'Grenada', 'burdada olmamışam', 3),
(89, 'Guadeloupe', 'nədiye bu?', 3),
(90, 'Guam', 'qadanalım', 3),
(91, 'Guatemala', 'öldüm axı', 3),
(92, 'Guinea', 'yıxıldım', 3),
(93, 'Guinea-Bissau', 'bazasız', 3),
(94, 'Guyana', 'əssassız', 3),
(95, 'Haiti', 'geridəqalmış', 3),
(96, 'Heard and McDonald Islands', 'emək', 3),
(97, 'Honduras', 'futbol 2010', 3),
(98, 'Hong Kong', 'ölkə', 3),
(99, 'Hungary', 'macarlar', 3),
(100, 'Iceland', 'adalar', 3),
(101, 'India', 'Cimi', 3),
(102, 'Indonesia', 'yxşıyol', 3),
(103, 'Iran', 'xomeyini', 3),
(104, 'Iraq', 'işid', 4),
(105, 'Ireland', 'Robbi Kin', 4),
(106, 'Israel', 'kafirlər', 4),
(107, 'Italy', 'Delpierro', 4),
(108, 'Jamaica', 'kakay bol 5-0', 4),
(109, 'Japan', 'Park Jin Su', 4),
(110, 'Jordan', 'muslim', 4),
(111, 'Kazakhstan', 'Astana', 4),
(112, 'Kenya', 'muslimler', 4),
(113, 'Kiribati', 'haradı bu', 4),
(114, 'Korea (north)', 'Kim', 4),
(115, 'Korea (south)', 'Li Yong Pu', 4),
(116, 'Kuwait', 'benzin', 4),
(117, 'Kyrgyzstan', 'Klğız qazax dostdur', 4),
(118, 'Lao People\'s Democratic Republic', 'Palmalar', 4),
(119, 'Latvia', 'Futbol 2000', 4),
(120, 'Lebanon', 'terror', 4),
(121, 'Lesotho', 'onedi ay bala', 4),
(122, 'Liberia', 'bilmədim axı', 4),
(123, 'Libyan Arab Jamahiriya', 'asiya', 4),
(124, 'Liechtenstein', 'cırtdan', 4),
(125, 'Lithuania', 'yaxşı ölkə', 4),
(126, 'Luxembourg', 'ən cırtdanı', 4),
(127, 'Macao', 'firənq', 4),
(128, 'Macedonia', 'Nilufer', 4),
(129, 'Madagascar', 'İskəndər', 4),
(130, 'Malawi', 'maci', 4),
(131, 'Malaysia', 'made in malazia', 4),
(132, 'Maldives', 'adalar malda', 4),
(133, 'Mali', 'somlali', 4),
(134, 'Malta', 'balacs', 4),
(135, 'Marshall Islands', 'marşal', 4),
(136, 'Martinique', 'munique', 4),
(137, 'Mauritania', 'kantona', 4),
(138, 'Mauritius', 'morinoz', 4),
(139, 'Mayotte', 'mayoxt', 9),
(140, 'Mexico', 'Mexsika', 9),
(141, 'Micronesia', 'əşşiye', 9),
(142, 'Moldova', 'madovalılar', 9),
(143, 'Monaco', 'firənqlərdü', 9),
(144, 'Mongolia', 'monqol turisləri', 9),
(145, 'Montserrat', 'yoxbir', 9),
(146, 'Morocco', 'mərakeş gozəli', 9),
(147, 'Mozambique', 'mazgi', 9),
(148, 'Myanmar', 'Əbülfəz', 9),
(149, 'Namibia', 'haradı bu ginən', 9),
(150, 'Nauru', 'varmobile', 9),
(151, 'Nepal', 'Zəlzələ', 9),
(152, 'Netherlands', 'Kulivert', 9),
(153, 'Netherlands Antilles', 'Snejder', 9),
(154, 'New Caledonia', 'USA', 9),
(155, 'New Zealand', 'Yağ', 9),
(156, 'Nicaragua', 'Hərü', 9),
(157, 'Niger', 'Qarabala', 9),
(158, 'Nigeria', 'Vandku Kanu', 9),
(159, 'Niue', 'Beyəh', 9),
(160, 'Norfolk Island', 'Tülkübaş', 9),
(161, 'Northern Mariana Islands', 'marina', 9),
(162, 'Norway', 'Flo', 9),
(163, 'Oman', 'Un', 9),
(164, 'Pakistan', 'Bomba', 9),
(165, 'Palau', 'lima', 9),
(166, 'Palestinian Territories', 'yazıqlar', 9),
(167, 'Panama', 'çikofantastik', 9),
(168, 'Papua New Guinea', 'yoxəşşidiü', 9),
(169, 'Paraguay', 'çeıavert', 9),
(170, 'Peru', 'ölkədü', 9),
(171, 'Philippines', 'kİRKOROV', 9),
(172, 'Pitcairn', 'Bezdim qaqa', 9),
(173, 'Poland', 'Levandovski', 9),
(174, 'Portugal', 'Ronaldo', 11),
(175, 'Puerto Rico', 'Ala bəsdüdəə', 11),
(176, 'Qatar', 'Arxamca baxma', 11),
(177, 'Runion', 'qutarmadı', 11),
(178, 'Romania', 'Hagi', 11),
(179, 'Russian Federation', 'Putin', 11),
(180, 'Rwanda', 'Tanınmıyan', 11),
(181, 'Saint Helena', 'okus fokus', 11),
(182, 'Saint Kitts and Nevis', 'ala bezmədün', 11),
(183, 'Saint Lucia', 'santabarbara', 11),
(184, 'Saint Pierre and Miquelon', 'santa klauz', 11),
(185, 'Saint Vincent and the Grenadines', 'santa krus', 11),
(186, 'Samoa', 'Soğan', 11),
(187, 'San Marino', 'Qafiyə sao', 11),
(188, 'Sao Tome and Principe', 'Saotombadı', 11),
(189, 'Saudi Arabia', 'Məkkə', 11),
(190, 'Senegal', 'Papa Bomba Diop', 11),
(191, 'Serbia and Montenegro', 'Kezman', 11),
(192, 'Seychelles', 'Hırtıltı', 11),
(193, 'Sierra Leone', 'Serial', 11),
(194, 'Singapore', 'Ölkədidəəə', 11),
(195, 'Slovakia', 'Avropa', 11),
(196, 'Slovenia', 'Qardaş', 11),
(197, 'Solomon Islands', 'Salman adası', 11),
(198, 'Somalia', 'Yardım', 11),
(199, 'South Africa', 'Şiraslan', 11),
(200, 'South Georgia and the South Sandwich Islands', 'Gürcü qoqo', 11),
(201, 'Spain', 'Kassillas', 11),
(202, 'Sri Lanka', 'Qarabalalar', 11),
(203, 'Sudan', 'Səbəblər', 11),
(204, 'Suriname', 'Familya?', 11),
(205, 'Svalbard and Jan Mayen Islands', 'Şalavar', 11),
(206, 'Swaziland', 'bank', 11),
(207, 'Sweden', 'İbrahimoviç', 11),
(208, 'Switzerland', 'banqlar', 11),
(209, 'Syria', 'işidçilər', 12),
(210, 'Taiwan', 'tarımar', 12),
(211, 'Tajikistan', 'taciklər', 12),
(212, 'Tanzania', 'tarzanlar', 12),
(213, 'Thailand', 'varki?', 12),
(214, 'Togo', 'futbol', 12),
(215, 'Tokelau', 'yoxduki', 12),
(216, 'Tonga', 'tonqaya gəlmək', 12),
(217, 'Trinidad and Tobago', 'tabaka', 12),
(218, 'Tunisia', 'müsəlmanlar', 12),
(219, 'Turkey', 'qardaş ölkə', 12),
(220, 'Turkmenistan', 'turkmen', 12),
(221, 'Turks and Caicos Islands', 'hinduşka', 12),
(222, 'Tuvalu', 'tavlamak', 12),
(223, 'Uganda', 'mən', 12),
(224, 'Ukraine', 'fenemen', 12),
(225, 'United Arab Emirates', 'ərəblər', 12),
(226, 'United Kingdom', 'london', 12),
(227, 'United States of America', 'Obama', 12),
(228, 'Uruguay', 'Forlan', 12),
(229, 'Uzbekistan', 'qıyğgöz', 12),
(230, 'Vanuatu', 'vedrəciklər', 12),
(231, 'Vatican City', 'avropadı əsil', 12),
(232, 'Venezuela', 'hədəəə', 12),
(233, 'Vietnam', 'dava', 12),
(234, 'Virgin Islands (British)', 'ingilis bayrağı', 12),
(235, 'Virgin Islands (US)', 'Klinton', 12),
(236, 'Wallis and Futuna Islands', 'adadı amma bilmirəm', 12),
(237, 'Western Sahara', 'Səhra', 12),
(238, 'Yemen', 'qancıq', 12),
(239, 'Zaire', 'zina', 12),
(240, 'Zambia', 'hıy?', 12),
(241, 'Zimbabwe', 'Zimba', 12),
(243, 'Azerbaijanss', 'Azərilər', 1),
(244, 'Azerbaijan', 'vatan', 2),
(245, 'azerbaijanians', 'vatancıklar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `last_proj`
--

CREATE TABLE `last_proj` (
  `id` int(10) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `info_prj` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `last_proj`
--

INSERT INTO `last_proj` (`id`, `img_url`, `info_prj`, `link`) VALUES
(1, 'last_proj/im1.png', 'QlobalEnerji', 'http://www.qlobalenerji.az/'),
(7, 'last_proj/logo_az.png', '', 'http://www.azmiu.edu.az/');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `sira_n` int(10) NOT NULL,
  `alt_m` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `sira_n`, `alt_m`) VALUES
(1, 'Baş səhifə', 1, 0),
(2, 'Dərslər', 2, 0),
(3, 'Məqalələr', 3, 0),
(4, 'Əlaqə', 4, 0),
(9, 'Nyutonun 2-ci qanunu', 5, 2),
(11, 'Ayrodinamika', 7, 2),
(12, 'Impuls qanunu', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `paginate`
--

CREATE TABLE `paginate` (
  `id` int(11) NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paginate`
--

INSERT INTO `paginate` (`id`, `name`, `message`) VALUES
(1, 'Addison', 'Suspendisse id felis mi. Quisque blandit mattis nisl eu volutpat. Duis viverra lacus quis arcu mattis ac varius ligula convallis. Maecenas magna enim, molestie ac ultrices sed, convallis vel dolor. Vestibulum sed hendrerit massa. Integer consequat odio vitae est rutrum et egestas nibh sodales. Sed adipiscing nisl vel massa bibendum molestie.'),
(2, 'Aditya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero ut mi elementum adipiscing ut sed lacus. Nulla eget tempor dolor. Aenean eget metus nisi, sed mattis lectus. Ut vitae pretium dolor. Ut nec dui vitae nisl suscipit volutpat vel eu sapien. Donec suscipit massa ut sapien faucibus pellentesque. Proin eu sapien diam. Nulla facilisi. Etiam adipiscing molestie sapien, sit amet viverra metus hendrerit ut. Vestibulum non laoreet arcu.'),
(3, 'Derrick', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(4, 'Jefferson', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(5, 'Deonte', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(6, 'Aden', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(7, 'Joey', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(8, 'Paul', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(9, 'Alex', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(10, 'Devante', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(11, 'Derrick', 'Duis et gravida lacus. Ut scelerisque ante eu mi tristique dignissim. Maecenas nec augue non dolor tempor viverra eget non felis. Nam posuere laoreet tellus, at commodo massa auctor quis. Maecenas tempus volutpat posuere. Donec in adipiscing libero. Proin viverra, mi blandit scelerisque fringilla, turpis nunc ultrices turpis, vitae malesuada turpis orci non felis. Suspendisse interdum consectetur sem et accumsan. Proin eleifend laoreet ligula, a placerat lorem volutpat ut. Duis sagittis dapibus tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fa'),
(12, 'Jefferson', 'Etiam ac augue elementum enim ornare molestie. Vestibulum et hendrerit massa. Donec sit amet turpis elit, non pretium risus. Vivamus varius eros sagittis augue posuere pellentesque. Curabitur eu nunc vel erat ultricies eleifend et nec tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(13, 'Deonte', 'Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. Sed suscipit nibh eget tellus tempus gravida sed quis nibh. In euismod porta vehicula. Nulla aliquet, tortor eu tempus aliquet, massa enim placerat enim, et ornare libero ante sed orci. Aenean cursus nulla et lorem bibendum iaculis. Nam lobortis scelerisque vulputate. Sed in leo lorem, eu pharetra lectus. Nunc quis leo dui. Fusce nisi est, hendrerit interdum consequat mollis, vulputate quis est.Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(14, 'Aden', 'enean ut enim ligula, quis rhoncus tellus. Nullam quam tortor, mattis eu cursus nec, placerat a leo. Pellentesque lacinia eros quis justo varius aliquet. Sed quis lacus nec dolor sollicitudin porttitor. Suspendisse elementum, mi ut accumsan eleifend, leo mi auctor tellus, in tristique magna libero at augue. Donec in tellus metus. Curabitur eget metus lorem, at bibendum nisl.Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(15, 'Joey', 'Morbi non nisl sed lorem vehicula lobortis ut vel diam. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra auctor velit, et faucibus ipsum volutpat a. Curabitur est sem, tempus a imperdiet et, convallis id erat. Proin ac nunc nulla. Praesent ac justo eget urna pretium molestie id a lacus. Curabitur a tortor urna,  Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(16, 'Oliver', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(17, 'Archibald', 'Sed non sapien lacus, non consectetur diam. Vestibulum erat neque, dapibus quis consectetur ut, aliquam et magna. Sed sodales iaculis justo et molestie. Etiam quis odio elementum elit convallis dignissim. Donec semper hendrerit nunc sed luctus. Suspendisse potenti. In placerat urna nulla. Suspendisse potenti. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(18, 'Derrick', 'Duis et gravida lacus. Ut scelerisque ante eu mi tristique dignissim. Maecenas nec augue non dolor tempor viverra eget non felis. Nam posuere laoreet tellus, at commodo massa auctor quis. Maecenas tempus volutpat posuere. Donec in adipiscing libero. Proin viverra, mi blandit scelerisque fringilla, turpis nunc ultrices turpis, vitae malesuada turpis orci non felis. Suspendisse interdum consectetur sem et accumsan. Proin eleifend laoreet ligula, a placerat lorem volutpat ut. Duis sagittis dapibus tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fa'),
(19, 'Jefferson', 'Etiam ac augue elementum enim ornare molestie. Vestibulum et hendrerit massa. Donec sit amet turpis elit, non pretium risus. Vivamus varius eros sagittis augue posuere pellentesque. Curabitur eu nunc vel erat ultricies eleifend et nec tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(20, 'Deonte', 'Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. Sed suscipit nibh eget tellus tempus gravida sed quis nibh. In euismod porta vehicula. Nulla aliquet, tortor eu tempus aliquet, massa enim placerat enim, et ornare libero ante sed orci. Aenean cursus nulla et lorem bibendum iaculis. Nam lobortis scelerisque vulputate. Sed in leo lorem, eu pharetra lectus. Nunc quis leo dui. Fusce nisi est, hendrerit interdum consequat mollis, vulputate quis est.Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(21, 'Aden', 'enean ut enim ligula, quis rhoncus tellus. Nullam quam tortor, mattis eu cursus nec, placerat a leo. Pellentesque lacinia eros quis justo varius aliquet. Sed quis lacus nec dolor sollicitudin porttitor. Suspendisse elementum, mi ut accumsan eleifend, leo mi auctor tellus, in tristique magna libero at augue. Donec in tellus metus. Curabitur eget metus lorem, at bibendum nisl.Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(22, 'Joey', 'Morbi non nisl sed lorem vehicula lobortis ut vel diam. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra auctor velit, et faucibus ipsum volutpat a. Curabitur est sem, tempus a imperdiet et, convallis id erat. Proin ac nunc nulla. Praesent ac justo eget urna pretium molestie id a lacus. Curabitur a tortor urna,  Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(23, 'Oliver', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(24, 'Archibald', 'Sed non sapien lacus, non consectetur diam. Vestibulum erat neque, dapibus quis consectetur ut, aliquam et magna. Sed sodales iaculis justo et molestie. Etiam quis odio elementum elit convallis dignissim. Donec semper hendrerit nunc sed luctus. Suspendisse potenti. In placerat urna nulla. Suspendisse potenti. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(25, 'Chinmay', 'Nunc eget velit tortor, quis tincidunt nibh. Vestibulum eget est elit, a accumsan nunc. Aenean ac tortor justo, at pulvinar quam. Proin in enim quis libero vehicula iaculis sit amet eu ante. Phasellus diam justo, elementum eu rutrum sit amet, molestie vitae magna. Aliquam erat volutpat. Fusce scelerisque libero sit amet erat facilisis pretium.'),
(26, 'Addison', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In faucibus ligula interdum felis porta in ultrices purus auctor. Curabitur consectetur lacinia metus. Vivamus ultrices, lectus ac pharetra laoreet, tellus quam placerat erat, posuere laoreet diam elit at neque. Aliquam semper scelerisque mollis. Phasellus tempus laoreet molestie.'),
(27, 'Aditya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed tortor sed turpis lobortis vestibulum blandit sit amet arcu. Curabitur tempus pretium faucibus. Phasellus in urna non velit cursus semper eu et dolor. Suspendisse nulla libero, ultricies id lacinia sit amet, sagittis sed neque. Donec volutpat congue velit vel ullamcorper. Quisque quis est leo, in semper nunc. Phasellus gravida placerat risus, nec commodo lectus adipiscing nec.'),
(28, 'Derrick', 'Etiam eu tortor eu nibh aliquet feugiat. Integer at dolor nec libero elementum faucibus quis ut ante. Fusce ut orci erat. Nulla facilisi. Aenean est justo, dignissim eu congue sed, tempor egestas orci. Suspendisse porttitor ligula tempus sapien facilisis vel tempus mi fringilla. Donec varius, dui ac semper fermentum, nunc risus interdum nisi, at ultricies dolor purus vel massa.'),
(29, 'Jefferson', 'Pellentesque facilisis mattis semper. Donec aliquam, quam non hendrerit pellentesque, urna quam placerat nunc, quis molestie leo risus nec ipsum. Vestibulum ut ligula malesuada justo adipiscing molestie nec in eros. Sed id sapien quis sapien rhoncus sollicitudin. Sed est metus, vehicula ut dictum at, semper eu lacus. Curabitur congue, ante vel commodo laoreet, enim purus venenatis velit, in tincidunt odio ante vitae sem. Sed ut massa et '),
(30, 'Deonte', 'purus blandit euismod eu sit amet lorem. Pellentesque tempor, erat quis vehicula vulputate, magna ante elementum tortor, ac feugiat lacus metus vitae ante. Vivamus tellus lorem, porta nec vestibulum ut, mollis sed augue. Sed sed condimentum leo. Curabitur tempor est scelerisque risus pulvinar varius. Mauris eros dui, dignissim at cursus sed, bibendum at elit. Donec gravida ornare sapien vel tempus.'),
(31, 'Aden', 'Etiam vulputate nisi in eros consequat non elementum justo consectetur. Etiam quis laoreet ante. Nulla eget nibh arcu. In gravida enim sit amet leo pretium commodo id at eros. Praesent vitae erat neque. Aenean non quam mauris. Etiam ut eros dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(32, 'Joey', 'Etiam imperdiet tortor in ipsum posuere eget pharetra velit dapibus. Nullam imperdiet molestie ligula a vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec venenatis ipsum et mi consectetur faucibus. Praesent elementum, mi sit amet sodales tincidunt, mi ipsum cursus lorem, sed feugiat ligula arcu id nibh. '),
(33, 'Paul', 'Curabitur venenatis purus lectus. In sed lacus iaculis dolor dignissim gravida congue vitae massa. Phasellus nec tellus in lacus cursus ornare ut quis lectus. Phasellus elementum, mi vel scelerisque varius, neque elit hendrerit elit, eget eleifend elit ipsum in ligula. Morbi in nunc diam, in viverra lectus. Sed interdum est a diam placerat ut sodales neque mollis. '),
(34, 'Alex', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In tortor arcu, blandit id elementum et, ultricies in velit. Sed gravida magna a lacus accumsan sollicitudin nec in sem. Nullam tempus felis faucibus odio fringilla dapibus. Ut nec elit eget augue imperdiet pharetra et id quam. Mauris eget mauris est. '),
(35, 'Devante', 'Mauris mauris lacus, ultricies quis consectetur id, dictum quis odio. Nunc turpis erat, ultrices et porta eu, adipiscing eget felis. Sed suscipit convallis egestas. Sed id tortor in diam euismod facilisis sed vel libero.'),
(36, 'Derrick', 'DLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada quam at enim luctus nec tincidunt odio tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ornare, tellus sed dapibus fermentum, leo mi lobortis nisi, a scelerisque nulla sem vitae ante.'),
(37, 'Jefferson', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse mollis gravida erat, eget dapibus est cursus at. Sed pulvinar bibendum leo, eget gravida lorem vestibulum pharetra. In hac habitasse platea dictumst. Nam at neque metus.'),
(38, 'Deonte', 'Integer a erat sit amet leo rutrum dictum at in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec vehicula justo. Mauris urna arcu, molestie a cursus at, fringilla non orci. Duis pellentesque porta massa, eu ultricies ipsum pharetra quis. Aliquam at nulla a nunc accumsan congue at et eros. Donec velit orci, tempor eget tempor id, aliquet in nisi.'),
(39, 'Aden', 'Phasellus fermentum elementum massa sit amet auctor. Suspendisse nec sapien felis. Ut rhoncus sapien a mauris porta interdum. In hac habitasse platea dictumst. Donec ac diam felis. Proin in dolor sem, ut luctus est. Aenean dictum libero sed tellus molestie eu porta elit porta. Proin mattis imperdiet aliquam.'),
(40, 'Joey', 'Duis placerat vulputate sapien ut vehicula. Pellentesque molestie ultricies orci, ac ornare nunc fermentum in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed mattis felis non nibh scelerisque vel luctus libero hendrerit. Nam sed nibh sapien. Donec at sapien quis massa luctus pharetra cursus id neque. '),
(41, 'Oliver', 'Suspendisse massa mauris, lobortis nec gravida non, lobortis ut risus. Nam ut libero et lorem hendrerit suscipit nec vitae neque. Aenean congue aliquet condimentum. Mauris massa odio, mattis at pellentesque at, fringilla ac sem. Vestibulum scelerisque dui ut eros ultrices non tristique nibh imperdiet. Ut faucibus luctus aliquet.'),
(42, 'Archibald', 'Sed ac blandit ligula. Morbi interdum tempus lectus, quis varius ligula facilisis et. Vivamus gravida diam ac enim mattis nec eleifend felis pulvinar. Aenean at velit felis, quis porttitor risus. Proin eros erat, consectetur varius dictum eu, ullamcorper ac tortor. '),
(43, 'Derrick', 'Etiam iaculis eros ut quam mattis cursus. Aliquam a nisi sem. Proin sapien mauris, porttitor id pretium ultricies, tincidunt at orci. Quisque adipiscing mi a leo aliquam eu cursus nisi vulputate. Aliquam id porttitor risus. Quisque in tempus est. Praesent eu arcu vitae lorem mollis vehicula facilisis sit amet nulla. Aenean nisl magna, consequat vitae fermentum sed, aliquam ac elit. Cras consectetur eleifend massa. Phasellus porta nibh at ligula sagittis ut ornare elit accumsan. '),
(44, 'Jefferson', 'Sed non nisl elit. Cras mollis ligula nec tortor pretium eu luctus dolor mollis. Aliquam erat volutpat. Cras malesuada, nulla sed vulputate accumsan, velit leo sagittis nulla, in commodo enim nisi at diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer dapibus egestas dolor'),
(45, 'Deonte', 'Sed lorem arcu, auctor vel egestas eu, ultricies vitae felis. Sed massa magna, placerat a blandit vel, suscipit quis urna. Sed malesuada dignissim eros, quis congue urna tempus sit amet. Morbi eu ligula ac leo tincidunt faucibus. Suspendisse vel lobortis diam. Quisque sodales pretium orci, et blandit lectus volutpat et. Curabitur non ipsum ligula, sit amet placerat nisi. Praesent eget tempus orci.'),
(46, 'Aden', 'Vivamus a augue sed neque varius lobortis vitae a mauris. Aliquam erat volutpat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque lacinia odio libero, vel bibendum quam. Nunc mattis, orci id dignissim tempor, urna libero feugiat lorem, a dapibus nisi urna vitae libero. Nulla laoreet feugiat rhoncus. Sed tempus magna sed eros pellentesque in dictum erat vestibulum. Aliquam at magna nulla, quis varius ligula. '),
(47, 'Joey', 'Proin volutpat congue blandit. Etiam id risus turpis. Ut elit tortor, volutpat semper porttitor ut, adipiscing ut odio. Vivamus quis leo neque, sed pellentesque libero. Etiam sagittis placerat quam vel bibendum. Curabitur quis mollis felis.'),
(48, 'Oliver', 'Maecenas nec interdum nibh. Suspendisse facilisis semper tellus sed lacinia. Mauris tristique nulla non massa congue pretium. Donec vel sem a massa ultrices fermentum quis et neque. Pellentesque auctor auctor imperdiet. '),
(49, 'Archibald', 'Morbi elementum sem commodo massa ultrices convallis. Aenean condimentum iaculis leo at tristique. Nunc vel nisi at felis semper eleifend. Nam eleifend, sem ac vehicula pellentesque, massa elit ultrices dolor, sit amet interdum neque felis rutrum augue.'),
(50, 'Chinmay', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, vehicula sed ultricies vel, fermentum a purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec et justo et mauris tincidunt elementum at at dui. Phasellus vitae ipsum lorem, non interdum ante. Q'),
(51, 'Addison', 'Suspendisse id felis mi. Quisque blandit mattis nisl eu volutpat. Duis viverra lacus quis arcu mattis ac varius ligula convallis. Maecenas magna enim, molestie ac ultrices sed, convallis vel dolor. Vestibulum sed hendrerit massa. Integer consequat odio vitae est rutrum et egestas nibh sodales. Sed adipiscing nisl vel massa bibendum molestie.'),
(52, 'Aditya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero ut mi elementum adipiscing ut sed lacus. Nulla eget tempor dolor. Aenean eget metus nisi, sed mattis lectus. Ut vitae pretium dolor. Ut nec dui vitae nisl suscipit volutpat vel eu sapien. Donec suscipit massa ut sapien faucibus pellentesque. Proin eu sapien diam. Nulla facilisi. Etiam adipiscing molestie sapien, sit amet viverra metus hendrerit ut. Vestibulum non laoreet arcu.'),
(53, 'Derrick', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(54, 'Jefferson', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(55, 'Deonte', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(56, 'Aden', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(57, 'Joey', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(58, 'Paul', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(59, 'Alex', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(60, 'Devante', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(61, 'Derrick', 'Duis et gravida lacus. Ut scelerisque ante eu mi tristique dignissim. Maecenas nec augue non dolor tempor viverra eget non felis. Nam posuere laoreet tellus, at commodo massa auctor quis. Maecenas tempus volutpat posuere. Donec in adipiscing libero. Proin viverra, mi blandit scelerisque fringilla, turpis nunc ultrices turpis, vitae malesuada turpis orci non felis. Suspendisse interdum consectetur sem et accumsan. Proin eleifend laoreet ligula, a placerat lorem volutpat ut. Duis sagittis dapibus tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fa'),
(62, 'Jefferson', 'Etiam ac augue elementum enim ornare molestie. Vestibulum et hendrerit massa. Donec sit amet turpis elit, non pretium risus. Vivamus varius eros sagittis augue posuere pellentesque. Curabitur eu nunc vel erat ultricies eleifend et nec tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(63, 'Deonte', 'Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. Sed suscipit nibh eget tellus tempus gravida sed quis nibh. In euismod porta vehicula. Nulla aliquet, tortor eu tempus aliquet, massa enim placerat enim, et ornare libero ante sed orci. Aenean cursus nulla et lorem bibendum iaculis. Nam lobortis scelerisque vulputate. Sed in leo lorem, eu pharetra lectus. Nunc quis leo dui. Fusce nisi est, hendrerit interdum consequat mollis, vulputate quis est.Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(64, 'Aden', 'enean ut enim ligula, quis rhoncus tellus. Nullam quam tortor, mattis eu cursus nec, placerat a leo. Pellentesque lacinia eros quis justo varius aliquet. Sed quis lacus nec dolor sollicitudin porttitor. Suspendisse elementum, mi ut accumsan eleifend, leo mi auctor tellus, in tristique magna libero at augue. Donec in tellus metus. Curabitur eget metus lorem, at bibendum nisl.Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(65, 'Joey', 'Morbi non nisl sed lorem vehicula lobortis ut vel diam. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra auctor velit, et faucibus ipsum volutpat a. Curabitur est sem, tempus a imperdiet et, convallis id erat. Proin ac nunc nulla. Praesent ac justo eget urna pretium molestie id a lacus. Curabitur a tortor urna,  Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(66, 'Oliver', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(67, 'Archibald', 'Sed non sapien lacus, non consectetur diam. Vestibulum erat neque, dapibus quis consectetur ut, aliquam et magna. Sed sodales iaculis justo et molestie. Etiam quis odio elementum elit convallis dignissim. Donec semper hendrerit nunc sed luctus. Suspendisse potenti. In placerat urna nulla. Suspendisse potenti. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(68, 'Derrick', 'Duis et gravida lacus. Ut scelerisque ante eu mi tristique dignissim. Maecenas nec augue non dolor tempor viverra eget non felis. Nam posuere laoreet tellus, at commodo massa auctor quis. Maecenas tempus volutpat posuere. Donec in adipiscing libero. Proin viverra, mi blandit scelerisque fringilla, turpis nunc ultrices turpis, vitae malesuada turpis orci non felis. Suspendisse interdum consectetur sem et accumsan. Proin eleifend laoreet ligula, a placerat lorem volutpat ut. Duis sagittis dapibus tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fa'),
(69, 'Jefferson', 'Etiam ac augue elementum enim ornare molestie. Vestibulum et hendrerit massa. Donec sit amet turpis elit, non pretium risus. Vivamus varius eros sagittis augue posuere pellentesque. Curabitur eu nunc vel erat ultricies eleifend et nec tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(70, 'Deonte', 'Morbi ultrices, dolor in congue fermentum, nisi dolor sodales odio, ac sodales est mi vitae leo. Sed suscipit nibh eget tellus tempus gravida sed quis nibh. In euismod porta vehicula. Nulla aliquet, tortor eu tempus aliquet, massa enim placerat enim, et ornare libero ante sed orci. Aenean cursus nulla et lorem bibendum iaculis. Nam lobortis scelerisque vulputate. Sed in leo lorem, eu pharetra lectus. Nunc quis leo dui. Fusce nisi est, hendrerit interdum consequat mollis, vulputate quis est.Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(71, 'Aden', 'enean ut enim ligula, quis rhoncus tellus. Nullam quam tortor, mattis eu cursus nec, placerat a leo. Pellentesque lacinia eros quis justo varius aliquet. Sed quis lacus nec dolor sollicitudin porttitor. Suspendisse elementum, mi ut accumsan eleifend, leo mi auctor tellus, in tristique magna libero at augue. Donec in tellus metus. Curabitur eget metus lorem, at bibendum nisl.Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(72, 'Joey', 'Morbi non nisl sed lorem vehicula lobortis ut vel diam. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra auctor velit, et faucibus ipsum volutpat a. Curabitur est sem, tempus a imperdiet et, convallis id erat. Proin ac nunc nulla. Praesent ac justo eget urna pretium molestie id a lacus. Curabitur a tortor urna,  Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(73, 'Oliver', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend..'),
(74, 'Archibald', 'Sed non sapien lacus, non consectetur diam. Vestibulum erat neque, dapibus quis consectetur ut, aliquam et magna. Sed sodales iaculis justo et molestie. Etiam quis odio elementum elit convallis dignissim. Donec semper hendrerit nunc sed luctus. Suspendisse potenti. In placerat urna nulla. Suspendisse potenti. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.'),
(75, 'Chinmay', 'Nunc eget velit tortor, quis tincidunt nibh. Vestibulum eget est elit, a accumsan nunc. Aenean ac tortor justo, at pulvinar quam. Proin in enim quis libero vehicula iaculis sit amet eu ante. Phasellus diam justo, elementum eu rutrum sit amet, molestie vitae magna. Aliquam erat volutpat. Fusce scelerisque libero sit amet erat facilisis pretium.'),
(76, 'Addison', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In faucibus ligula interdum felis porta in ultrices purus auctor. Curabitur consectetur lacinia metus. Vivamus ultrices, lectus ac pharetra laoreet, tellus quam placerat erat, posuere laoreet diam elit at neque. Aliquam semper scelerisque mollis. Phasellus tempus laoreet molestie.'),
(77, 'Aditya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed tortor sed turpis lobortis vestibulum blandit sit amet arcu. Curabitur tempus pretium faucibus. Phasellus in urna non velit cursus semper eu et dolor. Suspendisse nulla libero, ultricies id lacinia sit amet, sagittis sed neque. Donec volutpat congue velit vel ullamcorper. Quisque quis est leo, in semper nunc. Phasellus gravida placerat risus, nec commodo lectus adipiscing nec.'),
(78, 'Derrick', 'Etiam eu tortor eu nibh aliquet feugiat. Integer at dolor nec libero elementum faucibus quis ut ante. Fusce ut orci erat. Nulla facilisi. Aenean est justo, dignissim eu congue sed, tempor egestas orci. Suspendisse porttitor ligula tempus sapien facilisis vel tempus mi fringilla. Donec varius, dui ac semper fermentum, nunc risus interdum nisi, at ultricies dolor purus vel massa.'),
(79, 'Jefferson', 'Pellentesque facilisis mattis semper. Donec aliquam, quam non hendrerit pellentesque, urna quam placerat nunc, quis molestie leo risus nec ipsum. Vestibulum ut ligula malesuada justo adipiscing molestie nec in eros. Sed id sapien quis sapien rhoncus sollicitudin. Sed est metus, vehicula ut dictum at, semper eu lacus. Curabitur congue, ante vel commodo laoreet, enim purus venenatis velit, in tincidunt odio ante vitae sem. Sed ut massa et '),
(80, 'Deonte', 'purus blandit euismod eu sit amet lorem. Pellentesque tempor, erat quis vehicula vulputate, magna ante elementum tortor, ac feugiat lacus metus vitae ante. Vivamus tellus lorem, porta nec vestibulum ut, mollis sed augue. Sed sed condimentum leo. Curabitur tempor est scelerisque risus pulvinar varius. Mauris eros dui, dignissim at cursus sed, bibendum at elit. Donec gravida ornare sapien vel tempus.'),
(81, 'Aden', 'Etiam vulputate nisi in eros consequat non elementum justo consectetur. Etiam quis laoreet ante. Nulla eget nibh arcu. In gravida enim sit amet leo pretium commodo id at eros. Praesent vitae erat neque. Aenean non quam mauris. Etiam ut eros dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(82, 'Joey', 'Etiam imperdiet tortor in ipsum posuere eget pharetra velit dapibus. Nullam imperdiet molestie ligula a vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec venenatis ipsum et mi consectetur faucibus. Praesent elementum, mi sit amet sodales tincidunt, mi ipsum cursus lorem, sed feugiat ligula arcu id nibh. '),
(83, 'Paul', 'Curabitur venenatis purus lectus. In sed lacus iaculis dolor dignissim gravida congue vitae massa. Phasellus nec tellus in lacus cursus ornare ut quis lectus. Phasellus elementum, mi vel scelerisque varius, neque elit hendrerit elit, eget eleifend elit ipsum in ligula. Morbi in nunc diam, in viverra lectus. Sed interdum est a diam placerat ut sodales neque mollis. '),
(84, 'Alex', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In tortor arcu, blandit id elementum et, ultricies in velit. Sed gravida magna a lacus accumsan sollicitudin nec in sem. Nullam tempus felis faucibus odio fringilla dapibus. Ut nec elit eget augue imperdiet pharetra et id quam. Mauris eget mauris est. '),
(85, 'Devante', 'Mauris mauris lacus, ultricies quis consectetur id, dictum quis odio. Nunc turpis erat, ultrices et porta eu, adipiscing eget felis. Sed suscipit convallis egestas. Sed id tortor in diam euismod facilisis sed vel libero.'),
(86, 'Derrick', 'DLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada quam at enim luctus nec tincidunt odio tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ornare, tellus sed dapibus fermentum, leo mi lobortis nisi, a scelerisque nulla sem vitae ante.'),
(87, 'Jefferson', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse mollis gravida erat, eget dapibus est cursus at. Sed pulvinar bibendum leo, eget gravida lorem vestibulum pharetra. In hac habitasse platea dictumst. Nam at neque metus.'),
(88, 'Deonte', 'Integer a erat sit amet leo rutrum dictum at in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec vehicula justo. Mauris urna arcu, molestie a cursus at, fringilla non orci. Duis pellentesque porta massa, eu ultricies ipsum pharetra quis. Aliquam at nulla a nunc accumsan congue at et eros. Donec velit orci, tempor eget tempor id, aliquet in nisi.'),
(89, 'Aden', 'Phasellus fermentum elementum massa sit amet auctor. Suspendisse nec sapien felis. Ut rhoncus sapien a mauris porta interdum. In hac habitasse platea dictumst. Donec ac diam felis. Proin in dolor sem, ut luctus est. Aenean dictum libero sed tellus molestie eu porta elit porta. Proin mattis imperdiet aliquam.'),
(90, 'Joey', 'Duis placerat vulputate sapien ut vehicula. Pellentesque molestie ultricies orci, ac ornare nunc fermentum in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed mattis felis non nibh scelerisque vel luctus libero hendrerit. Nam sed nibh sapien. Donec at sapien quis massa luctus pharetra cursus id neque. '),
(91, 'Oliver', 'Suspendisse massa mauris, lobortis nec gravida non, lobortis ut risus. Nam ut libero et lorem hendrerit suscipit nec vitae neque. Aenean congue aliquet condimentum. Mauris massa odio, mattis at pellentesque at, fringilla ac sem. Vestibulum scelerisque dui ut eros ultrices non tristique nibh imperdiet. Ut faucibus luctus aliquet.'),
(92, 'Archibald', 'Sed ac blandit ligula. Morbi interdum tempus lectus, quis varius ligula facilisis et. Vivamus gravida diam ac enim mattis nec eleifend felis pulvinar. Aenean at velit felis, quis porttitor risus. Proin eros erat, consectetur varius dictum eu, ullamcorper ac tortor. '),
(93, 'Derrick', 'Etiam iaculis eros ut quam mattis cursus. Aliquam a nisi sem. Proin sapien mauris, porttitor id pretium ultricies, tincidunt at orci. Quisque adipiscing mi a leo aliquam eu cursus nisi vulputate. Aliquam id porttitor risus. Quisque in tempus est. Praesent eu arcu vitae lorem mollis vehicula facilisis sit amet nulla. Aenean nisl magna, consequat vitae fermentum sed, aliquam ac elit. Cras consectetur eleifend massa. Phasellus porta nibh at ligula sagittis ut ornare elit accumsan. '),
(94, 'Jefferson', 'Sed non nisl elit. Cras mollis ligula nec tortor pretium eu luctus dolor mollis. Aliquam erat volutpat. Cras malesuada, nulla sed vulputate accumsan, velit leo sagittis nulla, in commodo enim nisi at diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer dapibus egestas dolor'),
(95, 'Deonte', 'Sed lorem arcu, auctor vel egestas eu, ultricies vitae felis. Sed massa magna, placerat a blandit vel, suscipit quis urna. Sed malesuada dignissim eros, quis congue urna tempus sit amet. Morbi eu ligula ac leo tincidunt faucibus. Suspendisse vel lobortis diam. Quisque sodales pretium orci, et blandit lectus volutpat et. Curabitur non ipsum ligula, sit amet placerat nisi. Praesent eget tempus orci.'),
(96, 'Aden', 'Vivamus a augue sed neque varius lobortis vitae a mauris. Aliquam erat volutpat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque lacinia odio libero, vel bibendum quam. Nunc mattis, orci id dignissim tempor, urna libero feugiat lorem, a dapibus nisi urna vitae libero. Nulla laoreet feugiat rhoncus. Sed tempus magna sed eros pellentesque in dictum erat vestibulum. Aliquam at magna nulla, quis varius ligula. '),
(97, 'Joey', 'Proin volutpat congue blandit. Etiam id risus turpis. Ut elit tortor, volutpat semper porttitor ut, adipiscing ut odio. Vivamus quis leo neque, sed pellentesque libero. Etiam sagittis placerat quam vel bibendum. Curabitur quis mollis felis.'),
(98, 'Oliver', 'Maecenas nec interdum nibh. Suspendisse facilisis semper tellus sed lacinia. Mauris tristique nulla non massa congue pretium. Donec vel sem a massa ultrices fermentum quis et neque. Pellentesque auctor auctor imperdiet. '),
(99, 'Archibald', 'Morbi elementum sem commodo massa ultrices convallis. Aenean condimentum iaculis leo at tristique. Nunc vel nisi at felis semper eleifend. Nam eleifend, sem ac vehicula pellentesque, massa elit ultrices dolor, sit amet interdum neque felis rutrum augue.'),
(100, 'Chinmay', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam metus mauris, vehicula sed ultricies vel, fermentum a purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec et justo et mauris tincidunt elementum at at dui. Phasellus vitae ipsum lorem, non interdum ante. Q');

-- --------------------------------------------------------

--
-- Table structure for table `sehifeler`
--

CREATE TABLE `sehifeler` (
  `id` int(10) NOT NULL,
  `axt_id` varchar(10) NOT NULL,
  `axt_sh` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keyw` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `sh` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sehifeler`
--

INSERT INTO `sehifeler` (`id`, `axt_id`, `axt_sh`, `title`, `keyw`, `desc`, `sh`) VALUES
(1, '2', 'Onlayn dərslər shh Hacmi ve kütlesi olan her şey maddedir', 'Fizika', 'Fizika Valik Əhmədov Ümumi fizika kursu', 'Valik Əhmədovun şərhi ilə ümumi fizika kursunu öyrənəcəksiniz', 'Onlayn dərslər shh\n\nMadde: Hacmi ve kütlesi olan her şey maddedir. Örnek; taş, hava, su, Güneş, köpek, tuz......... Madde olmayanlara örnek: Işık, ısı, ses, .... gibi hacmi ve kütlesi olmayan enerjiler. Madde 3 farklı fiziksel halde bulunabilir. Katı, sıvı, gaz. Katı halde moleküller arası boşluk azdır ve moleküller birbirine sıkı halde bağlanmıştır.\n\nMaddelerin ortak özellikleri: Bütün maddelerde bulunan özellikler. Her madde bu özelliklere sahiptir.\n\n   1.\n      hacim\n   2. kütle\n   3. eylemsizlik\n   4. tanecikli ve boşluklu yapı\n\nOrtak özellikler maddenin cinsine bağlı değil, miktarına bağlıdır. Örneğin hacim. Demirin ve Bakırın hacimleri bunların miktarına bağlıdır. Demirin hacmi 100 cm3 olmalıdır diye bir şey söylemek yanlış olur. 	\n\n \n	Yandaki animasyonda suyun 3 hali ; buz ,su, buhar için moleküllerin durumu gösterilmiştir. Kırmızı nokta oksijen atomunu, maviler ise hidrojen atomlarını gösterir. (H2O). Hal değiştirme ile maddenin moleküler yapısı değişmez. Yani H2O molekülü 3 hal için de aynıdır. Hiç bir halde H ve O atomları birbirinden ayrılmamıştır. Sadece moleküllerin birbirlerine göre konumları ve uzaklıkları değişir. Moleküllerin yapısı değişmeden konumları değişiyorsa buna fiziksel değişme denir. (hal değiştirme, çözünme '),
(2, '3', 'Proektlərimiz shh\r\n\r\nConnector/Net is a fully-managed ADO.NET driver for MySQL.\r\n\r\nStarting with version 6.7, Connector/Net will no longer include the MySQL for Visual Studio integration. That functionality is now available in a separate product called My', 'Proektlərimiz', 'Proektlərimiz', 'Proektlərimiz Proektlərimiz', 'Proektlərimiz shh\r\n\r\nConnector/Net is a fully-managed ADO.NET driver for MySQL.\r\n\r\nStarting with version 6.7, Connector/Net will no longer include the MySQL for Visual Studio integration. That functionality is now available in a separate product called MySQL for Visual Studio available using the MySQL Installer for Windows (see http://dev.mysql.com/tech-resources/articles/mysql-installer-for-windows.html).\r\n\r\nOnline Documentation:\r\n\r\nMySQL Connector/Net Installation Instructions, Documentation and Change History\r\n\r\nPlease report any bugs or inconsistencies you observe to our Bugs Database.\r\nThank you for your support!'),
(3, '3', 'meqale\r\nQlobal şəbəkələr (Wide Area Networks, WAN) — Ərazi kompüter şəbəkələri də adlandırırlar. Onlar region, dövlətlər, kontinent və ya bütün Yer kürəsində yayılmış çoxlu sayda abonentlərə xidmət etmək üçün yaradılıb.', 'Meqaleler', 'meqale', 'meqale', 'Meqale seh\r\n\r\nQlobal şəbəkələr (Wide Area Networks, WAN) — Ərazi kompüter şəbəkələri də adlandırırlar. Onlar region, dövlətlər, kontinent və ya bütün Yer kürəsində yayılmış çoxlu sayda abonentlərə xidmət etmək üçün yaradılıb.\r\n\r\nƏlaqə kanallarının uzunluğunun böyük olmasına görə qlobal şəbəkələrin qurulması böyük xərclər tələb edir, bura kabellərin və onların çəkilmə işlərinin qiyməti, kommutasiya avadanlıqlarının və kanalın lazımi keçirmə zolağını təmin edən aralıq gücləndirici qurğuların xərcləri, həmçinin böyük ərazilərdə yayılmış şəbəkə qurğularının işçi vəziyyətdə saxlanması və istismarı xərcləri də daxildir.\r\n\r\nQlobal şəbəkələr adətən böyük telekommunikasiya şirkətləri tərəfindən abonentlərə pullu xidmət etmək üçün yaradılır.\r\n\r\nQlobal şəbəkələrin qiymətinin baha olmasını nəzərə alaraq istənilən tip verilənləri: kompüter verilənlərini, telefon danışıqları, fakslar, teleqramlar, televiziya görüntüləri, teletekst (iki terminal arasında verilənlərin ötürülməsi), videotekst (şəbəkədə saxlanılan verilənlərin öz terminalına götürmək) və s. verilənləri ötürə bilən vahid qlobal şəbəkənin yaradılma tendensiyası meydana gəlmişdir.'),
(4, '4', 'Əlaqə shh\r\nElektrik şebekesi üretilen elektrik enerjisini kullanıcılara iletmek için oluşturulmuş bileşik bir ağdır. Elektrik gücü üreten enerji santralları', 'Əlaqə', 'Əlaqə', 'Əlaqə', 'Əlaqə shh\r\n\r\nElektrik şebekesi üretilen elektrik enerjisini kullanıcılara iletmek için oluşturulmuş bileşik bir ağdır. Elektrik gücü üreten enerji santralları, üretim kaynaklarından talep merkezlerine enerji aktaran iletim (nakil) hatları ve kullanıcılara bağlantı sağlayan bileşik dağıtım hatlarından oluşur.[1]\r\n\r\nEnerji santralları yakıt kaynaklarına erişim olan yerlerde, baraj bölgelerinde ya da yenilenebilir enerji kaynaklarına yakın olan bölgelerde, ve de çoğunlukla yerleşim alanlarından uzakta konumlanmıştır. Ekonomik ölçekli olması için genellikle oldukça büyük boyutlarda inşa edilirler. Üretilen elektrik enerjisi, gerilimi yükseltilerek iletim şebekesine aktarılır.\r\n\r\nİletim şebekesi elektrik enerjisini uzak mesafelere, zaman zaman bir ülkenin sınırları haricinde de olabilen dağıtım merkezlerine aktarır. Bu dağıtım merkezleri genellikle yerel dağıtım ağını işleten kuruluşlardır.\r\n\r\nİkincil(indirici) merkeze ulaşan elektrik enerjisi, iletim hattı gerilim seviyelerinden dağıtım gerilimi seviyesine indirilir. İndirici merkez çıkışında elektrik enerjisi dağıtım şebekesine aktarılır. Son olarak da servis merkezine ulaşan elektrik enerjisi dağıtım gerilimi seviyesinden gereksinim duyulan servis gerilim(ler)ine indirilir.'),
(9, '10', 'Nyutonun 3-cü qanunu shh\r\nŞin topologiyalı lokal şəbəkə\r\nŞin topologiyalı lokal şəbəkələr ən sadə struktura malikdirlər', 'Nyutonun 3-cü qanunu', 'Nyutonun 3-cü qanunu', 'Nyutonun 3-cü qanunu', 'Nyutonun 3-cü qanunu shh\r\n\r\nŞin topologiyası[redaktə | əsas redaktə]\r\n\r\nŞin topologiyalı lokal şəbəkə\r\nŞin topologiyalı lokal şəbəkələr ən sadə struktura malikdirlər. Bu topologiyada bütün kompüterlər paralel olaraq şinə qoşulurlar. Şin, kompüterləri bir-birinə bağlayan kabel sistemidir. İnformasiya paketlər şəklində şinlə hər iki tərəfə ötürülür.\r\n\r\nİnformasiya göndərmək istəyən kompüter (şəbəkə adapteri) şinin boş olub-olmamasını (yəni şinlə digər kompüterlərin informasiya göndərib-göndərməməsini) yoxlayır. Əgər şin boşdursa kompüter paketləri şinlə ötürür. Paket aşağıdakı hissələrdən ibarətdir:\r\n\r\ninformasiyanın ünvanlandığı kompüterin ünvanı;\r\ninformasiyanı göndərən kompüterin ünvanı;\r\ngöndərilən informasiya;\r\nxidməti sahələr.\r\nHər bir kompüter şinlə ötürülən paketlərin ünvan hissəsinə baxır və ona ünvanlanmış paketləri özündə qeyd edir. Əgər iki kompüter eyni zamanda paketlərini şinə ötürərsə bu zaman şində toqquşma olur. Toqquşmaya səbəb olan kompüterlər qısa bir müddət ərzində informasiya göndərmək hüququnu itirirlər.\r\n\r\nŞin topologiyalı lokal şəbəkələrin əsas üstünlükləri aşağıdakılardır:\r\n\r\nHər hansı bir kompüterin sıradan çıxması şəbəkənin işinə təsir etmir;\r\nŞəbəkəyə yeni kompüterlərin daxil edilməsi asandır;\r\nŞəbəkə kartları (adapterləri) ucuzdur;\r\nŞin topologiyalı lokal şəbəkələrdə şinin (kabel sisteminin) etibarlılığı yüksək olmalıdır. Şin topologiyalı lokal şəbəkələr IEEE 802.3 standartı əsasında qurulurlar. Şin topologiyalı lokal şəbəkələrə nümunə olaraq Ethernet 10 BASE-2, 10 BASE-5 şəbəkələrini göstərmək olar. Burada 10 – şəbəkənin sürətini (Mbit/san) göstərir.'),
(11, '11', 'Aerodinamika shh\r\nAerodinamika fizikanın bölməsi; əsasən havanın hərəkətini öyrənir. Aerodinamikada səs sürətinə (340 m/san) qədərki hərəkətlər öyrənilir.', 'Aerodinamika', 'Aerodinamika', 'Aerodinamika', 'Aerodinamika shh\r\n\r\nAerodinamika fizikanın bölməsi; əsasən havanın hərəkətini öyrənir. Aerodinamikada səs sürətinə (340 m/san) qədərki hərəkətlər öyrənilir. Aerodinamika uçuş aparatlarının və müxtəlif bir neçə elmlərdə tətbiq olunur. Aerodinamika müstəqil elm kimi XX əsrin əvvəllərində aviasiyanın tələbi ilə yaranmışdır.\r\n\r\nBöyük olmayan sürətlərdə havanı sıxılmayan fərz etmək olar. İdeal maye nəzəriyyəsinə görə maye təbəqələri arasında və cisimlə maye arasında sürtünmə qüvvəsi nəzərə alınmır. Bunun nəticəsində məlum Dalamber-Eyler paradoksu (havanın hərəkət edən cismə müqaviməti sıfırdır) yaranır. Buna baxmayaraq bəzi tətbiqi aerodinamika məsələlərinin həllində ideal maye nəzəriyyəsindən istifadə edilir (qanadın qaldırıcı qüvvəsinin təyini və s.).'),
(12, '12', 'İmpuls qanunu shh\r\n\r\nVikipediya, açıq ensiklopediya\r\nİmpuls momenti — maddi nöqtənin O fırlanma mərkəzinə nəzərən impuls momentinin modulu, onun impulsunun modulu ilə çevrənin radiusu hasilinə bərabərdir,L=pr=mυr.', 'İmpuls qanunu', 'İmpuls qanunu', 'İmpuls qanunu', 'İmpuls qanunu shh\r\n\r\nİmpuls momenti\r\nVikipediya, açıq ensiklopediya\r\nİmpuls momenti — maddi nöqtənin O fırlanma mərkəzinə nəzərən impuls momentinin modulu, onun impulsunun modulu ilə çevrənin radiusu hasilinə bərabərdir,L=pr=mυr.\r\n\r\nBS-də impuls momentinin ölçü vahidi-1kqm2/san-dir. Impuls momenti vektotrial kəmiyyətdir və onun istiqaməti sağ yivli burğu qaydasıilə təyin olunur:Burğunun dəstəyini zərrəciyin hərəkəti istiqamətində fırrlatdıqda,onun irəliləmə istiqaməti impuls momenti vektorunun istiqamətini göstərir.\r\n\r\nFırlanma hərəkətinin tənliyi ΔL/Δt=M şəklində yazırlar. Burada M zərrəciyə təsir edən qüvvə momentidir. Həmin tənliyə görə,zərrəciyin impuls momentinin vahid zamanda dəyişməsiona təsir edən qüvvə momentinə bərabərdir. M=0 -dırsa ΔL/Δt=0 və L=const. Bu,İmpuls momentinin saxlanma qanunu-dur: Qapalı sistemdə baş verən istənilən proses zamanı onun impuls momenti sabit qalır. İmpuls momentinin saxlanma qanunu fəzanın izotropluğu ilə əlaqədardır. Yəni qapalı sistemi fəzada müəyyən bucaq qədər fırlatdıqda onun fiziki xassələri dəyişmir. Fırlanan masa üzərində əllərində kantellər tutan çirk ustası açılmış əllərini yığdıqda fırlanma sürətinin artması bu səbəbdəndir.');

-- --------------------------------------------------------

--
-- Table structure for table `slayd`
--

CREATE TABLE `slayd` (
  `id` int(10) NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) NOT NULL,
  `contetnt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slayd`
--

INSERT INTO `slayd` (`id`, `img`, `title`, `contetnt`) VALUES
(1, 'data1/images/1.png', 'Ümumi fizika kursu - hər iki hissə.', 'Ümumi fizika kursu'),
(2, 'data1/images/2.png', 'Mühazirələri əldə etməklə yanaşı həmçinin, testlərlədə biliklərinizi yoxlayın.', 'Mühazirələr, məqalələr, testlər.'),
(3, 'data1/images/3.png', 'Ən son texnoloji xəbərləri həm saytımızda həmdə facebook-səhifəmizdə izləyin.', 'Ən son texnoloji xəbərlər.<br>\r\nfacebook.com/fizika.az'),
(4, 'data1/images/4.png', 'Uyğun mövzuya aid video izahlar və praktiki izahlar.', 'Uyğun mövzuya aid video izahlar:\r\n\r\n<p>video 1</p>\r\n<object width="560" height="315"><param name="movie" value="//www.youtube.com/v/pquYVmefd84?hl=en_US&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/pquYVmefd84?hl=en_US&amp;version=3" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>');

-- --------------------------------------------------------

--
-- Table structure for table `terminler`
--

CREATE TABLE `terminler` (
  `id` int(10) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terminler`
--

INSERT INTO `terminler` (`id`, `type`, `sub_type`, `text`) VALUES
(1, 'war', 'popup', 'Minimum 3 simvol daxil edin'),
(2, 'count', 'search', '5'),
(3, 'count', 'searchtext', '0'),
(4, 'war', 'nosearc', 'Daha məlumat yoxdur.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pasw` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pasw`, `mail`) VALUES
(1, 'admin', 'admin', 'admin@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `xeberler`
--

CREATE TABLE `xeberler` (
  `id` int(10) NOT NULL,
  `bas` varchar(255) NOT NULL,
  `xulase` varchar(255) NOT NULL,
  `tam` longtext NOT NULL,
  `tarix` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xeberler`
--

INSERT INTO `xeberler` (`id`, `bas`, `xulase`, `tam`, `tarix`) VALUES
(1, 'Creative Commons Attribution 2.5 License', 'distributed under the Creative Commons Attribution 2.5 License,  which means that you are free to use and modify it for any purpose. All  ', '<p align="justify"><strong>TechJunkie 1.0</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>. This work is distributed under the Creative Commons Attribution 2.5 License,  which means that you are free to use and modify it for any purpose. All  I ask is that you include a link back to my website in your credits.</p>\r\n                      <p align="justify">For more free designs, you can visit my website to see my other works.</p>\r\n                    <p align="justify">Good luck and I hope you find my free templates useful!</p>', '2011-07-27 09:05:13'),
(2, 'CSS W3C-compliant', 'means that you are free to use and modify it for any purpose. All I ask is that you include a link back to my website in your credits.', '<p align="justify"><strong>TechJunkie 1.0</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>. This work is distributed under the Creative Commons Attribution 2.5 License,  which means that you are free to use and modify it for any purpose. All  I ask is that you include a link back to my website in your credits.</p>\r\n                      <p align="justify">For more free designs, you can visit my website to see my other works.</p>\r\n                    <p align="justify">Good luck and I hope you find my free templates useful!</p>', '2011-07-28 09:07:19'),
(4, 'Что будет с самостройками в Азербайджане?', 'Инвентаризация самостроек в Азербайджане, которую проводили местные исполнительные структуры, уже завершена.', 'Инвентаризация самостроек в Азербайджане, которую проводили местные исполнительные структуры, уже завершена.\r\n\r\nС таким заявлением в беседе с "Эхо" выступил генеральный директор MBA Consulting Нусрет Ибрагимов. \r\n\r\nПо его словам, все информация об инвентаризации в централизованной форме передана в соответствующие инстанции. В целом, по оценкам эксперта, в районах столицы есть примерно 70 тысяч построек, которые не имеют вообще никаких документов. А в пригородах Баку примерно 35% частных домов не имеет купчей, считает Н.Ибрагимов.\r\n \r\nКак сообщал "Эхо" еще в прошлом году исполнительный директор Общественного объединения "Участники имущественного рынка" Рамиль Османов, в Азербайджане 600 тыся самостроек. По его словам, по неофициальным данным, в Баку и на окраинах свыше 30% недвижимости не зарегистрировано. В аналогичных данных официальных кругов говорится о 500 тыс. объектах недвижимости, отмечал эксперт.\r\n \r\nПоследний раз в Баку легализация самовольно построенных домов проводилась в конце 40-х годов XX века. За прошедшие 70 лет в той или иной степени незаконные строения (самостройки) составляют от 40 до 60% жилого фонда бакинских поселков. При этом их жители по ряду законов и положений, например, не имеют права на подключение к коммунальным услугам на законных основаниях. Для этого требуется купчая. \r\n \r\nВ Баку есть дома, которые считаются незаконными аж с 1929 года. Косвенным образом виной тому отсутствие в стране механизма получения прав на строительство и регистрации прав на объект после завершения строительных работ (такой механизм, например, есть в Италии).\r\n \r\nСледует отметить, что проблема самостроек актуальна не только в Азербайджане. В частности, недавно власти испанской провинции Андалусия объявили амнистию нелегально построенным домам. Дело в том, что в Испании много нелегальных домов, поэтому амнистия - единственный способ решить проблему. Президент Андалусии Хосе Антонио Гриньян объявил, что незаконно построенные в регионе дома будут легализованы. Однако он подчеркнул, что это не амнистия, несмотря на всю очевидность этого факта.\r\n \r\n"С одной стороны, это постановление дает ответ муниципалитетам о планах строительства, с другой - это решает проблемы частных владельцев",- сказал Гриньян. Не подлежат амнистии только те дома, которые построены на особо охраняемых территориях или в зонах с повышенным риском наводнения. Согласно некоторым данным, в Андалусии насчитываются 300000 незаконно построенных домов, однако представители левой партии Izquiera Unida утверждают, что их число приближается к 400000. Хосефина Крус Вильялон, министр жилищного строительства, обвиняет во всех бедах британских владельцев недвижимости. По словам Гриньяна, в будущем эти проблемы исчезнут, потому что он будет контролировать ситуацию и построить дом в обход муниципальных властей станет невозможно (tranio.ru).\r\n \r\nПомимо этого самовольно построенные дачи смогут стать легальными и в Украине. 25 июля вступил в силу порядок приема в эксплуатацию индивидуальных жилых домов, садовых, дачных домов, хозяйственных строений и сооружений и пристроек к ним. Соответствующий приказ Минрегионстроя был подписан 24 июня 2011 года. Порядок устанавливает процедуру и условия принятия в эксплуатацию жилых домов, садовых и дачных домов, построенных до 31.12.2009 без разрешения на выполнение строительных работ, заявление о принятии в эксплуатацию которых подано до 31.12.2012. Также документ устанавливает механизм проведения технического обследования их строительных конструкций и инженерных сетей. Согласно установленному порядку, принятие в эксплуатацию указанных объектов проводится бесплатно Государственной архитектурно-строительной инспекцией Украины и ее территориальными органами. Это происходит по результатам технического обследования строительных конструкций и инженерных сетей и при наличии документа, удостоверяющего право собственности или пользования земельным участком, на котором размещен объект.\r\n \r\nПринятие в эксплуатацию проводится путем регистрации поданной заказчиком декларации о готовности объекта к эксплуатации. Заказчик или его уполномоченное лицо подает лично или посылает заказным письмом в инспекцию по местонахождению объекта заявление о принятии в эксплуатацию объекта по установленной форме ("ЛигаБизнесИнформ").', '2011-07-30 11:42:05'),
(5, 'Одна из центральных улиц Баку закрывается на длительный срок', 'С 1 августа будет закрыта улица Фирудина Агаева, ведущая от станции метро "Эльмляр Академиясы" до Бакинского Государственного Университета.', 'С 1 августа будет закрыта улица Фирудина Агаева, ведущая от станции метро "Эльмляр Академиясы" до Бакинского Государственного Университета.\r\n \r\nОб этом Day.Az сообщил заведующий секретариатом Министерства транспорта Азербайджана Намик Гасанов.\r\n \r\nПо его словам, причиной закрытия дороги является строительство подземного туннеля.\r\n \r\n"Движение транспорта в данном направлении будет приостановлено на 1-2 года. После завершения строительных работ движение по этой улице будет восстановлено", - заявил Н.Гасанов.', '2011-07-30 11:43:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pages`
--
ALTER TABLE `admin_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axtaris`
--
ALTER TABLE `axtaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_proj`
--
ALTER TABLE `last_proj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginate`
--
ALTER TABLE `paginate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sehifeler`
--
ALTER TABLE `sehifeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slayd`
--
ALTER TABLE `slayd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `terminler`
--
ALTER TABLE `terminler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xeberler`
--
ALTER TABLE `xeberler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `axtaris`
--
ALTER TABLE `axtaris`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `last_proj`
--
ALTER TABLE `last_proj`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `paginate`
--
ALTER TABLE `paginate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `sehifeler`
--
ALTER TABLE `sehifeler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slayd`
--
ALTER TABLE `slayd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `terminler`
--
ALTER TABLE `terminler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `xeberler`
--
ALTER TABLE `xeberler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
