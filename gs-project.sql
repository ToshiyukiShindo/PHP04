-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 1 月 29 日 09:50
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs-project`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `owner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `goal` text COLLATE utf8_unicode_ci NOT NULL,
  `target` int(100) NOT NULL,
  `imageurl` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `otherdescription` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `projects`
--

INSERT INTO `projects` (`id`, `owner`, `title`, `category`, `goal`, `target`, `imageurl`, `otherdescription`, `created_at`) VALUES
(1, 'hiroyukishindo@test.com', 'J2へ駆け抜けろ！', 'スポーツ', '現時点ではJ３で戦っている我々ですが、本気でJ2を目指しています！ぜひご支援ください！！', 2000000, '/php_04/asset/relax.png', 'test text test', '2022-01-27'),
(2, 'hiroyukishindo@test.com', '船橋市ならではの伝統工芸を作りませんか？', '地方創生', '船橋市は都会ならではの良さもありながら、深く掘っていくと歴史深い地域です。既存の伝統工芸を見直す形で、新しい船橋市ならではを作ることが目標です。', 2000000, '/php_04/asset/タオル.png', 'test test test', '2022-01-27'),
(5, 'hiroyukishindo@test.com', 'デザートが美味しくなるスプーン作ります！', '食事', 'アイスクリームを食べやすいスプーン、スープが飲みやすいスプーンなど、美味しくご飯が食べられるスプーンが欲しい人は必見です！', 100000, '/php_04/asset/ティースプーン.png', 'test', '2022-01-28'),
(6, 'kasumishindo@test.com', 'test', 'test', 'test', 200000, '/php_04/asset/ウォーフォルブック.png', 'test', '2022-01-28'),
(8, 'kasumishindo@test.com', 'yosakoiそーらんで楽しもう！', 'スポーツ', 'よさこいそーランをご存知ですか？よさこいは皆ができるダンスだけでなく、年齢を超えた交流もできる非常に価値ある活動です。一体感を得るためにユニフォームを作り、もっと地域が元気になる活動をしていきます！！', 200000, '/php_04/asset/test.png', 'test', '2022-01-29');

-- --------------------------------------------------------

--
-- テーブルの構造 `project_support`
--

CREATE TABLE `project_support` (
  `p_support_id` int(100) NOT NULL,
  `project_id` int(100) NOT NULL,
  `support_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `support_amount` int(100) NOT NULL,
  `s_imageurl` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `project_support`
--

INSERT INTO `project_support` (`p_support_id`, `project_id`, `support_title`, `support_amount`, `s_imageurl`, `description`, `created_at`) VALUES
(1, 2, 'test support', 10000, '/php_04/asset/pot.png', 'こちらのポットをプレゼント！', '2022-01-28'),
(2, 1, '君ももうサポーターだ！', 20000, '/php_04/asset/relax2.png', 'チームのオフィシャルユニフォームをプレゼント！', '2022-01-28'),
(3, 6, 'test support', 10000, '/php_04/asset/clock-speaker.png', 'test', '2022-01-28'),
(4, 6, 'test2', 10000, '/php_04/asset/クッション.png', 'test', '2022-01-28'),
(5, 6, 'test3', 5000, '/php_04/asset/ティースプーン.png', 'test', '2022-01-28'),
(6, 5, 'test support', 5000, '/php_04/asset/がまぐちトトロ.png', 'テスト', '2022-01-29');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `useremail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `nickname`, `useremail`, `password`) VALUES
(1, 'Hiroyuki Shindo', 'hiro', 'hiroyukishindo@test.com', '$2y$10$Zqdj2qcMCNS8NA/09SQ3duwcwD91g/Lfxj/xWgt6x4IaoPMy6hXjO'),
(2, 'Kasumi Shindo', 'Kasumi', 'kasumishindo@test.com', '$2y$10$tN/bGm5wyqIpqBUxhdXry.4AP5EtecMiC8j7aFGrFM4zuxYSLDLyW'),
(3, 'Nao Shindo', 'Nao', 'naoshindo@test.com', '$2y$10$x2mZ1x3gW5fv2coGsytHgu5ZbyMqLtIaD.b3GmL2DHtCnCDR.xntK');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_supports`
--

CREATE TABLE `user_supports` (
  `id` int(100) NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(100) NOT NULL,
  `p_support_id` int(100) NOT NULL,
  `support_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `support_amount` int(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_supports`
--

INSERT INTO `user_supports` (`id`, `user_email`, `project_id`, `p_support_id`, `support_title`, `support_amount`, `created_at`) VALUES
(1, 'hiroyukishindo@test.com', 1, 2, '君ももうサポーターだ！', 20000, '2022-01-28'),
(2, 'hiroyukishindo@test.com', 2, 1, 'test support', 10000, '2022-01-28'),
(3, 'hiroyukishindo@test.com', 1, 2, '君ももうサポーターだ！', 20000, '2022-01-28'),
(4, 'kasumishindo@test.com', 2, 1, 'test support', 10000, '2022-01-28'),
(5, 'kasumishindo@test.com', 6, 5, 'test3', 5000, '2022-01-28'),
(6, 'kasumishindo@test.com', 1, 2, '君ももうサポーターだ！', 20000, '2022-01-28'),
(7, 'hiroyukishindo@test.com', 1, 2, '君ももうサポーターだ！', 20000, '2022-01-29'),
(8, 'hiroyukishindo@test.com', 5, 6, 'test support', 5000, '2022-01-29'),
(9, 'hiroyukishindo@test.com', 5, 6, 'test support', 5000, '2022-01-29'),
(10, 'hiroyukishindo@test.com', 6, 5, 'test3', 5000, '2022-01-29'),
(11, 'kasumishindo@test.com', 5, 6, 'test support', 5000, '2022-01-29'),
(12, 'hiroyukishindo@test.com', 1, 2, '君ももうサポーターだ！', 20000, '2022-01-29');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `project_support`
--
ALTER TABLE `project_support`
  ADD PRIMARY KEY (`p_support_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_supports`
--
ALTER TABLE `user_supports`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `project_support`
--
ALTER TABLE `project_support`
  MODIFY `p_support_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `user_supports`
--
ALTER TABLE `user_supports`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
