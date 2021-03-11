-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-11 04:30:38
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `company_menu`
--

CREATE TABLE `company_menu` (
  `id` int(10) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `date` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `company` varchar(30) CHARACTER SET utf8 NOT NULL,
  `category` int(10) NOT NULL,
  `explan` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `reserv` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `company_menu`
--

INSERT INTO `company_menu` (`id`, `name`, `date`, `company`, `category`, `explan`, `reserv`) VALUES
(0, '富山ソフト(株)', '2021-03-12', 'ソフトウェア/情報処理/インターネット関連', 1, '“独立系ITソリューションベンダーとして、ソフト開発、システム開発・導入・保守・運用、コンサルティングなど幅広く提供。国内に留まらず、海外市場へも業務展開”', NULL),
(1, 'NSE', '2021-03-27', 'ソフトウェア/情報処理', 1, 'NSEは情報サービス産業の中で50年以上の実績がある、独立系SI老舗企業です。<br>社員の9割が新卒からのプロパー。幅広い技術・事業分野に積極的にチャレンジできます。', NULL),
(2, '富山ソフト(株)', '2021-03-20', 'ソフトウェア/情報処理/インターネット関連', 1, '“独立系ITソリューションベンダーとして、ソフト開発、システム開発・導入・保守・運用、コンサルティングなど幅広く提供。国内に留まらず、海外市場へも業務展開”', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
