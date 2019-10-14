-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38-log - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test`;

-- Дамп структуры для таблица test.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test.logs: ~35 rows (приблизительно)
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`id`, `lastname`, `name`, `login`, `pass`, `email`, `type`, `dates`) VALUES
	(0, 'ivanon', 'sdsadsa', 'dsassa', 'test', '123sda@mailruy', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadas', 'admin', 'test', 'sdas@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'еуые', 'ывыф', '12321', 'выфы', 'sdsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12321', 'sadsadsa', 'dassadsa', 'sadsasa@sadsa', 'Добавлен пользователь', '2019-10-14'),
	(0, 'еуывф', 'ыфвфы', 'выфвыфыф', 'sdsasds', 'sdadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12312', 'sdsadsa', 'sdasasa', 'sdsaa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12312', 'sdsadsa', 'sdasasa', 'sdsaa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12312', 'sdsadsa', 'sdasasa', 'sdsaa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'es', 'saas', 'sadsasda', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'es', 'saas', 'sadsasda', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', 'sdas', 'sadsa', 'sdasadas', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', 'sdas', 'sadsa', 'sdasadas', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', 'sdas', 'sadsa', 'sdasadas', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tess', 'sadsadsa', 'sadsadsa', 'sadsasa', 'dsdasadsa@mail.ry', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12321', 'sdsa', 'sadassad', 'asdsa@mail.ryu', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12321', 'sdsa', 'sadassad', 'asdsa@mail.ryu', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', '12321', 'sdsa', 'sadassad', 'asdsa@mail.ryu', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadsa', 'sadsa', 'saddsa', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadsa', 'sadsa', 'saddsa', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadsa', 'sadsa', 'saddsa', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadsa', 'sadsa', 'saddsa', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sadsa', 'sadsa', 'saddsa', 'sadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'test', 'test', '123', 'sdasadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'test', 'test', '123', 'sdasadsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tesdsa', 'sadsad', 'sdasdsa', 'sadsa', 'sdasas@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tesdsa', 'sadsad', 'sdasdsa', 'sadsa', 'sdasas@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', '123', 'sadsa', 'asdsa', 'asdsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'еуы', 'ывфыф', 'ыфвыф', 'выфвфы', 'sdsasa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'еуы', 'ывфыф', 'ыфвыф', 'выфвфы', 'sdsasa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', 'sdsa', 'sadsa', 'sadsasa', 'sadsaa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tes', 'sdsa', 'sadsa', 'sadsasa', 'sadsaa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'test', 'sdsadsa', 'sadsa', 'sadsda', 'asdsa@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'etsad', 'asdsadsa', 'sadsasad', 'asdsadsa', 'sdas@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tesdas', 'aasdasa', 'dsasa', 'asdsa@mail.', 'asdsadsa2@mail.ru', 'Добавлен пользователь', '2019-10-14'),
	(0, 'tesdas', 'aasdasa', 'dsasa', 'asdsa@mail.', 'asdsadsa2@mail.ru', 'Удален пользователь', '2019-10-14');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Дамп структуры для таблица test.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test.user: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
