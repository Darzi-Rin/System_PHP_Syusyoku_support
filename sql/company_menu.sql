-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-13 06:49:15
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
(1, 'NSE', '2021-03-27', 'ソフトウェア/情報処理', 1, 'NSEは情報サービス産業の中で50年以上の実績がある、独立系SI老舗企業です。<br>社員の9割が新卒からのプロパー。幅広い技術・事業分野に積極的にチャレンジできます。', NULL),
(2, '富山ソフト(株)', '2021-03-20', 'ソフトウェア/情報処理/インターネット関連', 1, '“独立系ITソリューションベンダーとして、ソフト開発、システム開発・導入・保守・運用、コンサルティングなど幅広く提供。国内に留まらず、海外市場へも業務展開”', NULL),
(3, 'ラキネス', '2021-03-12<br>13:00~', 'セキュリティ/ソフトウェア/情報処理/専用コンサルティング　', 1, '社会を支えるIT システムとそのセキュリティを担うことで、安心・安全な高度情報ネットワーク社会の実現やその発展に貢献します!!', NULL),
(4, 'DEMO', '2021-04-17<br>10:00~', 'カメラ/通信/医療用機器/各種製造', 2, '眼で見たままを極限まで再現する映像表現の追及にとどまらず、ああらゆる技術や表現方法を駆使して、人間の能力を超えた「まだ見ぬ世界」を切り開くべく技術を開発し、事業を展開していきます。', NULL),
(5, 'DEMO2', '2021-04-6<br>9:30~', '各種ビジネスサービス・BPO/人材派遣・人材紹介', 2, '当社は会社生活において成長しようとする社員を応援し、ライフイベントとの両立を図りながらも存分に能力が発揮できる環境作りを目指しています。<br>また、キャリアアップの機会を提供し、成長と飛躍を実現する', NULL),
(6, 'DEMO3', '2021-04-6<br>9:00~', '証券', 2, '「信頼」「付加価値」「得意分野」を経営理念とし、お客さまの信頼のもとで業務を行っております。資産運用のアドバイザーとして、対面による個人顧客への金融商品の販売と株式売買を行います。', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
