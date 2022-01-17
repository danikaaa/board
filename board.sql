-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.4.22-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- db 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db`;

-- 테이블 db.board 구조 내보내기
CREATE TABLE IF NOT EXISTS `board` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 db.board:~18 rows (대략적) 내보내기
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` (`no`, `name`, `pw`, `title`, `content`, `date`, `view`, `file`) VALUES
	(4, '감자', '$2y$10$T9I4ny6xJWv4emBhmSWfM.r.YsqazImegutwsKLkdLI', '발시렵다', '고구마는 맛있아', '2021-12-27', 45, NULL),
	(15, '페이징', '$2y$10$Z0L0wBqi6qX9a8JRb2im3OmYjNpX87UM6F2bzGr.zc.', '페이징', '페이징을 해볼게여오오호롷', '2021-12-28', 3, ''),
	(16, '코로롱', '$2y$10$BHIgPWvvKIGDPGIIH7YDtO3eVsBUSuJ23Rtb0KhQ3Nd', '오늘은', '오늘은 여전히 발이 시렵다', '2021-12-28', 5, ''),
	(17, '국밥', '$2y$10$1tFuXxdRG/uohOHj7Kwa0eLKGvSTW7XqmGovfuLzWXe', '국밥', '오늘 점심은 국밥 냠냠냠냔ㅁ', '2021-12-28', 2, ''),
	(18, '아아', '$2y$10$maRRpWN6rstwNKHrIjEM3uLJKEOJdIhiJvMtOjp4m7O', '추운날 ', '아이스아메리카노 ', '2021-12-28', 3, ''),
	(25, '이이잉', '$2y$10$xw0MwesovloWkiOXYSOQV.FuNJKj9CjjQxI49UxLweT', '이주일', '이주일', '2021-12-28', 9, ''),
	(26, '고감', '$2y$10$e7IboLuSuJlCH/PvZ8AEIeQ/GwgkVW6qHAl0HimTlL7', '페이징이 잘되네', '일단 잘되는구만', '2021-12-28', 7, ''),
	(27, '이잉', '$2y$10$c/Q8BEgQ.rbB3jfVon/YYujmBewN20LuDoUge8NBEsM', '이이이잉ㅇ', '이이이잉', '2021-12-28', 33, ''),
	(28, '파이이리', '$2y$10$rwIyREIPPus9neNs1sEChOxASFbRSWyGlSNogbhXeJn', '파일ㅇ 아아', '파일만 제대로 하자', '2021-12-28', 7, 'cat.jpg'),
	(29, '캣ㅋ캣', '$2y$10$OJSci2tO/0tNo3LIau/zqueHDVLl7iTGc2jyoqF3xPF', '파일파일', '어하우하오로롤', '2021-12-28', 2, ''),
	(30, '아아', '$2y$10$JzTatEC4NAgijyNcnhhsdeVFaa0di8M.xARKLUbbncZ', '파일아', '파일ㅈ아ㅏㅇ마', '2021-12-28', 7, ''),
	(31, '감자자가', '$2y$10$roYGGYNYDrgfUFFN7dliTOCvUFMKbiZIJsKmscZFxTr', '감자돌이', '퍄알;', '2021-12-29', 13, ''),
	(32, 'rndndn', '$2y$10$XlgEBDcPj1V2E3FvQQOg4.vniTxqM0pnQchay6GHT/5', 'dsafadf', 'sdafs', '2021-12-29', 6, ''),
	(34, '작성자', '$2y$10$MOFPnwxTjb0rNLpG01/Zyeu.pYAVxCkYQGzffGU.TZi', '음음', 'ㅇㄻㅇㄹㅇㄴㄻ', '2021-12-29', 4, ''),
	(35, 'wrwr', '$2y$10$u/QNWiH3RiS0HuBqvqnzT.pK1KJuxnk6vu9MdvqK.iP', 'ysadad', 'ahsfasdasf', '2021-12-29', 13, ''),
	(40, 'ㅈㄷㅂ', '$2y$10$B5tLiC.cBAXSqtjCeoCZsOp9xpNdVcT5iZ5KMiQpiDD', '파일 된다구!', '꺄학', '2021-12-29', 20, 'cat.jpg'),
	(46, '고양휘', '1234', '냐옹~', '고양이를 보라구', '2021-12-29', 84, 'cat.jpg'),
	(51, '궁금하쥐?', '1234', '들어와!', '귀엽지! 나는 고야잉!', '2021-12-29', 77, 'adfc.jpg');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;

-- 테이블 db.reply 구조 내보내기
CREATE TABLE IF NOT EXISTS `reply` (
  `rno` int(11) NOT NULL AUTO_INCREMENT,
  `bno` int(11) NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`rno`),
  KEY `FK_reply_board` (`bno`),
  CONSTRAINT `FK_reply_board` FOREIGN KEY (`bno`) REFERENCES `board` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 db.reply:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
