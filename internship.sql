-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 06 Cze 2022, 12:12
-- Wersja serwera: 5.7.36
-- Wersja PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `internship`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `nip` text NOT NULL,
  `del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `nip`, `del`) VALUES
(1, 'Wycieczki S.A', 'ul. Malinowa 2/5 11-213 Warszawa', '12345678912', 0),
(2, 'Biuro rachunkowe', 'ul. Gruszkowa 4, 18-213 Warszawa', '12345678231', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `diary`
--

DROP TABLE IF EXISTS `diary`;
CREATE TABLE IF NOT EXISTS `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_internship` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date_diary` date NOT NULL,
  `info` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `diary`
--

INSERT INTO `diary` (`id`, `id_internship`, `id_user`, `time`, `date_diary`, `info`, `content`) VALUES
(1, 3, 1, 6, '2022-03-01', 'brak spostrzeżeń', 'wykonywanie pracy biurowej'),
(2, 3, 1, 5, '2022-03-02', 'brak dostępu do informacji', 'Wprowadzanie danych klientów do systemu'),
(3, 4, 1, 6, '2022-03-03', 'brak', 'Pomoc w pracy codzinnej'),
(4, 3, 1, 5, '2022-03-01', 'brak', 'brak'),
(5, 3, 1, 8, '2022-04-01', 'brak', 'kserowanie dokumentów'),
(6, 4, 1, 8, '2022-04-01', 'brak', 'brak'),
(7, 3, 1, 15, '2022-04-01', 'brak', 'brak'),
(8, 3, 1, 14, '2022-04-14', 'ciekawe', 'bardzo ciekawe'),
(9, 1, 5, 8, '2022-04-15', 'brak', 'brak'),
(10, 7, 1, 1, '2022-04-15', 'ciekawe', 'Testowe praktyki w biurze rachunkowym.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `form`
--

INSERT INTO `form` (`id`, `name`, `author_id`, `enable`) VALUES
(1, 'Jakość praktyk', 5, 0),
(2, 'Intuicyjność systemu', 5, 1),
(5, 'Testowa ankieta', 11, 1),
(6, 'Testowa Ankieta 2', 11, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `form_finish`
--

DROP TABLE IF EXISTS `form_finish`;
CREATE TABLE IF NOT EXISTS `form_finish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `form_finish`
--

INSERT INTO `form_finish` (`id`, `id_form`, `id_user`) VALUES
(1, 2, 1),
(3, 1, 1),
(4, 1, 2),
(5, 2, 2),
(6, 5, 1),
(7, 5, 2),
(8, 6, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `form_table`
--

DROP TABLE IF EXISTS `form_table`;
CREATE TABLE IF NOT EXISTS `form_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `form_table`
--

INSERT INTO `form_table` (`id`, `id_form`, `name`) VALUES
(1, 1, 'Pytanie nr 1'),
(2, 1, 'Pytanie nr 2'),
(5, 1, 'Pytanie nr 3'),
(6, 5, 'Testowe pytanie 1'),
(7, 5, 'Testowe pytanie 2'),
(8, 5, 'Testowe pytanie 3'),
(9, 6, 'Testowe pytanie 1'),
(10, 6, 'Testowe pytanie 2'),
(11, 6, 'Testowe pytanie 3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `form_table_option`
--

DROP TABLE IF EXISTS `form_table_option`;
CREATE TABLE IF NOT EXISTS `form_table_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form_table` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `form_table_option`
--

INSERT INTO `form_table_option` (`id`, `id_form_table`, `name`) VALUES
(1, 1, 'Opcja 1 do Pytania 1'),
(2, 1, 'Opcja 2 do Pytania 1'),
(3, 2, 'Opcja 1 do Pytania 2'),
(4, 2, 'Opcja 2 do Pytania 2'),
(5, 2, 'Opcja 3 do Pytania 2'),
(7, 5, 'Odpowiedź nr. 1'),
(8, 5, 'Odpowiedź nr. 2'),
(9, 6, 'Odp 1'),
(10, 6, 'Odp 2'),
(11, 6, 'Odp 3'),
(12, 7, 'Odp 1'),
(13, 7, 'Odp 2'),
(14, 8, 'Odp 1'),
(15, 8, 'Odp 2'),
(16, 8, 'Odp 3'),
(17, 8, 'Odp 4'),
(18, 9, 'Odp 1'),
(19, 9, 'Odp 2'),
(21, 10, 'Odp 11'),
(22, 10, 'Odp 12'),
(23, 10, 'Odp 13'),
(24, 11, 'Odp 21'),
(25, 11, 'Odp 22'),
(26, 11, 'Odp 23'),
(27, 11, 'Odp 24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `form_value`
--

DROP TABLE IF EXISTS `form_value`;
CREATE TABLE IF NOT EXISTS `form_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_form_table` int(11) NOT NULL,
  `id_form_option` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `form_value`
--

INSERT INTO `form_value` (`id`, `id_form`, `id_user`, `id_form_table`, `id_form_option`) VALUES
(5, 1, 1, 2, 3),
(4, 1, 1, 1, 1),
(6, 1, 2, 1, 1),
(7, 1, 2, 2, 4),
(8, 5, 1, 6, 9),
(9, 5, 1, 7, 12),
(10, 5, 1, 8, 14),
(11, 5, 2, 6, 9),
(12, 5, 2, 7, 13),
(13, 5, 2, 8, 16),
(14, 6, 1, 9, 19),
(15, 6, 1, 10, 22),
(16, 6, 1, 11, 24);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `internship`
--

DROP TABLE IF EXISTS `internship`;
CREATE TABLE IF NOT EXISTS `internship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `company` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_patron` int(11) NOT NULL,
  `hours` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `internship`
--

INSERT INTO `internship` (`id`, `name`, `content`, `status`, `start_date`, `end_date`, `company`, `id_student`, `id_patron`, `hours`) VALUES
(1, 'Biuro turystyczne - pracownik biurowy', 'opis', 1, '2020-09-01', '2020-09-30', 1, 5, 2, 51),
(3, 'Salon kosmetyczny', 'opis', 3, '2020-07-06', '2020-07-29', 1, 1, 2, 53),
(4, 'Rozkładanie towaru', 'opis', 2, '2020-09-01', '2020-09-16', 1, 1, 2, 54),
(8, 'Testowe praktyki 21', 'Praktyki w biurze rachunkowym', 1, '2022-01-12', '2022-01-24', 2, 5, 2, 60),
(7, 'Testowe praktyki', 'Testowe praktyki w biurze rachunkowym.', 1, '2022-04-11', '2022-04-30', 2, 1, 2, 25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Nowe'),
(2, 'W toku'),
(3, 'Zamknięte');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `role_type` int(11) NOT NULL,
  `index_number` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `mail`, `password`, `role_type`, `index_number`) VALUES
(1, 'Jan Kowalski', 'jkowalski', 'testowy@mail.pl', '92d7ddd2a010c59511dc2905b7e14f64', 1, '23365'),
(2, 'Jan Opiekunowy', 'jkowalski2', 'opiekun@mail.pl', '92d7ddd2a010c59511dc2905b7e14f64', 2, '0'),
(10, 'Jan Kierownikowy', 'jkowalski3', 'kierownik@mail.com', '92d7ddd2a010c59511dc2905b7e14f64', 3, '0'),
(11, 'Jan Administratorowy', 'jkowalski4', 'administrator@mail.pl', '92d7ddd2a010c59511dc2905b7e14f64', 4, '0'),
(5, 'Paweł Nowak', 'pnowak', 'pnowak@o2.pl', '368f0aab6004090fa4876a22aafecff0', 1, '23324');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
