-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 02.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaianhillcipher`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`, `singkatan`, `created_at`, `updated_at`) VALUES
(1, 'Sekretariat', 'Sekretariat', '2023-06-02 09:59:49', NULL),
(2, 'Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah (P2EPD)', 'Bidang P2EPD', '2023-06-02 09:59:49', NULL),
(3, 'Bidang Pemerintahan dan Pembangunan Manusia (PPM)', 'Bidang PPM', '2023-06-02 09:59:49', NULL),
(4, 'Bidang Perekonomian dan Sumber Daya Alam (Ekonomi)', 'Bidang Ekonomi', '2023-06-02 09:59:49', NULL),
(5, 'Bidang Infrastruktur dan Kewilayahan (Infraswil)', 'Bidang Infraswil', '2023-06-02 09:59:49', NULL),
(6, 'Kepala', 'Kepala Bappeda Prov. Kaltim', '2023-06-02 09:59:49', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_non_pns`
--

CREATE TABLE `data_non_pns` (
  `id_non_pns` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_non_pns` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_sub_bidang` int(11) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nomor_bpjs_ketenagakerjaan` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `foto_non_pns` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_non_pns`
--

INSERT INTO `data_non_pns` (`id_non_pns`, `nik`, `nama_non_pns`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_bidang`, `id_sub_bidang`, `nomor_hp`, `email`, `nomor_npwp`, `tahun_masuk`, `jabatan`, `nomor_bpjs_ketenagakerjaan`, `pendidikan_terakhir`, `foto_non_pns`, `created_at`, `updated_at`) VALUES
(1, 'OA÷#);;58ð ô)', 'ÒãÆ½8Ü,øa\\:ÉK(xI\\!Å', 'Õ	(vpus', '\rK>ê\Zï!ô)', NULL, 3, 8, '+1>7B?ú&,', 'µøa\\ªè¨Z\Z»qÌ»¼û\0da\\¿d5Ñ', 'ù$*', 'õ\'ð#', 'Ø	(²}¾ÓLù­', 'ô\Z&ÿ60<6ü+2', '*}·¸ø@ñ³yrA¹a|iLù­', 'gpyvirsdyw.jpg', '2023-08-14 15:22:47', '2023-08-14 15:22:47'),
(2, 'OAø&*ú#,\nC=ð î ', '×ø)oÝ)¿us\\Î\"u0²(IÂi', 'Õ	(vpus', '\rK>î ó\'ê\Z', NULL, 5, 14, '+1A8VJú+', '\nS<	mpØÛAt', 'ô$ü%/', 'õ\'ò&', 'Ø	(²}¾ÓLù­', 'ô\Z&ÿ60?7\nDB', '*}×ø vë~.Àþpe', 'qdqxjvtopk.jpg', '2023-08-14 15:25:48', '2023-08-14 15:25:48'),
(3, 'OA÷#)68aPð î ', 'ÂÕ´ç/vgC¤¬%¥âùT#4BËbÔÊ7Î', 'Õ	(vpus', '\rK>ð#û23ê\Z', NULL, 4, 10, '+1@8ð ZI', 'upõS^¬%¥ö5h	mpØÛAt', 'ô$ü%/', 'õ\'ü15', 'ã\n2\Z¹âáQ`Ù)I]IË\nx!¡jkÝdl', 'ô\Z&ÿ60<6þ,3', '*}Üí$-È¢¾â+yrb0Î', 'izylyupoap.jpg', '2023-08-14 15:29:09', '2023-08-14 15:41:03'),
(4, 'OA÷#)DAgRð ö\",', 'Ö#+¿T;µ1¼S0¼9×«ÿR`%E}k}æ?B', 'Õ	(vpus', '\rK>ô )ü45ö\",', NULL, 1, 1, '+114\rQDLB', '¦+¿vp3Þ­ X	mpØÛAt', 'ô$ü%/', 'õ\'ø\'/', 'å	5äàQ·¸ø@ñ³yrIËi#¬z', 'ô\Z&ÿ60<6HE', '({Ïç\'º\\!Å', 'qpeondlfpm.png', '2023-08-14 15:31:03', '2023-08-14 15:31:03'),
(5, 'OA÷#)ý\'.97ð ò&', 'Â»öhò,=}ÀG¼g>ë®ÒáD#4OÔoæú', 'Õ	(vpus', 'H=ó\'íô)', NULL, 1, 1, '+1A8ö\';4', '[c\'Ô\"ÃoÞêGø%(»¼û\0da\\¿d5Ñ', '>;D@33?;ð ', 'õ\'ð#', 'Ø	(OÈ\'¶^LÌó@TeaÓ¥¤ØÚKøa\\Uïuigv\\!Å', 'ô\Z&ÿ6003ü,', '({×\'ôWV&¬¾ì2CsvZÂ', 'oicsfhzwgm.jpg', '2023-08-14 15:33:33', '2023-08-14 15:33:33'),
(6, 'OAù)+36H<ð ð#', '¸¿þÆ\'ßô#G¼g>ë®ÒáD#4EÎed5Ñ', 'Õ	(vpus', '\rK>ð#û23ê\Z', NULL, 1, 1, '75C9þ+.VG', 'ø_^ÔÅ5;ß®#ÇIêzrÏæüU', 'ô$ü%/', 'õ\'ð#', 'Ø	(²}®¥ð¾Ôé/Èyr)IlvÚ\Z³	qræY', 'ô\Z&ÿ60?7ü)1', '({×ø uê(Â7Ô¬nNà', 'osvtljayex.png', '2023-08-14 15:35:40', '2023-08-14 15:35:40'),
(7, 'OA÷#)ù%,;9ð ô)', 'Äá%3Ï¡ë5ad5Ñ', 'Õ	(vpus', '\rK>ê\Zï!ô)', NULL, 1, 1, '7584H=	E:', 'l%3Ï¡ñ!dG	mpØÛAt', 'ô$ü%/', 'õ\'î ', 'Ø	(D¥ó@TeaÓ¥¤ØÚK¸ÁüUïuigv\\!Å', 'ô\Z&ÿ6065þ.4', '({×ø uê(Â7Ô¬nNà', 'zqipbjmxyt.png', '2023-08-14 15:38:38', '2023-08-14 15:38:38'),
(8, 'OAù)+LE@8ð î ', 'ÂÝ©|të5?B', 'Õ	(vpus', '\rK>ô )ü45ö\",', NULL, 1, 1, '+1;5YFQB', '}h©\nJ?SrÏæüU', 'ô$ü%/', 'õ\'ð#', 'Ø	(²}®¥ð¾Ôé/Èyr)IlvÚ\Z³	qræY', 'ô\Z&ÿ60B8\0+3', '({×ø oxä\"®!­Zõz°E¿eÿjlºz', 'owrdrpvfqo.jpg', '2023-08-14 15:40:47', '2023-08-14 15:40:47'),
(9, 'OA÷#)=<bOð ì	', 'å\r._TÈyû\\dë5ad5Ñ', 'Õ	(vpus', '\rK>ù-0ì\rð#', NULL, 1, 1, '75C>24NB', '%­\rwv+È º§YrÏæüU', 'ô$ü%/', 'ö (ì	', 'Ø	(²}®¥ð¾Ôé/Èyr)IlvÚ\Z³	qræY', 'ö(11F@ô&', '({×ø uê(Â7Ô¬nNà', 'grapxyluvm.jpg', '2023-08-14 15:43:45', '2023-08-14 15:43:45'),
(10, 'OA÷#)FA	@9ð ð#', 'ÜýzxG¼g¨Q2²7ô­jhë5å!!«', 'Õ	(vpus', '\rK>ú/2ü45ö\",', NULL, 1, 1, '+1F:FBÿ21', ',Ó¢	aj¨ÄÈ%	mpØÛAt', 'ô$ü%/', 'õ\'ü15', 'ã\n2\Z¹âáQÐöùQ^±Ì¹-', 'ô\Z&ÿ60-2\058', '({×ø uê-Ñ¢yr', 'hbmaayihfs.jpeg', '2023-08-14 15:45:31', '2023-08-14 15:45:31'),
(11, 'OAù)+ý\'.\nA<ð ø\'/', '»Æp-M-Û¡vè\0^a\nwë52l`', 'Õ	(vpus', '\rK>÷(-ì\rð#', NULL, 1, 1, '.2\0/2LDgR', 'ûfcp;·-Û¡rñ»¼û\0da\\¿d5Ñ', 'ô$ü%/', 'õ\'ú,2', 'ã\n2\Z¹âáQØ	(ôR[òRS%E§R/¹¾ÉîLù­', 'ô\Z&ÿ60\0*1ø!,', '({Ý1¢OÔo¯', 'fuoahvasai.jpg', '2023-08-14 15:47:29', '2023-08-14 15:47:29'),
(12, 'OAú,,\0,2fNð ì	', 'ì9	sjªqï@A¾ÑîÚÛC#4á,', 'Õ	(vpus', '\rK>ð#û23ê\Z', NULL, 1, 1, '75þ)0UD96', '¨%Ó/¼Ã1rÏæüU', 'ô$ü%/', 'õ\'ð#', 'ã\n2\Z¹âáQÎÙ	qrØÚKÀÏùf[ØÆAÚ1÷öÐïýef', 'ô\Z&ÿ600348', '({×ø uê(Â7Ô¬nNà', 'ltqliucyuw.jpg', '2023-08-14 15:49:45', '2023-08-14 15:49:45'),
(13, 'OAù)++2?8ð ô)', 'Þ+ÖåPº¬ûÒ¿3#4mY', 'Õ	(vpus', 'H=ý76ê\Zð#', NULL, 1, 3, '.2ÿ12?7þ35', '²*á¤\'À	r±îrÏæüU', 'ô$ü%/', 'õ\'ò&', 'Íå%¥+º;°[\Z¶þpe', 'ô\Z&ÿ6034ø)', '({Ïç\'º_TÈÿR`uÔÍ9', 'qvypkiifox.jpg', '2023-08-14 15:51:58', '2023-08-14 15:51:58'),
(14, 'OAø&*þ-2VJð î ', 'WVs_TÈ*¼Jñ³J\0/u', 'Õ	(vpus', '\rK>ê\Zï!ô)', NULL, 1, 3, '+154M@sV', 'ö\\Y%À÷FX xKï}rÏæüU', 'ô$ü%/', 'õ\'ö\",', 'è3>zpv]NÆ{z~yf:Ô', 'ô\Z&ÿ60\0*1ú\"-', '({ÊîûR\\E×e±', 'kyiozdsdlu.jpg', '2023-08-14 15:53:47', '2023-08-14 15:53:47'),
(15, '::ú,,þ\'/^Oð ð#', 'ÄáU6¾lqà¥zkWàw§ÖëJ#4EÎed5Ñ', 'Õ	(vpus', '\rK>ò&ï!ô)', NULL, 2, 4, '+1ÿ12=8\nA?', 'l9Î«luZäUrÏæüU', 'ô$ü%/', 'õ\'ð#', 'Ø	(²}¾ÓD¥ó@TlvÚ~xrqÿlmf:Ô', 'ô\Z&ÿ6034MH', '({ë3>º@Å`¡|\\!Å', 'bttsnfnlyv.jpg', '2023-08-14 15:55:47', '2023-08-14 15:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pns`
--

CREATE TABLE `data_pns` (
  `id_pns` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama_pns` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_sub_bidang` int(11) DEFAULT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `foto_pns` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data_pns`
--

INSERT INTO `data_pns` (`id_pns`, `nik`, `nip`, `nama_pns`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_bidang`, `id_sub_bidang`, `nomor_hp`, `email`, `pangkat_golongan`, `jabatan`, `pendidikan_terakhir`, `foto_pns`, `created_at`, `updated_at`) VALUES
(1, '::ú,,þ\'/55ð ì	', '\nB;ø%+ÿ*0\ZmS÷\'ø((', '4ÞDÑdäé-Ý	=ß°T\nÂCò', 'Õ	(vpus', '\nB;ð#ï!ö\",', NULL, 6, 19, '+1<5I>ð#', '~íCT=ß°ÕQCjbÞæüU', '×\'ofWD¸®O,°|d*½mü¶Hù¬', 'ÐöûL\\%E%¯¸¡', ':Â', 'uvUrUeaaNVgtp1llVImS.jpg', '2023-08-13 01:40:26', '2023-08-13 01:40:26'),
(2, 'OA÷#)89eMð ö\",', '\nB;\nUCý\'.pUø(ó#', '·ªú¤ ³#¬ë5 tI\\!Å', '²±ôXdf:Ô', '\nB;ü45û23ô)', NULL, 1, 1, '+1<5þ1.ê\Z', '(½ðFQ^hvR	mpØÛAt', '×\'ofVA·~wÂâ8¥`Kz', 'Û.\"ÅvppSã', '*}×ø vë~.Àþpe', 'FY2SUqpiYYWJwDFIx2Mu.jpg', '2023-08-13 01:45:36', '2023-08-13 01:45:36'),
(3, 'OAø&*+2QEð ð#', '\nB;ÿ93.3pU÷\'ó#', '¤Mí-¤MrsP,´?Ú´f:Ô', 'Õ	(vpus', '\nB;ò&ø*/ü15', NULL, 1, 2, '+154><GD', '4ÕvgÜáEö]X~©Ú\nrÏæüU', 'Ø	(dlÙóùSÕFô©', 'Ëó¾¤E¿e³ö\\YòRSRær¶Ê¶+', '6¼', 'ZwVJai9UnUlkLvzKu0bB.jpg', '2023-08-13 01:52:30', '2023-08-13 01:52:30'),
(4, 'OAù)+ü&.[Kð ð#', '\nB;?5ý)/dP÷\'ò\"', 'ÈÁ	jc9Í¬Hì°Gøæú', 'Õ	(vpus', '\nB;ò&þ:7ò&', NULL, 1, 1, '+1@878VG', 'ïHQ~ïHQ;ê©Å¶&»¼û\0da\\¿d5Ñ', 'Ø	(dlOæoªwè)<glY7ÍÙóùSÕDï¦', 'Ëó¾¤Wæwò\Zg', '6¼', 'UflLgIBqevyrI6kwb5Ft.PNG', '2023-08-13 01:55:18', '2023-08-13 01:55:18'),
(5, 'OA÷#)þ%.HCð ì	', 'E<÷%\'ÿ(/^O÷\'ó#', 'ßú#O,°dfmgBÝ§Gøæú', 'Î÷df\\!Å', 'E<ê\Zø*/ø\'/', NULL, 1, 3, '+1A8PHú(0', 'vp6Ó¦ð\ZY	mpØÛAt', 'Ø	(dlQ×qÊ¡+ÊÍûm#¶O~', 'Ëó¾¤;°[\Z¶þpe', '({ÊîûR\\', 'cSayUeKkLKj9CWMfQUYi.jpg', '2023-08-13 01:56:51', '2023-08-13 01:56:51'),
(6, 'OAù)+ü,1:9ð ö\",', 'E<÷#)ö\'ñ!ø!)ò\"', '0Ú=­]ÎÁ<ø;FjcJñ³V%©å#2l`', 'ÀÏÚÎ;', 'E<î ñ$ì	', NULL, 3, 7, '.2<5:4@7', 'zòP[sóHX3Ó£åy[jbÞæüU', '×\'of*½mü¶Bê£', 'ËóÈÃ1E¿e}ÿjl~yoÝ&¶Î¯3ÃâO,°t', '*}ÊîûR\\E¿e³ö\\YòRSEÎeÊÇ>øa\\)IrtZÂ', 'v4kkQH2iNF6miw9bCBG8.jpg', '2023-08-13 02:03:59', '2023-08-13 02:03:59'),
(7, 'OAù)+þ-2A9+1ê\Z', '\nB;\097÷\'pU÷\'÷%\'', '¤Mí:¶Zäû\\d\"ÊÚßN¼Í\0ÈÈ5(*¤z', 'Õ	(vpus', '\nB;ø*/î ð#', NULL, 4, 10, '+1@867pT', 'ÐÍ8\"Êú?n¸êYt', '×\'ofVA·~wÂâ8¥`Kz', 'ºÀº#Ü,t\'ºzkiïoÝ&¶Î¯3ÃâC¤s', '*}ÃÙ,ÂÎ¯3Ü,±zk', 'B3MR1jAIQ5jvArDiLStX.PNG', '2023-08-13 02:07:15', '2023-08-13 02:07:15'),
(8, 'OAù)+9:bMð ø\'/', 'E<K=\0+0ø((ô$ô$', 'ÅÙ7Öª¾©,Îõ ©|të5e', 'Õ	(vpus', 'E<ø*/ú/2ø\'/', NULL, 4, 10, '+1ÿ81VD+1', 'yf7ÖªÌÓ:©|tßò\0da\\¿d5Ñ', 'Ø	(dlQ×qÊ¡+ÊÍûm#¶O~', 'ËóÈÃ1E¿e-¹}²î¾Ü,	qrz', '({×ø zï|qÌ¹-', 'TS0K4542efzOkRLCuxUA.PNG', '2023-08-13 02:09:11', '2023-08-13 02:09:11'),
(9, 'OAù)+ý\'.96ð ì	', 'E<ý/2þ*/ø((ó#ø%(', '¸ÁüxñðFQ0ã¢.É#42¸', 'Õ	(vpus', 'E<õ#*íô)', NULL, 4, 11, '+1A8\nG<=>', 'øa\\?p	mpØÛAt', 'Ø	(dlQ×qÊ¡+ÊÍûm#¶O~', 'ËóÈÃ1@Å`%¬5Õ©è,{wñ=R~yT\nÂä/rtäþW@Å`)ÖÀvß¾Ô	$)­¾Lù­', '({Ùô\Z3ÒnNà', 'SZs0FAPmUxEsfnGhOgez.PNG', '2023-08-13 02:11:03', '2023-08-13 02:11:03'),
(10, 'OAú,,ü&.SDð ì	', 'E<B:þ,0ö\"&ù)ö\"&', 'ÅÙzí£sVÅV%©æú', 'Ü\Z3|Uñusb0Î', 'E<ø*/ö&+ò&', NULL, 4, 12, '+1=7IA÷\"\'', '+»À[	mpØÛAt', '×\'of*½mü¶Bê£', 'ËóÈÃ1[ø{vphfÚsv.§N¼øa\\A¿a-È¢¾ÆÏø#m', '*}×ø vë~.Àþpe', 'qjolajiJZzevLzpEzmRA.jpg', '2023-08-13 02:16:59', '2023-08-13 02:16:59'),
(11, 'OA÷#)þ%.G@ð ô)', 'E<û..ÿ(/pU÷\'÷%\'', 'Ý!0tæzsÌ¹- 4#4OîV?P×', 'Ü07ì¬ØåF', 'E<ð#ô )ø\'/', NULL, 5, 13, '+132:4ø(', 'Á8æª|mÑ>FrÏæüU', '×\'ofVA·~wÂâ8¥`Kz', 'ºÀº#Ôé¶Aùµ3ÒÆú¾×\"tt¸Ì¹-', '*}Ø	(vk¾øa\\E¿eÿjlºzA¿a-È¢Ì¹-', 'CRKNbMhcFyScY2xs1vIS.jpg', '2023-08-13 02:18:38', '2023-08-13 02:18:38'),
(12, 'OAø&*ü$-56ð ð#', 'E<ö (þ*/÷%\'ó#û%+', '¶¯ú­û³YJº\ngkÿR`ë52l`', 'Õ	(vpus', 'E<î ï!ô)', NULL, 5, 13, '+1<5WFî ', 'öOZGÀýUa»¼û\0da\\¿d5Ñ', 'Ø	(dlQ×qÊ¡+ÊÍûm#¶O~', 'ËóÈÃ1@Å`ww@ñ³4æ©îÿcÂÌ\rzx{ñIX²î¾Ü,-È¢Ì¹-', '({×ø ~¥ósÈ®1è*;ØÛA', '3IsXhjju8Z8UxKfL5zaB.jpg', '2023-08-13 02:20:38', '2023-08-13 02:20:38'),
(13, 'OAù)+ý)/43ð ð#', 'E<ü,1ý)/pU÷\'ö\"&', 'ÄÝ\rklàé3K^#ÑU\"¨ð_(¦dù', 'Õ	(vpus', 'E<õ#*ì\rò&', NULL, 5, 14, '+154ù#+hP', '¢tLÙ\"Z	mpØÛAt', 'äõ', 'ËóÈÃ1@Å`ww@ñ³4æ©îÿcýEP\0ob)IÔàMÆÖiïggÕ!ªó@Tf:Ô', '*}·¸ø@ñ³yriïggÕ÷Z\\vk¾ì<', '2oveiOpuDutT3Jrs45ok.jpg', '2023-08-13 02:22:19', '2023-08-13 02:22:19'),
(14, 'OA÷#)ú)/UGð ô)', 'H=\0;5ô%ù+)ø(÷%\'', 'ì6?dcÍðFQ|qctüm`Jñ³V%©æú', 'Õ	(vpus', 'H=ô )÷(-ê\Z', NULL, 5, 15, '+1@8+1û++', '	{rs¸ösóHX~o\'Æ»¼û\0da\\¿d5Ñ', 'Ø	(dlÙóùSÕFô©', 'ËóÈÃ1@Å`ww@ñ³4æ©îÿcÃÏ&¹ùIZ7È©¾øa\\E¿e3à¥Ì¹-', '({Ý1¢OÔo¯', 'N2tlfVonu1HKgYSTjB8X.png', '2023-08-13 02:25:15', '2023-08-13 02:25:15'),
(15, 'OAú,,89\nD?ð ü15', 'E<ù)+ý\'.pUø(ô$', 'ä6L#­+È |të5k\Zå#k\Z', 'ÐôÆ°\'', 'E<î õ#*ô)', NULL, 2, 4, '+1þ)075\nD<', '*µqÞ	L¸êYt', '×\'ofVA·~wÂâ8¥`Kz', 'ºÀÈÃ1E¿e³ö\\YòRSE¿e}uszw²î¾×Þ#ØÚK×\'ôWV&¬¾¯¦ó', '*}×ø vë~.Àþpe', 'Z6OGkUmbnWqljNkqUPg1.jpg', '2023-08-13 02:27:06', '2023-08-13 02:27:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_12_13_113215_users_table', 1),
(5, '2023_01_07_153824_add_username_column_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_bidang`
--

CREATE TABLE `sub_bidang` (
  `id_sub_bidang` int(11) NOT NULL,
  `nama_sub_bidang` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sub_bidang`
--

INSERT INTO `sub_bidang` (`id_sub_bidang`, `nama_sub_bidang`, `singkatan`, `id_bidang`, `created_at`, `updated_at`) VALUES
(1, 'Sub Bagian Umum', 'Umum', 1, '2023-06-02 09:59:50', NULL),
(2, 'Sub Bagian Perencanaan Program', 'PRK', 1, '2023-06-02 09:59:50', NULL),
(3, 'Sub Bagian Keuangan', 'Keuangan', 1, '2023-06-02 09:59:50', NULL),
(4, 'Sub Bidang Perencanaan dan Pendanaan', 'Sub Bidang Perencanaan dan Pendanaan', 2, '2023-06-02 09:59:50', NULL),
(5, 'Sub Bidang Analisis Data dan Informasi', 'Sub Bidang Analisis Data dan Informasi', 2, '2023-06-02 09:59:50', NULL),
(6, 'Sub Bidang Pengendalian, Evaluasi dan Pelaporan', 'Sub Bidang Pengendalian, Evaluasi dan Pelaporan', 2, '2023-06-02 09:59:50', NULL),
(7, 'Sub Bidang Pengembangan Sumber Daya Manusia', 'Sub Bidang Pengembangan Sumber Daya Manusia', 3, '2023-06-02 09:59:50', NULL),
(8, 'Sub Bidang Kesejahteraan Rakyat', 'Sub Bidang Kesejahteraan Rakyat', 3, '2023-06-02 09:59:50', NULL),
(9, 'Sub Bidang Pemerintahan', 'Sub Bidang Pemerintahan', 3, '2023-06-02 09:59:50', NULL),
(10, 'Sub Bidang Pertanian dan Perikanan', 'Sub Bidang Pertanian dan Perikanan', 4, '2023-06-02 09:59:50', NULL),
(11, 'Sub Bidang Industri, Perdagangan, Koperasi, Investasi dan Pariwisata', 'Sub Bidang Industri, Perdagangan, Koperasi, Investasi dan Pariwisata', 4, '2023-06-02 09:59:50', NULL),
(12, 'Sub Bidang Sumber Daya Alam dan Lingkungan Hidup', 'Sub Bidang Sumber Daya Alam dan Lingkungan Hidup', 4, '2023-06-02 09:59:50', NULL),
(13, 'Sub Bidang Infrastruktur Kebinamargaan dan Perhubungan', 'Sub Bidang Infrastruktur Kebinamargaan dan Perhubungan', 5, '2023-06-02 09:59:50', NULL),
(14, 'Sub Bidang Infrastruktur Sumber Daya Air dan Kewilayahan', 'Sub Bidang Infrastruktur Sumber Daya Air dan Kewilayahan', 5, '2023-06-02 09:59:50', NULL),
(15, 'Sub Bidang Infrastruktur Keciptakaryaan dan Permukiman', 'Sub Bidang Infrastruktur Keciptakaryaan dan Permukiman', 5, '2023-06-02 09:59:50', NULL),
(19, 'Kepala', 'Kepala', 6, '2023-08-13 01:42:32', '2023-08-13 01:42:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `level`, `foto_user`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', NULL, '$2y$10$CeSWGmbXbqiVCT03HNfIR.U.zpov0OoEVNga..w6Oa3pHKSSEYvEu', NULL, 1, '11ed9758-2c66-4757-bdcb-be287eb6d926.jpg', '2023-01-07 07:47:25', '2023-06-21 09:13:16'),
(2, 'Member2', 'member2@mail.com', 'member2', NULL, '$2y$10$NWlg/hOsM6mtuzXGBRnDVerouJv51Tiht47RBrnuocS6TdFJJ2yCW', NULL, 2, 'stretched-1360-768-1068176.png', '2023-06-21 08:15:10', '2023-06-21 09:05:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `data_non_pns`
--
ALTER TABLE `data_non_pns`
  ADD PRIMARY KEY (`id_non_pns`);

--
-- Indeks untuk tabel `data_pns`
--
ALTER TABLE `data_pns`
  ADD PRIMARY KEY (`id_pns`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sub_bidang`
--
ALTER TABLE `sub_bidang`
  ADD PRIMARY KEY (`id_sub_bidang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_non_pns`
--
ALTER TABLE `data_non_pns`
  MODIFY `id_non_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `data_pns`
--
ALTER TABLE `data_pns`
  MODIFY `id_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sub_bidang`
--
ALTER TABLE `sub_bidang`
  MODIFY `id_sub_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
