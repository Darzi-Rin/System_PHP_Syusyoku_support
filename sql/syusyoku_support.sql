-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-17 18:55:29
-- サーバのバージョン： 10.4.14-MariaDB
-- PHP のバージョン: 7.4.11

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
-- テーブルの構造 `company_data`
--

CREATE TABLE `company_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `プロフィール` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `事業内容` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `本社情報` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `設立` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `株式` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `資本金` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `売上高` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `従業員数` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `事業所` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `関連子会社` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `主要取引先` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `company_data`
--

INSERT INTO `company_data` (`id`, `name`, `プロフィール`, `事業内容`, `本社情報`, `設立`, `株式`, `資本金`, `売上高`, `従業員数`, `事業所`, `関連子会社`, `主要取引先`) VALUES
(0, '富山ソフト', '■『日本のモノづくり』に大きく寄与してきた確かな技術力！　/n\r\n/n\r\n創業以来、「挑戦と創造」を掲げてきた当社は、常に高みを目指し、多種多様なお客様の問題解決や事業拡大に貢献してきました。その数は数千数万を超え、当社は確かな技術力とノウハウを蓄積してきました。擁するエンジニアは約6,000名。当社は今まで約47年間で培ってきた技術力と提案力をもとに、今後は日本国内のみならず、世界に向けて新たなITを発信していきます。/n\r\n/n\r\n■『AIS-CRM』/n\r\n/n\r\n富山ソフトは「AI」「IoT」「Security」「Cloud」「Robot」 「Mobile&AutoMotive」といった最先端の技術分野に積極的に取り組み、組込制御系・業務系に偏らず蓄積した技術と経験で、幅広いビジネス領域で世の中のICTをリード。 また、これらの技術と業務ノウハウを組み合わせて、コミュニケーションロボット「PALRO」、ペーパレス会議システム「moreNOTE」をはじめ、より付加価値の高いサービス、プロダクトの創出を実現しています。個性豊かな富士ソフトグループのシナジーや広がり続けるグローバルネットワークで、提案力強化を更に加速させこれからも成長を続けていきます/n', '＜グローバル競争の時代を勝ち抜くビジネスを支える業務・制御システムの提供＞/n\r\n/n\r\n流通、金融、製造、通信等グループを含めた業務アプリケーション開発技術を持っており、これらを組み合わせることで競争力のある高付加価値サービスを創造し、お客様の価値と競争力向上に貢献しています。/n\r\n/n\r\n＜「AIS-CRM」でネット時代に対応する高付加価値サービスを提供＞/n\r\n/n\r\nビジネスのできなかったをできるに変える「いつでも、どこでも、つながる世界」を実現。/n\r\n富山ソフトがもつ、組み込み/制御系・業務系ノウハウが、今までにない付加価値を生み出すことで、新しいビジネスチャンスを創造します。ネットワーク時代に不可欠な、先進ソフトウェア・ハードウェアの提供をはじめ、スマートフォン・タブレット、最新ロボットテクノロジー、スマートハウス、デジタル家電など、付加価値の高いプロダクトを融合させ提供することで、ビジネスから皆さんの生活、社会インフラに至るまでITの技術で貢献しています。/n', '231-8008/n\r\n神奈川県横浜市中区桜木町1-1/n\r\n0120-009-969（フリーダイヤル）/n', '1970年5月15日', '東証一部上場', '262億28万円', '単体：1,640億9,400万円 /n連結：2,409億5,', '単体：8,163名/n連結：1', '本社／神奈川県横浜市 /n\r\n国内事業所／北海道、関東圏内、近畿地方、九州地方、沖縄 /n\r\n海外事業所／台湾、韓国、アメリカ /n', 'サクバネットシステム(株)、(株)フィンクス、サインネッコム(株)', '以下の各業界を代表するメーカー及びユーザー約10,000社と取引実績があります/n\r\n製造、通信、銀行、証券、生損保、流通、医療、商社、電力、サービス、官庁、地方自治体、各種団体など/n');

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
(3, 'DEMO', '2021-03-12<br>13:00~', 1),
(4, 'DEMO.2', '2021-04-17<br>10:00~', 2),
(5, 'DEMO.3', '2021-04-6<br>9:30~', 2),
(6, 'DEMO.4', '2021-04-6<br>9:00~', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `demo_booking`
--

CREATE TABLE `demo_booking` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `demo_booking`
--

INSERT INTO `demo_booking` (`id`, `name`, `date`) VALUES
(1, 'NSE', '2021-03-27 15:00～'),
(2, '富士ソフト(株)', '2021-03-20 9:00～'),
(3, 'DEMO', '2021-03-12 13:00～'),
(4, 'DEMO.2', '2021-04-17 10:00～'),
(5, 'DEMO.3', '2021-04-6 9:30～'),
(6, 'DEMO.4', '2021-04-6 9:00～');

-- --------------------------------------------------------

--
-- テーブルの構造 `syusyoku_status`
--

CREATE TABLE `syusyoku_status` (
  `status_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `syusyoku_status`
--

INSERT INTO `syusyoku_status` (`status_id`, `status`) VALUES
(1, 'エントリー'),
(2, '説明会参加'),
(3, '筆記試験'),
(4, '面接'),
(5, '内定');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `street_address` text NOT NULL,
  `mail` text NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `street_address`, `mail`, `age`) VALUES
(1, '菊池颯太', 'pass', '茨城県うずら野', 'kikuchi@gmail.com', 18),
(2, 'テスト', 'pass', '千葉県', 'test@gmail.com', 19),
(3, 'ほげ', 'pass', '東京都', 'hoge@gmail.com', 20),
(5, 'a', 'a', 'a', 'a@a', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `yoyaku`
--

CREATE TABLE `yoyaku` (
  `yoyaku_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `yoyaku`
--

INSERT INTO `yoyaku` (`yoyaku_id`, `name`, `date`, `company`) VALUES
(1, '菊池颯太', '2021-03-26', '会社１'),
(2, '菊池颯太', '2021-03-27 15:00～', 'NSE'),
(3, 'ほげ', '2021-03-20 9:00～', '富士ソフト(株)'),
(4, '菊池颯太', '2021-03-12 13:00～', 'DEMO'),
(5, 'a', '2021-03-27 15:00～', 'NSE');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `demo_booking`
--
ALTER TABLE `demo_booking`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `syusyoku_status`
--
ALTER TABLE `syusyoku_status`
  ADD PRIMARY KEY (`status_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `yoyaku`
--
ALTER TABLE `yoyaku`
  ADD PRIMARY KEY (`yoyaku_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルのAUTO_INCREMENT `yoyaku`
--
ALTER TABLE `yoyaku`
  MODIFY `yoyaku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
