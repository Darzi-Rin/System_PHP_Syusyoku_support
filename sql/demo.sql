-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-17 14:57:26
-- サーバのバージョン： 10.4.13-MariaDB
-- PHP のバージョン: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `syusyoku_support`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `date` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `category` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `demo`
--

INSERT INTO `demo` (`id`, `name`, `date`, `category`) VALUES
(1, 'NSE', '2021-03-27<br>15:00~', 1),
(2, '富山ソフト(株)', '2021-03-20<br>9:00~', 1),
(3, 'ラキネス', '2021-03-12<br>13:00~', 1),
(4, 'DEMO', '2021-04-17<br>10:00~', 2),
(5, 'DEMO2', '2021-04-6<br>9:30~', 2),
(6, 'DEMO3', '2021-04-6<br>9:00~', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
