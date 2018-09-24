-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 08:14 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `submit_by` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nama`, `jenis_kelamin`, `kecamatan`, `submit_by`) VALUES
(14, 'Hasnah', 'Perempuan', 'Kenohan', 1),
(15, 'MEGA', 'Perempuan', 'Kenohan', 1),
(16, 'Uda', 'Perempuan', 'Kenohan', 1),
(17, 'Selamat', 'Laki - Laki', 'Kenohan', 1),
(18, 'Akmad D', 'Laki - Laki', 'Kenohan', 1),
(19, 'Asra', 'Laki - Laki', 'Kenohan', 1),
(20, 'Katim', 'Laki - Laki', 'Kenohan', 1),
(21, 'Sumi', 'Perempuan', 'Kenohan', 1),
(22, 'Kardi', 'Laki - Laki', 'Kenohan', 1),
(23, 'ARMANIAH', 'Perempuan', 'Kenohan', 1),
(24, 'ASMUIN', 'Laki - Laki', 'Kenohan', 1),
(25, 'HASTA', 'Perempuan', 'Kenohan', 1),
(26, 'IWANSYAH', 'Laki - Laki', 'Kenohan', 1),
(27, 'KAMSIAH', 'Perempuan', 'Kenohan', 1),
(28, 'KATOK', 'Perempuan', 'Kenohan', 1),
(29, 'MAYAH', 'Perempuan', 'Kenohan', 1),
(30, 'TIAH', 'Perempuan', 'Kenohan', 1),
(31, 'UBEM', 'Perempuan', 'Kenohan', 1),
(32, 'HADI MUHAROM', 'Laki - Laki', 'Kota Bangun', 1),
(33, 'SRI TENTREM', 'Perempuan', 'Kota Bangun', 1),
(34, 'SUHERLAN', 'Laki - Laki', 'Kota Bangun', 1),
(35, 'SUPADI', 'Laki - Laki', 'Kota Bangun', 1),
(36, 'SUPATIN', 'Perempuan', 'Kota Bangun', 1),
(37, 'TUKINI', 'Perempuan', 'Kota Bangun', 1),
(38, 'WIGNYO TARUNO', 'Laki - Laki', 'Kota Bangun', 1),
(39, 'ANTOYO', 'Laki - Laki', 'Kota Bangun', 1),
(40, 'SARDI', 'Laki - Laki', 'Kota Bangun', 1),
(41, 'SINIAH', 'Perempuan', 'Kota Bangun', 1),
(42, 'SISIP', 'Perempuan', 'Kota Bangun', 1),
(43, 'SUMI', 'Perempuan', 'Kota Bangun', 1),
(44, 'SURIP', 'Perempuan', 'Kota Bangun', 1),
(45, 'SUTINU', 'Laki - Laki', 'Kota Bangun', 1),
(46, 'NIYEM', 'Perempuan', 'Kota Bangun', 1),
(47, 'SARKAM', 'Laki - Laki', 'Kota Bangun', 1),
(48, 'SUKESI', 'Perempuan', 'Kota Bangun', 1),
(49, 'TIYAH', 'Perempuan', 'Kota Bangun', 1),
(50, 'ACAT', 'Laki - Laki', 'Kota Bangun', 1),
(51, 'IRAWAN', 'Laki - Laki', 'Kota Bangun', 1),
(52, 'ANYOL', 'Perempuan', 'Kota Bangun', 1),
(53, 'BUDIARTO', 'Laki - Laki', 'Kota Bangun', 1),
(54, 'BAHRIL', 'Laki - Laki', 'Kota Bangun', 1),
(55, 'DANI HAMDANI', 'Laki - Laki', 'Kota Bangun', 1),
(56, 'DEWI KHUSNUL MUFIDA', 'Perempuan', 'Kota Bangun', 1),
(57, 'RAHMADANI', 'Laki - Laki', 'Kota Bangun', 1),
(58, 'ROHANA', 'Perempuan', 'Kota Bangun', 1),
(59, 'SUKARNI', 'Perempuan', 'Kota Bangun', 1),
(60, 'TEGUH WALUYO', 'Laki - Laki', 'Kota Bangun', 1),
(61, 'WIDIANINGSIH', 'Perempuan', 'Kota Bangun', 1),
(62, 'JAMILA KARMILA', 'Perempuan', 'Kota Bangun', 1),
(63, 'RUSDI ANIN', 'Laki - Laki', 'Kota Bangun', 1),
(64, 'SERIAH', 'Perempuan', 'Kota Bangun', 1),
(65, 'SUPINAH', 'Perempuan', 'Kota Bangun', 1),
(66, 'DARMIAH', 'Perempuan', 'Kota Bangun', 1),
(67, 'JAMIATUN', 'Perempuan', 'Kota Bangun', 1),
(68, 'MUNDAL', 'Laki - Laki', 'Kota Bangun', 1),
(69, 'SYAHIDIN', 'Laki - Laki', 'Kota Bangun', 1),
(70, 'ARDI', 'Laki - Laki', 'Kota Bangun', 1),
(71, 'ARNAIN', 'Laki - Laki', 'Kota Bangun', 1),
(72, 'JEMHARI', 'Laki - Laki', 'Kota Bangun', 1),
(73, 'JUMIATI', 'Perempuan', 'Kota Bangun', 1),
(74, 'M SYARKASI', 'Laki - Laki', 'Kota Bangun', 1),
(75, 'RENDI', 'Laki - Laki', 'Kota Bangun', 1),
(76, 'RIFADDIN', 'Laki - Laki', 'Kota Bangun', 1),
(77, 'TAHLIN', 'Laki - Laki', 'Kota Bangun', 1),
(78, 'TIKO', 'Perempuan', 'Kota Bangun', 1),
(79, 'ARISKA SARI', 'Perempuan', 'Kota Bangun', 1),
(80, 'AYA', 'Perempuan', 'Kota Bangun', 1),
(81, 'AYUH', 'Laki - Laki', 'Kota Bangun', 1),
(82, 'DARLANSAHNI', 'Laki - Laki', 'Kota Bangun', 1),
(83, 'IBNU AROBI AL- HALAT', 'Laki - Laki', 'Kota Bangun', 1),
(84, 'KARNITI', 'Perempuan', 'Kota Bangun', 1),
(85, 'NANANG', 'Laki - Laki', 'Kota Bangun', 1),
(86, 'NORMA YUNITA', 'Perempuan', 'Kota Bangun', 1),
(87, 'SABRAN/ABONG', 'Laki - Laki', 'Kota Bangun', 1),
(88, 'ZAINUL ABIDIN', 'Laki - Laki', 'Kota Bangun', 1),
(89, 'AKHMAD', 'Laki - Laki', 'Kota Bangun', 1),
(90, 'ALIMAN', 'Laki - Laki', 'Kota Bangun', 1),
(91, 'ARMIYAH', 'Perempuan', 'Kota Bangun', 1),
(92, 'BANI', 'Perempuan', 'Kota Bangun', 1),
(93, 'DELENG', 'Laki - Laki', 'Kota Bangun', 1),
(94, 'IRIANSYAH', 'Laki - Laki', 'Kota Bangun', 1),
(95, 'IYUT', 'Perempuan', 'Kota Bangun', 1),
(96, 'JAMSYAH', 'Perempuan', 'Kota Bangun', 1),
(97, 'JURNI', 'Laki - Laki', 'Kota Bangun', 1),
(98, 'LINA', 'Perempuan', 'Kota Bangun', 1),
(99, 'MASDIANA', 'Perempuan', 'Kota Bangun', 1),
(100, 'SALMAH', 'Perempuan', 'Kota Bangun', 1),
(101, 'AGUS SALIM', 'Laki - Laki', 'Kota Bangun', 1),
(102, 'ARDAN', 'Laki - Laki', 'Kota Bangun', 1),
(103, 'ARMAIN', 'Laki - Laki', 'Kota Bangun', 1),
(104, 'INDRA MAULANA', 'Laki - Laki', 'Kota Bangun', 1),
(105, 'JUNIAH', 'Perempuan', 'Kota Bangun', 1),
(106, 'LIANA WATI', 'Perempuan', 'Kota Bangun', 1),
(107, 'MAINUR', 'Perempuan', 'Kota Bangun', 1),
(108, 'RAHMAN', 'Laki - Laki', 'Kota Bangun', 1),
(109, 'SUDIRMAN', 'Laki - Laki', 'Kota Bangun', 1),
(110, 'AHMADI', 'Laki - Laki', 'Kota Bangun', 1),
(111, 'APRIANSYAH', 'Laki - Laki', 'Kota Bangun', 1),
(112, 'HADRI', 'Laki - Laki', 'Kota Bangun', 1),
(113, 'HALIMAH', 'Perempuan', 'Kota Bangun', 1),
(114, 'HERLINA', 'Perempuan', 'Kota Bangun', 1),
(115, 'IRMANSYAH', 'Laki - Laki', 'Kota Bangun', 1),
(116, 'TIAH', 'Perempuan', 'Kota Bangun', 1),
(117, 'UCCI', 'Perempuan', 'Kota Bangun', 1),
(118, 'AINUN', 'Perempuan', 'Kota Bangun', 1),
(119, 'MANSYAH', 'Laki - Laki', 'Kota Bangun', 1),
(120, 'MUS MULIADI', 'Laki - Laki', 'Kota Bangun', 1);

-- --------------------------------------------------------

--
-- Table structure for table `calon_subkriteria`
--

CREATE TABLE `calon_subkriteria` (
  `id` int(11) NOT NULL,
  `calon_id` int(11) DEFAULT NULL,
  `subkriteria_id` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_subkriteria`
