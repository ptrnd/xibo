-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2021 at 01:57 AM
-- Server version: 10.6.2-MariaDB-log
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `logId` int(11) NOT NULL,
  `logDate` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entity` varchar(50) NOT NULL,
  `entityId` int(11) NOT NULL,
  `objectAfter` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auditlog`
--

INSERT INTO `auditlog` (`logId`, `logDate`, `userId`, `message`, `entity`, `entityId`, `objectAfter`) VALUES
(1, 1631416819, 0, 'Added', 'Media', 1, '{\"mediaId\":1,\"name\":\"Logo\",\"mediaType\":\"image\",\"fileName\":\"xibo_logo_square.png\"}'),
(2, 1631416819, 0, 'Added', 'Media', 2, '{\"mediaId\":2,\"name\":\"Default Layout Background\",\"mediaType\":\"image\",\"fileName\":\"default layout3 background.jpg\"}'),
(3, 1631416820, 0, 'Added', 'Widget', 1, '{\"widgetId\":1,\"type\":\"image\",\"layoutId\":\"1\",\"campaignId\":\"1\"}'),
(4, 1631416820, 0, 'Saved', 'Playlist', 1, '{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}'),
(5, 1631416820, 0, 'Added', 'Widget', 2, '{\"widgetId\":2,\"type\":\"text\",\"layoutId\":\"1\",\"campaignId\":\"1\"}'),
(6, 1631416820, 0, 'Saved', 'Playlist', 2, '{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}'),
(7, 1631416820, 0, 'Added', 'Widget', 3, '{\"widgetId\":3,\"type\":\"spacer\",\"layoutId\":\"1\",\"campaignId\":\"1\"}'),
(8, 1631416820, 0, 'Added', 'Widget', 4, '{\"widgetId\":4,\"type\":\"text\",\"layoutId\":\"1\",\"campaignId\":\"1\"}'),
(9, 1631416820, 0, 'Saved', 'Playlist', 3, '{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}'),
(10, 1631416820, 0, 'Added', 'Widget', 5, '{\"widgetId\":5,\"type\":\"clock\",\"layoutId\":\"1\",\"campaignId\":\"1\"}'),
(11, 1631416820, 0, 'Saved', 'Playlist', 4, '{\"campaignId\":[\"1\"],\"layoutId\":[\"1\"]}'),
(12, 1631416820, 0, 'Added', 'Media', 3, '{\"mediaId\":3,\"name\":\"jquery-1.11.1.min.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(13, 1631416820, 0, 'Added', 'Media', 4, '{\"mediaId\":4,\"name\":\"moment.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(14, 1631416820, 0, 'Added', 'Media', 5, '{\"mediaId\":5,\"name\":\"xibo-layout-scaler.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(15, 1631416820, 0, 'Added', 'Media', 6, '{\"mediaId\":6,\"name\":\"xibo-text-render.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-text-render.js\"}'),
(16, 1631416820, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(17, 1631416820, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(18, 1631416820, 0, 'Added', 'Media', 7, '{\"mediaId\":7,\"name\":\"Chart.min.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/Chart.min.js\"}'),
(19, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(20, 1631416821, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(21, 1631416821, 0, 'Added', 'Media', 8, '{\"mediaId\":8,\"name\":\"jquery-cycle-2.1.6.min.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(22, 1631416821, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(23, 1631416821, 0, 'Added', 'Media', 9, '{\"mediaId\":9,\"name\":\"flipclock.min.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/flipclock.min.js\"}'),
(24, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(25, 1631416821, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(26, 1631416821, 0, 'Added', 'Media', 10, '{\"mediaId\":10,\"name\":\"xibo-countdown-render.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-countdown-render.js\"}'),
(27, 1631416821, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(28, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(29, 1631416821, 0, 'Added', 'Media', 11, '{\"mediaId\":11,\"name\":\"bootstrap.min.css\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/bootstrap.min.css\"}'),
(30, 1631416821, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(31, 1631416821, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(32, 1631416821, 0, 'Added', 'Media', 12, '{\"mediaId\":12,\"name\":\"jquery.marquee.min.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery.marquee.min.js\"}'),
(33, 1631416821, 0, 'Updated', 'Media', 8, '{\"fileName\":\"jquery-cycle-2.1.6.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(34, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(35, 1631416821, 0, 'Updated', 'Media', 6, '{\"fileName\":\"xibo-text-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-text-render.js\"}'),
(36, 1631416821, 0, 'Added', 'Media', 13, '{\"mediaId\":13,\"name\":\"xibo-image-render.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-image-render.js\"}'),
(37, 1631416821, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(38, 1631416821, 0, 'Updated', 'Media', 8, '{\"fileName\":\"jquery-cycle-2.1.6.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(39, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(40, 1631416821, 0, 'Added', 'Media', 14, '{\"mediaId\":14,\"name\":\"xibo-dataset-render.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-dataset-render.js\"}'),
(41, 1631416821, 0, 'Updated', 'Media', 13, '{\"fileName\":\"xibo-image-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-image-render.js\"}'),
(42, 1631416821, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(43, 1631416821, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(44, 1631416821, 0, 'Updated', 'Media', 13, '{\"fileName\":\"xibo-image-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-image-render.js\"}'),
(45, 1631416822, 0, 'Added', 'Media', 15, '{\"mediaId\":15,\"name\":\"Aileron Heavy Regular\",\"mediaType\":\"font\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/fonts\\\\Aileron-Heavy.otf\"}'),
(46, 1631416822, 0, 'Added', 'Media', 16, '{\"mediaId\":16,\"name\":\"Aileron Regular\",\"mediaType\":\"font\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/fonts\\\\Aileron-Regular.otf\"}'),
(47, 1631416822, 0, 'Added', 'Media', 17, '{\"mediaId\":17,\"name\":\"Dancing Script Regular\",\"mediaType\":\"font\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/fonts\\\\DancingScript-Regular.ttf\"}'),
(48, 1631416822, 0, 'Added', 'Media', 18, '{\"mediaId\":18,\"name\":\"Railway Regular\",\"mediaType\":\"font\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/fonts\\\\Railway.ttf\"}'),
(49, 1631416822, 0, 'Added', 'Media', 19, '{\"mediaId\":19,\"name\":\"Linear Regular\",\"mediaType\":\"font\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/fonts\\\\linear-by-braydon-fuller.otf\"}'),
(50, 1631416822, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(51, 1631416822, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(52, 1631416822, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(53, 1631416822, 0, 'Updated', 'Media', 6, '{\"fileName\":\"xibo-text-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-text-render.js\"}'),
(54, 1631416822, 0, 'Updated', 'Media', 12, '{\"fileName\":\"jquery.marquee.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery.marquee.min.js\"}'),
(55, 1631416822, 0, 'Updated', 'Media', 8, '{\"fileName\":\"jquery-cycle-2.1.6.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(56, 1631416822, 0, 'Added', 'Media', 20, '{\"mediaId\":20,\"name\":\"pdf.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/pdfjs\\/pdf.js\"}'),
(57, 1631416822, 0, 'Added', 'Media', 21, '{\"mediaId\":21,\"name\":\"pdf.worker.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/pdfjs\\/pdf.worker.js\"}'),
(58, 1631416822, 0, 'Added', 'Media', 22, '{\"mediaId\":22,\"name\":\"compatibility.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/pdfjs\\/compatibility.js\"}'),
(59, 1631416823, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(60, 1631416823, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(61, 1631416823, 0, 'Updated', 'Media', 12, '{\"fileName\":\"jquery.marquee.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery.marquee.min.js\"}'),
(62, 1631416823, 0, 'Updated', 'Media', 8, '{\"fileName\":\"jquery-cycle-2.1.6.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(63, 1631416823, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(64, 1631416823, 0, 'Updated', 'Media', 6, '{\"fileName\":\"xibo-text-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-text-render.js\"}'),
(65, 1631416823, 0, 'Updated', 'Media', 13, '{\"fileName\":\"xibo-image-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-image-render.js\"}'),
(66, 1631416823, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(67, 1631416823, 0, 'Updated', 'Media', 4, '{\"fileName\":\"moment.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/moment.js\"}'),
(68, 1631416823, 0, 'Updated', 'Media', 12, '{\"fileName\":\"jquery.marquee.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery.marquee.min.js\"}'),
(69, 1631416823, 0, 'Updated', 'Media', 8, '{\"fileName\":\"jquery-cycle-2.1.6.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-cycle-2.1.6.min.js\"}'),
(70, 1631416823, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(71, 1631416823, 0, 'Updated', 'Media', 6, '{\"fileName\":\"xibo-text-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-text-render.js\"}'),
(72, 1631416823, 0, 'Updated', 'Media', 13, '{\"fileName\":\"xibo-image-render.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-image-render.js\"}'),
(73, 1631416823, 0, 'Updated', 'Media', 3, '{\"fileName\":\"jquery-1.11.1.min.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/vendor\\/jquery-1.11.1.min.js\"}'),
(74, 1631416823, 0, 'Updated', 'Media', 5, '{\"fileName\":\"xibo-layout-scaler.js > F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-layout-scaler.js\"}'),
(75, 1631416823, 0, 'Added', 'Media', 23, '{\"mediaId\":23,\"name\":\"xibo-webpage-render.js\",\"mediaType\":\"module\",\"fileName\":\"F:\\\\app\\\\laragon\\\\www\\\\xibo\\/modules\\/xibo-webpage-render.js\"}'),
(76, 1631416829, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(77, 1631416863, 1, 'Added', 'Media', 24, '{\"mediaId\":24,\"name\":\"bg tv.jpg\",\"mediaType\":\"image\",\"fileName\":\"bg tv.jpg\"}'),
(78, 1631416865, 1, 'Added', 'Layout', 2, '{\"layoutId\":2,\"layout\":\"Kominfo Kab. Malang\",\"campaignId\":2}'),
(79, 1631416865, 1, 'Added', 'Widget', 6, '{\"widgetId\":6,\"type\":\"embedded\",\"layoutId\":\"2\",\"campaignId\":\"2\"}'),
(80, 1631416865, 1, 'Saved', 'Playlist', 5, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(81, 1631416865, 1, 'Added', 'Region', 5, '{\"regionId\":5,\"campaignId\":\"2\",\"details\":\"Region Date - 283 x 109 (969, 1637). RegionId = 5, LayoutId = 2. OwnerId = 1. Duration = 0\"}'),
(82, 1631416865, 1, 'Added', 'Widget', 7, '{\"widgetId\":7,\"type\":\"embedded\",\"layoutId\":\"2\",\"campaignId\":\"2\"}'),
(83, 1631416865, 1, 'Saved', 'Playlist', 6, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(84, 1631416865, 1, 'Added', 'Region', 6, '{\"regionId\":6,\"campaignId\":\"2\",\"details\":\"Region Jadwal Kegiatan-1 - 965 x 109 (267, 936). RegionId = 6, LayoutId = 2. OwnerId = 1. Duration = 0\"}'),
(85, 1631416866, 1, 'Added', 'Widget', 8, '{\"widgetId\":8,\"type\":\"datasetview\",\"layoutId\":\"2\",\"campaignId\":\"2\"}'),
(86, 1631416866, 1, 'Saved', 'Playlist', 7, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(87, 1631416866, 1, 'Added', 'Region', 7, '{\"regionId\":7,\"campaignId\":\"2\",\"details\":\"Region Kominfo Kab. Malang-7 - 965 x 530 (375, 936). RegionId = 7, LayoutId = 2. OwnerId = 1. Duration = 0\"}'),
(88, 1631416866, 1, 'Added', 'Widget', 9, '{\"widgetId\":9,\"type\":\"text\",\"layoutId\":\"2\",\"campaignId\":\"2\"}'),
(89, 1631416866, 1, 'Saved', 'Playlist', 8, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(90, 1631416866, 1, 'Added', 'Region', 8, '{\"regionId\":8,\"campaignId\":\"2\",\"details\":\"Region Running Text - 1634 x 96 (983, 0). RegionId = 8, LayoutId = 2. OwnerId = 1. Duration = 0\"}'),
(91, 1631416866, 1, 'Added', 'Widget', 10, '{\"widgetId\":10,\"type\":\"embedded\",\"layoutId\":\"2\",\"campaignId\":\"2\"}'),
(92, 1631416866, 1, 'Saved', 'Playlist', 9, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(93, 1631416866, 1, 'Added', 'Region', 9, '{\"regionId\":9,\"campaignId\":\"2\",\"details\":\"Region Video - 905 x 640 (266, 22). RegionId = 9, LayoutId = 2. OwnerId = 1. Duration = 0\"}'),
(94, 1631416877, 1, 'Saved', 'Playlist', 5, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(95, 1631416877, 1, 'Saved', 'Playlist', 6, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(96, 1631416877, 1, 'Saved', 'Playlist', 7, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(97, 1631416877, 1, 'Saved', 'Playlist', 8, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(98, 1631416877, 1, 'Saved', 'Playlist', 9, '{\"campaignId\":[\"2\"],\"layoutId\":[\"2\"]}'),
(99, 1631416879, 1, 'Checked out', 'Layout', 3, '{\"layoutId\":2,\"layout\":\"Kominfo Kab. Malang\",\"campaignId\":2}'),
(100, 1631416879, 1, 'Added', 'Widget', 11, '{\"widgetId\":11,\"type\":\"embedded\",\"layoutId\":\"3\",\"campaignId\":\"2\"}'),
(101, 1631416880, 1, 'Saved', 'Playlist', 10, '{\"playlistId\":\"5 > 10\",\"regionId\":\"5 > 10\",\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(102, 1631416880, 1, 'Added', 'Region', 10, '{\"regionId\":10,\"campaignId\":\"2\",\"details\":\"Region Date - 283 x 109 (969, 1637). RegionId = 10, LayoutId = 3. OwnerId = 1. Duration = 86400\"}'),
(103, 1631416880, 1, 'Added', 'Widget', 12, '{\"widgetId\":12,\"type\":\"embedded\",\"layoutId\":\"3\",\"campaignId\":\"2\"}'),
(104, 1631416880, 1, 'Saved', 'Playlist', 11, '{\"playlistId\":\"6 > 11\",\"regionId\":\"6 > 11\",\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(105, 1631416880, 1, 'Added', 'Region', 11, '{\"regionId\":11,\"campaignId\":\"2\",\"details\":\"Region Jadwal Kegiatan-1 - 965 x 109 (267, 936). RegionId = 11, LayoutId = 3. OwnerId = 1. Duration = 86400\"}'),
(106, 1631416880, 1, 'Added', 'Widget', 13, '{\"widgetId\":13,\"type\":\"datasetview\",\"layoutId\":\"3\",\"campaignId\":\"2\"}'),
(107, 1631416880, 1, 'Saved', 'Playlist', 12, '{\"playlistId\":\"7 > 12\",\"regionId\":\"7 > 12\",\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(108, 1631416880, 1, 'Added', 'Region', 12, '{\"regionId\":12,\"campaignId\":\"2\",\"details\":\"Region Kominfo Kab. Malang-7 - 965 x 530 (375, 936). RegionId = 12, LayoutId = 3. OwnerId = 1. Duration = 3\"}'),
(109, 1631416880, 1, 'Added', 'Widget', 14, '{\"widgetId\":14,\"type\":\"text\",\"layoutId\":\"3\",\"campaignId\":\"2\"}'),
(110, 1631416880, 1, 'Saved', 'Playlist', 13, '{\"playlistId\":\"8 > 13\",\"regionId\":\"8 > 13\",\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(111, 1631416880, 1, 'Added', 'Region', 13, '{\"regionId\":13,\"campaignId\":\"2\",\"details\":\"Region Running Text - 1634 x 96 (983, 0). RegionId = 13, LayoutId = 3. OwnerId = 1. Duration = 5\"}'),
(112, 1631416880, 1, 'Added', 'Widget', 15, '{\"widgetId\":15,\"type\":\"embedded\",\"layoutId\":\"3\",\"campaignId\":\"2\"}'),
(113, 1631416880, 1, 'Saved', 'Playlist', 14, '{\"playlistId\":\"9 > 14\",\"regionId\":\"9 > 14\",\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(114, 1631416880, 1, 'Added', 'Region', 14, '{\"regionId\":14,\"campaignId\":\"2\",\"details\":\"Region Video - 905 x 640 (266, 22). RegionId = 14, LayoutId = 3. OwnerId = 1. Duration = 86400\"}'),
(115, 1631416880, 1, 'Updated', 'Layout', 2, '{\"publishedStatusId\":\"1 > 2\",\"campaignId\":[2]}'),
(116, 1631416883, 1, 'Saved', 'Playlist', 10, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(117, 1631416883, 1, 'Saved', 'Playlist', 11, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(118, 1631416883, 1, 'Saved', 'Playlist', 12, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(119, 1631416883, 1, 'Saved', 'Playlist', 13, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(120, 1631416883, 1, 'Saved', 'Playlist', 14, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(121, 1631417012, 1, 'Saved', 'Widget', 13, '{\"campaignId\":[\"2\"],\"layoutId\":[\"3\"]}'),
(122, 1631417042, 1, 'Deleted', 'Widget', 6, '{\"widgetId\":6,\"playlistId\":5}'),
(123, 1631417042, 1, 'Deleted', 'Playlist', 5, '{\"playlistId\":5,\"regionId\":5}'),
(124, 1631417042, 1, 'Region Deleted', 'Region', 5, '{\"regionId\":5,\"layoutId\":2}'),
(125, 1631417042, 1, 'Deleted', 'Widget', 7, '{\"widgetId\":7,\"playlistId\":6}'),
(126, 1631417042, 1, 'Deleted', 'Playlist', 6, '{\"playlistId\":6,\"regionId\":6}'),
(127, 1631417042, 1, 'Region Deleted', 'Region', 6, '{\"regionId\":6,\"layoutId\":2}'),
(128, 1631417043, 1, 'Deleted', 'Widget', 8, '{\"widgetId\":8,\"playlistId\":7}'),
(129, 1631417043, 1, 'Deleted', 'Playlist', 7, '{\"playlistId\":7,\"regionId\":7}'),
(130, 1631417043, 1, 'Region Deleted', 'Region', 7, '{\"regionId\":7,\"layoutId\":2}'),
(131, 1631417043, 1, 'Deleted', 'Widget', 9, '{\"widgetId\":9,\"playlistId\":8}'),
(132, 1631417043, 1, 'Deleted', 'Playlist', 8, '{\"playlistId\":8,\"regionId\":8}'),
(133, 1631417043, 1, 'Region Deleted', 'Region', 8, '{\"regionId\":8,\"layoutId\":2}'),
(134, 1631417043, 1, 'Deleted', 'Widget', 10, '{\"widgetId\":10,\"playlistId\":9}'),
(135, 1631417043, 1, 'Deleted', 'Playlist', 9, '{\"playlistId\":9,\"regionId\":9}'),
(136, 1631417043, 1, 'Region Deleted', 'Region', 9, '{\"regionId\":9,\"layoutId\":2}'),
(137, 1631417043, 1, 'Layout Deleted', 'Layout', 2, '{\"layoutId\":2}'),
(138, 1631417043, 1, 'Deleted draft for 3', 'Layout', 2, '{\"parentId\":\" > 3\"}'),
(139, 1631417043, 1, 'Updated Draft', 'Layout', 3, '{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[2]}'),
(140, 1631417239, 1, 'Display Saved', 'Display', 1, '{\"licensed\":\"0 > 1\"}'),
(141, 1631417274, 1, 'Display Saved', 'Display', 1, '{\"defaultLayoutId\":\"1 > 3\"}'),
(142, 1631418211, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(143, 1631424159, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(144, 1631424196, 1, 'Checked out', 'Layout', 4, '{\"layoutId\":3,\"layout\":\"Kominfo Kab. Malang\",\"campaignId\":2}'),
(145, 1631424196, 1, 'Added', 'Widget', 16, '{\"widgetId\":16,\"type\":\"embedded\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(146, 1631424196, 1, 'Saved', 'Playlist', 15, '{\"playlistId\":\"10 > 15\",\"regionId\":\"10 > 15\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(147, 1631424196, 1, 'Added', 'Region', 15, '{\"regionId\":15,\"campaignId\":\"2\",\"details\":\"Region Date - 283 x 109 (969, 1637). RegionId = 15, LayoutId = 4. OwnerId = 1. Duration = 86400\"}'),
(148, 1631424196, 1, 'Added', 'Widget', 17, '{\"widgetId\":17,\"type\":\"embedded\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(149, 1631424196, 1, 'Saved', 'Playlist', 16, '{\"playlistId\":\"11 > 16\",\"regionId\":\"11 > 16\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(150, 1631424196, 1, 'Added', 'Region', 16, '{\"regionId\":16,\"campaignId\":\"2\",\"details\":\"Region Jadwal Kegiatan-1 - 965 x 109 (267, 936). RegionId = 16, LayoutId = 4. OwnerId = 1. Duration = 86400\"}'),
(151, 1631424196, 1, 'Added', 'Widget', 18, '{\"widgetId\":18,\"type\":\"datasetview\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(152, 1631424196, 1, 'Saved', 'Playlist', 17, '{\"playlistId\":\"12 > 17\",\"regionId\":\"12 > 17\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(153, 1631424196, 1, 'Added', 'Region', 17, '{\"regionId\":17,\"campaignId\":\"2\",\"details\":\"Region Kominfo Kab. Malang-7 - 965 x 530 (375, 936). RegionId = 17, LayoutId = 4. OwnerId = 1. Duration = 3\"}'),
(154, 1631424196, 1, 'Added', 'Widget', 19, '{\"widgetId\":19,\"type\":\"text\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(155, 1631424196, 1, 'Saved', 'Playlist', 18, '{\"playlistId\":\"13 > 18\",\"regionId\":\"13 > 18\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(156, 1631424196, 1, 'Added', 'Region', 18, '{\"regionId\":18,\"campaignId\":\"2\",\"details\":\"Region Running Text - 1634 x 96 (983, 0). RegionId = 18, LayoutId = 4. OwnerId = 1. Duration = 5\"}'),
(157, 1631424196, 1, 'Added', 'Widget', 20, '{\"widgetId\":20,\"type\":\"embedded\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(158, 1631424196, 1, 'Saved', 'Playlist', 19, '{\"playlistId\":\"14 > 19\",\"regionId\":\"14 > 19\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(159, 1631424196, 1, 'Added', 'Region', 19, '{\"regionId\":19,\"campaignId\":\"2\",\"details\":\"Region Video - 905 x 640 (266, 22). RegionId = 19, LayoutId = 4. OwnerId = 1. Duration = 86400\"}'),
(160, 1631424196, 1, 'Updated', 'Layout', 3, '{\"publishedStatusId\":\"1 > 2\",\"campaignId\":[2]}'),
(161, 1631424200, 1, 'Saved', 'Playlist', 15, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(162, 1631424200, 1, 'Saved', 'Playlist', 16, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(163, 1631424200, 1, 'Saved', 'Playlist', 17, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(164, 1631424200, 1, 'Saved', 'Playlist', 18, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(165, 1631424200, 1, 'Saved', 'Playlist', 19, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(166, 1631424409, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedHtml\\\": \\\"\\\\n\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\n\\\\n<script>\\\\nsetInterval(function(){\\\\nn =  new Date();\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\ny = n.getFullYear();\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\n\\\\n}, 100);\\\\n<\\\\\\/script> > <div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script>\\\"\\n    },\\n    {\\n        \\\"embedScript\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\"> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\"\\n    },\\n    {\\n        \\\"embedStyle\\\": \\\"#date, #time {\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\ntext-align: center;\\\\n} > #date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(167, 1631424425, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedHtml\\\": \\\"<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script> > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(168, 1631424445, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedHtml\\\": \\\"@import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script> > <div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(169, 1631424454, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedStyle\\\": \\\"#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\n} > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(170, 1631424534, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedStyle\\\": \\\"@import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\n} > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\nfont-weight: 400;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(171, 1631424572, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedStyle\\\": \\\"@import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\nfont-weight: 400;\\\\r\\\\n} > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(172, 1631424587, 1, 'Saved', 'Widget', 16, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(173, 1631424595, 1, 'Saved', 'Widget', 16, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(174, 1631424632, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedHtml\\\": \\\"<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 24px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script> > <div style=\\\\\\\"font-size: 26px; color:white;\\\\\\\" id=\\\\\\\"date\\\\\\\"><\\\\\\/div>\\\\r\\\\n<div style=\\\\\\\"font-size: 26px; color:white;\\\\\\\" id=\\\\\\\"time\\\\\\\"><\\\\\\/div>\\\\r\\\\n\\\\r\\\\n<script>\\\\r\\\\nsetInterval(function() {\\\\r\\\\nn =  new Date();\\\\r\\\\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\\\\r\\\\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\\\\r\\\\ny = n.getFullYear();\\\\r\\\\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\\\\r\\\\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\\\\r\\\\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\\\\r\\\\ndocument.getElementById(\\\\\\\"date\\\\\\\").innerHTML = d + \\\\\\\"\\\\\\/\\\\\\\" + m + \\\\\\\"\\\\\\/\\\\\\\" + y;\\\\r\\\\ndocument.getElementById(\\\\\\\"time\\\\\\\").innerHTML = h + \\\\\\\":\\\\\\\" + min + \\\\\\\":\\\\\\\" + sec;\\\\r\\\\n\\\\r\\\\n}, 100);\\\\r\\\\n<\\\\\\/script>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(175, 1631424787, 1, 'Saved', 'Widget', 19, '{\"duration\":\"5 > 86400\",\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"5 > 86400\",\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<span style=\\\\\\\"font-size: 48pt; color:white;\\\\\\\">Sukses bukanlah kebetulan. Ia terbentuk dari kerja keras ketekunan, pembelajaran, pengorbanan, dan yang paling penting, cinta akan hal yang sedang atau ingin kamu lakukan. Kesempatan tidak mengetuk pintu, ia memperlihatkan dirinya ketika Anda menjatuhkan pintunya. Tidak masalah seberapa lambat kamu berjalan, asalkan kamu tidak berhenti. Ubah hidupmu hari ini. Jangan bertaruh pada masa depan, bertindaklah sekarang tanpa menunda. Optimis adalah iman yg mengarahkan kita pada pencapaian. tidak ada satupun pencapaian yang bisa kita gapai tanpa iman tersebut. Optimisme adalah kepercayaan yang mengarah pada pencapaian. Tidak ada yang bisa dilakukan tanpa harapan dan keyakinan.<\\\\\\/span> > <span style=\\\\\\\"font-size: 48pt; color:white;\\\\\\\">Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(176, 1631424788, 1, 'Saved', 'Playlist', 18, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(177, 1631424809, 1, 'Saved', 'Widget', 19, '{\"duration\":\"86400 > 25\",\"calculatedDuration\":\"86400 > 25\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(178, 1631424810, 1, 'Saved', 'Playlist', 18, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(179, 1631424826, 1, 'Added', 'Widget', 21, '{\"widgetId\":21,\"type\":\"text\",\"layoutId\":\"4\",\"campaignId\":\"2\"}'),
(180, 1631424828, 1, 'Saved', 'Playlist', 18, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(181, 1631424963, 1, 'Saved', 'Widget', 17, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedHtml\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\n\\\\n<div class=\\\\\\\"judul\\\\\\\">\\\\n  <h1>Jadwal Kegiatan<\\\\\\/h1>\\\\n<\\\\\\/div> > <div class=\\\\\\\"judul\\\\\\\">\\\\r\\\\n  <h1>Jadwal Kegiatan<\\\\\\/h1>\\\\r\\\\n<\\\\\\/div>\\\"\\n    },\\n    {\\n        \\\"embedStyle\\\": \\\".judul {\\\\n  font-family: \'Inter\', sans-serif;\\\\n  display: flex;\\\\n  justify-content: center;\\\\n  align-items: center;\\\\n  height: 90px;\\\\n}\\\\n\\\\nh1{\\\\n color: black;\\\\n} > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n.judul {\\\\r\\\\n  font-family: \'Inter\', sans-serif;\\\\r\\\\n  display: flex;\\\\r\\\\n  justify-content: center;\\\\r\\\\n  align-items: center;\\\\r\\\\n  height: 90px;\\\\r\\\\n}\\\\r\\\\n\\\\r\\\\nh1{\\\\r\\\\n color: black;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(182, 1631425017, 1, 'Saved', 'Playlist', 17, '{\"name\":\"Kominfo Kab. Malang-7 > Isi Jadwal\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(183, 1631425017, 1, 'Saved', 'Region', 17, '{\"name\":\"Kominfo Kab. Malang-7 > Isi Jadwal\",\"campaignId\":[\"2\"]}'),
(184, 1631425032, 1, 'Saved', 'Playlist', 16, '{\"name\":\"Jadwal Kegiatan-1 > Judul J. Kegiatan\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(185, 1631425032, 1, 'Saved', 'Region', 16, '{\"name\":\"Jadwal Kegiatan-1 > Judul J. Kegiatan\",\"campaignId\":[\"2\"]}'),
(186, 1631425043, 1, 'Saved', 'Playlist', 17, '{\"name\":\"Isi Jadwal > Isi J. Kegiatan\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(187, 1631425043, 1, 'Saved', 'Region', 17, '{\"name\":\"Isi Jadwal > Isi J. Kegiatan\",\"campaignId\":[\"2\"]}'),
(188, 1631425090, 1, 'Saved', 'Widget', 19, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<span style=\\\\\\\"font-size: 48pt; color:white;\\\\\\\">Selamat Datang di Kominfo Kab. Malang<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<span style=\\\\\\\"font-size: 48pt; color:white;\\\\\\\">Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(189, 1631425220, 1, 'Saved', 'Widget', 19, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<span style=\\\\\\\"font-size: 48pt; color:white;\\\\\\\">Selamat Datang di Kominfo Kab. Malang<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\n.span {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(190, 1631425261, 1, 'Saved', 'Widget', 19, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\n.span {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(191, 1631425280, 1, 'Saved', 'Widget', 19, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(192, 1631425362, 1, 'Saved', 'Widget', 21, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(193, 1631425376, 1, 'Saved', 'Widget', 21, '{\"widgetOptions\":\"[\\n    {\\n        \\\"effect\\\": \\\"none > marqueeRight\\\"\\n    },\\n    {\\n        \\\"speed\\\": \\\" > 3\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(194, 1631425395, 1, 'Saved', 'Widget', 21, '{\"widgetOptions\":\"[\\n    {\\n        \\\"effect\\\": \\\"marqueeRight > marqueeLeft\\\"\\n    },\\n    {\\n        \\\"speed\\\": \\\"3 > 4\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(195, 1631425408, 1, 'Saved', 'Widget', 21, '{\"duration\":\"5 > 30\",\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"5 > 30\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(196, 1631425409, 1, 'Saved', 'Playlist', 18, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(197, 1631425434, 1, 'Saved', 'Widget', 21, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Jangan Lupa Membaca Bismillah Untuk Memulai Aktivitas<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Jangan Lupa Membaca Bismillah untuk Memulai Aktivitas<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(198, 1631425605, 1, 'Saved', 'Widget', 19, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Selamat Datang di Kominfo Kab. Malang<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(199, 1631425623, 1, 'Saved', 'Widget', 21, '{\"widgetOptions\":\"[\\n    {\\n        \\\"text\\\": \\\"<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Jangan Lupa Membaca Bismillah untuk Memulai Aktivitas<\\\\\\/span> > <link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\\">\\\\r\\\\n<link rel=\\\\\\\"preconnect\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.gstatic.com\\\\\\\" crossorigin>\\\\r\\\\n<link href=\\\\\\\"https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2?family=Inter&display=swap\\\\\\\" rel=\\\\\\\"stylesheet\\\\\\\">\\\\r\\\\n\\\\r\\\\n<style>\\\\r\\\\nspan {\\\\r\\\\nfont-size: 48pt; \\\\r\\\\ncolor:white;\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\n}\\\\r\\\\n<\\\\\\/style>\\\\r\\\\n\\\\r\\\\n<span>Jangan Lupa Membaca Bismillah untuk Memulai Aktivitas<\\\\\\/span>\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(200, 1631425629, 1, 'Saved', 'Widget', 21, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(201, 1631425644, 1, 'Saved', 'Widget', 16, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}');
INSERT INTO `auditlog` (`logId`, `logDate`, `userId`, `message`, `entity`, `entityId`, `objectAfter`) VALUES
(202, 1631425650, 1, 'Saved', 'Widget', 16, '{\"widgetOptions\":\"[\\n    {\\n        \\\"embedStyle\\\": \\\"@import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\nfont-weight: 600;\\\\r\\\\n} > @import url(\'https:\\\\\\/\\\\\\/fonts.googleapis.com\\\\\\/css2 family=Inter&display=swap\');\\\\r\\\\n\\\\r\\\\n#date, #time {\\\\r\\\\nfont-family: \\\\\\\"Inter\\\\\\\", sans-serif;\\\\r\\\\ntext-align: center;\\\\r\\\\n}\\\"\\n    }\\n]\",\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(203, 1631425659, 1, 'Saved', 'Widget', 16, '{\"campaignId\":[\"2\"],\"layoutId\":[\"4\"]}'),
(204, 1631426738, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(205, 1631426861, 1, 'Added', 'Layout', 5, '{\"layoutId\":5,\"layout\":\"Contoh\",\"campaignId\":3}'),
(206, 1631426861, 1, 'Saved', 'Playlist', 20, '{\"campaignId\":[\"3\"],\"layoutId\":[\"5\"]}'),
(207, 1631426861, 1, 'Added', 'Region', 20, '{\"regionId\":20,\"campaignId\":\"3\",\"details\":\"Region Contoh-1 - 1920 x 1080 (0, 0). RegionId = 20, LayoutId = 5. OwnerId = 1. Duration = 0\"}'),
(208, 1631426862, 1, 'Checked out', 'Layout', 6, '{\"layoutId\":5,\"layout\":\"Contoh\",\"campaignId\":3}'),
(209, 1631426862, 1, 'Saved', 'Playlist', 21, '{\"playlistId\":\"20 > 21\",\"regionId\":\"20 > 21\",\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(210, 1631426862, 1, 'Added', 'Region', 21, '{\"regionId\":21,\"campaignId\":\"3\",\"details\":\"Region Contoh-1 - 1920 x 1080 (0, 0). RegionId = 21, LayoutId = 6. OwnerId = 1. Duration = 0\"}'),
(211, 1631426862, 1, 'Updated', 'Layout', 5, '{\"publishedStatusId\":\"1 > 2\",\"campaignId\":[3]}'),
(212, 1631426892, 1, 'Added', 'Media', 25, '{\"mediaId\":25,\"name\":\"WhatsApp Image 2021-07-15 at 9.18.04 AM.jpeg\",\"mediaType\":\"image\",\"fileName\":\"WhatsApp Image 2021-07-15 at 9.18.04 AM.jpeg\"}'),
(213, 1631426896, 1, 'Updated Draft', 'Layout', 6, '{\"backgroundImageId\":\" > 25\",\"backgroundColor\":\"#000 > #000000\",\"status\":\"4 > 3\",\"campaignId\":[3]}'),
(214, 1631426958, 1, 'Updated Draft', 'Layout', 6, '{\"status\":\"4 > 3\",\"campaignId\":[3]}'),
(215, 1631426958, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(216, 1631426958, 1, 'Added', 'Region', 22, '{\"regionId\":22,\"campaignId\":\"3\",\"details\":\"Region Contoh-2 - 250 x 250 (50, 50). RegionId = 22, LayoutId = 6. OwnerId = 1. Duration = 0\"}'),
(217, 1631427000, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(218, 1631427000, 1, 'Saved', 'Region', 22, '{\"width\":\"250 > 900\",\"height\":\"250 > 700\",\"top\":\"50 > 180.54\",\"left\":\"50 > 549.18\",\"campaignId\":[\"3\"]}'),
(219, 1631427025, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(220, 1631427025, 1, 'Saved', 'Region', 22, '{\"height\":\"700 > 699.96\",\"top\":\"181 > 280.8\",\"campaignId\":[\"3\"]}'),
(221, 1631427093, 1, 'Added', 'Media', 26, '{\"mediaId\":26,\"name\":\"kotak\",\"mediaType\":\"image\",\"fileName\":\"1d282a.png\"}'),
(222, 1631427093, 1, 'Added', 'Widget', 22, '{\"widgetId\":22,\"type\":\"image\",\"layoutId\":\"6\",\"campaignId\":\"3\"}'),
(223, 1631427099, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(224, 1631427123, 1, 'Saved', 'Widget', 22, '{\"widgetOptions\":\"[\\n    {\\n        \\\"scaleType\\\": \\\"center > stretch\\\"\\n    }\\n]\",\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(225, 1631427154, 1, 'Added', 'Media', 27, '{\"mediaId\":27,\"name\":\"20200623_210101.png\",\"mediaType\":\"image\",\"fileName\":\"20200623_210101.png\"}'),
(226, 1631427155, 1, 'Saved', 'Widget', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(227, 1631427155, 1, 'Added', 'Widget', 23, '{\"widgetId\":23,\"type\":\"image\",\"layoutId\":\"6\",\"campaignId\":\"3\"}'),
(228, 1631427157, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(229, 1631427174, 1, 'Saved', 'Widget', 23, '{\"widgetOptions\":\"[\\n    {\\n        \\\"scaleType\\\": \\\"center > stretch\\\"\\n    }\\n]\",\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(230, 1631427194, 1, 'Saved', 'Widget', 22, '{\"duration\":\"10 > 3\",\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"10 > 3\",\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(231, 1631427195, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(232, 1631427201, 1, 'Saved', 'Widget', 23, '{\"duration\":\"10 > 3\",\"useDuration\":\"0 > 1\",\"calculatedDuration\":\"10 > 3\",\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(233, 1631427202, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(234, 1631427228, 1, 'Deleted', 'Playlist', 21, '{\"playlistId\":21,\"regionId\":21}'),
(235, 1631427228, 1, 'Region Deleted', 'Region', 21, '{\"regionId\":21,\"layoutId\":6}'),
(236, 1631427256, 1, 'Updated Draft', 'Layout', 6, '{\"status\":\"2 > 3\",\"campaignId\":[3]}'),
(237, 1631427256, 1, 'Saved', 'Playlist', 23, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(238, 1631427256, 1, 'Added', 'Region', 23, '{\"regionId\":23,\"campaignId\":\"3\",\"details\":\"Region Contoh-2 - 250 x 250 (50, 50). RegionId = 23, LayoutId = 6. OwnerId = 1. Duration = 0\"}'),
(239, 1631427269, 1, 'Added', 'Widget', 24, '{\"widgetId\":24,\"type\":\"text\",\"layoutId\":\"6\",\"campaignId\":\"3\"}'),
(240, 1631427270, 1, 'Saved', 'Playlist', 23, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(241, 1631427286, 1, 'Saved', 'Playlist', 22, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(242, 1631427286, 1, 'Saved', 'Region', 22, '{\"height\":\"700 > 699.96\",\"top\":\"281 > 100.5\",\"left\":\"549 > 541.32\",\"campaignId\":[\"3\"]}'),
(243, 1631427297, 1, 'Saved', 'Playlist', 23, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(244, 1631427297, 1, 'Saved', 'Region', 23, '{\"width\":\"250 > 1920\",\"height\":\"250 > 249.96\",\"top\":\"50 > 829.02\",\"left\":\"50 > 0\",\"campaignId\":[\"3\"]}'),
(245, 1631427313, 1, 'Saved', 'Playlist', 23, '{\"campaignId\":[\"3\"],\"layoutId\":[\"6\"]}'),
(246, 1631427313, 1, 'Saved', 'Region', 23, '{\"height\":\"250 > 153.96\",\"top\":\"829 > 925.02\",\"campaignId\":[\"3\"]}'),
(247, 1631427572, 1, 'Deleted', 'Widget', 22, '{\"widgetId\":22,\"playlistId\":22}'),
(248, 1631427572, 1, 'Deleted', 'Widget', 23, '{\"widgetId\":23,\"playlistId\":22}'),
(249, 1631427572, 1, 'Deleted', 'Playlist', 22, '{\"playlistId\":22,\"regionId\":22}'),
(250, 1631427572, 1, 'Region Deleted', 'Region', 22, '{\"regionId\":22,\"layoutId\":6}'),
(251, 1631427572, 1, 'Deleted', 'Widget', 24, '{\"widgetId\":24,\"playlistId\":23}'),
(252, 1631427572, 1, 'Deleted', 'Playlist', 23, '{\"playlistId\":23,\"regionId\":23}'),
(253, 1631427572, 1, 'Region Deleted', 'Region', 23, '{\"regionId\":23,\"layoutId\":6}'),
(254, 1631427572, 1, 'Layout Deleted', 'Layout', 6, '{\"layoutId\":6}'),
(255, 1631427572, 1, 'Deleted draft for 5', 'Layout', 6, '[]'),
(256, 1631427572, 1, 'Deleted', 'Playlist', 20, '{\"playlistId\":20,\"regionId\":20}'),
(257, 1631427572, 1, 'Region Deleted', 'Region', 20, '{\"regionId\":20,\"layoutId\":5}'),
(258, 1631427572, 1, 'Layout Deleted', 'Layout', 5, '{\"layoutId\":5}'),
(259, 1631427572, 1, 'Deleted', 'Layout', 5, '[]'),
(260, 1631428083, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(261, 1631428430, 1, 'Deleted', 'Widget', 11, '{\"widgetId\":11,\"playlistId\":10}'),
(262, 1631428430, 1, 'Deleted', 'Playlist', 10, '{\"playlistId\":10,\"regionId\":10}'),
(263, 1631428430, 1, 'Region Deleted', 'Region', 10, '{\"regionId\":10,\"layoutId\":3}'),
(264, 1631428430, 1, 'Deleted', 'Widget', 12, '{\"widgetId\":12,\"playlistId\":11}'),
(265, 1631428430, 1, 'Deleted', 'Playlist', 11, '{\"playlistId\":11,\"regionId\":11}'),
(266, 1631428430, 1, 'Region Deleted', 'Region', 11, '{\"regionId\":11,\"layoutId\":3}'),
(267, 1631428430, 1, 'Deleted', 'Widget', 13, '{\"widgetId\":13,\"playlistId\":12}'),
(268, 1631428430, 1, 'Deleted', 'Playlist', 12, '{\"playlistId\":12,\"regionId\":12}'),
(269, 1631428430, 1, 'Region Deleted', 'Region', 12, '{\"regionId\":12,\"layoutId\":3}'),
(270, 1631428430, 1, 'Deleted', 'Widget', 14, '{\"widgetId\":14,\"playlistId\":13}'),
(271, 1631428430, 1, 'Deleted', 'Playlist', 13, '{\"playlistId\":13,\"regionId\":13}'),
(272, 1631428430, 1, 'Region Deleted', 'Region', 13, '{\"regionId\":13,\"layoutId\":3}'),
(273, 1631428430, 1, 'Deleted', 'Widget', 15, '{\"widgetId\":15,\"playlistId\":14}'),
(274, 1631428430, 1, 'Deleted', 'Playlist', 14, '{\"playlistId\":14,\"regionId\":14}'),
(275, 1631428430, 1, 'Region Deleted', 'Region', 14, '{\"regionId\":14,\"layoutId\":3}'),
(276, 1631428430, 1, 'Layout Deleted', 'Layout', 3, '{\"layoutId\":3}'),
(277, 1631428430, 1, 'Deleted draft for 4', 'Layout', 3, '{\"parentId\":\" > 4\"}'),
(278, 1631428430, 1, 'Updated Draft', 'Layout', 4, '{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[2]}'),
(279, 1631428753, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/93.0.4577.63 Safari\\/537.36 Edg\\/93.0.961.44\"}'),
(280, 1633086502, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/94.0.4606.61 Safari\\/537.36 Edg\\/94.0.992.31\"}'),
(281, 1633087182, 1, 'Display Deleted', 'Display', 1, '{\"displayId\":1}'),
(282, 1634566002, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/94.0.4606.81 Safari\\/537.36 Edg\\/94.0.992.50\"}'),
(283, 1634566585, 1, 'Checked out', 'Layout', 7, '{\"layoutId\":4,\"layout\":\"Kominfo Kab. Malang\",\"campaignId\":2}'),
(284, 1634566585, 1, 'Added', 'Widget', 25, '{\"widgetId\":25,\"type\":\"embedded\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(285, 1634566585, 1, 'Saved', 'Playlist', 24, '{\"playlistId\":\"15 > 24\",\"regionId\":\"15 > 24\",\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(286, 1634566585, 1, 'Added', 'Region', 24, '{\"regionId\":24,\"campaignId\":\"2\",\"details\":\"Region Date - 283 x 109 (969, 1637). RegionId = 24, LayoutId = 7. OwnerId = 1. Duration = 86400\"}'),
(287, 1634566585, 1, 'Added', 'Widget', 26, '{\"widgetId\":26,\"type\":\"datasetview\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(288, 1634566585, 1, 'Saved', 'Playlist', 25, '{\"playlistId\":\"17 > 25\",\"regionId\":\"17 > 25\",\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(289, 1634566585, 1, 'Added', 'Region', 25, '{\"regionId\":25,\"campaignId\":\"2\",\"details\":\"Region Isi J. Kegiatan - 965 x 530 (375, 936). RegionId = 25, LayoutId = 7. OwnerId = 1. Duration = 3\"}'),
(290, 1634566585, 1, 'Added', 'Widget', 27, '{\"widgetId\":27,\"type\":\"embedded\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(291, 1634566585, 1, 'Saved', 'Playlist', 26, '{\"playlistId\":\"16 > 26\",\"regionId\":\"16 > 26\",\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(292, 1634566585, 1, 'Added', 'Region', 26, '{\"regionId\":26,\"campaignId\":\"2\",\"details\":\"Region Judul J. Kegiatan - 965 x 109 (267, 936). RegionId = 26, LayoutId = 7. OwnerId = 1. Duration = 86400\"}'),
(293, 1634566585, 1, 'Added', 'Widget', 28, '{\"widgetId\":28,\"type\":\"text\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(294, 1634566585, 1, 'Added', 'Widget', 29, '{\"widgetId\":29,\"type\":\"text\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(295, 1634566585, 1, 'Saved', 'Playlist', 27, '{\"playlistId\":\"18 > 27\",\"regionId\":\"18 > 27\",\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(296, 1634566585, 1, 'Added', 'Region', 27, '{\"regionId\":27,\"campaignId\":\"2\",\"details\":\"Region Running Text - 1634 x 96 (983, 0). RegionId = 27, LayoutId = 7. OwnerId = 1. Duration = 55\"}'),
(297, 1634566585, 1, 'Added', 'Widget', 30, '{\"widgetId\":30,\"type\":\"embedded\",\"layoutId\":\"7\",\"campaignId\":\"2\"}'),
(298, 1634566585, 1, 'Saved', 'Playlist', 28, '{\"playlistId\":\"19 > 28\",\"regionId\":\"19 > 28\",\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(299, 1634566585, 1, 'Added', 'Region', 28, '{\"regionId\":28,\"campaignId\":\"2\",\"details\":\"Region Video - 905 x 640 (266, 22). RegionId = 28, LayoutId = 7. OwnerId = 1. Duration = 86400\"}'),
(300, 1634566585, 1, 'Updated', 'Layout', 4, '{\"publishedStatusId\":\"1 > 2\",\"campaignId\":[2]}'),
(301, 1634566589, 1, 'Saved', 'Playlist', 24, '{\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(302, 1634566589, 1, 'Saved', 'Playlist', 25, '{\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(303, 1634566589, 1, 'Saved', 'Playlist', 26, '{\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(304, 1634566589, 1, 'Saved', 'Playlist', 27, '{\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(305, 1634566589, 1, 'Saved', 'Playlist', 28, '{\"campaignId\":[\"2\"],\"layoutId\":[\"7\"]}'),
(306, 1634608313, 1, 'Login Granted', 'User', 1, '{\"IPAddress\":\"::1\",\"UserAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/94.0.4606.81 Safari\\/537.36 Edg\\/94.0.992.50\"}'),
(307, 1634608362, 1, 'Updated Draft', 'Layout', 7, '{\"backgroundImageId\":\"24 > 27\",\"status\":\"2 > 3\",\"campaignId\":[2]}'),
(308, 1634608438, 1, 'Added', 'Media', 28, '{\"mediaId\":28,\"name\":\"bg\",\"mediaType\":\"image\",\"fileName\":\"bg tv.jpg\"}'),
(309, 1634608440, 1, 'Updated Draft', 'Layout', 7, '{\"backgroundImageId\":\"27 > 28\",\"status\":\"2 > 3\",\"campaignId\":[2]}'),
(310, 1634608461, 1, 'Deleted', 'Widget', 16, '{\"widgetId\":16,\"playlistId\":15}'),
(311, 1634608461, 1, 'Deleted', 'Playlist', 15, '{\"playlistId\":15,\"regionId\":15}'),
(312, 1634608461, 1, 'Region Deleted', 'Region', 15, '{\"regionId\":15,\"layoutId\":4}'),
(313, 1634608461, 1, 'Deleted', 'Widget', 18, '{\"widgetId\":18,\"playlistId\":17}'),
(314, 1634608461, 1, 'Deleted', 'Playlist', 17, '{\"playlistId\":17,\"regionId\":17}'),
(315, 1634608461, 1, 'Region Deleted', 'Region', 17, '{\"regionId\":17,\"layoutId\":4}'),
(316, 1634608461, 1, 'Deleted', 'Widget', 17, '{\"widgetId\":17,\"playlistId\":16}'),
(317, 1634608461, 1, 'Deleted', 'Playlist', 16, '{\"playlistId\":16,\"regionId\":16}'),
(318, 1634608461, 1, 'Region Deleted', 'Region', 16, '{\"regionId\":16,\"layoutId\":4}'),
(319, 1634608461, 1, 'Deleted', 'Widget', 19, '{\"widgetId\":19,\"playlistId\":18}'),
(320, 1634608461, 1, 'Deleted', 'Widget', 21, '{\"widgetId\":21,\"playlistId\":18}'),
(321, 1634608461, 1, 'Deleted', 'Playlist', 18, '{\"playlistId\":18,\"regionId\":18}'),
(322, 1634608461, 1, 'Region Deleted', 'Region', 18, '{\"regionId\":18,\"layoutId\":4}'),
(323, 1634608461, 1, 'Deleted', 'Widget', 20, '{\"widgetId\":20,\"playlistId\":19}'),
(324, 1634608461, 1, 'Deleted', 'Playlist', 19, '{\"playlistId\":19,\"regionId\":19}'),
(325, 1634608461, 1, 'Region Deleted', 'Region', 19, '{\"regionId\":19,\"layoutId\":4}'),
(326, 1634608461, 1, 'Layout Deleted', 'Layout', 4, '{\"layoutId\":4}'),
(327, 1634608461, 1, 'Deleted draft for 7', 'Layout', 4, '{\"parentId\":\" > 7\"}'),
(328, 1634608461, 1, 'Updated Draft', 'Layout', 7, '{\"publishedStatusId\":\"2 > 1\",\"campaignId\":[2]}');

-- --------------------------------------------------------

--
-- Table structure for table `bandwidth`
--

CREATE TABLE `bandwidth` (
  `displayId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `size` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bandwidth`
--

INSERT INTO `bandwidth` (`displayId`, `type`, `month`, `size`) VALUES
(1, 1, 1630540800, 31834),
(1, 2, 1630540800, 16680),
(1, 3, 1630540800, 4425),
(1, 5, 1630540800, 83525),
(1, 6, 1630540800, 21280),
(1, 7, 1630540800, 596),
(1, 9, 1630540800, 1008);

-- --------------------------------------------------------

--
-- Table structure for table `bandwidthtype`
--

CREATE TABLE `bandwidthtype` (
  `bandwidthTypeId` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bandwidthtype`
--

INSERT INTO `bandwidthtype` (`bandwidthTypeId`, `name`) VALUES
(1, 'Register'),
(2, 'Required Files'),
(3, 'Schedule'),
(4, 'Get File'),
(5, 'Get Resource'),
(6, 'Media Inventory'),
(7, 'Notify Status'),
(8, 'Submit Stats'),
(9, 'Submit Log'),
(10, 'Blacklist'),
(11, 'Screen Shot');

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `blacklistId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `reportingDisplayId` int(11) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `isIgnored` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaignId` int(11) NOT NULL,
  `campaign` varchar(254) NOT NULL,
  `isLayoutSpecific` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaignId`, `campaign`, `isLayoutSpecific`, `userId`) VALUES
(1, 'Default Layout', 1, 1),
(2, 'Kominfo Kab. Malang', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `commandId` int(11) NOT NULL,
  `command` varchar(254) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `dataSetId` int(11) NOT NULL,
  `dataSet` varchar(50) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `lastDataEdit` int(11) NOT NULL DEFAULT 0,
  `code` varchar(50) DEFAULT NULL,
  `isLookup` tinyint(4) NOT NULL,
  `isRemote` tinyint(4) NOT NULL DEFAULT 0,
  `method` enum('GET','POST') DEFAULT NULL,
  `uri` varchar(250) DEFAULT NULL,
  `postData` text DEFAULT NULL,
  `authentication` varchar(10) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `customHeaders` text DEFAULT NULL,
  `refreshRate` int(11) NOT NULL DEFAULT 86400,
  `clearRate` int(11) NOT NULL DEFAULT 0,
  `runsAfter` int(11) DEFAULT NULL,
  `dataRoot` varchar(250) DEFAULT NULL,
  `lastSync` int(11) NOT NULL DEFAULT 0,
  `summarize` varchar(10) DEFAULT NULL,
  `summarizeField` varchar(250) DEFAULT NULL,
  `lastClear` int(11) NOT NULL DEFAULT 0,
  `ignoreFirstRow` tinyint(4) DEFAULT NULL,
  `sourceId` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`dataSetId`, `dataSet`, `description`, `userId`, `lastDataEdit`, `code`, `isLookup`, `isRemote`, `method`, `uri`, `postData`, `authentication`, `username`, `password`, `customHeaders`, `refreshRate`, `clearRate`, `runsAfter`, `dataRoot`, `lastSync`, `summarize`, `summarizeField`, `lastClear`, `ignoreFirstRow`, `sourceId`) VALUES
(1, 'JadwalKegiatan', NULL, 1, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86400, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datasetcolumn`
--

CREATE TABLE `datasetcolumn` (
  `dataSetColumnId` int(11) NOT NULL,
  `dataSetId` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `dataTypeId` int(11) NOT NULL,
  `dataSetColumnTypeId` int(11) NOT NULL,
  `listContent` varchar(1000) DEFAULT NULL,
  `columnOrder` smallint(6) NOT NULL,
  `formula` varchar(1000) DEFAULT NULL,
  `remoteField` varchar(250) DEFAULT NULL,
  `showFilter` tinyint(4) NOT NULL DEFAULT 1,
  `showSort` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `datasetcolumn`
--

INSERT INTO `datasetcolumn` (`dataSetColumnId`, `dataSetId`, `heading`, `dataTypeId`, `dataSetColumnTypeId`, `listContent`, `columnOrder`, `formula`, `remoteField`, `showFilter`, `showSort`) VALUES
(1, 1, 'Tanggal', 3, 1, NULL, 1, NULL, NULL, 0, 0),
(2, 1, 'Kegiatan', 1, 1, NULL, 2, NULL, NULL, 0, 0),
(3, 1, 'Keterangan', 1, 1, NULL, 3, NULL, NULL, 0, 0),
(4, 1, 'Waktu', 1, 2, NULL, 4, 'CASE WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Sunday\" THEN CONCAT(\"Minggu\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Monday\" THEN CONCAT(\"Senin\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Tuesday\" THEN CONCAT(\"Selasa\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Wednesday\" THEN CONCAT(\"Rabu\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Thursday\" THEN CONCAT(\"Kamis\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Friday\" THEN CONCAT(\"Jumat\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) WHEN DATE_FORMAT(Tanggal, \'%W\') = \"Saturday\" THEN CONCAT(\"Sabtu\", \", \", DATE_FORMAT(Tanggal, \'%d-%m-%Y %H:%i\')) ELSE \"Error\" END', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `datasetcolumntype`
--

CREATE TABLE `datasetcolumntype` (
  `dataSetColumnTypeId` int(11) NOT NULL,
  `dataSetColumnType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `datasetcolumntype`
--

INSERT INTO `datasetcolumntype` (`dataSetColumnTypeId`, `dataSetColumnType`) VALUES
(1, 'Value'),
(2, 'Formula'),
(3, 'Remote');

-- --------------------------------------------------------

--
-- Table structure for table `datasetrss`
--

CREATE TABLE `datasetrss` (
  `id` int(11) NOT NULL,
  `dataSetId` int(11) NOT NULL,
  `psk` varchar(254) NOT NULL,
  `title` varchar(254) NOT NULL,
  `author` varchar(254) NOT NULL,
  `titleColumnId` int(11) DEFAULT NULL,
  `summaryColumnId` int(11) DEFAULT NULL,
  `contentColumnId` int(11) DEFAULT NULL,
  `publishedDateColumnId` int(11) DEFAULT NULL,
  `sort` text DEFAULT NULL,
  `filter` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `dataset_1`
--

CREATE TABLE `dataset_1` (
  `id` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `Kegiatan` text DEFAULT NULL,
  `Keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `dataset_1`
--

INSERT INTO `dataset_1` (`id`, `Tanggal`, `Kegiatan`, `Keterangan`) VALUES
(1, '2021-08-10 08:00:00', 'Seminar', NULL),
(2, '2021-08-10 10:00:00', 'Presentasi', NULL),
(3, '2021-08-11 12:00:00', 'Webinar', NULL),
(4, '2021-08-12 10:00:00', 'Training', NULL),
(5, '2021-08-13 13:00:00', 'Workshop', NULL),
(6, '2021-08-12 12:45:00', 'Training 2', NULL),
(7, '2021-08-09 09:00:00', 'Briefing', NULL),
(8, '2021-08-14 10:15:00', 'Liburan', NULL),
(9, '2021-08-15 08:30:00', 'Wisata', NULL),
(10, '2021-08-16 08:45:00', 'Workshop 2', NULL),
(11, '2021-08-17 09:30:00', 'Training 3', NULL),
(12, '2021-08-18 10:00:00', 'Seminar 3', NULL),
(13, '2021-08-19 13:00:00', 'Webinar 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datatype`
--

CREATE TABLE `datatype` (
  `dataTypeId` int(11) NOT NULL,
  `dataType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `datatype`
--

INSERT INTO `datatype` (`dataTypeId`, `dataType`) VALUES
(1, 'String'),
(2, 'Number'),
(3, 'Date'),
(4, 'External Image'),
(5, 'Library Image'),
(6, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `daypart`
--

CREATE TABLE `daypart` (
  `dayPartId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `isRetired` tinyint(4) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `startTime` varchar(8) NOT NULL DEFAULT '00:00:00',
  `endTime` varchar(8) NOT NULL DEFAULT '00:00:00',
  `exceptions` text DEFAULT NULL,
  `isAlways` tinyint(4) NOT NULL DEFAULT 0,
  `isCustom` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `daypart`
--

INSERT INTO `daypart` (`dayPartId`, `name`, `description`, `isRetired`, `userId`, `startTime`, `endTime`, `exceptions`, `isAlways`, `isCustom`) VALUES
(1, 'Custom', 'User specifies the from/to date', 0, 1, '', '', '', 0, 1),
(2, 'Always', 'Event runs always', 0, 1, '', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `displayId` int(11) NOT NULL,
  `display` varchar(50) NOT NULL,
  `auditingUntil` int(11) NOT NULL DEFAULT 0,
  `defaultLayoutId` int(11) NOT NULL,
  `license` varchar(40) DEFAULT NULL,
  `licensed` tinyint(4) NOT NULL DEFAULT 0,
  `loggedIn` tinyint(4) NOT NULL DEFAULT 0,
  `lastaccessed` int(11) DEFAULT NULL,
  `inc_schedule` tinyint(4) NOT NULL DEFAULT 0,
  `email_alert` int(11) DEFAULT 0,
  `alert_timeout` int(11) DEFAULT 0,
  `clientAddress` varchar(50) DEFAULT NULL,
  `mediaInventoryStatus` tinyint(4) NOT NULL DEFAULT 0,
  `macAddress` varchar(254) DEFAULT NULL,
  `lastChanged` int(11) DEFAULT NULL,
  `numberOfMacAddressChanges` int(11) DEFAULT 0,
  `lastWakeOnLanCommandSent` int(11) DEFAULT NULL,
  `wakeOnLan` tinyint(4) NOT NULL DEFAULT 0,
  `wakeOnLanTime` varchar(5) DEFAULT NULL,
  `broadCastAddress` varchar(100) DEFAULT NULL,
  `secureOn` varchar(17) DEFAULT NULL,
  `cidr` varchar(6) DEFAULT NULL,
  `geoLocation` point DEFAULT NULL,
  `client_type` varchar(20) DEFAULT NULL,
  `client_version` varchar(15) DEFAULT NULL,
  `client_code` smallint(6) DEFAULT NULL,
  `displayProfileId` int(11) DEFAULT NULL,
  `screenShotRequested` tinyint(4) NOT NULL DEFAULT 0,
  `storageAvailableSpace` bigint(20) DEFAULT NULL,
  `storageTotalSpace` bigint(20) DEFAULT NULL,
  `xmrChannel` varchar(254) DEFAULT NULL,
  `xmrPubKey` text DEFAULT NULL,
  `lastCommandSuccess` tinyint(4) NOT NULL DEFAULT 2,
  `deviceName` varchar(254) DEFAULT NULL,
  `timeZone` varchar(254) DEFAULT NULL,
  `overrideConfig` text DEFAULT NULL,
  `newCmsAddress` varchar(40) DEFAULT NULL,
  `newCmsKey` varchar(40) DEFAULT NULL,
  `orientation` varchar(10) DEFAULT NULL,
  `resolution` varchar(10) DEFAULT NULL,
  `commercialLicence` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `displayevent`
--

CREATE TABLE `displayevent` (
  `displayEventId` int(11) NOT NULL,
  `eventDate` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `displayevent`
--

INSERT INTO `displayevent` (`displayEventId`, `eventDate`, `displayId`, `start`, `end`) VALUES
(1, 1631428186, 1, 1631419262, 1631428300),
(2, 1631428919, 1, 1631428446, 1631428927),
(3, 1633086518, 1, 1631429095, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `displaygroup`
--

CREATE TABLE `displaygroup` (
  `displayGroupId` int(11) NOT NULL,
  `displayGroup` varchar(50) NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `isDisplaySpecific` tinyint(4) NOT NULL DEFAULT 0,
  `isDynamic` tinyint(4) NOT NULL DEFAULT 0,
  `dynamicCriteria` varchar(254) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `dynamicCriteriaTags` varchar(254) DEFAULT NULL,
  `bandwidthLimit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `displayprofile`
--

CREATE TABLE `displayprofile` (
  `displayProfileId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `config` text DEFAULT NULL,
  `isDefault` tinyint(4) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `displayprofile`
--

INSERT INTO `displayprofile` (`displayProfileId`, `name`, `type`, `config`, `isDefault`, `userId`) VALUES
(1, 'Windows', 'windows', '[]', 1, 1),
(2, 'Android', 'android', '[]', 1, 1),
(3, 'webOS', 'lg', '[]', 1, 1),
(4, 'Tizen', 'sssp', '[]', 1, 1),
(5, 'Linux', 'linux', '[]', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `groupId` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `isUserSpecific` tinyint(4) NOT NULL DEFAULT 0,
  `isEveryone` tinyint(4) NOT NULL DEFAULT 0,
  `libraryQuota` int(11) DEFAULT NULL,
  `isSystemNotification` tinyint(4) NOT NULL DEFAULT 0,
  `isDisplayNotification` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`groupId`, `group`, `isUserSpecific`, `isEveryone`, `libraryQuota`, `isSystemNotification`, `isDisplayNotification`) VALUES
(1, 'Users', 0, 0, NULL, 0, 0),
(2, 'Everyone', 0, 1, NULL, 0, 0),
(3, 'admin', 1, 0, 0, 1, 0),
(4, 'System Notifications', 0, 0, NULL, 1, 0),
(5, 'Playlist Dashboard User', 0, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `helpId` int(11) NOT NULL,
  `topic` varchar(254) NOT NULL,
  `category` varchar(254) NOT NULL DEFAULT 'General',
  `link` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`helpId`, `topic`, `category`, `link`) VALUES
(1, 'Layout', 'General', 'layouts.html'),
(2, 'Content', 'General', 'media.html'),
(4, 'Schedule', 'General', 'scheduling.html'),
(5, 'Group', 'General', 'users_groups.html'),
(6, 'Admin', 'General', 'cms_settings.html'),
(7, 'Report', 'General', 'troubleshooting.html'),
(8, 'Dashboard', 'General', 'tour.html'),
(9, 'User', 'General', 'users.html'),
(10, 'Display', 'General', 'displays.html'),
(11, 'DisplayGroup', 'General', 'displays_groups.html'),
(12, 'Layout', 'Add', 'layouts.html#Add_Layout'),
(13, 'Layout', 'Background', 'layouts_designer.html#Background'),
(14, 'Content', 'Assign', 'layouts_playlists.html#Assigning_Content'),
(15, 'Layout', 'RegionOptions', 'layouts_regions.html'),
(16, 'Content', 'AddtoLibrary', 'media_library.html'),
(17, 'Display', 'Edit', 'displays.html#Display_Edit'),
(18, 'Display', 'Delete', 'displays.html#Display_Delete'),
(19, 'Displays', 'Groups', 'displays_groups.html#Group_Members'),
(20, 'UserGroup', 'Add', 'users_groups.html#Adding_Group'),
(21, 'User', 'Add', 'users_administration.html#Add_User'),
(22, 'User', 'Delete', 'users_administration.html#Delete_User'),
(23, 'Content', 'Config', 'cms_settings.html#Content'),
(24, 'LayoutMedia', 'Permissions', 'users_permissions.html'),
(25, 'Region', 'Permissions', 'users_permissions.html'),
(26, 'Library', 'Assign', 'layouts_playlists.html#Add_From_Library'),
(27, 'Media', 'Delete', 'media_library.html#Delete'),
(28, 'DisplayGroup', 'Add', 'displays_groups.html#Add_Group'),
(29, 'DisplayGroup', 'Edit', 'displays_groups.html#Edit_Group'),
(30, 'DisplayGroup', 'Delete', 'displays_groups.html#Delete_Group'),
(31, 'DisplayGroup', 'Members', 'displays_groups.html#Group_Members'),
(32, 'DisplayGroup', 'Permissions', 'users_permissions.html'),
(34, 'Schedule', 'ScheduleNow', 'scheduling_now.html'),
(35, 'Layout', 'Delete', 'layouts.html#Delete_Layout'),
(36, 'Layout', 'Copy', 'layouts.html#Copy_Layout'),
(37, 'Schedule', 'Edit', 'scheduling_events.html#Edit'),
(38, 'Schedule', 'Add', 'scheduling_events.html#Add'),
(39, 'Layout', 'Permissions', 'users_permissions.html'),
(40, 'Display', 'MediaInventory', 'displays.html#Media_Inventory'),
(41, 'User', 'ChangePassword', 'users.html#Change_Password'),
(42, 'Schedule', 'Delete', 'scheduling_events.html'),
(43, 'Layout', 'Edit', 'layouts_designer.html#Edit_Layout'),
(44, 'Media', 'Permissions', 'users_permissions.html'),
(45, 'Display', 'DefaultLayout', 'displays.html#DefaultLayout'),
(46, 'UserGroup', 'Edit', 'users_groups.html#Edit_Group'),
(47, 'UserGroup', 'Members', 'users_groups.html#Group_Member'),
(48, 'User', 'PageSecurity', 'users_permissions.html#Page_Security'),
(49, 'User', 'MenuSecurity', 'users_permissions.html#Menu_Security'),
(50, 'UserGroup', 'Delete', 'users_groups.html#Delete_Group'),
(51, 'User', 'Edit', 'users_administration.html#Edit_User'),
(52, 'User', 'Applications', 'users_administration.html#Users_MyApplications'),
(53, 'User', 'SetHomepage', 'users_administration.html#Media_Dashboard'),
(54, 'DataSet', 'General', 'media_datasets.html'),
(55, 'DataSet', 'Add', 'media_datasets.html#Create_Dataset'),
(56, 'DataSet', 'Edit', 'media_datasets.html#Edit_Dataset'),
(57, 'DataSet', 'Delete', 'media_datasets.html#Delete_Dataset'),
(58, 'DataSet', 'AddColumn', 'media_datasets.html#Dataset_Column'),
(59, 'DataSet', 'EditColumn', 'media_datasets.html#Dataset_Column'),
(60, 'DataSet', 'DeleteColumn', 'media_datasets.html#Dataset_Column'),
(61, 'DataSet', 'Data', 'media_datasets.html#Dataset_Row'),
(62, 'DataSet', 'Permissions', 'users_permissions.html'),
(63, 'Fault', 'General', 'troubleshooting.html#Report_Fault'),
(65, 'Stats', 'General', 'displays_metrics.html'),
(66, 'Resolution', 'General', 'layouts_resolutions.html'),
(67, 'Template', 'General', 'layouts_templates.html'),
(68, 'Services', 'Register', '#Registered_Applications'),
(69, 'OAuth', 'General', 'api_oauth.html'),
(70, 'Services', 'Log', 'api_oauth.html#oAuthLog'),
(71, 'Module', 'Edit', 'media_modules.html'),
(72, 'Module', 'General', 'media_modules.html'),
(73, 'Campaign', 'General', 'layouts_campaigns.html'),
(74, 'License', 'General', 'licence_information.html'),
(75, 'DataSet', 'ViewColumns', 'media_datasets.html#Dataset_Column'),
(76, 'Campaign', 'Permissions', 'users_permissions.html'),
(77, 'Transition', 'Edit', 'layouts_transitions.html'),
(78, 'User', 'SetPassword', 'users_administration.html#Set_Password'),
(79, 'DataSet', 'ImportCSV', 'media_datasets.htmlmedia_datasets.html#Import_CSV'),
(80, 'DisplayGroup', 'FileAssociations', 'displays_fileassociations.html'),
(81, 'Statusdashboard', 'General', 'tour_status_dashboard.html'),
(82, 'Displayprofile', 'General', 'displays_settings.html'),
(83, 'DisplayProfile', 'Edit', 'displays_settings.html#edit'),
(84, 'DisplayProfile', 'Delete', 'displays_settings.html#delete');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `layoutId` int(11) NOT NULL,
  `layout` varchar(254) NOT NULL,
  `userId` int(11) NOT NULL,
  `createdDt` datetime NOT NULL,
  `modifiedDt` datetime NOT NULL,
  `description` varchar(254) DEFAULT NULL,
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL,
  `backgroundImageId` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `backgroundColor` varchar(25) DEFAULT NULL,
  `backgroundzIndex` int(11) NOT NULL DEFAULT 1,
  `schemaVersion` tinyint(4) NOT NULL DEFAULT 2,
  `statusMessage` text DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL,
  `publishedStatusId` int(11) NOT NULL DEFAULT 1,
  `enableStat` int(11) DEFAULT NULL,
  `publishedDate` datetime DEFAULT NULL,
  `autoApplyTransitions` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`layoutId`, `layout`, `userId`, `createdDt`, `modifiedDt`, `description`, `retired`, `duration`, `backgroundImageId`, `status`, `width`, `height`, `backgroundColor`, `backgroundzIndex`, `schemaVersion`, `statusMessage`, `parentId`, `publishedStatusId`, `enableStat`, `publishedDate`, `autoApplyTransitions`) VALUES
(1, 'Default Layout', 1, '2021-09-12 03:20:20', '2021-09-12 03:20:20', 'Default Layout assigned to Players to show in the event scheduled content cannot be shown.', 0, 0, 2, 3, '1920', '1080', '#03031a', 0, 3, NULL, NULL, 1, 0, NULL, 0),
(7, 'Kominfo Kab. Malang', 1, '2021-10-18 14:16:25', '2021-10-19 01:54:21', '', 0, 86400, 28, 2, '1920', '1080', '#ffffff', 0, 3, NULL, NULL, 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `layouthistory`
--

CREATE TABLE `layouthistory` (
  `layoutHistoryId` int(11) NOT NULL,
  `campaignId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `publishedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `layouthistory`
--

INSERT INTO `layouthistory` (`layoutHistoryId`, `campaignId`, `layoutId`, `publishedDate`) VALUES
(1, 1, 1, '2021-09-12 03:20:20'),
(2, 2, 2, '2021-09-12 03:21:05'),
(3, 2, 3, '2021-09-12 03:24:03'),
(5, 2, 4, '2021-09-12 06:33:50'),
(6, 2, 7, '2021-10-19 01:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `lkcampaignlayout`
--

CREATE TABLE `lkcampaignlayout` (
  `lkCampaignLayoutId` int(11) NOT NULL,
  `campaignId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `displayOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lkcampaignlayout`
--

INSERT INTO `lkcampaignlayout` (`lkCampaignLayoutId`, `campaignId`, `layoutId`, `displayOrder`) VALUES
(1, 1, 1, 1),
(11, 2, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lkcommanddisplayprofile`
--

CREATE TABLE `lkcommanddisplayprofile` (
  `commandId` int(11) NOT NULL,
  `displayProfileId` int(11) NOT NULL,
  `commandString` varchar(1000) NOT NULL,
  `validationString` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkdgdg`
--

CREATE TABLE `lkdgdg` (
  `parentId` int(11) NOT NULL,
  `childId` int(11) NOT NULL,
  `depth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkdisplaydg`
--

CREATE TABLE `lkdisplaydg` (
  `LkDisplayDGID` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lklayoutdisplaygroup`
--

CREATE TABLE `lklayoutdisplaygroup` (
  `id` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkmediadisplaygroup`
--

CREATE TABLE `lkmediadisplaygroup` (
  `id` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lknotificationdg`
--

CREATE TABLE `lknotificationdg` (
  `lkNotificationDgId` int(11) NOT NULL,
  `notificationId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lknotificationgroup`
--

CREATE TABLE `lknotificationgroup` (
  `lkNotificationGroupId` int(11) NOT NULL,
  `notificationId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lknotificationuser`
--

CREATE TABLE `lknotificationuser` (
  `lkNotificationUserId` int(11) NOT NULL,
  `notificationId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `read` tinyint(4) NOT NULL,
  `readDt` int(11) NOT NULL,
  `emailDt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkplaylistplaylist`
--

CREATE TABLE `lkplaylistplaylist` (
  `parentId` int(11) NOT NULL,
  `childId` int(11) NOT NULL,
  `depth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lkplaylistplaylist`
--

INSERT INTO `lkplaylistplaylist` (`parentId`, `childId`, `depth`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(24, 24, 0),
(25, 25, 0),
(26, 26, 0),
(27, 27, 0),
(28, 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lkscheduledisplaygroup`
--

CREATE TABLE `lkscheduledisplaygroup` (
  `eventId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lktagcampaign`
--

CREATE TABLE `lktagcampaign` (
  `lkTagCampaignId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `campaignId` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lktagdisplaygroup`
--

CREATE TABLE `lktagdisplaygroup` (
  `lkTagDisplayGroupId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `displayGroupId` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lktaglayout`
--

CREATE TABLE `lktaglayout` (
  `lkTagLayoutId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lktaglayout`
--

INSERT INTO `lktaglayout` (`lkTagLayoutId`, `tagId`, `layoutId`, `value`) VALUES
(1, 4, 1, NULL),
(2, 4, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lktagmedia`
--

CREATE TABLE `lktagmedia` (
  `lkTagMediaId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lktagmedia`
--

INSERT INTO `lktagmedia` (`lkTagMediaId`, `tagId`, `mediaId`, `value`) VALUES
(1, 4, 1, NULL),
(2, 4, 2, NULL),
(3, 4, 24, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lktagplaylist`
--

CREATE TABLE `lktagplaylist` (
  `lkTagPlaylistId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkusergroup`
--

CREATE TABLE `lkusergroup` (
  `lkUserGroupID` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lkusergroup`
--

INSERT INTO `lkusergroup` (`lkUserGroupID`, `groupId`, `userId`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lkwidgetaudio`
--

CREATE TABLE `lkwidgetaudio` (
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `volume` tinyint(4) NOT NULL,
  `loop` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `lkwidgetmedia`
--

CREATE TABLE `lkwidgetmedia` (
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lkwidgetmedia`
--

INSERT INTO `lkwidgetmedia` (`widgetId`, `mediaId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `logId` int(11) NOT NULL,
  `runNo` varchar(10) NOT NULL,
  `logDate` datetime NOT NULL,
  `channel` varchar(20) NOT NULL,
  `type` varchar(254) NOT NULL,
  `page` varchar(50) NOT NULL,
  `function` varchar(50) DEFAULT NULL,
  `message` longtext NOT NULL,
  `userId` int(11) NOT NULL DEFAULT 0,
  `displayId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`logId`, `runNo`, `logDate`, `channel`, `type`, `page`, `function`, `message`, `userId`, `displayId`) VALUES
(1, '29f4c09', '2021-09-12 03:20:31', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(2, 'b3f94f3', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Problem with Widget 12 for displayId 1. E = Failed to write cache file \"F:\\app\\laragon\\www\\xibo/cache/82/82d5bcefcf27be8f7637081ac343a8a2df4ef37cb7a07d8e249c04daf1856fa3.php\".', 0, 1),
(3, 'd0c610a', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Problem with Widget 15 for displayId 1. E = Failed to write cache file \"F:\\app\\laragon\\www\\xibo/cache/82/82d5bcefcf27be8f7637081ac343a8a2df4ef37cb7a07d8e249c04daf1856fa3.php\".', 0, 1),
(4, '39d4474', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Problem with Widget 11 for displayId 1. E = Failed to write cache file \"F:\\app\\laragon\\www\\xibo/cache/82/82d5bcefcf27be8f7637081ac343a8a2df4ef37cb7a07d8e249c04daf1856fa3.php\".', 0, 1),
(5, 'b3f94f3', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Unknown error during getResource. E = ', 0, 1),
(6, 'd0c610a', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Unknown error during getResource. E = ', 0, 1),
(7, '39d4474', '2021-09-12 03:28:16', 'XMDS', 'ERROR', 'GetResource', 'POST', 'Unknown error during getResource. E = ', 0, 1),
(8, 'c9aea62', '2021-09-12 03:43:33', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(9, '82dce57', '2021-09-12 03:46:33', 'WEB', 'ERROR', '/dataset/import/1', 'POST', 'Error importing row 2. E = SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: \'14\' for column `kominfo`.`dataset_1`.`Tanggal` at row 1', 1, 0),
(10, 'fd9f70b', '2021-09-12 03:51:41', 'WEB', 'ERROR', '/dataset/import/1', 'POST', 'Error importing row 2. E = SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: \'14\' for column `kominfo`.`dataset_1`.`Tanggal` at row 1', 1, 0),
(11, '580d550', '2021-09-12 03:54:01', 'WEB', 'ERROR', '/dataset/import/1', 'POST', 'Error importing row 2. E = SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: \'14\' for column `kominfo`.`dataset_1`.`Tanggal` at row 1', 1, 0),
(12, '06a04f2', '2021-09-12 03:55:26', 'WEB', 'ERROR', '/dataset/import/1', 'POST', 'Error importing row 2. E = SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect datetime value: \'8/10/2021 8:00\' for column `kominfo`.`dataset_1`.`Tanggal` at row 1', 1, 0),
(13, '9a6ce24', '2021-09-12 03:28:14', 'PLAYER', 'ERROR', '[LibraryAgent] LibraryAgent - Run', 'POST', 'Exception in Run: Could not find file \'F:\\app\\laragon\\www\\xibo\\lib-loc\\requiredFiles.xml\'.', 0, 1),
(14, '9a6ce24', '2021-09-12 03:28:16', 'PLAYER', 'ERROR', '[FileAgent_resource_Id_12] FileAgent - Run', 'POST', 'Exception in Run: Unable to get the media resource', 0, 1),
(15, '9a6ce24', '2021-09-12 03:28:16', 'PLAYER', 'ERROR', '[FileAgent_resource_Id_15] FileAgent - Run', 'POST', 'Exception in Run: Unable to get the media resource', 0, 1),
(16, '9a6ce24', '2021-09-12 03:28:16', 'PLAYER', 'ERROR', '[FileAgent_resource_Id_11] FileAgent - Run', 'POST', 'Exception in Run: Unable to get the media resource', 0, 1),
(17, 'bcf4870', '2021-09-12 05:22:42', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(18, '2bfb102', '2021-09-12 05:48:05', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(19, '3f25eb4', '2021-09-12 06:05:40', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(20, 'da2bf26', '2021-09-12 06:19:37', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(21, 'abee340', '2021-09-12 06:28:04', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(22, '82b1885', '2021-09-12 06:35:32', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(23, '9475440', '2021-09-12 06:39:14', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(24, '396d444', '2021-10-01 11:08:27', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(25, '04b3a38', '2021-10-18 14:06:48', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(26, 'c2c544b', '2021-10-18 14:10:49', 'WEB', 'ERROR', '/layout/background/1', 'GET', 'Image not readable: Image source not readable', 1, 0),
(27, '3a661a5', '2021-10-18 14:10:49', 'WEB', 'ERROR', '/layout/background/4', 'GET', 'Image not readable: Image source not readable', 1, 0),
(28, '9e62448', '2021-10-18 14:16:17', 'WEB', 'ERROR', '/layout/background/4', 'GET', 'Image not readable: Image source not readable', 1, 0),
(29, 'a344368', '2021-10-18 14:16:17', 'WEB', 'ERROR', '/library/download/24', 'GET', 'Image not readable: Image source not readable', 1, 0),
(30, '336a6ed', '2021-10-18 14:16:28', 'WEB', 'ERROR', '/layout/background/7', 'GET', 'Image not readable: Image source not readable', 1, 0),
(31, 'e232135', '2021-10-18 14:17:40', 'WEB', 'ERROR', '/layout/background/7', 'GET', 'Image not readable: Image source not readable', 1, 0),
(32, 'abf7061', '2021-10-18 14:26:08', 'WEB', 'ERROR', '/library/download/24', 'GET', 'Image not readable: Image source not readable', 1, 0),
(33, '85eb97f', '2021-10-18 14:26:50', 'WEB', 'ERROR', '/library', 'POST', 'Error uploading media: You already own media with this name. Please choose another.', 1, 0),
(34, 'a0c245a', '2021-10-19 01:51:55', 'WEB', 'ERROR', '/statusdashboard', 'GET', 'cURL error 77: error setting certificate verify locations:\n  CAfile: E:\\app\\laragon\\etc\\ssl\\cacert.pem\n  CApath: none (see https://curl.haxx.se/libcurl/c/libcurl-errors.html)', 1, 0),
(35, '0bdcc31', '2021-10-19 01:52:04', 'WEB', 'ERROR', '/layout/background/1', 'GET', 'Image not readable: Image source not readable', 1, 0),
(36, 'a83171f', '2021-10-19 01:52:04', 'WEB', 'ERROR', '/layout/background/4', 'GET', 'Image not readable: Image source not readable', 1, 0),
(37, '63414cf', '2021-10-19 01:52:25', 'WEB', 'ERROR', '/layout/background/7', 'GET', 'Image not readable: Image source not readable', 1, 0),
(38, '9c57e4d', '2021-10-19 01:52:26', 'WEB', 'ERROR', '/library/download/24', 'GET', 'Image not readable: Image source not readable', 1, 0),
(39, '8521192', '2021-10-19 01:52:39', 'WEB', 'ERROR', '/library/download/27', 'GET', 'Image not readable: Image source not readable', 1, 0),
(40, '5e32a12', '2021-10-19 01:52:43', 'WEB', 'ERROR', '/layout/background/7', 'GET', 'Image not readable: Image source not readable', 1, 0),
(41, 'fa3d5bb', '2021-10-19 01:53:25', 'WEB', 'ERROR', '/library/download/24', 'GET', 'Image not readable: Image source not readable', 1, 0),
(42, '61eb98f', '2021-10-19 01:54:33', 'WEB', 'ERROR', '/layout/background/1', 'GET', 'Image not readable: Image source not readable', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mediaId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `duration` int(11) NOT NULL,
  `originalFileName` varchar(254) DEFAULT NULL,
  `storedAs` varchar(254) DEFAULT NULL,
  `md5` varchar(32) DEFAULT NULL,
  `fileSize` bigint(20) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `isEdited` tinyint(4) NOT NULL DEFAULT 0,
  `editedMediaId` int(11) DEFAULT NULL,
  `moduleSystemFile` tinyint(4) NOT NULL DEFAULT 0,
  `valid` tinyint(4) NOT NULL DEFAULT 1,
  `expires` int(11) DEFAULT NULL,
  `released` tinyint(4) NOT NULL DEFAULT 1,
  `apiRef` varchar(254) DEFAULT NULL,
  `createdDt` datetime NOT NULL,
  `modifiedDt` datetime NOT NULL,
  `enableStat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mediaId`, `name`, `type`, `duration`, `originalFileName`, `storedAs`, `md5`, `fileSize`, `userId`, `retired`, `isEdited`, `editedMediaId`, `moduleSystemFile`, `valid`, `expires`, `released`, `apiRef`, `createdDt`, `modifiedDt`, `enableStat`) VALUES
(1, 'Logo', 'image', 10, 'xibo_logo_square.png', '1.png', '1b14e03ce0f249780372d8c833ee29f4', 19214, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:19', '2021-09-12 03:20:19', 'Inherit'),
(2, 'Default Layout Background', 'image', 10, 'default layout3 background.jpg', '2.jpg', '1723376616232e8d354f4362c9670fa0', 119781, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:19', '2021-09-12 03:20:19', 'Inherit'),
(3, 'jquery-1.11.1.min.js', 'module', 0, 'jquery-1.11.1.min.js', 'jquery-1.11.1.min.js', '3c9137d88a00b1ae0b41ff6a70571615', 95785, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:20', '2021-09-12 03:20:23', NULL),
(4, 'moment.js', 'module', 0, 'moment.js', 'moment.js', '67bb26c11dba6c366834e65f5933aff2', 160251, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:20', '2021-09-12 03:20:23', NULL),
(5, 'xibo-layout-scaler.js', 'module', 0, 'xibo-layout-scaler.js', 'xibo-layout-scaler.js', '5752497a5715d4aceeba4896fea99c62', 3694, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:20', '2021-09-12 03:20:23', NULL),
(6, 'xibo-text-render.js', 'module', 0, 'xibo-text-render.js', 'xibo-text-render.js', '8d72e0c1775cba38c44bf02aee0c8d83', 12150, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:20', '2021-09-12 03:20:23', NULL),
(7, 'Chart.min.js', 'module', 0, 'Chart.min.js', 'Chart.min.js', 'f6c8efa65711e0cbbc99ba72997ecd0e', 159638, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:20', '2021-09-12 03:20:20', NULL),
(8, 'jquery-cycle-2.1.6.min.js', 'module', 0, 'jquery-cycle-2.1.6.min.js', 'jquery-cycle-2.1.6.min.js', '212480cf1292db459557814e2d7a571d', 28876, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:23', NULL),
(9, 'flipclock.min.js', 'module', 0, 'flipclock.min.js', 'flipclock.min.js', 'b9d7742384bdf912c51b6a1b5d674f7a', 21107, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:21', NULL),
(10, 'xibo-countdown-render.js', 'module', 0, 'xibo-countdown-render.js', 'xibo-countdown-render.js', 'db15414501ff0a084b61fc1273e73e2f', 6744, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:21', NULL),
(11, 'bootstrap.min.css', 'module', 0, 'bootstrap.min.css', 'bootstrap.min.css', 'ec3bb52a00e176a7181d454dffaea219', 121200, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:21', NULL),
(12, 'jquery.marquee.min.js', 'module', 0, 'jquery.marquee.min.js', 'jquery.marquee.min.js', '2286bb4f44d9ea301131a25c5204ca0a', 2248, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:23', NULL),
(13, 'xibo-image-render.js', 'module', 0, 'xibo-image-render.js', 'xibo-image-render.js', '6152d3e99b2c61bb3db365d108337483', 2988, 1, 0, 0, 0, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:23', NULL),
(14, 'xibo-dataset-render.js', 'module', 0, 'xibo-dataset-render.js', 'xibo-dataset-render.js', 'e04ad2bff2a293cc7c7e162a9ef1a4c8', 1687, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:21', '2021-09-12 03:20:21', NULL),
(15, 'Aileron Heavy Regular', 'font', 0, 'Aileron-Heavy.otf', '15.otf', '621ba5aaf66e52f3def0cf69807104b9', 30060, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(16, 'Aileron Regular', 'font', 0, 'Aileron-Regular.otf', '16.otf', 'd321fa78bb7190a8ca7e14213ef63203', 27644, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(17, 'Dancing Script Regular', 'font', 0, 'DancingScript-Regular.ttf', '17.ttf', '86aadd0451f9e7dafa957e1e61dd2ed7', 116580, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(18, 'Railway Regular', 'font', 0, 'Railway.ttf', '18.ttf', '58963d3a57da7a70ac36d331416746c5', 45884, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(19, 'Linear Regular', 'font', 0, 'linear-by-braydon-fuller.otf', '19.otf', 'afb33470c582079834acd8b9f979ce1a', 19684, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(20, 'pdf.js', 'module', 0, 'pdf.js', 'pdf.js', 'dec9b89b936438760291e401c09f52aa', 333388, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(21, 'pdf.worker.js', 'module', 0, 'pdf.worker.js', 'pdf.worker.js', '926affd0ae3d3b69e6071b26875638c8', 1337459, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(22, 'compatibility.js', 'module', 0, 'compatibility.js', 'compatibility.js', '758c582a7fd2f30ec9dd8f91803a9882', 18126, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:22', '2021-09-12 03:20:22', NULL),
(23, 'xibo-webpage-render.js', 'module', 0, 'xibo-webpage-render.js', 'xibo-webpage-render.js', 'd59f5fc84ef7747f27baddc07fe81487', 4832, 1, 0, 0, NULL, 1, 1, 0, 1, NULL, '2021-09-12 03:20:23', '2021-09-12 03:20:23', NULL),
(24, 'bg tv.jpg', 'image', 10, 'bg tv.jpg', '24.jpg', 'f53162684be393f2a2ab68fe5745ffc5', 124079, 1, 0, 0, NULL, 0, 1, 0, 0, NULL, '2021-09-12 03:21:03', '2021-09-12 03:21:03', 'Inherit'),
(25, 'WhatsApp Image 2021-07-15 at 9.18.04 AM.jpeg', 'image', 10, 'WhatsApp Image 2021-07-15 at 9.18.04 AM.jpeg', '25.jpeg', '3737164097b36370eb90448c5ee9f095', 57299, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 06:08:12', '2021-09-12 06:08:12', 'Inherit'),
(26, 'kotak', 'image', 10, '1d282a.png', '26.png', '39dda1fc44aa3a92fc8c957d942f5111', 149, 1, 0, 0, NULL, 0, 1, 0, 1, NULL, '2021-09-12 06:11:33', '2021-09-12 06:11:33', 'Inherit'),
(27, '20200623_210101.png', 'image', 10, '20200623_210101.png', '27.png', '09966a88be690460184b8185f1085a96', 201334, 1, 0, 0, NULL, 0, 1, 0, 0, NULL, '2021-09-12 06:12:34', '2021-09-12 06:12:34', 'Inherit'),
(28, 'bg', 'image', 10, 'bg tv.jpg', '28.jpg', 'f53162684be393f2a2ab68fe5745ffc5', 124079, 1, 0, 0, NULL, 0, 1, 0, 0, NULL, '2021-10-19 01:53:58', '2021-10-19 01:53:58', 'Inherit');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `moduleId` int(11) NOT NULL,
  `module` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(4) NOT NULL DEFAULT 0,
  `regionSpecific` tinyint(4) NOT NULL DEFAULT 1,
  `description` varchar(254) DEFAULT NULL,
  `schemaVersion` int(11) NOT NULL DEFAULT 1,
  `validExtensions` varchar(254) DEFAULT NULL,
  `previewEnabled` tinyint(4) NOT NULL DEFAULT 1,
  `assignable` tinyint(4) NOT NULL DEFAULT 1,
  `render_as` varchar(10) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `viewPath` varchar(254) NOT NULL DEFAULT '../modules',
  `class` varchar(254) NOT NULL,
  `defaultDuration` int(11) NOT NULL,
  `installName` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`moduleId`, `module`, `name`, `enabled`, `regionSpecific`, `description`, `schemaVersion`, `validExtensions`, `previewEnabled`, `assignable`, `render_as`, `settings`, `viewPath`, `class`, `defaultDuration`, `installName`) VALUES
(1, 'Image', 'Image', 1, 0, 'Upload Image files to assign to Layouts', 1, 'jpg,jpeg,png,bmp,gif', 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\Image', 10, NULL),
(2, 'Video', 'Video', 1, 0, 'Upload Video files to assign to Layouts', 1, 'wmv,avi,mpg,mpeg,webm,mp4,m4v', 0, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\Video', 0, NULL),
(4, 'PowerPoint', 'PowerPoint', 1, 0, 'Upload a PowerPoint file to assign to Layouts', 1, 'ppt,pps,pptx', 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\PowerPoint', 10, NULL),
(5, 'Webpage', 'Webpage', 1, 1, 'Embed a Webpage', 1, NULL, 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\WebPage', 60, NULL),
(6, 'Ticker', 'Ticker', 1, 1, 'Display dynamic feed content', 1, NULL, 1, 1, NULL, '[]', '../modules', 'Xibo\\Widget\\Ticker', 5, NULL),
(7, 'Text', 'Text', 1, 1, 'Add Text directly to a Layout', 1, NULL, 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\Text', 5, NULL),
(8, 'Embedded', 'Embedded', 1, 1, 'Embed HTML and JavaScript', 1, NULL, 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\Embedded', 60, NULL),
(11, 'datasetview', 'DataSet View', 1, 1, 'Organise and display DataSet data in a tabular format', 1, NULL, 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\DataSetView', 60, NULL),
(12, 'shellcommand', 'Shell Command', 1, 1, 'Instruct a Display to execute a command using the operating system shell', 1, NULL, 1, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\ShellCommand', 3, NULL),
(13, 'localvideo', 'Local Video', 1, 1, 'Display Video that only exists on the Display by providing a local file path or URL', 1, NULL, 0, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\LocalVideo', 60, NULL),
(14, 'genericfile', 'Generic File', 1, 0, 'A generic file to be stored in the library', 1, ',js,html,htm', 0, 0, NULL, NULL, '../modules', 'Xibo\\Widget\\GenericFile', 10, NULL),
(15, 'clock', 'Clock', 1, 1, 'Assign a type of Clock or a Countdown', 1, NULL, 1, 1, 'html', '[]', '../modules', 'Xibo\\Widget\\Clock', 5, NULL),
(16, 'font', 'Font', 1, 0, 'A font to use in other Modules', 1, 'ttf,otf,eot,svg,woff', 0, 0, NULL, NULL, '../modules', 'Xibo\\Widget\\Font', 10, NULL),
(17, 'audio', 'Audio', 1, 0, 'Upload Audio files to assign to Layouts', 1, 'mp3,wav', 0, 1, NULL, NULL, '../modules', 'Xibo\\Widget\\Audio', 0, NULL),
(18, 'pdf', 'PDF', 1, 0, 'Upload PDF files to assign to Layouts', 1, 'pdf', 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Pdf', 60, NULL),
(19, 'notificationview', 'Notification', 1, 1, 'Display messages created in the Notification Drawer of the CMS', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\NotificationView', 10, NULL),
(20, 'subplaylist', 'Sub-Playlist', 1, 1, 'Embed a Sub-Playlist', 1, NULL, 1, 1, 'native', NULL, '../modules', 'Xibo\\Widget\\SubPlaylist', 10, NULL),
(21, 'datasetticker', 'DataSet Ticker', 1, 1, 'Ticker with a DataSet providing the items', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\DataSetTicker', 10, NULL),
(22, 'playersoftware', 'Player Software', 1, 0, 'A module for managing Player Versions', 1, 'apk,ipk,wgt', 0, 0, NULL, NULL, '../modules', 'Xibo\\Widget\\PlayerSoftware', 10, NULL),
(23, 'htmlpackage', 'HTML Package', 1, 0, 'Upload a complete package to distribute to Players', 1, 'htz', 0, 1, 'native', NULL, '../modules', 'Xibo\\Widget\\HtmlPackage', 60, NULL),
(24, 'videoin', 'Video In', 1, 1, 'Display input from an external source', 1, NULL, 0, 1, 'native', NULL, '../modules', 'Xibo\\Widget\\VideoIn', 60, NULL),
(25, 'hls', 'HLS', 1, 1, 'Display live streamed content', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Hls', 60, NULL),
(26, 'calendar', 'Calendar', 1, 1, 'Display events from an iCAL feed', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Calendar', 60, NULL),
(27, 'chart', 'Chart', 1, 1, 'Display information held in a DataSet as a type of Chart', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Chart', 240, NULL),
(28, 'savedreport', 'Saved Reports', 1, 0, 'A saved report to be stored in the library', 1, 'json', 0, 0, NULL, NULL, '../modules', 'Xibo\\Widget\\SavedReport', 10, 'savedreport'),
(29, 'spacer', 'Spacer', 1, 1, 'Make a Region empty for a specified duration', 1, NULL, 0, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Spacer', 60, 'spacer'),
(30, 'countdown', 'Countdown', 1, 1, 'Countdown Module', 1, NULL, 1, 1, 'html', NULL, '../modules', 'Xibo\\Widget\\Countdown', 60, 'countdown');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationId` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `createDt` int(11) NOT NULL,
  `releaseDt` int(11) NOT NULL,
  `isEmail` tinyint(4) NOT NULL,
  `isInterrupt` tinyint(4) NOT NULL,
  `isSystem` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `filename` varchar(1000) DEFAULT NULL,
  `nonusers` varchar(1000) DEFAULT NULL,
  `originalFileName` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(254) NOT NULL,
  `session_id` int(11) NOT NULL,
  `expire_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_token_scopes`
--

CREATE TABLE `oauth_access_token_scopes` (
  `id` int(11) NOT NULL,
  `access_token` varchar(254) NOT NULL,
  `scope` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `auth_code` varchar(254) NOT NULL,
  `session_id` int(11) NOT NULL,
  `expire_time` int(11) NOT NULL,
  `client_redirect_uri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_code_scopes`
--

CREATE TABLE `oauth_auth_code_scopes` (
  `id` int(11) NOT NULL,
  `auth_code` varchar(254) NOT NULL,
  `scope` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` varchar(254) NOT NULL,
  `secret` varchar(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  `userId` int(11) NOT NULL,
  `authCode` tinyint(4) NOT NULL,
  `clientCredentials` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_client_redirect_uris`
--

CREATE TABLE `oauth_client_redirect_uris` (
  `id` int(11) NOT NULL,
  `client_id` varchar(254) NOT NULL,
  `redirect_uri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_client_scopes`
--

CREATE TABLE `oauth_client_scopes` (
  `id` int(11) NOT NULL,
  `clientId` varchar(254) NOT NULL,
  `scopeId` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(254) NOT NULL,
  `expire_time` int(11) NOT NULL,
  `access_token` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_scopes`
--

CREATE TABLE `oauth_scopes` (
  `id` varchar(254) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `oauth_scopes`
--

INSERT INTO `oauth_scopes` (`id`, `description`) VALUES
('all', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_scope_routes`
--

CREATE TABLE `oauth_scope_routes` (
  `id` int(11) NOT NULL,
  `scopeId` varchar(254) NOT NULL,
  `route` varchar(1000) NOT NULL,
  `method` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_sessions`
--

CREATE TABLE `oauth_sessions` (
  `id` int(11) NOT NULL,
  `owner_type` varchar(254) NOT NULL,
  `owner_id` varchar(254) NOT NULL,
  `client_id` varchar(254) NOT NULL,
  `client_redirect_uri` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_session_scopes`
--

CREATE TABLE `oauth_session_scopes` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `scope` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pageId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `asHome` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageId`, `name`, `title`, `asHome`) VALUES
(1, 'icondashboard', 'Icon Dashboard', 1),
(2, 'schedule', 'Schedule', 1),
(3, 'mediamanager', 'Media Dashboard', 1),
(4, 'layout', 'Layout', 1),
(5, 'library', 'Library', 1),
(6, 'display', 'Displays', 1),
(7, 'update', 'Update', 0),
(8, 'admin', 'Administration', 0),
(9, 'group', 'User Groups', 1),
(10, 'log', 'Log', 1),
(11, 'user', 'Users', 1),
(12, 'license', 'Licence', 1),
(13, 'index', 'Home', 0),
(14, 'module', 'Modules', 1),
(15, 'template', 'Templates', 1),
(16, 'fault', 'Report Fault', 1),
(17, 'stats', 'Statistics', 1),
(18, 'manual', 'Manual', 0),
(19, 'resolution', 'Resolutions', 1),
(20, 'help', 'Help Links', 1),
(21, 'clock', 'Clock', 0),
(22, 'displaygroup', 'Display Groups', 1),
(23, 'application', 'Applications', 1),
(24, 'dataset', 'DataSets', 1),
(25, 'campaign', 'Campaigns', 1),
(26, 'transition', 'Transitions', 1),
(27, 'sessions', 'Sessions', 1),
(28, 'preview', 'Preview', 0),
(29, 'statusdashboard', 'Status Dashboard', 1),
(30, 'displayprofile', 'Display Profiles', 1),
(31, 'audit', 'Audit Trail', 0),
(32, 'region', 'Regions', 0),
(33, 'playlist', 'Playlist', 1),
(34, 'maintenance', 'Maintenance', 0),
(35, 'command', 'Commands', 1),
(36, 'notification', 'Notifications', 0),
(37, 'drawer', 'Notification Drawer', 0),
(38, 'daypart', 'Dayparting', 0),
(39, 'task', 'Tasks', 1),
(40, 'playersoftware', 'Player Software', 0),
(41, 'schedulenow', 'Schedule Now', 0),
(42, 'report', 'Report', 0),
(43, 'playlistdashboard', 'Playlist Dashboard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permissionId` int(11) NOT NULL,
  `entityId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `objectId` int(11) NOT NULL,
  `view` tinyint(4) NOT NULL,
  `edit` tinyint(4) NOT NULL,
  `delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`permissionId`, `entityId`, `groupId`, `objectId`, `view`, `edit`, `delete`) VALUES
(1, 1, 1, 1, 1, 0, 0),
(2, 1, 1, 13, 1, 0, 0),
(3, 1, 1, 4, 1, 0, 0),
(4, 1, 1, 5, 1, 0, 0),
(5, 1, 1, 3, 1, 0, 0),
(6, 1, 1, 33, 1, 0, 0),
(7, 1, 1, 28, 1, 0, 0),
(8, 1, 1, 32, 1, 0, 0),
(9, 1, 1, 2, 1, 0, 0),
(10, 1, 1, 29, 1, 0, 0),
(11, 1, 1, 11, 1, 0, 0),
(12, 11, 2, 1, 1, 0, 0),
(13, 11, 2, 2, 1, 0, 0),
(15, 1, 1, 41, 1, 0, 0),
(16, 1, 3, 41, 1, 0, 0),
(17, 1, 4, 41, 1, 0, 0),
(18, 1, 5, 43, 1, 0, 0),
(19, 1, 5, 5, 1, 0, 0),
(20, 1, 5, 11, 1, 0, 0),
(21, 3, 2, 15, 1, 0, 0),
(22, 3, 2, 16, 1, 0, 0),
(23, 3, 2, 17, 1, 0, 0),
(24, 3, 2, 18, 1, 0, 0),
(25, 3, 2, 19, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permissionentity`
--

CREATE TABLE `permissionentity` (
  `entityId` int(11) NOT NULL,
  `entity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permissionentity`
--

INSERT INTO `permissionentity` (`entityId`, `entity`) VALUES
(4, 'Xibo\\Entity\\Campaign'),
(12, 'Xibo\\Entity\\Command'),
(9, 'Xibo\\Entity\\DataSet'),
(11, 'Xibo\\Entity\\DayPart'),
(2, 'Xibo\\Entity\\DisplayGroup'),
(3, 'Xibo\\Entity\\Media'),
(10, 'Xibo\\Entity\\Notification'),
(1, 'Xibo\\Entity\\Page'),
(8, 'Xibo\\Entity\\Playlist'),
(7, 'Xibo\\Entity\\Region'),
(5, 'Xibo\\Entity\\Widget');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20180130073838, 'InstallMigration', '2021-09-11 20:18:26', '2021-09-11 20:18:45', 0),
(20180131113100, 'OldUpgradeStep85Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131113853, 'OldUpgradeStep86Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131113941, 'OldUpgradeStep87Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131113948, 'OldUpgradeStep88Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131113952, 'OldUpgradeStep92Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131113957, 'OldUpgradeStep120Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131114002, 'OldUpgradeStep121Migration', '2021-09-11 20:18:45', '2021-09-11 20:18:45', 0),
(20180131114007, 'OldUpgradeStep122Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114013, 'OldUpgradeStep123Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114017, 'OldUpgradeStep124Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114021, 'OldUpgradeStep125Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114025, 'OldUpgradeStep126Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114030, 'OldUpgradeStep127Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114050, 'OldUpgradeStep128Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114058, 'OldUpgradeStep129Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114103, 'OldUpgradeStep130Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114107, 'OldUpgradeStep131Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114110, 'OldUpgradeStep132Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114114, 'OldUpgradeStep133Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114118, 'OldUpgradeStep134Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131114123, 'OldUpgradeStep135Migration', '2021-09-11 20:18:46', '2021-09-11 20:18:46', 0),
(20180131122645, 'OneRegionPerPlaylistMigration', '2021-09-11 20:18:46', '2021-09-11 20:18:48', 0),
(20180131123038, 'PlaylistTagsMigration', '2021-09-11 20:18:48', '2021-09-11 20:18:48', 0),
(20180131123248, 'WidgetFromToDtMigration', '2021-09-11 20:18:48', '2021-09-11 20:18:49', 0),
(20180212143336, 'DaypartSystemEntriesAsRecords', '2021-09-11 20:18:49', '2021-09-11 20:18:50', 0),
(20180213173846, 'MailFromNameSettingMigration', '2021-09-11 20:18:50', '2021-09-11 20:18:50', 0),
(20180219141257, 'DisplayGroupClosureIndexToNonUnique', '2021-09-11 20:18:50', '2021-09-11 20:18:52', 0),
(20180223180534, 'DataSetColumnFilterAndSortOptionsMigration', '2021-09-11 20:18:52', '2021-09-11 20:18:52', 0),
(20180302182421, 'WidgetCreatedAndModifiedDtMigration', '2021-09-11 20:18:52', '2021-09-11 20:18:53', 0),
(20180313085749, 'MediaTableEditedIdIndexMigration', '2021-09-11 20:18:53', '2021-09-11 20:18:54', 0),
(20180320154652, 'PlaylistAddDynamicFilterMigration', '2021-09-11 20:18:54', '2021-09-11 20:18:55', 0),
(20180327153325, 'RemoveUserLoggedInMigration', '2021-09-11 20:18:55', '2021-09-11 20:18:55', 0),
(20180514114415, 'FixCaseOnHelpTextFieldMigration', '2021-09-11 20:18:55', '2021-09-11 20:18:56', 0),
(20180515123835, 'LayoutPublishDraftMigration', '2021-09-11 20:18:56', '2021-09-11 20:18:57', 0),
(20180529065816, 'DataSetTruncateFixMigration', '2021-09-11 20:18:57', '2021-09-11 20:18:58', 0),
(20180529073531, 'DisplayAsVncLinkMigration', '2021-09-11 20:18:58', '2021-09-11 20:18:58', 0),
(20180621134013, 'AddWidgetSyncTaskMigration', '2021-09-11 20:18:58', '2021-09-11 20:18:58', 0),
(20180621134250, 'EventLayoutPermissionSettingMigration', '2021-09-11 20:18:58', '2021-09-11 20:18:58', 0),
(20180906115552, 'AddForeignKeysToTagsMigration', '2021-09-11 20:18:58', '2021-09-11 20:18:58', 0),
(20180906115606, 'AddForeignKeysToPermissionsMigration', '2021-09-11 20:18:58', '2021-09-11 20:19:00', 0),
(20180906115712, 'AddForeignKeysToWidgetMediaMigration', '2021-09-11 20:19:00', '2021-09-11 20:19:00', 0),
(20180906131643, 'ForgottenPasswordReminderMigration', '2021-09-11 20:19:00', '2021-09-11 20:19:00', 0),
(20180906131716, 'DataSetRssMigration', '2021-09-11 20:19:00', '2021-09-11 20:19:01', 0),
(20181011160130, 'SimpleSettingsMigration', '2021-09-11 20:19:01', '2021-09-11 20:19:04', 0),
(20181113173310, 'RemoveFinanceModuleMigration', '2021-09-11 20:19:04', '2021-09-11 20:19:04', 0),
(20181113180337, 'SplitTickerModuleMigration', '2021-09-11 20:19:04', '2021-09-11 20:19:04', 0),
(20181126113231, 'Release1812Migration', '2021-09-11 20:19:04', '2021-09-11 20:19:04', 0),
(20181210092443, 'RemoveImageUriModuleMigration', '2021-09-11 20:19:04', '2021-09-11 20:19:05', 0),
(20181212114400, 'CreatePlayerVersionsTableMigration', '2021-09-11 20:19:05', '2021-09-11 20:19:05', 0),
(20181217135044, 'EventSyncMigration', '2021-09-11 20:19:05', '2021-09-11 20:19:05', 0),
(20190121092556, 'PlayerUpgradeAndOverrideConfigMigration', '2021-09-11 20:19:06', '2021-09-11 20:19:06', 0),
(20190125170130, 'PlayerSoftwareVersionFieldMigration', '2021-09-11 20:19:06', '2021-09-11 20:19:07', 0),
(20190129103831, 'AddLinuxDisplayProfileMigration', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190212112534, 'AddProofOfPlayStatsDurationAndCountMigration', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190212115432, 'AddDefaultTransitionDurationSettingMigration', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190213160914, 'AddGlobalStatSettingMigration', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190213162212, 'AddHorizontalMenuSettingMigration', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190214102508, 'AddLayoutEnableStat', '2021-09-11 20:19:07', '2021-09-11 20:19:07', 0),
(20190214102516, 'AddMediaEnableStat', '2021-09-11 20:19:07', '2021-09-11 20:19:08', 0),
(20190220165703, 'AddScheduleRecurrenceMonthlyRepeatsOnMigration', '2021-09-11 20:19:08', '2021-09-11 20:19:08', 0),
(20190227101705, 'MakeDisplayLicenseColumnUniqueMigration', '2021-09-11 20:19:08', '2021-09-11 20:19:09', 0),
(20190228120603, 'AddDynamicCriteriaTagsMigration', '2021-09-11 20:19:09', '2021-09-11 20:19:09', 0),
(20190301115046, 'AdjustGenericfileValidExtensionsMigration', '2021-09-11 20:19:09', '2021-09-11 20:19:09', 0),
(20190315134628, 'AddBandwidthLimitColumnToDisplaygroupMigration', '2021-09-11 20:19:09', '2021-09-11 20:19:10', 0),
(20190322162052, 'AddPublishedDateColumnMigration', '2021-09-11 20:19:10', '2021-09-11 20:19:10', 0),
(20190326163016, 'CreateLayoutHistoryTableMigration', '2021-09-11 20:19:10', '2021-09-11 20:19:11', 0),
(20190328111718, 'AddCampaignStatMigration', '2021-09-11 20:19:11', '2021-09-11 20:19:11', 0),
(20190401150256, 'AddScheduleNowPageMigration', '2021-09-11 20:19:11', '2021-09-11 20:19:11', 0),
(20190509101525, 'CreateReportScheduleTableMigration', '2021-09-11 20:19:11', '2021-09-11 20:19:11', 0),
(20190509102648, 'CreateSavedReportTableMigration', '2021-09-11 20:19:11', '2021-09-11 20:19:12', 0),
(20190509113001, 'AddReportPageMigration', '2021-09-11 20:19:12', '2021-09-11 20:19:12', 0),
(20190510140126, 'TwoFactorAuthMigration', '2021-09-11 20:19:12', '2021-09-11 20:19:13', 0),
(20190514134430, 'NullableTextFieldsMigration', '2021-09-11 20:19:13', '2021-09-11 20:19:15', 0),
(20190515094133, 'AddHtmlDatatypeMigration', '2021-09-11 20:19:15', '2021-09-11 20:19:15', 0),
(20190515105624, 'InstallAdditionalStandardModulesMigration', '2021-09-11 20:19:15', '2021-09-11 20:19:15', 0),
(20190517080033, 'AddForeignKeysToLktagTablesMigration', '2021-09-11 20:19:15', '2021-09-11 20:19:16', 0),
(20190521092700, 'AddReportScheduleTaskMigration', '2021-09-11 20:19:16', '2021-09-11 20:19:16', 0),
(20190521092930, 'AddPreviousRunDateReportScheduleMigration', '2021-09-11 20:19:16', '2021-09-11 20:19:17', 0),
(20190521102635, 'PlaylistDurationUpdateAtTimestamp', '2021-09-11 20:19:17', '2021-09-11 20:19:18', 0),
(20190603083836, 'ChangeStatTableStartEndColumnMigration', '2021-09-11 20:19:18', '2021-09-11 20:19:18', 0),
(20190610150331, 'TagsWithValuesMigration', '2021-09-11 20:19:18', '2021-09-11 20:19:21', 0),
(20190611145607, 'RemoveOldVersionTableMigration', '2021-09-11 20:19:21', '2021-09-11 20:19:21', 0),
(20190612140955, 'DisplayTableDatabaseSchemaAdjustmentsMigration', '2021-09-11 20:19:21', '2021-09-11 20:19:25', 0),
(20190620112611, 'MoveTidyStatsToStatsArchiveTaskMigration', '2021-09-11 20:19:25', '2021-09-11 20:19:25', 0),
(20190620142655, 'AddPlaylistEnableStatMigration', '2021-09-11 20:19:25', '2021-09-11 20:19:26', 0),
(20190626091331, 'WidgetHistoryMigration', '2021-09-11 20:19:26', '2021-09-11 20:19:26', 0),
(20190626110359, 'CreateStatTableMigration', '2021-09-11 20:19:26', '2021-09-11 20:19:26', 0),
(20190628083649, 'AddStatsMigrationTaskMigration', '2021-09-11 20:19:26', '2021-09-11 20:19:26', 0),
(20190710213414, 'AddIsActiveReportScheduleMigration', '2021-09-11 20:19:26', '2021-09-11 20:19:27', 0),
(20190717101342, 'NullableCommandValidationStringMigration', '2021-09-11 20:19:27', '2021-09-11 20:19:27', 0),
(20190719074601, 'MissingDefaultValueMigration', '2021-09-11 20:19:27', '2021-09-11 20:19:28', 0),
(20190725115532, 'AddScheduleReminderTaskMigration', '2021-09-11 20:19:28', '2021-09-11 20:19:28', 0),
(20190801102042, 'DisplayProfileCommandLinkFixMigration', '2021-09-11 20:19:28', '2021-09-11 20:19:28', 0),
(20190801141737, 'DatasetAddCustomHeadersColumnMigration', '2021-09-11 20:19:28', '2021-09-11 20:19:28', 0),
(20190801142302, 'AddDoohUserTypeMigration', '2021-09-11 20:19:28', '2021-09-11 20:19:28', 0),
(20190802145636, 'CreateScheduleReminderTableMigration', '2021-09-11 20:19:28', '2021-09-11 20:19:28', 0),
(20190806144729, 'AddShowContentFromMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190823081448, 'AddImageProcessingTaskMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190828123735, 'AddDefaultSettingResizeLimitResizeThresholdMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190903083314, 'AddGlobalSettingForCascadePermissionsMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190905084201, 'AddSettingForDefaultTransitionTypeMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190905084642, 'AddSettingForAutoLayoutPublishMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:29', 0),
(20190910132520, 'DisplayMoveCmsMigration', '2021-09-11 20:19:29', '2021-09-11 20:19:30', 0),
(20190917093141, 'InterruptLayoutMigration', '2021-09-11 20:19:30', '2021-09-11 20:19:30', 0),
(20190918090608, 'AddDefaultSettingQuickChartMigration', '2021-09-11 20:19:30', '2021-09-11 20:19:30', 0),
(20190919154513, 'AddNotificationAttachmentFilenameNonUsersMigration', '2021-09-11 20:19:30', '2021-09-11 20:19:31', 0),
(20190926135518, 'AddSettingForTransitionAutoApplyToLayoutMigration', '2021-09-11 20:19:31', '2021-09-11 20:19:31', 0),
(20190926140809, 'InstallSavedReportsAndSpacerModulesMigration', '2021-09-11 20:19:31', '2021-09-11 20:19:31', 0),
(20191001092651, 'AddNotificationOriginalFilenameMigration', '2021-09-11 20:19:31', '2021-09-11 20:19:32', 0),
(20191022101141, 'AddCommandEntityToPermissionEntityMigration', '2021-09-11 20:19:32', '2021-09-11 20:19:32', 0),
(20191024152519, 'AddScheduleExclusionsTableMigration', '2021-09-11 20:19:32', '2021-09-11 20:19:32', 0),
(20191122114104, 'FixDuplicateModuleFilesMigration', '2021-09-11 20:19:32', '2021-09-11 20:19:32', 0),
(20191126103120, 'GeoScheduleMigration', '2021-09-11 20:19:32', '2021-09-11 20:19:33', 0),
(20191126141140, 'RemoteDataSetCsvSourceMigration', '2021-09-11 20:19:33', '2021-09-11 20:19:34', 0),
(20191205180116, 'AddPlaylistDashboardPageUserMigration', '2021-09-11 20:19:34', '2021-09-11 20:19:34', 0),
(20200107082625, 'DisplayAddResolutionMigration', '2021-09-11 20:19:34', '2021-09-11 20:19:34', 0),
(20200115115935, 'AddReportScheduleMessageMigration', '2021-09-11 20:19:34', '2021-09-11 20:19:35', 0),
(20200122143630, 'AddReleasedRequiredFileMigration', '2021-09-11 20:19:35', '2021-09-11 20:19:35', 0),
(20200122191232, 'AddCommercialLicenceColumnMigration', '2021-09-11 20:19:35', '2021-09-11 20:19:36', 0),
(20200129104944, 'AddEngagementsStatsMigration', '2021-09-11 20:19:36', '2021-09-11 20:19:36', 0),
(20200130165443, 'CountdownModuleAddMigration', '2021-09-11 20:19:36', '2021-09-11 20:19:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `player_software`
--

CREATE TABLE `player_software` (
  `versionId` int(11) NOT NULL,
  `player_type` varchar(20) DEFAULT NULL,
  `player_version` varchar(15) DEFAULT NULL,
  `player_code` smallint(6) DEFAULT NULL,
  `mediaId` int(11) NOT NULL,
  `playerShowVersion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlistId` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `regionId` int(11) DEFAULT NULL,
  `createdDt` datetime NOT NULL,
  `modifiedDt` datetime NOT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `requiresDurationUpdate` int(11) NOT NULL DEFAULT 0,
  `isDynamic` tinyint(4) NOT NULL DEFAULT 0,
  `filterMediaName` varchar(255) DEFAULT NULL,
  `filterMediaTags` varchar(255) DEFAULT NULL,
  `enableStat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlistId`, `name`, `ownerId`, `regionId`, `createdDt`, `modifiedDt`, `duration`, `requiresDurationUpdate`, `isDynamic`, `filterMediaName`, `filterMediaTags`, `enableStat`) VALUES
(1, 'Logo', 1, 1, '2021-09-12 03:20:20', '2021-09-12 03:20:20', 0, 1, 0, NULL, NULL, NULL),
(2, 'Header', 1, 2, '2021-09-12 03:20:20', '2021-09-12 03:20:20', 0, 1, 0, NULL, NULL, NULL),
(3, 'Explainer', 1, 3, '2021-09-12 03:20:20', '2021-09-12 03:20:20', 0, 1, 0, NULL, NULL, NULL),
(4, 'Time', 1, 4, '2021-09-12 03:20:20', '2021-09-12 03:20:20', 0, 1, 0, NULL, NULL, NULL),
(24, 'Date', 1, 24, '2021-10-18 14:16:25', '2021-10-18 14:16:29', 0, 1, 0, NULL, NULL, NULL),
(25, 'Isi J. Kegiatan', 1, 25, '2021-10-18 14:16:25', '2021-10-18 14:16:29', 0, 1, 0, NULL, NULL, NULL),
(26, 'Judul J. Kegiatan', 1, 26, '2021-10-18 14:16:25', '2021-10-18 14:16:29', 0, 1, 0, NULL, NULL, NULL),
(27, 'Running Text', 1, 27, '2021-10-18 14:16:25', '2021-10-18 14:16:29', 0, 1, 0, NULL, NULL, NULL),
(28, 'Video', 1, 28, '2021-10-18 14:16:25', '2021-10-18 14:16:29', 0, 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `regionId` int(11) NOT NULL,
  `layoutId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `name` varchar(254) DEFAULT NULL,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `top` decimal(10,0) NOT NULL,
  `left` decimal(10,0) NOT NULL,
  `zIndex` smallint(6) NOT NULL,
  `duration` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`regionId`, `layoutId`, `ownerId`, `name`, `width`, `height`, `top`, `left`, `zIndex`, `duration`) VALUES
(1, 1, 1, 'Logo', '267', '157', '16', '24', 0, 0),
(2, 1, 1, 'Header', '1109', '216', '290', '413', 0, 0),
(3, 1, 1, 'Explainer', '1626', '145', '618', '147', 0, 0),
(4, 1, 1, 'Time', '126', '58', '971', '1741', 0, 0),
(24, 7, 1, 'Date', '283', '109', '969', '1637', 0, 86400),
(25, 7, 1, 'Isi J. Kegiatan', '965', '530', '375', '936', 0, 3),
(26, 7, 1, 'Judul J. Kegiatan', '965', '109', '267', '936', 0, 86400),
(27, 7, 1, 'Running Text', '1634', '96', '983', '0', 0, 55),
(28, 7, 1, 'Video', '905', '640', '266', '22', 0, 86400);

-- --------------------------------------------------------

--
-- Table structure for table `regionoption`
--

CREATE TABLE `regionoption` (
  `regionId` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `regionoption`
--

INSERT INTO `regionoption` (`regionId`, `option`, `value`) VALUES
(24, 'loop', '0'),
(24, 'transitionDirection', 'N'),
(24, 'transitionDuration', ''),
(24, 'transitionType', ''),
(25, 'loop', '0'),
(25, 'transitionDirection', 'N'),
(25, 'transitionDuration', NULL),
(25, 'transitionType', NULL),
(26, 'loop', '0'),
(26, 'transitionDirection', 'N'),
(26, 'transitionDuration', NULL),
(26, 'transitionType', NULL),
(27, 'loop', '1'),
(27, 'transitionDirection', 'N'),
(27, 'transitionDuration', ''),
(27, 'transitionType', ''),
(28, 'loop', '0'),
(28, 'transitionDirection', 'N'),
(28, 'transitionDuration', ''),
(28, 'transitionType', '');

-- --------------------------------------------------------

--
-- Table structure for table `reportschedule`
--

CREATE TABLE `reportschedule` (
  `reportScheduleId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reportName` varchar(255) NOT NULL,
  `filterCriteria` text DEFAULT NULL,
  `schedule` varchar(255) NOT NULL,
  `lastSavedReportId` int(11) NOT NULL DEFAULT 0,
  `lastRunDt` int(11) NOT NULL DEFAULT 0,
  `previousRunDt` int(11) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `createdDt` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `requiredfile`
--

CREATE TABLE `requiredfile` (
  `rfId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `bytesRequested` bigint(20) NOT NULL,
  `complete` tinyint(4) NOT NULL DEFAULT 0,
  `path` varchar(255) DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `released` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `resolution`
--

CREATE TABLE `resolution` (
  `resolutionId` int(11) NOT NULL,
  `resolution` varchar(254) NOT NULL,
  `width` smallint(6) NOT NULL,
  `height` smallint(6) NOT NULL,
  `intended_width` smallint(6) NOT NULL,
  `intended_height` smallint(6) NOT NULL,
  `version` tinyint(4) NOT NULL DEFAULT 1,
  `enabled` tinyint(4) NOT NULL DEFAULT 1,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `resolution`
--

INSERT INTO `resolution` (`resolutionId`, `resolution`, `width`, `height`, `intended_width`, `intended_height`, `version`, `enabled`, `userId`) VALUES
(1, '1080p HD Landscape', 800, 450, 1920, 1080, 2, 1, 1),
(2, '720p HD Landscape', 800, 450, 1280, 720, 2, 1, 1),
(3, '1080p HD Portrait', 450, 800, 1080, 1920, 2, 1, 1),
(4, '720p HD Portrait', 450, 800, 720, 1280, 2, 1, 1),
(5, '4k cinema', 800, 450, 4096, 2304, 2, 1, 1),
(6, 'Common PC Monitor 4:3', 800, 600, 1024, 768, 2, 1, 1),
(7, '4k UHD Landscape', 450, 800, 3840, 2160, 2, 1, 1),
(8, '4k UHD Portrait', 800, 450, 2160, 3840, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saved_report`
--

CREATE TABLE `saved_report` (
  `savedReportId` int(11) NOT NULL,
  `saveAs` varchar(255) NOT NULL,
  `reportName` varchar(255) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `reportScheduleId` int(11) NOT NULL,
  `generatedOn` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `eventId` int(11) NOT NULL,
  `eventTypeId` int(11) NOT NULL,
  `campaignId` int(11) DEFAULT NULL,
  `commandId` int(11) DEFAULT NULL,
  `dayPartId` int(11) NOT NULL DEFAULT 0,
  `userId` int(11) NOT NULL,
  `fromDt` bigint(20) DEFAULT NULL,
  `toDt` bigint(20) DEFAULT NULL,
  `is_priority` tinyint(4) NOT NULL,
  `displayOrder` int(11) NOT NULL DEFAULT 0,
  `lastRecurrenceWatermark` bigint(20) DEFAULT NULL,
  `syncTimezone` tinyint(4) NOT NULL DEFAULT 0,
  `recurrence_type` enum('Minute','Hour','Day','Week','Month','Year') DEFAULT NULL,
  `recurrence_detail` int(11) DEFAULT NULL,
  `recurrence_range` bigint(20) DEFAULT NULL,
  `recurrenceRepeatsOn` varchar(14) DEFAULT NULL,
  `syncEvent` int(11) NOT NULL DEFAULT 0,
  `recurrenceMonthlyRepeatsOn` tinyint(4) NOT NULL DEFAULT 0,
  `shareOfVoice` tinyint(4) DEFAULT NULL,
  `isGeoAware` tinyint(4) NOT NULL DEFAULT 0,
  `geoLocation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `scheduleexclusions`
--

CREATE TABLE `scheduleexclusions` (
  `scheduleExclusionId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `fromDt` int(11) NOT NULL,
  `toDt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `schedulereminder`
--

CREATE TABLE `schedulereminder` (
  `scheduleReminderId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `option` int(11) NOT NULL,
  `reminderDt` int(11) NOT NULL,
  `lastReminderDt` int(11) NOT NULL,
  `isEmail` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` varchar(160) NOT NULL,
  `session_data` longtext NOT NULL,
  `session_expiration` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `lastAccessed` datetime DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `isExpired` tinyint(4) NOT NULL DEFAULT 1,
  `userAgent` varchar(255) DEFAULT NULL,
  `remoteAddr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_data`, `session_expiration`, `lastAccessed`, `userId`, `isExpired`, `userAgent`, `remoteAddr`) VALUES
('0kuvt6kqvlr4lka34r0t6hq6me', 'init|s:1:\"1\";csrfToken|s:40:\"9a1d634e37a7e97bee4cf7dee2d602c68d44ba05\";slim.flash|a:0:{}userid|i:1;', 1631455251, '2021-09-12 04:03:33', 1, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', '::1'),
('6mm396evuf2k18mqdv7g8fm7kg', 'init|s:1:\"1\";csrfToken|s:40:\"1da8f0964bbecc5ab5729739f9877408dc6f9e57\";slim.flash|a:0:{}userid|i:1;', 1633123183, '2021-10-01 11:19:43', 1, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36 Edg/94.0.992.31', '::1'),
('8f2n0lg89k89i0s19elfc1gs7c', 'init|s:1:\"1\";csrfToken|s:40:\"a58ffe0f7d6171a2e192e61e3cc2f030b557d87b\";slim.flash|a:0:{}userid|i:1;', 1631465076, '2021-09-12 06:57:42', 1, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', '::1'),
('96ba94fjs1ce9od7chqeima2gb', 'init|s:1:\"1\";csrfToken|s:40:\"acbf21d87cc45534bbcfb74255d5f625ff5b09b6\";slim.flash|a:0:{}', 1631453504, '2021-09-12 03:31:44', 1, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', '::1'),
('eter585l4o0uj55q1r125oe3i7', 'init|s:1:\"1\";csrfToken|s:40:\"f6f2bc4692cb757d2d7694b22c821524935a8244\";slim.flash|a:0:{}userid|i:1;', 1634644527, '2021-10-19 01:57:33', 1, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50', '::1'),
('kk802uo43qo3ph3cnr7snnlpsk', 'init|s:1:\"1\";csrfToken|s:40:\"db93b006b0d3ff355cd525eecc1c7e7a5aa8ba2c\";slim.flash|a:1:{s:10:\"priorRoute\";s:10:\"/xibo/web/\";}', 1631460127, '2021-09-12 05:22:07', 0, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36 Edg/93.0.961.44', '::1'),
('nteatte02rbm3uedalkan3j1f6', 'init|s:1:\"1\";csrfToken|s:40:\"db51a3bdb61317e61edd65b98f97a44937e6f7ea\";slim.flash|a:0:{}userid|i:1;', 1634603210, '2021-10-18 14:26:50', 1, 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36 Edg/94.0.992.50', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `settingId` int(11) NOT NULL,
  `setting` varchar(50) NOT NULL,
  `value` varchar(1000) NOT NULL,
  `userSee` tinyint(4) NOT NULL DEFAULT 1,
  `userChange` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`settingId`, `setting`, `value`, `userSee`, `userChange`) VALUES
(1, 'MEDIA_DEFAULT', 'private', 1, 1),
(2, 'LAYOUT_DEFAULT', 'private', 1, 1),
(3, 'defaultUsertype', 'User', 1, 1),
(7, 'userModule', 'module_user_general.php', 0, 0),
(11, 'defaultTimezone', 'UTC', 1, 1),
(18, 'mail_to', 'mail@yoursite.com', 1, 1),
(19, 'mail_from', 'mail@yoursite.com', 1, 1),
(30, 'audit', 'Error', 1, 1),
(33, 'LIBRARY_LOCATION', 'F:\\app\\laragon\\www\\xibo\\lib-loc/', 1, 1),
(34, 'SERVER_KEY', '1k1301', 1, 1),
(35, 'HELP_BASE', 'http://www.xibo.org.uk/manual/en/', 1, 1),
(36, 'PHONE_HOME', 'On', 1, 1),
(37, 'PHONE_HOME_KEY', '33bb07c9a260f9e93ee1b2fb8a8ffd93', 0, 0),
(38, 'PHONE_HOME_URL', 'http://www.xibo.org.uk/stats/track.php', 0, 0),
(39, 'PHONE_HOME_DATE', '0', 0, 0),
(40, 'SERVER_MODE', 'Production', 1, 1),
(41, 'MAINTENANCE_ENABLED', 'Off', 1, 1),
(42, 'MAINTENANCE_EMAIL_ALERTS', '1', 1, 1),
(43, 'MAINTENANCE_KEY', 'changeme', 1, 1),
(44, 'MAINTENANCE_LOG_MAXAGE', '30', 1, 1),
(45, 'MAINTENANCE_STAT_MAXAGE', '30', 1, 1),
(46, 'MAINTENANCE_ALERT_TOUT', '12', 1, 1),
(47, 'SHOW_DISPLAY_AS_VNCLINK', '', 1, 1),
(48, 'SHOW_DISPLAY_AS_VNC_TGT', '_top', 1, 1),
(49, 'MAINTENANCE_ALWAYS_ALERT', '0', 1, 1),
(50, 'SCHEDULE_LOOKAHEAD', '1', 1, 0),
(51, 'REQUIRED_FILES_LOOKAHEAD', '172800', 1, 1),
(52, 'REGION_OPTIONS_COLOURING', 'Media Colouring', 1, 1),
(53, 'LAYOUT_COPY_MEDIA_CHECKB', '0', 1, 1),
(54, 'MAX_LICENSED_DISPLAYS', '0', 0, 0),
(55, 'LIBRARY_MEDIA_UPDATEINALL_CHECKB', '1', 1, 1),
(56, 'USER_PASSWORD_POLICY', '', 1, 1),
(57, 'USER_PASSWORD_ERROR', '', 1, 1),
(58, 'MODULE_CONFIG_LOCKED_CHECKB', '0', 0, 0),
(59, 'LIBRARY_SIZE_LIMIT_KB', '0', 1, 0),
(60, 'MONTHLY_XMDS_TRANSFER_LIMIT_KB', '0', 1, 0),
(61, 'DEFAULT_LANGUAGE', 'en_GB', 1, 1),
(62, 'TRANSITION_CONFIG_LOCKED_CHECKB', '0', 1, 0),
(63, 'GLOBAL_THEME_NAME', 'default', 1, 1),
(64, 'DEFAULT_LAT', '51.504', 1, 1),
(65, 'DEFAULT_LONG', '-0.104', 1, 1),
(66, 'SCHEDULE_WITH_VIEW_PERMISSION', '0', 1, 1),
(67, 'SETTING_IMPORT_ENABLED', '1', 1, 1),
(68, 'SETTING_LIBRARY_TIDY_ENABLED', '1', 1, 1),
(69, 'SENDFILE_MODE', 'Off', 1, 1),
(70, 'EMBEDDED_STATUS_WIDGET', '', 1, 0),
(71, 'PROXY_HOST', '', 1, 1),
(72, 'PROXY_PORT', '0', 1, 1),
(73, 'PROXY_AUTH', '', 1, 1),
(74, 'DATE_FORMAT', 'Y-m-d H:i', 1, 1),
(75, 'DETECT_LANGUAGE', '1', 1, 1),
(76, 'DEFAULTS_IMPORTED', '1', 0, 0),
(77, 'FORCE_HTTPS', '0', 1, 1),
(78, 'ISSUE_STS', '0', 1, 1),
(79, 'STS_TTL', '600', 1, 1),
(81, 'CALENDAR_TYPE', 'Gregorian', 1, 1),
(82, 'DASHBOARD_LATEST_NEWS_ENABLED', '1', 1, 1),
(83, 'LIBRARY_MEDIA_DELETEOLDVER_CHECKB', '1', 1, 1),
(84, 'PROXY_EXCEPTIONS', '', 1, 1),
(85, 'INSTANCE_SUSPENDED', '0', 0, 0),
(86, 'INHERIT_PARENT_PERMISSIONS', '1', 1, 1),
(87, 'XMR_ADDRESS', 'tcp://localhost:5555', 1, 1),
(88, 'XMR_PUB_ADDRESS', '', 1, 1),
(89, 'CDN_URL', '', 0, 0),
(90, 'ELEVATE_LOG_UNTIL', '1463396415', 1, 1),
(91, 'RESTING_LOG_LEVEL', 'Error', 1, 1),
(92, 'TASK_CONFIG_LOCKED_CHECKB', '0', 0, 0),
(93, 'WHITELIST_LOAD_BALANCERS', '', 1, 1),
(94, 'DEFAULT_LAYOUT', '1', 1, 1),
(95, 'DISPLAY_PROFILE_STATS_DEFAULT', '0', 1, 1),
(96, 'DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED', '1', 1, 1),
(97, 'DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED', '1', 1, 1),
(98, 'DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT', '200', 1, 1),
(99, 'LATEST_NEWS_URL', 'http://xibo.org.uk/feed', 0, 0),
(100, 'DISPLAY_LOCK_NAME_TO_DEVICENAME', '0', 1, 1),
(101, 'mail_from_name', '', 1, 1),
(102, 'SCHEDULE_SHOW_LAYOUT_NAME', '0', 1, 1),
(103, 'DEFAULT_USERGROUP', '1', 1, 1),
(104, 'PASSWORD_REMINDER_ENABLED', 'Off', 1, 1),
(105, 'DISPLAY_AUTO_AUTH', '0', 0, 0),
(106, 'EVENT_SYNC', '0', 0, 0),
(107, 'DEFAULT_TRANSITION_DURATION', '1000', 1, 1),
(108, 'LAYOUT_STATS_ENABLED_DEFAULT', '0', 1, 1),
(109, 'DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT', 'Individual', 1, 1),
(110, 'MEDIA_STATS_ENABLED_DEFAULT', 'Inherit', 1, 1),
(111, 'WIDGET_STATS_ENABLED_DEFAULT', 'Inherit', 1, 1),
(112, 'NAVIGATION_MENU_POSITION', 'vertical', 1, 1),
(113, 'TWOFACTOR_ISSUER', '', 1, 1),
(114, 'PLAYLIST_STATS_ENABLED_DEFAULT', 'Inherit', 1, 1),
(115, 'DEFAULT_RESIZE_LIMIT', '6000', 1, 1),
(116, 'DEFAULT_RESIZE_THRESHOLD', '1920', 1, 1),
(117, 'DEFAULT_CASCADE_PERMISSION_CHECKB', '1', 1, 1),
(118, 'DEFAULT_TRANSITION_IN', 'fadeIn', 1, 1),
(119, 'DEFAULT_TRANSITION_OUT', 'fadeOut', 1, 1),
(120, 'DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB', '0', 1, 1),
(121, 'QUICK_CHART_URL', 'https://quickchart.io', 1, 1),
(122, 'DEFAULT_TRANSITION_AUTO_APPLY', '0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `statId` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `statDate` int(11) NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `campaignId` int(11) DEFAULT NULL,
  `layoutId` int(11) DEFAULT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `widgetId` int(11) DEFAULT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `tag` varchar(254) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `engagements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Published'),
(2, 'Draft'),
(3, 'Pending Approval');

-- --------------------------------------------------------

--
-- Table structure for table `stat_archive`
--

CREATE TABLE `stat_archive` (
  `statId` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `statDate` datetime NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `displayId` int(11) NOT NULL,
  `layoutId` int(11) DEFAULT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `widgetId` int(11) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `tag` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tagId` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `isSystem` int(11) NOT NULL DEFAULT 0,
  `options` text DEFAULT NULL,
  `isRequired` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagId`, `tag`, `isSystem`, `options`, `isRequired`) VALUES
(1, 'template', 1, NULL, 0),
(2, 'background', 1, NULL, 0),
(3, 'thumbnail', 1, NULL, 0),
(4, 'imported', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskId` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `class` varchar(254) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2,
  `pid` int(11) DEFAULT NULL,
  `options` text DEFAULT NULL,
  `schedule` varchar(254) NOT NULL,
  `lastRunDt` int(11) NOT NULL DEFAULT 0,
  `lastRunStartDt` int(11) DEFAULT NULL,
  `lastRunMessage` varchar(255) DEFAULT NULL,
  `lastRunStatus` tinyint(4) NOT NULL DEFAULT 0,
  `lastRunDuration` smallint(6) NOT NULL DEFAULT 0,
  `lastRunExitCode` smallint(6) NOT NULL DEFAULT 0,
  `isActive` tinyint(4) NOT NULL,
  `runNow` tinyint(4) NOT NULL DEFAULT 0,
  `configFile` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskId`, `name`, `class`, `status`, `pid`, `options`, `schedule`, `lastRunDt`, `lastRunStartDt`, `lastRunMessage`, `lastRunStatus`, `lastRunDuration`, `lastRunExitCode`, `isActive`, `runNow`, `configFile`) VALUES
(1, 'Daily Maintenance', '\\Xibo\\XTR\\MaintenanceDailyTask', 2, NULL, '[]', '0 0 * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/maintenance-daily.task'),
(2, 'Regular Maintenance', '\\Xibo\\XTR\\MaintenanceRegularTask', 2, NULL, '[]', '*/5 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/maintenance-regular.task'),
(3, 'Email Notifications', '\\Xibo\\XTR\\EmailNotificationsTask', 2, NULL, '[]', '*/5 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/email-notifications.task'),
(4, 'Stats Archive', '\\Xibo\\XTR\\StatsArchiveTask', 2, NULL, '{\"periodSizeInDays\":\"7\",\"maxPeriods\":\"4\",\"archiveStats\":\"On\"}', '0 0 * * Mon', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/stats-archiver.task'),
(5, 'Remove old Notifications', '\\Xibo\\XTR\\NotificationTidyTask', 2, NULL, '{\"maxAgeDays\":\"7\",\"systemOnly\":\"1\",\"readOnly\":\"0\"}', '15 0 * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/notification-tidy.task'),
(6, 'Fetch Remote DataSets', '\\Xibo\\XTR\\RemoteDataSetFetchTask', 2, NULL, '[]', '30 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/remote-dataset.task'),
(7, 'Drop Player Cache', '\\Xibo\\XTR\\DropPlayerCacheTask', 2, NULL, '[]', '0 0 1 1 *', 0, NULL, NULL, 0, 0, 0, 0, 0, '/tasks/drop-player-cache.task'),
(8, 'Sync Dynamic Playlists', '\\Xibo\\XTR\\DynamicPlaylistSyncTask', 2, NULL, '[]', '* * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/dynamic-playlist-sync.task'),
(9, 'Widget Sync', '\\Xibo\\XTR\\WidgetSyncTask', 2, NULL, '{}', '*/3 * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/widget-sync.task'),
(10, 'Report Schedule', '\\Xibo\\XTR\\ReportScheduleTask', 2, NULL, '[]', '*/5 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/report-schedule.task'),
(11, 'Statistics Migration', '\\Xibo\\XTR\\StatsMigrationTask', 2, NULL, '{\"killSwitch\":\"0\",\"numberOfRecords\":\"5000\",\"numberOfLoops\":\"10\",\"pauseBetweenLoops\":\"1\",\"optimiseOnComplete\":\"1\"}', '*/10 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/stats-migration.task'),
(12, 'Schedule Reminder', '\\Xibo\\XTR\\ScheduleReminderTask', 2, NULL, '[]', '*/5 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/schedule-reminder.task'),
(13, 'Image Processing', '\\Xibo\\XTR\\ImageProcessingTask', 2, NULL, '[]', '*/5 * * * * *', 0, NULL, NULL, 0, 0, 0, 1, 0, '/tasks/image-processing.task');

-- --------------------------------------------------------

--
-- Table structure for table `transition`
--

CREATE TABLE `transition` (
  `transitionId` int(11) NOT NULL,
  `transition` varchar(254) NOT NULL,
  `code` varchar(254) NOT NULL,
  `hasDuration` tinyint(4) NOT NULL,
  `hasDirection` tinyint(4) NOT NULL,
  `availableAsIn` tinyint(4) NOT NULL,
  `availableAsOut` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `transition`
--

INSERT INTO `transition` (`transitionId`, `transition`, `code`, `hasDuration`, `hasDirection`, `availableAsIn`, `availableAsOut`) VALUES
(1, 'Fade In', 'fadeIn', 1, 0, 1, 0),
(2, 'Fade Out', 'fadeOut', 1, 0, 0, 1),
(3, 'Fly', 'fly', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userTypeId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `lastAccessed` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `homePageId` tinyint(4) NOT NULL DEFAULT 1,
  `retired` tinyint(4) NOT NULL DEFAULT 0,
  `csprng` tinyint(4) NOT NULL DEFAULT 0,
  `newUserWizard` tinyint(4) NOT NULL DEFAULT 0,
  `firstName` varchar(254) DEFAULT NULL,
  `lastName` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `ref1` varchar(254) DEFAULT NULL,
  `ref2` varchar(254) DEFAULT NULL,
  `ref3` varchar(254) DEFAULT NULL,
  `ref4` varchar(254) DEFAULT NULL,
  `ref5` varchar(254) DEFAULT NULL,
  `isPasswordChangeRequired` tinyint(4) NOT NULL DEFAULT 0,
  `twoFactorTypeId` int(11) NOT NULL DEFAULT 0,
  `twoFactorSecret` text DEFAULT NULL,
  `twoFactorRecoveryCodes` text DEFAULT NULL,
  `showContentFrom` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userTypeId`, `userName`, `userPassword`, `lastAccessed`, `email`, `homePageId`, `retired`, `csprng`, `newUserWizard`, `firstName`, `lastName`, `phone`, `ref1`, `ref2`, `ref3`, `ref4`, `ref5`, `isPasswordChangeRequired`, `twoFactorTypeId`, `twoFactorSecret`, `twoFactorRecoveryCodes`, `showContentFrom`) VALUES
(1, 1, 'admin', '$2y$10$e2LbqwMT4PT1Mcjt.YFDUeVfh1KC3Y.tOop6aa79.ITmWD3aCJkTu', '2021-10-19 01:51:52', NULL, 29, 0, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useroption`
--

CREATE TABLE `useroption` (
  `userId` int(11) NOT NULL,
  `option` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `useroption`
--

INSERT INTO `useroption` (`userId`, `option`, `value`) VALUES
(1, 'dataSetColumnGrid', '{\"time\":1631428771347,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1, 'dataSetGrid', '{\"time\":1631428763146,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1, 'displayGrid', '{\"time\":1633087183216,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1, 'layoutGrid', '{\"time\":1634608473317,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),
(1, 'toolbar', '{\"libraryContent\":[],\"openedMenu\":2,\"displayTooltips\":1,\"favouriteModules\":[]}');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userTypeId` int(11) NOT NULL,
  `userType` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userTypeId`, `userType`) VALUES
(1, 'Super Admin'),
(2, 'Group Admin'),
(3, 'User'),
(4, 'DOOH');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `widgetId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `displayOrder` int(11) NOT NULL,
  `calculatedDuration` int(11) NOT NULL,
  `useDuration` tinyint(4) NOT NULL DEFAULT 1,
  `fromDt` int(11) NOT NULL,
  `toDt` int(11) NOT NULL,
  `createdDt` int(11) NOT NULL DEFAULT 0,
  `modifiedDt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`widgetId`, `playlistId`, `ownerId`, `type`, `duration`, `displayOrder`, `calculatedDuration`, `useDuration`, `fromDt`, `toDt`, `createdDt`, `modifiedDt`) VALUES
(1, 1, 1, 'image', 60, 1, 60, 1, 0, 2147483647, 1631416820, 1631416820),
(2, 2, 1, 'text', 10, 1, 10, 1, 0, 2147483647, 1631416820, 1631416820),
(3, 3, 1, 'spacer', 5, 1, 5, 1, 0, 2147483647, 1631416820, 1631416820),
(4, 3, 1, 'text', 20, 2, 20, 1, 0, 2147483647, 1631416820, 1631416820),
(5, 4, 1, 'clock', 1, 1, 5, 0, 0, 2147483647, 1631416820, 1631416820),
(25, 24, 1, 'embedded', 86400, 1, 86400, 1, 0, 2147483647, 1631416865, 1634566585),
(26, 25, 1, 'datasetview', 3, 1, 3, 1, 0, 2147483647, 1631416865, 1634566585),
(27, 26, 1, 'embedded', 86400, 1, 86400, 1, 0, 2147483647, 1631416865, 1634566585),
(28, 27, 1, 'text', 25, 1, 25, 1, 0, 2147483647, 1631416866, 1634566585),
(29, 27, 1, 'text', 30, 2, 30, 1, 0, 2147483647, 1631424826, 1634566585),
(30, 28, 1, 'embedded', 86400, 1, 86400, 1, 0, 2147483647, 1631416866, 1634566585);

-- --------------------------------------------------------

--
-- Table structure for table `widgethistory`
--

CREATE TABLE `widgethistory` (
  `id` int(11) NOT NULL,
  `layoutHistoryId` int(11) NOT NULL,
  `widgetId` int(11) NOT NULL,
  `mediaId` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `widgethistory`
--

INSERT INTO `widgethistory` (`id`, `layoutHistoryId`, `widgetId`, `mediaId`, `type`, `name`) VALUES
(1, 2, 10, NULL, 'embedded', 'Youtube Video Kominfo Kab. Malang'),
(2, 2, 9, NULL, 'text', NULL),
(3, 2, 8, NULL, 'datasetview', NULL),
(4, 2, 7, NULL, 'embedded', NULL),
(5, 2, 6, NULL, 'embedded', NULL),
(6, 3, 15, NULL, 'embedded', 'Youtube Video Kominfo Kab. Malang'),
(7, 3, 14, NULL, 'text', NULL),
(8, 3, 13, NULL, 'datasetview', NULL),
(9, 3, 12, NULL, 'embedded', NULL),
(10, 3, 11, NULL, 'embedded', NULL),
(11, 5, 20, NULL, 'embedded', 'Youtube Video Kominfo Kab. Malang'),
(12, 5, 19, NULL, 'text', NULL),
(13, 5, 21, NULL, 'text', NULL),
(14, 5, 17, NULL, 'embedded', NULL),
(15, 5, 18, NULL, 'datasetview', NULL),
(16, 5, 16, NULL, 'embedded', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `widgetoption`
--

CREATE TABLE `widgetoption` (
  `widgetId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `option` varchar(254) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `widgetoption`
--

INSERT INTO `widgetoption` (`widgetId`, `type`, `option`, `value`) VALUES
(1, 'attrib', 'align', 'center'),
(1, 'attrib', 'enableStat', 'Inherit'),
(1, 'attrib', 'name', 'Company Logo'),
(1, 'attrib', 'scaleType', 'center'),
(1, 'attrib', 'uri', '1.png'),
(1, 'attrib', 'valign', 'middle'),
(2, 'attrib', 'effect', 'none'),
(2, 'attrib', 'enableStat', 'Inherit'),
(2, 'attrib', 'lowerLimit', '0'),
(2, 'attrib', 'name', 'Header Text'),
(2, 'attrib', 'ta_text_advanced', '0'),
(2, 'attrib', 'upperLimit', '0'),
(2, 'attrib', 'xmds', '1'),
(2, 'cdata', 'text', '<p style=\"text-align: center;\"><span style=\"color:#FFFFFF;\"><span style=\"font-size: 48px;\">powered by...</span></span></p>\n\n<p style=\"text-align: center;\"><strong><span style=\"font-size:96px;\"><span style=\"color:#FFFFFF;\">Xibo Digital Signage</span></span></strong></p>\n'),
(3, 'attrib', 'enableStat', 'Inherit'),
(3, 'attrib', 'lowerLimit', '0'),
(3, 'attrib', 'upperLimit', '0'),
(4, 'attrib', 'effect', 'fade'),
(4, 'attrib', 'enableStat', 'Inherit'),
(4, 'attrib', 'lowerLimit', '0'),
(4, 'attrib', 'name', 'Explainer Text'),
(4, 'attrib', 'speed', '6000'),
(4, 'attrib', 'ta_text_advanced', '0'),
(4, 'attrib', 'upperLimit', '0'),
(4, 'attrib', 'xmds', '1'),
(4, 'cdata', 'text', '<p style=\"text-align: center;\"><span style=\"color:#FFFFFF;\"><span style=\"font-size: 48px;\">This is the Default Layout to assign to displays</span></span></p>\n\n<p style=\"text-align: center;\"><span style=\"color:#FFFFFF;\"><span style=\"font-size: 48px;\">It will be shown when nothing else is scheduled</span></span></p>\n\n<p style=\"text-align: center;\"><span style=\"font-size: 48px;\"><span style=\"color:#FFFFFF;\">Edit this Default Layout to personalise or create your own to assign to </span><span style=\"color: #fcfce5;\">your displays!</span></span></p>\n\n<p>&nbsp;</p>\n'),
(5, 'attrib', 'clockFace', 'TwentyFourHourClock'),
(5, 'attrib', 'clockTypeId', '2'),
(5, 'attrib', 'enableStat', 'Inherit'),
(5, 'attrib', 'lowerLimit', '0'),
(5, 'attrib', 'offset', '0'),
(5, 'attrib', 'showSeconds', '1'),
(5, 'attrib', 'ta_text_advanced', '0'),
(5, 'attrib', 'theme', '1'),
(5, 'attrib', 'upperLimit', '0'),
(5, 'cdata', 'format', '<p style=\"text-align: justify;\"><span style=\"color:#FFFFFF;\"><span style=\"font-size: 48px;\">[HH:mm]</span></span></p>\n'),
(25, 'attrib', 'embedHtml_advanced', '0'),
(25, 'attrib', 'enableStat', 'Inherit'),
(25, 'attrib', 'lowerLimit', '0'),
(25, 'attrib', 'name', NULL),
(25, 'attrib', 'scaleContent', '0'),
(25, 'attrib', 'transparency', '0'),
(25, 'attrib', 'updateInterval', '525600'),
(25, 'attrib', 'upperLimit', '0'),
(25, 'cdata', 'embedHtml', '<div style=\"font-size: 26px; color:white;\" id=\"date\"></div>\r\n<div style=\"font-size: 26px; color:white;\" id=\"time\"></div>\r\n\r\n<script>\r\nsetInterval(function() {\r\nn =  new Date();\r\nd = (n.getDate()<10 ? \'0\' : \'\') + (n.getDate());\r\nm = ((n.getMonth() + 1)<10 ? \'0\' : \'\') + (n.getMonth() + 1);\r\ny = n.getFullYear();\r\nh = (n.getHours()<10 ? \'0\' : \'\') + (n.getHours());\r\nmin = (n.getMinutes()<10 ? \'0\' : \'\') + (n.getMinutes())\r\nsec = (n.getSeconds()<10 ? \'0\' : \'\') + (n.getSeconds())\r\ndocument.getElementById(\"date\").innerHTML = d + \"/\" + m + \"/\" + y;\r\ndocument.getElementById(\"time\").innerHTML = h + \":\" + min + \":\" + sec;\r\n\r\n}, 100);\r\n</script>'),
(25, 'cdata', 'embedScript', '<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n<link href=\"https://fonts.googleapis.com/css2?family=Inter&display=swap\" rel=\"stylesheet\">'),
(25, 'cdata', 'embedStyle', '@import url(\'https://fonts.googleapis.com/css2 family=Inter&display=swap\');\r\n\r\n#date, #time {\r\nfont-family: \"Inter\", sans-serif;\r\ntext-align: center;\r\n}'),
(26, 'attrib', 'columns', '4,2,3'),
(26, 'attrib', 'dataSetId', '1'),
(26, 'attrib', 'durationIsPerPage', '1'),
(26, 'attrib', 'enableStat', 'Inherit'),
(26, 'attrib', 'filterClauses', '[]'),
(26, 'attrib', 'lowerLimit', '0'),
(26, 'attrib', 'noDataMessage_advanced', '0'),
(26, 'attrib', 'orderClauses', '[{\"orderClause\":\"Tanggal\",\"orderClauseDirection\":\"ASC\"}]'),
(26, 'attrib', 'overrideTemplate', '1'),
(26, 'attrib', 'rowsPerPage', '10'),
(26, 'attrib', 'showHeadings', '1'),
(26, 'attrib', 'templateId', 'empty'),
(26, 'attrib', 'updateInterval', '5'),
(26, 'attrib', 'upperLimit', '0'),
(26, 'attrib', 'useFilteringClause', '0'),
(26, 'attrib', 'useOrderingClause', '0'),
(26, 'cdata', 'javaScript', 'WebFontConfig = {\n  google: {\n    families: [\'Inter:400\']\n  }\n};\n\n(function(d) {\n  var wf = d.createElement(\'script\'), s = d.scripts[0];\n  wf.src = \'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\';\n  wf.async = true;\n  s.parentNode.insertBefore(wf, s);\n})(document);'),
(26, 'cdata', 'noDataMessage', '<span style=\"font-size: 48px; color:#000000;\">No Data returned from the source</span>'),
(26, 'cdata', 'styleSheet', '@import url(\'https://fonts.googleapis.com/css2 family=Inter&display=swap\');\n\ntable.DataSetTable {\n  font-family: \"Inter\", sans-serif;  \n  width:100%;\n  border-collapse:collapse;\n}\n\ntr.HeaderRow {\n  font-size:40pt;\n  text-align:center;\n  padding: 10px auto;\n  background-color:#009051;\n  color:#ffffff;\n}\n\ntr#row_1 { \n  color:#000000;\n  background-color:#EAF2D3;\n}\n\ntd#col_1 {\n  color:#000000;\n  background-color:#EAF2D3;\n}\n\ntd.DataSetColumn {\n  color: black;\n  font-size: 24pt;\n  background-color:#EAF2D3;\n  border:1px solid #98bf21\n}\n\ntr.DataSetRow {\n  text-align: center;\n  color: #000000;\n  background-color: #EAF2D3;\n  border: 1px solid #98bf21\n  padding-top: 5px;\n  padding-bottom: 4px;\n}\n\nth.DataSetColumnHeaderCell {\n  font-size:1em;\n  border:2px solid #ffdd21;\n  padding:3px 7px 2px 7px;\n}\n\nspan#1_1 {\n\n}\n\nspan.DataSetColumnSpan {\n\n}'),
(27, 'attrib', 'embedHtml_advanced', '0'),
(27, 'attrib', 'enableStat', 'Inherit'),
(27, 'attrib', 'lowerLimit', '0'),
(27, 'attrib', 'name', NULL),
(27, 'attrib', 'scaleContent', '0'),
(27, 'attrib', 'transparency', '0'),
(27, 'attrib', 'updateInterval', '525600'),
(27, 'attrib', 'upperLimit', '0'),
(27, 'cdata', 'embedHtml', '<div class=\"judul\">\r\n  <h1>Jadwal Kegiatan</h1>\r\n</div>'),
(27, 'cdata', 'embedScript', NULL),
(27, 'cdata', 'embedStyle', '@import url(\'https://fonts.googleapis.com/css2 family=Inter&display=swap\');\r\n\r\n.judul {\r\n  font-family: \'Inter\', sans-serif;\r\n  display: flex;\r\n  justify-content: center;\r\n  align-items: center;\r\n  height: 90px;\r\n}\r\n\r\nh1{\r\n color: black;\r\n}'),
(28, 'attrib', 'backgroundColor', NULL),
(28, 'attrib', 'effect', 'marqueeLeft'),
(28, 'attrib', 'enableStat', 'Inherit'),
(28, 'attrib', 'lowerLimit', '0'),
(28, 'attrib', 'marqueeInlineSelector', NULL),
(28, 'attrib', 'name', NULL),
(28, 'attrib', 'speed', '4'),
(28, 'attrib', 'ta_text_advanced', '0'),
(28, 'attrib', 'updateInterval', '525600'),
(28, 'attrib', 'upperLimit', '0'),
(28, 'attrib', 'xmds', '1'),
(28, 'cdata', 'javaScript', ''),
(28, 'cdata', 'text', '<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n<link href=\"https://fonts.googleapis.com/css2?family=Inter&display=swap\" rel=\"stylesheet\">\r\n\r\n<style>\r\nspan {\r\nfont-size: 48pt; \r\ncolor:white;\r\nfont-family: \"Inter\", sans-serif;\r\n}\r\n</style>\r\n\r\n<span>Selamat Datang di Kominfo Kab. Malang</span>'),
(29, 'attrib', 'backgroundColor', NULL),
(29, 'attrib', 'effect', 'marqueeLeft'),
(29, 'attrib', 'enableStat', 'Inherit'),
(29, 'attrib', 'lowerLimit', '0'),
(29, 'attrib', 'marqueeInlineSelector', NULL),
(29, 'attrib', 'name', NULL),
(29, 'attrib', 'speed', '4'),
(29, 'attrib', 'ta_text_advanced', '0'),
(29, 'attrib', 'upperLimit', '0'),
(29, 'attrib', 'xmds', '1'),
(29, 'cdata', 'javaScript', ''),
(29, 'cdata', 'text', '<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n<link href=\"https://fonts.googleapis.com/css2?family=Inter&display=swap\" rel=\"stylesheet\">\r\n\r\n<style>\r\nspan {\r\nfont-size: 48pt; \r\ncolor:white;\r\nfont-family: \"Inter\", sans-serif;\r\n}\r\n</style>\r\n\r\n<span>Jangan Lupa Membaca Bismillah untuk Memulai Aktivitas</span>'),
(30, 'attrib', 'embedHtml_advanced', '0'),
(30, 'attrib', 'enableStat', 'Inherit'),
(30, 'attrib', 'lowerLimit', '0'),
(30, 'attrib', 'name', 'Youtube Video Kominfo Kab. Malang'),
(30, 'attrib', 'scaleContent', '1'),
(30, 'attrib', 'transparency', '0'),
(30, 'attrib', 'updateInterval', '525600'),
(30, 'attrib', 'upperLimit', '0'),
(30, 'cdata', 'embedHtml', '<div id=\"player\"></div>\n\n<script>\n    var tag = document.createElement(\'script\');\n    tag.src = \"https://www.youtube.com/iframe_api\";\n    var firstScriptTag = document.getElementsByTagName(\'script\')[0];\n    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);\n    var player;\n\n    function onYouTubePlayerAPIReady() {\n        player = new YT.Player(\'player\', {\n            height: \'640\',\n            width: \'905\',\n            events: {\n                \'onReady\': onPlayerReady,\n            }\n        });\n    }\n\n    function onPlayerReady(event) {\n        event.target.loadPlaylist([\'fxkKjJ4d3sQ\', \'68NgIjuL48U\', \'A_7OCfPadiU\']);\n        event.target.setLoop(true);\n    }\n</script>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`logId`);

--
-- Indexes for table `bandwidth`
--
ALTER TABLE `bandwidth`
  ADD PRIMARY KEY (`displayId`,`type`,`month`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `bandwidthtype`
--
ALTER TABLE `bandwidthtype`
  ADD PRIMARY KEY (`bandwidthTypeId`);

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`blacklistId`),
  ADD KEY `mediaId` (`mediaId`),
  ADD KEY `displayId` (`displayId`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaignId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`commandId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`dataSetId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `datasetcolumn`
--
ALTER TABLE `datasetcolumn`
  ADD PRIMARY KEY (`dataSetColumnId`),
  ADD KEY `dataSetId` (`dataSetId`),
  ADD KEY `dataTypeId` (`dataTypeId`),
  ADD KEY `dataSetColumnTypeId` (`dataSetColumnTypeId`);

--
-- Indexes for table `datasetcolumntype`
--
ALTER TABLE `datasetcolumntype`
  ADD PRIMARY KEY (`dataSetColumnTypeId`);

--
-- Indexes for table `datasetrss`
--
ALTER TABLE `datasetrss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dataSetId` (`dataSetId`);

--
-- Indexes for table `dataset_1`
--
ALTER TABLE `dataset_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datatype`
--
ALTER TABLE `datatype`
  ADD PRIMARY KEY (`dataTypeId`);

--
-- Indexes for table `daypart`
--
ALTER TABLE `daypart`
  ADD PRIMARY KEY (`dayPartId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`displayId`),
  ADD UNIQUE KEY `license` (`license`),
  ADD KEY `defaultLayoutId` (`defaultLayoutId`),
  ADD KEY `displayProfileId` (`displayProfileId`);

--
-- Indexes for table `displayevent`
--
ALTER TABLE `displayevent`
  ADD PRIMARY KEY (`displayEventId`),
  ADD KEY `eventDate` (`eventDate`),
  ADD KEY `displayId` (`displayId`,`end`);

--
-- Indexes for table `displaygroup`
--
ALTER TABLE `displaygroup`
  ADD PRIMARY KEY (`displayGroupId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `displayprofile`
--
ALTER TABLE `displayprofile`
  ADD PRIMARY KEY (`displayProfileId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`groupId`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`helpId`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`layoutId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `backgroundImageId` (`backgroundImageId`),
  ADD KEY `publishedStatusId` (`publishedStatusId`);

--
-- Indexes for table `layouthistory`
--
ALTER TABLE `layouthistory`
  ADD PRIMARY KEY (`layoutHistoryId`),
  ADD KEY `campaignId` (`campaignId`);

--
-- Indexes for table `lkcampaignlayout`
--
ALTER TABLE `lkcampaignlayout`
  ADD PRIMARY KEY (`lkCampaignLayoutId`),
  ADD UNIQUE KEY `campaignId` (`campaignId`,`layoutId`,`displayOrder`),
  ADD KEY `layoutId` (`layoutId`);

--
-- Indexes for table `lkcommanddisplayprofile`
--
ALTER TABLE `lkcommanddisplayprofile`
  ADD PRIMARY KEY (`commandId`,`displayProfileId`),
  ADD KEY `displayProfileId` (`displayProfileId`);

--
-- Indexes for table `lkdgdg`
--
ALTER TABLE `lkdgdg`
  ADD KEY `parentId` (`parentId`,`childId`,`depth`),
  ADD KEY `childId` (`childId`,`parentId`,`depth`);

--
-- Indexes for table `lkdisplaydg`
--
ALTER TABLE `lkdisplaydg`
  ADD PRIMARY KEY (`LkDisplayDGID`),
  ADD UNIQUE KEY `displayGroupId` (`displayGroupId`,`displayId`),
  ADD KEY `displayId` (`displayId`);

--
-- Indexes for table `lklayoutdisplaygroup`
--
ALTER TABLE `lklayoutdisplaygroup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `displayGroupId` (`displayGroupId`,`layoutId`),
  ADD KEY `layoutId` (`layoutId`);

--
-- Indexes for table `lkmediadisplaygroup`
--
ALTER TABLE `lkmediadisplaygroup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `displayGroupId` (`displayGroupId`,`mediaId`),
  ADD KEY `mediaId` (`mediaId`);

--
-- Indexes for table `lknotificationdg`
--
ALTER TABLE `lknotificationdg`
  ADD PRIMARY KEY (`lkNotificationDgId`),
  ADD UNIQUE KEY `notificationId` (`notificationId`,`displayGroupId`);

--
-- Indexes for table `lknotificationgroup`
--
ALTER TABLE `lknotificationgroup`
  ADD PRIMARY KEY (`lkNotificationGroupId`),
  ADD UNIQUE KEY `notificationId` (`notificationId`,`groupId`),
  ADD KEY `groupId` (`groupId`);

--
-- Indexes for table `lknotificationuser`
--
ALTER TABLE `lknotificationuser`
  ADD PRIMARY KEY (`lkNotificationUserId`),
  ADD UNIQUE KEY `notificationId` (`notificationId`,`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `lkplaylistplaylist`
--
ALTER TABLE `lkplaylistplaylist`
  ADD PRIMARY KEY (`parentId`,`childId`,`depth`),
  ADD UNIQUE KEY `childId` (`childId`,`parentId`,`depth`);

--
-- Indexes for table `lkscheduledisplaygroup`
--
ALTER TABLE `lkscheduledisplaygroup`
  ADD PRIMARY KEY (`eventId`,`displayGroupId`),
  ADD KEY `displayGroupId` (`displayGroupId`);

--
-- Indexes for table `lktagcampaign`
--
ALTER TABLE `lktagcampaign`
  ADD PRIMARY KEY (`lkTagCampaignId`),
  ADD UNIQUE KEY `tagId` (`tagId`,`campaignId`),
  ADD KEY `campaignId` (`campaignId`);

--
-- Indexes for table `lktagdisplaygroup`
--
ALTER TABLE `lktagdisplaygroup`
  ADD PRIMARY KEY (`lkTagDisplayGroupId`),
  ADD UNIQUE KEY `tagId` (`tagId`,`displayGroupId`),
  ADD KEY `displayGroupId` (`displayGroupId`);

--
-- Indexes for table `lktaglayout`
--
ALTER TABLE `lktaglayout`
  ADD PRIMARY KEY (`lkTagLayoutId`),
  ADD UNIQUE KEY `tagId` (`tagId`,`layoutId`),
  ADD KEY `layoutId` (`layoutId`);

--
-- Indexes for table `lktagmedia`
--
ALTER TABLE `lktagmedia`
  ADD PRIMARY KEY (`lkTagMediaId`),
  ADD UNIQUE KEY `tagId` (`tagId`,`mediaId`),
  ADD KEY `mediaId` (`mediaId`);

--
-- Indexes for table `lktagplaylist`
--
ALTER TABLE `lktagplaylist`
  ADD PRIMARY KEY (`lkTagPlaylistId`),
  ADD UNIQUE KEY `tagId` (`tagId`,`playlistId`),
  ADD KEY `lktagplaylist_ibfk_2` (`playlistId`);

--
-- Indexes for table `lkusergroup`
--
ALTER TABLE `lkusergroup`
  ADD PRIMARY KEY (`lkUserGroupID`),
  ADD UNIQUE KEY `groupId` (`groupId`,`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `lkwidgetaudio`
--
ALTER TABLE `lkwidgetaudio`
  ADD PRIMARY KEY (`widgetId`,`mediaId`),
  ADD KEY `mediaId` (`mediaId`);

--
-- Indexes for table `lkwidgetmedia`
--
ALTER TABLE `lkwidgetmedia`
  ADD PRIMARY KEY (`widgetId`,`mediaId`),
  ADD KEY `mediaId` (`mediaId`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logId`),
  ADD KEY `logDate` (`logDate`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mediaId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `editedMediaId` (`editedMediaId`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`moduleId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`access_token`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `oauth_access_token_scopes`
--
ALTER TABLE `oauth_access_token_scopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `scope` (`scope`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`auth_code`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `oauth_auth_code_scopes`
--
ALTER TABLE `oauth_auth_code_scopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_code` (`auth_code`),
  ADD KEY `scope` (`scope`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `oauth_client_redirect_uris`
--
ALTER TABLE `oauth_client_redirect_uris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_client_scopes`
--
ALTER TABLE `oauth_client_scopes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientId` (`clientId`,`scopeId`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`refresh_token`),
  ADD KEY `access_token` (`access_token`);

--
-- Indexes for table `oauth_scopes`
--
ALTER TABLE `oauth_scopes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_scope_routes`
--
ALTER TABLE `oauth_scope_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_sessions`
--
ALTER TABLE `oauth_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `oauth_session_scopes`
--
ALTER TABLE `oauth_session_scopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `scope` (`scope`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageId`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permissionId`),
  ADD KEY `permission_ibfk_1` (`groupId`),
  ADD KEY `permission_ibfk_2` (`entityId`),
  ADD KEY `permission_objectId_index` (`objectId`);

--
-- Indexes for table `permissionentity`
--
ALTER TABLE `permissionentity`
  ADD PRIMARY KEY (`entityId`),
  ADD UNIQUE KEY `entity` (`entity`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `player_software`
--
ALTER TABLE `player_software`
  ADD PRIMARY KEY (`versionId`),
  ADD KEY `mediaId` (`mediaId`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlistId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regionId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `regionoption`
--
ALTER TABLE `regionoption`
  ADD PRIMARY KEY (`regionId`,`option`);

--
-- Indexes for table `reportschedule`
--
ALTER TABLE `reportschedule`
  ADD PRIMARY KEY (`reportScheduleId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `requiredfile`
--
ALTER TABLE `requiredfile`
  ADD PRIMARY KEY (`rfId`),
  ADD KEY `displayId` (`displayId`,`type`);

--
-- Indexes for table `resolution`
--
ALTER TABLE `resolution`
  ADD PRIMARY KEY (`resolutionId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `saved_report`
--
ALTER TABLE `saved_report`
  ADD PRIMARY KEY (`savedReportId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `mediaId` (`mediaId`),
  ADD KEY `reportScheduleId` (`reportScheduleId`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `campaignId` (`campaignId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `scheduleexclusions`
--
ALTER TABLE `scheduleexclusions`
  ADD PRIMARY KEY (`scheduleExclusionId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `schedulereminder`
--
ALTER TABLE `schedulereminder`
  ADD PRIMARY KEY (`scheduleReminderId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`statId`),
  ADD KEY `statDate` (`statDate`),
  ADD KEY `displayId` (`displayId`,`end`,`type`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat_archive`
--
ALTER TABLE `stat_archive`
  ADD PRIMARY KEY (`statId`),
  ADD KEY `statDate` (`statDate`),
  ADD KEY `displayId` (`displayId`,`end`,`type`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tagId`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskId`);

--
-- Indexes for table `transition`
--
ALTER TABLE `transition`
  ADD PRIMARY KEY (`transitionId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userTypeId` (`userTypeId`);

--
-- Indexes for table `useroption`
--
ALTER TABLE `useroption`
  ADD PRIMARY KEY (`userId`,`option`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeId`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`widgetId`),
  ADD KEY `playlistId` (`playlistId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `widgethistory`
--
ALTER TABLE `widgethistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layoutHistoryId` (`layoutHistoryId`);

--
-- Indexes for table `widgetoption`
--
ALTER TABLE `widgetoption`
  ADD PRIMARY KEY (`widgetId`,`type`,`option`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditlog`
--
ALTER TABLE `auditlog`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `bandwidthtype`
--
ALTER TABLE `bandwidthtype`
  MODIFY `bandwidthTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `blacklistId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaignId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `commandId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `dataSetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datasetcolumn`
--
ALTER TABLE `datasetcolumn`
  MODIFY `dataSetColumnId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datasetcolumntype`
--
ALTER TABLE `datasetcolumntype`
  MODIFY `dataSetColumnTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `datasetrss`
--
ALTER TABLE `datasetrss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dataset_1`
--
ALTER TABLE `dataset_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `datatype`
--
ALTER TABLE `datatype`
  MODIFY `dataTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daypart`
--
ALTER TABLE `daypart`
  MODIFY `dayPartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `displayId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `displayevent`
--
ALTER TABLE `displayevent`
  MODIFY `displayEventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `displaygroup`
--
ALTER TABLE `displaygroup`
  MODIFY `displayGroupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `displayprofile`
--
ALTER TABLE `displayprofile`
  MODIFY `displayProfileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `helpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
  MODIFY `layoutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layouthistory`
--
ALTER TABLE `layouthistory`
  MODIFY `layoutHistoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lkcampaignlayout`
--
ALTER TABLE `lkcampaignlayout`
  MODIFY `lkCampaignLayoutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lkdisplaydg`
--
ALTER TABLE `lkdisplaydg`
  MODIFY `LkDisplayDGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lklayoutdisplaygroup`
--
ALTER TABLE `lklayoutdisplaygroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lkmediadisplaygroup`
--
ALTER TABLE `lkmediadisplaygroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lknotificationdg`
--
ALTER TABLE `lknotificationdg`
  MODIFY `lkNotificationDgId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lknotificationgroup`
--
ALTER TABLE `lknotificationgroup`
  MODIFY `lkNotificationGroupId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lknotificationuser`
--
ALTER TABLE `lknotificationuser`
  MODIFY `lkNotificationUserId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lktagcampaign`
--
ALTER TABLE `lktagcampaign`
  MODIFY `lkTagCampaignId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lktagdisplaygroup`
--
ALTER TABLE `lktagdisplaygroup`
  MODIFY `lkTagDisplayGroupId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lktaglayout`
--
ALTER TABLE `lktaglayout`
  MODIFY `lkTagLayoutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lktagmedia`
--
ALTER TABLE `lktagmedia`
  MODIFY `lkTagMediaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lktagplaylist`
--
ALTER TABLE `lktagplaylist`
  MODIFY `lkTagPlaylistId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lkusergroup`
--
ALTER TABLE `lkusergroup`
  MODIFY `lkUserGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mediaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `moduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_access_token_scopes`
--
ALTER TABLE `oauth_access_token_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_auth_code_scopes`
--
ALTER TABLE `oauth_auth_code_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_client_redirect_uris`
--
ALTER TABLE `oauth_client_redirect_uris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_client_scopes`
--
ALTER TABLE `oauth_client_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_scope_routes`
--
ALTER TABLE `oauth_scope_routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_sessions`
--
ALTER TABLE `oauth_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_session_scopes`
--
ALTER TABLE `oauth_session_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissionentity`
--
ALTER TABLE `permissionentity`
  MODIFY `entityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `player_software`
--
ALTER TABLE `player_software`
  MODIFY `versionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `regionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reportschedule`
--
ALTER TABLE `reportschedule`
  MODIFY `reportScheduleId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requiredfile`
--
ALTER TABLE `requiredfile`
  MODIFY `rfId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `resolution`
--
ALTER TABLE `resolution`
  MODIFY `resolutionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saved_report`
--
ALTER TABLE `saved_report`
  MODIFY `savedReportId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scheduleexclusions`
--
ALTER TABLE `scheduleexclusions`
  MODIFY `scheduleExclusionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedulereminder`
--
ALTER TABLE `schedulereminder`
  MODIFY `scheduleReminderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `settingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `statId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stat_archive`
--
ALTER TABLE `stat_archive`
  MODIFY `statId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transition`
--
ALTER TABLE `transition`
  MODIFY `transitionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `widgetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `widgethistory`
--
ALTER TABLE `widgethistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bandwidth`
--
ALTER TABLE `bandwidth`
  ADD CONSTRAINT `bandwidth_ibfk_1` FOREIGN KEY (`type`) REFERENCES `bandwidthtype` (`bandwidthTypeId`);

--
-- Constraints for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD CONSTRAINT `blacklist_ibfk_1` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`),
  ADD CONSTRAINT `blacklist_ibfk_2` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`);

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `dataset`
--
ALTER TABLE `dataset`
  ADD CONSTRAINT `dataset_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `datasetcolumn`
--
ALTER TABLE `datasetcolumn`
  ADD CONSTRAINT `datasetcolumn_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`),
  ADD CONSTRAINT `datasetcolumn_ibfk_2` FOREIGN KEY (`dataTypeId`) REFERENCES `datatype` (`dataTypeId`),
  ADD CONSTRAINT `datasetcolumn_ibfk_3` FOREIGN KEY (`dataSetColumnTypeId`) REFERENCES `datasetcolumntype` (`dataSetColumnTypeId`);

--
-- Constraints for table `datasetrss`
--
ALTER TABLE `datasetrss`
  ADD CONSTRAINT `datasetrss_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`);

--
-- Constraints for table `daypart`
--
ALTER TABLE `daypart`
  ADD CONSTRAINT `daypart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `display`
--
ALTER TABLE `display`
  ADD CONSTRAINT `display_ibfk_1` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`);

--
-- Constraints for table `displaygroup`
--
ALTER TABLE `displaygroup`
  ADD CONSTRAINT `displaygroup_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `displayprofile`
--
ALTER TABLE `displayprofile`
  ADD CONSTRAINT `displayprofile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `layout`
--
ALTER TABLE `layout`
  ADD CONSTRAINT `layout_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  ADD CONSTRAINT `layout_ibfk_2` FOREIGN KEY (`backgroundImageId`) REFERENCES `media` (`mediaId`),
  ADD CONSTRAINT `layout_ibfk_3` FOREIGN KEY (`publishedStatusId`) REFERENCES `status` (`id`);

--
-- Constraints for table `layouthistory`
--
ALTER TABLE `layouthistory`
  ADD CONSTRAINT `layouthistory_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`);

--
-- Constraints for table `lkcampaignlayout`
--
ALTER TABLE `lkcampaignlayout`
  ADD CONSTRAINT `lkcampaignlayout_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`),
  ADD CONSTRAINT `lkcampaignlayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`);

--
-- Constraints for table `lkcommanddisplayprofile`
--
ALTER TABLE `lkcommanddisplayprofile`
  ADD CONSTRAINT `lkcommanddisplayprofile_ibfk_1` FOREIGN KEY (`commandId`) REFERENCES `command` (`commandId`),
  ADD CONSTRAINT `lkcommanddisplayprofile_ibfk_2` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`);

--
-- Constraints for table `lkdisplaydg`
--
ALTER TABLE `lkdisplaydg`
  ADD CONSTRAINT `lkdisplaydg_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  ADD CONSTRAINT `lkdisplaydg_ibfk_2` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`);

--
-- Constraints for table `lklayoutdisplaygroup`
--
ALTER TABLE `lklayoutdisplaygroup`
  ADD CONSTRAINT `lklayoutdisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  ADD CONSTRAINT `lklayoutdisplaygroup_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`);

--
-- Constraints for table `lkmediadisplaygroup`
--
ALTER TABLE `lkmediadisplaygroup`
  ADD CONSTRAINT `lkmediadisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  ADD CONSTRAINT `lkmediadisplaygroup_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`);

--
-- Constraints for table `lknotificationdg`
--
ALTER TABLE `lknotificationdg`
  ADD CONSTRAINT `lknotificationdg_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`);

--
-- Constraints for table `lknotificationgroup`
--
ALTER TABLE `lknotificationgroup`
  ADD CONSTRAINT `lknotificationgroup_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  ADD CONSTRAINT `lknotificationgroup_ibfk_2` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`);

--
-- Constraints for table `lknotificationuser`
--
ALTER TABLE `lknotificationuser`
  ADD CONSTRAINT `lknotificationuser_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  ADD CONSTRAINT `lknotificationuser_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `lkscheduledisplaygroup`
--
ALTER TABLE `lkscheduledisplaygroup`
  ADD CONSTRAINT `lkscheduledisplaygroup_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`),
  ADD CONSTRAINT `lkscheduledisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`);

--
-- Constraints for table `lktagcampaign`
--
ALTER TABLE `lktagcampaign`
  ADD CONSTRAINT `lktagcampaign_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  ADD CONSTRAINT `lktagcampaign_ibfk_2` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`);

--
-- Constraints for table `lktagdisplaygroup`
--
ALTER TABLE `lktagdisplaygroup`
  ADD CONSTRAINT `lktagdisplaygroup_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  ADD CONSTRAINT `lktagdisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`);

--
-- Constraints for table `lktaglayout`
--
ALTER TABLE `lktaglayout`
  ADD CONSTRAINT `lktaglayout_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  ADD CONSTRAINT `lktaglayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`);

--
-- Constraints for table `lktagmedia`
--
ALTER TABLE `lktagmedia`
  ADD CONSTRAINT `lktagmedia_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  ADD CONSTRAINT `lktagmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`);

--
-- Constraints for table `lktagplaylist`
--
ALTER TABLE `lktagplaylist`
  ADD CONSTRAINT `lktagplaylist_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  ADD CONSTRAINT `lktagplaylist_ibfk_2` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`);

--
-- Constraints for table `lkusergroup`
--
ALTER TABLE `lkusergroup`
  ADD CONSTRAINT `lkusergroup_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  ADD CONSTRAINT `lkusergroup_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `lkwidgetaudio`
--
ALTER TABLE `lkwidgetaudio`
  ADD CONSTRAINT `lkwidgetaudio_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  ADD CONSTRAINT `lkwidgetaudio_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`);

--
-- Constraints for table `lkwidgetmedia`
--
ALTER TABLE `lkwidgetmedia`
  ADD CONSTRAINT `lkwidgetmedia_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  ADD CONSTRAINT `lkwidgetmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD CONSTRAINT `oauth_access_tokens_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `oauth_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_access_token_scopes`
--
ALTER TABLE `oauth_access_token_scopes`
  ADD CONSTRAINT `oauth_access_token_scopes_ibfk_1` FOREIGN KEY (`access_token`) REFERENCES `oauth_access_tokens` (`access_token`) ON DELETE CASCADE,
  ADD CONSTRAINT `oauth_access_token_scopes_ibfk_2` FOREIGN KEY (`scope`) REFERENCES `oauth_scopes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD CONSTRAINT `oauth_auth_codes_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `oauth_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_auth_code_scopes`
--
ALTER TABLE `oauth_auth_code_scopes`
  ADD CONSTRAINT `oauth_auth_code_scopes_ibfk_1` FOREIGN KEY (`auth_code`) REFERENCES `oauth_auth_codes` (`auth_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `oauth_auth_code_scopes_ibfk_2` FOREIGN KEY (`scope`) REFERENCES `oauth_scopes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD CONSTRAINT `oauth_clients_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD CONSTRAINT `oauth_refresh_tokens_ibfk_1` FOREIGN KEY (`access_token`) REFERENCES `oauth_access_tokens` (`access_token`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_sessions`
--
ALTER TABLE `oauth_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `oauth_clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oauth_session_scopes`
--
ALTER TABLE `oauth_session_scopes`
  ADD CONSTRAINT `oauth_session_scopes_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `oauth_sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `oauth_session_scopes_ibfk_2` FOREIGN KEY (`scope`) REFERENCES `oauth_scopes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  ADD CONSTRAINT `permission_ibfk_2` FOREIGN KEY (`entityId`) REFERENCES `permissionentity` (`entityId`);

--
-- Constraints for table `player_software`
--
ALTER TABLE `player_software`
  ADD CONSTRAINT `player_software_ibfk_1` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `reportschedule`
--
ALTER TABLE `reportschedule`
  ADD CONSTRAINT `reportschedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `requiredfile`
--
ALTER TABLE `requiredfile`
  ADD CONSTRAINT `requiredfile_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`);

--
-- Constraints for table `resolution`
--
ALTER TABLE `resolution`
  ADD CONSTRAINT `resolution_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `saved_report`
--
ALTER TABLE `saved_report`
  ADD CONSTRAINT `saved_report_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  ADD CONSTRAINT `saved_report_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`),
  ADD CONSTRAINT `saved_report_ibfk_3` FOREIGN KEY (`reportScheduleId`) REFERENCES `reportschedule` (`reportScheduleId`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `scheduleexclusions`
--
ALTER TABLE `scheduleexclusions`
  ADD CONSTRAINT `scheduleexclusions_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`);

--
-- Constraints for table `schedulereminder`
--
ALTER TABLE `schedulereminder`
  ADD CONSTRAINT `schedulereminder_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeId`) REFERENCES `usertype` (`userTypeId`);

--
-- Constraints for table `widget`
--
ALTER TABLE `widget`
  ADD CONSTRAINT `widget_ibfk_1` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`),
  ADD CONSTRAINT `widget_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `widgethistory`
--
ALTER TABLE `widgethistory`
  ADD CONSTRAINT `widgethistory_ibfk_1` FOREIGN KEY (`layoutHistoryId`) REFERENCES `layouthistory` (`layoutHistoryId`);

--
-- Constraints for table `widgetoption`
--
ALTER TABLE `widgetoption`
  ADD CONSTRAINT `widgetoption_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
