-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-08 15:48:46
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
-- データベース: `test`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