--

INSERT INTO `calon_subkriteria` (`id`, `calon_id`, `subkriteria_id`, `value`) VALUES
(31, 14, 18, 55),
(32, 15, 18, 29),
(33, 16, 18, 52),
(34, 17, 18, 83),
(35, 18, 18, 76),
(36, 19, 18, 47),
(37, 20, 18, 65),
(38, 21, 18, 42),
(39, 22, 18, 53),
(40, 23, 18, 44),
(41, 24, 18, 28),
(42, 25, 18, 47),
(43, 26, 18, 33),
(44, 27, 18, 59),
(45, 28, 18, 74),
(46, 29, 18, 49),
(47, 30, 18, 41),
(48, 31, 18, 45),
(49, 32, 18, 18),
(50, 33, 18, 58),
(51, 34, 18, 44),
(52, 35, 18, 41),
(53, 36, 18, 58),
(54, 37, 18, 54),
(55, 38, 18, 89),
(56, 39, 18, 36),
(57, 40, 18, 50),
(58, 41, 18, 56),
(59, 42, 18, 33),
(60, 43, 18, 32),
(61, 44, 18, 41),
(62, 45, 18, 24),
(63, 46, 18, 57),
(64, 47, 18, 76),
(65, 48, 18, 25),
(66, 49, 18, 58),
(67, 50, 18, 84),
(68, 51, 18, 40),
(69, 52, 18, 68),
(70, 53, 18, 37),
(71, 54, 18, 29),
(72, 55, 18, 28),
(73, 56, 18, 27),
(74, 57, 18, 29),
(75, 58, 18, 32),
(76, 59, 18, 43),
(77, 60, 18, 22),
(78, 61, 18, 45),
(79, 62, 18, 18),
(80, 63, 18, 57),
(81, 64, 18, 70),
(82, 65, 18, 50),
(83, 66, 18, 54),
(84, 67, 18, 52),
(85, 68, 18, 71),
(86, 69, 18, 45),
(87, 70, 18, 46),
(88, 71, 18, 59),
(89, 72, 18, 45),
(90, 73, 18, 48),
(91, 74, 18, 72),
(92, 75, 18, 20),
(93, 76, 18, 35),
(94, 77, 18, 34),
(95, 78, 18, 34),
(96, 79, 18, 20),
(97, 80, 18, 35),
(98, 81, 18, 62),
(99, 82, 18, 37),
(100, 83, 18, 24),
(101, 84, 18, 35),
(102, 85, 18, 55),
(103, 86, 18, 21),
(104, 87, 18, 45),
(105, 88, 18, 61),
(106, 89, 18, 57),
(107, 90, 18, 26),
(108, 91, 18, 44),
(109, 92, 18, 58),
(110, 93, 18, 63),
(111, 94, 18, 28),
(112, 95, 18, 50),
(113, 96, 18, 62),
(114, 97, 18, 30),
(115, 98, 18, 29),
(116, 99, 18, 42),
(117, 100, 18, 62),
(118, 101, 18, 26),
(119, 102, 18, 24),
(120, 103, 18, 48),
(121, 104, 18, 30),
(122, 105, 18, 46),
(123, 106, 18, 23),
(124, 107, 18, 22),
(125, 108, 18, 31),
(126, 109, 18, 35),
(127, 110, 18, 52),
(128, 111, 18, 26),
(129, 112, 18, 55),
(130, 113, 18, 32),
(131, 114, 18, 31),
(132, 115, 18, 39),
(133, 116, 18, 52),
(134, 117, 18, 48),
(135, 118, 18, 59),
(136, 119, 18, 37),
(137, 120, 18, 36),
(412, 14, 4, 0),
(413, 15, 1, 0),
(414, 16, 1, 0),
(415, 17, 4, 0),
(416, 18, 4, 0),
(417, 19, 4, 0),
(418, 20, 1, 0),
(419, 21, 4, 0),
(420, 22, 4, 0),
(421, 23, 4, 0),
(422, 24, 1, 0),
(423, 25, 1, 0),
(424, 26, 1, 0),
(425, 27, 4, 0),
(426, 28, 1, 0),
(427, 29, 3, 0),
(428, 30, 3, 0),
(429, 31, 1, 0),
(430, 32, 1, 0),
(431, 33, 3, 0),
(432, 34, 1, 0),
(433, 35, 4, 0),
(434, 36, 4, 0),
(435, 37, 3, 0),
(436, 38, 4, 0),
(437, 39, 2, 0),
(438, 40, 4, 0),
(439, 41, 3, 0),
(440, 42, 1, 0),
(441, 43, 2, 0),
(442, 44, 1, 0),
(443, 45, 1, 0),
(444, 46, 4, 0),
(445, 47, 4, 0),
(446, 48, 1, 0),
(447, 49, 4, 0),
(448, 50, 4, 0),
(449, 51, 2, 0),
(450, 52, 1, 0),
(451, 53, 1, 0),
(452, 54, 1, 0),
(453, 55, 4, 0),
(454, 56, 4, 0),
(455, 57, 1, 0),
(456, 58, 1, 0),
(457, 59, 1, 0),
(458, 60, 1, 0),
(459, 61, 1, 0),
(460, 62, 1, 0),
(461, 63, 4, 0),
(462, 64, 3, 0),
(463, 65, 1, 0),
(464, 66, 1, 0),
(465, 67, 3, 0),
(466, 68, 1, 0),
(467, 69, 4, 0),
(468, 70, 1, 0),
(469, 71, 2, 0),
(470, 72, 4, 0),
(471, 73, 2, 0),
(472, 74, 3, 0),
(473, 75, 1, 0),
(474, 76, 1, 0),
(475, 77, 1, 0),
(476, 78, 4, 0),
(477, 79, 1, 0),
(478, 80, 1, 0),
(479, 81, 1, 0),
(480, 82, 1, 0),
(481, 83, 1, 0),
(482, 84, 1, 0),
(483, 85, 1, 0),
(484, 86, 1, 0),
(485, 87, 1, 0),
(486, 88, 4, 0),
(487, 89, 1, 0),
(488, 90, 1, 0),
(489, 91, 4, 0),
(490, 92, 1, 0),
(491, 93, 4, 0),
(492, 94, 1, 0),
(493, 95, 1, 0),
(494, 96, 4, 0),
(495, 97, 1, 0),
(496, 98, 2, 0),
(497, 99, 2, 0),
(498, 100, 1, 0),
(499, 101, 1, 0),
(500, 102, 1, 0),
(501, 103, 4, 0),
(502, 104, 2, 0),
(503, 105, 3, 0),
(504, 106, 1, 0),
(505, 107, 1, 0),
(506, 108, 1, 0),
(507, 109, 2, 0),
(508, 110, 1, 0),
(509, 111, 1, 0),
(510, 112, 1, 0),
(511, 113, 1, 0),
(512, 114, 1, 0),
(513, 115, 1, 0),
(514, 116, 3, 0),
(515, 117, 2, 0),
(516, 118, 4, 0),
(517, 119, 1, 0),
(518, 120, 3, 0),
(539, 14, 9, 0),
(540, 15, 8, 0),
(541, 16, 8, 0),
(542, 17, 9, 0),
(543, 18, 8, 0),
(544, 19, 9, 0),
(545, 20, 9, 0),
(546, 21, 8, 0),
(547, 22, 9, 0),
(548, 23, 9, 0),
(549, 24, 9, 0),
(550, 25, 9, 0),
(551, 26, 9, 0),
(552, 27, 9, 0),
(553, 28, 8, 0),
(554, 29, 9, 0),
(555, 30, 9, 0),
(556, 31, 8, 0),
(557, 32, 8, 0),
(558, 33, 9, 0),
(559, 34, 10, 0),
(560, 35, 9, 0),
(561, 36, 9, 0),
(562, 37, 8, 0),
(563, 38, 8, 0),
(564, 39, 9, 0),
(565, 40, 9, 0),
(566, 41, 9, 0),
(567, 42, 9, 0),
(568, 43, 8, 0),
(569, 44, 8, 0),
(570, 45, 8, 0),
(571, 46, 9, 0),
(572, 47, 8, 0),
(573, 48, 8, 0),
(574, 49, 8, 0),
(575, 50, 9, 0),
(576, 51, 8, 0),
(577, 52, 8, 0),
(578, 53, 8, 0),
(579, 54, 9, 0),
(580, 55, 10, 0),
(581, 56, 9, 0),
(582, 57, 9, 0),
(583, 58, 8, 0),
(584, 59, 8, 0),
(585, 60, 8, 0),
(586, 61, 8, 0),
(587, 62, 10, 0),
(588, 63, 9, 0),
(589, 64, 9, 0),
(590, 65, 8, 0),
(591, 66, 9, 0),
(592, 67, 8, 0),
(593, 68, 8, 0),
(594, 69, 9, 0),
(595, 70, 9, 0),
(596, 71, 9, 0),
(597, 72, 9, 0),
(598, 73, 8, 0),
(599, 74, 9, 0),
(600, 75, 8, 0),
(601, 76, 8, 0),
(602, 77, 8, 0),
(603, 78, 9, 0),
(604, 79, 10, 0),
(605, 80, 9, 0),
(606, 81, 9, 0),
(607, 82, 8, 0),
(608, 83, 8, 0),
(609, 84, 9, 0),
(610, 85, 9, 0),
(611, 86, 9, 0),
(612, 87, 8, 0),
(613, 88, 9, 0),
(614, 89, 8, 0),
(615, 90, 9, 0),
(616, 91, 8, 0),
(617, 92, 8, 0),
(618, 93, 8, 0),
(619, 94, 8, 0),
(620, 95, 8, 0),
(621, 96, 8, 0),
(622, 97, 11, 0),
(623, 98, 9, 0),
(624, 99, 11, 0),
(625, 100, 8, 0),
(626, 101, 10, 0),
(627, 102, 9, 0),
(628, 103, 11, 0),
(629, 104, 9, 0),
(630, 105, 9, 0),
(631, 106, 8, 0),
(632, 107, 8, 0),
(633, 108, 8, 0),
(634, 109, 9, 0),
(635, 110, 11, 0),
(636, 111, 9, 0),
(637, 112, 9, 0),
(638, 113, 8, 0),
(639, 114, 8, 0),
(640, 115, 10, 0),
(641, 116, 9, 0),
(642, 117, 8, 0),
(643, 118, 9, 0),
(644, 119, 8, 0),
(645, 120, 9, 0),
(666, 14, 5, 0),
(667, 15, 6, 0),
(668, 16, 5, 0),
(669, 17, 7, 0),
(670, 18, 5, 0),
(671, 19, 5, 0),
(672, 20, 5, 0),
(673, 21, 5, 0),
(674, 22, 5, 0),
(675, 23, 5, 0),
(676, 24, 5, 0),
(677, 25, 5, 0),
(678, 26, 5, 0),
(679, 27, 5, 0),
(680, 28, 5, 0),
(681, 29, 5, 0),
(682, 30, 5, 0),
(683, 31, 5, 0),
(684, 32, 5, 0),
(685, 33, 5, 0),
(686, 34, 6, 0),
(687, 35, 5, 0),
(688, 36, 5, 0),
(689, 37, 5, 0),
(690, 38, 5, 0),
(691, 39, 5, 0),
(692, 40, 5, 0),
(693, 41, 5, 0),
(694, 42, 6, 0),
(695, 43, 6, 0),
(696, 44, 6, 0),
(697, 45, 6, 0),
(698, 46, 5, 0),
(699, 47, 5, 0),
(700, 48, 6, 0),
(701, 49, 5, 0),
(702, 50, 5, 0),
(703, 51, 6, 0),
(704, 52, 5, 0),
(705, 53, 6, 0),
(706, 54, 5, 0),
(707, 55, 5, 0),
(708, 56, 5, 0),
(709, 57, 5, 0),
(710, 58, 5, 0),
(711, 59, 5, 0),
(712, 60, 5, 0),
(713, 61, 5, 0),
(714, 62, 5, 0),
(715, 63, 5, 0),
(716, 64, 5, 0),
(717, 65, 6, 0),
(718, 66, 5, 0),
(719, 67, 5, 0),
(720, 68, 5, 0),
(721, 69, 5, 0),
(722, 70, 5, 0),
(723, 71, 5, 0),
(724, 72, 5, 0),
(725, 73, 5, 0),
(726, 74, 5, 0),
(727, 75, 6, 0),
(728, 76, 6, 0),
(729, 77, 6, 0),
(730, 78, 5, 0),
(731, 79, 5, 0),
(732, 80, 6, 0),
(733, 81, 5, 0),
(734, 82, 6, 0),
(735, 83, 5, 0),
(736, 84, 6, 0),
(737, 85, 5, 0),
(738, 86, 6, 0),
(739, 87, 6, 0),
(740, 88, 5, 0),
(741, 89, 6, 0),
(742, 90, 5, 0),
(743, 91, 6, 0),
(744, 92, 6, 0),
(745, 93, 6, 0),
(746, 94, 5, 0),
(747, 95, 6, 0),
(748, 96, 5, 0),
(749, 97, 6, 0),
(750, 98, 5, 0),
(751, 99, 6, 0),
(752, 100, 6, 0),
(753, 101, 6, 0),
(754, 102, 5, 0),
(755, 103, 5, 0),
(756, 104, 5, 0),
(757, 105, 5, 0),
(758, 106, 6, 0),
(759, 107, 6, 0),
(760, 108, 6, 0),
(761, 109, 5, 0),
(762, 110, 6, 0),
(763, 111, 6, 0),
(764, 112, 6, 0),
(765, 113, 6, 0),
(766, 114, 5, 0),
(767, 115, 5, 0),
(768, 116, 6, 0),
(769, 117, 6, 0),
(770, 118, 5, 0),
(771, 119, 6, 0),
(772, 120, 5, 0),
(793, 14, 17, 0),
(794, 15, 17, 0),
(795, 16, 17, 0),
(796, 17, 17, 0),
(797, 18, 14, 0),
(798, 19, 17, 0),
(799, 20, 13, 0),
(800, 21, 17, 0),
(801, 22, 14, 0),
(802, 23, 17, 0),
(803, 24, 17, 0),
(804, 25, 17, 0),
(805, 26, 17, 0),
(806, 27, 15, 0),
(807, 28, 13, 0),
(808, 29, 14, 0),
(809, 30, 14, 0),
(810, 31, 17, 0),
(811, 32, 17, 0),
(812, 33, 14, 0),
(813, 34, 13, 0),
(814, 35, 17, 0),
(815, 36, 17, 0),
(816, 37, 17, 0),
(817, 38, 14, 0),
(818, 39, 16, 0),
(819, 40, 15, 0),
(820, 41, 17, 0),
(821, 42, 17, 0),
(822, 43, 16, 0),
(823, 44, 17, 0),
(824, 45, 17, 0),
(825, 46, 14, 0),
(826, 47, 17, 0),
(827, 48, 17, 0),
(828, 49, 17, 0),
(829, 50, 15, 0),
(830, 51, 16, 0),
(831, 52, 13, 0),
(832, 53, 17, 0),
(833, 54, 17, 0),
(834, 55, 15, 0),
(835, 56, 17, 0),
(836, 57, 17, 0),
(837, 58, 17, 0),
(838, 59, 17, 0),
(839, 60, 17, 0),
(840, 61, 17, 0),
(841, 62, 17, 0),
(842, 63, 13, 0),
(843, 64, 13, 0),
(844, 65, 17, 0),
(845, 66, 13, 0),
(846, 67, 17, 0),
(847, 68, 17, 0),
(848, 69, 17, 0),
(849, 70, 17, 0),
(850, 71, 13, 0),
(851, 72, 13, 0),
(852, 73, 13, 0),
(853, 74, 14, 0),
(854, 75, 17, 0),
(855, 76, 17, 0),
(856, 77, 17, 0),
(857, 78, 17, 0),
(858, 79, 15, 0),
(859, 80, 17, 0),
(860, 81, 17, 0),
(861, 82, 17, 0),
(862, 83, 13, 0),
(863, 84, 17, 0),
(864, 85, 17, 0),
(865, 86, 13, 0),
(866, 87, 17, 0),
(867, 88, 13, 0),
(868, 89, 13, 0),
(869, 90, 13, 0),
(870, 91, 13, 0),
(871, 92, 17, 0),
(872, 93, 17, 0),
(873, 94, 17, 0),
(874, 95, 13, 0),
(875, 96, 17, 0),
(876, 97, 16, 0),
(877, 98, 17, 0),
(878, 99, 13, 0),
(879, 100, 13, 0),
(880, 101, 16, 0),
(881, 102, 13, 0),
(882, 103, 13, 0),
(883, 104, 13, 0),
(884, 105, 17, 0),
(885, 106, 17, 0),
(886, 107, 17, 0),
(887, 108, 17, 0),
(888, 109, 15, 0),
(889, 110, 13, 0),
(890, 111, 13, 0),
(891, 112, 17, 0),
(892, 113, 17, 0),
(893, 114, 17, 0),
(894, 115, 17, 0),
(895, 116, 17, 0),
(896, 117, 16, 0),
(897, 118, 13, 0),
(898, 119, 17, 0),
(899, 120, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `program_bantuan_id` int(11) NOT NULL,
  `calon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `bobot`, `jenis`) VALUES
(3, 'Status Perkawinan', 3, 'Benefit'),
(4, 'Jenis Kecacatan', 4, 'Benefit'),
(5, 'Pendidikan', 2, 'Cost'),
(6, 'Penyebab Kecacatan', 5, 'Benefit'),
(7, 'Umur', 5, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `program_bantuan`
--

CREATE TABLE `program_bantuan` (
  `id` int(11) NOT NULL,
  `jenis_program` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `kriteria_id` int(11) DEFAULT '0',
  `nama` varchar(50) DEFAULT '0',
  `bobot` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `kriteria_id`, `nama`, `bobot`) VALUES
(1, 3, 'Belum Kawin', 4),
(2, 3, 'Cerai Mati', 3),
(3, 3, 'Cerai Hidup', 2),
(4, 3, 'Kawin', 1),
(5, 4, 'Cacat Fisik', 2),
(6, 4, 'Cacat Mental', 4),
(7, 4, 'Cacat Fisik dan Mental', 5),
(8, 5, 'Belum/Tidak Tamat SD/Sederajat', 5),
(9, 5, 'SD/MI/Sederajat', 1),
(10, 5, 'SLTP/MTs/Sederajat', 2),
(11, 5, 'SLTA/MA/Sederajat', 3),
(12, 5, 'Diploma/S1/S2/S3', 4),
(13, 6, 'Sakit', 1),
(14, 6, 'Umur', 2),
(15, 6, 'Kecelakaan', 3),
(16, 6, 'Depresi', 4),
(17, 6, 'Sejak Lahir', 5),
(18, 7, 'input', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_by` (`submit_by`);

--
-- Indexes for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calon_id` (`calon_id`),
  ADD KEY `subkriteria_id` (`subkriteria_id`);

--
-- Indexes for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_bantuan_id` (`program_bantuan_id`),
  ADD KEY `calon_id` (`calon_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `program_bantuan`
--
ALTER TABLE `program_bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_id` (`kriteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=900;

--
-- AUTO_INCREMENT for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program_bantuan`
--
ALTER TABLE `program_bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`submit_by`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `calon_subkriteria`
--
ALTER TABLE `calon_subkriteria`
  ADD CONSTRAINT `FK__calon` FOREIGN KEY (`calon_id`) REFERENCES `calon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__subkriteria` FOREIGN KEY (`subkriteria_id`) REFERENCES `subkriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD CONSTRAINT `hasil_seleksi_ibfk_1` FOREIGN KEY (`program_bantuan_id`) REFERENCES `program_bantuan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_seleksi_ibfk_2` FOREIGN KEY (`calon_id`) REFERENCES `calon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `FK_subkriteria_kriteria` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
